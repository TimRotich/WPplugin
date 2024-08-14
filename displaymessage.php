<?php
/*
Plugin Name: Wordpress Welcoming Greeting Plugin
Description: A simple plugin to display a message to a new page without content.
Version: 1.0
Author: Timothy Kipkosgei
License: GPL3
*/

// Function to display the message
function display_message() {
    return "<h3>Hello, welcome to my WordPress page.Admin is working on loading contents!</h3>";
}

// Shortcode to use the message
function register_shortcode() {
    add_shortcode('contents_loading', 'display_message');
}

// Hook to register the shortcode
add_action('init', 'register_shortcode');

?>