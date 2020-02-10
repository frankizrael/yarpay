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
define( 'DB_NAME', 'dc_yarpay' );

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
define( 'AUTH_KEY',         'W+V~sNScDVp|pGQ@E7)KA%E*U>8:,AYFseVDR.91Fe8+++q4r]toLyxm|]Dz%dcK' );
define( 'SECURE_AUTH_KEY',  'MQDsv%UCF[uH>mZ=Y.ED`BQJ)5<zdL4M;MgAD=^a4/zQ!?R:iw3s4`}L2f@o>Ao/' );
define( 'LOGGED_IN_KEY',    'hrV<5MMLX~`ZVPtzQQox!az=@?P>^:}tSVlqnkI<Rl8}$+r:Jd9!vD9:ziz84^)5' );
define( 'NONCE_KEY',        'dOczd[nf<iM@LAZNB^y&H5s1Vfoff;eY=&0{~jIM,dgr46T$@vW7B=_Jcf7*Qi{w' );
define( 'AUTH_SALT',        '}y4#x~k~vHHrs%B`l*R@c@MhMIO5^f.>n7.RRTCoQTU@U-kQjMf[zw^x9lrQ?D@#' );
define( 'SECURE_AUTH_SALT', '=Ca4uC:l(x:Yz6nij<=#GTT&*J=E%,|Ns-X}=?6C;)ar[YYC#vF8*{c<U|ubtb1a' );
define( 'LOGGED_IN_SALT',   'e$ tE4G_6lzcA0^6xk$ $${j|4xIC; `:U+ Ps&;pURV7i@LCBzq]lfJ+Nbz]C-g' );
define( 'NONCE_SALT',       '`!K-<ZB[@F&fM_ 8a~Dy[zB;lyh=Q<8vMi:$.GghAx Z3.;y(`BjjH1JA0_w}E7S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yp_';

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
