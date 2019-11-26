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
define( 'DB_NAME', 'ism3' );

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
define( 'AUTH_KEY',         'rf(5sL_?>yCp~T-_#;A2LwIXX+c+`z%,q}f}$_,7&y8M_ACb:|O/32|eN[SxfWb ' );
define( 'SECURE_AUTH_KEY',  'sO}q2i-JK!V-~{s+U XU7c/?RO2rHd0!7L7v[9L#_jYh|+5>W8.<`u9a`|Hs6$X_' );
define( 'LOGGED_IN_KEY',    '-{5]xkQ>5>7us~[(9`|=Mvl@nHFB.4y$4yt1|^]9)3{:t/h9Vq?jXa3~~4-H%,kV' );
define( 'NONCE_KEY',        'gaG,BcQK0?;hagrSjc]]Dv,bZVz)()ay6+L*h?2qr41ISWQQ4;:QYE.53#Qs3`0v' );
define( 'AUTH_SALT',        '!<WKP{<W!GakU;Z:sgsFO61<xdJ4cPn,xiN:)_*X`b=)#&5b0={!1Av1pdF3vx,(' );
define( 'SECURE_AUTH_SALT', 'Cy1xnSS:_bHzxhs#G?R4]hr:$[q}C!#]m  xOj>@{qP@ws&x?:ne2d6z[r|>^,gg' );
define( 'LOGGED_IN_SALT',   '@c:(KQZ&FVCzx^PlKXM3Hw]`w vDOb z(vEkuj$_pbZ;$QiV~R5WCUCi[(6X2O >' );
define( 'NONCE_SALT',       '2Xi<i*xc;/u&D/3.ui{|Hxekcj.O<FdmXUYV[~ A(Yy}Q3F_?^^HY_ASiAc>gngi' );

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
