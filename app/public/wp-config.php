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
define( 'AUTH_KEY',          '&pzPR/ySj~O12k^vVq69cen&M&Q3l1D:m:)(C|4iCRjo7MlIZ+B~%.{0DeC>Uvge' );
define( 'SECURE_AUTH_KEY',   'ESWbhu|8aoL]=h]}j`[i<F<#oW,1DMv}La]vT+mrTIA2fK`wPoZHzw?rjj>?rue@' );
define( 'LOGGED_IN_KEY',     '~VIDEa(CT@TaS^R`_HOUy9;/lXzYnr9M,-^.uZiwlEr3^pd!cAR7OP<7G{i|a@q2' );
define( 'NONCE_KEY',         'xWe0i[8_uwG<*<3~amZ or+sKg(M>:^-)-a#.)B$$B,Lt}^P2iGc?;mHf:ARBbq-' );
define( 'AUTH_SALT',         '#4xPB.Wn;U4OutvnY~79x7d=kD!Q`4~L(nFfY8HUc~J#~=h%UW>O^Q4T)TA*Y5Y^' );
define( 'SECURE_AUTH_SALT',  'x)*G[rrvw&K-t:dOl6O*{f31/1xS[{jltS[xnB@isl3963NV21^Ri&tY+x:1?U&/' );
define( 'LOGGED_IN_SALT',    'Qqj*Ut~ R0yXWPTv;kFzo3)`O}+ET#t97_Tb!?&!2eU-Cn.M(/m2Ns~ncx5~u_,U' );
define( 'NONCE_SALT',        'Xxd:3,K!JsNU9mte&KvZlUm]m7N/Oa6F;C;>f+M{9oV1d,^nw!o<_X|OLW`;1h.g' );
define( 'WP_CACHE_KEY_SALT', ' lRo&c>l*]9Ocw<(Ebn5S= f(N)14 eB^c;HDW0>oWOFF&$H.~ab:NI5@](?rXx>' );


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
