<?php
/**
 * Plugin Name: Business Hours
 * Description: Business Hours plugin with 15+ type of responsive designs also unlimited team members for Elementor.
 * Plugin URI:  https://bwdplugins.com/plugins/bwdbh-business-hours
 * Version:     1.3
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwdbh-business-hours
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/class-tgm-plugin-activation.php';
final class bwdbh_business_hours{

	const VERSION = '1.3';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdbh_init', array( $this, 'bwdbh_loaded_textdomain' ) );
		// bwdbh_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdbh_init' ) );
	}

	public function bwdbh_loaded_textdomain() {
		load_plugin_textdomain( 'bwdbh-business-hours' );
	}

	public function bwdbh_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdbh_admin_notice_missing_main_plugin' ) );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdbh_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdbh_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdbh-business-hours-boots.php' );
	}

	public function bwdbh_admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'bwdbh-business-hours' ),
			'<strong>' . esc_html__( 'Business Hours', 'bwdbh-business-hours' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdbh-business-hours' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	public function bwdbh_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdbh-business-hours' ),
			'<strong>' . esc_html__( 'Business Hours', 'bwdbh-business-hours' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdbh-business-hours' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdbh-business-hours') . '</p></div>', $message );
	}

	public function bwdbh_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdbh-business-hours' ),
			'<strong>' . esc_html__( 'Business Hours', 'bwdbh-business-hours' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdbh-business-hours' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdbh-business-hours') . '</p></div>', $message );
	}
}

// Instantiate bwdbh-business-hours.
new bwdbh_business_hours();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );