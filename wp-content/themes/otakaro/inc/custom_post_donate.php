<?php
function donate_custom_post_type()
{
    register_post_type(
        'donate',
        array(
            'labels' => array(
                'name' => __('Donate', 'textdomain'),
                'singular_name' => __('Donate', 'textdomain'),
                'add_new_item' => __('Add new Donation'),
            ),
            'public' => true,
            'has_archive' => 'donate',
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'donate_custom_post_type');
