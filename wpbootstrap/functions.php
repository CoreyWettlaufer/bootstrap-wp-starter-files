<?php
define("THEME_DIR", get_template_directory_uri() . '/');

include(dirname(TEMPLATEPATH).'/wpbootstrap/admin/theme-setup.php');
include(dirname(TEMPLATEPATH).'/wpbootstrap/admin/header-mast.php');
include(dirname(TEMPLATEPATH).'/wpbootstrap/admin/enqueue-styles.php');
include(dirname(TEMPLATEPATH).'/wpbootstrap/admin/enqueue-scripts.php');
include(dirname(TEMPLATEPATH).'/wpbootstrap/admin/sidebars.php');
include(dirname(TEMPLATEPATH).'/wpbootstrap/admin/menus.php');
include(dirname(TEMPLATEPATH).'/wpbootstrap/admin/shortcodes/short-codes.php');


/* Site Logo (used in the Appearance -> Customize settings) */
function ns_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'ns_custom_logo_setup' );

// Custom Excerpt Length and Read More Tag
function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag read-more-btn" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*
 * CUSTOM EXCERPT LENGTH
*/
function new_excerpt_length($length) {
    return 50;
}
add_filter('excerpt_length', 'new_excerpt_length', 199);

/*
 * MOVE YOAST TO BOTTOM
 */
function yoasttobottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');



remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);
