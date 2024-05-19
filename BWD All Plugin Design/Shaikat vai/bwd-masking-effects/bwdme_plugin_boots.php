<?php
namespace Creativemasking;

use Creativemasking\PageSettings\Page_Settings;
define( "BWDME_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDME_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class ClassBWDMEmasking {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdme_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdme_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdme_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdme_the_masking_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdme-masking.php' );
		// require_once( __DIR__ . '/widgets/bwdme-masking-copy.php' );
	}

	public function bwdme_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDMEmasking() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/creative-masking-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdme_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwd-masking-effects-category',
			[
				'title' => esc_html__( 'BWD Masking Effects', 'bwd-masking-effects' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdme_all_assets_for_the_public(){
		$all_css_js_file = array(
            'bwdme_masking_main_css' => array('bwdme_path_define'=>BWDME_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdme-masking.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdme_path_define'], null, '1.0', 'all');
        }
	}
	public function bwdme_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdme_masking_admin_icon_css' => array('bwdme_path_admin_define'=>BWDME_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdme_path_admin_define'], null, '1.0', 'all');
        }
	}

	function bwdme_masking_register_required_plugins() {
		$plugins = array(
			array(
				'name'        => esc_html__('Elementor', 'bwd-masking-effects'),
				'slug'        => 'elementor',
				'is_callable' => 'wpseo_init',
			),
	
		);

		$config = array(
			'id'           => 'bwd-masking-effects',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'parent_slug'  => 'plugins.php',
			'capability'   => 'manage_options',
			'has_notices'  => true,
			'dismissable'  => true,
			'dismiss_msg'  => '',
			'is_automatic' => false,
			'message'      => '',
		);
	
		tgmpa( $plugins, $config );
	}
	
	public function __construct() {
		// For tgm plugin activation
		add_action( 'tgmpa_register', [$this, 'bwdme_masking_register_required_plugins'] );

		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdme_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdme_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdme_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdme_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdme_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDMEmasking::instance();