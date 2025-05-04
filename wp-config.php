<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'virtualchef' );

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
define( 'AUTH_KEY',         'wJ5:Jdr?4ZaYE*420?SQIlH=2Z(lMyl4}l.9PewKqH{9C4`#(v#1DD?#~rCq.&`s' );
define( 'SECURE_AUTH_KEY',  ' u92SJ-/1IQ+:>Bf}u.]lfZRXW]NVF{}V$:VOdypN@WV05u6nmhKB{GQLWJr%O$Y' );
define( 'LOGGED_IN_KEY',    ';Kt!{{yr+`O1ra~Qj^OAaZ^#6,}PGHT4)RFU(K(rM^W8IOj;21$-Ekt!p]BRGob?' );
define( 'NONCE_KEY',        '}m:3Al?l:z6y=wXOO#;`:kto&qY&d?R-@M!<+:ON1Q/WD%K.+c.a1@%u8o9W9Qxm' );
define( 'AUTH_SALT',        '!?9EEMmVcF]xWSUKWo8mI__:N)Mr3v)6~-|4g{~cJ-5}y% 6@`nJP>SxM,if;pha' );
define( 'SECURE_AUTH_SALT', '.$*?VW2kRqQa5&!__j..6Gmh2G{kF1B!GA w_kjXOP1)|H9tV&a?%>~YM4s=}R(t' );
define( 'LOGGED_IN_SALT',   'lr bt:t=`y0 32|nV%Je.d+U9bF&uja]/,vUHC6oJ+%&bZ-@{<O$-Nd/<:H4R%0w' );
define( 'NONCE_SALT',       '=>}+iU3>tx;2->h`b4![hvR|yskMsF!=ObK0Jy,F(GrWhc*(;Z5)>>[A.+MJ_E[a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
