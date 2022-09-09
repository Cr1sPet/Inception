server {
    listen 443 ssl;
    listen [::]:443 ssl;

    server_name jchopped.42.fr;
    server_name localhost;

    ssl_protocols  TLSv1 TLSv1.2 TLSv1.3;
    ssl_certificate /etc/ssl/certs/nginx.crt;
    ssl_certificate_key /etc/ssl/private/nginx.key;

    index index.php index.html;
    root /var/www/wordpress;

    location / {
        try_files $uri $uri/ /index.php$is_args$args;
        # root /data/www;
    
    }
    location ~ [^/]\.php(/|$) {
            try_files $uri =404;
            fastcgi_split_path_info ^(.+\.php)(/.+)$;
            fastcgi_pass wordpress:9000;
            fastcgi_index index.php;
            include fastcgi_params;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            fastcgi_param PATH_INFO $fastcgi_path_info;
        }
}
