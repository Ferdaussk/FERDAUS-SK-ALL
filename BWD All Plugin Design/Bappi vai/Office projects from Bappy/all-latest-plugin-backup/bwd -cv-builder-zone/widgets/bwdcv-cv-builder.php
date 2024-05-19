<?php
namespace Creativecv\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCV extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdcv-cv-builder';
	}

	public function get_title() {
		return esc_html__( 'BWD CV BUILDER', 'bwdcv-cv-builder' );
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

		// header
		$this->start_controls_section(
			'bwdcv_header_section',
			[
				'label' => esc_html__( 'Header', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
			
		);
		// header image
		$this->add_control(
			'bwdcv_cv_box_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/CV-01.jpg',
				],
			]
		);
		// header cv-vilder title
		$this->add_control(
			'bwdcv_header_cv_title', [
				'label' => esc_html__( 'Name', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Edward Shine', 'bwdcv-cv-builder' ),
			]
		);
		// header cv-vilder desg
		$this->add_control(
			'bwdcv_header_cv_desg', [
				'label' => esc_html__( 'Degination', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'graphic designer', 'bwdcv-cv-builder' ),

			]
		);
		// header Description
		$this->add_control(
			'bwdcv_header_description', [
				'label' => esc_html__( 'Description', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ullam inventore eveniet deserunt, facere perferendis ad ratione fugit eum minima nesciunt nemo aut dolorem facilis tempore ea iure corrupti quaerat nostrum dignissimos vel incidunt omnis nisi! Totam, eveniet quos. Quis, reiciendis corporis? Voluptatem cumque nam omnis, nostrum fugit exercitationem illum?.', 'bwdcv-cv-builder' ),
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header cv-vilder social title
		$this->add_control(
			'bwdcv_header_cv_social_title', [
				'label' => esc_html__( 'Social Name', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Social', 'bwdcv-cv-builder' ),
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style4','style6','style7','style8','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// cv header icon
		$repeater = new \Elementor\Repeater();
		// cv header icon title
		$repeater->add_control(
			'bwdcv_bwdcv_cv_box_icon_title', [
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'cv box icon' , 'bwdcv_cv_builder' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdcv_cv_box_icon',
			[
				'label' => esc_html__( 'cv box Icon', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
			]
		);
        // cv header icon link
		$repeater->add_control(
			'bwdcv_cv_box_icon_link',
			[
				'label' => esc_html__( 'Icon Link', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write cv icon link here', 
				'bwdcv_cv_builder' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				
			]
		);
		// header icon-color
		$repeater->add_control(
			'bwdcv_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-social-icon' => 'color: {{VALUE}}',
				],
			]
		);
		//header icon Background-color
		$repeater->add_control(
			'bwdcv_icon_background_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-social-icon' => 'Background-color: {{VALUE}}',
				],
			]
		);
		//header icon-size
		$repeater->add_responsive_control(
			'bwdcv-cv-icon-size',
			[
				'label' => esc_html__( 'Icon Font Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-social-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// header icon Round Size
		$repeater->add_responsive_control(
			'bwdcv-header-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-social-icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdcv_cv_box_social_list',
			[
				'label' => esc_html__( 'CV Social List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[
						'bwdcv_cv_box_icon' => [
							'value' => 'fab fa-skype',
							'library' => 'solid',
						],
					],
					[
						'bwdcv_cv_box_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
					[
						'bwdcv_cv_box_icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'solid',
						],
					],
					[
						'bwdcv_cv_box_icon' => [
							'value' => 'fas fa-envelope',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ bwdcv_bwdcv_cv_box_icon_title }}}',
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

		// header style tab
		$this->start_controls_section(
			'bwdcv_header',
			[
				'label' => esc_html__( 'Header ', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// header information background color
		$this->add_control(
			'bwdcv_header_information_bg_color',
			[
				'label' => esc_html__( 'Header Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information:before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style5','style7','style9','style11','style12','style13','style14','style15','style17','style19','style20','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_information_after_background_color',
			[
				'label' => esc_html__( 'Header Bottom Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information:after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header image border color
		$this->add_control(
			'bwdcv_header_image_border_color',
			[
				'label' => esc_html__( 'Image Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-img' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style9','style11','style13','style16','style17','style19','style20','style21','style22','style23','style24'],
				],
			]
		);
		// header image outline color
		$this->add_control(
			'bwdcv_header_image_outline_color',
			[
				'label' => esc_html__( 'Image Outline Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-1-area .bwd-cv-vilder-img' => 'outline-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_image_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-img:before' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_image_after_border_color',
			[
				'label' => esc_html__( 'Outline border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-img:after' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header image shape color
		$this->add_control(
			'bwdcv_image_shape_background_color',
			[
				'label' => esc_html__( 'Shape Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-img-shape, {{WRAPPER}} .bwd-cv-img-shape::before, {{WRAPPER}} .bwd-cv-vilder-4-area .bwd-cv-vilder-img::before' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style3','style5','style6','style7','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21','style22','style23','style25'],
				],
			]
		);
		// image width
		$this->add_responsive_control(
			'bwdcv_builder_header_image_width',
			[
				'label' => esc_html__( 'Image Width', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// image height
		$this->add_responsive_control(
			'bwdcv_builder_header_image_height',
			[
				'label' => esc_html__( 'Image Height', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// profile background color
		$this->add_control(
			'bwdcv_profile_background_color',
			[
				'label' => esc_html__( 'profile Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style4','style5','style6','style8','style9','style10','style11','style13','style14','style15','style16','style17','style18','style19','style20','style23','style24','style25'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-profile' => 'background-color: {{VALUE}}',
				],

			]
		);
		// header title-color
		$this->add_control(
			'bwdcv_header_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-name' => 'color: {{VALUE}}',
				],
			]
		);
		// header title background color
		$this->add_control(
			'bwdcv_header_cv_title_background_color',
			[
				'label' => esc_html__( 'Title Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-name' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_header_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-name',
			]
			
		);
		// header desg-color
		$this->add_control(
			'bwdcv_header_cv_desg_color',
			[
				'label' => esc_html__( 'Desg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-title' => 'color: {{VALUE}}',
				],
			]
		);
		// header desg-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_header_cv_desg_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-title',
			]
		);
		// header Description-color
		$this->add_control(
			'bwdcv_header_description_color',
			[
				'label' => esc_html__( 'Description Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-vilder-profile .bwd-cv-profile-dis' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header Description-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_header_description_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-vilder-profile .bwd-cv-profile-dis',
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			],
			
		);
		// header social-color
		$this->add_control(
			'bwdcv_header_cv_social_color',
			[
				'label' => esc_html__( 'Social Title Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-social-sub-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header social background color
		$this->add_control(
			'bwdcv_header_social_title_background_color',
			[
				'label' => esc_html__( 'Title Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-social-sub-title' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header social background color
		$this->add_control(
			'bwdcv_header_social_background_color',
			[
				'label' => esc_html__( 'Social Area Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-social-area,
					{{WRAPPER}} .bwd-cv-social-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header cv-vilder social-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_header_cv_social_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-social-sub-title',
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);

		$this->end_controls_section();

		// about
		$this->start_controls_section(
			'bwdcv_about_section',
			[
				'label' => esc_html__( 'About', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// about cv-vilder title
		$this->add_control(
			'bwdcv_about_cv_title', [
				'label' => esc_html__( 'Title', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'about me', 'bwdcv-cv-builder' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// about cv-vilder desg
		$this->add_control(
			'bwdcv_about_cv_desg', [
				'label' => esc_html__( 'Description', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum a incidunt, voluptatibus doloribus quod praesentium quibusdam provident? Culpa ut, ex laboriosam adipisci est quaerat, autem aspernatur doloribus alias iste amet.', 'bwdcv-cv-builder' ),
			]
		);
		$this->end_controls_section();

		// about style tab
		$this->start_controls_section(
			'bwdcv_about',
			[
				'label' => esc_html__( 'About', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// about title-color
		$this->add_control(
			'bwdcv_about_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// about title Background-color
		$this->add_control(
			'bwdcv_about_cv_title_Background_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'background: {{VALUE}}',
				],
			]
		);
		// about title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_about_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-sub-title',
			]
		);
		// about title border color
		$this->add_control(
			'bwdcv_about_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title, 
					{{WRAPPER}} .bwd-cv-about,
					{{WRAPPER}} .bwd-cv-vilder-14-area .bwd-cv-vilder-information .bwd-cv-profile' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style16','style17','style18','style19','style20','style22','style23','style24','style25'],
				],
			]
		);
		// about desg-color
		$this->add_control(
			'bwdcv_about_cv_desg_color',
			[
				'label' => esc_html__( 'Desg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-dis' => 'color: {{VALUE}}',
				],
			]
		);
		// about desg-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_about_cv_desg_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-dis',
			]
		);
		// about icon-color
		$this->add_control(
			'bwdcv_about_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_about_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about icon-size
		$this->add_responsive_control(
			'bwdcv-about-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about icon Round Size
		$this->add_responsive_control(
			'bwdcv-about-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about cv icon border radius
		$this->add_responsive_control(
			'bwdcv_about_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about title width
		$this->add_responsive_control (
			'bwdcv-about-title-width',
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
					'{{WRAPPER}} .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// about title padding
		$this->add_responsive_control(
			'bwdcv_about_title_padding',
			[
				'label' => esc_html__( 'Title Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// about title border radius
		$this->add_responsive_control(
			'bwdcv_about_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// contact
		$this->start_controls_section(
			'bwdcv_contact_section',
			[
				'label' => esc_html__( 'Contact', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// contact title
		$this->add_control(
			'bwdcv_contact_cv_title', [
				'label' => esc_html__( 'Title', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'contact', 'bwdcv-cv-builder' ),
			]
		);
		$this->end_controls_section();

		// contact style tab
		$this->start_controls_section(
			'bwdcv_contact',
			[
				'label' => esc_html__( 'Contact', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// contact title Background-color
		$this->add_control(
			'bwdcv_contact_cv_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style11'],
				],
			]
		);
		// contact title color
		$this->add_control(
			'bwdcv_contact_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-sub-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'Color: {{VALUE}}',
				],
			]
		);
		// contact background color
		$this->add_control(
			'bwdcv_contact_background_color',
			[
				'label' => esc_html__( 'Contact Area Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// contact title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_contact_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact-title .bwd-cv-sub-title,
				{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title',
			]
		);
		// contact title border color
		$this->add_control(
			'bwdcv_contact_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title, 
					{{WRAPPER}} .bwd-cv-contact-sub-title' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style9','style10','style11','style13','style14','style16','style17','style18',
					'style22','style23','style24','style25'],
				],
			]
		);
		
		// contact cv icon color
		$this->add_control(
			'bwdcv_contact_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contacts-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_contact_title_icon_bg_color',
			[
				'label' => esc_html__( 'Title Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contacts-icon' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style25'],
				],
			]
		);
		//contact cv icon font-size
		$this->add_responsive_control(
			'bwdcv_contact_cv_icon_size',
			[
				'label' => esc_html__( 'Icon Font Size', 'bwdcv_cv_builder' ),
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
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contacts-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// contact cv icon Round Size
		$this->add_responsive_control(
			'bwdcv_contact_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
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
					'{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contacts-icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style25'],
				],
			]
		);
		// contact cv icon border radius
		$this->add_responsive_control(
			'bwdcv_contact_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-icon,
                    {{WRAPPER}} .bwd-cv-contacts-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style25'],
				],
			]
		);
		//contact item icon color
		$this->add_control(
			'bwdcv_contact_item_icon_color',
			[
				'label' => esc_html__( 'Item Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
        //contact item icon Background-color
		$this->add_control(
			'bwdcv_contact_icon_background_color',
			[
				'label' => esc_html__( 'Item Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'Background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		// contact Item icon font size
		$this->add_responsive_control(
			'bwdcv-contact-icon-size',
			[
				'label' => esc_html__( 'Item Icon Font Size', 'bwdcv_cv_builder' ),
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
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		// contact cv item icon Round Size
		$this->add_responsive_control(
			'bwdcv_contact_item_icon_round_size',
			[
				'label' => esc_html__( 'Item Icon Round Size', 'bwdcv_cv_builder' ),
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
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		// contact cv icon border radius
		$this->add_responsive_control(
			'bwdcv_ontact_item_icon_border_radius',
			[
				'label' => esc_html__( 'Item Icon Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		// contact item-color
		$this->add_control(
			'bwdcv_contact_item_color',
			[
				'label' => esc_html__( 'Item Font Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-item' => 'color: {{VALUE}}',
				],
			]
		);
		// contact item font-size
		$this->add_responsive_control(
			'bwdcv-contact-item-size',
			[
				'label' => esc_html__( 'Item Font Size', 'bwdcv_cv_builder' ),
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
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-item' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Contact title width
		$this->add_responsive_control (
			'bwdcv-contact-title-width',
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
					'{{WRAPPER}} .bwd-cv-contact-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// contact title padding
		$this->add_responsive_control(
			'bwdcv_contact_title_padding',
			[
				'label' => esc_html__( 'Title Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style11'],
				],
			]
		);
		// contact title border radius
		$this->add_responsive_control(
			'bwdcv_contact_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style11'],
				],
			]
		);

		$this->end_controls_section();

		// skill
		$this->start_controls_section(
			'bwdcv_skill_section',
			[
				'label' => esc_html__( 'Skill', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// skill title
		$this->add_control(
			'bwdcv_skill_cv_title', [
				'label' => esc_html__( 'Title', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'skill', 'bwdcv-cv-builder' ),
			]
		);
		$repeater = new \Elementor\Repeater();
		//skill name title
		$repeater->add_control(
			'bwdcv_skill_name_title', [
				'label' => esc_html__( 'Skill Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'web developer', 'bwdcv-cv-builder' ),
			]
		);

		$repeater->add_control(
			'bwdcv_skill_percent',
			[
				'label' => esc_html__( 'Percentage', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'default' => 50,
			]
		);
		//skill name color
		$repeater->add_control(
			'bwdcv_skill_name_color',
			[
				'label' => esc_html__( 'Name Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-skill-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-skill-name' => 'color: {{VALUE}}',
				],
			]
		);
		//skill name Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_skill_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-skill-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-skill-name',
			]
		);
		//skill range background color 
		$repeater->add_control(
			'bwdcv_skill_range_background_color',
			[
				'label' => esc_html__( 'Range Bottom Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-skill-name:before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-skill-range' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdcv_skill_range_after_background_color',
			[
				'label' => esc_html__( 'Range Up Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-skill-name:after,{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-skill-range:before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-skill-name:after ' => 'background: {{VALUE}}',
				],
			]
		);
		//skill range border color 
		$repeater->add_control(
			'bwdcv_skill_range_border_color',
			[
				'label' => esc_html__( 'Range Border Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-skill-name:before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcv_skill_name_list',
			[
				'label' => esc_html__( 'Skill Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_skill_name_title' => esc_html__( 'web design' ),
					],
					[	
						'bwdcv_skill_name_title' => esc_html__( 'graphic design' ),
					],
					[	
						'bwdcv_skill_name_title' => esc_html__( 'java script' ),
					],
					[	
						'bwdcv_skill_name_title' => esc_html__( 'html' ),
					],
					[	
						'bwdcv_skill_name_title' => esc_html__( 'css' ),
					],
					[	
						'bwdcv_skill_name_title' => esc_html__( 'php' ),
					],
				],
				'title_field' => '{{{ bwdcv_skill_name_title }}}',
			]
		);

		$this->end_controls_section();

		// skill style tab
		$this->start_controls_section(
			'bwdcv_skill',
			[
				'label' => esc_html__( 'Skill', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// skill title Background-color
		$this->add_control(
			'bwdcv_skill_cv_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title' => 'Background: {{VALUE}}',
				],
			]
		);
		// skill title color
		$this->add_control(
			'bwdcv_skill_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-sub-title' => 'Color: {{VALUE}}',
				],
			]
		);
		// skill title border color
		$this->add_control(
			'bwdcv_skill_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill-title, 
					{{WRAPPER}} .bwd-cv-skill-sub-title' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style11','style13','style14','style16','style17','style18',
					'style22','style23','style24','style25'],
				],
			]
		);
		// skill background color
		$this->add_control(
			'bwdcv_skill_background_color',
			[
				'label' => esc_html__( 'Skill Area Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// skill title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_skill_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-sub-title',
			]
		);
		// skill icon color
		$this->add_control(
			'bwdcv_skill_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-icon' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// skill icon bg color
		$this->add_control(
			'bwdcv_skill_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-icon' => 'background-color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// skill icon-size
		$this->add_responsive_control(
			'bwdcv-skill-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// skill icon Round Size
		$this->add_control(
			'bwdcv-skill-icon-Round Size',
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
					'{{WRAPPER}} .bwd-cv-skill .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-skill-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style21','style22','style25'],
				],
			]
		);
		// skill cv icon border radius
		$this->add_responsive_control(
			'bwdcv_skill_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-skill-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style21','style22','style25'],
				],
			]
		);
		// skill title width
		$this->add_responsive_control (
			'bwdcv-skill-title-width',
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
					'{{WRAPPER}} .bwd-cv-skill-title,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-sub-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// skill title padding
		$this->add_responsive_control(
			'bwdcv_skill_title_padding',
			[
				'label' => esc_html__( 'Title Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill-title,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// skill title border radius
		$this->add_responsive_control(
			'bwdcv_skill_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill-title,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// language
		$this->start_controls_section(
			'bwdcv_language_section',
			[
				'label' => esc_html__( 'language', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// language title
		$this->add_control(
			'bwdcv_language_title', [
				'label' => esc_html__( 'Title', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'language', 'bwdcv-cv-builder' ),
			]
		);

		$repeater = new \Elementor\Repeater();
		//language name title
		$repeater->add_control(
			'bwdcv_language_name_title', [
				'label' => esc_html__( 'language Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'english', 'bwdcv-cv-builder' ),
			]
		);

		//lang percent
		$repeater->add_control(
			'bwdcv_lang_percent',
			[
				'label' => esc_html__( 'Percentage', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'default' => 50,
			]
		);
		//language name color
		$repeater->add_control(
			'bwdcv_language_name_color',
			[
				'label' => esc_html__( 'Name Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-language-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-language-name' => 'color: {{VALUE}}',
				],
			]
		);
		//language name Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_language_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-language-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-language-name ',
			]
		);
		//language range background color 
		$repeater->add_control(
			'bwdcv_language_range_background_color',
			[
				'label' => esc_html__( 'Range Bottom Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-language-name:before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-language-range' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdcv_language_range_after_background_color',
			[
				'label' => esc_html__( 'Range UP Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-language-name:after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-language-range:before' => 'background: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'bwdcv_language_name_list',
			[
				'label' => esc_html__( 'Language Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_language_name_title' => esc_html__( 'english' ),
					],
					[	
						'bwdcv_language_name_title' => esc_html__( 'spanish' ),
					],
					[	
						'bwdcv_language_name_title' => esc_html__( 'chinese' ),
					],
					
				],
				'title_field' => '{{{ bwdcv_language_name_title }}}',
			]
		);

		$this->end_controls_section();

		// language style tab
		$this->start_controls_section(
			'bwdcv_language',
			[
				'label' => esc_html__( 'Language', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// language title Background-color
		$this->add_control(
			'bwdcv_language_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title' => 'Background: {{VALUE}}',
				],
			]
		);
		// language title color
		$this->add_control(
			'bwdcv_language_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-sub-title' => 'Color: {{VALUE}}',
				],
			]
		);
		// language title border color
		$this->add_control(
			'bwdcv_language_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language-title, 
					{{WRAPPER}} .bwd-cv-language-sub-title' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style11','style13','style14','style16','style17','style18',
					'style22','style23','style24','style25'],
				],
			]
		);
		// language background color
		$this->add_control(
			'bwdcv_language_background_color',
			[
				'label' => esc_html__( 'Language Area Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// language title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_language_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-sub-title ',
			]
		);
		// language icon color
		$this->add_control(
			'bwdcv_language_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-icon' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// language icon bg color
		$this->add_control(
			'bwdcv_language_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-icon' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// language icon-size
		$this->add_responsive_control(
			'bwdcv-language-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// language icon Round Size
		$this->add_control(
			'bwdcv-language-icon-Round Size',
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
					'{{WRAPPER}} .bwd-cv-language .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-language-title .bwd-cv-language-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style21','style22','style25'],
				],
			]
		);
		// language cv icon border radius
		$this->add_responsive_control(
			'bwdcv_language_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-language-title .bwd-cv-language-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style21','style22','style25'],
				],
			]
		);
		// language title width
		$this->add_responsive_control (
			'bwdcv-language-title-width',
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
					'{{WRAPPER}} .bwd-cv-language-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// language title padding
		$this->add_responsive_control(
			'bwdcv_language_title_padding',
			[
				'label' => esc_html__( 'Title Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// language title border radius
		$this->add_responsive_control(
			'bwdcv_language_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// hobby
		$this->start_controls_section(
			'bwdcv_hobby_section',
			[
				'label' => esc_html__( 'Hobby', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// hobby title
		$this->add_control(
			'bwdcv_hobby_title', [
				'label' => esc_html__( 'Title', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'hobby', 'bwdcv-cv-builder' ),
			]
		);

		$repeater = new \Elementor\Repeater();
		//hobby name title
		$repeater->add_control(
			'bwdcv_hobby_name_title', [
				'label' => esc_html__( 'Hobby Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'football', 'bwdcv-cv-builder' ),
			]
		);
		// hobby name title-Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_hobby_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-title',
			]
		);
		//hobby name color
		$repeater->add_control(
			'bwdcv_hobby_name_color',
			[
				'label' => esc_html__( 'Hobby name Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-title' => 'color: {{VALUE}}',
				],
			]
		);
		//hobby icon
		$repeater->add_control(
			'bwdcv_hobby_icon',
			[
				'label' => esc_html__( 'hobby Icon', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-futbol',
					'library' => 'solid',
				],
			]
		);
		//hobby icon color
		$repeater->add_control(
			'bwdcv_hobby_icon_color',
			[
				'label' => esc_html__( 'Hobby Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-hobby-icon' => 'color: {{VALUE}}',
				],
			]
		);
		//hobby icon size
		$repeater->add_responsive_control(
			'bwdcv_hobby_icon_size',
			[
				'label' => esc_html__( 'Hobby Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-hobby-icon' => 'font-size: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'bwdcv_hobby_name_list',
			[
				'label' => esc_html__( 'Hobby Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'music' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-music',
							'library' => 'solid',
						],
					],
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'MOVIE' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-film',
							'library' => 'solid',
						],
					],
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'writing' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-pen',
							'library' => 'solid',
						],
					],
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'football' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-futbol',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ bwdcv_hobby_name_title }}}',
			]
		);

		$this->end_controls_section();

		// hobby style tab
		$this->start_controls_section(
			'bwdcv_hobby',
			[
				'label' => esc_html__( 'Hobby', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// hobby title color
		$this->add_control(
			'bwdcv_hobby_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-sub-title' => 'Color: {{VALUE}}',
				],
			]
		);
		// hobby title Background-color
		$this->add_control(
			'bwdcv_hobby_title_Background_color',
			[
				'label' => esc_html__( 'TItle Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title' => 'Background: {{VALUE}}',
				],
			]
		);
		// hobby title border color
		$this->add_control(
			'bwdcv_hobby_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style13','style14','style16','style17','style18','style20',
					'style22','style23','style24','style25'],
				],
			]
		);
		// hobby background color
		$this->add_control(
			'bwdcv_hobby_background_color',
			[
				'label' => esc_html__( 'Hobby Area Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// hobby title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_hobby_title_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-sub-title ',
			]
		);
		// hobby icon color
		$this->add_control(
			'bwdcv_hobby_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby icon bg color
		$this->add_control(
			'bwdcv_hobby_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby icon-size
		$this->add_responsive_control(
			'bwdcv-hobby-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby icon Round Size
		$this->add_control(
			'bwdcv-hobby-icon-Round Size',
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
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-hobby-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby cv icon border radius
		$this->add_responsive_control(
			'bwdcv_hobby_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-hobby-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby title width
		$this->add_responsive_control (
			'bwdcv-hobby-title-width',
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
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// hobby title padding
		$this->add_responsive_control(
			'bwdcv_hobby_title_padding',
			[
				'label' => esc_html__( 'Title Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// hobby title border radius
		$this->add_responsive_control(
			'bwdcv_hobby_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		// education
		$this->start_controls_section(
			'bwdcv_education_section',
			[
				'label' => esc_html__( 'Education', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// education title
		$this->add_control(
			'bwdcv_education_title', [
				'label' => esc_html__( 'Title', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'education', 'bwdcv-cv-builder' ),
			]
		);

		$repeater = new \Elementor\Repeater();
		//education name title
		$repeater->add_control(
			'bwdcv_education_name_title', [
				'label' => esc_html__( 'education Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'UNIVERSITY DEGREE', 'bwdcv-cv-builder' ),
			]
		);
		// education name title-Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_education_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-title',
			]
		);
		//institute name background color
		$repeater->add_control(
			'bwdcv_institute_name_background_color',
			[
				'label' => esc_html__( 'Line Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-institute-name::before' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		$repeater->add_control(
			'bwdcv_institute_after_background_color',
			[
				'label' => esc_html__( 'Line Drop Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-institute-name::after' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		//education name color
		$repeater->add_control(
			'bwdcv_education_name_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-title' => 'color: {{VALUE}} !important',
				],
			]
		);
		// education Description
		$repeater->add_control(
			'bwdcv_education_desc', [
				'label' => esc_html__( 'Description', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', 'bwdcv-cv-builder' ),
			]
		);
		// education Description Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_education_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-dis',
			]
		);
		//education Description color
		$repeater->add_control(
			'bwdcv_education_description_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-dis' => 'color: {{VALUE}} !important',
				],
			]
		);
		// education Year
		$repeater->add_control(
			'bwdcv_education_year', [
				'label' => esc_html__( 'Year', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( '2014' ),
			]
		);
		// education Year Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_education_year_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-year',
			]
		);
		//education Year color
		$repeater->add_control(
			'bwdcv_education_year_color',
			[
				'label' => esc_html__( 'Year Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-year' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdcv_education_name_list',
			[
				'label' => esc_html__( 'Education Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_education_name_title' => esc_html__( 'university degree', 'bwdcv_cv_builder' ),
						'bwdcv_education_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', 'bwdcv-cv-builder', 'bwdcv_cv_builder' ),
						'bwdcv_education_year' => esc_html__( '2014', 'bwdcv_cv_builder' ),
					],
					[	
						'bwdcv_education_name_title' => esc_html__( 'university of honours', 'bwdcv_cv_builder' ),
						'bwdcv_education_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', 'bwdcv-cv-builder', 'bwdcv_cv_builder' ),
						'bwdcv_education_year' => esc_html__( '2017', 'bwdcv_cv_builder' ),
					],
					[	
						'bwdcv_education_name_title' => esc_html__( 'university master', 'bwdcv_cv_builder' ),
						'bwdcv_education_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', 'bwdcv-cv-builder', 'bwdcv_cv_builder' ),
						'bwdcv_education_year' => esc_html__( '2020', 'bwdcv_cv_builder' ),
					],
				],
				'title_field' => '{{{ bwdcv_education_name_title }}}',
			]
		);

		$this->end_controls_section();

		// education style tab
		$this->start_controls_section(
			'bwdcv_education',
			[
				'label' => esc_html__( 'Education', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// education title-color
		$this->add_control(
			'bwdcv_education_title_color',
			[
				'label' => esc_html__( 'Text Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// education title Background-color
		$this->add_control(
			'bwdcv_education_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-sub-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title' => 'Background: {{VALUE}}',
				],
			]
		);
		// education title border color
		$this->add_control(
			'bwdcv_education_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education-title,
					{{WRAPPER}} .bwd-cv-institute-item' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style10','style12','style16','style17','style18','style19','style20',
					'style22','style23','style24',],
				],
			]
		);
		// education title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_education_title_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-sub-title ',
			]
		);
		// education icon-color
		$this->add_control(
			'bwdcv_education_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education icon bg color
		$this->add_control(
			'bwdcv_education_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education icon-size
		$this->add_responsive_control(
			'bwdcv-education-icon-size',
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
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education icon Round Size
		$this->add_control(
			'bwdcv-education-icon-Round Size',
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
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-education-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education cv icon border radius
		$this->add_responsive_control(
			'bwdcv_education_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-education-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education title width
		$this->add_responsive_control (
			'bwdcv-education-title-width',
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
					'{{WRAPPER}} .bwd-cv-education-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// education title padding
		$this->add_responsive_control(
			'bwdcv_education_title_padding',
			[
				'label' => esc_html__( 'Title Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// education title border radius
		$this->add_responsive_control(
			'bwdcv_education_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-cv-experience-name::before' => 'background-color: {{VALUE}} !important',
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

		// reference
		$this->start_controls_section(
			'bwdcv-reference_section',
			[
				'label' => esc_html__( 'Reference', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
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
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title,
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

		// footer
		$this->start_controls_section(
			'bwdcv_footer_section',
			[
				'label' => esc_html__( 'Footer', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
			
		);
		
		$this->add_control(
			'bwdcv_video_type_show',
			[
				'label' => esc_html__( 'Show Video', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdcv-cv-builder' ),
				'label_off' => esc_html__( 'Hide', 'bwdcv-cv-builder' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_video_type',
			[
				'label' => esc_html__( 'Source', 'bwdcv-cv-builder' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'youtube',
				'options' => [
					'youtube' => esc_html__( 'YouTube', 'bwdcv-cv-builder' ),
					'hosted' => esc_html__( 'Self Hosted', 'bwdcv-cv-builder' ),
				],
				'condition' => [
					'bwdcv_video_type_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_video_youtube_url',
			[
				'label' => esc_html__( 'Link', 'bwdcv-cv-builder' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your URL', 'bwdcv-cv-builder' ) . ' (YouTube)',
				'label_block' => true,
				'default' => [
					'url' => 'https://www.youtube-nocookie.com/embed/aLMXFDqaaO0',
				],
				'condition' => [
					'bwdcv_video_type' => 'youtube',
					'bwdcv_video_type_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_video',
			[
				'label' => esc_html__( 'Choose video', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'video',
				'condition' => [
					'bwdcv_video_type' => 'hosted',
					'bwdcv_video_type_show' => 'yes',
				],
			]
		);
		// footer signature_upload
		$this->add_control(
			'bwdcv_signature_upload_show',
			[
				'label' => esc_html__( 'Show Signature', 'bwdab-author-bio' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdab-author-bio' ),
				'label_off' => esc_html__( 'Hide', 'bwdab-author-bio' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_signature_upload',
			[
				'label' => esc_html__( 'Choose Image', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/sign-white.png',
				],
				'condition' => [
					'bwdcv_signature_upload_show' => 'yes',
				],
			]
		);
		// footer button
		$this->add_control(
			'bwdcv_footer_btn_show',
			[
				'label' => esc_html__( 'Show Button', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdcv-cv-builder' ),
				'label_off' => esc_html__( 'Hide', 'bwdcv-cv-builder' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_footer_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Contact Me', 'bwdcv-cv-builder' ),
				'placeholder' => esc_html__( 'Type button text here', 'bwdcv-cv-builder' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcv_footer_btn_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_footer_btn_link',
			[
				'label' => esc_html__( 'Link', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwdcv-cv-builder' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcv_footer_btn_show' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		// footer style tab
		$this->start_controls_section(
			'bwdcv_footer',
			[
				'label' => esc_html__( 'Footer', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// footer  Background-color
		$this->add_control(
			'bwdcv_footer_background_color',
			[
				'label' => esc_html__( 'Footer Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta' => 'Background: {{VALUE}}',
				],
			]
		);
		// footer vedio color
		$this->add_control(
			'bwdcv_footer_vedio_color',
			[
				'label' => esc_html__( 'Vedio Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'color: {{VALUE}}',
				],
			]
		);
		// footer vedio Background-color
		$this->add_control(
			'bwdcv_footer_vedio_background_color',
			[
				'label' => esc_html__( 'Vedio Background Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'Background: {{VALUE}}',
				],
			]
		);
		// footer vedio icon size
		$this->add_responsive_control(
			'bwdcv-footer-vedio-icon-size',
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
				'default' => [
					'unit' => 'px',
					'size' => 25,
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// footer vedio icon Round Size
		$this->add_responsive_control(
			'bwdcv-footer-vedio-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 80,
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// footer button tab
		$this->start_controls_tabs(
			'bwdcv_button_tabs'
		);
		// footer button normal
		$this->start_controls_tab(
			'bwdcv_button_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdcv-cv-builder' ),
			]
		);
		// footer button normal color
		$this->add_control(
			'bwdcv_footer_button_normal_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'color: {{VALUE}}',
				],
			]
		);
		// footer button normal Background-color
		$this->add_control(
			'bwdcv_footer_button_normal_background_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'Background: {{VALUE}}',
				],
			]
		);
		// footer button normal Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_footer_button_normal_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button',
			]
		);
		// footer button padding
		$this->add_responsive_control(
			'bwdcv_button_padding',
			[
				'label' => esc_html__( 'Button Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// footer button border radius
		$this->add_responsive_control(
			'bwdcv-button-border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		// footer button hover
		$this->start_controls_tab(
			'bwdcv_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdcv-cv-builder' ),
			]
		);
		// footer button hover color
		$this->add_control(
			'bwdcv_footer_button_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button:hover' => 'color: {{VALUE}}',
				],
			]
		);
		// footer button hover Background-color
		$this->add_control(
			'bwdcv_footer_button_hover_background_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button:hover' => 'Background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_responsive_control(
			'bwdcv_footer_padding',
			[
				'label' => esc_html__( 'Footer Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdcv_cv_box_image = $settings['bwdcv_cv_box_image']['url'];
		$bwdcv_header_cv_title = $settings['bwdcv_header_cv_title'];
		$bwdcv_header_cv_social_title = $settings['bwdcv_header_cv_social_title'];
		$bwdcv_header_cv_desg = $settings['bwdcv_header_cv_desg'];
		$bwdcv_header_description = $settings['bwdcv_header_description'];
		$bwdcv_about_cv_title = $settings['bwdcv_about_cv_title'];
		$bwdcv_about_cv_desg = $settings['bwdcv_about_cv_desg'];
		$bwdcv_contact_cv_title = $settings['bwdcv_contact_cv_title'];
		$bwdcv_skill_cv_title = $settings['bwdcv_skill_cv_title'];
		$bwdcv_language_title = $settings['bwdcv_language_title'];
		$bwdcv_hobby_title = $settings['bwdcv_hobby_title'];
		$bwdcv_education_title = $settings['bwdcv_education_title'];
		$bwdcv_experience_title = $settings['bwdcv_experience_title'];
		$bwdcv_reference_title = $settings['bwdcv_reference_title'];
		$bwdcv_signature_show = $settings['bwdcv_signature_upload_show'];
		$bwdcv_signature_upload = $settings['bwdcv_signature_upload']['url'];
		$bwdcv_show_video = $settings['bwdcv_video_type_show'];
		$video = $settings['bwdcv_video_type'];
		$bwdcv_button_show = $settings['bwdcv_footer_btn_show'];
		$bwdcv_button_text = $settings['bwdcv_footer_btn_text'];
		$bwdcv_button_url = $settings['bwdcv_footer_btn_link']['url'];
		$bwdcv_video_youtube = $settings['bwdcv_video_youtube_url']['url'];


		if ( ! empty( $settings['bwdcv_cv_box_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdcv_cv_box_icon_link', $settings['bwdcv_cv_box_icon_link'] );
		}
	
		if ( ! empty( $settings['bwdcv_footer_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdcv_footer_btn_link', $settings['bwdcv_footer_btn_link'] );
		}
		if ('style1' === $settings['bwdcv-cv-builder_style']) {
		?>	
			<div class="bwd-cv-vilder-1-area bwd-cv-vilder-common">
				<div >
					<div class="row g-0">
						<div class="col-lg-12">
							<div class="bwd-cv-vilder-information">
								<div class="bwd-cv-vilder-img">
									<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
								</div>
								<div class="bwd-cv-vilder-profile">
									<div class="bwd-cv-vilder-name">
										<?php echo esc_html($bwdcv_header_cv_title); ?>
									</div>
									<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
									<div class="bwd-cv-vilder-social-area">
										<?php
											if( $settings['bwdcv_cv_box_social_list'] ) {
											foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
										?>
										<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
										href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
										<?php 
											}
										} ?>
									</div>
								</div>
								<div class="bwd-cv-vilder-item row">
									<div class="col-md-6 col-sm-12">
										<div class="bwd-cv-vilder-left-content">
											<div class="bwd-cv-profile">
												<div class="bwd-cv-profile-title">
													<i class="fas fa-user bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html ($bwdcv_about_cv_title); ?>
													</div>
												</div>
												<div class="bwd-cv-profile-dis">
													<?php echo esc_html( $bwdcv_about_cv_desg); ?>
												</div>
											</div>
											<div class="bwd-cv-contact">
												<div class="bwd-cv-contact-title">
													<i class="fas fa-phone-alt bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_contact_cv_title); ?>
													</div>
												</div>
												<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i>+00 952 165</div>
												<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i>info20@gmail.com</div>
												<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i>uttara dhaka 1230</div>
											</div>
											<div class="bwd-cv-skill bwd-cv-pb-area">
												<div class="bwd-cv-skill-title">
													<i class="fas fa-chart-pie bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_skill_cv_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_skill_name_list'] ) {
													foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<?php echo esc_html($item['bwdcv_skill_name_title']); ?>

													 <div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
													 >
													 </div>

												</div>
												<?php 
													}
												} ?>
											</div>
											<div class="bwd-cv-language bwd-cv-pb-area">
												<div class="bwd-cv-language-title">
													<i class="fas fa-language bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_language_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_language_name_list'] ) {
													foreach( $settings['bwdcv_language_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													
													<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>" >
													 </div>
												</div>
												<?php 
													}
												} ?>
											</div>
											<div class="bwd-cv-hobby">
												<div class="bwd-cv-hobby-title">
													<i class="fas fa-hockey-puck bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_hobby_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_hobby_name_list'] ) {
													foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
													<div class="bwd-cv-title">
														<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
													</div>
													
												</div>
												<?php 
													}
												} ?>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="bwd-cv-vilder-right-content">
											<div class="bwd-cv-education">
												<div class="bwd-cv-education-title">
													<i class="fas fa-graduation-cap bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_education_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_education_name_list'] ) {
													foreach( $settings['bwdcv_education_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<div class="bwd-cv-institute-title">
														<?php echo esc_html($item['bwdcv_education_name_title']); ?>
													</div>
													<div class="bwd-cv-institute-dis">
														<?php echo esc_html($item['bwdcv_education_desc']); ?>
													</div>
													<div class="bwd-cv-institute-year">
														<?php echo esc_html($item['bwdcv_education_year']); ?>
													</div>
												</div>
												<?php 
													}
												} ?>
											</div>
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
								<div class="bwd-cv-meta d-flex align-items-center">
									<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
									<?php } ?>
									<?php if( $bwdcv_signature_show === 'yes' ) { ?>
									<div class="bwd-cv-signature">
										<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
									</div><?php } ?>
									<?php if( $bwdcv_button_show === 'yes' ) {?>
									<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-img-shape"></div>
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr( $bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html ($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title">
											<?php echo esc_html ($bwdcv_header_cv_desg); ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
													<div class="bwd-cv-sub-title">
												 		<?php echo esc_html ( $bwdcv_about_cv_title); ?>
													</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html ( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ( $bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
															</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-vilder-social-area">
													<div class="bwd-cv-social-sub-title"><?php echo esc_html( $bwdcv_header_cv_social_title); ?></div>
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo esc_attr( $item['bwdcv_cv_box_icon_link']['url']);?>"><i class="bwd-cv-social-icon  <?php echo esc_attr ($item['bwdcv_cv_box_icon']['value']);?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i>info20@gmail.com</div>
													<div class="bwd-cv-home bwd-cv-contact-item">
														<i class="fas fa-home"></i>
														street avenue 90
													</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr ($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title">
											<?php echo esc_html($bwdcv_header_cv_desg); ?>
										</div>
										<div class="bwd-cv-profile-dis">
											<?php echo esc_html($bwdcv_header_description); ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-vilder-social-area">
													<div class="bwd-cv-social-sub-title"><?php echo esc_html($bwdcv_header_cv_social_title); ?></div>
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo esc_attr( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_about_cv_title); ?>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?> 
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo $bwdcv_education_title; ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title">
											<?php echo esc_html($bwdcv_header_cv_desg); ?>
										</div>
										<div class="bwd-cv-profile-dis">
											<?php echo esc_html($bwdcv_header_description); ?>
										</div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item d-flex">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range"></div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_about_cv_title); ?>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?> 
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style5' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-5-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<div class="bwd-cv-vilder-profile">
													<div class="bwd-cv-vilder-name">
														<?php echo esc_html($bwdcv_header_cv_title); ?>
													</div>
													<div class="bwd-cv-vilder-title">
														<?php echo esc_html($bwdcv_header_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-social">
													<div class="bwd-cv-social-sub-title"><?php echo esc_html($bwdcv_header_cv_social_title); ?></div>
													<div class="bwd-cv-social-area">
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo $item['bwdcv_cv_box_icon_link']['url'];?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
													<?php 
														}
													} ?>
													</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-skill-area">
														<?php
															if( $settings['bwdcv_skill_name_list'] ) {
															foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-skill-name">
																<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															</div>
															<div class="bwd-cv-skill-range"></div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-area">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-contact-area">
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
													</div>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<div class="bwd-cv-language-area">
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-language-name ">
																<?php echo esc_html($item['bwdcv_language_name_title']); ?>
															</div>
															<div class="bwd-cv-language-range"></div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<i class="fas fa-graduation-cap bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style6' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-6-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr( $item['bwdcv_cv_box_icon']['value'] );?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range"></div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<i class="fas fa-graduation-cap bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style7' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-7-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
										<div class="bwd-cv-contact">
											<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
											<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
											<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-language-name">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														</div>
														<div class="bwd-cv-language-range"></div>
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
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
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range"></div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style8' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-8-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-img-shape"></div>
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range"></div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<div class="bwd-cv-language-item">
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style9' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-9-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-img-shape"></div>
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo $item['bwdcv_cv_box_icon_link']['url'];?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-contact">
													<i class="fas fa-phone-alt bwd-cv-contacts-icon"></i>
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-contact-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-contact-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-contact-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<i class="fas fa-snowman bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_skill_cv_title); ?>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range"></div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<i class="fas fa-language bwd-cv-icon"></i>
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<div class="bwd-cv-language-item">
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<div class="bwd-cv-hobby">
													<i class="fas fa-hockey-puck bwd-cv-icon"></i>
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_education_title); ?>
													</div>
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style10' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-10-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-social-area">
										<?php
											if( $settings['bwdcv_cv_box_social_list'] ) {
											foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
										?>
										<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
										href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
										<?php 
											}
										} ?>
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title">
											<?php echo esc_html($bwdcv_header_cv_desg); ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-identity-area row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-identity-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-identity-right-content">
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
											</div>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range"></div>
													</div>
													<?php 
														}
													} ?>
												</div>	
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<div class="bwd-cv-language-item">
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style11' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-11-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-img-shape"></div>
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<div class="bwd-cv-vilder-left-content-item">
													<div class="bwd-cv-vilder-profile">
														<div class="bwd-cv-vilder-name">
															<?php echo esc_html($bwdcv_header_cv_title); ?>
														</div>
														<div class="bwd-cv-vilder-title">
															<?php echo esc_html($bwdcv_header_cv_desg); ?>
														</div>
													</div>
													<div class="bwd-cv-vilder-social-area">
														<div class="bwd-cv-social-title-item">
															<div class="bwd-cv-icon">
																<i class="fas fa-hashtag"></i>
															</div>
															<div class="bwd-cv-social-sub-title">
																<?php echo $bwdcv_header_cv_social_title; ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_cv_box_social_list'] ) {
															foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
														?>
														<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
														href="<?php echo $item['bwdcv_cv_box_icon_link']['url'];?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
														<?php 
															}
														} ?>
													</div>
													<div class="bwd-cv-contact">
														<div class="bwd-cv-contact-title">
															<div class="bwd-cv-contacts-icon">
																<i class="fas fa-phone-alt"></i>
															</div>
															<div class="bwd-cv-contact-sub-title">
																<?php echo $bwdcv_contact_cv_title; ?>
															</div>
														</div>
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
													</div>
													<div class="bwd-cv-skill">
														<div class="bwd-cv-skill-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-snowman "></i>
															</div>
															<div class="bwd-cv-skill-sub-title">
																<?php echo $bwdcv_skill_cv_title; ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_skill_name_list'] ) {
															foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-skill-name">
																<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															</div>
															<div class="bwd-cv-skill-range"></div>
														</div>
														<?php 
															}
														} ?>
													</div>
													<div class="bwd-cv-language">
														<div class="bwd-cv-language-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-language "></i>
															</div>
															<div class="bwd-cv-sub-title">
																<?php echo $bwdcv_language_title; ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-hockey-puck"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style12' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-12-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url']);?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range"></div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style13' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-13-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<div class="bwd-cv-vilder-profile">
													<div class="bwd-cv-vilder-name">
														<?php echo esc_html($bwdcv_header_cv_title); ?>
													</div>
													<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
													<div class="bwd-cv-vilder-social-area">
														<?php
															if( $settings['bwdcv_cv_box_social_list'] ) {
															foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
														?>
														<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
														href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
														<?php 
															}
														} ?>
													</div>
												</div>
												<div class="bwd-cv-vilder-left-content-item">
													<div class="bwd-cv-contact">
														<div class="bwd-cv-contact-title">
															<div class="bwd-cv-sub-title">
																<?php echo esc_html($bwdcv_contact_cv_title); ?>
															</div>
														</div>
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
													</div>
													<div class="bwd-cv-skill">
														<div class="bwd-cv-skill-title">
															<div class="bwd-cv-sub-title">
																<?php echo esc_html($bwdcv_skill_cv_title); ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_skill_name_list'] ) {
															foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-skill-name">
																<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															</div>
															<div class="bwd-cv-skill-range"></div>
														</div>
														<?php 
															}
														} ?>
													</div>
													<div class="bwd-cv-language">
														<div class="bwd-cv-language-title">
															<div class="bwd-cv-sub-title">
																<?php echo esc_html($bwdcv_language_title); ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														</div>
														<?php 
															}
														} ?>
													</div>
													<div class="bwd-cv-hobby">
														<div class="bwd-cv-hobby-title">
															<div class="bwd-cv-sub-title">
																<?php echo esc_html($bwdcv_hobby_title); ?>
															</div>
														</div>
														<div class="bwd-cv-hobby-item">
															<?php
																if( $settings['bwdcv_hobby_name_list'] ) {
																foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
															?>
															<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
																<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
																<div class="bwd-cv-title">
																	<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
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
										<div class="col-lg-8 col-md-6">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<i class="fas fa-graduation-cap bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style14' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-14-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo esc_url($item['bwdcv_cv_box_icon_link']['url']);?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
										<div class="bwd-cv-contact">
											<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
											<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
											<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="bwd-cv-profile">
											<div class="bwd-cv-profile-title">
												<div class="bwd-cv-sub-title">
													<?php echo esc_html($bwdcv_about_cv_title); ?>
												</div>
											</div>
											<div class="bwd-cv-profile-dis">
												<?php echo esc_html($bwdcv_about_cv_desg); ?>
											</div>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range"></div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style15' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-15-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<div class="bwd-cv-vilder-profile">
													<div class="bwd-cv-vilder-name">
														<?php echo esc_html($bwdcv_header_cv_title); ?>
													</div>
													<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
													<div class="bwd-cv-vilder-social-area">
														<?php
															if( $settings['bwdcv_cv_box_social_list'] ) {
															foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
														?>
														<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
														href="<?php echo esc_url($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
														<?php 
															}
														} ?>
													</div>
												</div>
												<div class="bwd-cv-vilder-left-content-item">
													<div class="bwd-cv-contact">
														<div class="bwd-cv-contact-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-phone-alt"></i>
															</div>
															<div class="bwd-cv-contact-sub-title">
																<?php echo esc_html($bwdcv_contact_cv_title); ?>
															</div>
														</div>
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
													</div>
													<div class="bwd-cv-skill">
														<div class="bwd-cv-skill-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-snowman "></i>
															</div>
															<div class="bwd-cv-skill-sub-title">
																<?php echo esc_html($bwdcv_skill_cv_title); ?>
															</div>
														</div>
														<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-skill-name">
																<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															</div>
															<div class="bwd-cv-skill-range"></div>
														</div>
														<?php 
															}
														} ?>
													</div>
													<div class="bwd-cv-language">
														<div class="bwd-cv-language-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-language "></i>
															</div>
															<div class="bwd-cv-sub-title bwd-cv-language-sub-title">
																<?php echo esc_html($bwdcv_language_title); ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<i class="fas fa-graduation-cap bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-hockey-puck"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
			<?php
		}elseif ('style16' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-16-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img-contact-area">
										<div class="bwd-cv-vilder-img">
											<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
										</div>
										<div class="bwd-cv-contact">
											<div class="bwd-cv-phone-number bwd-cv-contact-item"> 
												<div class="bwd-cv-phone-number-title">phone</div>
												+00 952 165
											</div>
											<div class="bwd-cv-email bwd-cv-contact-item">
												<div class="bwd-cv-email-title">email</div> 
												info20@gmail.com</div>
											<div class="bwd-cv-location bwd-cv-contact-item"> 
												<div class="bwd-cv-location-title">location</div> 
												uttara dhaka 1230</div>
										</div>
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo esc_url($item['bwdcv_cv_box_icon_link']['url']);?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-skill-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
									<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
														
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr			($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
														
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
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
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr			($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<i class="fas fa-phone-alt bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i>+00 952 165</div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i>info20@gmail.com</div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<i class="fas fa-chart-pie bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<i class="fas fa-language  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<i class="fas fa-hockey-puck  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
														
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-img-shape"></div>
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr			($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<div class="bwd-cv-vilder-profile">
													<div class="bwd-cv-vilder-name">
														<?php echo esc_html($bwdcv_header_cv_title); ?>
													</div>
													<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
													<div class="bwd-cv-vilder-social-area">
														<?php
															if( $settings['bwdcv_cv_box_social_list'] ) {
															foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
														?>
														<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
														href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
														<?php 
															}
														} ?>
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<i class="fas fa-phone-alt bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<i class="fas fa-chart-pie bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<i class="fas fa-language  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
														
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
													</div>	
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
											<?php 
												}
											} ?>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
														
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-vilder-left-content-item">
													<div class="bwd-cv-vilder-img">
														<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
													</div>
													<div class="bwd-cv-vilder-profile">
														<div class="bwd-cv-vilder-name">
															<?php echo esc_html($bwdcv_header_cv_title); ?>
														</div>
														<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
														<div class="bwd-cv-vilder-social-area">
															<?php
																if( $settings['bwdcv_cv_box_social_list'] ) {
																foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
															?>
															<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
															href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
															<?php 
																}
															} ?>
														</div>
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
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
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<i class="fas fa-hockey-puck  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
														
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
									</div>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
							<div class="bwd-cv-vilder-information">
								<div class="bwd-cv-vilder-item row">
									<div class="col-lg-5 col-md-6 col-sm-12">
										<div class="bwd-cv-vilder-left-content">
											<div class="bwd-cv-img-shape"></div>
											<div class="bwd-cv-vilder-img">
												<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
											</div>
											<div class="bwd-cv-vilder-profile">
												<div class="bwd-cv-vilder-name">
													<?php echo esc_html($bwdcv_header_cv_title); ?>
												</div>
												<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
												<div class="bwd-cv-vilder-social-area">
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
													<?php 
														}
													} ?>
												</div>
											</div>
											<div class="bwd-cv-contact">
												<div class="bwd-cv-contact-title">
													<i class="fas fa-phone-alt bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_contact_cv_title); ?>
													</div>
												</div>
												<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
												<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
												<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
											</div>
											<div class="bwd-cv-skill">
												<div class="bwd-cv-skill-title">
													<i class="fas fa-chart-pie bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_skill_cv_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_skill_name_list'] ) {
													foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
												</div>
												<?php 
													}
												} ?>
											</div>
											<div class="bwd-cv-language">
												<div class="bwd-cv-language-title">
													<i class="fas fa-language bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_language_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_language_name_list'] ) {
													foreach( $settings['bwdcv_language_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<?php echo esc_html($item['bwdcv_language_name_title']); ?>
												</div>
												<?php 
													}
												} ?>
											</div>
										</div>
									</div>
									<div class="col-lg-7 col-md-6 col-sm-12">
										<div class="bwd-cv-vilder-right-content">
											<div class="bwd-cv-profile">
												<div class="bwd-cv-profile-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html ($bwdcv_about_cv_title); ?>
													</div>
												</div>
												<div class="bwd-cv-profile-dis">
													<?php echo esc_html( $bwdcv_about_cv_desg); ?>
												</div>
											</div>
											<div class="bwd-cv-education">
												<div class="bwd-cv-education-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_education_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_education_name_list'] ) {
													foreach( $settings['bwdcv_education_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<div class="bwd-cv-institute-item d-flex align-items-center">
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
													</div>
													<div class="bwd-cv-institute-dis">
														<?php echo esc_html($item['bwdcv_education_desc']); ?>
													</div>
												</div>
												<?php 
													}
												} ?>
											</div>
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
											<div class="bwd-cv-hobby">
												<div class="bwd-cv-hobby-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_hobby_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_hobby_name_list'] ) {
													foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
													<div class="bwd-cv-title">
														<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
													</div>
													
												</div>
												<?php 
													}
												} ?>
											</div>
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
								<div class="bwd-cv-meta d-flex align-items-center">
									<?php if($bwdcv_show_video === 'yes') { ?>
									<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
									elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
									?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
									<?php } ?>
									<?php if( $bwdcv_signature_show === 'yes' ) { ?>
									<div class="bwd-cv-signature">
										<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
									</div><?php } ?>
									<?php if( $bwdcv_button_show === 'yes' ) {?>
									<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-vilder-left-content-item">
													<div class="bwd-cv-vilder-profile">
														<div class="bwd-cv-vilder-name">
															<?php echo esc_html($bwdcv_header_cv_title); ?>
														</div>
														<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
														<div class="bwd-cv-vilder-social-area">
															<?php
																if( $settings['bwdcv_cv_box_social_list'] ) {
																foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
															?>
															<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
															href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" data-toggle="tooltip" data-placement="top" title="skype"></i></a>
															<?php 
																}
															} ?>
														</div>
													</div>
													<div class="bwd-cv-vilder-img">
														<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt"></i>+00 952 165</div>
													<div class="bwd-cv-email"><i class="fas fa-envelope"></i>info20@gmail.com</div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt"></i>uttara dhaka 1230</div>
												</div>
												<div class="bwd-cv-language">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-skill">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													</div>
													<?php 
														}
													} ?>
												</div>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
														
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
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
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
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
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
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