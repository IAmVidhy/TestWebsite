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
define( 'DB_NAME', 'testwebsite_db' );

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
define( 'AUTH_KEY',         '67yU~aQU2jbJ0W$B9ZrSW:>CklU/<FAw;==chZogP@Fy%q7L{*%{LBJBB7Ehd!&z' );
define( 'SECURE_AUTH_KEY',  '!o7q,!,Y%11{L#!_BXqVcLInUj>owE!KI-#*N8qc%<^7gwT0=3b>mn:!m#K1f * ' );
define( 'LOGGED_IN_KEY',    'Vxzff_`9UG}9]}&Ku8t)L&<zkuPkV#W[@(i(b`S=%q?%mLY;:SkQo5tjq6f!PF}f' );
define( 'NONCE_KEY',        'F~RZYnsk;]!gXgW%-_-6WKV!,;NzI=QC&#JW-f>T1>vX[W:y7<$3+0_-Av ZmXg=' );
define( 'AUTH_SALT',        '8M,u!^}~6lYig ?Rz60t%_,)^qs)u/LQKGu)q}jzRig@u-bqSx{e@bW PA1;2/rd' );
define( 'SECURE_AUTH_SALT', '5UzkmgX9bL=Cv5SY_G5;oDQ*5sTpyP&P/yvq3ZE@SOp]0m$%`xrM_@.I+AKMXH&I' );
define( 'LOGGED_IN_SALT',   'd2|ag(fYo(9E3eT4tzpAq(wsCCDa`zo}|^hjiyqZu&#^^o>=|1_?!3Teas 3:P*0' );
define( 'NONCE_SALT',       '%/J*7+kRw6uM[6gK4x*S`^oV^{tt9b7?~#eL*2?3~r1htv[%}Q2Qugvyl699p?%0' );

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
