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
define( 'DB_NAME', 'wordpressprint' );

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
define( 'AUTH_KEY',         'P9t9FGZQI.XQId]+J$Z7e]W; [)XY3LsjR@#oHp_s8?<GAF(vk<5qyw.e]nstf5u' );
define( 'SECURE_AUTH_KEY',  '<IhjQmL,:Y8u0;JejVpK:jK.,46[N0.1Wwzb%H}5m=+@e_9psWg?Q{`.SI;+mfir' );
define( 'LOGGED_IN_KEY',    'I{n#cssBt* }O%G7|;548pagyf-;mtp%g/#mD[9yAJlup6@#~o!B2ynL_gmjdaw1' );
define( 'NONCE_KEY',        'k)T-6@HMZez4m0?{Mx}ly7xuz_a.j:8z_L;h.@1HyEErYt#Nb(aX$%B^&=7ZPI_f' );
define( 'AUTH_SALT',        'Byy5{QR/b9z.#H_1eCOm8P|O7+7|2uvNG=b?:H&fy4QWr1A8%a_wv*((u/X&K24-' );
define( 'SECURE_AUTH_SALT', 'h&TT*0#]qCkL)thxpvrq^d:zs6oRLe?AiM)3st{~C{ q6<*mZ>ybO$!+iYot:^_G' );
define( 'LOGGED_IN_SALT',   'kQCy$L E@2{z&rwlPg{*]IXW!vTGVUz|F ,@HG=LE:Z_k@Pox 6pA?r#tio3t{bP' );
define( 'NONCE_SALT',       'OOBT!gMYr3a?<R/W_6CY<W}dN*j.fwc[}j/x}[-mSFba>X|{suwoDXT;+u>MXtwS' );

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
