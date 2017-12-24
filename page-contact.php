<?php
/**
 * Template Name: Contact
 */

get_header(); 

$street = get_field('street_address', 'option');
$city = get_field('city', 'option');
$state = get_field('state', 'option');
$zip = get_field('zip', 'option');
$email = get_field('general_email', 'option');
$phone = get_field('main_phone', 'option');

?>
<div id="content-wrap">
	<div class="wrapper">
		<div id="primary" class="content-area-half-left">
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

		<div class="content-area-half-right">
			<div class="widget">
				<h2>Address</h2>
				<?php echo get_bloginfo('name').'<br>'; ?>
				<?php if($street) {echo $street . '<br>';} ?>
				<?php if($city) {echo $city. ', '.$state.' '.$zip;} ?>
			</div>
			<div class="widget">
				<h2>Map</h2>
				<?php the_field('map_embed'); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
