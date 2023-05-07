composer install --optimize-autoloader
./vendor/bin/sail stop
./vendor/bin/sail up -d
./vendor/bin/sail npm run build
./vendor/bin/sail artisan config:cache
./vendor/bin/sail artisan event:cache
./vendor/bin/sail artisan view:cache
./vendor/bin/sail artisan route:cache
./vendor/bin/sail artisan migrate --force
./vendor/bin/sail artisan db:seed --force
