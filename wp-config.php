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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         '{jxOB@ZZmoLztH:boP]mgFQ?8dbAZs|Q2[+ZKRSCt>V+]c^`B;:1u(}PV+RkO_8A' );
define( 'SECURE_AUTH_KEY',  '4>KF,WJbbrfgPKhnLj)rxqQXWj_`4=f2IL5[%Ha,6 pf(9*Ui1!5lssK<8U@Bnyd' );
define( 'LOGGED_IN_KEY',    'py<j,o|>~B%fmQJ8yxuO#z/,] T.zv`NmLWn27V37jI.o_m>nH`Rex7=5QnU]$IQ' );
define( 'NONCE_KEY',        'U0tx;zj{/@{:i*|25YOu&OO|&f-By,c5W98>YC].x}mo)E,riZ(K5|.X4hpmeU8u' );
define( 'AUTH_SALT',        '!DH:f2>Q#FXDsy2n3f4$buW>!fS4dOac!!Y^TLO65,8wr|0Ps_7Wd>,b7BK&bs;/' );
define( 'SECURE_AUTH_SALT', '=Ce6#E1uY2c9fn<jx^6V/Wz@;|YvUBe]rJu8Z1gLn%^TuV%M^{Av)fA??(ZAPyW1' );
define( 'LOGGED_IN_SALT',   '=qs9H(X_VZ! OKKznZD-vu+9g?35oWQ/c85(:Oz$!)B#X!}dlkT=Nu(O#GtGy|rC' );
define( 'NONCE_SALT',       '01k#cEiS7`d~(%{<gE+/0VG/3,^e,AQ{w**}Sp]ZA=/cB>vtT8G>eoj8Hb9k-Js>' );

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
