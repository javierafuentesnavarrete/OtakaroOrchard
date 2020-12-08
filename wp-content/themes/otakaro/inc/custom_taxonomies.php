<?php
function projects_register_taxonomy_project()
{
    $labels = array(
        'name'              => _x('Projects', 'taxonomy general name'),
        'singular_name'     => _x('Project', 'taxonomy singular name'),
        'search_items'      => __('Search Projects '),
        'all_items'         => __('All Projects '),
        'parent_item'       => __('Parent Project'),
        'parent_item_colon' => __('Parent Project:'),
        'edit_item'         => __('Edit Project'),
        'update_item'       => __('Update Project'),
        'add_new_item'      => __('Add New Project'),
        'new_item_name'     => __('New Project Name'),
        'menu_name'         => __('Project'),
    );
    $args = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'project'],
    );
    register_taxonomy('project', ['projects'], $args);
}

add_action('init', 'projects_register_taxonomy_project');
