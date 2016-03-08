<?php
/**
 * @package _tk
 */

/*
 Template Name: Weekly Pixels Homepage - Alt 1
 *
*/


get_header(); ?>

  <div class="row white-box">
    <div class="col-md-12">
      <!-- <h1 class="text-center"><i class="fa fa-book"></i> Design Book Reviews</h1>
      <h3>
        Design Books, User Experience Books, Interface Design Books, Typography Books, and Lettering Books &mdash; organized and
        reviewed so you know what to buy. Thanks for reading!
      </h3> -->
      <!-- <h1 class="text-center"><i class="fa fa-book"></i> Read the Reviews</h1> -->
      <h3>Design Books, User experience books, UX processes, Graphic Design Books, Typography books, Lettering books &mdash; Leverage your knowledge and improve your skillset.</h3>
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
  </div>
</div>
</div>
</div>

<?php /*
<div class="container">
  <div class="row white-box">
    <div class="col-md-12">
      <h1 class="text-center"><i class="fa fa-bolt"></i> Sketch Freebies</h1>
      <h3>
        Fresh Sketch freebies, helping you get your work done just a little faster so you can go out and play.
      </h3>

      <?php
        // I love WordPress so
        query_posts("cat=6");
      ?>

      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            get_template_part( 'content', 'freebiepost' );
          ?>

        <?php endwhile; ?>

        <?php _tk_content_nav( 'nav-below' ); ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'index' ); ?>

      <?php endif; ?>
    </div>
  </div>
*/ ?>



<?php get_footer(); ?>
