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

function partial($name, $data = []) {
    return get_template_part('partials/'.$name, null, $data);
}

/*
|--------------------------------------------------
| Worpress Menu to Array
|--------------------------------------------------
*/

function wp_get_menu_array($name) {

    $allnavs = get_nav_menu_locations();

    if(!isset($allnavs[$name])) return false;

    $nav = $allnavs[$name];

    if(!$nav) return false;
    
    $current_menu = wp_get_nav_menu_object($nav);

    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['description'] = $m->description;
            $menu[$m->ID]['icon_name'] = get_field('icon_name', $m->ID);
            $menu[$m->ID]['children'] = array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID'] = $m->ID;
            $submenu[$m->ID]['title'] = $m->title;
            $submenu[$m->ID]['url'] = $m->url;
            $submenu[$m->ID]['description'] = $m->description;
            $submenu[$m->ID]['icon_name'] = get_field('icon_name', $m->ID);
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
}

/*
|--------------------------------------------------
|  Move Yoast to bottom
|--------------------------------------------------
*/

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


/*
|--------------------------------------------------
| Responsive Image Src & Image Element
|--------------------------------------------------
*/

function get_responsive_img($id) {
    return [
        'src'       => wp_get_attachment_image_url($id, 'full'),
        'srcset'    => wp_get_attachment_image_srcset($id, 'full'),
        'sizes'     => 'auto'
    ];
}

function responsive_img($id, $class = "", $alt = "") {
    $sizes = get_responsive_img($id);
    return "<img data-src=\"{$sizes['src']}\" data-srcset=\"{$sizes['srcset']}\" data-sizes=\"{$sizes['sizes']}\" lazyload class=\"lazyload {$class}\" alt=\"{$alt}\" />";
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

/*
|--------------------------------------------------
| Truncate text
|--------------------------------------------------
*/

function truncate($string,$length=100,$append="&hellip;") {

    $string = strip_tags($string);

    $string = trim($string);
  
    if(strlen($string) > $length) {
      $string = wordwrap($string, $length);
      $string = explode("\n", $string, 2);
      $string = $string[0] . $append;
    }
  
    return $string;
}

/*
|--------------------------------------------------
| Toggle Class
|--------------------------------------------------
*/

function toggleClass($condition = false, $class, $elseClass = "") {
    if($condition) {
        return $class;
    }
    return $elseClass;
}


/*
|--------------------------------------------------
| Get Latest Posts
|--------------------------------------------------
*/

function getLatestPosts($count = -1) {
    $query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => $count
    ]);

    return $query->get_posts();
}