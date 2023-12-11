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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_35574356_wp798' );

/** Database username */
define( 'DB_USER', 'if0_35574356' );

/** Database password */
define( 'DB_PASSWORD', 'LSD2o8pJ8Sy2rr' );

/** Database hostname */
define( 'DB_HOST', 'sql208.infinityfree.com' );

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
define( 'AUTH_KEY',         'd1ofruvzkk8ur7bnxsd8gbvoup2duugqymrbped87d4wrlehylu7bga18cv06mvb' );
define( 'SECURE_AUTH_KEY',  'rigwo4vkrq2osjifclwlmrraqnbywupaqgb24bpe9kenzlgc6mzxka6vx2zw707s' );
define( 'LOGGED_IN_KEY',    'tabk5sghrgrnzkisvzundsarppab0wgne9iqjwgcczvkr19db0fispv8ch1uujph' );
define( 'NONCE_KEY',        '3dj1pg8p9cglwmqlokchlryvzs7mqcrhbaog1u2f2lffrjlkpd77vf8insvqolau' );
define( 'AUTH_SALT',        'okjyztozk6m7e6lwqwkzahmr3vhdjhpy4aghiofczjtrghmyjbm1vdzu0rp40jri' );
define( 'SECURE_AUTH_SALT', 'psqdhouspmts9c5ekprfdwtdsx4c2xxy7zlkxcdqbxgx76uahkffeasmtkglp25v' );
define( 'LOGGED_IN_SALT',   'rgnwjangscphzocabubjgv4iz37nikwhzwprv0mdkt0kea66jabdudrhryxnjvpt' );
define( 'NONCE_SALT',       'zl08btzrmlnbp3fbrhne7jfsxs5xix4xr3l8vkefggxpjl74fgmjuj2yxmva7ze1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprn_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
