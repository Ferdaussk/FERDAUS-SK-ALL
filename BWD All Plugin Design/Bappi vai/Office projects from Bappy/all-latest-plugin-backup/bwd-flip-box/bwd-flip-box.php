<?php
/**
 * Plugin Name: BWD Flip Box
 * Description: BWD Flip Box plugin with 29+ types of flip box effects for Elementor with service step and team creator.
 * Plugin URI:  https://wppluginzone.com/flip-box-addon-for-elementor/
 * Version:     1.1
 * Author:      Best WP Developer
 * Author URI:  https://wppluginzone.com/
 * Text Domain: bwd-flip-flop
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class FinalBWDFFBWDFlipBox{

	const VERSION = '1.1';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdff_init', array( $this, 'bwdff_loaded_textdomain' ) );
		// bwdff_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdff_init' ) );
	}

	public function bwdff_loaded_textdomain() {
		load_plugin_textdomain( 'bwd-flip-flop' );
	}

	public function bwdff_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// For plugin activation check
			add_action( 'admin_notices','bwdff_flipflop_register_required_plugins' );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdff_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdff_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdff_plugin_boots.php' );
	}

	
	public function bwdff_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-flip-flop' ),
			'<strong>' . esc_html__( 'BWD Flip Box', 'bwd-flip-flop' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwd-flip-flop' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-flip-flop') . '</p></div>', $message );
	}

	public function bwdff_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-flip-flop' ),
			'<strong>' . esc_html__( 'BWD Flip Box', 'bwd-flip-flop' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwd-flip-flop' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-flip-flop') . '</p></div>', $message );
	}
}

// Instantiate bwd-flip-flop.
new FinalBWDFFBWDFlipBox();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );