FROM php:8.4.3-fpm

RUN apt-get update && apt-get install -y \
  unzip \
  && docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY ./project/composer.json ./project/composer.lock ./

RUN composer install --no-scripts --no-plugins --prefer-dist --optimize-autoloader

COPY . /var/www/project

WORKDIR /var/www

CMD ["sh","-c","php-fpm"]