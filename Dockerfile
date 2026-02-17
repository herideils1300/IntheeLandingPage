FROM php:8.0-cli
RUN choco install php
WORKDIR /landing
COPY . .
CMD ["php" "-S" "127.0.0.1:80"]

