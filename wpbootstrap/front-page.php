<!-- This is the code structure for the front page. If you need to change the structure/layout of the front page plese create a front-page.php in your child theme. -->
<?php get_header(); ?>
<?php
while ( have_posts() ) : the_post();
    if(has_post_thumbnail()) {
        echo '<div class="mast page-mast">';
            the_post_thumbnail();

            $mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
            $mast_description = get_post_meta( get_the_ID(), 'mast_description', true );

            if( !empty($mast_title) ) {
                echo '<div class="container mast-overlay">';
                    echo '<h1>'.$mast_title.'</h1>';

                    if( !empty($mast_description) ) {
                        echo wpautop( $mast_description );
                    }
                echo '</div>'; // End of mast-overlay container
            }
        echo '</div>'; // End of page-mast container
    }
 ?>

    <div id="mainContent">
        <?php the_content(); ?>
    </div>

<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
