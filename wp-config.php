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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Jj$=E=mdu4h~hHD*X$W293|fO``D`+5~.:tV{t$n#@]b7?BAMChnvNR3Lrd;5V2F' );
define( 'SECURE_AUTH_KEY',   '1It,N? ^21Wzu%qn[yuejuzvD#YxCw!4?@JW^CN8;#cdOIs<,mpp0$q|}d_jXxgj' );
define( 'LOGGED_IN_KEY',     ']^0g}|z`fDHlBbu6eUI:iDSfF<Id`Gk[Fik6]U}o)yAYN>n;<P~%]DHV. A In9$' );
define( 'NONCE_KEY',         '{l= {~OL/HC$%=(t}rs>mFMK!k|wlK`$`3q3<Vz[xh(TV.=,`^Ghlso-MJvR!AF!' );
define( 'AUTH_SALT',         'xd4&v#?~Y81%|^n_29QM&T.~Be}mkr]P,BFR `e3Q?G1I#,::`O`s[XQf]zI$.sO' );
define( 'SECURE_AUTH_SALT',  'RaKV@Dr/c5,oN1eO*IM}qp26p6@_pX2zf3Eu0X`cCgNO_$O2^hEa6oFn(_1=DZw(' );
define( 'LOGGED_IN_SALT',    '?@KGYiYSaSX;m0Gfnh)~{OTp~b6Vgh#e4!0|gytx+6T}-!}3^-obtzGU_&3wcZeA' );
define( 'NONCE_SALT',        ')^7hy/njsT>+A.jC-E{k,roFA+7* +IS<YGzHM>F%^A3>I)V57zs&djXaf$qs;_U' );
define( 'WP_CACHE_KEY_SALT', 'wq2;d!]bfZJ80%PG#!70nOnIL!r~dE-.~8~R&Q)uWii$Sk0@gR0!@9%&[$I/ip^Z' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
