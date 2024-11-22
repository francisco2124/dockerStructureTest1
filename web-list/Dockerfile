# Utiliza la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instala la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copia el código de la aplicación al directorio raíz del servidor web
COPY . /var/www/html/
