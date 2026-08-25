FROM php:8.2-cli

# Installation des extensions PHP nécessaires à Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# Installation des dépendances du projet
RUN composer install --no-dev --optimize-autoloader

# Exposition du port
EXPOSE 10000

# Commande de démarrage de Laravel
CMD mkdir -p /var/www/database && \
    touch /var/www/database/database.sqlite && \
    chmod -R 777 /var/www/storage /var/www/bootstrap/cache /var/www/database && \
    php artisan migrate --force && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan serve --host=0.0.0.0 --port=10000