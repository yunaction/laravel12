#!/bin/sh

set -e

echo "🚀 Waiting for MySQL to be ready..."
while ! nc -z mysql-db 3306; do
  sleep 1
done

echo "✅ MySQL is ready!"

# Laravelのキャッシュクリアを自動実行
php artisan config:clear
php artisan cache:clear

# PHP-FPMを起動
exec "$@"