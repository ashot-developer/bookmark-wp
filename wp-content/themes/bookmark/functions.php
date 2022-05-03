<?php

// Adding scripts and styles
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles()
{
    // Styles
    wp_enqueue_script('bookmark-icons', 'https://kit.fontawesome.com/3c02126232.js', array(), '', true);
    wp_enqueue_style('bookmark-css', get_stylesheet_directory_uri() . '/assets/css/style.min.css', '', array('bookmark-icons'));

    // Scripts
    wp_enqueue_script('bookmark-js', get_stylesheet_directory_uri() . '/assets/js/app.min.js', array('jquery'), '', false);
}

// Menu registration
add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Header menu',
        'footer_menu' => 'Footer menu',
    ]);
});

// Enable SVG support
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


// Adding custom post types
require_once(get_template_directory() . '/inc/custom-post-type.php');
