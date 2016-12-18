FROM php:7.1-fpm
MAINTAINER Michal Kozlowski

VOLUME ./backend /backend

RUN apt-get update && apt-get install -y \
    git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

WORKDIR /backend
