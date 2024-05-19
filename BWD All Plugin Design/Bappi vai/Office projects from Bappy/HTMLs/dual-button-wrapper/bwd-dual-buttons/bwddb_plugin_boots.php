<?php
namespace DualButtons;

use DualButtons\PageSettings\Page_Settings;
define( "BWDDB_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDDB_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class ClassDualButtons {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwddb_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwddb_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwddb_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwddb_the_buttons_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/dual-button.php' );
	}

	public function bwddb_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDDBDualButtons() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/dual-button-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwddb_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwd-dual-buttons-category',
			[
				'title' => esc_html__( 'BWD Dual Buttons', 'bwd-dual-buttons' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwddb_all_assets_for_the_public(){
		$all_css_js_file = array(
            'bwddb_buttons-buttons_css' => array('bwddb_path_define'=>BWDDB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/dual-buttons.css'),
            'bwddb_buttons_fontawesome_css' => array('bwddb_path_define'=>BWDDB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwddb_path_define'], null, '1.0', 'all');
        }
	}
	public function bwddb_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwddb_buttons_admin_main_css' => array('bwddb_path_admin_define'=>BWDDB_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwddb_path_admin_define'], null, '1.0', 'all');
        }
	}
	
	public function __construct() {

		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwddb_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwddb_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwddb_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwddb_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwddb_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassDualButtons::instance();