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
define( 'DB_NAME', 'threeswebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'HTmR%(|_!59J`fTqz_^-^5k+q(Fn:o4TI` /|xQk:|O,*Bss^{&nFm/nZiIN9>)t' );
define( 'SECURE_AUTH_KEY',  'P+ogDmX&hlh1;l0P.ho fiqHh__CY7cXA]<B:=``e@Ke3O5[%|ZaSzY~c4FM&+Xc' );
define( 'LOGGED_IN_KEY',    'IO1&&2AU-kL,kBr|g*I9A2jFPf`&Uhq-<09Zpq^dagva>jJ8YpM?v]lWjP*r@ggF' );
define( 'NONCE_KEY',        'd7oGsE_2F;U%t0})kT+Q)&qzn+Z~0~xy3~_CUnY65sk4IfEQ5_}83d2wZoM-B!WB' );
define( 'AUTH_SALT',        '[k->GMU8g9ZuIoEcDUn=KU6d.NqW,LHS<fC=VeQ3rjQ vW~_ByS*9)r(PienU@!L' );
define( 'SECURE_AUTH_SALT', '-uQXe5@[ezC3g9wQd(&_idR)  Q#;IyY*s$*/,;W!Yua?p6XbxC<g#Rzx>aD{tAE' );
define( 'LOGGED_IN_SALT',   '.M/qD;^Lf+oxSxq)/lIyH{LPpsv<Kfm(p!Bv;/0 _u4D**bTTn^AOKB~I1|0>OZ?' );
define( 'NONCE_SALT',       '2x%sc`.KVOgVS]jSbs<ph{4:aq`%Bay>h}b?A?E a&04?<$/Y(-Q)Td3D7*(fzO ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
