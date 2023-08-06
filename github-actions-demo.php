<?php 
/**
 * Plugin Name: Wordcamp Kla
 * Description: Demo for Github actions
 * Version: 1.0.0
 * Author: chris
 */

// Alter WooCommerce Billing Details Text.
add_filter( 'gettext', function ( $translated_text ) {
	if ( strtolower('my awesome Services') === strtolower($translated_text) ) {
		$translated_text = 'What I do';
	}
	return $translated_text;
});

add_filter( 'gettext', function ( $translated_text ) {
	if ( strtolower('My Awesome Services') === strtolower($translated_text) ) {
		$translated_text = 'What I do';
	}
	return $translated_text;
});