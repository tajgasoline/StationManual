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
define( 'DB_NAME', 'stationmanual' );

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
define( 'AUTH_KEY',         ']B o0Bsq4t))UXbbb/4:Zr1+by6/_%Z%F4~jzA{1JH*l{U!A>)BLj2hm3(&]&`-(' );
define( 'SECURE_AUTH_KEY',  'i@fX$FsDC[#jf frVk)<X7(c#]:eni-jSWF^COou0`(r;6d+5zf&}}6aEi!wkl4.' );
define( 'LOGGED_IN_KEY',    'Q0RqXnQ[!yX5NUpaE%r1B}:I;HL?+B6E6M<xEnz$0qKA`?zr{biDWj`E0F)?Ay=$' );
define( 'NONCE_KEY',        'WmftZdn`_RX]unPz^TkPj PlYShk?pY#oF8RvXs.pM1-j52zh]x[7d=@Xh5DHMcd' );
define( 'AUTH_SALT',        '$T],*$ Fa_zhRYVw,ymD`S]N|;w8<U$7qje)IL[T;g&SnXwi|7Ld)~ScT/9PJRB8' );
define( 'SECURE_AUTH_SALT', 'ld tbwo]m,d-z)i$7T}DTRL::$xV+b{ggk=rd:p,hfo:4JoLMAt=@W`P ^}d-IL8' );
define( 'LOGGED_IN_SALT',   '&[~ks^=ny5V%B:4;foksiX5Cz-/>>1pidu`B9(uSDB:L1+TJ,oe_|GhR(()NwwZ0' );
define( 'NONCE_SALT',       'bCkwg$<Hm)Xg$=y@<{,:T>:MI1ER|`<B0VW9HTiF}C]~  mdCO}d:#$tz%+;R`!M' );

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
