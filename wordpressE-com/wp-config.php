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
define( 'DB_NAME', 'wordpresse-com' );

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
define( 'AUTH_KEY',         '?)I8BJX;?5zZb5Vwe63~c/x[&pi^~Pbp#IxpNSrY5Zwm1jl>NW[UwEN&C=o:)6* ' );
define( 'SECURE_AUTH_KEY',  ']b/x&F#Xr3V:OKYyMUol@Ke.A.JiuIV%HJ#%RN`k,^P+EnUTCgh+vLPyFR!:j6*H' );
define( 'LOGGED_IN_KEY',    'ku)5hb?1zUsOEIc]l->$It30[OLU[i^ABRne^p~; {(o^*&/UyvKw,nsrjkF@ar>' );
define( 'NONCE_KEY',        'kbao&4GJ)~F=VZ;Ln2ph=Y}xmI+ufITn2L?EBNx%^}!2w5sdhJ`Qh+@i;FU@?[Wn' );
define( 'AUTH_SALT',        '0%6?aCGRqP4jP/h-Ylld5`.s2Zlp-L#:oOj=?^_yU9ENqZ?uFPRYT8UPfjp6J6Xp' );
define( 'SECURE_AUTH_SALT', 'nVVpE=ufxkU]1]?P }4k[$kwWD ffdkAzi[::>SVg,e5jL684+%;Mp.X/v{^p`dT' );
define( 'LOGGED_IN_SALT',   'hxRQu}a_Q/Z1EyY#877Z-o/O}M8nKf7T5^!|vV4-uwEM#@O9+ubMI:M=g*0h-EG|' );
define( 'NONCE_SALT',       'e-P4IZ1(Z#*w<X_-%SvhI?G%Q*BxAZD;OfE-M(fRJHe?W1/[+c-Ug1<x/t?xrfOk' );

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
