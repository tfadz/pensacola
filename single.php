<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pensacola
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="container">
    <div class="row">
      <div class="col">
        <?php
        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/content-bio', get_post_type() );

          the_post_navigation(
            array(
              'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'pensacola' ) . '</span> <span class="nav-title">%title</span>',
              'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'pensacola' ) . '</span> <span class="nav-title">%title</span>',
            )
          );

        endwhile; // End of the loop.
        ?>
        
      </div>
      
    </div>
    
  </div>

	</main><!-- #main -->

<?php
get_footer();
