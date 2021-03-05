<?php
/*
Plugin Name: WPForms INR Addon
Plugin URI: https://zlancers.in
Description: >-
Add INR Currency Support to WPForms (Wordpress Plugin)
Version: 1
Author: zlancers
Author URI: https://zlancers.in/
License: GPL2
*/

function wpf_dev_currencies( $currencies ) {
	$currencies['INR'] = array(
		'name'                => esc_html__( 'Indian Rupees', 'wpforms' ),
		'symbol'              => '&#8377;',
		'symbol_pos'          => 'left',
		'thousands_separator' => ',',
		'decimal_separator'   => '.',
		'decimals'            => 2,
	);
	return $currencies;
}

add_filter('wpforms_currencies', 'wpf_dev_currencies');

?>