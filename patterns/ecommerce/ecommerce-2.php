<?php
/**
 * 02. eCommerce Block Pattern
 */
return array(
	'title'	  => __( '02. eCommerce', 'aegis' ),
	'description' => __('Block Pattern with Columns, Images, Rating, Pricing, Headings, Paragraphs, and Buttons', 'aegis' ),
    'categories' => array( 'aegis-ecommerce' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained"},"metadata":{"name":"' . esc_html__('02. eCommerce Pattern', 'aegis') . '"}} -->
    <div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"backgroundColor":"background"} -->
		<div class="wp-block-column has-background-background-color has-background">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-aegis-effect-2-image"} -->
			<figure class="wp-block-image size-full is-style-aegis-effect-2-image"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/thumb_1200x1920_dark.webp" alt="' . esc_attr__('Describe the main elements of the image and its context.', 'aegis') . '" style="aspect-ratio:3/4;object-fit:cover" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-default"} -->
			<div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"fontSize":"tiny"} -->
					<p class="has-tiny-font-size" style="letter-spacing:2px"><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-half"></span><span class="dashicons dashicons-star-empty"></span></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>' . esc_html__('$00.00', 'aegis') . '</strong></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"className":"has-large-font-size"} -->
				<h3 class="wp-block-heading has-large-font-size">' . esc_html__('[Product Name]', 'aegis') . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>' . esc_html__('[A range of 50-150 characters is common for grid view descriptions. This is just enough to give a brief overview of the product without overwhelming the viewer.]', 'aegis') . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"background","className":"is-style-aegis-button-shadow-outline"} -->
					<div class="wp-block-button is-style-aegis-button-shadow-outline"><a class="wp-block-button__link has-background-background-color has-background wp-element-button">' . esc_html__('[Call to Action]', 'aegis') . '</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"backgroundColor":"tertiary"} -->
		<div class="wp-block-column has-tertiary-background-color has-background">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-aegis-effect-2-image"} -->
			<figure class="wp-block-image size-full is-style-aegis-effect-2-image"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/thumb_1200x1920_dark.webp" alt="' . esc_attr__('Describe the main elements of the image and its context.', 'aegis') . '" style="aspect-ratio:3/4;object-fit:cover" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-default"} -->
			<div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"fontSize":"tiny"} -->
					<p class="has-tiny-font-size" style="letter-spacing:2px"><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-half"></span><span class="dashicons dashicons-star-empty"></span></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>' . esc_html__('$00.00', 'aegis') . '</strong></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"className":"has-large-font-size"} -->
				<h3 class="wp-block-heading has-large-font-size">' . esc_html__('[Product Name]', 'aegis') . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>' . esc_html__('[A range of 50-150 characters is common for grid view descriptions. This is just enough to give a brief overview of the product without overwhelming the viewer.]', 'aegis') . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"tertiary","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-aegis-button-shadow-outline","fontSize":"small"} -->
					<div class="wp-block-button has-custom-font-size is-style-aegis-button-shadow-outline has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-tertiary-background-color has-background wp-element-button">' . esc_html__('[Call to Action]', 'aegis') . '</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"backgroundColor":"foreground"} -->
		<div class="wp-block-column has-foreground-background-color has-background">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-aegis-effect-2-image"} -->
			<figure class="wp-block-image size-full is-style-aegis-effect-2-image"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/thumb_1200x1920_dark.webp" alt="' . esc_attr__('Describe the main elements of the image and its context.', 'aegis') . '" style="aspect-ratio:3/4;object-fit:cover" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"textColor":"background","className":"is-style-default"} -->
			<div class="wp-block-group is-style-default has-background-color has-text-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"fontSize":"tiny"} -->
					<p class="has-tiny-font-size" style="letter-spacing:2px"><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-half"></span><span class="dashicons dashicons-star-empty"></span></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>' . esc_html__('$00.00', 'aegis') . '</strong></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"className":"has-large-font-size"} -->
				<h3 class="wp-block-heading has-large-font-size">' . esc_html__('[Product Name]', 'aegis') . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>' . esc_html__('[A range of 50-150 characters is common for grid view descriptions. This is just enough to give a brief overview of the product without overwhelming the viewer.]', 'aegis') . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-aegis-button-shadow-outline","fontSize":"small"} -->
					<div class="wp-block-button has-custom-font-size is-style-aegis-button-shadow-outline has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link wp-element-button">' . esc_html__('[Call to Action]', 'aegis') . '</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);