# Dockerfile
FROM php:8.2-apache
RUN a2enmod rewrite

VOLUME ["/var/www/html/"]