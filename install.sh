#!/bin/bash
# Ensure script is run from the project root
if [ ! -f "composer.json" ]; then
    echo "Please run this script from the project root directory."
    exit 1
fi

# Run composer install
echo "😊 Installing Composer dependencies..."
composer install

# Run the app installation
php artisan app:install
