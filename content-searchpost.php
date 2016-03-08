<div class="homepage-post col-md-4">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
      <div class="entry-content-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      </div>
      <div class="tags">
        <?php the_tags( '','',''); ?>
      </div>
      <h3 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php //the_content(); ?>
      <?php the_field('summary'); ?>
      <div class="thedate">
        <i class="fa fa-clock-o"></i><?php the_date(); ?>
      </div>
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