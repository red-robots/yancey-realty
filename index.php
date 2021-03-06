<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

<div id="primary" class="content-area-full">
	<main id="main" class="site-main" role="main">


	<div class="hero">
		<img src="<?php bloginfo('template_url'); ?>/images/carolina-mashup.png" alt="">

		<h2 class="tagline">
			<?php bloginfo('description'); ?>
		</h2>

		<div class="prop-search">
			<?php 
			get_template_part('inc/home-property-search');
			//if ( is_active_sidebar( 'sidebar-search' ) ) {dynamic_sidebar( 'sidebar-search' );} ?>
		</div>

		

	</div>

	<section class="grey-bg common">
		<section class="agents-home">
			<div class="wrapper">
				<h2>Our Agents</h2>
				<?php get_template_part('template-parts/agent-cards'); ?>
			</div>
		</section>
	</section>

	<section class="home-featured-listings common">
		<div class="wrapper">
			<h2>Featured Listings</h2>
			<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-12572" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=12572"></script>
		</div>
	</section>

	

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
