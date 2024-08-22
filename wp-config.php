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
define( 'DB_NAME', 'lucky-spin' );

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
define( 'AUTH_KEY',         '^Oe Jo(P{oPtN{@MiDhCymMh(,KmDmzB(z?Jm6UmR(`[cwdR.bW/iSF}s/Qx]l 8' );
define( 'SECURE_AUTH_KEY',  'bY;[Nt8Kroucq@QM@zQ)[Rpp)Z^8zvqj<nLT*u|VxyyPy<J6ql)MXOV@?oFy }rW' );
define( 'LOGGED_IN_KEY',    ']1!iZ!J7x)p9HzcSfT_n:^ 0?Zcuy],mVq=kJKja`XA4<P7BWY7;^AiE.n)BLiSM' );
define( 'NONCE_KEY',        'Od@e}#E{[9|:rso.Urw;+ivnoe4HaHH]DYwJhb&%)6Is@FN(o4a}5a!xaf* 1y26' );
define( 'AUTH_SALT',        'xDZ0$]Xj9v>WU6o.A4NLj{D@kr_sL><aaayre2$6Y_L+C(4KX$jfgkg1Lim Y.Qj' );
define( 'SECURE_AUTH_SALT', '@=V4b;K |;PU2VN19}SLu}mQZG{$*G*^=B;Z.y9cO!H!(91^.s4B[8o:x::MVFDm' );
define( 'LOGGED_IN_SALT',   '*:;.i^U,`,k 4V7dS!d!_9,}lFFPheO1?^)b=S<TX|l:|AN6L=,g|Ifr*|nOL1G_' );
define( 'NONCE_SALT',       'b6uNqaU:{*c98UPmZ&p9xvrfo[]4LN4CcU5z.W<5+]{T>jih/rCX#3p?B4;<Q`aS' );

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
