#!/bin/bash
apt-get update
apt-get remove --purge apache2
apt-get update
apt-get install -y apache2 apache2-dev php libapache2-mod-php
chown -R www-data:www-data /var/www
chmod -R 755 /var/www
a2enmod rewrite
service apache2 restart
apache2ctl -D FOREGROUND
