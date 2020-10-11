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
define( 'DB_NAME', 'PCAO' );

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
define( 'AUTH_KEY',         'k:#dPh5#uSu42Sn}VlYs}G]b^zuO!&(lh+:LU^SJaxvRopm=M]Wtte#yC,enAHUn' );
define( 'SECURE_AUTH_KEY',  '?QPp`gm5#+*m(~t$fr<L^,-oUx7FEyo;.]^)|z->(0VI{~_mwA@{;%~sDh9X%Ce[' );
define( 'LOGGED_IN_KEY',    'j*?AT:tlIJIt|0-v6HXn0hDevjuf&j7Gm$&qr jA[+#vWI<Ucw7Y{XS6O8`bA+PE' );
define( 'NONCE_KEY',        '<$2mi2SHk5^[uLc{@@8-d#!IQ^N(vUDd&;VaA)&p9cntP7-<,@,=(Hr?HUWd$W&V' );
define( 'AUTH_SALT',        'Q!+!V.;L6bm{amdg7cjZROzJ:KfWM|Ztq-kp8UAn(^ChTpMr=1s.hq4kKNI~{/~+' );
define( 'SECURE_AUTH_SALT', '?mH y+0_u_T<Dw3~yOeDYH#XjzkQ0vR|OiYvm^QtXfv%Nf/x={A(Ll=bf%4FOfc8' );
define( 'LOGGED_IN_SALT',   'Ew^u6;Oas5r=I*3-~]Gg~gl{1ao+=Edw<2^#d0yeiyn/  K#.Q](|&GM|>yyQQlv' );
define( 'NONCE_SALT',       'U/5-`LS[/*55Ry{7Q4{{>Y0?yR64bD$)JGgs_}gS,DxrNx44;r,jc~Bu$_x<j|@M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pcao_';

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
