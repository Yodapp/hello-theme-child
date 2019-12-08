<?php
/**
 * Djupeskog - Child theme for Elementor Hello
 *
 * @package HelloDjupeskogElementorChild
 * @link https://www.yodapp.se/wordpress/
 */

/**
 * Define Constants
 */
define( 'DJUPESKOG_HELLO_CHILD_THEME', '1.0.0' );

/**
 * Load child theme css and optional scripts
 */
function djupeskog_hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'djupeskog_hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'djupeskog_hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'djupeskog_hello_elementor_child_enqueue_scripts' );
