<?php
namespace Creativewebinarinfo\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdWIwebinarinfo extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdwi-webinar-info';
	}

	public function get_title() {
		return esc_html__( 'BWD Webinar Info', 'bwdwi-webinar-info' );
	}

	public function get_icon() {
		return 'eicon-calendar bwdwi-webinar-info-icon';
	}

	public function get_categories() {
		return [ 'bwdwi-webinar-info-category' ];
	}

    public function get_keywords() {
		return [ 'webinar', 'info', 'webinar info' ];
	}

	public function get_script_depends() {
		return [ 'bwdwi-webinar-info-category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdwi_webinar_info_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwdwi-webinar-info'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdwi_webinar_info_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwdwi-webinar-info' ),
					'style2' => esc_html__( 'Style 2', 'bwdwi-webinar-info' ),
					'style3' => esc_html__( 'Style 3', 'bwdwi-webinar-info' ),
					'style4' => esc_html__( 'Style 4', 'bwdwi-webinar-info' ),
					'style5' => esc_html__( 'Style 5', 'bwdwi-webinar-info' ),
					'style6' => esc_html__( 'Style 6', 'bwdwi-webinar-info' ),
					'style7' => esc_html__( 'Style 7', 'bwdwi-webinar-info' ),
					'style8' => esc_html__( 'Style 8', 'bwdwi-webinar-info' ),
					'style9' => esc_html__( 'Style 9', 'bwdwi-webinar-info' ),
					'style10' => esc_html__( 'Style 10', 'bwdwi-webinar-info' ),
					'style11' => esc_html__( 'Style 11', 'bwdwi-webinar-info' ),
					'style12' => esc_html__( 'Style 12', 'bwdwi-webinar-info' ),
					'style13' => esc_html__( 'Style 13', 'bwdwi-webinar-info' ),
					'style14' => esc_html__( 'Style 14', 'bwdwi-webinar-info' ),
					'style15' => esc_html__( 'Style 15', 'bwdwi-webinar-info' ),
					'style16' => esc_html__( 'Style 16', 'bwdwi-webinar-info' ),
					'style17' => esc_html__( 'Style 17', 'bwdwi-webinar-info' ),
					'style18' => esc_html__( 'Style 18', 'bwdwi-webinar-info' ),
					'style19' => esc_html__( 'Style 19', 'bwdwi-webinar-info' ),
					'style20' => esc_html__( 'Style 20', 'bwdwi-webinar-info' ),
					'style21' => esc_html__( 'Style 21', 'bwdwi-webinar-info' ),
				],
			]
		);

		// choose count down style
		$this->add_control(
			'bwdwi_count_down_choose',
			[
				'label' => esc_html__( 'Count-Down Styles', 'bwdwi-webinar-info' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'Style 1', 'bwdwi-webinar-info' ),
					'2' => esc_html__( 'Style 2', 'bwdwi-webinar-info' ),
					'3' => esc_html__( 'Style 3', 'bwdwi-webinar-info' ),
					'4' => esc_html__( 'Style 4', 'bwdwi-webinar-info' ),
					'5' => esc_html__( 'Style 5', 'bwdwi-webinar-info' ),
					'6' => esc_html__( 'Style 6', 'bwdwi-webinar-info' ),
				]
			]
		);
		// choose count down style

		$this->end_controls_section();
		// web inner content sec start
        $this->start_controls_section(
			'bwdwi_webinar_info_style_area',
		    [
		        'label' => esc_html__('WebInar Content','bwdwi-webinar-info'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdwi_webinar_info_bg_image',
			[
				'label' => esc_html__( 'Choose Background Image', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_title',
			[
				'label' => esc_html__( 'Title', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet.', 'bwdwi-webinar-info' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_description',
			[
				'label' => esc_html__( 'Description', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, odio.', 'bwdwi-webinar-info' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'bwdwi_webinar_info_content_image_extra',
			[
				'label' => esc_html__( 'Choose Image One', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_title',
			[
				'label' => esc_html__( 'Name', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Wlliamson due', 'bwdwi-webinar-info' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_degi',
			[
				'label' => esc_html__( 'Designation', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Marketing Expert ', 'bwdwi-webinar-info' ),
				'placeholder' => esc_html__( 'Type your Designation here', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_content_image_extra_two',
			[
				'label' => esc_html__( 'Choose Image Two', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style4', 'style5', 'style6', 'style7', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_title_two',
			[
				'label' => esc_html__( 'Name', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Wlliamson due', 'bwdwi-webinar-info' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style4', 'style5', 'style6', 'style7', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_degi_two',
			[
				'label' => esc_html__( 'Designation', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Marketing Expert ', 'bwdwi-webinar-info' ),
				'placeholder' => esc_html__( 'Type your Designation here', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style4', 'style5' , 'style6', 'style7', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_content_image_extra_three',
			[
				'label' => esc_html__( 'Choose Image Three', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
				'condition' => [
					'bwdwi_webinar_info_style!' => [ 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_title_three',
			[
				'label' => esc_html__( 'Name', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Wlliamson due', 'bwdwi-webinar-info' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => [ 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_degi_three',
			[
				'label' => esc_html__( 'Designation', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Marketing Expert ', 'bwdwi-webinar-info' ),
				'placeholder' => esc_html__( 'Type your Designation here', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => [ 'style2', 'style3', 'style4','style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style21'],
				],
				'separator' => 'after',
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_date',
			[
				'label' => esc_html__( 'Date', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'separator' => 'before',
				'enableTime' => false,
				'default' => '8th-Nov',
				'picker_options' => [
					'dateFormat'=>'J-M',
				
				],
			]
		);


		$this->add_control(
			'bwdwi_webinar_date_icon',
			[
				'label' => esc_html__( 'Icons', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa-solid fa-calendar',
					'library' => 'solid',
				],
			]
		);

		$this->add_control(
			'bwdwi_webinar_info_time',
			[
				'label' => esc_html__( 'Date', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'separator' => 'before',
				'enableDate' => false,
				'picker_options' => [
					'dateFormat'=>'h-i'
				],
				'default' => '10-05'
			]
		);
		//time zone
		$this->add_control(
            'bwdwi_webinar_info_time_zone',
            [
                'label' => esc_html__('Select GMT', 'bwdwi-webinar-info'),
                'type' => Controls_Manager::SELECT,
                'options' => [

                    'GMT+0' => esc_html__('GMT+0', 'bwdwi-webinar-info'),
                    'GMT+1' => esc_html__('GMT+1', 'bwdwi-webinar-info'),
                    'GMT+2' => esc_html__('GMT+2', 'bwdwi-webinar-info'),
                    'GMT+3' => esc_html__('GMT+3', 'bwdwi-webinar-info'),
                    'GMT+4' => esc_html__('GMT+4', 'bwdwi-webinar-info'),
                    'GMT+5' => esc_html__('GMT+5', 'bwdwi-webinar-info'),
                    'GMT+6' => esc_html__('GMT+6', 'bwdwi-webinar-info'),
                    'GMT+7' => esc_html__('GMT+7', 'bwdwi-webinar-info'),
                    'GMT+8' => esc_html__('GMT+8', 'bwdwi-webinar-info'),
                    'GMT+9' => esc_html__('GMT+9', 'bwdwi-webinar-info'),
                    'GMT+10' => esc_html__('GMT+10', 'bwdwi-webinar-info'),
                    'GMT+11' => esc_html__('GMT+11', 'bwdwi-webinar-info'),
                    'GMT+12' => esc_html__('GMT+12', 'bwdwi-webinar-info'),
                    'GMT-1' => esc_html__('GMT-1', 'bwdwi-webinar-info'),
                    'GMT-2' => esc_html__('GMT-2', 'bwdwi-webinar-info'),
                    'GMT-3' => esc_html__('GMT-3', 'bwdwi-webinar-info'),
                    'GMT-4' => esc_html__('GMT-4', 'bwdwi-webinar-info'),
                    'GMT-5' => esc_html__('GMT-5', 'bwdwi-webinar-info'),
                    'GMT-6' => esc_html__('GMT-6', 'bwdwi-webinar-info'),
                    'GMT-7' => esc_html__('GMT-7', 'bwdwi-webinar-info'),
                    'GMT-8' => esc_html__('GMT-8', 'bwdwi-webinar-info'),
                    'GMT-9' => esc_html__('GMT-9', 'bwdwi-webinar-info'),
                    'GMT-10' => esc_html__('GMT-10', 'bwdwi-webinar-info'),
                    'GMT-11' => esc_html__('GMT-11', 'bwdwi-webinar-info'),
                    'GMT-12' => esc_html__('GMT-12', 'bwdwi-webinar-info'),
                ],
                'default' => 'GMT+0',
            ]
        );

		$this->add_control(
			'bwdwi_webinar_time_icon',
			[
				'label' => esc_html__( 'Icons', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa-solid fa-clock',
					'library' => 'solid',
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_btn_title',
			[
				'label' => esc_html__( 'Button Title', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Registration Now', 'bwdwi-webinar-info' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwdwi-webinar-info' ),
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwi_webinar_btn_link',
			[
				'label' => esc_html__( 'Link', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write icon link here', 'bwdwi-webinar-info' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
        $this->end_controls_section();

		// count down content section start  ========================
		$this->start_controls_section(
			'bwdwi_count_down_content_section',
			[
				'label' => esc_html__( 'Count Down Content', 'bwdwi-webinar-info' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// expired date
		$this->add_control(
			'bwdwi_expired_date',
			[
				'label' => esc_html__( 'Expired Date', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'default'=> esc_html__('2023-01-01 11:15'),
			]
		);

		//time unit reverse
		$this->add_control(
			'bwdwi_count_down_time_unit_direction',
			[
				'label' => esc_html__( 'Flip Time Unit Direction', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'on', 'bwdwi-webinar-info' ),
				'label_off' => esc_html__( 'off', 'bwdwi-webinar-info' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// title controls
		$this->add_control(
			'bwdwi_count_down_unit_title_contents',
			[
				'label' => esc_html__( 'Unit Titles', 'bwdwi-webinar-info'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwi_count_down_day_title',
			[
				'label' => esc_html__( 'Day', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Day', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_count_down_hour_title',
			[
				'label' => esc_html__( 'Hour', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Hour', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_count_down_min_title',
			[
				'label' => esc_html__( 'Minutes', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Minutes', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_count_down_sec_title',
			[
				'label' => esc_html__( 'Seconds', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Seconds', 'bwdwi-webinar-info' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//what will happened after due time expired
		$this->add_control(
			'bwdwi_count_down_after_expired',
			[
				'label' => esc_html__( 'Actions After Expire', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'separator' => 'before',
				'label_block'=> true,
				'options' => [
					'redirect'  => esc_html__( 'Redirect', 'bwdwi-webinar-info' ),
					'hide' => esc_html__( 'Hide', 'bwdwi-webinar-info' ),
					'show-message' => esc_html__('Show Message', 'bwdwi-webinar-info' ),
				],

			]
		);
		//redirect control
		$this->add_control(
			'bwdwi_count_down_after_expired_url',
			[
				'label' => esc_html__( 'Redirect Url', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::URL,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_count_down_after_expired' => 'redirect',
				],
			]
		);
		//Message control
		$this->add_control(
			'bwdwi_count_down_after_expired_msg',
			[
				'label' => esc_html__( 'Message', 'bwdwi-webinar-info' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_count_down_after_expired' => 'show-message',
				],
			]
		);
		$this->end_controls_section();
		// count down content section end
		// webinner style section start
		$this->start_controls_section(
			'bwdwi_heading_style_section',
			[
				'label' => esc_html__( 'Heading', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdwi_webinar_hedi_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-heading' => 'text-align: {{UNIT}};',
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdwi_heading_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-heading' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_heading_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-heading',
			]
		);
        $this->end_controls_section();


		$this->start_controls_section(
			'bwdwi_dec_style_section',
			[
				'label' => esc_html__( 'Description', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdwi_webinar_decs_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-decs' => 'text-align: {{UNIT}};',
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdwi_decs_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_decs_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-decs',
			]
		);
        $this->end_controls_section();


		$this->start_controls_section(
			'bwdwi_image_style_section',
			[
				'label' => esc_html__( 'Image', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_shape_width_height',
			[
				'label' => esc_html__( 'Image Width', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-img-item' => 'width: {{SIZE}}{{UNIT}} !important; height: {{SIZE}}{{UNIT}} !important;',
					
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style7', 'style8', 'style11', 'style16', 'style17', 'style18', 'style19', 'style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_shape_width_height_last',
			[
				'label' => esc_html__( 'Second Image Width', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-sec-img' => 'width: {{SIZE}}{{UNIT}} !important; height: {{SIZE}}{{UNIT}} !important;',
					
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style18'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_shape_width',
			[
				'label' => esc_html__( 'Image Width', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-img-item' => 'width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style7', 'style8', 'style11', 'style16', 'style17', 'style18', 'style19', 'style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_shape_height',
			[
				'label' => esc_html__( 'Image Height', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-img-item' => 'height: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style7', 'style8', 'style11', 'style16', 'style17', 'style18', 'style19', 'style21'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdwi_webi_img_background',
				'label' => esc_html__( 'Background', 'bwdwi-webinar-box' ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'condition' => [
					'bwdwi_webinar_info_style' => [ 'style2', 'style4', 'style9', 'style11'],
				],
				'selector' => '{{WRAPPER}} .bwdwi-single-img,
								{{WRAPPER}} .bwdwi-single-img .bwdwi-img-item',
			]
		);
		$this->add_control(
			'bwdwi_image_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-single-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-img-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
        $this->end_controls_section();


		$this->start_controls_section(
			'bwdwi_name_style_section',
			[
				'label' => esc_html__( 'Name', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwi_name_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-name' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdwi_name_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-name' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .bwdwi-img-content' => 'background: {{VALUE}} !important',
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style5', 'style6', 'style10', 'style12', 'style13', 'style14', 'style15'],
				],
			]
		);
		$this->add_control(
			'bwdwi_name_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-name' => 'border-color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style18'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_name_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-single-img .bwdwi-img-content .bwdwi-name',
			]
		);
        $this->end_controls_section();

		$this->start_controls_section(
			'bwdwi_degi_style_section',
			[
				'label' => esc_html__( 'Designation', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwi_degi_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-degi' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdwi_degi_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-degi' => 'background: {{VALUE}} !important',
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style6', 'style12', 'style13', 'style18'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_degi_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-single-img .bwdwi-img-content .bwdwi-degi',
			]
		);
        $this->end_controls_section();

		$this->start_controls_section(
			'bwdwi_dae_style_section',
			[
				'label' => esc_html__( 'Date and Time', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwi_date_date_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-date' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_date_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-date-time .bwdwi-date',
			]
		);
		$this->add_control(
			'bwdwi_date_icon_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdwi-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'bwdwi_date_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdwi-date i' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_webi_icon_date_font',
			[
				'label' => esc_html__( 'Icon Font Size', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdwi-date i' => 'font-size: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
        $this->end_controls_section();


		$this->start_controls_section(
			'bwdwi_btn_style_section',
			[
				'label' => esc_html__( 'Button', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'style_tabs'
		);
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdwi-webinar-box' ),
			]
		);
		$this->add_control(
			'bwdwi_btn_normal_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdwi_btn_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a' => 'background-color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style7', 'style10', 'style13', 'style14', 'style15', 'style16', 'style18'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_button_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-button a',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwdwi-webinar-box' ),
				'selector' => '{{WRAPPER}} .bwdwi-button a',
			]
		);
		$this->add_responsive_control(
			'bwdwi_btn_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_btn_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdwi-webinar-box' ),
			]
		);
		$this->add_control(
			'bwdwi_btn_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a:hover' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdwi_btn_background_hover_color',
			[
				'label' => esc_html__( 'Backgroud color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a:hover:before' => 'background: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdwi_hover_border',
				'label' => esc_html__( 'Border', 'bwdwi-webinar-box' ),
				'selector' => '{{WRAPPER}} .bwdwi-button a:hover',
			]
		);
		$this->add_responsive_control(
			'bwdwi_btn_border_hover_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bwdwi_bg_style_section',
			[
				'label' => esc_html__( 'Content Box', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwi_btn_background_main_color',
			[
				'label' => esc_html__( 'Backgroud color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwi_btn_background_shape_color',
			[
				'label' => esc_html__( 'Bg Shape color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-webinar-box::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style1', 'style8', 'style11', 'style13', 'style14', 'style15', 'style16', 'style19', 'style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_content_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webi-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_content_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webi-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdwi_content_border',
				'label' => esc_html__( 'Border', 'bwdwi-webinar-box' ),
				'selector' => '{{WRAPPER}} .bwdwi-webi-bg',
			]
		);
		$this->add_responsive_control(
			'bwdwi_content_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webi-bg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdwi_webi_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdwi-webinar-box' ),
				'selector' => '{{WRAPPER}} .bwdwi-webinar-box',
			]
		);
        $this->end_controls_section();
		// count down style section ========================
		$this->start_controls_section(
			'bwdwi_count_down_style_section',
			[
				'label' => esc_html__( 'Count Down Style', 'bwdwi-webinar-box'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		//unit controls
		$this->add_control(
			'bwdwi_count_down_unit_style',
			[
				'label' => esc_html__( 'Time Units', 'bwdwi-webinar-box'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// unit typo 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_count_down_num_typography',
				'selector' => '{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-webinar-box-num',
			]
		);
		// unit text color
		$this->add_control(
			'bwdwi_count_down_num_color',
			[
				'label' => esc_html__( 'Text Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-webinar-box-num' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-webinar-box-color-common' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-shape-common' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-shape-common::before,
					{{WRAPPER}} .bwdwi-shape-common::after' => 'background-color: {{VALUE}}'
				],
			]
		);
		// unit bg color
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdwi-webinar-box-num-bg',
				'label' => esc_html__( 'Background', 'bwdwi-webinar-box' ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-webinar-box-num',
			]
		);
		// unit border color
		$this->add_control(
			'bwdwi_count_down_num_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdwi_count_down_choose' => ['style30'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-webinar-box-num' => 'border-color: {{VALUE}}'
				],
			]
		);
		//top line color
		$this->add_control(
			'bwdwi_count_down_num_flip_top_line_color',
			[
				'label' => esc_html__( 'Top Line Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdwi_count_down_choose' => ['style1', 'style2'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-num-inner' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-webinar-box-num::before,
					{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-webinar-box-num::after,
					{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-num-inner::before,
					{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-num-inner::after' => 'background-color: {{VALUE}}'
				],
			]
		);
		//bottom line color
		$this->add_control(
			'bwdwi_count_down_num_flip_bottom_line_color',
			[
				'label' => esc_html__( 'Bottom Line Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdwi_count_down_choose' => ['style1', 'style2'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-num-inner' => 'border-top-color: {{VALUE}}',
				],
			]
		);
		//unit width
		$this->add_responsive_control(
			'bwdwi_count_down_num_box_width',
			[
				'label' => esc_html__( 'Width', 'bwdwi-webinar-box'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%'],
				'range' => [
					'px' => [
						'min' => 70,
						'max' => 150,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					]
				],

				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box-common .bwdwi-webinar-box-item' => 'flex-basis: {{SIZE}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		//unit height
		$this->add_responsive_control(
			'bwdwi_count_down_num_box_height',
			[
				'label' => esc_html__( 'Height', 'bwdwi-webinar-box'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%'],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 50,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box-common .bwdwi-height-control' => 'height: {{SIZE}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdwi_count_down_choose' => ['style1', 'style2'],
				],
			]
		);
		//padding
		$this->add_responsive_control(
			'bwdwi_count_down_num_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-webinar-box'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box-common .bwdwi-webinar-box-item .bwdwi-webinar-box-num,
					{{WRAPPER}} .bwdwi-webinar-box-common .bwdwi-item-padding' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		// margin
		$this->add_responsive_control(
			'bwdwi_count_down_item_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdwi-webinar-box'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box-common .bwdwi-webinar-box-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		//unit bg shape color
		$this->add_control(
			'bwdwi_count_down_num_bg_shape_colors',
			[
				'label' => esc_html__( 'Unit BG Shape Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdwi_count_down_choose' => [ 'style25', 'style26','style27' ],
				],
			],
		);
		//unit shape 1
		$this->add_control(
			'bwdwi_count_down_num_bg_shape1',
			[
				'label' => esc_html__( 'Shape One Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-num-bg-shape::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdwi_count_down_choose' => [ 'style25', 'style26','style27','style31' ],
				],
			]
		);
		//unit shape 2
		$this->add_control(
			'bwdwi_count_down_num_bg_shape2',
			[
				'label' => esc_html__( 'Shape Two Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-num-bg-shape::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdwi_count_down_choose' => [ 'style25', 'style26','style27','style31' ],
				],
			]
		);
		//unit title styles
		$this->add_control(
			'bwdwi_count_down_unit_title_styles',
			[
				'label' => esc_html__( 'Unit Title', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//title typo  
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_count_down_title_typography',
				'selector' => '{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-webinar-box-title',
			]
		);
		// title text color
		$this->add_control(
			'bwdwi_count_down_title_color',
			[
				'label' => esc_html__( 'Text Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-webinar-box-title' => 'color: {{VALUE}}',
				],
			]
		);
		// title bg color
		$this->add_control(
			'bwdwi_count_down_title_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box-num-common::after' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-webinar-box-item-common' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-webinar-box-item .bwdwi-webinar-box-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
		$cd_style = $settings['bwdwi_count_down_choose'];
		
		if ( ! empty( $settings['bwdwi_webinar_info_bg_image']['url'] ) ) {
			$bgimg= $settings['bwdwi_webinar_info_bg_image']['url'];
		}

		if ( ! empty( $settings['bwdwi_webinar_info_content_image_extra']['url'] ) ) {
			$img= $settings['bwdwi_webinar_info_content_image_extra']['url'];
		}
		if ( ! empty( $settings['bwdwi_webinar_info_content_image_extra_two']['url'] ) ) {
			$imgTwo= $settings['bwdwi_webinar_info_content_image_extra_two']['url'];
		}
		if ( ! empty( $settings['bwdwi_webinar_info_content_image_extra_three']['url'] ) ) {
			$imgThree= $settings['bwdwi_webinar_info_content_image_extra_three']['url'];
		}
		if ( ! empty( $settings['bwdwi_webinar_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdwi_webinar_btn_link', $settings['bwdwi_webinar_btn_link'] );
		}

		//count down area start
		$time_zone = $settings['bwdwi_webinar_info_time_zone'];

		$unit_dir_switch = $settings['bwdwi_count_down_time_unit_direction'];
		$provided_date = strtotime( $settings['bwdwi_expired_date']);

		$day_unit_title = $settings['bwdwi_count_down_day_title'];
		$hour_unit_title = $settings['bwdwi_count_down_hour_title'];
		$min_unit_title = $settings['bwdwi_count_down_min_title'];
		$sec_unit_title = $settings['bwdwi_count_down_sec_title'];
	
		//expired event
		$ex_show_msg = $settings['bwdwi_count_down_after_expired_msg'];
		

		if('redirect' === $settings['bwdwi_count_down_after_expired']){
			$ex_show_url = $settings['bwdwi_count_down_after_expired_url']['url'];
		}
		
		//store value what will happen after date expired 
		$after_ex_events = $settings['bwdwi_count_down_after_expired'];
		if($after_ex_events){
			foreach($after_ex_events as $after_ex_event_item){
				if($after_ex_event_item === 'hide'){
					$af_ex_event = 'hide';
				}else if($after_ex_event_item === 'show-message'){
					$af_ex_event = 'message';
				}else if($after_ex_event_item === 'redirect'){
					$af_ex_event = 'redirect';
				}
			}
		}

		//unit direction check
		if('yes' === $unit_dir_switch){
			$unit_dir = 'bwdwi-unit-flip-rev';
		}else{
			$unit_dir = 'bwdwi-unit-flip-row';
		}

		//count down area end


	if ('style1' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-1 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/11.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgThree)){
										echo $imgThree;
									}else{
										echo plugins_url('../assets/public/img/33.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_three']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_three']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>



								</div>
							</div>
							<div class="bwdwi-webinar-info">
								<?php
									include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
								?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style2' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-2 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bg1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/11.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
								<?php
									include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
								?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style3' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-3 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/11.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style4' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-4 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/6.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-img-content">
								<div class="bwdwi-name">
								<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
								</div>
								<div class="bwdwi-degi">
								<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/11.webp', __FILE__);
									}
									?>
									">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style5' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-5 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/10.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style6' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-6 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/p3.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style7' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-7 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/6.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style8' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-8 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/6.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-hedi-decs">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
                    	</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/33.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style9' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-9 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/p2.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/p8.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style10' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-10 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/6.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/p2.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style11' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-11 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/p3.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/p4.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgThree)){
										echo $imgThree;
									}else{
										echo plugins_url('../assets/public/img/p1.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_three']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_three']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style12' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-12 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bg1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/p3.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
								<div class="bwdwi-date-time">
									<div class="bwdwi-date">
										<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
									</div>
									<div class="bwdwi-date">
										<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style13' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-13 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/6.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/p2.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style14' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-14 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/p8.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style15' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-15 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/2.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/p8.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style16' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-16 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/6.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style17' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-17 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/6.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
								<div class="bwdwi-date-time">
									<div class="bwdwi-date">
										<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
									</div>
									<div class="bwdwi-date">
										<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style18' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-18 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/6.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item bwdwi-sec-img">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/33.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style19' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-19 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/55.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/66.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgThree)){
										echo $imgThree;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_three']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_three']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style20' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-20 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/11.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/66.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgThree)){
										echo $imgThree;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_three']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_three']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style21' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-21 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/1.webp', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/22.webp', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
		

    }
}

