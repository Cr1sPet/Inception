
echo \
"CREATE DATABASE ${DB_NAME};
CREATE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASS}';

GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_USER}'@'%';

FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY '${DB_ROOT_PASS}';" > /var/www/createdb.sql

cat /var/www/createdb.sql

service mysql start && mysql < /var/www/createdb.sql

mysqld_safe
