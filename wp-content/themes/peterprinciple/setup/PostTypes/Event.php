<?php
namespace Setup\PostTypes;

class Event
{
    /**
     * Registers Event Post Type
     */
    public static function register()
    {
        register_post_type( 'event',
            array(
                'labels' => array(
                    'name' => __( 'Events', 'peterprinciple' ),
                    'singular_name' => __( 'Event', 'peterprinciple' ),
                    'all_items' => __( 'All Events', 'peterprinciple' ),
                    'add_new' => __( 'Add New', 'peterprinciple' ),
                    'add_new_item' => __( 'Add New Event', 'peterprinciple' ),
                    'edit' => __( 'Edit', 'peterprinciple' ),
                    'edit_item' => __( 'Edit Event', 'peterprinciple' ),
                    'new_item' => __( 'New Event', 'peterprinciple' ),
                    'view_item' => __( 'View Event', 'peterprinciple' ),
                    'search_items' => __( 'Search Events', 'peterprinciple' ),
                    'not_found' =>  __( 'Nothing found in the Database.', 'peterprinciple' ),
                    'not_found_in_trash' => __( 'Nothing found in Trash', 'peterprinciple' ),
                    'parent_item_colon' => ''
                ),
                'description' => __( 'Add Events', 'peterprinciple' ),
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'query_var' => true,
                'menu_position' => 9,
                'menu_icon' => 'dashicons-calendar-alt',
                'rewrite'	=> array( 'slug' => 'event', 'with_front' => false ),
                'has_archive' => 'events',
                'capability_type' => 'post',
                'hierarchical' => false,
                'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions')
            )
        );
    }
}
