#!/bin/sh
#
# AvantFAX install script for SLES 10
# This script will configure /etc/sudoers and the HylaFAX hyla.conf, config, config.<devid> files
# Only run once
#

echo "Checking for installed applications"

# CHECK IF HYLAFAX IS INSTALLED
hyla=`which sendfax`
if [ "$?" -ne "0" ]; then
  echo You must install and configure HylaFAX first
  exit
fi

# CHECK FOR IMAGEMAGICK
check=`rpm -qa | grep ImageMagick`
if [ ! "$check" ]; then
  echo "You must install ImageMagick first (rpm located on SLES10 SDK DVD)"
  exit
fi

# CHECK FOR GCC
check=`rpm -qa | grep gcc`
if [ ! "$check" ]; then
  echo "You must install C/C++ Compiler and Tools"
  exit
fi

. sles-prefs.txt

# INSTALL REQUIRED APPS IF NOT ALREADY INSTALLED
yast --install giflib tiff apache2-mod_php5 php5-mbstring php5-pear php5-mysql php5-devel libpng ghostscript-library ghostscript-fonts-std ghostscript-fonts-other sudo netpbm autoconf file-devel file rsync

# INSTALL REQUIRED PHP PACKAGES
pear5 channel-update pear.php.net
pear5 upgrade-all
pear5 install Mail Net_SMTP Mail_mime MDB2_driver_mysql
pecl install fileinfo

echo "Installing AvantFAX and configuring HylaFAX"

## SETUP SMARTY
chmod 0770 avantfax/includes/templates/admin_theme/templates_c/ avantfax/includes/templates/admin_theme/cache/  avantfax/includes/templates/main_theme/templates_c/ avantfax/includes/templates/main_theme/cache/
chown $HTTPDUSER:$HTTPDGROUP avantfax/includes/templates/admin_theme/templates_c/ avantfax/includes/templates/admin_theme/cache/  avantfax/includes/templates/main_theme/templates_c/ avantfax/includes/templates/main_theme/cache/

chmod 0755 avantfax/includes/faxcover.php avantfax/includes/faxrcvd.php avantfax/includes/notify.php avantfax/tools/update_contacts.php avantfax/tools/faxcover.php avantfax/includes/avantfaxcron.php avantfax/includes/dynconf.php

cp avantfax/includes/local_config-example.php avantfax/includes/local_config.php

# SETUP AVANTFAX JOBFMT

cat >> /etc/hylafax/hyla.conf << EOF

#
## JobFmt for AvantFAX
#
JobFmt: "%-3j %3i %1a %15o %40M %-12.12e %5P %5D %7z %.25s"

EOF

# START SERVICES ON BOOT

/sbin/chkconfig apache2 on
/sbin/chkconfig hylafax on

/sbin/chkconfig mysql on
/sbin/chkconfig dbus on
/sbin/chkconfig haldaemon on

# INSTALL AVANTFAX

mv avantfax $INSTDIR
chown -R $HTTPDUSER.$HTTPDGROUP $INSTDIR
chmod -R 0770 $INSTDIR/tmp $INSTDIR/faxes
chmod -R 777 $INSTDIR/tmp $INSTDIR/faxes

# CONFIGURE AVANTFAX VIRTUALHOST

cat > /etc/apache2/vhosts.d/avantfax.conf << EOF
<VirtualHost *:80>
    ServerAdmin root@${FAXDOMAIN}
    ServerName $FAXDOMAIN
    DocumentRoot $INSTDIR
    ErrorLog /var/log/apache2/avantfax-error_log
    CustomLog /var/log/apache2/avantfax-access_log combined
    HostnameLookups Off
    UseCanonicalName Off
    ServerSignature On

# PHP OPTIONS
    php_admin_value file_uploads 1
    php_admin_value upload_max_filesize 40M
    php_admin_value post_max_size 40M

    <Directory "$INSTDIR">
        Options -Indexes FollowSymLinks
        AllowOverride None
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>

EOF

# START MYSQL AND APACHE

/sbin/service mysql start
/sbin/service apache2 start

# IMPORT MYSQL DATABASE

echo "## Creating AF MySQL database ##"
mysql --user=root --password=$ROOTMYSQLPWD -e "GRANT ALL ON $DB.* TO $USER@localhost IDENTIFIED BY \"$PASS\"" mysql
mysqladmin --default-character-set=utf8 --user=$USER --password=$PASS create $DB
mysql --user=$USER --password=$PASS $DB < create_tables.sql
mysqlshow --user=$USER --password=$PASS $DB


# SYMLINK AVANTFAX SCRIPTS

ln -s $INSTDIR/includes/faxrcvd.php $SPOOL/bin/faxrcvd.php
ln -s $INSTDIR/includes/dynconf.php $SPOOL/bin/dynconf.php
ln -s $INSTDIR/includes/notify.php  $SPOOL/bin/notify.php

echo "CoverCmd:		$INSTDIR/includes/faxcover.php" >> /etc/hylafax/sendfax.conf

# FIX FILEINFO

#ln -s /usr/share/file/magic* /usr/share/misc/

# SETUP SUDO PERMISSIONS

cat /etc/sudoers | grep -v requiretty > /tmp/sudoers
echo "$HTTPDUSER ALL= NOPASSWD: /sbin/reboot, /sbin/halt, /usr/sbin/faxdeluser, /usr/sbin/faxadduser -u * -p * *" >> /tmp/sudoers

if [ ! -f /etc/sudoers.orig ]; then
  mv /etc/sudoers /etc/sudoers.orig
fi
mv /tmp/sudoers /etc/sudoers
chmod 0440 /etc/sudoers
chown root.root  /etc/sudoers

# Make backup of HylaFAX configuration

mkdir $SPOOL/etc/abackup
cp $SPOOL/etc/config* $SPOOL/etc/abackup/

# CONFIGURE MODEMS TO USE AVANTFAX

for i in `ls $SPOOL/etc/config.*`; do
if [ "$i" != "$SPOOL/etc/config.sav" ]; then
  if [ "$i" != "$SPOOL/etc/config.devid" ]; then
    tilde=`echo $i | grep '~'`
    if [ "$?" -eq "1" ]; then
      if [ ! -L $i ]; then
cat >> $i << EOF

#
## AvantFAX
#
FaxRcvdCmd:     bin/faxrcvd.php
DynamicConfig:  bin/dynconf.php
UseJobTSI:      true

EOF
      fi
    fi
  fi
fi
done

cat >>  $SPOOL/etc/config << EOF

#
## AvantFAX
#
NotifyCmd:      bin/notify.php

EOF

# ADD MODEMS TO DATABASE

for i in `ls $SPOOL/etc/config.*`; do
if [ "$i" != "$SPOOL/etc/config.sav" ]; then
  if [ "$i" != "$SPOOL/etc/config.devid" ]; then
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


echo "Symlinking php5 to php"

ln -s /usr/bin/php5 /usr/bin/php

echo -e "Installation complete\n\n"

IP=`/sbin/ifconfig eth0 | grep "inet addr" | awk -F' ' '{print $2}' | awk -F':' '{print $2}'`

echo -e "Log into the Administrative interface at: http://$IP/admin/"
echo -e "Username: admin\nPassword: password"

# DONE #