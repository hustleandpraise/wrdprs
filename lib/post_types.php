<?php

include_once('CPT.php');


/*
|--------------------------------------------------
| Testimonials
|--------------------------------------------------
*/

$testimonials = new CPT([
	'post_type_name'    => 'testimonial',
	'singular'          => 'Testimonial',
	'plural'            => 'Testimonials',
	'slug'              => 'testimonials'
]);

$testimonials->menu_icon("dashicons-format-quote");

$testimonials->columns([
	'cb'        => '<input type="checkbox" />',
	'title'     => 'Title',
    'quote'     => 'Quote',
    'cite'      => 'Cite',
	'date'      => 'Date'
]);

$testimonials->populate_column('quote', function($column, $post) {
	echo get_field('quote');
});

$testimonials->populate_column('cite', function($column, $post) {
	echo get_field('cite');
});

/*
|--------------------------------------------------
| Sponsors
|--------------------------------------------------
*/

$sponsors = new CPT([
	'post_type_name'    => 'sponsor',
	'singular'          => 'Sponsor',
	'plural'            => 'Sponsors',
	'slug'              => 'sponsors'
]);

$sponsors->columns([
	'cb'        => '<input type="checkbox" />',
	'title'     => 'Title',
    'name'      => 'Name',
    'website'   => 'Website',
	'date'      => 'Date'
]);

$sponsors->populate_column('name', function($column, $post) {
	// gets post types acf field to display on all post types page
	echo get_field('name');
});

$sponsors->populate_column('website', function($column, $post) {
	// gets post types acf field to display on all post types page
	echo get_field('website');
});

$sponsors->menu_icon("dashicons-star-filled");

/*
|--------------------------------------------------
| Partners
|--------------------------------------------------
*/

$partners = new CPT([
	'post_type_name'    => 'partner',
	'singular'          => 'Partner',
	'plural'            => 'Partners',
	'slug'              => 'partners'
]);

$partners->menu_icon("dashicons-groups");

$partners->columns([
	'cb'        => '<input type="checkbox" />',
	'title'     => 'Title',
    'name'      => 'Name',
    'website'   => 'Website',
	'date'      => 'Date'
]);

$partners->populate_column('name', function($column, $post) {
	echo get_field('name');
});

$partners->populate_column('website', function($column, $post) {
	echo get_field('website');
});