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
define( 'DB_NAME', 'Template' );

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
define( 'AUTH_KEY',         '}|@GjVr,Bz8-xKgv:`e&;~aU$5{dce8K>2_]St|^mZg~st7zAqwTq^Y.UZFXQQ]0' );
define( 'SECURE_AUTH_KEY',  'Cbw#fmcS$!kg9&M|Q#m:AA?`KZ<g+dxiSp+|z9 %[84s:-)%Da5p)mr#n$TuT^Xs' );
define( 'LOGGED_IN_KEY',    'cFf_VpB*!;8!`z=KTgKS&iu:rt^KHEW)RDgqBrAM^z_R^=^MIm^7``*?s^W}}p^&' );
define( 'NONCE_KEY',        '@AprbZuo[GqG{%@7K}qx2Ld;`$GoswP858}}m1b#Os @m>)6-,18^Vs/{^8p@xZ>' );
define( 'AUTH_SALT',        '&_a2pgp,mF8qo_>o F6,Jzkv.)g01?GHe+Fs:LElEL2aS}1*0P>a.G9N$Pt)2k[o' );
define( 'SECURE_AUTH_SALT', 'WjJ7/0;])<??KOISf^s;K,BEu2;/+U8EnoJaI!6mhMRI]5z)E/?C3v`ei2w2;k`K' );
define( 'LOGGED_IN_SALT',   'GsmS`U*`VrD`ohT)e5Hs>ow=um8Z>(~3~;C7tgC-MrxxyiI(E0=]V-|GORf;-E!5' );
define( 'NONCE_SALT',       'iRnZ2P(?CB#_LWe+F}xx[lpFkWYHaO<,-e.?U)X;SaI4*@~c~sL]Ixss/ccfwGF%' );

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
