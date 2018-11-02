<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); 

$post_objects = get_field('agent', false, false);

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
	    	<div class="more"><a href="<?php the_permalink(); ?>">Agent Info</a></div>
    	</div>
    	<?php endforeach; wp_reset_postdata(); ?>
	
</div>
<?php
//get_sidebar();?>
</div>
</div>
<?php
get_footer();
