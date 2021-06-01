<?php
add_filter('show_admin_bar', '__return_false');
//add_theme_support('menus');

register_nav_menus( array(
    'primary' => 'Main Menu',
    'footer_menu' => 'Footer Menu',
));

// Languages switch
add_filter( 'pll_the_languages_args', function( $args ) {
    $args['display_names_as'] = 'slug';
    return $args;
} );

// Add Options page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Options page',
        'menu_title'	=> 'Options',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}

// Add Thumbnail Theme Support
if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
    add_image_size('small', 300, '', true);
    add_image_size('medium', 600, '', true);
    add_image_size('large', 1000, '', true);
    add_image_size('large2', 1500, '', true);
    add_image_size('large3', 1920, '', true);
}
