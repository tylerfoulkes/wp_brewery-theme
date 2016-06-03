<?php

// add_action( 'init', 'create_post_type' );
// function create_post_type() {
//   register_post_type( 'test',
//     array(
//       'labels' => array(
//         'name' => __( 'Test' ),
//         'singular_name' => __( 'Test' )
//       ),
//       'taxonomies' => array('category'),
//       'public' => true,
//       'has_archive' => true,
//     )
//   );
// }


/**
 * Register our sidebars and widgetized areas.
 *
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


add_theme_support( 'custom-header' );


add_theme_support( 'custom-logo' );

add_theme_support( 'featured-content', array(
    'featured_content_filter' => 'mytheme_get_featured_content',
));

function register_my_menu() {
  register_nav_menu('top_nav',__( 'Top Navigation' ));
}
add_action( 'init', 'register_my_menu' );


add_theme_support( 'post-formats', array('gallery', 'image'));

?>
