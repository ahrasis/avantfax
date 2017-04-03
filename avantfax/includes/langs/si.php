<?php
/**
 * AvantFAX - "Web 2.0" HylaFAX management
 *
 * PHP 5 only
 *
 * @author		David Mimms <david@avantfax.com>
 * @copyright	2005 - 2007 MENTALBARCODE Software, LLC
 * @copyright	2007 - 2008 iFAX Solutions, Inc.
 * @license		http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

$LANGUAGE = "si";
$LANGUAGE_NAME = "Slovenian";

$LANG = array();

$LANG['ISO'] = "charset=UTF-8";

$LANG['DIRECTION'] = "ltr";

$LANG['YES'] = "Da";
$LANG['NO'] = "Ne";

$LANG['DATE'] = "Datum";
$LANG['FROM'] = "Od";
$LANG['TO'] = "Za";

$LANG['DATE_START'] = "Datum začetka";
$LANG['DATE_END'] = "Datum konca";

$LANG['TO_PERSON'] = "Za osebo";
$LANG['TO_COMPANY'] = "Za podjetje";
$LANG['TO_LOCATION'] = "Do lokacije";
$LANG['TO_VOICENUMBER'] = "Za telefonsko številko";

$LANG['MY_COMPANY'] = "Podjetje";
$LANG['MY_LOCATION'] = "Lokacija";
$LANG['MY_VOICENUMBER'] = "Telefonska številka";
$LANG['MY_FAXNUMBER'] = "številka faksa";

$LANG['VIEW_FAX'] = "Poglej faks";
$LANG['ROTATE_FAX'] = "Zavrti faks";
$LANG['DOWNLOAD_PDF'] = "Naloži PDF";
$LANG['DOWNLOAD_TIFF'] = "Naloži TIFF";
$LANG['EMAIL_PDF'] = "Pošlji PDF";
$LANG['ADD_NOTE_FAX'] = "Dodaj opombo";
$LANG['ARCHIVE_FAX'] = "Prestavi v arhiv";
$LANG['DELETE_FAX'] = "Trajno izbriši";

$LANG['DELETE_CONFIRM'] = "Prosim potrdite, če želite trajno izbrisati to faks sporočilo.";

$LANG['ASSIGN_CNAME'] = "Določite ime podjetja";
$LANG['ASSIGN_MISSING'] = "Prosim vnesite ime podjetja";
$LANG['ASSIGN_NOTE'] = "Spremenite opombo / opis";
$LANG['ASSIGN_NOTE_SAVED'] = "Opomba / opis shranjen.";
$LANG['ASSIGN_OK'] = "Ime podjetja je bilo uspešno določeno.";
$LANG['FAXES'] = "faksi";

$LANG['NAME'] = "Ime";
$LANG['DESCRIPTION'] = "Opis";
$LANG['SAVE'] = "Shrani";
$LANG['DELETE'] = "izbriši";
$LANG['CANCEL'] = "Prekliči";
$LANG['CREATE'] = "Ustvari";
$LANG['EMAIL'] = "Epošta";
$LANG['SELECT'] = "Izberi";
$LANG['CONTACT_SAVED'] = "Podatki kontakta shranjeni";
$LANG['CONTACT_DELETED'] = "Kontakt izbrisan";
$LANG['RUBRICA_SAVED'] = "Podatki podjetja so shranjeni";
$LANG['RUBRICA_DELETED'] = "Podjetje je izbrisano";

$LANG['FAX_FILES'] = "Izberite datoteke za pošiljanje";
$LANG['FAX_DEST'] = "Faks številka destinacije";
$LANG['FAX_CPAGE'] = "Uporabi naslovno stran";
$LANG['FAX_REGARDING'] = "Glede";
$LANG['FAX_COMMENTS'] = "Komentarji";
$LANG['FAX_FILETYPES'] = "Priložite lahko naslednje vrste datotek: ".SENDFAXFILETYPES;
$LANG['FAX_FILE_MISSING'] = "Prosim izberite datoteko za pošiljanje";
$LANG['FAX_DEST_MISSING'] = "Prosim vnesite faks številko destinacije";
$LANG['FAX_SUBMITTED'] = "Vaše sporočilo je pripravljeno za pošiljanje.<br />O dostavi sporočila boste obveščeni na epošto.";
$LANG['FAX_FILESIZE'] = "Velikost datoteke je večja od dovoljene.";
$LANG['FAX_MAXSIZE'] = "Največja velikost datoteke je $SF_MAXSIZE";
$LANG['NOTIFY_REQUEUE'] = "Obvesti ob prerazvrstitvi";

$LANG['FUPLOAD_NO_FILE'] = "Ni naložene datoteke";
$LANG['FUPLOAD_NOT_ALLOWED'] = "Tip datoteke ni dovoljen";
$LANG['FUPLOAD_OVER_LIMIT'] = "Datoteka je prevelika";
$LANG['FUPLOAD_OVER_LIMIT_INI'] = "Datoteka je prevelika (INI)";
$LANG['FUPLOAD_OVER_LIMIT_FORM'] = "Datoteka je prevelika (FORM)";
$LANG['FUPLOAD_NOT_COMPLETE'] = "Datoteka se še ni naložila";
$LANG['FUPLOAD_NO_TEMPDIR'] = "Manjka začasna mapa";
$LANG['FUPLOAD_CANT_WRITE'] = "Ne morem zapisati naložene datoteke";

$LANG['YOUR_NAME'] = "Vaše ime";
$LANG['UPDATE'] = "Posodobitev";
$LANG['USER_DETAILS_SAVED'] = "Uporabniške nastavitve so shranjene.";

$LANG['LANGUAGE'] = "Jezik";
$LANG['EMAIL_SIG'] = "E-poštni podpis";

$LANG['NEXT_FAX'] = "Naslednji Faks";
$LANG['PREV_FAX'] = "Prejšniji Faks";

$LANG['LOGIN_TEXT'] = "Vnesite svoje uporabniško ime in geslo za dostop do vmesnika.";
$LANG['LOGIN_DISABLED'] = "Vaš račun je bil onemogočen.  Prosim kontaktirajte administratorja";
$LANG['LOGIN_INCORRECT'] = "Nepravilno geslo in uporabniško ime.<br />Prosim poskusite ponovno.";
$LANG['LOGIN_ALT_FAILED'] = "Neuspešna prijava za %s.  Ask your admin to verify that the account exists in AvantFAX.Prosite administratorja da preveri ali na AvantFax-u obstaja račun.";
$LANG['ACCESS_DENIED'] = "Dostop zavrnjen";

$LANG['USERNAME'] = "uporabniško ime";
$LANG['PASSWORD'] = "geslo";
$LANG['USER'] = "Uporabnik";
$LANG['BUTTON_LOGIN'] = "Prijava";
$LANG['BUTTON_LOGOUT'] = "Odjava";
$LANG['BUTTON_SETTINGS'] = "Nastavitve";

$LANG['MENU_MENU'] = "Meni";
$LANG['MENU_INBOX'] = "Prejeto";
$LANG['MENU_OUTBOX'] = "Poslano";
$LANG['MENU_SENDFAX'] = "Pošlji faks";
$LANG['MENU_ARCHIVE'] = "Arhiv";
$LANG['MENU_CONTACTS'] = "Kontakti";

$LANG['SELECT_ALL_FAXES'] = "Izberi vse fakse";
$LANG['FAXES_PER_PAGE']  = "faksi na stran";
$LANG['INBOX_SHOW'] = "Prejeto - prikaži";
$LANG['ARCHIVE_SHOW'] = "Arhiv - prikaži";

$LANG['CONTACT_HEADER_EMAIL'] = "Elektronski naslov";
$LANG['CONTACT_HEADER_FAX'] = "Faks";
$LANG['CONTACT_HEADER_COMPANY'] = "Podjetje";
$LANG['CONTACT_HEADER_NEWFAX'] = "Nova številka faksa";
$LANG['CONTACT_HEADER_FAXNUM'] = "Številka faksa";
$LANG['NEW_ENTRY'] = "Nov vnos";
$LANG['UPLOAD_CONTACTS'] = "Naloži datoteko kontaktov ".CONTACTFILETYPES;
$LANG['CONTACTS_UPLOADED'] = "Uspešno naloženi %d kontakti";
$LANG['UPLOAD_BUTTON'] = "Naloži";

$LANG['SEND_EMAIL_HEADER'] = "Posreduj faks po elektronski pošti";
$LANG['EMAIL_RECIPIENTS'] = "Prejemniki elektronske pošte";
$LANG['EMAIL_CCRECIPIENTS'] = "Prejemniki elektronske pošte (CC)";
$LANG['EMAIL_BCCRECIPIENTS'] = "Prejemniki elektronske pošte (BCC)";
$LANG['MESSAGE_PROMPT'] = "Elektronsko sporočilo";
$LANG['BUTTON_SEND'] = "Pošlji";
$LANG['SUBJECT'] = "Predmet";
$LANG['PDF_FILENAME'] = "Ime PDF datoteke";

$LANG['EMAIL_SUCCESS'] = "Elektronsko sporočilo je bilo uspešno poslano.";
$LANG['EMAIL_FAILURE'] = "Elektronsko sporočilo ni bilo uspešno poslano.";

$LANG['PN_PAGE'] = "Stran";
$LANG['PN_PAGE_UP'] = "Prejšnja stran";
$LANG['PN_PAGE_DN'] = "Naslednja stran";
$LANG['PN_PAGES'] = "Strani";
$LANG['PN_OF'] = "od";
$LANG['NUM_DIALS'] = "Klici";
$LANG['KILL_JOB'] = "Ustavi proces";

$LANG['PROMPT_CLOSEWINDOW'] = "Zapri okno";

$LANG['LAST_UPDATED'] = "Nazadnje posodobljeno";
$LANG['BACK'] = "Nazaj";
$LANG['EDIT'] = "Uredi";
$LANG['ADD'] = "Dodaj";
$LANG['WARNCAT'] = "Prosim izberite kategorijo";
$LANG['TITLE'] = "Naslov";
$LANG['CATEGORY'] = "Kategorija";
$LANG['CATEGORY_NAME'] = "Ime kategorije";

$LANG['LAST_MOD'] = "Nazadnje spremenjeno";

$LANG['MONTHS'] = array("");
$LANG['MONTHS'][] = "Januar";
$LANG['MONTHS'][] = "Februar";
$LANG['MONTHS'][] = "Marec";
$LANG['MONTHS'][] = "April";
$LANG['MONTHS'][] = "Maj";
$LANG['MONTHS'][] = "Junij";
$LANG['MONTHS'][] = "Julij";
$LANG['MONTHS'][] = "Avgust";
$LANG['MONTHS'][] = "September";
$LANG['MONTHS'][] = "Oktober";
$LANG['MONTHS'][] = "November";
$LANG['MONTHS'][] = "December";

$LANG['ERROR_PASS'] = "Oprostite, ni bilo najdenih ustreznih uporabnikov.";
$LANG['NEWPASS_MSG'] = "Uporabniški račun %s se veže na ta elektronski naslov.  Spletni uporabnik od %s je pravkar zahteval novo geslo.

Vaše novo geslo je: %s

Če je prišlo do napake se vpišite z novim geslom in potem nastavite geslo, ki ga želite imeti.";

$LANG['ADMIN_NEWPASS_MSG'] = "Administratorjevo geslo računa je bilo ponastavljeno v:\n\t%s\n od uporabnika %s";

$LANG['REGWARN_MAIL'] = "Prosim vnesite veljaven elektronski račun.";
$LANG['REGWARN_PASS'] = "Prosim vnesite veljavno geslo.  Brez presledkov, več kot ".MIN_PASSWD_SIZE." znakov in vsebujejo 0-9, a-z, A-Z.";
$LANG['REGWARN_VPASS2'] = "Gesli se ne ujemata, prosim poskusite ponovno.";
$LANG['REGWARN_USERNAME_INUSE'] = "Uporabniško ime je že v uporabi. Prosim poskusite z novim.";

$LANG['USER_UPDATE_ERROR'] = "Napaka pri posodabljanju računa";
$LANG['PASS_TOO_LONG'] = "Predolgo geslo";
$LANG['PASS_TOO_SHORT'] = "Prekratko geslo";
$LANG['PASS_ALREADY_USED'] = "To geslo je že v uporabi.  Prosim ustvarite novega.";
$LANG['PASS_ERROR_CHANGING'] = "Napaka pri spreminjanju gesla";
$LANG['PASS_ERROR_RESETTING'] = "Napaka pri ponastavljanju gesla";
$LANG['ERROR_SENDING_EMAIL'] = "Elektronsko sporočilo ni bilo uspešno poslano";
$LANG['REGWARN_USERNAME'] = "V uporabniškem imenu so dovoljene samo številke in črke.";
$LANG['REGWARN_NOUSERNAME'] = "Vpišite uporabniško ime";
$LANG['REGWARN_MAIL_EXISTS'] = "Elektronski račun je že v uporabi.";

$LANG['LOST_PASSWORD'] = "Ste pozabili geslo?";

$LANG['PROMPT_UNAME'] = "Uporabniško ime";
$LANG['PROMPT_PASSWORD'] = "Geslo";
$LANG['PROMPT_CAN_REUSE_PWD'] = "Uporabnik lahko ponovno uporabi stara gesla";
$LANG['REPLY_TO_FAX'] = "Odgovori na faks";
$LANG['REPLY_TO_FAX_TIP'] = "Originalni faks bo prvi dokument, ki bo poslan po naslovnici";
$LANG['PROMPT_EMAIL'] = "Elektronski naslov";
$LANG['BUTTON_SEND_PASS'] = "Pošlji geslo";
$LANG['REGISTER_VPASS'] = "Preveri geslo";
$LANG['FIELDS_REQUIRED'] = "Polja označena z asterisk (*) so zahtevana.";

$LANG['NEW_PASS_DESC'] = "Prosimo vnesite svoj elektronski naslov in pritisnite na gumb Pošlji geslo.<br /><br />V kratkem boste prejeli novo geslo.<br /><br />Uporabite novo geslo za dostop do strani.<br /><br />";
$LANG['NEW_ADMIN_PASS_DESC'] = "Vnesite vaše uporabniško ime in elektronski naslov, Potem pritisnite na gumb Pošlji geslo.<br /><br />V kratkem boste prejeli novo geslo.<br /><br />";
$LANG['RESETTING_PASSWORD'] = "Vaše geslo bo poslano na dani elektronski naslov.<br /><br />Ko prejmete novo geslo se lahko prijavite in ga spremenite.<br /><br />";

$LANG['SEARCH_TITLE'] = "Išči";
$LANG['KEYWORDS'] = "Ključne besede";
$LANG['COMPANY_SEARCH'] = "Iskanje podjetja";
$LANG['COMPANY_LIST'] = "Spisek podjetij";
$LANG['SENT_RECVD'] = "Poslano / Prejeto";
$LANG['BOTH_SENT_RECVD'] = "Prejeti in poslani faksi";
$LANG['ONLY_MY_SENT'] = "Samo poslani faksi";
$LANG['ONLY_RECVD'] = "Samo prejeti faksi";
$LANG['CONCLUSION'] = "Skupno %d najdenih zadetkov.";
$LANG['NOKEYWORD'] = "Ni bilo zadetkov";

$LANG['SEARCH_WHITEPAGES'] = "Išči prazne strani";

$LANG['PWD_NEEDS_RESET'] = "Vaše geslo mora biti spremenjeno preden nadaljujete.";
$LANG['PWD_REQUIREMENTS'] = "Geslo mora vsebovati najmanj ".MIN_PASSWD_SIZE." znakov.";
$LANG['OPASS'] = "Staro geslo";
$LANG['NPASS'] = "Novo geslo";
$LANG['VPASS'] = "Preveri geslo";
$LANG['OPASS_WRONG'] = "Staro geslo ni pravilno.";
$LANG['NAME_MISSING'] = "Vpisati morate ime.";

$LANG['MODIFY_FAXNUMS'] = "Spremeni številke faksov podjetij";
$LANG['MODIFY_EMAILS'] = "Spremeni knjigo elektronskih naslovov";
$LANG['TITLE_FAXNUMS'] = "Številke faksov";
$LANG['TITLE_EMAILS'] = "Elektronski naslovi";

$LANG['TITLE_DISTROLIST'] = "Seznami";
$LANG['DISTROLIST_NAME'] = "Ime seznama";
$LANG['DISTROLIST_DELETE'] = "Izbriši seznam";
$LANG['DISTROLIST_CONFIRM_DELETE'] = "Ali izbrišem ta seznam?";
$LANG['DISTROLIST_SAVENAME'] = "Shrani ime seznama";

$LANG['CHANGES_SAVED'] = "Spremembe shranjene";
$LANG['DISTROLIST_DELETED'] = "Seznam izbrisan";
$LANG['DISTROLIST_NOT_CREATED'] = "Seznam ni ustvarjen";
$LANG['DISTROLIST_EXISTS'] = "Seznam že obstaja";
$LANG['DISTROLIST_ENTER_LISTNAME'] = "Vpišite ime seznama";
$LANG['DISTROLIST_ADD'] = "Dodaj vnose";
$LANG['DISTROLIST_REMOVE'] = "Odstrani vnose";
$LANG['DISTROLIST_REFRESH_LIST'] = "Osveži vnose";

$LANG['NEW_USER_MESSAGE_SUBJECT'] = "Podatki novega uporabnika";
$LANG['NEW_USER_MESSAGE'] = "Pozdravljeni %s,

To elektronsko sporočilo vsebuje vaše uporabniško ime in geslo za prijavo na AvantFAX (http://%s)

Uporabniško ime - %s
Geslo - %s

Sporočilo je zgolj informativne narave, zato nanj ne odgovarjajte.";

$LANG['DIDROUTE_EXISTS'] = "Pot že obstaja";
$LANG['DIDROUTE_NOT_CREATED'] = "Pot še ni bila ustvarjena";
$LANG['DIDROUTE_NO_ROUTES'] = "Nobenih DID/DTMF poti še ni bilo ustvarjenih";
$LANG['DIDROUTE_DOESNT_EXIST'] = "Pot %s ne obstaja";
$LANG['ADMIN_PRINTER'] = "Tiskalnik";
$LANG['PRINT'] = "Natisni";

$LANG['ADMIN_DIDROUTE_CREATED'] = "Pot je bila ustvarjena";
$LANG['ADMIN_DIDROUTE_DELETED'] = "Pot je bila izbrisana";
$LANG['ADMIN_DIDROUTE_UPDATED'] = "Pot je bila posodobljena";
$LANG['ADMIN_DIDROUTES'] = "DID/DTMF skupine poti";
$LANG['DIDROUTE_ROUTECODE'] = "DID/DTMF številke";
$LANG['DIDROUTE_CATCHALL'] = "Ujemi vse";
$LANG['ADMIN_CONFDIDROUTING'] = "DID/DTMF Skupine";
$LANG['GROUP'] = "Skupina";

$LANG['USER_ANYMODEM'] = "Uporabnik lahko faksira z vsakega modema";

$LANG['BARCODEROUTE_BARCODE'] = "Črtna koda";
$LANG['MISSING_BARCODE'] = "Manjkajoča črtna koda";
$LANG['ADMIN_BARCODEROUTE_DELETED'] = "Pot črtne kode izbrisana";
$LANG['ADMIN_BARCODEROUTE_UPDATED'] = "Pot črtne kode posodobljena";
$LANG['ADMIN_BARCODEROUTE_CREATED'] = "Pot črtne kode ustvarjena";
$LANG['BARCODEROUTE_NOT_CREATED'] = "Pot črtne kode ni ustvarjena";
$LANG['BARCODEROUTE_EXISTS'] = "Pot črtne kode že obstaja";
$LANG['BARCODEROUTE_NO_ROUTES'] = "Ni poti črtne kode";
$LANG['BARCODEROUTE_DOESNT_EXIST'] = "Pot črtne kode %s ne obstaja";

$LANG['FAXCAT_NOT_CREATED'] = "Kategorija faksa '%s' ni bila ustvarjena";
$LANG['FAXCAT_ALREADY_EXISTS'] = "Kategorija faksa '%s' že obstaja";

$LANG['FAX_FAILED'] = "Težave s pošiljanjem faksa.";
$LANG['FAX_WHY']["done"] = "Končano";
$LANG['FAX_WHY']["format_failed"] = "oblikovanje ni uspelo";
$LANG['FAX_WHY']["no_formatter"] = "ni oblikovalca";
$LANG['FAX_WHY']["poll_no_document"] = "v pomnilniku ni dokumenta";
$LANG['FAX_WHY']["killed"] = "ustavljen";
$LANG['FAX_WHY']["rejected"] = "zavrnjen";
$LANG['FAX_WHY']["blocked"] = "blokiran";
$LANG['FAX_WHY']["removed"] = "odstranjen";
$LANG['FAX_WHY']["timedout"] = "čas je potekel";
$LANG['FAX_WHY']["poll_rejected"] = "dostop do pomnilnika zavrnjen";
$LANG['FAX_WHY']["poll_failed"] = "dostop do pomnilnika ni uspel";
$LANG['FAX_WHY']["requeued"] = "v čakalni vrsti";

$LANG['COMPANY_EXISTS'] = "Ime podjetja že obstaja";
$LANG['FAXNUMID_NOT_CREATED'] = "Ne morem ustvariti ID faksa";
$LANG['NO_COMPANY_FOR_FAXNUM'] = "Pod to številko faksa ni nobenega podjetja";
$LANG['CANT_CHANGE_FAXNUM'] = "Ne morete spremeniti ustvarjene številke faksa";

$LANG['MODEM_EXISTS'] = "Modem že obstaja";
$LANG['MODEM_NOT_CREATED'] = "Modem še ni bil ustvarjen";
$LANG['NO_MODEMS_CONFIGURED'] = "Ni nastavljenih modemov";
$LANG['MODEM_DOESNT_EXIST'] = "Modem %s ne obstaja";

$LANG['COVER_EXISTS'] = "Naslovnica že obstaja";
$LANG['COVER_NOT_CREATED'] = "Naslovnica še ni bila ustvarjena";
$LANG['NO_COVERS_CONFIGURED'] = "Ni še nastavljenih naslovnic";
$LANG['COVER_DOESNT_EXIST'] = "Naslovnica %s ne obstaja";

$LANG['ADMIN_FAXCAT_DELETED'] = "Kategorija je bila izbrisana";
$LANG['ADMIN_FAXCAT_CREATED'] = "Kategorija je bila ustvarjena";
$LANG['ADMIN_FAXCAT_UPDATED'] = "Kategorija je bila posodobljena";

$LANG['ADMIN_MODEM_CREATED'] = "Modem je bil ustvarjen";
$LANG['ADMIN_MODEM_DELETED'] = "Modem je bil izbrisan";
$LANG['ADMIN_MODEM_UPDATED'] = "Modem je bil posodobljen";

$LANG['ADMIN_COVER_CREATED'] = "Naslovna stran je bila ustvarjena";
$LANG['ADMIN_COVER_DELETED'] = "Naslovna stran je bila izbrisana";
$LANG['ADMIN_COVER_UPDATED'] = "Naslovna stran je bila posodobljena";

$LANG['FAXFREE'] = "Nedejaven";
$LANG['FAXSEND'] = "Pošiljanje faksa";
$LANG['FAXRECV'] = "Prejemanje faksa";
$LANG['FAXRECVFROM'] = "Prejemanje faksa od";

$LANG['MODEM_DEVICE'] = "Naprava";
$LANG['MODEM_CONTACT'] = "Kontakt";
$LANG['MODEM_ALIAS'] = "Vzdevek";

$LANG['COVER_FILE'] = "Ime datoteke";
$LANG['COVER_TITLE'] = "Naslov naslovne strani";
$LANG['SELECT_COVERPAGE'] = "Izberi naslovno stran";

$LANG['MISSING_CATEGORY_NAME'] = "Vnesite naslov kategorije";
$LANG['MISSING_DEVICE_NAME'] = "Vnesite naslov naprave";
$LANG['MISSING_ALIAS_NAME'] = "Vnesite vzdevek";
$LANG['MISSING_CONTACT_NAME'] = "Vnesite ime kontakta";
$LANG['MISSING_ROUTE'] = "Vnesite DID/DTMF številko";

$LANG['MISSING_FILE_NAME'] = "Vnesite ime datoteke";
$LANG['MISSING_TITLE_NAME'] = "Vnesite naziv";

$LANG['ADMIN_CONFIGURE'] = "Nastavi...";
$LANG['ADMIN_USERS'] = "Uporabniki";
$LANG['ADMIN_NEW_USER'] = "Novi uporabnik";
$LANG['ADMIN_EDIT_USER'] = "Spremeni uporabnika";
$LANG['ADMIN_DEL_USER'] = "Izbriši uporabnika";
$LANG['ADMIN_LAST_LOGIN'] = "Zadnja prijava";
$LANG['ADMIN_LAST_IP'] = "Zadnji IP";
$LANG['ADMIN_USER_LIST'] = "Lista uporabnikov";
$LANG['ADMIN_FAXCATS'] = "Kategorije faksa";
$LANG['ADMIN_CONFMODEMS'] = "Modemi";
$LANG['ADMIN_CONFCOVERS'] = "Naslovne strani";

$LANG['ADMIN_ROUTING_BY'] = "Nastavi usmerjanje z...";
$LANG['ADMIN_ROUTEBY_SENDER'] = "Usmerjanje pošiljatelja";
$LANG['ADMIN_ROUTEBY_SENDER_SHORT'] = "Pošiljatelj";
$LANG['ADMIN_ROUTEBY_BARCODE'] = "Usmerjanje s črtno kodo";
$LANG['ADMIN_ROUTEBY_BARCODE_SHORT'] = "Črtna koda";
$LANG['ADMIN_ROUTEBY_KEYWORD'] = "Usmerjanje s ključnimi besedami";
$LANG['ADMIN_ROUTEBY_KEYWORD_SHORT'] = "Ključna beseda";

$LANG['ADMIN_DASHBOARD'] = "Pregledna plošča";
$LANG['ADMIN_STATS'] = "Statistika";
$LANG['ADMIN_SYSLOGS'] = "Sistemski zapisi";
$LANG['ADMIN_SYSFUNC'] = "Sistemske funkcije";
$LANG['ADMIN_NOUSERS'] = "Ni ustvarjenih uporabnikov";
$LANG['ADMIN_ACC_ENABLED'] = "Račun aktiven";
$LANG['ADMIN_PWDCYCLE'][] = "Potekel cikel gesla";
$LANG['ADMIN_PWDCYCLE'][] = "Nikoli";
$LANG['ADMIN_PWDCYCLE'][] = "Vsake 3 mesece";
$LANG['ADMIN_PWDCYCLE'][] = "Vsakih 6 mesecev";
$LANG['ADMIN_PWDEXP'] = "Datum poteka gesla";
$LANG['SUPERUSER'] = "Glavni uporabnik";
$LANG['IS_ADMIN'] = "Administrator";
$LANG['USER_CANDEL'] = "Uporabnik lahko izbriše fakse";
$LANG['ADMIN_FAXLINES'] = "Vidne linije faksa";
$LANG['ADMIN_CATEGORIES'] = "Vidne kategorije faksa";
$LANG['REBOOT'] = "Ponovno zašeni strežnik";
$LANG['SHUTDOWN'] = "Ugasni strežnik";
$LANG['DOWNLOADARCHIVE'] = "Naloži arhivo";
$LANG['DOWNLOADDB'] = "Naloži baze podatkov";
$LANG['PLSWAIT'] = "Prosim počakajte";
$LANG['LOGTEXT'] = "Informacije o zapisih";
$LANG['QUESTION_DELUSER'] = "Ste prepričani, da želite izbrisati";

$LANG['TSI_ID'] = "TSI ID";
$LANG['PRIORITY'] = "Prioriteta";
$LANG['BLACKLIST'] = "Črna lista";
$LANG['MODIFY_FAXJOB'] = "Spremeni mesto";
$LANG['NEW_DESTINATION'] = "Nova destinacija";
$LANG['SCHEDULE_FAX'] = "Razpored dostave";
$LANG['FAX_NUMTRIES'] = "Število poizkusov";
$LANG['FAX_KILLTIME'] = "Ustavi proces";
$LANG['NOW'] = "Sedaj";
$LANG['MINUTES'] = "Minute";
$LANG['HOURS'] = "Ure";
$LANG['DAYS'] = "Dnevi";

$LANG['ADMIN_CONFDYNCONF'] = "Črna lista";
$LANG['DYNCONF_MISSING_CALLID'] = "Vnesi klicateljev ID";
$LANG['DYNCONF_NOT_CREATED'] = "Pravilo ni ustvarjeno";
$LANG['DYNCONF_EXISTS'] = "Pravilo obstaja";
$LANG['DYNCONF_CALLID'] = "Klicateljev ID";
$LANG['DYNCONF_CREATED'] = "Pravilo ustvarjeno";
$LANG['DYNCONF_DELETED'] = "Pravilo izbrisano";
$LANG['DYNCONF_UPDATED'] = "Pravilo posodobljeno";
$LANG['OPTIONS'] = "Možnosti";

$LANG['MUST_CREATE_ROUTES'] = "<a href=\"conf_didroute.php\">Ustvariti morate DID/DTMF skupino</a>";
$LANG['MUST_CREATE_MODEMS'] = "<a href=\"conf_modems.php\">Najprej morate ustvariti modem</a>";
$LANG['MUST_CREATE_CATEGORIES'] = "<a href=\"fax_categories.php\">Najprej morate ustvariti skupino</a>";

$LANG['EXPLAIN_CATEGORIES'] = "Kategorije se uporabljajo za organiziranje faksov v AvantFAX Arhivu.  Navadni uporabniki imajo omejitev ogleda kategojij, ki so jim dodeljene.";
$LANG['EXPLAIN_DYNCONF'] = "HylaFAX-ove dinamične nastavitve in funkcije zavrnjenih klicev se uporabljajo za zavrnitev posredovanih faksov od neznanih pošiljateljev.  Za vnos vhoda te črne liste vtipkajte ID pošiljatelja, ki ga želite blokirati.  Po želji lahko izberete napravo, če želite blokirati tega uporabnika na tej napravi.";
$LANG['EXPLAIN_DIDROUTE'] = "DID/DTMF usmerjanje se uporablja za usmerjanje faksov do ciljne skupine.  HylaFAX mora biti pravilno nastavljen za to delo.  Za vsako ciljno skupino, ki jo boste uporabljali z AvantFax-om skupino mora biti narejen individualni vnos. DID/DTMF številčna polja so namenjena za ciljne skupine prejete po HylaFAX-u -- ponavadi so to zadnje 3 ali 4 številke ali pa celo 10 števil številke faksa. Polja za vzdevek se uporabljajo za opis lokacije ali pa za namen iskanja ciljne skupine.  Naprimer, prodaja ali podpora za faks linijo namenjeno tem oddelkom.  Polje Kontakti je namenjeno za elektronske naslove, tako bo vsak faks, ki prispe za to skupino, posredovan do Kontakta.  Polje Tiskalnik določa kateri CUPS/lpr tiskalnik tje namenjen za printanje faksa.  Navadni uporabniki lahko pregledujejo samo fakse skupin, ki so jim dodeljene.";
$LANG['EXPLAIN_MODEMS'] = "Vhod modema mora biti ustvarjen za vsak modem, ki ga boste uporabljali na AvantFax-u.  Polje Naprave je namenjeno za imena naprav, kot je to nastavljeno v HylaFAX-u (ie: ttyS0, ttyds01 or boston00). Polje Vzdevek se uporablja za opis lokacije ali namena modema.  Naprimer, prodaja ali podpora za faks linijo namenjeno tem oddelkom.  Polje Kontakti je namenjeno za elektronske naslove in vsak faks, ki prispe na ta modem, bo posredovan do Kontakta.  Polje Tiskalnik določa CUPS/lpr tiskalnika na katerega se faks printa.  Navadni uporabniki lahko pregledujejo samo fakse skupin, ki so jim dodeljene.";
$LANG['EXPLAIN_COVERS'] = "Naslovna stran mora biti vnešena za vsako naslovno stran, ki jo boste uporabljali z AvantFax-om.  Polje Datoteka je za vpis imena predloge datoteke najdene v slikovni datoteki (ie: cover.ps, custom.ps, or mycover.html). Polje Naslov se uporablja za opis naslovne strani.  Naprimer: Splošno, prodajni oddelek, računovodstvo.  Vsak lahko izbere vsako od naslovnih strani, ki so navedene tukaj.";
$LANG['EXPLAIN_FAX2EMAIL'] = "Usmerjanje po pošiljatelju (prej Fax2Email) je za usmerjanje individualnih številk faksa do specifičnih elektronskih naslovov.  Če želite fakse poslane iz 18002125555 poslati na elektronski naslov sales@yourcompany.com, morate izbrati podjetje z liste na levi strani in vpisati elektronski naslov v polje za vpis elektronskega naslova.  Polje Podjetje vam omogoča spreminjanjna podjetja, ki je prikazano v imeniku.  Polje Tiskalnik določa CUPS/lpr tiskalnika na katerega se faks printa.  Lahko izbirate tudi kategorijo, ki avtomatsko kategorizira faks.";
$LANG['EXPLAIN_BARCODEROUTE'] = "Črtna koda z upoštevanjem omejitev se uporablja za usmerjanje faksov na podlagi črtnih kod, ki jih vsebuje faks.  Vpišite črtno kodo, katero želite, da se ujema v pravilo v polje Črtne kode.  Polje Vzdevek se uporablja za opis namena za to previlo.  Naprimer za specifično storitev ali izdelek.  Polje Kontakti je namenjeno za elektronske naslove, tako bo vsak faks, ki prispe za to skupino, posredovan do Kontakta.  Polje Tiskalnik določa CUPS/lpr tiskalnika na katerega se faks printa.  Polje Tiskalnik določa CUPS/lpr printerja na katerega se faks printa.";
