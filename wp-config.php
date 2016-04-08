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
define('DB_NAME', 'IUSM');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'HWvbFIJIE`ZQTc*2S%0!Ob~C<t%d,-i>nY,,igE=W:/F9FD1{4yHR:`+=sPFmNHJ');
define('SECURE_AUTH_KEY',  '&hhOGz-v|YM/})6r.IuX~Bec1*,(vN!bJvk+HJr ODm-Zhvl!9Rvdf2HYh;+_:OX');
define('LOGGED_IN_KEY',    '533lv!;8|GLhmATm?v7GY=Sh3N2+W;fcg t5di00_-<p|35Z,V8MY+<O4usfdtVb');
define('NONCE_KEY',        'YelMA.|[<LU=0$58GIsr/|47dPe++|%KPMl&]T.m,=Q*3:%{Q*fHT^qD(O#DChs4');
define('AUTH_SALT',        'D3/`&{yy^QIPTENDxI)$7PkDphu9Vwp.N<hg~O^sGcpyCtu v)7Z}Nw6pR5-n+w=');
define('SECURE_AUTH_SALT', '[|G[NovIZ,=`_+3r,~]1< iM)1-h5$1c-j96QNYwqYR$H?hPl>1q6QXh`!L!+2u|');
define('LOGGED_IN_SALT',   'zq@x4:;yly<ieEM+_#Q|{ooY/Wyl6EJ;^O]Vj@Aft%bvLj&|QoKGa@(AUisk3,B9');
define('NONCE_SALT',       'WbfI-B tqlA<X3A%kGx9jq98`G:d|xp|-)]vD^VuW:$-Tc-1$X_]r(qvg:@8kD3<');

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
