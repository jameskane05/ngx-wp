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
define('DB_NAME', 'ang2-wp');

/** MySQL database username */
define('DB_USER', 'ang2-wp');

/** MySQL database password */
define('DB_PASSWORD', 'ang2-wp');

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
define('AUTH_KEY',         ',iNW86.)^e+=`d.e:=;/-NCa3+!F6y3q1Ba<Ux)7G&F=%Wi}F0w_b~E@sd0--(3G');
define('SECURE_AUTH_KEY',  '!8k>-jP`+B4L31fWoC7}}bE>)kO#hW)m${>}m9h1dM^yJ>1:f[Z-fPww40)Fcs9d');
define('LOGGED_IN_KEY',    'Wf+(@-[yWXR9hk#u67HmX{WfKH%_kldS|mwGk$nj}3F=;dKp`%5e0z,Q@UMG|N::');
define('NONCE_KEY',        '{P7s/IRRzm%)SO ej1KavZ8#V.>[Sc$(:Z?=!D)|c4|+|EdH#F){#oy0perWsN4>');
define('AUTH_SALT',        'i?.w]4`U<%ShAg2p]!RZL/%TXdJ+|`9VsCX)c!mOclY9V/C]Z79Qu?DuVh47H|+q');
define('SECURE_AUTH_SALT', 'kf&oy:NZ1Z-f0k1^<A~ZnDEt<n{[N-1>Y`^bgS:$|N_Xr!z%cU_LEeqK?q0gr,-G');
define('LOGGED_IN_SALT',   '-4|ObT+d//df=]h<hY^3ro3$GJMa SuZiB-k%x_O^ 2T0z5N84;*sJ-1qpNn^F)-');
define('NONCE_SALT',       'f_5qnZB+@S:XE,M:XsjpWr%w:nAkS>$b_|fA>6H2+_8@:LvEX?Di+K6R?-AxfF_;');

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
define('WP_DEBUG', true, E_STRICT);

/* That's all, stop editing! Happy blogging. */


define('JWT_AUTH_SECRET_KEY', 'cB?G5HzQ]c6Ny7!S|Kt%[5^Oo &+Cb9j7g|Q76%F3X3{#oh:;APcl-CkKkec5f/]');
define('JWT_AUTH_CORS_ENABLE', true);


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

