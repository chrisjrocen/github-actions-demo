<?php 
/**
 * Plugin Name: Wordcamp Kla demo
 * Description: Demo for Github actions
 * Version: 1.0.0
 * Author: chris
 */


//Enqueue styles and scripts
add_action('wp_enqueue_scripts', 'jeff_plugin_enqueue_scripts');
function jeff_plugin_enqueue_scripts()
{
	wp_enqueue_style('Main styles file', plugin_dir_url( __FILE__ ) . 'styles.css', array(), 0.1, 'all');

}