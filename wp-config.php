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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KmDFOlACzrYD0+YhhZJHTmG6Ja/fEWxE85pU6EzspbbZcTN6lTi7v3+7bX4weNELMXthy6ucvtREWST9Eci2iw==');
define('SECURE_AUTH_KEY',  'DzBQNoT7b+JcSKw4f6Cs/0CDK4O45qLeRNVZfQBui7HWUX+62JRbHkSdqInITUqOLLCh32alTJ8o5VONKK//2g==');
define('LOGGED_IN_KEY',    'jVn6F4gZ2yTo6h9cCi28T4PgrVXJdEZ1oBVaCBeqlovUE9cXDvg+9P84/gppvVS68rkFkIhSm9MUBjDCsTfisw==');
define('NONCE_KEY',        '9xz3xrvcJYYBhEqlvZNx66ETpkF3f+roc+0WOxSnS4IAOIv49xH5ouYxmAeUGyOMbKiPK+iMQFLsEXBLWSmT8g==');
define('AUTH_SALT',        'g38RD/nsW8cIGJtvTREhYVqZ/b84FGHvlWU60EwV07jTXhCskjrvRzdOsyqz3YDQdcTYRoZvYBGwlOcWlGenJg==');
define('SECURE_AUTH_SALT', 'Vw5gahDVCuU2Gvl6kVxR4S1Qhou7P8NoRlsNto20Ev/DQeY1yXbYNvDIYjdaeooS++S2YexObAXTsGbuKqUGYA==');
define('LOGGED_IN_SALT',   'vjHJM8BjMH5v5w5xhZxMV5k9YyVTm1zbPNbA4RQmpi0bSIZcYZ4Hf7dmBOBXViP9jvtVsWl/A9n/2StjYGBiDg==');
define('NONCE_SALT',       'EY6n7TCF1JmJo2gc0PY2sPw5bXt7t2xZNswWHbAhlrAvgJFuxBf9vQoOlrS20fWfSwPn2CD1N1l0j7pUjldYsA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
