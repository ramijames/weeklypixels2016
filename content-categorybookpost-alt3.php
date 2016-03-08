
<div class="book-post">
  <div class="bookpost col-md-6  col-xs-12">
    <div class="col-md-12">
      <a href="<?php the_permalink(); ?>">
        <div class="bookpost-image" style="background-image:url('<?php the_field("mainimage"); ?>');">
          <?php //the_post_thumbnail(); ?>
        </div>
        <div class="bookpost-image-cover mobile-hide"></div>
        <div class="bookpost-image-shine mobile-hide"></div>
        <div class="bookpost-button mobile-hide">Read the Review</div>
      </a>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <h5><?php the_field('summary'); ?></h5>
      <a class="btn btn-default btn-main mobile-show" href="<?php the_permalink(); ?>">Read the Review</a>
    </div>
  </div>
</div>