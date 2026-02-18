<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web_web' );

/** Database username */
define( 'DB_USER', 'web_web' );

/** Database password */
define( 'DB_PASSWORD', 'jNN&wZqt^EK]=n+X' );

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
define( 'AUTH_KEY',         ')f^x!U-tG7#$vj;HIsg%_[L+)V=~w.8dqq;uE`R?WJ8T*Q#jt`swzK:Wnyw_w1($' );
define( 'SECURE_AUTH_KEY',  'i.M%X=Ex{~!V<$%=;3,O2wOTbu69H/5kk>B19+w/9:|v+G?B(!~n/a1zN3tz:t?b' );
define( 'LOGGED_IN_KEY',    'Z|0`>STE:OCy|KQFki+)[-Yn2k^+_PH0!z9S18u@vaocCe<&]bX&?M^&;r[<8/iM' );
define( 'NONCE_KEY',        '9eLe35P0tY]*FRpHIsQ<4i2+dA;,x^IYUSInEi+_4C_A%#_aB2xiP@8%v}NuE}z=' );
define( 'AUTH_SALT',        'Y4#Vf7bPs:(eHCv0H].fA)Wd?n3N%qq9Oi!Om4hC]yCZMQG9TR7lY(oC8<^kWk0g' );
define( 'SECURE_AUTH_SALT', 'jm{Rj[pa2>FSvqba84n##_Xc/Q ebYyy=;v%H6T6)wdp^kgt+~[`>R0At~<T8DJl' );
define( 'LOGGED_IN_SALT',   'sC@G)z.5W mJH3nQ/[2F*8~{h_}wDgY`_7VtmpWL/<Zm=.LC%6x`r=2w^&hOC*Ga' );
define( 'NONCE_SALT',       '{-Pj+,,-MMBX)<Dk#bb/w: Aqo#LoH9+pO>2k.`8F$)$bg`uq~K_ YCEhFxc>9It' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
