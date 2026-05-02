<?php
/**
 * Register custom block styles and enqueue per-block stylesheets.
 *
 * Block → style definitions are listed explicitly in rivers_edge_block_style_registry().
 *
 * @package rivers-edge
 */

/** Shared style variation slug/class suffix for all core blocks (except Group-only layout styles). */
const RIVERS_EDGE_BLOCK_STYLE = 'rivers-edge';

/**
 * Every core block and its registered style variations.
 *
 * @return array<string, array<int, array{name: string, label: string}>>
 */
function rivers_edge_block_style_registry(): array {
	return array(
		'core/archives' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/audio' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/avatar' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/block' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/button' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/buttons' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/calendar' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/categories' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/code' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/column' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/columns' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comment-author-name' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comment-content' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comment-date' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comment-edit-link' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comment-reply-link' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comment-template' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comments' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comments-pagination' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comments-pagination-next' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comments-pagination-numbers' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comments-pagination-previous' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/comments-title' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/cover' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/details' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/embed' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/file' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/footnotes' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/freeform' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/gallery' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/group' => array(
			array(
				'name'  => 'reasons-why-and-contact',
				'label' => __( 'Reasons Why and Contact', 'rivers-edge' ),
			),
			array(
				'name'  => 'friendly-web',
				'label' => __( 'Friendly Web', 'rivers-edge' ),
			),
			array(
				'name'  => 'header-group',
				'label' => __( 'Header Group', 'rivers-edge' ),
			),
			array(
				'name'  => 'footer-group',
				'label' => __( 'Footer Group', 'rivers-edge' ),
			),
			array(
				'name'  => 'core-services',
				'label' => __( 'Core Services', 'rivers-edge' ),
			),
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/heading' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/home-link' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/html' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/image' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/latest-comments' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/latest-posts' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/legacy-widget' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/list' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/list-item' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/loginout' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/media-text' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/missing' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/more' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/navigation' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/navigation-link' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/navigation-submenu' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/nextpage' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/page-list' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/page-list-item' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/paragraph' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/pattern' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-author' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-author-biography' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-author-name' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-comments-form' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-content' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-date' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-excerpt' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-featured-image' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-navigation-link' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-template' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-terms' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/post-title' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/preformatted' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/pullquote' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/query' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/query-no-results' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/query-pagination' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/query-pagination-next' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/query-pagination-numbers' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/query-pagination-previous' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/query-title' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/quote' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/read-more' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/rss' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/search' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/separator' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/shortcode' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/site-logo' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/site-tagline' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/site-title' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/social-link' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/social-links' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/spacer' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/table' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/tag-cloud' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/template-part' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/term-description' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/text-columns' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/verse' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/video' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
		'core/widget-group' => array(
			array(
				'name'  => RIVERS_EDGE_BLOCK_STYLE,
				'label' => __( 'Rivers Edge', 'rivers-edge' ),
			),
		),
	);
}

/**
 * Register all styles from the registry.
 */
function rivers_edge_register_block_styles_from_registry(): void {
	foreach ( rivers_edge_block_style_registry() as $block_name => $styles ) {
		foreach ( $styles as $style ) {
			register_block_style( $block_name, $style );
		}
	}
}

/**
 * Enqueue stylesheet per core block (editor + front when block present).
 */
function rivers_edge_enqueue_core_block_styles(): void {
	foreach ( rivers_edge_block_style_registry() as $block_name => $_styles ) {
		$slug = preg_replace( '#^core/#', '', $block_name );
		$rel  = 'assets/css/blocks/' . $slug . '.css';
		$path = get_theme_file_path( $rel );
		$uri  = get_theme_file_uri( $rel );

		if ( ! is_readable( $path ) ) {
			continue;
		}

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => 'rivers-edge-' . str_replace( '/', '-', $slug ),
				'src'    => $uri,
				'path'   => $path,
			)
		);
	}
}

add_action( 'init', 'rivers_edge_register_block_styles_from_registry', 10 );
add_action( 'init', 'rivers_edge_enqueue_core_block_styles', 11 );
