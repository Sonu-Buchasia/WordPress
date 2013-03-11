<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'sonu');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'up0,K*}_m209M=~ob]8T7c*r*.8Mt9wH5L*`J0xW3m]|L0ojTOCK?(`|u-_Usz`V');
define('SECURE_AUTH_KEY',  'Kg$r0rd^Tak[]*U;s31%IqT7@acR73Ui+C4EU,V+nrk>F$uIeE%WWOE_5~Orlhx[');
define('LOGGED_IN_KEY',    '7<l$BKn`8T,uzc@?))kdnf-Z=&;Q+86G=lK =%Amw&Vx}uP^9)CW6v<:)-dEv6Cf');
define('NONCE_KEY',        'bIgf7$R.;p`4R_T`GP,Is#pQ`2qT;5rRv{w[-0x;>#F<wIEV3aT+||?da_Ea@pqg');
define('AUTH_SALT',        '.Xi~s$*.QGHZh0<d(1${&`8sBoV<z+,IbWq.I)R03}7*]yER[(oP58+Ab<Cmv8T!');
define('SECURE_AUTH_SALT', 'v4@HVGJ[lN|Q,f8m/w,KNtm:y(JwIobx{U[rqvFJCA 5I&%Zu4l@Pp!-P9Hb(^Fj');
define('LOGGED_IN_SALT',   'XTs>kLHY3=HXq]C,~dhga6L(!,.J|NI8.acr?>*}jFOLw:M#E:f=Ud+|bT`r)L/`');
define('NONCE_SALT',       'VRWPFjU]QEDZbZ3TaJ!Rx?V?Iu;1Fq6a>j/fv)ncETWZHjmR~)z~efT[.?4 tE-@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
