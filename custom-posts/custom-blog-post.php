<?php 

add_action( 'init', 'infobiz_blog_post' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function infobiz_blog_post() {
	$labels = array(
		'name'               => _x( 'blog_posts', 'post type general name', 'infobiz' ),
		'singular_name'      => _x( 'blog_post', 'post type singular name', 'infobiz' ),
		'menu_name'          => _x( 'Blog Posts', 'admin menu', 'infobiz' ),
		'name_admin_bar'     => _x( 'blog_post', 'add new on admin bar', 'infobiz' ),
		'add_new'            => _x( 'Add New', 'blog_post', 'infobiz' ),
		'add_new_item'       => __( 'Add New blog_post', 'infobiz' ),
		'new_item'           => __( 'New blog_post', 'infobiz' ),
		'edit_item'          => __( 'Edit blog_post', 'infobiz' ),
		'view_item'          => __( 'View blog_post', 'infobiz' ),
		'all_items'          => __( 'All Blogs', 'infobiz' ),
		'search_items'       => __( 'Search blog_posts', 'infobiz' ),
		'parent_item_colon'  => __( 'Parent blog_posts:', 'infobiz' ),
		'not_found'          => __( 'No blog_posts found.', 'infobiz' ),
		'not_found_in_trash' => __( 'No blog_posts found in Trash.', 'infobiz' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'infobiz' ),
		'public'             => true,
		'rewrite'            => array( 'slug' => 'blog_post' ),
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-welcome-view-site',
		'supports'           => array( 'title', 'thumbnail', 'custom-fields' )
	);

	register_post_type( 'blog', $args );
}