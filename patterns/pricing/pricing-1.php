<?php
/**
 * 01. Pricing Block Pattern
 */
return array(
	'title'	      => __( '01. Pricing Table', 'aegis' ),
	'description' => __( 'Pricing three-columns, with headings, paragraphs, and call to action buttons', 'aegis' ),
	'categories'  => array( 'aegis-pricing' ),
	'content' => '<!-- wp:group {"metadata":{"name":"' . esc_html__('01. Pricing Pattern', 'aegis') . '"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|30","top":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:heading {"textAlign":"center","level":3,"align":"wide","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"gigantic"} -->
		<h3 class="wp-block-heading alignwide has-text-align-center has-gigantic-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__('[Heading]', 'aegis') . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
		<p class="has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__('Plans Intro (133 chars): [Introduce the range or essence of the available plans.]', 'aegis') . '</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"width":"1px"}},"borderColor":"foreground"} -->
				<div class="wp-block-column has-border-color has-foreground-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:heading {"level":3,"textColor":"contrast","fontSize":"huge"} -->
						<h3 class="wp-block-heading has-contrast-color has-text-color has-huge-font-size">' . esc_html__('[Plan]', 'aegis') . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html__('Plan Description (26 chars): [Briefly highlight key features or value.]', 'aegis') . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
					<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast","fontSize":"gigantic"} -->
						<p class="has-contrast-color has-text-color has-gigantic-font-size" style="font-style:normal;font-weight:600">$00.00</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size" style="font-style:normal;font-weight:400">' . esc_html__('or $00.00 [monthly / yearly]', 'aegis') . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary"} -->
					<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
					<!-- /wp:separator -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
						<!-- wp:button {"backgroundColor":"background","width":100,"className":"is-style-aegis-button-shadow-outline"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-aegis-button-shadow-outline">
							<a class="wp-block-button__link has-background-background-color has-background wp-element-button" href="#">' . esc_html__('[Call to Action]', 'aegis') . '</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary"} -->
					<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
					<!-- /wp:separator -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size">' . esc_html__('Feature Highlight (26 chars):', 'aegis') . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size">' . esc_html__('[Describe a specific feature or set of features.]', 'aegis') . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"width":"1px"}},"borderColor":"foreground","backgroundColor":"foreground","textColor":"background"} -->
				<div class="wp-block-column has-border-color has-foreground-border-color has-background-color has-foreground-background-color has-text-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:heading {"level":3,"textColor":"contrast","fontSize":"huge"} -->
						<h3 class="wp-block-heading has-contrast-color has-text-color has-huge-font-size">' . esc_html__('[Plan]', 'aegis') . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html__('Plan Description (26 chars): [Briefly highlight key features or value.]', 'aegis') . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
					<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast","fontSize":"gigantic"} -->
						<p class="has-contrast-color has-text-color has-gigantic-font-size" style="font-style:normal;font-weight:600">' . esc_html__('$00.00', 'aegis') . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size" style="font-style:normal;font-weight:400">' . esc_html__('or $00.00 [monthly / yearly]', 'aegis') . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary"} -->
					<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
					<!-- /wp:separator -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
						<!-- wp:button {"backgroundColor":"foreground","width":100,"className":"is-style-aegis-button-shadow-outline"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-aegis-button-shadow-outline"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" href="#">' . esc_html__('[Call to Action]', 'aegis') . '</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary"} -->
					<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
					<!-- /wp:separator -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size">' . esc_html__('Feature Highlight (26 chars):', 'aegis') . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size">' . esc_html__('[Describe a specific feature or set of features.]', 'aegis') . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"width":"1px"}},"borderColor":"foreground","backgroundColor":"secondary"} -->
				<div class="wp-block-column has-border-color has-foreground-border-color has-secondary-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:heading {"level":3,"textColor":"contrast","fontSize":"huge"} -->
						<h3 class="wp-block-heading has-contrast-color has-text-color has-huge-font-size">' . esc_html__('[Plan]', 'aegis') . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html__('Plan Description (26 chars): [Briefly highlight key features or value.]', 'aegis') . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
					<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast","fontSize":"gigantic"} -->
						<p class="has-contrast-color has-text-color has-gigantic-font-size" style="font-style:normal;font-weight:600">' . esc_html__('$00.00', 'aegis') . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size" style="font-style:normal;font-weight:400">' . esc_html__('or $00.00 [monthly / yearly]', 'aegis') . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"foreground"} -->
					<hr class="wp-block-separator has-text-color has-foreground-color has-alpha-channel-opacity has-foreground-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
					<!-- /wp:separator -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
						<!-- wp:button {"backgroundColor":"secondary","width":100,"className":"is-style-aegis-button-shadow-outline"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-aegis-button-shadow-outline">
							<a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="#">' . esc_html__('[Call to Action]', 'aegis') . '</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"foreground"} -->
					<hr class="wp-block-separator has-text-color has-foreground-color has-alpha-channel-opacity has-foreground-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
					<!-- /wp:separator -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size">' . esc_html__('Feature Highlight (26 chars):', 'aegis') . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size">' . esc_html__('[Describe a specific feature or set of features.]', 'aegis') . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
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