<?php
namespace FFBWDFFlipBox\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDStepFlipBox extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameStepFlipFlop', 'bwd-flip-flop' );
	}

	public function get_title() {
		return esc_html__( 'Step Flip Flop', 'bwd-flip-flop' );
	}

	public function get_icon() {
		return 'bwdff-flipflop-icon eicon-lightbox';
	}

	public function get_categories() {
		return [ 'bwd-flip-flop-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-flip-flop-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdff_flipflop_content_section',
			[
				'label' => esc_html__( 'Flip Flop Content', 'bwd-flip-flop' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdff_style_selection',
			[
				'label' => esc_html__( 'Flip Flop Styles', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-flip-flop' ),
					'style2' => esc_html__( 'Style 2', 'bwd-flip-flop' ),
					'style3' => esc_html__( 'Style 3', 'bwd-flip-flop' ),
					'style4' => esc_html__( 'Style 4', 'bwd-flip-flop' ),
					'style5' => esc_html__( 'Style 5', 'bwd-flip-flop' ),
					'style6' => esc_html__( 'Style 6', 'bwd-flip-flop' ),
					'style7' => esc_html__( 'Style 7', 'bwd-flip-flop' ),
					'style8' => esc_html__( 'Style 8', 'bwd-flip-flop' ),
					'style9' => esc_html__( 'Style 9', 'bwd-flip-flop' ),
				],
			]
		);
		$this->add_control(
			'bwdff_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => esc_html__( 'Left', 'bwd-flip-flop' ),
					'center' => esc_html__( 'Center', 'bwd-flip-flop' ),
					'right' => esc_html__( 'Right', 'bwd-flip-flop' ),
				],
			]
		);

		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdff_flipflop_step',
			[
				'label' => esc_html__( 'Step', 'bwd-flip-flop' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('1', 'bwd-flip-flop'),
				'label_block' => true,
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwdff_flipflop_step_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdff_flipflop_step_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-flip-flop' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_step_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-stock-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front-content .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-sr-no',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_step_color',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front-content .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-sr-no' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-stock-no' => 'background: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_flipflop_step_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-flip-flop' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_step_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-front-content .bwdff-step-sr-no, .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-stock-no',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_step_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-front-content .bwdff-step-sr-no' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-stock-no' => 'background: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_title_divider_step',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_flipflop_title',
			[
				'label' => esc_html__( 'Title', 'bwd-flip-flop' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('JHON DOE', 'bwd-flip-flop'),
				'label_block' => true,
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwdff_flipflop_title_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdff_flipflop_title_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-flip-flop' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-bottom-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front-content .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-title',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-bottom-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front-content .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-title' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_flipflop_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-flip-flop' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_title_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-front-content .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-title',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-front-content .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-title' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_title_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_flipflop_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-flip-flop' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-google-plus-g',
					'library' => 'solid',
				],
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_service_icon_box_style_tabs02'
		);
		$repeater->start_controls_tab(
			'bwd_service_icon_box_background_normal_tab02',
			[
				'label' => esc_html__( 'Normal', 'bwd-flip-flop' ),
			]
		);
		// Normal Controls
		$repeater->add_control(
			'bwdff_flipflop_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon i, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_icon_background_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-step-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon i, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon::after' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdff_flipflop_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon i, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab02',
			[
				'label' => esc_html__( 'Hover', 'bwd-flip-flop' ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'bwdff_flipflop_icon_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-back-content .bwdff-step-icon i, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_icon_hover_background_color',
			[
				'label' => esc_html__( 'Hover Background', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-back-content .bwdff-step-icon i, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-back-content .bwdff-step-icon::after' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdff_flipflop_icon_hover_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon i, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_icon_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_flipflop_description',
			[
				'label' => esc_html__( 'Description', 'bwd-flip-flop' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Etea minus enim assumenda alias.', 'bwd-flip-flop'),
				'label_block' => true,
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_service_icon_box_style_tabs03'
		);
		$repeater->start_controls_tab(
			'bwd_service_icon_box_background_normal_tab03',
			[
				'label' => esc_html__( 'Normal', 'bwd-flip-flop' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-bottom-content .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-desc',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-bottom-content .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-desc' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab03',
			[
				'label' => esc_html__( 'Hover', 'bwd-flip-flop' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_description_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content:hover .bwdff-step-desc',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content:hover .bwdff-step-desc' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_descrition',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_service_icon_box_style_tabs05'
		);
		$repeater->start_controls_tab(
			'bwd_service_icon_box_background_normal_tab05',
			[
				'label' => esc_html__( 'Normal', 'bwd-flip-flop' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_flipflop_box_background',
				'label' => esc_html__( 'Background', 'bwd-flip-flop' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-sr-no-down-shape::before',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_shape_color',
			[
				'label' => esc_html__( 'Shape Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-bg-shape, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-3 .bwdff-step-wrapper .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-next-arrow, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-sr-no-down-shape::after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-3 .bwdff-step-wrapper .bwdff-step-item .bwdff-step-front .bwdff-step-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-3 .bwdff-step-wrapper .bwdff-step-item .bwdff-step-front .bwdff-step-front-content::after' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-3 .bwdff-step-wrapper .bwdff-step-item .bwdff-step-front .bwdff-step-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-3 .bwdff-step-wrapper .bwdff-step-item .bwdff-step-front .bwdff-step-front-content::after' => 'border-right-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-sr-no::after' => 'border-left-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-3 .bwdff-step-wrapper .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-next-arrow::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_another_shape_color',
			[
				'label' => esc_html__( 'Another Shape Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item .bwdff-service-front .bwdff-service-front-content .bwdff-top-shape .bwdff-top-shape-inner::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item .bwdff-service-front .bwdff-service-front-content .bwdff-top-shape .bwdff-top-shape-inner::after' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item::before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-9::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab05',
			[
				'label' => esc_html__( 'Hover', 'bwd-flip-flop' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_flipflop_back_box_background',
				'label' => esc_html__( 'Background', 'bwd-flip-flop' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back-content .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-sr-no-down-shape::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content, , {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-sr-no-down-shape::before',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_back_shape_color',
			[
				'label' => esc_html__( 'Back Shape', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-bg-shape, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-sr-no-down-shape::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-sr-no::after' => 'border-left-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_another_back_shape_color',
			[
				'label' => esc_html__( 'Another Back Shape', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more:hover' => 'background: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_boxshadow_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_service_icon_box_style_tabs06'
		);
		$repeater->start_controls_tab(
			'bwd_service_icon_box_background_normal_tab06',
			[
				'label' => esc_html__( 'Font Box Shadow', 'bwd-flip-flop' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdff_flipflop_back_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-flip-flop' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab06',
			[
				'label' => esc_html__( 'Back Box Shadow', 'bwd-flip-flop' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdff_flipflop_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-flip-flop' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End
		$this->add_control(
			'bwdff_flipflop_boxes',
			[
				'label' => esc_html__( 'Flip Boxes', 'bwd-flip-flop' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'flipflop_boxes_title' => esc_html__( 'Flip Box #1', 'bwd-flip-flop' ),
					],
					[
						'flipflop_boxes_title' => esc_html__( 'Flip Box #2', 'bwd-flip-flop' ),
					],
					[
						'flipflop_boxes_title' => esc_html__( 'Flip Box #3', 'bwd-flip-flop' ),
					],
					[
						'flipflop_boxes_title' => esc_html__( 'Flip Box #4', 'bwd-flip-flop' ),
					],
				],
				'title_field' => `{{{ flipflop_boxes_title }}}`,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdff_step_style_section',
			[
				'label' => esc_html__( 'Step Style', 'bwd-flip-flop' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_step_box_background',
				'label' => esc_html__( 'Background', 'bwd-flip-flop' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdff-step-1',
			]
		);
		$this->add_responsive_control(
            'bwdff_step_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-flip-flop'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-step-1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdff_step_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-flip-flop'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-step-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if('style1' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-1">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="col-md-6 col-lg-6 col-xl-4 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-sr-no"><?php echo esc_html($item['bwdff_flipflop_step']); ?></div>
									<div class="bwdff-step-title">
									<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
									</div>
								</div>
								<span class="bwdff-bg-shape"></span>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-icon">
										<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
									</div>
									<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
								</div>
								<span class="bwdff-bg-shape"></span>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		} elseif('style2' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-3">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-sr-no"><?php echo esc_html($item['bwdff_flipflop_step']); ?>
										<span class="bwdff-shadow-box"></span>
									</div>
									<div class="bwdff-step-icon">
										<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
									</div>
									<span class="bwdff-next-arrow">
									</span>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-title">
									<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
									</div>
									<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
									<span class="bwdff-next-arrow">
									</span>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		} elseif('style3' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-4">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-sr-no"><?php echo esc_html($item['bwdff_flipflop_step']); ?></div>
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-icon">
										<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
									</div>
									<div class="bwdff-step-title">
										<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-sr-no"><?php echo esc_html($item['bwdff_flipflop_step']); ?></div>
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-title">
										<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
									</div>
									<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		} elseif('style4' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-5">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="col-md-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<span class="bwdff-sr-no-down-shape"></span>
								<div class="bwdff-step-sr-no">
								<?php echo esc_html($item['bwdff_flipflop_step']); ?>
								</div>
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-icon">
										<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
									</div>
									<div class="bwdff-step-title">
										<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<span class="bwdff-sr-no-down-shape"></span>
								<div class="bwdff-step-sr-no"><?php echo esc_html($item['bwdff_flipflop_step']); ?></div>
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-title">
										<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
									</div>
									<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		} elseif('style5' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-6">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-sr-no sr-bg">
									<?php echo esc_html($item['bwdff_flipflop_step']); ?>
								</div>
								<div class="bwdff-step-front-content">
									<div class="bwdff-content-inner">
										<div class="bwdff-step-icon">
											<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
										</div>
										<div class="bwdff-step-title">
											<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
										</div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-sr-no ">
									<?php echo esc_html($item['bwdff_flipflop_step']); ?>
								</div>
								<div class="bwdff-step-back-content">
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title">
											<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
										</div>
										<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		} elseif('style6' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-7">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<span class="bwdff-stock-down-shape"></span>
									<span class="bwdff-stock-no">
										<?php echo esc_html($item['bwdff_flipflop_step']); ?>
									</span>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-icon">
											<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
										</div>
										<div class="bwdff-step-title">
											<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
										</div>
									</div>

								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<span class="bwdff-stock-down-shape"></span>
									<span class="bwdff-stock-no">
										<?php echo esc_html($item['bwdff_flipflop_step']); ?>
									</span>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title">
											<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
										</div>
										<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		} elseif('style7' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-8">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-icon">
										<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title"><?php echo esc_html($item['bwdff_flipflop_title']); ?> </div>
										<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-icon">
										<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title"><?php echo esc_html($item['bwdff_flipflop_title']); ?> </div>
										<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-bottom-content">
								<div class="bwdff-step-sr-no ">
								<?php echo esc_html($item['bwdff_flipflop_step']); ?>
								</div>
								<div class="bwdff-content-inner">
									<div class="bwdff-step-title">
									<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
									</div>
									<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
								</div>
							</div>
							<span class="bwdff-step-bottom-shape">
							</span>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		} elseif('style8' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-9">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-sr-no ">
										<?php echo esc_html($item['bwdff_flipflop_step']); ?>
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-icon">
											<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
										</div>
										<div class="bwdff-step-title"><?php echo esc_html($item['bwdff_flipflop_title']); ?> </div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-sr-no ">
										<?php echo esc_html($item['bwdff_flipflop_step']); ?>
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title"><?php echo esc_html($item['bwdff_flipflop_title']); ?> </div>
										<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		} elseif('style9' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-10">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-sr-no ">
										<?php echo esc_html($item['bwdff_flipflop_step']); ?>
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-icon">
											<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
										</div>
										<div class="bwdff-step-title"><?php echo esc_html($item['bwdff_flipflop_title']); ?> </div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-sr-no ">
										<?php echo esc_html($item['bwdff_flipflop_step']); ?>
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title"><?php echo esc_html($item['bwdff_flipflop_title']); ?> </div>
										<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
        <?php
		}
	}
	
    protected function content_template() {
		?>
		<# if('style1' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-step-1">
			<div class="container">
				<#
				if('left' === settings['bwdff_alignment']){
				#>
				<div class="bwdff-step-wrapper row justify-content-start">
					<#
					} else if('center' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-center">
							<#
					} else if('right' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-end">
						<#
					}
					if ( settings.bwdff_flipflop_boxes.length ) { #>
						<# _.each( settings.bwdff_flipflop_boxes, function( item ) { #>
					<div class="col-md-6 col-lg-6 col-xl-4 bwdff-item-1 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-sr-no">{{{item['bwdff_flipflop_step']}}}</div>
									<div class="bwdff-step-title">
										{{{item['bwdff_flipflop_title']}}}
									</div>
								</div>
								<span class="bwdff-bg-shape"></span>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-icon">
										<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
									</div>
									<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
								</div>
								<span class="bwdff-bg-shape"></span>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style2' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-step-3">
			<div class="container">
				<#
				if('left' === settings['bwdff_alignment']){
				#>
				<div class="bwdff-step-wrapper row justify-content-start">
					<#
					} else if('center' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-center">
							<#
					} else if('right' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-end">
						<#
					}
					if ( settings.bwdff_flipflop_boxes.length ) { #>
						<# _.each( settings.bwdff_flipflop_boxes, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 bwdff-item-1 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-sr-no">{{{item['bwdff_flipflop_step']}}}
										<span class="bwdff-shadow-box"></span>
									</div>
									<div class="bwdff-step-icon">
										<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
									</div>
									<span class="bwdff-next-arrow">
									</span>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-title">
									{{{item['bwdff_flipflop_title']}}}
									</div>
									<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
									<span class="bwdff-next-arrow">
									</span>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style3' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-step-4">
			<div class="container">
				<#
				if('left' === settings['bwdff_alignment']){
				#>
				<div class="bwdff-step-wrapper row justify-content-start">
					<#
					} else if('center' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-center">
							<#
					} else if('right' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-end">
						<#
					}
					if ( settings.bwdff_flipflop_boxes.length ) { #>
						<# _.each( settings.bwdff_flipflop_boxes, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 bwdff-item-1 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-sr-no">{{{item['bwdff_flipflop_step']}}}</div>
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-icon">
										<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
									</div>
									<div class="bwdff-step-title">
										{{{item['bwdff_flipflop_title']}}}
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-sr-no">{{{item['bwdff_flipflop_step']}}}</div>
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-title">
										{{{item['bwdff_flipflop_title']}}}
									</div>
									<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style4' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-step-5">
			<div class="container">
				<#
				if('left' === settings['bwdff_alignment']){
				#>
				<div class="bwdff-step-wrapper row justify-content-start">
					<#
					} else if('center' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-center">
							<#
					} else if('right' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-end">
						<#
					}
					if ( settings.bwdff_flipflop_boxes.length ) { #>
						<# _.each( settings.bwdff_flipflop_boxes, function( item ) { #>
					<div class="col-md-6 col-lg-4 col-xl-3 bwdff-item-1 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<span class="bwdff-sr-no-down-shape"></span>
								<div class="bwdff-step-sr-no">
									{{{item['bwdff_flipflop_step']}}}
								</div>
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-icon">
										<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
									</div>
									<div class="bwdff-step-title">
										{{{item['bwdff_flipflop_title']}}}
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<span class="bwdff-sr-no-down-shape"></span>
								<div class="bwdff-step-sr-no">{{{item['bwdff_flipflop_step']}}}</div>
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-title">
										{{{item['bwdff_flipflop_title']}}}
									</div>
									<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style5' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-step-6">
			<div class="container">
				<#
				if('left' === settings['bwdff_alignment']){
				#>
				<div class="bwdff-step-wrapper row justify-content-start">
					<#
					} else if('center' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-center">
							<#
					} else if('right' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-end">
						<#
					}
					if ( settings.bwdff_flipflop_boxes.length ) { #>
						<# _.each( settings.bwdff_flipflop_boxes, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 bwdff-item-1 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-sr-no sr-bg">
									{{{item['bwdff_flipflop_step']}}}
								</div>
								<div class="bwdff-step-front-content">
									<div class="bwdff-content-inner">
										<div class="bwdff-step-icon">
											<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
										</div>
										<div class="bwdff-step-title">
											{{{item['bwdff_flipflop_title']}}}
										</div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-sr-no ">
									{{{item['bwdff_flipflop_step']}}}
								</div>
								<div class="bwdff-step-back-content">
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title">
											{{{item['bwdff_flipflop_title']}}}
										</div>
										<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style6' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-step-7">
			<div class="container">
				<#
				if('left' === settings['bwdff_alignment']){
				#>
				<div class="bwdff-step-wrapper row justify-content-start">
					<#
					} else if('center' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-center">
							<#
					} else if('right' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-end">
						<#
					}
					if ( settings.bwdff_flipflop_boxes.length ) { #>
						<# _.each( settings.bwdff_flipflop_boxes, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 bwdff-item-1 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<span class="bwdff-stock-down-shape"></span>
									<span class="bwdff-stock-no">
										{{{item['bwdff_flipflop_step']}}}
									</span>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-icon">
											<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
										</div>
										<div class="bwdff-step-title">
											{{{item['bwdff_flipflop_title']}}}
										</div>
									</div>

								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<span class="bwdff-stock-down-shape"></span>
									<span class="bwdff-stock-no">
										{{{item['bwdff_flipflop_step']}}}
									</span>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title">
											{{{item['bwdff_flipflop_title']}}}
										</div>
										<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style7' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-step-8">
			<div class="container">
				<#
				if('left' === settings['bwdff_alignment']){
				#>
				<div class="bwdff-step-wrapper row justify-content-start">
					<#
					} else if('center' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-center">
							<#
					} else if('right' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-end">
						<#
					}
					if ( settings.bwdff_flipflop_boxes.length ) { #>
						<# _.each( settings.bwdff_flipflop_boxes, function( item ) { #>
					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 bwdff-item-1 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-icon">
										<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title">{{{item['bwdff_flipflop_title']}}}</div>
										<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-icon">
										<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title">{{{item['bwdff_flipflop_title']}}}</div>
										<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-bottom-content">
								<div class="bwdff-step-sr-no ">
								{{{item['bwdff_flipflop_step']}}}
								</div>
								<div class="bwdff-content-inner">
									<div class="bwdff-step-title">
										{{{item['bwdff_flipflop_title']}}}
									</div>
									<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
								</div>
							</div>
							<span class="bwdff-step-bottom-shape">
							</span>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style8' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-step-9">
			<div class="container">
				<#
				if('left' === settings['bwdff_alignment']){
				#>
				<div class="bwdff-step-wrapper row justify-content-start">
					<#
					} else if('center' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-center">
							<#
					} else if('right' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-end">
						<#
					}
					if ( settings.bwdff_flipflop_boxes.length ) { #>
						<# _.each( settings.bwdff_flipflop_boxes, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 bwdff-item-1 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-sr-no ">
										{{{item['bwdff_flipflop_step']}}}
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-icon">
											<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
										</div>
										<div class="bwdff-step-title">{{{item['bwdff_flipflop_title']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-sr-no ">
										{{{item['bwdff_flipflop_step']}}}
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title">{{{item['bwdff_flipflop_title']}}}</div>
										<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style9' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-step-10">
			<div class="container">
				<#
				if('left' === settings['bwdff_alignment']){
				#>
				<div class="bwdff-step-wrapper row justify-content-start">
					<#
					} else if('center' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-center">
							<#
					} else if('right' === settings['bwdff_alignment']){
						#>
						<div class="bwdff-step-wrapper row justify-content-end">
						<#
					}
					if ( settings.bwdff_flipflop_boxes.length ) { #>
						<# _.each( settings.bwdff_flipflop_boxes, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 bwdff-item-1 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-step-item">
							<div class="bwdff-step-front">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-sr-no ">
										{{{item['bwdff_flipflop_step']}}}
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-icon">
											<i class="{{{item['bwdff_flipflop_icon']['value']}}}"></i>
										</div>
										<div class="bwdff-step-title">{{{item['bwdff_flipflop_title']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-step-back">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-sr-no ">
										{{{item['bwdff_flipflop_step']}}}
									</div>
									<div class="bwdff-content-inner">
										<div class="bwdff-step-title">{{{item['bwdff_flipflop_title']}}}</div>
										<div class="bwdff-step-desc">{{{item['bwdff_flipflop_description']}}}</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } #>
		<?php
    }
}
