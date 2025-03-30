# FROM php:8.2.28-apache

# RUN apt-get update \
#     && apt-get install -y --no-install-recommends git zlib1g-dev libzip-dev zip unzip

# RUN docker-php-ext-install pdo_mysql zip

# RUN pecl install xdebug \
#     && docker-php-ext-enable xdebug

# RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
#        mv composer.phar /usr/local/bin/composer

# WORKDIR /var/www/html

# COPY . .
FROM php:7.4-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends git zlib1g-dev libzip-dev zip unzip

RUN docker-php-ext-install pdo_mysql zip

# RUN pecl install xdebug \
    # && docker-php-ext-enable xdebug

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
       mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html

COPY . .