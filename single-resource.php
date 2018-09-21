<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); ?>
<div id="content-wrap">
	<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				 
				<div class="entry-meta">
					<?php //acstarter_posted_on(); ?>
				</div><!-- .entry-meta -->
				 
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php 

				the_content(); 

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
?>

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
			<?php if($website) { ?>
				<div class="item">
					Website: <a target="_blank" href="<?php echo $website; ?>"><?php echo $website; ?></a>
				</div>
			<?php } ?>
			<?php if($license) { ?>
				<div class="item">
					License: <?php echo $license; ?>
				</div>
			<?php } ?>

			</div><!-- .entry-content --> 

			<footer class="entry-footer">
				<?php acstarter_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->

			<?php 

			

		 endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();?>
</div>
</div>
<?php
get_footer();
