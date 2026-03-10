<?php
/**
 * Title: timeless banner
 * Slug: my-theme/timeless-hero
 * Categories: my_theme_Baty
 */
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"var:preset|spacing|20"}},"border":{"width":"1px"}}} -->
<div class="wp-block-columns timeless-banner alignwide"
    style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:0">
    <!-- wp:column {"width":"66.66%","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-column"
        style="border-style:none;border-width:0px;padding-top:0;padding-bottom:0;flex-basis:66.66%">
        <!-- wp:group {"style":{"layout":{"columnSpan":8,"rowSpan":1}},"layout":{"type":"constrained","justifyContent":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"layout":{"columnSpan":9,"rowSpan":1}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":3,"style":{"layout":{"columnSpan":9,"rowSpan":1},"typography":{"fontSize":"40px","lineHeight":"1"}}} -->
                    <h3 class="wp-block-heading" style="font-size:40px;line-height:1">Timeless</h3>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":3,"style":{"layout":{"columnSpan":9,"rowSpan":1},"typography":{"fontSize":"40px","lineHeight":"1"}}} -->
                    <h3 class="wp-block-heading" style="font-size:40px;line-height:1">Furniture,</h3>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":3,"style":{"layout":{"columnSpan":9,"rowSpan":1},"typography":{"fontSize":"40px","lineHeight":"1"}}} -->
                    <h3 class="wp-block-heading" style="font-size:40px;line-height:1">Modern Living</h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                    <p
                        style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:16px">
                        Furniture is more than just objects in a space — it’s part of everyday life. Each piece is
                        thoughtfully designed to balance comfort, functionality, and timeless style.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull">
                <!-- wp:buttons {"align":"full","style":{"layout":{"columnSpan":3,"rowSpan":1}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons alignfull">
                    <!-- wp:button {"className":"has-custom-width wp-block-button__width-100 is-style-outline","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"right":{"width":"0px","style":"none"},"top":[],"bottom":[],"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline">
                        <a class="wp-block-button__link wp-element-button"
                            style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-right-style:none;border-right-width:0px;border-left-style:none;border-left-width:0px">ِAbout
                            Us</a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
            <div class="wp-block-group designe-marquee alignwide">
                <!-- wp:heading {"style":{"typography":{"fontSize":"64px"},"layout":{"selfStretch":"fit","flexSize":null}}} -->
                <h2 class="wp-block-heading " style="font-size:64px">Design Your Comfort</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%">
        <!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('inc/assets/images/timeless/3b8dd9f9a02de6db71bcc4b78c0a4a5bc389c1e9.jpg')); ?>","id":303,"dimRatio":0,"isUserOverlayColor":true,"sizeSlug":"full","style":{"layout":{"columnSpan":4,"rowSpan":1}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-cover"><img class="wp-block-cover__image-background wp-image-303 size-full" alt=""
                src="<?php echo esc_url(get_theme_file_uri('inc/assets/images/timeless/3b8dd9f9a02de6db71bcc4b78c0a4a5bc389c1e9.jpg')); ?>"
                data-object-fit="cover" /><span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
            <div class="wp-block-cover__inner-container">
                <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->