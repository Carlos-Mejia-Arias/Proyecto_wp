<?php

/**
 * Añade todos los scripts y estilos necesarios para el funcionamiento del tema.
 */
function benowu_enqueue_scripts() {
	wp_enqueue_style( 'benowu-style', get_stylesheet_uri() );

	if ( is_rtl() ) {
		wp_enqueue_style( 'benowu-style-rtl', get_template_directory_uri() . '/style.rtl.css', [ 'benowu-style' ] );
	}

	if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_post_type_archive( 'proyecto' ) || is_tax( 'tipo_de_proyecto' ) ) {
		wp_enqueue_script( 'scrollify', get_template_directory_uri() . '/assets/js/scrollify.js', [ 'jquery' ] );
		wp_enqueue_script( 'benowu-init', get_template_directory_uri() . '/assets/js/init.js', [ 'jquery', 'scrollify' ] );
	}
}
add_action( 'wp_enqueue_scripts', 'benowu_enqueue_scripts' );
