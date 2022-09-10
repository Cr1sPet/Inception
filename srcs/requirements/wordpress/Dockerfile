FROM debian:buster


RUN     apt update && apt install -y php-fpm php-mysql php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip curl

COPY ./tools/ /tools

WORKDIR /tools

RUN chmod +x run.sh && ./run.sh && cp ./wp-config.php /var/www/html/wordpress/wp-config.php

# CMD /usr/sbin/php-fpm* -F
# CMD /bin/bash