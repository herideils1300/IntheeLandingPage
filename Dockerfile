FROM php:8.2-fpm
COPY . .
CMD [ "php", "-S", "0.0.0.0:80" ]


