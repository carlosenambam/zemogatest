<?php
/**
 * Functions for Zemoga Theme
 *
 * @package Zemoga
 */

add_action( 'wp_enqueue_scripts', 'zemoga_styles' );

/**
 * Enqueue styles for the theme.
 */
function zemoga_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$theme_uri     = get_stylesheet_directory_uri();

	wp_enqueue_style( 'zemoga-parent-style', get_template_directory_uri() . '/style.css', array(), $theme_version );
	wp_enqueue_style(
		'zemoga-style',
		$theme_uri . '/style.css',
		array( 'zemoga-parent-style' ),
		$theme_version
	);

	// Bootstrap.
	wp_enqueue_style( 'zemoga-bootstrap', $theme_uri . '/css/bootstrap.min.css', array(), $theme_version );

	wp_enqueue_script( 'zemoga-bootstrap-js', $theme_uri . '/js/bootstrap.min.js', array( 'jquery' ), $theme_version, true );
}

