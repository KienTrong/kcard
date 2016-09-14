<?php

if ( ! function_exists( 'kcard_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kcard_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
}
endif;
add_action( 'after_setup_theme', 'kcard_setup' );

/**
 * Enqueue scripts and styles.
 */
function kcard_scripts() {
    wp_enqueue_style( 'kcard-fonts', kcard_fonts_url(), array(), null );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css', false, '4.0.0' );
	wp_enqueue_style( 'kcard-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'kcard_scripts' );

if ( ! function_exists( 'kcard_fonts_url' ) ) :
	/**
	 * Register default Google fonts
	 */
	function kcard_fonts_url() {
	    $fonts_url = '';

	 	/* Translators: If there are characters in your language that are not
	    * supported by Open Sans, translate this to 'off'. Do not translate
	    * into your own language.
	    */
	    $open_sans = _x( 'on', 'Open Sans font: on or off', 'kcard' );

	    if ( 'off' !== $open_sans ) {
	        $font_families = array();

	        if ( 'off' !== $open_sans ) {
	            $font_families[] = 'Source+Sans+Pro:200,300,400';
	        }


	        $query_args = array(
	            'family' => urlencode( implode( '|', $font_families ) ),
	            'subset' => urlencode( 'latin,latin-ext' ),
	        );

	        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	    }

	    return esc_url_raw( $fonts_url );
	}
endif;
