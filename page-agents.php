<?php
/**
 * Template Name: Agents
 */

get_header(); ?>
<section class="grey-bg">
<div id="content-wrap">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
		
		<div class="wrapper">

		<h1><?php the_title(); ?></h1>

			<?php get_template_part('template-parts/agent-cards'); ?>

		</div><!-- wrapper -->
		
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
</section>
<?php
// get_sidebar();
get_footer();
