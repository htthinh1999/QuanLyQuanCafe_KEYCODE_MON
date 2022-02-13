FROM php:7.4-apache
WORKDIR /var/www/html
COPY . .
EXPOSE 80