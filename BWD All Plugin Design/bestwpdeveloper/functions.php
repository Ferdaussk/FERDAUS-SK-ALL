<?php
include_once( get_theme_file_path('/assets/inc/tgmexample.php'));
include_once( get_theme_file_path('/assets/inc/cs-all/codestar-framework.php'));
include_once( get_theme_file_path('/assets/inc/cs-all/samples/admin-options.php'));



function bestwpdevelopertdcssandjsenqueue(){
    // all css file enqueue here
    wp_enqueue_style('bestwpdeveloper_webmanifest', get_theme_file_uri('/site.webmanifest'), null, 1.0, 'all');
    wp_enqueue_style('bestwpdeveloper_img/Bwb', get_theme_file_uri('/assets/img/Bwb.png'), null, 1.0, 'all');
    wp_enqueue_style('bestwpdeveloper_assets/img/Bwb', get_theme_file_uri('/assets/img/Bwb.png'), null, 1.0, 'all');
    wp_enqueue_style('bestwpdeveloper_bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), null, 1.0, 'all');
    wp_enqueue_style('bestwpdeveloper_fontawesome', get_theme_file_uri('/assets/css/fontawesome-all.min.css'), null, 1.0, 'all');
    wp_enqueue_style('bestwpdeveloper_meanmenu', get_theme_file_uri('/assets/css/meanmenu.css'), null, 1.0, 'all');
    wp_enqueue_style('bestwpdeveloper_default.css', get_theme_file_uri('/assets/css/default.css'), null, 1.0, 'all');
    wp_enqueue_style('bestwpdeveloper_style.css', get_theme_file_uri('/assets/css/style.css'), null, 1.0, 'all');
    wp_enqueue_style('bestwpdeveloper_responsive', get_theme_file_uri('/assets/css/responsive.css'), null, 1.0, 'all');
    wp_enqueue_style('bestwpdeveloper_theme_css', get_stylesheet_uri(), null, 1.0, 'all');

    // All jvascript file enqueue here
    wp_enqueue_script('bestwpdeveloper_js_vendor/jquery', get_theme_file_uri('/assets/js/vendor/jquery-3.2.1.slim.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('bestwpdeveloper_js_modernizr', get_theme_file_uri('/assets/js/vendor/modernizr-3.5.0.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('bestwpdeveloper_js_popper', get_theme_file_uri('/assets/js/popper.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('bestwpdeveloper_js_bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('bestwpdeveloper_js_jquery.meanmenu', get_theme_file_uri('/assets/js/jquery.meanmenu.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('bestwpdeveloper_js_isotope.pkgd', get_theme_file_uri('/assets/js/isotope.pkgd.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('bestwpdeveloper_js_main_javascript', get_theme_file_uri('/assets/js/main.js'), array('jquery'), 1.0, true);
}
add_action('wp_enqueue_scripts', 'bestwpdevelopertdcssandjsenqueue');

// This code for registar nav menu or theme support
if ( ! function_exists( 'bestwpdevelopertd_register_nav_menu' ) ) {
    // Nav menu registation
    function bestwpdevelopertd_register_nav_menu(){
        register_nav_menus( array(
            'header_first_menu' => __( 'Header First Menu', 'bestwpdevelopertd' ),
            'header_second_menu' => __( 'Header Second Menu', 'bestwpdevelopertd'),
            'footer_servics_menu'  => __( 'Footer Servics Menu', 'bestwpdevelopertd' ),
        ) );

        // Theme support
        load_theme_textdomain( "bwdbyferdaussktd", get_theme_file_path("/language") );
        add_theme_support( "post-thumbnails" );
        add_theme_support( "title-tag" );
        add_theme_support( "custom-logo", array( 'height' => 100, 'width' => 100 ));
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
        add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    }
    add_action( 'after_setup_theme', 'bestwpdevelopertd_register_nav_menu' );
}

// For post pagination
function bestwpdevelopertd_blog_pagination(){
    global $wp_query;
    $links = paginate_links(array(
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
	$links = str_replace("page-numbers", "page-link", $links);
	echo $links;
}




// This code used for hide ACF (Advance Custome Fields)
add_filter('acf/settings/show_admin', '__return_false');
?>