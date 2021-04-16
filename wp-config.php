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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpfp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sEnF):T:E57 !w+&hr0Gcy/&]::L* Jl?ZA7Rv:`>A1)!tFOZ>bQc/f#^2dacJoP' );
define( 'SECURE_AUTH_KEY',  '5]e/*fyZi6Z5<!07/oFUI&Da*.dXt!m1]hp@s:)&5nEO1zhe)Y!}$N^YP{p7L^XY' );
define( 'LOGGED_IN_KEY',    'QI0}2-^,9>okjmmC@nKu+m,_+Vo~496LgQ+ily`s<1PJqm/{$}e+0,^C`>4z+R%D' );
define( 'NONCE_KEY',        '1mUZ8D$uSKx?0j0KdDxM9 DtAa/JC._8~RZCL}nlrBUH%JQVP!(I,4P]R,SE8sSi' );
define( 'AUTH_SALT',        'YcC;f8h0/h:$ONM*elw_c/J8wZ13(hgly0m{1W|z`d [ $+8PlT4i(^P;gKhn$fh' );
define( 'SECURE_AUTH_SALT', 'P%l0Km^3f2ECaolp>ej,#HbO#a64DP}wL{!fo7z`a:n2-rlJ36,iKmOuc9=^7hQR' );
define( 'LOGGED_IN_SALT',   'TZ#PQ0Haf+lsq*OYzON=UO+(>$$o&ta5;-=BC/>Mm;C+vb.U]FzN57zfWD1dPL4g' );
define( 'NONCE_SALT',       'rBz6v)Q+{R&d3@eTr&^)9a9N>ySxd1++UkC 3Spdsr)zAuxX?fWs~OQ_&/=As[7B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
