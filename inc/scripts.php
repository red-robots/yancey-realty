<?php
/**
 * Enqueue scripts and styles.
 */
function acstarter_scripts() {
	wp_enqueue_style( 'acstarter-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');
		// wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', false, '1.10.2', true);
		wp_enqueue_script('jquery');

	wp_register_style( 'acstarter-custom-style', get_template_directory_uri().'/css/custom.css' );
	wp_enqueue_style( 'acstarter-custom-style' );

	wp_enqueue_script(
			'acstarter-blocks',
			get_template_directory_uri() . '/assets/js/vendors.js',
			array(), '20120206',
			true
		);

	wp_enqueue_script(
			'acstarter-custom',
			get_template_directory_uri() . '/assets/js/custom.js',
			array(), '20120207',
			true
		);

	wp_enqueue_script(
		'acstarter-extrajs',
		get_template_directory_uri() . '/assets/js/extra.js',
		array(), '20220922',
		true
	);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'acstarter_scripts' );
