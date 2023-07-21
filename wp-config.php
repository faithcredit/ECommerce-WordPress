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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'metaverse' );

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
define( 'AUTH_KEY',         'oYQ}}A1Z3+D7|Nr^KkTMd#fw&m8*?Bt/J:%`KAdx;V2>p#4n;$^#t|7s+$8mKmbk' );
define( 'SECURE_AUTH_KEY',  'j>QM+*zy)x0;ZHriVYWE2vI22d@``FC-RHQ,j@q>O:>_MK/KjG-oC]-Q616s:WG!' );
define( 'LOGGED_IN_KEY',    '%/$6pu7X4pHgp0[nwpgr#rA7|3=}-&MrVqwTuo:m;#Q;8Ty+Ecs2VP2qeP,L^BJ[' );
define( 'NONCE_KEY',        'lJZ_{N(I75z 42Y[y|Xi>cy^oCAS_5LJ5X57w*>+(~2tE>gb34<F~N$74p0vGZv>' );
define( 'AUTH_SALT',        'ANLA/^I&*&^pf]!Lx%wd**8ru=oBJnQA]p4/JKFgS}sfRRJuFH?p[0M,E[V-[TeO' );
define( 'SECURE_AUTH_SALT', '$==ol~JLgR,(v6!vz;W]@X?O2Wn;sR#/<YB OE<j;+V@6>;Ys`FD3Ztu?IlhmEg*' );
define( 'LOGGED_IN_SALT',   'X[7Jq>v}#$F,i-5jp37<]OB`|Qv_ @Hp< X$#[|JYlv=kZM^fry>gI<BE~&~|duX' );
define( 'NONCE_SALT',       ' K=b}nd?4wJ%kW-fC<))EM+5Ug1BJh.*5MA&j]RU`AC&WcEG_~=a&AJFm[-sEMa/' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
