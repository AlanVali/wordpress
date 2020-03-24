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
define( 'DB_NAME', 'valialan_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'valialan_kassu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Allukas10!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** PHP MEMORY LIMIT CHANGE */
define('WP_MEMORY_LIMIT', '256M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EBki!=*vVY3rRUy&TtCJAO:Zj8R+e F]>=tF-tVl#&q|TUA/PGak4v%%a)J</WW-' );
define( 'SECURE_AUTH_KEY',  'bV@l+;7(X8yu77p4Tr_)RRgjhY#V|t(0L~ 6[u/i8HFBvJ.MGPQG2<Ej0{7fpx*#' );
define( 'LOGGED_IN_KEY',    'P+nBE<^H>1LB/X409;IM-~cR%nIhqV$bT)+*)&)/g!^cN!tR|l!}uWbw /F7nQ:_' );
define( 'NONCE_KEY',        'jhvsXcYn8]..GP/X)>#LKJ%j)H3`P-AWD~$ |:im<(YrjC$Xofe:.K:R&,J4%Rl>' );
define( 'AUTH_SALT',        'kUqaH.tFZDg.*!GKm%y/E7b8l</*`DJ/A{&1{)G}zj|YLC:J(9XmF>ME3N2Kjb%S' );
define( 'SECURE_AUTH_SALT', 'Ghlo&m1<l<G[.M b[.wVFE.YUUZ~UMzxX$oUOI;`aEm([k&`HajOiO$.kRFJE^h4' );
define( 'LOGGED_IN_SALT',   '&9g}B%f{7*+xov[pM)oeT{dNms^9:^R_e+yyI8xVPzK#@/ba&dNUAW$r#XQ4BG7U' );
define( 'NONCE_SALT',       '/dTiGUKm*GRegSF:0_h26*M$3e= ~@5obtRn8ctRWUAx9n1KXzh8}zW6.KVM_XZ^' );

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
