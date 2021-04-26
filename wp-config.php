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
define( 'DB_NAME', 'labb2-anton-db' );

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
define( 'AUTH_KEY',         '&WqZDTNu!?7)^CgS M|e41**|[9{v3w|RM%F6hf& #HXY]e{!871T_rNJA;m(EuB' );
define( 'SECURE_AUTH_KEY',  '`fhO//@{K>=*cdotoa0qH5*x$NFH96[EO36)7 Mkir}{?KbREpJ%#%%j:G#gc.)a' );
define( 'LOGGED_IN_KEY',    'WP/LrX!7*5r*EyBRy:,.Id>m;{VUndr{AaWAXYSS|*ZN|_}r(vdt>.:25;i]W.bX' );
define( 'NONCE_KEY',        'VP]d=XC+7vVq~CMS&4a)zEZ|5(gsPrl%#2?&zQw^/,?C[tY%VUB6!yLnG+c2O^_&' );
define( 'AUTH_SALT',        'N+H:?qWuCyg$sifD$k2IQjryMO^a3#85^xhe5|<c[v|i5J]^oUy;^5{X~$73TQ4b' );
define( 'SECURE_AUTH_SALT', 'GPg=,;QBzRD6(h.trfD%D^;]e:aA,<90KW>vA_%yKP`#JNL^t-=KQTC:4:A(WVMQ' );
define( 'LOGGED_IN_SALT',   'm3G_lh).dW{gv:W8TLOxgFYukhdavn)osH-:2:92:r_c&=VkiSn; teCE3Lx=Ta&' );
define( 'NONCE_SALT',       '-vCf;NR gg:M0xYJQozmbPV^#e+ *J+@dRP]gu!x|(PZku7wbtRhh)[hwPb0F%n1' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
