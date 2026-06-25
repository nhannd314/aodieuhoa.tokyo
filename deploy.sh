# /var/www/myapp/deploy.sh
#!/bin/bash

set -e

APP_DIR="/var/www/aodieuhoa.tokyo"
BRANCH="main"
LOG_FILE="/var/log/deploy.log"

echo "[$(date)] Deploy started" >> $LOG_FILE

cd $APP_DIR
git pull origin $BRANCH >> $LOG_FILE 2>&1

# Laravel specific (bỏ nếu không dùng)
#composer install --no-dev --optimize-autoloader >> $LOG_FILE 2>&1
#php artisan migrate --force >> $LOG_FILE 2>&1
#php artisan config:cache >> $LOG_FILE 2>&1
#php artisan route:cache >> $LOG_FILE 2>&1
#php artisan view:cache >> $LOG_FILE 2>&1

# Restart queue worker nếu có
#php artisan queue:restart >> $LOG_FILE 2>&1

echo "[$(date)] Deploy finished" >> $LOG_FILE