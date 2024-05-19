<?php
namespace Creativecv\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCVREFERENCE extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bwdcv-cv-builder-reference';
	}

	public function get_title() {
		return esc_html__( 'BWD CV REFERENCE', 'bwdcv-cv-builder' );
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
        
		// reference
		$this->start_controls_section(
			'bwdcv-reference_title_section',
			[
				'label' => esc_html__( 'Reference', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// reference-title-align
        $this->add_responsive_control(
			'bwdcv_reference_align',
			[
				'label' => esc_html__( 'Title Alignment', 'bwdcv-cv-builder' ),
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
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title' => 'text-align: {{VALUE}}',
				],
				'default' => 'left',
				'toggle' => true,
			]
		);
		// // reference-align
        // $this->add_responsive_control(
		// 	'bwdcv_reference_item_align',
		// 	[
		// 		'label' => esc_html__( 'Item Alignment', 'bwdcv-cv-builder' ),
		// 		'type' => \Elementor\Controls_Manager::CHOOSE,
		// 		'devices' => [ 'desktop', 'tablet', 'mobile' ],
		// 		'options' => [
		// 			'left' => [
		// 				'title' => esc_html__( 'Left', 'bwdcv-cv-builder' ),
		// 				'icon' => 'eicon-text-align-left',
		// 			],
		// 			'center' => [
		// 				'title' => esc_html__( 'Center', 'bwdcv-cv-builder' ),
		// 				'icon' => 'eicon-text-align-center',
		// 			],
		// 			'right' => [
		// 				'title' => esc_html__( 'Right', 'bwdcv-cv-builder' ),
		// 				'icon' => 'eicon-text-align-right',
		// 			],
		// 		],
        //         'selectors' => [
		// 			'{{WRAPPER}} .bwd-cv-reference-details .bwd-cv-reference-information' => 'text-align: {{VALUE}}',
		// 		],
		// 		'default' => 'left',
		// 		'toggle' => true,
		// 	]
		// );
		// reference title
		$this->add_control(
			'bwdcv_reference_title', [
				'label' => esc_html__( 'Title', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'reference', 'bwdcv-cv-builder' ),
			]
		);
		$repeater = new \Elementor\Repeater();
		//reference name title
		$repeater->add_control(
			'bwdcv_reference_name_title', [
				'label' => esc_html__( 'Reference Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'johan doe', 'bwdcv-cv-builder' ),
			]
		);
		// reference name title-Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-name',
			]
		);
		//reference name color
		$repeater->add_control(
			'bwdcv_reference_name_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-name' => 'color: {{VALUE}}',
				],
			]
		);
		//reference company title
		$repeater->add_control(
			'bwdcv_reference_company_title', [
				'label' => esc_html__( 'Reference Company', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'company / job position', 'bwdcv-cv-builder' ),
			]
		);
		// reference company title-Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_company_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-company-name',
			]
		);
		//reference company color
		$repeater->add_control(
			'bwdcv_reference_company_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-company-name' => 'color: {{VALUE}}',
				],
			]
		);
		//reference number title
		$repeater->add_control(
			'bwdcv_reference_number_title', [
				'label' => esc_html__( 'Reference Number', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'phone: +123 456 980', 'bwdcv-cv-builder' ),
			]
		);
		// reference number title-Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_number_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-number-title',
			]
		);
		//reference number color
		$repeater->add_control(
			'bwdcv_reference_number_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-number-title' => 'color: {{VALUE}}',
				],
			]
		);
		//reference relation title
		$repeater->add_control(
			'bwdcv_reference_relation_title', [
				'label' => esc_html__( 'Relation Number', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'relation: brother', 'bwdcv-cv-builder' ),
			]
		);
		// reference relation title-Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_relation_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-relation-title',
			]
		);
		//reference relation color
		$repeater->add_control(
			'bwdcv_reference_relation_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-relation-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcv_reference_name_list',
			[
				'label' => esc_html__( 'Reference Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_reference_name_title' => esc_html__( 'johan doe' ),
						'bwdcv_reference_company_title' => esc_html__( 'company / job position', 'bwdcv-cv-builder', 'bwdcv_cv_builder' ),
						'bwdcv_reference_number_title' => esc_html__( 'phone: +123 456 980' ),
						'bwdcv_reference_relation_title' => esc_html__( 'relation: brother' ),
					],
					[	
						'bwdcv_reference_name_title' => esc_html__( 'marinda joe' ),
						'bwdcv_reference_company_title' => esc_html__( 'company / job position', 'bwdcv-cv-builder', 'bwdcv_cv_builder' ),
						'bwdcv_reference_number_title' => esc_html__( 'phone: +256 456 980' ),
						'bwdcv_reference_relation_title' => esc_html__( 'relation: student' ),
					],
				],
				'title_field' => '{{{ bwdcv_reference_name_title }}}',
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

		// reference style tab
		$this->start_controls_section(
			'bwdcv_reference',
			[
				'label' => esc_html__( 'Reference', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// reference title-color
		$this->add_control(
			'bwdcv_reference_title_color',
			[
				'label' => esc_html__( 'Text Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// reference title Background-color
		$this->add_control(
			'bwdcv_reference_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-sub-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style4','style7','style9','style11','style13','style15','style17','style18','style19','style21','style23'],
				],
			]
		);
		
		// reference title border color
		$this->add_control(
			'bwdcv_reference_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference-title' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style8','style10','style12','style14','style16','style17','style18','style19','style20',
					'style22','style23','style24','style25'],
				],
			]
		);
		// reference title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-sub-title ',
			]
		);
		// reference icon-color
		$this->add_control(
			'bwdcv_reference_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference icon bg color
		$this->add_control(
			'bwdcv_reference_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference icon-size
		$this->add_responsive_control(
			'bwdcv-reference-icon-size',
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
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference icon Round Size
		$this->add_control(
			'bwdcv-reference-icon-Round Size',
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
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-reference-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference cv icon border radius
		$this->add_responsive_control(
			'bwdcv_reference_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-reference-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference title width
		$this->add_responsive_control (
			'bwdcv-reference-title-width',
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
					'{{WRAPPER}} .bwd-cv-reference-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// reference title padding
		$this->add_responsive_control(
			'bwdcv_reference_title_padding',
			[
				'label' => esc_html__( 'Title Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// reference title border radius
		$this->add_responsive_control(
			'bwdcv_reference_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $bwdcv_reference_title = $settings['bwdcv_reference_title'];

        if ('style1' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-1-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-skill-information bwd-cv-education-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-reference">
                                                    <div class="bwd-cv-reference-title">
                                                        <i class="fas fa-asterisk bwd-cv-icon"></i>
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html( $bwdcv_reference_title); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-reference-details">
                                                        <?php
                                                            if( $settings['bwdcv_reference_name_list'] ) {
                                                            foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <div class="bwd-cv-reference-name">
                                                                <?php echo esc_html($item['bwdcv_reference_name_title']); ?>
                                                            </div>
                                                            <div class="bwd-cv-reference-company-name">
                                                                <?php echo esc_html($item['bwdcv_reference_company_title']); ?>
                                                            </div>
                                                            <div class="bwd-cv-reference-number">
                                                                <div class="bwd-cv-reference-number-title">
                                                                    <?php echo esc_html($item['bwdcv_reference_number_title']); ?>
                                                                </div>
                                                            </div>
                                                            <div class="bwd-cv-reference-relation">
                                                                <div class="bwd-cv-reference-relation-title">
                                                                    <?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
                                                                </div>
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
                </div>
            <?php
        }elseif ('style2' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-2-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-education-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style3' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-3-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo $bwdcv_reference_title; ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style4' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-4-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-item bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style5' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-5-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style6' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-6-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style7' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-7-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style8' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-8-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style9' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-9-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
														<div class="bwd-cv-icon">
															<i class="fas fa-asterisk"></i>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style10' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-10-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-language-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style11' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-11-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-asterisk"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style12' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-12-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style13' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-13-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information 
                                bwd-cv-reference-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style14' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-14-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-eucation-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style15' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-15-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style16' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-16-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style17' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-17-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-education-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style18' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-18-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-education-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style19' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-19-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style20' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-20-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style21' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-21-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-education-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style22' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-22-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style23' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-23-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style24' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-24-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
                </div>
            <?php
        }elseif ('style25' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-25-area bwd-cv-vilder-common">
					<div class="row g-0 g-0">
						<div class="col-lg-12">
							<div class="bwd-cv-vilder-information bwd-cv-reference-information bwd-cv-about-information">
								<div class="bwd-cv-vilder-item ">
									<div class="col-xl-12">
										<div class="bwd-cv-vilder-right-content">
											<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
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
        }
    }
}