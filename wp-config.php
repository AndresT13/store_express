<?php
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
define( 'DB_NAME', 'tiendaVirtual' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`I=+w1_n@IOeS!ZSf+J.o UYqZ`cRgUO9,6Ijr{@`cRcPxaLHSXIZc61)+qdq/>S' );
define( 'SECURE_AUTH_KEY',  '$[i(!J@,/KSFzx7p[.Rcr`GtILXfd!I):]s-=;CM#pC,i*|YiJO;)~{9%Clr5RRP' );
define( 'LOGGED_IN_KEY',    '=!,JC~q>(TSX!,oO]#rBJ[!!{Ki{7^2#8bh*jKcb HSvAQ }[w: !lMjsJOk>G11' );
define( 'NONCE_KEY',        ',~tFU%r$w=OQM]AT2rPX0dghT;Z}}@}hyNN:Y(u}PO|GoJM9OD?(hXnekIRky8;A' );
define( 'AUTH_SALT',        'r2e($^k#V#<k1$};T##7rLd5qhgd[#C,~NkJ,:BU|b<Us PDPL3!WwT-Q w|t%Ei' );
define( 'SECURE_AUTH_SALT', 'G)$;-yVGB[/ {Ft(tax{5ui$+MrC eGf/`cZLgV;!fGxk=RiCOD8_q<iiieC5v E' );
define( 'LOGGED_IN_SALT',   'yI;8f5;9iXb|eGyItIISZh^a2-{c$<<P~X+R=/IyL;}jK8<#vp-kw$oEB( }txH[' );
define( 'NONCE_SALT',       'P+}.izNctx)7m@,Nhv)gF)tIX<Na0KZ0%`!jW}+m:aZ{FphS3|s&^gnP|8Ep 4OW' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
