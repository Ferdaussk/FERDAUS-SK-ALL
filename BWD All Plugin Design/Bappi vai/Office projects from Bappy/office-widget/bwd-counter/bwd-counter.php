<?php
/**
 * Plugin Name: BWD Counter
 * Description: BWD Counter plugin with 70+ types of  Counter Effects also custom text creator for Elementor.
 * Plugin URI:  https://bestwpdeveloper.com/plugins/elementor/bwdc-counter
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwdc-counter
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/class-tgm-plugin-activation.php';
final class FinalBWDCCounter{ 

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdc_init', array( $this, 'bwdc_loaded_textdomain' ) );

		// bwdc_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdc_init' ) );
	}



	public function bwdc_loaded_textdomain() {
		load_plugin_textdomain( 'bwdc-counter' );
	}



	public function bwdc_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// For tgm plugin activation
			add_action( 'tgmpa_register', [$this, 'bwdc_counter_register_required_plugins'] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdc_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdc_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdc_plugin_boots.php' );
	}


	function bwdc_counter_register_required_plugins() {
		$plugins = array(
			array(
				'name'        => esc_html__('Elementor', 'bwdc-counter'),
				'slug'        => 'elementor',
				'is_callable' => 'wpseo_init',
			),
		);

		$config = array(
			'id'           => 'bwdc-counter',
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

	public function bwdc_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdc-counter' ),
			'<strong>' . esc_html__( 'BWD Counter', 'bwdc-counter' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdc-counter' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdc-counter') . '</p></div>', $message );
	}

	public function bwdc_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdc-counter' ),
			'<strong>' . esc_html__( 'BWD Counter', 'bwdc-counter' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdc-counter' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdc-counter') . '</p></div>', $message );
	}
}

// Instantiate bwdc-counter.
new FinalBWDCCounter();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );