<?php
# Database Configuration
define('DB_NAME','wp_thompsonisland');
define('DB_USER','thompsonisland');
define('DB_PASSWORD','UHFXolRvsdiZVLh4B6E7');
define('DB_HOST','127.0.0.1');
define('DB_HOST_SLAVE','localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '2z4n%5t;RxoGGj/q+&%`Zu<nRc4;6i&?wW+j.l<LWf?hh8X+6Kt(v(A&A[IZ}2(+');
define('SECURE_AUTH_KEY',  'xNST!m8^n[r^>Y;5g#buRQ390OK (Y>9Ahh(F/2VJC{ar3no8n|Pe|HUSmBwql4A');
define('LOGGED_IN_KEY',    'N?>|G,< SKsE`&:s_0tf+MThTU}C)i_tMsY29+(qQ?`|S(ww+/5L1Eu1~[{g~oZs');
define('NONCE_KEY',        'c-5GFR{$mEcG7K5f-/6/`W1+|_w!@y^|(_=jn 2}b*qjFp-(1dFs/=)+4)Qay@ [');
define('AUTH_SALT',        'r@;,|f+lD^~aao7[-,<Ew9:nP=O<YVutG IS;^VXy|,|=N#_]+B>C~2re+[x&&ji');
define('SECURE_AUTH_SALT', 'oI6E>Fl`o<o%lY(zo|79DI>+59yG(UT98(WIxk1M>z:W0`lq%ECh/re[*k3k3gZ%');
define('LOGGED_IN_SALT',   'Q0Sm|q~RP,h=+--,[JYa/bF-i_b=,2Mp4duS4(H2,$V:GbAGJy(x,l+7w+pX)%T+');
define('NONCE_SALT',       'Wc?||M+<_E-DnAh?7o?BIZCOL0|-gs~j<i4o&+fZs-EX7$HsFoLsg4&6%z~`_I$K');


# Localized Language Stuff

define('WP_CACHE',TRUE);

define('WP_AUTO_UPDATE_CORE',false);

define('PWP_NAME','thompsonisland');

define('FS_METHOD','direct');

define('FS_CHMOD_DIR',0775);

define('FS_CHMOD_FILE',0664);

define('PWP_ROOT_DIR','/nas/wp');

define('WPE_APIKEY','a9d8475553294cad1883de57bcec83e8bfe570d4');

define('WPE_FOOTER_HTML',"");

define('WPE_CLUSTER_ID','1258');

define('WPE_CLUSTER_TYPE','pod');

define('WPE_ISP',true);

define('WPE_BPOD',false);

define('WPE_RO_FILESYSTEM',false);

define('WPE_LARGEFS_BUCKET','largefs.wpengine');

define('WPE_CDN_DISABLE_ALLOWED',true);

define('DISALLOW_FILE_EDIT',FALSE);

define('DISALLOW_FILE_MODS',FALSE);

define('DISABLE_WP_CRON',false);

define('WPE_FORCE_SSL_LOGIN',false);

define('FORCE_SSL_LOGIN',false);

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define('WPE_EXTERNAL_URL',false);

define('WP_POST_REVISIONS',FALSE);

define('WPE_WHITELABEL','wpengine');

define('WP_TURN_OFF_ADMIN_BAR',false);

define('WPE_BETA_TESTER',false);

umask(0002);

$wpe_cdn_uris=array ();

$wpe_no_cdn_uris=array ();

$wpe_content_regexs=array ();

$wpe_all_domains=array (  0 => 'thompsonisland.wpengine.com',);

$wpe_varnish_servers=array (  0 => 'pod-1258',);

$wpe_special_ips=array ();

$wpe_ec_servers=array ();

$wpe_largefs=array ();

$wpe_netdna_domains=array ();

$wpe_netdna_domains_secure=array ();

$wpe_netdna_push_domains=array ();

$wpe_domain_mappings=array ();

$memcached_servers=array ();
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
