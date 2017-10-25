<?php

$config = parse_ini_file('wp-config.env');

/*
 * The base configuration for WordPress.
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
 */

// ** MySQL settings - You can get this info from your web host ** //
/* The name of the database for WordPress */
define('DB_NAME', $config['DB_NAME']);

/* MySQL database username */
define('DB_USER', $config['DB_USER']);

/* MySQL database password */
define('DB_PASSWORD', $config['DB_PASSWORD']);

/* MySQL hostname */
define('DB_HOST', $config['DB_HOST']);

/* Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/* The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY', $config['AUTH_KEY']);
define('SECURE_AUTH_KEY', $config['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY', $config['LOGGED_IN_KEY']);
define('NONCE_KEY', $config['NONCE_KEY']);
define('AUTH_SALT', $config['AUTH_SALT']);
define('SECURE_AUTH_SALT', $config['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT', $config['LOGGED_IN_SALT']);
define('NONCE_SALT', $config['NONCE_SALT']);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/*
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
define('WP_DEBUG', $config['WP_DEBUG'] || false);
define('WP_DEBUG_LOG', $config['WP_DEBUG_LOG'] || false);
define('WP_DEBUG_DISPLAY', $config['WP_DEBUG_DISPLAY'] || false);

define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', $config['DOMAIN_CURRENT_SITE']);
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';