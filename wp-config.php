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
define('DB_NAME', 'wordpress_rest');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g[HDd?ypxx?)m}5 3OVdRWw:Y$lW-Ot}F.4Q}L+r~3bK%vM46FwfP{u@!*k502!Q');
define('SECURE_AUTH_KEY',  'iI>b9DC#2BAHRUc(.6Gx yS8k5B /q}:<O)LP1ipn1:7&#_-z:v[|!FYI#13]M,t');
define('LOGGED_IN_KEY',    ',^-g@n,MJ# .z%q&KyFy~X)92m yP9?]]E_7?_~B~/_;*eM&B#r*M}ztrFL/5P9G');
define('NONCE_KEY',        '_PoD_uOF4%p(?+L;PfH-4;PJT]A^K)W3xlU[Fb)$JxaFh8R<4Li$w_G|eDZ[oA~`');
define('AUTH_SALT',        'sF<SS/Xz7=W@KNF1cGFa@ms!9<{{L:`u~3Te5_9a?ctMS8[3|_Xtf@*cl?$Ze9FY');
define('SECURE_AUTH_SALT', '5>.w([qA+W}WZB`lT+w-UVutu96g@)*OeuyLWV&PG{va|J5jFCvb^ }6qMHOTmD0');
define('LOGGED_IN_SALT',   'Tn0TPNCRtmXH:q:w5j;NnAYtk:fr.go8}.D+}nGp>Qqj8zK+1,F4*?iNgmq/)[BY');
define('NONCE_SALT',       '8HikWDGekRRJgb$TH^kBiQe>9|ul~jQetv%XAS}85,&[zyKa$/bDc)q4,sMn<hK-');

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
