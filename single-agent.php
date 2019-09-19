<?php
/**
 * The template for displaying all single posts.
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
		<div id="primary" class="content-area-half-left">
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				$photo = get_field('picture');
		    	$size = 'large';
				$thumb = $photo['sizes'][ $size ];
		    	$email = get_field('email');
		    	$spambot = antispambot($email);
		    	$phone = get_field('phone');
		    	$bio = get_field('bio');
		    	$linkedin = get_field('linkedin_link');
		    	$facebook = get_field('facebook_link');
		    	$twitter = get_field('twitter_link');
		    	$instagram = get_field('instagram_link');

		    	if( $linkedin || $facebook || $twitter || $instagram ) {
		    		$links = 'yes';
		    	} else { $links = 'no'; } ?>

		    	<div class="agent-single">
			    	<div class="agent-photo-single">
			    		<img src="<?php echo $thumb; ?>" alt="<?php echo $photo['alt']; ?>">
			    	</div>
			    	<div class="agent-info">
			    		<h2><?php the_title(); ?></h2>
				    	<?php if($phone) { ?>
				    		<div class="agent-phone">
				    			<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
				    		</div>
				    	<?php } ?>
				    	<?php if($email) { ?>
				    		<div class="agent-email">
				    			<a href="mailto:<?php echo $spambot; ?>"><?php echo $spambot; ?></a>
				    		</div>
				    	<?php } ?>
				    	<?php if( $links == 'yes') : ?>
					    	<ul class="agent-social">
					    		<?php if($facebook) { ?>
					    			<li>
						    			<a target="_blank" href="<?php echo $facebook; ?>">
						    				<i class="fa fa-facebook" aria-hidden="true"></i>
						    			</a>
					    			</li>
					    		<?php } ?>
					    		<?php if($linkedin) { ?>
					    			<li>
						    			<a target="_blank" href="<?php echo $linkedin; ?>">
						    				<i class="fa fa-linkedin" aria-hidden="true"></i>
						    			</a>
					    			</li>
					    		<?php } ?>
					    		<?php if($twitter) { ?>
					    			<li>
						    			<a target="_blank" href="<?php echo $twitter; ?>">
						    				<i class="fa fa-twitter" aria-hidden="true"></i>
						    			</a>
					    			</li>
					    		<?php } ?>
					    		<?php if($instagram) { ?>
					    			<li>
						    			<a target="_blank" href="<?php echo $instagram; ?>">
						    				<i class="fa fa-instagram" aria-hidden="true"></i>
						    			</a>
					    			</li>
					    		<?php } ?>
					    	</ul>
					    <?php endif; ?>
					    
			    	</div>
			    	<!-- agente info -->
			    	
			    	<section class="bio">
				    	<?php the_field('bio'); ?>
				    </section>
			    </div>

			<?php endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="content-area-half-right">
			<div class="agent-blog">
	    		<h2>Contact <?php echo $agent; ?></h2>
	    		<?php echo do_shortcode('[gravityform id="4" title="false" description="false"]'); ?>
	    		<?php
				// 	$wp_query = new WP_Query();
				// 	$wp_query->query(array(
				// 	'post_type'=>'post',
				// 	'posts_per_page' => 10,
				// 	'paged' => $paged,
				// 	'tax_query' => array(
				// 		array(
				// 			'taxonomy' => 'category', // your custom taxonomy
				// 			'field' => 'slug',
				// 			'terms' => array( $taxonomy ) // the terms (categories) you created
				// 		)
				// 	)
				// ));
				// if ($wp_query->have_posts()) : ?>
				<?php //while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

					<!-- <article class="post">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<div class="readmore">
							<a href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</article> -->

				<?php //endwhile; ?>
				<!-- <div class="readmore">
					<a href="<?php echo $url . '/category/' . $taxonomy; ?>">
						View All posts by, <?php echo $agent; ?>
					</a>
				</div> -->
			<?php //endif; ?>
	    	</div>
		</div>
		<!-- content-area-half-left -->
	</div>
</div>
<?php
// get_sidebar();
get_footer();
