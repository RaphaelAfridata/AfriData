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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'S^|JpL+OqJ-FfW2Ia!^EUW1yT]>I0S[wzQ`O5cE}QOyUWOWChDKACwDsG.-}4~o*' );
define( 'SECURE_AUTH_KEY',   ')3)#}9-,K^+1lF^Q`wC<`4F*we-X<#>C$GGLethz7DE9I}|,bynJ(UhHr3>b^>E|' );
define( 'LOGGED_IN_KEY',     '|o^GiO97AF1ZZMbQZce,f}(f;|[u={3mG)A$31$yxU=^}SkK/WNe-xqN^D<$s%$b' );
define( 'NONCE_KEY',         'VAJrA$n!Ao(#N(3d)2VNF>lleW5x!)1V >$%`9&f{q;T_#jj_?P7_w^/QQ^7]{-g' );
define( 'AUTH_SALT',         '9yW?lalADuw{u*]k^fF:.Uqf:gJV^;vQ$a=&l^dC=MX?5r}4j8_(2t(1uumbfTPT' );
define( 'SECURE_AUTH_SALT',  'V8sAHt<QH_bxHd#{g@nNnp_*<f=F6+B4QCoS_Qg<e:VQ6|J<FdY*oi^wn!`!0(;(' );
define( 'LOGGED_IN_SALT',    'lAH*pmxy/tTFsgmVn_/)DEuxKFCSIl<Bt-@2~*i qT>z*lOB)2[:9oq?mW.(G+eF' );
define( 'NONCE_SALT',        '|<gc>}~wbi@OZ:#<].B,o&KLjH8DWPyX(Zk/Vy7G<`S!~nhlb(N2;fj&]nDLVfAI' );
define( 'WP_CACHE_KEY_SALT', 'HCZnf%:Kwj_IDA{@f;D<P+QdPoC[4yf_C*:C*AP?0nmPe}4soOpVssY1:8n[{$Tp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
