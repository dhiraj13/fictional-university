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


define('AUTH_KEY',         'y0+fqa44TpmhMQ0VPzWzNxca5wIB9z5sMSDFPibcsWBia4jruYyohZBK2mrIGHIbGFKgS0/MRZ6gHYiWHiFceA==');
define('SECURE_AUTH_KEY',  'KmNxUgpM30KDp+3TT0U7C4EnUQiatIjWJp7THe2VbwnSXgQvZRlRjGCTVmi0OnojUZMwgDUhSBDbgvkZadrLhg==');
define('LOGGED_IN_KEY',    '5rtVfiK0GDvyB3CRIs+kcsuD0/UusNLGlx3hoo6GAsKR8wTyU1pTeAq7Cnu74KFWFp9QbCg6VbSQMdzJfld7Iw==');
define('NONCE_KEY',        'iG4Tw7xvdoZFS2ZCHoTfoLgK6udZ1c/HUlcAUINewpZ1ybuTRaG2+uWWEoaiKRlMx27ps3pRbCDIEjtJRe6IgA==');
define('AUTH_SALT',        'g7vv5bp12bi6AFexJdEQ7dFJ6988QKJVxigK3K1I5DXDqyimpmkDuQTTLZLbvN95cZ75njGpZ9J/c56ZpAAR+g==');
define('SECURE_AUTH_SALT', 'MbX2KFF0FN6+EFyTarTezFqeilHRmKLq1YD4RJreXrmwowRl3qtynA+A1tHRGgK7pDvouW5VM9ZHsPGdmPuR0w==');
define('LOGGED_IN_SALT',   'znYgqAosPCNn9lBkuAmT+0Ax8IxNoLwLkz+TDH03Ri351uRKfTBoXXC3mg7j5zxV26CVizKVOP9RN/9Q3/pzeQ==');
define('NONCE_SALT',       'Pr28ulROvj6/ZlXx3pSZ6Vku6d9yISzWrivx6CtyFP1J3vQrXvZC47uqtuVnQxGgH7SEBbPjpUnKGNMY1d0+0Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
