<?php
/**
 * Child Theme functions and definitions
 *
 */


/**
 * Loading Parent theme stylesheet
 */
add_action( 'wp_enqueue_scripts', 'catchbase_child_enqueue_styles' );
function catchbase_child_enqueue_styles() {
    wp_enqueue_style( 'catchbase-parent-style', get_template_directory_uri() . '/style.css' );
}

/* Remove Default Status Terms from WP Listings */
add_filter( 'wp_listings_default_status_terms', 'custom_default_status_terms' );
function custom_default_status_terms() {
  $status_terms = array();
  return $status_terms;
}

/* Remove Default Property Terms from WP Listings */
add_filter( 'wp_listings_default_property_type_terms', 'custom_default_property_type_terms' );
function custom_default_property_type_terms() {
  $property_type_terms = array();
  return $property_type_terms;
}

// traducion español jquery-validation
add_action( 'wp_footer', 'catchbase_child_enqueue_scripts' );
function catchbase_child_enqueue_scripts() {
	wp_enqueue_script('messages_es.js', get_stylesheet_directory_uri() . '/messages_es.js', array(), '', true );
}