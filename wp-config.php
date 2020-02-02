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
define( 'DB_NAME', 'S0RYOquDpu' );

/** MySQL database username */
define( 'DB_USER', 'S0RYOquDpu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vnqOr7SM8d' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         't:c>3aVf_[uyR> HLN}yT|7c8H]og7>R>9R/6K*L0VIZ4%}#}[}9{R2bOA7[d6$V' );
define( 'SECURE_AUTH_KEY',  'rG@uMPv11RDQ)62(kU6:mPyq2H]}ATO}3;mK5^nMO3:EK^W[(Qs%f4oAD`[;//|d' );
define( 'LOGGED_IN_KEY',    '=319,<<.O6Qwn4mW_Rn-PlV>8$HM=OjgF8ft*_L=].BxKg)wUulsY4RNq=vF%{al' );
define( 'NONCE_KEY',        '2%},oe}FMz$vG_A^j1TFnWZyCkLC!)K5iV%X0q9>kWiF{JgRJ.TF,EaKl=O_^b%2' );
define( 'AUTH_SALT',        'g m3W+@T9TcD gES/ikJezr7{$!x@C#Se2mf :LR (,}g} YQ+A}w;R#DLvhry;A' );
define( 'SECURE_AUTH_SALT', 'Abp5(LqGgFi|[qhQ,W]8Orc]jbzf=G]NfdjjWE/KdR~VoMa}2 a;!+IFX*C+8 bt' );
define( 'LOGGED_IN_SALT',   'j%xF3Rxv`A9IZ`{,=_}AGusg;Sun+&Qr# MM}$;7.#_%+!<-*ZYELS R1ROpPx>B' );
define( 'NONCE_SALT',       '8cQ$#}mrI${e|k?D)-Rzb>aa|U}*JIXFi=+y~`k(N5o`%,]@bf!zi1Zny dLtTuo' );

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
