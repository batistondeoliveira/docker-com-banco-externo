FROM php:7.1-apache

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install vim -y && \
    docker-php-ext-install mysqli pdo pdo_mysql \
    && apt-get update \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* 

COPY . .

RUN a2enmod rewrite

RUN chmod +x /var/www/html

CMD [ "apache2-foreground" ] 