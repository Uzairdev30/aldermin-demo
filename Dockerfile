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
    libzip-dev \
    libcurl4-openssl-dev \
    libssl-dev

# Step 3: PHP extensions install karo
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Step 4: Composer install karo
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Step 5: Working directory set karo
WORKDIR /var/www

# Step 6: Apna code copy karo
COPY . .

# Step 7: Laravel dependencies install karo
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Step 8: Laravel config & permissions
RUN php artisan config:clear \
    && chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data /var/www

# ✅ Change this to match Railway port
ENV PORT=8080
EXPOSE 8080

# ✅ Force artisan to use 8080 (not auto $PORT)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
