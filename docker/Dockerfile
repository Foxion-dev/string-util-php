# Используем официальный образ PHP как базовый
FROM php:8.3-cli

# Обновление списка пакетов и установка необходимых зависимостей
RUN apt-get update && apt-get install -y \
        libzip-dev \
        zip \
    && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./docker/entrypoint.sh /usr/local/bin/
RUN chmod 755 /usr/local/bin/entrypoint.sh

WORKDIR /tmp

COPY ./composer.json ./composer.json

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer install

WORKDIR /app

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]