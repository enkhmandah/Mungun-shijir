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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mungun-shijir_db' );

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
define( 'AUTH_KEY',         'P}K^kR94(sW$W];A$vi11:$TEm ?}IgyOW0o7oJw]0b0dEp4kp5ah)#s;{#FSo=2' );
define( 'SECURE_AUTH_KEY',  ';_y7HTZm?y/)>c}W xva)hwXeS;IF+pY*OiSPSov3eS,%5f[B!~{q!^wrqHN@?,.' );
define( 'LOGGED_IN_KEY',    ')w>cZ?]Mb@vj6.Z.;+@K$5]460b3gOih+k2#MG3{O^);x5Z!dvS`177P|-_dCYMX' );
define( 'NONCE_KEY',        '95c;{g3~@0Ktgnb$*9F,2w:@Y-;K5U/kE59EbZa@<LKwi2= cT~+cbt/,D#QcqtG' );
define( 'AUTH_SALT',        '>7ap2/u9LowRm9Gg,Tx4^aRJmQD!)fgn(C@A@cL6zo6c5;$_3Ql`edUfgb4T+g&@' );
define( 'SECURE_AUTH_SALT', '6@UQYJXiGc2)x8Y=qAMAczz mopv]J$~x69XhZWHm;p<T(m`QDSYq0|_/?5sH`no' );
define( 'LOGGED_IN_SALT',   'JS]z[-kneN+z;,rKN$>ZX-t/6G?($7Gmz:H/_IlgxuVj^0^#};._R!LXv*nQ/$ss' );
define( 'NONCE_SALT',       '7_b@|2Q;>-=|z.6XHPX@qt13 |,pO2$/;oDI1*N,I+9/F$rX}SfKd7}Y((u|K.(`' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
