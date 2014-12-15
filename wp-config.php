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
define('DB_NAME', '23snaps-blog-database');

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
define('AUTH_KEY',         '/W1i0MOTV1;2 B57tI u4v?O-w2C]o}zuQL%Y):Rif?1i<5uCLFfv#@`B{FLaM|N');
define('SECURE_AUTH_KEY',  '+%+zseA_MMeUcO$xdYhTlLT+%nf;Vq4R~O-tSJ+}XH[c$h85.=+zjxjE-r?HIg.(');
define('LOGGED_IN_KEY',    '75foIko15b3y.<7PernSW,|0E@s4+R]Recd~Q]{[<U<AWj,2k1L5W}#g$T`5(64g');
define('NONCE_KEY',        'O%Nylt_VK-yrS9c6o(9F7+=9-}lJ2$_$ ]4[p%,z[ ;0kwysP)Q5prwi&{lx6`y;');
define('AUTH_SALT',        'nTq~B_CrO9|v831#Z{U;!e5lIs@t [J+MZ{#OnxRq`R)N{P$HUydph3C|eR+5Ey:');
define('SECURE_AUTH_SALT', '/&UPT1R-YV|kZf-F:j;YthsW}.-gW?-QO ~(>Vn9?`G0w+7{t{PxPyC@vsN4zu$y');
define('LOGGED_IN_SALT',   'j;2}}!&_XH!VSdOhQ=zJ/q5RX~Y=BVq~bEl>j[I<[vE)`ZeHE!V1k}b7Pq9~c*-.');
define('NONCE_SALT',       'ft-,MeuNPN-+3vWW-?-3k$QndAWi|5oD|cxgOhn;y4n}f/+- <D%/)]*r=$ZQ9qL');

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

define('WP_ALLOW_REPAIR', true);
