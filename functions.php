<?php
/**
 * Rivers Edge Theme Functions
 */

// Block styles
require_once get_template_directory() . '/includes/block_styles.php';
require_once get_template_directory() . '/includes/block_scripts.php';


function preload_critical_roboto_fonts() {
    $theme_url = get_template_directory_uri();
    echo '<link rel="preload" href="' . esc_url( $theme_url ) . '/assets/fonts/roboto/roboto-400-normal.woff2" as="font" type="font/woff2" crossorigin>' . "\n";
    echo '<link rel="preload" href="' . esc_url( $theme_url ) . '/assets/fonts/roboto/roboto-700-normal.woff2" as="font" type="font/woff2" crossorigin>' . "\n";
}
add_action('wp_head', 'preload_critical_roboto_fonts', 1);

/**
 * Output a meta description for search engines.
 * Singular pages/posts use the excerpt; otherwise the site tagline / fallback.
 */
function rivers_edge_meta_description() {
	$description = get_bloginfo( 'description', 'display' );

	if ( is_singular() ) {
		$excerpt = get_the_excerpt();
		if ( is_string( $excerpt ) && $excerpt !== '' ) {
			$description = $excerpt;
		}
	}

	if ( ! is_string( $description ) || $description === '' ) {
		$description = "River's Edge — web development focused on speed and accessibility.";
	}

	$description = wp_strip_all_tags( $description );
	$description = preg_replace( '/\s+/', ' ', $description );
	$description = trim( $description );

	if ( strlen( $description ) > 160 ) {
		$description = substr( $description, 0, 157 ) . '...';
	}

	printf(
		'<meta name="description" content="%s" />' . "\n",
		esc_attr( $description )
	);
}
add_action( 'wp_head', 'rivers_edge_meta_description', 1 );

