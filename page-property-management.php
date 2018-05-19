<?php
/**
 * Template Name: Property Management
 */

get_header(); ?>
<div id="content-wrap">
	<div class="wrapper">
		<div id="primary" class="content-area-full">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post(); 

				$link = get_field('link_to_buildium');
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

					<h3>Apply to get pre-qualified for a lease.</h3>
					<div class="more">
						<a href="<?php echo $link; ?>" target="_blank">Apply</a>
					</div>

					
				</article><!-- #post-## -->

				<?php endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
// get_sidebar();
get_footer();
