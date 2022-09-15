FROM debian:buster

RUN apt update
RUN apt install -y mariadb-server

COPY ./tools /var/www/

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

EXPOSE 3306

CMD  bash /var/www/run.sh

