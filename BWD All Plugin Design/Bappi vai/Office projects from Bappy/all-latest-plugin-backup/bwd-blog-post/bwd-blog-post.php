<?php
/**
 * Plugin Name: BWD Blog Post
 * Description: BWD Blog Post is beautiful responsive Blog Post with Carousel, Grid & Filter design for elementor.
 * Plugin URI:  https://wppluginzone.com/blog-post
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://wppluginzone.com/
 * Text Domain: bwdbpc-blog-post
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class BWDBPCBlogPostFinal{


	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {

		// Load translation
		add_action( 'bwdbpc_init', array( $this, 'bwdbpc_loaded_textdomain' ) );

		// bwdbpc_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdbpc_init' ) );
	}

	public function bwdbpc_loaded_textdomain() {
		load_plugin_textdomain( 'bwdbpc-blog-post' );
	}

	public function bwdbpc_init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'bwdbpc_admin_notice_missing_main_plugin');
			return;
		}


		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdbpc_admin_notice_minimum_elementor_version' ) );
			return;
		}


		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdbpc_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdbpc-blog-post-boots.php' );
		
	}

	public function bwdbpc_admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'bwdbpc-blog-post' ),
			'<strong>' . esc_html__( 'Blog Post', 'bwdbpc-blog-post' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdbpc-blog-post' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdbpc-blog-post') . '</p></div>', $message );
	}

	public function bwdbpc_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdbpc-blog-post' ),
			'<strong>' . esc_html__( 'Blog Post', 'bwdbpc-blog-post' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwdbpc-blog-post' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);


		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdbpc-blog-post') . '</p></div>', $message );
	}

	public function bwdbpc_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwdbpc-blog-post' ),
			'<strong>' . esc_html__( 'Blog Post', 'bwdbpc-blog-post' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwdbpc-blog-post' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwdbpc-blog-post') . '</p></div>', $message );
	}
}
// Instantiate bwdbpc-blog-post.
new BWDBPCBlogPostFinal();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );