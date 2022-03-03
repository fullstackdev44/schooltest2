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
define( 'DB_NAME', 'seefatte_wp_school' );

/** MySQL database username */
define( 'DB_USER', 'seefatte_admi' );

/** MySQL database password */
define( 'DB_PASSWORD', '9fK#tHk94Of&EkkA' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_DEBUG', false );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'R!p&n2TWp8I5U4lm8:~52024RArGs%B&91ZlR/R2E6d#3R%3o[RhK8a8fdJYyNIY');
define('SECURE_AUTH_KEY', '7DdC16e#x6492[;mWm63(2Qlmd34246*:Pz3Rd#))diXEc%4V@e6A8-Qg%nK7Hxq');
define('LOGGED_IN_KEY', 'bw12(5ZrWOr[d3;o1X_M&*:&Aky@;K0Y26ITN%2u7@aKI55JWvC%/7(h|ig9[V35');
define('NONCE_KEY', '%7nZ|59b&-EQ-IRdqc%-7vE|9[4Fe]8RLB1p]50NTpK;0p36]m!9g77O4uP94v&-');
define('AUTH_SALT', '(obE7;oq(A:D/22k2|K5Qe5f5w(@eaWO5Y+B2P504G|V)W5b@L0+5e58/]85;9&/');
define('SECURE_AUTH_SALT', 'Qdt6rH39!jN89|z0%6HBO2xOA+5ikG13&*(5hMf8+x0];@%g@X)84fj2oMPE&~Qc');
define('LOGGED_IN_SALT', 'UN2HM0g*fLnt&dzby%yC5;qr8GS1u6S-jYT4q+KXcf2T-Q0Y_B@+qt1%:]T]q8t1');
define('NONCE_SALT', '/9*H07O4T&07A0N::@/RtTP)R5Qc3d8SWzCv2:#fmoO604P9LY0)imbbHswD(L#Q');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'OnY83jkOiZ_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
