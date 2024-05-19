<?php
/**
 * Plugin Name: BWD Slider
 * Description: BWD Slider plugin with 15+ types of Slider for Elementor.
 * Plugin URI:  https://wppluginzone.com/slider
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://wppluginzone.com/
 * Text Domain: bwdsd-slider
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class FinalBWDSDSlider{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdsd_init', array( $this, 'bwdsd_loaded_textdomain' ) );
		// bwdsd_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdsd_init' ) );
	}

	public function bwdsd_loaded_textdomain() {
		load_plugin_textdomain( 'bwdsd-slider' );
	}

	public function bwdsd_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// For requires check 
			add_action( 'admin_notices','bwdsd_slider_register_required_plugins' );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdsd_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdsd_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdsd_slider_boots.php' );
	}


	public function bwdsd_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdsd-slider' ),
			'<strong>' . esc_html__( 'BWD Slider', 'bwdsd-slider' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdsd-slider' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdsd-slider') . '</p></div>', $message );
	}

	public function bwdsd_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdsd-slider' ),
			'<strong>' . esc_html__( 'BWD Slider', 'bwdsd-slider' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdsd-slider' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdsd-slider') . '</p></div>', $message );
	}
}

// Instantiate bwdsd-slider.
new FinalBWDSDSlider();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );