<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'homework7');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{QhN1^L{|Y!E;|+D5hlV6>}:SWIO,= sOzEX:~}.Pm]Bp>|<HC-G=DW:N.p^~t!?');
define('SECURE_AUTH_KEY',  'r^7&)nG!p%09KRkR}(%m//t< `9-Hj!5q_Ue}oY;>B@]WUW|`z3m;M<iuGLE/))X');
define('LOGGED_IN_KEY',    'LMa8cwrkS_WI+0M4!k}<%vO#RoL*B}].M-`c|G+Ys^w=PzWCwwzbFLh(|>CR6}JB');
define('NONCE_KEY',        ' ZyA{X=*10`3v8.5D=Hu]#m[$gz8.lS;~^APC4uwJ, %z*3C?e_.@q!f-#y{M=Lz');
define('AUTH_SALT',        't+[HUoOAW2V0A8=9)f{^r(FnC?+5G{Wv,(6:tUCm`1L!9~ueyvC,QkdLJ&Q#AQxi');
define('SECURE_AUTH_SALT', '&_X^zb{lIUUA+=wH|S3<7xV28|rx`I&9$hw!2nCe*rwR-wAuz|6oBfl{-Cb0U*F!');
define('LOGGED_IN_SALT',   'l3K6;[>4Cj`O| < OH>T)=Y7{ oPzwF(JaSC?]+#s;u/}h_W9&T:P3Q:97)x.drs');
define('NONCE_SALT',       'c=7D|b@M-hH+V0=+.>Q<:Of wpvP|zY/[-P8[q{kL.T.-x2`wU8O8jF^s?qiQ7VJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
