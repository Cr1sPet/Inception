FROM debian:buster

EXPOSE 443

RUN apt-get update && apt-get -y install nginx openssl
RUN openssl  req -x509 -nodes -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key \
 -out /etc/ssl/certs/nginx.crt -sha256 -days 365 -subj \
  "/C=RU/ST=Tatarstan/L=Kazan/CN=jchopped.42.fr"

COPY ./tools/nginx.conf /etc/nginx/conf.d

CMD ["nginx", "-g", "daemon off;"]