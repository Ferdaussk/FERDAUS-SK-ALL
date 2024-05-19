<?php
namespace AccordionCreatorBWD;

use AccordionCreatorBWD\PageSettings\Page_Settings;
define('BWDAC_ACCORDION_PUBLIC_ASSETS_ALL', plugin_dir_url(__FILE__) . 'assets/public');
define('BWDAC_TEST_ASFSK_ASSETS_ADMIN_DIR_FILE', plugin_dir_url(__FILE__) . 'assets/admin');
class BWDACAccordionCreator {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdac_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdac_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdac_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdac_accordion_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdac-accordion.php' );
	}

	public function bwdac_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files(); 

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDACAccordionCreatoR() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdac-accordion-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdac_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdac-bwd-accordion-category',
			[
				'title' => esc_html__( 'BWD Accordion', 'bwd-accordion' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdac_all_assets_for_the_public(){
		wp_enqueue_script( 'bwdac_accordion_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/ab-main.js', array('jquery'), '1.0', true );

		wp_enqueue_style( 'bwdac-fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all' );
		$all_css_js_file = array(
            'bwdac_accordion_main_css' => array('bwdac_path_define_with_accordion'=>BWDAC_ACCORDION_PUBLIC_ASSETS_ALL . '/css/bwdac-main.css'),
        );

        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdac_path_define_with_accordion'], null, '1.0', 'all');
            wp_enqueue_script( $handle, $fileinfo['bwdac_path_define_with_accordion'], '1.0', true);
        }
	}
	public function bwdac_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdac_accordion_admin_main_css' => array('bwdac_path_admin_define'=>BWDAC_TEST_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdac_path_admin_define'], null, '1.0', 'all');
        }
	}
	function bwdac_accordion_register_required_plugins() {
		$plugins = array(
			array(
				'name'        => esc_html__('Elementor', 'bwd-accordion'),
				'slug'        => 'elementor',
				'is_callable' => 'wpseo_init',
			),
		);

		$config = array(
			'id'           => 'bwd-accordion',
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
		add_action( 'tgmpa_register', [$this, 'bwdac_accordion_register_required_plugins'] );

		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdac_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdac_all_assets_for_elementor_editor_admin']);

		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdac_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdac_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdac_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
BWDACAccordionCreator::instance();
