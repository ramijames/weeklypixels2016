<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<div class="col-md-12">

		<h1 class="text-center"><i class="fa fa-question-circle"></i> These are not the droids you are looking for</h1>
    <h3>Weekly Pixels used to house PSD freebies, but we've moved on. Maybe you'd like to read a Design Book Review instead?</h3>

	</div>
	<div class="col-md-12">
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
            get_template_part( 'content', 'categorybookpost-alt2' );
          ?>

        <?php endwhile; ?>

        <?php _tk_content_nav( 'nav-below' ); ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'index' ); ?>

      <?php endif; ?>
	</div>

<?php get_footer(); ?>