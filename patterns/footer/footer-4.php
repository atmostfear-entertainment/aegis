<?php
/**
 * 04. Footer Block Pattern
 */
return array(
	'title'	      => __( '04. Footer', 'aegis' ),
	'description' => __( 'Footer', 'aegis' ),
	'categories'  => array( 'aegis-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content' => '<!-- wp:group {"tagName":"footer","metadata":{"name":"' . esc_html__('04. Footer Pattern', 'aegis') . '"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
    <footer class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"gigantic"} -->
			<h4 class="wp-block-heading has-text-align-center has-gigantic-font-size" style="font-style:normal;font-weight:300">' . esc_html__('[Heading (80 characters): Guide users to seek more information or assistance.]', 'aegis') . '</h4>
			<!-- /wp:heading -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-aegis-button-shadow"} -->
				<div class="wp-block-button is-style-aegis-button-shadow"><a class="wp-block-button__link wp-element-button">' . esc_html__('Call to Action', 'aegis') . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:separator {"backgroundColor":"senary","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-senary-color has-alpha-channel-opacity has-senary-background-color has-background is-style-wide" />
		<!-- /wp:separator -->

		<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#1c1c1e","openInNewTab":false,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":"20px","margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:social-link {"url":"#","service":"facebook","label":"Facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"linkedin","label":"LinkedIn"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram","label":"Instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"wordpress","label":"WordPress"} /-->
		</ul>
		<!-- /wp:social-links -->

		<!-- wp:separator {"backgroundColor":"senary","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-senary-color has-alpha-channel-opacity has-senary-background-color has-background is-style-wide" />
		<!-- /wp:separator -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"stretch","justifyContent":"space-between"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0">
			<!-- wp:paragraph {"fontSize":"tiny"} -->
			<p class="has-tiny-font-size">' . esc_html__('© [Year] [Company]', 'aegis') . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"right","fontSize":"tiny"} -->
			<p class="has-text-align-right has-tiny-font-size"><a href="#">' . esc_html__('[Menu Item]', 'aegis') . '</a> · <a href="#">' . esc_html__('[Menu Item]', 'aegis') . '</a> · <a href="#">' . esc_html__('[Menu Item]', 'aegis') . '</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"foreground","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"scroll-to-top float-right is-style-outline"} -->
			<div class="wp-block-button scroll-to-top float-right is-style-outline"><a class="wp-block-button__link has-background-color has-foreground-background-color has-text-color has-background has-link-color wp-element-button"><span class="dashicons dashicons-arrow-up-alt"></span></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->',
);