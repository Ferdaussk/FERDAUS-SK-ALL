<?php
namespace Creativecv;

use Creativecv\PageSettings\Page_Settings;
define( "BWDCV_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDCV_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class ClassBWDCVvilder {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdcv_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdcv_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdcv_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdcv_the_cv_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdcv-cv-builder.php' );
		require_once( __DIR__ . '/widgets/bwdcv-header.php' );
		require_once( __DIR__ . '/widgets/bwdcv-about.php' );
		require_once( __DIR__ . '/widgets/bwdcv-contact.php' );
		require_once( __DIR__ . '/widgets/bwdcv-skill.php' );
		require_once( __DIR__ . '/widgets/bwdcv-language.php' );
		require_once( __DIR__ . '/widgets/bwdcv-hobby.php' );
		require_once( __DIR__ . '/widgets/bwdcv-education.php' );
		require_once( __DIR__ . '/widgets/bwdcv-experience.php' );
		require_once( __DIR__ . '/widgets/bwdcv-reference.php' );
		require_once( __DIR__ . '/widgets/bwdcv-footer.php' );
	}

	public function bwdcv_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCV() );

		// Register header
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVHEADER() );

		// Register about
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVABOUT() );

		// Register contact
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVCONTACT() );

		// Register skill
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVSKILL() );

		// Register language
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVLANGUAGE() );

		// Register hobby
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVHOBBY() );

		// Register education
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVEDUCATION() );

		// Register experience
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVEXPERIENCE() );

		// Register reference
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVREFERENCE() );

		// Register footer
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDCVFOOTER() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdcv-cv-builder-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdcv_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdcv-cv-builder-category',
			[
				'title' => esc_html__( 'BWD Cv Vilder', 'bwd-cv-vilder' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdcv_all_assets_for_the_public(){
		wp_enqueue_script( 'bwdcv_cv_magnific_popup_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'bwdcv_cv_min_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/min.js', array('jquery'), '1.0', true );
		$all_css_js_file = array(
            'bwdcv_cv-vilder_font_awesome_css' => array('bwdcv_path_define'=>BWDCV_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),
            'bwdcv_cv-vilder_bootstrap_css' => array('bwdcv_path_define'=>BWDCV_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bootstrap.min.css'),
            'bwdcv_cv-vilder_style_css' => array('bwdcv_path_define'=>BWDCV_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
			'bwdcv_cv_magnific_popup_css' => array('bwdcv_path_define'=>BWDCV_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/magnific-popup.css'),
			
			'bwdcv_cv_jquery_js' => array('bwdcv_path_define'=>BWDCV_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/jquery-3.6.0.min.js'),
			'bwdcv_cv_jquery_js_bootstrap' => array('bwdcv_path_define'=>BWDCV_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/bootstrap.bundle.min.js'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdcv_path_define'], null, '1.0', 'all');
			wp_enqueue_script( $handle, $fileinfo['bwdcv_path_define'], ['jquery'], '1.0', true);
        }
	}
	public function bwdcv_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdcv_cv-vilder_admin_icon_css' => array('bwdcv_path_admin_define'=>BWDCV_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdcv_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdcv_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdcv_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdcv_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdcv_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdcv_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDCVvilder::instance();