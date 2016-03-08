<div class="book-post">
  <div class="bookpost col-md-3">
    <a href="<?php the_permalink(); ?>">
      <div class="bookpost-image" style="background-image:url('<?php the_field("mainimage"); ?>');">
        <?php //the_post_thumbnail(); ?>
      </div>
      <div class="bookpost-image-cover"></div>
      <div class="bookpost-image-shine"></div>
    </a>
    <span class="page-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </span>
  </div>
  <?php
  /*<div class="col-md-9">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header>
        <h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
  </div>*/ ?>
</div>