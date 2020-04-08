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
define( 'DB_NAME', 'new_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';0tQ;NS4 Nf68C:!-xBRGT:/0<1Gw!`qG3gh,(y&fKKe~-Xki 1umG4!4t>Q5yb;' );
define( 'SECURE_AUTH_KEY',  '|JY8;_FQdvCsTSr.u*tZKb/=>?H#{P(bSOQ?u]}peb4?28gPY-u5I)~ubmB;CKzh' );
define( 'LOGGED_IN_KEY',    'fCs*ND/~(_G-R9/InBcCZV$82p`;L;-$Q9uxVN9%kyep{lPsu+.9Ajq9L^LUV^p)' );
define( 'NONCE_KEY',        ':Me.6fH !2Vv4mf)^O69piL:V q(nFb_t[S;faN4]<KY7MUC0kW`EuN<buUj!=Cm' );
define( 'AUTH_SALT',        '(pDJtp$XJ9N$b~D+E;y&^2@sT/0gi&[18OE1uXrx =+e&YO]1![Mq-Us!4Xd.#fc' );
define( 'SECURE_AUTH_SALT', 'Zh|R`2]j>jv|0ZYu]64?~]e<B(s H$sh+G&)PcmKzU+j )CI)I-6j.llmHb6aoLY' );
define( 'LOGGED_IN_SALT',   '`~R{C,vo7WNN2obzeP|b30Pmmr&aKA;As]G#E%DIL@8I(zuBL/=UTAa^U=m>OAO)' );
define( 'NONCE_SALT',       'Ze#<@Xntc_TwSHk*Eov$m9;o#];yX*IIfr$11|`e*#LM_u!)Zvn[0wnL YYWsmqv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';



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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
