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
define( 'DB_NAME', 'web_david' );

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
define( 'AUTH_KEY',         'DP(V]s+WsJv|h@Y2%(|2#2&`BH5?**usBpUgvzgwmb^i&Bd/m-lOgSsUfxF/J0Ev' );
define( 'SECURE_AUTH_KEY',  ',~gR~!v7_h3w*+i{RAz%(iMAEK2e3Ptgc8&Tq|Ki(F#XO&h1>LKJq+f[;~%T=rS0' );
define( 'LOGGED_IN_KEY',    '@M^0d~kr,kkRzi:t*6w&o(G,F*Y96+D!Q)>enZx<3ygn_|v%=z%nzxef:wG+T3C/' );
define( 'NONCE_KEY',        'Zl(P-,1bv8-:j8M&xM!9yq/w$;>Y,,c}eI)BhiGK5Uo8juwO3f``+&BDh2_pA&ag' );
define( 'AUTH_SALT',        '$I=k|bwN~}@aZRvd/I`}FgNN=XLdPsk.6S~tkWXES]H]mEdiulq4Qf>yS9,<<i)1' );
define( 'SECURE_AUTH_SALT', '4Dfs5b9T1NH!r%&@.o(AK-`6s|y<(!<o9PH.MB~VPXJ,v9Y{7$)8plZoc|$oE>w:' );
define( 'LOGGED_IN_SALT',   '.QB?#lsvc4<-GT@9h,81AVNMs|VF:?L}-ujm _D831rqF*I6C)WJSi!P1FQ3UTC2' );
define( 'NONCE_SALT',       '_k7j~PzzB(k *v `?({{E~cr&B8APmh_&&6S;7,;}r#|~fBw4uv<Ya;T/s{a%^Rm' );

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
