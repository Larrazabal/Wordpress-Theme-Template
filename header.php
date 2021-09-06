<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<?php
			wp_head();
		?>

	</head>
	<body>
		<header class="main-header">
			<!-- Get Logo SRC -->
			<?php
				if (function_exists('the_custom_logo')) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
			?>

			<!-- Display Logo -->
			<img src="<?php echo $logo[0]; ?>" alt="" class="main-logo">

			<!-- H1 = Site Name -->
			<h1 class="main-blog-name"><?php echo get_bloginfo('name'); ?></h1>

			<!-- Header P = Site Tag Line -->
			<p><?php echo get_bloginfo('description'); ?></p>
		</header>

		<!-- Navigation -->
		<nav class="main-nav">
			<?php
				wp_nav_menu(
					array(
						'menu' => 'primary',
						'container' => '',
						'theme_location' => 'primary',
						'items_wrap' => '<ul id="" class="main-menu">%3$s</ul>'
					)
				);
			?>
		</nav>

		<!-- Page Title -->
		<h2 class="main-title"><?php the_title(); ?></h2>