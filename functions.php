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


/**
 * Custom functions for Djupeskog
 */
function init_admin_menu() {
	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> __('Djupeskog inställningar', 'djupeskog'),
			'menu_title'	=> __('Djupeskog', 'djupeskog'),
			'menu_slug' 	=> 'djupeskog-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'icon_url'	=> 'menu_icon',
			'update_button' => __('Spara &amp; uppdatera', 'djupeskog'),
			'update_message' => __('Inställningarna sparade', 'djupeskog')

		));	
	}
}
add_action('acf/init', 'init_admin_menu');
