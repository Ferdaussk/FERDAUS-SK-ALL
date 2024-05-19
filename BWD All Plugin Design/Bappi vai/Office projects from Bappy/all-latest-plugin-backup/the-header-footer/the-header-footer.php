<?php
/**
 * Plugin Name: The Header Footer
 * Description: The Header Footer plugin with 33+ type of responsive designs also unlimited hf members for Elementor.
 * Plugin URI:  https://bwdplugins.com/the-header-footer
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: the-header-footer
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class The_Header_Footer{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'thf_init', array( $this, 'thf_loaded_textdomain' ) );
		// thf_init Plugin
		add_action( 'plugins_loaded', array( $this, 'thf_init' ) );
	}

	public function thf_loaded_textdomain() {
		load_plugin_textdomain( 'the-header-footer' );
	}

	public function thf_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'thf_admin_notice_missing_main_plugin');
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'thf_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'thf_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'thf_plugin_boots.php' );
	}

	public function thf_admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'the-header-footer' ),
			'<strong>' . esc_html__( 'The Header Footer', 'the-header-footer' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'the-header-footer' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	public function thf_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'the-header-footer' ),
			'<strong>' . esc_html__( 'The Header Footer', 'the-header-footer' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'the-header-footer' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'the-header-footer') . '</p></div>', $message );
	}

	public function thf_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'the-header-footer' ),
			'<strong>' . esc_html__( 'The Header Footer', 'the-header-footer' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'the-header-footer' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'the-header-footer') . '</p></div>', $message );
	}
}

// Instantiate the-header-footer.
new The_Header_Footer();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );