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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'capitalproperties' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'Q5?|;:>1=EHd}J&nFtb^bKqw<* oL>y5O!pWJAd#)PxD;|N-8b)L$1j6n&bte02=' );
define( 'SECURE_AUTH_KEY',  '1GSo{^Z(*N[3Z&(j&rG=]Fezd) 1u d7=idd)!Z>$t^*A;u0x*THCosh(Xv^#BBg' );
define( 'LOGGED_IN_KEY',    '}pF=A7lx#XWIX:meE-Z1dJ,=mnP&r%Di2E<}z4PTj2}~hg{A)_o4h@)T5{4M_j{G' );
define( 'NONCE_KEY',        '*S[Nwy)SU.vps5U3]Z$oTXP:~+m-eF9w#uB{Z!d$}4]$7Cr(JRx[({COtfHLop0X' );
define( 'AUTH_SALT',        'b^Hi;4xXM4qh=&)rtF=#mlWjRrgt670U~5Ei!waDQik9N`ICiX+<$wlt(6LdXJ|W' );
define( 'SECURE_AUTH_SALT', '=ExOsgw_/[X0yq!O >RfJn#CoU:M3>|HNxjH:SN[R%QjxvU$UbQ0G<.LxWWv&TKY' );
define( 'LOGGED_IN_SALT',   '~/NEoRny  Ew~W:}s<Mx=(-sytng56+/txZ1FP{vGG5)Mr5E+n^DL_88Pmi?1F#O' );
define( 'NONCE_SALT',       'ISA!RDwbC7UkgW/DkUo~X|g;Q.JqGyym[SX,8,V:M:-nkZPy:PoH[>hs+}LJHy*I' );

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
