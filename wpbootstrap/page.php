<!-- This is the code structure for the default sub-pages. If you need to change the structure/layout of the page plese create a page.php in your child theme. -->
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<!--
	   Use this section if you have a static featured image at the top of your page with text.
	-->

	<?php
		if(has_post_thumbnail()) {
			echo '<div class="mast page-mast">';
				the_post_thumbnail();

				$mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
	            $mast_description = get_post_meta( get_the_ID(), 'mast_description', true );

				if( empty($mast_title) ) {
	                $mast_title =  the_title('<h1>', '</h1>', false);
	            }

				echo '<div class="container mast-overlay">';
					echo '<h1>'.$mast_title.'</h1>';

					if( !empty($mast_description) ) {
						echo wpautop( $mast_description );
					}
				echo '</div>'; // End of mast-overlay container
			echo '</div>'; // End of page-mast container
		}
	 ?>

	 <!--
  	<div class="mast page-mast">
  	    <?php/*
      	    if( has_post_thumbnail() ) {
      	        the_post_thumbnail();
      	    } else {
      	        echo '<img src="'. home_url() . '/wp-content/uploads/2018/01/Banner5.jpg" />';
      	    }

              $mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
              $mast_description = get_post_meta( get_the_ID(), 'mast_description', true );

              if( empty($mast_title) ) {
                  $mast_title =  the_title('<h1>', '</h1>', false);
              }
  	    ?>
          <div class="container mast-overlay">
              <?php
                  echo $mast_title;

                  if( !empty($mast_description) ) {
                      echo wpautop( $mast_description );
                  }
              ?>
          </div>
  	</div>
-->


   <!--
      Use this section if you have a static featured image at the top of your page with NO text
   -->
   <?php
      /*if(has_post_thumbnail) {
         ?>
         <div class="container-fluid padding0 featuredImage">
            <?php //the_post_thumbnail(); ?>
         </div>
         <?php
      }*/
   ?>

    <div id="fullWidth">
        <?php the_content(); ?>
    </div>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
