<?php
namespace BWDSDSlider\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDSDSliderWidget extends Widget_Base  {

	public function get_name() {
		return esc_html__( 'BWDSlider', 'bwdsd-slider' );
	}

	public function get_title() {
		return esc_html__( 'BWD Slider', 'elementor' );
	}

	public function get_icon() {
		return 'bwdsd-slider eicon-post-slider';
	}

	public function get_categories() {
		return [ 'bwdsd-slider-category' ];
	}

	public function get_keywords() {
		return [ 'slider', 'bwdSlider', 'bwd' ];
	}
	
	public function get_script_depends() {
		return [ 'bwdsd-slider-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdsd_slider_basic_settings',
			[
				'label' => esc_html__( 'Sliders', 'bwdsd-slider' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdsd_slider_style_selection',
			[
				'label' => esc_html__( 'Slider Designs', 'bwdsd-slider' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwdsd-slider' ),
					'style2' => esc_html__( 'Style 2', 'bwdsd-slider' ),
					'style3' => esc_html__( 'Style 3', 'bwdsd-slider' ),
					'style4' => esc_html__( 'Style 4', 'bwdsd-slider' ),
					'style5' => esc_html__( 'Style 5', 'bwdsd-slider' ),
				],
			]
		);
		//slider per view
		$this->add_responsive_control(
			'bwdsd_slider_per_view',
			[
				'label' => esc_html__( 'Slide Per View', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 50,
				'step' => 1,
				'default' => 2,
				'dynamic' => [
					'active' => true,
				],
				'{{WRAPPER}} .responsive-test' => 'margin-bottom: {{SIZE}}{{UNIT}};',
			]
		);
		//slider per view hidden 
		$this->add_control(
			'bwdsd_slider_per_view_hidden',
			[
				'label' => esc_html__( 'View', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::HIDDEN,
				'default' => 'bwdsd_slider_per_view_hidden',
			]
		);
		//repeater (slide items)
		$repeater = new \Elementor\Repeater();
		$repeater->start_controls_tabs(
			'bwdsd_slider_slides_tabs'
		);
		// content tab
		$repeater->start_controls_tab(
			'bwdsd_slider_content_tab',
			[
				'label' => esc_html__( 'Content', 'bwdsd-slider' ),
			]
		);
		//title
		$repeater->add_control(
			'bwdsd_slider_item_title',
			[
				'label' => esc_html__( 'Title', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'slider Title One', 'bwdsd-slider' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//description
		$repeater->add_control(
			'bwdsd_slider_item_desc',
			[
				'label' => esc_html__( 'Description', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 8,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
				molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
				numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium ', 'bwdsd-slider' )
			]
		);
		$repeater->end_controls_tab();
		// style tab
		$repeater->start_controls_tab(
			'bwdsd_slider_style_tab',
			[
				'label' => esc_html__( 'Style', 'bwdsd-slider' ),
			]
		);
		// title style
		$repeater->add_control(
			'bwdsd_slider_title_style',
			[
				'label' => esc_html__( 'Title', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'label_block'=>true
			]
		);
		// title typo
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsd_slider_title_typo',
				'selector' => '{{WRAPPER}} .your-class',
			]
		);
		//title color
		$repeater->add_control(
			'bwdsd_slider_title_color',
			[
				'label' => esc_html__( 'Color', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->end_controls_tab();
		// description style
		$repeater->add_control(
			'bwdsd_slider_desc_style',
			[
				'label' => esc_html__( 'Description', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// desc typo
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsd_slider_desc_typo',
				'selector' => '{{WRAPPER}} .your-class',
			]
		);
		//desc color
		$repeater->add_control(
			'bwdsd_slider_desc_color',
			[
				'label' => esc_html__( 'Color', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		//repeater fetch
		$this->add_control(
			'bwdsd_slider_list',
			[
				'label' => esc_html__( 'Slides', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdsd_slider_item_title' => esc_html__( 'Slider Title One', 'bwdsd-slider' ),
						'bwdsd_slider_item_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
						molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
						numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium', 'bwdsd-slider' ),
					],
					[
						'bwdsd_slider_item_title' => esc_html__( 'Slider Title Two', 'bwdsd-slider' ),
						'bwdsd_slider_item_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
						molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
						numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium', 'bwdsd-slider' )
					],
				],
				'title_field' => '{{{ bwdsd_slider_item_title }}}',
			]
		);
		$this->end_controls_section();
		// setting section start
		$this->start_controls_section(
			'bwdsd_slider_settings_section',
			[
				'label' => esc_html__( 'Settings', 'bwdsd-slider' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//arrow navigation 
		$this->add_control(
			'bwdsd_slider_arrow_nav',
			[
				'label' => esc_html__( 'Arrow Navigation?', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdsd-slider' ),
				'label_off' => esc_html__( 'No', 'bwdsd-slider' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//arrow type
		$this->add_control(
			'bwdsd_slider_arrow_type',
			[
				'label' => esc_html__( 'Arrow Type', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icon'  => esc_html__( 'Icon', 'bwdsd-slider' ),
					'text'  => esc_html__( 'Text', 'bwdsd-slider' ),
				],
				'condition' => [
					'bwdsd_slider_arrow_nav' => 'yes',
				],
			]
		);
		//prev icon
		$this->add_control(
			'bwdsd_slider_arrow_prev',
			[
				'label' => esc_html__( 'Previous Icon', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'far fa-chevron-left',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdsd_slider_arrow_type' => 'icon',
					'bwdsd_slider_arrow_nav' => 'yes',
				],
			]
		);
		//next icon
		$this->add_control(
			'bwdsd_slider_arrow_next',
			[
				'label' => esc_html__( 'Next Icon', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'far fa-chevron-right',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdsd_slider_arrow_type' => 'icon',
					'bwdsd_slider_arrow_nav' => 'yes',
				],
			]
		);
		//arrow prev text
		$this->add_control(
			'bwdsd_slider_arrow_prev_text',
			[
				'label' => esc_html__( 'Previous Text', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Prev', 'bwdsd-slider' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdsd_slider_arrow_type' => 'text',
					'bwdsd_slider_arrow_nav' => 'yes',
				],
			]
		);
		//arrow next text 
		$this->add_control(
			'bwdsd_slider_arrow_next_text',
			[
				'label' => esc_html__( 'Next Text', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Next', 'bwdsd-slider' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdsd_slider_arrow_type' => 'text',
					'bwdsd_slider_arrow_nav' => 'yes',
				],
			]
		);
		//pagination type
		$this->add_control(
			'bwdsd_slider_pagination_type',
			[
				'label' => esc_html__( 'Pagination Type', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none'  => esc_html__( 'None', 'bwdsd-slider' ),
					'dots'  => esc_html__( 'Dots', 'bwdsd-slider' ),
					'numbers'  => esc_html__( 'Numbers', 'bwdsd-slider' ),
					'progressbar'  => esc_html__( 'Progress Bar', 'bwdsd-slider' ),
				],
				'separator'=>'before'
			]
		);
		//pagination number type
		$this->add_control(
			'bwdsd_slider_pagination_number_type',
			[
				'label' => esc_html__( 'Pagination Number Type', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'bullets',
				'options' => [
					'bullets'  => esc_html__( 'Bullets', 'bwdsd-slider' ),
					'fraction'  => esc_html__( 'Fraction', 'bwdsd-slider' ),
				],
				'condition' => [
					'bwdsd_slider_pagination_type' => 'numbers',
				]
			]
		);
		//slide by (direction)
		$this->add_control(
			'bwdsd_slider_slide_by',
			[
				'label' => esc_html__( 'Slide Direction', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'right',
				'options' => [
					'right'  => esc_html__( 'Left to Right', 'bwdsd-slider' ),
					'left'  => esc_html__( 'Right to Left', 'bwdsd-slider' ),
				],
				'separator'=>'before'
			]
		);
		//autoplay 
		$this->add_control(
			'bwdsd_slider_autoplay',
			[
				'label' => esc_html__( 'Autoplay', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdsd-slider' ),
				'label_off' => esc_html__( 'No', 'bwdsd-slider' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//autoplay timeout
		$this->add_control(
			'bwdsd_slider_autoplay_timeout',
			[
				'label' => esc_html__( 'Autoplay Timeout (ms)', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 15000,
				'step' => 5,
				'default' => 2000,
				'condition' => [
					'bwdsd_slider_autoplay' => 'yes'
				],
			]
		);
		//autoplay hover pause
		$this->add_control(
			'bwdsd_slider_autoplay_hover_pause',
			[
				'label' => esc_html__( 'Autoplay Hover Pause', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdsd-slider' ),
				'label_off' => esc_html__( 'No', 'bwdsd-slider' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdsd_slider_autoplay' => 'yes'
				],
			]
		);
		//infinite loop
		$this->add_control(
			'bwdsd_slider_infinite_loop',
			[
				'label' => esc_html__( 'Infinite Loop', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdsd-slider' ),
				'label_off' => esc_html__( 'No', 'bwdsd-slider' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdsd_slider_autoplay' => 'yes'
				],
			]
		);
		//slide speed
		$this->add_control(
			'bwdsd_slider_slide_speed',
			[
				'label' => esc_html__( 'Slide Speed (ms)', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 5000,
				'step' => 5,
				'default' => 500,
			]
		);
		$this->end_controls_section();
		//navigation style section start
		$this->start_controls_section(
			'bwdsd_slider_navigation_arrow_section',
			[
				'label' => esc_html__( 'Navigation-Arrow', 'bwdsd-slider' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdsd_slider_arrow_nav' => 'yes',
				],
			]
		);
		//navigation position
		$this->add_control(
			'bwdsd_slider_navigation_arrow_position',
			[
				'label' => esc_html__( 'Position', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'condition' => [
					'bwdsd_slider_arrow_nav' => 'yes',
				],
			
			]
		);
		//nav Y position
        $this->add_responsive_control(
            'bwdsd_slider_arrow_position_y',
            [
                'label' => __('Vertical (px)', 'bwdsd-slider'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px','%'],

                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 1000,
                    ],
					'%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                ],
                'selectors' => [
                    ' {{WRAPPER}} .bwdsd-slides .owl-nav button.owl-prev,
					{{WRAPPER}} .bwdsd-slides .owl-nav button.owl-next' => 'top: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdsd_slider_arrow_nav' => 'yes',
				]
            ]
        );
		//nav x position
        $this->add_responsive_control(
            'bwdsd_slider_arrow_position_x',
            [
                'label' => __('Horizontal (px)', 'bwdsd-slider'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px','%'],
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 1200,
                    ],
					'%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
					'{{WRAPPER}} .bwdsd-slides .owl-nav button.owl-next,
					{{WRAPPER}} .bwdsd-slides .owl-nav button.owl-prev' => 'left: {{SIZE}}{{UNIT}};
																			right: {{SIZE}}{{UNIT}};',
                ],
				'condition' => [
					'bwdsd_slider_arrow_nav' => 'yes',
				],
				'separator' => 'after',
            ]
        );
		// navigation font size
		$this->add_responsive_control(
            'bwdsd_slider_arrow_size',
            [
                'label' => __('Font-Size', 'bwdsd-slider'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px','em','rem'],

                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 150,
                    ],
					'em' => [
                        'min' => 0,
                        'max' => 100,
                    ],
					'rem' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                ],
                'selectors' => [
                    ' {{WRAPPER}} .bwdsd-slides .owl-nav button .bwdsd-arrow-icon' => 'font-size: {{SIZE}}{{UNIT}};'
                ],

				'condition' => [
					'bwdsd_slider_arrow_nav' => 'yes',
				]
            ]
        );
		//navigation color
		$this->add_control(
			'bwdsd_slider_arrow_color',
			[
				'label' => esc_html__( 'Color', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsd-slides .owl-nav button .bwdsd-arrow-icon' => 'color: {{VALUE}}',
				],

			]
		);
		//navigation background color
		$this->add_control(
			'bwdsd_slider_arrow_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsd-slides .owl-nav button .bwdsd-arrow-icon' => 'background-color: {{VALUE}}',
				],
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsd_slider_arrow_border',
				'label' => esc_html__( 'Border', 'bwdsd-slider' ),
				'selector' => '{{WRAPPER}} .bwdsd-slides .owl-nav button .bwdsd-arrow-icon',
			]
		);
		//border radius
		$this->add_responsive_control(
            'bwdsd_slider_arrow_border_radius',
            [
                'label' => __('Border Radius', 'bwdsd-slider'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px','%'],

                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                    ],
					'%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsd-slides .owl-nav button .bwdsd-arrow-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdsd_slider_arrow_nav' => 'yes',
				]
            ]
        );
		//navigation background color
		$this->add_control(
			'bwdsd_slider_arrow_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsd-slides .owl-nav button .bwdsd-arrow-icon' => 'background-color: {{VALUE}}',
				],
			]
		);
		//paddding
		$this->add_control(
			'bwdsd_slider_arrow_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsd-slides .owl-nav button .bwdsd-arrow-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		//pagination dots styles
		$this->start_controls_section(
			'bwdsd_slider_pagination_dots_section',
			[
				'label' => esc_html__( 'Pagination-Dots', 'bwdsd-slider' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdsd_slider_pagination_type!' => 'none',
				],
			]
		);
		//pagination position
		$this->add_control(
			'bwdsd_slider_pagination_dots_position',
			[
				'label' => esc_html__( 'Position', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'condition' => [
					'bwdsd_slider_pagination_type!' => 'none',
				],
			
			]
		);
		//nav Y position
        $this->add_responsive_control(
            'bwdsd_slider_dots_position_y',
            [
                'label' => __('Vertical (px)', 'bwdsd-slider'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px','%'],

                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 1000,
                    ],
					'%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsd-slides.activeDots .owl-dots' => 'top: {{SIZE}}{{UNIT}};bottom: auto;',
                ],

				'condition' => [
					'bwdsd_slider_pagination_type!' => 'none',
				]
            ]
        );
		//nav dots gap position
        $this->add_responsive_control(
            'bwdsd_slider_dots_gap',
            [
                'label' => __('Spacing (px)', 'bwdsd-slider'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ]
                ],
                'selectors' => [
					'{{WRAPPER}} .bwdsd-slides.activeDots .owl-dots' => 'gap: {{SIZE}}{{UNIT}};',
                ],
				'condition' => [
					'bwdsd_slider_pagination_type!' => 'none',
				],
            ]
        );
		//pagination font size
		$this->add_responsive_control(
            'bwdsd_slider_dots_size',
            [
                'label' => __('Size', 'bwdsd-slider'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px','em','rem'],

                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
					'em' => [
                        'min' => 0,
                        'max' => 100,
                    ],
					'rem' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                ],
                'selectors' => [
					'{{WRAPPER}} .bwdsd-slides.activeDots .owl-dots button.owl-dot span' => 'font-size: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdsd_slider_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination dot size
		$this->add_responsive_control(
            'bwdsd_slider_dots_dot_size',
            [
                'label' => __('Dot Size', 'bwdsd-slider'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px','em','rem'],

                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
					'em' => [
                        'min' => 0,
                        'max' => 100,
                    ],
					'rem' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                ],
                'selectors' => [
					'{{WRAPPER}} .bwdsd-slides.activeDots .owl-dots button.owl-dot span' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdsd_slider_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination border radius
		$this->add_responsive_control(
            'bwdsd_slider_dots_border_radius',
            [
                'label' => __('Border Radius', 'bwdsd-slider'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px','%'],

                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
					'%' => [
                        'min' => 0,
                        'max' => 100,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                ],
                'selectors' => [
					'{{WRAPPER}} .bwdsd-slides.activeDots .owl-dots button.owl-dot span' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdsd_slider_pagination_type' => 'numbers',
				]
            ]
        );

		// $this->start_controls_tabs(
		// 	'style_tabs'
		// );

		// $this->start_controls_tab(
		// 	'style_normal_tab',
		// 	[
		// 		'label' => esc_html__( 'Normal', 'bwdsd-slider' ),
		// 	]
		// );

		// $this->add_control();
		// $this->end_controls_tab();

		// $this->start_controls_tab(
		// 	'style_hover_tab',
		// 	[
		// 		'label' => esc_html__( 'Hover', 'bwdsd-slider' ),
		// 	]
		// );

		// $this->add_control();



		// $this->end_controls_tab();

		// $this->end_controls_tabs();
		//pagination color
		$this->add_control(
			'bwdsd_slider_dots_color',
			[
				'label' => esc_html__( 'Color', 'bwdsd-slider' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsd-slides .owl-nav button .bwdsd-arrow-icon' => 'color: {{VALUE}}',
				],

			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdsd_slider_style_selection'];
		$slide_item = $settings['bwdsd_slider_per_view'];
		$slide_speed = $settings['bwdsd_slider_slide_speed'];
		$slide_by = $settings['bwdsd_slider_slide_by'];
		$ap = $settings['bwdsd_slider_autoplay'];
		$arrow_nav = $settings['bwdsd_slider_arrow_nav'];
		$arrow_nav_type = $settings['bwdsd_slider_arrow_type'];
		$pagination_type = $settings['bwdsd_slider_pagination_type'];
		if('yes' === $ap){
			$ap_timeout = $settings['bwdsd_slider_autoplay_timeout'];
			$ap_hover_pause = $settings['bwdsd_slider_autoplay_hover_pause'];
			$infinite_loop = $settings['bwdsd_slider_infinite_loop'];	
		}
		//if arrow nav will active
		if('yes' === $arrow_nav){
			if('icon' === $arrow_nav_type){
				$prev = $settings['bwdsd_slider_arrow_prev']['value'];
				$next = $settings['bwdsd_slider_arrow_next']['value'];
			}else if('text' === $arrow_nav_type){
				$prev = $settings['bwdsd_slider_arrow_prev_text'];
				$next = $settings['bwdsd_slider_arrow_next_text'];
			}
		}

		//if pagination will active
 		if( 'numbers' === $pagination_type){
			$pagination = $settings['bwdsd_slider_pagination_number_type'];
		} else {
			$pagination = $pagination_type;
		}


		//slider render
		if('style1' === $chosen_style){
		?>
			<div class="bwdsd-slides owl-carousel responsive-test"
				data-slide-item="<?php echo esc_attr($slide_item);?>"
				data-slide-speed="<?php echo esc_attr($slide_speed);?>"
				data-slide-by="<?php echo esc_attr($slide_by);?>"
				data-nav-type="<?php if(!empty($arrow_nav_type)){
					echo esc_attr($arrow_nav_type);
				}?>"
				data-prev="<?php if(!empty($prev)){
					echo esc_attr($prev);
				}?>"
				data-next="<?php if(!empty($next)){
					echo esc_attr($next);
				}?>"
				data-pagination="<?php if(!empty($pagination)){echo esc_attr($pagination);}?>"
				
				<?php 
					if($ap === 'yes'){
						?>
						data-autoplay="<?php echo esc_attr($ap);?>"
						data-autoplay-timeout="<?php echo esc_attr($ap_timeout);?>"
						data-hover-pause="<?php echo esc_attr($ap_hover_pause);?>"
						data-infinite-loop="<?php echo esc_attr($infinite_loop);?>"
						<?php
					}
				 ?>
				>
				<div class="bwdsd-single-slide"> 
					<h2>Slide Item one</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vitae cumque at doloribus totam consequuntur provident quas voluptates fugiat, qui porro, perspiciatis fuga corporis beatae!</p>
				</div>
				<div class="bwdsd-single-slide"> 
					<h2>Slide Item two</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vitae cumque at doloribus totam consequuntur provident quas voluptates fugiat, qui porro, perspiciatis fuga corporis beatae!</p>
				</div>
				<div class="bwdsd-single-slide"> 
					<h2>Slide Item three</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vitae cumque at doloribus totam consequuntur provident quas voluptates fugiat, qui porro, perspiciatis fuga corporis beatae!</p>
				</div>
				<div class="bwdsd-single-slide"> 
					<h2>Slide Item three</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vitae cumque at doloribus totam consequuntur provident quas voluptates fugiat, qui porro, perspiciatis fuga corporis beatae!</p>
				</div>
			</div>
		<?php
		}
	}
}
