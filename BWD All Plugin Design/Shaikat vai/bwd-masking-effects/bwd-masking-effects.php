<?php
/**
 * Plugin Name: BWD Masking Effects
 * Description: BWD Masking Effects plugin with 110+ types of button design also flexible button creator for Elementor.
 * Plugin URI:  https://bestwpdeveloper.com/plugins/elementor/bwd-masking-effects
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwd-masking-effects
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/class-tgm-plugin-activation.php';
final class FinalBWDMEMasking{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdme_init', array( $this, 'bwdme_loaded_textdomain' ) );
		// bwdme_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdme_init' ) );
	}

	public function bwdme_loaded_textdomain() {
		load_plugin_textdomain( 'bwd-masking-effects' );
	}

	public function bwdme_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdme_admin_notice_missing_main_plugin' ) );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdme_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdme_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdme_plugin_boots.php' );
	}

	public function bwdme_admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'bwd-masking-effects' ),
			'<strong>' . esc_html__( 'BWD Masking Effects', 'bwd-masking-effects' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwd-masking-effects' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	public function bwdme_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-masking-effects' ),
			'<strong>' . esc_html__( 'BWD Masking Effects', 'bwd-masking-effects' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwd-masking-effects' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-masking-effects') . '</p></div>', $message );
	}

	public function bwdme_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-masking-effects' ),
			'<strong>' . esc_html__( 'BWD Masking Effects', 'bwd-masking-effects' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwd-masking-effects' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-masking-effects') . '</p></div>', $message );
	}
}

// Instantiate bwd-masking-effects.
new FinalBWDMEMasking();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );