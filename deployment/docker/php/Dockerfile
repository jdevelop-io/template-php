ARG PHP_VERSION
ARG COMPOSER_VERSION

FROM composer:${COMPOSER_VERSION} AS composer

FROM php:${PHP_VERSION}-fpm

# Install composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Install PHP extensions
RUN pecl install xdebug && docker-php-ext-enable xdebug
