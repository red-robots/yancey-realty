<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href="https://fonts.googleapis.com/css?family=Oswald:300,600|Droid+Serif:400,700italic" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-87DrmpqHRiY8hPLIr7ByqhPIywuSsjuQAfMXAE0sMUpY3BM7nXjf+mLIUSvhDArs" crossorigin="anonymous"> -->
<script src="https://kit.fontawesome.com/30f45b415e.js" crossorigin="anonymous"></script>

<?php wp_head();

$street = get_field('street_address', 'option');
$city = get_field('city', 'option');
$state = get_field('state', 'option');
$zip = get_field('zip', 'option');
$email = get_field('general_email', 'option');
$phone = get_field('main_phone', 'option');

$streetT = get_field('street_address_2', 'option');
$cityT = get_field('city_2', 'option');
$stateT = get_field('state_2', 'option');
$zipT = get_field('zip_2', 'option');
// $email = get_field('general_email', 'option');
$phoneT = get_field('main_phone_2', 'option');

?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<div class="toolbar">
	<div class="wrapper-nopad ">
		<div class="tool-flex">
			<div class="phonenum">
			<?php if($street) {echo $street . ' ';} ?>
						<?php if($city) {echo $city. ', '.$state.' '.$zip.' | '.$phone;} ?>
			</div>
			<div class="phonenum">
			<?php if($streetT) {echo $streetT . ' ';} ?>
						<?php if($cityT) {echo $cityT. ', '.$stateT.' '.$zipT.' | '.$phoneT;} ?>
			</div>
		</div>
	</div>
</div>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper flexwrap">

			<?php if(is_home()) { ?>
	            <h1 class="logo">
		            <a href="<?php bloginfo('url'); ?>">
		            	<img src="<?php bloginfo('template_url'); ?>/images/yancey-realty-logo.png" alt="Yancey Realty">
		            </a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo">
		            <a href="<?php bloginfo('url'); ?>">
		            	<img src="<?php bloginfo('template_url'); ?>/images/yancey-realty-logo.png" alt="Yancey Realty">
		            </a>
	            </div>
	        <?php } ?>
	        <section class="navs">
	        	<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>


				</nav><!-- #site-navigation -->


	        </section>
		</div><!-- wrapper -->

		<div id="SEARCH-FORM" class="siteSearchForm">
			<div class="search-form-wrap">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label for="search"><?php _e( 'Search&hellip;', 'acstarter' ); ?></label>
					<input type="search" id="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search here..." />
					<button type="submit" class="search-submit" aria-label="Submit Search"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content ">

