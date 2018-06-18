<?php

/*
***
**** This file is to set up all of the default menus that could be used throughout the site. If you need additional menus, please create them in the child theme.
***
*/

function register_my_menus() {
  register_nav_menus(array(
  'main-menu' => ('Main Menu'),
  'footer-menu' => ('Footer Menu'),
  ));
}
add_action( 'init', 'register_my_menus' );

?>
