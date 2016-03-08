<?php
/**
 * @package _tk
 */
?>

<div class="pagenav">
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-navlinks">' . __( 'Pages:', '_tk' ),
			'after'  => '</div>',
		) );
	?>
</div>
<div class="topimage" style="background-image: url(<?php the_field('mainimage'); ?>);"></div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-md-12">
			<header class="page-title-box">
				<h1 class="page-title pull-left"><?php the_title(); ?></h1>
				<a class="btn btn-default btn-main pull-right" href="<?php the_field('afflink'); ?>"><?php the_field('download_button_text'); ?> <i class="fa fa-cloud-download"></i></a>
			</header><!-- .entry-header -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="main-content">
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</div>
		</div>
		<div class="col-md-4">
			<div class="left-sidebar">
				<div class="entry-meta">
				<h4>About this Item</h4>
				<?php if (get_field( 'original_item' ) && get_field( 'author_button_text' ) != "") { ?>
				    <h5>Author Link</h5>
				    <a class="btn btn-default" href="<?php the_field('original_item'); ?>"><?php the_field('author_button_text'); ?> <i class="fa fa-chevron-circle-right"></i></a>
					<?php } ?>
					<h5>Tags</h5>
					<div class="tags">
		        <?php the_tags( '<ul><li>','</li><li>','</li></ul>'); ?>
		      </div>
				</div><!-- .entry-meta -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<script type="text/javascript">
		  amzn_assoc_placement = "adunit0";
		  amzn_assoc_enable_interest_ads = "true";
		  amzn_assoc_tracking_id = "weekly0a9-20";
		  amzn_assoc_ad_mode = "auto";
		  amzn_assoc_ad_type = "smart";
		  amzn_assoc_marketplace = "amazon";
		  amzn_assoc_region = "US";
		  amzn_assoc_textlinks = "";
		  amzn_assoc_linkid = "1e35d416d2e172854969c2374969ed1d";
		  amzn_assoc_emphasize_categories = "1000";
		  amzn_assoc_fallback_mode = {"type":"search","value":"user experience, UX, design, typography, graphic design"};
		  amzn_assoc_default_category = "Books";
		  </script>
		  <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
			<footer class="entry-meta">
				<?php
					/* translators: used between list items, there is a space after the comma */
					$category_list = get_the_category_list( __( ', ', '_tk' ) );

					/* translators: used between list items, there is a space after the comma */
					$tag_list = get_the_tag_list( '', __( ', ', '_tk' ) );

					printf(
						$meta_text,
						$category_list,
						$tag_list,
						get_permalink(),
						the_title_attribute( 'echo=0' )
					);
				?>
			</footer><!-- .entry-meta -->
		</div>
	</div>
</article><!-- #post-## -->
