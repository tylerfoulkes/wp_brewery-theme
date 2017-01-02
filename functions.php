<?php

/*
* Creating a function to create our CPT
*/

// function custom_post_type() {

// // Set UI labels for Custom Post Type
//   $labels = array(
//     'name'                => _x( 'Beers', 'Post Type General Name'),
//     'singular_name'       => _x( 'Beer', 'Post Type Singular Name'),
//     'menu_name'           => __( 'Beers')
//   );
  
// // Set other options for Custom Post Type
  
//   $args = array(
//     'label'               => __( 'beers'),
//     'description'         => __( 'Beers'),
//     'labels'              => $labels,
//     // Features this CPT supports in Post Editor

//     // You can associate this CPT with a taxonomy or custom taxonomy. 

//      A hierarchical CPT is like Pages and can have
//     * Parent and child items. A non-hierarchical CPT
//     * is like Posts.
      
//     'hierarchical'        => true,
//     'public'              => true,
//     'show_ui'             => true,
//     'show_in_menu'        => true,
//     'show_in_nav_menus'   => true,
//     'show_in_admin_bar'   => true,
//     'can_export'          => true,
//     'has_archive'         => true,
//     'exclude_from_search' => false,
//     'publicly_queryable'  => true
//     // 'rewrite'               => array( 'slug' => '/%show_category%', 'with_front' => true )
//   );

  
//   // Registering your Custom Post Type
//   register_post_type( 'beers', $args );

// }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

// add_action( 'init', 'custom_post_type', 0 );






/* Register our sidebars and widgetized areas. */
function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Footer middle',
    'id'            => 'footer_middle',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer left',
    'id'            => 'footer_left',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer right',
    'id'            => 'footer_right',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );
  
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/* Add custom header support */
add_theme_support( 'custom-header', array('default-text-color' => '#fff',
  'header-text' => true) );


/* Add custom logo support */
add_theme_support( 'custom-logo' );


/* Register navigation menu */
function register_my_menu() {
  register_nav_menu('top_nav',__( 'Top Navigation' ));
}
add_action( 'init', 'register_my_menu' );


/* Add bootstrap navigation structure to menus using the Walker class */
class Primary_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ( array_search( 'menu-item-has-children', $item->classes) ) {
            $output .= sprintf( "\n<li class='dropdown nav-item %s'><a href='%s' class=\"dropdown-toggle\" data-toggle=\"dropdown\" >%s</a>\n", ( array_search( 'current-menu-item', $item->classes ) || array_search( 'current-page-parent', $item->classes ) ) ? 'active' : '', $item->url, $item->title );
            $i = 1;
        } else {
            $output .= sprintf( "\n<li class='nav-item' %s><a class='nav-link' href='%s'>%s</a>\n", ( array_search( 'current-menu-item', $item->classes) ) ? ' class="active"' : '', $item->url, $item->title );
        }
    }

    function start_lvl( &$output, $depth ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"dropdown-menu\" role=\"menu\">\n";
    }
}


/* Custom excerpt length */
function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



add_action('get_header', 'my_filter_head');
function my_filter_head() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}


?>
