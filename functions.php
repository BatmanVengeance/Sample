<?php
/**
 * Enqueue theme styles and scripts.
 */
function airbnb_child_enqueue_scripts() {
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), '1.0.0');
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'airbnb_child_enqueue_scripts');

/**
 * Load text domain for translation.
 */
function airbnb_child_theme_setup() {
    load_child_theme_textdomain('airbnb-child-theme', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'airbnb_child_theme_setup');

/**
 * Modify the Astra header.
 */
function airbnb_child_modify_astra_header() {
    // Custom modifications to the Astra header
}
add_action('astra_header', 'airbnb_child_modify_astra_header');
?>
