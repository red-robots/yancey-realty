<?php
/**
 * Template Name: Subdivisions & Complexes
 */

get_header(); ?>
<div id="content-wrap" class="grey-bg">
	<div class="wrapper">
		<div id="primary" class="content-area-full">
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
	</div>


 <?php
    $wp_query = new WP_Query();
    $wp_query->query(array(
    'post_type'=>'subdivision',
    'posts_per_page' => -1,
  ));
  if ($wp_query->have_posts()) : ?>
  <section class="image-gallery-block">
    <div class="wrapper">
      <div class="gallery-inner">
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <div class="gallery-item fadeIn wow">
            <a class="inside" href="<?php echo get_permalink(); ?>">
              <figure class="<?php echo ( has_post_thumbnail() ) ? 'has-photo':'no-photo'; ?>">
                <?php if ( has_post_thumbnail() ) { ?>
                  <span class="image"><?php echo the_post_thumbnail(); ?></span>
                <?php } ?>
                <img src="<?php echo get_template_directory_uri() ?>/images/resizer-landscape.png" alt="" class="resizer" aria-hidden="true" />
              </figure>
              <div class="gallery-info">
                <h3><?php the_title() ?></h3>
              </div>
            </a>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

</div>
<?php
// get_sidebar();
get_footer();
