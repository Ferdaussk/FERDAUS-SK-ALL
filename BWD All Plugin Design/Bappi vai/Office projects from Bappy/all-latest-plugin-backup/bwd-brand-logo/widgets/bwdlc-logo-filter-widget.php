<?php

namespace BwdBrandLogo\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDLCLogoFilter extends Widget_Base {


	public function get_name() {
		return esc_html__('Bwd_logo_Filter', 'bwdlc-brand-logo' );
	}

	public function get_title() {
		return esc_html__( 'BWD Logo Filter', 'bwdlc-brand-logo' );
	}

	public function get_icon() {
		return 'bwdlc-brand-logo eicon-filter';
	}
	
	public function get_categories() {
		return [ 'bwdlc-brand-logo-category' ];
	}

	public function get_keywords() {
		return [ 'filter ', 'logo filter','bwdlc-brand-logo','filter'];
	}



	protected function register_controls() {
		$this->start_controls_section(
			'bwdlc_logo_filter_content_basic_settings',
			[
				'label' => esc_html__( 'Presets', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_style_selection',
			[
				'label' => esc_html__( 'Designs', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::SELECT,
				'default' => '17',
				'options' => [
					'17' => esc_html__( 'Style 1', 'bwdlc-brand-logo' ),
					'19' => esc_html__( 'Style 2', 'bwdlc-brand-logo' ),
				]
			]
		);
		$this->add_control(
			'bwdlc_filter_filter_responsive_device',
			[
				'label' => esc_html__( 'Columns', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdlc-brand-logo' ),
				'label_on' => esc_html__( 'Custom', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

		// desktop device column
		$this->add_control(
			'bwdlc_filter_filter_desktop',
			[
				'label' => esc_html__( 'Desktop', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'6'  => esc_html__( 'Column 2', 'bwdlc-brand-logo' ),
					'4'  => esc_html__( 'Column 3', 'bwdlc-brand-logo' ),
					'3'  => esc_html__( 'Column 4', 'bwdlc-brand-logo' ),
					'2'  => esc_html__( 'Column 6', 'bwdlc-brand-logo' ),
				],
			]
		);
		// tablet device column
		$this->add_control(
			'bwdlc_filter_filter_tablet',
			[
				'label' => esc_html__( 'Tablet', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'6'  => esc_html__( 'Column 2', 'bwdlc-brand-logo' ),
					'4'  => esc_html__( 'Column 3', 'bwdlc-brand-logo' ),
					'3'  => esc_html__( 'Column 4', 'bwdlc-brand-logo' ),
					'2'  => esc_html__( 'Column 6', 'bwdlc-brand-logo' ),
				],
			]
		);
		// mobile device column
		$this->add_control(
			'bwdlc_filter_filter_mobile',
			[
				'label' => esc_html__( 'Mobile', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '12',
				'options' => [
					'12'  => esc_html__( 'Column 1', 'bwdlc-brand-logo' ),
					'6'  => esc_html__( 'Column 2', 'bwdlc-brand-logo' ),
					'4'  => esc_html__( 'Column 3', 'bwdlc-brand-logo' ),
					'3'  => esc_html__( 'Column 4', 'bwdlc-brand-logo' ),
					'2'  => esc_html__( 'Column 6', 'bwdlc-brand-logo' ),
				],
			]
		);


		$this->end_popover();
		
		$this->add_control(
			'bwdlc_logo_filter_all_enable_filter',
			[
				'label' => __( 'Show Filter Menu', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'bwdlc-brand-logo' ),
				'label_off' => __( 'Hide', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'bwdlc_logo_filter_tooltip_enable',
			[
				'label' => __( 'Show Tooltip', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'bwdlc-brand-logo' ),
				'label_off' => __( 'Hide', 'bwdlc-brand-logo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

		// filter content section
		$this->start_controls_section(
			'bwdlc_logo_filter_content_section',
			[
				'label' => esc_html__( 'Filter Menu', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdlc_logo_filter_all_enable_filter' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item',
			[
				'label' => esc_html__( 'All Item', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('All', 'bwdlc-brand-logo'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdlc_logo_filter_item_name',
			[
				'label' => esc_html__( 'Item Name', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Development', 'bwdlc-brand-logo'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'bwdlc_logo_filter_item_id',
			[
				'label' => esc_html__( 'Item ID', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item1', 'bwdlc-brand-logo'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'bwdlc_filter_btn_menu',
			[
				'label' => esc_html__( 'Logo Filter Items', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Marketing', 'bwdlc-brand-logo' ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item1', 'bwdlc-brand-logo'),
					],
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Delivery Partner
						', 'bwdlc-brand-logo' ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item2', 'bwdlc-brand-logo'),
					],
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Financial ', 'bwdlc-brand-logo' ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item3', 'bwdlc-brand-logo'),
					],
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Corporate
						', 'bwdlc-brand-logo' ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item4', 'bwdlc-brand-logo'),
					],
				],
				'title_field' => `{{{ bwdlc_logo_filter_item_name }}}`,
			]
		);
		$this->end_controls_section();

		// filter img section
		$this->start_controls_section(
			'bwdlc_logo_filter_content_section_image',
			[
				'label' => esc_html__( 'Filterable Logo', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$image_repeater = new \Elementor\Repeater();

		$image_repeater->add_control(
			'bwdlc_logo_filter_img_id',
			[
				'label' => esc_html__( 'Item ID', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item1', 'bwdlc-brand-logo'),
				'description' => esc_html__('Copy from Filterable Item', 'bwdlc-brand-logo'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		// brand name
		$image_repeater->add_control(
			'bwdlc_logo_filter_brand_name',
			[
				'label' => esc_html__( 'Brand Name', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Envato', 'bwdlc-brand-logo'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		// logo img
		$image_repeater->add_control(
			'bwdlc_filter_logo_img',
			[
				'label' => esc_html__( 'Choose Logo', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) . 'assets/public/img/logo/01.png',
				],
			]
		);

		$image_repeater->add_control(
			'bwdlc_logo_filter_logo_url',
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
		$image_repeater->add_responsive_control(
			'bwdlc_filter_logo_height',
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-brand-box-part .bwdlc-logo-img a img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);	


		$this->add_control(
			'bwdlc_logo_logo_img',
			[
				'label' => esc_html__( 'Filterable logo Boxes', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $image_repeater->get_controls(),
				'default' => [
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/filter/1.webp', __FILE__),
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item1', 'bwdlc-brand-logo'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Company Name', 'bwdlc-brand-logo'),
					],					
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/filter/2.webp', __FILE__),
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item2', 'bwdlc-brand-logo'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Company Name', 'bwdlc-brand-logo'),
					],					
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/filter/3.webp', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item1', 'bwdlc-brand-logo'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Company Name', 'bwdlc-brand-logo'),
					],					
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/filter/4.webp', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item4', 'bwdlc-brand-logo'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Company Name', 'bwdlc-brand-logo'),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/filter/5.webp', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item5', 'bwdlc-brand-logo'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Company Name', 'bwdlc-brand-logo'),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/filter/6.webp', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item3', 'bwdlc-brand-logo'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Company Name', 'bwdlc-brand-logo'),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/filter/7.webp', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item6', 'bwdlc-brand-logo'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Company Name', 'bwdlc-brand-logo'),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/filter/8.webp', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item7', 'bwdlc-brand-logo'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Company Name', 'bwdlc-brand-logo'),
					],
				],
				'image_field' => `{{{ bwdlc_logo_filter_brand_name }}}`,
			]
		);
		$this->end_controls_section();
		// style controls section
		$this->start_controls_section(
			'bwdlc_logo_item_style_section',
			[
				'label' => esc_html__( 'Logo Menu', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdlc_logo_filter_all_item_title_style_tabs'
		);

		// normal style  tab
		$this->start_controls_tab(
			'bwdlc_logo_filter_all_item_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdlc-brand-logo' ),
			]
		);

		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_typography',
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn',
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_content_quote_active_color',
			[
				'label' => esc_html__( 'Active Color', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_right_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_div_active_background',
			[
				'label' => esc_html__( 'Active Background', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_div_hoveraaaa_sssssbackground',
				'label' => esc_html__( 'Background Type', 'bwdlc-brand-logo' ),
				'types' => [ 'classic' ],
				'exclude'=>['image'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn',
			]
		);
		// margin
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_margin',
            [
                'label' => esc_html__('Margin', 'bwdlc-brand-logo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// padding
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_padding',
            [
                'label' => esc_html__('Padding', 'bwdlc-brand-logo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// border redoius
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdlc-brand-logo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		// hover tab
		$this->start_controls_tab(
			'bwdlc_logo_filter_all_item_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdlc-brand-logo' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_hover_typography',
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn:hover',
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_content_active_right_color',
			[
				'label' => esc_html__( 'Active Color', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_content_quote_right_color',
			[
				'label' => esc_html__( 'Color', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_div_hover_active_background',
			[
				'label' => esc_html__( 'Active Background', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_div_hoveraaaa_background',
				'label' => esc_html__( 'Background Type', 'bwdlc-brand-logo' ),
				'types' => [ 'classic' ],
				'exclude'=>['image'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn:hover',
			]
		);
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_hover_border_radius',
            [
                'label' => esc_html__('Hover Border Radius', 'bwdlc-brand-logo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end

		$this->add_control(
			'bwdlc_logo_filter_all_items_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdlc_logo_filter_all_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwdlc-brand-logo' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdlc-brand-logo' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwdlc-brand-logo' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,

				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu' => 'justify-content: {{VALUE}} !important',
				],

			]
		);
		$this->end_controls_section();

		// filter logo style
		$this->start_controls_section(
			'bwdlc_logo_info_style_section',
			[
				'label' => esc_html__( 'Filter Logo', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		//filter logo alignment========================
		$this->add_control(
			'bwdlc_logo_filter_logo_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwdlc-brand-logo' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdlc-brand-logo' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwdlc-brand-logo' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,

				'selectors' => [
					'{{WRAPPER}} .bwdlc-grid' => 'justify-content: {{VALUE}} !important',
				],
			]
		);
		// logo height
		$this->add_responsive_control(
			'bwdlc_logo_filter_logo_height',
			[
				'label' => esc_html__( 'Logo Box Height', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 170,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part ' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// logo x gap
		$this->add_responsive_control(
			'bwdlc_logo_filter_logo_x_gap',
			[
				'label' => esc_html__( 'Horizontally Gap (px)', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-grid > * ' => 'padding-right: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// logo y gap
		$this->add_responsive_control(
			'bwdlc_logo_filter_logo_y_gap',
			[
				'label' => esc_html__( 'Vertically Gap (px)', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-grid > * ' => 'padding-bottom: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		// background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_filter_logo_box_bg',
				'label' => esc_html__( 'Background', 'bwdlc-brand-logo' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);
		// border -radius
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_info_u_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdlc-brand-logo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_filter_logo_box_border',
				'label' => esc_html__( 'Border', 'bwdlc-brand-logo' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);
		//box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_filter_logo_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdlc-brand-logo' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_info_u_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdlc_logo_filter_style_selection'];
		$filter_btn_menu = $settings['bwdlc_filter_btn_menu'];
		$filter_img_menu = $settings['bwdlc_logo_logo_img'];
		$desktop = $settings['bwdlc_filter_filter_desktop'];
		$tablet = $settings['bwdlc_filter_filter_tablet'];
		$mobile = $settings['bwdlc_filter_filter_mobile'];
		$brand_name = 'bwdlc_logo_filter_brand_name';
		$tooltip = $settings['bwdlc_logo_filter_tooltip_enable'];

		// filter rendering============================
		?>
		<div class="bwdlc-brand-logo-common bwdlc-filter-common bwdlc-brand-logo-<?php echo esc_attr($chosen_style );?>
		"
		data-tooltip-enable="<?php if(!empty($tooltip)){echo esc_attr($tooltip );} ?>"
		>
			<div class="row">

				<div class="col-xl-12">
					<div class="bwdlc-brand-menu d-flex">
						<?php
							if($filter_btn_menu){
								?>
								<div class="bwdlc-brand-menu-btn active" data-filter="*">
									<?php echo esc_html($settings['bwdlc_logo_filter_all_item'] )?>
								</div>
								<?php
								foreach($filter_btn_menu as $item){
									?>
									<div class="bwdlc-brand-menu-btn elementor-repeater-item-<?php echo esc_attr($item['_id'] ) ?>" data-filter="<?php echo esc_attr($item['bwdlc_logo_filter_item_id'] )?>">
										<?php
										echo esc_html($item['bwdlc_logo_filter_item_name'] );
										?>
									</div>
									<?php
								}
							}
						?>
					</div>
				</div>
			</div>

			<div class="row bwdlc-grid">
				<?php
					if($filter_img_menu){
						foreach($filter_img_menu as $img_item){
							?>
							<div class="active elementor-repeater-item-<?php echo esc_attr($img_item['_id'] ) ?> col-lg-<?php echo esc_attr($desktop )?>
							col-md-<?php echo esc_attr($tablet )?>
							col-<?php echo esc_attr($mobile )?>
							 bwdlc-grid-item <?php echo esc_attr($img_item['bwdlc_logo_filter_img_id'] ) ?>">
								<div class="bwdlc-brand-box-part" data-tooltip="<?php echo esc_attr($img_item[$brand_name]) ?>">
									<div class="bwdlc-logo-img">
										<a href="<?php echo esc_url($img_item['bwdlc_logo_filter_logo_url']['url'] )?>">
											<img src="<?php echo esc_url($img_item['bwdlc_filter_logo_img']['url'] );?>" alt="Brand Logo">
										</a>
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



