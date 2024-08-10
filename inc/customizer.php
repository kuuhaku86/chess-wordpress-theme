<?php

function  chess_customizer($wp_customize)
{
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'chess'),
            'description' => __('Copyright Settings', 'chess')
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => __('Copyright X - All Rights Reserved', 'chess'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => __('Copyright Information', 'chess'),
            'description' => __('Please, type your copyright here', 'chess'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    // 2 Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Hero Section', 'chess')
        )
    );

    // Title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'chess'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => __('Hero Title', 'chess'),
            'description' => __('Please, type your here title here', 'chess'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // Subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'chess'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => __('Hero Subtitle', 'chess'),
            'description' => __('Please, type your subtitle here', 'chess'),
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    // Hero Height
    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => __('Hero height', 'chess'),
            'description' => __('Please, type your hero height', 'chess'),
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    // Hero Background
    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'set_hero_background',
        array(
            'label' => __('Hero Image', 'chess'),
            'section'   => 'sec_hero',
            'mime_type' => 'image'
        )
    ));

    // About Us
    $wp_customize->add_section(
        'sec_about_us',
        array(
            'title' => __('About Us Section', 'chess')
        )
    );

    // Title
    $wp_customize->add_setting(
        'set_about_us_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'chess'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_about_us_title',
        array(
            'label' => __('About Us Title', 'chess'),
            'description' => __('Please, type your here title here', 'chess'),
            'section' => 'sec_about_us',
            'type' => 'text'
        )
    );

    // Content
    $wp_customize->add_setting(
        'set_about_us_content',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some content', 'chess'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_about_us_content',
        array(
            'label' => __('About Us Content', 'chess'),
            'description' => __('Please, type your here content here', 'chess'),
            'section' => 'sec_about_us',
            'type' => 'textarea'
        )
    );
}

add_action('customize_register', 'chess_customizer');
