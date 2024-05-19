<?php
namespace BwdBrandLogo\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDLCLogoCarousel extends Widget_Base {

	public function get_name() {
		return esc_html__('Logo_Carousel', 'bwdlc-brand-logo' );
	}

	public function get_title() {
		return esc_html__( 'BWD Logo Carousel', 'bwdlc-brand-logo' );
	}

	public function get_icon() {
		return 'bwdlc-brand-logo eicon-logo';
	}
	
	public function get_categories() {
		return [ 'bwdlc-brand-logo-category' ];
	}

	public function get_keywords() {
		return [ 'logo ', 'logo carousel','bwd-logo-carousel', 'brand-logo'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdlc_logo_carousel_basic_settings',
			[
				'label' => esc_html__( 'Logo Carousel', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdlc_logo_carousel_style_selection',
			[
				'label' => esc_html__( 'Slider Designs', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'Style 1', 'bwdlc-brand-logo' ),
					'2' => esc_html__( 'Style 2', 'bwdlc-brand-logo' ),
					'3' => esc_html__( 'Style 3', 'bwdlc-brand-logo' ),
					'4' => esc_html__( 'Style 4', 'bwdlc-brand-logo' ),
					'5' => esc_html__( 'Style 5', 'bwdlc-brand-logo' ),
					'6' => esc_html__( 'Style 6', 'bwdlc-brand-logo' ),
					'7' => esc_html__( 'Style 7', 'bwdlc-brand-logo' ),
					'8' => esc_html__( 'Style 8', 'bwdlc-brand-logo' ),
					'15' => esc_html__( 'Style 9', 'bwdlc-brand-logo' ),
					'18' => esc_html__( 'Style 10', 'bwdlc-brand-logo' ),
				],
			]
		);
		// animation active
		$this->add_control(
			'bwdlc_logo_animation_active',
			[
				'label' => esc_html__( 'Active Animation ?', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdlc-brand-logo' ),
				'label_off' => esc_html__( 'No', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);


		$this->add_control(
			'bwdlc_logo_carousel_animation_style',
			[
				'label' => esc_html__( 'Animation Style', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'fadeIn',
				'options' => [
					'fadeIn'  => esc_html__( 'Fade In', 'bwdlc-brand-logo' ),
					'fadeInDown' => esc_html__( 'Fade In Down', 'bwdlc-brand-logo' ),
					'fadeInUp' => esc_html__( 'Fade In Up', 'bwdlc-brand-logo' ),
					'fadeOut' => esc_html__( 'Fade Out', 'bwdlc-brand-logo' ),
					'fadeOutDown' => esc_html__( 'Fade Out Down', 'bwdlc-brand-logo' ),
					'flip' => esc_html__( 'Flip', 'bwdlc-brand-logo' ),
					'flipInX' => esc_html__( 'Flip In X', 'bwdlc-brand-logo' ),
					'flipOutX' => esc_html__( 'Flip Out X', 'bwdlc-brand-logo' ),
					'flipOutY' => esc_html__( 'Flip Out Y', 'bwdlc-brand-logo' ),
					'rotateIn' => esc_html__( 'Rotate In', 'bwdlc-brand-logo' ),
					'rotateInUpRight' => esc_html__( 'Rotate InUp Right', 'bwdlc-brand-logo' ),
					'rotateOut' => esc_html__( 'Rotate Out', 'bwdlc-brand-logo' ),
					'zoomIn' => esc_html__( 'Zoom In', 'bwdlc-brand-logo' ),
					'zoomInDown' => esc_html__( 'Zoom In Down', 'bwdlc-brand-logo' ),
					'zoomInRight' => esc_html__( 'Zoom In Right', 'bwdlc-brand-logo' ),
				],
				'condition' => [
					'bwdlc_logo_animation_active' => 'yes',
				],
			]
		);
		// grid tooltip enable
		$this->add_control(
			'bwdlc_logo_carousel_tooltip_enable',
			[
				'label' => __( 'Show Tooltip', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'bwdlc-brand-logo' ),
				'label_off' => __( 'Hide', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'bwdlc_logo_carousel_per_view_device',
			[
				'label' => esc_html__( 'Columns', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdlc-brand-logo' ),
				'label_on' => esc_html__( 'Custom', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',

			]
		);
		
		$this->start_popover();
		//desktop device
		$this->add_control(
			'bwdlc_logo_carousel_per_view_desktop',
			[
				'label' => esc_html__( 'Desktop', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 20,
				'step' => 1,
				'default' => 3,
			]
		);

		//Tablet device
		$this->add_control(
			'bwdlc_logo_carousel_per_view_tablet',
			[
				'label' => esc_html__( 'Tablet', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 15,
				'step' => 1,
				'default' => 2,
			]
		);

		//mobile device
		$this->add_control(
			'bwdlc_logo_carousel_per_view_mobile',
			[
				'label' => esc_html__( 'Mobile', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10,
				'step' => 1,
				'default' => 1,
			]
		);

		$this->end_popover();
		$this->add_control(
			'bwdlc_logo_carousel_important_note',
			[
				'label' => esc_html__( 'Important Note', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => esc_html__( 'Repeater items should be more than column count for arrow navigation.', 'bwdlc-brand-logo' ),
				'content_classes' => 'bwdlc_logo_carousel_notice',
			]
		);
		//repeater (slide items)
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdlc_logo_carousel_logo',
			[
				'label' => esc_html__( 'Choose Logo', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugins_url('../assets/public/img/logo1.png', __FILE__),
				],
			]
		);
		$repeater->add_control(
			'bwdlc_logo_carousel_brand_name',
			[
				'label' => esc_html__( 'Brand Name', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Envato', 'bwdlc-brand-logo' ),
			]
		);

		$repeater->add_control(
			'bwdlc_logo_carousel_logo_url',
			[
				'label' => esc_html__( 'Brand Url', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);



		// logo height
		$repeater->add_responsive_control(
			'bwdlc_carousel_logo_height',
			[
				'label' => esc_html__( 'Logo Size', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdlc-brand-box-part .bwdlc-logo-img a img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);	

		//repeater fetch
		$this->add_control(
			'bwdlc_logo_carousel_list',
			[
				'label' => esc_html__( 'Logo', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/1a.webp', __FILE__),
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Company Name','bwdlc-brand-logo' ),
					],					
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/2a.webp', __FILE__),
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Company Name','bwdlc-brand-logo' ),
					],					
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/3a.webp', __FILE__)
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Company Name','bwdlc-brand-logo' ),
					],					
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/4a.webp', __FILE__)
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Company Name','bwdlc-brand-logo' ),
					],
				],
				'separator'=> 'before',
				'title_field' => '{{{ bwdlc_logo_carousel_brand_name }}}',
			]
		);

		$this->end_controls_section();

		// setting section start
		$this->start_controls_section(
			'bwdlc_logo_carousel_settings_section',
			[
				'label' => esc_html__( 'Settings', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//arrow navigation 
		$this->add_control(
			'bwdlc_logo_carousel_arrow_nav',
			[
				'label' => esc_html__( 'Arrow Navigation?', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdlc-brand-logo' ),
				'label_off' => esc_html__( 'No', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//arrow type
		$this->add_control(
			'bwdlc_logo_carousel_arrow_type',
			[
				'label' => esc_html__( 'Arrow Type', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icon'  => esc_html__( 'Icon', 'bwdlc-brand-logo' ),
					'text'  => esc_html__( 'Text', 'bwdlc-brand-logo' ),
				],
				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				],
			]
		);
		//prev icon
		$this->add_control(
			'bwdlc_logo_carousel_arrow_prev',
			[
				'label' => esc_html__( 'Previous Icon', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-chevron-left',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdlc_logo_carousel_arrow_type' => 'icon',
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				],
			]
		);
		//next icon
		$this->add_control(
			'bwdlc_logo_carousel_arrow_next',
			[
				'label' => esc_html__( 'Next Icon', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-chevron-right',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdlc_logo_carousel_arrow_type' => 'icon',
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				],
			]
		);
		//arrow prev text
		$this->add_control(
			'bwdlc_logo_carousel_arrow_prev_text',
			[
				'label' => esc_html__( 'Previous Text', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Prev', 'bwdlc-brand-logo' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdlc_logo_carousel_arrow_type' => 'text',
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				],
			]
		);
		//arrow next text 
		$this->add_control(
			'bwdlc_logo_carousel_arrow_next_text',
			[
				'label' => esc_html__( 'Next Text', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Next', 'bwdlc-brand-logo' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdlc_logo_carousel_arrow_type' => 'text',
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				],
			]
		);
		//pagination type
		$this->add_control(
			'bwdlc_logo_carousel_pagination_type',
			[
				'label' => esc_html__( 'Pagination Type', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none'  => esc_html__( 'None', 'bwdlc-brand-logo' ),
					'dots'  => esc_html__( 'Dots', 'bwdlc-brand-logo' ),
					'numbers'  => esc_html__( 'Numbers', 'bwdlc-brand-logo' ),
				],
				'separator'=>'before'
			]
		);

		//autoplay 
		$this->add_control(
			'bwdlc_logo_carousel_autoplay',
			[
				'label' => esc_html__( 'Autoplay', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdlc-brand-logo' ),
				'label_off' => esc_html__( 'No', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//autoplay timeout
		$this->add_control(
			'bwdlc_logo_carousel_autoplay_timeout',
			[
				'label' => esc_html__( 'Autoplay Timeout (ms)', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 15000,
				'step' => 5,
				'default' => 2000,
				'condition' => [
					'bwdlc_logo_carousel_autoplay' => 'yes'
				],
			]
		);
		//autoplay hover pause
		$this->add_control(
			'bwdlc_logo_carousel_autoplay_hover_pause',
			[
				'label' => esc_html__( 'Autoplay Hover Pause', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdlc-brand-logo' ),
				'label_off' => esc_html__( 'No', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdlc_logo_carousel_autoplay' => 'yes'
				],
			]
		);
		//infinite loop
		$this->add_control(
			'bwdlc_logo_carousel_infinite_loop',
			[
				'label' => esc_html__( 'Infinite Loop', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdlc-brand-logo' ),
				'label_off' => esc_html__( 'No', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdlc_logo_carousel_autoplay' => 'yes'
				],
			]
		);
		//slide speed
		$this->add_control(
			'bwdlc_logo_carousel_slide_speed',
			[
				'label' => esc_html__( 'Slide Speed (ms)', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 5000,
				'step' => 5,
				'default' => 500,
			]
		);
		//center mode
		$this->add_control(
			'bwdlc_logo_carousel_center_mode',
			[
				'label' => esc_html__( 'Center Mode', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdlc-brand-logo' ),
				'label_off' => esc_html__( 'No', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdlc_logo_animation_active' => 'yes',
				],
			]
		);
		//stage pading
		$this->add_control(
			'bwdlc_logo_carousel_stage_padding',
			[
				'label' => esc_html__( 'Stage Padding', 'bwdlc-brand-logo' ),
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
			'bwdlc_logo_carousel_logo_items_styles_section',
			[
				'label' => esc_html__( 'Logo Carousel', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				],
			]
		);

		// carousel logo margin
		$this->add_responsive_control(
			'bwdlc_logo_carousel_logo_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active .bwdlc-brand-box-part' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		// carousel logo padding
		$this->add_responsive_control(
			'bwdlc_logo_carousel_logo_padding',
			[
				'label' => esc_html__( 'padding', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active .bwdlc-brand-box-part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//carousel height
		$this->add_control(
			'bwdlc_logo_carousel_logo_height',
			[
				'label' => esc_html__( 'Height (px)', 'bwdlc-brand-logo' ),
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
					'{{WRAPPER}} .brand-logo-active .bwdlc-brand-box-part' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// carousel logo border radius
		$this->add_responsive_control(
			'bwdlc_logo_carousel_logo_item_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active .bwdlc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// carousel logo bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_bg',
				'label' => esc_html__( 'Background', 'bwdlc-brand-logo' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .brand-logo-active .bwdlc-brand-box-part',
				'exclude' =>['image'],
			]
		);
		//carousel logo border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_border',
				'label' => esc_html__( 'Border', 'bwdlc-brand-logo' ),
				'selector' => '{{WRAPPER}} .brand-logo-active .bwdlc-brand-box-part',
			]
		);

		//carousel logo box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdlc-brand-logo' ),
				'selector' => '{{WRAPPER}} .brand-logo-active .bwdlc-brand-box-part',
			]
		);


		$this->end_controls_section();
		//navigation style section start
		$this->start_controls_section(
			'bwdlc_logo_carousel_navigation_arrow_section',
			[
				'label' => esc_html__( 'Navigation-Arrow', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
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
				'label' => esc_html__( 'Normal', 'bwdlc-brand-logo' ),
			]
		);
		//navigation position
		$this->add_control(
			'bwdlc_logo_carousel_navigation_arrow_position',
			[
				'label' => esc_html__( 'Position', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				],
			
			]
		);
		//nav Y position
        $this->add_responsive_control(
            'bwdlc_logo_carousel_arrow_position_y',
            [
                'label' => __('Vertical (px)', 'bwdlc-brand-logo'),
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
                    ' {{WRAPPER}} .brand-logo-active .owl-nav button.owl-prev,
					{{WRAPPER}} .brand-logo-active .owl-nav button.owl-next' => 'top: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				]
            ]
        );
		//nav x position
        $this->add_responsive_control(
            'bwdlc_logo_carousel_arrow_position_x',
            [
                'label' => __('Horizontal (px)', 'bwdlc-brand-logo'),
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
					'{{WRAPPER}} .brand-logo-active .owl-nav button.owl-next,
					{{WRAPPER}} .brand-logo-active .owl-nav button.owl-prev' => 'left: {{SIZE}}{{UNIT}};
																			right: {{SIZE}}{{UNIT}};',
                ],
				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				],
				'separator' => 'after',
            ]
        );
		// navigation font size
		$this->add_responsive_control(
            'bwdlc_logo_carousel_arrow_size',
            [
                'label' => __('Font-Size', 'bwdlc-brand-logo'),
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
                    ' {{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon' => 'font-size: {{SIZE}}{{UNIT}};'
                ],

				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				]
            ]
        );
		// navigation box size
		$this->add_responsive_control(
            'bwdlc_logo_carousel_arrow_box_size',
            [
                'label' => __('Arrow Box Size', 'bwdlc-brand-logo'),
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
                    ' {{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon' => 'height: {{SIZE}}{{UNIT}};width: {{SIZE}}{{UNIT}};'
                ],

				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				]
            ]
        );
		//navigation color
		$this->add_control(
			'bwdlc_logo_carousel_arrow_color',
			[
				'label' => esc_html__( 'Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon' => 'color: {{VALUE}}',
				],

			]
		);
		//navigation background color
		$this->add_control(
			'bwdlc_logo_carousel_arrow_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon' => 'background-color: {{VALUE}}',
				],
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_arrow_border',
				'label' => esc_html__( 'Border', 'bwdlc-brand-logo' ),
				'selector' => '{{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon',
			]
		);
		//border radius
		$this->add_responsive_control(
            'bwdlc_logo_carousel_arrow_border_radius',
            [
                'label' => __('Border Radius', 'bwdlc-brand-logo'),
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
                    '{{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				]
            ]
        );

		$this->end_controls_tab();

		// navigation style hover tab
		$this->start_controls_tab(
			'navigation_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdlc-brand-logo' ),
			]
		);
		// navigation font size
		$this->add_responsive_control(
            'bwdlc_logo_carousel_hover_arrow_size',
            [
                'label' => __('Font-Size', 'bwdlc-brand-logo'),
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
                    ' {{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon:hover' => 'font-size: {{SIZE}}{{UNIT}};'
                ],

				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				]
            ]
        );

		//navigation color
		$this->add_control(
			'bwdlc_logo_carousel_arrow_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon:hover' => 'color: {{VALUE}}',
				],

			]
		);
		//navigation background color
		$this->add_control(
			'bwdlc_logo_carousel_arrow_hover_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_arrow_hover_border',
				'label' => esc_html__( 'Border', 'bwdlc-brand-logo' ),
				'selector' => '{{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon:hover',
			]
		);
		//border radius
		$this->add_responsive_control(
            'bwdlc_logo_carousel_arrow_border_hover_radius',
            [
                'label' => __('Border Radius', 'bwdlc-brand-logo'),
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
                    '{{WRAPPER}} .brand-logo-active .owl-nav button .bwdlc-arrow-icon:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_arrow_nav' => 'yes',
				]
            ]
        );
		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

		//pagination dots styles
		$this->start_controls_section(
			'bwdlc_logo_carousel_pagination_dots_section',
			[
				'label' => esc_html__( 'Pagination-Dots', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdlc_logo_carousel_pagination_type!' => 'none',
				],
			]
		);

		$this->start_controls_tabs(
			'bwdlc_logo_carousel_pagination_dots_tabs'
		);
		// pagination normal tab
		$this->start_controls_tab(
			'bwdlc_logo_carousel_pagination_dots_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdlc-brand-logo' ),
			]
		);
		// pagination align
		$this->add_responsive_control(
			'bwdlc_logo_carousel_pagination_dots_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'0;transform:translateX(0);' => [
						'title' => esc_html__( 'Left', 'bwdlc-brand-logo' ),
						'icon' => 'eicon-text-align-left',
					],
					'50%;' => [
						'title' => esc_html__( 'Center', 'bwdlc-brand-logo' ),
						'icon' => 'eicon-text-align-center',
					],
					'100%;transform:translateX(-100%);' => [
						'title' => esc_html__( 'Right', 'bwdlc-brand-logo' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
                    '{{WRAPPER}} .brand-logo-active .owl-dots' => 'left: {{VALUE}};',
                ],
			]
		);

		//nav Y position
        $this->add_responsive_control(
            'bwdlc_logo_carousel_dots_position_y',
            [
                'label' => __('Vertical Position (px)', 'bwdlc-brand-logo'),
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
                    '{{WRAPPER}} .brand-logo-active.activeDots .owl-dots' => 'top: {{SIZE}}{{UNIT}};bottom: auto;',
                ],

				'condition' => [
					'bwdlc_logo_carousel_pagination_type!' => 'none',
				]
            ]
        );
		//nav dots gap position
        $this->add_responsive_control(
            'bwdlc_logo_carousel_dots_gap',
            [
                'label' => __('Spacing (px)', 'bwdlc-brand-logo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ]
                ],
                'selectors' => [
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots' => 'gap: {{SIZE}}{{UNIT}};',
                ],
				'condition' => [
					'bwdlc_logo_carousel_pagination_type!' => 'none',
				],
            ]
        );
		//pagination font size
		$this->add_responsive_control(
            'bwdlc_logo_carousel_dots_size',
            [
                'label' => __('Size', 'bwdlc-brand-logo'),
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
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot span' => 'font-size: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination dot size
		$this->add_responsive_control(
            'bwdlc_logo_carousel_dots_dot_size',
            [
                'label' => __('Dot Size', 'bwdlc-brand-logo'),
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
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot span' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination border radius
		$this->add_responsive_control(
            'bwdlc_logo_carousel_dots_border_radius',
            [
                'label' => __('Border Radius', 'bwdlc-brand-logo'),
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
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot span' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination color
		$this->add_control(
			'bwdlc_logo_carousel_dots_color',
			[
				'label' => esc_html__( 'Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
			]
		);

		//pagination bg color
		$this->add_control(
			'bwdlc_logo_carousel_dots_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot span' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		// pagination hover tab
		$this->start_controls_tab(
			'bwdlc_logo_carousel_pagination_dots_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdlc-brand-logo' ),
			]
		);
		//nav dots gap position
        $this->add_responsive_control(
            'bwdlc_logo_carousel_dots_hover_gap',
            [
                'label' => __('Spacing (px)', 'bwdlc-brand-logo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ]
                ],
                'selectors' => [
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots:hover' => 'gap: {{SIZE}}{{UNIT}};',
                ],
				'condition' => [
					'bwdlc_logo_carousel_pagination_type!' => 'none',
				],
            ]
        );
		//pagination font size
		$this->add_responsive_control(
            'bwdlc_logo_carousel_dots_hover_font_size',
            [
                'label' => __('Size', 'bwdlc-brand-logo'),
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
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot span:hover' => 'font-size: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination dot size
		$this->add_responsive_control(
            'bwdlc_logo_carousel_dots_hover_size',
            [
                'label' => __('Dot Size', 'bwdlc-brand-logo'),
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
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot span:hover' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination color
		$this->add_control(
			'bwdlc_logo_carousel_dots_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot span:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
			]
		);
		//pagination bg color
		$this->add_control(
			'bwdlc_logo_carousel_dots_hover_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot span:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		// pagination active tab
		$this->start_controls_tab(
			'bwdlc_logo_carousel_pagination_dots_active_tab',
			[
				'label' => esc_html__( 'Active', 'bwdlc-brand-logo' ),
			]
		);


		//pagination font size
		$this->add_responsive_control(
            'bwdlc_logo_carousel_dots_active_font_size',
            [
                'label' => __('Size', 'bwdlc-brand-logo'),
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
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot.active span' => 'font-size: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination dot size
		$this->add_responsive_control(
            'bwdlc_logo_carousel_dots_active_size',
            [
                'label' => __('Dot Size', 'bwdlc-brand-logo'),
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
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot.active span' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],

				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
            ]
        );
		//pagination color
		$this->add_control(
			'bwdlc_logo_carousel_dots_active_color',
			[
				'label' => esc_html__( 'Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_carousel_pagination_type' => 'numbers',
				]
			]
		);
		//pagination bg color
		$this->add_control(
			'bwdlc_logo_carousel_dots_active_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .brand-logo-active.activeDots .owl-dots button.owl-dot.active span' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdlc_logo_carousel_style_selection'];
		$logo_repeater = $settings['bwdlc_logo_carousel_list'];
		$animate_type = $settings['bwdlc_logo_carousel_animation_style'];

		$slide_item_desktop = $settings['bwdlc_logo_carousel_per_view_desktop'];
		$slide_item_tablet = $settings['bwdlc_logo_carousel_per_view_tablet'];
		$slide_item_mobile = $settings['bwdlc_logo_carousel_per_view_mobile'];

		$slide_speed = $settings['bwdlc_logo_carousel_slide_speed'];
		$ap = $settings['bwdlc_logo_carousel_autoplay'];
		$arrow_nav = $settings['bwdlc_logo_carousel_arrow_nav'];
		$arrow_nav_type = $settings['bwdlc_logo_carousel_arrow_type'];
		$pagination_type = $settings['bwdlc_logo_carousel_pagination_type'];
		$center_mode = $settings['bwdlc_logo_carousel_center_mode'];
		$stagePadding = $settings['bwdlc_logo_carousel_stage_padding'];
		$carousel_tooltip = $settings['bwdlc_logo_carousel_tooltip_enable'];



		if('yes' === $ap){
			$ap_timeout = $settings['bwdlc_logo_carousel_autoplay_timeout'];
			$ap_hover_pause = $settings['bwdlc_logo_carousel_autoplay_hover_pause'];
			$infinite_loop = $settings['bwdlc_logo_carousel_infinite_loop'];	
		}
		//if arrow nav will active
		if('yes' === $arrow_nav){
			if('icon' === $arrow_nav_type){
				$prev = $settings['bwdlc_logo_carousel_arrow_prev']['value'];
				$next = $settings['bwdlc_logo_carousel_arrow_next']['value'];
			}else if('text' === $arrow_nav_type){
				$prev = $settings['bwdlc_logo_carousel_arrow_prev_text'];
				$next = $settings['bwdlc_logo_carousel_arrow_next_text'];
			}
		}

			?>
			<div class="bwdlc-brand-logo-common bwdlc-logo-carousel-common bwdlc-brand-logo-<?php echo esc_attr($chosen_style ); echo esc_attr(' ' . $animate_type );?>"
			id="bwdlc-carousel-id<?php echo esc_attr($chosen_style ); ?>">
				<div class="brand-logo-active owl-carousel d-flex" 
				data-desktop="<?php echo esc_attr($slide_item_desktop);?>"
				data-tablet="<?php echo esc_attr($slide_item_tablet);?>"
				data-mobile="<?php echo esc_attr($slide_item_mobile);?>"
				data-slide-speed="<?php echo esc_attr($slide_speed);?>"
				data-center = "<?php echo esc_attr($center_mode);?>"
				data-padding = "<?php echo esc_attr($stagePadding);?>"

				data-is-arrow-nav = "<?php echo esc_attr($arrow_nav);?>"

				data-tooltip-enable="<?php if(!empty($carousel_tooltip)){echo esc_attr($carousel_tooltip );} ?>"
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
								<div class=" bwdlc-brand-box-part elementor-repeater-item-<?php echo  esc_attr( $logo['_id'] ) ?>"
								data-tooltip="<?php echo esc_attr($logo['bwdlc_logo_carousel_brand_name']) ?>"
								>
									<div class="bwdlc-logo-img">
										<a href="<?php echo esc_url($logo['bwdlc_logo_carousel_logo_url']['url'] )?>">
											<img src="<?php echo esc_url($logo['bwdlc_logo_carousel_logo']['url'] );?>" alt="">
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

	}
}

