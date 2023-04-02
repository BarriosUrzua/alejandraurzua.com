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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define( 'AUTH_KEY',         'yevs7ihjdbqm6stokaovartrt32tqppuowaebbftp3wsigmcewo7i7nypk8izzuu' );
define( 'SECURE_AUTH_KEY',  'lbnwtjultuydeowolia4tkxhqns0mhr4kdkk352x1322a2dxqkvwvwwobchy4yvc' );
define( 'LOGGED_IN_KEY',    '7n5lvihfx7l7bxomlekrmalau6cwzfoekwxbi0jd0fa0rktthhoxefodzrvczeih' );
define( 'NONCE_KEY',        'umlvbait99qfen1njthsvapnlfp5iooel7zva6xnhjahu2d9v7as6pdhicg5loo3' );
define( 'AUTH_SALT',        'aqrugv12xknt1resdmd95h8f44xfefjfuchnoevtcrqu8vjrqshxhlmrmi3dzrus' );
define( 'SECURE_AUTH_SALT', 'iav62m09epzsev06i6lshqq5vcxx9gyx5jfwps52lzmj6glvq9jegyi945erkwpd' );
define( 'LOGGED_IN_SALT',   'qkofmmsqqfdhz2brggysi5t4s4ki7ov2opj4zzebcst9tblbkaopi0m1i60gohgo' );
define( 'NONCE_SALT',       'cpcq72baevi2lawawu2sxlglalch3fwgwsxwnddydj7peey1p8l5dv5vfkzinkmv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
