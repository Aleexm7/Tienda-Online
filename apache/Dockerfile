FROM php:8.2.4-apache
ENV ACCEPT_EULA=Y
# apt-utils
RUN apt-get update && apt-get install -y apt-utils

# 1. development packages
RUN apt-get update
RUN apt-get install -y build-essential 
RUN apt-get install -y libfreetype6-dev
RUN apt-get install -y libjpeg62-turbo-dev
RUN apt-get install -y libmcrypt-dev
RUN apt-get install -y libpng-dev
RUN apt-get install -y curl
RUN apt-get install -y libcurl4
RUN apt-get install -y libcurl4-openssl-dev
RUN apt-get install -y zlib1g-dev
RUN apt-get install -y libicu-dev
RUN apt-get install -y libmemcached-dev
RUN apt-get install -y memcached
RUN apt-get install -y default-mysql-client
RUN apt-get install -y libmagickwand-dev
RUN apt-get install -y unzip
RUN apt-get install -y libzip-dev
RUN apt-get install -y zip
RUN apt-get install -y \
    # multiarch-support \
    git \
    sudo \
    libbz2-dev \
    libjpeg-dev \
    libmcrypt-dev \
    libreadline-dev \
    g++
RUN pecl install memcached
RUN docker-php-ext-enable memcached
RUN pecl install mcrypt
RUN docker-php-ext-enable mcrypt
RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd
RUN docker-php-ext-configure mysqli --with-mysqli=mysqlnd
RUN docker-php-ext-configure intl
RUN docker-php-ext-configure zip
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-install -j$(nproc) zip
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN pecl install imagick
RUN docker-php-ext-enable imagick
RUN cd /tmp \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer
# Microsoft SQL Server Prerequisites
RUN apt-get update && apt-get install -y gnupg2
# RUN apt-get update \
#     # && curl https://packages.microsoft.com/keys/microsoft.asc \
#     # && curl https://packages.microsoft.com/config/debian/9/prod.list \
#         # > /etc/apt/sources.list.d/mssql-release.list \
#     && apt-get install -y --no-install-recommends \
#         locales \
#         apt-transport-https \
#     && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen \
#     && locale-gen \
#     && apt-get update \
#     && apt-get -y --no-install-recommends install \
#         # unixodbc-dev \
#         msodbcsql17
RUN docker-php-ext-install \
    bz2 \
    iconv \
    bcmath \
    opcache \
    calendar
    # mbstring
    
#composer Apache Php.ini
ENV APACHE_DOCUMENT_ROOT=/var/www/html
COPY "memory-limit-php.ini" "/usr/local/etc/php/conf.d/memory-limit-php.ini"
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite headers
