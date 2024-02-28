#!/bin/sh

php artisan cache:clear
php artisan route:cache
sleep 10s
php artisan migrate
php artisan serve --host=0.0.0.0
