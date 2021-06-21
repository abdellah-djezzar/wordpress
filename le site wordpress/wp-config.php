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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressabdellah' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpressabdellah' );

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
define( 'AUTH_KEY',         'c!`LtY >GWNDSc9<I1C:>Bb9v*.1Tv$&8Xv(qhIyeim:xQy}/Pf4qU{/g`lt?p4s' );
define( 'SECURE_AUTH_KEY',  'ss;frDGw[n4Sa>ulbW0N9;W}yKpq*^SW4f7&O/a:^+=m61@3e0?zkR3[Dm.AMj;w' );
define( 'LOGGED_IN_KEY',    'XfeyW)<yy >T4dqr@ BC>Q:3Ec3xMiYE`Y?SiS3w)>bRVU@?$<`V$-q6CxK%@EPd' );
define( 'NONCE_KEY',        '68GH6Tf`u5Jkm<??}Ba9Z6ST.u)`_57lBBd :e-y]`n{r_)9q`jyUy(%8.i^ElBU' );
define( 'AUTH_SALT',        'rCE)0m7cyC%w{pig&Z9)s/RI+mND(Xkfl>~Dkx/362R5Ai4JsYN$yVZ!i0^TM{ee' );
define( 'SECURE_AUTH_SALT', 'LfX$F%&%~~/+W!iE+MUDkjz!/hy8_|U%#*n[k9Yo``Qg2|FO5 }rikCkvp[ e=m]' );
define( 'LOGGED_IN_SALT',   'rcm5s92:Ft|*VP:$!kXMq+fnd$9Aw/cFnC-7*S;=PI~LxF mC.vS:N*w2A[<5SI=' );
define( 'NONCE_SALT',       'Rd=2X1lYRTq2JAe%32n2zNk)IYbYn|h7a89Vg=Z*s-A=,q<xg$GM~]25)XpA@l]7' );

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
define('FS_METHOD', 'direct');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
