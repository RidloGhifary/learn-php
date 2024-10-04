FROM php:8.2-cli

# Install PHP extensions and required tools
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        unzip \
        curl && \
    docker-php-ext-configure zip && \
    docker-php-ext-install pdo_mysql zip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /workspace
COPY . /workspace
