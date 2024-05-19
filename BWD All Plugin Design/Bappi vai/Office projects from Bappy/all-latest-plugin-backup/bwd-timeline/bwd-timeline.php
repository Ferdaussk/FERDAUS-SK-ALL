<?php
/**
 * Plugin Name: Timeline
 * Description: BWD Timeline plugin with 23+ types of  Timeline Effects for Elementor.
 * Plugin URI:  https://wppluginzone.com/timeline-addon-for-elementor/
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://wppluginzone.com/
 * Text Domain: bwdtl-timeline
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class Final_BWD_Timeline{ 

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdtl_init', array( $this, 'bwdtl_loaded_textdomain' ) );

		// bwdtl_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdtl_init' ) );
	}


	public function bwdtl_loaded_textdomain() {
		load_plugin_textdomain( 'bwdtl-timeline' );
	}

	public function bwdtl_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// elementor activation check
			add_action( 'admin_notices','bwdtl_timeline_register_required_plugins');
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdtl_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdtl_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdtl_plugin_boots.php' );
	}

	public function bwdtl_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdtl-timeline' ),
			'<strong>' . esc_html__( 'Timeline', 'bwdtl-timeline' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdtl-timeline' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdtl-timeline') . '</p></div>', $message );
	}

	public function bwdtl_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdtl-timeline' ),
			'<strong>' . esc_html__( 'Timeline', 'bwdtl-timeline' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdtl-timeline' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdtl-timeline') . '</p></div>', $message );
	}
}

// Instantiate bwdtl-timeline.
new Final_BWD_Timeline();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );