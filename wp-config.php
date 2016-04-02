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
define('DB_NAME', 'cleanstream');

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
define('AUTH_KEY',         'i>AVI7|!l4dgE?.=7X O`+Is~CV#Td::&X=tIDMELh$-)P?N<j+Zvz@ryB+S9uJn');
define('SECURE_AUTH_KEY',  '/u2T^.x~o|Vr-d9.LxTdjL@j|ZP$.3GSIPa5_|h/bH?DUJ>Uv:MN+z-pJ}~N5GwN');
define('LOGGED_IN_KEY',    'Z8E^nO9U(@;5`| sQ51Bm,T,8yl-}qeL5pkDGwxE$N.-R;#ZVyBDCG8&AMk70WTX');
define('NONCE_KEY',        'Ud.!T~S1Pr.XMUg|BD]6G~,59+$T`Z4#J,TV_smZ^:3nI69KX;+SoQ-lRnba$XC+');
define('AUTH_SALT',        'q+r!uPs 887CKh l8SK,N%z$KHyI%2;VLV&wVxP(|hR,ra:{(4f!;|jT_Ta.^CMi');
define('SECURE_AUTH_SALT', 'dA+;[-P3|4Ig$Tt] ,k|t_hsQ,~.@-NDFsmb OVVrqE3!zd5c$B09k)s|]f8+5j1');
define('LOGGED_IN_SALT',   'v]@K4~l6`UUP7M)],rqJC-fwZVTVy/w-}OeN%6w85Lg9|X12I%m=p{W|#gjp-$0S');
define('NONCE_SALT',       '3`$*GF|mJA+}Zs7kUT<T./]|XdR)E;4/h>S--4v&]&9a+E2*3n^::gG<R(r+kqY$');

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
