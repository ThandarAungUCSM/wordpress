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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Hn])POU2/SwD*W}D5_I-,66pfMk,C#5V&=[3Y$#ZSMR-m|q~tH!1[N)No_76Q^A=' );
define( 'SECURE_AUTH_KEY',  '{FO8x~=-*Q}T_k@xfQlsJLaEsMQ&:1Qw`<*euOa2(31Pf~)Q(L^Wy}_d||f6tD<P' );
define( 'LOGGED_IN_KEY',    'Vs`clt=+ncdFInxN97nXd.j(ju9$i39&yrN5%|K.4IjwJA;B9F=mguB/Nn3W>Ecw' );
define( 'NONCE_KEY',        'N(9N|)Z.vV_gp<bvel2I9cOo`^)~UyhO+)-<_rji&{yi;qVUp01D-YA;}2Aiz3B.' );
define( 'AUTH_SALT',        'ufwgAfp$GLv/+@IX0a`%5>msR6B}feKKNrjv@^kZbFG]}XULPwz<JOwgsX1l;9di' );
define( 'SECURE_AUTH_SALT', 'rI[E_S+YhFB7}J(p0=P{(F0R#x?vE~w`o !2X>KqZh-nO6L3GNr`8D=M3->nSrCL' );
define( 'LOGGED_IN_SALT',   'midg0&uY.G^O:^ck7r)*1}7t]lr1#0B0p+c~-FDEx1jX7hSz>hjI2!Y`!I$MTJ&&' );
define( 'NONCE_SALT',       'SHGMPaDIfwxIQY4C~EdO8 ^s1hI.WM`w5%?gH8j+|OJz*@da~/d-P>A4y6@N+c0V' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
