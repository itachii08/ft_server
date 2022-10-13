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
define( 'DB_USER', 'zoizmer' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zoizmer' );

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
define( 'AUTH_KEY',         'Ce7Oxgdv;D__Ya<6gTs@+^)AC6L8oK}Gj8BJ!#Hu?4u,*$1{xC;X9=g7)>[JOW&U' );
define( 'SECURE_AUTH_KEY',  '8-~)l|tuO70L1pZ^Y9yww*vvS WB/itqCU^d%,i<pqg+;%%hp,8;v,En;:1R#UUx' );
define( 'LOGGED_IN_KEY',    'tDr|z5G.Ulq[i[WTq;Os6;q{h-4BDDu=(9RhEN?SrG-JTaCVM_>JVI_+@6:9X.a=' );
define( 'NONCE_KEY',        'O6efEo1d1`-XA{(V-BueC7jq<,h}jUyRFw3i6nLDnZ`K47a:*UJ*mid-57&_i],O' );
define( 'AUTH_SALT',        'XI7&*(lXo0L|t9PMaH&cek_klGSBZ/6Mkv$30ltz#=W![mG@~)b}-P+8MLjPMhEr' );
define( 'SECURE_AUTH_SALT', '^; d@`x9MKT#nGJtV;7_!m:;z=XL%)YqSrQ`I-QQ|P73CP0teQ=/U}:1R<T.xzcz' );
define( 'LOGGED_IN_SALT',   '_:FqId+Q>C~ei<rnw&^1R]F]KU-2+=5d4I4p~9pEo~qQ4Y+ehB4fDFxzAs|=AFp?' );
define( 'NONCE_SALT',       '&rKE!`7OUv!E`m%n93XKk)U~OLCbX|m>6-LB>6`.]9SXZ9&{RRm;-ib[At#K0B+G' );

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
