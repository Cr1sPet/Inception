FROM debian:buster


RUN apt update && apt install -y php7.3 php-mysqli php-fpm curl 

EXPOSE 9000

COPY ./tools /tools

WORKDIR /var/www/

RUN cp /tools/www.conf /etc/php/7.3/fpm/pool.d && curl -LO https://wordpress.org/latest.tar.gz && tar xzvf latest.tar.gz && \
    apt-get remove curl -y && rm -rf ./latest.tar.gz

RUN chmod +x /tools/run.sh && cp /tools/wp-config.php /var/www/wordpress

CMD bash /tools/run.sh