<?php
/**
 * Plugin Name: BWD Brand Logo
 * Description: BWD Brand Logo is beautiful responsive Brand Logo with Carousel, Grid & Filter design for elementor.
 * Plugin URI:  https://bestwpdeveloper.com/elementor-logo-carousel-for-brand-logo
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://wppluginzone.com/
 * Text Domain: bwdlc-brand-logo
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class BWDLCBrandLogoFinal{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {

		// Load translation
		add_action( 'bwdlc_init', array( $this, 'bwdlc_loaded_textdomain' ) );

		// bwdlc_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdlc_init' ) );
	}

	public function bwdlc_loaded_textdomain() {
		load_plugin_textdomain( 'bwdlc-brand-logo' );
	}

	public function bwdlc_init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'bwdlc_admin_notice_missing_main_plugin');
			return;
		}


		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdlc_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdlc_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdlc-brand-logo-boots.php' );
	}

	public function bwdlc_admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'bwdlc-brand-logo' ),
			'<strong>' . esc_html__( 'BWD Accordion', 'bwdlc-brand-logo' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdlc-brand-logo' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdlc-brand-logo') . '</p></div>', $message );
	}

	public function bwdlc_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdlc-brand-logo' ),
			'<strong>' . esc_html__( 'BWD Accordion', 'bwdlc-brand-logo' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdlc-brand-logo' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdlc-brand-logo') . '</p></div>', $message );
	}

	public function bwdlc_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdlc-brand-logo' ),
			'<strong>' . esc_html__( 'BWD Accordion', 'bwdlc-brand-logo' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdlc-brand-logo' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdlc-brand-logo') . '</p></div>', $message );
	}
}

// Instantiate bwdlc-brand-logo.
new BWDLCBrandLogoFinal();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );