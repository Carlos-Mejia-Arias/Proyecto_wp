<?php

/**
 * Registra las áreas de widgets
 */
function benowu_setup_widgets() {
	register_sidebar(
		[
			'id'            => 'sidebar-widgets',
			'name'          => __( 'Sidebar widgets', 'benowu' ),
			'description'   => __( 'Drag widgets to this sidebar container.', 'benowu' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title h5">',
			'after_title'   => '</h4>',
		]
	);

	register_sidebar(
		[
			'id'            => 'footer-widgets',
			'name'          => __( 'Footer widgets', 'benowu' ),
			'description'   => __( 'Drag widgets to this footer container', 'benowu' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title h5">',
			'after_title'   => '</h4>',
		]
	);
}

add_action( 'widgets_init', 'benowu_setup_widgets' );