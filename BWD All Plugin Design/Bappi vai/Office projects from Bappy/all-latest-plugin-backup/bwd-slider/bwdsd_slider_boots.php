<?php
namespace BWDSDSlider;

use BWDSDSlider\PageSettings\Page_Settings;

define( "BWDSD_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDSD_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class ClassBWDSDSlider {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdsd_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdsd_admin_editor_scripts_as_a_module' ], 10, 2 );
	}


	// public function bwdsd_slider_editor_script() {
	// 	wp_enqueue_script("bwdsd_slider_editor_js",plugins_url('assets/admin/js/bwdsd-slider-editor.js', __FILE__  ),array("jquery"),time(),true );
	// }

	public function bwdsd_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdsd_the_slider_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdsd-slider-widget.php' );
	}


	public function bwdsd_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDSDSliderWidget() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdsd-slider-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdsd_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdsd-slider-category',
			[
				'title' => esc_html__( 'BWD slider', 'bwdsd-slider' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdsd_all_assets_for_the_public(){
		wp_enqueue_style( 'Font_Awesome_mg_popup', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css', array(),'5.9.0','all');


		$all_css_js_file = array(
			// css
			'bwdsd_owl_slider_css' => array('bwdsd_path_define'=>BWDSD_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/owl.carousel.min.css'),

            'bwdsd_slider_style_css' => array('bwdsd_path_define'=>BWDSD_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),

			'bwdsd_slider_bs_css' => array('bwdsd_path_define'=>BWDSD_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bootstrap.min.css'),


			//js
			'bwdsd_slider_jquery_js' => array('bwdsd_path_define'=>BWDSD_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/jquery-3.6.1.min.js'),

			'bwdsd_owl_slider_js' => array('bwdsd_path_define'=>BWDSD_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/owl.carousel.min.js'),

            'bwdsd_slider_bootstrap_js' => array('bwdsd_path_define'=>BWDSD_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/bootstrap.bundle.min.js'),

            'bwdsd_slider_main_js' => array('bwdsd_path_define'=>BWDSD_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/main.js'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdsd_path_define'], null, '1.0', 'all');
            wp_enqueue_script( $handle, $fileinfo['bwdsd_path_define'], ['jquery'], '1.0', true);
        }
	}
	public function bwdsd_all_assets_for_elementor_editor_admin(){
		// wp_enqueue_script("bwdsd_slider_editor_lllljs",plugins_url('assets/admin/js/bwdsd-slider-editor.js', __FILE__  ),array("jquery"),time(),true );

		$all_css_js_file = array(
            'bwdsd_slider_admin_icon_css' => array('bwdsd_path_admin_define'=>BWDSD_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );

		
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdsd_path_admin_define'], null, '1.0', 'all');
        }

	}




	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdsd_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdsd_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdsd_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdsd_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdsd_admin_editor_scripts' ] );

		$this->add_page_settings_controls();
	}


}

// Instantiate Plugin Class
ClassBWDSDSlider::instance();