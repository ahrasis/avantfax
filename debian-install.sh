#!/bin/sh
#
# AvantFAX install script for Debian
# This script will configure /etc/sudoers and the HylaFAX hyla.conf, config, config.<devid> files
# Only run once
#

# CHECK IF HYLAFAX IS INSTALLED

echo "Checking for HylaFAX installation"

hyla=`which sendfax`
if [ "$?" -ne "0" ]; then
  echo You must install and configure HylaFAX first
  exit
fi

. ./debian-prefs.txt

# INSTALL REQUIRED NGINX PACKAGES

echo "Installing required packages"

apt -y install libapr1 libaprutil1 libsqlite3-0 imagemagick netpbm libnetpbm10-dev libungif-bin libtiff5-dev:i386 libtiff5-dev sudo php-mail php-mail-mime php-db psutils wdiff rsync postfix 

pear channel-update pear.php.net
pear upgrade-all
pear install -f Mail Net_SMTP Mail_mime MDB2_driver_mysql

echo "Installing AvantFAX and configuring HylaFAX"

## SETUP SMARTY
chmod 0770 avantfax/includes/templates/admin_theme/templates_c/ avantfax/includes/templates/admin_theme/cache/  avantfax/includes/templates/main_theme/templates_c/ avantfax/includes/templates/main_theme/cache/
chown $HTTPDUSER:$HTTPDGROUP avantfax/includes/templates/admin_theme/templates_c/ avantfax/includes/templates/admin_theme/cache/  avantfax/includes/templates/main_theme/templates_c/ avantfax/includes/templates/main_theme/cache/

chmod 0755 avantfax/includes/faxcover.php avantfax/includes/faxrcvd.php avantfax/includes/notify.php avantfax/tools/update_contacts.php avantfax/tools/faxcover.php avantfax/includes/avantfaxcron.php avantfax/includes/dynconf.php

cp avantfax/includes/local_config-example.php avantfax/includes/local_config.php

echo "CoverCmd:		$INSTDIR/includes/faxcover.php" >> /etc/hylafax/sendfax.conf

# SETUP AVANTFAX JOBFMT

cat >> /etc/hylafax/hyla.conf << EOF

#
## JobFmt for AvantFAX
#
JobFmt: "%-3j %3i %1a %15o %40M %-12.12e %5P %5D %7z %.25s"

EOF

# INSTALL AVANTFAX

mv avantfax $INSTDIR
chown -R $HTTPDUSER.$HTTPDGROUP $INSTDIR
chmod -R 0770 $INSTDIR/tmp $INSTDIR/faxes
chown -R $HTTPDUSER.uucp $INSTDIR/tmp $INSTDIR/faxes

# PLEASE CONFIGURE AVANTFAX VIRTUALHOST FOR NGINX MANUALLY
# NOTE THAT AVANTFAX SUPPORT IS UP TO PHP5 ONLY

<<"COMMENT"
        location /avantfax {
                root /var/www/;
                index index.php index.html index.htm;
                location ~ ^/avantfax/(.+\.php)$ {
                        try_files $uri =404;
                        root /var/www/;
                        # include /etc/nginx/fastcgi_params;
                        fastcgi_pass unix:/var/run/php/php5.6-fpm.sock;
                        fastcgi_param HTTPS $fastcgi_https; # <-- add this line fastcgi_paramHTTPS on;
                        fastcgi_index index.php;
                        fastcgi_param SCRIPT_FILENAME $request_filename;
                        include /etc/nginx/fastcgi_params;
                        fastcgi_param PATH_INFO $fastcgi_script_name; # <-- disabled if causing access problem
                        fastcgi_buffer_size 128k;
                        fastcgi_buffers 256 4k;
                        fastcgi_busy_buffers_size 256k;
                        fastcgi_temp_file_write_size 256k;
                        fastcgi_intercept_errors on;
                }
                location ~* ^/avantfax/(.+\.(jpg|jpeg|gif|css|png|js|ico|html|xml|txt))$ {
                        root /var/www/;
                }
        }
        location /fax {
                rewrite ^/* /avantfax last;
COMMENT
				
# RESTART NGINX
service nginx restart

# IMPORT MYSQL DATABASE

service mysql restart

echo "## Creating AvantFAX MySQL database ##"
mysql --user=root --password=$ROOTMYSQLPWD -e "GRANT ALL ON $DB.* TO $USER@localhost IDENTIFIED BY \"$PASS\"" mysql
mysqladmin --default-character-set=utf8 --user=$USER --password=$PASS create $DB
mysql --user=$USER --password=$PASS $DB < create_tables.sql
mysqlshow --user=$USER --password=$PASS $DB

# SYMLINK AVANTFAX SCRIPTS

ln -s $INSTDIR/includes/faxrcvd.php $SPOOL/bin/faxrcvd
ln -s $INSTDIR/includes/dynconf.php $SPOOL/bin/dynconf
ln -s $INSTDIR/includes/notify.php  $SPOOL/bin/notify

# FIX FILEINFO

ln -s /usr/share/file/magic* /usr/share/misc/

# SETUP SUDO PERMISSIONS

echo "Setting up sudo"

cat /etc/sudoers | grep -v requiretty > /tmp/sudoers
echo "$HTTPDUSER ALL= NOPASSWD: /sbin/reboot, /sbin/halt, /usr/sbin/faxdeluser, /usr/sbin/faxadduser -u * -p * *" >> /tmp/sudoers
mv /etc/sudoers /etc/sudoers.orig
mv /tmp/sudoers /etc/sudoers
chmod 0440 /etc/sudoers
chown root.root  /etc/sudoers

# Make backup of HylaFAX configuration

mkdir /etc/hylafax/backups
cp /etc/hylafax/config* /etc/hylafax/backups/

# CONFIGURE MODEMS TO USE AVANTFAX

for i in `ls /etc/hylafax/config.*`; do
if [ "$i" != "/etc/hylafax/config.sav" ]; then
  if [ "$i" != "/etc/hylafax/config.devid" ]; then
    tilde=`echo $i | grep '~'`
    if [ "$?" -eq "1" ]; then
      if [ ! -L $i ]; then
cat >> $i << EOF

#
## AvantFAX
#
FaxRcvdCmd:     bin/faxrcvd
DynamicConfig:  bin/dynconf
UseJobTSI:      true

EOF
      fi
    fi
  fi
fi
done

cat >>  /etc/hylafax/config << EOF

#
## AvantFAX
#
NotifyCmd:      bin/notify

EOF

# ADD MODEMS TO DATABASE

for i in `ls /etc/hylafax/config.*`; do
if [ "$i" != "/etc/hylafax/config.sav" ]; then
  if [ "$i" != "/etc/hylafax/config.devid" ]; then
    tilde=`echo $i | grep '~'`
    if [ "$?" -eq "1" ]; then
      if [ -f $i ]; then
        modem=`echo $i | awk -F'/' '{print $6}' | awk -F'.' '{print $2}'`

        # ADD MODEMS TO AVANTFAX DATABASE
        mysql --user=$USER --password=$PASS -e "INSERT INTO Modems SET device='$modem', alias ='$modem'" $DB

        echo "Configuring $modem for AvantFAX"
      fi
    fi
  fi
fi
done

# ADD CRONTAB ENTRIES

echo "Setting up /etc/cron.d/avantfax"
printf "0 0 * * *\t$INSTDIR/includes/avantfaxcron.php -t 2\n" > /etc/cron.d/avantfax

echo -e "Installation complete\n\n"

#IP=`/sbin/ifconfig eth0 | grep "inet addr" | awk -F' ' '{print $2}' | awk -F':' '{print $2}'`

echo -e "Log into the Administrative interface at: http://`hostname -f`:8080/avantfax/admin/"
echo -e "Username: admin\nPassword: password"
# DONE #
