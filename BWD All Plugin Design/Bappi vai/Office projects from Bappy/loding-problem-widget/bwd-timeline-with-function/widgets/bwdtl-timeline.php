<?php
namespace BWDTLTimeline\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDTLTimelineWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWD Timeline', 'bwdtl-timeline');
	}
	public function get_title() {
		return esc_html__( 'BWD Timeline', 'bwdtl-timeline');
	}
	public function get_icon() {
		return 'eicon-time-line bwdtl-timeline';
	}
	public function get_categories() {
		return [ 'bwdtl-timeline-category' ];
	}
	public function get_script_depends() {
		return [ 'bwdtl-timeline-category' ];
	}
	public function get_keywords() {
		return [ 'timeline', 'bwd timeline', 'timeline', 'timeline', 'text' ];
	}
	protected function register_controls() {
     // Timeline layout control section start
		$this->start_controls_section(
			'bwdtl_TL_presets',
			[
				'label' => esc_html__( 'Presets', 'bwdtl-timeline' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//all timeline style
		$this->add_control(
			'bwdtl_TL_choose_design',
			[
				'label' => esc_html__( 'Choose Designs', 'bwdtl-timeline' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style1', 'bwdtl-timeline'),
					'style2' => esc_html__( 'Style2', 'bwdtl-timeline'),
					'style3' => esc_html__( 'Style3', 'bwdtl-timeline'),
					'style4' => esc_html__( 'Style4', 'bwdtl-timeline'),
					'style5' => esc_html__( 'Style5', 'bwdtl-timeline'),
					'style6' => esc_html__( 'Style6', 'bwdtl-timeline'),
					'style7' => esc_html__( 'Style7', 'bwdtl-timeline'),
					'style8' => esc_html__( 'Style8', 'bwdtl-timeline'),
					'style9' => esc_html__( 'Style9', 'bwdtl-timeline'),
					'style10' => esc_html__( 'Style10', 'bwdtl-timeline'),
					'style11' => esc_html__( 'Style11', 'bwdtl-timeline'),
					'style12' => esc_html__( 'Style12', 'bwdtl-timeline'),
					'style13' => esc_html__( 'Style13', 'bwdtl-timeline'),
					'style14' => esc_html__( 'Style14', 'bwdtl-timeline'),
					'style15' => esc_html__( 'Style15', 'bwdtl-timeline'),
					'style16' => esc_html__( 'Style16', 'bwdtl-timeline'),
					'style17' => esc_html__( 'Style17', 'bwdtl-timeline'),
					'style18' => esc_html__( 'Style18', 'bwdtl-timeline'),
					'style19' => esc_html__( 'Style19', 'bwdtl-timeline'),
					'style20' => esc_html__( 'Style20', 'bwdtl-timeline'),
					'style21' => esc_html__( 'Style21', 'bwdtl-timeline'),
					'style22' => esc_html__( 'Style22', 'bwdtl-timeline'),
					'style23' => esc_html__( 'Style23', 'bwdtl-timeline'),
					'style24' => esc_html__( 'Style24', 'bwdtl-timeline'),
				],
			]
		);
		$this->end_controls_section();
		//timeline content secton
		$this->start_controls_section(
			'bwdtl_TL_content_section',
			[
				'label' => esc_html__( 'Timeline', 'bwdtl-timeline' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		//style & content controls tabs
		$repeater->start_controls_tabs(
			'bwdtl_TL_style_n_content_tabs'
		);
		//content tab
		$repeater->start_controls_tab(
			'bwdtl_TL_content_tab',
			[
				'label' => esc_html__( 'CONTENT', 'bwdtl-timeline' ),
			]
		);
		// notice if img or icon exist
		$repeater->add_control(
			'bwdtl_TL_icon_img_exists_notice',
			[
				'label' => esc_html__( 'Note: Choose Image or Icon if these are exist in the design', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);
		// img
		$repeater->add_control(
			'bwdtl_TL_img',
			[
				'label' => esc_html__( 'Choose Image', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				]
			]
		);
		//icon 
		$repeater->add_control(
			'bwdtl_TL_icon',
			[
				'label' => esc_html__( 'Icon', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
		// date
		$repeater->add_control(
			'bwdtl_TL_date',
			[
				'label' => esc_html__( 'Date', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'picker_options' => [
					'enableTime' => false,
				],
				'default' => ('2011-jan-15'),
				
			]
		);
		//title
		$repeater->add_control(
			'bwdtl_TL_title',
			[
				'label' => esc_html__( 'Title', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Welcome here!', 'bwdtl-timeline' ),
			]
		);
		//description
		$repeater->add_control(
			'bwdtl_TL_desc',
			[
				'label' => esc_html__( 'Description', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 8,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis.', 'bwdtl-timeline' ),
			]
		);
		$repeater->end_controls_tab();
		//style tab=======================
		$repeater->start_controls_tab(
			'bwdtl_TL_style_tab',
			[
				'label' => esc_html__( 'STYLE', 'bwdtl-timeline' ),
			]
		);
		// content box style
		$repeater->add_control(
			'bwdtl_TL_content_box_style',
			[
				'label' => esc_html__( 'Content Box', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//content box bg color
		$repeater->add_control(
			'bwdtl_TL_content_box_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdtl-box,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-content-box' => 'background: {{VALUE}} !important;',
				],
			]
		);
		//content box border color
		$repeater->add_control(
			'bwdtl_TL_content_box_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-content-box,
					{{WRAPPER}} {{CURRENT_ITEM}}.bwdtl-box' => 'border-color: {{VALUE}} !important;',
				],
			]
		);
		//icon ============================
		$repeater->add_control(
			'bwdtl_TL_icon_styles',
			[
				'label' => esc_html__( 'Icon', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//icon color
		$repeater->add_control(
			'bwdtl_TL_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtl-icon' => 'color: {{VALUE}} !important;',
				],
			]
		);
		//icon bg color
		$repeater->add_control(
			'bwdtl_TL_icon_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtl-icon' => 'background: {{VALUE}} !important;',
				],
			]
		);
		//icon border color
		$repeater->add_control(
			'bwdtl_TL_icon_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtl-icon' => 'border-color: {{VALUE}} !important;',
				],
			]
		);
		//date========================
		$repeater->add_control(
			'bwdtl_TL_date_style',
			[
				'label' => esc_html__( 'Date', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//date typo
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'date_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-date',
			]
		);
		//date color
		$repeater->add_control(
			'bwdtl_TL_date_color',
			[
				'label' => esc_html__( 'Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-date' => 'color: {{VALUE}}',
				],
			]
		);
		//date bg color
		$repeater->add_control(
			'bwdtl_TL_date_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-date' => 'background: {{VALUE}} !important',
				],
			]
		);
		//date border color
		$repeater->add_control(
			'bwdtl_TL_date_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-date' => 'border-color: {{VALUE}} !important',
				],
			]
		);
		// title========================
		$repeater->add_control(
			'bwdtl_TL_title_style',
			[
				'label' => esc_html__( 'Title', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//title typo
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-title',
			]
		);
		//title alignment
		$repeater->add_responsive_control(
			'bwdtl_TL_title_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdtl-timeline' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdtl-timeline' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdtl-timeline' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-title' => 'text-align: {{UNIT}}',
				],
			]
		);
		//title color
		$repeater->add_control(
			'bwdtl_TL_title_color',
			[
				'label' => esc_html__( 'Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-title' => 'color: {{VALUE}}',
				],
			]
		);
		//title bg color
		$repeater->add_control(
			'bwdtl_TL_title_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-title' => 'background-color: {{VALUE}}',
				],
			]
		);
		// desc=========================
		$repeater->add_control(
			'bwdtl_TL_desc_style',
			[
				'label' => esc_html__( 'Description', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//desc typo
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'desc_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-desc',
			]
		);
		//desc alignment
		$repeater->add_responsive_control(
			'bwdtl_TL_desc_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdtl-timeline' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdtl-timeline' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdtl-timeline' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-desc' => 'text-align: {{UNIT}}',
				],
			]
		);
		//desc color
		$repeater->add_control(
			'bwdtl_TL_desc_color',
			[
				'label' => esc_html__( 'Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-timeline-desc' => 'color: {{VALUE}}',
				],
			]
		);
		//Tl shapes=========================
		$repeater->add_control(
			'bwdtl_TL_shapes_style',
			[
				'label' => esc_html__( 'Shapes Style', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// shape one 
		$repeater->add_control(
			'bwdtl_TL_shape_one_style',
			[
				'label' => esc_html__( 'Shape One', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//shape 1 border===============
		$repeater->add_control(
			'bwdtl_TL_shape_one_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-one-self,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-one::before,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-one::after,
					{{WRAPPER}} {{CURRENT_ITEM}}.bwdtl-closet-shape::after,
					{{WRAPPER}} {{CURRENT_ITEM}}.bwdtl-closet-shape::before' => 'border-color: {{VALUE}} !important;',
				],
			]
		);
		//shape 1 color
		$repeater->add_control(
			'bwdtl_TL_shape_one_color',
			[
				'label' => esc_html__( 'Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-one-self,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-one::before,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-one::after,
					{{WRAPPER}} {{CURRENT_ITEM}}.bwdtl-closet-shape::before,
					{{WRAPPER}} {{CURRENT_ITEM}}.bwdtl-closet-shape::after' => 'background: {{VALUE}} !important;',
				],
			]
		);
		//shape one 
		$repeater->add_control(
			'bwdtl_TL_shape_two_style',
			[
				'label' => esc_html__( 'Shape Two', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//shape 2 border===============
		$repeater->add_control(
			'bwdtl_TL_shape_two_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-two-self,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-two::before,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-two::after' => 'border-color: {{VALUE}} !important;',
				],
			]
		);
		$repeater->add_control(
			'bwdtl_TL_shape_two_color',
			[
				'label' => esc_html__( 'Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-two-self,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-two::before,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdtl-shape-two::after' => 'background-color: {{VALUE}} !important;',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		//fetch repeater
		$this->add_control(
			'bwdtl_timeline_content_box',
			[
				'label' => esc_html__( 'Repeater List', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdtl_TL_title' => esc_html__( 'Welcome here!', 'bwdtl-timeline' ),
						'bwdtl_TL_icon' => [
							'value' => 'fas fa-clock',
							'library' => 'solid',
						],
					],
					[
						'bwdtl_TL_title' => esc_html__( 'First Meetup!', 'bwdtl-timeline' ),
						'bwdtl_TL_icon' => [
							'value' => 'fas fa-home',
							'library' => 'solid',
						],
					],
					[
						'bwdtl_TL_title' => esc_html__( 'Be Productive!', 'bwdtl-timeline' ),
						'bwdtl_TL_icon' => [
							'value' => 'fas fa-lightbulb',
							'library' => 'solid',
						],
					],
					[
						'bwdtl_TL_title' => esc_html__( 'Be Happy!', 'bwdtl-timeline' ),
						'bwdtl_TL_icon' => [
							'value' => 'fas fa-search',
							'library' => 'solid',
						],
					]
				],
				'title_field' => '{{{ bwdtl_TL_title }}}',
			]
		);
		$this->end_controls_section();
		// timeline style tab
		$this->start_controls_section(
			'bwdtl_TL_styles',
			[
				'label' => esc_html__( 'Style', 'bwdtl-timeline' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// progressbar
		$this->add_control(
			'bwdtl_TL_progressbar',
			[
				'label' => esc_html__( 'Progress Bar', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//width
		$this->add_responsive_control(
			'bwdtl_TL_progressbar_width',
			[
				'label' => esc_html__( 'Width', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtl-pb-cmn,
					{{WRAPPER}} .bwdtl-pb-bg-cmn-pseudo::before,
					{{WRAPPER}} .bwdtl-pb-bg-cmn-pseudo::after,
					{{WRAPPER}} .bwdtl-pb-bg-cmn' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdtl_TL_choose_design!' => [ 'style10' ]
				]
			]
		);
		// border -radius
		$this->add_responsive_control(
			'bwdtl_TL_progressbar_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtl-pb-cmn,
					{{WRAPPER}} .bwdtl-pb-bg-cmn,
					{{WRAPPER}} .bwdtl-pb-cmn-pseudo::before,
					{{WRAPPER}} .bwdtl-pb-bg-cmn-pseudo::after,
					{{WRAPPER}} .bwdtl-pb-bg-cmn-pseudo::before' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//color 
		$this->add_control(
			'bwdtl_TL_progressbar_color',
			[
				'label' => esc_html__( 'Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtl-pb-cmn,
					{{WRAPPER}} .bwdtl-pb-cmn-pseudo::before' => 'background: {{VALUE}} !important;',
				],
				'condition' => [
					'bwdtl_TL_choose_design!' => [ 'style10' ]
				]
			]
		);
		//border color 
		$this->add_control(
			'bwdtl_TL_progressbar_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtl-pb-cmn,
					{{WRAPPER}} .bwdtl-pb-cmn-pseudo::before' => 'border-color: {{VALUE}} !important;',
				],
				'condition' => [
					'bwdtl_TL_choose_design!' => [ 'style1', 'style2','style3','style4','style5','style6','style7','style8','style9'],
				]
			]
		);
		//bg color 
		$this->add_control(
			'bwdtl_TL_progressbar_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtl-pb-bg-cm,
					{{WRAPPER}} .bwdtl-pb-bg-cmn-pseudo::before,
					{{WRAPPER}} .bwdtl-pb-bg-cmn-pseudo::after' => 'background: {{VALUE}} !important;',
				],
				'condition' => [
					'bwdtl_TL_choose_design!' => [ 'style1', 'style2','style3','style4','style5','style6','style10'],
				]
			]
		);
		//bg border color 
		$this->add_control(
			'bwdtl_TL_progressbar_bg_border_color',
			[
				'label' => esc_html__( 'BG Border Color', 'bwdtl-timeline' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtl-pb-bg-cmn,
					{{WRAPPER}} .bwdtl-pb-bg-cmn-pseudo::before,
					{{WRAPPER}} .bwdtl-pb-bg-cmn-pseudo::after' => 'border-color: {{VALUE}} !important;',
				],
				'condition' => [
					'bwdtl_TL_choose_design!' => [ 'style1','style2','style3','style4','style5','style7','style8','style9','style10'],
				]
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings();
		$TL_chosen_style = $settings['bwdtl_TL_choose_design'];
		$TL_content_box = $settings['bwdtl_timeline_content_box'];
		//element render function
		function elemRender($item,$val){
			if('bwdtl_TL_title' === $val){
				return '<div class="bwdtl-timeline-title"> ' . esc_html__( $item[$val]) . ' </div>';
			}else if('bwdtl_TL_desc' === $val){
				return '<p class="bwdtl-timeline-desc"> ' . esc_html__( $item[$val]) . ' </p>';
			}else if('bwdtl_TL_date' === $val){
				return '<div class="bwdtl-timeline-date bwdtl-shape-one"> ' . esc_html__( $item[$val]) . ' </div>';
			}else if('bwdtl_TL_img' === $val){
				return '<img src="' . esc_attr__( $item[$val]['url'] ) . '" alt="timeline img" />';
			}else if('id'){
				return 'elementor-repeater-item-' . esc_attr( $item['_id']); 
			}
		};

		//============== Timeline rendering start here ===============
		if('style1' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-two bwdtl-1 bwdtl-common bwdtl-scroll-show">
				<div class="bwdtl-progress-line bwdtl-pb-cmn"></div>
				<div class="bwdtl-timeline-item-container">
					<?php
				if($TL_content_box){
					foreach($TL_content_box as $item){
					?>
					<div class="bwdtl-box bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
						<div class="bwdtl-timeline-img">
							<?php 
								echo elemRender($item,'bwdtl_TL_img');
							?>
						</div>
						<div class="bwdtl-timeline-item-content bwdtl-content-box">
							<?php 
								echo elemRender($item,'bwdtl_TL_title');
								echo elemRender($item,'bwdtl_TL_desc');
							?>
						</div>
						<?php 
							echo elemRender($item,'bwdtl_TL_date');
						?>
					</div>
					<?php
					}
				}
					?>
				</div>
			</div>
				<?php
		}else if('style2' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-three bwdtl-2 bwdtl-common bwdtl-scroll-show">
			<div class="bwdtl-progress-line bwdtl-pb-cmn"></div>
			<div class="bwdtl-timeline-item-container">
				<?php
					if($TL_content_box){
						foreach($TL_content_box as $item){
					?>
					<div class="bwdtl-box bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
						<?php 
							echo elemRender($item,'bwdtl_TL_title');
						?>
						<a href="#" class="bwdtl-timeline-img">
							<?php 
								echo elemRender($item,'bwdtl_TL_img');
							?>
						</a>
						<div class="bwdtl-timeline-item-content">
							<?php 
								echo elemRender($item,'bwdtl_TL_desc');
							?>
						</div>
						<?php 
							echo elemRender($item,'bwdtl_TL_date');
						?>
					</div>
					<?php
						}
					}
				?>
			</div>
				<?php
		}else if('style3' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-four bwdtl-3 bwdtl-common bwdtl-scroll-show">
				<div class="bwdtl-progress-line bwdtl-pb-cmn"></div>
				<div class="bwdtl-timeline-item-container">
					<?php
						if($TL_content_box){
						foreach($TL_content_box as $item){
						?>
					<div class="bwdtl-box bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
						<?php 
							echo elemRender($item,'bwdtl_TL_title');
						?>
						<a href="#" class="bwdtl-timeline-img">
							<?php 
								echo elemRender($item,'bwdtl_TL_img');
							?>
						</a>
						<div class="bwdtl-timeline-item-content bwdtl-content-box">
							<?php 
								echo elemRender($item,'bwdtl_TL_desc');
							?>
						</div>
							<?php 
								echo elemRender($item,'bwdtl_TL_date');
							?>
					</div>
						<?php
						}
					}
				?>
				</div>
			</div>
				<?php
		}else if('style4' === $TL_chosen_style){
			?>
			<div class="bwdtl-timeline-five bwdtl-4 bwdtl-common bwdtl-scroll-show bwdtl-pb-cmn-pseudo">
				<div class="bwdtl-timeline-wrapper">
					<div class="bwdtl-timeline-item-container">

						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-item-bar-icon"></div>
								<div class="bwdtl-timeline-item-inner bwdtl-content-box">
									<div class="bwdtl-timeline-header bwdtl-shape-one">
									<?php 
										echo elemRender($item,'bwdtl_TL_title');
									?>
									</div>

									<div class="bwdtl-timeline-content">
									<?php 
										echo elemRender($item,'bwdtl_TL_desc');
									?>
									</div>
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
									?>
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
		}else if('style5' === $TL_chosen_style){
			?>
			<div class="bwdtl-timeline-six bwdtl-5 bwdtl-common bwdtl-scroll-show bwdtl-pb-cmn-pseudo">
				<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-content-box bwdtl-shape-one">
									<div class="bwdtl-timeline-header">
									<?php 
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_date');
									?>
									</div>
									<div class="bwdtl-timeline-content">
									<div class="bwdtl-timeline-img">
										<a href="#">
										<?php 
											echo elemRender($item,'bwdtl_TL_img');
										?>
										</a>
									</div>

									<?php 
										echo elemRender($item,'bwdtl_TL_desc');
									?>
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
		}else if('style6' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-eight bwdtl-6 bwdtl-common bwdtl-progress bwdtl-pb-bg-cmn-pseudo">
				<div class="bwdtl-progress-helper tl-pb-helper-common"></div>
				<div class="bwdtl-progress-line tl-pb-line-common bwdtl-pb-cmn"></div>
				<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>

							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-content-box">
									<div class="bwdtl-timeline-header">
									<?php 
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_date');
									?>
									</div>
									<div class="bwdtl-timeline-content">
									<?php 
										echo elemRender($item,'bwdtl_TL_desc');
									?>
									</div>
									<div class="bwdtl-bottom-circles">
										<div class="bwdtl-circle-left bwdtl-circle bwdtl-shape-one">
											<span class="bwdtl-circle-inner bwdtl-shape-two"></span>
										</div>
										<div class="bwdtl-circle-right bwdtl-circle bwdtl-shape-one">
											<span class="bwdtl-circle-inner bwdtl-shape-two"></span>
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
			<?php
		}else if('style7' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-nine bwdtl-7 bwdtl-common bwdtl-progress bwdtl-pb-bg-cmn-pseudo">
				<div class="bwdtl-progress-helper-nine tl-pb-helper-common"></div>
				<div class="bwdtl-progress-line tl-pb-line-common bwdtl-pb-cmn"></div>
				<div class="bwdtl-timeline-wrapper">
					<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-content-box bwdtl-shape-one">
									<div class="bwdtl-timeline-header">
									<?php 
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_date');
									?>
									</div>
									<div class="bwdtl-timeline-content">
									<?php 
										echo elemRender($item,'bwdtl_TL_desc');
									?>
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
		}else if('style8' === $TL_chosen_style){
			?>
			<div class="bwdtl-timeline-ten bwdtl-8 bwdtl-common bwdtl-progress bwdtl-pb-bg-cmn-pseudo">
				<div class="bwdtl-progress-helper-ten tl-pb-helper-common"></div>
				<div class="bwdtl-progress-line tl-pb-line-common bwdtl-pb-cmn"></div>
				<div class="bwdtl-timeline-wrapper">
					<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-content-box bwdtl-shape-one">
									<div class="bwdtl-timeline-content">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_desc');
									?>
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
		}else if('style9' === $TL_chosen_style){
			?>
				<div class="bwdtl-timeline-twelve bwdtl-9 bwdtl-common bwdtl-progress bwdtl-pb-bg-cmn-pseudo">
					<div class="bwdtl-progress-helper-twelve tl-pb-helper-common"></div>
					<div class="bwdtl-progress-line tl-pb-line-common bwdtl-pb-cmn"></div>
					<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-content-box bwdtl-shape-one">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
									?>
									<div class="bwdtl-timeline-content">
										<?php 
											echo elemRender($item,'bwdtl_TL_title');
											echo elemRender($item,'bwdtl_TL_desc');
										?>
									</div>
								</div>
							</div>
							<?php
							}
						}
					?>
					</div>
				</div>
			<?php
		}else if('style10' === $TL_chosen_style){
			?>
			<div class="bwdtl-timeline-sixteen bwdtl-10 bwdtl-common">
				<div class="bwdtl-timeline-wrapper">
					<div class="bwdtl-progress-line bwdtl-pb-cmn"></div>
					<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-shape-one">
								<div class="bwdtl-timeline-header bwdtl-shape-two bwdtl-content-box">
									<div class="bwdtl-timeline-icon">
										<i class="bwdtl-icon <?php echo $item['bwdtl_TL_icon']['value'];?>"></i>
									</div>

									<div class="bwdtl-timeline-time-wrapper">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
									?>
									</div>
								</div>

								<div class="bwdtl-timeline-content">
								<?php 
									echo elemRender($item,'bwdtl_TL_title');
									echo elemRender($item,'bwdtl_TL_desc');
								?>
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
		}else if('style11' === $TL_chosen_style){
			?>
			<div class="bwdtl-timeline-seventeen bwdtl-11 bwdtl-common">
				<div class="bwdtl-timeline-item-container">
					<div class="row">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<div class="bwdtl-box bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
									<div class="bwdtl-timeline-item-top-shape bwdtl-content-box">
										<?php 
											echo elemRender($item,'bwdtl_TL_date');
										?>
									</div>
									<div class="bwdtl-timeline-item-bottom-shape bwdtl-shape-one-self">
										<?php 
											echo elemRender($item,'bwdtl_TL_title');
											echo elemRender($item,'bwdtl_TL_desc');
										?>
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
		}else if('style12' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-Eighteen bwdtl-12 bwdtl-common">
				<div class="bwdtl-timeline-item-container">
					<div class="row">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="bwdtl-box bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<?php 
									echo elemRender($item,'bwdtl_TL_date');
								?>
								<div class="bwdtl-timeline-content">
								<?php 
									echo elemRender($item,'bwdtl_TL_title');
									echo elemRender($item,'bwdtl_TL_desc');
								?>
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
		}else if('style13' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-nineteen bwdtl-13 bwdtl-common">
				<div class="bwdtl-timeline-item-container">
					<div class="row">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="bwdtl-shape-two bwdtl-box bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-shape-one-self">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
									?>
									<div class="bwdtl-timeline-content">
									<?php 
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_desc');
									?>
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
		}else if('style14' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty bwdtl-14 bwdtl-common">
				<div class="bwdtl-timeline-item-container">
					<div class="row">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="bwdtl-closet-shape bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-shape-one-self">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
									?>
								</div>
								<div class="bwdtl-timeline-content bwdtl-content-box">
									<?php 
										echo elemRender($item,'bwdtl_TL_title');
									?>
									<div class="bwdtl-timeline-desc">
									<?php 
										echo elemRender($item,'bwdtl_TL_desc');
									?>
										<div class="bwdtl-timeline-item-bottom-bar bwdtl-shape-one-self">
											<div class="bwdtl-bottom-bar-inner"></div>
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
		}else if('style15' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty-one bwdtl-15 bwdtl-common">
				<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-content-box">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
									?>
									<div class="bwdtl-timeline-content">
										<?php 
											echo elemRender($item,'bwdtl_TL_title');
										?>
										<?php 
											echo elemRender($item,'bwdtl_TL_desc');
										?>
									</div>
								</div>
								<div class="bwdtl-right-top-shape bwdtl-shape-one-self"></div>
								<div class="bwdtl-right-bottom-shape bwdtl-shape-one-self"></div>
								<div class="bwdtl-left-top-shape bwdtl-shape-one-self"></div>
								<div class="bwdtl-left-bottom-shape bwdtl-shape-one-self"></div>
							</div>
							<?php
							}
						}
					?>
				</div>
			</div>
			<?php
		}else if('style16' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty-two bwdtl-16 bwdtl-common">
				<div class="bwdtl-timeline-item-container">
					<div class="row">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-content bwdtl-content-box">
									<?php 
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_desc');
									?>
								</div>
								<?php 
									echo elemRender($item,'bwdtl_TL_date');
								?>
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
		}else if('style17' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty-three bwdtl-17 bwdtl-common">
				<div class="bwdtl-timeline-item-container">
					<div class="row">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="bwdtl-closet-shape bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-content-box">
									<div class="bwdtl-timeline-item-content bwdtl-shape-two">
								<?php 
									echo elemRender($item,'bwdtl_TL_date');
									echo elemRender($item,'bwdtl_TL_title');
									echo elemRender($item,'bwdtl_TL_desc');
								?>
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
		}else if('style18' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty-four bwdtl-18 bwdtl-common">
				<div class="bwdtl-timeline-item-container">
					<div class="bwdtl-progress-line"></div>
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-closet-shape bwdtl-box bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<?php 
									echo elemRender($item,'bwdtl_TL_date');
								?>
								<div class="bwdtl-timeline-item-content">
								<?php 
									echo elemRender($item,'bwdtl_TL_title');
									echo elemRender($item,'bwdtl_TL_desc');
								?>
								</div>
							</div>
							<?php
							}
						}
					?>
				</div>
			</div>
			<?php
		}else if('style19' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty-five bwdtl-19 bwdtl-common bwdtl-scroll-show">
				<div class="bwdtl-progress-line"></div>
				<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
						<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
							<div class="bwdtl-progress-line-dot bwdtl-shape-one-self">
								<span class="bwdtl-progress-line-dot-inner bwdtl-shape-one-self"></span>
							</div>
							<div class="bwdtl-timeline-item-inner">
								<div class="bwdtl-timeline-item-content bwdtl-content-box">
								<?php 
									echo elemRender($item,'bwdtl_TL_date');
									echo elemRender($item,'bwdtl_TL_title');
									echo elemRender($item,'bwdtl_TL_desc');
								?>
								</div>
							</div>
						</div>
							<?php
							}
						}
					?>
				</div>
			</div>
			<?php
		}else if('style20' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty-six bwdtl-20 bwdtl-common bwdtl-progress bwdtl-pb-bg-cmn-pseudo">
				<div class="bwdtl-progress-helper-twenty-six tl-pb-helper-common"></div>
				<div class="bwdtl-progress-line tl-pb-line-common bwdtl-pb-cmn"></div>
				<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner">
									<div class="bwdtl-timeline-item-content bwdtl-shape-two bwdtl-content-box">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_desc');
									?>
									</div>
								</div>
							</div>
							<?php
							}
						}
					?>
				</div>
			</div>
			<?php
		}else if('style21' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty-seven TL bwdtl-21 bwdtl-common bwdtl-progress bwdtl-pb-bg-cmn-pseudo">
				<div class="bwdtl-progress-helper-twenty-seven tl-pb-helper-common"></div>
				<div class="bwdtl-progress-line tl-pb-line-common bwdtl-pb-cmn"></div>
				<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-shape-one">
									<div class="bwdtl-timeline-item-content bwdtl-content-box bwdtl-shape-one">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_desc');
									?>
									</div>
								</div>
							</div>
							<?php
							}
						}
					?>
				</div>
			</div>
			<?php
		}else if('style22' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty-eight bwdtl-22 bwdtl-common bwdtl-pb-bg-cmn-pseudo">
				<div class="bwdtl-progress-line"></div>
				<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-closet-shape bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
									?>
									<div class="bwdtl-timeline-item-content bwdtl-content-box">
									<?php 
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_desc');
									?>
									</div>
								</div>
							</div>
							<?php
							}
						}
					?>
				</div>
			</div>
			<?php
		}else if('style23' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-twenty-nine bwdtl-23 bwdtl-common bwdtl-progress bwdtl-pb-bg-cmn-pseudo">
				<div class="bwdtl-progress-helper-twenty-nine tl-pb-helper-common"></div>
				<div class="bwdtl-progress-line tl-pb-line-common bwdtl-pb-cmn"></div>
				<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
							<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
								<div class="bwdtl-timeline-item-inner bwdtl-content-box bwdtl-shape-one">
									<?php 
										echo elemRender($item,'bwdtl_TL_date');
									?>
									<div class="bwdtl-timeline-item-content bwdtl-shape-one">
									<?php 
										echo elemRender($item,'bwdtl_TL_title');
										echo elemRender($item,'bwdtl_TL_desc');
									?>
									</div>
								</div>
							</div>
							<?php
							}
						}
					?>
				</div>
			</div>
			<?php
		}else if('style24' === $TL_chosen_style){
				?>
			<div class="bwdtl-timeline-thirty TL bwdtl-24 bwdtl-common bwdtl-progress bwdtl-pb-bg-cmn-pseudo">
				<div class="bwdtl-progress-helper-thirty tl-pb-helper-common"></div>
				<div class="bwdtl-progress-line tl-pb-line-common bwdtl-pb-cmn"></div>
				<div class="bwdtl-timeline-item-container">
						<?php
							if($TL_content_box){
							foreach($TL_content_box as $item){
							?>
						<div class="bwdtl-timeline-item <?php echo elemRender($item,'id');?>">
							<div class="bwdtl-timeline-item-inner">
								<div class="bwdtl-timeline-header">
								<?php 
									echo elemRender($item,'bwdtl_TL_date');
									echo elemRender($item,'bwdtl_TL_title');
								?>
								</div>
								<div class="bwdtl-timeline-item-content">
								<?php 
									echo elemRender($item,'bwdtl_TL_desc');
								?>
								</div>
							</div>
						</div>
							<?php
							}
						}
					?>
				</div>
			</div>
			<?php
		}
	}
}

?>

