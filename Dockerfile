# --- Stage 1: Build Assets (Vite) ---
FROM node:20-alpine AS assets-builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# --- Stage 2: Production App ---
FROM php:8.2-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    postgresql-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql pgsql bcmath gd xml

# Get Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy project files
COPY . .

# Copy compiled assets from builder stage
COPY --from=assets-builder /app/public/build ./public/build

# Install PHP composer dependencies for production
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Setup custom configuration files
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisor.conf /etc/supervisor/conf.d/supervisor.conf

# Log directory configuration
RUN mkdir -p /var/log/supervisor /var/log/nginx

# Make the start script executable
RUN chmod +x docker/start.sh

EXPOSE 80

CMD ["docker/start.sh"]
