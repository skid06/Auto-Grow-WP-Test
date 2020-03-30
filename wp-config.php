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
define('DB_NAME', 'wp-test');

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
define('AUTH_KEY',         '6@o=Ug(>!wu#/f?1<,1Mu&+rB-LTEXN3a;7xQ>K(Jn`<082Bc:[$?^OKR#[+T{)t');
define('SECURE_AUTH_KEY',  '|s4+1cijJhbLX=H9mfUjm28w84K4x;JDp*DZA5QoG38^OLRt!_}a*#w+wIIGL6Kl');
define('LOGGED_IN_KEY',    'suzdQ $4/<.g{m3DlMdNiahUG=AE&SFSG;*/& ~t_7lpu#yAj*P,s QP, A9h}Ph');
define('NONCE_KEY',        'GD^/V)!Kn_kcR_X|Bb9`F!1P#8&q3b2P=b(I-D-zlIv)lVfjI~l,wv>TQXP=KZS6');
define('AUTH_SALT',        '06?:A?E[e7V4Aj%Z@H}4LgE]UV&u-gfuoLpO*BS3YQd.px,(Gt[i9b-;1upom~F|');
define('SECURE_AUTH_SALT', 'j/}<Pi*S/t?WXvMH6Z2BEiq?(XhZ8Yj9uoiGro!>/g>2Vz>kN U0A bBE~g_Tbsm');
define('LOGGED_IN_SALT',   'XdFPycVH>Fq4SkrN^9OU87<p:d:Mj50s?c<aE(3fLeM0vhv;QY=Q|oTdyRzm9I@7');
define('NONCE_SALT',       'Y1&9al1I65a0cur2qh),R:_rA6~dx>#HiE1t6G!3O/I/xV+>v8-!5I}NZ&~B^e3K');

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
