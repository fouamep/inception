<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db1' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'pwd' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J|e{Y/+%)@CQDToi*KOB4=p4-.#Tre[tDfvrExVd;B-+:[~!fwX${{8blBoXw`_B' );
define( 'SECURE_AUTH_KEY',  '9&ucXJypOoH}[;+QxXlZ#byUhGY|]H_ky2GVYm/2{k!UIf!:v,,J+ mZ8cQS|: 5' );
define( 'LOGGED_IN_KEY',    '<F,3C3 o6&-46S4arlY zoY57lhg7{MDqj^?.bBpzci1Bgyl?]^t^4~OK O+#VoT' );
define( 'NONCE_KEY',        '$g-IJloLZKAG]=q~*yapUe+=DuFsFp;9M}gY*1%vVBb7k6jpKg@fFv~c(8j?m1|*' );
define( 'AUTH_SALT',        'G#-|*/clt2-M.~P~=[^Cm*<..5)|d=y2ClWK!Ssk-3@b5Ir^}#FqH8UVx4(Ya:_F' );
define( 'SECURE_AUTH_SALT', ':;!W{^WVR7i2ibl@M,)/[[Pj2Yxlr}wA.60=*LE}X|h*G<Ei16 /7/oORB+/;hL+' );
define( 'LOGGED_IN_SALT',   '5tz NM&+d=4CQ]q[&([$_bvIakj)1qzwrLcud9`,z5*d3O|_<DK8&A4M1g,Y0Dfy' );
define( 'NONCE_SALT',       'Ryb^`S%}`2a)L^F!/MbjPwy&/Ms?_54W aJw:|{bnV6_*M+V.;E#]C4b%<pxYTy`' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}
// hhhh
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
