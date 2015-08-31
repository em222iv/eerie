<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
///** The name of the database for WordPress */
define('DB_NAME', 'eerie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
//define('DB_NAME', 'eerie_se');
//
///** MySQL database username */
//define('DB_USER', 'eerie_se');
//
///** MySQL database password */
//define('DB_PASSWORD', 'NyUYN8xk');
//
///** MySQL hostname */
//define('DB_HOST', 'eerie.se.mysql');
//
///** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8mb4');
//
///** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2>#w<G%b0,R4&dX(5Bi&3pgOW85auLmF<+eP;yEu@nf+n T+P6_7F=_7uxXi}U;k');
define('SECURE_AUTH_KEY',  'Ej6vn*7lKi-K-{[a1bH,ncK-kfgr+v+qyjzafT]:0x0ya|N/Wy[$Pm5}?gt_}vjk');
define('LOGGED_IN_KEY',    '37+N2<Hp^DoOu[9?;ApO`B7qi#vB~W;%W_j7^VsQmY9q?V|a|,e^r2N!^IWbk)Q5');
define('NONCE_KEY',        'MO%W)YEi9*v:yivUX_g^i>.{G^[9-6PFY1Ibg-*)>hH8@c/)cq{cAeM8nVF)=>7r');
define('AUTH_SALT',        'J3ms[% -kf@`EW(& .7_gq+j5kJkG#,WQSF!s!}N}8me4I;8N!?RY(Vsaz5r-4v.');
define('SECURE_AUTH_SALT', 'm+.i~wEa/9Jk.k%5bjx>{3o*V&1m~snS~}xG:T;|A5X#lLvYqL~2HPico0Y_StH|');
define('LOGGED_IN_SALT',   'LTFGaoPHO.WrezS,Ub^U%$ipbvKJ@q.G=(R79m$&bPy*lb5x){~nLH,zXGK9~=QK');
define('NONCE_SALT',       'DOAMU#J}o+F;8pWuUDctmr@IWQeO{D}-t-4#hW8gv8BUp;,0@/51ssArGkgf7MHJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


//Lang
define ('WPLANG', 'sv_SE');
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define('SCRIPT_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
