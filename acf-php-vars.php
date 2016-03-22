<?php
/*
Plugin Name: ACF PHP VARIABLES
Depends: Advanced Custom Fields
Plugin URI: http://www.samcohen.net
Description: This addition to ACF allow developers to see all variables available with field groups made allowing for faster development.
Version: 1.0
Author: Sam Cohen
Author URI: http://www.samcohen.net

This plugin was built off of ACF SHOW DISPLAY Plugin - Special Thanks.
*/

if( !defined('ABSPATH') ){
	define('ABSPATH', dirname(__FILE__) . '/');
}
//define plugin path constant
define( 'ACFSPVURL', WP_PLUGIN_URL . '/acf-php-vars' );

//Include the options page
function get_acfspv_options(){
	include('inc/acf-spv-options.php');
}

//Enqueue scripts
function hook_to_acf_installed(){
	wp_register_script('clipboard-min-js', ACFSPVURL . '/js/clipboard.min.js');
	wp_enqueue_script('clipboard-min-js');
	wp_register_script('acf-fd-functions-js', ACFSPVURL . '/js/functions.js');
	wp_enqueue_script('acf-fd-functions-js');
	wp_register_script('tablesorter-js', ACFSPVURL . '/js/jquery.tablesorter.min.js');
	wp_enqueue_script('tablesorter-js');
	wp_register_style('table-style', ACFSPVURL . '/css/table.css');
	wp_enqueue_style('table-style');


}

//Make sure that we can get to the plugin list
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

//Check to see if ACF if added, and if so, hook into WP
if(is_plugin_active('advanced-custom-fields/acf.php')){
	add_action('admin_enqueue_scripts', 'hook_to_acf_installed');
	add_action('init', 'get_acfspv_options');
}
