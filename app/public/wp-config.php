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


define('AUTH_KEY',         'RuuuwQD0/1t1gXUDLo7bwTnZPsMy1dLGv9+nXWaJHxOz6JWcvMe6rwqavhIhcXrR4oTIet2lES4gYpZi9FSsdw==');
define('SECURE_AUTH_KEY',  'i01x6CU6wVCjx1+cYfe7EhUFTCCS/0C8TnoEh2Uk8wU18p28OOkAyWVxoUZ7d/WYCn+aRcTc1eomwD77IHnuCw==');
define('LOGGED_IN_KEY',    'BIu41Cb0EZHjCYfupOJ8NXWArQTQe6Vu43ur+yuV6h1Uke6SxYAosbaGNT1LgdgZDemV+XODT0gw2/iBBw1W1A==');
define('NONCE_KEY',        'Rn2nLepxNzszGLaYJCr4xJ7s9erY+ACsBe0rIxicJZhBqcjAL62tE8yKUf7F3me0Vt1E1cXKAKX4X7Rb59xEFQ==');
define('AUTH_SALT',        '0wTsrV73Zgt2SdS6089pwIydY6wDyTRJNXrWK6cEuEutMp0/rY5x0r8UciVWada0U6A0n3KMjUBxvgRFPzVxZw==');
define('SECURE_AUTH_SALT', 'xx7b5cMMaK5FfvjSgA7dhTiSUaP+0H0jGdGFK9W41YOMPfBp25jfX47szIHabZP8CDCj6t8Hpv4OEogJcVv8lA==');
define('LOGGED_IN_SALT',   'X8MaSBZEhRp3AN9fzwPKn0OSxHVfv2I86pF4wCxiIlhvgg6Oc6rkAzWu4b7Jxwfl1pvER+nmSG4bSPl+W6Ep5g==');
define('NONCE_SALT',       'KqXZ9wPWhgWihW+V8jKDy2G+0lLRoT3KtWd9HTlHhSNy8JxOF2FwVLrKpRD4tyAWJcVBkgYPy69UgsWdj0BnTQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
