<?php
namespace BWDBPCBlogPost;

use BWDBPCBlogPost\PageSettings\Page_Settings;

define('BWDBPC_BLOG_POST_PUBLIC_ASSETS_ALL', plugin_dir_url(__FILE__) . 'assets/public');
define('BWDBPC_TEST_ASFSK_ASSETS_ADMIN_DIR_FILE', plugin_dir_url(__FILE__) . 'assets/admin');


class BWDLCBLogPostCreator {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}


	public function bwdbpc_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdbpc_admin_editor_scripts_as_a_module' ], 10, 2 );
	}


	public function bwdbpc_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdbpc_blog_post_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}
		return $tag;
	}


	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdbpc-blog-post-widget.php' );

	}


	public function bwdbpc_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files(); 

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDBPCBlogPost() );
	}


	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdbpc-blog-post-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdbpc_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdbpc-blog-post-category',
			[
				'title' => esc_html__( 'BWD Blog Post', 'bwdbpc-blog-post' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdbpc_all_assets_for_the_public(){

		//font awesome css
		wp_enqueue_style( 'bwdbpc-fas-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all' );

		//bs css
		wp_enqueue_style( 'bwdbpc-bs-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.0', 'all' );


		//jquery cdn
		wp_enqueue_script( 'bwdbpc_blog_post_jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array('jquery'), '2.2.4', true );

		//bs js cdn
		wp_enqueue_script( 'bwdbpc_blog_post_bs_js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true );

		//owl carousel js
		wp_enqueue_script( 'bwdbpc_blog_post_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/owl.carousel.min.js', array('jquery'), '1.0', true );

		//main js
		wp_enqueue_script( 'bwdbpc_blog_post_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/main.js', array('jquery'), '1.0', true );


		$all_css_js_file = array(

			'bwdbpc_blog_post_slider_css' => array('bwdbpc_path_define_with_blog_post'=>BWDBPC_BLOG_POST_PUBLIC_ASSETS_ALL . '/css/owl.carousel.min.css'),

			'bwdbpc_blog_post_slider_theme_css' => array('bwdbpc_path_define_with_blog_post'=>BWDBPC_BLOG_POST_PUBLIC_ASSETS_ALL . '/css/owl.theme.default.min.css'),

			'bwdbpc_blog_post_main_css' => array('bwdbpc_path_define_with_blog_post'=>BWDBPC_BLOG_POST_PUBLIC_ASSETS_ALL . '/css/main.css'),

			'bwdbpc_blog_post_responsive_css' => array('bwdbpc_path_define_with_blog_post'=>BWDBPC_BLOG_POST_PUBLIC_ASSETS_ALL . '/css/responsive.css'),
			// animate css

        );

        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdbpc_path_define_with_blog_post'], null, '1.0', 'all');
            wp_enqueue_script( $handle, $fileinfo['bwdbpc_path_define_with_blog_post'], '1.0', true);
        }
	}

	public function bwdbpc_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdbpc_blog_post_admin_main_css' => array('bwdbpc_path_admin_define'=>BWDBPC_TEST_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdbpc_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdbpc_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdbpc_all_assets_for_elementor_editor_admin']);

		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdbpc_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdbpc_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdbpc_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
BWDLCBLogPostCreator::instance();
