<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); 
// $agent = get_field('agent');
$form_chooser = get_field('form_chooser');
$floor_plans = get_field('floor_plans');
$post_objects = get_field('agent', false, false);
$IDXfeatured = get_field('idx_widget_field_featured');
$IDX = get_field('idx_widget_field');

if( $post_objects ): 

	// override $post
	$post = $post_objects;
	setup_postdata( $post );

		// $agentPic = get_field('picture');
		$photo = get_field('picture');
    	$size = 'medium';
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
    	} else { $links = 'no'; }

endif;
wp_reset_postdata();

?>
<div id="content-wrap">
	<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); 

		

  //   	$form_chooser = get_field('form_chooser');
		// $floor_plans = get_field('floor_plans');

		// echo '<pre>';
  //   	print_r($form_chooser);
  //   	echo '</pre>';

    	

    	?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php 

				if ( has_post_thumbnail() ) { the_post_thumbnail(); } 

				if( $form_chooser ) { ?>
					<div class="more">
						<a href="#form">Contact Now</a>
					</div>
				<?php }

				if( $floor_plans ) { ?>
					<div class="more">
						<a href="<?php echo $floor_plans['url']; ?>">Floor Plans</a>
					</div>
				<?php }

				?>
				<?php if( $IDX ) { ?>
				<div class="dev-listings">
				<h2><?php the_title(); ?> Listings</h2>
					<section class="yan-listing">
						<!-- <h3>Yancey's Featured <?php the_title(); ?> Listings</h3> -->
						<?php echo $IDXfeatured; ?>
					</section>
					<!-- end featured -->
					<section class="yan-listing">
						<!-- <h3>Other <?php the_title(); ?> Listings</h3> -->
						<?php echo $IDX; ?>
					</section>
				</div>
				<?php } ?>
				 
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

		 endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<aside id="secondary" class="widget-area" role="complementary">
		<?php if($post_objects): ?>
		<div class="widget">
		<?php 
		wp_reset_query();

		// $args = array(
		//   'post__in' => $agentIds,
		//   // 'orderby' => 'post_date',
		// );
		// $post_objects = get_posts( $args );

		// echo '<pre>';
		// print_r($post_objects);
		// echo '</pre>';

		shuffle( $post_objects );

			foreach( $post_objects as $post ): 
				setup_postdata($post);

				$photo = get_field('picture');
		    	$size = 'agent';
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
		    	} else { $links = 'no'; }
		?>
			
			<div class="agent">
		    	<div class="agent-photo">
		    		<img src="<?php echo $thumb; ?>" alt="<?php echo $photo['alt']; ?>">
		    	</div>
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
			    <?php 
			    $permalink = get_permalink();
		        $agents_url = get_bloginfo('url') . '/agent/';
		        // Remove the trailing slash if it exists
		        $clean_url = rtrim($permalink, '/');

		        // Extract everything after the base URL
		        $path = str_replace($agents_url, "", $clean_url);

		        // Replace hyphens with spaces
		        $path = str_replace('-', ' ', $path);

		        // Capitalize the first and last name
		        $path = ucwords($path);

		        // Replace spaces with %20 for URL encoding
		        $path = str_replace(' ', '%20', $path);

		        $agent_link = $permalink . '?agents=' . $path;
			     ?>
	    	<div class="more"><a href="<?php echo $agent_link; ?>">Agent Info</a></div>
    	</div>
    	<?php endforeach; wp_reset_postdata(); 
    	endif;?>
			
		</div>
		<?php 
		// change to a valid variable to work...
		// originally, "agent" from top of page
		$agentzzz = '';
		if($agentzzz) : ?>
		<section class="agent-blog">
			<h2>From the <?php echo $agent->post_title; ?> Blog</h2>
			<?php
			// get author category slug from above, but from title.
			// It will have to be entered into the category correctly.
			$santi = sanitize_title_with_dashes($agent->post_title);
			//echo $santi;

			$wp_query = new WP_Query();
			$wp_query->query(array(
				'post_type'=>'post',
				'posts_per_page' => 1,
				'tax_query' => array(
					array(
						'taxonomy' => 'category', // your custom taxonomy
						'field' => 'slug',
						'terms' => array( $santi ) // the terms (categories) you created
					)
				)
				// 'paged' => $paged,
			));
				if ($wp_query->have_posts()) : ?>
			    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			    	<div class="sidebar-post">
			    		<h3><?php the_title(); ?></h3>
			    		<?php the_excerpt(); ?>
			    		<div class="more"><a href="<?php the_permalink(); ?>">Read More</a></div>
			    	</div>
			    <?php endwhile; ?>
			<?php endif; ?>
		</section>
		<?php endif; ?>
	</aside>
</div>
</div>
<?php
get_footer();
