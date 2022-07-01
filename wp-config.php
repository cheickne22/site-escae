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
define( 'DB_NAME', 'escae' );

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
define( 'AUTH_KEY',         'q^vP,~ZtW?,Ec]9HJS<kJVFKMC0N0U;^nZXP _dM6uv,K]U,}%Ampq4vyPhGH29T' );
define( 'SECURE_AUTH_KEY',  'U9~Lp!xN55)@G[gjA#e#G nY5aJr#K)TA/;4!9*(G`=v:iEKWxzJfd8?L[m=HdM]' );
define( 'LOGGED_IN_KEY',    '{^j-0^ivQ$[aR2ZH~_(f#7Z`?bvU;iW0]6J;$t+ &Mss3N038etni d@1j.>uml|' );
define( 'NONCE_KEY',        'Ib2c[35S<=|xTWIHAp_h9,Z`s9S)Cu*SWU4t{aZrnpL-Y/H?.vcbkUZ(mwI4o0Sd' );
define( 'AUTH_SALT',        'z;jNGht{gG?k?P.),=tN/Rq.W*Pj5N$NwP%|E1@.>[(&>htW^b~^(#4k1;ku?9{X' );
define( 'SECURE_AUTH_SALT', '#lO=c]ApX=qH<bSr?/_MiU~beZ<{sr_JV5{^pM43]gSpGi9W`Z6kT1m9HN6pIUi?' );
define( 'LOGGED_IN_SALT',   'E!fb7+Yk}w3(+O}5H]`_YAH1BqtKnKs>o1%0{?fwHCvl=WayIGG}mi7/hCjQn:)`' );
define( 'NONCE_SALT',       'iP!h?krHQ$M5-HBH(,MH>D@fHmD>rasDMeo 7$7|2=-Ez%L/Q7dWX)5/j6|ZR+&N' );

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
