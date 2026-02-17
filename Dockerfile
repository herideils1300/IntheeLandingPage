FROM php:8.0-cli
RUN apt-get install php8.0
WORKDIR /landing
COPY . .
CMD ["php" "-S" "127.0.0.1:80"]

