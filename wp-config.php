<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'template-2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'pN5SH^@1bY:;wb`qoaCZ%D+7rAoXP}scC.7J5/3kg{GBH3Q|uFgiw_Gj~Hdss%]{' );
define( 'SECURE_AUTH_KEY',  'wd0yVcWsFJ*m`_:!xJ|Q8El,?!_]0L!`q_1oY;Iv9W&ku$S{_ut5r-!G=VotnMAp' );
define( 'LOGGED_IN_KEY',    '#GZm/:uNkBS=0[Z63V1x}Mme:}([=M+KJ>XtvI|G&(g:-?Ix._ZlkE^Ru~TXP1qo' );
define( 'NONCE_KEY',        ')+$K]r(vKTQKlfRT)%_ry;scDXSB]yS9bct)wqU&]fl!F_Nmx!+2NKAPuJrBm9HT' );
define( 'AUTH_SALT',        'bLcQv+d{Jv/e[wnu`2E],RA%f9qfx9Zb~I_.8KltvPFt`fq}rG`d& M52 ~^nru9' );
define( 'SECURE_AUTH_SALT', '176OUaG[-!4>}@d0K_01<R>ZUI#3{q]cEkZ?78_b7A|6Z)Ttn_XK*;#Nf2p@P2h8' );
define( 'LOGGED_IN_SALT',   '5Hj>N}|@d8$0u[!)9A_:<I]1Hv{a]+poR%p%3`KRHYq:iC/RJF5BY ]f4EO>H~!$' );
define( 'NONCE_SALT',       'VxkN5ztHI^pL^DP*l}dx%<r@ZW(ex$@6ftjVv:jL#W>YJT&HLm.3p0 US%!t)g66' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
