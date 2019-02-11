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

				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) { ?>

				<section class="resource-nav">
				<h2>Search By:</h2>
					<select name="dropdpown" size="1" id="select-anchor">
						<!-- <ul class="the-sources"> -->

					<?php foreach ( $terms as $term ) { ?>
						<option value="<?php echo '#'.$term->slug; ?>"><?php echo $term->name; ?></option>
				  
							<!-- <li>
								<a href="<?php echo '#'.$term->slug; ?>"><?php echo $term->name; ?></a>
							</li>
						 -->
							
						
					<?php } ?>
					</select>
					<!-- </ul> -->
					</section>
					<?php
				    // $output .= '<ul class="category-list">';
				    foreach ( $terms as $term ) { ?>

				     
				        <h3 id="<?php echo $term->slug; ?>"><?php echo $term->name; ?></h3>

				            <?php $args = array(
				                'post_type'     => 'resource',
				                'resource_type' => $term->slug,
				                'posts_per_page' => -1,
				            );    

				            $the_query = new WP_Query( $args );

				            if ( $the_query->have_posts() ) { ?>
				                <section class="resources">
				                <?php while ( $the_query->have_posts() ) { $the_query->the_post(); 
				                	$name=get_field('name');
									$title=get_field('title');
									$cell=get_field('cell');
									$office=get_field('office');
									$fax=get_field('fax');
									$email=get_field('email');
									$street=get_field('street');
									$city=get_field('city');
									$state=get_field('state');
									$zip=get_field('zip');
									$website=get_field('website');
									$license=get_field('license');
									//$desc=get_field('company_description');
									$logo=get_field('logo');

									?>
            <div class="resource-card">
            	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

            	<?php if($logo) { ?>
					<div class="clogo">
						<img src="<?php echo $logo['url']; ?>">
					</div>
				<?php } ?>

				
			<?php if($name) { ?>
				<div class="item">
					Name: <?php echo $name; ?>
				</div>
			<?php } ?>
			<?php if($title) { ?>
				<div class="item">
					Title: <?php echo $title; ?>
				</div>
			<?php } ?>
			<?php if($cell) { ?>
				<div class="item">
					Cell: <?php echo $cell; ?>
				</div>
			<?php } ?>
			<?php if($office) { ?>
				<div class="item">
					Office: <?php echo $office; ?>
				</div>
			<?php } ?>
			<?php if($fax) { ?>
				<div class="item">
					Fax: <?php echo $fax; ?>
				</div>
			<?php } ?>
			<?php if($email) { 
				$email=antispambot($email);
				?>
				<div class="item">
					Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
				</div>
			<?php } ?>
			<?php if($street) { ?>
				<div class="item">
					Address: <br>
					<?php if($street){echo $street;} ?><br>
					<?php if($city){echo $city;} ?> <?php if($state){echo ', '.$state;} ?> <?php if($zip){echo $zip;} ?>
				</div>
			<?php } ?>
			<?php if($license) { ?>
				<div class="item">
					License: <?php echo $license; ?>
				</div>
			<?php } ?>
									<?php if($website) { ?>
				                    	<div class="more"><a target="_blank" href="<?php echo $website; ?>">Visit Website</a></div>
				                    <?php } ?>



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
