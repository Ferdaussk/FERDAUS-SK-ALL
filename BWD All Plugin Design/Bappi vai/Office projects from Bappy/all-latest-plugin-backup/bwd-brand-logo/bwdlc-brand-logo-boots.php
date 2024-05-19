<?php
namespace BwdBrandLogo;

use BwdBrandLogo\PageSettings\Page_Settings;

define('BWDLC_BRAND_LOGO_PUBLIC_ASSETS_ALL', plugin_dir_url(__FILE__) . 'assets/public');
define('BWDLC_TEST_ASFSK_ASSETS_ADMIN_DIR_FILE', plugin_dir_url(__FILE__) . 'assets/admin');

class BWDLCBrandLogoCreator {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdlc_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdlc_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdlc_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdlc_brand_logo_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdlc-logo-carousel-widget.php' );
		require_once( __DIR__ . '/widgets/bwdlc-logo-grid-widget.php' );
		require_once( __DIR__ . '/widgets/bwdlc-logo-filter-widget.php' );
	}


	public function bwdlc_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files(); 

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDLCLogoCarousel() );

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDLCLogoGrid() );

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDLCLogoFilter() );
	}


	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdlc-brand-logo-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdlc_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdlc-brand-logo-category',
			[
				'title' => esc_html__( 'BWD Brand Logo', 'bwdlc-brand-logo' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdlc_all_assets_for_the_public(){

		//font awesome css
		wp_enqueue_style( 'bwdlc-fs-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all' );

		//bs css
		wp_enqueue_style( 'bwdlc-bs-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.0', 'all' );


		//jquery cdn
		wp_enqueue_script( 'bwdlc_brand_logo_jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array('jquery'), '2.2.4', true );

		//bs js cdn
		wp_enqueue_script( 'bwdlc_logo_bs_js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true );

		//owl carousel js
		wp_enqueue_script( 'bwdlc_brand_logo_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/owl.carousel.min.js', array('jquery'), '1.0', true );

		//main js
		wp_enqueue_script( 'bwdlc_brand_logo_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/main.js', array('jquery'), '1.0', true );

		$all_css_js_file = array(
			'bwdlc_brand_logo_slider_css' => array('bwdlc_path_define_with_brand_logo'=>BWDLC_BRAND_LOGO_PUBLIC_ASSETS_ALL . '/css/owl.carousel.min.css'),
			'bwdlc_brand_logo_main_css' => array('bwdlc_path_define_with_brand_logo'=>BWDLC_BRAND_LOGO_PUBLIC_ASSETS_ALL . '/css/bwdlc-main.css'),
			// animate css
        );

        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdlc_path_define_with_brand_logo'], null, '1.0', 'all');
        }
		
	}
	public function bwdlc_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdlc_brand_logo_admin_main_css' => array('bwdlc_path_admin_define'=>BWDLC_TEST_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdlc_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {


		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdlc_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdlc_all_assets_for_elementor_editor_admin']);

		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdlc_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdlc_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdlc_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
BWDLCBrandLogoCreator::instance();
