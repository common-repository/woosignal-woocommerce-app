<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://woosignal.com
 * @since      1.0.0
 *
 * @package    Woosignal_Woocommerce_App
 * @subpackage Woosignal_Woocommerce_App/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woosignal_Woocommerce_App
 * @subpackage Woosignal_Woocommerce_App/includes
 * @author     WooSignal <support@woosignal.com>
 */
class Woosignal_Woocommerce_App_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woosignal-woocommerce-app',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
