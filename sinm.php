<?php
/*
Plugin Name: SINM Scroll To Top
Plugin URI: http://wordcorepress.com/plugins/sinm-scroll-to-top
Description: This is  First sinm  simple scroll to top plugin. When visitor scroll bottom then show a simple scroll up arrow button and click to get top to the page.
Author: SINM
Version: 1.0
Author URI: http://wordcorepress.com

*/



//Adding Latest jQuery from Wordpress 
function sinm_scroll_to_top_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'sinm_scroll_to_top_latest_jquery');

//Adding Plugin javascript file
function sinm_scroll_to_top_plugin_files() {
	wp_register_script( 'sinm-plugin-script', plugins_url('sinm-scroll-to-top/js/jquery.scrollUp.min.js'), false, '1.0', true);
    wp_enqueue_script( 'sinm-plugin-script' );
}
add_action( 'init', 'sinm_scroll_to_top_plugin_files' );

//Adding plugin javascript active file
function sinm_scroll_to_top_plugin_active() {
	wp_register_script( 'sinm-plugin-script-active', plugins_url('sinm-scroll-to-top/js/active.js'), false, '1.0', true);
    wp_enqueue_script( 'sinm-plugin-script-active' );
}
add_action( 'init', 'sinm_scroll_to_top_plugin_active' );

// Adding Plugin custm CSS file
function sinm_scroll_to_top_plugin_styles() {
	wp_register_style( 'sinm-plugin-style', plugins_url('css/sinm.css', __FILE__) );
    wp_enqueue_style( 'sinm-plugin-style' );
}
add_action( 'wp_enqueue_scripts', 'sinm_scroll_to_top_plugin_styles' );


?>