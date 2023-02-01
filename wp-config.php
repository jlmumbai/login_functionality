<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'login_func' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sE498C9Y/R:7^t2$T,-asVo02tnpt8{TY?kPiIFFXB*!s/v( Ze4K(`mC]rJ}VWq' );
define( 'SECURE_AUTH_KEY',  'kGD_8Le8 /y,UwlZ4?@zp!,+uMXLS_ZPo,KY(TuTmIrtT;6>RAyz<t3W1< U]w.2' );
define( 'LOGGED_IN_KEY',    '+yP@kt)caF@:0`oUt1+5#F!jBekESlCr)0Y@0z@eSXIqBbtw{vSFYep.%6{M<ipJ' );
define( 'NONCE_KEY',        ' _.ktfyTaL~*f5K){1-/Ayk%]]AdKu57@uSSHoL){lxB%$z8^T+}<x?NAb6f@;]c' );
define( 'AUTH_SALT',        'jpUJjv5D=9_eD*6~NT<(VkDpAD0-el,79D)DLhy8a B+3RH/TN9I-)n_0+|BmC_D' );
define( 'SECURE_AUTH_SALT', '7PYy!t {>{a0:&9qwoS&31`]jU/VN`*06R?z!lQwxMNbf*TYXF35rS*MfmD@bg=+' );
define( 'LOGGED_IN_SALT',   '={*7lMADui86<<+#6:E|T#jG_N0}+iR#Uok;Iesz.>]bblHg2d;<jg/m?~W7()r!' );
define( 'NONCE_SALT',       't@|NA(BQ~~-Az!>Aejy]05URUpuLE[gnKj-4C|jU3%CUQ7)Uo5wj`L4#7}V~3/BO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dev_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
