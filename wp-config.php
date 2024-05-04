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
define( 'DB_NAME', 'examensarbete' );

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
define( 'AUTH_KEY',         'FBTR}@h#ZT>%t(/&^zT{J+{|Ae_9*BeER)t0oc=_h4?bQ*1Zce;l]^{m0GBSKhwc' );
define( 'SECURE_AUTH_KEY',  '-IIR75>]rmL@SRT5{nV%SSn6190/#)f3_/.ck<;zpVjC4v-pmEn@~b22~/:?5wmJ' );
define( 'LOGGED_IN_KEY',    '` j] pQY/=N0z xx0|E*2Nx;7kK;f6$AUMxLl5a&~Dp@H:@1uK<;@Z|aof;I0k}?' );
define( 'NONCE_KEY',        'P_l8nL[BicRTzftYzo[P)lk~RJ= q!BRvVM9m@YKyRiS<3q`2n1/OwESHAn$%?~P' );
define( 'AUTH_SALT',        '`9A{MO&emT6fm^=)+&<)YCpwY#[Mr00WU*ObCQRCq[u:fa3MBN;aX ~y&W~-*^:!' );
define( 'SECURE_AUTH_SALT', 'OrtVjTLj*bgZFDnO4 9VfEn|z,L*ckx2~sy)%+/]9ep?|7&udbrS^tx?|TjQ`8WB' );
define( 'LOGGED_IN_SALT',   '1Y.>w17p_^E8pno^EF0U5=jJ|-[M,2#XS}E_2Mc-<Tb:Vp[XWTe7[Ncd1Q%rp#g ' );
define( 'NONCE_SALT',       '%xL?4-WZF!in0`u%<se#gV&1zJ8K5|Mr/cFKSgc2IvlDaO[M]/I&YG]e*QkC4:j:' );

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
