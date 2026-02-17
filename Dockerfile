FROM php:8.0-cli
WORKDIR /landing
COPY . .
CMD ["php" "-S" "127.0.0.1:80"]

