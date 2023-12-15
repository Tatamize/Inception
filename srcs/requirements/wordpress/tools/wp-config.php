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
define( 'DB_NAME', 'ARG_DB' );

/** Database username */
define( 'DB_USER', 'ARG_USER' );

/** Database password */
define( 'DB_PASSWORD', 'ARG_PASS_SQL' );

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
define('AUTH_KEY',         'i({qX${DWO-_h}[|`j1fM`.oLg4p9f,P[|V6g*+YW~s+*DVGLaZhtj1_5=6Xo^02');
define('SECURE_AUTH_KEY',  '=1p:W2jO(J+?,-H+q!VT:$,t|,{8BXvRS|Z>J`X#%[7;Us-3)qQG-.O-.vQ[j~_G');
define('LOGGED_IN_KEY',    '|>:Nj|vY*3:Sbjy(RZK+Df|tQ+!J4h|E$Tr;RMUDQDIAhEJ:GY;5E|ssH?BQoo-{');
define('NONCE_KEY',        '+fZ~U2|$N7$OhY+`kX ``DhL|g0MC8#/][?~av|&~++SsZ[tGQ]|5ol`86&+P?Ns');
define('AUTH_SALT',        'x(6`jJo{71YsRrh!,A-}z?8bu%1dd)wOsf7=acub|,O<e@?`deuSf49EdlkC53/I');
define('SECURE_AUTH_SALT', 'w:F8VIVoQwhaGhK=Q5T#)]J%wBGZ7-}e/]omhO=J+)32pXDjao%0+o`U0nPsCo`M');
define('LOGGED_IN_SALT',   'Q~9 sp)v[B1y[%tW(nb-gj&mpU-nYil9mu]yLhCzrbz![m9MjD<pOT9+}:eIFZ1J');
define('NONCE_SALT',       'M1Wpg5)1%p]?$1Pw~2P^Y-irf0zv3uN?n1^J@(Nz)=*qlD-E vsMBT3}gi]t)- e');

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
