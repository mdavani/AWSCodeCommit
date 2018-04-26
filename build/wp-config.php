<?php

//** Custom config BEGINS **/
/** MySQL settings for use with HyperDB drop-in plugin **/
define('DB_HOST_READ_REPLICA', '{{DB_HOST_READ_REPLICA}}');
//** Custom config ENDS **/

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', '{{DB_NAME}}');

/** MySQL database username */
define('DB_USER', '{{DB_USER}}');

/** MySQL database password */
define('DB_PASSWORD', '{{DB_PASSWORD}}');

/** MySQL hostname */
define('DB_HOST', '{{DB_HOST}}');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', '{{DB_CHARSET}}');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '{{DB_COLLATE}}');

define('AUTH_KEY', '{{AUTH_KEY}}');
define('SECURE_AUTH_KEY', '{{SECURE_AUTH_KEY}}');
define('LOGGED_IN_KEY', '{{LOGGED_IN_KEY}}');
define('NONCE_KEY', '{{NONCE_KEY}}');
define('AUTH_SALT', '{{AUTH_SALT}}');
define('SECURE_AUTH_SALT', '{{SECURE_AUTH_SALT}}');
define('LOGGED_IN_SALT', '{{LOGGED_IN_SALT}}');
define('NONCE_SALT', '{{NONCE_SALT}}');

$table_prefix = 'wp_';

/** Language */
define('WPLANG', 'en_CA');

/** Media Uploads */
// define('UPLOADS', 'wp-content/uploads/nickcanada');
define('UPLOADS', '{{UPLOADS}}');


$protocol = 'http';
/** SSL Settings */
if ( (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
     || (isset($_SERVER['HTTP_CLOUDFRONT_FORWARDED_PROTO']) && $_SERVER['HTTP_CLOUDFRONT_FORWARDED_PROTO'] == 'https')) {
	$_SERVER['HTTPS']='on';
    $protocol = 'https';
}

/** Site URL */
if(isset($_SERVER['HTTP_HOST'])) {
    define('WP_SITEURL', $protocol . '://' . $_SERVER['HTTP_HOST']);
    define('WP_HOME', $protocol . '://' . $_SERVER['HTTP_HOST']);
}

/** Wordpress Updates */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/** Amazon Web Services Plugin settings */
define( 'DBI_AWS_ACCESS_KEY_ID', '{{DBI_AWS_ACCESS_KEY_ID}}' );
define( 'DBI_AWS_SECRET_ACCESS_KEY', '{{DBI_AWS_SECRET_ACCESS_KEY}}' );

/** WP Offload S3 PLugin Settings */
define( 'WPOS3_SETTINGS', serialize( array(
    // S3 bucket to upload files
    // 'bucket' => 'assets.nickcanada.com',
    'bucket' => '{{WPOS3_BUCKET}}',
    // Automatically copy files to S3 on upload
    'copy-to-s3' => true,
    // Rewrite file URLs to S3
    'serve-from-s3' => true,
    // S3 URL format to use ('path', 'cloudfront')
    // domain' => 'path',
    // Custom domain if 'domain' set to 'cloudfront'
    // 'cloudfront' => 'assets.nickcanada.com',
    'cloudfront' => '{{WPOS3_CLOUDFRONT}}',
    // Enable object prefix, useful if you use your bucket for other files
    //'enable-object-prefix' => true,
    // Object prefix to use if 'enable-object-prefix' is 'true'
    //'object-prefix' => 'wp-content/uploads/',
    // Organize S3 files into YYYY/MM directories
    'use-yearmonth-folders' => true,
    // Serve files over HTTPS
    'force-https' => {{WPOS3_FORCE_HTTPS}},
    // Remove the local file version once offloaded to S3
    'remove-local-file' => false,
    // Append a timestamped folder to path of files offloaded to S3
    'object-versioning' => true,
) ) );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
