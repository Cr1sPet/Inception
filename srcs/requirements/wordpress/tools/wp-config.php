<?php

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'jchopped' );
define( 'DB_PASSWORD', '123' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'E+qzC>ZoP9Wkx bn.4/tlj)Bw%o`/*|W`vWr%@w7TF?%qx zYDP<x|@W+yr:;~S_');
define('SECURE_AUTH_KEY',  'Z-X>bki7pxW-l@L-t%bMzsGl@IYiM*snAf-PMR{EnwY[j?Pi|%IuDAV)+s=N:H~C');
define('LOGGED_IN_KEY',    '(#VoxhH?=1s)_-Vh%MSnkN|r0_Tw]P@LwrglG |jlG~X$Z^f6M@eNx{;x<B7-P|#');
define('NONCE_KEY',        '{+X.yRW`Rixe+<I6R|wf+,s>P2|6X%6I.1]55wmn#-%:Q05Ekp[c=K+2y^xl)f=2');
define('AUTH_SALT',        'tD]>>[,KjyNo9[kNpVZI#%@#}=`8$zy $X_={Z^%6i|&Y]nmb(/6gi@5{46Q)2`-');
define('SECURE_AUTH_SALT', '55;6OND[.l+_wM,de.(+~9?txSdd>W:#jTKl1}<B+]!|x=`/*|y.[ +i|swg|6t{');
define('LOGGED_IN_SALT',   '%!Z/LnUa{DA5VWz e5$5_|f|KwKc=`-|BlIaFFsLRDn-Y#54*OCO34$+Ub[.v%22');
define('NONCE_SALT',       'dk|Y-(`WV~GiN+JHZ~z_S/xs^zR~N_c+eXcCww} !LKiP!ZDbbOT5M:,Hl>1N;``');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';