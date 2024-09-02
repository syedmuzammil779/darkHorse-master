<?php 
// Menu Container
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
// Social Media
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme General Settings'),
            'menu_title'  => __('Theme Settings'),
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Social Settings'),
            'menu_title'  => __('Social Media Info'),
            'parent_slug' => $parent['menu_slug'],
        ));
        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Clients Settings'),
            'menu_title'  => __('Clients Media Info'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}