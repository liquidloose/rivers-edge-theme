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

