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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MAR' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{ghz&mf2p&mD{aH/03bTtug*T+Z;,NV_5*I<T3a)K/mj$cg;3r$Zr{ZM8=7LFOUW' );
define( 'SECURE_AUTH_KEY',  ':,oibD+V<?T!+Y`mf2bvSg@Q!o#GM=bvv<=Qk;CUrzWRZ](3|[YM3Fj!vrZVHVre' );
define( 'LOGGED_IN_KEY',    'VOqLvma.<:bC8NtFTaV{(Gth~<|(ASjjUl~_xe~*Dyzd)X1?K*PF) G2t]FmNqt=' );
define( 'NONCE_KEY',        ';W:WXJcx*rH(RQ6fnfxf2I0mts] I&-0^VZD*;)F4x+0i!=He{Z}MbP_6w;SWe~/' );
define( 'AUTH_SALT',        '{|n!Z{J.`{avy#uuY+)2:LL}}U{BK1OI,[*;#32q0oDLH=dJ&)-9dT1AL:NhX~Mi' );
define( 'SECURE_AUTH_SALT', ']&[60oZVVp^l$[$r?2fU-^fzJx!D:8Mr6SA[QS={v6S6nm]ZqSUR6)N`m5vWM[0#' );
define( 'LOGGED_IN_SALT',   'KwZnU%-/$EmH<0KxsP~b#sx%ZkSFbjETYZRHf^f>0-5JkMib+c9Kb@23xZj_L%ms' );
define( 'NONCE_SALT',       'D.Napzl^#<mK/*,kX-`h?tdm{8y&6V:ScxaZZGOish1JAFbu2/o}#QBymIhfRX`}' );

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
