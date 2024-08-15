<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpstoredb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1289..//' );

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
define( 'AUTH_KEY',         '%sD  [K8ok`q#uh#?1*+Zy)gQ,G3 <S9vnmV}UH:TKRky;fb1#x2hji~^%T5!dXF' );
define( 'SECURE_AUTH_KEY',  'w9:qR~5xmqW3q)=?$dH,IjCr,WdWIC.Ujb{{1|M/m7/T%}9[dpgs%HSF[&6`$@-;' );
define( 'LOGGED_IN_KEY',    'GeGquX#h^Qr`GOV@teFDR6:Pz>zO9MAXdf8J[(SeJg{{biJeW~._Z~Em2Ez9$u]w' );
define( 'NONCE_KEY',        'wY^E~&[w~QLEZ`I92ya&sAMd9@LUFL.2Ol/!FJ7}:W=k2%L-L.~uKFD<!T@Es7L^' );
define( 'AUTH_SALT',        ',270}=*mc#/:,P1bZ6,|,(WhJ70;e+&s!`.-gV?WTpWV4;K(rqQHORijf,}.FTX%' );
define( 'SECURE_AUTH_SALT', 'agxhT#218h,0^.poJ5);xH#CByFyD3PEgdsjCl<Ohr&4|]VFB0a6[`Ed[y!k0+fY' );
define( 'LOGGED_IN_SALT',   ']=ya~%{NYc-Nog8f;MTQ.yX{#.kiAD][)W{t3q)s{JML,ok}#_~:biwc1Fu#T6mk' );
define( 'NONCE_SALT',       '4{7-u&68:K)C)^{.ngj1_p.XA7{Ox aF8WG+5=mng}qZGwxs2K:+wgpm#tIc;ICE' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
