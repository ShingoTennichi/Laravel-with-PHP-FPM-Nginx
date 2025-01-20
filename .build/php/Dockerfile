FROM php:8.4.3-fpm

RUN apt-get update && apt-get install -y \
  git \
  zip \
  unzip \
  && docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/

CMD ["php-fpm"]