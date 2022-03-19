FROM php:8.0.8-fpm-alpine3.13

# Set working directory
WORKDIR /var/www/html/

# Install composer
RUN curl -sS https://getcomposer.org/installer \
    | php -- --install-dir=/usr/local/bin --filename=composer
	
# Install nodejs
RUN apk add --update nodejs npm

# Install Opcache
RUN docker-php-ext-install opcache

# Install pdo_mysql
RUN docker-php-ext-install pdo_mysql

# Add custom config
COPY $PWD/docker/php/config/custom.ini $PHP_INI_DIR/conf.d

EXPOSE 9000