<?php 

add_action( 'init', 'infobiz_custom_slide' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function infobiz_custom_slide() {
	$labels = array(
		'name'               => _x( 'slides', 'post type general name', 'infobiz' ),
		'singular_name'      => _x( 'slide', 'post type singular name', 'infobiz' ),
		'menu_name'          => _x( 'slides', 'admin menu', 'infobiz' ),
		'name_admin_bar'     => _x( 'slide', 'add new on admin bar', 'infobiz' ),
		'add_new'            => _x( 'Add New', 'slide', 'infobiz' ),
		'add_new_item'       => __( 'Add New slide', 'infobiz' ),
		'new_item'           => __( 'New slide', 'infobiz' ),
		'edit_item'          => __( 'Edit slide', 'infobiz' ),
		'view_item'          => __( 'View slide', 'infobiz' ),
		'all_items'          => __( 'All slides', 'infobiz' ),
		'search_items'       => __( 'Search slides', 'infobiz' ),
		'parent_item_colon'  => __( 'Parent slides:', 'infobiz' ),
		'not_found'          => __( 'No slides found.', 'infobiz' ),
		'not_found_in_trash' => __( 'No slides found in Trash.', 'infobiz' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'infobiz' ),
		'public'             => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-welcome-view-site',
		'supports'           => array( 'title', 'thumbnail' ),
	);

	register_post_type( 'infobiz_slide', $args );
}