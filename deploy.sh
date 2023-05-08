#!/bin/bash
docker-compose -f docker-compose.prod.yml stop
docker-compose -f docker-compose.prod.yml up -d --remove-orphans
docker exec app npm install
docker exec app npm run build
docker exec app php artisan migrate
docker exec app php artisan config:cache
docker exec app php artisan event:cache
docker exec app php artisan route:cache
docker exec app php artisan view:cache

