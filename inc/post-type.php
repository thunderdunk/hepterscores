<?php
/*
//CPTs
add_action( 'init', 'new_cpt_slug_register' );

function new_cpt_slug_register() {
	$labels = array(
		'name'               => _x( 'CPTs', 'post type general name', 'hepterscores' ),
		'singular_name'      => _x( 'CPT', 'post type singular name', 'hepterscores' ),
		'menu_name'          => _x( 'CPTs', 'admin menu', 'hepterscores' ),
		'name_admin_bar'     => _x( 'CPT', 'add new on admin bar', 'hepterscores' ),
		'add_new'            => _x( 'Add New', 'CPT', 'hepterscores' ),
		'add_new_item'       => __( 'Add New CPT', 'hepterscores' ),
		'new_item'           => __( 'New CPT', 'hepterscores' ),
		'edit_item'          => __( 'Edit CPT', 'hepterscores' ),
		'view_item'          => __( 'View CPT', 'hepterscores' ),
		'all_items'          => __( 'All CPTs', 'hepterscores' ),
		'search_items'       => __( 'Search CPTs', 'hepterscores' ),
		'parent_item_colon'  => __( 'Parent CPTs:', 'hepterscores' ),
		'not_found'          => __( 'No CPTs found.', 'hepterscores' ),
		'not_found_in_trash' => __( 'No CPTs found in Trash.', 'hepterscores' ),
	);

	$args = array(
		'labels'             => $labels,
		//'menu_icon'			=> 'dashicons-id',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cpt_slug' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'cpt_slug', $args );
}*/