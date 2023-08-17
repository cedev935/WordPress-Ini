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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'o*q*eC@q8F63[eiCCWaii;BY1]n,%v?r|U)bY5ox)gp}pEp.M{p&1F>/LPL}pKV:' );
define( 'SECURE_AUTH_KEY',  ':EKff!a7xE KsD9q5efO:Ca 1jwFDta.>;So~~gbWo7|7,. g)Acr6P,p_>i OEb' );
define( 'LOGGED_IN_KEY',    ']T^RvenT)7_@|fU?FYt.e(e*>iHEMH4J@/=ver+!um,AklTKhSsD>9?7l%YF[XO8' );
define( 'NONCE_KEY',        '%WJZnhS:mcEoronLkNl4F{!Mx#ASX2z9B{I5ZpH&O=>T`gG?)0c5)!(nfMB{Pt^G' );
define( 'AUTH_SALT',        'J%E-HB&) 4{Geye7T+Dmy>(36w1]%ps@Z$mO4e6p<FKj-r{Z^XeKX.CWalA}e;:p' );
define( 'SECURE_AUTH_SALT', '|vnnFPkm=j`,p>`,M8z-|.1wOn?S;d!j{`3;:rMKUo8d*RU-:yXfkir%aHe.AY$,' );
define( 'LOGGED_IN_SALT',   '(7V4,W3O dtrt^~ZtM_V$`mL6tQFPJE`]hq>Gc4rUz$s{Ltxmc!LF+1TAdHimos;' );
define( 'NONCE_SALT',       'NDR]aCU>l^x}$e|7Z#7>zt`,KD-r}AQ%eC/3lP}0&BhrKl>[DE1|0>9Fs$`#/nE6' );

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
