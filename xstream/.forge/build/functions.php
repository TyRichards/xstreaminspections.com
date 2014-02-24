<?php

add_action( 'wp_enqueue_scripts', 'xstream_enqueue_scripts' );

if ( ! function_exists( 'xstream_enqueue_scripts' ) ) :

/**
* Add theme styles and scripts here
*/
function xstream_enqueue_scripts() {

	if ( ! is_admin() ) {
		wp_enqueue_style(
			'xstream-style',
			get_bloginfo( 'stylesheet_url' )
		);
	}

}

endif; // xstream_enqueue_scripts

add_action( 'after_setup_theme', 'xstream_setup' );

if ( ! function_exists( 'xstream_setup' ) ) :

/**
* Set up your theme here
*/
function xstream_setup() {
	add_theme_support( 'post-thumbnails' );
}

endif; // xstream_setup
