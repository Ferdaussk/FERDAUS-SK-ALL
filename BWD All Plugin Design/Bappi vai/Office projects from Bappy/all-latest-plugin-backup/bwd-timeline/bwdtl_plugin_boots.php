<?php
namespace BWDTLTimeline;

use BWDTLTimeline\PageSettings\Page_Settings;
define( "BWDTL_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDTL_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class ClassBWDTLTimelineBoots {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdtl_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdtl_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdtl_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdtl_the_timeline_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}
		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdtl-timeline.php' );

	}

	public function bwdtl_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDTLTimelineWidget() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/timeline-manager.php' );
		new Page_Settings();
	}


	// Register Category
	function bwdtl_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdtl-timeline-category',
			[
				'title' => esc_html__( 'BWD Timeline', 'bwdtl-timeline' ),
				'icon' => 'eicon-person',
			]
		);
	}

	public function bwdtl_all_assets_for_the_public(){
		// font awesome
		wp_enqueue_style( 'bwdtl_fs', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css', array(),'5.9.0','all');

		// bootstrap css
		wp_enqueue_style( 'bwdtl_bs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(),'5.9.0','all');


		$all_css_js_file = array(
            'bwdtl_timeline_style_css' => array('bwdtl_path_define'=>BWDTL_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),

            'bwdtl_timeline_custom_js' => array('bwdtl_path_define'=>BWDTL_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/custom.js'),

        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdtl_path_define'], null, '1.0', 'all');
            wp_enqueue_script( $handle, $fileinfo['bwdtl_path_define'], ['jquery'], '1.0', true);
        }
	}

	public function bwdtl_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdtl_timeline_admin_icon_css' => array('bwdtl_path_admin_define'=>BWDTL_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );

        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdtl_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdtl_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdtl_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdtl_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdtl_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdtl_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDTLTimelineBoots::instance();