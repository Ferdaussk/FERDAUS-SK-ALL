<?php
namespace Creativemasking\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDMEmasking extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameMaskingEffects', 'bwd-masking-effects' );
	}

	public function get_title() {
		return esc_html__( 'BWD Masking Effects', 'elementor' );
	}

	public function get_icon() {
		return 'bwdme-masking-icon eicon-theme-style';
	}

	public function get_categories() {
		return [ 'bwd-masking-effects-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-masking-effects-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdme_masking_content_section',
			[
				'label' => esc_html__( 'Masking Content', 'bwd-masking-effects' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdme_style_selection',
			[
				'label' => esc_html__( 'Masking Styles', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-masking-effects' ),
					'style2' => esc_html__( 'Style 2', 'bwd-masking-effects' ),
					'style3' => esc_html__( 'Style 3', 'bwd-masking-effects' ),
					'style4' => esc_html__( 'Style 4', 'bwd-masking-effects' ),
					'style5' => esc_html__( 'Style 5', 'bwd-masking-effects' ),
					'style6' => esc_html__( 'Style 6', 'bwd-masking-effects' ),
					'style7' => esc_html__( 'Style 7', 'bwd-masking-effects' ),
					'style8' => esc_html__( 'Style 8', 'bwd-masking-effects' ),
					'style9' => esc_html__( 'Style 9', 'bwd-masking-effects' ),
					'style10' => esc_html__( 'Style 10', 'bwd-masking-effects' ),
					'style11' => esc_html__( 'Style 11', 'bwd-masking-effects' ),
					'style12' => esc_html__( 'Style 12', 'bwd-masking-effects' ),
					'style13' => esc_html__( 'Style 13', 'bwd-masking-effects' ),
					'style14' => esc_html__( 'Style 14', 'bwd-masking-effects' ),
					'style15' => esc_html__( 'Style 15', 'bwd-masking-effects' ),
					'style16' => esc_html__( 'Style 16', 'bwd-masking-effects' ),
					'style17' => esc_html__( 'Style 17', 'bwd-masking-effects' ),
					'style18' => esc_html__( 'Style 18', 'bwd-masking-effects' ),
					'style19' => esc_html__( 'Style 19', 'bwd-masking-effects' ),
					'style20' => esc_html__( 'Style 20', 'bwd-masking-effects' ),
					'style21' => esc_html__( 'Style 21', 'bwd-masking-effects' ),
					'style22' => esc_html__( 'Style 22', 'bwd-masking-effects' ),
					'style23' => esc_html__( 'Style 23', 'bwd-masking-effects' ),
					'style24' => esc_html__( 'Style 24', 'bwd-masking-effects' ),
					'style25' => esc_html__( 'Style 25', 'bwd-masking-effects' ),
					'style26' => esc_html__( 'Style 26', 'bwd-masking-effects' ),
					'style27' => esc_html__( 'Style 27', 'bwd-masking-effects' ),
					'style28' => esc_html__( 'Style 28', 'bwd-masking-effects' ),
					'style29' => esc_html__( 'Style 29', 'bwd-masking-effects' ),
					'style30' => esc_html__( 'Style 30', 'bwd-masking-effects' ),
					'style31' => esc_html__( 'Style 31', 'bwd-masking-effects' ),
					'style32' => esc_html__( 'Style 32', 'bwd-masking-effects' ),
					'style33' => esc_html__( 'Style 33', 'bwd-masking-effects' ),
					'style34' => esc_html__( 'Style 34', 'bwd-masking-effects' ),
					'style35' => esc_html__( 'Style 35', 'bwd-masking-effects' ),
					'style36' => esc_html__( 'Style 36', 'bwd-masking-effects' ),
					'style37' => esc_html__( 'Style 37', 'bwd-masking-effects' ),
					'style38' => esc_html__( 'Style 38', 'bwd-masking-effects' ),
					'style39' => esc_html__( 'Style 39', 'bwd-masking-effects' ),
					'style40' => esc_html__( 'Style 40', 'bwd-masking-effects' ),
					'style41' => esc_html__( 'Style 41', 'bwd-masking-effects' ),
					'style42' => esc_html__( 'Style 42', 'bwd-masking-effects' ),
					'style43' => esc_html__( 'Style 43', 'bwd-masking-effects' ),
					'style44' => esc_html__( 'Style 44', 'bwd-masking-effects' ),
					'style45' => esc_html__( 'Style 45', 'bwd-masking-effects' ),
					'style46' => esc_html__( 'Style 46', 'bwd-masking-effects' ),
					'style47' => esc_html__( 'Style 47', 'bwd-masking-effects' ),
					'style48' => esc_html__( 'Style 48', 'bwd-masking-effects' ),
					'style49' => esc_html__( 'Style 49', 'bwd-masking-effects' ),
					'style50' => esc_html__( 'Style 50', 'bwd-masking-effects' ),
					'style51' => esc_html__( 'Style 51', 'bwd-masking-effects' ),
					'style52' => esc_html__( 'Style 52', 'bwd-masking-effects' ),
					'style53' => esc_html__( 'Style 53', 'bwd-masking-effects' ),
					'style54' => esc_html__( 'Style 54', 'bwd-masking-effects' ),
					'style55' => esc_html__( 'Style 55', 'bwd-masking-effects' ),
					'style56' => esc_html__( 'Style 56', 'bwd-masking-effects' ),
					'style57' => esc_html__( 'Style 57', 'bwd-masking-effects' ),
					'style58' => esc_html__( 'Style 58', 'bwd-masking-effects' ),
					'style59' => esc_html__( 'Style 59', 'bwd-masking-effects' ),
					'style60' => esc_html__( 'Style 60', 'bwd-masking-effects' ),
					'style61' => esc_html__( 'Style 61', 'bwd-masking-effects' ),
					'style62' => esc_html__( 'Style 62', 'bwd-masking-effects' ),
					'style63' => esc_html__( 'Style 63', 'bwd-masking-effects' ),
					'style64' => esc_html__( 'Style 64', 'bwd-masking-effects' ),
					'style65' => esc_html__( 'Style 65', 'bwd-masking-effects' ),
					'style66' => esc_html__( 'Style 66', 'bwd-masking-effects' ),
					'style67' => esc_html__( 'Style 67', 'bwd-masking-effects' ),
					'style68' => esc_html__( 'Style 68', 'bwd-masking-effects' ),
					'style69' => esc_html__( 'Style 69', 'bwd-masking-effects' ),
					'style70' => esc_html__( 'Style 70', 'bwd-masking-effects' ),
					'style71' => esc_html__( 'Style 71', 'bwd-masking-effects' ),
					'custom_svg' => esc_html__( 'Custom', 'bwd-masking-effects' ),
				],
			]
		);
        $this->add_control(
			'bwdme_masking_custom_musking_image',
			[
				'label' => esc_html__( 'Masking SVG', 'bwd-masking-effects' ),
				'type' => Controls_Manager::MEDIA,
                'media_types' => ['svg'],
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bwdme_style_selection' => 'custom_svg',
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_masking_width',
			[
				'label' => esc_html__( 'Width', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px', 'rem', 'em', 'vh'],
                'default' => [
                    'unit' => '%',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-svg-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_masking_min_height',
			[
				'label' => esc_html__( 'Height', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
                'default' => [
                    'unit' => 'vh',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-svg-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdme_masking_margin',
			[
				'label' => esc_html__( 'Masking Margin', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-masking-effects' ),
					'auto' => esc_html__( 'Auto', 'bwd-masking-effects' ),
				],
			]
		);
		$this->add_control(
			'bwdme_masking_position',
			[
				'label' => esc_html__( 'Masking Position', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-masking-effects' ),
					'center' => esc_html__( 'Center', 'bwd-masking-effects' ),
					'top' => esc_html__( 'Top', 'bwd-masking-effects' ),
					'bottom' => esc_html__( 'Bottom', 'bwd-masking-effects' ),
					'left' => esc_html__( 'Left', 'bwd-masking-effects' ),
					'right' => esc_html__( 'Right', 'bwd-masking-effects' ),
				],
			]
		);
		$this->add_control(
			'bwdme_masking_size',
			[
				'label' => esc_html__( 'Masking Size', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-masking-effects' ),
					'auto' => esc_html__( 'Auto', 'bwd-masking-effects' ),
					'contain' => esc_html__( 'Contain', 'bwd-masking-effects' ),
					'cover' => esc_html__( 'Cover', 'bwd-masking-effects' ),
				],
			]
		);
		$this->add_control(
			'bwdme_masking_repeat_mask',
			[
				'label' => esc_html__( 'Masking Repeat', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-masking-effects' ),
					'repeat' => esc_html__( 'Repeat', 'bwd-masking-effects' ),
					'no-repeat' => esc_html__( 'No-Repeat', 'bwd-masking-effects' ),
					'repeat-x' => esc_html__( 'Repeat-x', 'bwd-masking-effects' ),
					'repeat-y' => esc_html__( 'Repeat-y', 'bwd-masking-effects' ),
					'round' => esc_html__( 'Round', 'bwd-masking-effects' ),
					'space' => esc_html__( 'Space', 'bwd-masking-effects' ),
				],
			]
		);
		$this->end_controls_section();

		
		$this->start_controls_section(
			'bwdme_background_content_section',
			[
				'label' => esc_html__( 'Background Content', 'bwd-masking-effects' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdme_masking_image',
			[
				'label' => esc_html__( 'Choose Background', 'bwd-masking-effects' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_background_width',
			[
				'label' => esc_html__( 'Width', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px', 'rem', 'em', 'vh'],
                'default' => [
                    'unit' => '%',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-bg-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_background_min_height',
			[
				'label' => esc_html__( 'Height', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
                'default' => [
                    'unit' => 'vh',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-bg-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdme_background_margin',
			[
				'label' => esc_html__( 'Background Margin', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-masking-effects' ),
					'auto' => esc_html__( 'Auto', 'bwd-masking-effects' ),
				],
			]
		);
		$this->add_control(
			'bwdme_background_position',
			[
				'label' => esc_html__( 'Background Position', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-masking-effects' ),
					'center' => esc_html__( 'Center', 'bwd-masking-effects' ),
					'top' => esc_html__( 'Top', 'bwd-masking-effects' ),
					'bottom' => esc_html__( 'Bottom', 'bwd-masking-effects' ),
					'left' => esc_html__( 'Left', 'bwd-masking-effects' ),
					'right' => esc_html__( 'Right', 'bwd-masking-effects' ),
				],
			]
		);
		$this->add_control(
			'bwdme_background_size',
			[
				'label' => esc_html__( 'Background Size', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-masking-effects' ),
					'auto' => esc_html__( 'Auto', 'bwd-masking-effects' ),
					'contain' => esc_html__( 'Contain', 'bwd-masking-effects' ),
					'cover' => esc_html__( 'Cover', 'bwd-masking-effects' ),
				],
			]
		);
		$this->add_control(
			'bwdme_background_repeat_masking',
			[
				'label' => esc_html__( 'Background Repeat', 'bwd-masking-effects' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-masking-effects' ),
					'repeat' => esc_html__( 'Repeat', 'bwd-masking-effects' ),
					'no-repeat' => esc_html__( 'No-Repeat', 'bwd-masking-effects' ),
					'repeat-x' => esc_html__( 'Repeat-x', 'bwd-masking-effects' ),
					'repeat-y' => esc_html__( 'Repeat-y', 'bwd-masking-effects' ),
					'round' => esc_html__( 'Round', 'bwd-masking-effects' ),
					'space' => esc_html__( 'Space', 'bwd-masking-effects' ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdme_masking_style_section',
			[
				'label' => esc_html__( 'Masking Style', 'bwd-masking-effects' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
            'bwdme_masking_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-masking-effects'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdme-svg-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdme_masking_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-masking-effects'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdme-svg-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
	}
}
