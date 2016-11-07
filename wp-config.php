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
define('DB_NAME', 'ms_earth');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'itd@123');

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
define('AUTH_KEY',         '}vhtHm{Y)*hhE~?JqLXhSropajT /P3]n8F81U@_>P_Z^5#iRkeF]MQAvcJsDTv6');
define('SECURE_AUTH_KEY',  'HVQ8yvPD&u @%?tH:#+Rs3&F.7E<{[T*/H2J!;G*#G?#_SPYK)fH>c%NwEI|3oIT');
define('LOGGED_IN_KEY',    '*xG2Q-2NwFUM*w/Rkq;K:*aed)+%<qNg?twVE]~H<:HxjoJ/lfn<;Qho2q!km}LL');
define('NONCE_KEY',        '1A`C)/52f1jS?]~_YJ<{;cT7mnuXkBKZtBl03fd,#lRnJ3=94ICA>[1POl=.vD?$');
define('AUTH_SALT',        '!]5[P/jOie@C:Uj#N!s$n%A1i:?+{1[TDgb9WhGJ~Yfj{q/ll~BQzW|RoLkzs)nF');
define('SECURE_AUTH_SALT', 's7uibPpFIkH/:HQ0T,>Dv 8pEDDI<L Dzg@T;u-<3h4|Fp4z5=__h$N__bEPsCto');
define('LOGGED_IN_SALT',   '_4@My:md(q,)vBU6w~;Hvuj=[ 0g).1gzzQRyjbe@e!FKjy7*&S)R%/}ij^GbQ~K');
define('NONCE_SALT',       '-EjEmcjPVOm8sh;#:|_B=9,s@9j<&Tm1yL<g,Nt?{(e9 5sG?Ffc>BR~m4=koj}9');

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
