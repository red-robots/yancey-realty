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

				$link = get_field('link_to_buildium');
				$pay_rent_link = get_field('pay_rent_link');
				$bbtn = get_field('buildium_button_text');
				$paybtn = get_field('pay_rent_button');
				$btitle = get_field('buildium_title_text');
				$paytitle = get_field('pay_rent_title');
				?>

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
	<div class="wrapper">
	<div class="prop-manage">
		<?php if( $link ) { ?>
			<div class="link">
				<h3 class=" js-blocks"><?php echo $btitle; ?></h3>
				<div class="more">
					<a href="<?php echo $link; ?>" target="_blank"><?php echo $bbtn; ?></a>
				</div>
			</div>
		<?php } ?>

		<?php if( $pay_rent_link ) { ?>
			<div class="link">
				<h3 class=" js-blocks"><?php echo $paytitle; ?></h3>
				<div class="more">
					<a href="<?php echo $pay_rent_link; ?>" target="_blank"><?php echo $paybtn; ?></a>
				</div>
			</div>
		<?php } ?>
		</div>


		<h2>Yancey's Rental</h2>
		<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-42390" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=42390"></script>

		<h2>Other Rentals</h2>
		</div>

			<section id="idxqs-2" class="widget idxqs">
				<div class="rental-search">
					<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-42395" src="//yanceyrealty.idxbroker.com/idx/quicksearchjs.php?widgetid=42395"></script>
				</div>
		</section>

		<div class="wrapper">
		<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-42391" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=42391"></script>
		</div>
</div>
<?php
// get_sidebar();
get_footer();
