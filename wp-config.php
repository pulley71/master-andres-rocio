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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'g9WzHtOm4ONPHp523BZOxD0VzFsXm99Pqprx19O5KSvMvT3HMeSvxqsail6owiCz' );
define( 'SECURE_AUTH_KEY',  'SynltaMu7Eyd4n2Wm6ZM4Z7fYOjFBEIV1uiYED4TzDyRmpbcHk66IZcVfuutxEeV' );
define( 'LOGGED_IN_KEY',    'ouNU3VdZ1w9N7HgYjmkE9Ij1SyODtzjQl8xQ7jIlok4eXCHlNTleasSCsk3buQFo' );
define( 'NONCE_KEY',        '4AVPCVSxbGGmZ8G9wErnWOs3CYevCvepKbNjyGloeO0tDFB6AGPKaK16TlFRSE42' );
define( 'AUTH_SALT',        'z5gDWoiLMyP1Grp9UWu5IvubR5J1ZUaxilyIFqbI8Wj8zm05GpQ6MOI8X23RNYRB' );
define( 'SECURE_AUTH_SALT', 'aLdQQQn0dKlUzd5lB3lksUxqLOLbNdOjT1fEd7A97eacF4v8G2TAodQcnptJ4SOx' );
define( 'LOGGED_IN_SALT',   'b6X3jmguo9l0f31jBQWMfxQF2tIuVlMfhtMPjVGg8vkgBs8QMw3JMHCfdRzEVUah' );
define( 'NONCE_SALT',       'DsxXBfY3BHhG3VJ2vkAzprxugGDmUPK9dcEHiQjc7m8436Xq2JvkKEZUEvwmrVzH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
