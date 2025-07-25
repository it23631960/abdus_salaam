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
define( 'DB_NAME', 'testuser' );

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
define( 'AUTH_KEY',         'UEcaq2%_:#O|u#2;U:cg(}KxC ci?n3b^4UnP$d2p%WkQbW?l/Q<]rV@YDRMsnz2' );
define( 'SECURE_AUTH_KEY',  'Da9#Q.mtZ(xDH$a|V)H ].709O~L3$OJ+X+EsqTn)O_fx<sh{sgs tg8K(^h`N.L' );
define( 'LOGGED_IN_KEY',    '59trcT_i*{:f~$A+p5Ntu[w{, J$#%81o}Y.,>&aonOTc,TdW>_idF{gOv7@(%~t' );
define( 'NONCE_KEY',        'u#{[!meMAJ}y*U^NNO^Q>.l~f[ KW-)NkHExL,L8:V.uUFCXiUKy-yW&yOqCiDp/' );
define( 'AUTH_SALT',        'TcZ35JYoAW$=KU/>Dfrq12K:xqYx{/@FiZAwR$^q{PfcfK@|l}b:-9=SW0v$W+@M' );
define( 'SECURE_AUTH_SALT', 'z<,7cTm:PR@/bF!c`YDyh4]mt4g<>3n=5z%A:tqVV.~uPd]NlQ~Gk[g=g2bWYodJ' );
define( 'LOGGED_IN_SALT',   'c3pH{E.q#-SZ>C^jvB8 I<!8pABgAX%0B<A.`h2e+jBqi!o4JaX-H{Jfimph^6-/' );
define( 'NONCE_SALT',       '[~90IrF72M~pwqa^,bCPGA3o<cwjLz)is0i[baZo,NOwOWqU8OqcG(P<nq?)+Zv.' );

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
