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
define( 'DB_NAME', 'project_rpl' );

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
define( 'AUTH_KEY',         '.:lHYp#HsKmZS<$HoRJg8uMyHLXf$r|/u=r>4p[`$lO#}!I!,L>+(@Jkqy4!w.kP' );
define( 'SECURE_AUTH_KEY',  '}Ez$>)mua^~iFMT5Bko4G6G4.MW42+>WRQ|*Eu:E&<m9|d|%yr3A_{6ISW 3S&Z0' );
define( 'LOGGED_IN_KEY',    'gIS(YH2maQ:Lj&ey!6*~J8Q}lmJ]Zr:VjH[4<Z:K3]~Ki0meYX}W|UbZ`$gVVrNA' );
define( 'NONCE_KEY',        '_PaDhEYys!a7,vMn4YSF?&=OAdEYk7{ UZ,)lQ=|[QP@%gX9V%]?m3.sl59l,E`D' );
define( 'AUTH_SALT',        'n>=;XlURCiXkw9r]69 X[;%,-Xo.E|S6}HpvQ.@.}cs.m<1KB] 3lx59X@} [jO;' );
define( 'SECURE_AUTH_SALT', '$dzVw!J+|;N+znzFsar_W:ZGU0!KiB.h3oNuuo2OXw-64UGzL lH!s=~0f*T(At~' );
define( 'LOGGED_IN_SALT',   '6mmabkWu+A/DFB?NKn?9WqDN[sD6-6XjYNx#-l|*UP3nGD;Y<;~${8;+hfU4LfW-' );
define( 'NONCE_SALT',       ')hU/Mqg/^gnu/E]K|M9hl{XX }P~(iS!Mu0X8EfNqhRDSU:sG+g3nXutG,,jPPU#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_';

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
