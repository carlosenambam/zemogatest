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
define('DB_NAME', 'zemoga');

/** MySQL database username */
define('DB_USER', 'phpmyadmin');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{eAweZ32@4VGn4a<XD(WfjuyF5#Q+&71%Zo_3=HBSjs,I5(;3~V64aIJ9)RM~f6m');
define('SECURE_AUTH_KEY',  'jREL>.nyod>CR]t&]=Jczm=%HW`nwc,y!-F&nGQ-*rRniOrjMn8hFmY6o)R3=J#l');
define('LOGGED_IN_KEY',    'OKjJJjyf3N{7W~k@@llU0<QbBBl1}OQ5I {A*7v#aBBV$u:A7l*>dJ7 P1f25Mt=');
define('NONCE_KEY',        ']0CR~,s!3 *$vEa>/[kxuKSJF`W|?=JcGu:c%^h,[>d!t563HgInM&*|WRX_Ox_e');
define('AUTH_SALT',        'qJj9fpCc)M1{ *47! }/m4j^+4[C!Prs3pnJownjPX2%/TxN6YZXL)km/6*Hfg4F');
define('SECURE_AUTH_SALT', 'E`@_V){Qt{oYDxsj?i)zCb2Ds9c3`YCs|s^ublrW|ON::NEPmq%S9P$V8Iv+b10x');
define('LOGGED_IN_SALT',   '/;Zl?pC.wx?#;&CX;KR!_!mF9/$wAKI.,XM<V*O6(bp1XS40E#|qWY`!Vm .!uV1');
define('NONCE_SALT',       '{;g@0+EZp4@tNcPeK&-T9Ad?9lw{Do`3DYBfNaM-:Q8}61.w6:W7.~&CL-2|jl9_');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
