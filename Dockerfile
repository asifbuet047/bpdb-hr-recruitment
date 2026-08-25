FROM php:8.4-fpm

WORKDIR /var/www

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    wget \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libpq-dev \
    postgresql-client \
    libicu-dev \
    fontconfig \
    fonts-dejavu \
    fonts-liberation \
    fonts-noto-core \
    fonts-noto-extra \
    xfonts-75dpi \
    xfonts-base \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install \
        pdo_pgsql \
        pgsql \
        intl \
        mbstring \
        zip \
        exif \
        pcntl \
        gd \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && rm -rf /var/lib/apt/lists/*

# Install custom Bangla font
RUN mkdir -p /usr/share/fonts/truetype/custom

COPY public/fonts/LiSabbirSorolotaUnicode.ttf \
    /usr/share/fonts/truetype/custom/LiSabbirSorolotaUnicode.ttf

RUN fc-cache -fv

# Install wkhtmltopdf
RUN wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6.1-3/wkhtmltox_0.12.6.1-3.bookworm_amd64.deb \
    && apt-get update \
    && apt-get install -y ./wkhtmltox_0.12.6.1-3.bookworm_amd64.deb \
    && apt-get install -f -y \
    && rm -f wkhtmltox_0.12.6.1-3.bookworm_amd64.deb \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# PHP configuration
RUN { \
    echo "memory_limit = 1024M"; \
    echo "max_execution_time = 600"; \
    echo "max_input_time = 600"; \
    echo "upload_max_filesize = 100M"; \
    echo "post_max_size = 100M"; \
    echo "max_input_vars = 10000"; \
    echo "default_socket_timeout = 600"; \
} > /usr/local/etc/php/conf.d/custom.ini

CMD ["php-fpm"]