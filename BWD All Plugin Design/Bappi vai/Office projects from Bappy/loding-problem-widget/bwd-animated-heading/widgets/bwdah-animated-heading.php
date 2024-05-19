<?php
namespace BWDAHAnimatedHeading\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDAHAnimatedHeadingWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWD Animated Heading', 'bwdah-animated-heading');
	}
	public function get_title() {
		return esc_html__( 'BWD Animated Heading', 'bwdah-animated-heading');
	}
	public function get_icon() {
		return 'eicon-animated-headline bwdah-animated-heading';
	}
	public function get_categories() {
		return [ 'bwdah-animated-heading-category' ];
	}
	public function get_script_depends() {
		return [ 'bwdah-animated-heading-category' ];
	}
	public function get_keywords() {
		return [ 'animated-heading', 'bwd animated-heading', 'animated', 'heading', 'text' ];
	}
	protected function register_controls() {
     // animated heading layout control section start
		$this->start_controls_section(
			'bwdah_animated_heading_layout_section',
			[
				'label' => esc_html__( 'Animated Heading Layout', 'bwdah-animated-heading' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//all animation category
		$this->add_control(
			'bwdah_animation_category',
			[
				'label' => esc_html__( 'Animation Category', 'bwdah-animated-heading' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'split_text',
				'options' => [
					'split_text' => esc_html__( 'Split Text', 'bwdah-animated-heading'),
					'typing' => esc_html__( 'Typing', 'bwdah-animated-heading'),
					'scroll' => esc_html__( 'Scroll', 'bwdah-animated-heading'),
					'multiple_text' => esc_html__( 'Multiple Text', 'bwdah-animated-heading'),
				],
			]
		);
		// Split Text category
		$this->add_control(
			'bwdah_split_text_cate',
			[
				'label' => esc_html__( 'Split Text', 'bwdah-animated-heading' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'spl-1',
				'options' => [
					'spl-1' => esc_html__( 'Style 1', 'bwdah-animated-heading' ),
					'spl-2' => esc_html__( 'Style 2', 'bwdah-animated-heading' ),
					'spl-3' => esc_html__( 'Style 3', 'bwdah-animated-heading' ),
					'spl-4' => esc_html__( 'Style 4', 'bwdah-animated-heading' ),
					'spl-5' => esc_html__( 'Style 5', 'bwdah-animated-heading' ),
					'spl-6' => esc_html__( 'Style 6', 'bwdah-animated-heading' ),
					'spl-7' => esc_html__( 'Style 7', 'bwdah-animated-heading' ),
					'spl-8' => esc_html__( 'Style 8', 'bwdah-animated-heading' ),
					'spl-9' => esc_html__( 'Style 9', 'bwdah-animated-heading' ),
					'spl-10' => esc_html__( 'Style 10', 'bwdah-animated-heading' ),
					'spl-11' => esc_html__( 'Style 11', 'bwdah-animated-heading' ),
					'spl-12' => esc_html__( 'Style 12', 'bwdah-animated-heading' ),
					'spl-13' => esc_html__( 'Style 13', 'bwdah-animated-heading' ),
					'spl-14' => esc_html__( 'Style 14', 'bwdah-animated-heading' ),
				],
				'condition' => [
					'bwdah_animation_category' => 'split_text'
				]
			]
		);
		// typing category
		$this->add_control(
			'bwdah_typing_cate',
			[
				'label' => esc_html__( 'Typing', 'bwdah-animated-heading' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'typ-1',
				'options' => [
					'typ-1' => esc_html__( 'Style 1', 'bwdah-animated-heading' ),
					'typ-2' => esc_html__( 'Style 2', 'bwdah-animated-heading' ),
				],
				'condition' => [
					'bwdah_animation_category' => 'typing'
				]
			]
		);
		// scroll category
		$this->add_control(
			'bwdah_scroll_cate',
			[
				'label' => esc_html__( 'Scroll', 'bwdah-animated-heading' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'srl-1',
				'options' => [
					'srl-1' => esc_html__( 'Style 1', 'bwdah-animated-heading' ),
					'srl-2' => esc_html__( 'Style 2', 'bwdah-animated-heading' ),
				],
				'condition' => [
					'bwdah_animation_category' => 'scroll'
				]
			]
		);
		// Text Animation Text category
		$this->add_control(
			'bwdah_multiple_text_cate',
			[
				'label' => esc_html__( 'Multiple Text', 'bwdah-animated-heading' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'mlt-1',
				'options' => [
					'mlt-1' => esc_html__( 'Style 1', 'bwdah-animated-heading' ),
					'mlt-2' => esc_html__( 'Style 2', 'bwdah-animated-heading' ),
					'mlt-3' => esc_html__( 'Style 3', 'bwdah-animated-heading' ),
					'mlt-4' => esc_html__( 'Style 4', 'bwdah-animated-heading' ),
					'mlt-5' => esc_html__( 'Style 5', 'bwdah-animated-heading' ),
					'mlt-6' => esc_html__( 'Style 6', 'bwdah-animated-heading' ),
					'mlt-7' => esc_html__( 'Style 7', 'bwdah-animated-heading' ),
					'mlt-8' => esc_html__( 'Style 8', 'bwdah-animated-heading' ),
					'mlt-9' => esc_html__( 'Style 9', 'bwdah-animated-heading' ),
					'mlt-10' => esc_html__( 'Style 10', 'bwdah-animated-heading' ),
					'mlt-11' => esc_html__( 'Style 11', 'bwdah-animated-heading' ),
					'mlt-12' => esc_html__( 'Style 12', 'bwdah-animated-heading' ),
					'mlt-13' => esc_html__( 'Style 13', 'bwdah-animated-heading' ),
				],
				'condition' => [
					'bwdah_animation_category' => 'multiple_text'
				]
			]
		);
		$this->end_controls_section();
		// content section ==========================
		$this->start_controls_section(
			'bwdah_animated_heading_content_section',
			[
				'label' => esc_html__( 'Heading Content', 'bwdah-animated-heading'),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//before text 
		$this->add_control(
			'bwdah_a_h_before_text',
			[
				'label' => esc_html__( 'Before Text', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hi Im', 'bwdah-animated-heading' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_animation_category!' => 'scroll'
				],
			]
		);
		//for single animation text
		$this->add_control(
			'bwdah_a_h_anim_singe_text', [
				'label' => esc_html__( 'Animating text', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Web Developer', 'bwdah-animated-heading' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_animation_category' => [ 'split_text', 'scroll' ],
				],
			]
		);
		//multiple animating text
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdah_a_h_anim_text', [
				'label' => esc_html__( 'Animating text', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//fetch repeater
		$this->add_control(
			'bwdah_a_h_anim_text_list',
			[
				'label' => esc_html__( 'Animating text', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
						'bwdah_a_h_anim_text' => esc_html__( 'Web Developer', 'bwdah-animated-heading' ),

						'bwdah_a_h_anim_text' => esc_html__( 'Graphic Designer', 'bwdah-animated-heading' ),

						'bwdah_a_h_anim_text' => esc_html__( 'Web Designer', 'bwdah-animated-heading' ),
				],
				'title_field' => '{{{ bwdah_a_h_anim_text }}}',
				'condition' => [
					'bwdah_animation_category' => [ 'typing', 'multiple_text' ],
				],
			]
		);
		//after text 
		$this->add_control(
			'bwdah_a_h_after_text',
			[
				'label' => esc_html__( 'After Text', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_animation_category!' => 'scroll'
				],
			]
		);
		//infinite loop
		$this->add_control(
			'bwdah_a_h_infinite_loop',
			[
				'label' => esc_html__( 'Infinite Loop', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'yes', 'bwdah-animated-heading' ),
				'label_off' => esc_html__( 'no', 'bwdah-animated-heading' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
				'condition' => [
					'bwdah_animation_category!' => 'scroll'
				],
			]
		);
		//speed 
		$this->add_control(
			'bwdah_a_h_speed',
			[
				'label' => esc_html__( 'Speed (ms)', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 50,
				'max' => 5000,
				'step' => 5,
				'default' => 150,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//delay 
		$this->add_control(
			'bwdah_a_h_delay',
			[
				'label' => esc_html__( 'Delay (ms)', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 200,
				'max' => 7000,
				'step' => 5,
				'default' => 1500,
				'separator' => 'after',
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_animation_category!' => 'scroll'
				],
			]
		);
		//link
		$this->add_control(
			'bwdah_a_h_link',
			[
				'label' => esc_html__( 'Link', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'yes', 'bwdah-animated-heading' ),
				'label_off' => esc_html__( 'no', 'bwdah-animated-heading' ),
				'return_value' => 'yes',
				'default' => 'no',
				'separator' => 'before',
				
			]
		);
		$this->add_control(
			'bwdah_a_h_link_url',
			[
				'label' => esc_html__( 'Link Url', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
				],
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_a_h_link' => 'yes'
				]
			]
		);
		$this->end_controls_section();
		//heading style section
		$this->start_controls_section(
			'bwdah_a_h_style_section',
			[
				'label' => esc_html__( 'Animated Heading Style', 'bwdah-animated-heading' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		//heading color
		$this->add_control(
			'bwdah_a_h_text_color',
			[
				'label' => esc_html__( 'Text Color', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdah-heading' => 'color: {{VALUE}}',
				],
			]
		);
		//heading typo
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdah_a_h_typo',
				'selector' => '{{WRAPPER}} .bwdah-heading,
				{{WRAPPER}} .bwdah-heading .bwdah-heading-inner-wrapper',
			]
		);
		//heading alignment
		$this->add_responsive_control(
			'bwdah_a_h_text_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdah-animated-heading' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdah-animated-heading' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdah-animated-heading' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'selectors' => [
					'{{WRAPPER}} .bwdah-heading' => 'text-align: {{VALUE}};'
				]
			]
		);
		//animating heading===========
		$this->add_control(
			'bwdah_a_h_anim_text_heading',
			[
				'label' => esc_html__( 'Animated Text', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//heading color
		$this->add_control(
			'bwdah_a_h_anim_text_color',
			[
				'label' => esc_html__( 'Text Color', 'bwdah-animated-heading' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdah-heading .bwdah-heading-inner,
					{{WRAPPER}} .bwdah-heading .bwdah-heading-inner-wrapper' => 'color: {{VALUE}}',

				],
			]
		);
		//heading typo
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdah_a_h_anim_typo',
				'selector' => '{{WRAPPER}} .bwdah-heading .bwdah-heading-inner,
				{{WRAPPER}} .bwdah-heading .bwdah-heading-inner span'
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings();
		$all_animation_cate = $settings['bwdah_animation_category'];
		$split_cate = $settings['bwdah_split_text_cate'];
		$typing_cate = $settings['bwdah_typing_cate'];
		$scroll_cate = $settings['bwdah_scroll_cate'];
		$multiple_cate = $settings['bwdah_multiple_text_cate'];
		$before_text = $settings['bwdah_a_h_before_text'];
		$animate_text_list = $settings['bwdah_a_h_anim_text_list'];
		$animate_single_text = $settings['bwdah_a_h_anim_singe_text'];
		$after_text = $settings['bwdah_a_h_after_text'];
		// animation timing
		$inf_loop = $settings['bwdah_a_h_infinite_loop'];
		$speed = $settings['bwdah_a_h_speed'];
		$delay = $settings['bwdah_a_h_delay'];
		$link = $settings['bwdah_a_h_link'];
		
		if($link === 'yes'){
			$link_url = $settings['bwdah_a_h_link_url']['url'];
		}
		//================ animated heading rendering start here===============
		if('split_text' === $all_animation_cate){
				?>

		 <div class="bwdcd-is-link-add"> 

			<div class="bwdah-animated-heading-<?php echo esc_attr__($split_cate,'bwdah-animated-heading')?> bwdah-heading bwdah-split-text">
			<div class="bwdcd-anim-timing-unit" hidden
			data-inf="<?php echo esc_attr__($inf_loop,'bwdah-animated-heading')?>"
			data-speed="<?php echo esc_attr__($speed,'bwdah-animated-heading')?>" 
			data-delay="<?php echo esc_attr__($delay,'bwdah-animated-heading')?>" 
			data-url="<?php echo esc_attr__($link_url,'bwdah-animated-heading')?>" 
			>
			</div>
				<div class="bwdah-animated-heading-before-text">
					<?php echo esc_html__($before_text,'bwdah-animated-heading')?>
				</div>

				<div class="bwdah-heading-inner">
					<?php echo esc_html__($animate_single_text,'bwdah-animated-heading') ?>
				</div>

				<div class="bwdah-animated-heading-after-text">
					<?php echo esc_html__($after_text,'bwdah-animated-heading')?>
				</div>

			</div>
		<div> 
				<?php
		}else if('typing' === $all_animation_cate){
				?>
			<div class="bwdah-animated-heading-<?php echo esc_attr__($typing_cate,'bwdah-animated-heading')?> bwdah-heading bwdah-typing-text">
				<div class="bwdcd-anim-timing-unit" hidden
				data-inf="<?php echo esc_attr__($inf_loop,'bwdah-animated-heading')?>"
				data-speed="<?php echo esc_attr__($speed,'bwdah-animated-heading')?>" 
				data-delay="<?php echo esc_attr__($delay,'bwdah-animated-heading')?>" 
				data-url="<?php echo esc_attr__($link_url,'bwdah-animated-heading')?>" 
				>
				</div>
				<div class="bwdah-animated-heading-before-text">
					<?php echo esc_html__($before_text,'bwdah-animated-heading')?>
				</div>
				<div class="bwdah-heading-inner-wrapper">
					<?php
						if($animate_text_list){
							foreach($animate_text_list as $item){
								?>
								<div class="bwdah-heading-inner elementor-repeater-item-<?php esc_attr($item['_id'] ) ?>">
										<?php echo esc_html__($item['bwdah_a_h_anim_text'],'bwdah-animated-heading') ?>
								</div>
								<?php
							}
						}
					?>
				</div>
				<div class="bwdah-animated-heading-after-text">
					<?php echo esc_html__($after_text,'bwdah-animated-heading')?>
				</div>
			</div>
				<?php
		}else if('scroll' === $all_animation_cate){
				?>
			<div class="bwdah-animated-heading-<?php echo esc_attr__($scroll_cate,'bwdah-animated-heading')?> bwdah-heading bwdah-scroll">
				<div class="bwdcd-anim-timing-unit" hidden
				data-speed="<?php echo esc_attr__($speed,'bwdah-animated-heading')?>" 
				data-url="<?php echo esc_attr__($link_url,'bwdah-animated-heading')?>" 
				>
				</div>
				<div class="bwdah-heading-inner">
					<?php echo esc_html__($animate_single_text,'bwdah-animated-heading') ?>
				</div>
			</div>
				<?php
		}else if('multiple_text' === $all_animation_cate){
				?>
			<div class="bwdah-animated-heading-<?php echo esc_attr__($multiple_cate,'bwdah-animated-heading')?> bwdah-heading bwdah-multiple-text">
				<div class="bwdcd-anim-timing-unit" hidden
				data-inf="<?php echo esc_attr__($inf_loop,'bwdah-animated-heading')?>"
				data-speed="<?php echo esc_attr__($speed,'bwdah-animated-heading')?>" 
				data-delay="<?php echo esc_attr__($delay,'bwdah-animated-heading')?>" 
				data-url="<?php echo esc_attr__($link_url,'bwdah-animated-heading')?>" 
				>
				</div>
				<div class="bwdah-animated-heading-before-text">
					<?php echo esc_html__($before_text,'bwdah-animated-heading')?>
				</div>
				<div class="bwdah-heading-inner-wrapper">
				<?php
					if($animate_text_list){
						foreach($animate_text_list as $item){
							?>
							<div class="bwdah-heading-inner elementor-repeater-item-<?php esc_attr($item['_id'] ) ?>">
									<?php echo esc_html__($item['bwdah_a_h_anim_text'],'bwdah-animated-heading') ?>
								</div>
							<?php
						}
					}
				?>
				</div>
				<div class="bwdah-animated-heading-after-text">
					<?php echo esc_html__($after_text,'bwdah-animated-heading')?>
				</div>
			</div>
				<?php
		}
	}
}
?>

