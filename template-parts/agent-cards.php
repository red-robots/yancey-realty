<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'agent',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'paged' => $paged,
));
	if ($wp_query->have_posts()) : ?>

	<section class="agents">

    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 

    	$photo = get_field('picture');
    	$size = 'agent';
		$thumb = $photo['sizes'][ $size ];
    	$email = get_field('email');
    	$spambot = antispambot($email);
    	$phone = get_field('phone');
    	$bio = get_field('bio');
    	$linkedin = get_field('linkedin_link');
    	$facebook = get_field('facebook_link');
    	$twitter = get_field('twitter_link');
    	$instagram = get_field('instagram_link');
    	$button_text = get_field('button_text');
    	if($button_text != '') {
    		$btnText = $button_text;
    	} else {
    		$btnText = 'Agent Info';
    	}

    	if( $linkedin || $facebook || $twitter || $instagram ) {
    		$links = 'yes';
    	} else { $links = 'no'; }
    	// $bio = get_field('bio');

    	// echo '<pre>';
    	// print_r($photo);
    	// echo '</pre>';

    ?>

    <div class="agent">
    	<div class="agent-photo">
    		<?php if( $thumb != '' ) { ?>
    			<img src="<?php echo $thumb; ?>" alt="<?php echo $photo['alt']; ?>">
    		<?php } else { ?>
    			<img src="<?php bloginfo('template_url'); ?>/images/agent-default.png" alt="Yancey Agent">
    		<?php } ?>
    	</div>
    	<div class="agent-info">
    		<h2><?php the_title(); ?></h2>
	    	<?php if($phone) { ?>
	    		<div class="agent-phone">
	    			<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
	    		</div>
	    	<?php } ?>
	    	<?php if($email) { ?>
	    		<div class="agent-email">
	    			<a href="mailto:<?php echo $spambot; ?>"><?php echo $spambot; ?></a>
	    		</div>
	    	<?php } ?>
    	</div>
    	
    	
	    	<ul class="agent-social">
	    	<?php if( $links == 'yes') : ?>
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
	    		 <?php endif; ?>
	    	</ul>
	   
	    <div class="more"><a href="<?php the_permalink(); ?>">Agent Info</a></div>
    </div>


<?php endwhile; ?>
</section>
<?php endif; ?>