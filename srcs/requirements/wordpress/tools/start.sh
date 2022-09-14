#!/bin/bash

chmod -R 775 /var/www/html/wordpress;
chown -R www-data /var/www/html/wordpress;

mkdir -p /run/php/;
touch /run/php/php7.3-fpm.pid;


if [ ! -f /var/www/html/wordpress/wp-config.php ]; then

# Установки Wordpress CLI
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar;
chmod +x wp-cli.phar;
mv wp-cli.phar /usr/local/bin/wp;
cd /var/www/html/wordpress;

# Установка Wordpress файлов
wp core download --allow-root;

# Создаение wp-config.php
wp config create --dbname=${DB_NAME} \
                 --dbuser=${DB_USER} \
                 --dbpass=${DB_PASS} \
                 --dbhost=${DB_HOST} \
                 --dbcharset=utf8 \
                 --allow-root;

# Создание админа
wp core install --allow-root --url=${DOMAIN_NAME} \
                             --title=${WORDPRESS_NAME} \
                             --admin_user=${WORDPRESS_ROOT_LOGIN} \
                             --admin_password=${MYSQL_ROOT_PASSWORD} \
                             --admin_email=${WORDPRESS_ROOT_EMAIL};

# создание юзера с правами автор
wp user create  --allow-root ${MYSQL_USER} \
                             ${WORDPRESS_USER_EMAIL} \
                             --user_pass=${MYSQL_PASSWORD} \
                             --role=author;

fi

/usr/sbin/php-fpm7.3 -F