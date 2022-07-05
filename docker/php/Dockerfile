ARG PHP_VERSION
FROM ${PHP_VERSION}

ARG PROJECT_NAME
ARG WORKSPACE_TIMEZONE

# Install dependencies
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    wget \
    zlib1g-dev libicu-dev g++ \
    openssl libssl-dev libcurl4-openssl-dev

# Enable and install extensions
RUN docker-php-ext-install \
    pdo_mysql \
    intl

# Install composer
COPY --from=composer:2.1.14 /usr/bin/composer /usr/local/bin/composer
RUN mkdir /var/www/.composer && chown -R www-data:www-data /var/www/.composer

# Set Timezone
RUN ln -snf /usr/share/zoneinfo/${WORKSPACE_TIMEZONE} /etc/localtime && echo ${WORKSPACE_TIMEZONE} > /etc/timezone

# Set Ini
COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get autoremove -y && rm -rf /var/lib/apt/lists/*

EXPOSE 9000

CMD ["php-fpm"]
