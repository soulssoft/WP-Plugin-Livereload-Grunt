<?php
/**
 * @package LiveReload_Grunt
 * @version 1.0
 */
/*
Plugin Name: LiveReload_Grunt
Plugin URI: http://git.soulssoft.org/soulssoft/livereload_grunt
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Romain Fischer
Version: 1.6
Author URI: http://www.soulssoft.fr
*/

function soulssoft_livereload_grunt() {
	if(WP_DEBUG) {
    wp_register_script('livereload', '//' . $_SERVER['SERVER_NAME']. ':35729/livereload.js?snipver=1', null, false, true);
    wp_enqueue_script('livereload');
  }
}
add_action('wp_enqueue_scripts', 'soulssoft_livereload_grunt');