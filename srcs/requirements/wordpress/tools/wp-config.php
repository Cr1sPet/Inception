<?php

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'jchopped' );
define( 'DB_PASSWORD', '123' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'tU)[[9T+ft^l/PPK,%F6u/<27Ls`x}}&Je<r-t6Kq8#@2fJs^7Q-xtcf|XG><ZFZ');
define('SECURE_AUTH_KEY',  'k#rghpW`{5;aBZwKkks_7AfW??v3R,lF[lsTMFXe~+QJuC7(p!)p+uy89lD04R:R');
define('LOGGED_IN_KEY',    ')8B?|05LcI;$5]BQW2]a#)? J9)E-#JMP!I#pI&xdyB,AYTLkVYB+^OC[<$Z~2X@');
define('NONCE_KEY',        'b?JrU6h,!0p2HF?2I])/kW}{2:$oo,R4h2RHVJto v7+}tK> [>JkWuP:jTtMAvq');
define('AUTH_SALT',        '|7IZV<G&hY=}P*?7g|moppf=PEyUFD2(TSD|Y6-Hc~xUgsmp4IQ6I];r<98q`i>g');
define('SECURE_AUTH_SALT', 'nn{ZLi(>I,xRNK@s&@0jS<>*m*1x-CLdfDY:8o&E1Q)Jisf6Cp+kQnUj0YH]$xX8');
define('LOGGED_IN_SALT',   'AqS#Z|,{Z-O=m0quxqL~@^qz4Vw}idQHNF{stayyAx&O&PIt}asSL 4m)S`fAo,x');
define('NONCE_SALT',       'iW&8FpGK>tRdyI(|%2*_{6],LG~|)Q5Q+G8q+]?-s$VTB/4!nBI#Kl}3g)Y_g(cd');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';