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
define('DB_NAME', 'word_hello');

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
define('AUTH_KEY',         'F<u/E}JUYIR gOSo#bd!Iz~63PQ/P HG[eaC<8T0hQkWS:+!@>#`s1=?2wtSmA];');
define('SECURE_AUTH_KEY',  'QYHpdZMVz|Wxw!IMtwgX%bL+=Q8k5/:RlGOPLugY2KqEEoG};+hJ.UD|xW4q!{L-');
define('LOGGED_IN_KEY',    '{5$#GLOP<`kR|5#jNv{*JgdbrSS:70S-_f}-2}g!KTpKve62m?NGoJxK2o>lQBPr');
define('NONCE_KEY',        'm8>MI T|te$C>4Xex3]Y;Q*>3=WYjI<[vm0,i!b&0T:0(/FF?&pWAic%v@nNpX*9');
define('AUTH_SALT',        'Wf0yTp/64$+=+];p/9ScCyX[:R?+_uHU_EeZf(_O#?#FJEmgA0IKLSU|YoZlYEC&');
define('SECURE_AUTH_SALT', 'b2r8PP?zBHp:8)x^eru# 4(/&,oW{vINM|WOf~|2bsm(c+Kw9V9$=-B_i*0N>.IF');
define('LOGGED_IN_SALT',   't7!Ac4*H>7.d~)y]]%sCJ*R`vpE9_.X&M{ tLkL|f5{0jS2|SFB8|e?-oP01O 8l');
define('NONCE_SALT',       'u!yb~{d<tVV(bEu:sEvff+elZT5beV`bw0`DK!8f<XNb9]1lj7*9^Q(}tjLUy0R]');

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
