<?php

require get_template_directory() . '/inc/customizer.php';

function chess_load_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'chess_load_scripts');

function chess_config()
{
    register_nav_menus(
        array(
            'chess_main_menu' => esc_html__('Main Menu', 'chess'),
            'chess_footer_menu' => esc_html__('Footer Menu', 'chess')
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'chess_config', 0);
