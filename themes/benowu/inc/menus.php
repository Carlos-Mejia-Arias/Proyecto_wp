<?php

/**
 * Registra los menús de navegación
 */
function benowu_register_menus() {
	register_nav_menu( 'main-menu', __( 'Main menu', 'benowu' ) );
	register_nav_menu( 'mobile-menu', __( 'Mobile menu', 'benowu' ) );
}
add_action( 'after_setup_theme', 'benowu_register_menus' );
