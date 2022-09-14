#!/bin/bash

chmod -R 775 /var/www/html/wordpress;
chown -R www-data /var/www/html/wordpress;

mkdir -p /run/php/;
touch /run/php/php7.3-fpm.pid;


if [ ! -f /var/www/html/wordpress/wp-config.php ]; then

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar;
chmod +x wp-cli.phar;
mv wp-cli.phar /usr/local/bin/wp;
cd /var/www/html/wordpress;

wp core download --allow-root;

wp config create --dbname=${DB_NAME} \
                 --dbuser=${DB_USER} \
                 --dbpass=${DB_PASS} \
                 --dbhost=${DB_HOST} \
                 --dbcharset=utf8 \
                 --allow-root;

wp core install --allow-root --url=${DOMAIN_NAME} \
                             --title=${TITLE} \
                             --admin_user=${WORDPRESS_ROOT_LOGIN} \
                             --admin_password=${WORDPRESS_ROOT_PASSWORD} \
                             --admin_email=${WORDPRESS_ROOT_EMAIL};

wp user create  --allow-root ${WORDPRESS_USER_LOGIN} \
                             ${WORDPRESS_USER_EMAIL} \
                             --user_pass=${WORDPRESS_USER_PASSWORD} \
                             --role=author;

fi

/usr/sbin/php-fpm7.3 -F