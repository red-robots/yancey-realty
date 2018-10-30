<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); ?>
<div id="content-wrap">
	<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				 
				<div class="entry-meta">
					<?php //acstarter_posted_on(); ?>
				</div><!-- .entry-meta -->
				 
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content --> 

			<footer class="entry-footer">
				<?php acstarter_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->

			<?php the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		 endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="widget-area">
	<?php
	$theID = get_the_ID();
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'subdivision',
	'posts_per_page' => -1,
	'post__not_in' => array( $theID )
	// 'paged' => $paged,
));
	if ($wp_query->have_posts()) : ?>
    <h3>Other Subdivisions &amp; Complexes</h3>
    <section class="developments grey-bg">
    	<div class="wrapper">
        	
        		<?php while ($wp_query->have_posts()) : $wp_query->the_post();
			    	
			    	$agent = get_field('agent');
			    	$form_chooser = get_field('form_chooser');
			    	$floor_plans = get_field('floor_plans');

			    	// echo '<pre>';
			    	// print_r($agent);
			    	// echo '</pre>';

			    ?>

				    <div class="development ">
				    <h2><?php the_title(); ?></h2>
				    	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				    		
				    		<?php //the_excerpt(); ?>
				    		<div class="more">
				    			<a href="<?php the_permalink(); ?>">Go</a>
				    		</div>
				    </div>
			<?php endwhile; ?>
			
		</div>
	</section>
<?php endif; ?>
</div>
<?php
//get_sidebar();?>
</div>
</div>
<?php
get_footer();
