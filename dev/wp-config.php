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
define('DB_NAME', 'db647489968');

/** MySQL database username */
define('DB_USER', 'dbo647489968');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         'u@7wj%`J/HtzxDRqP#Op2w|<gI?s ,FYVs8pO]lT$5c< Ok?Lm=lkXakp1tSWmF{');
define('SECURE_AUTH_KEY',  'zUj+>a:{8>idX!RxNgv07>dRe.%gglOw/ru;UKx)|}rb`cy{!m9+SfNpB(~56S 9');
define('LOGGED_IN_KEY',    'hBaX+`hh4>_aD+~*mV<)RM=#]6Se%5/gZ|*<Lco^7TZT@^rX^05r7[cV2$s}&wEL');
define('NONCE_KEY',        'v| Tu`xplq8 )lH0H$y]LHB Y%U-a +|}T1s$9GbM#GU19;_5lKVqc}7Uf5Q9kr=');
define('AUTH_SALT',        's@~eYtf,gyyr1:w}s}^aA(bNIIZF {hXWj7qQMD.>SWD/qHJv<-V5(V=]G|b_B_o');
define('SECURE_AUTH_SALT', '$a0{0X+iCE4. @lKZEn6aO]Mb(H1q8sd~3>%x]4&F4}^`5b~?!|OH5w>2I3g3bBu');
define('LOGGED_IN_SALT',   '%sVj3]G<I.&MO$%+XjG_b0c8W6k;6X3a$U40Txay&&ONLEc@;xI7FF4#epI>Ge^U');
define('NONCE_SALT',       'vu[f3!~2Fytc#O3{^p%.nT.=B7@zmgwE7OlvD8K1l2T.}y^EFfE5fEQ8Hn(Tpx:p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
