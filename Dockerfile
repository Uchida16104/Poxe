FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y \
    apache2 php libapache2-mod-php php-cli php-sqlite3 \
    gcc g++ make curl git unzip zip \
    openjdk-17-jdk \
    perl python3 python3-pip python3-venv \
    ruby lua5.4 nodejs npm \
    sqlite3 sudo wget rustc golang \
    less sassc

RUN npm install -g typescript @neos21/in-browser-sass

WORKDIR /var/www/html

COPY . /var/www/html/

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
