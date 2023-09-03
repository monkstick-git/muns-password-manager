# Dockerfile
FROM php:8.1-apache
RUN a2enmod rewrite

VOLUME ["/var/www/html/"]