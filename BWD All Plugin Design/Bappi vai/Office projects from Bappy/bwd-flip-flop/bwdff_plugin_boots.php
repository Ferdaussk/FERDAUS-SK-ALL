<?php
namespace FFBWDFFlipBox;

use FFBWDFFlipBox\PageSettings\Page_Settings;
define( "BWDFF_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDFF_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class ClassBWDFlipBox {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdff_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdff_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdff_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdff_the_flipflop_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdff-service-flip-box.php' );
		require_once( __DIR__ . '/widgets/bwdff-team-flip-box.php' );
		require_once( __DIR__ . '/widgets/bwdff-step-flip-box.php' );
	}

	public function bwdff_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDServiceFlipBox() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDTeamFlipBox() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDStepFlipBox() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/flip-flop-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdff_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwd-flip-flop-category',
			[
				'title' => esc_html__( 'BWD Flip Flop', 'bwd-flip-flop' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdff_all_assets_for_the_public(){
		$all_css_js_file = array(
            'bwdff_flipflop_all_main_css' => array('bwdff_path_define'=>BWDFF_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),
            'bwdff_flipflop_style_css' => array('bwdff_path_define'=>BWDFF_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
            'bwdff_flipflop_bootstrap_css' => array('bwdff_path_define'=>BWDFF_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bs/bootstrap.min.css'),
            'bwdff_flipflop_custom_js' => array('bwdff_path_define'=>BWDFF_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/custom.js'),
            'bwdff_flipflop_bootstrap_js' => array('bwdff_path_define'=>BWDFF_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/bs/bootstrap.min.js'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdff_path_define'], null, '1.0', 'all');
            wp_enqueue_script( $handle, $fileinfo['bwdff_path_define'], ['jquery'], '1.0', true);
        }
	}
	public function bwdff_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdff_flipflop_admin_icon_css' => array('bwdff_path_admin_define'=>BWDFF_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdff_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdff_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdff_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdff_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdff_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdff_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDFlipBox::instance();