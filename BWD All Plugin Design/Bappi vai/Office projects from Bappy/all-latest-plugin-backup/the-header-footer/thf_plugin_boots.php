<?php
namespace TheHeaderFooter;

use TheHeaderFooter\PageSettings\Page_Settings;
define( "THF_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "THF_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class TheHeaderFooter {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function thf_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'thf_admin_editor_scripts_as_a_module' ], 10, 2 );
		add_filter( 'auto_update_plugin', '__return_false' );
	}
	
	public function thf_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'thf_the_hf_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}
		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/header_thf.php' );
	}

	public function thf_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register WidgetsF
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\THFTheHeader() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/manager.php' );
		new Page_Settings();
	}

	// Register Category
	function thf_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'thf-header-footer-category',
			[
				'title' => esc_html__( 'The Header Footer', 'the-header-footer' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function thf_all_assets_for_the_public(){
		wp_enqueue_script( 'thf_the_js_main', plugin_dir_url( __FILE__ ) . 'assets/public/js/main.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'thf_the_js_search_main', plugin_dir_url( __FILE__ ) . 'assets/public/js/search_main.js', array('jquery'), '1.0', true );
		wp_enqueue_style( 'thf_hf_plugin_fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css', null, '1.0', 'all' );
		$all_css_js_file = array(
            'thf_hf_creative_buttons_css' => array('thf_path_define'=>THF_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/creative-buttons.css'),
            'thf_hf_search_style_css' => array('thf_path_define'=>THF_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/search_style.css'),
            'thf_hf_social_icon_css' => array('thf_path_define'=>THF_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/social_icon.css'),
			'thf_hf_style_css' => array('thf_path_define'=>THF_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['thf_path_define'], null, '1.0', 'all');
        }
	}
	public function thf_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'thf_hf_admin_main_css' => array('thf_path_admin_define'=>THF_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['thf_path_admin_define'], null, '1.0', 'all');
        }
	}
	
	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'thf_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'thf_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'thf_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'thf_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'thf_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
TheHeaderFooter::instance();
