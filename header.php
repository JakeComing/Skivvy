<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php if (function_exists('html_classes')){ html_classes(); } ?>">
<head><?php

	echo (
			'<meta charset="'. get_bloginfo( 'charset' ).'">'.
			'<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">'. // Force IE to render most recent engine for installed browser. And enable Chrome Frame
			'<meta content="width=device-width, initial-scale=1.0" name="viewport">'. // Sets default width and scale to be dependent on the device.
		#	'<meta name="format-detection" content="telephone=no"><meta http-equiv="x-rim-auto-match" content="none">'. // Don't autodetect phonenumbers and create links in iphone safari & blackberry
			'<meta content="' . get_bloginfo( 'description', 'display' ) . '" name="description">'. // Meta description, important for SEO. Defaults to blog's description.
			'<link rel="profile" href="http://gmpg.org/xfn/11">'.
			'<link rel="shortcut icon" type="image/png" href="' . get_stylesheet_directory_uri() . '/img/favicon.png?v=1">'.
			'<link rel="apple-touch-icon" href="' . get_stylesheet_directory_uri() . '/apple-touch-icon.png">'.

			'<!--[if lt IE 9]><script src="' . get_template_directory_uri() . '/js/html5.js"></script><![endif]-->'// HTML5 Shiv for < IE9

	);

	wp_head();
?></head>
<body id="page-<?php echo get_the_ID(); ?>" <?php body_class(); ?>>
<header role="banner" id="header">
	<div class="page-wrapper"><?php

		echo (
			// Logo
				'<a id="logo" class="alignleft" href="' . home_url( '/' ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' .
					'<img src="' . get_stylesheet_directory_uri() . '/img/logo.png" alt="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">' .
				'</a>'.

			// Mobile Toggle
				'<button id="toggle-mobile" class="alignright"></button>'.

			// Main Menu
				wp_nav_menu( array(
					'container'       => 'nav',
					'container_class' => 'alignright',
					'container_id'    => 'nav-main',
					'menu_class'      => 'nobull dropdown animated flyoutright', // Menu functionality classes
					'menu_id'         => 'main-menu',
					'items_wrap'      => '<ul role="navigation" id="%1$s" class="%2$s">%3$s</ul>',
					'theme_location'  => 'main',
					'depth'           => 3, // 0 = all. Default, -1 = displays links at any depth and arranges them in a single, flat list.
					'echo'            => false
				)).

			'<div class="clear"></div>'.

			// Mobile Menu
				wp_nav_menu( array(
					'container'       => 'nav',
					'container_class' => 'hidden clearfix',
					'container_id'    => 'nav-mobile',
					'menu_class'      => 'nobull textcenter',
					'menu_id'         => '',
					'items_wrap'      => '<ul role="navigation" id="%1$s" class="%2$s">%3$s</ul>',
					'theme_location'  => 'mobile',
					'depth'           => -1,
					'echo'            => false
				))
		);

	?></div>
</header>