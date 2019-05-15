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
 
/** SQLite database */
define( 'DB_DIR', dirname(__FILE__) . '/wp-content/database/' );
define( 'DB_FILE', 'wordpress.db' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'dtOE>]_h&t!E<]{Shz=lh|t:+wVD)=$Sz$[+O61NT]1:P.EK),1*}0N{=?&BuQ7?');
define('SECURE_AUTH_KEY',  'Fy@:zw$P`)NGfq(4WhC 1wnU@|U<7Jn+V^_U^WS{@y+hPAqYJ|y|K0]xp]>^FT@E');
define('LOGGED_IN_KEY',    'yH_+-e(?X/},^w#T*AQXOZ?}<$yFz<6EaqH@4h+LQ=o}GYa)?@:l<VxERaiy^XJJ');
define('NONCE_KEY',        'lT.9V3ge^_?S3Lx~Sg.+Z37s71/ZpK@|RyNPj#)+J7vqbbaG=1%r6ntb6cvDGd4 ');
define('AUTH_SALT',        'ORC4AF~6EV}-4o|;B}Bf<7zL7P<S2mic7].csNWw+Tz(M/En^aN7NIip^B1JycOI');
define('SECURE_AUTH_SALT', '<Q3|y+9jpO5Lprhxv1@Y>Vag}$e(W$5fyOI|M]|UTEv!X/^((Z)8q?-9+}+5=WN>');
define('LOGGED_IN_SALT',   'Bb&;:tTHkd)tK+? lENl|Mjir[f)~|iR}EIg`2CP<Ss~WK5^7sWUT]v-RX8L2t>:');
define('NONCE_SALT',       '[X0T+|i@`J$/SoA yPrTZzeMidx)JBONowUN1@<OX)X_)+^u6K!+)nk>If_inDvG');

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
