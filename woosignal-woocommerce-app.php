<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://woosignal.com
 * @since             1.0.0
 * @package           Woosignal_Woocommerce_App
 *
 * @wordpress-plugin
 * Plugin Name:       WooSignal WooCommerce App
 * Plugin URI:        https://wordpress.org/plugins/woosignal-woocommerce-app
 * Description:       Mobile Woocommerce app templates, connect your store in minutes and have a complete native IOS or Android app for your customers on the App store.
 * Version:           2.0.3
 * Author:            WooSignal
 * Author URI:        https://woosignal.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woosignal-woocommerce-app
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WOOSIGNAL_WOOCOMMERCE_APP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woosignal-woocommerce-app-activator.php
 */
function activate_woosignal_woocommerce_app() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woosignal-woocommerce-app-activator.php';
	Woosignal_Woocommerce_App_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woosignal-woocommerce-app-deactivator.php
 */
function deactivate_woosignal_woocommerce_app() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woosignal-woocommerce-app-deactivator.php';
	Woosignal_Woocommerce_App_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woosignal_woocommerce_app' );
register_deactivation_hook( __FILE__, 'deactivate_woosignal_woocommerce_app' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woosignal-woocommerce-app.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woosignal_woocommerce_app() {

	$plugin = new Woosignal_Woocommerce_App();
	$plugin->run();

}
run_woosignal_woocommerce_app();
