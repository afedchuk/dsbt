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
define('DB_NAME', 'dsbt');

/** MySQL database username */
define('DB_USER', 'dsbt');

/** MySQL database password */
define('DB_PASSWORD', 'nyMnutWHCdUNAvrC');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5V|dKn$YD[xtOPLicWx;`[d:gV{,:bAJ1XD.{Sl+asuBU%@v1NWA}saf^||}7gK ');
define('SECURE_AUTH_KEY',  '>X8bDP:@05C[o+ZZ*~TSQk3Ko i6kX[8;!as(ERbA6+^gm~6[(}uK!,c{nvriOR$');
define('LOGGED_IN_KEY',    's6FkL]A_55b#C:xuBd{Odi~W]6A#=L,dcW#V=PYpl~d;yu-mS!/,0<#or3A)Q<zT');
define('NONCE_KEY',        '3o*&Fz_X4cxq}x=(VpG5zxZ>qwPKGGL(iQuKRu5+t&t[2v$;tV[lC{{tO%O^NRv3');
define('AUTH_SALT',        ']@~dxN#k.;5qc{;O3T.#Qg]^CtWt2G`HysFD)1_m!|l`(;X8Hv4*3.Y]c1A!E@h}');
define('SECURE_AUTH_SALT', '+6M${C(2i|4V5drwRt.O66B*[_FKKG[bY~8krq#`?IVfR7;7 +QC(dgI>jVXJs(D');
define('LOGGED_IN_SALT',   ';9*o6Njk6^)p]6]HaCuxdt|=ZaBm%1V*=6Niyy#(H7<1zFo|IOnxi<:pIo Fx}@E');
define('NONCE_SALT',       '6)8Kda06$d`an:ZbmW,K#!A+6XBH/=&;xrU7bR,<* Xrw,VAyEV@=|1a1y<D#3 5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dsbt_';

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

/*define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'develop.4trip.com.ua');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
