FROM php:8.2.1-fpm

LABEL maintainer="Davson Santos <contato@davtech.com.br>"

# Install system dependencies
RUN apt-get update && apt-get install -y git && \
    apt-get install -y
RUN apt-get install -y libzip-dev zip
RUN docker-php-ext-install zip pdo pdo_mysql mysqli

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# XDEBUG
RUN pecl install xdebug-3.2.0RC1 && docker-php-ext-enable xdebug

# REDIS
RUN pecl install -o -f redis && docker-php-ext-enable redis

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the php config file
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

# Copy the application code
COPY . /app

VOLUME ["/app"]
