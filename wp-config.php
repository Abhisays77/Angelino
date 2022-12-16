<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hmrain_wp522' );

/** Database username */
define( 'DB_USER', 'hmrain_wp522' );

/** Database password */
define( 'DB_PASSWORD', 'npT20.5.lS' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h8xrpaxjx94kzdjwlwgw7jcnuwgssurkgjduwll3lcwxltypmuosdlzu7fhdi2nc' );
define( 'SECURE_AUTH_KEY',  'd1zhlhbojkqctk93ro7ievov6br1qdqf95ubb2yq3rdcqidebibhwhwnwl7eefnf' );
define( 'LOGGED_IN_KEY',    'rktxdb6nwiitgkrmyo3ncxed1hvdtbrwxvtvtpcxusca5pbozurx49pjucm2bbjd' );
define( 'NONCE_KEY',        'uiecodw35mfahxp6txzgq6cescwgagpynzxvcfvwizo2l70reual1khqpgytv4lt' );
define( 'AUTH_SALT',        'jucfjtwb2cr7xpnuglyah8ilguqaiobdemrygik3wzljaxfwo57pnq9dobhm6wm2' );
define( 'SECURE_AUTH_SALT', 'b3txdyh7vyfimv51rjc0enqnsmqr2pylmolmluzsndck2din7ezzu9vg3oenyydu' );
define( 'LOGGED_IN_SALT',   'j57hew0opnmues2txuzxaigth7qfweq6jkjy0jofa7yxryb3ygzlntdwv5u0ts3t' );
define( 'NONCE_SALT',       'n04xxzddxu1cpmhla3h726idcslal9euzsgfv8mnqcvboimxk5rmvmq2vwn7sgt9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpy7_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
