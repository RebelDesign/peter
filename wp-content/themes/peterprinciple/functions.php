<?php

/**
 * Autoload Setup with Composer
 */
include_once(__DIR__.'/vendor/autoload.php');

/**
 * Load our environment variables from .env file
 * Using the .env file prevents us from committing private keys to the repository
 */
$root_dir = dirname(__FILE__);
$dotenv = new Dotenv\Dotenv($root_dir);
if (file_exists($root_dir . '/.env')) {
    $dotenv->load();
}

Setup\Environment::init();
Setup\Cleanup::init();
Setup\ThemeSupport::init();
Setup\Widgets::init();
Setup\Scripts::init();
Setup\Menus::init();

Setup\Widgets\RelatedPosts::register();

function get_the_content_formatted() {
	$content = get_the_content();
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}


/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Compliants', 'Post Type General Name', 'peterprinciple' ),
        'singular_name'       => _x( 'Compliant', 'Post Type Singular Name', 'peterprinciple' ),
        'menu_name'           => __( 'Compliants', 'peterprinciple' ),
        'parent_item_colon'   => __( 'Parent Compliant', 'peterprinciple' ),
        'all_items'           => __( 'All Compliants', 'peterprinciple' ),
        'view_item'           => __( 'View Compliant', 'peterprinciple' ),
        'add_new_item'        => __( 'Add New Compliant', 'peterprinciple' ),
        'add_new'             => __( 'Add New', 'peterprinciple' ),
        'edit_item'           => __( 'Edit Compliant', 'peterprinciple' ),
        'update_item'         => __( 'Update Compliant', 'peterprinciple' ),
        'search_items'        => __( 'Search Compliant', 'peterprinciple' ),
        'not_found'           => __( 'Not Found', 'peterprinciple' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'peterprinciple' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'compliant', 'peterprinciple' ),
        'description'         => __( 'Compliant news and reviews', 'peterprinciple' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'compliant', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );
