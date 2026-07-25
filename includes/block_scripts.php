<?php
/**
 * Theme scripts.
 *
 * @package rivers-edge
 */
        
function rivers_edge_enqueue_home_scripts() {
	wp_enqueue_script(
		'rivers-edge-home-scripts',
		get_theme_file_uri( '/assets/js/home.js' ),
		array(),
		filemtime( get_theme_file_path( '/assets/js/home.js' ) ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'rivers_edge_enqueue_home_scripts' );


