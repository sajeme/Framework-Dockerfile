FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache zip unzip git

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

EXPOSE 9000

CMD ["php-fpm"]