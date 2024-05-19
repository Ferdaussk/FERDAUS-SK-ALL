<?php
namespace CreativeTabZone\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDTZTabs extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameTabsZone', 'bwd-tabs-zone' );
	}

	public function get_title() {
		return esc_html__( 'BWD Tabs Zone', 'bwd-tabs-zone' );
	}

	public function get_icon() {
		return 'bwdtz-tabs-icon eicon-tabs';
	}

	public function get_categories() {
		return [ 'bwd-tabs-zone-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-tabs-zone-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdtz_tabs_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-tabs-zone' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bwdtz_tabs_zone_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwd-tabs-zone' ),
					'style2' => esc_html__( 'Style 2', 'bwd-tabs-zone' ),
					'style3' => esc_html__( 'Style 3', 'bwd-tabs-zone' ),
					'style4' => esc_html__( 'Style 4', 'bwd-tabs-zone' ),
					'style5' => esc_html__( 'Style 5', 'bwd-tabs-zone' ),
					'style6' => esc_html__( 'Style 6', 'bwd-tabs-zone' ),
					'style7' => esc_html__( 'Style 7', 'bwd-tabs-zone' ),
					'style8' => esc_html__( 'Style 8', 'bwd-tabs-zone' ),
					'style9' => esc_html__( 'Style 9', 'bwd-tabs-zone' ),
					'style10' => esc_html__( 'Style 10', 'bwd-tabs-zone' ),
					'style11' => esc_html__( 'Style 11', 'bwd-tabs-zone' ),
					'style12' => esc_html__( 'Style 12', 'bwd-tabs-zone' ),
					'style13' => esc_html__( 'Style 13', 'bwd-tabs-zone' ),
					'style14' => esc_html__( 'Style 14', 'bwd-tabs-zone' ),
					'style15' => esc_html__( 'Style 15', 'bwd-tabs-zone' ),
					'style16' => esc_html__( 'Style 16', 'bwd-tabs-zone' ),
					'style17' => esc_html__( 'Style 17', 'bwd-tabs-zone' ),
					'style18' => esc_html__( 'Style 18', 'bwd-tabs-zone' ),
					'style19' => esc_html__( 'Style 19', 'bwd-tabs-zone' ),
					'style20' => esc_html__( 'Style 20', 'bwd-tabs-zone' ),
					'style21' => esc_html__( 'Style 21', 'bwd-tabs-zone' ),
					'style22' => esc_html__( 'Style 22', 'bwd-tabs-zone' ),
					'style23' => esc_html__( 'Style 23', 'bwd-tabs-zone' ),
					'style24' => esc_html__( 'Style 24', 'bwd-tabs-zone' ),
					'style25' => esc_html__( 'Style 25', 'bwd-tabs-zone' ),
					'style26' => esc_html__( 'Style 26', 'bwd-tabs-zone' ),
					'style27' => esc_html__( 'Style 27', 'bwd-tabs-zone' ),
					'style28' => esc_html__( 'Style 28', 'bwd-tabs-zone' ),
					'style29' => esc_html__( 'Style 29', 'bwd-tabs-zone' ),
					'style30' => esc_html__( 'Style 30', 'bwd-tabs-zone' ),
				],
			]
		);
		
		$this->end_controls_section(); 

		
		$this->start_controls_section(
			'bwdtz_tabs_item_and_info_content_section',
			[
				'label' => esc_html__( 'Items and Info', 'bwd-tabs-zone' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdtz_tab-items_heading',
			[
				'label' => esc_html__( 'Tab Items', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdtz_tabs_title_default', [
				'label' => esc_html__( 'Name', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Dev' , 'bwd-tabs-zone' ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'bwdtz_default_tabs_item_icon_switcher',
			[
				'label' => esc_html__( 'Item Icon', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_default_tabs_item_icon', 
			[
				'label' => esc_html__( 'Icon', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwdtz_default_tabs_item_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fas fa-award',
					'library' => 'solid',
				],
			]
		);
		// Hover control start
		$this->start_controls_tabs(
			'bwdtz_tabs_default_title_style_tabs'
		);
		$this->start_controls_tab(
			'bwdtz_tabs_default_title_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-tabs-zone' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdtz_box_default_title_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-default-one-btn, {{WRAPPER}} .bwdtz-nav li button' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_title_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-default-one-btn, {{WRAPPER}} .bwdtz-nav li button, {{WRAPPER}} .bwdtz-nav li button:after' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_title_default_title_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-tabs-zone' ),
				'selector' => '{{WRAPPER}} .bwdtz-default-one-btn, {{WRAPPER}} .bwdtz-nav li button',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_default_title_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-default-one-btn, {{WRAPPER}} .bwdtz-nav li button',
			]
		);
		
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdtz_tabs_default_title_hover_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-tabs-zone' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdtz_box_def_active_default_title_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-nav-link.active-link, {{WRAPPER}} .bwdtz-nav li button:before' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_def_active_default_title_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-nav-link.active-link, {{WRAPPER}} .bwdtz-nav li button:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz__def_active_title_default_title_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-tabs-zone' ),
				'selector' => '{{WRAPPER}} .bwdtz-nav-link.active-link, {{WRAPPER}} .bwdtz-nav li button:before',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box__def_active_default_title_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-nav-link.active-link, {{WRAPPER}} .bwdtz-nav li button:before',
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdtz_tabs_title_id', [
				'label' => esc_html__( 'Name ID', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'bwdtztabs' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_title', [
				'label' => esc_html__( 'Name', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Web Developer' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_item_icon_switcher',
			[
				'label' => esc_html__( 'Item Icon', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_item_icon', 
			[
				'label' => esc_html__( 'Icon', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwdtz_tabs_item_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fas fa-award',
					'library' => 'solid',
				],
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwdtz_tabs_title_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdtz_tabs_title_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-tabs-zone' ),
			]
		);
		// Normal Controls
		$repeater->add_control(
			'bwdtz_box_normal_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtz-dynamic-one-btn' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdtz_box_normal_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtz-dynamic-one-btn' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_normal_title_shadow',
				'label' => esc_html__( 'Title Shadow', 'bwd-tabs-zone' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtz-dynamic-one-btn',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_normal_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtz-dynamic-one-btn',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdtz_tabs_title_hover_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-tabs-zone' ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'bwdtz_box_active_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdtz_box_active_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_active_title_shadow',
				'label' => esc_html__( 'Title Shadow', 'bwd-tabs-zone' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_active_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .class',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$this->add_control(
			'bwdtz_tabs',
			[
				'label' => esc_html__( 'Balance Tab Items and Items Info', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdtz_tabs_title' => esc_html__( 'Development', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Software', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Programming', 'bwd-tabs-zone' ),
					],
				],
				'title_field' => `{{{ bwdtz_tabs_title }}}`,
			]
		);

		$this->add_control(
			'bwdtz_tab-item_info_heading',
			[
				'label' => esc_html__( 'Items Info', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdtz_default_tabs_info_image_switcher',
			[
				'label' => esc_html__( 'Info Image', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_default_tabs_info_image', [
				'label' => esc_html__( 'Image', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::MEDIA,
				'condition' => [
					'bwdtz_default_tabs_info_image_switcher' => 'yes',
				],
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdtz_hide_info_title_first',
			[
				'label' => esc_html__( 'Show Title Here', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_tabs_description_default', [
				'label' => esc_html__( 'Description', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus?' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdtz_box_default_info_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-tab-content' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_info_profile_info_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-tab-content' => 'background-color: {{VALUE}}; border-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_info_default_info_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-tabs-zone' ),
				'selector' => '{{WRAPPER}} .bwdtz-tab-content',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_default_info_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-tab-content',
			]
		);
		$sk_repeater = new \Elementor\Repeater();
		$sk_repeater->add_control(
			'bwdtz_tabs_title2_id', [
				'label' => esc_html__( 'Name ID', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'bwdtztabs' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_info_image_switcher',
			[
				'label' => esc_html__( 'Info Image', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_info_image', [
				'label' => esc_html__( 'Image', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::MEDIA,
				'condition' => [
					'bwdtz_tabs_info_image_switcher' => 'yes',
				],
				'default' => [
					\Elementor\Utils::get_placeholder_image_src(),
				],
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_hide_info_title',
			[
				'label' => esc_html__( 'Show Title Here', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_info_title2', [
				'label' => esc_html__( 'Title', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdtz_hide_info_title' => 'yes'
				],
				'default' => esc_html__( 'Development' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_description2', [
				'label' => esc_html__( 'Description', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_box_info_d_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-title' => 'color: {{VALUE}}',
				],
			]
		);
		$sk_repeater->add_control(
			'bwdtz_box_info_d_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title' => 'background-color: {{VALUE}}',
				],
			]
		);
		$sk_repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_title_info_d_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-tabs-zone' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$sk_repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_info_d_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .class',
			]
		);

		$sk_repeater->add_control(
			'bwdtz_tab_ccc',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdtz_tabs2',
			[
				'label' => esc_html__( 'Balance Tab Items and Item Info', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $sk_repeater->get_controls(),
				'default' => [
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #1', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #2', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #3', 'bwd-tabs-zone' ),
					],
				],
				'title_field' => `{{{ bwdtz_tabs_title2 }}}`,
			]
		);
		$this->end_controls_section(); 
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<div class="bwdtz-tab-fifteen">
			<ul class="bwdtz-nav-tabs">
				<li class="active"><button href="#Section1"><i class="fas fa-home"></i>Section 1</button></li>
				<li><button href="#Section2"><i class="fas fa-archive"></i>Section 2</button></li>
				<li><button href="#Section3"><i class="fas fa-chart-area"></i>Section 3</button></li>
			</ul>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<h3>Section 1r</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi
						eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non
						iaculis mi varius.</p>
				</div>
				<div class="bwdtz-tab-pane">
					<h3>Section 2r</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi
						eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non
						iaculis mi varius.</p>
				</div>
				<div class="bwdtz-tab-pane">
					<h3>Section 3r</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi
						eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non
						iaculis mi varius.</p>
				</div>
			</div>
		</div>
		<?php
	}
}			 
		
		