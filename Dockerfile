FROM php:fpm
RUN docker-php-ext-install mysqli $$ chmod -R 777 foto
