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
define( 'DB_NAME', 'wouter' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Kv}f ;*hTnQ19T~32~%scx?&<h;z&N,#2G1-l3Z{EO!tC B%+s+xxsD%pA$@C4D#' );
define( 'SECURE_AUTH_KEY',  '3aRkU_!JX&,&}?td|S*[ulg4wxFZtD#=9j.3$N$K)kNk3SxL9vfDtLD~580733}|' );
define( 'LOGGED_IN_KEY',    '[VNs0%k3zOE0q/ldu;^X~w)kauZxfYf1ac^VqJ$8y+C&ZU3>dbX5r;8+S)d26nJ0' );
define( 'NONCE_KEY',        'zjs5}.9L!E,|QHAEomm~oToQT<D=s2o~@n=},QgIE7{81zhup*%)lM~Y!E+.=Z-`' );
define( 'AUTH_SALT',        'qA@uXJ{W0x02,7/0X3}_Tz`(|h+!Wwp`.Xz8DV&gXl<<Ta+d3u^VH-}!g-SuW&KF' );
define( 'SECURE_AUTH_SALT', 'ZO43j_o~b.Pz9}c^!(VE2 |6;swQX6Vi03,c5r<3?YDtl[S>)#0)8.a0$Q%o9uhg' );
define( 'LOGGED_IN_SALT',   'Z~.k(qw$&<X3;o4 pCnQoUwI}(?.|!]KNF3m?Sc8ypL/Q~-Elv`ghkfzy$5b{QGY' );
define( 'NONCE_SALT',       'b?_h&rF7&VXi0ONAuYj^RW6LWc<izrgJ9E4_Pb+fKShM;_Za);:2cWrZX[B5&YK3' );

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
