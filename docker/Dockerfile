FROM php:7.4.12-apache

WORKDIR /app

COPY . /app/

ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --from=composer:1.10.17 /usr/bin/composer /usr/local/bin/composer

RUN docker-php-ext-install pdo_mysql \
    && pecl install xdebug && docker-php-ext-enable xdebug \
    && docker-php-ext-install opcache \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini 
