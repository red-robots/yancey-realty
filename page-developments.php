<?php
/**
 * Template Name: Developments
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



			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>

<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'development',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'paged' => $paged,
));
	if ($wp_query->have_posts()) : ?>
		<section class="developments grey-bg">
        	<div class="wrapper">
        		<div class="development-flex">
    <?php while ($wp_query->have_posts()) : ?>
        
        
    <?php $wp_query->the_post(); 
    	
    	$agent = get_field('agent');
    	$form_chooser = get_field('form_chooser');
    	$floor_plans = get_field('floor_plans');

    	// echo '<pre>';
    	// print_r($agent);
    	// echo '</pre>';

// $my = Array(
//     [0] => WP_Term Object
//         (
//             [term_id] => 142
//             [name] => Arts &amp; Culture
//             [slug] => arts-culture
//             [term_group] => 0
//             [term_taxonomy_id] => 142
//             [taxonomy] => event_cat
//             [description] => 
//             [parent] => 0
//             [count] => 1021
//             [filter] => raw
//         )

// );


    ?>

	    <div class="development ">
	    	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
	    		<h2><?php the_title(); ?></h2>
	    		<?php //the_excerpt(); ?>
	    		<div class="more">
	    			<a href="<?php the_permalink(); ?>">More Information</a>
	    		</div>
	    </div>
		<?php endwhile; ?>
				</div>
			</div>
		</section>
<?php endif; ?>
<?php
// get_sidebar();
get_footer();
