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
define( 'DB_NAME', 'xlkamugl_w0931418595_wp687' );

/** MySQL database username */
define( 'DB_USER', 'xlkamugl_wp687' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XJ3[p9S]N9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'uxazhvlbkpnkjsc6trlgv4ufo62xpkgnrtmkeg8blibl4bzxtluvgnwcdxmsseiu' );
define( 'SECURE_AUTH_KEY',  'kbiuyajsovjp2xsrd0dcc6xjtv6u99tn5wsrpq9w5k2xzkbsgzr1nkruh0tpjdhh' );
define( 'LOGGED_IN_KEY',    '75kkmxxlmgdw0vwysw9mp1a3xvfgaatonl8b8qkonn0dw1wu2dhnyqsohhsacp1b' );
define( 'NONCE_KEY',        '7bxnkfifsygktbxs3mcucjbegbr11ks27tszyibgcvmaipmvuru4xqwoecwdrug7' );
define( 'AUTH_SALT',        'wakegyxgqe7ufctkq02m1nnnoiliagkbc2jrevbqns74scu5bjsn6rnicneepikj' );
define( 'SECURE_AUTH_SALT', 'kzl4ewolaf4rv3n1xivxlb46cexhyr6eooxtuml0d1cqqtd0uu57xctpq3n3be6e' );
define( 'LOGGED_IN_SALT',   'yclqfhzwbpbz5xfm1gjp5xsa0ipw6enuvzsr0ypgef4hqz8e3t5u3n3ew0jsso4u' );
define( 'NONCE_SALT',       'bptny98znpso5rv2az2p1p6vuqvb7i6qzkyukc9osvvrewx5dslpzzfgdgnaxg7e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgi_';

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
