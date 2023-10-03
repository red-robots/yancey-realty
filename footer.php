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
$socialMediaLinks = array();
$socialMedia = array('facebook','linkedin','twitter','instagram');
$socialMediaArrs['facebook'] = 'fa fa-facebook';
$socialMediaArrs['linkedin'] = 'fa fa-linkedin';
$socialMediaArrs['twitter'] = 'fa fa-twitter';
$socialMediaArrs['instagram'] = 'fa fa-instagram';

foreach($socialMediaArrs as $k=>$icon) {
  if( $link = get_field($k.'_link','option') ) {
    $socialMediaLinks[] = array('link'=>$link,'name'=>$k,'icon'=>$icon);
  }
}


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

        <?php if ($socialMediaLinks) { ?>
        <div class="col footerSocialMedia">
          <?php foreach ($socialMediaLinks as $a) { ?>
            <a href="<?php echo $a['link'] ?>" aria-label="<?php echo $a['name'] ?>"><i class="<?php echo $a['icon'] ?>" aria-hidden="true"></i></a>
          <?php } ?>
        </div>
        <?php } ?>
			

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
