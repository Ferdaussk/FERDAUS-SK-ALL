<?php
namespace BWDBPCBlogPost\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDBPCBlogPost extends Widget_Base {

	public function get_name() {
		return esc_html__('blog_post', 'bwdbpc-blog-post' );
	}

	public function get_title() {
		return esc_html__( 'BWD Blog Post', 'bwdbpc-blog-post' );
	}

	public function get_icon() {
		return 'bwdbpc-blog-post eicon-logo';
	}
	
	public function get_categories() {
		return [ 'bwdbpc-blog-post-category' ];
	}

	public function get_keywords() {
		return [ 'logo ', 'logo carousel','bwd-logo-carousel'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdbpc_blog_post_basic_settings',
			[
				'label' => esc_html__( 'Logo Carousel', 'bwdbpc-blog-post' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbpc_blog_post_style_selection',
			[
				'label' => esc_html__( 'Slider Designs', 'bwdbpc-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'Style 1', 'bwdbpc-blog-post' ),
					'2' => esc_html__( 'Style 2', 'bwdbpc-blog-post' ),
					'3' => esc_html__( 'Style 3', 'bwdbpc-blog-post' ),
					'4' => esc_html__( 'Style 4', 'bwdbpc-blog-post' ),
					'5' => esc_html__( 'Style 5', 'bwdbpc-blog-post' ),
					'6' => esc_html__( 'Style 6', 'bwdbpc-blog-post' ),
					'7' => esc_html__( 'Style 7', 'bwdbpc-blog-post' ),
					'8' => esc_html__( 'Style 8', 'bwdbpc-blog-post' ),
					'15' => esc_html__( 'Style 9', 'bwdbpc-blog-post' ),
					'18' => esc_html__( 'Style 10', 'bwdbpc-blog-post' ),
				],
			]
		);

		$this->add_control(
			'bwdbpc_blog_post_per_view_device',
			[
				'label' => esc_html__( 'Responsive Devices', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdbpc-blog-post' ),
				'label_on' => esc_html__( 'Custom', 'bwdbpc-blog-post' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();
		//desktop device
		$this->add_control(
			'bwdbpc_blog_post_per_view_desktop',
			[
				'label' => esc_html__( 'Desktop', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 20,
				'step' => 1,
				'default' => 3,
			]
		);

		//Tablet device
		$this->add_control(
			'bwdbpc_blog_post_per_view_tablet',
			[
				'label' => esc_html__( 'Tablet', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 15,
				'step' => 1,
				'default' => 2,
			]
		);

		//mobile device
		$this->add_control(
			'bwdbpc_blog_post_per_view_mobile',
			[
				'label' => esc_html__( 'Mobile', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10,
				'step' => 1,
				'default' => 1,
			]
		);

		$this->end_popover();

		//repeater (slide items)
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdbpc_blog_post_logo',
			[
				'label' => esc_html__( 'Choose Logo', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugins_url('../assets/public/img/logo1.png', __FILE__),
				],
			]
		);
		$repeater->add_control(
			'bwdbpc_blog_post_logo_url',
			[
				'label' => esc_html__( 'Brand Url', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => false,
				],
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		//repeater fetch
		$this->add_control(
			'bwdbpc_blog_post_list',
			[
				'label' => esc_html__( 'Logo', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdbpc_blog_post_logo'=>[
							'url' => plugins_url('../assets/public/img/logo1.png', __FILE__),
						],
						'bwdbpc_blog_post_logo_url' =>[
							'url' => 'https://codecanyon.net/user/bestwpdeveloper/portfolio',
						]

					],					
					[
						'bwdbpc_blog_post_logo'=>[
							'url' => plugins_url('../assets/public/img/logo2.png', __FILE__),
						],
						'bwdbpc_blog_post_logo_url' =>[
							'url' => 'https://codecanyon.net/user/bestwpdeveloper/portfolio',
						]
					],					
					[
						'bwdbpc_blog_post_logo'=>[
							'url' => plugins_url('../assets/public/img/logo3.png', __FILE__)
						],
						'bwdbpc_blog_post_logo_url' =>[
							'url' => 'https://codecanyon.net/user/bestwpdeveloper/portfolio',
						]
					],					
					[
						'bwdbpc_blog_post_logo'=>[
							'url' => plugins_url('../assets/public/img/logo4.png', __FILE__)
						],
						'bwdbpc_blog_post_logo_url' =>[
							'url' => 'https://codecanyon.net/user/bestwpdeveloper/portfolio',
						]
					],
				],
				'separator'=> 'before',
			]
		);

		$this->end_controls_section();

		// setting section start
		$this->start_controls_section(
			'bwdbpc_blog_post_settings_section',
			[
				'label' => esc_html__( 'Settings', 'bwdbpc-blog-post' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//arrow navigation 
		$this->add_control(
			'bwdbpc_blog_post_arrow_nav',
			[
				'label' => esc_html__( 'Arrow Navigation?', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdbpc-blog-post' ),
				'label_off' => esc_html__( 'No', 'bwdbpc-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//arrow type
		$this->add_control(
			'bwdbpc_blog_post_arrow_type',
			[
				'label' => esc_html__( 'Arrow Type', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icon'  => esc_html__( 'Icon', 'bwdbpc-blog-post' ),
					'text'  => esc_html__( 'Text', 'bwdbpc-blog-post' ),
				],
				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				],
			]
		);
		//prev icon
		$this->add_control(
			'bwdbpc_blog_post_arrow_prev',
			[
				'label' => esc_html__( 'Previous Icon', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-chevron-left',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdbpc_blog_post_arrow_type' => 'icon',
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				],
			]
		);
		//next icon
		$this->add_control(
			'bwdbpc_blog_post_arrow_next',
			[
				'label' => esc_html__( 'Next Icon', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-chevron-right',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdbpc_blog_post_arrow_type' => 'icon',
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				],
			]
		);
		//arrow prev text
		$this->add_control(
			'bwdbpc_blog_post_arrow_prev_text',
			[
				'label' => esc_html__( 'Previous Text', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Prev', 'bwdbpc-blog-post' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdbpc_blog_post_arrow_type' => 'text',
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				],
			]
		);
		//arrow next text 
		$this->add_control(
			'bwdbpc_blog_post_arrow_next_text',
			[
				'label' => esc_html__( 'Next Text', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Next', 'bwdbpc-blog-post' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdbpc_blog_post_arrow_type' => 'text',
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				],
			]
		);
		//pagination type
		$this->add_control(
			'bwdbpc_blog_post_pagination_type',
			[
				'label' => esc_html__( 'Pagination Type', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none'  => esc_html__( 'None', 'bwdbpc-blog-post' ),
					'dots'  => esc_html__( 'Dots', 'bwdbpc-blog-post' ),
					'numbers'  => esc_html__( 'Numbers', 'bwdbpc-blog-post' ),
				],
				'separator'=>'before'
			]
		);

		//autoplay 
		$this->add_control(
			'bwdbpc_blog_post_autoplay',
			[
				'label' => esc_html__( 'Autoplay', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdbpc-blog-post' ),
				'label_off' => esc_html__( 'No', 'bwdbpc-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//autoplay timeout
		$this->add_control(
			'bwdbpc_blog_post_autoplay_timeout',
			[
				'label' => esc_html__( 'Autoplay Timeout (ms)', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 15000,
				'step' => 5,
				'default' => 2000,
				'condition' => [
					'bwdbpc_blog_post_autoplay' => 'yes'
				],
			]
		);
		//autoplay hover pause
		$this->add_control(
			'bwdbpc_blog_post_autoplay_hover_pause',
			[
				'label' => esc_html__( 'Autoplay Hover Pause', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdbpc-blog-post' ),
				'label_off' => esc_html__( 'No', 'bwdbpc-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdbpc_blog_post_autoplay' => 'yes'
				],
			]
		);
		//infinite loop
		$this->add_control(
			'bwdbpc_blog_post_infinite_loop',
			[
				'label' => esc_html__( 'Infinite Loop', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdbpc-blog-post' ),
				'label_off' => esc_html__( 'No', 'bwdbpc-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdbpc_blog_post_autoplay' => 'yes'
				],
			]
		);
		//slide speed
		$this->add_control(
			'bwdbpc_blog_post_slide_speed',
			[
				'label' => esc_html__( 'Slide Speed (ms)', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 5000,
				'step' => 5,
				'default' => 500,
			]
		);
		//center mode
		$this->add_control(
			'bwdbpc_blog_post_center_mode',
			[
				'label' => esc_html__( 'Center Mode', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdbpc-blog-post' ),
				'label_off' => esc_html__( 'No', 'bwdbpc-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdbpc_logo_animation_active' => 'yes',
				],
			]
		);
		//stage pading
		$this->add_control(
			'bwdbpc_blog_post_stage_padding',
			[
				'label' => esc_html__( 'Stage Padding', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 500,
				'step' => 1,
				'default'=>0
			]
		);
		$this->end_controls_section();

		// carousel logo styles section start
		$this->start_controls_section(
			'bwdbpc_blog_post_logo_items_styles_section',
			[
				'label' => esc_html__( 'Logo Carousel', 'bwdbpc-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				],
			]
		);
		// carousel logo margin
		$this->add_responsive_control(
			'bwdbpc_blog_post_logo_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .blog-post-active .bwdbpc-brand-box-part' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//carousel logo gap
		$this->add_responsive_control(
			'bwdbpc_blog_post_logo_gap',
			[
				'label' => esc_html__( 'Item Gap (px)', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					]
				],
				'default' => [
					'unit' => 'px',
					'size' => 15,
				]
			]
		);
		// carousel logo padding
		$this->add_responsive_control(
			'bwdbpc_blog_post_logo_padding',
			[
				'label' => esc_html__( 'padding', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .blog-post-active .bwdbpc-brand-box-part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//carousel height
		$this->add_control(
			'bwdbpc_blog_post_logo_height',
			[
				'label' => esc_html__( 'Height (px)', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .blog-post-active .bwdbpc-brand-box-part' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// carousel logo border radius
		$this->add_responsive_control(
			'bwdbpc_blog_post_logo_item_padding',
			[
				'label' => esc_html__( 'Border Radius', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .blog-post-active .bwdbpc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// carousel logo bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Background', 'bwdbpc-blog-post' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .blog-post-active .bwdbpc-brand-box-part',
				'exclude' =>['image'],
			]
		);
		//carousel logo border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwdbpc-blog-post' ),
				'selector' => '{{WRAPPER}} .blog-post-active .bwdbpc-brand-box-part',
			]
		);

		//carousel logo box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdbpc-blog-post' ),
				'selector' => '{{WRAPPER}} .blog-post-active .bwdbpc-brand-box-part',
			]
		);


		$this->end_controls_section();
		//navigation style section start
		$this->start_controls_section(
			'bwdbpc_blog_post_navigation_arrow_section',
			[
				'label' => esc_html__( 'Navigation-Arrow', 'bwdbpc-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				],
			]
		);

		$this->start_controls_tabs(
			'navigation_style_tabs'
		);
		// navigation style normal tab
		$this->start_controls_tab(
			'navigation_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blog-post' ),
			]
		);
		//navigation position
		$this->add_control(
			'bwdbpc_blog_post_navigation_arrow_position',
			[
				'label' => esc_html__( 'Position', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				],
			
			]
		);
		//nav Y position
        $this->add_responsive_control(
            'bwdbpc_blog_post_arrow_position_y',
            [
                'label' => __('Vertical (px)', 'bwdbpc-blog-post'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],

                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 1000,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                ],
                'selectors' => [
                    ' {{WRAPPER}} .blog-post-active .owl-nav button.owl-prev,
					{{WRAPPER}} .blog-post-active .owl-nav button.owl-next' => 'top: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				]
            ]
        );
		//nav x position
        $this->add_responsive_control(
            'bwdbpc_blog_post_arrow_position_x',
            [
                'label' => __('Horizontal (px)', 'bwdbpc-blog-post'),
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
					'{{WRAPPER}} .blog-post-active .owl-nav button.owl-next,
					{{WRAPPER}} .blog-post-active .owl-nav button.owl-prev' => 'left: {{SIZE}}{{UNIT}};
																			right: {{SIZE}}{{UNIT}};',
                ],
				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				],
				'separator' => 'after',
            ]
        );
		// navigation font size
		$this->add_responsive_control(
            'bwdbpc_blog_post_arrow_size',
            [
                'label' => __('Font-Size', 'bwdbpc-blog-post'),
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
                    ' {{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon' => 'font-size: {{SIZE}}{{UNIT}};'
                ],

				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				]
            ]
        );
		// navigation box size
		$this->add_responsive_control(
            'bwdbpc_blog_post_arrow_box_size',
            [
                'label' => __('Arrow Box Size', 'bwdbpc-blog-post'),
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
                    ' {{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon' => 'height: {{SIZE}}{{UNIT}};width: {{SIZE}}{{UNIT}};'
                ],

				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				]
            ]
        );
		//navigation color
		$this->add_control(
			'bwdbpc_blog_post_arrow_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon' => 'color: {{VALUE}}',
				],

			]
		);
		//navigation background color
		$this->add_control(
			'bwdbpc_blog_post_arrow_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon' => 'background-color: {{VALUE}}',
				],
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_post_arrow_border',
				'label' => esc_html__( 'Border', 'bwdbpc-blog-post' ),
				'selector' => '{{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon',
			]
		);
		//border radius
		$this->add_responsive_control(
            'bwdbpc_blog_post_arrow_border_radius',
            [
                'label' => __('Border Radius', 'bwdbpc-blog-post'),
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
                    '{{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				]
            ]
        );

		$this->end_controls_tab();

		// navigation style hover tab
		$this->start_controls_tab(
			'navigation_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blog-post' ),
			]
		);
		// navigation font size
		$this->add_responsive_control(
            'bwdbpc_blog_post_hover_arrow_size',
            [
                'label' => __('Font-Size', 'bwdbpc-blog-post'),
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
                    ' {{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon:hover' => 'font-size: {{SIZE}}{{UNIT}};'
                ],

				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				]
            ]
        );

		//navigation color
		$this->add_control(
			'bwdbpc_blog_post_arrow_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon:hover' => 'color: {{VALUE}}',
				],

			]
		);
		//navigation background color
		$this->add_control(
			'bwdbpc_blog_post_arrow_hover_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_post_arrow_hover_border',
				'label' => esc_html__( 'Border', 'bwdbpc-blog-post' ),
				'selector' => '{{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon:hover',
			]
		);
		//border radius
		$this->add_responsive_control(
            'bwdbpc_blog_post_arrow_border_hover_radius',
            [
                'label' => __('Border Radius', 'bwdbpc-blog-post'),
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
                    '{{WRAPPER}} .blog-post-active .owl-nav button .bwdbpc-arrow-icon:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_arrow_nav' => 'yes',
				]
            ]
        );
		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

		//pagination dots styles
		$this->start_controls_section(
			'bwdbpc_blog_post_pagination_dots_section',
			[
				'label' => esc_html__( 'Pagination-Dots', 'bwdbpc-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_blog_post_pagination_type!' => 'none',
				],
			]
		);

		$this->start_controls_tabs(
			'bwdbpc_blog_post_pagination_dots_tabs'
		);
		// pagination normal tab
		$this->start_controls_tab(
			'bwdbpc_blog_post_pagination_dots_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blog-post' ),
			]
		);
		// pagination align
		$this->add_responsive_control(
			'bwdbpc_blog_post_pagination_dots_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'0;transform:translateX(0);' => [
						'title' => esc_html__( 'Left', 'bwdbpc-blog-post' ),
						'icon' => 'eicon-text-align-left',
					],
					'50%;' => [
						'title' => esc_html__( 'Center', 'bwdbpc-blog-post' ),
						'icon' => 'eicon-text-align-center',
					],
					'100%;transform:translateX(-100%);' => [
						'title' => esc_html__( 'Right', 'bwdbpc-blog-post' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
                    '{{WRAPPER}} .blog-post-active .owl-dots' => 'left: {{VALUE}};',
                ],
			]
		);

		//nav Y position
        $this->add_responsive_control(
            'bwdbpc_blog_post_dots_position_y',
            [
                'label' => __('Vertical Position (px)', 'bwdbpc-blog-post'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],

                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 1000,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .blog-post-active.activeDots .owl-dots' => 'top: {{SIZE}}{{UNIT}};bottom: auto;',
                ],

				'condition' => [
					'bwdbpc_blog_post_pagination_type!' => 'none',
				]
            ]
        );
		//nav dots gap position
        $this->add_responsive_control(
            'bwdbpc_blog_post_dots_gap',
            [
                'label' => __('Spacing (px)', 'bwdbpc-blog-post'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ]
                ],
                'selectors' => [
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots' => 'gap: {{SIZE}}{{UNIT}};',
                ],
				'condition' => [
					'bwdbpc_blog_post_pagination_type!' => 'none',
				],
            ]
        );
		//pagination font size
		$this->add_responsive_control(
            'bwdbpc_blog_post_dots_size',
            [
                'label' => __('Size', 'bwdbpc-blog-post'),
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
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot span' => 'font-size: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination dot size
		$this->add_responsive_control(
            'bwdbpc_blog_post_dots_dot_size',
            [
                'label' => __('Dot Size', 'bwdbpc-blog-post'),
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
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot span' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination border radius
		$this->add_responsive_control(
            'bwdbpc_blog_post_dots_border_radius',
            [
                'label' => __('Border Radius', 'bwdbpc-blog-post'),
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
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot span' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination color
		$this->add_control(
			'bwdbpc_blog_post_dots_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
			]
		);

		//pagination bg color
		$this->add_control(
			'bwdbpc_blog_post_dots_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot span' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		// pagination hover tab
		$this->start_controls_tab(
			'bwdbpc_blog_post_pagination_dots_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blog-post' ),
			]
		);
		//nav dots gap position
        $this->add_responsive_control(
            'bwdbpc_blog_post_dots_hover_gap',
            [
                'label' => __('Spacing (px)', 'bwdbpc-blog-post'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ]
                ],
                'selectors' => [
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots:hover' => 'gap: {{SIZE}}{{UNIT}};',
                ],
				'condition' => [
					'bwdbpc_blog_post_pagination_type!' => 'none',
				],
            ]
        );
		//pagination font size
		$this->add_responsive_control(
            'bwdbpc_blog_post_dots_hover_font_size',
            [
                'label' => __('Size', 'bwdbpc-blog-post'),
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
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot span:hover' => 'font-size: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination dot size
		$this->add_responsive_control(
            'bwdbpc_blog_post_dots_hover_size',
            [
                'label' => __('Dot Size', 'bwdbpc-blog-post'),
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
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot span:hover' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination color
		$this->add_control(
			'bwdbpc_blog_post_dots_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot span:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
			]
		);
		//pagination bg color
		$this->add_control(
			'bwdbpc_blog_post_dots_hover_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot span:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		// pagination active tab
		$this->start_controls_tab(
			'bwdbpc_blog_post_pagination_dots_active_tab',
			[
				'label' => esc_html__( 'Active', 'bwdbpc-blog-post' ),
			]
		);


		//pagination font size
		$this->add_responsive_control(
            'bwdbpc_blog_post_dots_active_font_size',
            [
                'label' => __('Size', 'bwdbpc-blog-post'),
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
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot.active span' => 'font-size: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination dot size
		$this->add_responsive_control(
            'bwdbpc_blog_post_dots_active_size',
            [
                'label' => __('Dot Size', 'bwdbpc-blog-post'),
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
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot.active span' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination color
		$this->add_control(
			'bwdbpc_blog_post_dots_active_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_blog_post_pagination_type' => 'numbers',
				]
			]
		);
		//pagination bg color
		$this->add_control(
			'bwdbpc_blog_post_dots_active_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdbpc-blog-post' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-active.activeDots .owl-dots button.owl-dot.active span' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdbpc_blog_post_style_selection'];
		$logo_repeater = $settings['bwdbpc_blog_post_list'];
		$slide_item_desktop = $settings['bwdbpc_blog_post_per_view_desktop'];
		$slide_item_tablet = $settings['bwdbpc_blog_post_per_view_tablet'];
		$slide_item_mobile = $settings['bwdbpc_blog_post_per_view_mobile'];

		$slide_speed = $settings['bwdbpc_blog_post_slide_speed'];
		$ap = $settings['bwdbpc_blog_post_autoplay'];
		$arrow_nav = $settings['bwdbpc_blog_post_arrow_nav'];
		$arrow_nav_type = $settings['bwdbpc_blog_post_arrow_type'];
		$pagination_type = $settings['bwdbpc_blog_post_pagination_type'];
		$center_mode = $settings['bwdbpc_blog_post_center_mode'];
		$stagePadding = $settings['bwdbpc_blog_post_stage_padding'];
		$margin = $settings['bwdbpc_blog_post_logo_gap']['size'];



		if('yes' === $ap){
			$ap_timeout = $settings['bwdbpc_blog_post_autoplay_timeout'];
			$ap_hover_pause = $settings['bwdbpc_blog_post_autoplay_hover_pause'];
			$infinite_loop = $settings['bwdbpc_blog_post_infinite_loop'];	
		}
		//if arrow nav will active
		if('yes' === $arrow_nav){
			if('icon' === $arrow_nav_type){
				$prev = $settings['bwdbpc_blog_post_arrow_prev']['value'];
				$next = $settings['bwdbpc_blog_post_arrow_next']['value'];
			}else if('text' === $arrow_nav_type){
				$prev = $settings['bwdbpc_blog_post_arrow_prev_text'];
				$next = $settings['bwdbpc_blog_post_arrow_next_text'];
			}
		}

			?>
			<div class="bwdbpc-blog-post-<?php echo esc_attr($chosen_style ); echo esc_attr(' ' . $animate_type );?>">
				<div class="blog-post-active owl-carousel d-flex" 
				data-desktop="<?php echo esc_attr($slide_item_desktop);?>"
				data-tablet="<?php echo esc_attr($slide_item_tablet);?>"
				data-mobile="<?php echo esc_attr($slide_item_mobile);?>"
				data-slide-speed="<?php echo esc_attr($slide_speed);?>"
				data-center = "<?php echo esc_attr($center_mode);?>"
				data-padding = "<?php echo esc_attr($stagePadding);?>"
				data-margin = "<?php echo esc_attr($margin);?>"
				data-nav-type="<?php if(!empty($arrow_nav_type)){
					echo esc_attr($arrow_nav_type);
				}?>"
				data-prev="<?php if(!empty($prev)){
					echo esc_attr($prev);
				}?>"
				data-next="<?php if(!empty($next)){
					echo esc_attr($next);
				}?>"
				data-pagination="<?php if(!empty($pagination_type)){echo esc_attr($pagination_type);}?>"
				<?php 
					if($ap === 'yes'){
						?>
						data-autoplay="<?php echo esc_attr($ap);?>"
						data-autoplay-timeout="<?php echo esc_attr($ap_timeout);?>"
						data-hover-pause="<?php echo esc_attr($ap_hover_pause);?>"
						data-infinite-loop="<?php echo esc_attr($infinite_loop);?>"
						<?php
					}
				 ?>>
					<?php
						if( $logo_repeater){
							foreach ($logo_repeater as $logo) {
								?>
								<div class="bwdbpc-brand-box-part">
									<div class="bwdbpc-logo-img">
										<a href="<?php echo esc_url($logo['bwdbpc_blog_post_logo_url']['url'] )?>" data-toggle="tooltip" data-placement="top" title="Brand logo">
											<img src="<?php echo esc_url($logo['bwdbpc_blog_post_logo']['url'] );?>" alt="">
										</a>
									</div>
								</div>
								<?php 
							}
						}
					?>	
				</div>
			</div>	
			<?php 

		// }

	}
}

