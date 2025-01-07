<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wpawsupload.com
 * @since      1.0.0
 *
 * @package    Wp_Aws_Upload
 * @subpackage Wp_Aws_Upload/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Aws_Upload
 * @subpackage Wp_Aws_Upload/includes
 * @author     PCPrajapat <wp.pcprajapat@gmail.com>
 */
class Wp_Aws_Upload_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-aws-upload',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
