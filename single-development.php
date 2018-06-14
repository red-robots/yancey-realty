<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); 
$agent = get_field('agent');
$form_chooser = get_field('form_chooser');
$floor_plans = get_field('floor_plans');
$post_object = $agent;
$street = get_field('street');
$city = get_field('city');
$state = get_field('state');
$zip = get_field('zip');
$phone_number = get_field('phone_number');

if( $post_object ): 

	// override $post
	$post = $post_object;
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
    	

endif;
wp_reset_postdata();

?>
<div id="content-wrap">
	<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); 

		

    	$form_chooser = get_field('form_chooser');
		$floor_plans = get_field('floor_plans');

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

				
				 
				<div class="entry-meta">
					<?php //acstarter_posted_on(); ?>
				</div><!-- .entry-meta -->
				 
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content --> 
			<div id="form"></div>
			<?php 

			if( $form_chooser ) { ?>
				<div class="form" >
					<?php echo do_shortcode('[gravityform id="'.$form_chooser.'" title="false" description="false"]'); ?>
				</div>
			<?php } ?>

			
		</article><!-- #post-## -->

			<?php the_post_navigation();

		 endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php 

	

 ?>
	<aside id="secondary" class="widget-area" role="complementary">
		<div class="widget">
			<div class="dev-card">
				<h3><?php the_title(); ?> Details:</h3>
				<div class="address">
					<div class="line"><?php echo $street; ?></div>
					<div class="line"><?php echo $city . ', '.$zip; ?></div>
					<div class="line"><?php echo $phone_number; ?></div>
				</div>
			</div>
		</div>
		<div class="widget">
			<div class="agent">
		    	<div class="agent-photo">
		    		<img src="<?php echo $thumb; ?>" alt="<?php echo $photo['alt']; ?>">
		    	</div>
		    	<h2><?php echo $agent->post_title; ?></h2>
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
		</div>
	</aside>
</div>
</div>
<?php
get_footer();
