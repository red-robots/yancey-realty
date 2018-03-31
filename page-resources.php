<?php
/**
 * Template Name: Resources
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

					<div class="entry-content center">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

					
				</article><!-- #post-## -->

				<section class="resources">
					<?php if(have_rows('resources')) : ?>
						<?php while(have_rows('resources')) :the_row(); ?>
							<div class="col">
								<h3><?php the_sub_field('section_title'); ?></h3>

								<?php if(have_rows('resource')) : ?>
									<?php while(have_rows('resource')) :the_row(); 

										$title = get_sub_field('resource_title');
										$link = get_sub_field('resource_link');

									?>
										<div class="resource-link">
											<a href="<?php echo $link; ?>"><?php echo $title; ?></a>
										</div>
							</div>
									<?php endwhile; ?>
								<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>
				</section>

				<?php endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
// get_sidebar();
get_footer();
