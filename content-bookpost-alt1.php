<div class="book-post">
    <div class="row">
      <div class="col-md-12">
        <div class="entry-content-thumbnail">
          <a class="main-image" href="<?php the_permalink(); ?>" style="background-image:url(<?php the_field('mainimage'); ?>); background-size: cover; background-position: center center;">
            <?php //the_post_thumbnail(); ?>
            <h3 class="page-title">
              <?php the_title(); ?><br>
              <small>
                By <?php the_field('author_button_text'); ?><br>
              </small>
            </h3>
          </a>
          <div class="wp-home-entry-content-summary">
            <?php the_field('summary'); ?><br>
            <div class="tags">
              <?php the_tags( '<ul><li>','</li><li>','</li></ul>'); ?>
            </div>
            <a class="btn btn-default btn-sm btn-main-small" href="<?php the_permalink(); ?>">Read the Review <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content">
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
    </div>
</div>