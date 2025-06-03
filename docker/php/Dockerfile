FROM php:8.3-fpm

# 必要なシステムパッケージとPHP拡張をインストール
RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    zip \
    unzip \
    git \
    nano \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libjpeg-dev \
    libwebp-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install \
       pdo_mysql \
       mbstring \
       zip \
       gd \
       pcntl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Node.jsとnpmのインストール
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# グローバルでconcurrentlyをインストール（npxの不足対策）
RUN npm install -g concurrently

# Composerのインストール
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Laravel Installerをグローバルにインストール
RUN composer global require laravel/installer

# Laravel InstallerをPATHに追加
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# 作業ディレクトリの設定
WORKDIR /var/www/html

# デフォルトコマンド
CMD ["php-fpm"]