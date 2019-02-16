<?php


/*
|--------------------------------------------------
| Nicer Excerpt Filter
|--------------------------------------------------
*/
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*
|--------------------------------------------------
| SHow ACF Settings Page
| Uncomment below to hide ACF settings page
|--------------------------------------------------
*/

/* add_filter('acf/settings/show_admin', '__return_false'); */

/*
|--------------------------------------------------
| Asset Helpers
| Use to create easier links to asset files in the /dist folder
|--------------------------------------------------
*/

function img_url($image_name) {
    return get_template_directory_uri()."/assets/dist/img/".$image_name;
}

function js_url($file_name) {
    return get_template_directory_uri()."/assets/dist/js/".$file_name;
}

function asset_url($file_name) {
    return get_template_directory_uri()."/assets/dist/".$file_name;
}


/*
|--------------------------------------------------
| Get Partial file
| to be used like get_template_part()
|--------------------------------------------------
*/

function partial($name) {
    return get_template_part('partials/'.$name);
}

/*
|--------------------------------------------------
| Partial with Collection
| This takes a result of WP_Query, and renders a partial for each post
| $collection = result of WP_Query
| $partial = partial file to be rendered for each post
|--------------------------------------------------
*/

function render_collection($collection, $partial) {
    while ($collection->have_posts()) : $collection->the_post(); 
        echo get_template_part('partials/'.$partial);
    endwhile; 
}

/*
|--------------------------------------------------
| Partial with Collection Rows
| Same as above, but will break the result into rows of $count
| $count = posts per row
| $collection = result of WP_Query
| $partial = partial file to be rendered for each post
| $row_class = css classname for each row generated
|--------------------------------------------------
*/

function render_collection_rows($count, $collection, $partial, $row_class = "row") {
    $rows = array_chunk($collection->get_posts(), $count);
    foreach($rows as $row) {
        echo '<div class="'.$row_class.'">';
        foreach($row as $post) {
            $collection->the_post(); 
            echo get_template_part('partials/'.$partial);
        }
        echo '</div>';
    }
}

/*
|--------------------------------------------------
| Creates a ACF Theme Settings
|--------------------------------------------------
*/

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}