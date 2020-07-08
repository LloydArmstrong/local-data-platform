FROM php:7.3-fpm

RUN apt update

RUN docker-php-ext-install mysqli

RUN docker-php-ext-enable mysqli
