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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'exprt_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'D1o}$Q6TE>u><+^p`N;5)rNOILO`n2w9z]Bpr!?nTHQ7yWG%&fXKGAR&cn,!p7Za' );
define( 'SECURE_AUTH_KEY',  'jIUxaa(R`?YCRzk}i8K}RT]QtnDn7xB`_]<lUP]dzvIgKJ}=2kczC;a>)?S_pXdE' );
define( 'LOGGED_IN_KEY',    'zFL@zwaF*Ua-QF2!1c0O0gH`$^PdA$JYl4Kh*BzqW`>zgtJrM%{,a1*?5xl|lH[q' );
define( 'NONCE_KEY',        '!aNtdp?d5Hn8jJgfuuO=*45vk~.yJNtGG9gJ+Ox`11MF)+Z;nO#RFgE&[Xo4I}=m' );
define( 'AUTH_SALT',        'w9JJ=#Rq-d)[L]U_09wgnWqXu>O^R$ip]T:Qt}!cILK]W+Uu!U.md`kd-SY%x+=?' );
define( 'SECURE_AUTH_SALT', 'm#Djk2i!bk+V>rvS2cIQX@qa^z Toig .krP#k?Z0mMZ(QbA*P?>C8hCyCk=gL?)' );
define( 'LOGGED_IN_SALT',   'aJ0Eai6;rY9<~MNKD>3nV/Jd;pbAE:iR33MJRhqLyY=%WQXjwFmY-T-xwq(g7TwK' );
define( 'NONCE_SALT',       'n,DpA_nc2R7Ew#L>NG&]Fg)r7w3uJsu8N^0]<.@h#{SQ}qWy#:2BmU!gpxtDSga6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}


/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
