FROM php:8.3-apache AS base

WORKDIR /var/www/html
COPY . /var/www/html/

FROM base AS server
EXPOSE 80
CMD ["apache2-foreground"]

FROM cypress/included:13.14.2 AS cypress
WORKDIR /var/www/html
COPY . /var/www/html/
CMD ["npx", "cypress", "run", '--headless']