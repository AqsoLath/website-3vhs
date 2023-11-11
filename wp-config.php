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
define( 'DB_NAME', 'website-3vhs' );

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
define( 'AUTH_KEY',         'jX5@f9&]Hte;ij-5&PW9,LRUu$OtgL&pLNv%C>DhJ&aY~K8Yrvqn%l*)JO;j8r;G' );
define( 'SECURE_AUTH_KEY',  'YKb9goO+oynX(B+g93%BcLmntqu@yg!%_:-0B4bxX(H>MmdhL9PG*xdoxzC}rqe&' );
define( 'LOGGED_IN_KEY',    'c:d&=OF u/EeLacmr4[n j(k2JLk a?LfVX^8rNAp6Og>]!cFOC$rJ4&gn-[0p-$' );
define( 'NONCE_KEY',        'f,sFR*%Qu|.zu.WiRI46!+AGWlCC:Jw`_+Gjgp@nf-[2D1,Gmf4Ba <d2+W_/;5D' );
define( 'AUTH_SALT',        'r0S5oH859.1:IriT6.Oed&_?K0ENL?IY6l1+%c>]F!(X8g%Yp.1R9ckm3s$OZ:;E' );
define( 'SECURE_AUTH_SALT', '|s1f1>$p<*K1cq# 3=Yv[,~WiL#2W=pHdrs<.0& v6WMJq*u03H/+W.&|eS`ApKU' );
define( 'LOGGED_IN_SALT',   '@u0h.OG(Yz5baALcPzB($cA4Jm:dcv7.7 KY&^OqHWw0-{p]:,@ 9H,Z],vR+f/!' );
define( 'NONCE_SALT',       'lUEHq>U$_yw|n{*D!w*G9R{Mj;`fGa=0(b*@zMbt!sWNW2g*XhtD^f)eaMoJo~]Z' );

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
