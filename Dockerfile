FROM php:8.1-cli

# Environment
ENV PROJECT airwave-pbi

# Install system dependencies for ZIP handling
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    zip \
    git \
    librabbitmq-dev \
    pkg-config \
    && rm -rf /var/lib/apt/lists/*

# Install the PHP zip extension
RUN docker-php-ext-install zip

# Install required PHP extensions and RabbitMQ client
RUN docker-php-ext-install bcmath pdo pdo_mysql
RUN  pecl install amqp \
    && docker-php-ext-enable amqp

# Work Directory
RUN mkdir -p /var/www/${PROJECT}
WORKDIR /var/www/${PROJECT}

COPY .env.prod .env


COPY . .

# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN mv composer.phar /usr/local/bin/composer
# RUN chmod +x /usr/local/bin/composer
RUN composer install --ignore-platform-reqs

RUN php artisan key:generate


# EXPOSE 8080

# CMD ["php artisan serve --host=0.0.0.0 --port=8080"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=9004"]
