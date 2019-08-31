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
define( 'DB_NAME', 'helmofrince_dp' );

/** MySQL database username */
define( 'DB_USER', 'helmofrince' );

/** MySQL database password */
define( 'DB_PASSWORD', 'helfran.' );

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
define( 'AUTH_KEY',         'X^YG%,YA*99V?Yh6<_MdY0)PVamlxQ$]}M*$sjXKi88iZ5--BNO&-[CGWOaD^aQ^' );
define( 'SECURE_AUTH_KEY',  'U!t[M2DP#7Ru9E2hBdRG-sY1YTVi8.^9mURwfsu+lm|&]5 m$0U.l+=L|kfc50vA' );
define( 'LOGGED_IN_KEY',    '#kuj`(VI6!]L^5.]L9%(nCFX<MCm_u:m#biM)pBl}{]>.Rh6?4^ct}v86[|jr@F5' );
define( 'NONCE_KEY',        '@{LNCJH!^lMn/o[p@Ch+_~#BlBAsiB- >{JS-k0.eT:nEk<5Q8,px$SyJ}^6X8u:' );
define( 'AUTH_SALT',        'r0Db:W,-k5oTqRaVGCpuf[E1.$NS5v_Hp#+DTBT,dYGw[iomDO)G]l]xY|x6-!LO' );
define( 'SECURE_AUTH_SALT', '!oCiZy<j5]3%`>$9TzfrI7KLZS^!(BBl?Q)<~8A/+*0k)_S G6QkJt6?_UGg#G}x' );
define( 'LOGGED_IN_SALT',   'S:3 GQdfg`h6<0y:%ql`vBkrp^t]mHrH(^R;3+h8hIT!)UIjKM_}lmnZsO3h)zbV' );
define( 'NONCE_SALT',       '5@Yl`fdAYQ8LY;+zF=N(GQJBV)]OYHpa3y?Ul=fVyOw8w&,`G|OD!]xC`#,$4M`B' );

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
