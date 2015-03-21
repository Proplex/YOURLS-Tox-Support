<?php
/*
Plugin Name: ToxSupport
Plugin URI: http://tox.im/
Description: Add support for the Tox URL Scheme
Version: 1.0
Author: Proplex
Author URI: http://tox.im/
*/

if( !defined( 'YOURLS_ABSPATH' ) ) die();
yourls_add_filter( 'is_allowed_protocol', 'tox_protocol' );
function tox_protocol( $args, $url ) {
	$protocols = array( 'tox://', 'tox:');
	foreach ( $protocols as $protocol ) {	
		if ( starts_with( $url, $protocol ) === TRUE ) return true;
	}
	return false;
} 
function starts_with( $haystack, $needle )
{
    return !strncmp( $haystack, $needle, strlen( $needle ) );
}
?>
