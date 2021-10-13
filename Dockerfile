FROM php:7.2-apache

RUN mkdir -p /etc/apache2/ssl

ADD ./config/webmotion_apache.conf /etc/apache2/sites-available/000-default.conf

ADD ./config/backend.webmotion.io.crt /etc/apache2/ssl/
ADD ./config/backend.webmotion.io.key /etc/apache2/ssl/

RUN apt-get update
RUN apt-get install -y zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_mysql

RUN a2enmod ssl
RUN a2enmod headers
RUN a2enmod rewrite
RUN service apache2 restart