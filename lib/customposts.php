<?php

// Register Custom Post Type
function bobe_custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'bobe' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'bobe' ),
        'menu_name'             => __( 'Services', 'bobe' ),
        'name_admin_bar'        => __( 'Service', 'bobe' ),
        'archives'              => __( 'Item Archives', 'bobe' ),
        'attributes'            => __( 'Item Attributes', 'bobe' ),
        'parent_item_colon'     => __( 'Parent Item:', 'bobe' ),
        'all_items'             => __( 'All Services', 'bobe' ),
        'add_new_item'          => __( 'Add New Item', 'bobe' ),
        'add_new'               => __( 'Add New', 'bobe' ),
        'new_item'              => __( 'New Item', 'bobe' ),
        'edit_item'             => __( 'Edit Item', 'bobe' ),
        'update_item'           => __( 'Update Item', 'bobe' ),
        'view_item'             => __( 'View Service', 'bobe' ),
        'view_items'            => __( 'View Services', 'bobe' ),
        'search_items'          => __( 'Search Service', 'bobe' ),
        'not_found'             => __( 'Not found', 'bobe' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'bobe' ),
        'featured_image'        => __( 'Featured Image', 'bobe' ),
        'set_featured_image'    => __( 'Set featured image', 'bobe' ),
        'remove_featured_image' => __( 'Remove featured image', 'bobe' ),
        'use_featured_image'    => __( 'Use as featured image', 'bobe' ),
        'insert_into_item'      => __( 'Insert into item', 'bobe' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'bobe' ),
        'items_list'            => __( 'Items list', 'bobe' ),
        'items_list_navigation' => __( 'Items list navigation', 'bobe' ),
        'filter_items_list'     => __( 'Filter items list', 'bobe' ),
    );
    $args = array(
        'label'                 => __( 'Service', 'bobe' ),
        'description'           => __( 'Post Type Description', 'bobe' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
        'taxonomies'            => array( 'service-type' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 21,
        'menu_icon'             => 'dashicons-images-alt2',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'service', $args );


    $labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'bobe' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'bobe' ),
		'menu_name'             => __( 'Team', 'bobe' ),
		'name_admin_bar'        => __( 'Team Member', 'bobe' ),
		'archives'              => __( 'Item Archives', 'bobe' ),
		'attributes'            => __( 'Item Attributes', 'bobe' ),
		'parent_item_colon'     => __( 'Parent Item:', 'bobe' ),
		'all_items'             => __( 'All Members', 'bobe' ),
		'add_new_item'          => __( 'Add New Item', 'bobe' ),
		'add_new'               => __( 'Add New', 'bobe' ),
		'new_item'              => __( 'New Item', 'bobe' ),
		'edit_item'             => __( 'Edit Item', 'bobe' ),
		'update_item'           => __( 'Update Item', 'bobe' ),
		'view_item'             => __( 'View Member', 'bobe' ),
		'view_items'            => __( 'View Members', 'bobe' ),
		'search_items'          => __( 'Search Member', 'bobe' ),
		'not_found'             => __( 'Not found', 'bobe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bobe' ),
		'featured_image'        => __( 'Featured Image', 'bobe' ),
		'set_featured_image'    => __( 'Set featured image', 'bobe' ),
		'remove_featured_image' => __( 'Remove featured image', 'bobe' ),
		'use_featured_image'    => __( 'Use as featured image', 'bobe' ),
		'insert_into_item'      => __( 'Insert into item', 'bobe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'bobe' ),
		'items_list'            => __( 'Items list', 'bobe' ),
		'items_list_navigation' => __( 'Items list navigation', 'bobe' ),
		'filter_items_list'     => __( 'Filter items list', 'bobe' ),
	);
	$args = array(
		'label'                 => __( 'Team Member', 'bobe' ),
        'description'           => __( 'This is where you can create and manage team members.', 'bobe' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt', 'custom-fields'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'teammember', $args );

     // Testimonials
  $labels = array(
    'name'                  => _x( 'Testimonials', 'Testimonials', 'bobe' ),
    'singular_name'         => _x( 'Testimonial', 'Testimonial', 'bobe' ),
    'singular_name_lowercase' =>  __('képzés','bobe'),
    'menu_name'             => __( 'Testimonials', 'bobe' ),
    'name_admin_bar'        => __( 'Testimonial', 'bobe' ),
    'archives'              => __( 'Testimonial archíve', 'bobe' ),
    'parent_item_colon'     => __( 'Parent Testimonial:', 'bobe' ),
    'all_items'             => __( 'All Testimonials', 'bobe' ),
    'add_new_item'          => __( 'Add New Testimonial felvétele', 'bobe' ),
    'add_new'               => __( 'Add New', 'bobe' ),
    'new_item'              => __( 'New Testimonial', 'bobe' ),
    'edit_item'             => __( 'Edit Testimonial', 'bobe' ),
    'update_item'           => __( 'Update Testimonial', 'bobe' ),
    'view_item'             => __( 'Vieew Testimonial', 'bobe' ),
    'search_items'          => __( 'Search Testimonial', 'bobe' ),
    'not_found'             => __( 'Not found', 'bobe' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'bobe' ),
    'featured_image'        => __( 'Testimonial Photo', 'bobe' ),
    'set_featured_image'    => __( 'Set Testimonial photo', 'bobe' ),
    'remove_featured_image' => __( 'Remove Testimonial photo', 'bobe' ),
    'use_featured_image'    => __( 'Use as Testimonial photo', 'bobe' ),
    'insert_into_item'      => __( 'Insert into Testimonial', 'bobe' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'bobe' ),
    'items_list'            => __( 'Testimonials list', 'bobe' ),
    'items_list_navigation' => __( 'Testimonials list navigation', 'bobe' ),
    'filter_items_list'     => __( 'Filter Testimonials', 'bobe' ),
  );
  $args = array(
    'label'                 => __( 'Testimonial', 'bobe' ),
    'description'           => __( 'Testimonials description', 'bobe' ),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'page-attributes'),
    //'taxonomies'            => array('walktag', 'topic'),
    'rewrite'               => array('slug' => __('testimonial','bobe')),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    //'show_in_menu'          => 'edit.php?post_type=event',
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-quote',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'testimonial', $args );

}
add_action( 'init', 'bobe_custom_post_type', 0 );

function bobe_add_service_taxonomies(){

    $category_labels = array(
        'name' => __( 'Service Categories', 'bobe'),
        'singular_name' => __( 'Service Category', 'bobe'),
        'search_items' =>  __( 'Search Service Categories', 'bobe'),
        'all_items' => __( 'All Service Categories', 'bobe'),
        'parent_item' => __( 'Parent Service Category', 'bobe'),
        'edit_item' => __( 'Edit Service Category', 'bobe'),
        'update_item' => __( 'Update Service Category', 'bobe'),
        'add_new_item' => __( 'Add New Service Category', 'bobe'),
        'menu_name' => __( 'Service Categories', 'bobe')
    );

    register_taxonomy("service-type",
            array("service"),
            array("hierarchical" => true,
                    'labels' => $category_labels,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => array( 'slug' => 'szolgaltatasok' )
    ));
}

add_action( 'init', 'bobe_add_service_taxonomies' );

function bobe_modify_services_archive($query)
{
    if ( ($query->is_main_query()) && ($query->is_archive('service') || $query->is_tax('service-type')  ) && (!is_admin()) ) {
      $query->set('posts_per_page', -1);
      $query->set('orderby', 'menu_order');
      $query->set('order', 'ASC');
      $query->set('post_status', array('publish' ));
    }
}
add_action('pre_get_posts', 'bobe_modify_services_archive');