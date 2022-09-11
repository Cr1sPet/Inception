FROM debian:buster

EXPOSE 3306

RUN apt update
RUN apt install -y mariadb-server

# COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

RUN service mysql start && mysql < /var/www/createdb.sql && rm -f /var/www/createdb.sql

CMD /usr/bin/mysqld_safe