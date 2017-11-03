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
define('DB_NAME', 'Bearblog');

/** MySQL database username */
define('DB_USER', 'jfairbanks');

/** MySQL database password */
define('DB_PASSWORD', 'Wde472gh');

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
define('AUTH_KEY',         '<pFTqt9(F[V%_K9a`][1bT^LyxeQZlCyz!YyA)e6M3X_/CZ`>fW-q6tbkxpF#)4L');
define('SECURE_AUTH_KEY',  'q6bKJ]Sx*9}fB<y U,sy^`ODbhB.(W^Z?No^.&B>Q(YL<KJWqp_n0c-AyB*FM;h1');
define('LOGGED_IN_KEY',    'fH#pr|fWcu5,yj3FRgu$[z%,7ISM(,9m+0iEI2T>pGpowtowm}eb,J?SMB}pqP)u');
define('NONCE_KEY',        'V+G:}8OQt@3PV#2=t&qi~9;o6y)Q~n|6,Qd^S!1?$cI6si Cr?S4Ir8~W+uZ6sI/');
define('AUTH_SALT',        '_B!0njCa}+:/3psro]bs*Hx6/]mT5@|z(j;es0=6r}ZI/ ~/Z=]!cox+p<fC#l)/');
define('SECURE_AUTH_SALT', '1A|,6/~xA)a0O3%+aN0@*<qMP-C!Q`&AOgIt[p{_hd2f?Zj]5fVo+1%X$,_amfve');
define('LOGGED_IN_SALT',   'RZ ]vZEWX,DL5zg4oRnJx-, QGhZe7xB;Il]p0t8yTHe^tT>*ou1^(u/qGunfz]s');
define('NONCE_SALT',       'q_5=f#A5r]%)Zs1^2M>%FY2i=.k]#}njvc<ezzNLSh>2*SU+QF@rv#?Sa_?t_)+L');

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
