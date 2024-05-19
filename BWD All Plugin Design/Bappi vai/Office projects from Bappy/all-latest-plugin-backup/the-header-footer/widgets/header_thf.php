<?php
namespace TheHeaderFooter\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class THFTheHeader extends Widget_Base {

	public function get_name() {
		return esc_html__( 'TheNavMenu', 'thf-header-footer' );
	}

	public function get_title() {
		return esc_html__( 'The Nav Menu', 'thf-header-footer' );
	}

	public function get_icon() {
		return 'bwd-ua-icon eicon-nav-menu';
	}

	public function get_categories() {
		return [ 'thf-header-footer-category' ];
	}

	public function get_script_depends() {
		return [ 'thf-header-footer-category' ];
	}

	private function get_available_menus() {
		$menus = wp_get_nav_menus();
		$options = [];
		foreach ( $menus as $menu ) {
			$options[ $menu->slug ] = $menu->name;
		}
		return $options;
	}

	protected function register_controls() {
		$this->start_controls_section(
			'text_content_section',
			[
				'label' => esc_html__( 'Nav Menu Content', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_mobile_menu_breakpoint',
			[
				'label' => esc_html__( 'Breakpoint', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'tablet',
				'options' => [
					'none' => esc_html__( 'None', 'thf-header-footer' ),
					'mobile' => esc_html__( 'Mobile (768px >)', 'thf-header-footer' ),
					'tablet' => esc_html__( 'Tablet (1025px >)', 'thf-header-footer' ),
				],
			]
		);
		$this->add_control(
			'thf_header_footer_styles',
			[
				'label' => esc_html__( 'Nav Menu Style', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'thf-header-footer' ),
					'style2' => esc_html__( 'Style 2', 'thf-header-footer' ),
					'style3' => esc_html__( 'Style 3', 'thf-header-footer' ),
					'style4' => esc_html__( 'Style 4', 'thf-header-footer' ),
					'style5' => esc_html__( 'Style 5', 'thf-header-footer' ),
					'style6' => esc_html__( 'Style 6', 'thf-header-footer' ),
					'style7' => esc_html__( 'Style 7', 'thf-header-footer' ),
					'style8' => esc_html__( 'Style 8', 'thf-header-footer' ),
					'style9' => esc_html__( 'Style 9', 'thf-header-footer' ),
					'style10' => esc_html__( 'Style 10', 'thf-header-footer' ),
					'style11' => esc_html__( 'Style 11', 'thf-header-footer' ),
					'style12' => esc_html__( 'Style 12', 'thf-header-footer' ),
					'style13' => esc_html__( 'Style 13', 'thf-header-footer' ),
					'style14' => esc_html__( 'Style 14', 'thf-header-footer' ),
					'style15' => esc_html__( 'Style 15', 'thf-header-footer' ),
					'style16' => esc_html__( 'Style 16', 'thf-header-footer' ),
				],
			]
		);

		$menus = $this->get_available_menus();
		if ( ! empty( $menus ) ) {
			$this->add_control(
				'thf_choose_main_menu',
				[
					'label' => esc_html__( 'Menu', 'thf-header-footer' ),
					'type' => Controls_Manager::SELECT,
					'options' => $menus,
					'default' => array_keys( $menus )[0],
					'save_default' => true,
					'description' => sprintf(
						esc_html__( 'Your menu home page %1$shere.%2$s Create Menu.', 'thf-header-footer' ),
						sprintf( '<a href="%s" target="_blank">', admin_url( 'nav-menus.php' ) ),
						'</a>'
					),
				]
			);
		} else {
			$this->add_control(
				'thf_choose_main_menu',
				[
					'type' => Controls_Manager::RAW_HTML,
					'raw' => '<strong>' . esc_html__( 'There are no menus in your site.', 'thf-header-footer' ) . '</strong><br>' .
							sprintf(
								esc_html__( 'Your menu home page %1$shere.%2$s Create Menu.', 'thf-header-footer' ),
								sprintf( '<a href="%s" target="_blank">', admin_url( 'nav-menus.php?action=edit&menu=0' ) ),
								'</a>'
							),
					'separator' => 'after',
				]
			);
		}
		$this->add_responsive_control(
			'thf_main_menu_space',
			[
				'label' => esc_html__( 'Menu Gap', 'thf-header-footer' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .menu-items .thf-menu-part-item li' => 'margin-left: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'thf_menu_alignment',
			[
				'label' => esc_html__( 'Menu Alignment', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'separator' => 'after',
				'options' => [
					'thf-dates-menu-area-left' => [
						'title' => esc_html__( 'Left', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-left',
					],
					'thf-dates-menu-area-center' => [
						'title' => esc_html__( 'Center', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-center',
					],
					'thf-dates-menu-area-right' => [
						'title' => esc_html__( 'Right', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'thf_main_menu_area',
			[
				'label' => esc_html__( 'Menu Area (width:50%)', 'thf-header-footer' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'selectors' => [
					'{{WRAPPER}} .thf-dates-menu-area' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->add_control(
			'thf_nav_logo_switcher',
			[
				'label' => esc_html__( 'Hide Logo', 'thf-header-footer' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'thf-header-footer' ),
				'label_off' => esc_html__( 'Hide', 'thf-header-footer' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'text_logo_section',
			[
				'label' => esc_html__( 'Nav Logo', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'thf_nav_logo_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'thf_choose_logo_link',
			[
				'label' => esc_html__( 'Logo Link', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'dynamic_link',
				'options' => [
					'dynamic_link' => esc_html__( 'Dynamic Link', 'thf-header-footer' ),
					'custom_link' => esc_html__( 'Custom Link', 'thf-header-footer' ),
				],
			]
		);
		$this->add_control(
			'thf_logo_wraper_link',
			[
				'label' => esc_html__( 'Link', 'thf-header-footer' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr__( 'https://www.your-link.com', 'thf-header-footer' ),
				'default' => [
					'url' => 'https://www.your-link.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'condition' => [
					'thf_choose_logo_link' => 'custom_link',
				],
			]
		);
		$this->add_control(
			'thf_choose_menu_type',
			[
				'label' => esc_html__( 'Menu Type', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'dynamic_logo',
				'options' => [
					'dynamic_logo' => esc_html__( 'Dynamic Logo', 'thf-header-footer' ),
					'custom_logo' => esc_html__( 'Custom Logo', 'thf-header-footer' ),
					'custom_text' => esc_html__( 'Custom Text', 'thf-header-footer' ),
				],
			]
		);
		$this->add_control(
			'thf_custom_logo',
			[
			  'label' => esc_html__( 'Choose Logo', 'thf-header-footer' ),
			  'type' => Controls_Manager::MEDIA,
			  'default' => [
				'url' => plugin_dir_url(__DIR__) . 'assets/public/img/bwd.png',
			  ],
			  'condition' => [
				  'thf_choose_menu_type' => 'custom_logo',
			  ],
			]
		);
		$this->add_control(
			'thf_custom_logo_text',
			[
				'label' => esc_html__( 'Text', 'thf-header-footer' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'MY LOGO', 'thf-header-footer' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'thf_choose_menu_type' => 'custom_text',
				],
			]
		);
		$this->add_responsive_control(
			'thf_nav_logo_alignment',
			[
				'label' => esc_html__( 'Logo Alignment', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'separator' => 'after',
				'options' => [
					'thf-dates-menu-area-left' => [
						'title' => esc_html__( 'Left', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-left',
					],
					'thf-dates-menu-area-center' => [
						'title' => esc_html__( 'Center', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-center',
					],
					'thf-dates-menu-area-right' => [
						'title' => esc_html__( 'Right', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'thf_main_logo_area',
			[
				'label' => esc_html__( 'Logo Area (width:25%)', 'thf-header-footer' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'selectors' => [
					'{{WRAPPER}} .dates-header-logo' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->add_control(
			'thf_tagline_switcher',
			[
				'label' => esc_html__( 'Show Tagline', 'thf-header-footer' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'thf-header-footer' ),
				'label_off' => esc_html__( 'Hide', 'thf-header-footer' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_menu_indicator_section',
			[
				'label' => esc_html__( 'Dropdown Indicator', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_menu_depth',
			[
				'label' => esc_html__( 'Menu Depth', 'thf-header-footer' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'step' => 1,
				'default' => 4,
			]
		);
		$this->add_control(
			'thf_submenu_indicator_alignment',
			[
				'label' => esc_html__( 'Indicator Alignment', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'menu_indicator_right',
				'options' => [
					'menu_indicator_left'  => esc_html__( 'Left', 'thf-header-footer' ),
					'menu_indicator_right' => esc_html__( 'Right', 'thf-header-footer' ),
					'none' => esc_html__( 'None', 'thf-header-footer' ),
				],
			]
		);
		$this->add_control(
			'thf_main_menu_icon',
			[
				'label' => esc_html__( 'Main Menu Icon', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'thf-main-down',
				'options' => [
					'thf-main-down'  => esc_html__( 'Down', 'thf-header-footer' ),
					'thf-main-right' => esc_html__( 'Right', 'thf-header-footer' ),
					'thf-main-updown-leftright' => esc_html__( 'Left Right', 'thf-header-footer' ),
					'thf-main-quote-left' => esc_html__( 'Quote Left', 'thf-header-footer' ),
					'thf-main-left-right' => esc_html__( 'Left Right', 'thf-header-footer' ),
					'thf-main-double-right' => esc_html__( 'Double Right', 'thf-header-footer' ),
					'thf-main-bolt-right' => esc_html__( 'Bolt Right', 'thf-header-footer' ),
					'thf-main-plus' => esc_html__( 'Plus', 'thf-header-footer' ),
					'thf-main-user-plus' => esc_html__( 'User Plus', 'thf-header-footer' ),
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_indicator_space',
			[
				'label' => esc_html__( 'Indicator Gap', 'thf-header-footer' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .menu-item-has-children::before' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
				'condition' => [
					'thf_submenu_indicator_alignment' => 'menu_indicator_right',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_indicator_space_left',
			[
				'label' => esc_html__( 'Indicator Gap', 'thf-header-footer' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .menu-item-has-children::before' => 'left: {{SIZE}}{{UNIT}}!important;',
				],
				'condition' => [
					'thf_submenu_indicator_alignment' => 'menu_indicator_left',
				],
			]
		);
		$this->add_control(
			'thf_child_menu_icon',
			[
				'label' => esc_html__( 'Child Menu Icon', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'thf-child-right',
				'options' => [
					'thf-child-down'  => esc_html__( 'Down', 'thf-header-footer' ),
					'thf-child-right' => esc_html__( 'Right', 'thf-header-footer' ),
					'thf-child-updown-leftright' => esc_html__( 'Left Right', 'thf-header-footer' ),
					'thf-child-quote-left' => esc_html__( 'Quote Left', 'thf-header-footer' ),
					'thf-child-left-right' => esc_html__( 'Left Right', 'thf-header-footer' ),
					'thf-child-double-right' => esc_html__( 'Double Right', 'thf-header-footer' ),
					'thf-child-bolt-right' => esc_html__( 'Bolt Right', 'thf-header-footer' ),
					'thf-child-plus' => esc_html__( 'Plus', 'thf-header-footer' ),
					'thf-child-user-plus' => esc_html__( 'User Plus', 'thf-header-footer' ),
				],
			]
		);
		$this->add_responsive_control(
			'thf_child_indicator_space',
			[
				'label' => esc_html__( 'Indicator Gap', 'thf-header-footer' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .sub-menu .menu-item-has-children::before' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_nav_button_content_section',
			[
				'label' => esc_html__( 'Nav Button', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_header_footer_btn_type',
			[
				'label' => esc_html__( 'Button Type', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'none'  => esc_html__( 'None', 'thf-header-footer' ),
					'search_form' => esc_html__( 'Search Form', 'thf-header-footer' ),
					'custom' => esc_html__( 'Custom Button', 'thf-header-footer' ),
					'social_icon' => esc_html__( 'Social Icon', 'thf-header-footer' ),
					'admin_icon_name' => esc_html__( 'Admin', 'thf-header-footer' ),
				],
			]
		);
		$this->add_control(
			'thf_search_form_style_selection',
			[
				'label' => esc_html__( 'Search Styles', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'bwdsb-search-box-6',
				'options' => [
					'bwdsb-search-box-6' => esc_html__( 'Style 1', 'thf-header-footer' ),
					'bwdsb-search-box-7' => esc_html__( 'Style 2', 'thf-header-footer' ),
					'bwdsb-search-box-8' => esc_html__( 'Style 3', 'thf-header-footer' ),
					'bwdsb-search-box-9' => esc_html__( 'Style 4', 'thf-header-footer' ),
					'bwdsb-search-box-10' => esc_html__( 'Style 5', 'thf-header-footer' ),
					'bwdsb-search-box-11' => esc_html__( 'Style 6', 'thf-header-footer' ),
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_nav_search_form_text',
			[
				'label' => esc_html__( 'Text', 'thf-header-footer' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Search', 'thf-header-footer' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);

		// Coustom
		$this->add_control(
			'thf_button_style_selection',
			[
				'label' => esc_html__( 'Button Styles', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'thf-header-footer' ),
					'style2' => esc_html__( 'Style 2', 'thf-header-footer' ),
					'style3' => esc_html__( 'Style 3', 'thf-header-footer' ),
					'style4' => esc_html__( 'Style 4', 'thf-header-footer' ),
					'style5' => esc_html__( 'Style 5', 'thf-header-footer' ),
					'style6' => esc_html__( 'Style 6', 'thf-header-footer' ),
					'style7' => esc_html__( 'Style 7', 'thf-header-footer' ),
					'style8' => esc_html__( 'Style 8', 'thf-header-footer' ),
					'style9' => esc_html__( 'Style 9', 'thf-header-footer' ),
					'style10' => esc_html__( 'Style 10', 'thf-header-footer' ),
					'style11' => esc_html__( 'Style 11', 'thf-header-footer' ),
					'style12' => esc_html__( 'Style 12', 'thf-header-footer' ),
					'style13' => esc_html__( 'Style 13', 'thf-header-footer' ),
					// Style 1,2,3,26,41,50,59,62,67,69,85,87,88,89,92
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_buttons_custom_class_id', 
			[
				'label' => esc_html__( 'Class ID (Custom)', 'thf-header-footer' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'description' => sprintf(
					esc_html__( 'Please make sure the Class and ID is unique. This field allows %1$sA-z 0-9%2$s & underscore chars without spaces.', 'thf-header-footer' ),
					'<code>',
					'</code>'
				),
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_nav_button_text',
			[
				'label' => esc_html__( 'Text', 'thf-header-footer' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Get in touch', 'thf-header-footer' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_header_footer_button_link',
			[
				'label' => esc_html__( 'Link', 'thf-header-footer' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr__( 'https://www.your-link.com', 'thf-header-footer' ),
				'default' => [
					'url' => 'https://www.your-link.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		// Social Icon
		
		$this->add_control(
			'thf_social_icon_selection',
			[
				'label' => esc_html__( 'Icon Styles', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'thf-header-footer' ),
					'style2' => esc_html__( 'Style 2', 'thf-header-footer' ),
					'style3' => esc_html__( 'Style 3', 'thf-header-footer' ),
					'style4' => esc_html__( 'Style 4', 'thf-header-footer' ),
					'style5' => esc_html__( 'Style 5', 'thf-header-footer' ), 
					// Style 2,6,7,19,28
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'social_icon',
				],
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'thf_social_icon',
			[
				'label' => esc_html__( 'Social Icons', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
		$repeater->add_control(
			'thf_social_icon_link',
			[
				'label' => esc_html__( 'Link', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write icon link here', 'thf-header-footer' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->start_controls_tabs(
			'style_tabs'
		);
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'thf-header-footer' ),
			]
		);
		$repeater->add_control(
			'thf_social_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => '-webkit-text-stroke-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon .thf-icons-color' => 'color: {{VALUE}}',
					'{{WRAPPER}} .thf-text' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'thf_icon_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color .thf-shadow' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .thf-circle-icon' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon .thf-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .thf-text' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .thf-circle-items' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'thf-header-footer' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color',
			]
		);
		$repeater->add_responsive_control(
			'thf_icon_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'thf_social_icon_border_color',
			[
				'label' => esc_html__( 'Border Color', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_normal_shadow',
				'label' => esc_html__( 'Box Shadow', 'thf-header-footer' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color',
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'thf-header-footer' ),
			]
		);
		$repeater->add_control(
			'thf_social_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Color', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover .thf-extra-item' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-tooltip' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_icon_hover_background',
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color .thf-before-icons,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-tooltip,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-tooltip:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover:after',							
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_border',
				'label' => esc_html__( 'Border', 'thf-header-footer' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_hover_shadow',
				'label' => esc_html__( 'Box Shadow', 'thf-header-footer' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}:hover',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$this->add_control(
			'thf_social_icon_list',
			[
				'label' => esc_html__( 'Social Icon', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'thf_social_icon_title' => esc_html__( 'Twitter', 'thf-header-footer' ),
						'thf_social_icon' => [
							'value' => 'fab fa-twitter',
							'library' => 'solid',
						],
					],
					[	'thf_social_icon_title' => esc_html__( 'Facebook', 'thf-header-footer' ),
						'thf_social_icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'solid',
						],
					],
					[
						'thf_social_icon_title' => esc_html__( 'Instagram', 'thf-header-footer' ),
						'thf_social_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ thf_social_icon_title }}}',
				'condition' => [
					'thf_header_footer_btn_type' => 'social_icon',
				],
			]
		);
		// Social Icon

		// 
		$this->add_responsive_control(
			'thf_nav_button_alignment',
			[
				'label' => esc_html__( 'Alignment', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'thf-dates-menu-area-center',
				'separator' => 'after',
				'options' => [
					'thf-dates-menu-area-left' => [
						'title' => esc_html__( 'Left', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-left',
					],
					'thf-dates-menu-area-center' => [
						'title' => esc_html__( 'Center', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-center',
					],
					'thf-dates-menu-area-right' => [
						'title' => esc_html__( 'Right', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'thf_menu_button_area',
			[
				'label' => esc_html__( 'Button Area (width:25%)', 'thf-header-footer' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'selectors' => [
					'{{WRAPPER}} .thf-dates-menu-area' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_nav_hamburger_menu',
			[
				'label' => esc_html__( 'Hamburger Menu', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_hamburger_menu_icon',
			[
				'label' => esc_html__( 'Icon', 'thf-header-footer' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-bars',
					'library' => 'solid',
				],
			]
		);
		$this->add_responsive_control(
			'thf_mobile_menu_alignment',
			[
				'label' => esc_html__( 'Alignment', 'thf-header-footer' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'right',
				'separator' => 'after',
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'thf-header-footer' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->end_controls_section();

		// Style start
		$this->start_controls_section(
			'thf_style_section_for_logo',
			[
				'label' => esc_html__( 'Logo Style', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
            'thf_header_padding',
            [
                'label' => esc_html__('Padding', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .dates-header-logo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		if ( !has_custom_logo() ) {
		$this->add_control(
			'thf_header_title_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhf_site_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_header_title_typography',
				'selector' => '{{WRAPPER}} .bwdhf_site_title',
			]
		);
		}
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_menus',
			[
				'label' => esc_html__( 'Menu Style', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_title_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'thf-header-footer' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item li a, {{WRAPPER}} .sub-menu li a',
			]
		);
		$this->add_control(
			'thf_menus_title_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li a, {{WRAPPER}} .sub-menu li a' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-items ul li, {{WRAPPER}} .sub-menu li' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menus_padding',
            [
                'label' => esc_html__('Padding', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .menu-items ul li, {{WRAPPER}} .sub-menu li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'thf_header_menus_margin',
            [
                'label' => esc_html__('Margin', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .menu-items ul li, {{WRAPPER}} .sub-menu li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'thf-header-footer' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_hover_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item li:hover a, {{WRAPPER}} .sub-menu li:hover',
			]
		);
		$this->add_control(
			'thf_menus_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li:hover a, {{WRAPPER}} .sub-menu li:hover' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-items ul li:hover, {{WRAPPER}} .sub-menu li:hover, {{WRAPPER}} .thf-menu-part-item li .sub-menu li:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_hover_bg_overly_color',
			[
				'label' => esc_html__( 'Overlay', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-items .thf-menu-part-item li::after, {{WRAPPER}} .menu-items .thf-menu-part-item li:hover, {{WRAPPER}} .menu-items .thf-menu-part-item li a:hover::before, {{WRAPPER}} .menu-items .thf-menu-part-item li a:hover::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} .menu-items .thf-menu-part-item li .sub-menu' => 'border-bottom-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menus_padding_hover',
            [
                'label' => esc_html__('Padding', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .menu-items ul li:hover, {{WRAPPER}} .sub-menu li:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'thf_header_menus_margin_hover',
            [
                'label' => esc_html__('Margin', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .menu-items ul li:hover, {{WRAPPER}} .sub-menu ul li:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_active_status',
			[
				'label' => esc_html__( 'Active', 'thf-header-footer' ),
			]
		);
		$this->add_control(
			'thf_menus_title_active_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sub-menuxex' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_submenu_options',
			[
				'label' => esc_html__( 'Dropdown Indicator', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_title_submenu_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_title_submenu_normal_post',
			[
				'label' => esc_html__( 'Normal', 'thf-header-footer' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_submenu_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item .menu-item-has-children::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children::before',
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item .menu-item-has-children::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children::before' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_title_submenu_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'thf-header-footer' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_hover_submenu_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item .menu-item-has-children:hover::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children:hover::before',
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item .menu-item-has-children:hover::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children:hover::before' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_button',
			[
				'label' => esc_html__( 'Button Style', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_buttons_content_typography',
				'selector' => '{{WRAPPER}} .thf-title, a:before, a:after, .thf_creative_buttons a',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		// Hover
		$this->start_controls_tabs(
			'thf_title_style_tabs'
		);

		$this->start_controls_tab(
			'thf_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-creative-buttons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		
		$this->add_control(
			'thf_title_content_text_normal_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_button_normal_background',
				'label' => esc_html__( 'Background Type', 'bwd-creative-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_title_content_normal_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title' => 'background: {{VALUE}}',
					
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'thf_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-creative-buttons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		
		$this->add_control(
			'thf_title_content_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title:hover' => 'color: {{VALUE}}',
					
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_button_hover_background',
				'label' => esc_html__( 'Background Type', 'bwd-creative-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title::before, .thf_creative_buttons .thf-title:hover',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_title_content_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .thf_creative_buttons .thf-title:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end
		
		$this->add_responsive_control(
            'thf_buttons_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-creative-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf_creative_buttons .thf-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'thf-header-footer' ),
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_buttons_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-creative-buttons' ),
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_responsive_control(
            'thf_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-creative-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf_creative_buttons .thf-title, .thf_creative_buttons .thf-title:after, .thf-btn-eleven .thf-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
            ]
        );
		// End Custom Button
		$this->end_controls_section();


		// For Search Button start
		$this->start_controls_section(
			'thf_style_section_for_search_form',
			[
				'label' => esc_html__( 'Search Form', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Input Style
		$this->add_control(
			'thf_input_style_title_options',
			[
				'label' => esc_html__( 'Input Style', 'thf-header-footer' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_menu_search_button_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_menu_search_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'thf-header-footer' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_search_button_typography',
				'selector' => '{{WRAPPER}} .bwdsb-input-text',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_menu_search_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'thf-header-footer' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_search_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdsb-input-text:hover',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_hover_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thf_header_menu_search_btn_padding_hover',
            [
                'label' => esc_html__('Input Padding', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-input-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'thf_divider_aa',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Submit Style
		$this->add_control(
			'thf_submit_style_title_options',
			[
				'label' => esc_html__( 'Submit Button', 'thf-header-footer' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_menu_submit_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_menu_submit_normal_post',
			[
				'label' => esc_html__( 'Normal', 'thf-header-footer' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_submit_typography',
				'selector' => '{{WRAPPER}} .bwdsb-search-btn',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_bg_color',
			[
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_menu_submit_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'thf-header-footer' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_submit_hover_typography',
				'selector' => '{{WRAPPER}} .bwdsb-search-btn:hover',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_hover_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thf_header_menu_submit_padding_hover',
            [
                'label' => esc_html__('Submit Padding', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_control(
			'thf_divider_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Wrapper Style
		$this->add_control(
			'thf_wrapper_style_title_options',
			[
				'label' => esc_html__( 'Wrapper Style', 'thf-header-footer' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_menus_search_wrapper',
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdsb-search-form',
			]
		);
		$this->add_responsive_control(
            'thf_header_menu_wrapper_padding_hover',
            [
                'label' => esc_html__('Padding', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-form' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_header_btn_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'thf-header-footer' ),
				'selector' => '{{WRAPPER}} .bwdsb-search-form',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menu_search_btn_margin',
            [
                'label' => esc_html__('Margin', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				// 'separator' => 'before',
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-form' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thf_search_form_border',
				'label' => esc_html__( 'Border', 'thf-header-footer' ),
				'selector' => '{{WRAPPER}} .bwdsb-search-form',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_btn_border-radius',
            [
                'label' => esc_html__('Border Radius', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-form' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		// Search for form end
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_admin_gravader',
			[
				'label' => esc_html__( 'Author', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_menu_admin_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_menu_admin_normal_post',
			[
				'label' => esc_html__( 'Normal', 'thf-header-footer' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_admin_typography',
				'selector' => '{{WRAPPER}} .thf-header-login-author a',
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_bg_color',
			[
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_admin_padding',
            [
                'label' => esc_html__('Padding', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf-header-login-author a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_menu_admin_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'thf-header-footer' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_admin_hover_typography',
				'selector' => '{{WRAPPER}} .thf-header-login-author:hover a',
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_hover_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menu_admin_padding_hover',
            [
                'label' => esc_html__('Padding', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf-header-login-author:hover a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'thf_menus_admin_size',
			[
				'label' => esc_html__( 'Image Size', 'thf-header-footer' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author img' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_hamburger_menu',
			[
				'label' => esc_html__( 'Hamburger Menu', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'thf_menus_hamburger_menu',
			[
				'label' => esc_html__( 'Icon Size', 'thf-header-footer' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .dates-mobile-menu i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_hamburger_menu_color',
			[
				'label' => esc_html__( 'Color', 'thf-header-footer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dates-mobile-menu i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_header',
			[
				'label' => esc_html__( 'Header Style', 'thf-header-footer' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'thf_header_type',
			[
				'label' => esc_html__( 'Header Type', 'thf-header-footer' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'thf-header-footer' ),
					'stiky' => esc_html__( 'Stiky', 'thf-header-footer' ),
				],
			]
		);
		$this->add_control(
			'thf_header_bg_switcher',
			[
				'label' => esc_html__( 'Transparent BG', 'thf-header-footer' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'thf-header-footer' ),
				'label_off' => esc_html__( 'No', 'thf-header-footer' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_menus_header_color',
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .thf_header_common',
			]
		);
		$this->add_responsive_control(
            'thf_header_wraper_padding',
            [
                'label' => esc_html__('Padding', 'thf-header-footer'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf_header_common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( ! empty( $settings['thf_header_footer_button_link']['url'] ) ) {
			$this->add_link_attributes( 'thf_header_footer_button_link', $settings['thf_header_footer_button_link'] );
		}
		$thf_style_section_ctrl = $settings['thf_header_footer_styles'];
		$thf_choose_the_menu = $settings['thf_choose_main_menu'];
		$thf_nav_logo_switcher = $settings['thf_nav_logo_switcher'];
		$thf_tagline = $settings['thf_tagline_switcher'];
		$thf_search_form_style_selection = $settings['thf_search_form_style_selection'];
		if($thf_search_form_style_selection === $thf_search_form_style_selection){
			$thf_search_class = $thf_search_form_style_selection;
		}
		$thf_nav_search_form_text = $settings['thf_nav_search_form_text'];
		$thf_button_style_selection = $settings['thf_button_style_selection'];
		$thf_header_footer_btn_type = $settings['thf_header_footer_btn_type'];
		$thf_hamburger = $settings['thf_hamburger_menu_icon']['value'];

		$thf_choose_menu_type = $settings['thf_choose_menu_type'];
		$thf_choose_logo_link = $settings['thf_choose_logo_link'];
		$thf_custom_logo_text = $settings['thf_custom_logo_text'];

		$thf_logo_id = $settings['thf_nav_logo_alignment'];
		if($thf_logo_id === $thf_logo_id){
			$thf_logo_align = $thf_logo_id;
		} else{
			$thf_logo_align = ' ';
		}
		$thf_id_menu = $settings['thf_menu_alignment'];
		if($thf_id_menu === $thf_id_menu){
			$thf_menu_align = $thf_id_menu;
		} else{
			$thf_menu_align = ' ';
		}
		$thf_id_button = $settings['thf_nav_button_alignment'];
		if($thf_id_button === $thf_id_button){
			$thf_button_align = $thf_id_button;
		} else{
			$thf_button_align = ' ';
		}

		$thf_mobile_menu_alignment = $settings['thf_mobile_menu_alignment'];
		if('left' === $thf_mobile_menu_alignment){
			$thf_mobile_align = 'dates-mobile-menu-left';
		} elseif('center' === $thf_mobile_menu_alignment){
			$thf_mobile_align = 'dates-mobile-menu-center';
		} elseif('right' === $thf_mobile_menu_alignment){
			$thf_mobile_align = ' ';
		}

		if('stiky' === $settings['thf_header_type']){
			$thf_header_style = 'thf_for_stiky';
		} else{ $thf_header_style = ' '; }
		if('yes' === $settings['thf_header_bg_switcher']){
			$thf_header_bg = 'thf_bg_trans';
		} else{ $thf_header_bg = ' '; }

		$thf_nav_button_text = $settings['thf_nav_button_text'];
		// Menu
		// $available_menus = $this->get_available_menus();
		// if ( ! $available_menus ) {
		// 	return;
		// }
		$thf_social_icon_selection = $settings['thf_social_icon_selection'];
		if($thf_social_icon_selection === $thf_social_icon_selection){
			$thf_social_icon = $thf_social_icon_selection;
		}

		$thf_submenu_indicator_alignment = $settings['thf_submenu_indicator_alignment'];
		if($thf_submenu_indicator_alignment === $thf_submenu_indicator_alignment){
			$thf_menu_indi_align = $thf_submenu_indicator_alignment;
		} else{
			$thf_menu_indi_align = ' ';
		}
		$thf_main_menu_icon = $settings['thf_main_menu_icon'];
		if($thf_main_menu_icon === $thf_main_menu_icon){
			$thf_menu_i_main = $thf_main_menu_icon;
		}
		$thf_child_menu_icon = $settings['thf_child_menu_icon'];
		if($thf_child_menu_icon === $thf_child_menu_icon){
			$thf_menu_i_child = $thf_child_menu_icon;
		}
		$thf_menu_depth = $settings['thf_menu_depth'];
		$settings = $this->get_active_settings();
		$args = [
			'echo' => false,
			'menu' => $thf_choose_the_menu,
			'container' => 'div',
			'container_class' => 'menu-items',
			'menu_class' => 'thf-menu-part-item',
			'fallback_cb' => '__return_empty_string',
			'depth' => $thf_menu_depth,
		];
		// Menu HTML
		$menu_html = wp_nav_menu( $args );
		switch ($thf_style_section_ctrl) {
			case "style1":
				include( __DIR__ . '/templates/off-canvas-1.php' );
				break;
			case "style2":
				include( __DIR__ . '/templates/off-canvas-2.php' );
				break;
			case "style3":
				include( __DIR__ . '/templates/off-canvas-3.php' );
				break;
			case "style4":
				include( __DIR__ . '/templates/off-canvas-4.php' );
				break;
			case "style5":
				include( __DIR__ . '/templates/off-canvas-5.php' );
				break;
			case "style6":
				include( __DIR__ . '/templates/style6.php' );
				break;
			case "style7":
				include( __DIR__ . '/templates/style7.php' );
				break;
			case "style8":
				include( __DIR__ . '/templates/style8.php' );
				break;
			case "style9":
				include( __DIR__ . '/templates/style9.php' );
				break;
			case "style10":
				include( __DIR__ . '/templates/style10.php' );
				break;
			case "style11":
				include( __DIR__ . '/templates/style11.php' );
				break;
			case "style12":
				include( __DIR__ . '/templates/style12.php' );
				break;
			case "style13":
				include( __DIR__ . '/templates/style13.php' );
				break;
			case "style14":
				include( __DIR__ . '/templates/style14.php' );
				break;
			case "style15":
				include( __DIR__ . '/templates/style15.php' );
				break;
			case "style16":
				include( __DIR__ . '/templates/style16.php' );
				break;
		}
	}
}
