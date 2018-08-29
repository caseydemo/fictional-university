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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'pWug9fVLtKYn15g/0BCXUWaUUvKSN3xnW6zySR16jDBm32iFFkSDynfSoFNMYCBRIGek4Bw7APaghdP4Xm3jVQ==');
define('SECURE_AUTH_KEY',  'dWr/mej2+EZZDVvLn37oLYLL+ayouQDtsJ6mlkxuecA+atDsj0ktkR/rrDehIRla5cWeRW6W0hgvXGsqOD3qLQ==');
define('LOGGED_IN_KEY',    'cTMp9IDWhO9lknFa72zVsAZo/MCKiwnmOCn2RhKkIG2DZVoSQviNZyWuvENvXjFBKZd+aNK2DzRu0LAaznm3yw==');
define('NONCE_KEY',        'oIr20ZWEX+vE6YWY3fn6+CT79hlRvkAGp3n/MaSVyVTs3waVB+ESJ20y5gazkGHxJNwzZHmQUztvJvxtXxRn2Q==');
define('AUTH_SALT',        '7v1krlRBGrOS3o9WtoOcOUvaHDasne+2nLMsG0Ri2vve/BvJ11GAgdoITEU3PVJKlwoGWfLmPRa/QizlQDop6w==');
define('SECURE_AUTH_SALT', '5KsR6FAgozeemBRcHbgXe+iNUlGlBWzE4x+kbgSKuh7Dww2KSe47jbMmfj05BzOQcB4K/XNsO9Z9l2c08jTd+g==');
define('LOGGED_IN_SALT',   'JGqob5A1CkCO+E27MHZeHw7oddoaAfybOWD42Y++pC/kIoZlEaPjnU34aCxhNOdB2Tczh02NmOoi4hsYwanCFw==');
define('NONCE_SALT',       'oON/niqYRNRPkz6RcL6/sRz/Q50a9HqfsZg1oQovK+ogwvv4brl5+1iNRDnSchpnHmo60UIPmavwnsK7hsZ3/w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
