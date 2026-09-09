<?php
define( 'WP_CACHE', true );

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
define( 'AUTH_KEY',          'mL7}-UFN7_}|WDUveDmc6n],4^tmA|Y4j|h6{EQ1%l)eCh?!EeqPFUq wTsj{e/^' );
define( 'SECURE_AUTH_KEY',   'R`W~QyA<j{f#4Ifl|&AFAM)nfl8RH!|Q0,t@K=C) Y0Sln?RY(_IUR)g5^}08#~k' );
define( 'LOGGED_IN_KEY',     '+^LS#M^r%|RUD},L6!%=K5XpP}v{X3HZ4+Os10nT{VRcwa_>/Dy&aZ9WmZN_pqGq' );
define( 'NONCE_KEY',         'M5{7.aZzl@ *x?2,X_1]*B-4L% ~=Hm<<!*o_vQ:{;kLtqpJt<i,Ak?>1=}8*=4Z' );
define( 'AUTH_SALT',         '8tqd3YH (iX;k&>$g(BF<_^b]aX&`aaQu`OCG+{uZ!v+[[zG?5|4!^=BPOPmaGC4' );
define( 'SECURE_AUTH_SALT',  'U.@r14gy=r/]yHq3&{?R>cD0B%da[9ms646SYRro<5oY>JO/sy)YT;0rvlS,7/Jd' );
define( 'LOGGED_IN_SALT',    'O~YU.YstYtQO$4h[B^:0x!^JB.;YR;_H>2MzC9S!<@4)^MZA<mgw6GnV|,/2V%aF' );
define( 'NONCE_SALT',        'CH*@;q&*8S3J1&?m@rHNTwWuL[>N,`&~-dz`5L)8ZRy7Y?xVp+pfpL{@B_ u/!Ah' );
define( 'WP_CACHE_KEY_SALT', 'vwdIWlHD(P`2mgw--q-LHYAX |V8 O3?0idN*=[ 5}FEq@>x(|]^X/iI3qEHfR>3' );


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
