<?php 
/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Agents
  
     $labels = array(
	'name' => _x('Agents', 'post type general name'),
    'singular_name' => _x('Agent', 'post type singular name'),
    'add_new' => _x('Add New', 'Agent'),
    'add_new_item' => __('Add New Agent'),
    'edit_item' => __('Edit Agents'),
    'new_item' => __('New Agent'),
    'view_item' => __('View Agents'),
    'search_items' => __('Search Agents'),
    'not_found' =>  __('No Agents found'),
    'not_found_in_trash' => __('No Agents found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Agents'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('agent',$args); // name used in query


$labels = array(
  'name' => _x('Neighborhoods', 'post type general name'),
    'singular_name' => _x('Neighborhood', 'post type singular name'),
    'add_new' => _x('Add New', 'Neighborhood'),
    'add_new_item' => __('Add New Neighborhood'),
    'edit_item' => __('Edit Neighborhoods'),
    'new_item' => __('New Neighborhood'),
    'view_item' => __('View Neighborhoods'),
    'search_items' => __('Search Neighborhoods'),
    'not_found' =>  __('No Neighborhoods found'),
    'not_found_in_trash' => __('No Neighborhoods found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Neighborhoods'
  );
  $args = array(
  'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
  
  ); 
  register_post_type('neighborhood',$args); // name used in query


  $labels = array(
  'name' => _x('Developments', 'post type general name'),
    'singular_name' => _x('Development', 'post type singular name'),
    'add_new' => _x('Add New', 'Development'),
    'add_new_item' => __('Add New Development'),
    'edit_item' => __('Edit Developments'),
    'new_item' => __('New Development'),
    'view_item' => __('View Developments'),
    'search_items' => __('Search Developments'),
    'not_found' =>  __('No Developments found'),
    'not_found_in_trash' => __('No Developments found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Developments'
  );
  $args = array(
  'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
  
  ); 
  register_post_type('development',$args); // name used in query
  
  // Add more between here
  
  // and here
  
  } // close custom post type


/* ##############################################
  Custom Taxonomies
*/
add_action( 'init', 'build_taxonomies', 0 );
 
function build_taxonomies() {
// cusotm tax
    register_taxonomy( 'region', 'agent',
   array( 
  'hierarchical' => true, // true = acts like categories false = acts like tags
  'label' => 'Agent Region', 
  'query_var' => true, 
  'rewrite' => true ,
  'show_admin_column' => true,
  'public' => true,
  'rewrite' => array( 'slug' => 'region' ),
  '_builtin' => true
  ) );
  
} // End build taxonomies



