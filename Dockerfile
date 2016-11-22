FROM php:5.6-apache

# Installer les composantes BD
RUN docker-php-ext-install pdo mysql
RUN docker-php-ext-install pdo mysqli
RUN docker-php-ext-install pdo pdo_mysql

# Module pour Apache
RUN a2enmod rewrite
