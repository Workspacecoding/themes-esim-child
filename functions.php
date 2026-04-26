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
}, 20 );
