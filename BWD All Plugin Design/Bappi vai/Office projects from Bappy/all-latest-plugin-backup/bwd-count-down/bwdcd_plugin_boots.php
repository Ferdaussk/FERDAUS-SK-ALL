<?php
namespace BWDCDCountDown;

use BWDCDCountDown\PageSettings\Page_Settings;
define( "BWDCD_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDCD_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class ClassBWDCDCountDown {
	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdcd_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdcd_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdcd_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdcd_the_count_down_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}
		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdcd-count-down.php' );
	}


	public function bwdcd_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCDCountDownWidget() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/count-down-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdcd_add_elementor_widget_categories( $elements_manager ) {
		$elements_manager->add_category(
			'bwdcd-count-down-category',
			[
				'title' => esc_html__( 'BWD	Count Down', 'bwdcd-count-down' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdcd_all_assets_for_the_public(){

		wp_enqueue_script( 'bwdcd_count_down_custom_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/custom.js', array(), '1.0', true );

		$all_css_js_file = array(
            'bwdcd_count_down_main_css' => array('bwdcd_path_define'=>BWDCD_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
        );
		
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdcd_path_define'], null, '1.0', 'all');
        }
	}
	public function bwdcd_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdcd_count_down_admin_icon_css' => array('bwdcd_path_admin_define'=>BWDCD_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdcd_path_admin_define'], null, '1.0', 'all');
        }
	}
	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdcd_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdcd_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdcd_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdcd_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdcd_admin_editor_scripts' ] );
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDCDCountDown::instance();