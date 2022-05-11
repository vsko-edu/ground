<?php

add_action( 'wp_enqueue_scripts', 'dummy_scripts' );
function videosite_scripts() {
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

	if ( !is_admin() ) {
		//wp_deregister_style( 'dashicons' );
		//wp_dequeue_style('dashicons');
		//wp_dequeue_style('wp-block-library');
		//wp_dequeue_style('admin-bar');
	}
}

add_action( 'after_setup_theme', 'dummy_register_nav_menu' );
function dummy_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

add_action('init', 'dummy_custom_init');
function dummy_custom_init() {
	register_post_type('section', array(
		'labels'             => array(
			'name'               => 'Sections',
			'singular_name'      => 'Section',
		),
		'public'             => true,
		'has_archive'        => true,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
	) );
}
