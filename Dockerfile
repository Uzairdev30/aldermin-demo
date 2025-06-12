# Step 1: PHP image le
FROM php:8.2-fpm

# Step 2: Kuch zaroori cheezein install kar
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    npm \
    libzip-dev

# Step 3: PHP extensions install karo
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Step 4: Composer install karo
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Step 5: Apna code container mein daalo
WORKDIR /var/www
COPY . .

# Step 6: Laravel install setup
RUN composer install
RUN php artisan config:clear

# Step 7: Permissions theek karo
RUN chown -R www-data:www-data /var/www

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

