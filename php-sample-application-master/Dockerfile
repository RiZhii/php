# Use the official PHP Apache image
FROM php:8.1-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files into Apache's web root
COPY . /var/www/html/
COPY config-dev /var/www/html/config

# Set correct permissions
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/web|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|<Directory /var/www/html>|<Directory /var/www/html/web>|g' /etc/apache2/apache2.conf 

RUN echo "include_path='.:/var/www/html'" > /usr/local/etc/php/conf.d/custom.ini



