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
	
	// Load Hello theme style first
    	$parent_style = 'parent-style'; 
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	// Load Djupeskog style
	wp_enqueue_style(
		'djupeskog_hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}
add_action( 'wp_enqueue_scripts', 'djupeskog_hello_elementor_child_enqueue_scripts' );
