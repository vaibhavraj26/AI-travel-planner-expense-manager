#!/bin/sh

# Set up storage directories permissions
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Set up public/build permissions if it exists
if [ -d "/var/www/html/public/build" ]; then
    chmod -R 755 /var/www/html/public/build
    chown -R www-data:www-data /var/www/html/public/build
fi

# If SQLite is selected, make sure database exists
if [ "$DB_CONNECTION" = "sqlite" ] || [ -z "$DB_CONNECTION" ]; then
    mkdir -p /var/www/html/storage/database
    if [ ! -f /var/www/html/storage/database/database.sqlite ]; then
        touch /var/www/html/storage/database/database.sqlite
    fi
    chown -R www-data:www-data /var/www/html/storage/database
fi

# Run migrations automatically on startup
php artisan migrate --force

# Start supervisor
exec supervisord -c /etc/supervisor/conf.d/supervisor.conf
