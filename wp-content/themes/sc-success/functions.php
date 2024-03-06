<?php
function my_theme_enqueue_styles(): void
{
    wp_enqueue_style('sc-success-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'), 'all');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function enqueue_custom_scripts()
{
    wp_enqueue_script('sc-success-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
