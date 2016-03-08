<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-md-12">
			<header class="page-title-box">
				<h1 class="page-title pull-left"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="">
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>
</article><!-- #post-## -->
