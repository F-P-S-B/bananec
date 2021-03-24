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
define('DB_NAME', 'bananef317');

/** MySQL database username */
define('DB_USER', 'bananef317');

/** MySQL database password */
define('DB_PASSWORD', 'bananecK71bo194');

/** MySQL hostname */
define('DB_HOST', 'bananef317.mysql.db:3306');

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
define('AUTH_KEY',         'fWrxYZOLN/GjyLzklBXHAZ+nro0TWSRPl5KH2f5o2xtxZVTz90HWVnOGpZzb');
define('SECURE_AUTH_KEY',  'c+ViNZcRNACs3pgb6N/6lo2ps7Cq6fowFCA/EMwARL9Q2UbknV8VwXbfzhyQ');
define('LOGGED_IN_KEY',    'clmagmtPPM7mVTzyn5VQF+LeSemo043B2z3q9TBwCo8Uhmz+Tbp1t3b2O2fe');
define('NONCE_KEY',        'OOKJHACUNfwK4EzHJJItLuuWvedUmbadZvaKgbcWzacQBadxDYH5VcBq9lgp');
define('AUTH_SALT',        '1ItRPQq4txyM/WWzK/Sx3aoP1TE4XLeznIx82LtFGDpuN6wSiygUEwCwufyf');
define('SECURE_AUTH_SALT', 'sv2B2KXgwLUUVZrEbtFai8cwhsMQ+aWxMxIrC2Zk6Q8S8ib0Zml6NlCL31a5');
define('LOGGED_IN_SALT',   'U+iRBR+dBLFNn3WoGCtJ3yVc747V5T0y3SWTwso2lWd5nZX4sC1CYSXNw+ai');
define('NONCE_SALT',       '3hkQA5cNzcle+RsB/RZI61KXtimC5q6YGJ0K0QL7MHcYdAztdDFan8i74ksL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod485_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');