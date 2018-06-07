<?php
/*
***
**** This file is used to enqueue all the javascript files for the site. If you have any custom javascript you need in your child theme, please create a customjs.js file in your child theme. You will need to enqueue this new file from your child themes functions.php file.
***
*/


// Enqueue Scripts
function custom_scripts() {
   wp_enqueue_script("jquery");
    wp_enqueue_script('popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', 'jquery', true);
    wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', 'popper_js', true);
    wp_enqueue_script( 'custom_js', get_bloginfo('template_url') . '/js/custom.js', 'jquery', true );
}
add_action('wp_enqueue_scripts', 'custom_scripts');

?>
