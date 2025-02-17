<?php

/**
 * Plugin Name: Happy Elementor Addons Pro
 * Plugin URI: https://happyaddons.com/
 * Secret Key: 83a5bb0e2ad5164690bc7a42ae592cf5
 * Description: <a href="https://happyaddons.com/">HappyAddons</a> is a collection of slick, powerful widgets that works seamlessly with Elementor page builder. It�s trendy look with detail customization features allows to create extraordinary designs instantly.
 * Version: 2.4.0
 * Author: weDevs
 * Author URI: https://happyaddons.com/
 * Elementor tested up to: 3.6.6
 * Elementor Pro tested up to: 3.7.2
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: happy-addons-pro
 * Domain Path: /languages/
 *
 * @package Happy_Addons_Pro
 */

defined('ABSPATH') || die();

define('HAPPY_ADDONS_PRO_VERSION', '2.4.0');
define('HAPPY_ADDONS_PRO_REQUIRED_MINIMUM_VERSION', '3.3.0');
define('HAPPY_ADDONS_PRO__FILE__', __FILE__);
define('HAPPY_ADDONS_PRO_DIR_PATH', plugin_dir_path(HAPPY_ADDONS_PRO__FILE__));
define('HAPPY_ADDONS_PRO_DIR_URL', plugin_dir_url(HAPPY_ADDONS_PRO__FILE__));
define('HAPPY_ADDONS_PRO_ASSETS', trailingslashit(HAPPY_ADDONS_PRO_DIR_URL . 'assets'));


function hapro_plugin_updated($upgrader_object, $options) {
	$current_plugin_path_name = plugin_basename(__FILE__);

	if ($options['action'] == 'update' && $options['type'] == 'plugin') {
		foreach ($options['plugins'] as $each_plugin) {
			if ($each_plugin == $current_plugin_path_name) {
				delete_option('hapro_used_skin_widgets');
			}
		}
	}
}

add_action('upgrader_process_complete', 'hapro_plugin_updated', 10, 2);

/**
 * The journey of a thousand miles starts here.
 *
 * @return void Some voids are not really void, you have to explore to figure out why not!
 */
function hapro_let_the_journey_begin() {

	/**
	 * Check for Happy Elementor Addons existence
	 * And prevent further execution if doesn't exist.
	 */
	if (!did_action('happyaddons_loaded')) {
		add_action('admin_notices', 'hapro_missing_happyaddons_notice');
		return;
	}

	/**
	 * Check for Happy Elementor Addons required version
	 * And prevent further execution if doesn't match.
	 */
	if (!version_compare(HAPPY_ADDONS_VERSION, HAPPY_ADDONS_PRO_REQUIRED_MINIMUM_VERSION, '>=')) {
		add_action('admin_notices', 'hapro_required_version_missing_notice');
		return;
	}

	/**
	 * Finally we got approval to load the Happy engine!
	 */
	include_once HAPPY_ADDONS_PRO_DIR_PATH . 'base.php';

	\Happy_Addons_Pro\Base::instance();
}

add_action('plugins_loaded', 'hapro_let_the_journey_begin', 20);

/**
 * Happy Elementor Addons missing notice for admin panel.
 *
 * @return void
 */
function hapro_missing_happyaddons_notice() {
	$notice = sprintf(
		/* translators: 1: Plugin name 2: Happy Elementor Addons */
		esc_html__('%1$s requires %2$s to be installed and activated. Please install %3$s', 'happy-addons-pro'),
		'<strong>' . esc_html__('Happy Elementor Addons Pro', 'happy-addons-pro') . '</strong>',
		'<strong>' . esc_html__('Happy Elementor Addons', 'happy-addons-pro') . '</strong>',
		'<a target="_blank" rel="noopener" href="' . esc_url(admin_url('plugin-install.php?s=Happy+Elementor+Addons&tab=search&type=term')) . '">' . esc_html__('Happy Elementor Addons', 'happy-addons-pro') . '</a>'
	);

	printf('<div class="notice notice-error is-dismissible"><p>%1$s</p></div>', $notice);
}

/**
 * Happy Elementor Addons version incompatibility notice for admin panel.
 *
 * @return void
 */
function hapro_required_version_missing_notice() {
	$notice = sprintf(
		/* translators: 1: Plugin name 2: Happy Elementor Addons 3: Required Happy Elementor Addons version */
		esc_html__('%1$s requires %2$s version %3$s or greater. Please update your %2$s', 'happy-addons-pro'),
		'<strong>' . esc_html__('Happy Elementor Addons Pro', 'happy-addons-pro') . '</strong>',
		'<strong>' . esc_html__('Happy Elementor Addons', 'happy-addons-pro') . '</strong>',
		HAPPY_ADDONS_PRO_REQUIRED_MINIMUM_VERSION
	);

	printf('<div class="notice notice-error is-dismissible"><p>%1$s</p></div>', $notice);
}

/**
 * This function runs when WordPress completes its upgrade process
 * It iterates through each plugin updated to see if ours is included
 * @param $upgrader_object Array
 * @param $options Array
 */
function hapro_upgrade_completed($upgrader_object, $options) {
	// The path to our plugin's main file
	$hapro = plugin_basename(__FILE__);
	if ('update' == $options['action'] && 'plugin' == $options['type'] && isset($options['plugins'])) {
		foreach ($options['plugins'] as $plugin) {
			if ($plugin == $hapro) {
				flush_rewrite_rules();
			}
		}
	}
}
add_action('upgrader_process_complete', 'hapro_upgrade_completed', 10, 2);