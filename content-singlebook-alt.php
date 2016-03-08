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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<hr>
	<div class="row">
		<div class="col-md-4" id="bookbar">
			<header class="page-title-box">
				<h5><a href="http://www.weeklypixels.com/books/">Design Book Reviews</a></h5>
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
			<h4>By <?php the_field('author_button_text'); ?></h4>
			<h4>Rating - <?php print $output; ?></h4>
			<h4><a class="btn btn-default btn-main" href="<?php the_field('afflink'); ?>"><?php the_field('download_button_text'); ?></a></h4>
			<a class="btn btn-default btn-sm" href="http://astore.amazon.com/weekly0a9-20"><i class="fa fa-shopping-cart"></i> The Weekly Pixels store</a>
			<hr>
			<?php echo do_shortcode("[rpwe limit='3' date='false' cat='21']"); ?>
		</div>
		<div class="col-md-8">
			<div class="book-topimage" style="background-image: url(<?php the_field('mainimage'); ?>);"></div>
			<div class="main-content">
				<div class="entry-content">
					<div class="row">
						<?php the_content(); ?>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center"><?php the_title(); ?></h4>
							<h4><a class="btn btn-default btn-main centered" style="width:400px; margin:0 auto; display:block" href="<?php the_field('afflink'); ?>"><?php the_field('download_button_text'); ?></a></h4>
							<hr>
							<h5 class="text-center"><a href="http://astore.amazon.com/weekly0a9-20">All the reviewed books can be purchased online here</a></h5>
							<hr>
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
						</div>
					</div>
				</div><!-- .entry-content -->
			</div>
		</div>
		<div class="col-md-4">

		</div>
	</div>
</article><!-- #post-## -->
