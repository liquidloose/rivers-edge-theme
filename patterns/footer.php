<?php
/**
 * Title: footer
 * Slug: rivers-edge/footer
 * Inserter: no
 */
?>
<!-- wp:group {"className":"is-style-footer-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group is-style-footer-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|80"}},"backgroundColor":"accent-6","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"top"}} -->
<div class="wp-block-group has-accent-6-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"categories":["footer","wireframe"],"patternName":"core/left-aligned-footer","name":"Left-aligned footer"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30"}},"layout":{"selfStretch":"fixed","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"lineHeight":"1.9"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base","fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'New Bedford, Ma 02740%1$sUnited States', 'rivers-edge' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"layout":{"selfStretch":"fit","flexSize":null},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"lineHeight":"1.9"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-left has-medium-font-size" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);line-height:1.9"><?php esc_html_e('  Social links:  ', 'rivers-edge');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p style="line-height:1.5"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sInstagram%2$s ', 'rivers-edge' ), '<a href="' . esc_url( 'https://Instagram.com' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="margin-top:0;margin-bottom:0;line-height:1.1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sTwitter/X%2$s', 'rivers-edge' ), '<a href="' . esc_url( 'https://facebook.com' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"layout":{"selfStretch":"fixed","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"},"shadow":"none","layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/rivedge_seal-150x150.webp" alt="" class="" style="box-shadow:none"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:rlussier/to-tha-top /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->