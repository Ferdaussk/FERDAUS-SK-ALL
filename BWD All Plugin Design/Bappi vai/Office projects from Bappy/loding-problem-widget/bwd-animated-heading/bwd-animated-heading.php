<?php
/**
 * Plugin Name: BWD Animated Heading
 * Description: BWD Animated Heading plugin with 15+ types of  Animated Heading Effects also custom text creator for Elementor.
 * Plugin URI:  https://bestwpdeveloper.com/plugins/elementor/bwdah-animated-heading
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwdah-animated-heading
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/class-tgm-plugin-activation.php';
final class FinalBWDAHAnimatedHeading{ 

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdah_init', array( $this, 'bwdah_loaded_textdomain' ) );

		// bwdah_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdah_init' ) );
	}



	public function bwdah_loaded_textdomain() {
		load_plugin_textdomain( 'bwdah-animated-heading' );
	}



	public function bwdah_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// For tgm plugin activation
			add_action( 'tgmpa_register', [$this, 'bwdah_animated_heading_register_required_plugins'] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdah_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdah_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdah_plugin_boots.php' );
	}


	function bwdah_animated_heading_register_required_plugins() {
		$plugins = array(
			array(
				'name'        => esc_html__('Elementor', 'bwdah-animated-heading'),
				'slug'        => 'elementor',
				'is_callable' => 'wpseo_init',
			),
		);

		$config = array(
			'id'           => 'bwdah-animated-heading',
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

	public function bwdah_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdah-animated-heading' ),
			'<strong>' . esc_html__( 'BWD Count Down', 'bwdah-animated-heading' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdah-animated-heading' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdah-animated-heading') . '</p></div>', $message );
	}

	public function bwdah_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdah-animated-heading' ),
			'<strong>' . esc_html__( 'BWD Count Down', 'bwdah-animated-heading' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdah-animated-heading' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdah-animated-heading') . '</p></div>', $message );
	}
}

// Instantiate bwdah-animated-heading.
new FinalBWDAHAnimatedHeading();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );