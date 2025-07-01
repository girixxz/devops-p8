FROM php:8.2-cli

WORKDIR /var/www/html
COPY . .

RUN apt-get update && apt-get install -y unzip git zip curl php-xml \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer install

CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
