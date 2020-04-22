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


// Setup\PostTypes\Compliants::register();
Setup\Widgets\RelatedPosts::register();

function get_the_content_formatted() {
	$content = get_the_content();
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

    function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Compliant';
    $submenu['edit.php'][5][0] = 'Compliant';
    $submenu['edit.php'][10][0] = 'Add Compliant';
    $submenu['edit.php'][16][0] = 'Compliant Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Compliant';
    $labels->singular_name = 'Compliant';
    $labels->add_new = 'Add Compliant';
    $labels->add_new_item = 'Add Compliant';
    $labels->edit_item = 'Edit Compliant';
    $labels->new_item = 'Compliant';
    $labels->view_item = 'View Compliant';
    $labels->search_items = 'Search Compliant';
    $labels->not_found = 'No Compliant found';
    $labels->not_found_in_trash = 'No Compliant found in Trash';
    $labels->all_items = 'All Compliant';
    $labels->menu_name = 'Compliant';
    $labels->name_admin_bar = 'Compliant';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );
