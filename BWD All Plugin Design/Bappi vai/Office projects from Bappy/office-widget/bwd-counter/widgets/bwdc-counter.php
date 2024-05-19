<?php
namespace bwdcCounter\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCCounterWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdc Counter', 'bwdc-counter' );
	}
	public function get_title() {
		return esc_html__( 'BWD Counter', 'bwdc-counter' );
	}
	public function get_icon() {
		return 'eicon-counter-circle bwdc-counter';
	}
	public function get_categories() {
		return [ 'bwdc-counter-category' ];
	}
	public function get_script_depends() {
		return [ 'bwdc-counter-category' ];
	}
	public function get_keywords() {
		return [ 'counter', 'bwd counter', 'number' ];
	}
	protected function register_controls() {
     // counter layout control section start
		$this->start_controls_section(
			'bwdc_counter_layout_section',
			[
				'label' => esc_html__( 'Counter Layout', 'bwdc-counter' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdc_counter_choose',
			[
				'label' => esc_html__( 'Choose Styles', 'bwdc-counter' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwdc-counter' ),
					'style2' => esc_html__( 'Style 2', 'bwdc-counter' ),
					'style3' => esc_html__( 'Style 3', 'bwdc-counter' ),
					'style4' => esc_html__( 'Style 4', 'bwdc-counter' ),
					'style5' => esc_html__( 'Style 5', 'bwdc-counter' ),
					'style6' => esc_html__( 'Style 6', 'bwdc-counter' ),
					'style7' => esc_html__( 'Style 7', 'bwdc-counter' ),
					'style8' => esc_html__( 'Style 8', 'bwdc-counter' ),
					'style9' => esc_html__( 'Style 9', 'bwdc-counter' ),
					'style10' => esc_html__( 'Style 10', 'bwdc-counter' ),
					'style11' => esc_html__( 'Style 11', 'bwdc-counter' ),
					'style12' => esc_html__( 'Style 12', 'bwdc-counter' ),
					'style13' => esc_html__( 'Style 13', 'bwdc-counter' ),
					'style14' => esc_html__( 'Style 14', 'bwdc-counter' ),
					'style15' => esc_html__( 'Style 15', 'bwdc-counter' ),
					'style16' => esc_html__( 'Style 16', 'bwdc-counter' ),
					'style17' => esc_html__( 'Style 17', 'bwdc-counter' ),
					'style18' => esc_html__( 'Style 18', 'bwdc-counter' ),
					'style19' => esc_html__( 'Style 19', 'bwdc-counter' ),
					'style20' => esc_html__( 'Style 20', 'bwdc-counter' ),
					'style21' => esc_html__( 'Style 21', 'bwdc-counter' ),
					'style22' => esc_html__( 'Style 22', 'bwdc-counter' ),
					'style23' => esc_html__( 'Style 23', 'bwdc-counter' ),
					'style24' => esc_html__( 'Style 24', 'bwdc-counter' ),
					'style25' => esc_html__( 'Style 25', 'bwdc-counter' ),
					'style26' => esc_html__( 'Style 26', 'bwdc-counter' ),
					'style27' => esc_html__( 'Style 27', 'bwdc-counter' ),
					'style28' => esc_html__( 'Style 28', 'bwdc-counter' ),
					'style29' => esc_html__( 'Style 29', 'bwdc-counter' ),
					'style30' => esc_html__( 'Style 30', 'bwdc-counter' ),
					'style31' => esc_html__( 'Style 31', 'bwdc-counter' ),
				],
			]
		);
		// column control
		$this->add_control(
			'bwdc_column',
			[
				'label' => esc_html__( 'Column', 'bwdc-counter' ),
				'type' => Controls_Manager::SELECT,
				'default' => '3',
				'options' => [
					'4' => esc_html__( '4', 'bwdc-counter' ),
					'3' => esc_html__( '3', 'bwdc-counter' ),
					'2' => esc_html__( '2', 'bwdc-counter' ),
					'1' => esc_html__( '1', 'bwdc-counter' ),
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
			]
		);
		$this->end_controls_section();
		// counter layout control section end

		// counter content control section start
		$this->start_controls_section(
				'bwdc_counter_content_section',
				[
					'label' => esc_html__( 'Counter Content', 'bwdc-counter' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);

		// repeater start
		$repeater = new \Elementor\Repeater();
		// title control start
		$repeater->add_control(
			'bwdc_counter_title',
			[
				'label' => esc_html__( 'Title', 'bwdc-counter' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Order Received', 'bwdc-counter'),
				'label_block' => true,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdc_counter_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-heading ',
			]
		);
		//title alignMent
		$repeater->add_control(
			'bwdc_title_text_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdc-counter' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdc-counter' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdc-counter' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$repeater->add_control(
			'bwdc_counter_title_color',
			[
				'label' => esc_html__( 'Color', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-heading' => 'color: {{VALUE}}',
				],
			]
		);
		// title hover color
		$repeater->add_control(
				'bwdc_counter_title_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'bwdc-counter' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdc-counter .bwdc-counter-heading' => 'color: {{VALUE}}',
					],
				]
			);

		// title divider
		$repeater->add_control(
			'bwdc_counter_title_divider',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		// icon control start
		$repeater->add_control(
			'bwdc_counter_icon',
			[
				'label' => esc_html__( 'Icon', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'label_block'=>true,
				'default' => [
					'value' => 'fa fa-globe',
					'library' => 'solid',
				],
			]
		);
    	// icon size (slider)
		$repeater->add_responsive_control(
			'bwdc_counter_normal_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdc-counter' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//icon alignment
		$repeater->add_control(
			'bwdc_icon_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdc-counter' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdc-counter' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdc-counter' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		// icon text color
		$repeater->add_control(
			'bwdc_counter_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-icon' => 'color: {{VALUE}}',
				],
			]
		);
		// icon bg color
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdc_counter_icon_bg',
				'label' => esc_html__('BG Color','bwdc-counter'),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-icon',
			]
		);
		// icon divider
		$repeater->add_control(
			'bwdc_counter_icon_divider',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		// ========================
		//count number control start
		$repeater->add_control(
			'bwdc_counter_number',
			[
				'label' => esc_html__( 'Number', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'=>true,
				'default' => esc_html__( '1500', 'bwdc-counter' ),
			]
		);
		// counter number prefix
		$repeater->add_control(
			'bwdc_counter_number_prefix',
			[
				'label' => esc_html__( 'Number Prefix', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'=>true,
				'default' => esc_html__( '', 'bwdc-counter' ),
			]
		);
		// counter number suffix
		$repeater->add_control(
			'bwdc_counter_number_suffix',
			[
				'label' => esc_html__( 'Number Suffix', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'=>true,
				'default' => esc_html__( '+', 'bwdc-counter' ),
			]
		);
		//count animation duration
		$this->add_control(
			'bwdc_counter_animation_duration',
			[
				'label' => esc_html__( 'Count Duration', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'=>true,
				'default' => esc_html__( '1000', 'bwdc-counter' ),
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdc_number_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-value ',
			]
		);
		//number alignment
		$repeater->add_control(
			'bwdc_number_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwdc-counter' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdc-counter' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwdc-counter' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		//number color
		$repeater->add_control(
			'bwdc_counter_number_color',
			[
				'label' => esc_html__( 'Color', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-value' => 'color: {{VALUE}}',
				],
			]
		);
		//number bg color
		$repeater->add_control(
			'bwdc_counter_number_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-value' => 'background-color: {{VALUE}}',
				],
			]
		);
		//wrapper box
		$repeater->add_control(
				'bwdc_wrapper_box',
				[
					'label' => esc_html__( 'Wrapper Box', 'bwdc-counter' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdc_counter_bg',
				'label' => esc_html__('Counter BG','bwdc-counter'),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter, {{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter-content-common',
			]
		);
		// wrapper box padding
		$repeater->add_responsive_control(
			'bwdc_wrapper_box_padding',
			[
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'label' => esc_html__( 'Padding', 'bwdc-counter' ),
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// wrapper box padding
		$repeater->add_responsive_control(
			'bwdc_wrapper_box_margin',
			[
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'label' => esc_html__( 'Margin', 'bwdc-counter' ),
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// counter border control
		$repeater->add_control(
			'bwdc_wrapper_box_border_heading',
			[
				'label' => esc_html__( 'Wrapper Box Border', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdc_wrapper_box_border',
				'label' => esc_html__( 'wrapper box border', 'bwdc-counter' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter',
			]
		);
		// wrapper box border-radius
		$repeater->add_responsive_control(
			'bwdc_wrapper_box_border_radius',
			[
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'label' => esc_html__( 'Border Radius', 'bwdc-counter' ),
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
			'name' => 'bwdc_wrapper_box_shadow',
			'label' => esc_html__( 'Wrapper Box Shadow', 'bwdc-counter' ),
			'separator' => 'before',
			'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter',
			]
		);
		// box shape
		$repeater->add_control(
			'bwdc_counter_shapes_heading',
			[
				'label' => esc_html__( 'Shape', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// shape bg 
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdc_shape_bg',
				'label' => esc_html__( 'Background', 'bwdc-counter' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-shape::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdc-shape::after',
			]
		);
		// shape border color 
		$repeater->add_control(
			'bwdc_counter_shape_border_color',
			[
				'label' => esc_html__( 'Shape Border Color', 'bwdc-counter' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-shape::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdc-shape::after' => 'border-color: {{VALUE}}',
				],
			]
		);
		// fetch data from repeater
		$this->add_control(
			'bwdc_counters',
			[
				'label' => esc_html__( 'Counters', 'bwdc-counter' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'counter_title' => esc_html__( 'counter #1', 'bwdc-counter' ),
					],
					[
						'counter_title' => esc_html__( 'counter #2', 'bwdc-counter' ),
					],
					[
						'counter_title' => esc_html__( 'counter #3', 'bwdc-counter' ),
					],
					[
						'counter_title' => esc_html__( 'counter #4', 'bwdc-counter' ),
					],
				],
				'title_field' => `{{{ counter_title }}}`,
			]
		);
		$this->end_controls_section();
    	// ==========================
        $this->start_controls_section(
          'bwdc_counter_style_section',
          [
            'label' => esc_html__( 'Counter Style', 'bwdc-counter' ),
            'tab' => Controls_Manager::TAB_STYLE,
          ]
        );

		// bg control
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'counter_section_background',
				'label' => esc_html__( 'Background', 'bwdc-counter' ),
				'types' => [ 'classic', 'gradient','video' ],
				'selector' => '{{WRAPPER}} .bwdc-counter-common',
			]
		);
		$this->add_responsive_control(
            'bwdc_counter_box_margin',
            [
                'label' => esc_html__('Margin', 'bwdc-counter'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdc-counter-common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdc_counter_box_padding',
            [
                'label' => esc_html__('Padding', 'bwdc-counter'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdc-counter-common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdc_col = $settings['bwdc_column'];
		if($bwdc_col === '1'){
			$bwdc_col_lg = 'col-lg-12';
		}else if($bwdc_col === '2'){
			$bwdc_col_lg = 'col-lg-6';
		}else if($bwdc_col === '3'){
			$bwdc_col_lg = 'col-lg-4';
		}else if($bwdc_col === '4'){
			$bwdc_col_lg = 'col-lg-3';
		}

			//counter 1
			if($settings['bwdc_counter_choose']==='style1'){
				?>
			<div class="bwdc-counter-1 bwdc-counter-common">
				<div class="container">
						<div class="row">
					<?php
						if($settings['bwdc_counters']){
							foreach($settings['bwdc_counters'] as $item){
							echo '<div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
							
							?>
									<div class="bwdc-counter bwdc-shape">
											<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">

										<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
											<i class=" <?php echo esc_attr($item['bwdc_counter_icon']['value']); ?> "></i>
										</div>
										<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
											 <?php echo esc_html($item['bwdc_counter_title']); ?> 
										</div>

										<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			<?php   //counter 2
			}else if($settings['bwdc_counter_choose']==='style2'){
			?>
			<div class="bwdc-counter-2 bwdc-counter-common">
				<div class="container">
						<div class="row">
						<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
							echo '<div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
										?>
							<div class="bwdc-counter bwdc-shape">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">

								<div class="bwdc-counter-content">
									<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
										<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
									</div>
									<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>"> 
										<?php echo esc_html($item['bwdc_counter_title']); ?>
									</div>
									<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
		    }
			//counter 3
			else if($settings['bwdc_counter_choose']==='style3'){
				?>

			<div class="bwdc-counter-3 bwdc-counter-common">
				<div class="container">
					    <div class="row">
						<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
						?>
								<div class="bwdc-counter bwdc-shape">
								<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">

			
									<div class="bwdc-counter-content">
										<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>"><i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i></div>
										<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
											<?php echo esc_html($item['bwdc_counter_title']); ?>
										</div>
										<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}

			//counter 4
			else if($settings['bwdc_counter_choose']==='style4'){
				?>
				<div class="bwdc-counter-4 bwdc-counter-common">
					<div class="container">
                        <div class="row">
							<?php
						if($settings['bwdc_counters']){
							foreach($settings['bwdc_counters'] as $item){
							echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
							?>
								<div class="bwdc-counter">
								<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
									<div class="bwdc-counter-icon bwdc-shape bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
                                        <i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
                                    </div>
									<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>

									<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
											<?php echo esc_html($item['bwdc_counter_title']); ?>
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

			}

			//counter 5
			else if($settings['bwdc_counter_choose']==='style5'){
					?>
					<div class="bwdc-counter-5 bwdc-counter-common">
						<div class="container">
							<div class="row">
										<?php
								if($settings['bwdc_counters']){
									foreach($settings['bwdc_counters'] as $item){
									echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
										?>
										<div class="bwdc-counter">

										<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
											<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
												<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
											</div>
											<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
											</div>
										
											<div class="bwdc-counter-heading 
												bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
												<?php echo esc_html($item['bwdc_counter_title']); ?>
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

			}

			//counter 6
			else if($settings['bwdc_counter_choose']==='style6'){
				?>
			<div class="bwdc-counter-6 bwdc-counter-common">
				<div class="container">
					<div class="row">
					<?php
				
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
							echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
					?>
                            <div class="bwdc-counter bwdc-shape">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
                                <div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
                                    <i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
                                </div>
                                <div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
                                    <?php echo esc_html($item['bwdc_counter_title']); ?></div>

									<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
			//counter 7
			else if($settings['bwdc_counter_choose']==='style7'){
					?>
			<div class="bwdc-counter-7 bwdc-counter-common">
				<div class="container">
					<div class="row">
					<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
					?>
						<div class="bwdc-counter bwdc-shape">
								<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-content">
								<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
                                    <i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
                                </div>
								<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
									<?php echo esc_html($item['bwdc_counter_title']); ?>
                                </div>
								<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
			//counter 8
			else if($settings['bwdc_counter_choose']==='style8'){
				?>
			<div class="bwdc-counter-8 bwdc-counter-common">
				<div class="container">
					<div class="row">
				<?php
                if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
					echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
			    ?>
						    <div class="bwdc-counter bwdc-shape">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
								<div class="bwdc-counter-content">
								<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
									<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
											<?php echo esc_html($item['bwdc_counter_title']); ?>
                                    </div>
									<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
										<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
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
			}
			//counter 9
			else if($settings['bwdc_counter_choose']==='style9'){
				?>
			<div class="bwdc-counter-9 bwdc-counter-common">
				<div class="container">
					<div class="row">
				<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
					echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
										?>
                            <div class="bwdc-counter bwdc-shape">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
                                <div class="bwdc-counter-content">
                                    <div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
                                        <i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>">
                                        </i>
                                    </div>
									<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
                                    <div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
                                        <?php echo esc_html($item['bwdc_counter_title']); ?>
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
					}
			//counter 10
			else if($settings['bwdc_counter_choose']==='style10'){
				?>
			<div class="bwdc-counter-10 bwdc-counter-common">
				<div class="container">
					<div class="row">
				<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
				?>
					<div class="bwdc-counter">
						<div class="bwdc-counter-content bwdc-shape">
						<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
								<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>">
                                                </i>
							</div>
							<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
						</div>
						<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
							<?php echo esc_html($item['bwdc_counter_title']); ?>
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
			}

			//counter 11
			else if($settings['bwdc_counter_choose']==='style11'){
				?>
				<div class="bwdc-counter-11 bwdc-counter-common">
					<div class="container">
						<div class="row">
						<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
								?>
								<div class="bwdc-counter bwdc-shape">
										<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
									<div class="bwdc-counter-content">
										<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
											<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
										</div>
										<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
											<?php echo esc_html($item['bwdc_counter_title']); ?>
										</div>
									</div>
									<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}

			//counter 12
			else if($settings['bwdc_counter_choose']==='style12'){
				                ?>
				<div class="bwdc-counter-12 bwdc-counter-common">
						<div class="container">
								<div class="row">
								<?php
							if($settings['bwdc_counters']){
								foreach($settings['bwdc_counters'] as $item){
								echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
								?>
									<div class="bwdc-counter bwdc-shape">
									<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
										<div class="bwdc-counter-icon bwdc-shape bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
											<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
										</div>
										<div class="bwdc-counter-content">
											<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
												<?php echo esc_html($item['bwdc_counter_title']); ?>
											</div>
											<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
			//counter 13
			else if($settings['bwdc_counter_choose']==='style13'){
				?>
			<div class="bwdc-counter-13 bwdc-counter-common">
				<div class="container">
						<div class="row">
								<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
								?>
								<div class="bwdc-counter bwdc-shape">
										<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
									<div class="bwdc-counter-content bwdc-counter-content-common">
										<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
											<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
										</div>
										<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
										<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
											<?php echo esc_html($item['bwdc_counter_title']);?>
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
			}
			//counter 14
			else if($settings['bwdc_counter_choose']==='style14'){
				?>
			<div class="bwdc-counter-14 bwdc-counter-common">
				<div class="container">
					<div class="row">
					<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
					?>
								<div class="bwdc-counter bwdc-shape">
								<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
									<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
										<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
									</div>
									<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
										<?php echo esc_html($item['bwdc_counter_title']); ?>
									</div>
									<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
			//counter 15
			else if($settings['bwdc_counter_choose']==='style15'){
				?>
			<div class="bwdc-counter-15 bwdc-counter-common">
				<div class="container">
					<div class="row">
					<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
					echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
					?>
						<div class="bwdc-counter bwdc-shape">
								<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-content bwdc-counter-content-common"></div>
							<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
								<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
							</div>
							<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
								<?php echo esc_html($item['bwdc_counter_title']); ?>
							</div>
							<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
			//counter 16
			else if($settings['bwdc_counter_choose']==='style16'){
				?>
			<div class="bwdc-counter-16 bwdc-counter-common">
				<div class="container">
					<div class="row">
				<?php
                if($settings['bwdc_counters']){
                    foreach($settings['bwdc_counters'] as $item){
                        echo '<div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
                                    ?>
                                    <div class="bwdc-counter bwdc-shape">
									<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
										<div class="bwdc-counter-content bwdc-counter-content-common"></div>
                                        <div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
                                            <i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
                                        </div>
										<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
                                        <div class="bwdc-counter-heading 
											bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
                                            <?php echo esc_html($item['bwdc_counter_title']); ?>
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
                }
			//counter 17
			else if($settings['bwdc_counter_choose']==='style17'){
				?>
			<div class="bwdc-counter-17 bwdc-counter-common">
				<div class="container">
					<div class="row">
				<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
					?>
						<div class="bwdc-counter bwdc-shape">
						<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-content bwdc-counter-content-common">
								<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
                                    <i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
								</div>
								<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
                                    <?php echo esc_html($item['bwdc_counter_title']); ?>
								</div>
								<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
			//counter 18
			else if($settings['bwdc_counter_choose']==='style18'){
				?>
			<div class="bwdc-counter-18 bwdc-counter-common">
				<div class="container">
						<div class="row">
					<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
							echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
					?>

							<div class="bwdc-counter">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
								<div class="bwdc-counter-content">
									<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
										<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
									</div>
								<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
									<?php echo esc_html($item['bwdc_counter_title']); ?>
								</div>
								<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
		//counter 19
		else if($settings['bwdc_counter_choose']==='style19'){
				?>
		<div class="bwdc-counter-19 bwdc-counter-common">
			<div class="container">
				<div class="row">
					<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
					?>
						<div class="bwdc-counter bwdc-shape">
						<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-content bwdc-counter-content-common">
								<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
									<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>">
                                    </i>
								</div>
								<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
									<?php echo esc_attr($item['bwdc_counter_title']); ?>
								</div>
								<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
		//counter 20
		else if($settings['bwdc_counter_choose']==='style20'){
			    ?>
		<div class="bwdc-counter-20 bwdc-counter-common">
			<div class="container">
				<div class="row">									
					<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
						?>
						<div class="bwdc-counter bwdc-shape">	
								<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">												<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
								<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>">
								</i>
							</div>
							<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
								<?php echo esc_html($item['bwdc_counter_title']); ?>
							</div>
							<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
		//counter 21
		else if($settings['bwdc_counter_choose']==='style21'){
				?>
		<div class="bwdc-counter-21 bwdc-counter-common">
			<div class="container">
					<div class="row">
					<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
					echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
					?>
							<div class="bwdc-counter bwdc-shape">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
								<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
									<?php echo esc_html($item['bwdc_counter_title']); ?>
								</div>
								<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
									<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
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
			}
		//counter 22
		else if($settings['bwdc_counter_choose']==='style22'){
				?>
		<div class="bwdc-counter-22 bwdc-counter-common">
			<div class="container">
					<div class="row">
					<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
						?>
							<div class="bwdc-counter bwdc-shape">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
							<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
								<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
							</div>
							<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
								<?php echo esc_html($item['bwdc_counter_title']); ?>
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
			}
		//counter 23
		else if($settings['bwdc_counter_choose']==='style23'){
				?>
		<div class="bwdc-counter-23 bwdc-counter-common">
			<div class="container">
					<div class="row">
						<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
							echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
							?>
							<div class="bwdc-counter">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
								<div class="bwdc-counter-content bwdc-counter-content-common">
								<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
									<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
										<?php echo esc_html($item['bwdc_counter_title']); ?>
									</div>
								</div>
								<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
									<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
								</div>
							</div>
						</div>																					<?php
						}
					}
						?>
				</div>
			</div>
		</div>
				<?php
			}
		//counter 24
		else if($settings['bwdc_counter_choose']==='style24'){
			?>
		<div class="bwdc-counter-24 bwdc-counter-common">
			<div class="container">
				<div class="row">
				<?php
			if($settings['bwdc_counters']){
				foreach($settings['bwdc_counters'] as $item){
					echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
						?>
							<div class="bwdc-counter bwdc-shape">
									<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
								<div class="bwdc-counter-content">
									<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
										<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
									</div>
									<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
									<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
										<?php echo esc_html($item['bwdc_counter_title']); ?>
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
			}
		//counter 25
		else if($settings['bwdc_counter_choose']==='style25'){
			?>
		<div class="bwdc-counter-25 bwdc-counter-common">
			<div class="container">
				<div class="row">
					<?php
						if($settings['bwdc_counters']){
							foreach($settings['bwdc_counters'] as $item){
								echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
									?>
									<div class="bwdc-counter">
									<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
									<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
										<div class="bwdc-counter-content bwdc-shape">
											<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
												<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
											</div>
											<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
												<?php echo esc_html($item['bwdc_counter_title']); ?>
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
			}
		//counter 26
		else if($settings['bwdc_counter_choose']==='style26'){
			?>
		<div class="bwdc-counter-26 bwdc-counter-common">
			<div class="container">
				<div class="row">
				<?php
			if($settings['bwdc_counters']){
				foreach($settings['bwdc_counters'] as $item){
					echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
						?>
							<div class="bwdc-counter bwdc-shape">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
								<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
									<?php echo esc_html($item['bwdc_counter_title']); ?>
								</div>
								<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
									<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
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
			}
		//counter 27
		else if($settings['bwdc_counter_choose']==='style27'){
			?>
		<div class="bwdc-counter-27 bwdc-counter-common">
			<div class="container">
				<div class="row">
						<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
							echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
								?>
									<div class="bwdc-counter bwdc-shape">
									<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
										<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
											<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>">
											</i>
										</div>
										<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
										<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
											<?php echo esc_html($item['bwdc_counter_title']); ?>
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
			}
		//counter 28
		else if($settings['bwdc_counter_choose']==='style28'){
			?>
		<div class="bwdc-counter-28 bwdc-counter-common">
			<div class="container">
					<div class="row">
						<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
						?>
						<div class="bwdc-counter bwdc-shape">
						<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-content bwdc-counter-content-common">
								<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
									<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
								</div>
								<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>
							</div>
							<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
								<?php echo esc_html($item['bwdc_counter_title']); ?>
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
			}
		//counter 29
		else if($settings['bwdc_counter_choose']==='style29'){
			?>
		<div class="bwdc-counter-29 bwdc-counter-common">
			<div class="container">
				<div class="row">
					<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
							echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
							?>																						<div class="bwdc-counter bwdc-shape">
									<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
										<div class="bwdc-counter-content">
										<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
											</div>
										</div>															<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
												<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
											</div>
										</div>
										<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
											<?php echo esc_html($item['bwdc_counter_title']); ?>
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
			}
		//counter 30
		else if($settings['bwdc_counter_choose']==='style30'){
			?>
		<div class="bwdc-counter-30 bwdc-counter-common">
			<div class="container">
				<div class="row">
					<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
							echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
								?>
								<div class="bwdc-counter">
								<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
									<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
										<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
									</div>
									<div class="bwdc-counter-content">
										<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
											<?php echo esc_html($item['bwdc_counter_title']); ?>
										</div>
										<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}
		//counter 31
		else if($settings['bwdc_counter_choose']==='style31'){
			?>	
		<div class="bwdc-counter-31 bwdc-counter-common">
			<div class="container">
				<div class="row">
					<?php
				if($settings['bwdc_counters']){
					foreach($settings['bwdc_counters'] as $item){
						echo ' <div class="col-sm-6 col-md-6 '. $bwdc_col_lg .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
								?>
						<div class="bwdc-counter bwdc-shape">
						<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">
							<div class="bwdc-counter-icon bwdc-icon-<?php echo $item['bwdc_icon_align'] ?>">
								<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
							</div>
							<div class="bwdc-counter-heading bwdc-text-<?php echo $item['bwdc_title_text_align'] ?>">
								<?php echo esc_html($item['bwdc_counter_title']); ?>
							</div>
							<div class="bwdc-counter-value justify-content-<?php echo $item['bwdc_number_align'] ?>">
											<div class="bwdc-num-prefix"> 
												<?php echo $item['bwdc_counter_number_prefix'] ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo $item['bwdc_counter_number_suffix'] ;?>
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
			}

	}

	protected function content_template() {
		?>

	
		<# if ( settings.bwdc_counter_choose === 'style1' ) { #>
			<div>
				<# _.each( settings.bwdc_counters, function( item ) { #>
					<input hidden  class="bwdc-count-duration" 
					value="{{ settings.bwdc_counter_animation_duration}}" >

				<# }); #>
			</div>
		<# } #>


		<?php
	}
}
?>
