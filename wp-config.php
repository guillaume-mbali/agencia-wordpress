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
define( 'DB_NAME', 'agencia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gdBCJAn<L:^96Z@o]D5yV6])V8dZdR$sS`pL Cv)T>c|ma2mTa#R)uQCkL-SyGZc' );
define( 'SECURE_AUTH_KEY',  '4E$r`*>/u]>N_,0QPrG6);B9JXqI0ksOWP]fxXRjVHX@i*4T7,-sC?]tXvk#30zw' );
define( 'LOGGED_IN_KEY',    'YWT2${nfOQXA[([S4}|W^/`3/L|VeLx 9q??llENUV*eG<XBKmTB].3tJ=A,hj7o' );
define( 'NONCE_KEY',        '1Aa- ~Cy2rw=Th>Ph,jfCOP&pzjP,;RbvRjz5XW$b:YOJE*IxI*QypE7ltIJBY*A' );
define( 'AUTH_SALT',        '7c+g;3-CP]AJgg)n*q^a:s4VmP(mL:zRDqH~=}qfplF`]!yq?pp=/&(l{,,AH$Tf' );
define( 'SECURE_AUTH_SALT', '%Xd223UjM):v{b7ce2&c_(O~(g@z,OZX?|gB*biPjLiqQ9<*>|=o#Q9B/ie.fx=n' );
define( 'LOGGED_IN_SALT',   'zwG;:[aZT_:m06_5$>`{{Hex:ATChw@h,&pFO{0Ft-Bt.}XLxn?Qf!*D|hv&[ro<' );
define( 'NONCE_SALT',       'O7iM7Pn~v_+(@t#x+$%_4F6iMuhkn}lP }kENHfr5*P;ovKrh=NEdVx=Il,{)pqM' );

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
