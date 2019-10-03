<?php
# Database Configuration
define( 'DB_NAME', 'wp_stagewaccama' );
define( 'DB_USER', 'stagewaccama' );
define( 'DB_PASSWORD', 'IWNPKOQz7FXijdWsR9g1' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'U&1VdUct2x_)cO5<fgW|j]1RIPP5:N9{F!hCW4F{#FS=_+9~|p~zB|j/$sEoAJB`');
define('SECURE_AUTH_KEY',  'bX[ Rn?^SQ]IF,SF5Z^vKnN{-|*-T%j^JRn|$09pz#aE>tVZWwJ1qm#ViEG`0DCW');
define('LOGGED_IN_KEY',    '{Fk7qXu7~tGHEZ&B-*. 2n%*f@WOkTQV+-g/)3IFU.q/+dYTN|]CP]8qvbtX%8y}');
define('NONCE_KEY',        'i$bwi*Txgqby7lFMO<T`<z%dMi+R>{w+mGxtp}a8Tsu#D>ss.)e>gg)n]mxHq@g6');
define('AUTH_SALT',        '=mX|<#3b=,cO&~}X18e5g[]-QtAfkeee?g6W/_!46l5((InS){1b[J:jlX^JMH0B');
define('SECURE_AUTH_SALT', '+gLxM7M:II-Jp6f-y&j)v_}O@E!VTJ[JRv)IrdZ%<Z6P a=)>hZ0st@IC!-gCA6v');
define('LOGGED_IN_SALT',   'i0aS~F,d0(zP`$KhC[KIQ`Yo}*G=kQT`eY/5?_q1G&NqN_|xXl)*Zgy{Ul7#8K6J');
define('NONCE_SALT',       'NfqMw0w+R|g(k9/7OXP9Ob_|JF*Ao4%-62ag]8U-z8Oq`Lz`GtKja{]J(=Q4L!#q');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'stagewaccama' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c9fddf5d1e746b6a620c2a9407ec280d1a2b9f90' );

define( 'WPE_CLUSTER_ID', '150007' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'stagewaccama.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-150007', );

$wpe_special_ips=array ( 0 => '35.184.16.17', );

$wpe_ec_servers=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
