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

$streetT = get_field('street_address_2', 'option');
$cityT = get_field('city_2', 'option');
$stateT = get_field('state_2', 'option');
$zipT = get_field('zip_2', 'option');
// $email = get_field('general_email', 'option');
$phoneT = get_field('main_phone_2', 'option');

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
					<div class="foot-add">
						<?php if($street) {echo $street . '<br>';} ?>
						<?php if($city) {echo $city. ', '.$state.' '.$zip;} ?>
					</div>
					<div class="foot-add">
						<?php if($streetT) {echo $streetT . '<br>';} ?>
						<?php if($cityT) {echo $cityT. ', '.$stateT.' '.$zipT;} ?>
					</div>
				</div>
				<div class="col">

				</div>
				<div class="col">
					&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?>
				</div>

			</div><!-- .site-info -->

			<?php $name = get_bloginfo('name'); ?>
				<div class="creds">
					<a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a> | © <?php echo date('Y').' '.$name; ?> | site by <a href="https://bellaworksweb.com" target="_blank">BW</a>
				</div>


		</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php
$contact_numbers = get_field('contact_numbers','option');
$phoneList = '';
if($contact_numbers) {
  foreach($contact_numbers as $c) {
    $name = $c['name'];
    $phone = $c['phone'];
    if( $name && $phone ) {
      $phone = preg_replace('/\s+/', ' ', $phone);
      $phoneList .= '<div class="contact"><a href="tel:'.$phone.'" title="'.$phone.'">'.$name.'</a></div>';
    }
  }
}
$contacts = ($phoneList) ? '<div class="phonePopUp">'.$phoneList.'</div>':'';

?>
<script>
var phoneNum='<?php echo $phone?>';
var contactNum='<?php echo $contacts?>';

// $('<li class="call-icon"><a href="tel:'+phoneNum+'" aria-label="'+phoneNum+'" class="callusIcon"><i class="fa fa-solid fa-phone"></i></a></li>').appendTo('.site-header #primary-menu');
$('<li class="call-icon"><a href="javascript:void(0)" id="contactNums" aria-label="'+phoneNum+'" class="callusIcon"><i class="fa fa-solid fa-phone"></i></a>'+contactNum+'</li>').appendTo('.site-header #primary-menu');
</script>
</body>
</html>
