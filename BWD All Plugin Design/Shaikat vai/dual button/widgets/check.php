<?php
namespace DualButtons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDDBDualButtons extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameDualButtons', 'bwd-dual-buttons' );
	}

	public function get_title() {
		return esc_html__( 'BWD Dual Buttons', 'elementor' );
	}

	public function get_icon() {
		return 'bwddb-button-icon eicon-dual-button';
	}

	public function get_categories() {
		return [ 'bwd-dual-buttons-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-dual-buttons-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwddb_buttons_content_section',
			[
				'label' => esc_html__( 'Buttons Settings', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwddb_style_selection',
			[
				'label' => esc_html__( 'Button Styles', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-dual-buttons' ),
					'style2' => esc_html__( 'Style 2', 'bwd-dual-buttons' ),
					'style3' => esc_html__( 'Style 3', 'bwd-dual-buttons' ),
					'style4' => esc_html__( 'Style 4', 'bwd-dual-buttons' ),
					'style5' => esc_html__( 'Style 5', 'bwd-dual-buttons' ),
					'style6' => esc_html__( 'Style 6', 'bwd-dual-buttons' ),
					'style7' => esc_html__( 'Style 7', 'bwd-dual-buttons' ),
					'style8' => esc_html__( 'Style 8', 'bwd-dual-buttons' ),
					'style9' => esc_html__( 'Style 9', 'bwd-dual-buttons' ),
					'style10' => esc_html__( 'Style 10', 'bwd-dual-buttons' ),
					'style11' => esc_html__( 'Style 11', 'bwd-dual-buttons' ),
					'style12' => esc_html__( 'Style 12', 'bwd-dual-buttons' ),
					'style13' => esc_html__( 'Style 13', 'bwd-dual-buttons' ),
					'style14' => esc_html__( 'Style 14', 'bwd-dual-buttons' ),
					'style15' => esc_html__( 'Style 15', 'bwd-dual-buttons' ),
					'style16' => esc_html__( 'Style 16', 'bwd-dual-buttons' ),
					'style17' => esc_html__( 'Style 17', 'bwd-dual-buttons' ),
					'style18' => esc_html__( 'Style 18', 'bwd-dual-buttons' ),
					'style19' => esc_html__( 'Style 19', 'bwd-dual-buttons' ),
					'style20' => esc_html__( 'Style 20', 'bwd-dual-buttons' ),
					'style21' => esc_html__( 'Style 21', 'bwd-dual-buttons' ),
					'style22' => esc_html__( 'Style 22', 'bwd-dual-buttons' ),
					'style23' => esc_html__( 'Style 23', 'bwd-dual-buttons' ),
					'style24' => esc_html__( 'Style 24', 'bwd-dual-buttons' ),
					'style25' => esc_html__( 'Style 25', 'bwd-dual-buttons' ),
					'style26' => esc_html__( 'Style 26', 'bwd-dual-buttons' ),
					'style27' => esc_html__( 'Style 27', 'bwd-dual-buttons' ),
					'style28' => esc_html__( 'Style 28', 'bwd-dual-buttons' ),
					'style29' => esc_html__( 'Style 29', 'bwd-dual-buttons' ),
					'style30' => esc_html__( 'Style 30', 'bwd-dual-buttons' ),
					'style31' => esc_html__( 'Style 31', 'bwd-dual-buttons' ),
					'style32' => esc_html__( 'Style 32', 'bwd-dual-buttons' ),
				],
			]
		);
		$this->add_control(
			'bwddb_show_buttons_switcher',
			[
				'label' => esc_html__( 'Show/Hide', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'bwddb-default',
				'options' => [
					'bwddb-default' => esc_html__( 'Default', 'bwd-dual-buttons' ),
					'bwddb-hide-left' => esc_html__( 'Hide Left', 'bwd-dual-buttons' ),
					'bwddb-hide-right' => esc_html__( 'Hide Right', 'bwd-dual-buttons' ),
				],
			]
		);
		$this->add_control(
			'bwddb_first_alignment_buttons',
			[
				'label' => esc_html__( 'Alignment', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'bwddb-center',
				'options' => [
					'bwddb-left' => [
						'title' => esc_html__( 'Left', 'bwd-dual-buttons' ),
						'icon' => 'eicon-text-align-left',
					],
					'bwddb-center' => [
						'title' => esc_html__( 'Center', 'bwd-dual-buttons' ),
						'icon' => 'eicon-text-align-center',
					],
					'bwddb-right' => [
						'title' => esc_html__( 'Right', 'bwd-dual-buttons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->end_controls_section();

		// Right Button
		$this->start_controls_section(
			'bwddb_first_buttons_content_section',
			[
				'label' => esc_html__( 'Left Button Content', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwddb_show_buttons_switcher' => ['bwddb-default', 'bwddb-hide-right'],
				],
			]
		);
		$this->add_control(
			'bwddb_first_text_buttons', [
				'label' => esc_html__( 'Text', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here L' , 'bwd-dual-buttons' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwddb_first_link_buttons',
			[
				'label' => esc_html__( 'Link', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr__( 'https://www.your-link.com', 'bwd-dual-buttons' ),
				'default' => [
					'url' => 'https://www.google.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$this->add_control(
			'bwddb_buttons_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddb_first_buttons_custom_class_id', [
				'label' => esc_html__( 'Class ID (Custom)', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'description' => sprintf(
					esc_html__( 'Please make sure the Class and ID is unique. This field allows %1$sA-z 0-9%2$s & underscore chars without spaces.', 'bwd-dual-buttons' ),
					'<code>',
					'</code>'
				),
			]
		);
		$this->end_controls_section();


		// Icon Here Start
		$this->start_controls_section(
			'bwddb_secound_buttons_icon_section',
			[
				'label' => esc_html__( 'Icon', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwddb_style_selection' => ['style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17'],
				]
			]
		);
		$this->add_control(
			'bwddb_buttons_icon_switcher',
			[
				'label' => esc_html__( 'Hide Center Content', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-dual-buttons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-dual-buttons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'bwddb_center_text_buttons', [
				'label' => esc_html__( 'Text', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
				],
				'default' => esc_html__( 'OR' , 'bwd-dual-buttons' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwddb_button_center_icon_one',
			[
				'label' => esc_html__( 'Icon', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fab fa-youtube',
					'library' => 'solid',
				],
			]
		);
		$this->add_responsive_control(
			'bwddb_title_content_center_icon_size_one',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::SLIDER,
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
				],
				'size_units' => [ 'px', 'rem', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwddb-left-button-class12 i, {{WRAPPER}} span.bwddb-button-seprator, {{WRAPPER}} span.bwddb-btn-seprator' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_center_icon_color_one',
			[
				'label' => esc_html__( 'Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddb-left-button-class12 i, {{WRAPPER}} span.bwddb-button-seprator, {{WRAPPER}} span.bwddb-btn-seprator' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_center_icon_bgcolor_one',
			[
				'label' => esc_html__( 'Background', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddb-left-button-class12 i, {{WRAPPER}} span.bwddb-button-seprator, {{WRAPPER}} span.bwddb-btn-seprator' => 'background: {{VALUE}}',
				],
			]
		);

		// Secound Icon
		$this->add_control(
			'bwddb_secound_buttons_icon_switcher',
			[
				'label' => esc_html__( 'Hide Secound Icon', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'bwddb_style_selection' => 'style12',
				],
				'label_on' => esc_html__( 'Show', 'bwd-dual-buttons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-dual-buttons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwddb_secound_button_center_icon_one',
			[
				'label' => esc_html__( 'Icon', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
						'bwddb_secound_buttons_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fas fa-star-half-alt',
					'library' => 'solid',
				],
			]
		);
		$this->add_responsive_control(
			'bwddb_title_content_center_icon_size_two',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::SLIDER,
				'condition' => [
						'bwddb_secound_buttons_icon_switcher' => 'yes',
				],
				'size_units' => [ 'px', 'rem', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwddb-right-button-class12 i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_center_icon_color_two',
			[
				'label' => esc_html__( 'Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
						'bwddb_secound_buttons_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddb-right-button-class12 i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_center_icon_bgcolor_two',
			[
				'label' => esc_html__( 'Background', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
						'bwddb_secound_buttons_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddb-right-button-class12 i' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		// Icon Here End


		// Right Button Start
		$this->start_controls_section(
			'bwddb_secound_buttons_content_section',
			[
				'label' => esc_html__( 'Right Button Content', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwddb_show_buttons_switcher' => ['bwddb-hide-left', 'bwddb-default'],
				],
			],
		);
		$this->add_control(
			'bwddb_secound_text_buttons', [
				'label' => esc_html__( 'Text', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here R' , 'bwd-dual-buttons' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwddb_secound_link_buttons',
			[
				'label' => esc_html__( 'Link', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr__( 'https://www.your-link.com', 'bwd-dual-buttons' ),
				'default' => [
					'url' => 'https://www.google.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$this->add_control(
			'bwddb_secound_buttons_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddb_secound_buttons_custom_class_id', [
				'label' => esc_html__( 'Class ID (Custom)', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'description' => sprintf(
					esc_html__( 'Please make sure the Class and ID is unique. This field allows %1$sA-z 0-9%2$s & underscore chars without spaces.', 'bwd-dual-buttons' ),
					'<code>',
					'</code>'
				),
			]
		);
		$this->end_controls_section();

		// First Button Style 
		$this->start_controls_section(
			'bwddb_buttons_style_section',
			[
				'label' => esc_html__( 'Left Buttons Style', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddb_buttons_content_typography',
				'selector' => '{{WRAPPER}} .bwddb-btn .bwddb-up a, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class span, {{WRAPPER}} .bwddb-btn-first span',
			]
		);

		$this->add_control(
			'bwddb_buttons_text_shadow_heading',
			[
				'label' => esc_html__( 'Text Shadow', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwddb_buttons_text_shadow', [
				'label' => esc_html__( 'Text Shadow', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT_SHADOW,
				'default' => [
					'color' => 'transparent'
				],
				'selectors' => [
					'{{SELECTOR}} {{WRAPPER}} .bwddb-btn .bwddb-up a, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class span, {{WRAPPER}} .bwddb-btn-first span' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
			]
		);
		// Hover
		$this->start_controls_tabs(
			'bwddb_title_style_tabs'
		);

		$this->start_controls_tab(
			'bwddb_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-dual-buttons' ),
			]
		);
		
		$this->add_control(
			'bwddb_title_content_text_normal_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn .bwddb-up a, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddb_button_normal_background',
				'label' => esc_html__( 'Background Type', 'bwd-dual-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span',
			]
		);
		$this->add_control(
			'bwddb_title_content_normal_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwddb_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-dual-buttons' ),
			]
		);
		
		$this->add_control(
			'bwddb_title_content_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn .bwddb-up:hover a, {{WRAPPER}} .bwddb-btn .bwddb-left:hover a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class:hover, {{WRAPPER}} .bwddb-btn-first:hover span' => 'color: {{VALUE}}',
					
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddb_button_hover_background',
				'label' => esc_html__( 'Background Type', 'bwd-dual-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-nine:before, {{WRAPPER}} .bwddb-btn-twenty-nine:after, {{WRAPPER}} .bwddb-btn-twenty-eight:before, .bwddb-btn-twenty-eight:after, {{WRAPPER}} .bwddb-btn-twenty-six:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three:hover a, {{WRAPPER}} .bwddb-btn-twenty-one:before, .bwddb-btn-twenty-one:after, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box:hover, {{WRAPPER}} .bwddb-btn .bwddb-up:hover, {{WRAPPER}} .bwddb-btn .bwddb-left:hover, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class:hover, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class::before, {{WRAPPER}} .bwddb-btn-first:hover span',
			]
		);
		$this->add_control(
			'bwddb_title_content_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-nine:before, {{WRAPPER}} .bwddb-btn-twenty-nine:after, {{WRAPPER}} .bwddb-btn-twenty-eight:before, .bwddb-btn-twenty-eight:after, {{WRAPPER}} .bwddb-btn-twenty-six:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three:hover a, {{WRAPPER}} .bwddb-btn-twenty-one:before, .bwddb-btn-twenty-one:after, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box:hover, {{WRAPPER}} .bwddb-btn .bwddb-up:hover, {{WRAPPER}} .bwddb-btn .bwddb-left:hover, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class:hover, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class::before, {{WRAPPER}} .bwddb-btn-first:hover span' => 'background: {{VALUE}}',
					
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end
		
		$this->add_responsive_control(
            'bwddb_buttons_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-dual-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddb-btn-twenty-four-left a:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_control(
			'bwddb_title_content_normal_first_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-four-left a:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwddb_buttons_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-dual-buttons' ),
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-four-left a:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span',
			]
		);
		$this->add_responsive_control(
            'bwddb_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-dual-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddb-btn-twenty-four-left a:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2 a, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box a, {{WRAPPER}} .bwddb-btn .bwddb-up a, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		// Secound Button Style
		$this->start_controls_section(
			'bwddb_secound_buttons_style_section',
			[
				'label' => esc_html__( 'Right Buttons Style', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddb_secound_buttons_content_typography',
				'selector' => '{{WRAPPER}} .bwddb-btn .bwddb-down a, {{WRAPPER}} .bwddb-btn .bwddb-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class span, {{WRAPPER}} .bwddb-btn-secound span',
			]
		);

		$this->add_control(
			'bwddb_secound_buttons_text_shadow_heading',
			[
				'label' => esc_html__( 'Text Shadow', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwddb_secound_buttons_text_shadow', [
				'label' => esc_html__( 'Text Shadow', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT_SHADOW,
				'default' => [
					'color' => 'transparent'
				],
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2 a, {{WRAPPER}} .bwddb-btn .bwddb-down a, {{WRAPPER}} .bwddb-btn .bwddb-right a, {{SELECTOR}} {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
			]
		);
		// Hover
		$this->start_controls_tabs(
			'bwddb_secound_title_style_tabs'
		);

		$this->start_controls_tab(
			'bwddb_secound_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-dual-buttons' ),
			]
		);
		
		$this->add_control(
			'bwddb_secound_title_content_text_normal_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn .bwddb-down a, {{WRAPPER}} .bwddb-btn .bwddb-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddb_secound_button_normal_background',
				'label' => esc_html__( 'Background Type', 'bwd-dual-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-three.bwddb-twe-three-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span',
			]
		);
		$this->add_control(
			'bwddb_secound_title_content_normal_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-three.bwddb-twe-three-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'background: {{VALUE}}',
					
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwddb_secound_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-dual-buttons' ),
			]
		);
		
		$this->add_control(
			'bwddb_secound_title_content_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn .bwddb-down:hover a, {{WRAPPER}} .bwddb-btn .bwddb-right:hover a, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class:hover, {{WRAPPER}} .bwddb-btn-secound:hover span' => 'color: {{VALUE}}',
					
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddb_secound_button_hover_background',
				'label' => esc_html__( 'Background Type', 'bwd-dual-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-nine.bwddb-twe-nine-right:before, {{WRAPPER}} .bwddb-btn-twenty-nine.bwddb-twe-nine-right:after, {{WRAPPER}} .bwddb-btn-twenty-eight.bwddb-twe-eight-right:before, {{WRAPPER}} .bwddb-btn-twenty-eight.bwddb-twe-eight-right:after, {{WRAPPER}} .bwddb-btn-twenty-six.bwddb-twe-six-right:before, {{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-btn-twenty-three.bwddb-twe-three-right:hover a, {{WRAPPER}} .bwddb-btn-twenty-one:before, .bwddb-btn-twenty-one:after, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-down:hover, {{WRAPPER}} .bwddb-btn .bwddb-right:hover, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class:hover, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class::before, {{WRAPPER}} .bwddb-btn-secound:hover span',
			]
		);
		$this->add_control(
			'bwddb_secound_title_content_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-nine.bwddb-twe-nine-right:before, {{WRAPPER}} .bwddb-btn-twenty-nine.bwddb-twe-nine-right:after, {{WRAPPER}} .bwddb-btn-twenty-eight.bwddb-twe-eight-right:before, {{WRAPPER}} .bwddb-btn-twenty-eight.bwddb-twe-eight-right:after, {{WRAPPER}} .bwddb-btn-twenty-six.bwddb-twe-six-right:before, {{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-btn-twenty-three.bwddb-twe-three-right:hover a, {{WRAPPER}} .bwddb-btn-twenty-one:before, .bwddb-btn-twenty-one:after, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-down:hover, {{WRAPPER}} .bwddb-btn .bwddb-right:hover, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class:hover, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class::before, {{WRAPPER}} .bwddb-btn-secound:hover span' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end
		
		$this->add_responsive_control(
            'bwddb_secound_buttons_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-dual-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_control(
			'bwddb_title_content_normal_secound_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-twe-three-right .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwddb_secound_buttons_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-dual-buttons' ),
				'selector' => '{{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-twe-three-right .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span',
			]
		);
		$this->add_responsive_control(
            'bwddb_secound_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-dual-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-twe-three-right .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2 a, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2 a, {{WRAPPER}} .bwddb-btn .bwddb-down a, {{WRAPPER}} .bwddb-btn .bwddb-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( ! empty( $settings['bwddb_first_link_buttons']['url'] && $settings['bwddb_secound_link_buttons']['url'] ) ) {
			$this->add_link_attributes( 'bwddb_first_link_buttons', $settings['bwddb_first_link_buttons'] );
			$this->add_link_attributes( 'bwddb_secound_link_buttons', $settings['bwddb_secound_link_buttons'] );
		}
        if('style1' === $settings['bwddb_style_selection']){
            ?>
            <div class="bwddb-btn <?php if('bwddb-left' === $settings['bwddb_first_alignment_buttons']){ ?> bwddb-btn-left <?php } elseif('bwddb-center' === $settings['bwddb_first_alignment_buttons']){ ?> bwddb-btn-center <?php } elseif('bwddb-right' === $settings['bwddb_first_alignment_buttons']){ ?> bwddb-btn-right <?php } ?> bwddb-1">
                <?php
            if('bwddb-hide-right' === $settings['bwddb_show_buttons_switcher']){
                ?>
                <a href="<?php echo esc_url($settings['bwddb_first_link_buttons']['url']); ?>" class="<?php echo esc_html($settings['bwddb_first_buttons_custom_class_id']); ?> bwddb-left-button-class1 bwddb-btn-first">
                    <span><?php echo esc_html__($settings['bwddb_first_text_buttons']); ?></span>
                </a>
                <?php
            } elseif('bwddb-hide-left' === $settings['bwddb_show_buttons_switcher']){
                ?>
                <a href="<?php echo esc_url($settings['bwddb_secound_link_buttons']['url']); ?>" class="<?php echo esc_html($settings['bwddb_secound_buttons_custom_class_id']); ?> bwddb-right-button-class1 bwddb-btn-secound bwddb-btn-one">
                    <span><?php echo esc_html__($settings['bwddb_secound_text_buttons']); ?></span>
                </a>
                <?php
            } elseif('bwddb-default' === $settings['bwddb_show_buttons_switcher']){
                ?>
                <a href="<?php echo esc_url($settings['bwddb_first_link_buttons']['url']); ?>" class="<?php echo esc_html($settings['bwddb_first_buttons_custom_class_id']); ?> bwddb-left-button-class1 bwddb-btn-first">
                    <span><?php echo esc_html__($settings['bwddb_first_text_buttons']); ?></span>
                </a>
                <a href="<?php echo esc_url($settings['bwddb_secound_link_buttons']['url']); ?>" class="<?php echo esc_html($settings['bwddb_secound_buttons_custom_class_id']); ?> bwddb-right-button-class1 bwddb-btn-secound bwddb-btn-one">
                    <span><?php echo esc_html__($settings['bwddb_secound_text_buttons']); ?></span>
                </a>
                <?php
            }
			?>
		</div>
		<?php
        } elseif('style2' === $settings['bwddb_style_selection']){
        } elseif('style3' === $settings['bwddb_style_selection']){
        } elseif('style4' === $settings['bwddb_style_selection']){
        } elseif('style5' === $settings['bwddb_style_selection']){
        }
	}

}
