<?php

/**
 * Register post type: Case studies
 */

add_action('init', 'saasleads_init');
function saasleads_init(){
	register_post_type('testimonials', array(
		'labels'             => array(
			'name'               => 'Testimonials', // Основное название типа записи
			'singular_name'      => 'Testimonial', // отдельное название записи типа Book
			'add_new'            => 'Add new Testimonial',
			'add_new_item'       => 'Add new Testimonial',
			'edit_item'          => 'Edit Testimonial',
			'new_item'           => 'New Testimonial',
			'view_item'          => 'View Testimonial',
			'search_items'       => 'Find Testimonial',
			'not_found'          => 'No Testimonial was found',
			'not_found_in_trash' => 'No Testimonial was found in the bin',
            'parent_item_colon'  => '',
			'menu_name'          => 'Testimonials'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon' => 'dashicons-format-status',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
	register_post_type('cases', array(
		'labels'             => array(
			'name'               => 'Cases', // Основное название типа записи
			'singular_name'      => 'Case study', // отдельное название записи типа Book
			'add_new'            => 'Add new Case study',
			'add_new_item'       => 'Add new Case study',
			'edit_item'          => 'Edit Case study',
			'new_item'           => 'New Case study',
			'view_item'          => 'View Case study',
			'search_items'       => 'Find Case study',
			'not_found'          => 'No Case studies was found',
			'not_found_in_trash' => 'No Case studies was found in the bin',
            'parent_item_colon'  => '',
			'menu_name'          => 'Case studies'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon' => 'dashicons-format-aside',
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}