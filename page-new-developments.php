<?php
/**
 * Template Name: New Developments
 */

get_header(); ?>
<section class="grey-bg">
<div id="content-wrap">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
		
		<div class="wrapper">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

			</article>

			<section id="idxqs-2" class="widget idxqs">
				<div class="rental-search">
					<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-51852" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=51852"></script>
				</div>
			</section>

			<!-- <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-40091" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=40091"></script> -->

			<!-- <h2>Other Listings</h2> -->

			<!-- <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-42389" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=42389"></script> -->

		</div><!-- wrapper -->
		
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
</section>
<?php
// get_sidebar();
get_footer();
