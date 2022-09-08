FROM debian:buster

COPY tools .
COPY tools/nginx.conf /etc/nginx/conf.d

RUN apt-get update && apt-get -y install nginx && apt-get -y install openssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:4096 \
		-keyout /etc/ssl/private/nginx.key \
		-out /etc/ssl/certs/nginx.crt \
		-subj "/C=RU/ST=Tatarstan/L=Kazan/O=wordpress/CN=jchopped.42.fr";

CMD ["nginx", "-g", "daemon off;"]