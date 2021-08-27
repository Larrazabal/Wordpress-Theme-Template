<?php

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

?>