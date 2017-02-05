<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'wpz-shortcodes','zoom-font-awesome' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// Helper functions

function ocs_taxonomy_config( $singular, $plural, $hierarchical ) {
  // set up labels
	$labels = array(
		'name'              => $plural,
		'singular_name'     => $singular,
		'search_items'      => 'Search ' . $plural,
		'all_items'         => 'All ' . $plural,
		'edit_item'         => 'Edit ' . $singular,
		'update_item'       => 'Update ' . $singular,
		'add_new_item'      => 'Add New ' . $singular,
		'new_item_name'     => 'New ' . $singular,
		'menu_name'         => $plural
	);

  // register taxonomy
	return array(
		'hierarchical' => $hierarchical,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	);
}

// Register Custom Post Types
function ocs_register_course_post_type() {

	$singular = 'Course';
	$plural = 'Courses';
	$slug = str_replace( ' ', '_', strtolower( $singular ) );
	$labels = array(
		'name' 			=> $plural,
		'singular_name' 	=> $singular,
		'add_new' 		=> 'Add New',
		'add_new_item'  	=> 'Add New ' . $singular,
		'edit'		        => 'Edit',
		'edit_item'	        => 'Edit ' . $singular,
		'new_item'	        => 'New ' . $singular,
		'view' 			=> 'View ' . $singular,
		'view_item' 		=> 'View ' . $singular,
		'search_term'   	=> 'Search ' . $plural,
		'parent' 		=> 'Parent ' . $singular,
		'not_found' 		=> 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
		);
	$args = array(
		'labels'              => $labels,
	        'public'              => true,
	        'publicly_queryable'  => true,
	        'exclude_from_search' => false,
	        'show_in_nav_menus'   => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 10,
	        'menu_icon'           => 'dashicons-book',
	        'can_export'          => true,
	        'delete_with_user'    => false,
	        'hierarchical'        => false,
	        'has_archive'         => true,
	        'query_var'           => true,
	        'capability_type'     => 'post',
	        'map_meta_cap'        => true,
	        // 'capabilities' => array(),
	        'rewrite'             => array(
	        	'slug' => $slug,
	        	'with_front' => true,
	        	'pages' => true,
	        	'feeds' => true,
	        ),
	        'supports'            => array(
	        	'title',
	        	'editor',
	        	'author',
	        	'custom-fields',
            'wpcom-markdown'
	        )
	);
	register_post_type( $slug, $args );
}
add_action( 'init', 'ocs_register_course_post_type' );

function ocs_register_question_post_type() {

	$singular = 'Question';
	$plural = 'Questions';
	$slug = str_replace( ' ', '_', strtolower( $singular ) );
	$labels = array(
		'name' 			=> $plural,
		'singular_name' 	=> $singular,
		'add_new' 		=> 'Add New',
		'add_new_item'  	=> 'Add New ' . $singular,
		'edit'		        => 'Edit',
		'edit_item'	        => 'Edit ' . $singular,
		'new_item'	        => 'New ' . $singular,
		'view' 			=> 'View ' . $singular,
		'view_item' 		=> 'View ' . $singular,
		'search_term'   	=> 'Search ' . $plural,
		'parent' 		=> 'Parent ' . $singular,
		'not_found' 		=> 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
		);
	$args = array(
		'labels'              => $labels,
	        'public'              => true,
	        'publicly_queryable'  => true,
	        'exclude_from_search' => false,
	        'show_in_nav_menus'   => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 10,
	        'menu_icon'           => 'dashicons-format-chat',
	        'can_export'          => true,
	        'delete_with_user'    => false,
	        'hierarchical'        => false,
	        'has_archive'         => true,
	        'query_var'           => true,
	        'capability_type'     => 'post',
	        'map_meta_cap'        => true,
	        // 'capabilities' => array(),
	        'rewrite'             => array(
	        	'slug' => $slug,
	        	'with_front' => true,
	        	'pages' => true,
	        	'feeds' => true,
	        ),
	        'supports'            => array(
	        	'title',
	        	'editor',
	        	'author',
	        	'custom-fields',
            'wpcom-markdown'
	        )
	);
	register_post_type( $slug, $args );
}
add_action( 'init', 'ocs_register_question_post_type' );

function ocs_register_tutorial_post_type() {

	$singular = 'Tutorial';
	$plural = 'Tutorials';
	$slug = str_replace( ' ', '_', strtolower( $singular ) );
	$labels = array(
		'name' 			=> $plural,
		'singular_name' 	=> $singular,
		'add_new' 		=> 'Add New',
		'add_new_item'  	=> 'Add New ' . $singular,
		'edit'		        => 'Edit',
		'edit_item'	        => 'Edit ' . $singular,
		'new_item'	        => 'New ' . $singular,
		'view' 			=> 'View ' . $singular,
		'view_item' 		=> 'View ' . $singular,
		'search_term'   	=> 'Search ' . $plural,
		'parent' 		=> 'Parent ' . $singular,
		'not_found' 		=> 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
		);
	$args = array(
		'labels'              => $labels,
	        'public'              => true,
	        'publicly_queryable'  => true,
	        'exclude_from_search' => false,
	        'show_in_nav_menus'   => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 10,
	        'menu_icon'           => 'dashicons-book-alt',
	        'can_export'          => true,
	        'delete_with_user'    => false,
	        'hierarchical'        => false,
	        'has_archive'         => true,
	        'query_var'           => true,
	        'capability_type'     => 'post',
	        'map_meta_cap'        => true,
	        // 'capabilities' => array(),
	        'rewrite'             => array(
	        	'slug' => $slug,
	        	'with_front' => true,
	        	'pages' => true,
	        	'feeds' => true,
	        ),
	        'supports'            => array(
	        	'title',
	        	'editor',
	        	'author',
	        	'custom-fields',
            'wpcom-markdown'
	        )
	);
	register_post_type( $slug, $args );
}
add_action( 'init', 'ocs_register_tutorial_post_type' );

// Register Custom taxonomies
function ocs_register_question_category_taxonomy() {
  register_taxonomy( 'questioncat', 'question',
    ocs_taxonomy_config('Question Category', 'Question Categories', true)
  );
}
add_action( 'init', 'ocs_register_question_category_taxonomy' );

function ocs_register_question_association_taxonomy() {
  register_taxonomy( 'questassoc', 'question',
    ocs_taxonomy_config('Question Association', 'Question Associations', false)
  );
}
add_action( 'init', 'ocs_register_question_association_taxonomy' );

function ocs_register_tutorial_category_taxonomy() {
	register_taxonomy( 'tutcat', 'tutorial',
    ocs_taxonomy_config('Tutorial Category', 'Tutorial Categories', true)
  );
}
add_action( 'init', 'ocs_register_tutorial_category_taxonomy' );

function ocs_register_tutorial_topics_taxonomy() {
  register_taxonomy( 'tuttopic', 'tutorial',
    ocs_taxonomy_config('Tutorial Topic', 'Tutorial Topics', false)
  );
}
add_action( 'init', 'ocs_register_tutorial_topics_taxonomy' );
