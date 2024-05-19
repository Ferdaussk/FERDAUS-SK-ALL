<?php
namespace Creativewebinarinfo;

use Creativewebinarinfo\PageSettings\Page_Settings;
define( "BWDWI_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDWI_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class ClassBWDWIwebinar {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdwi_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdwi_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdwi_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdwi_the_step_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdwi-webinar-info.php' );
	}

	public function bwdwi_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\bwdWIwebinarinfo() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdwi-webinar-info-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdwi_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdwi-webinar-info-category',
			[
				'title' => esc_html__( 'BWD Webinar Info', 'bwd-webinar-info' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdwi_all_assets_for_the_public(){
		wp_enqueue_style( 'bwdwi_webinar_Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css', array(),'6.1.2','all');
		wp_enqueue_style( 'bwdwi_webinar_bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', array(), '5.7.2', 'all' );

		//count down js
		wp_enqueue_script( 'bwdwi_count_down_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/main.js', array(), '1.0', true );


		$all_css_js_file = array(
            'bwdwi_webinar_style_css' => array('bwdwi_path_define'=>BWDWI_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdwi_path_define'], null, '1.0', 'all');
        }
	}
	public function bwdwi_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdwi_webinar_info_admin_icon_css' => array('bwdwi_path_admin_define'=>BWDWI_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdwi_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdwi_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdwi_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdwi_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdwi_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdwi_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDWIwebinar::instance();