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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'dt+MJ&i1HM^.uXpWU1XMBQ+P5GQQ*C5JF%N=M0+06lCo#6gZ;.}#>$O.y>[+A0>j' );
define( 'SECURE_AUTH_KEY',  'ROZ/=44b0h8z5*oi!z22ZC<O3_IaD=,W 7I,P(K;+F@Qp[/8=N.%PR.pkIr7kiR(' );
define( 'LOGGED_IN_KEY',    'SDLF]b@+Ign>xp|vjCE?NmYYCe|`oH^hSZ6Tq7({I.9a|nAhO8;wkFMp{tn-2A8@' );
define( 'NONCE_KEY',        '(i9yvT48@Cx2_Q)L|j#`ac0&^Pf?CEbmFurRwB1c_LQY?iWZ-aQR}D=6{vJ+*>f ' );
define( 'AUTH_SALT',        'ont<Ud -AF(L=,WlmbP3uA2eVFNbrFC~;Wp;J;WUolXH0`q%9>=h?CztH_t;23AA' );
define( 'SECURE_AUTH_SALT', 'Y2zxU_jv_i#_+2N+f]9cM;Cud33kn:d:Lxx@nzXjY:N#|, -uVuB^e@]3e-r^LFd' );
define( 'LOGGED_IN_SALT',   'Re-I[:>9oha|8YRkwKblKS.9>5hKFjwd6fhuGX-$3R!c]8ui]m%<T}}Fadu~-xQ/' );
define( 'NONCE_SALT',       'Q@az^=4[Mco@! lQ3_LT&TAihJdQ_MD{<<uAlP3+u*jC0Camy}5D4}_u`@xY1?Z ' );

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
