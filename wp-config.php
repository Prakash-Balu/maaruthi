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
define('DB_NAME', 'maaruthi');

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
define('AUTH_KEY',         'W_6V3cAf2UdT5,V7Mu98Wm&^Q:*D0}gP&k;|M*O&?2 ;CArI2Jx)bOSwIRs-rIR$');
define('SECURE_AUTH_KEY',  '{$>G0JRTY#wQo?+K{^dvO3jWq!q&p#HuX|`shywYco/P|[C]V3U!yu-[%-3tWVj=');
define('LOGGED_IN_KEY',    'YRVR=YBO3elgMALa]7aQ[l>fn[!#O]V>q.^|I}7n7Rb~(uH[4>!}3=lBwfuK.)J9');
define('NONCE_KEY',        'fWFy!1nR<aSC:3~DIA~#tvV:A$:07Nsjl MEn&H8Jo&d#DptS6!.B$8iDy8NLgk~');
define('AUTH_SALT',        '~CFg]~XacN2u^am`+d{gz1EHo>2UGW%uY?5KO[9SP^;vOMXu(Vl*gOU3]H4y=R%?');
define('SECURE_AUTH_SALT', '<9f%F/=2GmNi&0&*2CLJb~$`0&SAk>zZq<^YE|cvtdQ$|W,j;||.Wj0:vH]N~){h');
define('LOGGED_IN_SALT',   'ZEQ4n%49DY5nyfSy-lt7j&~5+{X1;nM$Vc`@wTVzEB#.P>:M{.|qf<=`d*4ZIhJ1');
define('NONCE_SALT',       'zFkIqA%|pPu34sU)5hS,lZ.F`r(~$HHusCb1,w{rY(P-7nydRd{@)]EJIc{O:fmM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mt_';

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
