<?php
/*
***
**** This file initiates theme setup
***
*/


if ( ! function_exists( 'custom_setup' ) ) :

    function custom_setup() {
        /**
         * Enable theme support features
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/
         */
        add_theme_support( 'title-tag' );

        add_theme_support( 'custom-header' );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'custom-background' );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

    } // end setup function
endif;
add_action( 'after_setup_theme', 'custom_setup' );

?>
