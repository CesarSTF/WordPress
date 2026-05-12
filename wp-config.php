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
define( 'DB_NAME', getenv( 'DB_NAME' ) ?: 'wp_db' );

/** Database username */
define( 'DB_USER', getenv( 'DB_USER' ) ?: 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', getenv( 'DB_PASSWORD' ) ?: 'wp_pass' );

/** Database hostname */
define( 'DB_HOST', getenv( 'DB_HOST' ) ?: 'db' );

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
define( 'AUTH_KEY',         'HAH1TQ#DB>WP+ft29=(I*]yaSG@J-` _e27^j,]sE#L5)?f`&HXy+o&t%I/&K0GG' );
define( 'SECURE_AUTH_KEY',  'mJ:(@e~U>- !_||Y5QN.O.N.?T3=uce/EIq<1^(PkI|HdSFHcYt-SJ~jE3S`[fG ' );
define( 'LOGGED_IN_KEY',    'PI_uQA9(r1f8J:T?D+#Q%?|b.SB$SJ&w:Pgz#v_5WJJmOrn6Te~|ShJ|=Fq0+E?_' );
define( 'NONCE_KEY',        '9e8-m)|D4odG0y^T:9[CqOj}-,XI*ln%o20(^W?F=?JY65_bPt@oBz%^X|XRfi=<' );
define( 'AUTH_SALT',        '`.ma*IG]s~e2utgF+x*h)aU CibBxE<I&G=5V`;#2ID.w~Ib_n`$K+P4I.!eO+(2' );
define( 'SECURE_AUTH_SALT', 'rc0dMY|5]e.8$ VeJ]iX7vQq:of90rFCXv32#15b7s}u%_FBN5`@u3J,<qj8gI~%' );
define( 'LOGGED_IN_SALT',   'Rr7IB}_b@E)ZbWJI:<uQh=FM9xD +4e$qSmY>LGgxU?k<#bNi%Y);}`7,e|%=~D;' );
define( 'NONCE_SALT',       '0eRrD/{.eD)V)n,/O@:B.*{Xgl6b&%vXl7:HL:TsKVtnNW0r::@FA_d*3X&;uUrS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
