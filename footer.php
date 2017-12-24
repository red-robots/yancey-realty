<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
$linkedin = get_field('linkedin_link', 'option');
$facebook = get_field('facebook_link', 'option');
$twitter = get_field('twitter_link', 'option');
$instagram = get_field('instagram_link', 'option');

$street = get_field('street_address', 'option');
$city = get_field('city', 'option');
$state = get_field('state', 'option');
$zip = get_field('zip', 'option');
$email = get_field('general_email', 'option');
$phone = get_field('main_phone', 'option');

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper center">
		<section class="social">
			<ul class="footer-social">
				<?php if($facebook) { ?>
	    			<li>
		    			<a target="_blank" href="<?php echo $facebook; ?>">
		    				<i class="fa fa-facebook" aria-hidden="true"></i>
		    			</a>
	    			</li>
	    		<?php } ?>
	    		<?php if($linkedin) { ?>
	    			<li>
		    			<a target="_blank" href="<?php echo $linkedin; ?>">
		    				<i class="fa fa-linkedin" aria-hidden="true"></i>
		    			</a>
	    			</li>
	    		<?php } ?>
	    		<?php if($twitter) { ?>
	    			<li>
		    			<a target="_blank" href="<?php echo $twitter; ?>">
		    				<i class="fa fa-twitter" aria-hidden="true"></i>
		    			</a>
	    			</li>
	    		<?php } ?>
	    		<?php if($instagram) { ?>
	    			<li>
		    			<a target="_blank" href="<?php echo $instagram; ?>">
		    				<i class="fa fa-instagram" aria-hidden="true"></i>
		    			</a>
	    			</li>
	    		<?php } ?>
			</ul>
		</section>
			<div class="site-info">
				<div class="col">
					<?php if($street) {echo $street . '<br>';} ?>
					<?php if($city) {echo $city. ', '.$state.' '.$zip;} ?>
				</div>
				<div class="col">
					
				</div>
				<div class="col">
					&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?> 
				</div>
			</div><!-- .site-info -->
		</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
