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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '{-E]<0i,=_ag~FG;`%*(sETF8n6n!WM&[{VIuD;Ad1wDb1RJt6oCkws?kje9ZT.~' );
define( 'SECURE_AUTH_KEY',  'c;B~3?,3ruD@qM]z@1H*c[YaG/NQE^X&!7=G[#wmmoK,QQ.1[S]D^v^iXHxFk.W*' );
define( 'LOGGED_IN_KEY',    ':{,K&0>pA^JU`GxLNTLCYqb#~i >A>tuN$2^&(M#~-7&ci6FnD9va=0N4]-VfGc5' );
define( 'NONCE_KEY',        'PwWYihTpuW k RGsl]Uo(mN>?hb#G5[`1Ht@QC*pt(%Bg^#@?<gWZb:MUit$85K/' );
define( 'AUTH_SALT',        '^;#>L5OB{SB2XOAu^5B/M,%3L.Ws5{,f&3*bx0ZYn_f*6v_PzxZ0d9|;st-AfA;9' );
define( 'SECURE_AUTH_SALT', 'J+n!&H7[nwPNbcAsZ/O[URS/Vgd]%mge*;~e{OR$D3.Ef^XM8kU0J!._zo:g~,S1' );
define( 'LOGGED_IN_SALT',   '^!_x{|nBF0dKf^sxMVmm]f! O`|weh,0bwhB+e6MIR`=XZmyy^}&t{SGOxbP^A6#' );
define( 'NONCE_SALT',       ' V[C>3f9kx&XGO/<!6~q u)t%zw!N>j AEIr|8_oS0?Zkjc(8kUi6/?.;Oix}|V>' );

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
