<?php
namespace Creativestroketext;

use Creativestroketext\PageSettings\Page_Settings;
define( "BWDST_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDST_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class ClassBWDSTstroketext {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdst_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdst_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdst_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdst_the_step_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdst-fancy-text.php' );
	}

	public function bwdst_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDSTfancytext() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdst-stroke-text-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdst_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdst-stroke-text-category',
			[
				'title' => esc_html__( 'BWD stroke text', 'bwdst-stroke-text' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdst_all_assets_for_the_public(){
		$all_css_js_file = array(
            'bwdst_step_font_awesome_css' => array('bwdst_path_define'=>BWDST_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),
            'bwdst_step_bootstrap_css' => array('bwdst_path_define'=>BWDST_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bootstrap.min.css'),
            'bwdst_step_style_css' => array('bwdst_path_define'=>BWDST_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),

        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdst_path_define'], null, '1.0', 'all');
        }
	}
	public function bwdst_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdst_stroke_text_admin_icon_css' => array('bwdst_path_admin_define'=>BWDST_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdst_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdst_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdst_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdst_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdst_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdst_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDSTstroketext::instance();