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
				$pay_rent_link = get_field('pay_rent_link');
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->


				<div class="prop-manage">
					<?php if( $link ) { ?>
						<div class="link">
							<h3>Apply to get pre-qualified for a lease.</h3>
							<div class="more">
								<a href="<?php echo $link; ?>" target="_blank">Apply</a>
							</div>
						</div>
					<?php } ?>

					<?php if( $pay_rent_link ) { ?>
						<div class="link">
							<h3>Log In. Pay Rent.</h3>
							<div class="more">
								<a href="<?php echo $pay_rent_link; ?>" target="_blank">Pay Rent</a>
							</div>
						</div>
					<?php } ?>
					</div>



				<?php endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
// get_sidebar();
get_footer();
