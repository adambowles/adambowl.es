#!/bin/bash
php artisan down
git pull 2>&1
#TODO perform maybe:
#composer install
#npm install
#php artisan migrate
php artisan up
