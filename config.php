<?php
define( 'SITE_TITLE', 'Campus Technologies Limited' );
define( 'ABSPATH', __DIR__ . '/' );
define( 'SITE_URL', 'http://localhost/ctl/ctlsite/' );
define( 'SITE_DOMAIN', parse_url( SITE_URL, PHP_URL_HOST ) );
define( 'ASSET_PATH', ABSPATH . 'assets/' );
define( 'ASSET_URL', SITE_URL . 'assets/' );
define( 'PLUGIN_PATH', ASSET_PATH . 'plugins/' );
define( 'PLUGIN_URL', ASSET_URL . 'plugins/' );
define( 'PAGE_PATH', ABSPATH . 'pages/' );
define( 'LAYOUT_PATH', PAGE_PATH . 'layouts/' );

spl_autoload_register( function( $class ) {
	if( file_exists( ABSPATH . 'system/classes/' . $class . '.Class.php' ) ) {
		require_once( ABSPATH . 'system/classes/' . $class . '.Class.php' );
	}
});