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
define( 'DB_NAME', 'lovewp' );

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
define( 'AUTH_KEY',         'C1P&{vJw,xyco.(:vC}O$82W.zLrpcBT:`y3hIK)2Or}u{zjz8Gh@Er<-[D6ms]=' );
define( 'SECURE_AUTH_KEY',  'EgbB@+8SRhMMpB%_go^AX9JQdCK.R+%{BPX1,F,?kjI[A9HXOIQvF?_%6D&9_6/P' );
define( 'LOGGED_IN_KEY',    'W5x(ALOtFJo@^UeED*B{^WtcQ_d@muT[^;zD03EcOm}C0o5?bX[PF{:}j35H9xZH' );
define( 'NONCE_KEY',        '_mND&EuS#&_bX9?{yv}j(+g@~9c,0iZM{qLAargl7hgBGz$*72asMI*jk&#!QIBg' );
define( 'AUTH_SALT',        '[-q}pzmA!qExhtD>mNmYIYH4IXfAEqC*eaF1SV>*sO$z7Zn#$pPQ8WJ]UAEwEUhM' );
define( 'SECURE_AUTH_SALT', '[^~oe_f=6E@G~lt[R5s(Ptl2oGO{|l`!<<N!$C+}bxRa{1PFkeaah]csU}7>riV]' );
define( 'LOGGED_IN_SALT',   'Q,j?gw,f~z4~zZ!5Pss)@_eMlkAwz|1>w{/HiYBBD=!@)?a$PFUjX)m0/DCuf)q|' );
define( 'NONCE_SALT',       '28I0I&lHO837q<h?CcbK^pL!%#B|h0Qg4^91~d82J.T?ZHe1T| 4LAv8V>9nLhza' );

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
