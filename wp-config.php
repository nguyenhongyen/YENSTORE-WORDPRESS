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
define( 'DB_NAME', 'YENSTORE' );

/** MySQL database username */
define( 'DB_USER', 'YENSTORE' );

/** MySQL database password */
define( 'DB_PASSWORD', '123.yenstore' );

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
define( 'AUTH_KEY',         'hy9vPYfHlufhP;`08~aus#V&Xa67jX?48E>i=P.(Uo:q|RpIxcJs(Kkz:q+Um.!F' );
define( 'SECURE_AUTH_KEY',  '9.&=Gq=+fxu,[2u.bn`5rX2kYOII)=$G^DySuxW1l<Zwo55K9IAgn$FP;;_JI. >' );
define( 'LOGGED_IN_KEY',    '&I`>O#]21N60rS>wHe[`Mn2EO8Rg `Qy;)s!n.qL/Wf dtR ?T/&:L.MY<i/l^BA' );
define( 'NONCE_KEY',        '6F)V*+GS~t`Dibu~UOl:3|!Xj=X+M~zf-4;cX;v.i9a`|&<H]DN^|:7plJ|PiyJ,' );
define( 'AUTH_SALT',        'u4]F/aUVnn:pAN]X8YaNCBlRQR5h:K8zc/wM,$<YN&lzuB Ao~VIG}c<N(e+jQ?U' );
define( 'SECURE_AUTH_SALT', 'CEz{m3/R60N*m@EEs0*$z3[[.eRB]X3!0kr>9N)lMfE]cJAROz@8HCJND?4i{gFn' );
define( 'LOGGED_IN_SALT',   'T(0kTGS0ELK5C6qJ+?V#35nk3IdekM}wx3!:XCQ[b;ak@Re)+r}B{#5tqGNY_!!h' );
define( 'NONCE_SALT',       'egV#ekdKUpbeKRJue;{T(6zqJ%T~T7KgsP:Wte!`urxJA 21(s%vok2_#f%Iiv`>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
