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
define('DB_NAME', 'MedicalCollege');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0qH/LEW8%#%G(b?$PaApZA;[$HXYB3[<n!_uyshY/i$]W?Lvy}45zY% $ELk`//(');
define('SECURE_AUTH_KEY',  ']~$A;ou72Ztb{4;^Yo_e2o_(x`}Vh{O^ 4}w(-bLSLG^X2$h^RmL}G=YW2,KQlB[');
define('LOGGED_IN_KEY',    '.S{Gry3HPt`_{rZ2t5CJ5d}rA oD]Bo}~&)gfCn9!V{2]KMPM(a8}KCzT! d1|=D');
define('NONCE_KEY',        '(l&P/KW:I&: %w`(6xxcw!LCJ#CbE|9S1gDOk;c%>5yHE7&Zs!Z).qT<<l{HEYJ;');
define('AUTH_SALT',        '8k!M1zhO.;k5>X$OY*b/MMzGx2),u=QFn;#{w4*qpRQ|$C!0*<$qBWDpoBz2a=rC');
define('SECURE_AUTH_SALT', 'E<5SMah>}y}ih.,*j7]c.:}ziqD9U#.+1!Tur,rJPei{}MukL:IMWip^2yxRY2._');
define('LOGGED_IN_SALT',   'X?gb|zWkPsw/%qM7BAd|)o??5v@95b@*Tq+__$X9$:of3m7s;FRJvEU_)z%XWMW~');
define('NONCE_SALT',       '^fQAicCa~Yx(f5xXJJiWM#WkMX4}Pk.Q`-8od?%~T8mBwn~ouxghrllW@=e@y;d`');

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
