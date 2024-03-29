<?php
/**
 * 02. About Block Pattern
 */
return array(
	'title'	      => __( '02. About', 'aegis' ),
	'description' => __( 'Block Pattern with Tagline, Heading, Paragraph, Button and two Columns Media', 'aegis' ),
	'categories'  => array( 'aegis-about' ),
	'content' => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"},"metadata":{"name":"' . esc_html__('02. About Pattern', 'aegis') . '"}} -->
    <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontStyle":"normal","fontWeight":"400"}},"className":"is-tagline","fontSize":"tiny"} -->
			<p class="has-text-align-left is-tagline has-tiny-font-size" style="font-style:normal;font-weight:400;letter-spacing:3px;text-transform:uppercase">' . esc_html__('[Tagline]', 'aegis') . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"huge"} -->
			<h3 class="wp-block-heading has-huge-font-size" style="margin-top:0">' . esc_html__('[Heading]', 'aegis') .'</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . esc_html__('[Paragraph (333 characters): Detail the core principles, values, or characteristics of the organization or subject.]', 'aegis') . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-aegis-button-shadow"} -->
				<div class="wp-block-button is-style-aegis-button-shadow"><a class="wp-block-button__link wp-element-button" href="#">' . esc_html__('[Call to Action]', 'aegis') . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-aegis-effect-2-image"} -->
					<figure class="wp-block-image size-full is-style-aegis-effect-2-image"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/thumb_1200x1920_dark.webp" alt="' . esc_attr__('Describe the main elements of the image and its context.', 'aegis') . '" style="aspect-ratio:3/4;object-fit:cover" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"className":"is-hidden-on-mobile"} -->
				<div class="wp-block-column is-hidden-on-mobile" style="padding-top:var(--wp--preset--spacing--50)">
					<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-aegis-effect-2-image"} -->
					<figure class="wp-block-image size-full is-style-aegis-effect-2-image"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/thumb_1200x1920_dark.webp" alt="' . esc_attr__('Describe the main elements of the image and its context.', 'aegis') . '" style="aspect-ratio:3/4;object-fit:cover" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);