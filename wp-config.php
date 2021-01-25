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
define( 'DB_NAME', 'cds2' );

/** MySQL database username */
define( 'DB_USER', 'adminc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'p?>1$ {8+D2t87Ua/l@,=Uz[*N)NC<CO:3ZkZ[p3ET`V[Q_HVlZ!G,#4DbNcJ|An' );
define( 'SECURE_AUTH_KEY',  'x*`#c4@W{kS8_GV$}fI*Vv<6_}zH*Z]HFOB-u+>`TE9%]/sp,iG/m)(f)Uv+ mqh' );
define( 'LOGGED_IN_KEY',    '3#zR 2yT#fC]VEi@~QL8DnkH`sc< $go%aM=Ysj>@QIG-f,m9bzE)?TMh*-)+ARP' );
define( 'NONCE_KEY',        'ui]$$FHP8RRQR]Si~BKyD).nVa(JO;~hof&o7bY__r_-/XhZUmToh~cpDwkSj3=A' );
define( 'AUTH_SALT',        '4_^:J3&s _AXkq6F`HLT?Go#ysbU#h67 {29n59F!oN%y`|u{*9xEE<97!_ij6hb' );
define( 'SECURE_AUTH_SALT', 'PQbqC?_}zpYz ft(3oU?#<%a3m&c{~ciC~w>ZMa/ww>}loovOXlZl[0R~QzX`K:W' );
define( 'LOGGED_IN_SALT',   'euz&QPw.bozv- +dC&pt~&jT[>C37!K0;GdO^p^}GPDw;9}? 8u_ISU[8/gq.e!d' );
define( 'NONCE_SALT',       'l}sfID1<cW,Cd_&u|zkG7,UAONqWj`xRZ9G^R4^)m>vVmw!s6?d1JfqFfb``lni<' );

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
