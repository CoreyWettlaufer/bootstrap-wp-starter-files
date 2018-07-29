<?php

/*
***
**** This file is used to enqueue all the styles for the parent theme. If you need to enqueue fonts from Google fonts, take the commented out lines and add them into your child themes functions.php file.
***
*/

// Enqueue Styles and Google Fonts
function custom_styles() {
    // Normalize
    wp_enqueue_style( 'normalize', get_bloginfo('template_url') . '/css/normalize.css');
    // Bootstrap CDN
    wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array('normalize'), false);
    wp_enqueue_style( 'parent_css', get_bloginfo('template_url') . '/main.css', array('bootstrap_css'), false);
    //wp_enqueue_style( 'Oswald', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700' );
    //wp_enqueue_style( 'OpenSansCondensed', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700' );
}
add_action('wp_enqueue_scripts', 'custom_styles', 20);



/* Need to fix this file to fix the order of the css files being called. See NetGain functions for this. */
?>
