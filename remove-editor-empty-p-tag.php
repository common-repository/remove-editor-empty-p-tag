<?php
/**
 * Plugin Name: Remove Editor Empty P Tag
 * Description: This plugin removes empty p and br tag from the post and page content. 
 * Version: 1.0
 * Author: Bhargav Dholariya
 * Author URI: https://profiles.wordpress.org/bhargavdholariya
 * Author Email: bhargav.dholariyait@gmail.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
   remove_filter('the_excerpt', 'wpautop');
   remove_filter('the_content', 'wpautop');
   remove_filter('widget_text_content', 'wpautop');
?>