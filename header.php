<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-site-verification" content="KlcpEEJcZs33myeanXG8MozslPn5LxcEnvup6uSyh2k" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300,700italic' rel='stylesheet' type='text/css'> -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Montserrat:400,700' rel='stylesheet' type='text/css'>

	<script src="//load.sumome.com/" data-sumo-site-id="ee6912de897a76e2a407d9a5bdfcd7bd23297f16105ff9b8731d7c5d027bd6ce" async="async"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php


$args = array(
     'cat' => 21,
     'posts_per_page' => 1,
     'order' => 'DESC');

$my_query = new WP_Query($args);



if (is_page( 4 )) {
	print("<div class='home-splash'>
  <div class='box'>
    <h1>Design Books, Reviewed</h1>
    <!--h2>Knowledge is your most powerful tool.</h2-->
    <a class='btn btn-default btn-main' href='");

		while ($my_query->have_posts()) {
		  $my_query->the_post();
		  the_permalink();
		};

	print("'>Read the Latest Review</a>
	  </div>
	</div>");
}?>

<?php do_action( 'before' ); ?>

<nav class="site-navigation">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<?php
	/*
	LETS TRY NO NAVIGATION
	<div id="nav-bar" class="headroom">
				<div class="navbar navbar-default">
					<div class="navbar-header">
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- Your site title as branding in the menu -->
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php //bloginfo( 'name' ); ?>
							<i class="fa fa-bolt"></i>
						</a>
					</div>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'menu_class' 		=> 'nav navbar-nav',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>

		      <form class="navbar-form navbar-right search-form" role="search" _lpchecked="1"role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					  <div class="form-group">
					    <label>
					      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '_tk' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', '_tk' ); ?>">
					    </label>
					  </div>
					  <button type="submit" class="btn btn-default btn-navform"><i class="fa fa-search"></i></button>
					  <a href="https://twitter.com/weeklypixels" class="btn btn-default btn-navform"><i class="fa fa-twitter"></i></a>
					  <a href="https://www.facebook.com/weeklypixels/" class="btn btn-default btn-navform"><i class="fa fa-facebook-official"></i></a>
					</form>

				</div><!-- .navbar -->
	</div><!-- .container -->
</nav><!-- .site-navigation -->
*/
?>

<a class="navbar-brand-alt" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	<?php //bloginfo( 'name' ); ?>
	<i class="fa fa-bolt"></i> WEEKLY PIXELS
</a>

<ul class="wp-social-actions">
  <!-- <li><a href="mailto:ramijames@gmail.com" class="btn btn-default btn-sm-main-fixed "><i class="fa fa-book"></i> Suggest a Book</a></li> -->
  <li><a href="https://twitter.com/weeklypixels" class="btn btn-default btn-main"><i class="fa fa-twitter"></i></a></li>
  <li><a href="https://www.facebook.com/weeklypixels/" class="btn btn-default btn-main"><i class="fa fa-facebook-official"></i></a></li>
  <li><a href="http://www.weeklypixels.com/feed/" class="btn btn-default btn-main"><i class="fa fa-rss"></i></a></li>
</ul>

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12" style="height:100%;">

