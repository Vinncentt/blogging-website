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
define( 'DB_NAME', 'bloggy' );

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
define( 'AUTH_KEY',         'UacA`RS*-i~0IMjY(!8+ijL25l+H7$al(ohHnq}T{P?J9jiNQ7H-HwQS^- S8&/l' );
define( 'SECURE_AUTH_KEY',  'Q]iN/+jx*Jgx@(v2XK2NnTT2po({vhA!e,mEFN@n7%+Ie<D! X~=Ztn~0pXX[U~[' );
define( 'LOGGED_IN_KEY',    '<D>QO#Bk$}9)zAud_X7$ETbvs*(hm|u/:8]^/![}gk(_hx6Dr8#||$Ae1Y!=_KR]' );
define( 'NONCE_KEY',        '4r1Y`gC4g>-FJ 3H#Uxw+ttR*/~82~-r{dh8J}%CN34Rpl,%DN<a},b];{-OZ`*B' );
define( 'AUTH_SALT',        '8Su)1n!0@j~7Neqk]YstDD7@&^4rafKsHn+QMqUBW,vD)0_gh;mL~&5r_HS@.f})' );
define( 'SECURE_AUTH_SALT', '%5m^IS*bb&6,Q6X`h2f|{?Jk8[t/LTde>4`XC.lRz0+.]}oe`BB]2oru{N)_n,6i' );
define( 'LOGGED_IN_SALT',   ';?o*f{RKsU?PVJeL;GLi[y9fT! ^U<@PQu/;_SgB,LRKO&!Z18PkLW|&z=7|GW@V' );
define( 'NONCE_SALT',       '<8elzPQdQQE~R%V7`{IIWI!V@6uVOtb?piERcb;n>{jYEwi6x8]s@>s%;2Se|drV' );

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
