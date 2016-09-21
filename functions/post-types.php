<?php

add_action('init', 'create_post_types');

function create_post_types() {

	register_post_type('faq', 
		array(
			'labels' => array(
				'name' => 'FAQs',
				'singular_name' => 'faq',
				'add_new' => 'New Faq',
				'add_new_item' => 'Add New Faq',
				'edit_item' => 'Edit Faq',
				'all_items' => 'All Faqs'
			),
	  	'public' => true,
			'taxonomies' => array('post_tag', 'faqs'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
		);

	register_post_type('locations', 
		array(
			'labels' => array(
				'name' => 'locations',
				'singular_name' => 'locations',
				'add_new' => 'New Location',
				'add_new_item' => 'Add Location',
				'edit_item' => 'Edit Locaition',
				'all_items' => 'All Locations'
			),
	  	'public' => true,
			'taxonomies' => array('post_tag', 'locations'),
			'supports' =>	array('title', 'editor', 'thumbnail' ,'page-attributes')
		)
	);


	register_post_type('careers', 
		array(
			'labels' => array(
				'name' => 'Careers',
				'singular_name' => 'Career',
				'add_new' => 'New Career',
				'add_new_item' => 'Add New Career',
				'edit_item' => 'Edit Career',
				'all_items' => 'All Careers'
			),
	  	'public' => true,
			'taxonomies' => array('post_tag'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
	);

	
	

}
