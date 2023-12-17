#!/bin/bash

if ! $(wp core is-installed --allow-root); then

    sed -i -e "s/ARG_DB/$ARG_DB/" -e "s/ARG_USER/$ARG_USER/" -e "s/ARG_PASS_SQL/$ARG_PASS_SQL/" /var/www/html/wp-config.php \

    wp core install --allow-root \
    --url="$ARG_DOMAIN" \
    --title="$WP_TITLE" \
    --admin_user="$WP_ADMIN" \
    --admin_password="$WP_ADMIN_PASSWORD" \
    --admin_email="$WP_ADMIN_EMAIL" \
    --allow-root;

    wp user create --allow-root \
    --allow-root $WP_NEWUSER $WP_NEWUSER_EMAIL \
    --user_pass=$WP_NEWUSER_PASSWORD;

fi

php-fpm7.4