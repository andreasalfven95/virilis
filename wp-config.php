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
define( 'DB_NAME', 'andreasalfven' );

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
define( 'AUTH_KEY',         'XeCiY?ZJ8AOVD29J&!bKUxM^!_qC,+0b})*@#IY9|PmsDN3,(jBdc<:*DM?8A+I2' );
define( 'SECURE_AUTH_KEY',  'L(jiHA-=c~)h/i}gD&:_7O8yuZGR<ZH:]]NKS18:J@0lOX[ZDklH81mAJ%(`n)P<' );
define( 'LOGGED_IN_KEY',    'U_#j CT$701xu~1*OJ<TGDXN4]P%h<qkcJ1x50gE1uEG.RPf{QWJDL;crayr8j]7' );
define( 'NONCE_KEY',        'd`}JxpL_jEt}e8_=/e:mncYY?i5k4~=6_J_&Ynak~0E-.dn@Kz>~B@=/Jo<>TdC:' );
define( 'AUTH_SALT',        '&<l9/&FJbC}f[c[bEW^S-7W =pH_p+cy}yaD:3]M},=&!JyJ2z#26vDE KL~<U`(' );
define( 'SECURE_AUTH_SALT', 'xhr@wRY)u%xsxgtw(gv%x $t1y^d>[-e}OESg->ubUdE+94@Z0t33#EF7.%Fy9{D' );
define( 'LOGGED_IN_SALT',   '1RY}?<!c~%&RvT4l8Z%cd[[+sx:_2neIz#ZEr+h*NHze[pOG/CKM743jDAZeYLRx' );
define( 'NONCE_SALT',       'V51-+8#_nj|+sW=qF0X0yf-Fg:0avL;@Ae`e{{_d?Ssxp|M7==9V5Hh(A*Pj>?BU' );

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
