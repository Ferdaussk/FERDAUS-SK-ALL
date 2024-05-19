<?php
namespace Creativecv\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCVHEADER extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdcv-cv-builder-header';
	}

	public function get_title() {
		return esc_html__( 'BWD CV HEADER', 'bwdcv-cv-builder' );
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
    }

    protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdcv_cv_box_image = $settings['bwdcv_cv_box_image']['url'];
		$bwdcv_header_cv_title = $settings['bwdcv_header_cv_title'];
		$bwdcv_header_cv_social_title = $settings['bwdcv_header_cv_social_title'];
		$bwdcv_header_cv_desg = $settings['bwdcv_header_cv_desg'];
		$bwdcv_header_description = $settings['bwdcv_header_description'];

        if ( ! empty( $settings['bwdcv_cv_box_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdcv_cv_box_icon_link', $settings['bwdcv_cv_box_icon_link'] );
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
										<div class="col-md-6 col-sm-12">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
				<div class="bwd-cv-vilder-16-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
									<div class="bwd-cv-vilder-img-contact-area">
										<div class="bwd-cv-vilder-img">
											<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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
								<div class="bwd-cv-vilder-information bwd-cv-header-information">
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