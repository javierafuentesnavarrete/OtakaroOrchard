<?php
function about_us_custom_post_type()
{
    register_post_type(
        'about',
        array(
            'labels' => array(
                'name' => __('About Us', 'textdomain'),
                'singular_name' => __('About', 'textdomain'),
                'add_new_item' => __('About'),
            ),
            'public' => true,
            'has_archive' => 'about',
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'about_us_custom_post_type');
