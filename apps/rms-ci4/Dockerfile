# Gunakan Debian/Ubuntu PHP image
FROM php:8.2-fpm

# Install ekstensi yang dibutuhkan
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    zip \
    git \
    curl \
    && docker-php-ext-install mysqli pdo pdo_mysql intl zip \
    && docker-php-ext-enable mysqli pdo_mysql intl zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*
