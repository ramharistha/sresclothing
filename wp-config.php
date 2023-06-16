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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word' );

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
define( 'AUTH_KEY',         '=tzK-%WlMfW[a|_8+QJLeYY(J,GsGQEBbjbpjVOFvF<]FTmLJ&<Ydn(d7xzN,&K.' );
define( 'SECURE_AUTH_KEY',  ')8wny, B7w~4A;)-e]+QHP*n);d_={)x20(xt9>g V,#3OdRbYHOil.%[N=zM4$D' );
define( 'LOGGED_IN_KEY',    'A!c=2kedS-z,7q@l34w_(`StiMOuG~m`0lM-q^@XuqX `SUadB2(ENOS`g^FNuc^' );
define( 'NONCE_KEY',        '}us ;EYWA=g`~R&G,ci:cm7~ZUD+=UvSK=m_ScVgyG?SjyO]m7y1cb>+3?:UV5lL' );
define( 'AUTH_SALT',        '!)s>M|dI.||P!!Pj0v|*M@d|ogb9$yYY*Jv3cvEkpqIP,YM9j&+wTeLzQN0!7;~r' );
define( 'SECURE_AUTH_SALT', 'ExY.%Mk%G}m`@.1p3m%J#Y3M/<C8TQT[fdzw^)Cx6_>0+rF]#dMW`fm9,PRUca`/' );
define( 'LOGGED_IN_SALT',   '-+{s 9)~BBJc$p1/d1+eZlvqdulo F1zV;6pa7k<JeXpT=^c![ANtdZ/jE0v&i!E' );
define( 'NONCE_SALT',       '+HqU50:X@bni]82I9j]dshq|kd^{Dd8s>2NZ);/S-T*H>AAW7%2>.|EdajRp:M~*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
