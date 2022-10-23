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
define('DB_NAME', 'kernelx1_wordpress_e');

/** MySQL database username */
define('DB_USER',       'kernelx1_wordpress_c');

/** MySQL database password */
define('DB_PASSWORD',       '9zY_zD18cE');

/** MySQL hostname */
define('DB_HOST', 'srv-pleskdb53.ps.kz:3306');

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
define('AUTH_KEY',       'EWaM*B^HdpOoNBSjxmd^01!RK378smB!lkj6xht&!8krh^k%zW%oJdO)jY2t2CPZ');
define('SECURE_AUTH_KEY',       '9Y)a9UP60&u1%*s8LwCjEp7ggkAQYTVNnni#I@SVljPEOrZwbi@2s3TGKLr3mGKc');
define('LOGGED_IN_KEY',       'Y)DqG%zjY1UT%NAp1jYX6ETjwkl6%2GUyZTlMWTNvTWT%LbyW%&dXR)txS)pxfTh');
define('NONCE_KEY',       '8ve5Fuc3y7zCy@Z3ynNUL%kz1tLu)iHEwMg#UgD9W1hA*C@H5m2NlILE@SRxb3LJ');
define('AUTH_SALT',       't!9wCIke6Iq5cCE8Ysiu29#5*#Xq2k2OVWgc9lSrZ53lbPYiLWPATFCyko8r2Feb');
define('SECURE_AUTH_SALT',       'Y72aKaPWo%GpoRxat2CIVdsx84soonApTJZx0#4Oz*GsH(BVrXlIY9MGSVPaOmL*');
define('LOGGED_IN_SALT',       'G#ZOv(AONJ1bqPOgzjk@XLcWsZgGJyX)3QHMaojb@RYTCcvSnjimC0O3n0Blyg)G');
define('NONCE_SALT',       'W8wHxY2P)3#hkPIdB2Hde0&hUJLgApRP#LQ164uMFXb3d%GJZq^W7Iq9NshdrLb)');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qsgoSV8Al_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
