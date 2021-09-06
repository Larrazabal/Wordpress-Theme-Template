<?php

	/* Get Theme Version */
	$version = wp_get_theme()->get('Version');


	/* Theme Support */
	function enrique_theme_support() {
		// Add title tag support
		add_theme_support('title-tag');

		// Add custom logo support
		add_theme_support('custom-logo');

		// Add post thumbnail support
		add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme', 'enrique_theme_support');


	/* Menu Setups */
	function enrique_menus() {
		$locations = array(
			'primary' => 'Main Menu'
		);
		register_nav_menus($locations);
	}
	add_action('init', 'enrique_menus');


	/* Enqueue Styles */
	function enrique_register_styles() {
		wp_enqueue_style('enrique-master-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
	}
	add_action('wp_enqueue_scripts', 'enrique_register_styles');


	/* Enqueue Scripts */
	function enrique_register_scripts() {
		wp_enqueue_script('enrique-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
		wp_enqueue_script('enrique-master-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0',true);
	}
	add_action('wp_enqueue_scripts', 'enrique_register_scripts');

?>