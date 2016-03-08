<?php
/**
 * The template used for displaying a category
 *
 * WP Category Template: Category Book Template
 *
 * @package _tk
 */
get_header(); ?>

  <?php if ( have_posts() ) : ?>
    <div style="perspective: 1000px;">


    <h1 class="text-center"><i class="fa fa-book"></i> Design Book Reviews</h1>
    <h3>
        These are my favorite Design, User Experience, Interface Design, Typography, and Lettering books organized and
        reviewed thoroughly for your enjoyment. Thanks for reading!
    </h3>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to overload this in a child theme then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', 'categorybookpost-alt2' );
      ?>

    <?php endwhile; ?>

    <?php _tk_content_nav( 'nav-below' ); ?>

  <?php else : ?>

    <?php get_template_part( 'no-results', 'index' ); ?>

  <?php endif; ?>

  </div>

<?php get_footer(); ?>