<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

<div id="primary" class="content-area-full">
	<main id="main" class="site-main" role="main">


  <?php  
  $heroImage = get_field('static_banner',2);
  $heroText = get_field('static_banner_text',2);
  ?>

	<div class="home-banner">
    <?php if($heroImage) { ?><figure class="hero-image" style="background-image:url('<?php echo $heroImage['url']?>')"></figure><?php } ?>
    <?php if($heroText) { ?><h2 class="tagline"><?php bloginfo('description'); ?></h2><?php } ?>
		<div class="prop-search">
			<?php 
			get_template_part('inc/home-property-search');
			//if ( is_active_sidebar( 'sidebar-search' ) ) {dynamic_sidebar( 'sidebar-search' );} ?>
		</div>
	</div>


  <?php
  $image_block = get_field('image_block',2);
  $text_block = get_field('text_block',2);
  $button = get_field('buttons_block',2);
  $buttonLink = ( isset($button['url']) && $button['url'] ) ? $button['url'] : '';
  $buttonText = ( isset($button['title']) && $button['title'] ) ? $button['title'] : '';
  $buttonTarget = ( isset($button['target']) && $button['target'] ) ? $button['target'] : '_self';
  $colClass = ( $image_block && $text_block ) ? 'half':'fullwidth';
  if( $image_block || $text_block ) { ?>
  <section class="home-featured-block <?php echo $colClass ?>">
    <div class="contentRow">

      <?php if($image_block) { ?>
      <div class="imageCol">
        <figure style="background-image:url('<?php echo $image_block['url']?>')">
          <img src="<?php echo $image_block['url'] ?>" alt="<?php echo $image_block['title'] ?>">
        </figure>
      </div>
      <?php } ?>

      <?php if($text_block) { ?>
      <div class="textCol">
        <div class="textInner">
          <div class="text"><?php echo $text_block; ?></div>
          <?php if($buttonLink && $buttonText) { ?>
          <div class="buttons">
            <a href="<?php echo $buttonLink?>" class="theme-button" target="<?php echo $buttonTarget?>"><?php echo $buttonText?></a>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>

    </div>
  </section>
  <?php } ?>
	
  <section class="home-featured-listings common">
		<div class="wrapper">
			<h2>Featured Listings</h2>
			<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-12572" src="//yanceyrealty.idxbroker.com/idx/customshowcasejs.php?widgetid=12572"></script>
		</div>
	</section>

	

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
