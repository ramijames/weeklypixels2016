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
<div class="row">
	<div class="col-md-12">
		<?php _tk_content_nav( 'nav-above' ); ?>
	</div>
</div>
<div class="row page-title-box-alt2" style="border-top:6px solid <?php the_field('bg_color'); ?>">
	<div class="col-md-3">
		<div class="bookpost-inner-alt1">
			<h1 class="mobile-show"><?php the_title(); ?></h1>
	    <a href="<?php the_field('afflink'); ?>">
	      <div class="bookpost-inner-alt1-image mobile-hide" style="background-image:url('<?php the_field("mainimage"); ?>');">
	        <?php //the_post_thumbnail(); ?>
	      </div>
	      <div class="bookpost-inner-alt1-image-cover mobile-hide"></div>
	      <div class="bookpost-inner-alt1-image-shine mobile-hide"></div>
	    </a>
	  </div>
	  <a class="btn btn-default btn-main-amazon" href="<?php the_field('afflink'); ?>"><?php the_field('download_button_text'); ?></a>
	  <hr>
		<div class="sidebar-box mobile-hide">
			<h5>The Top<br>Recommended<br>Books</h5>
			<?php echo do_shortcode("[rpwe limit='5' date='false' cat='21']"); ?>
		</div>
		<a class="btn btn-default btn-main-small mobile-hide" style="width:100%;" href="http://amzn.to/1VPS0gc">Download TWO Free Audiobooks!</a>
		<a class="btn btn-default btn-main-small mobile-hide" style="width:100%;" href="http://astore.amazon.com/weekly0a9-20"><i class="fa fa-shopping-cart"></i> The Weekly Pixels store</a>
	</div>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-12 summary">
				<h5>Quick Summary</h5>
				<h4 style="color:#999"><?php the_field('summary'); ?></h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<header>
					<h5 class="mobile-hide">Title<br>
						<small><?php the_title(); ?></small>
					</h5>
					<h5>
						Author<br>
						<small><?php the_field('author_button_text'); ?></small>
					</h5>
					<h5 class="mobile-hide">
						Rating<br>
						<small><?php print $output; ?></small>
					</h5>
				</header><!-- .entry-header -->
			</div>
			<div class="col-md-10">
				<h5 class="mobile-hide">The Review</h5>
				<h1 class="mobile-hide"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php /* <a class="btn btn-default btn-main-fixed" href="<?php the_field('afflink'); ?>"><?php the_field('download_button_text'); ?></a> */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">


		<div class="col-md-12" id="bookbar">

		</div>
	</div>
	<div class="row" style="border-bottom:6px solid <?php the_field('bg_color'); ?>">
		<div class="col-md-7 col-md-offset-1">
			<div>

			</div>
		</div>
		<div class="col-md-3" style="padding-top:30px;">

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
