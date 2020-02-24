<?php

/**
 * Registers the `compliant` post type.
 */
function compliant_init() {
	register_post_type( 'compliant', array(
		'labels'                => array(
			'name'                  => __( 'Compliants', 'peterprinciple' ),
			'singular_name'         => __( 'Compliants', 'peterprinciple' ),
			'all_items'             => __( 'All Compliants', 'peterprinciple' ),
			'archives'              => __( 'Compliants Archives', 'peterprinciple' ),
			'attributes'            => __( 'Compliants Attributes', 'peterprinciple' ),
			'insert_into_item'      => __( 'Insert into Compliants', 'peterprinciple' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Compliants', 'peterprinciple' ),
			'featured_image'        => _x( 'Featured Image', 'compliant', 'peterprinciple' ),
			'set_featured_image'    => _x( 'Set featured image', 'compliant', 'peterprinciple' ),
			'remove_featured_image' => _x( 'Remove featured image', 'compliant', 'peterprinciple' ),
			'use_featured_image'    => _x( 'Use as featured image', 'compliant', 'peterprinciple' ),
			'filter_items_list'     => __( 'Filter Compliants list', 'peterprinciple' ),
			'items_list_navigation' => __( 'Compliants list navigation', 'peterprinciple' ),
			'items_list'            => __( 'Compliants list', 'peterprinciple' ),
			'new_item'              => __( 'New Compliants', 'peterprinciple' ),
			'add_new'               => __( 'Add New', 'peterprinciple' ),
			'add_new_item'          => __( 'Add New Compliants', 'peterprinciple' ),
			'edit_item'             => __( 'Edit Compliants', 'peterprinciple' ),
			'view_item'             => __( 'View Compliants', 'peterprinciple' ),
			'view_items'            => __( 'View Compliants', 'peterprinciple' ),
			'search_items'          => __( 'Search Compliants', 'peterprinciple' ),
			'not_found'             => __( 'No Compliants found', 'peterprinciple' ),
			'not_found_in_trash'    => __( 'No Compliants found in trash', 'peterprinciple' ),
			'parent_item_colon'     => __( 'Parent Compliants:', 'peterprinciple' ),
			'menu_name'             => __( 'Compliants', 'peterprinciple' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'compliant',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'compliant_init' );

/**
 * Sets the post updated messages for the `compliant` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `compliant` post type.
 */
function compliant_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['compliant'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Compliants updated. <a target="_blank" href="%s">View Compliants</a>', 'peterprinciple' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'peterprinciple' ),
		3  => __( 'Custom field deleted.', 'peterprinciple' ),
		4  => __( 'Compliants updated.', 'peterprinciple' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Compliants restored to revision from %s', 'peterprinciple' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Compliants published. <a href="%s">View Compliants</a>', 'peterprinciple' ), esc_url( $permalink ) ),
		7  => __( 'Compliants saved.', 'peterprinciple' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Compliants submitted. <a target="_blank" href="%s">Preview Compliants</a>', 'peterprinciple' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Compliants scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Compliants</a>', 'peterprinciple' ),
		date_i18n( __( 'M j, Y @ G:i', 'peterprinciple' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Compliants draft updated. <a target="_blank" href="%s">Preview Compliants</a>', 'peterprinciple' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'compliant_updated_messages' );
