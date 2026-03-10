<?php
/**
 * Title: Product Img Banner
 * Slug: my-theme/product-img-banner
 * Categories: my_theme_Baty
 */
?>

<!-- wp:group {"metadata":{"categories":["my_theme_Baty"],"patternName":"my-theme/product-img-banner","name":"Main Banner"},"className":"banner-product-img","layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-product-img">
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column {"width":"25%","className":"slide-1"} -->
        <div class="wp-block-column slide-1" style="flex-basis:25%">
            <!-- wp:woocommerce/product-collection {"queryId":7,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/best-sellers","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"best-seller"} -->
            <div class="wp-block-woocommerce-product-collection best-seller">
                <!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"1rem"}}}} -->
                <h2 class="wp-block-heading has-text-align-left" style="margin-bottom:1rem">Best selling products</h2>
                <!-- /wp:heading -->

                <!-- wp:woocommerce/product-template -->
                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
                <div class="wp-block-group" style="padding-bottom:10px">
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"width":"142px","height":"133px"} -->
                        <!-- wp:woocommerce/product-sale-badge {"align":"left","backgroundColor":"accent-8","textColor":"base","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none","fontSize":"12px"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} /-->
                        <!-- /wp:woocommerce/product-image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-title {"textAlign":"","isLink":true,"style":{"typography":{"fontSize":"20px"}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

                            <!-- wp:post-terms {"term":"product_cat","textAlign":"","style":{"typography":{"fontSize":"20px"}}} /-->

                            <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textColor":"accent-1","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}}} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"card-price","style":{"spacing":{"blockGap":"10px","padding":{"top":"0px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group card-price" style="padding-top:0px;padding-bottom:0">
                            <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"20px"}}} /-->

                            <!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"fontSize":"small","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:separator -->
                <hr class="wp-block-separator has-alpha-channel-opacity" />
                <!-- /wp:separator -->
                <!-- /wp:woocommerce/product-template -->
            </div>
            <!-- /wp:woocommerce/product-collection -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","className":"slide-2"} -->
        <div class="wp-block-column slide-2" style="flex-basis:50%">
            <!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('inc/assets/images/product-img-banner/a887eb5b878cc89be44a60f923eb1c673fb552ab (1).png')); ?>","id":504,"dimRatio":0,"isUserOverlayColor":true,"contentPosition":"top center","isDark":false,"sizeSlug":"large","layout":{"type":"constrained","contentSize":""}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-center"><img
                    class="wp-block-cover__image-background wp-image-504 size-large" alt=""
                    src="<?php echo esc_url(get_theme_file_uri('inc/assets/images/product-img-banner/a887eb5b878cc89be44a60f923eb1c673fb552ab (1).png')); ?>"
                    data-object-fit="cover" /><span aria-hidden="true"
                    class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
                <div class="wp-block-cover__inner-container">
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px"}}} -->
                        <h2 class="wp-block-heading has-text-align-center" style="font-size:48px">Made to Live In</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px"}}} -->
                        <p class="has-text-align-center" style="font-size:20px">High-quality furniture for real homes.
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"color":{"background":"#2d2424"}}} -->
                            <div class="wp-block-button">
                                <a class="wp-block-button__link has-background wp-element-button"
                                    style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#2d2424">SHOP
                                    NOW</a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"25%","className":"slide3"} -->
        <div class="wp-block-column slide3" style="flex-basis:25%">
            <!-- wp:woocommerce/product-collection {"queryId":8,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/best-sellers","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"best-seller"} -->
            <div class="wp-block-woocommerce-product-collection best-seller">
                <!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"1rem"}}}} -->
                <h2 class="wp-block-heading has-text-align-left" style="margin-bottom:1rem">Best selling products</h2>
                <!-- /wp:heading -->

                <!-- wp:woocommerce/product-template -->
                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
                <div class="wp-block-group" style="padding-bottom:10px">
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"width":"142px","height":"133px"} -->
                        <!-- wp:woocommerce/product-sale-badge {"align":"left","backgroundColor":"accent-8","textColor":"base","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none","fontSize":"12px"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} /-->
                        <!-- /wp:woocommerce/product-image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-title {"textAlign":"","isLink":true,"style":{"typography":{"fontSize":"20px"}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

                            <!-- wp:post-terms {"term":"product_cat","textAlign":"","style":{"typography":{"fontSize":"20px"}}} /-->

                            <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textColor":"accent-1","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}}} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"card-price","style":{"spacing":{"blockGap":"10px","padding":{"top":"0px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group card-price" style="padding-top:0px;padding-bottom:0">
                            <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"20px"}}} /-->

                            <!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"fontSize":"small","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:separator -->
                <hr class="wp-block-separator has-alpha-channel-opacity" />
                <!-- /wp:separator -->
                <!-- /wp:woocommerce/product-template -->
            </div>
            <!-- /wp:woocommerce/product-collection -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->