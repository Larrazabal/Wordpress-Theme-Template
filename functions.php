<?php

	$version = wp_get_theme()->get("Version");

	function enrique_theme_support() {
		// Add title tag support
		add_theme_support("title-tag");
	}

	add_action("after_setup_theme", "enrique_theme_support");


	function enrique_menus() {

	}


	function enrique_register_styles() {
		wp_enqueue_style("enrique-master-style", get_template_directory_uri() . "/style.css", array(), "1.0", "all");
	}

	add_action("wp_enqueue_scripts", "enrique_register_styles");


	function enrique_register_scripts() {
		wp_enqueue_script("enrique-jquery", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js", array(), "3.6.0", true);
		wp_enqueue_script("enrique-master-js", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0",true);
	}

	add_action("wp_enqueue_scripts", "enrique_register_scripts");

?>