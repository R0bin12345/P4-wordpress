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
define( 'DB_NAME', 'project_wp' );

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
define( 'AUTH_KEY',         '`$hS-Tg!EHGnNx<6e[ d-4rgz RH$z.rY)CIvac3 5cXBCQZ)Ok`uG[Zvx)h!?BR' );
define( 'SECURE_AUTH_KEY',  'qjutYhTJ?me1kt;clg$jM5OJ/83NsV.er))|z!?5EdOMD.T.($=X@dk2!SpdFv*^' );
define( 'LOGGED_IN_KEY',    'eY!j_#N3BLA1480{E4v~5Ry^{YM6@R=Bt4:rU<mX#jW]DKdD`+;8{h@(Ccg51MhF' );
define( 'NONCE_KEY',        '+j,KPV-3o^,H!pV3P)=];{;xJD~)P%C5p:wCmt{|#@~T**@7,KAtK;Z>]4E`q1)_' );
define( 'AUTH_SALT',        '_CPCMuzGU^%[{fIYDUUyb5,BE~~N7J_;~l[puZZ`7d%te_rVy!|bt|=lKSyFzo>F' );
define( 'SECURE_AUTH_SALT', 'q6bZb8z*!XHHdj+|%Y!&)9&BZ5RGjxy@O7?Bx7:Z>a)]z|?$-zOtg?f1h9$Ilbzt' );
define( 'LOGGED_IN_SALT',   ':;Uw3n1f_wmXtr}04$n5x!Fn[qi5rUH[bgS*{2[AW~H$0%`$W21}v%`-C|@[>CB7' );
define( 'NONCE_SALT',       'yFD2?*vEdRO=S.heSP`!sX_A^}#XxRXlf0t4jSe]}V[FK02?1G!5(/uRm3myh)o#' );

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
