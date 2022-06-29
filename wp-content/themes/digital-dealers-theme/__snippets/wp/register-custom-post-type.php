<?php

// function digitaldealers_register_post_type() {
//     $singular = 'Custom post type name'; // Book
// 	$plural = 'Custom post type names';  // Books
	
//     $slug = str_replace( ' ', '-', strtolower( $singular ) );

//     $labels = array(
//         'name' 			      => __( $plural, 'digitaldealers' ),
//         'singular_name' 	  => __( $singular, 'digitaldealers' ),
//         'add_new' 		      => _x( 'Add New', 'digitaldealers', 'digitaldealers' ),
//         'add_new_item'  	  => __( 'Add New ' . $singular, 'digitaldealers' ),
//         'edit'		          => __( 'Edit', 'digitaldealers' ),
//         'edit_item'	          => __( 'Edit ' . $singular, 'digitaldealers' ),
//         'new_item'	          => __( 'New ' . $singular, 'digitaldealers' ),
//         'view' 			      => __( 'View ' . $singular, 'digitaldealers' ),
//         'view_item' 		  => __( 'View ' . $singular, 'digitaldealers' ),
//         'search_term'   	  => __( 'Search ' . $plural, 'digitaldealers' ),
//         'parent' 		      => __( 'Parent ' . $singular, 'digitaldealers' ),
//         'not_found'           => __( 'No ' . $plural .' found', 'digitaldealers' ),
//         'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'digitaldealers' ),
//     );

//     $args = array(
//         'labels'              => $labels,
//         'hierarchical'        => false,
//         'public'              => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'has_archive'         => true,
//         'rewrite'             => array('slug' => $slug),
//         'menu_icon'           => '',
//         'supports'            => array( 'title', 'thumbnail', 'editor' )
//     );

//     register_post_type( $slug, $args );
// }

// add_action( 'init', 'digitaldealers_register_post_type' );