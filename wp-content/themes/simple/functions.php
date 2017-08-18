<?php
function simple_theme_setup() {
	// Adicionando imagem de destaque
	add_theme_support('post-thumbnails');

	//Menus
	register_nav_menus(array(
		'primary' => __('Menu Primário')
	));
}

add_action('after_setup_theme', 'simple_theme_setup');

//Tamanho do Excerpt

function set_excerpt_length() {
	return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');