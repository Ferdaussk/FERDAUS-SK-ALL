<?php
namespace FFBWDFFlipBox\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDTeamFlipBox extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameTeamFlipFlop', 'bwd-flip-flop' );
	}

	public function get_title() {
		return esc_html__( 'Team Flip Flop', 'bwd-flip-flop' );
	}

	public function get_icon() {
		return 'bwdff-flipflop-icon eicon-person';
	}

	public function get_categories() {
		return [ 'bwd-flip-flop-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-flip-flop-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdff_text_content_section',
			[
				'label' => esc_html__( 'Team Content', 'bwd-flip-flop' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdff_style_selection',
			[
				'label' => esc_html__( 'Team Style', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwd-flip-flop' ),
					'style2' => esc_html__( 'Style 2', 'bwd-flip-flop' ),
					'style3' => esc_html__( 'Style 3', 'bwd-flip-flop' ),
					'style4' => esc_html__( 'Style 4', 'bwd-flip-flop' ),
					'style5' => esc_html__( 'Style 5', 'bwd-flip-flop' ),
					'style6' => esc_html__( 'Style 6', 'bwd-flip-flop' ),
					'style7' => esc_html__( 'Style 7', 'bwd-flip-flop' ),
					'style8' => esc_html__( 'Style 8', 'bwd-flip-flop' ),
					'style9' => esc_html__( 'Style 9', 'bwd-flip-flop' ),
					'style10' => esc_html__( 'Style 10', 'bwd-flip-flop' ),
				],
			]
		);
		$this->add_control(
			'bwdff_team_box_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => esc_html__( 'Left', 'bwd-flip-flop' ),
					'center'  => esc_html__( 'Center', 'bwd-flip-flop' ),
					'right' => esc_html__( 'Right', 'bwd-flip-flop' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdff_team__the_social_icon_size',
			[
				'label' => esc_html__( 'Social Icon Size', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdff_social_media_one' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdff_social_media_two' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdff_social_media_three' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdff_social_media_four' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdff_team_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdff_box_name', [
				'label' => esc_html__( 'Name', 'bwd-flip-flop' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'JHON DOE' , 'bwd-flip-flop' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdff_box_name_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-name' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_box_name_shadow', [
				'label' => esc_html__( 'Name Shadow', 'bwd-flip-flop' ),
				'type' => Controls_Manager::TEXT_SHADOW,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-name, {{SELECTOR}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-name' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_box_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-name',
			]
		);
		
		$repeater->add_control(
			'bwdff_team_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_box_designation', [
				'label' => esc_html__( 'Designation', 'bwd-flip-flop' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Web Developer' , 'bwd-flip-flop' ),
				'show_label' => false,
			]
		);
		$repeater->add_control(
			'bwdff_box_designation_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-post, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-post' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_box_designation_shadow', [
				'label' => esc_html__( 'Designation Shadow', 'bwd-flip-flop' ),
				'type' => Controls_Manager::TEXT_SHADOW,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-post, {{SELECTOR}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-post' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_box_designation_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-post, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-post',
			]
		);

		$repeater->add_control(
			'bwdff_team_c',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_team_profile_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-flip-flop' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$repeater->add_control(
			'bwdff_box_profile_background_color',
			[
				'label' => esc_html__( 'Profile Background', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-team-img' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-team-img' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-team-img' => 'box-shadow: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-team-img' => 'border-color: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'bwdff_team_d',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_social_icon_one_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-flip-flop' ),
				'label_off' => esc_html__( 'Hide', 'bwd-flip-flop' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one',
			[
				'label' => esc_html__( 'Icon', 'bwd-flip-flop' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'condition' => [
					'bwdff_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_team_icon_type_one',
			[
				'label' => esc_html__( 'Color Type', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-flip-flop' ),
					'custom'  => esc_html__( 'Custom', 'bwd-flip-flop' ),
				],
				'condition' => [
					'bwdff_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#3b5998',
				'condition' => [
					'bwdff_team_icon_type_one' => 'official',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  .bwdff_social_media_one, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_one' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-flip-flop' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_one' => 'official',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-flip-flop' ),
				'default' => [
					'url' => 'www.facebook.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_color',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_one' => 'custom',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  .bwdff_social_media_one, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_one' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_one' => 'custom',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  .bwdff_social_media_one, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_one:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_link',
			[
				'label' => esc_html__( 'Link', 'bwd-flip-flop' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_one' => 'custom',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-flip-flop' ),
				'default' => [
					'url' => 'www.facebook.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'bwdff_team_e',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_social_icon_two_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-flip-flop' ),
				'label_off' => esc_html__( 'Hide', 'bwd-flip-flop' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two',
			[
				'label' => esc_html__( 'Icon', 'bwd-flip-flop' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-twitter',
					'library' => 'solid',
				],
				'condition' => [
					'bwdff_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_team_icon_type_two',
			[
				'label' => esc_html__( 'Color Type', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-flip-flop' ),
					'custom'  => esc_html__( 'Custom', 'bwd-flip-flop' ),
				],
				'condition' => [
					'bwdff_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#00acee',
				'condition' => [
					'bwdff_team_icon_type_two' => 'official',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_two' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-flip-flop' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_two' => 'official',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-flip-flop' ),
				'default' => [
					'url' => 'www.twitter.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_color',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_two' => 'custom',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_two' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_two' => 'custom',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_two:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_link',
			[
				'label' => esc_html__( 'Link', 'bwd-flip-flop' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_two' => 'custom',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-flip-flop' ),
				'default' => [
					'url' => 'www.twitter.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'bwdff_team_f',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_social_icon_three_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-flip-flop' ),
				'label_off' => esc_html__( 'Hide', 'bwd-flip-flop' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three',
			[
				'label' => esc_html__( 'Icon', 'bwd-flip-flop' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-linkedin-in',
					'library' => 'solid',
				],
				'condition' => [
					'bwdff_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_team_icon_type_three',
			[
				'label' => esc_html__( 'Color Type', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-flip-flop' ),
					'custom'  => esc_html__( 'Custom', 'bwd-flip-flop' ),
				],
				'condition' => [
					'bwdff_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#0077b5',
				'condition' => [
					'bwdff_team_icon_type_three' => 'official',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_three' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-flip-flop' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_three' => 'official',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-flip-flop' ),
				'default' => [
					'url' => 'www.linkedin.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_color',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_three' => 'custom',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_three' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_three' => 'custom',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_three:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_link',
			[
				'label' => esc_html__( 'Link', 'bwd-flip-flop' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_three' => 'custom',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-flip-flop' ),
				'default' => [
					'url' => 'www.linkedin.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'bwdff_team_g',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_social_icon_four_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-flip-flop' ),
				'label_off' => esc_html__( 'Hide', 'bwd-flip-flop' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four',
			[
				'label' => esc_html__( 'Icon', 'bwd-flip-flop' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-instagram',
					'library' => 'solid',
				],
				'condition' => [
					'bwdff_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_team_icon_type_four',
			[
				'label' => esc_html__( 'Color Type', 'bwd-flip-flop' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-flip-flop' ),
					'custom'  => esc_html__( 'Custom', 'bwd-flip-flop' ),
				],
				'condition' => [
					'bwdff_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'default' => 'red',
				'condition' => [
					'bwdff_team_icon_type_four' => 'official',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_four' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-flip-flop' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_four' => 'official',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-flip-flop' ),
				'default' => [
					'url' => 'www.instagram.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_color',
			[
				'label' => esc_html__( 'Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_four' => 'custom',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_four' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_four' => 'custom',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_four:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_link',
			[
				'label' => esc_html__( 'Link', 'bwd-flip-flop' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_four' => 'custom',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-flip-flop' ),
				'default' => [
					'url' => 'www.instagram.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'bwdff_team_h',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_box_icon_background_color',
			[
				'label' => esc_html__( 'Icon Background', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  .bwdff_social_media_one, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons a i, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons a' => 'background: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'bwdff_box_icon_hover_background_color',
			[
				'label' => esc_html__( 'Hover Background', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  .bwdff_social_media_one, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons a i:hover' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons a:hover' => 'background-color: {{VALUE}}'
				],
			]
		);


		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_team_icon_box_style_tabs01'
		);
		$repeater->start_controls_tab(
			'bwd_team_icon_box_background_normal_tab01',
			[
				'label' => esc_html__( 'Font View', 'bwd-flip-flop' ),
			]
		);
		// Normal Controls
		$repeater->add_control(
			'bwdff_icon_bg_shape_color',
			[
				'label' => esc_html__( 'Shape Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-member-post, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_icon_bg_another_shape_color',
			[
				'label' => esc_html__( 'Another Shape', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'box-shadow: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_team_box_background',
				'label' => esc_html__( 'Background', 'bwd-flip-flop' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-member-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio::before',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab01',
			[
				'label' => esc_html__( 'Back View', 'bwd-flip-flop' ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'bwdff_icon_back_bg_shape_color',
			[
				'label' => esc_html__( 'Shape Color', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-member-post, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item:hover .bwdff-team-back .bwdff-team-img, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_icon_back_bg_another_shape_color',
			[
				'label' => esc_html__( 'Another Shape', 'bwd-flip-flop' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.bwdff-team-item .bwdff-team-back .bwdff-team-back-content::after' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_team_back_box_background',
				'label' => esc_html__( 'Background', 'bwd-flip-flop' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-member-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$this->add_control(
			'bwdff_box',
			[
				'label' => esc_html__( 'Meet The Team', 'bwd-flip-flop' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdff_box_title' => esc_html__( 'Title #1', 'bwd-flip-flop' ),
					],
					[
						'bwdff_box_title' => esc_html__( 'Title #2', 'bwd-flip-flop' ),
					],
					[
						'bwdff_box_title' => esc_html__( 'Title #3', 'bwd-flip-flop' ),
					],
					[
						'bwdff_box_title' => esc_html__( 'Title #4', 'bwd-flip-flop' ),
					],
				],
				'title_field' => `{{{ bwdff_box_title }}}`,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdff_team_style_section',
			[
				'label' => esc_html__( 'Team Style', 'bwd-flip-flop' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_team_box_background',
				'label' => esc_html__( 'Background', 'bwd-flip-flop' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdff-team-1',
			]
		);
		$this->add_responsive_control(
            'bwdff_team_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-flip-flop'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-team-1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdff_team_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-flip-flop'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-team-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if('style1' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-1">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
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
		} elseif('style2' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-2">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
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
		} elseif('style3' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-3">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
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
		} elseif('style4' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-4">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-4 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-img">
									<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
								</div>
								<div class="bwdff-team-back-content">
									<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
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
		} elseif('style5' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-5">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
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
		} elseif('style6' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-6">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-member-bio">
										<div class="bwdff-team-img">
											<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
										</div>
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-member-bio">
										<div class="bwdff-team-img">
											<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
										</div>
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
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
		} elseif('style7' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-7">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-member-bio">
										<div class="bwdff-team-img">
											<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
										</div>
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
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
		} elseif('style8' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-8">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<div class="bwdff-img-wrapper"><img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>"
												alt="img one"></div>
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<div class="bwdff-img-wrapper"><img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>"
												alt="img one"></div>
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
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
		} elseif('style9' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-9">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<div class="bwdff-img-wrapper"><img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>"
												alt="img one"></div>
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
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
		} elseif('style10' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-10">
			<div class="container">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<div class="bwdff-img-wrapper"><img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>"
												alt="img one"></div>
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
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
	}

	protected function content_template() {
		?>
		<# if('style1' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-1">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}}</div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
										<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style2' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-2">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}}</div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}} </div>
										<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style3' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-3">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}}</div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}} </div>
										<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style4' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-4">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-4 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-img">
									<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
								</div>
								<div class="bwdff-team-back-content">
									<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"> {{{item['bwdff_box_name']}}}</div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}} </div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style5' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-5">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name"> {{{item['bwdff_box_name']}}}</div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}} </div>
										<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style6' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-6">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-member-bio">
										<div class="bwdff-team-img">
											<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
										</div>
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-member-bio">
										<div class="bwdff-team-img">
											<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
										</div>
										<div class="bwdff-member-name"> {{{item['bwdff_box_name']}}}</div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}} </div>
										<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style7' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-7">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-member-bio">
										<div class="bwdff-team-img">
											<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
										</div>
										<div class="bwdff-member-name"> {{{item['bwdff_box_name']}}}</div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}} </div>
										<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style8' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-8">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<div class="bwdff-img-wrapper"><img src="{{{item['bwdff_team_profile_image']['url']}}}"
												alt="img one"></div>
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<div class="bwdff-img-wrapper"><img src="{{{item['bwdff_team_profile_image']['url']}}}"
												alt="img one"></div>
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
										<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style9' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-9">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<div class="bwdff-img-wrapper"><img src="{{{item['bwdff_team_profile_image']['url']}}}"
												alt="img one"></div>
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
										<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } else if('style10' === settings['bwdff_style_selection']){ #>
		<div class="bwdff-team-10">
			<div class="container">
				<# if('left' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-start">
				<# } else if('center' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-center">
				<# } else if('right' === settings['bwdff_team_box_align']){ #> 
				<div class="bwdff-team-wrapper row justify-content-end"> <# } #>
				<# if ( settings.bwdff_box.length ) { #>
					<# _.each( settings.bwdff_box, function( item ) { #>
					<div class="col-sm-6 col-lg-4 col-xl-3 elementor-repeater-item-{{ item._id }}">
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content">
									<div class="bwdff-team-img">
										<img src="{{{item['bwdff_team_profile_image']['url']}}}" alt="img one">
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
									</div>
								</div>
							</div>
							<div class="bwdff-team-back">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<div class="bwdff-img-wrapper"><img src="{{{item['bwdff_team_profile_image']['url']}}}"
												alt="img one"></div>
									</div>
									<div class="bwdff-member-bio">
										<div class="bwdff-member-name">{{{item['bwdff_box_name']}}} </div>
										<div class="bwdff-member-post">{{{item['bwdff_box_designation']}}}</div>
										<div class="bwdff-social-icons">
											<# if('yes' === item['bwdff_social_icon_one_switcher']){ #><a href="{{ item.bwdff_social_icon_one_link.url }}"><i class="bwdff_social_media_one {{{item['bwdff_social_icon_one']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_two_switcher']){ #><a href="{{ item.bwdff_social_icon_two_link.url }}"><i class="bwdff_social_media_two {{{item['bwdff_social_icon_two']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_three_switcher']){ #><a href="{{ item.bwdff_social_icon_three_link.url }}"><i class="bwdff_social_media_three {{{item['bwdff_social_icon_three']['value']}}}"></i></a> <# } #>
											<# if('yes' === item['bwdff_social_icon_four_switcher']){ #><a href="{{ item.bwdff_social_icon_four_link.url }}"><i class="bwdff_social_media_four {{{item['bwdff_social_icon_four']['value']}}}"></i></a> <# } #>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<# }); #>
					<# } #>
				</div>
			</div>
		</div>
		<# } #>
		<?php
	}
}
