<?php
/**
 * @package _tk
 */

/*
 Template Name: Weekly Pixels Homepage
 *
*/


get_header(); ?>

  <div class="row">
    <div class="col-md-8">
      <h2><i class="fa fa-book"></i> Design Book Reviews</h2>
      <hr>
      <?php
        // I love WordPress so
        query_posts("cat=21");
      ?>

      <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            /* Include the Post-Format-specific template for the content.
             * If you want to overload this in a child theme then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', 'bookpost' );
          ?>

        <?php endwhile; ?>

        <?php _tk_content_nav( 'nav-below' ); ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'index' ); ?>

      <?php endif; ?>
    </div>
    <div class="col-md-4">
      <h2><i class="fa fa-bolt"></i> Sketch Freebies</h2>
      <hr>
      <?php
        // I love WordPress so
        query_posts("cat=6");
      ?>

      <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            /* Include the Post-Format-specific template for the content.
             * If you want to overload this in a child theme then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', 'freebiepost' );
          ?>

        <?php endwhile; ?>

        <?php _tk_content_nav( 'nav-below' ); ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'index' ); ?>

      <?php endif; ?>
    </div>
  </div>




<?php get_footer(); ?>
