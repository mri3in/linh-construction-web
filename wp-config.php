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
define('DB_NAME', 'linh-construction');

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
define('AUTH_KEY',         'NwpkfW2|~SAL6` %HSg8#+*~ESE`~K8 AYA`1mc%IYgr)I}Swdh%]1#Ko3~/i qS');
define('SECURE_AUTH_KEY',  'Z]|Hl3@]*VeLg*5xnxQ5=FhUB;c;xw)HDX`:O!tSWJRRSI&k$!6mJe>=01_5|>xQ');
define('LOGGED_IN_KEY',    'QH_:rMuTh0^>f|ewE*`5*X&uaszZt79-SxE{3_=h]w6,9uH.vNa>~~gA/AoBE}qq');
define('NONCE_KEY',        'F}]02L8rQep+Bf.SWE^GC;O]nKQmj?aCX.7oz`mWiGMUNgBZNP^i0By,-W[wNlwN');
define('AUTH_SALT',        'EWsi[-0m;Nba%OAuR?H*O&El;:$]US#Y&V^s(?D#2C..q~a0y:d-K9+M]G9w{,uU');
define('SECURE_AUTH_SALT', 'AV4pueZeNuI67/+/oD!1$~l44uTt,V=ae;p]{3At%j/kA2lkUI/DGq3:I5M>3AC^');
define('LOGGED_IN_SALT',   'g.$6Q1LS+6XdXKlm_#>*KA$~q!>T t4}]Uj9o_]``6Y.4-J`)05cieo8CpvRr>U<');
define('NONCE_SALT',       '8Ez=0fpTfGdGoWCi:)c>#]1Or-4xI%CcBH}d!Z]eQtdGtPyLx{{]Yw{$ N[Swn9+');

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
