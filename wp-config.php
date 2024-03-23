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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';njRo{mX7qw#]v6J;(%L}*0+gniL^{p,vB7ExLsHK9xN|kK3#4idO]X.s-ac<F?#' );
define( 'SECURE_AUTH_KEY',  '_UMDq3?bzjrvv)@%wnj#F#>OHUKd_S:H@_8diJ5Ig&y=]RYJy^x6xF=8)^hz{{{<' );
define( 'LOGGED_IN_KEY',    ']hs-/xpB78IcOR8rUr?^u/movr>,:Fcw-f]@;SDi%E&it kR;q5ZUX7=l8}ZbNrk' );
define( 'NONCE_KEY',        'R/>87[Wt#/mq(-?ZD^I/mSm>k|K1~A*X,`]>LnJGH0#+v(mYKas BH+yI8,P.~cP' );
define( 'AUTH_SALT',        '!5sugh=v,NBS}w}{Ky2d{,hIn_FMctXyOSIE]%Ga(qd6Tm|2O33Q4(jB=A`<:X/c' );
define( 'SECURE_AUTH_SALT', 'Z%0|F0UMbw6QHIr%~_9{8016g{OMhq<PJ%AJu|+[O0p4@+xLI} |6$I*=a$c 4[;' );
define( 'LOGGED_IN_SALT',   '_Y40l7w#vE#/T]Xb@ij|v%-FH[~/YY}_UE:wmYnkzNSVxF7|$Ly@:qs&c8:l7DJz' );
define( 'NONCE_SALT',       'Qz.)9.OR[aS#8ObFC:Gg~d#jTi8EUkxX4-Hv#JZE*(DF1<y(okLO&Ib:Ewn7aoN5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ak_';

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
