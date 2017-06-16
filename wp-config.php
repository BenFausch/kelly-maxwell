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
// define('DB_NAME', 'benfausch_kmwp');

/** MySQL database username */
// define('DB_USER', 'benfausch_kmwp');

/** MySQL database password */
// define('DB_PASSWORD', 'j74mKQor');

/** MySQL hostname */
// define('DB_HOST', 'localhost');
require_once('.private-environment-settings.php');
define('DB_NAME',     ServerEnvironmentSettings::dbName);
define('DB_USER',     ServerEnvironmentSettings::dbUsername);
define('DB_PASSWORD', ServerEnvironmentSettings::dbPassword);
define('DB_HOST',     ServerEnvironmentSettings::dbHost);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '128M');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'z1HwMzhiZdzWWFF9wpu3jwv7SuPVsNJGSDpjFwkEg61ciULWxhLKdd1b7wPP7MmD');
define('SECURE_AUTH_KEY', 'BsjUPd7pLQuwzmEe5VjuH68hoTNZXmUU5bzTg8EMcwdaQuSpggZH3180MLSIR8XF');
define('LOGGED_IN_KEY', 'n4Z4DUfoWHbbyUz5y53uLZeRJpLG0oXIS9RNTyg0h5OlKIxpc4xFs8LhmV77Sh0W');
define('NONCE_KEY', 'S4JQsWs7OzCYJToYnS0zx4bHSpYcHZRad7oDtJcx2zZiyFQqni6VRCEZl9JjAQim');
define('AUTH_SALT', 'm59WjqU2D5Q9JboSNO1S6Bmili17IgSSUFb5VvklFJyAljlQPz3nmL7bfPEEG8ae');
define('SECURE_AUTH_SALT', 'TsQjgTVdC8Je2Lwu7u2MuiICZJigxxL9hK1pZ3l5FYfWG5taABaKYra5BWte7F8o');
define('LOGGED_IN_SALT', 'xgRNZyENBQlAPl2ZcX94P8skynIRhyfAbZFJH135V9ky3CYysUkdN0wcUE0YPJrf');
define('NONCE_SALT', 'Awg6mDq0EzanJyAwGb4opq3AcALVgHpculgmKtyvjPLVYAxn0s7Xe5Ldo0sAcvl0');

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

set_time_limit(60);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
