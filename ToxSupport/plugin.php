<?php
if( !defined( 'YOURLS_ABSPATH' ) ) die();
yourls_add_filter( 'is_allowed_protocol', 'suculent_itms_protocols' );
function suculent_itms_protocols( $args, $url ) {
	$protocols = array( 'tox://', 'tox-im://');
	foreach ( $protocols as $protocol ) {	
		if ( suculent_starts_with( $url, $protocol ) === TRUE ) return true;
	}
	return false;
} 
function suculent_starts_with( $haystack, $needle )
{
    return !strncmp( $haystack, $needle, strlen( $needle ) );
}
?>