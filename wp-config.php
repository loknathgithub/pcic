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
define( 'DB_NAME', 'pcic' );

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
define( 'AUTH_KEY',         'V[8=]X&cDYZhG>#y56?1iGVj EO:L<(6-At!,n%5HTDr`Fdc8fZy][BB>Xw8ae93' );
define( 'SECURE_AUTH_KEY',  'zrp78c,q}^E}v77ule$,r ;opMA?8 1LNKzEIp}0LM~AAi,9<;8@Pc%;v:Bssy-i' );
define( 'LOGGED_IN_KEY',    'I<.kLbss v+h8:qSCp`D`)5qrF91dDs.q&0($=nOg/DC>jKZkjD6-@IF0@e7wgp>' );
define( 'NONCE_KEY',        '`(E2~eFO^YIw`z[?=ET?q$U:|o:zQJK>h)eH&[[,%/V(aKklxH_?3Qr5]>i86v_!' );
define( 'AUTH_SALT',        '+xo7v>L%N4W6|.Dk]nzcsR.#OJIkG+0sQ=UNq!e?iu{?,,S%6&xemF!+TCc?L!!/' );
define( 'SECURE_AUTH_SALT', '=W%m*ym[!{.g54?qX}>[H IO?SCv~3fT*HE(,K%)$Ow{^d2gv{8iynMO,,lj-!Vu' );
define( 'LOGGED_IN_SALT',   'f+*&g+YTi*pT]|aCV_[k2+mvE{?Q^o0hEsa4,VC_?@L>;Rury<P^wOVve]=Tt+{C' );
define( 'NONCE_SALT',       ';3+ w8SxP$Py$Rw`Oq6+-/UM,lvt47eJMq/O_SWC-G!uiXV.LF5aCTAf^u}M8%BI' );

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
