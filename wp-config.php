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
define( 'DB_NAME', 'shopcongnghe' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1024' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         'B8Kb5YhwW,~^>|; rfdU{&Wk)h%S-i0lbdXfs oSvE?TNpP L|}-O/Qrs_gj/hX2' );
define( 'SECURE_AUTH_KEY',  'u?UzNBZchH9Y6&?-IFeZfcy_tvl:Y4`WwUQ]!C]K}gr;j8?-nv`WD|z-xS#l6}J6' );
define( 'LOGGED_IN_KEY',    '4EytMmc@`GJFW&$9Dmw/]vA``&lYEwz[9&<9(5Y<2amlMY!Qof<KQ|@wf__`-0Y1' );
define( 'NONCE_KEY',        'y]sF>28AXOXO<.?if<fN{<f%5q05up&D_m(f ~y?)KL)Vx|xTk`5h#&@eZcpMC]+' );
define( 'AUTH_SALT',        'e@/E1aAA(AFU?d[cO@k3:8YJ0J{UgzMY|fnx5#}rXtZtIHN=r0^1YObxt^%EeIO]' );
define( 'SECURE_AUTH_SALT', 'RMCo5M[D1xs1t4Uyx)!xLwrMQo^SxggSXE;DeFM/J-?Xo-u+CW0Lui*8Y:NI-@`s' );
define( 'LOGGED_IN_SALT',   '1BQ&A$B-MGNqsWyyJ78O+x& t?$*%-}RXRH2%@r]}rWw5[VLT$RJd[=cu8PZ/GK4' );
define( 'NONCE_SALT',       '$RrI&GSCYJ*Pz%1F:RW^GscQDgo!_SoEu0e&P*|7ARQRZ(e$Nv}F+uKKaCPbb{j!' );

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
