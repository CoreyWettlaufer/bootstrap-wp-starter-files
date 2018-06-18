<?php
/*
***
**** This file is to set up sidebars/widget areas to be used in page templates
***
*/


// This widget is for the sidebar page template.
register_sidebar( array(
   'name' => __( 'Page Sidebar'),
   'id' => 'page-sidebar',
   'description' => __( 'This is the sidebar for pages' ),
   'before_widget' => '<div id="%1$s" class="widget">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
) );

// This widget is for the blog page template.
register_sidebar( array(
   'name' => __( 'Blog Sidebar'),
   'id' => 'blog-sidebar',
   'description' => __( 'This is the sidebar for the blog page' ),
   'before_widget' => '<div id="%1$s" class="widget">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
) );

register_sidebar( array(
   'name' => __( 'Header Block'),
   'id' => 'header-block',
   'description' => __( 'This is the header widget area' ),
   'before_widget' => '<div id="%1$s" class="widget">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
) );

?>
