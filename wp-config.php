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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'Ft*0C0ZZ*F]FzBN72;q6eZN&T]T/NdOPq>f.=HdV_~[~SWALp=firtHcff)B;|E%' );
define( 'SECURE_AUTH_KEY',  'LL|Al{/@sM6OKqv(AR3Lt%JX[wHm~-z@i;AJK*giiq%^pgtx46IDzDe9#8Q4ZGh?' );
define( 'LOGGED_IN_KEY',    'S%t6zF9_U:2wE+15EfwFTdUHSVATJqs8b,<7*,$.0J)4<rqZa`TWYN+Jm;+$j`v<' );
define( 'NONCE_KEY',        'w>jU/eY]&[`aI5T}jEWBcFGH@rMM5t}6{M@St@-=@eIJU[3ah#D!j$r3Jo|PS0JN' );
define( 'AUTH_SALT',        'tyDz_@$TE,Zl:]O%r<GUUi9!8mo)X]UIa*hQWdYZGlS+_Z/ujMo_a|@EA(GG-k }' );
define( 'SECURE_AUTH_SALT', 'wTBCx|:[vFMJ`dL}rmPB]]HL&Zh>Us@6;?`Fh+A9~|xYMGnI~oI9llD/mw__KN])' );
define( 'LOGGED_IN_SALT',   'OcgSnE`FCDh5!9b6lo_I1}eZtsc{t$:IOIX_k{lhNd6JTR1L#W#Dy*/UO>3S]/jA' );
define( 'NONCE_SALT',       '-(}<fKb1fFO0f|6E>-=CwBGL+O;gj&K|xULMF%xsfM(NZax)!ZPl%b99]!mnw_{P' );

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
