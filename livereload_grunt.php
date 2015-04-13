<?php
/**
 * @package LiveReload_Grunt
 * @version 1.0
 */
/*
Plugin Name: LiveReload_Grunt
Plugin URI: https://github.com/soulssoft/WP-Plugin-Livereload-Grunt
Description: Use this plugin only in debug mode. Connect Wordpress Frontend to Grunt contrib watch - Livereload
Author: Romain Fischer
Version: 1.0
Author URI: http://www.soulssoft.fr
*/

function soulssoft_livereload_grunt() {
	if(WP_DEBUG) {
		wp_register_script('livereload', '//' . $_SERVER['SERVER_NAME']. ':35729/livereload.js?snipver=1', null, false, true);
		wp_enqueue_script('livereload');
	}
}
add_action('wp_enqueue_scripts', 'soulssoft_livereload_grunt');