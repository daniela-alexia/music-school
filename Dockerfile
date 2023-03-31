FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libwebp-dev \
    libjpeg62-turbo-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Remove default nginx public folder
RUN rm -rf /var/www/html

# Copy existing application directory
COPY . /var/www

# Change folder owner
RUN chown -R www-data:www-data /var/www

# Expose port 9000
EXPOSE 9000

CMD ["php-fpm"]
