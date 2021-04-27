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
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ahmet' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Sl6|}Js/M,zaPy.f6@.nsrfs}T9K5a ^)+3IzhJ2Jye}N^auR)u+Ot#q R(k1h2w');
define('SECURE_AUTH_KEY',  'Ry-n~!/ik;}%Ulg;c`cJ<5|KtVS)xaV-/;N7HoN|Y1q8C+]:Im|Ce`>+$9WS3|kT');
define('LOGGED_IN_KEY',    '>{Ns++[j(w#TTzV_vJ)`/@$J+y|cyPD2e5-)=D 9<y!5,me bzXi(+<bur$B%Z]^');
define('NONCE_KEY',        '6x]AZ^o6`El!YJ}`|!chk?` J|-u}41(zTtXlJ&E|#G@GY@n*/<!{fgc}D7}Ia5l');
define('AUTH_SALT',        ';@o&9ah_dyW|VpgvDq+(bB&Qf]TLOziOvLR>^iDm)[KxWT.np;0~F<5H$E>xgn9Q');
define('SECURE_AUTH_SALT', '=oVQh>PoH+b?AcL6q4+cE2!}?7UBhfD0-0SA|Zb;3:bv3UK%A}t%DwV,PK.:)}~+');
define('LOGGED_IN_SALT',   'E!Qn!xgTczA,|<:DYKEZ?-Pp_}/w4R)8lya[qXDc{7Lc?PF^p5z$.OaSiut>3Z.d');
define('NONCE_SALT',       '[H&+!H1g|<TR?E/qW12A==5kg=)5BGLZBZVn5){6f(=Cx1 2f^bd6/VuxyNe2c~,');

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
