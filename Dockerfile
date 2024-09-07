FROM php:8.3-apache

WORKDIR /var/www/html
COPY . /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
