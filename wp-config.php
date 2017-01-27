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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Wrigley2907@');

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
define('AUTH_KEY',         '=-<x3~VUqP}No}<*y~QZHqE&r99[a Dp8u4uA|_U?B$0:/y5/!(#8>fRu8Q^Csw.');
define('SECURE_AUTH_KEY',  'F1_4>o0IYQkVgu*8_Xg/1RS/J(u54(:9W? O70?v([9~TeLFcXB;EMs(.=tVG}Vq');
define('LOGGED_IN_KEY',    'Z{gkuvT;]n<_b|at27(~88+&t;zNUUY(a$IP=}@Klb~m$48GJzxncysdt*e@Q/ci');
define('NONCE_KEY',        'hWqrn/w-@fe`jM%U5Nr =W8?T~Vz86,0tsbGIL4{UUAcTAq?Nas+qi.eu4:@iX_K');
define('AUTH_SALT',        'pW4EEB{`P7:qQ|]`DQfg 0p9B%rZwK.lC8V%FZLtW#6TT#%E%T,)W@S)!S5_D;wQ');
define('SECURE_AUTH_SALT', '3Wm[i[aPVt]GKGF#/_z{ %;WG;[:h6fV@HhrXhFPaHI;O(`7l[(z1jw95>+:#5[_');
define('LOGGED_IN_SALT',   'g)YbC)b}SncIM>HeSyRX[+V=AZaoveIgbP/NyLwqsqFDiQq2W}6lm_w3a2(Ktm+A');
define('NONCE_SALT',       '1M4#%IvM?#/DWU%SF?!pHH{j]8ZZ*8_=ExQaYJ:%`aJx$`!N8-hpY$(Y))<fXK+k');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
