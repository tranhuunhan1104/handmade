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
define( 'DB_NAME', 'handmade' );

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
define( 'AUTH_KEY',         'H_oM!d##`]@<*DHT?I}(Y?xf=f.j}i=?40:<C<a%ROf;]+Gv`i7Uc@: ]YtLv3U`' );
define( 'SECURE_AUTH_KEY',  'o*KzOA8ge(WF)>iE&Ed^lvnEiqmn?.vhFZ{h_F.SJ-z2HY|R:F6v=1dDP8u_5Z0U' );
define( 'LOGGED_IN_KEY',    '<,M}iVw,n)vuoes``UR7VNeF0Xd[u`Y.[Cn3cjY>6}B@F,ON<M|AY<uX:b|USyWQ' );
define( 'NONCE_KEY',        '`dy.80/lTyGIL|;Em4Fkj 3A!6u7gK62wF19ieGSs&b!_[`zG{%KLM,&q:7w6+?$' );
define( 'AUTH_SALT',        'J(VddeC,ll}?0(fM3DPhNt^8zG/Gbyh9J5Gv5V3C+pP=YBX;Px>:8lDegwmR!ML?' );
define( 'SECURE_AUTH_SALT', 'y_m92q2C<+va!Aq kGx$W34,?,RD4XgD3C=&Pv.XNr k)*Vtn)*{6bM3r?_TiF@y' );
define( 'LOGGED_IN_SALT',   '{,*fF{QTcM3uR1C4|w{l`z@tp<ZOXh,s+-= FjpmP[h(Z;2{#!whg.:,+jj7Xguv' );
define( 'NONCE_SALT',       'OtpmqscfIPKx(MgRG!J!zn6z%!6If{b5uKz;20@(^@?kPzo.p<WU=> Sm&_dqoT(' );

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
