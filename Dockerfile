FROM php:8.1-apache

# Copy all your PHP files
COPY . /var/www/html/

# Enable Apache rewrite module (for .htaccess)
RUN a2enmod rewrite

# Add a custom Apache config to allow .htaccess overrides
RUN echo "<Directory /var/www/html/> \n\
    AllowOverride All \n\
    Require all granted \n\
</Directory>" > /etc/apache2/conf-available/allow-htaccess.conf && \
    a2enconf allow-htaccess && \
    service apache2 restart
