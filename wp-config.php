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
define('DB_NAME', 'ygyjws');

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
define('AUTH_KEY',         '~UhS$sqnL2N&fdvOV9bXqj&@Z^]6:)0^!=c*=dO/bXIbXtclX 4J[ WV=o<No&4^');
define('SECURE_AUTH_KEY',  ':8/eAZs83p7O@~k%$qHz5Dmiq&1@^85F1b[ub?7IZ<%QV9Mzq@&hIg[,uv+r,e&O');
define('LOGGED_IN_KEY',    'Z=*}*(>;/r{8b)6Fo)iCofg2-}Jsz/ZJ5JpMhnB]@NSIaxp&:rgugV?G%.WyEm=7');
define('NONCE_KEY',        'FA_`q.2~/t|VB16;DjoeXA2Zq8_<U!5d&d+U&FXwc;0jZ_@g2i#~#|+NRbqQAYA3');
define('AUTH_SALT',        '_^BC$r;:hTIyIPQ(_cCWR.UO)W@BRx}5~I_l%}3:u$bDs3ol1Fv45 fuA@x*m@w7');
define('SECURE_AUTH_SALT', '/%$2{J5)8qf`4%HZ-QJCJ-^?g5_qaN_H+=)2cN=%qOcK+y[bf<t.cD etw`kr%U?');
define('LOGGED_IN_SALT',   '4R.9tFsaLRAx<;R?t7**RF>1(#1;GIp9[(ttQDiT)3 =s@be.`Z|GR[W2tLHP[HD');
define('NONCE_SALT',       'wmZ%F&/aUdIy>@S#+a9Vj_).eVOor5cXDejEwnv1;{3Z.r3{$votX)[S}MCQ|dz]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ygyjws_';

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
