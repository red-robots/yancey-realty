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

$mstreet = get_field('street_address_2', 'option');
$mcity = get_field('city_2', 'option');
$mstate = get_field('state_2', 'option');
$mzip = get_field('zip_2', 'option');
$mphone = get_field('main_phone_2', 'option');

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
							<?php get_template_part('inc/infusion-form'); ?>
						</div><!-- .entry-content -->

					</article><!-- #post-## -->

				<?php endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<div class="content-area-half-right">
			<div class="widget">
				<h2>Charlotte Address</h2>
				<?php echo get_bloginfo('name').'<br>'; ?>
				<?php if($street) {echo $street . '<br>';} ?>
				<?php if($city) {echo $city. ', '.$state.' '.$zip;} ?>
			</div>
			<div class="widget">
				<h2>Charlotte Map</h2>
				<?php the_field('map_embed'); ?>
			</div>
			<div class="widget">
				<h2>Morganton Address</h2>
				<?php echo get_bloginfo('name').'<br>'; ?>
				<?php if($mstreet) {echo $mstreet . '<br>';} ?>
				<?php if($mcity) {echo $mcity. ', '.$mstate.' '.$mzip . '<br>';} ?>
				<?php if($mphone) {echo $mphone;} ?>
			</div>
			<div class="widget">
				<h2>Morganton Map</h2>
				<?php the_field('morganton_map_embed'); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
