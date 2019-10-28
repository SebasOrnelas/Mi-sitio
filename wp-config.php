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
define( 'DB_NAME', 'devcode' );

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
define( 'AUTH_KEY',         'ZWPcN}K:vt{xjof#&tsEMf)m~PD<hkk,ao(b{]!Hj/d>ZU|< :cAU&=[@lM!i<GW' );
define( 'SECURE_AUTH_KEY',  'Yu)GXwzIJ1RR=7}DgR=W@Wl^>LtKtW92[1/Y,Jm~9Rc;_SAEROjqMWKW}N(Pei[4' );
define( 'LOGGED_IN_KEY',    'iVk .SC*Qsxrh[CwCb(R=R-}.r{^xP)r%!B`Gh~Glv*D5DqGrg(u$*+/crsi3p,!' );
define( 'NONCE_KEY',        '[,)XA^rs|Qx1RYC@3J?<P7SVnmI:(c2C@w_[wO_1o~@xh%~479uLUDgvOVH?cFo{' );
define( 'AUTH_SALT',        'z0>4S;Y9uI@cMID+rrXPZo`kCcnZ-E{9bO~(jjRjTSN6d@O8b.i|RG`0~qM-cA5W' );
define( 'SECURE_AUTH_SALT', 'HL)>KCLzq}Yk=z1f]?#?cx CLAUYP2YIWC-oTo&BN$)rBQIx?^vH#(FKx3{R{&we' );
define( 'LOGGED_IN_SALT',   '*O{8%S+8WMdU<oSPKfkr)VFQz,oG`t?R?$X$&:Y;7^1Mb+E_Yul7u%}+;..=yk9k' );
define( 'NONCE_SALT',       'P~|hh#[_-bW/-!ZJm=j`c=bj04RD)8cEn*5b`ygxX@c[&k SYyt6]/Pwv3I}BHy`' );

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
