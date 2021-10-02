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
define('DB_NAME', 'amazonex_db');

/** MySQL database username */
define('DB_USER', 'amazonex_u');

/** MySQL database password */
define('DB_PASSWORD', 'amazonDK@987');

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
define('AUTH_KEY',         'vth1tskoaggsxvyedtdw40tf6vermryrbq3syrquwuqhvtlstwtk5pzyu2k5yhgo');
define('SECURE_AUTH_KEY',  'kpwiwzahixhjid1akpww0x4pi4tni9li1cmge5zg6zkxmu8ld0gqhoulwsminghc');
define('LOGGED_IN_KEY',    'njutg9zuzoozse7lzl5anscsys81yjgso67iffvjdajqyibbgozx2k4wkqdkpuqy');
define('NONCE_KEY',        'austv5iudzbhddrwnaprcondgqsuxxxmp3pqo7cdeeqrflh47brmjmf5tlh0tgqj');
define('AUTH_SALT',        'tsuzqb0polacejjkpn6ztckoegt7ywxnlo2f6zffg6knrxtvl6m49fbjkh67ayal');
define('SECURE_AUTH_SALT', '8eo2z2m95kjtnydjfsokilugwzanugsd3ygynahd2ipbmhygey39nk36j3ipvbzi');
define('LOGGED_IN_SALT',   'qlzkxniyr4zqxr0y9qjoihkkfiztsompicmainrbh9k2xhgxr1nveoar9ctfuuwu');
define('NONCE_SALT',       '5bcvhuxqjclnrkpykjsnejzqnnbza0pnxqvfvb5u3npiyeauodbjqzpms8o68g6l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '';

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
