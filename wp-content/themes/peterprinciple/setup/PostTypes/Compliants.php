<!-- ?php
namespace Setup\PostTypes;

class Compliants
{
    /**
     * Registers Event Post Type
     */
    public static function register()
    {
        register_post_type( 'compliants',
            array(
                'labels' => array(
                    'name' => __( 'Compliants', 'peterprinciple' ),
                    'singular_name' => __( 'Compliant', 'peterprinciple' ),
                    'all_items' => __( 'All Compliants', 'peterprinciple' ),
                    'add_new' => __( 'Add New', 'peterprinciple' ),
                    'add_new_item' => __( 'Add New Compliant', 'peterprinciple' ),
                    'edit' => __( 'Edit', 'peterprinciple' ),
                    'edit_item' => __( 'Edit Compliant', 'peterprinciple' ),
                    'new_item' => __( 'New Compliant', 'peterprinciple' ),
                    'view_item' => __( 'View Compliant', 'peterprinciple' ),
                    'search_items' => __( 'Search Compliants', 'peterprinciple' ),
                    'not_found' =>  __( 'Nothing found in the Database.', 'peterprinciple' ),
                    'not_found_in_trash' => __( 'Nothing found in Trash', 'peterprinciple' ),
                    'parent_item_colon' => ''
                ),
                'description' => __( 'Add Compliants', 'peterprinciple' ),
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'query_var' => true,
                'menu_position' => 9,
                'menu_icon' => 'dashicons-format-chat',
                'rewrite'	=> array( 'slug' => 'compliant', 'with_front' => false ),
                'has_archive' => 'compliants',
                'capability_type' => 'post',
                'taxonomies'  => array( 'category' ),
                'hierarchical' => false,
                'rewrite' => array('slug' => 'compliant'),
                'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions')
            )
        );
    }
} -->
