<?php
/**
 * 01. Blog Block Pattern
 */
return array(
	'title'	  => __( '01. Blog Pattern', 'aegis' ),
	'description' => __( 'Blog Archive', 'aegis' ),
	'categories' => array( 'aegis-query' ),
	'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"},"metadata":{"name":"' . esc_html__('01. Blog Pattern', 'aegis') . '"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[],"taxQuery":null},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"align":"wide","layout":{"type":"default"}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"0"}}},"backgroundColor":"secondary","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
				<!-- wp:post-terms {"term":"category","textAlign":"right","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"tiny"} /-->

				<!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"tiny"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"className":"is-style-aegis-post-title-border","fontSize":"huge"} /-->

			<!-- wp:post-excerpt {"moreText":"Read More","className":"is-style-default"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"small"} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->',
);