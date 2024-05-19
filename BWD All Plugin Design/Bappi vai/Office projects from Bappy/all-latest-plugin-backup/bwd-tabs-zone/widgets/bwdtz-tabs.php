<?php
namespace CreativeTabZone\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDTZTabs extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameTabsZone', 'bwd-tabs-zone' );
	}

	public function get_title() {
		return esc_html__( 'BWD Tabs Zone', 'bwd-tabs-zone' );
	}

	public function get_icon() {
		return 'bwdtz-tabs-icon eicon-tabs';
	}

	public function get_categories() {
		return [ 'bwd-tabs-zone-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-tabs-zone-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdtz_tabs_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-tabs-zone' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bwdtz_tabs_zone_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwd-tabs-zone' ),
					'style2' => esc_html__( 'Style 2', 'bwd-tabs-zone' ),
					'style3' => esc_html__( 'Style 3', 'bwd-tabs-zone' ),
					'style4' => esc_html__( 'Style 4', 'bwd-tabs-zone' ),
					'style5' => esc_html__( 'Style 5', 'bwd-tabs-zone' ),
					'style6' => esc_html__( 'Style 6', 'bwd-tabs-zone' ),
					'style7' => esc_html__( 'Style 7', 'bwd-tabs-zone' ),
					'style8' => esc_html__( 'Style 8', 'bwd-tabs-zone' ),
					'style9' => esc_html__( 'Style 9', 'bwd-tabs-zone' ),
					'style10' => esc_html__( 'Style 10', 'bwd-tabs-zone' ),
					'style11' => esc_html__( 'Style 11', 'bwd-tabs-zone' ),
					'style12' => esc_html__( 'Style 12', 'bwd-tabs-zone' ),
					'style13' => esc_html__( 'Style 13', 'bwd-tabs-zone' ),
					'style14' => esc_html__( 'Style 14', 'bwd-tabs-zone' ),
					'style15' => esc_html__( 'Style 15', 'bwd-tabs-zone' ),
					'style16' => esc_html__( 'Style 16', 'bwd-tabs-zone' ),
					'style17' => esc_html__( 'Style 17', 'bwd-tabs-zone' ),
					'style18' => esc_html__( 'Style 18', 'bwd-tabs-zone' ),
					'style19' => esc_html__( 'Style 19', 'bwd-tabs-zone' ),
					'style20' => esc_html__( 'Style 20', 'bwd-tabs-zone' ),
					'style21' => esc_html__( 'Style 21', 'bwd-tabs-zone' ),
					'style22' => esc_html__( 'Style 22', 'bwd-tabs-zone' ),
					'style23' => esc_html__( 'Style 23', 'bwd-tabs-zone' ),
					'style24' => esc_html__( 'Style 24', 'bwd-tabs-zone' ),
					'style25' => esc_html__( 'Style 25', 'bwd-tabs-zone' ),
					'style26' => esc_html__( 'Style 26', 'bwd-tabs-zone' ),
					'style27' => esc_html__( 'Style 27', 'bwd-tabs-zone' ),
					'style28' => esc_html__( 'Style 28', 'bwd-tabs-zone' ),
					'style29' => esc_html__( 'Style 29', 'bwd-tabs-zone' ),
					'style30' => esc_html__( 'Style 30', 'bwd-tabs-zone' ),
					'style31' => esc_html__( 'Style 31', 'bwd-tabs-zone' ),
				],
			]
		);
		
		$this->end_controls_section(); 

		
		$this->start_controls_section(
			'bwdtz_tabs_item_and_info_content_section',
			[
				'label' => esc_html__( 'Items and Info', 'bwd-tabs-zone' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdtz_tab-items_heading',
			[
				'label' => esc_html__( 'Tab Items', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdtz_tabs_title_default', [
				'label' => esc_html__( 'Name', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Dev' , 'bwd-tabs-zone' ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'bwdtz_default_tabs_item_icon_switcher',
			[
				'label' => esc_html__( 'Item Icon', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_default_tabs_item_icon', 
			[
				'label' => esc_html__( 'Icon', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwdtz_default_tabs_item_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fas fa-award',
					'library' => 'solid',
				],
			]
		);
		// Hover control start
		$this->start_controls_tabs(
			'bwdtz_tabs_default_title_style_tabs'
		);
		$this->start_controls_tab(
			'bwdtz_tabs_default_title_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-tabs-zone' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdtz_box_default_title_name_color',
			[
				'label' => esc_html__( 'Colorrr', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-default-one-btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_title_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-default-one-btn' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_title_default_title_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-tabs-zone' ),
				'selector' => '{{WRAPPER}} .bwdtz-default-one-btn',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_default_title_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-default-one-btn',
			]
		);
		
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdtz_tabs_default_title_hover_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-tabs-zone' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdtz_box_def_active_default_title_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-nav-link.active-link, {{WRAPPER}} .bwdtz-items-active-color.active' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_def_active_default_title_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-nav-link.active-link, {{WRAPPER}} .bwdtz-items-active:before, {{WRAPPER}} .bwdtz-items-active:after' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz__def_active_title_default_title_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-tabs-zone' ),
				'selector' => '{{WRAPPER}} .bwdtz-nav-link.active-link, {{WRAPPER}} .bwdtz-items-active',
				'default' => [
					'color' => 'transparent',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box__def_active_default_title_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-nav-link.active-link, {{WRAPPER}} .bwdtz-items-active',
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdtz_tabs_title_id', [
				'label' => esc_html__( 'Name ID', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'bwdtztabs' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_title', [
				'label' => esc_html__( 'Name', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Web Developer' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_item_icon_switcher',
			[
				'label' => esc_html__( 'Item Icon', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_item_icon', 
			[
				'label' => esc_html__( 'Icon', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwdtz_tabs_item_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fas fa-award',
					'library' => 'solid',
				],
			]
		);

		// // Normal Controls
		// $repeater->add_control(
		// 	'bwdtz_box_normal_name_color',
		// 	[
		// 		'label' => esc_html__( 'Colortt', 'bwd-tabs-zone' ),
		// 		'type' => Controls_Manager::COLOR,
		// 		'selectors' => [
		// 			'{{WRAPPER}} .bwdtz-dynamic-one-btn' => 'color: {{VALUE}}',
		// 		],
		// 	]
		// );
		// $repeater->add_control(
		// 	'bwdtz_box_normal_profile_title_background_color',
		// 	[
		// 		'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
		// 		'type' => Controls_Manager::COLOR,
		// 		'selectors' => [
		// 			'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtz-repeater-item-background-color' => 'background-color: {{VALUE}}',
		// 		],
		// 	]
		// );
		// $repeater->add_group_control(
		// 	\Elementor\Group_Control_Text_Shadow::get_type(),
		// 	[
		// 		'name' => 'bwdtz_normal_title_shadow',
		// 		'label' => esc_html__( 'Title Shadow', 'bwd-tabs-zone' ),
		// 		'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtz-repeater-item-title-shadow',
		// 		'default' => [
		// 			'color' => 'transparent',
		// 		]
		// 	]
		// );
		// $repeater->add_group_control(
		// 	\Elementor\Group_Control_Typography::get_type(),
		// 	[
		// 		'name' => 'bwdtz_box_normal_name_typography',
		// 		'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtz-repeater-item-typography',
		// 	]
		// );
		$this->add_control(
			'bwdtz_tabs',
			[
				'label' => esc_html__( 'Balance Tab Items and Items Info', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdtz_tabs_title' => esc_html__( 'Development', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Software', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Programming', 'bwd-tabs-zone' ),
					],
				],
				'title_field' => `{{{ bwdtz_tabs_title }}}`,
			]
		);

		$this->add_control(
			'bwdtz_tab-item_info_heading',
			[
				'label' => esc_html__( 'Items Info', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdtz_default_tabs_info_image_switcher',
			[
				'label' => esc_html__( 'Info Image', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_default_tabs_info_image', [
				'label' => esc_html__( 'Image', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::MEDIA,
				'condition' => [
					'bwdtz_default_tabs_info_image_switcher' => 'yes',
				],
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdtz_hide_info_title_first',
			[
				'label' => esc_html__( 'Show Title Here', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_tabs_description_default', [
				'label' => esc_html__( 'Description', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus?' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdtz_box_default_info_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-tab-content' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_info_profile_info_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-tab-content' => 'background-color: {{VALUE}}; border-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_info_default_info_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-tabs-zone' ),
				'selector' => '{{WRAPPER}} .bwdtz-tab-content',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_default_info_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-tab-content',
			]
		);
		$sk_repeater = new \Elementor\Repeater();
		$sk_repeater->add_control(
			'bwdtz_tabs_title2_id', [
				'label' => esc_html__( 'Name ID', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'bwdtztabs' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_info_image_switcher',
			[
				'label' => esc_html__( 'Info Image', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_info_image', [
				'label' => esc_html__( 'Image', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::MEDIA,
				'condition' => [
					'bwdtz_tabs_info_image_switcher' => 'yes',
				],
				'default' => [
					\Elementor\Utils::get_placeholder_image_src(),
				],
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_hide_info_title',
			[
				'label' => esc_html__( 'Show Title Here', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-tabs-zone'),
				'yes' => esc_html__( 'Show', 'bwd-tabs-zone' ),
				'label_off' => esc_html__( 'Hide', 'bwd-tabs-zone' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_info_title2', [
				'label' => esc_html__( 'Title', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdtz_hide_info_title' => 'yes'
				],
				'default' => esc_html__( 'Development' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_description2', [
				'label' => esc_html__( 'Description', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		// $sk_repeater->add_control(
		// 	'bwdtz_box_info_d_name_color',
		// 	[
		// 		'label' => esc_html__( 'Color', 'bwd-tabs-zone' ),
		// 		'type' => Controls_Manager::COLOR,
		// 		'selectors' => [
		// 			'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-title' => 'color: {{VALUE}}',
		// 		],
		// 	]
		// );
		// $sk_repeater->add_control(
		// 	'bwdtz_box_info_d_profile_title_background_color',
		// 	[
		// 		'label' => esc_html__( 'Background', 'bwd-tabs-zone' ),
		// 		'type' => Controls_Manager::COLOR,
		// 		'selectors' => [
		// 			'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title' => 'background-color: {{VALUE}}',
		// 		],
		// 	]
		// );
		// $sk_repeater->add_group_control(
		// 	\Elementor\Group_Control_Text_Shadow::get_type(),
		// 	[
		// 		'name' => 'bwdtz_title_info_d_shadow',
		// 		'label' => esc_html__( 'Text Shadow', 'bwd-tabs-zone' ),
		// 		'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title',
		// 		'default' => [
		// 			'color' => 'transparent',
		// 		]
		// 	]
		// );
		// $sk_repeater->add_group_control(
		// 	\Elementor\Group_Control_Typography::get_type(),
		// 	[
		// 		'name' => 'bwdtz_box_info_d_name_typography',
		// 		'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .class',
		// 	]
		// );

		// $sk_repeater->add_control(
		// 	'bwdtz_tab_ccc',
		// 	[
		// 		'type' => Controls_Manager::DIVIDER,
		// 	]
		// );

		$this->add_control(
			'bwdtz_tabs2',
			[
				'label' => esc_html__( 'Balance Tab Items and Item Info', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $sk_repeater->get_controls(),
				'default' => [
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #1', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #2', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #3', 'bwd-tabs-zone' ),
					],
				],
				'title_field' => `{{{ bwdtz_tabs_title2 }}}`,
			]
		);
		$this->end_controls_section(); 
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdtz_common_styles = $settings['bwdtz_tabs_zone_style'];
		if('style1' === $bwdtz_common_styles ){
	   ?>
	   	<div class="bwdtz-tab-one bwdtz-tab-common">
			<div class="bwdtz-nav">
				<!-- bwdtz-repeater-item-color bwdtz-repeater-item-background-color bwdtz-repeater-item-title-shadow bwdtz-repeater-item-typography  -->
				<div class="bwdtz-nav-link bwd-tab-list active bwdtz-default-one-btn" id="home-tab"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwdtz-default-one-btn bwdtz-nav-link bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="'. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active" id="home">
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
	   <?php
	   } elseif('style2' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-two bwdtz-tab-common">
			<div class="bwdtz-nav">
			<div class="bwd-tab-list  bwdtz-items-active-color active" id="Section1"><div class="bwdtz-default-one-btn bwd-tab-button bwdtz-items-active"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list  bwdtz-items-active-color bwdtz-nav-link bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="'. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-default-one-btn bwd-tab-button bwdtz-items-active"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style3' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-three bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active" id="tab-three-btn-1"><div class="bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-three-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
				<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style4' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-four bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active" id="tab-four-btn-1"><div class="bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-four-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active"><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
				<?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style5' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-five bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active" id="tab-five-btn-1"><div class="bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-five-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active" id="Section1">
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style6' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-six bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active" id="tab-six-btn-1"><div class="bwd-tab-button"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class=" bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php } echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane Section1 active">
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
					<img src="<?php echo esc_url($settings['bwdtz_default_tabs_info_image']['url']); ?>" alt="Please switch on for image.">
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane Section2 bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style7' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-seven bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?>
						<p><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></p>
					</div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php } ?><p><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></p></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active ">
					<img src="<?php echo esc_url($settings['bwdtz_default_tabs_info_image']['url']); ?>" alt="Please switch on for image.">
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<img src="<?php echo esc_url($bwdtz_elementor2['bwdtz_tabs_info_image']['url']); ?>" alt="Please switch on for image.">
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style8' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-eight bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active "><div class="bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active ">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style9' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-nine bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style10' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-ten bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwdtz-tab-list active">
					<div class="bwdtz-tab-button">Section 1</div>
				</div>
				<div class="bwdtz-tab-list">
					<div class="bwdtz-tab-button">Section 2 </div>
				</div>
				<div class="bwdtz-tab-list">
					<div class="bwdtz-tab-button">Section 3</div>
				</div>
				<div class="bwdtz-tab-list">
					<div class="bwdtz-tab-button">Section 4</div>
				</div>
			</div>
			<div class="bwdtz-tab-content ">
				<div class="bwdtz-tab-pane active ">
					<div class="bwdtz-tab-title">Section 1</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quibusdam magnam, incidunt ipsa odit facilis itaque. Autem doloremque soluta harum ratione maiores! Esse natus quis quaerat, beatae quas deserunt debitis voluptatibus dolorum, totam, expedita sint quibusdam quam. Debitis voluptate architecto dolorum ipsa! Deleniti corrupti quod sed. Error consequuntur tempora voluptatum?</p>
				</div>
				<div class="bwdtz-tab-pane ">
					<div class="bwdtz-tab-title">Section 2</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quibusdam magnam, incidunt ipsa odit facilis itaque. Autem doloremque soluta harum ratione maiores! Esse natus quis quaerat, beatae quas deserunt debitis voluptatibus dolorum, totam, expedita sint quibusdam quam. Debitis voluptate architecto dolorum ipsa! Deleniti corrupti quod sed. Error consequuntur tempora voluptatum?</p>
				</div>
				<div class="bwdtz-tab-pane ">
					<div class="bwdtz-tab-title">Section 3</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quibusdam magnam, incidunt ipsa odit facilis itaque. Autem doloremque soluta harum ratione maiores! Esse natus quis quaerat, beatae quas deserunt debitis voluptatibus dolorum, totam, expedita sint quibusdam quam. Debitis voluptate architecto dolorum ipsa! Deleniti corrupti quod sed. Error consequuntur tempora voluptatum?</p>
				</div>
				<div class="bwdtz-tab-pane ">
					<div class="bwdtz-tab-title">Section 4</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quibusdam magnam, incidunt ipsa odit facilis itaque. Autem doloremque soluta harum ratione maiores! Esse natus quis quaerat, beatae quas deserunt debitis voluptatibus dolorum, totam, expedita sint quibusdam quam. Debitis voluptate architecto dolorum ipsa! Deleniti corrupti quod sed. Error consequuntur tempora voluptatum?</p>
				</div>
        	</div>
        </div>
		<?php
	   } elseif('style11' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-eleven bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style12' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twelve bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div  class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style13' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-thirteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><i class="fas fa-home"></i><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><i class="fas fa-home"></i><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style14' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-fourteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><i class="fas fa-home"></i><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><i class="fas fa-home"></i><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style15' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-fifteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><i class="fas fa-home"></i><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><i class="fas fa-home"></i><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style16' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-sixteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><i class="fas fa-home"></i><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><i class="fas fa-home"></i><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style17' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-seventeen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><i class="fas fa-home"></i><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><i class="fas fa-home"></i><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style18' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-eighteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-progress-bar">
				<span class="bwdtz-progress-bar-inner"></span>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style19' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-nineteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style20' === $bwdtz_common_styles ){
		?>
		<div class="bwd-tab-twenty bwdtz-tab-common">
			<div class="bwd-nav-tabs">
				<div  class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1">Section-1</div></div>
				<div class="bwd-tab-list"><div class="bwd-tab-button" href="#Section-2">Section-2</div></div>
				<div class="bwd-tab-list"><div class="bwd-tab-button" href="#Section-3">Section-3</div></div>
				<div class="bwd-tab-list"><div class="bwd-tab-button" href="#Section-3">Section-4</div></div>
			</div>
			<div class="bwd-tab-content">
				<div class="bwd-tab-pane active">
					<h3>Section 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
				</div>
				<div  class="bwd-tab-pane">
					<h3>Section 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
				</div>
				<div  class="bwd-tab-pane">
					<h3>Section 3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
				</div>
				<div  class="bwd-tab-pane">
					<h3>Section 4</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
				</div>
			</div>
    	</div>
		<?php
	   } elseif('style21' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-one bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-progress-bar">
				<span class="bwdtz-progress-bar-inner"></span>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style22' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-two bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><i class="fas fa-home"></i></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><i class="fas fa-home"></i></div></div>
				<?php
					}
				}
				?>
				<div class="bwdtz-progress-bar">
					<span class="bwdtz-progress-bar-inner"></span>
				</div>
			</div>

			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style23' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-three bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style24' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-four bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style25' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-five bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style26' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-six bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style27' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-seven bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style28' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-eight bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style29' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-nine bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style30' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-thirty bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><i class="fas fa-home"></i></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><i class="fas fa-home"></i></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style31' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-thirty-one bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwd-tab-button" href="#Section1"><i class="fas fa-home"></i><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwd-tab-button"><i class="fas fa-home"></i><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-tab-pane active">
					<div class="bwdtz-icon">
						<i class="fas fa-code"></i>
					</div>
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<div class="bwdtz-icon">
						<i class="far fa-address-card"></i>
					</div>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
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
}			 
		
		