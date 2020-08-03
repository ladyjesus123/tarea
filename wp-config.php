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
define( 'DB_NAME', 'pagina1' );

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
define( 'AUTH_KEY',         'Bwp=_BN8~hfIhE}(~9q%|i5rtHyrGs/LIRdnpqRk8ag~m@! I@G+vt!/|5:Js=}:' );
define( 'SECURE_AUTH_KEY',  '-gEdt.tC5$LJN2dk; 9;tKVHFIa;<@]4Y/0tdMuxjBuV}DwT::s-HBf$n;?qS91G' );
define( 'LOGGED_IN_KEY',    '}f!V-q17RLd|T4uE2^Ela|#M-FV.Qw7DQ{VV5~8zX7Lrhw3!FlkF~T_APp! ;<%g' );
define( 'NONCE_KEY',        '=#+X(9#)gDM&+}-i5BF:O9:8IIn5+1P/b$dW..J]$HqxuqNn+J.EKC?v@Z=Ux_{z' );
define( 'AUTH_SALT',        'dZQc *CPZ?I7mQe2.nekMNvj;{]H#vL/9_7r e7,(Z3LY@@&vFAf9PY_hC=B+(>W' );
define( 'SECURE_AUTH_SALT', 'nc+KUAi)muy.wU$<,Q&FPa$-h0A4-i3c[{[!x*rAku^ip?&rV/] _;yxT9g8TyuC' );
define( 'LOGGED_IN_SALT',   '6wk;Gs!xb.OHB!lJ.i`|_|Id5Vm=wXq/!f@`m=(@Ee%Hiko!5B6lpdP<JQi-|;NM' );
define( 'NONCE_SALT',       '?!I7Hrbv9wklRQLV~QJ^5p6h@`e5e=4SY/91pFmLypa88p)_$zJFum&Rr<`2V*dV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pagina';

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
