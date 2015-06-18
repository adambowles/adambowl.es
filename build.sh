#!/bin/bash
php artisan down
git pull
#TODO perform maybe:
#composer install
#npm install
#php artisan migrate
php artisan up
