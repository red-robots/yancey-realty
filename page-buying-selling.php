<?php
/**
 * Template Name: Buying Selling
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

			<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-40091" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=40091"></script>

		</div><!-- wrapper -->
		
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
</section>
<?php
// get_sidebar();
get_footer();
