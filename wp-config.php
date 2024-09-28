<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Production' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'nU=<%@=Jz(07QH$d_WGw)^n=45(R02ieAHU??C:!^?Sq)hA*N/YNnswm;9tDk`KQ' );
define( 'SECURE_AUTH_KEY',  'J-`T|1^(?L;+l}zLVE:+=XWS*|1#&>)Li*;hkks_[`GQC^BM=fsb6|zd6Qo%ggm>' );
define( 'LOGGED_IN_KEY',    '#rE+6M5&! Ve{`RY?+}a.A=/IBwko.3V?Ugw$;XIMH7=,ud6inN8qJ_M]/qNf0mO' );
define( 'NONCE_KEY',        'SoQ^4u#kZUSBu=WL7@z]V*_R6mp3uQ_pCPndD*BkRwcz7@Loq,Kgv.5-o|E^@I c' );
define( 'AUTH_SALT',        '%H8[yQAGa|#aHe48XB!vF%^&^6ymFzYeVdm3xVCO0W]VW+]F5WODY`A&>%~:Ow+~' );
define( 'SECURE_AUTH_SALT', '#Lk1LC5Q&I1H:<H,IYR2E6)Deob7^^T}4)$0=n.VMf+w?dT0DB$oK(6W[aP`7`K.' );
define( 'LOGGED_IN_SALT',   'ul(YIy=Qzddbya,P}9O+xs o9]qJ8iFo oebs9!(U2e7]5c__5/@*:HaI7r?YdS?' );
define( 'NONCE_SALT',       '?aV<o* :x3A9DA8sX18h|f3:@tPl%Z7NAt*Wl`op]gp)ffg6E*Y{(OX,{X.pz8#Y' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
