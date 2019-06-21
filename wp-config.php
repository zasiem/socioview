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
define( 'DB_NAME', 'db_socioview' );

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
define( 'AUTH_KEY',         'Zx>6`bmYc5]%Zd:j8MRljNsAg)ZD3z%b*X-yT>-diNY,n56p3VbU9cVlBFRKL;)p' );
define( 'SECURE_AUTH_KEY',  'yF.b7((%k~n4nxjd-~L1[aB<26Kt*AyVY5/Ed&dh/(;cr3q^k&s_9HyhM-AeC4Vb' );
define( 'LOGGED_IN_KEY',    'WZ,ZM1YOl}#MKF%|r<F(am3rzxacq20DVlK]VI)ig2l9$)U2Vj3FlI.n5HN|v0#Q' );
define( 'NONCE_KEY',        ':AV|*lT]2Z}7/=/UHvDo)l>p9M^`)^WV+51!LUhAL#kDb*@oWA?Xj$dV&.n60bH#' );
define( 'AUTH_SALT',        '>sOR=v$OKIh.uaSp=5Y}aVp2BB=lH#am,IL:Fx3or$hKu6$y2VpRpTk5=el1-;p^' );
define( 'SECURE_AUTH_SALT', 'ZbB}WN-*M.N/8vUz@@;|3;J3m9/+A3l$5-Rk8snSyGe@.p)MAU)E;_XiEM9SCgT?' );
define( 'LOGGED_IN_SALT',   'gB&u?)~ayh#FvWE+MNOEQYLP0(]UmYySJBaOEP~Y5En_%+xf_r+8$Hw_y_N?H^dy' );
define( 'NONCE_SALT',       '~_Q IGrf}vd*dzmY|yau264d:qQ6_Hv{POI]&Jj4*2f_lEKwBRbi_p0jW%JlZPcD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'db_';

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
