FROM php:7.4-fpm-alpine

LABEL maintainer="s2w"

# COPY ./php.ini /usr/local/etc/php/php.ini

#RUN docker-php-ext-install nombre_extension

WORKDIR /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
