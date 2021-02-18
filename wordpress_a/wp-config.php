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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mysql@53' );

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
define( 'AUTH_KEY',         '.n37]$1`:C01R`_eh;w[dB+ur-V*i,Xwyd$.6[{r^UwjlaXmV3?ibwA%|Ey8obBU' );
define( 'SECURE_AUTH_KEY',  'SoIk],Pw8D^B<VC6t:vsnPwb>5-arTsB5T({];IxW^R!<_&yFNV%a]~u=Mb$g~9}' );
define( 'LOGGED_IN_KEY',    'I~wTA0nYg4wa}U54$h8,s6s+(*Dl- Kl45&@h^q;202!g)c$NAllhsc;XahP4)9^' );
define( 'NONCE_KEY',        '>P^S,ME.~wW{.Z/9:h]yN`deb)2rzl>Zrs!(= uQXuh7^y@qH]lzdK_,5ZKx_!un' );
define( 'AUTH_SALT',        '@i5C;`dN5$3><ySmSTS$6mz _8B}pZ^7i`Uk%|/T=utRO;[LTO?8:p}foY<3uJv]' );
define( 'SECURE_AUTH_SALT', '$QYYU[B;D;!04!&G>@7]vhZvWJDR2?>[^3:}4uSBg~me$P$k{Lk#y+P}IX.0~AyU' );
define( 'LOGGED_IN_SALT',   '%%HZJ^d`Ppvla,N FqUjgzGorEST^reh/3MtR3L1rx9:1N=sxRc)OiKE!I`WqoP;' );
define( 'NONCE_SALT',       '2[61mq*AX>!dDV;q>uVPcz>J:f=pJJ%y^r:{cxm*qKAXuzCB[B.v#h7O7#lIz}a}' );

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
