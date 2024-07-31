<?php

/**
 * Añade una imagen de fondo a div.site-branding si hay elegida una imagen de cabecera
 */
function benowu_set_header_image() {
	if ( ! has_custom_header() ) {
		return;
	}

	$header = get_custom_header();
	$css    = '
		.site-branding {
				background:url(' . esc_url( $header->url ) . ') no-repeat center center;
				background-size: cover;
			}
		';

	wp_add_inline_style( 'benowu-style', $css );
}
add_action( 'wp_enqueue_scripts', 'benowu_set_header_image' );


/**
 * Devuelve el logotipo elegido en el personalizador de WP
 *
 * Si no se ha elegido nada, devuelve una cadena vacía
 *
 * @return string
 */
function benowu_get_logo_url() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo_url = false;
	if ( $custom_logo_id ) {
		$logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
	}

	return $logo_url ? $logo_url : '';
}
