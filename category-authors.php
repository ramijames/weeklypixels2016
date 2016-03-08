<?php
/**
 * The template used for displaying a category
 *
 * WP Category Template: Category Authors Template
 *
 * @package _tk
 */
get_header(); ?>

  <?php if ( have_posts() ) : ?>
    <div style="perspective: 1000px;">


    <h1 class="text-center"><i class="fa fa-book"></i> Authors we have Reviewed</h1>
    <h3>
        The authors behind these fantastic books merit a deeper look.
    </h3>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to overload this in a child theme then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', 'categoryauthors' );
      ?>

    <?php endwhile; ?>

    <?php _tk_content_nav( 'nav-below' ); ?>

  <?php else : ?>

    <?php get_template_part( 'no-results', 'index' ); ?>

  <?php endif; ?>

  </div>

<?php get_footer(); ?>