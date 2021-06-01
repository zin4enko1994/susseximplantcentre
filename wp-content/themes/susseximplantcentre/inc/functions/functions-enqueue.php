<?php
// Add Theme Scripts
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts(){
    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/dist/js/app.js', array(), '1.0.0', true );
}

// Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'theme_styles');
function theme_styles(){
    wp_enqueue_style('app', get_stylesheet_directory_uri() . '/dist/css/app.css', array(), '1.0', 'all');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
}
