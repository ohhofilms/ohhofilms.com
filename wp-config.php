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
define('DB_NAME', 'ohhofilmsdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '192.168.2.3');

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
define('AUTH_KEY',         '23W$D4i.M^-ijOeHEyUQD$F EE[Y.CL7pUq7&]2aV}x;km*DeButp8-#rR&d{_CB');
define('SECURE_AUTH_KEY',  '8GZLkJ1s-[j?t+lr7,rxc8X`t1$&H6(nm_s7~U(7?*^Ha](h$fD^#&2lQ+ijOOq,');
define('LOGGED_IN_KEY',    ']m8~Y+j[fpSY>RW>WBh>g/A;c8OVv|y(=B/N;-9zyYgH]?&]<;.>+k{08bj(iP>g');
define('NONCE_KEY',        'E,pH:|V2lc7=jxXF}bV>lGOYlrw>%?u;N!0@8&j5u@+bW`tj{-#O6%4mH(]a;]z*');
define('AUTH_SALT',        'gjak}Mfxwd(REIBa+Kd-=bi5TVfGI$tX|{bd ~xnu %l3t<87QdZ<}uk]k?zVtcR');
define('SECURE_AUTH_SALT', '9M;o6YI5`rxx4e)[go!=ujC`8wd:yAk#SeEV[2GZ4%#^0(WDTsw=[N;dWC4tcf%7');
define('LOGGED_IN_SALT',   ';!XKJt2sE1Pv2eAr`]u_5AkZrx8XOi(4vNr;Qg|6.wx&3K9w9KZK;e%duWbZodn<');
define('NONCE_SALT',       'z&c<t*2Y}F`#mSda1x->sqbRuc8`~HNKhH?#*;>DqG{JAwf8x0v*^Z*}yXa&>tbs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ohho_';

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
