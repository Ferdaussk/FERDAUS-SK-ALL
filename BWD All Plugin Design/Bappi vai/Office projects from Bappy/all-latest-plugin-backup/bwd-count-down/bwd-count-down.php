<?php
/**
 * Plugin Name: Count Down
 * Description: Count Down plugin with 30+ types of Count Down Effects for Elementor.
 * Plugin URI:  https://wppluginzone.com/count-down-addon-for-elementor/
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://wppluginzone.com/
 * Text Domain: bwdcd-count-down
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class FinalBWDCDCountDown{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdcd_init', array( $this, 'bwdcd_loaded_textdomain' ) );
		// bwdcd_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdcd_init' ) );

	}

	public function bwdcd_loaded_textdomain() {
		load_plugin_textdomain( 'bwdcd-count-down' );
	}

	public function bwdcd_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {

			// elementor active checker
			add_action( 'admin_notices',  'bwdcd_count_down_register_required_plugins');
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdcd_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdcd_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdcd_plugin_boots.php' );
	}

	public function bwdcd_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdcd-count-down' ),
			'<strong>' . esc_html__( 'Count Down', 'bwdcd-count-down' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdcd-count-down' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdcd-count-down') . '</p></div>', $message );
	}

	public function bwdcd_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdcd-count-down' ),
			'<strong>' . esc_html__( 'Count Down', 'bwdcd-count-down' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdcd-count-down' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdcd-count-down') . '</p></div>', $message );
	}
}

// Instantiate bwdcd-count-down.
new FinalBWDCDCountDown();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );