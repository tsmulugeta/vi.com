#!/bin/ksh

/usr/bin/find /var/www/visalus -type d > /tmp/junk
/bin/grep -v " " /tmp/junk | /usr/bin/xargs /bin/chmod 775
/usr/bin/find /var/www/visalus -type f > /tmp/junk
/bin/grep -v " " /tmp/junk | /usr/bin/xargs /bin/chmod 664

/bin/chown -R webdev:www-data /var/www/visalus/

/bin/chown root:root /var/www/visalus/z_changeperms.sh
/bin/chmod 755 /var/www/visalus/z_changeperms.sh

