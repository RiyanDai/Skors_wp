<?php

// Enqueue Styles and Scripts
function enqueue_custom_styles_and_scripts() {
    // Load main stylesheet
    wp_enqueue_style('main-style', get_theme_file_uri('css/style.css'), array(), filemtime(get_theme_file_path('css/style.css')), 'all');

    // Load Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');

    // Load Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4', 'all');

    // Load IonIcons
    wp_enqueue_script('ionicons', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js', array(), '5.5.2', true);

    // Load custom JavaScript
    wp_enqueue_script('custom-scripts', get_theme_file_uri('js/custom.js'), array('jquery'), filemtime(get_theme_file_path('js/custom.js')), true);

    // Load Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');

// Theme Support
function setup_theme_support() {
    register_nav_menus(array(
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'setup_theme_support');

// Debug Query in Footer
function debug_query_footer() {
    if (is_single()) {
        global $wp_query;
        echo '<pre>' . print_r($wp_query, true) . '</pre>';
    }
}
add_action('wp_footer', 'debug_query_footer');
