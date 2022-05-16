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

				// $link = get_field('link_to_buildium');
				// $pay_rent_link = get_field('pay_rent_link');
				// $bbtn = get_field('buildium_button_text');
				// $paybtn = get_field('pay_rent_button');
				// $btitle = get_field('buildium_title_text');
				// $paytitle = get_field('pay_rent_title');
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
					<?php if(have_rows('top_links')) : while(have_rows('top_links')) :  the_row();
							$btntitle = get_sub_field('title');
							$btnlink = get_sub_field('link');
							$btntext = get_sub_field('button_text');
					?>
					<div class="link">
						<h3 class=" js-blocks"><?php echo $btntitle; ?></h3>
						<div class="more">
							<a href="<?php echo $btnlink; ?>" target="_blank"><?php echo $btntext; ?></a>
						</div>
					</div>
				<?php endwhile; endif; ?>


					<section id="idxqs-2" class="widget idxqs">
						<div class="rental-search">
							<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-42395" src="//yanceyrealty.idxbroker.com/idx/quicksearchjs.php?widgetid=42395"></script>
						</div>
					</section>

				</div>



				<?php endwhile; // End of the loop.
				?>

				

						

					

			</main><!-- #main -->


			

				<div class="content-area">
					
					<div class="wrapper">
						<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-42391" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=42391"></script>
					</div>
					<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-42390" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=42390"></script>
				</div>

				<aside id="secondary" class="widget-area" role="complementary">
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

					$wp_query = new WP_Query();
					$wp_query->query(array(
					'post_type'=>'agent',
					'posts_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'type', // your custom taxonomy
							'field' => 'slug',
							'terms' => array( 'property-manager' )
						))
					));
					if ($wp_query->have_posts()) : ?>
				    <?php while ($wp_query->have_posts()) : ?>
				        
				    <?php $wp_query->the_post();

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
			    	<?php  endwhile; endif; wp_reset_postdata(); ?>
						
					</div>
					
				</aside>

			


			
		</div><!-- #primary -->
	</div>


<?php
// get_sidebar();
get_footer();
