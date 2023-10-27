<?php
/**
 * 02. Blog Archive Block Pattern
 */
return array(
	'title'	  => __( '02. Blog Archive', 'aegis' ),
	'description' => __( 'Blog Archive Block Pattern', 'aegis' ),
	'categories' => array( 'aegis-query' ),
	'content' => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"0","bottom":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:0;padding-right:30px;padding-bottom:0;padding-left:30px">
		<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"inherit":false}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"layout":{"type":"default"}} -->
			<!-- wp:post-title {"isLink":true} /-->

			<!-- wp:post-featured-image {"isLink":true} /-->

			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"3rem","top":"15px"}}}} -->
			<div class="wp-block-group" style="padding-top:15px;padding-bottom:3rem">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"textColor":"background","className":"date-negative-margin","layout":{"type":"flex","justifyContent":"right"}} -->
				<div class="wp-block-group date-negative-margin has-background-color has-text-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background","textColor":"foreground","className":"is-style-aegis-post-date-border","fontSize":"tiny"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} /-->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next {"fontSize":"small"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->',
);