# Use official PHP Apache image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy all files
COPY . .

# Enable mod_rewrite for .htaccess
RUN a2enmod rewrite

# Update Apache configuration to allow .htaccess
RUN echo "<Directory /var/www/html>" > /etc/apache2/conf-available/docker-php.conf && \
    echo "    AllowOverride All" >> /etc/apache2/conf-available/docker-php.conf && \
    echo "</Directory>" >> /etc/apache2/conf-available/docker-php.conf && \
    a2enconf docker-php

# Expose port 80
EXPOSE 80

# Apache runs automatically in this image