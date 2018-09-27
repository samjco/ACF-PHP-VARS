<?php
/*
Plugin Name: ACF Theme PHP
Depends: Advanced Custom Fields
Plugin URI: https://twitter.com/samcohennet
Description: This addition to ACF allow developers to see all variables available with field groups made allowing for faster development. Supports ACF PRO.
Version: 1.3
Author: Samjco
Author URI: https://twitter.com/samcohennet

Display your vars from ACF!
*/

if( !defined('ABSPATH') ){
	define('ABSPATH', dirname(__FILE__) . '/');
}
//define plugin path constant
define( 'ACFSPVURL', plugin_dir_url( __FILE__ ) . '' );

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
if((is_plugin_active('advanced-custom-fields/acf.php')) || ( class_exists('acf_pro') ) || ( class_exists('acf') ) || (is_plugin_active('advanced-custom-fields-pro/acf.php'))): //Add class_exists('acf')
	add_action('admin_enqueue_scripts', 'hook_to_acf_installed');	
	add_action('init', 'get_acfspv_options');

	if(constant('ACF_LITE') == true):
	function wpa80368_admin_notice() {

	        echo '<div class="updated"><p>';
	        echo "<strong>ACF Theme PHP Warning! Constant is set as <pre>define('ACF_LITE',true)</pre>; </strong> Please set constant to <pre>define('ACF_LITE',false)</pre> in order for ACF Theme PHP to work.";
	        echo '</p></div>';
	   
	}
	add_action( 'admin_notices', 'wpa80368_admin_notice' );

	endif;
else:
	function wpa80367_admin_notice() {

	        echo '<div class="updated"><p>';
	        echo '<strong>ACF Theme PHP Activation Alert!</strong> Please install and activate <a class="thickbox" href="plugin-install.php?tab=plugin-information&plugin=advanced-custom-fields&TB_iframe=true&width=772&height=913">Advanced Custom Fields</a> OR <a class="thickbox" href="https://www.advancedcustomfields.com/pro/?&TB_iframe=true&width=772&height=913">Advanced Custom Fields PRO</a> first to activate ACF Theme PHP. ';
	        echo '</p></div>';
	   
	}
	add_action( 'admin_notices', 'wpa80367_admin_notice' );
endif;
