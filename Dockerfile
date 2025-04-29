FROM php:8.1-apache

# Enable .htaccess support
RUN a2enmod rewrite

# Allow .htaccess overrides
RUN echo "<Directory /var/www/html/> \
    AllowOverride All \
    Require all granted \
</Directory>" > /etc/apache2/conf-available/allow-htaccess.conf && \
    a2enconf allow-htaccess

# Copy source code to the Apache root
COPY . /var/www/html/
