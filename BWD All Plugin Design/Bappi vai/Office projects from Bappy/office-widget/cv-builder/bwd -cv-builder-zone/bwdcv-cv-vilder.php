<?php
/**
 * Plugin Name: BWD CV VILDER
 * Description: BWD cv vilder with eye-cathing style. 15+ preset design
 * Plugin URI:  https://bwdplugins.com/plugins/bwdcv-cv-builder/
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwdcv-cv-builder
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/class-tgm-plugin-activation.php';

final class FinalbwdcvVilder{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdcv_init', array( $this, 'bwdcv_loaded_textdomain' ) );
		// bwdcv_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdcv_init' ) );
	}

	public function bwdcv_loaded_textdomain() {
		load_plugin_textdomain( 'bwdcv-cv-builder' );
	}

	public function bwdcv_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// For tgm plugin activation
			add_action( 'tgmpa_register', [$this, 'bwdcv_cv_vilder_register_required_plugins'] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdcv_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdcv_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdcv-boots.php' );
	}

	function bwdcv_cv_vilder_register_required_plugins() {
		$plugins = array(
			array(
				'name'        => esc_html__('Elementor', 'bwdcv-cv-builder'),
				'slug'        => 'elementor',
				'is_callable' => 'wpseo_init',
			),
		);

		$config = array(
			'id'           => 'bwdcv-cv-builder',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'parent_slug'  => 'plugins.php',
			'capability'   => 'manage_options',
			'has_notices'  => true,
			'dismissable'  => true,
			'dismiss_msg'  => '',
			'is_automatic' => false,
			'message'      => '',
		);
	
		tgmpa( $plugins, $config );
	}

	public function bwdcv_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdcv-cv-builder' ),
			'<strong>' . esc_html__( 'BWD Cv Vilder', 'bwdcv-cv-builder' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdcv-cv-builder' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdcv-cv-builder') . '</p></div>', $message );
	}

	public function bwdcv_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdcv-cv-builder' ),
			'<strong>' . esc_html__( 'BWD Cv Vilder', 'bwdcv-cv-builder' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdcv-cv-builder' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdcv-cv-builder') . '</p></div>', $message );
	}
}

// Instantiate bwdcv-cv-builder.
new FinalbwdcvVilder();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );