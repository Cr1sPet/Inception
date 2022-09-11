<?php

define( 'DB_NAME', '$WORDPRESS_DB_NAME' );
define( 'DB_USER', '$WORDPRESS_DB_USER' );
define( 'DB_PASSWORD', '$WORDPRESS_DB_PASSWORD' );
define( 'DB_HOST', '$WORDPRESS_DB_HOST' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

define('AUTH_KEY',         '+|vAncwR5})|@WR=aN>@vTA0eVO5v=?!r]Z7;qaaN=jm7iAy8%STIJ0Od8aa?*t.');
define('SECURE_AUTH_KEY',  'vP->hdS6{vCR/> FiQfx-+C)9Fx&r`UO$ -hRMv4,|!|I1_8|6~zj(t-o`1SxFDa');
define('LOGGED_IN_KEY',    'B9f4jOJ/|re[|Rowu7crYcr`/2I<wNIL>jS]}%cqa[U/g6~-,/7@wSl<v6V;ZpVs');
define('NONCE_KEY',        'wZ:7jxNjv8 P&!BZ||xe-Nb{p0Unx%,|A+S,Bf>*}t*zFEw`W~0P;}r@~BR`vPCK');
define('AUTH_SALT',        '1{:!O>BIM6gcGTC-v>%pvp&qm!I?Zb^uF;@kQ<KSP~{ 8Jrn)H-[F=GcYIvZ`a[=');
define('SECURE_AUTH_SALT', 'T^R-_3G(@dNid$FvZNT*D(-y#jx?x6- s~VUM?QKC$%EeD|<C7/qABa8+;5KX7sX');
define('LOGGED_IN_SALT',   'xn(Ro.1~0v!!8`#;C?n%PDQ7sD59HE{0PF?h]n$-8ot5 j@W^G&=;lnJRGO_DI5y');
define('NONCE_SALT',       'wzh {tRvmN/r%TK3zmsz]:r&Nm3K{slZ55&C~A5+J.V(Z|g+/m[K4sqC ] S%YmU');
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
?>