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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '(vm2k0UDtO#7M((xqdU1u%e3-Gf!M6[)L}+m-i`sbr+R>,DM{]{j@z9-Ynxx ^n,' );
define( 'SECURE_AUTH_KEY',  'O5/DVjC0Dlt[0o6[1%^/=Z68.j{S tANN;QFGWLT>{hzCA{b4L /vE39hC4lzj=T' );
define( 'LOGGED_IN_KEY',    '5ie=-@::Mma(VX]KrE&k[f4/=kKXus7{(j&LWD/#|}xPs%DrC3zw%nVbdSO#F#OG' );
define( 'NONCE_KEY',        'O94}hv-I!5uS[ITK5aPf[x|>PNJZ.e$%?z034YNhiMrD76Y_4}Mlj^ROQ$iO*xvo' );
define( 'AUTH_SALT',        'Gom?d1 XmF)FFleP4[0NfSn#>+lX~^T#L,XpxQoC!mf:e[D.h|<NS_#FsMedm4f}' );
define( 'SECURE_AUTH_SALT', '0~4>Oq30JBpk+]?Ib6K0CRveG(+kE%%E9<VCnIU=Z~6CI1i^XaC4Hm`o<iG%9P8|' );
define( 'LOGGED_IN_SALT',   '_B{}OJpa:Dy2=F@TqUnfD/kQr9BB+OZ^r(o5C$jvtPvYe0*sMZ=y-}F]p0{W8p^{' );
define( 'NONCE_SALT',       'o4Y?%Ckcqn7?5`C+k~2Qi0<YYGp8<ZbC%%*e{1sBo _!7A5;MA>6~26N-`l7.mho' );

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
