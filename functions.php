<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 載入父主題樣式
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'blocksy-parent-style',
		get_template_directory_uri() . '/style.css',
		[],
		wp_get_theme( 'blocksy' )->get( 'Version' )
	);

	wp_enqueue_style(
		'blocksy-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		['blocksy-parent-style'],
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_script(
		'product-script',
		get_stylesheet_directory_uri() . '/assets/js/product.js', 
		[], 
		'1.0', 
		true 
	);

	
}, 20 );

add_action('wp_head', function () {
	if (!is_product()) {
		return;
	}

	$schema = get_field('esim_schema', get_the_ID());

	if ($schema) {
		echo '<script type="application/ld+json">';
		echo $schema;
		echo '</script>';
	}
}, 20);
