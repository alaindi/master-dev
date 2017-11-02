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
define('DB_NAME', 'master-dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jG&fF2}c4;v$kGFoFqUn@TL+9-Q#[7UrZLi=r@(3g)n}`44Cb))r@d40M`qIYgax');
define('SECURE_AUTH_KEY',  'Q%=!-Cz_6)U79Nx5]5Z4fg=HXOQf78[TENeM9oM!M2P,Y3LF1r,Z<Ak_n`gx_NdV');
define('LOGGED_IN_KEY',    'I,,^o2^9|mQ#+Y@KkXz`xL6r/q[n<3z_1{e5r&tos^%|QAGjPy&o9iiO3|&9s5ig');
define('NONCE_KEY',        '!J5^1!jzZ65OYUMNVbW aF+KSC8J~=D$0lALSFO|Z/s94CoLwwL#emIx&2!beRM}');
define('AUTH_SALT',        ';$UzJ)ui=HOhF`4QZ}0Q+2)5!<fW-x?KpvXuH64**GC:@/7{$PFwfw@D_5%F3t(y');
define('SECURE_AUTH_SALT', '<RJH|.m$>ysFey>Apoig_DR~.Psmij2F6)]vdsYrx?:>9d4oG(tM}fi-=:(?Lwue');
define('LOGGED_IN_SALT',   'DdIO?[7MPGzd2u11HOp~k8QFd2XZ_! /^:*c^]>_}l<W61&;xgUW96J?8V}R=PY}');
define('NONCE_SALT',       '{`g/#(IutsH<hO4IAQ&/QS=AaEe>@2p9Fz@stG_JL&Vw0=;XFg<zY=D_6 fJuB]P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
define( 'WPCF7_AUTOP', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
