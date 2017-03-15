<?php 
class UrlHandler {
	public $key = 'page';
	public function handle( $url, $action ) {
		$method = $_REQUEST;

		if( isset( $method[ $this->key ] ) && $method[ $this->key ] == $url ) {
			if( is_callable( $action ) )
				$action( $method );
			elseif( file_exists( $action ) )
				require_once( $action );
			else
				eval( $action );
			die;
		}
	}
}