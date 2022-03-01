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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '8j]nm{Wy=N)Y7=rJHX_4@(D-I,e=IS3)EYHFKhy)K4%c6H2iqr [C]y.mv*!:2x-' );
define( 'SECURE_AUTH_KEY',  '@L_4Xr`]E@qZKhh9wvL[LdDQZ^vPTG))#>,;D%uds *j5Q-`2Hll.|D4h4:Tn@sU' );
define( 'LOGGED_IN_KEY',    'e(cQ&HQ$h0tW8O!/!B)h7Id +|BnW>8_6Zc:4|Zy eXK0}<F15rgQ<Pq|obze1*A' );
define( 'NONCE_KEY',        ')*5tc]>YJeXO.Ffi;ALfYTN*CE,U`#w9D(oYc2/]89(Lb:c{nCV2l3|UX<EB?!I3' );
define( 'AUTH_SALT',        'kVm}NC+s@j>vc[R.Y07@W^Ob*V?C_p33Z*SUGf^,Rgrw^^`wiN&GM;@G(!F;g+M.' );
define( 'SECURE_AUTH_SALT', 'U,P?pA1st$u(<v8Gboc3q/ZU12;zm?DP5.614uKDLb/v[*7{}O8 YOc7wZCbm72Q' );
define( 'LOGGED_IN_SALT',   'UTCN.Te._qBy*lTnWY=h]4wX_pt_{D04b%RUmPe:6V.X/Ws^q{/q34_B#kxjE]E/' );
define( 'NONCE_SALT',       'jb9R&GPQ~[Wg*td*WI}4>msNqu?4&+L3|V3,2{*MdaA:.;VQ,Pf3M4b{!cFa7Q1i' );

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
