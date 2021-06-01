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
define( 'DB_NAME', 'susseximplantcentre_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'L:~:~p(U)z:`87PBU6Be1Vwjn1;]d3s6|[J:,Q6%LdS|4^*_8!hbP4<6%<`3;yet' );
define( 'SECURE_AUTH_KEY',  'byTzZ{*NtT5R!Gk8tz#._ e`/kA,Wmk.FB{&qnAz9olv:8x-;AmA~^EEmpIX]%Sj' );
define( 'LOGGED_IN_KEY',    'g&40+Z$hsiy%g7$=pDU4^~0UU((9A1hrxAxkeQ(Ax]UFe&m.$hh%%FC!qw5V1L-x' );
define( 'NONCE_KEY',        '/[mh7wL/V1#Z1^nb1ag (p?v?EA_yO4ZO(&Yv*Uv@ZtI^m|TPV3/Hy1Y+;]7@+:x' );
define( 'AUTH_SALT',        '6tfC622N5^4fSVm7x3Szt6KRWOD;eo<|rTq izv+uq`*)e^k1HJ*[bF`t-pSq4!d' );
define( 'SECURE_AUTH_SALT', 'M)bU0uUG8BV0VP,.8vZaE=3eMlnH!bzF{STs=Cu?8|o;g)G$t8n^PBp`A)],, %q' );
define( 'LOGGED_IN_SALT',   'PR7HL}|x3mAL@IJ[,#|>>>3U@,)ru8#;q4tJ%78>0d,#^AGz((n8OMOTsiX/#uL2' );
define( 'NONCE_SALT',       'EtR&ri7NA[PJ7h6tu4(4/}#/uz 7T0<3l/m3;!@;&t3I::LA,-JVGZTUvz^XHnub' );

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
