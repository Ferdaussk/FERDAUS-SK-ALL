<?php
namespace Creativecv\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCVEXPERIENCE extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdcv-cv-builder-experience';
	}

	public function get_title() {
		return esc_html__( 'BWD CV EXPERIENCE', 'bwdcv-cv-builder' );
	}

	public function get_icon() {
		return 'eicon-archive-posts bwdcv-cv-builder-icon';
	}

	public function get_categories() {
		return [ 'bwdcv-cv-builder-category' ];
	}

    public function get_keywords() {
		return [ 'cv', 'arrow', 'bwdcv-cv-builder' ];
	}

	public function get_script_depends() {
		return [ 'bwdcv-cv-builder-category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdcv_cv_builder_style',
		    [
		        'label' => esc_html__('Cv Style','bwdcv-cv-builder'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcv-cv-builder_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwdcv-cv-builder' ),
					'style2' => esc_html__( 'Style 2', 'bwdcv-cv-builder' ),
					'style3' => esc_html__( 'Style 3', 'bwdcv-cv-builder' ),
					'style4' => esc_html__( 'Style 4', 'bwdcv-cv-builder' ),
					'style5' => esc_html__( 'Style 5', 'bwdcv-cv-builder' ),
					'style6' => esc_html__( 'Style 6', 'bwdcv-cv-builder' ),
					'style7' => esc_html__( 'Style 7', 'bwdcv-cv-builder' ),
					'style8' => esc_html__( 'Style 8', 'bwdcv-cv-builder' ),
					'style9' => esc_html__( 'Style 9', 'bwdcv-cv-builder' ),
					'style10' => esc_html__( 'Style 10', 'bwdcv-cv-builder' ),
					'style11' => esc_html__( 'Style 11', 'bwdcv-cv-builder' ),
					'style12' => esc_html__( 'Style 12', 'bwdcv-cv-builder' ),
					'style13' => esc_html__( 'Style 13', 'bwdcv-cv-builder' ),
					'style14' => esc_html__( 'Style 14', 'bwdcv-cv-builder' ),
					'style15' => esc_html__( 'Style 15', 'bwdcv-cv-builder' ),
					'style16' => esc_html__( 'Style 16', 'bwdcv-cv-builder' ),
					'style17' => esc_html__( 'Style 17', 'bwdcv-cv-builder' ),
					'style18' => esc_html__( 'Style 18', 'bwdcv-cv-builder' ),
					'style19' => esc_html__( 'Style 19', 'bwdcv-cv-builder' ),
					'style20' => esc_html__( 'Style 20', 'bwdcv-cv-builder' ),
					'style21' => esc_html__( 'Style 21', 'bwdcv-cv-builder' ),
					'style22' => esc_html__( 'Style 22', 'bwdcv-cv-builder' ),
					'style23' => esc_html__( 'Style 23', 'bwdcv-cv-builder' ),
					'style24' => esc_html__( 'Style 24', 'bwdcv-cv-builder' ),
					'style25' => esc_html__( 'Style 25', 'bwdcv-cv-builder' ),
				],
			]
		);

		$this->end_controls_section();
        
		// experience
		$this->start_controls_section(
			'bwdcv_experience_section',
			[
				'label' => esc_html__( 'Experience', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        // experience-align
        $this->add_responsive_control(
			'bwdcv_experience_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdcv-cv-builder' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdcv-cv-builder' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdcv-cv-builder' ),
						'icon' => 'eicon-text-align-right',
					],
				],
                'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title' => 'text-align: {{VALUE}}',
				],
				'default' => 'left',
				'toggle' => true,
			]
		);
		// experience title
		$this->add_control(
			'bwdcv_experience_title', [
				'label' => esc_html__( 'Title', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'experience', 'bwdcv-cv-builder' ),
			]
		);
		
		$repeater = new \Elementor\Repeater();
		//experience name background color
		$repeater->add_control(
			'bwdcv_experience_name_background_color',
			[
				'label' => esc_html__( 'Line Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-experience-name::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdcv_experience_after_background_color',
			[
				'label' => esc_html__( 'Line Drop Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-experience-name::after' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		// experience Year
		$repeater->add_control(
			'bwdcv_experience_year', [
				'label' => esc_html__( 'Year', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( '2016' ),
			]
		);
		// experience Year Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_experience_year_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-experience-year',
			]
		);
		//experience Year color
		$repeater->add_control(
			'bwdcv_experience_year_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-experience-year' => 'color: {{VALUE}} !important',
				],
			]
		);
		//experience name title
		$repeater->add_control(
			'bwdcv_experience_name_title', [
				'label' => esc_html__( 'Experience Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// experience name title-Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_experience_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-experience-sub-title',
			]
		);
		//experience name color
		$repeater->add_control(
			'bwdcv_experience_name_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-experience-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// experience Description
		$repeater->add_control(
			'bwdcv_experience_desc', [
				'label' => esc_html__( 'Description', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		// experience Description Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_experience_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-experience-dis',
			]
		);
		//experience Description color
		$repeater->add_control(
			'bwdcv_experience_description_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-experience-dis' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdcv_experience_name_list',
			[
				'label' => esc_html__( 'Experience Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_experience_year' => esc_html__( '2016', 'bwdcv_cv_builder' ),
						'bwdcv_experience_name_title' => esc_html__( 'tech company - junior data', 'bwdcv_cv_builder' ),
						'bwdcv_experience_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', 'bwdcv-cv-builder', 'bwdcv_cv_builder' ),
					],
					[	
						'bwdcv_experience_year' => esc_html__( '2020', 'bwdcv_cv_builder' ),
						'bwdcv_experience_name_title' => esc_html__( 'techno company - senior data', 'bwdcv_cv_builder' ),
						'bwdcv_experience_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', 'bwdcv-cv-builder', 'bwdcv_cv_builder' ),
					],
				],
				'title_field' => '{{{ bwdcv_experience_name_title }}}',
			]
		);

		$this->end_controls_section();

        //box information
		$this->start_controls_section(
			'bwdcv_shadow_section',
			[
				'label' => esc_html__( 'Box Information', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		//shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdcv-cv-builder' ),
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-information',
			]
		);
		// information background color
		$this->add_control(
			'bwdcv_information_bg_color',
			[
				'label' => esc_html__( 'Box Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		// left item bg color
		$this->add_control(
			'bwdcv_item_bg_color',
			[
				'label' => esc_html__( 'Left Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-left-content, {{WRAPPER}} .bwd-cv-vilder-left-content-item' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style3','style4','style7','style10','style12','style14','style16','style17','style18','style21',],
				],
				
			]
		);
		// right item bg color
		$this->add_control(
			'bwdcv_item_right_bg_color',
			[
				'label' => esc_html__( 'Right Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-3-area .bwd-cv-vilder-right-content, {{WRAPPER}} .bwd-cv-vilder-12-area .bwd-cv-vilder-right-content' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
				
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcv_builder_wrapper_box_border',
				'label' => esc_html__( 'Border', 'bwdcv-cv-builder' ),
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-information',
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', "rem" ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// experience style tab
		$this->start_controls_section(
			'bwdcv_experience',
			[
				'label' => esc_html__( 'Experience', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// experience title-color
		$this->add_control(
			'bwdcv_experience_title_color',
			[
				'label' => esc_html__( 'Text Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// experience title Background-color
		$this->add_control(
			'bwdcv_experience_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-sub-title' => 'Background: {{VALUE}}',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style3','style5'],
				],
			]
		);
		// experience Background-color
		$this->add_control(
			'bwdcv_experience_Background_color',
			[
				'label' => esc_html__( 'Text Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title' => 'Background: {{VALUE}}',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// experience title border color
		$this->add_control(
			'bwdcv_experience_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience-title,
					{{WRAPPER}} .bwd-cv-experience-item' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style10','style12','style16','style17','style18','style19','style20',
					'style22','style23','style24'],
				],
			]
		);
		// experience title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_experience_title_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-sub-title ',
			]
		);
        // experience icon-color
		$this->add_control(
			'bwdcv_experience_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i' => 'color: {{VALUE}}',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience icon bg color
		$this->add_control(
			'bwdcv_experience_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience icon-size
		$this->add_responsive_control(
			'bwdcv-experience-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience icon Round Size
		$this->add_control(
			'bwdcv-experience-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-experience-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience cv icon border radius
		$this->add_responsive_control(
			'bwdcv_experience_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-experience-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience title width
		$this->add_responsive_control (
			'bwdcv-experience-title-width',
			[
				'label' => esc_html__( 'Title Width', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ '%', 'px' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// experience title padding
		$this->add_responsive_control(
			'bwdcv_experience_title_padding',
			[
				'label' => esc_html__( 'Title Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// experience title border radius
		$this->add_responsive_control(
			'bwdcv_experience_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $bwdcv_experience_title = $settings['bwdcv_experience_title'];

        if ('style1' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-1-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-skill-information bwd-cv-education-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
                                                    <div class="bwd-cv-experience-title">
                                                        <i class="fas fa-shopping-bag bwd-cv-icon"></i>
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html( $bwdcv_experience_title); ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        if( $settings['bwdcv_experience_name_list'] ) {
                                                        foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
                                                    ?>
                                                    <div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                        <div class="bwd-cv-experience-year">
                                                            <?php echo esc_html($item['bwdcv_experience_year']); ?>
                                                        </div>
                                                        <div class="bwd-cv-experience-sub-title">
                                                            <?php echo esc_html($item['bwdcv_experience_name_title']); ?>
                                                        </div>
                                                        <div class="bwd-cv-experience-dis">
                                                            <?php echo esc_html($item['bwdcv_experience_desc']); ?>
                                                        </div>
                                                    </div>
                                                    <?php 
                                                        }
                                                    } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style2' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-2-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-education-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style3' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-3-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-education-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo $bwdcv_experience_title; ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style4' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-4-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style5' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-5-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<i class="fas fa-shopping-bag bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style6' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-6-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<i class="fas fa-shopping-bag bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style7' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-7-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style8' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-8-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style9' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-9-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style10' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-10-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-language-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style11' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-11-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style12' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-12-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style13' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-13-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information 
                                bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<i class="fas fa-shopping-bag bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style14' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-14-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-eucation-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style15' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-15-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<i class="fas fa-shopping-bag bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style16' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-16-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style17' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-17-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-education-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style18' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-18-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-education-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style19' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-19-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style20' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-20-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style21' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-21-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-education-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style22' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-22-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style23' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-23-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style24' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-24-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-experience">
                                                    <div class="bwd-cv-experience-title">
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html($bwdcv_experience_title); ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        if( $settings['bwdcv_experience_name_list'] ) {
                                                        foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
                                                    ?>
                                                    <div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                        <div class="bwd-cv-experience-item d-flex align-items-center">
                                                            <div class="bwd-cv-experience-year">
                                                                <?php echo esc_html($item['bwdcv_experience_year']); ?>
                                                            </div>
                                                            <div class="bwd-cv-experience-sub-title">
                                                                <?php echo esc_html($item['bwdcv_experience_name_title']); ?>
                                                            </div>
                                                        </div>
                                                        <div class="bwd-cv-experience-dis">
                                                            <?php echo esc_html($item['bwdcv_experience_desc']); ?>
                                                        </div>
                                                    </div>
                                                    <?php 
                                                        }
                                                    } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style25' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-25-area bwd-cv-vilder-common">
					<div class="row g-0 g-0">
						<div class="col-lg-12">
							<div class="bwd-cv-vilder-information bwd-cv-experience-information bwd-cv-about-information">
								<div class="bwd-cv-vilder-item ">
									<div class="col-xl-12">
										<div class="bwd-cv-vilder-right-content">
                                            <div class="bwd-cv-experience">
                                                <div class="bwd-cv-experience-title">
                                                    <div class="bwd-cv-sub-title">
                                                        <?php echo esc_html($bwdcv_experience_title); ?>
                                                    </div>
                                                </div>
                                                <?php
                                                    if( $settings['bwdcv_experience_name_list'] ) {
                                                    foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
                                                ?>
                                                <div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                    <div class="bwd-cv-experience-item d-flex align-items-center">
                                                        <div class="bwd-cv-experience-sub-title">
                                                            <?php echo esc_html($item['bwdcv_experience_name_title']); ?>
                                                        </div>
                                                        <div class="bwd-cv-experience-year">
                                                            <?php echo esc_html($item['bwdcv_experience_year']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-experience-dis">
                                                        <?php echo esc_html($item['bwdcv_experience_desc']); ?>
                                                    </div>
                                                </div>
                                                <?php 
                                                    }
                                                } ?>
                                            </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            <?php
        }
    }
}