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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Albin@1996' );

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
define( 'AUTH_KEY',         'EmqQ^*0w[B6^Y;scH!%-L;b=@NrG)_zVK8mfe)8&KeT:ngu9>u3q4c-w4Q-H<~TY' );
define( 'SECURE_AUTH_KEY',  'J>.cSNz^-C#5@iCy!-yv`ujZ$ABgFLwYD3yz2.@[.xER5#I.3.!Y_6_G*H+?G4Z&' );
define( 'LOGGED_IN_KEY',    'p+OAPa JkPzx-807styXyRX4Hz6kN0eyCby_D@kel?4D<><%x<Z;DH(l|O(qFmTB' );
define( 'NONCE_KEY',        'F$*=!3!1W >m(%ho{ ;_ur/J>R^,^Zg4n 26,7vB^+s7a^(ahtrfdZkw?0)&U9|S' );
define( 'AUTH_SALT',        '[z1N%)P}< A|?Pvn6t}QeRlnwOaiS+NvKuv 2gc<y@};*D*n{+=^57t_4H.m/&<E' );
define( 'SECURE_AUTH_SALT', 'E5@+vs{B8Bkf~8;IbIV:<>u,*-]A{dwA!p$cNc`]K`OYeq8p}s0z,?H/pd!pK <X' );
define( 'LOGGED_IN_SALT',   'dc!X,`,V)w,|n[v+I/6lDmb{&CZvK!e=86*N.$o<Z#]]ZETzN&x>/~m #Bm0)K*r' );
define( 'NONCE_SALT',       'FT&5fE37Pln%SMU.J>$+;ATn<@`Eu0:`Q@$*LDsGI@Bd6*Z=-uceAKwvdQ.q5tI`' );

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
