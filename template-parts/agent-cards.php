<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'agent',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'paged' => $paged,
	'tax_query' => array(
	   array(
	    'taxonomy' => 'type',
	    'field'    => 'slug',
	    'terms'    => array( 'property-manager' ),
	    'operator' => 'NOT IN',
	   )
	)
));
	if ($wp_query->have_posts()) : ?>

	<section class="agents agentsList">
    <div class="contentRow">
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 

      	$photo = get_field('picture');
      	$size = 'agent';
  		  //$thumb = $photo['sizes'][ $size ];
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

      ?>

    <div class="agent">
      <div class="inside fadeIn wow">
        <a href="<?php echo get_permalink() ?>" class="infolink">
        	<figure class="agent-photo <?php echo ($photo) ? 'has-photo':'no-photo' ?>">
            <?php if ($photo) { ?>
            <span class="headshot">
              <img src="<?php echo $photo['url'] ?>" alt="<?php echo $photo['title'] ?>" class="photo">
            </span>
            <?php } ?>
            <img src="<?php echo get_template_directory_uri() ?>/images/resizer.png" alt="" aria-hidden="true" />
        	</figure>
        </a>
      	<div class="agent-info">
      		<h2><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h2>
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
      </div>
    </div>
<?php endwhile; ?>
  </div>
</section>
<?php endif; ?>