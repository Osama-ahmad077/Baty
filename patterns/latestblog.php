<?php
/**
 * Title: Test-all with Swiper
 * Slug: wordPress/latestblog
 *  Categories: my_theme_Baty
 */
?>

<!-- wp:query {"queryId":4,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"align":"wide"} -->
<div class="wp-block-query alignwide">
    <!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div
        class="wp-block-group"> <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div
            class="wp-block-group alignfull">
            <!-- wp:group {"style":{"dimensions":{"minHeight":"320px"},"spacing":{"padding":{"top":"44px","bottom":"44px","left":"24px"}},"color":{"background":"#ccc3be3d"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group has-background" style="background-color:#ccc3be3d;min-height:320px;padding-top:44px;padding-bottom:44px;padding-left:24px"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"modified"}}}},"className":"wp-block-post-date__modified-date","style":{"typography":{"fontSize":"16px"},"color":{"text":"#b85c38"},"elements":{"link":{"color":{"text":"#b85c38"}}}}} /-->

                <!-- wp:post-title {"style":{"typography":{"fontSize":"30px"}}} /-->

                <!-- wp:post-excerpt {"moreText":"Read More","excerptLength":14,"style":{"typography":{"fontSize":"20px"},"color":{"text":"#8a452a"},"elements":{"link":{"color":{"text":"#8a452a"}}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div
                class="wp-block-group"><!-- wp:post-featured-image {"width":"322px","height":"320px","sizeSlug":"full","align":"wide"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
<!-- /wp:post-template -->

    <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
    <!-- wp:query-pagination-previous /-->

    <!-- wp:query-pagination-numbers {"midSize":1} /-->

    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->

