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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'I@e;N/Vr]{@^v+wegE^1W#h*n_lKJ$DX?@/0Y%U9e[`bU%33VHXJAb0IFny7s@LN' );
define( 'SECURE_AUTH_KEY',  ',nKPt29^eV/qj@Hh@tF1efz]wy]1|x Z3q0ew?Bl|=w${]!R`i@_:wM#e%0ZvKF<' );
define( 'LOGGED_IN_KEY',    '=VGYaoa2$ZJPq:#]yjLDE|U{4<%Z#}W G$8p1E?<as^2tMvIjtUev1P>f*63{2!>' );
define( 'NONCE_KEY',        '>bE*~YyNJ#bx(h*XD~h]9hCT8?S{85^+y/0R%g0i)6QOZ mB^>LpCHd$h 0xGFvn' );
define( 'AUTH_SALT',        'M2w`i>.O%fk!v.EV{tT#oypk`>dH/^HAkc<(,6|k% ;6dNDCbZm}x-gzSp/V~?<A' );
define( 'SECURE_AUTH_SALT', '0pmEV%eQVY)}mjLnv m*_ou(~q*<C*In~lGx[hXr)rpnvj+@dW;dGA*z()*-SXwn' );
define( 'LOGGED_IN_SALT',   ',[c)USgp.L kwh6`-K)_H7rZW}/5+G&iO_zP;{Sk*YGw?ELnF3t]Nu,DnFikotg?' );
define( 'NONCE_SALT',       '&IGY`Ic;dAG)b4}Z:p GZ%L8;o:R>q]3sQI9fe2)yYS=^8)d-{)TQ<*fDQcSiW?}' );

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
