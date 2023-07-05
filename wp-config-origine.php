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
define( 'DB_NAME', 'coffee_shop' );

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
define( 'AUTH_KEY',         'L=Dm0Nql*Q`;_e;la,7A%)Np=$m?PvPqw#I!9S!68n/=Cy*6>!md:*8W:RSl5e8A' );
define( 'SECURE_AUTH_KEY',  '{Z38}2*:rSPEB`&vEz}?1x>ER2$dDWHm9Fm]hWENx6fXb]{%7#Qxq+fEV%>0y.9+' );
define( 'LOGGED_IN_KEY',    '[ER;.z992eo9OW!t]f)8j,}Osvu.k*lD|<mJM1]BtaVK$fZ/iPOD9>H!sIBG.>:C' );
define( 'NONCE_KEY',        'm|sec+!.v.uhuqaU<xN *@eEZ:FE UOhL=&ctXR{zu#+vpg?5m|.#HcF.RkBH$H4' );
define( 'AUTH_SALT',        'o[{e!<GM5KO`v~8ei*M/b(r:L}A+eH9A`V6NLpV@+g0Bgbi+z+1bo#YZ=`V]*Kv4' );
define( 'SECURE_AUTH_SALT', 'U I5mGep%n9xxV+ydSjXk:*7)D7L&i_itHA7Ui_lMm,[oB)_czF4NdU_YisrbZ*8' );
define( 'LOGGED_IN_SALT',   'x+>tK|MGv}Jx1i7()k^0)R}Kw_}BB5$P^vK~5b=Rp,q}fUXo%J2?Te.) $rV/a;_' );
define( 'NONCE_SALT',       'DO*y-3QZ#,-H/U}f/~s~Z8hF{XY=loS/W[02xZnz `t8XsVKUy|q;V>SRA33g)7[' );
define( 'JETPACK_DEV_DEBUG', true );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cs_';

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
  


