<?php
/**
 * CCPSC - Wordpress Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ccpsc
 */

add_action( 'wp_enqueue_scripts', 'anima_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function anima_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'anima-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'ccpsc-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'anima-style' )
	);

}
