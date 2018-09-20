<?php

// Load core functionality.
include 'core/core-init.php';

// Set up an ACF options page.
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Allow upload of svg files
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//Add category filter links for blog posts page
function filter_uri( $category ){
	$params = $_GET;
	
	if ($category) {
		$params['category'] = urlencode($category);
	}

	$params['current'] = 1;

    return '?' . http_build_query($params);
}

//Add paging filter links to resource page
function paging_filter( $varname, $value ) {

	$params = $_GET;

	$params[$varname] = urlencode($value);

    return '?' . http_build_query($params);

}
