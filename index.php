<?php 
require_once( 'config.php' );

$url = new UrlHandler;

if( isset( $_GET[ 'page' ] ) ) {
    $url->handle( '404', PAGE_PATH . '404.php' );
    $url->handle( '403', PAGE_PATH . '403.php' );
	$url->handle( 'services', PAGE_PATH . 'services.php' );
	$url->handle( 'about', PAGE_PATH . 'about.php' );
    $url->handle( 'contact', PAGE_PATH . 'contact.php' );
}
else {
	require_once( PAGE_PATH . 'index.php' );
}