FROM php:8.1-apache

# Copy your PHP files to the Apache server root
COPY . /var/www/html/

# Enable Apache rewrite module if needed
RUN a2enmod rewrite
