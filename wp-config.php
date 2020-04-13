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
define( 'DB_NAME', 'gitwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '5bW43F^/Q;8yG^T_:)dBsy>G`^Br5.w/Jb5^ &<ji?KjRIE[LubKQ-L:XWp{Vn,E' );
define( 'SECURE_AUTH_KEY',  'Lsa{Ka<phQQ[>v1*}7^e+ t:.*`wfKg6=CrQ$=;h@?)p=?TYw!mbS} D:(Gn|G-2' );
define( 'LOGGED_IN_KEY',    'p*pur ]3VwV_*5_pH>;*!Q.76P3OkvP,y PyuVv%sNi}]-4Kj`k5S+F3,zR=o;7#' );
define( 'NONCE_KEY',        'Zmjdg9CO6Nz*2p#P4MF~-]v6O3v,%8W)b?D3o !rCU:D@{}gpQgt#kq{aYOn_MrY' );
define( 'AUTH_SALT',        'L|A!5`4q4DsB-)M_Qk0kugc~6CfaoqH$XECC Od-2`8xMs-3N0D|JMpnn%AqnKw+' );
define( 'SECURE_AUTH_SALT', '~Owo}4:9zHz}&v}0#%ah=;AM h]OnHTGT-PTEfhT{[ *=/E=.?Q#,5|myTbMnMu}' );
define( 'LOGGED_IN_SALT',   '(K+j74YTyB8%J__L4pbmIsSZtF9.<sYZ89K6Kc|S$QCeohcb%0t{CUP{5rujSD3I' );
define( 'NONCE_SALT',       'z&THf>5$cGV_ZZaYyENctmRGapM.Ok@&hFkP,7 5lt{`aO!-mo(g5EymbluivKLC' );

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
