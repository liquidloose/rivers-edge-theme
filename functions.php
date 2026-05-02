<?php
/**
 * Rivers Edge Theme Functions
 */

// Block styles
require_once get_template_directory() . '/includes/block_styles.php';

add_filter( 'image_size_names_choose', function( $sizes ) {
    return array_merge( $sizes, array(
        'thumbnail' => __( 'Thumbnail' ),
        'medium'    => __( 'Medium' ),
        'large'     => __( 'Large' ),
        'full'      => __( 'Full Size' ),
    ) );
});
