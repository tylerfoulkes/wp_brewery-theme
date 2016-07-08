<?php



add_action( 'init', 'create_book_tax' );

function create_book_tax() {
  register_taxonomy(
    'types',
    'beers',
    array(
      'label' => __( 'Types' ),
      //'rewrite' => array( 'slug' => 'types', 'with_front' => false ),
      'hierarchical' => true,
      'rewrite' => array('hierarchical' => true )
    )
  );
}

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Beers', 'Post Type General Name'),
    'singular_name'       => _x( 'Beer', 'Post Type Singular Name'),
    'menu_name'           => __( 'Beers')
  );
  
// Set other options for Custom Post Type
  
  $args = array(
    'label'               => __( 'beers'),
    'description'         => __( 'Beers'),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor

    // You can associate this CPT with a taxonomy or custom taxonomy. 

    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page'
  );

  
  // Registering your Custom Post Type
  register_post_type( 'beers', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );






/*
  Register our sidebars and widgetized areas.
 */
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


add_theme_support( 'custom-header', array('default-text-color' => '#fff',
  'header-text' => true) );


add_theme_support( 'custom-logo' );


function register_my_menu() {
  register_nav_menu('top_nav',__( 'Top Navigation' ));
}
add_action( 'init', 'register_my_menu' );

// register_nav_menus( array(
//   'top_nav' => 'Top Navigation'
// ) );

function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
