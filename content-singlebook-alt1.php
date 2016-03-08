<?php
/**
 * @package _tk
 */
?>

<?php
	$currentrating = get_field( 'rating' );

	switch ($currentrating) {
	 	case '0':
	 		$output =  "<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>";
	 		break;

	 	case '1':
	 		$output =  "<i class='fa fa-star'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>";
	 		break;

	 	case '2':
	 		$output =  "<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>";
	 		break;

	 	case '3':
	 		$output =  "<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>";
	 		break;

	 	case '4':
	 		$output =  "<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>
	 								<i class='fa fa-star-o'></i>";
	 		break;

	 	case '5':
	 		$output =  "<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>
	 								<i class='fa fa-star'></i>";
	 		break;

	 	default:
	 		$output =  "<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>
	 								<i class='fa fa-star-o'></i>";
	 		break;
	 }

?>

<?php /* <a class="btn btn-default btn-main-fixed" href="<?php the_field('afflink'); ?>"><?php the_field('download_button_text'); ?></a> */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="bookpost-inner col-md-4 col-md-offset-4">
	    <a href="<?php the_field('afflink'); ?>">
	      <div class="bookpost-inner-image" style="background-image:url('<?php the_field("mainimage"); ?>');">
	        <?php //the_post_thumbnail(); ?>
	      </div>
	      <div class="bookpost-inner-image-cover"></div>
	      <div class="bookpost-inner-image-shine"></div>
	    </a>
	  </div>
	  <div class="col-md-12">
	  	<?php _tk_content_nav( 'nav-above' ); ?>
	  </div>
		<div class="col-md-12" id="bookbar">
			<header class="page-title-box-alt1" style="border-top:6px solid <?php the_field('bg_color'); ?>">
				<h3><?php print $output; ?></h3>
				<h2 class="page-title"><a href="<?php the_field('afflink'); ?>"><?php the_title(); ?></a></h2>
				<h4>By <?php the_field('author_button_text'); ?></h4>
			</header><!-- .entry-header -->
		</div>
	</div>
	<div class="row white-box" style="border-bottom:6px solid <?php the_field('bg_color'); ?>">
		<div class="col-md-7 col-md-offset-1">
			<div>
				<div class="entry-content">
					<div class="row">
						<?php the_content(); ?>
					</div>
				</div><!-- .entry-content -->
			</div>
		</div>
		<div class="col-md-3" style="padding-top:30px;">
			<a class="btn btn-default btn-main-amazon" style="width:100%; display:block" href="<?php the_field('afflink'); ?>"><?php the_field('download_button_text'); ?></a>
			<a class="btn btn-default btn-main-small" style="width:100%; display:block" href="http://amzn.to/1VPS0gc">Download TWO Free Audiobooks!</a>
			<a class="btn btn-default btn-main-small" style="width:100%; display:block" href="http://astore.amazon.com/weekly0a9-20"><i class="fa fa-shopping-cart"></i> The Weekly Pixels store</a>
			<div class="sidebar-box">
				<h5>The Top<br>Recommended<br>Books</h5>
				<?php echo do_shortcode("[rpwe limit='5' date='false' cat='21']"); ?>
			</div>
		</div>
		<hr>
		<div class="row ">
			<div class="col-md-10 col-md-offset-1">
				<h4 class="text-center"><?php the_title(); ?></h4>
				<h4><a class="btn btn-default btn-main centered" style="width:400px; margin:0 auto; display:block" href="<?php the_field('afflink'); ?>"><?php the_field('download_button_text'); ?></a></h4>
				<h5 class="text-center"><a href="http://astore.amazon.com/weekly0a9-20">All the reviewed books can be purchased online here</a></h5>
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
				<br>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
