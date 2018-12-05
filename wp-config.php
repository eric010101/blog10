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
define('DB_NAME', 'esbcwp_blog10');

/** MySQL database username */
define('DB_USER', 'esbcwp_blog10_admin');

/** MySQL database password */
define('DB_PASSWORD', 'esbcwp_blog10_happy');

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
define('AUTH_KEY',         'r9nnGwcuyAIk4uy62dQByH8i3dEWnFYacyPz09PWPSSQhnzzt9Ea41IdgdeM130N');
define('SECURE_AUTH_KEY',  'Y4oGZMzaopjEp8zxomj9TzRzGz8fuXSBhZcamv5cZS0D2dJtkOwtXGc2WQ4TYWON');
define('LOGGED_IN_KEY',    '9eAjPh7DRCmJfpz64j6zYwfVC4doT7T4R19wq9okA8IMPsP3XJ3UrQrAFrcgN5v3');
define('NONCE_KEY',        'o3gPSAxbvLvZbmG5qYURnVoH3ShIA8V0yK8Pg310xCe23UTeDl3jYUnlsfgk0THv');
define('AUTH_SALT',        'BM4yo1UZIxTOHdjAtZTZSYDcOAcdBno3cPTpRRIR3uZJLZABht2e6fIK9mM1O0AK');
define('SECURE_AUTH_SALT', '8OO5eohiswQND6j3kuBftYqtqdPmnAGlf823Jk0lg5V1MSdNkUUkXAbvBcNVptNp');
define('LOGGED_IN_SALT',   '4WnV9Av2V071U0IR16GH7zR1bKsaXMgTAWsza3uEqRuQ0tGiaJlXi5b5XtE1Jl0B');
define('NONCE_SALT',       'krhi3mIFv7nRstrw2s6ADVLsO3pSkFs3xoXAA8V6EaFFLk2CrVPF2aWwMHCyA0aS');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
