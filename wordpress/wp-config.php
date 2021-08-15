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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '(U!pjaz$D9c!6I.pn.;kAL5Z&t6e.G8Bn}mDl*EXDq1<zF0-0`F!oyT_1.eIhEw$' );
define( 'SECURE_AUTH_KEY',  'AiAS2@E!;)%P@8K5Qb&2afMoyF+E(Rext_m J)X={pnG*g0+{Knk-6=4?oFqa7&U' );
define( 'LOGGED_IN_KEY',    '|70$Xk=yQG+`oHmv[u=Q0iu1k?OClurrr:=d_mvOEYa G*j60`^y~A<Ge;{V+BK|' );
define( 'NONCE_KEY',        '~+2h#MW2oEihB9pspf-`)Aml]2..Pv$6jkQZ[,-JMeR;@OCbS+C`Y+I*-g0R{Dm8' );
define( 'AUTH_SALT',        'E1Ii`D!sh^2|{fQ$,{m(?NNrDu*#I]pwDv5sP7xLwd8j|$LHY:zQpjr-l6{/R2n8' );
define( 'SECURE_AUTH_SALT', 'i}91Ak]Ox;)E;n`~9Jzb#~3_iP@eGSa!In%YrT |_F -t:b7yO9zKtFCLLu3U[k?' );
define( 'LOGGED_IN_SALT',   '#6/r=jpZ,=40DW)*]tuMds?sWGVs/i9~~I!(q_[]cB;zHkRg.yVUmX$La+5BXcDC' );
define( 'NONCE_SALT',       ';q:ek89 lGH9boPZ-N/Sld#KU*Z4*)g!m`U0hh1a8`.]wl.&Y{rlcK;oJesJBHwG' );

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
