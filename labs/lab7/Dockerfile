FROM php:8-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apt-get update && apt-get install -y nginx
COPY ./nginx.conf /etc/nginx/nginx.conf
CMD service nginx start && php-fpm
