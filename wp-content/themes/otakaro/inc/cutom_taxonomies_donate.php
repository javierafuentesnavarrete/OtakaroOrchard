<?php
function donate_register_taxonomy()
{
    $labels = array(
        'name'              => _x('Donate', 'taxonomy general name'),
        'singular_name'     => _x('Donate', 'taxonomy singular name'),
        'search_items'      => __('Search Donate '),
        'all_items'         => __('All Donate '),
        'parent_item'       => __('Parent Donate'),
        'parent_item_colon' => __('Parent Donate:'),
        'edit_item'         => __('Edit Donate'),
        'update_item'       => __('Update Donate'),
        'add_new_item'      => __('Add New Donate'),
        'new_item_name'     => __('New Donate Name'),
        'menu_name'         => __('Donate'),
    );
    $args = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'donate'],
    );
    register_taxonomy('donatet', ['donate'], $args);
}

add_action('init', 'donate_register_taxonomy');
