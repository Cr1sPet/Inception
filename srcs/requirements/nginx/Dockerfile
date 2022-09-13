FROM debian:buster

RUN apt update
RUN apt install -y nginx openssl

EXPOSE 443

COPY ./conf/jchopped42fr.conf /etc/nginx/sites-enabled/
COPY ./tools/start.sh /var/www

CMD bash /var/www/start.sh