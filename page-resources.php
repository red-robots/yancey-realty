<?php
/**
 * Template Name: Resources
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
					
				

				<?php $terms = get_terms( 'resource_type' );

				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

					foreach ( $terms as $term ) { ?>
						<section class="resource-nav">
						<ul>
							<li>
								<a href="<?php echo '#'.$term->slug; ?>"><?php echo $term->name; ?></a>
							</li>
						</ul>
							
						</section>
					<?php }

				    // $output .= '<ul class="category-list">';
				    foreach ( $terms as $term ) { ?>

				     
				        <h3><?php echo $term->name; ?></h3>

				            <?php $args = array(
				                'post_type'     => 'resource',
				                'resource_type' => $term->slug,
				                'posts_per_page' => -1,
				            );    

				            $the_query = new WP_Query( $args );

				            if ( $the_query->have_posts() ) { ?>
				                <section class="resources">
				                <?php while ( $the_query->have_posts() ) {
				                    $the_query->the_post(); ?>
				                    <div class="resource-card">
				                    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				                    	<div class="more"><a href="<?php the_permalink(); ?>">More Info</a></div>
				                    </div>
				                <?php } ?>
				                </section>
				           <?php } 
				            wp_reset_postdata(); ?>
				       
				    <?php } ?>
				   
				<?php } ?>

				</section>
				
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
</section>
<?php
// get_sidebar();
get_footer();
