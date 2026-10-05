FROM php:8.2-apache

WORKDIR /var/www/html

RUN a2enmod rewrite \
    && sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf \
    && apt-get update \
    && apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html/

RUN if [ -f composer.json ]; then \
        php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
        && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
        && rm composer-setup.php \
        && composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader; \
    fi

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
