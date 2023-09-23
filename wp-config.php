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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ':/HmRC%@&pvp>57gml B%@/hrI1F.p@gpb0/}jkO$xmLw@.y :z{$B-|*&hFg^8/' );
define( 'SECURE_AUTH_KEY',  '~b3JFFpl8[&LMhz;*{6:&xSR$lhO49/:h@sPT8][MI]]X}L?F,60+YBJTWdKme>o' );
define( 'LOGGED_IN_KEY',    '^mjL-?`RNm.{[,u#gmh{_J&(P{}f=da{pRyuL6GGd1gCKjgI_i` %<-28~%epLY$' );
define( 'NONCE_KEY',        'ejb ]/@HfwjO;uVu{t..U)[ggP?,p78l[wG)MkZ]VOm9^YX%2c2:$ad0A&|KEI{i' );
define( 'AUTH_SALT',        'Gmf9e{hVwr,Kk=ST*<U--P1qFG{^kJ~AvT@]<Qg/]6{l`n,,F$zwq[Ksl:UdLQHZ' );
define( 'SECURE_AUTH_SALT', 'o/=WkD<`96kqi-#GylXI;[9*a!bf&b_#RXdUag8fmPAaTcU;fl|##CuDyf*BDJ@$' );
define( 'LOGGED_IN_SALT',   'to{H|e8gJ+^HXKiuOc)wf8AjkT>_iY^9jd7U?Y/cDV$P_4Hjk}n lYPFY/CiHm@}' );
define( 'NONCE_SALT',       '~lP>9s/oSKZv*<@3*`r*R)Or/sD!vX0,_! 8&o7?7,?{sufvk/r]%PLQDj>l}jlK' );

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
