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
define('DB_NAME', 'medicalcollege');

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
define('AUTH_KEY',         'LXl;pNsb&AZ)zh<Y?+Yk#_q=:gH!tOoMW$oVby_u&/TZ<j5r86TOk*&([&aAmI.H');
define('SECURE_AUTH_KEY',  '72_x>:<hTgb|:>KT#%>?@a+(x_)}-I7*Zy$k&(LUT5mxxz[cw Clq>*kHH`Z79[W');
define('LOGGED_IN_KEY',    ')+fLR>Y:(*]Q>j{/sh<D_/u5pMI1uG5w<A1#>mRDQxT1:-+]cSzs^Z-Mhta/X_og');
define('NONCE_KEY',        'E+YC]cu_U]l/iX+m2S~f/<`v#DZEqEr:5P&kO.9H^Y4h-(gO^4XzGk>]7(j^rI|!');
define('AUTH_SALT',        '{H0onJY6BtF0z3{0={o!1&_fkb|y]N>f~y)$&%|/[D4+..Ar#{lqF%/r12-s4*B,');
define('SECURE_AUTH_SALT', 'Z[b^XqdqI2F*]*`N(noyw%sd):u^CQIkkAU7`m^$L0roUT:C19;N(U.3[aSej)]_');
define('LOGGED_IN_SALT',   'F?8&5; ]b3ckM;Av$_b)WQ-J[FcMnm#r6vhK@A~P#fJ!i|.<$WXjfeFJm{P4gGhO');
define('NONCE_SALT',       '2h9W8t5.QP3,bY_WQpJea!]p (x#RLw 5d]!!%2(,^G%y0ouqojcqR2T12$Ic:Aj');

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
