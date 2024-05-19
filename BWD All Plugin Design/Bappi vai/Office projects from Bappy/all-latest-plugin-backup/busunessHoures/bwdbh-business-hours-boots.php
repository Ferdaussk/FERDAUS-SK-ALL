<?php
namespace Creativebusinesshours;

use Creativebusinesshours\PageSettings\Page_Settings;
define( "BWDBH_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDBH_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class Classbusinesshours {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdbh_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdbh_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdbh_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdbh_business_hours_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdbh-businesshours.php' );
	}

	public function bwdbh_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register WidgetsF
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\bwdbhBusinessHours() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdbh-businesshours-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdbh_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdbh-business-hours-category',
			[
				'title' => esc_html__( 'Business Hours', 'bwdbh-business-hours' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdbh_all_assets_for_the_public(){
		$all_css_js_file = array(
            'bwdbh_business_plugin_bootstrap_css' => array('bwdbh_path_define'=>BWDBH_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bootstrap.min.css'),
            'bwdbh_business_plugin_main_css' => array('bwdbh_path_define'=>BWDBH_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/main.css'),
            'bwdbh_business_plugin_responsive_css' => array('bwdbh_path_define'=>BWDBH_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/responsive.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdbh_path_define'], null, '1.3', 'all');
        }
	}
	public function bwdbh_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdbh_business_admin_main_css' => array('bwdbh_path_admin_define'=>BWDBH_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdbh_path_admin_define'], null, '1.3', 'all');
        }
	}

	function bwdbh_business_register_required_plugins() {
		$plugins = array(
			array(
				'name'        => esc_html__('Elementor', 'bwdbh-business-hours'),
				'slug'        => 'elementor',
				'is_callable' => 'wpseo_init',
			),
	
		);

		$config = array(
			'id'           => 'bwdbh-business-hours',
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
		add_action( 'tgmpa_register', [$this, 'bwdbh_business_register_required_plugins'] );

		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdbh_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdbh_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdbh_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdbh_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdbh_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
Classbusinesshours::instance();