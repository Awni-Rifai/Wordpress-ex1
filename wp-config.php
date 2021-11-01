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
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!A@H3/,n|0a.Imqzs]:i<,MRGmu_wN3JpVWiUEc xhw+Na1A5eZCm^C5 >b~KJKa' );
define( 'SECURE_AUTH_KEY',  'Ts>V>VTf*E?%sy%16Dxh>XM-M6]]f+DFQ #f8sQC8vD6&?6o8bQ]J]NkE.wyKb$6' );
define( 'LOGGED_IN_KEY',    'ix,<]|{milqHq7xH|6XKnB*[`~R{R~E0AA}^l^q^suIjZmIdGbKuHtx1I=[UPk|]' );
define( 'NONCE_KEY',        'w_MO3+upb]l%*42=P<lAf%Liz%tQ{.Aba#TABvN}[J)?h@QmH87n>#((OqQq2S3u' );
define( 'AUTH_SALT',        '%L@rJ;s}Qz4,UO[7#)tzeNHHQ:DdxUH8d(!>aHs^4P:7w<l7]!GdtNJKL;#^.k&<' );
define( 'SECURE_AUTH_SALT', '.6foItx z@$1A fL)lbGUzdSE@/`[mLxjRS1ufN`.yZ&5?XEkh#=aW2(!GTusOVk' );
define( 'LOGGED_IN_SALT',   'F4S$8k3dL^N;AR0Vx.)t2zr;h@l^ueuAFz2> `<P@<d1WCYJijLd+MMu:r_KqBz?' );
define( 'NONCE_SALT',       '7~%iIjcDJhS!SE1Fdmrj,L) ucT+M$Qnx&# IJ^K#SU]z1hQkNPSle=4%A6AfSB4' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
