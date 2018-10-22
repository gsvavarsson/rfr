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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2111561' );

/** MySQL database username */
define( 'DB_USER', 'wpuser74378' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VZ4xwdqe2kCZDOo' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Auy`hS8CIa@wu{+I=#U{oC+,T>xTucycvSD[PXlz%^!)0Nm7FZ6;+#ihR7B-WXcY' );
define( 'SECURE_AUTH_KEY',  'xZBFh*Uw0T|5?Go{ap_dtphCa)R4s)UMra11B2z2B`ESsjWe+wW}{,cYC7dr)@ra' );
define( 'LOGGED_IN_KEY',    '?ZKV.y#Eysz@=?:8fAOc89O?uF_ZbV^T4scyoF`6;^_]5_]2<d##LL.`boFX<~dO' );
define( 'NONCE_KEY',        '7$Z4l]y{`Ii%2AiG>!P):T!SEJS:kKixK41il3~lW7CL*OAFA{bZV*_Oa7WpcR}_' );
define( 'AUTH_SALT',        'bM{R:Y+^aQ|SyNM ARhCp15XF]WvcoAE9X#^uq U{5h,{UP`_yDZAYJbFSH%&*y~' );
define( 'SECURE_AUTH_SALT', 'HB6$].UmqOuwFCkU~QFNz[hYw?97}v$n0`(%ABa(]$n`y,yf1-ws:lNj]q@66ZF>' );
define( 'LOGGED_IN_SALT',   'TMe#*YWjUvZ9[0rndJfEACmlvK<G#}49j,X`kCj+jZ>n;5*(gSP:/s{CV>u*7i4m' );
define( 'NONCE_SALT',       'd0Sd#q{eoc)w3TzcA1NH1(#7hBCv2a>Et-MDJCe~_J/9//yG0HT#{^q+m4,Ysy(Z' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'FORCE_SSL_ADMIN', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
