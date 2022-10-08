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
define( 'DB_NAME', 'ys' );

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
define( 'AUTH_KEY',         'OJtG6mXCEh;tf~O1VTI#Z,p(e|8d_M]B8)+YX];![t>^bT:dvQ,,e}fS;B8!I?m+' );
define( 'SECURE_AUTH_KEY',  'pV]<>?tCSx/J.4HgCZ&#AP/>iwKl3iRZxR/;5^1fA$.RkSE|%Dpa-}07$SX*-I@6' );
define( 'LOGGED_IN_KEY',    'R-)JASPth0%[b*&sg.A~kC~C, JC}nWzTa7oY~?C1a<eO/,#8 {b?=9{KihGM$j+' );
define( 'NONCE_KEY',        '@FaHM:IS 5?sC;^Dm%j+~!%rzQ%:XGu`D*C3s5[@&Zhq>]YL [U]#$DS `ie#8u ' );
define( 'AUTH_SALT',        '$]`%T&c9_9$mQpOL~Y_(.)dCcHaRoa>TI_RXs7*`k!weSkTz<KS{E=b_1r9&q)>S' );
define( 'SECURE_AUTH_SALT', 'k73TC}[xqi=i]q<XTq3]0;2[]u%(CKoCL#>v!O@vQ#A&p^k$}IUJViO9ViUAd`=3' );
define( 'LOGGED_IN_SALT',   '~6Tk/IwOy9VK,kDaRlgpJJj8w)1;{a?t!q)ak$*j?l3JTXh3] d+nRWR6V4u21XL' );
define( 'NONCE_SALT',       'DSez}*#~M>3pu;pQZPih%@E1cXSwa.lf%*i4rn*S4CT6khrwJ5og$ xI@Y@{jhhV' );

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
