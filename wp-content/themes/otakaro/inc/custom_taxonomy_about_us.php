<?php
function about_us_register_taxonomy()
{
    $labels = array(
        'name'              => _x('about', 'taxonomy general name'),
        'singular_name'     => _x('about', 'taxonomy singular name'),
        'search_items'      => __('Search about '),
        'all_items'         => __('All about'),
        'parent_item'       => __('Parent about'),
        'parent_item_colon' => __('Parent about:'),
        'edit_item'         => __('Edit about'),
        'update_item'       => __('Update about'),
        'add_new_item'      => __('Add New about'),
        'new_item_name'     => __('New about Name'),
        'menu_name'         => __('about'),
    );
    $args = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'about'],
    );
    register_taxonomy('about', ['about'], $args);
}

add_action('init', 'about_us_register_taxonomy');
