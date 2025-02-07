<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_website_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b]h{p^Y+vaqbRigfT@j @bVLoj_amEY)Dl)t:GsBc#;f=Q3$^wN8sh6)I$H GP[&' );
define( 'SECURE_AUTH_KEY',  'rYf#I~tK09v*c}wn^>3^jz=$=)4mR:*i<]*O4JCNfn)a!%s:2v6T 4Y}IK+@pIK%' );
define( 'LOGGED_IN_KEY',    'Fr4@Cj(B?4p@:4ynmrO)=693n.SzYgS#uB_Byg!Q27q/OI(Ak/BXjit]Et!cI@`@' );
define( 'NONCE_KEY',        'g~/AgJH?d%0,U%,fLVA 95]Pi@{}bz0e:j,sHE7ip&dKc_(:C#:~/xj*/QXUn1[t' );
define( 'AUTH_SALT',        'l6Cu0N,:BRO2>,8hDQ<bcZ)Xe`PI/>9r? D`4g cTReo.L(W9~JE+=c75DVYn?$o' );
define( 'SECURE_AUTH_SALT', 'G5jwOJDI6&`EDCNy2/$9lVM&;p`NDajhhNi9<h_9j8X(<$k$eXf0sgh}zvc5>1b>' );
define( 'LOGGED_IN_SALT',   'fMW;FYf|i4^{X4$fHXf7=wGL~OgArT[Z>a@iF9pgrCK!{TL@dcTbqQ?T/0IQ7&O9' );
define( 'NONCE_SALT',       '*CGLsQ85q5+N7Y!Z&rd[Yy33zP4/fO@C{DGxO>q>FU1!)L4TMnZtVPe-}kabm,yN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
