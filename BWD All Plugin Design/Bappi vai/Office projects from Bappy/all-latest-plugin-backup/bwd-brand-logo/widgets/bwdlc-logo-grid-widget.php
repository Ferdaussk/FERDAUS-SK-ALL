<?php
namespace BwdBrandLogo\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDLCLogoGrid extends Widget_Base {

	public function get_name() {
		return esc_html__('Logo_Grid', 'bwdlc-brand-logo' );
	}

	public function get_title() {
		return esc_html__( 'BWD Logo Grid', 'bwdlc-brand-logo' );
	}

	public function get_icon() {
		return 'bwdlc-brand-logo eicon-gallery-grid';
	}
	
	public function get_categories() {
		return [ 'bwdlc-brand-logo-category' ];
	}

	public function get_keywords() {
		return [ 'logo ', 'logo grid','bwdlc-logo-carousel','grid','brand-logo'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdlc_logo_grid_basic_settings',
			[
				'label' => esc_html__( 'Presets', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdlc_logo_grid_style_selection',
			[
				'label' => esc_html__( 'Designs', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::SELECT,
				'default' => '9',
				'options' => [
					'9' => esc_html__( 'Style 1', 'bwdlc-brand-logo' ),
					'10' => esc_html__( 'Style 2', 'bwdlc-brand-logo' ),
					'11' => esc_html__( 'Style 3', 'bwdlc-brand-logo' ),
					'12' => esc_html__( 'Style 4', 'bwdlc-brand-logo' ),
					'13' => esc_html__( 'Style 5', 'bwdlc-brand-logo' ),
					'14' => esc_html__( 'Style 6', 'bwdlc-brand-logo' ),
					'16' => esc_html__( 'Style 7', 'bwdlc-brand-logo' ),
				],
			]
		);

		$this->add_control(
			'bwdlc_logo_grid_responsive_device',
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
			'bwdlc_logo_grid_desktop',
			[
				'label' => esc_html__( 'Desktop', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'2'  => esc_html__( 'Column 6', 'bwdlc-brand-logo' ),
					'3'  => esc_html__( 'Column 4', 'bwdlc-brand-logo' ),
					'4'  => esc_html__( 'Column 3', 'bwdlc-brand-logo' ),
					'6'  => esc_html__( 'Column 2', 'bwdlc-brand-logo' ),
				],
			]
		);
		// tablet device column
		$this->add_control(
			'bwdlc_logo_grid_tablet',
			[
				'label' => esc_html__( 'Tablet', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'2'  => esc_html__( 'Column 6', 'bwdlc-brand-logo' ),
					'3'  => esc_html__( 'Column 4', 'bwdlc-brand-logo' ),
					'4'  => esc_html__( 'Column 3', 'bwdlc-brand-logo' ),
					'6'  => esc_html__( 'Column 2', 'bwdlc-brand-logo' ),
				],
			]
		);
		// mobile device column
		$this->add_control(
			'bwdlc_logo_grid_mobile',
			[
				'label' => esc_html__( 'Mobile', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '12',
				'options' => [
					'2'  => esc_html__( 'Column 6', 'bwdlc-brand-logo' ),
					'3'  => esc_html__( 'Column 4', 'bwdlc-brand-logo' ),
					'4'  => esc_html__( 'Column 3', 'bwdlc-brand-logo' ),
					'6'  => esc_html__( 'Column 2', 'bwdlc-brand-logo' ),
					'12'  => esc_html__( 'Column 1', 'bwdlc-brand-logo' ),
				],
			]
		);
		$this->end_popover();
		// grid tooltip enable
		$this->add_control(
			'bwdlc_logo_grid_tooltip_enable',
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
		// logo grid
		$this->start_controls_section(
			'bwdlc_logo_grid_items',
			[
				'label' => esc_html__( 'Logo Grid', 'bwdlc-brand-logo' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//repeater (slide items)
		$repeater = new \Elementor\repeater();

		$repeater->add_control(
			'bwdlc_logo_grid_logo',
			[
				'label' => esc_html__( 'Choose Logo', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugins_url('../assets/public/img/logo1.png', __FILE__),
				],
			]
		);
		$repeater->add_control(
			'bwdlc_logo_grid_name',
			[
				'label' => esc_html__( 'Brand Name', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Envato', 'bwdlc-brand-logo' ),
				'label_block' =>true,
			]
		);
		$repeater->add_control(
			'bwdlc_logo_grid_logo_url',
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
			'bwdlc_grid_logo_height',
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

		//repeater fetch
		$this->add_control(
			'bwdlc_logo_grid_list',
			[
				'label' => esc_html__( 'Logo', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/filter/1.webp', __FILE__),
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Company Name', 'bwdlc-brand-logo' ),

					],					
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/filter/2.webp', __FILE__),
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Company Name', 'bwdlc-brand-logo' ),

					],					
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/filter/3.webp', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Company Name', 'bwdlc-brand-logo' ),

					],					
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/filter/4.webp', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Company Name', 'bwdlc-brand-logo' ),
					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/filter/5.webp', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Company Name', 'bwdlc-brand-logo' ),
					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/filter/6.webp', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Company Name', 'bwdlc-brand-logo' ),

					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/filter/7.webp', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Company Name', 'bwdlc-brand-logo' ),
					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/filter/8.webp', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Company Name', 'bwdlc-brand-logo' ),
					],
				],
				'separator'=> 'before',
				'title_field' => '{{{ bwdlc_logo_grid_name }}}',

			]
		);
		$this->end_controls_section();
		//grid logo styles
		$this->start_controls_section(
			'bwdlc_logo_grid_logo_Styles_section',
			[
				'label' => esc_html__( 'Grid Logo', 'bwdlc-brand-logo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// logo box height
		$this->add_responsive_control(
			'bwdlc_grid_logo_box_height',
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
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// alignment
		$this->add_control(
			'bwdlc_logo_grid_logo_items_align',
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
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-grid-logo-wrapper' => 'justify-content: {{VALUE}} !important',
				],
			]
		);

		//vertically gap
		$this->add_control(
			'bwdlc_logo_grid_logo_y_gap',
			[
				'label' => esc_html__( 'Vertically Gap (px)', 'bwdlc-brand-logo' ),
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
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper > *' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//horizontally gap
		$this->add_control(
			'bwdlc_logo_grid_logo_x_gap',
			[
				'label' => esc_html__( 'Horizontally Gap (px)', 'bwdlc-brand-logo' ),
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
				],
				'selectors' => [
					'{{WRAPPER}}  .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper > *' => 'padding-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_grid_logo_background',
				'label' => esc_html__( 'Background', 'bwdlc-brand-logo' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_border',
				'label' => esc_html__( 'Border', 'bwdlc-brand-logo' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);


		//border-radius
		$this->add_responsive_control(
			'bwdlc_logo_grid_logo_border-radius',
			[
				'label' => esc_html__( 'Border-Radius', 'bwdlc-brand-logo' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_grid_logo_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdlc-brand-logo' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);


    }
	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdlc_logo_grid_style_selection'];
		$logo_grid_repeater = $settings['bwdlc_logo_grid_list'];
		$desktop_col = $settings['bwdlc_logo_grid_desktop'];
		$tablet_col = $settings['bwdlc_logo_grid_tablet'];
		$mobile_col = $settings['bwdlc_logo_grid_mobile'];
		$grid_tooltip = $settings['bwdlc_logo_grid_tooltip_enable'];


		?>
		<div class="bwdlc-grid-cmn bwdlc-brand-logo-common bwdlc-brand-logo-<?php echo esc_attr($chosen_style );?>"
		data-tooltip-enable="<?php if(!empty($grid_tooltip)){echo esc_attr($grid_tooltip );} ?>">
			<div class="bwdlc-grid-logo-wrapper d-flex">
			<?php
				if( $logo_grid_repeater){
					foreach ($logo_grid_repeater as $logo_grid) {
					?>
				<div class="col-lg-<?php echo esc_attr( $desktop_col); ?> col-<?php echo esc_attr( $mobile_col); ?> col-md-<?php echo esc_attr( $tablet_col); echo ' elementor-repeater-item-' . esc_attr( $logo_grid['_id'] ) ?>">
					<div class="bwdlc-brand-box-part"  data-tooltip="<?php echo esc_attr($logo_grid['bwdlc_logo_grid_name']) ?>">
						<div class="bwdlc-logo-img">
							<a href="<?php echo esc_url($logo_grid['bwdlc_logo_grid_logo_url']['url'] )?>">
								<img src="<?php echo esc_url($logo_grid['bwdlc_logo_grid_logo']['url'] );?>" alt="Brand Logo">
							</a>
						</div>
					</div>
				</div>
				<?php 
				}
			}?>
			</div>
		</div>
		<?php

	}
}




