<?php

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

function bootstrapstarter_enqueue_styles() {
    //wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );

    wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/css/fontawesome-all.min.css', array(), '5.1.0', 'all' );
	wp_enqueue_style( 'fontawesome' );

	wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Krub:300,400,700|Source+Sans+Pro:300,400,700', array(), '1.0', 'all' );
	wp_enqueue_style( 'google-fonts' );

    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), array('google-fonts') ); 

}

function bootstrapstarter_enqueue_scripts() {

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

?>