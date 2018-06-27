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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'testUser');

/** MySQL database password */
define('DB_PASSWORD', 'testUser');

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
define('AUTH_KEY',         'rZ.N_}U{/[z;+_GIn$JN;zDMN9GDZ:JinZ:vx%V|4{j gl]^Cq]1uvK}.*D4&E/q');
define('SECURE_AUTH_KEY',  'y3oi,Ok`0Als6OI1s1I!|ANlDpF~7;-*Bql%2r5y;D%$Sy%P~X^ILMA0hfDHgzu/');
define('LOGGED_IN_KEY',    'h-L2).KK%Q(u)N>BZfT:p{vkS6gk}q.5je_BOpl@kEor[O[N.Iyb.;3U>ea%T]QL');
define('NONCE_KEY',        'X@|*g2w6#)Hx(G53pP4-B]:]MaCn1FR-;6?]T,pn]|$a8%WG>&c`WG6rfXKJf7Z`');
define('AUTH_SALT',        'Wh+BIBB.mQs,_C8Ed$e}X*,3Se COi6;WW={Hg1WtP6>O(ExTGGbO}CiYoJ+$)/F');
define('SECURE_AUTH_SALT', 'LpX[(Y!N}fUI09{FHa$RthA6P>*h4Q?{lxEL5#b7nW&CwPrdBX*LO6_#6]O|9Xml');
define('LOGGED_IN_SALT',   '}x`D<>:JU0A&S~X}`bFi;99,OFh@x8AsH#8Lv+Ve~BE31G-[gdPxqMvI~FBw&GTF');
define('NONCE_SALT',       'Ln@V;rYav6{AHEY&yT*w3`cy-2<.RDFd2-q_S{$^-!gp{,&/g!GM`t9:~%UC)ln>');

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
