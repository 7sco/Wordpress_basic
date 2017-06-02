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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'francisco');

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
define('AUTH_KEY',         'o}.jnzJ64$eO,Q8H2 ^4i&tG?V(V$wtQ4Vj[me.@py`}:wvZykO|cJ%cuL.}e@G5');
define('SECURE_AUTH_KEY',  'TL9A=|Oqr76@@,@[0b#Y$BHA}?&@[t8)AW_R&^tx^We ey}n&`a_(7xWG<?+6-_{');
define('LOGGED_IN_KEY',    '[&& tk1_K4s;F62ab9ZovHyUEi(#m->6g5^wx`gB3$40QP(zdCL>4rI}#o{?CjGl');
define('NONCE_KEY',        '|HU16PtRe3y}!1V0.HFdG}&z[fMv#~lyVXhhnfO)CmFSH6`SR[YqL;rLE2<LHvS)');
define('AUTH_SALT',        'J1-pwqVgZgd)-`U5t4;uan-BDlAVK64x}QRVx_6wY[To[a}%7s.?jhue$cFKo%a~');
define('SECURE_AUTH_SALT', 'Vc7x!mpud*zIT5iVt]vaP3G5Maq%R{qDF/[=q<zd[U~h_,(qcs#NTbg0xonQUfne');
define('LOGGED_IN_SALT',   'D5q;RG^u/C;@-)4+CX8U?bjk_g1r;#sbp}@w/P9,kP1;tUrY/+Uv9k&:>ZTPqQig');
define('NONCE_SALT',       'bH$19JfgoR%PKX~5@Ir;^sU_h1RJEcQmb(LD?CuaC0il(JJ7L#@6f>CsEj}}zN1:');

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
