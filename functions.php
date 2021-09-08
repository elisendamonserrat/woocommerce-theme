<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', '', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Register menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);

// Add images sizes
add_image_size('post_image', 960, 461, true);

// Add Google Fonts
function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600&family=Source+Sans+Pro:wght@300;400&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

?>
