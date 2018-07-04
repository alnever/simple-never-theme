<?php

/*
Theme features
*/

// Post thumbnails support
add_theme_support( 'post-thumbnails' );

// Register sidebars
add_action( 'widgets_init', 'simple_never_widgets_init' );

function simple_never_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Left Sidebar' ),
        'id'            => 'left_sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}

// register menu
add_action( 'init', 'register_menus' );

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
      //,'extra-menu' => __( 'Extra Menu' )
     )
   );
}


?>