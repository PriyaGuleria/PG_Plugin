<?php
/*
Plugin Name: YouTube Subs
Plugin URI: https://www.youtube.com/user/Funnycatsandnicefish
Description: It display youTube subscription button and count the number of subscription. This plugin is customised it means we can change the name of your channel and it automatically open your channel.
Version: 1.0.0
Author: Priya Guleria
Author URI: https://www.youtube.com/user/Funnycatsandnicefish
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
    exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-class.php');

// register Widget
function register_youtubesubs(){
    register_widget('Youtube_Subs_Widget');
}

// Hook in function
add_action('widgets_init', 'register_youtubesubs');