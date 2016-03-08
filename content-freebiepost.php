<div class="freebie homepage-post col-md-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
      <div class="entry-content-thumbnail">
        <a href="<?php the_permalink(); ?>" style="background-image:url(<?php the_field('mainimage'); ?>); background-size: cover; background-position: center center;">
          <?php //the_post_thumbnail(); ?>
          <h5 class="page-title"><?php the_title(); ?></h5>
        </a>
      </div>

    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php //the_content(); ?>
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
          'after'  => '</div>',
        ) );
      ?>
    </div><!-- .entry-content -->
    <?php //edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
  </article><!--  post-## -->
</div>