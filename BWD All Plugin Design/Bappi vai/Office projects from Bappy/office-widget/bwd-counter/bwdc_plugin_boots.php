<?php
namespace bwdcCounter;

use bwdcCounter\PageSettings\Page_Settings;
define( "BWDC_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDC_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class ClassBWDCounter {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdc_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdc_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdc_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdc_the_counter_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdc-counter.php' );

	}

	public function bwdc_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCCounterWidget() );

	}



	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/counter-manager.php' );
		new Page_Settings();
	}


	// Register Category
	function bwdc_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdc-counter-category',
			[
				'title' => esc_html__( 'BWD Counter', 'bwdc-counter' ),
				'icon' => 'eicon-person',
			]
		);
	}

	public function bwdc_all_assets_for_the_public(){
		$all_css_js_file = array(
            'bwdc_counter_all_main_css' => array('bwdc_path_define'=>BWDC_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),

            'bwdc_counter_style_css' => array('bwdc_path_define'=>BWDC_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),

            'bwdc_counter_bootstrap_css' => array('bwdc_path_define'=>BWDC_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bs/bootstrap.min.css'),

            'bwdc_counter_custom_js' => array('bwdc_path_define'=>BWDC_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/custom.js'),

            'bwdc_counter_bootstrap_js' => array('bwdc_path_define'=>BWDC_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/bs/bootstrap.min.js'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdc_path_define'], null, '1.0', 'all');
            wp_enqueue_script( $handle, $fileinfo['bwdc_path_define'], ['jquery'], '1.0', true);
        }
	}

	public function bwdc_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdc_counter_admin_icon_css' => array('bwdc_path_admin_define'=>BWDC_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );

        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdc_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdc_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdc_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdc_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdc_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdc_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDCounter::instance();