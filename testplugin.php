<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              test.com
 * @since             1.0.0
 * @package           Testplugin
 *
 * @wordpress-plugin
 * Plugin Name:       testplugin
 * Plugin URI:        testpluginurl
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            ryan
 * Author URI:        test.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       testplugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-testplugin-activator.php
 */
function activate_testplugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-testplugin-activator.php';
	Testplugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-testplugin-deactivator.php
 */
function deactivate_testplugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-testplugin-deactivator.php';
	Testplugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_testplugin' );
register_deactivation_hook( __FILE__, 'deactivate_testplugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-testplugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_testplugin() {

	$plugin = new Testplugin();
	$plugin->run();

}
run_testplugin();
