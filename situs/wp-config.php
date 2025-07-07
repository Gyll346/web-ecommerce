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
define( 'DB_NAME', 'db_web' );

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
define( 'AUTH_KEY',         '6bXXb-/t*DVn|kCb%EOP^.9^,u{(YSV@!bau4t{Oi4[Lu>o0vFE|e#rY` Vn}@Id' );
define( 'SECURE_AUTH_KEY',  '`irN~zWOEs hvS%S7J=tBTE4mdF[bNg-c4:*e6.V!NkAM4D4PUA19$187Ir@~?sr' );
define( 'LOGGED_IN_KEY',    ':_mplVeBVuj&=Ox,C|K!ez swl4j,{ib :ai>0#n<Ib87MUVo(]/ui7JypB v$B?' );
define( 'NONCE_KEY',        '%/J)Ix}MX=Mn}o{alz&N!m .H;q5M/5]Wk!Mv):q.g}ro[2+ZJ-{qC8a<m69&JC]' );
define( 'AUTH_SALT',        'S#dXON5U,J]=*/BiF#@3{lm#(o10]&Rt{|kRts&&D6cyp}@(WtcB1w<AX3@72HI.' );
define( 'SECURE_AUTH_SALT', 'qPjaN|4MyN wuFD9^=7X-I2tF1.`(;W-7XrWa2 :f#rS6zRJ$;xjWj,VXqIJ9-YA' );
define( 'LOGGED_IN_SALT',   'bH=CY]ZUW3-RhK~&8#EOXY%jIBO^YBim.r?ABT+tu.X<]K{p3ShF86o@k{d:h8N)' );
define( 'NONCE_SALT',       'Xbsf$p6g>zlXE{N9Mjszm%67=IB#sGJ-^{u mHp(p|H(,To[jW2x0O )p4sMRO,0' );

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
