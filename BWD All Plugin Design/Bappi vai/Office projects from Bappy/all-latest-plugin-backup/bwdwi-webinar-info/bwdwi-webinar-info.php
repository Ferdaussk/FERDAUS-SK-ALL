<?php
/**
 * Plugin Name: BWD webinar Info
 * Description: BWD webinar info is an Elementor plugin that has been enriched with 20+ unique ready-made designs. More designs will come very soon stay tuned
 * Plugin URI:  https://bestwpdeveloper.com/webinar-info-addon-for-elementor
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://wppluginzone.com/
 * Text Domain: bwdwi-webinar-info
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/class-plugin-activation.php';

final class Finalbwdwiwebinarinfo{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdwi_init', array( $this, 'bwdwi_loaded_textdomain' ) );
		// bwdwi_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdwi_init' ) );
	}

	public function bwdwi_loaded_textdomain() {
		load_plugin_textdomain( 'bwdwi-webinar-info' );
	}

	public function bwdwi_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// For notice plugin activation
			add_action( 'admin_notices', 'bwdwi_webinar_info_register_required_plugins' );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdwi_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdwi_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdwi-boots.php' );
	}

	public function bwdwi_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdwi-webinar-info' ),
			'<strong>' . esc_html__( 'BWD Webinar Info', 'bwdwi-webinar-info' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdwi-webinar-info' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdwi-webinar-info') . '</p></div>', $message );
	}

	public function bwdwi_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdwi-webinar-info' ),
			'<strong>' . esc_html__( 'BWD Webinar Info', 'bwdwi-webinar-info' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdwi-webinar-info' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdwi-webinar-info') . '</p></div>', $message );
	}
}

// Instantiate bwdwi-webinar-info.
new Finalbwdwiwebinarinfo();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );