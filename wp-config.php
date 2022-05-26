<?php
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
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
define( 'DB_NAME', 'plastikb_simpeaestetik' );

/** Database username */
define( 'DB_USER', 'plastikb_simpeaestetik' );

/** Database password */
define( 'DB_PASSWORD', '~j@V6N9b7i' );

/** Database hostname */
define( 'DB_HOST', 'plastikb.mysql.tools' );

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
define( 'AUTH_KEY',         'Bz8%Ef~F|M~Gk?coGG_I?!E,~ZZdGCbkurALn`8 8WkT)U~KwV>(-tO>rNL=Sp^Q' );
define( 'SECURE_AUTH_KEY',  '-5y?2#P}mJ{v|}h`4ETpP@}j,OzF~fdE(`4#Df,(vw_{:5Wk.k*87Z:o:H4,.G/e' );
define( 'LOGGED_IN_KEY',    '7 e8,~qgEx&T]-=;;~g[HO{k>-*H!]Yh<EmG+k_UCVAne^j1foY^1M*j?`$NdBZ{' );
define( 'NONCE_KEY',        'iRee!k[MqIzn3A.ZbD;Y&^hL,:rVu4aYN)Go!ZAEC;iY#Z1vPP*CB{*3l!fX6[to' );
define( 'AUTH_SALT',        'aLV/gw VN<D|PDSg%cl;3+DSE:osi]{P%HVg.QCeHhXbvEcI+NxN~c^rC?P/UP.!' );
define( 'SECURE_AUTH_SALT', 'Zv OvT&XKEIj0YWBQUJC=3sJ6,/<22N2nz|R2avKNr3n/3=@ue#lu6Yo[n6IEU,n' );
define( 'LOGGED_IN_SALT',   'Lp6_fe*RVjG<LQh&vv=kl`#tn`knbwO? E`6hFwxaUUm0` ()(8Rz}txJs|^A/F:' );
define( 'NONCE_SALT',       'AhO~)&1dj%iF#gCrkga*B5EDG.QVx&=%;%Q-(K+/y1*|!)?(?g<M$ <CEfo;oLKI' );

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
