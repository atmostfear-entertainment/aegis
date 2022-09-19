<?php
/**
 * The Responsive Slider Customizer control.
 *
 * @package Aeon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Aeon_Resp_Slider_Control' ) ) {
	/**
	 * Control class.
	 */
	class Aeon_Resp_Slider_Control extends WP_Customize_Control {
		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'aeon-resp-slider';

		/**
		 * Additional arguments passed to JavaScript.
		 *
		 * @var array
		 */
		public $content;

		/**
		 * Additional arguments passed to JavaScript.
		 *
		 * @var array
		 */
		public $default = array();

		/**
		 * Additional arguments passed to JavaScript.
		 *
		 * @var array
		 */
		public $defaultUnit = '';

		/**
		 * Additional arguments passed to JavaScript.
		 *
		 * @var array
		 */
		public $input_attrs = array();

		/**
		 * Additional arguments passed to JavaScript.
		 *
		 * @var array
		 */
		public $suffix = '';

		/**
		 * Custom control class.
		 *
		 * @access public
		 * @var string
		 */
		public $custom_class = '';
	
		/**
		 * Refresh the parameters passed to the JavaScript via JSON.
		 *
		 * @since 3.4.0
		 * @uses WP_Customize_Control::to_json()
		 */
		public function to_json() {
			parent::to_json();
			$this->json['content'] = $this->content;
			$this->json['default'] = $this->default;
			$this->json['defaultUnit'] = $this->defaultUnit;
			$this->json['input_attrs'] = $this->input_attrs;
			$this->json['custom_class'] = $this->custom_class;
			$this->json['suffix'] = $this->suffix;
		}
	}
}
