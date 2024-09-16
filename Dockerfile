# Use the official PHP image
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy current directory to container
COPY . /app

# Run any commands, e.g., install extensions or dependencies
# For example, to install a PHP extension like PDO MySQL, you could add:
# RUN docker-php-ext-install pdo_mysql

# This will be useful to auto-execute any PHP file
ENTRYPOINT ["php"]
