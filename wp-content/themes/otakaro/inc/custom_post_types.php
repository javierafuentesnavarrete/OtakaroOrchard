<?php
function info_custom_post_type()
{
    register_post_type(
        'projects',
        array(
            'labels' => array(
                'name' => __('Projects', 'textdomain'),
                'singular_name' => __('Project', 'textdomain'),
                'add_new_item' => __('Add new Project'),
            ),
            'public' => true,
            'has_archive' => 'projects',
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'info_custom_post_type');
