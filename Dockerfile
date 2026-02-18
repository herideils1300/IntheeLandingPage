FROM php:8.2-cli
COPY . .
CMD [ "php", "-S", "0.0.0.0:80" ]


