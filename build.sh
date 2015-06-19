#!/bin/bash
php artisan down
git reset --hard
git pull 2>&1 #re-route stderr into stdout
#TODO perform maybe:
#composer install
#npm install
#php artisan migrate
php artisan up
