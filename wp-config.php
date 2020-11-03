<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'campingwebsite_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aHwUY_vT*!nK}7K5[9+PwDI}2^VA%ta>4!HH_d~;mbw/Z_|[3mKhQ2rn:0Rd,eZ/' );
define( 'SECURE_AUTH_KEY',  '(SJ_oA]X^_Wy&r4w(O9-mAcoviRVJ/~aRnFUiY?.0$Pf${!GeqP0_B+io$l*|Lf1' );
define( 'LOGGED_IN_KEY',    'pkA&}C*f.>=<U*;2%4__aRf@_H_+EA pOcCmyR|rukC.HN):e!;Hd=0d3 XXLVV*' );
define( 'NONCE_KEY',        '-`-qhp3>D7~{T[:>MK7L7X6NoeA%r*3`e&udZYz(:djb]5oq>X[f%}f T4;kIH.h' );
define( 'AUTH_SALT',        'h/,a>=w+o(z=lo]2l0a$39Uu3^1OcPo4pA@]gqD,Nv/UtM;t|NI0;gBU*<bJn=!k' );
define( 'SECURE_AUTH_SALT', 'MH>{pL)<C%,lzVegOHL*UHzW)7m_~?&czw72gb$ssn ^ [~,U(aQe#c<-IzPWo$|' );
define( 'LOGGED_IN_SALT',   '+[4zK#s*E+XyIt&G?P$tD6~x_,<AP#^-(wHS&M5sijYT6C^)e3 K(B!:J);x)82Y' );
define( 'NONCE_SALT',       'LpdyE~gj.-MJ|^Nx,pfXm-;Q,PA``tc IU.Eh31~-MuI2n*p1vpph4U>v=>bdy]J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
