<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db134368_pktm');
/** MySQL database username */
define('DB_USER', '1clk_wp_KlTbFA1');
/** MySQL database password */
define('DB_PASSWORD', 'Bv6kMzDU');
/** MySQL hostname */
define('DB_HOST', $_ENV{DATABASE_SERVER});
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GPPGsDUa GXgraEoB xyug6v6N BqIYwVBD hcejcpnf');
define('SECURE_AUTH_KEY',  'alWjB7Gh 5auz8YTY JvawtD3d Z1lJEDwH TjmWpI4h');
define('LOGGED_IN_KEY',    'ythIkBjH uQ6U2lTR lkVcsvZQ urwaDKfS PbjtwNaJ');
define('NONCE_KEY',        'lxVBITF3 ThlnpMuk y4ZBkPTF IxYJUfcr vbDGcoGd');
define('AUTH_SALT',        'cs1G2wt1 SmMEmsUe KigklOnp TuJeaND3 jnQPSb8b');
define('SECURE_AUTH_SALT', 'jonBqONa tEwUaSRI mr5SPOE2 dzavwOhB VwSneUUg');
define('LOGGED_IN_SALT',   'ck58DSzo r7Qu487b nt2xcfLf 4CrbsJ5Y GLILvK6a');
define('NONCE_SALT',       'eTegxnp7 DsBPYnT5 vvMpKjno k6JJsNWD UjCuNDnE');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
