#!/bin/bash
apt-get update
apt-get install -y apache2 php libapache2-mod-php
a2enmod rewrite
service apache2 restart
