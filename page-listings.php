<?php
/**
 * Template Name: Listings
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div id="content-wrap">
	<div class="wrapper">
		<div id="primary" class="content-area-full">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

					
				</article><!-- #post-## -->

				<?php endwhile; // End of the loop.
				?>
				
					
				
				

				<section class="home-featured-listings common">
					<div class="wrapper">
						<h2>Featured Listings</h2>
						<?php echo do_shortcode('[idx mylistings="1"]'); ?>
					</div>
				</section>

				<div class="propsearch-page">
						<?php get_template_part('inc/home-property-search'); ?>
					</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
// get_sidebar();
get_footer();
