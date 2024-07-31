<?php

function benowu_setup_editor() {
	$editor_color_palette = [
		[
			'name' => __( 'Orange', 'benowu' ),
			'slug' => 'benowu-orange',
			'color' => '#f47a29',
		],
		[
			'name' => __( 'Black', 'benowu' ),
			'slug' => 'benowu-black',
			'color' => '#333',
		],
		[
			'name' => __( 'Light Gray', 'benowu' ),
			'slug' => 'benowu-light-gray',
			'color' => '#e6e6e6',
		],
		[
			'name' => __( 'Dark Gray', 'benowu' ),
			'slug' => 'benowu-dark-gray',
			'color' => '#8a8a8a',
		],
		[
			'name' => __( 'White', 'benowu' ),
			'slug' => 'benowu-white',
			'color' => '#fefefe',
		],
	];
	add_theme_support( 'editor-color-palette', $editor_color_palette );

	$editor_font_sizes = [
		[
			'name' => __( 'Small', 'benowu' ),
			'slug' => 'benowu-small',
			'size' => 15.2,
		],
		[
			'name' => __( 'Normal', 'benowu' ),
			'slug' => 'benowu-normal',
			'size' => 19,
		],
		[
			'name' => __( 'Large', 'benowu' ),
			'slug' => 'benowu-large',
			'size' => 35,
		],
		[
			'name' => __( 'Huge', 'benowu' ),
			'slug' => 'benowu-huge',
			'size' => 50,
		],
	];
	add_theme_support( 'editor-font-sizes', $editor_font_sizes );

	// Estilos del Editor de WP (Gutenberg)
	add_theme_support('editor-styles');
	add_editor_style( 'style-editor.css' );

}

add_action( 'after_setup_theme', 'benowu_setup_editor' );
