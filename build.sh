#!/bin/bash

###
# Build script
###

# Take the server down so people accessing the site will see a maintenance page
php artisan down

# Purge local changes that aren't gitignored
git reset --hard

# Pull from master repo, and combine stderr & stdout
git pull 2>&1

#//TODO perform maybe:
#composer install
#npm install
#php artisan migrate

# Put server back up
php artisan up
