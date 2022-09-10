?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '$WORDPRESS_DB_NAME' );

/** MySQL database username */
define( 'DB_USER', '$WORDPRESS_DB_USER' );

/** MySQL database password */
define( 'DB_PASSWORD', '$WORDPRESS_DB_PASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', '$WORDPRESS_DB_HOST' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+|vAncwR5})|@WR=aN>@vTA0eVO5v=?!r]Z7;qaaN=jm7iAy8%STIJ0Od8aa?*t.');
define('SECURE_AUTH_KEY',  'vP->hdS6{vCR/> FiQfx-+C)9Fx&r`UO$ -hRMv4,|!|I1_8|6~zj(t-o`1SxFDa');
define('LOGGED_IN_KEY',    'B9f4jOJ/|re[|Rowu7crYcr`/2I<wNIL>jS]}%cqa[U/g6~-,/7@wSl<v6V;ZpVs');
define('NONCE_KEY',        'wZ:7jxNjv8 P&!BZ||xe-Nb{p0Unx%,|A+S,Bf>*}t*zFEw`W~0P;}r@~BR`vPCK');
define('AUTH_SALT',        '1{:!O>BIM6gcGTC-v>%pvp&qm!I?Zb^uF;@kQ<KSP~{ 8Jrn)H-[F=GcYIvZ`a[=');
define('SECURE_AUTH_SALT', 'T^R-_3G(@dNid$FvZNT*D(-y#jx?x6- s~VUM?QKC$%EeD|<C7/qABa8+;5KX7sX');
define('LOGGED_IN_SALT',   'xn(Ro.1~0v!!8`#;C?n%PDQ7sD59HE{0PF?h]n$-8ot5 j@W^G&=;lnJRGO_DI5y');
define('NONCE_SALT',       'wzh {tRvmN/r%TK3zmsz]:r&Nm3K{slZ55&C~A5+J.V(Z|g+/m[K4sqC ] S%YmU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>