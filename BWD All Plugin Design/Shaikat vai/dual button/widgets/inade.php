<?php
$this->add_control(
    'bwddb_buttons_icon_switcher',
    [
        'label' => esc_html__( 'Show Icon (If Has)', 'bwd-dual-buttons' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__( 'Show', 'bwd-dual-buttons' ),
        'label_off' => esc_html__( 'Hide', 'bwd-dual-buttons' ),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);
$this->add_control(
    'bwddb_content_icon_button',
    [
        'label' => esc_html__( 'Icon', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::ICONS,
        'default' => [
            'value' => 'fab fa-facebook-f',
            'library' => 'solid',
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
$this->add_control(
    'bwddb_buttons_icon_positions',
    [
        'label' => esc_html__( 'Position', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::SELECT,
        'default' => 'icon_position_right',
        'options' => [
            'icon_position_right' => esc_html__( 'Right', 'bwd-dual-buttons' ),
            'icon_position_left' => esc_html__( 'Left', 'bwd-dual-buttons' ),
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
// Hover
$this->start_controls_tabs(
    'bwddb_title_style_tabsxs'
);

$this->start_controls_tab(
    'bwddb_title_style_normal_tabxx',
    [
        'label' => esc_html__( 'Normal', 'bwd-dual-buttons' ),
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);

$this->add_control(
    'bwddb_content_quote_right_color',
    [
        'label' => esc_html__( 'Color', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bwddb-icon i' => 'color: {{VALUE}}',
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Background::get_type(),
    [
        'name' => 'bwddb_button_hoveraaaa_sssssbackground',
        'label' => esc_html__( 'Background Type', 'bwd-dual-buttons' ),
        'types' => [ 'classic', 'gradient', 'video' ],
        'selector' => '{{WRAPPER}} .bwddb-icon',
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
$this->add_control(
    'bwddb_content_quote_right_hover_color',
    [
        'label' => esc_html__( 'Background Color', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bwddb-icon' => 'background: {{VALUE}}',
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
$this->end_controls_tab();

$this->start_controls_tab(
    'bwddb_title_style_hover_tabaa',
    [
        'label' => esc_html__( 'Hover', 'bwd-dual-buttons' ),
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);

$this->add_control(
    'bwddb_content_quote_right_colorss',
    [
        'label' => esc_html__( 'Color', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} a:hover .bwddb-icon' => 'color: {{VALUE}}',
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Background::get_type(),
    [
        'name' => 'bwddb_button_hoveraaaa_background',
        'label' => esc_html__( 'Background Type', 'bwd-dual-buttons' ),
        'types' => [ 'classic', 'gradient', 'video' ],
        'selector' => '{{WRAPPER}} a:hover .bwddb-icon',
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
$this->add_control(
    'bwddb_content_quote_right_hover_colordd',
    [
        'label' => esc_html__( 'Hover Background', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} a:hover .bwddb-icon' => 'background: {{VALUE}}',
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
$this->end_controls_tab();
$this->end_controls_tabs();
// Hover end


$this->add_responsive_control(
    'bwddb_buttons_the_box_right_icon_size',
    [
        'label' => esc_html__( 'Icon Size', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 100,
            ],
        ],
        'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
        'desktop_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'laptop' => [
            'size' => '',
            'unit' => 'px',
        ],
        'tablet_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'tablet_extra' => [
            'size' => '',
            'unit' => 'px',
        ],
        'mobile_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'mobile_extra' => [
            'size' => '',
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .bwddb-icon' => 'font-size: {{SIZE}}{{UNIT}};',
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);


$this->add_control(
    'bwddb_buttons_sk',
    [
        'type' => Controls_Manager::DIVIDER,
    ]
);

$this->add_responsive_control(
    'bwddb_buttons_social_border_height',
    [
        'label' => esc_html__( 'Height', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 100,
            ],
        ],
        'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
        'desktop_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'laptop' => [
            'size' => '',
            'unit' => 'px',
        ],
        'tablet_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'tablet_extra' => [
            'size' => '',
            'unit' => 'px',
        ],
        'mobile_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'mobile_extra' => [
            'size' => '',
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} a .bwddb-icon' => 'height: {{SIZE}}{{UNIT}};',
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
$this->add_responsive_control(
    'bwddb_buttons_social_border_width',
    [
        'label' => esc_html__( 'Width', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 100,
            ],
        ],
        'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
        'desktop_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'laptop' => [
            'size' => '',
            'unit' => 'px',
        ],
        'tablet_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'tablet_extra' => [
            'size' => '',
            'unit' => 'px',
        ],
        'mobile_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'mobile_extra' => [
            'size' => '',
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} a .bwddb-icon' => 'width: {{SIZE}}{{UNIT}};',
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);
$this->add_responsive_control(
    'bwddb_buttons_social_border_radius',
    [
        'label' => esc_html__( 'Border Radius', 'bwd-dual-buttons' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 100,
            ],
        ],
        'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
        'desktop_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'laptop' => [
            'size' => '',
            'unit' => 'px',
        ],
        'tablet_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'tablet_extra' => [
            'size' => '',
            'unit' => 'px',
        ],
        'mobile_default' => [
            'size' => '',
            'unit' => 'px',
        ],
        'mobile_extra' => [
            'size' => '',
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} a .bwddb-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
        ],
        'condition' => [
            'bwddb_buttons_icon_switcher' => 'yes',
        ],
    ]
);

$this->add_control(
    'bwddb_buttons_ska',
    [
        'type' => Controls_Manager::DIVIDER,
    ]
);