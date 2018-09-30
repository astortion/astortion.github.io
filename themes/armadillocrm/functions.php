<?php
/*
 *  Author: Armadillo CRM
 *  URL: armadillocrm.com
 *  Custom functions.
 */

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 1000, '', true); // Large Thumbnail
    add_image_size('medium', 700, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('blog', 720, 440, true); 
    add_image_size('featured_2_col', 800, 568, true); 
    add_image_size('staff', 480, 300, true);

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

}

/*------------------------------------*\
	Armadillo Functions
\*------------------------------------*/

add_theme_support( 'post-thumbnails' );

if( function_exists('acf_add_options_page') ) {
    $option_page = acf_add_options_page(array(
        'page_title' 	=> 'Site Options',
        'menu_title' 	=> 'Site Options',
        'menu_slug' 	=> 'site-options',
        'capability' 	=> 'edit_posts',
        'redirect' 	=> false
    ));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Settings',
		'menu_title'	=> 'Social options',
		'parent_slug'	=> 'site-options',
	));
}

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

function staff_init() {
    register_post_type( 'staff',
        array(
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-smiley',
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'hierarchical' => true,
        'can_export' => true,
        'supports' => array( 'title', 'page-attributes', 'editor', 'thumbnail' ),
        'labels' => array(
            'name' => __( 'Staff' ),
            'singular_name' => __( 'Staff' ),
            'add_new' => __( 'Add New' ),
            'add_new_item' => __( 'Add New Colleague' ),
            'edit' => __( 'Edit' ),

            'edit_item' => __( 'Edit Colleague' ),
            'new_item' => __( 'New Colleague' ),
            'view' => __( 'View Staff' ),
            'view_item' => __( 'View Colleague' ),
            'search_items' => __( 'Search Staff' ),
            'not_found' => __( 'No staff found' ),
            'not_found_in_trash' => __( 'No staff found in Trash' ),
            'parent' => __( 'Parent staff' ),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'staff'),
    )
  );
}
add_action( 'init', 'staff_init' );

/*------------------------------------*\
    Enqueue functions
\*------------------------------------*/

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
    function my_jquery_enqueue() {
        wp_deregister_script('jquery');
        wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js", false, null);
        wp_register_script('global', get_bloginfo('stylesheet_directory')."/js/global.js", false, null);
        wp_enqueue_script('jquery');
        wp_enqueue_script('global');
    }
?>
