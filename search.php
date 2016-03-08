<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package _tk
 */
get_header(); ?>

	<div class="row">
		<div class="col-md-12">
			<header>
				<h3 class="page-title"><?php printf( __( 'Search Results for: %s', '_tk' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->
		</div>
	</div>

  <?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to overload this in a child theme then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', 'homepagepost' );
      ?>

    <?php endwhile; ?>

    <?php _tk_content_nav( 'nav-below' ); ?>

  <?php else : ?>

    <?php get_template_part( 'no-results', 'search' ); ?>

  <?php endif; ?>

<?php get_footer(); ?>