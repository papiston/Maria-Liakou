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
define('DB_NAME', 'wp804');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'kzsjlqb9vrxcqo7dbfuupghycbadc5r1fkbw9qiuywyowib8ldofsrmcqzsj8tod');
define('SECURE_AUTH_KEY',  'gztc4lyinqpbz0z8io0fbgo5iges1bjirfehduy3ovyqiowti4xerfdgkyiffhsw');
define('LOGGED_IN_KEY',    '60gtfaklmg2eln8gwv0fgxhsfb83mgeygfnayrzwfmxclsohbnrax39bslp7d3yy');
define('NONCE_KEY',        '6nni6cvfn5d5mdhxooutdwsflubie8m5w0cdnhcd1ut34rrry5yyhnnnsvofyusg');
define('AUTH_SALT',        'atkocg8ccpyqnktop2mg74kkthydsj5nxocmeqnv1oxreqrc9bimnxx5dfhvh87c');
define('SECURE_AUTH_SALT', 'cgplhdzjzulgbwcgx2ntydxm1jrhpk0eeldgiygokvzamxotmdcsvfknnfdtere2');
define('LOGGED_IN_SALT',   'ls7smnjqfwtqaneg04icomphzzvw0d3roplm6h6cnmfi2v4gawy0ldgttsucy2lb');
define('NONCE_SALT',       'cfcxxcfagkrqe1slafbr6q6qhuip2itjfbzvi4iqyzqnm364qzqawv6xnl9dbggh');

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
