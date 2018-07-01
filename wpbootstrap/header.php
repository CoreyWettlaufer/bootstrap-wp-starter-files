<!--
***
**** This is the header file. If you need a different header layout, please create a new header.php file in the child theme for modification.
***
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!--<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png" />-->
      <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>
      <header class="container-fluid">
         <div class="container">
            <div class="row justify-content-between padding20">
               <div class="logo align-self-center">
                  <a href="<?php echo home_url(); ?>">
                     <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                           the_custom_logo();
                        }
                     ?>
                     <!--<img src="<?php //bloginfo('template_url'); ?>/img/logo.png" alt="">-->
                  </a>
               </div>

               <!--
               <div class="stickylogo">
                  <a href="<?php //echo home_url(); ?>">
                     <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Company Logo">
                     <img src="<?php //bloginfo('template_url'); ?>/img/logo-sticky.png" alt="">
                  </a>
               </div>
            -->

               <div class="header-block d-flex flex-column justify-content-center align-self-stretch">

                 <?php dynamic_sidebar('header-block'); ?>
                 <div class="header-nav row padding10">

                    <div class="mobile-icons">
                       <a href="javascript:void(0);" id="navToggle" class="nav-toggle">
                          <i class="fa fa-bars"></i>
                          <span>MENU</span>
                       </a>
                       <a href="javascript:void(0);" class="nav-phone" data-toggle="modal" data-target="#popPhoneForm">
                          <i class="fa fa-phone"></i>
                          <span>CALL</span>
                       </a>

                       <a href="<?php echo home_url(); ?>/contact/" class="nav-contact">
                          <i class="fa fa-envelope"></i>
                          <span>CONTACT</span>
                       </a>
                    </div>

                    <nav id="mainNav" class="mobile-nav" role="navigation">
                       <a href="javascript:void(0);" class="get-quote primaryButton" data-toggle="modal" data-target="#popForm">Contact Button</a>
                       <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
                    </nav>

                 </div>

               </div>
            </div>

          </div>
      </header>

      <main>
