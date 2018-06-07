<?php
function my_theme_enqueue_styles() {
    $parent_style = 'parent_css';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/main.css' );
    wp_enqueue_style( 'child_main',
        get_stylesheet_directory_uri() . '/main.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    // Google Fonts
    //wp_enqueue_style( 'Oswald', 'https://fonts.googleapis.com/css?family=Oswald:300,400,700' );
    //wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i' );
    //wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css?family=Lato' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function ns_child_scripts() {
    //wp_enqueue_script( 'child-custom', get_bloginfo('template_url') . '/js/custom.js', 'jquery', '1.6.0', true );
}
add_action( 'wp_enqueue_scripts', 'ns_child_scripts' );
