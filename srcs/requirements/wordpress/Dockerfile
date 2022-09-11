FROM debian:buster

RUN apt update
RUN apt install -y php7.3 php-mysqli php-fpm curl sendmail

EXPOSE 9000

COPY ./tools/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

CMD chmod +x var/www/run.sh && bash /var/www/run.sh