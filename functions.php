<?php

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

function bootstrapstarter_enqueue_styles() {
    //wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );

    wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/fontawesome-all.min.css', array(), '5.1.0', 'all' );
	wp_enqueue_style( 'fontawesome' );

	wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Mono|Open+Sans|Krub|Source+Sans+Pro', array(), '1.0', 'all' );
    wp_enqueue_style( 'google-fonts' );
    
    wp_register_style( 'highlight', get_template_directory_uri() . '/assets/highlight/styles/dracula.css', array(), '9.14.2', 'all');

    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), array('google-fonts', 'highlight') ); 

}

function bootstrapstarter_enqueue_scripts() {

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
    wp_enqueue_script('highlight-js', get_template_directory_uri().'/assets/highlight/highlight.pack.js', array('jquery'), '9.14.2', true );
    wp_enqueue_script('highlight-js-init', get_template_directory_uri().'/assets/js/init-highlight.js', array('highlight-js'), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );


// Register Custom Navigation Walker
require_once('wp_bootstrap_pagination.php');

?>