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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bookmark' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Password_96' );

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
define( 'AUTH_KEY',         '{G^6..db%${1}cpLgR:v&{QZ P4EUNxNQa I(azd0sVOz*OB(MP_=DG&9(,-71ku' );
define( 'SECURE_AUTH_KEY',  'DV6=R-_/]oAggfHQ5:6EcD~leXz#?9QoJ/3?ry9!}%^ B=hY&*gyTW.L1>OyXqi!' );
define( 'LOGGED_IN_KEY',    'y:)HRkQitk;0G7@QURk}H$#!V#z@9>8oD}pLA23jtZ!tT@UhC3C]lE-<%l>Dx*O;' );
define( 'NONCE_KEY',        'b76nAQiwN.L>I7MXLu_1fLG@r}Xg|?LSkK7/ZlpLA/@TQo$*s9yD+O&rj2kTmRX<' );
define( 'AUTH_SALT',        'QwxE`uQF[IEmJcbv51]Hiy4@7?ht?ZcNOecU]!Mi[=G#cHXQ6gsP<DY]KGs}{0Y/' );
define( 'SECURE_AUTH_SALT', 'Hef`k^g3_4GX?>PS6`KM+`5,D90](>HLOnFEPzkS+0*D1ZVKw1g#}q|TPxeGp_j]' );
define( 'LOGGED_IN_SALT',   'aTluuif=Lh.@NTlos>3zwkV~gFe_obvNW*,S*d@h#dtCOxXjo)t<C#=vSkP$<3TG' );
define( 'NONCE_SALT',       '8:B:I_;%sCFd)bs:wRo{ixgOJ*8#QyDe`0J^JeC1u1fN*m!TlyJc`C4g/hq:.d4!' );

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
define( 'WP_DEBUG', true );
@ini_set('upload_max_size' , '256M' );
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
