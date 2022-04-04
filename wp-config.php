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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'alumno' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '3H/fvnA5Q+r>p~CfuvI&r50syQlJgAy+l6(!lt*RC&D$anmKSErb*k^EV39^6=M;' );
define( 'SECURE_AUTH_KEY',  '?9(JR{*{v.dMc9[{2G(GZd9A0z>HBvC;E9;52JUShV!=!s6yDRBj>UZ1pnJ[0N:~' );
define( 'LOGGED_IN_KEY',    '>0Juyf^0Pmh^6XZ-:1I5 Q/XvrtykQk:Ys# apnOL{LBs6toBKT>&iMoYf:eW4hx' );
define( 'NONCE_KEY',        'MXXN`SB@[Q?BqFaUk3hYdu-y[7GQ2Y%5-konV^,avp:&TYG!^/YNhM6%u4GU6Qeu' );
define( 'AUTH_SALT',        's<@bElT=O}6Wo<~6BN&oKMA%Gr_1$k<q&vH|=7?lYq|ZW}dA8iXo+n(L]_Dn=p1Q' );
define( 'SECURE_AUTH_SALT', 'dO.vBKamQI{@&P[~xJvZZGxQos6cq~RFp%3l/8<[SGcyG}^]lEnDLi-?$tZrsvZ ' );
define( 'LOGGED_IN_SALT',   'rke8eyX;Ib%DzgRHXT65[Ou}xKGD-5c~6}si}fzHe_Yo$E8ZBjj?6!6=%knWu]ek' );
define( 'NONCE_SALT',       'f8yRYq8V|Ze4)covcFWv>2^awv$ubhZ2@QS>*cRQoB|]nQo%+Uy,7e(.BoS%8=@(' );

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
