<?php
namespace AccordionCreatorBWD\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDACAccordionCreatoR extends Widget_Base {

	public function get_name() {
		return esc_html__('Accordion', 'bwd-accordion' );
	}

	public function get_title() {
		return esc_html__( 'BWD Accordion', 'bwd-accordion' );
	}

	public function get_icon() {
		return 'bwdac-accordion-icon eicon-accordion';
	}

	public function get_categories() {
		return [ 'bwdac-bwd-accordion-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'ab_content_selection',
			[
				'label' => esc_html__( 'Accordion Contents', 'bwd-accordion' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'ab_accordion_style_selection',
			[
				'label' => esc_html__( 'Accordion Styles', 'bwd-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-accordion' ),
					'style2' => esc_html__( 'Style 2', 'bwd-accordion' ),
					'style3' => esc_html__( 'Style 3', 'bwd-accordion' ),
					'style4' => esc_html__( 'Style 4', 'bwd-accordion' ),
					'style5' => esc_html__( 'Style 5', 'bwd-accordion' ),
					'style6' => esc_html__( 'Style 6', 'bwd-accordion' ),
					'style7' => esc_html__( 'Style 7', 'bwd-accordion' ),
					'style8' => esc_html__( 'Style 8', 'bwd-accordion' ),
					'style9' => esc_html__( 'Style 9', 'bwd-accordion' ),
					'style10' => esc_html__( 'Style 10', 'bwd-accordion' ),
					'style11' => esc_html__( 'Style 11', 'bwd-accordion' ),
					'style12' => esc_html__( 'Style 12', 'bwd-accordion' ),
					'style13' => esc_html__( 'Style 13', 'bwd-accordion' ),
					'style14' => esc_html__( 'Style 14', 'bwd-accordion' ),
					'style15' => esc_html__( 'Style 15', 'bwd-accordion' ),
					'style16' => esc_html__( 'Style 16', 'bwd-accordion' ),
					'style17' => esc_html__( 'Style 17', 'bwd-accordion' ),
					'style18' => esc_html__( 'Style 18', 'bwd-accordion' ),
					'style19' => esc_html__( 'Style 19', 'bwd-accordion' ),
					'style20' => esc_html__( 'Style 20', 'bwd-accordion' ),
					'style21' => esc_html__( 'Style 21', 'bwd-accordion' ),
					'style22' => esc_html__( 'Style 22', 'bwd-accordion' ),
					'style23' => esc_html__( 'Style 23', 'bwd-accordion' ),
					'style24' => esc_html__( 'Style 24', 'bwd-accordion' ),
					'style25' => esc_html__( 'Style 25', 'bwd-accordion' ),
					'style26' => esc_html__( 'Style 26', 'bwd-accordion' ),
					'style27' => esc_html__( 'Style 27', 'bwd-accordion' ),
					'style28' => esc_html__( 'Style 28', 'bwd-accordion' ),
					'style29' => esc_html__( 'Style 29', 'bwd-accordion' ),
					'style30' => esc_html__( 'Style 30', 'bwd-accordion' ),
					'style31' => esc_html__( 'Style 31', 'bwd-accordion' ),
				],
			]
		);
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			'ab_accordion_title',
			[
				'label' => esc_html__( 'Title', 'bwd-accordion' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'What is lorem ipsum text?', 'bwd-accordion' ),
				'label_block' => true,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ab_accordion_title_typography_reside',
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed',
				]
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_title_text_size',
			[
				'label' => esc_html__( 'Font Size', 'bwd-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_title_hover_color',
			[
				'label' => esc_html__( 'Hover', 'bwd-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_title_hover_bg_color',
			[
				'label' => esc_html__( 'Hover Bg', 'bwd-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_total_title_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$repeater->add_control(
			'ab_accordion_divider_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'ab_accordion_description',
			[
				'label' => esc_html__( 'Description', 'bwd-accordion' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', 'bwd-accordion' ),
				'label_block' => true,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ab_accordion_description_typography',
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body p',
				]
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_description_text_size',
			[
				'label' => esc_html__( 'Font Size', 'bwd-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body p' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body p' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_description_hover_color',
			[
				'label' => esc_html__( 'Hover', 'bwd-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body p:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_description_hover_bg_color',
			[
				'label' => esc_html__( 'Hover Bg', 'bwd-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_total_description_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$repeater->add_control(
			'ab_accordion_divider_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		
		
		$repeater->add_control(
			'ab_accordion_box_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title span:after' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title span:before' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_box_icon_size',
			[
				'label' => esc_html__( 'Size', 'bwd-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title span:after' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title span:before' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$repeater->add_control(
			'ab_accordion_divider_s_k',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_responsive_control(
			'ab_accordion_box_item_gap',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_total_box_padding',
            [
                'label' => esc_html__('Box Padding', 'bwd-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_responsive_control(
            'ab_accordion_total_box_margin',
            [
                'label' => esc_html__('Box Margin', 'bwd-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'ab_total_accordion_box',
			[
				'label' => esc_html__( 'Accordion', 'bwd-accordion' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'ab_total_box_title' => esc_html__( 'Accordion #1', 'bwd-accordion' ),
					],
					[
						'ab_total_box_title' => esc_html__( 'Accordion #2', 'bwd-accordion' ),
					],
					[
						'ab_total_box_title' => esc_html__( 'Accordion #3', 'bwd-accordion' ),
					],
					[
						'ab_total_box_title' => esc_html__( 'Accordion #4', 'bwd-accordion' ),
					],
				],
				'title_field' => `{{{ ab_total_box_title }}}`,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'ab_accordion_builder_style_section',
			[
				'label' => esc_html__( 'Accordion Style', 'bwd-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ab_accordion_builder_section_background',
				'label' => esc_html__( 'Background', 'bwd-accordion' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .ab-accordion-all',
			]
		);
		$this->add_responsive_control(
            'cbtns_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ab-accordion-all' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'cbtns_buttons_margin',
            [
                'label' => esc_html__('Margin', 'bwd-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ab-accordion-all' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		// Social Link
		if ( ! empty( $settings['ab_accordion_side_icon']['url'] ) ) {
			$this->add_link_attributes( 'ab_accordion_side_icon', $settings['ab_accordion_side_icon'] );
		}
		?>
		<div class="ab-accordion-all">
			<?php
			if ('style1' === $settings['ab_accordion_style_selection']){ ?>
				<div class="ab-Accordion-1 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-Accordion-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed"><?php echo esc_html__($item['ab_accordion_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style2' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-2 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed"><?php echo esc_html__($item['ab_accordion_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style3' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-3 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed"><?php echo esc_html__($item['ab_accordion_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style4' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-4 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed"><?php echo esc_html__($item['ab_accordion_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style5' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-5 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" role="tab" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed"><?php echo esc_html__($item['ab_accordion_title']); ?></span>
							</h4>
						</div>
						<div id="ab-collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style6' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-6 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading">
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
									<i class="icon fa fa-globe"></i>
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div>
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style7' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-7 ab-accordion-common" id="accordion">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed"><?php echo esc_html__($item['ab_accordion_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne" class="ab-panel-collapse in">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style8' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-8 ab-accordion-common" id="accordion">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed"><?php echo esc_html__($item['ab_accordion_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style9' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-9 ab-accordion-common" id="accordion">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
									<i class="fa fa-comment"></i>
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style10' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-10 ab-accordion-common" id="accordion">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed"><?php echo esc_html__($item['ab_accordion_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style11' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-11 ab-accordion-common" id="accordion">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed"><?php echo esc_html__($item['ab_accordion_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style12' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-12 ab-accordion-common" id="accordion">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style13' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-13 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style14' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-14 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style15' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-15 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style16' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-16 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style17' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-17 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style18' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-18 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style19' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-19 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style20' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-20 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style21' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-21 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style22' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-22 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style23' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-23 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style24' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-24 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style25' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-25 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style26' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-26 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style27' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-27 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style28' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-28 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style29' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-29 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-Accordion-default">
							<div class="ab-panel-heading " id="headingOne ">
								<h4 class="ab-panel-title ">
									<span class="ab-collapsed">
										<?php echo esc_html__($item['ab_accordion_title']); ?>
									</span>
								</h4>
							</div>
							<div id="collapseOne ">
								<div class="ab-panel-body ">
									<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style30' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-30 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style31' === $settings['ab_accordion_style_selection']){
				?>
				<div class="ab-Accordion-31 ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
					echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									<?php echo esc_html__($item['ab_accordion_title']); ?>
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p><?php echo esc_html__($item['ab_accordion_description']); ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
			<?php
			}
			?>
		</div>
		<?php
	}
	
	protected function content_template() {
		?>
		<div class="ab-accordion-all">
			<# if ('style1' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-1">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-Accordion-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">{{{item['ab_accordion_title']}}}</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style2' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-2">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">{{{item['ab_accordion_title']}}}</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style3' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-3">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">{{{item['ab_accordion_title']}}}</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style4' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-4">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">{{{item['ab_accordion_title']}}}</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style5' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-5">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" role="tab" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">{{{item['ab_accordion_title']}}}</span>
							</h4>
						</div>
						<div id="ab-collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style6' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-6">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading">
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
									<i class="icon fa fa-globe"></i>
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div>
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style7' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-7" id="accordion">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">{{{item['ab_accordion_title']}}}</span>
							</h4>
						</div>
						<div id="collapseOne" class="ab-panel-collapse in">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style8' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-8" id="accordion">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">{{{item['ab_accordion_title']}}}</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style9' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-9" id="accordion">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
									<i class="fa fa-comment"></i>
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style10' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-10" id="accordion">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">{{{item['ab_accordion_title']}}}</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style11' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-11" id="accordion">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">{{{item['ab_accordion_title']}}}</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style12' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-12" id="accordion">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
								{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style13' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-13">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
								{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style14' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-14">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading" >
							<h4 class="ab-panel-title">
								<span class="ab-collapsed">
								{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style15' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-15">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
								{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style16' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-16">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="ab-panel-body">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style17' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-17">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style18' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-18">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style19' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-19">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style20' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-20">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style21' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-21">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style22' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-22">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style23' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-23">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style24' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-24">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style25' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-25">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style26' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-26">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style27' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-27">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style28' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-28">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style29' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-29">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-Accordion-default">
							<div class="ab-panel-heading " id="headingOne ">
								<h4 class="ab-panel-title ">
									<span class="ab-collapsed">
										{{{item['ab_accordion_title']}}}
									</span>
								</h4>
							</div>
							<div id="collapseOne ">
								<div class="ab-panel-body ">
									<p>{{{item['ab_accordion_description']}}}</p>
								</div>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style30' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-30">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } else if('style31' === settings['ab_accordion_style_selection']){ #>
				<div class="ab-Accordion-31">
					<# if ( settings.ab_total_accordion_box.length ) { #>
						<# _.each( settings.ab_total_accordion_box, function( item ) { #>
					<div class="ab-Accordion-default elementor-repeater-item-{{ item._id }}">
						<div class="ab-panel-heading " id="headingOne ">
							<h4 class="ab-panel-title ">
								<span class="ab-collapsed">
									{{{item['ab_accordion_title']}}}
								</span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="ab-panel-body ">
								<p>{{{item['ab_accordion_description']}}}</p>
							</div>
						</div>
					</div>
						<# });
					} #>
				</div>
			<# } #>
		</div>
		<?php
	}
}
