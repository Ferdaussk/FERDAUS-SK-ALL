<?php
namespace DualButtons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDDBDualButtons extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameDualButtons', 'bwd-dual-buttons' );
	}

	public function get_title() {
		return esc_html__( 'BWD Dual Buttons', 'elementor' );
	}

	public function get_icon() {
		return 'bwddb-button-icon eicon-dual-button';
	}

	public function get_categories() {
		return [ 'bwd-dual-buttons-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-dual-buttons-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwddb_buttons_content_section',
			[
				'label' => esc_html__( 'Buttons Settings', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwddb_style_selectionsk',
			[
				'label' => esc_html__( 'Button Styles', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-dual-buttons' ),
					'style2' => esc_html__( 'Style 2', 'bwd-dual-buttons' ),
					'style3' => esc_html__( 'Style 3', 'bwd-dual-buttons' ),
					'style4' => esc_html__( 'Style 4', 'bwd-dual-buttons' ),
					'style5' => esc_html__( 'Style 5', 'bwd-dual-buttons' ),
					'style6' => esc_html__( 'Style 6', 'bwd-dual-buttons' ),
					'style7' => esc_html__( 'Style 7', 'bwd-dual-buttons' ),
					'style8' => esc_html__( 'Style 8', 'bwd-dual-buttons' ),
				],
			]
		);
		$this->add_control(
			'bwddb_show_buttons_switchersk',
			[
				'label' => esc_html__( 'Show/Hide', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'bwddb-default',
				'options' => [
					'bwddb-default' => esc_html__( 'Default', 'bwd-dual-buttons' ),
					'bwddb-hide-left' => esc_html__( 'Hide Left', 'bwd-dual-buttons' ),
					'bwddb-hide-right' => esc_html__( 'Hide Right', 'bwd-dual-buttons' ),
				],
			]
		);
		$this->add_control(
			'bwddb_first_alignment_buttonssk',
			[
				'label' => esc_html__( 'Alignment', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'bwddb-center',
				'options' => [
					'bwddb-left' => [
						'title' => esc_html__( 'Left', 'bwd-dual-buttons' ),
						'icon' => 'eicon-text-align-left',
					],
					'bwddb-center' => [
						'title' => esc_html__( 'Center', 'bwd-dual-buttons' ),
						'icon' => 'eicon-text-align-center',
					],
					'bwddb-right' => [
						'title' => esc_html__( 'Right', 'bwd-dual-buttons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->end_controls_section();

		// Right Button
		$this->start_controls_section(
			'bwddb_first_buttons_content_sectionsk',
			[
				'label' => esc_html__( 'Left Button Content', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwddb_show_buttons_switchersk' => ['bwddb-default', 'bwddb-hide-left'],
				],
			]
		);
		$this->add_control(
			'bwddb_first_text_buttonssk1', [
				'label' => esc_html__( 'Text', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here L' , 'bwd-dual-buttons' ),
				'label_block' => true,
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwddb_first_buttons_content_sectionsk2',
			[
				'label' => esc_html__( 'Right Button Content', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwddb_show_buttons_switchersk' => ['bwddb-default', 'bwddb-hide-right'],
				],
			]
		);
		$this->add_control(
			'bwddb_first_text_buttonssk2', [
				'label' => esc_html__( 'Text', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here R' , 'bwd-dual-buttons' ),
				'label_block' => true,
			]
		);
		$this->end_controls_section();

        // Ferdaussk
        $this->start_controls_section(
			'bwddb_secound_buttons_style_section1',
			[
				'label' => esc_html__( 'Left Buttons Style', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwddb_show_buttons_switchersk' => ['bwddb-default', 'bwddb-hide-left'],
				],
			]
		);
        $this->add_control(
			'bwddb_first_text_color1', [
				'label' => esc_html__( 'Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#fff',
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
			'bwddb_secound_buttons_style_section2',
			[
				'label' => esc_html__( 'Right Buttons Style', 'bwd-dual-buttons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwddb_show_buttons_switchersk' => ['bwddb-default', 'bwddb-hide-right'],
				],
			]
		);
        $this->add_control(
			'bwddb_first_text_color2', [
				'label' => esc_html__( 'Color', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#fff',
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
        if('style1' === $settings['bwddb_style_selectionsk']){
            if('bwddb-hide-left' === $settings['bwddb_show_buttons_switchersk']){
            echo esc_html($settings['bwddb_first_text_buttonssk1']);
            } elseif('bwddb-hide-right' === $settings['bwddb_show_buttons_switchersk']){
                echo esc_html($settings['bwddb_first_text_buttonssk2']);
            } else{
                echo esc_html($settings['bwddb_first_text_buttonssk1']);
                echo esc_html($settings['bwddb_first_text_buttonssk2']);
            }
        } elseif('style2' === $settings['bwddb_style_selectionsk']){
            echo esc_html($settings['bwddb_first_text_buttonssk2']);
        } elseif('style3' === $settings['bwddb_style_selectionsk']){
            echo esc_html($settings['bwddb_first_text_buttonssk3']);
        } elseif('style4' === $settings['bwddb_style_selectionsk']){
            echo esc_html($settings['bwddb_first_text_buttonssk4']);
        } elseif('style5' === $settings['bwddb_style_selectionsk']){
            echo esc_html($settings['bwddb_first_text_buttonssk5']);
        }
	}

}
