<?php
/**
 * Template Name: Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); 

$url = get_bloginfo('url');
$agent = get_the_title();
$taxonomy = sanitize_title_with_dashes($agent);
?>
<div id="content-wrap">
	<div class="wrapper">
		
		<div class="content-area ">
			<div class="agent-blog">
	    		<h1>Blog</h1>
	    		<?php
					$wp_query = new WP_Query();
					$wp_query->query(array(
					'post_type'=>'post',
					'posts_per_page' => 10,
					'paged' => $paged,
					
				));
				if ($wp_query->have_posts()) : ?>
				<section class="blogpage">
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

					<article class="post">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<div class="readmore">
							<a href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</article>

				<?php 

				endwhile; 
				pagi_posts_nav() 

				?>
				</section>
			<?php endif; ?>
	    	</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php

get_footer();
