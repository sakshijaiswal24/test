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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         '1]p}bOwR;*bs9{{bZE3W^)Bqjp1t(Je>3NcDlI9t@VOhMY(RwoGGK)5-J!Y<9kMq' );
define( 'SECURE_AUTH_KEY',  'ARD_(k?<j[$5}|l(iB^&Aolf}Rm$#{s&A*ER5[4xopDu&Mk=,~]O)s0vL?n%)k-*' );
define( 'LOGGED_IN_KEY',    '2Rly(,uP<>W#YOrYp<I][%Q&_ibkf$)`AomLhzE.7aw^Q4@haHcP?y*$]ck85FSf' );
define( 'NONCE_KEY',        'nY1w= TuJ2U-J93lxf8IcK{HkP8Tk[Ta$mV:fiV^9gdCHr.77XWO[lVT{e^7Og>R' );
define( 'AUTH_SALT',        '1[+>u6`jM*M um!a]{UbM9n0XiPEEUrKT_Gh!@xSJ*pjTcTh}WDZ:wC<O#hf=F)Q' );
define( 'SECURE_AUTH_SALT', 'Z_]&ZFyg>cOhdqY 3JmzDxP=0`Y2J[dWq$$XCNM++v5xCy5hP,`KeC>M#<#Osh0w' );
define( 'LOGGED_IN_SALT',   '^!3zRPLF0O8}Jh-yZcQ dw[V,~fJI,_(:1MsmJ Y_+b@e2:=2c?u.%$/Hrl4D@m0' );
define( 'NONCE_SALT',       '/kkKYO 8mF.TBzT si&F]n)]X5&( h%Yp!|LX~n s#6Lf~*/6~wQSS08B7g;&M~x' );

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
