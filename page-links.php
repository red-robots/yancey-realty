<?php
/**
 * Template Name: Useful Links
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<section class="grey-bg">
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

				<?php endwhile; // End of the loop. ?>

				<section class="resources">
					
					<?php $args = array(
			                'post_type'     => 'useful_link',
			                'posts_per_page' => -1,
			            );    

				            $the_query = new WP_Query( $args );

				            if ( $the_query->have_posts() ) : ?>
				                <section class="resources">
				                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
				                	$info=get_field('contact_info');
									$website=get_field('website');
									?>
				                    <div class="resource-card">
				                    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				                    	<?php if($info) { ?>
											<div class="item bump">
												<div class="title">Contact Info</div><br>
												<?php echo $info; ?>
											</div>
										<?php } ?>
			
									<?php if($website) { ?>
				                    	<div class="more">
				                    		<a href="<?php echo $website; ?>" target="_blank">Visit Website</a>
				                    	</div>
				                    <?php } ?>



				                    </div>
				                <?php endwhile; ?>
				                </section>
				           <?php endif;
				            wp_reset_postdata(); ?>
				       
				  

				</section>
				
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
</section>
<?php
// get_sidebar();
get_footer();
