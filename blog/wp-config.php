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
define('DB_NAME', 'clientua_cwlnew');

/** MySQL database username */
define('DB_USER', 'clientua_cwlnew');

/** MySQL database password */
define('DB_PASSWORD', 'XiwDe8ZR3V]T');

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
define('AUTH_KEY',         '`(SX.6*Mc*JrW)0n:;]{f.ev#dtTX9dcoU@k4t!Z^r9Ou;MIjYa;[:gD~V,/V$Y&');
define('SECURE_AUTH_KEY',  'I* 6G7X+@K.B8{a4CzVpc@VlH4EqD(g<4Gse)r@/Ev[wvE8u*UeO>ti[O%{wX#aI');
define('LOGGED_IN_KEY',    'KRa]_>44vzK%mKyOnjfQSWgkr]nofAswVp//8B,^^(4:ZJ(gYp+0mZlPHj08;U4c');
define('NONCE_KEY',        '@dB=`jBU0&}CwegVj:umP2v>ENihujW5{E/JL%j0MCxEjtb!V4[TCC`RS|0]_b|g');
define('AUTH_SALT',        'nv[~/^xY7b$%p<Tc{65C lUDNIu<|<1>O)dw[&k]B(my09p+uE$? S9`+gf|*6;!');
define('SECURE_AUTH_SALT', 'F]V;2yb5{@QC~X8=@oS{5s]M3luQw|#v4[Kd%XAr6W;..a#Jq,9}[lEd0tt <0>0');
define('LOGGED_IN_SALT',   'D[dhFbf+10~4VA`@,q 1]O3ZR{vTns^jPiXV{*vdo&<Quf;q_~h]:7S=`M6({:-:');
define('NONCE_SALT',       '^2NHHW1BcLnV8,.B$6Z+o@5S2lAiYv*Ycv z71QK{wim[Po:B_emg,{3.$h6c_fA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
