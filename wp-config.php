<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cl30-a-wordp-fvq');

/** MySQL database username */
define('DB_USER', 'cl30-a-wordp-fvq');

/** MySQL database password */
define('DB_PASSWORD', '4^3-mN3c6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'aqu0rNaXhbDMvzBsuD75gPMa8U3DO93)xP0iHsCyyeP)ci^H5_=hyl4r+ZQ8N3Rw');
define('SECURE_AUTH_KEY',  'ClggxelB#B70_qNxDT4BhJLizUNoNUX_evipLBrEEWgKp)(cd+wAoN=kX7BZDN(8');
define('LOGGED_IN_KEY',    'YJESkl7KvKUHEwgxnWnpMlwPTe58tBtxhQ+b3v8^8XA/HoB_s!GlGAGNR5gKCmWh');
define('NONCE_KEY',        'q3QfZ6hUBtFS+g7gxjkSCXpAECS(=6mtfaJAXRUYbFe#_X3lawVyBzqs)AsPoMqh');
define('AUTH_SALT',        'Ou(93hNQ7dGLvIF3Pyek(NKyx1W/1XEfBx1a4w=V)/(7o(C/Of^SNGDlZoYCfDpW');
define('SECURE_AUTH_SALT', '-gss7(UdbvmeTQpYyLiG=BOujJEAtLeyr2!mBW7e0)5d4e7wqRVV1ZbQ#TDx=w1m');
define('LOGGED_IN_SALT',   '#F=gH^CCCE_fvXnOUh7JR_AHzqX+BT)7(CSsIrFXZphXWdRY6sGuwHl9t01W#0-n');
define('NONCE_SALT',       '+lZO=Qs!#5g+DFA0zB_#gHonl5DPrJ8tp#64coPfDJsUC!gbNoheWTtbxL1/YIV0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

