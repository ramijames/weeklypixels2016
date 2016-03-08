<?php
/**
 * @package _tk
 */

/*
 Template Name: Book Category Page Template
 *
*/


get_header(); ?>

  <h5><a href="http://www.weeklypixels.com/books/"><i class="fa fa-chevron-left"></i> Back to all Books</a></h5>
  <hr>

  <?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to overload this in a child theme then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', 'singlebook' );
      ?>

    <?php endwhile; ?>

    <?php _tk_content_nav( 'nav-below' ); ?>

  <?php else : ?>

    <?php get_template_part( 'no-results', 'index' ); ?>

  <?php endif; ?>

<?php get_footer(); ?>
