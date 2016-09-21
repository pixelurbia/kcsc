<?php

add_action('init', 'create_taxonomies');

function create_taxonomies() {

	register_taxonomy('faqs', '', 
		array(
			'labels' => array('name' => 'FAQ Category'),
			'hierarchical' => true
		)
	);
		register_taxonomy('work', '', 
		array(
			'labels' => array('name' => 'Work Category'),
			'hierarchical' => true,
			'publicly_queryable' => true
		)
	);

			register_taxonomy('employee', '', 
		array(
			'labels' => array('name' => 'Employee Category'),
			'hierarchical' => true,
			'publicly_queryable' => true
		)
	);
				register_taxonomy('locations', '', 
		array(
			'labels' => array('name' => 'Locations Category'),
			'hierarchical' => true,
			'publicly_queryable' => true
		)
	);

}
