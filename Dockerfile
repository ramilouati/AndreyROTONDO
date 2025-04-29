FROM php:8.1-apache

# Enable Apache mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Allow .htaccess overrides
RUN echo '<Directory /var/www/html/>' \
    '\n    AllowOverride All' \
    '\n    Require all granted' \
    '\n</Directory>' \
    > /etc/apache2/conf-available/allow-htaccess.conf && \
    a2enconf allow-htaccess

# Copy source code to the Apache root
COPY . /var/www/html/
