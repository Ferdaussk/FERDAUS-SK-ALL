<?php
/**
 * Plugin Name: BWD Accordion
 * Description: BWD Accordion is beautiful responsive accordion with unique design and powerfull accordion submitter for FAQ or others.
 * Plugin URI:  https://bestwpdeveloper.com/plugins/elementor/bwd-accordion
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwd-accordion
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class BWDACAccordion_Creator{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {

		// Load translation
		add_action( 'bwdac_init', array( $this, 'bwdac_loaded_textdomain' ) );

		// bwdac_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdac_init' ) );
	}

	public function bwdac_loaded_textdomain() {
		load_plugin_textdomain( 'bwd-accordion' );
	}

	public function bwdac_init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'bwdac_admin_notice_missing_main_plugin');
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdac_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdac_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwd-accordion-boots.php' );
	}

	public function bwdac_admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'bwd-accordion' ),
			'<strong>' . esc_html__( 'BWD Accordion', 'bwd-accordion' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwd-accordion' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-accordion') . '</p></div>', $message );
	}

	public function bwdac_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-accordion' ),
			'<strong>' . esc_html__( 'BWD Accordion', 'bwd-accordion' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwd-accordion' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-accordion') . '</p></div>', $message );
	}

	public function bwdac_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-accordion' ),
			'<strong>' . esc_html__( 'BWD Accordion', 'bwd-accordion' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwd-accordion' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-accordion') . '</p></div>', $message );
	}
}

// Instantiate bwd-accordion.
new BWDACAccordion_Creator();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );