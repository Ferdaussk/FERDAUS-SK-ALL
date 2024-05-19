<?php /** @noinspection PhpUndefinedClassInspection */
/**
 * Videor for Elementor
 * Videor masks YouTube & Vimeo videos by creative & extra-ordinary custom shapes.
 * Exclusively on https://1.envato.market/videor-elementor
 *
 * @encoding        UTF-8
 * @version         1.1.1
 * @copyright       (C) 2018 - 2022 Merkulove ( https://merkulov.design/ ). All rights reserved.
 * @license         Envato License https://1.envato.market/KYbje
 * @contributors    Nemirovskiy Vitaliy (nemirovskiyvitaliy@gmail.com), Dmitry Merkulov (dmitry@merkulov.design)
 * @support         help@merkulov.design
 **/

namespace Merkulove\VideorElementor;

/** Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit;
}

use Exception;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Color;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;
use Elementor\Embed;
use Elementor\Plugin;
use Merkulove\VideorElementor\Unity\Plugin as UnityPlugin;

/** @noinspection PhpUnused */
/**
 * Videor - Custom Elementor Widget.
 **/
class videor_elementor extends Widget_Base {

    /**
     * Use this to sort widgets.
     * A smaller value means earlier initialization of the widget.
     * Can take negative values.
     * Default widgets and widgets from 3rd party developers have 0 $mdp_order
     **/
    public $mdp_order = 1;

    /**
     * Widget base constructor.
     * Initializing the widget base class.
     *
     * @access public
     * @throws Exception If arguments are missing when initializing a full widget instance.
     * @param array      $data Widget data. Default is an empty array.
     * @param array|null $args Optional. Widget default arguments. Default is null.
     *
     * @return void
     **/
    public function __construct( $data = [], $args = null ) {

        parent::__construct( $data, $args );

        /** CSS */
        wp_register_style( 'mdp-videor-elementor-admin', UnityPlugin::get_url() . 'src/Merkulove/Unity/assets/css/elementor-admin' . UnityPlugin::get_suffix() . '.css', [], UnityPlugin::get_version() );
        wp_register_style( 'mdp-videor-elementor', UnityPlugin::get_url() . 'css/videor-elementor' . UnityPlugin::get_suffix() . '.css', [], UnityPlugin::get_version() );

        /** JavaScript. */
        wp_enqueue_script( 'jquery' );
        wp_register_script( 'mdp-videor-elementor', UnityPlugin::get_url() . 'js/videor-elementor' . UnityPlugin::get_suffix() . '.js', [ 'jquery', 'elementor-frontend' ], UnityPlugin::get_version(), true );

    }

    /**
     * Return a widget name.
     *
     * @return string
     **/
    public function get_name() {

        return 'mdp-videor-elementor';

    }

    /**
     * Return the widget title that will be displayed as the widget label.
     *
     * @return string
     **/
    public function get_title() {

        return esc_html__( 'Videor', 'videor-elementor' );

    }

    /**
     * Set the widget icon.
     *
     * @return string
     */
    public function get_icon() {

        return 'mdp-videor-elementor-widget-icon';

    }

    /**
     * Set the category of the widget.
     *
     * @return array with category names
     **/
    public function get_categories() {

        return [ 'general' ];

    }

    /**
     * Get widget keywords. Retrieve the list of keywords the widget belongs to.
     *
     * @access public
     *
     * @return array Widget keywords.
     **/
    public function get_keywords() {

        return [ 'Merkulove', 'Videor', 'mask', 'clipping', 'clip', 'crop', 'video', 'player', 'embed', 'youtube', 'vimeo', 'mp4', 'webp', 'ogg' ];

    }

    /**
     * Get style dependencies.
     * Retrieve the list of style dependencies the widget requires.
     *
     * @access public
     *
     * @return array Widget styles dependencies.
     **/
    public function get_style_depends() {

        return [ 'mdp-videor-elementor', 'mdp-videor-elementor-admin' ];

    }

	/**
	 * Get script dependencies.
	 * Retrieve the list of script dependencies the element requires.
	 *
	 * @access public
     *
	 * @return array Element scripts dependencies.
	 **/
	public function get_script_depends() {

		return [ 'mdp-videor-elementor' ];

    }

    /**
     * Content for Video
     */
    private function video_content() {

        /** Start section */
        $this->start_controls_section(
            'video_content',
            [
                'label' => esc_html__( 'Video', 'videor-elementor' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        /** Video Source */
        $this->add_control(
            'video_type',
            [
                'label' => __( 'Video source', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'youtube',
                'options' => [
                    'youtube' => __( 'YouTube', 'videor-elementor' ),
                    'vimeo' => __( 'Vimeo', 'videor-elementor' ),
                    'hosted' => __( 'Self Hosted', 'videor-elementor' ),
                ],
            ]
        );

        /** YouTube URL */
        $this->add_control(
            'youtube_url',
            [
                'label' => __( 'YouTube video link', 'videor-elementor' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter YouTube URL', 'videor-elementor' ) . ' (YouTube)',
                'default' => 'https://www.youtube.com/watch?v=45zzYUBpoDw',
                'label_block' => true,
                'condition' => [
                    'video_type' => 'youtube',
                ],
            ]
        );

        /** Vimeo URL */
        $this->add_control(
            'vimeo_url',
            [
                'label' => __( 'Vimeo video link', 'videor-elementor' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter Vimeo URL', 'videor-elementor' ) . ' (Vimeo)',
                'default' => 'https://vimeo.com/416281627',
                'label_block' => true,
                'condition' => [
                    'video_type' => 'vimeo',
                ],
            ]
        );

        /** External Video */
        $this->add_control(
            'insert_url',
            [
                'label' => __( 'External video link', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'condition' => [
                    'video_type' => 'hosted',
                ],
            ]
        );

        /** Hosted video URL */
        $this->add_control(
            'hosted_url',
            [
                'label' => __( 'Choose video file', 'videor-elementor' ),
                'type' => Controls_Manager::MEDIA,
                'media_type' => 'video',
                'condition' => [
                    'video_type' => 'hosted',
                    'insert_url' => '',
                ],
            ]
        );

        /** External video URL */
        $this->add_control(
            'external_url',
            [
                'label' => __( 'URL', 'videor-elementor' ),
                'type' => Controls_Manager::URL,
                'autocomplete' => false,
                'options' => false,
                'label_block' => true,
                'show_label' => false,
                'media_type' => 'video',
                'placeholder' => __( 'Enter your URL', 'videor-elementor' ),
                'condition' => [
                    'video_type' => 'hosted',
                    'insert_url' => 'yes',
                ],
            ]
        );

        /** Start Time */
        $this->add_control(
            'start',
            [
                'label' => __( 'Start Time', 'videor-elementor' ),
                'type' => Controls_Manager::NUMBER,
                'description' => __( 'Specify a start time (in seconds)', 'videor-elementor' ),
                'condition' => [
                    'loop' => '',
                ],
            ]
        );

        /** End Time */
        $this->add_control(
            'end',
            [
                'label' => __( 'End Time', 'videor-elementor' ),
                'type' => Controls_Manager::NUMBER,
                'description' => __( 'Specify an end time (in seconds)', 'videor-elementor' ),
                'condition' => [
                    'loop' => '',
                    'video_type' => [ 'youtube', 'hosted' ],
                ],
            ]
        );

        /** Video options separator */
        $this->add_control(
            'video_options',
            [
                'label' => __( 'Playback options', 'videor-elementor' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        /** Autoplay */
        $this->add_control(
            'autoplay',
            [
                'label' => __( 'Autoplay', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'condition' => [
                    'mute' => 'yes',
                ],
            ]
        );

        /** Play on hover */
        $this->add_control(
            'play_over',
            [
                'label' => __( 'Play on mouse over', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => '',
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'autoplay',
                            'operator' => '!=',
                            'value' => 'yes'
                        ],
                        [
                            'name' => 'video_type',
                            'operator' => '===',
                            'value' => 'hosted'
                        ]
                    ]
                ]
            ]
        );

        /** Stop on leave */
        $this->add_control(
            'stop_leave',
            [
                'label' => __( 'Stop on leave', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => '',
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'autoplay',
                            'operator' => '!=',
                            'value' => 'yes'
                        ],
                        [
                            'name' => 'video_type',
                            'operator' => '===',
                            'value' => 'hosted'
                        ]
                    ]
                ]
            ]
        );

        /** Play on mobile */
        $this->add_control(
            'play_on_mobile',
            [
                'label' => __( 'Play on mobile', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'condition' => [
                    'autoplay' => 'yes',
                ],
            ]
        );

        /** Mute */
        $this->add_control(
            'mute',
            [
                'label' => __( 'Mute', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes'
            ]
        );

        /** Loop */
        $this->add_control(
            'loop',
            [
                'label' => __( 'Loop', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes'
            ]
        );

        /** Player controls */
        $this->add_control(
            'controls',
            [
                'label' => __( 'Controls', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
            ]
        );

        /** Youtube Branding */
        $this->add_control(
            'modestbranding',
            [
                'label' => __( 'Modest Branding', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'condition' => [
                    'video_type' => [ 'youtube' ],
                    'controls' => 'yes',
                ],
            ]
        );

        /** YouTube Privacy */
        $this->add_control(
            'yt_privacy',
            [
                'label' => __( 'Privacy mode', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'condition' => [
                    'video_type' => 'youtube',
                ],
            ]
        );

        /** Hosted poster */
        $this->add_control(
            'poster',
            [
                'label' => __( 'Poster', 'videor-elementor' ),
                'type' => Controls_Manager::MEDIA,
                'condition' => [
                    'video_type' => 'hosted',
                ],
            ]
        );

        /** Overlay */
        $this->add_control(
            'show_image_overlay',
            [
                'label' => __( 'Overlay', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes'
            ]
        );

        /** Lightbox */
        $this->add_control(
            'lightbox',
            [
                'label' => __( 'Lightbox', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'frontend_available' => true,
                'condition' => [ 'show_image_overlay' => 'yes' ],
            ]
        );

        /** Aspect ratio */
        $this->add_control(
            'fix_ratio',
            [
                'label' => __( 'Custom aspect ratio', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'conditions' => [
                    'terms' => [
                        [
                            'name' => 'video_type',
                            'operator' => '!in',
                            'value' => [
                                'hosted',
                            ],
                        ],
                    ],
                ]
            ]
        );

        /** Custom ratio for video */
        $this->add_control(
            'ratio',
            [
                'label' => esc_html__( 'Vertical ratio rate', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'condition' => [
                    'video_type!' => 'hosted',
                    'fix_ratio' => 'yes'
                ]
            ]
        );

        /** Video Position */
        $this->add_responsive_control(
            'video_position',
            [
                'label' => esc_html__( 'Video Position', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'default',
                'options' => [
                    'default'      => esc_html__( 'Center Center', 'videor-elementor' ),
                    'centerleft'   => esc_html__( 'Center Left', 'videor-elementor' ),
                    'centerright'  => esc_html__( 'Center Right', 'videor-elementor' ),
                    'topcenter'    => esc_html__( 'Top Center', 'videor-elementor' ),
                    'topleft'      => esc_html__( 'Top Left', 'videor-elementor' ),
                    'topright'     => esc_html__( 'Top Right', 'videor-elementor' ),
                    'bottomcenter' => esc_html__( 'Bottom Center', 'videor-elementor' ),
                    'bottomleft'   => esc_html__( 'Bottom Left', 'videor-elementor' ),
                    'bottomright'  => esc_html__( 'Bottom Right', 'videor-elementor' ),
                    'unset'        => esc_html__( 'Custom', 'videor-elementor' ),
                ],
                'separator' => 'before'
            ]
        );

        /** Mask Custom Position X */
        $this->add_responsive_control(
            'video_position_custom_x',
            [
                'label' => esc_html__( 'Horizontal Offset', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'vh' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-wrap' => 'left: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [ 'video_position' => 'unset' ]
            ]
        );

        /** Mask Custom Position Y */
        $this->add_responsive_control(
            'video_position_custom_y',
            [
                'label' => esc_html__( 'Vertical Offset', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'vh' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-wrap' => 'top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [ 'video_position' => 'unset' ]
            ]
        );

        /** Custom Scale */
        $this->add_responsive_control(
            'video_scale',
            [
                'label' => esc_html__( 'Video scale', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => .1,
                        'max' => 5,
                        'step' => .1,
                    ]
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .elementor-video-iframe' => 'transform: scale({{SIZE}});',
                    '{{WRAPPER}} .elementor-video' => 'transform: scale({{SIZE}});',
                ],
            ]
        );

        /** End section */
        $this->end_controls_section();

    }

    /**
     * Content for Mask
     *
     * @since 1.0.0
     * @access private
     */
    private function mask_content() {

        /** Start section properties */
        $this->start_controls_section(
            'mask_content',
            [
                'label' => esc_html__( 'Clipping Mask', 'videor-elementor' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        /** Mask image */
        $this->add_control(
            'mask',
            [
                'label' => esc_html__( 'Mask', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'trapezoid-1',
                'options' => [
                    'trapezoid-1'       => esc_html__( 'Trapezoid-1', 'videor-elementor' ),
                    'trapezoid-2'       => esc_html__( 'Trapezoid-2', 'videor-elementor' ),
                    'trapezoid-3'       => esc_html__( 'Trapezoid-3', 'videor-elementor' ),
                    'broken'            => esc_html__( 'Broken', 'videor-elementor' ),
                    'bubbles-1'         => esc_html__( 'Bubbles-1', 'videor-elementor' ),
                    'bubbles-2'         => esc_html__( 'Bubbles-2', 'videor-elementor' ),
                    'bubbles-3'         => esc_html__( 'Bubbles-3', 'videor-elementor' ),
                    'bubbles-4'         => esc_html__( 'Bubbles-4', 'videor-elementor' ),
                    'liquid-1'          => esc_html__( 'Liquid-1', 'videor-elementor' ),
                    'liquid-2'          => esc_html__( 'Liquid-2', 'videor-elementor' ),
                    'liquid-3'          => esc_html__( 'Liquid-3', 'videor-elementor' ),
                    'liquid-4'          => esc_html__( 'Liquid-4', 'videor-elementor' ),
                    'grunge-1'          => esc_html__( 'Grunge-1', 'videor-elementor' ),
                    'grunge-2'          => esc_html__( 'Grunge-2', 'videor-elementor' ),
                    'grunge-3'          => esc_html__( 'Grunge-3', 'videor-elementor' ),
                    'grunge-4'          => esc_html__( 'Grunge-4', 'videor-elementor' ),
                    'balloon-1'         => esc_html__( 'Balloon-1', 'videor-elementor' ),
                    'balloon-2'         => esc_html__( 'Balloon-2', 'videor-elementor' ),
                    'balloon-3'         => esc_html__( 'Balloon-3', 'videor-elementor' ),
                    'balloon-4'         => esc_html__( 'Balloon-4', 'videor-elementor' ),
                    'balloon-5'         => esc_html__( 'Balloon-5', 'videor-elementor' ),
                    'balloon-6'         => esc_html__( 'Balloon-6', 'videor-elementor' ),
                    'balloon-7'         => esc_html__( 'Balloon-7', 'videor-elementor' ),
                    'watercolor-1'      => esc_html__( 'Watercolor-1', 'videor-elementor' ),
                    'watercolor-2'      => esc_html__( 'Watercolor-2', 'videor-elementor' ),
                    'watercolor-3'      => esc_html__( 'Watercolor-3', 'videor-elementor' ),
                    'watercolor-4'      => esc_html__( 'Watercolor-4', 'videor-elementor' ),
                    'triangles-1'       => esc_html__( 'Triangles-1', 'videor-elementor' ),
                    'triangles-2'       => esc_html__( 'Triangles-2', 'videor-elementor' ),
                    'triangles-3'       => esc_html__( 'Triangles-3', 'videor-elementor' ),
                    'brush-1'           => esc_html__( 'Brush-1', 'videor-elementor' ),
                    'brush-2'           => esc_html__( 'Brush-2', 'videor-elementor' ),
                    'brush-3'           => esc_html__( 'Brush-3', 'videor-elementor' ),
                    'brush-4'           => esc_html__( 'Brush-4', 'videor-elementor' ),
                    'tiger'             => esc_html__( 'Tiger', 'videor-elementor' ),
                    'hexagon-1'         => esc_html__( 'Hexagon-1', 'videor-elementor' ),
                    'arabic-square'     => esc_html__( 'Arabic-square', 'videor-elementor' ),
                    'arabic-rhombus'    => esc_html__( 'Arabic-rhombus', 'videor-elementor' ),
                    'arabic-ellipse'    => esc_html__( 'Arabic-ellipse', 'videor-elementor' ),
                    'square'            => esc_html__( 'Square', 'videor-elementor' ),
                    'seal'              => esc_html__( 'Seal', 'videor-elementor' ),
                    'swatch'            => esc_html__( 'Swatch', 'videor-elementor' ),
                    'zig-zag'           => esc_html__( 'Zigzag', 'videor-elementor' ),
                    'custom'            => esc_html__( 'Custom', 'videor-elementor' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-image: url( "' . UnityPlugin::get_url() . 'images/masks/{{value}}.svg" ); -webkit-mask-image: url( "' . UnityPlugin::get_url() . 'images/masks/{{value}}.svg" );',
                ]
            ]
        );

        /** Custom mask */
        $this->add_control(
            'mask_custom',
            [
                'label' => __( 'Choose Mask', 'videor-elementor' ),
                'description' => __( 'SVG Image Only', 'videor-elementor' ),
                'type' => Controls_Manager::MEDIA,
                'dynamic' => ['active' => true],
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-image: url( {{url}} ); -webkit-mask-image: url( {{url}} );',
                ],
                'condition' => [ 'mask' => 'custom' ],
            ]
        );

        /** Mask Position */
        $this->add_responsive_control(
            'mask_position',
            [
                'label' => esc_html__( 'Mask Position', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'center center',
                'options' => [
                    'center center' => esc_html__( 'Center Center', 'videor-elementor' ),
                    'center left'   => esc_html__( 'Center Left', 'videor-elementor' ),
                    'center right'  => esc_html__( 'Center Right', 'videor-elementor' ),
                    'top center'    => esc_html__( 'Top Center', 'videor-elementor' ),
                    'top left'      => esc_html__( 'Top Left', 'videor-elementor' ),
                    'top right'     => esc_html__( 'Top Right', 'videor-elementor' ),
                    'bottom center' => esc_html__( 'Bottom Center', 'videor-elementor' ),
                    'bottom left'   => esc_html__( 'Bottom Left', 'videor-elementor' ),
                    'bottom right'  => esc_html__( 'Bottom Right', 'videor-elementor' ),
                    'custom'        => esc_html__( 'Custom', 'videor-elementor' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-position: {{value}}; -webkit-mask-position: {{value}};',
                ]
            ]
        );

        /** Mask Custom Position X */
        $this->add_responsive_control(
            'mask_position_custom_x',
            [
                'label' => esc_html__( 'Horizontal Offset', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'vh' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-position: {{SIZE}}{{UNIT}} {{mask_position_custom_y.size}}{{mask_position_custom_y.unit}}; -webkit-mask-position: {{SIZE}}{{UNIT}} {{mask_position_custom_y.size}}{{mask_position_custom_y.unit}};',
                ],
                'condition' => [ 'mask_position' => 'custom' ]
            ]
        );

        /** Mask Custom Position Y */
        $this->add_responsive_control(
            'mask_position_custom_y',
            [
                'label' => esc_html__( 'Vertical Offset', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'vh' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-position: {{mask_position_custom_x.size}}{{mask_position_custom_x.unit}} {{SIZE}}{{UNIT}}; -webkit-mask-position: {{mask_position_custom_x.size}}{{mask_position_custom_x.unit}} {{SIZE}}{{UNIT}};',
                ],
                'condition' => [ 'mask_position' => 'custom' ]
            ]
        );

        /** Mask Repeat */
        $this->add_responsive_control(
            'mask_repeat',
            [
                'label' => esc_html__( 'Mask Repeat', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'no-repeat',
                'options' => [
                    'no-repeat' => esc_html__( 'No-repeat', 'videor-elementor' ),
                    'repeat'    => esc_html__( 'Repeat', 'videor-elementor' ),
                    'repeat-x'  => esc_html__( 'Repeat-x', 'videor-elementor' ),
                    'repeat-y'  => esc_html__( 'Repeat-y', 'videor-elementor' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-repeat: {{value}}; -webkit-mask-repeat: {{value}};',
                ]
            ]
        );

        /** Mask Size */
        $this->add_responsive_control(
            'mask_size',
            [
                'label' => esc_html__( 'Mask Size', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'unset',
                'options' => [
                    'unset'     => esc_html__( 'Default', 'videor-elementor' ),
                    'cover'     => esc_html__( 'Cover', 'videor-elementor' ),
                    'contain'   => esc_html__( 'Contain', 'videor-elementor' ),
                    'custom'    => esc_html__( 'Custom', 'videor-elementor' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-size: {{value}}; -webkit-mask-size: {{value}};',
                ]
            ]
        );

        /** Mask Custom Size */
        $this->add_responsive_control(
            'mask_size_custom',
            [
                'label' => esc_html__( 'Custom Size', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'vh' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-size: {{SIZE}}{{UNIT}}; -webkit-mask-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [ 'mask_size' => 'custom' ]
            ]
        );

        /** End section */
        $this->end_controls_section();

    }

    /**
     * Content for Description
     *
     * @since 1.0.0
     * @access private
     */
    private function caption_content() {

        /** Start section properties */
        $this->start_controls_section(
            'description_content',
            [
                'label' => esc_html__( 'Caption', 'videor-elementor' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'header_heading',
            [
                'label' => __( 'Header', 'videor-elementor' ),
                'type' => Controls_Manager::HEADING,
                'condition' => [ 'show_header' => 'yes' ]
            ]
        );

        /** Header. */
        $this->add_control(
            'header',
            [
                'label' => esc_html__( 'Header', 'videor-elementor' ),
                'show_label' => false,
                'type' => Controls_Manager::TEXTAREA,
                'dynamic' => ['active' => true],
                'rows' => 1,
                'default' => esc_html__( 'Header', 'videor-elementor' ),
                'placeholder' => esc_html__( 'Header', 'videor-elementor' ),
                'condition' => [ 'show_header' => 'yes' ]
            ]
        );

        /** Header Position. */
        $this->add_responsive_control(
            'header_position',
            [
                'label' => esc_html__( 'Header Position', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'top' => 'Top',
                    'over' => 'Over',
                    'bottom' => 'Bottom',
                ],
                'default' => 'top',
                'condition'   => [ 'show_header' => 'yes' ]
            ]
        );

        /** HTML Tag. */
        $this->add_control(
            'videor_tag',
            [
                'label' => esc_html__( 'HTML Tag', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                    'h4' => 'H4',
                    'h5' => 'H5',
                    'h6' => 'H6',
                    'div' => 'div',
                    'span' => 'span',
                    'p' => 'p',
                ],
                'default' => 'h2',
                'condition' => [ 'show_header' => 'yes' ]
            ]
        );

        /** Show header. */
        $this->add_control(
            'show_header',
            [
                'label' => esc_html__( 'Header', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'videor-elementor' ),
                'label_off' => esc_html__( 'Hide', 'videor-elementor' ),
                'return_value' => 'yes',
                'default' => '',
            ]
        );

        $this->add_control(
            'subheader_heading',
            [
                'label' => __( 'Subheader', 'videor-elementor' ),
                'type' => Controls_Manager::HEADING,
                'condition' => [ 'show_subheader' => 'yes', 'show_header' => 'yes' ],
                'separator' => 'before',
            ]
        );

        /** Subheader. */
        $this->add_control(
            'videor_sub_name',
            [
                'label' => esc_html__( 'Subheader', 'videor-elementor' ),
                'show_label' => false,
                'type' => Controls_Manager::TEXTAREA,
                'dynamic' => ['active' => true],
                'rows' => 1,
                'default' => esc_html__( 'Subheader', 'videor-elementor' ),
                'placeholder' => esc_html__( 'Subheader', 'videor-elementor' ),
                'condition'   => [ 'show_subheader' => 'yes', 'show_header' => 'yes' ],
            ]
        );

        /** Subheader Position. */
        $this->add_control(
            'subheader_position',
            [
                'label' => esc_html__( 'Subheader Position', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'top' => 'Above Header',
                    'bottom' => 'Under Header',
                ],
                'default' => 'bottom',
                'condition'   => [ 'show_subheader' => 'yes', 'show_header' => 'yes' ]
            ]
        );

        /** Show Subheader. */
        $this->add_control(
            'show_subheader',
            [
                'label' => esc_html__( 'Subheader', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'videor-elementor' ),
                'label_off' => esc_html__( 'Hide', 'videor-elementor' ),
                'return_value' => 'yes',
                'condition' => [ 'show_header' => 'yes' ],
            ]
        );

        $this->add_control(
            'description_heading',
            [
                'label' => __( 'Description', 'videor-elementor' ),
                'type' => Controls_Manager::HEADING,
                'condition' => [ 'show_description' => 'yes' ],
                'separator' => 'before',
            ]
        );

        /** Description. */
        $this->add_control(
            'description',
            [
                'label' => esc_html__( 'Description', 'videor-elementor' ),
                'show_label' => false,
                'type' => Controls_Manager::TEXTAREA,
                'dynamic' => ['active' => true],
                'rows' => 5,
                'default' => esc_html__( 'Description', 'videor-elementor' ),
                'placeholder' => esc_html__( 'Description', 'videor-elementor' ),
                'condition' => [ 'show_description' => 'yes' ],
            ]
        );

        /** Description Position. */
        $this->add_responsive_control(
            'description_position',
            [
                'label' => esc_html__( 'Description Position', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'header'    => esc_html__( 'Top', 'videor-elementor' ),
                    'over'      => esc_html__( 'Over', 'videor-elementor' ),
                    'footer'    => esc_html__( 'Bottom','videor-elementor' )
                ],
                'default' => 'footer',
                'condition' => [ 'show_description' => 'yes' ],
            ]
        );

        /** HTML Tag. */
        $this->add_control(
            'description_tag',
            [
                'label' => esc_html__( 'HTML Tag', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'div' => 'div',
                    'span' => 'span',
                    'p' => 'p',
                ],
                'default' => 'p',
                'condition' => [ 'show_description' => 'yes' ],
            ]
        );

        /** Show description. */
        $this->add_control(
            'show_description',
            [
                'label' => esc_html__( 'Description', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'videor-elementor' ),
                'label_off' => esc_html__( 'Hide', 'videor-elementor' ),
                'return_value' => 'yes',
                'default' => '',
            ]
        );

        $this->add_control(
            'link_heading',
            [
                'label' => __( 'Link', 'videor-elementor' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [ 'show_link' => 'yes' ]
            ]
        );

        /** Link Position. */
        $this->add_control(
            'link_position',
            [
                'label' => esc_html__( 'Link Position', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'image' => esc_html__( 'Image', 'videor-elementor' ),
                    'box'   => esc_html__( 'Box', 'videor-elementor' ),
                ],
                'default' => 'image',
                'condition' => [ 'show_link' => 'yes' ]
            ]
        );

        /** URL link. */
        $this->add_control(
            'link_url',
            [
                'label' => esc_html__( 'URL', 'videor-elementor' ),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://codecanyon.net/user/merkulove', 'videor-elementor' ),
                'condition' => [ 'show_link' => 'yes' ]
            ]
        );

        /** Enable link. */
        $this->add_control(
            'show_link',
            [
                'label' => esc_html__( 'Enable link', 'videor-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'videor-elementor' ),
                'label_off' => esc_html__( 'Hide', 'videor-elementor' ),
                'return_value' => 'yes',
            ]
        );

        /** Justify Content. */
        $this->add_responsive_control(
            'description_justify',
            [
                'label' => esc_html__( 'Justify Content', 'videor-elementor' ),
                'description' => esc_html__( 'Only for "Over" position', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'flex-start' => 'Start',
                    'center' => 'Center',
                    'flex-end' => 'End',
                    'space-around' => 'Space Around',
                    'space-between' => 'Space Between',
                    'space-evenly' => 'Space Evenly',
                ],
                'default' => 'flex-start',
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-over' => 'justify-content: {{value}}',
                ],
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'header_position',
                            'operator' => '==',
                            'value' => 'over'
                        ],
                        [
                            'name' => 'description_position',
                            'operator' => '==',
                            'value' => 'over'
                        ]
                    ]
                ],
                'separator' => 'before'
            ]
        );

        /** End section */
        $this->end_controls_section();

    }

    /**
     * Style controls for Image
     *
     * @since 1.0.0
     * @access private
     */
    private function video_style() {

        $this->start_controls_section(
            'image_style',
            [
                'label' => esc_html__( 'Video', 'videor-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        /** Margin. */
        $this->add_responsive_control(
            'image_margin',
            [
                'label' => esc_html__( 'Margin', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-video' => 'margin: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
            ]
        );

        /** Padding. */
        $this->add_responsive_control(
            'image_padding',
            [
                'label' => esc_html__( 'Padding', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-video' => 'padding: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
                'separator' => 'after'
            ]
        );

        /** Width */
        $this->add_responsive_control(
            'image_width',
            [
                'label' => esc_html__( 'Width', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'vw' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-video' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        /** Height */
        $this->add_responsive_control(
            'video_height',
            [
                'label' => esc_html__( 'Height', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', 'vh' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 500,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-video' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'separator' => 'after'
            ]
        );

        /** Image Background */
        /** @noinspection PhpUndefinedClassInspection */
        $this->add_control(
            'image_background',
            [
                'label' => esc_html__( 'Background color', 'videor-elementor' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Color::get_type(),
                    'value' => Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-video' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        /** Video CSS filter */
        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'video_css_filters',
                'selector' => '{{WRAPPER}} .mdp-videor-video',
            ]
        );

        /** End style. */
        $this->end_controls_section();

    }

    /**
     * Style controls for Mask
     *
     * @since 1.0.0
     * @access private
     */
    private function mask_style() {

        /** Mask style section. */
        $this->start_controls_section(
            'style_content',
            [
                'label' => esc_html__( 'Clipping Mask', 'videor-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ] );

        /** Margin. */
        $this->add_responsive_control(
            'mask_margin',
            [
                'label' => esc_html__( 'Margin', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'margin: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
            ]
        );

        /** Padding. */
        $this->add_responsive_control(
            'mask_padding',
            [
                'label' => esc_html__( 'Padding', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'padding: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
            ]
        );

        /** Rotation. */
        $this->add_responsive_control(
            'mask_rotate',
            [
                'label' => esc_html__( 'Rotation', 'videor-elementor' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'deg' ],
                'default' => [
                    'unit' => 'deg',
                    'size' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'transform: rotate( {{SIZE}}{{UNIT}} );',
                    '{{WRAPPER}} .mdp-videor-video' => 'transform: rotate( calc( -1 * {{SIZE}}{{UNIT}} ) );',
                ]
            ]
        );

        /** End animation content style. */
        $this->end_controls_section();

    }

    /**
     * Style controls for Header
     *
     * @since 1.0.0
     * @access private
     */
    private function header_style() {

        /** Header style. */
        $this->start_controls_section( 'style_header',
            [
                'label' => esc_html__( 'Header', 'videor-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [ 'show_header' => 'yes' ],
            ]
        );

        /** Margin. */
        $this->add_responsive_control(
            'videor_margin_header',
            [
                'label' => esc_html__( 'Margin', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-heading' => 'margin: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
            ]
        );

        /** Padding. */
        $this->add_responsive_control(
            'videor_padding_header',
            [
                'label' => esc_html__( 'Padding', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-heading' => 'padding: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
            ]
        );

        /** Color. */
        /** @noinspection PhpUndefinedClassInspection */
        $this->add_control(
            'color_header',
            [
                'label' => esc_html__( 'Color', 'videor-elementor' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Color::get_type(),
                    'value' => Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-header' => 'color: {{VALUE}}',
                ],
            ]
        );

        /** Typography. */
        /** @noinspection PhpUndefinedClassInspection */
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'header_typography',
                'label' => esc_html__( 'Typography', 'videor-elementor' ),
                'scheme' => Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .mdp-videor-header',
            ]
        );

        /** Shadow. */
        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'header_shadow',
                'label' => esc_html__( 'Shadow', 'videor-elementor' ),
                'selector' => '{{WRAPPER}} .mdp-videor-header',
            ]
        );

        /** Background */
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'header_background',
                'label' => esc_html__( 'Background', 'videor-elementor' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .mdp-videor-heading',
            ]
        );

        /** Alignment. */
        $this->add_responsive_control(
            'header_align',
            [
                'label' => esc_html__( 'Alignment', 'videor-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'videor-elementor' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'videor-elementor' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'videor-elementor' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-heading' => 'text-align: {{header_align}};',
                ],
                'toggle' => true,
            ]
        );

        /** Subheader. */
        $this->add_control(
            'text_animation_header',
            [
                'label' => esc_html__( 'Subheader', 'videor-elementor' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
                'condition'   => ['show_subheader' => 'yes']
            ]
        );

        /** Margin. */
        $this->add_responsive_control(
            'videor_margin_subheader',
            [
                'label' => esc_html__( 'Margin', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-subheader' => 'margin: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
                'condition'   => ['show_subheader' => 'yes']
            ]
        );

        /** Padding. */
        $this->add_responsive_control(
            'videor_padding_subheader',
            [
                'label' => esc_html__( 'Padding', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-subheader' => 'padding: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
                'condition'   => ['show_subheader' => 'yes']
            ]
        );

        /** Color. */
        /** @noinspection PhpUndefinedClassInspection */
        $this->add_control(
            'color_subheader',
            [
                'label' => esc_html__( 'Color', 'videor-elementor' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Color::get_type(),
                    'value' => Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-subheader' => 'color: {{VALUE}}',
                ],
                'condition'   => ['show_subheader' => 'yes']
            ]
        );

        /** Typography. */
        /** @noinspection PhpUndefinedClassInspection */
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subheader_typography',
                'label' => esc_html__( 'Typography', 'videor-elementor' ),
                'scheme' => Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .mdp-videor-subheader',
                'condition'   => ['show_subheader' => 'yes']
            ]
        );

        /** Shadow. */
        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'subheader_shadow',
                'label' => esc_html__( 'Shadow', 'videor-elementor' ),
                'selector' => '{{WRAPPER}} .mdp-videor-subheader',
                'condition'   => ['show_subheader' => 'yes']
            ]
        );

        /** End header style. */
        $this->end_controls_section();

    }

    /**
     * Style for Description
     *
     * @since 1.0.0
     * @access private
     */
    private function description_style() {

        /** Description style. */
        $this->start_controls_section( 'style_description',
            [
                'label' => esc_html__( 'Description', 'videor-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [ 'show_description' => 'yes' ],
            ]
        );

        /** Margin. */
        $this->add_responsive_control(
            'videor_margin_description',
            [
                'label' => esc_html__( 'Margin', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-description' => 'margin: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
            ]
        );

        /** Padding. */
        $this->add_responsive_control(
            'videor_padding_description',
            [
                'label' => esc_html__( 'Padding', 'videor-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-description' => 'padding: {{top}}{{unit}} {{right}}{{unit}} {{bottom}}{{unit}} {{left}}{{unit}};',
                ],
                'toggle' => true,
            ]
        );

        /** Color. */
        /** @noinspection PhpUndefinedClassInspection */
        $this->add_control(
            'color_description',
            [
                'label' => esc_html__( 'Color', 'videor-elementor' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Color::get_type(),
                    'value' => Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-description' => 'color: {{VALUE}}',
                ],
            ]
        );

        /** Typography. */
        /** @noinspection PhpUndefinedClassInspection */
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'label' => esc_html__( 'Typography', 'videor-elementor' ),
                'scheme' => Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .mdp-videor-description',
            ]
        );

        /** Shadow. */
        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'description_shadow',
                'label' => esc_html__( 'Shadow', 'videor-elementor' ),
                'selector' => '{{WRAPPER}} .mdp-videor-description',
            ]
        );

        /** Background */
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'description_background',
                'label' => esc_html__( 'Background', 'videor-elementor' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .mdp-videor-description',
            ]
        );

        /** Alignment. */
        $this->add_responsive_control(
            'description_align',
            [
                'label' => esc_html__( 'Alignment', 'videor-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'videor-elementor' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'videor-elementor' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'videor-elementor' ),
                        'icon' => 'fa fa-align-right',
                    ],
                    'justify' => [
                        'title' => esc_html__( 'Justify', 'videor-elementor' ),
                        'icon' => 'fa fa-align-justify',
                    ],
                ],
                'default' => 'center',
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor-description' => 'text-align: {{header_align}};',
                ],
                'toggle' => true,
            ]
        );

        /** End description style. */
        $this->end_controls_section();

    }

    /**
     * Style controls for Overlay layer
     *
     * @since 1.0.0
     * @access private
     */
    private function overlay_style() {

        /** Description style. */
        $this->start_controls_section( 'style_overlay',
            [
                'label' => esc_html__( 'Overlay', 'videor-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [ 'show_image_overlay' => 'yes' ],
            ]
        );

        /** Background */
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'overlay_background',
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .mdp-videor-overlay',
                'condition' => [ 'show_image_overlay' => 'yes' ]
            ]
        );

        /** Transition */
        $this->add_control(
            'overlay_transition',
            [
                'label' => __( 'Transition duration', 'videor-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'size' => 0.2,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 5,
                        'step' => 0.1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .mdp-videor .mdp-videor-overlay' => 'transition: {{SIZE}}s;',
                    '{{WRAPPER}} .mdp-videor .mdp-videor-mask' => 'transition: {{SIZE}}s;',
                ],
            ]
        );

        /** Tabs */
        $this->start_controls_tabs(
            'overlay_tabs'
        );

        /** Overlay Hover Tab */
        $this->start_controls_tab(
            'overlay_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'plugin-name' ),
            ]
        );

            $this->add_group_control(
                Group_Control_Css_Filter::get_type(),
                [
                    'name' => 'overlay_normal_css_filters',
                    'selector' => '{{WRAPPER}} .mdp-videor .mdp-videor-overlay',
                ]
            );

            $this->add_control(
                'overlay_normal_opacity',
                [
                    'label' => __( 'Opacity', 'videor-elementor' ),
                    'type' => Controls_Manager::SLIDER,
                    'default' => [
                        'unit' => '%',
                        'size' => 100,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .mdp-videor .mdp-videor-overlay' => 'opacity: {{SIZE}}%;',
                    ],
                ]
            );

            $this->add_control(
                'overlay_normal_width',
                [
                    'label' => __( 'Width', 'videor-elementor' ),
                    'type' => Controls_Manager::SLIDER,
                    'default' => [
                        'unit' => '%',
                        'size' => 100,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .mdp-videor .mdp-videor-mask' => 'width: {{SIZE}}%; margin: auto;',
                    ],
                ]
            );

        $this->end_controls_tab();

        /** Overlay Hover Tab */
        $this->start_controls_tab(
            'overlay_hover_tab',
            [
                'label' => esc_html__( 'Hover', 'plugin-name' ),
            ]
        );

            $this->add_group_control(
                Group_Control_Css_Filter::get_type(),
                [
                    'name' => 'overlay_hover_css_filters',
                    'selector' => '{{WRAPPER}} .mdp-videor:hover .mdp-videor-overlay',
                ]
            );

            $this->add_control(
                'overlay_hover_opacity',
                [
                    'label' => __( 'Opacity', 'videor-elementor' ),
                    'type' => Controls_Manager::SLIDER,
                    'default' => [
                        'unit' => '%',
                        'size' => 100,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .mdp-videor:hover .mdp-videor-overlay' => 'opacity: {{SIZE}}%;',
                    ],
                ]
            );

            $this->add_control(
                'overlay_hover_width',
                [
                    'label' => __( 'Width', 'videor-elementor' ),
                    'type' => Controls_Manager::SLIDER,
                    'default' => [
                        'unit' => '%',
                        'size' => 100,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .mdp-videor:hover .mdp-videor-mask' => 'width: {{SIZE}}%; margin: auto;',
                    ],
                ]
            );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        /** End section. */
        $this->end_controls_section();

    }

    /**
     * Style controls for lightbox
     *
     * @since 1.0.0
     * @access private
     */
    private function lightbox_style() {

        /** Start section */
        $this->start_controls_section(
            'style_lightbox',
            [
                'label' => __( 'Lightbox', 'videor-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'lightbox' => 'yes',
                    'show_image_overlay' => 'yes'
                ],
            ]
        );

        /** Lightbox aspect ratio */
        $this->add_control(
            'aspect_ratio',
            [
                'label' => __( 'Aspect Ratio', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '169' => '16:9',
                    '219' => '21:9',
                    '43' => '4:3',
                    '32' => '3:2',
                    '11' => '1:1',
                    '916' => '9:16',
                ],
                'default' => '169',
                'prefix_class' => 'elementor-aspect-ratio-',
                'frontend_available' => true,
            ]
        );

        /** Lightbox background */
        $this->add_control(
            'lightbox_color',
            [
                'label' => __( 'Background Color', 'videor-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '#elementor-lightbox-{{ID}}' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        /** UI color */
        $this->add_control(
            'lightbox_ui_color',
            [
                'label' => __( 'UI Color', 'videor-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '#elementor-lightbox-{{ID}} .dialog-lightbox-close-button' => 'color: {{VALUE}}',
                ],
            ]
        );

        /** UI hover color */
        $this->add_control(
            'lightbox_ui_color_hover',
            [
                'label' => __( 'UI Hover Color', 'videor-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '#elementor-lightbox-{{ID}} .dialog-lightbox-close-button:hover' => 'color: {{VALUE}}',
                ],
                'separator' => 'after',
            ]
        );

        /** Content Width */
        $this->add_control(
            'lightbox_video_width',
            [
                'label' => __( 'Content width', 'videor-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'unit' => '%',
                ],
                'range' => [
                    '%' => [
                        'min' => 30,
                    ],
                ],
                'selectors' => [
                    '(desktop+)#elementor-lightbox-{{ID}} .elementor-video-container' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        /** Content Position */
        $this->add_control(
            'lightbox_content_position',
            [
                'label' => __( 'Content position', 'videor-elementor' ),
                'type' => Controls_Manager::SELECT,
                'frontend_available' => true,
                'options' => [
                    ''      => __( 'Center', 'videor-elementor' ),
                    'top'   => __( 'Top', 'videor-elementor' ),
                ],
                'selectors' => [
                    '#elementor-lightbox-{{ID}} .elementor-video-container' => '{{VALUE}}; transform: translateX(-50%);',
                ],
                'selectors_dictionary' => [
                    'top' => 'top: 60px',
                ],
            ]
        );

        /** Entrance Animation */
        $this->add_responsive_control(
            'lightbox_content_animation',
            [
                'label' => __( 'Entrance Animation', 'videor-elementor' ),
                'type' => Controls_Manager::ANIMATION,
                'frontend_available' => true,
            ]
        );

        /** End section */
        $this->end_controls_section();

    }

    /**
     * Add the widget controls.
     *
     * @since 1.0.0
     * @access protected
     *
     * @return void with category names
     **/
    protected function register_controls() {

        /** Content -> Video */
        $this->video_content();

        /** Content -> Mask */
        $this->mask_content();

        /** Content -> Description */
        $this->caption_content();

        /** Style -> Image */
        $this->video_style();

        /** Style -> Mask */
        $this->mask_style();

        /** Style -> Overlay */
        $this->overlay_style();

        /** Style -> Lightbox */
        $this->lightbox_style();

        /** Style -> Header */
        $this->header_style();

        /** Style -> Description */
        $this->description_style();

    }

    /**
     * Render Frontend Output. Generate the final HTML on the frontend.
     *
     * @since 1.0.0
     * @access protected
     **/
    protected function render() {

        /** Get all the values from the admin panel. */
        $settings = $this->get_settings_for_display();
        $idSection = $this->get_id();
        $target = isset($settings['link_url']['is_external']) ? ' target="_blank"' : '';
        $nofollow = isset($settings['link_url']['nofollow']) ? ' rel="nofollow"' : '';

        /**
         * Compose video URL
         * @var $video_url string
         */
        $video_url = $settings[ $settings['video_type'] . '_url' ];
        if ( 'hosted' === $settings['video_type'] ) {
            $video_url = $this->get_hosted_video_url();
        }

        if ( empty( $video_url ) ) {
            return;
        }

        /** Render video player HTML code */
        if ( 'hosted' === $settings['video_type'] ) {
            ob_start();
            $this->render_hosted_video();
            $video_html = ob_get_clean();
            $embed_params = [];
            $embed_options = [];
        } else {
            $embed_params = $this->get_embed_params();
            $embed_options = $this->get_embed_options();
            $video_html = Embed::get_embed_html( $video_url, $embed_params, $embed_options );
        }

        if ( empty( $video_html ) ) {
            echo esc_html__( 'Cannot render video by URL: ', 'videor-elementor' ) . esc_url( $video_url );
            return;
        }

        /** Prepare render attributes for caption */
        $this->add_render_attribute( 'videor_sub_name', 'class', 'mdp-videor-subheader' );
        $this->add_render_attribute( 'header', 'class', 'mdp-videor-header' );
        $this->add_render_attribute( 'description', 'class', 'mdp-videor-description' );

        /** Prepare render attributes for video wrapper */
        $this->add_render_attribute( 'videor-video', 'class', 'mdp-videor-video' );

        /** Prepare render attribute for video container */
        $this->add_render_attribute( 'videor-wrap', 'class', 'mdp-videor-wrap' );
        $this->add_render_attribute( 'videor-wrap', 'class', 'mdp-videor-' . $settings[ 'video_position' ] );

        /** Wrapper data attributes */
        if ( $settings[ 'play_over' ] ) {
            $this->add_render_attribute( 'mdp_videor', 'data-play-over', $settings[ 'play_over' ] );
        }
        if ( $settings[ 'stop_leave' ] ) {
            $this->add_render_attribute( 'mdp_videor', 'data-stop-leave', $settings[ 'stop_leave' ] );
        }
        ?>

        <div id="mdp-videor-<?php echo esc_attr($idSection); ?>" class="mdp-videor" <?php echo $this->get_render_attribute_string( 'mdp_videor' ); ?>>

            <?php
            /** Header on top */
            if( $settings[ 'show_header' ] === 'yes' and $settings[ 'header_position' ] === 'top' ): $this->header_render(); endif;

            /** Displays a brief description after the title. */
            if ( $settings[ 'description_position' ] === 'header' and $settings[ 'show_description' ] === 'yes' ):
                $this->add_inline_editing_attributes( 'description', 'basic' );
                echo '<' . esc_attr( $settings[ 'description_tag' ] ) . ' ' . $this->get_render_attribute_string( 'description' ) . ' >' . wp_kses_post( $settings[ 'description' ] ) . '</' . esc_attr( $settings[ 'description_tag' ] ) . '>';
            endif;

            /** Display link for the image */
            if( $settings[ 'show_link' ] === 'yes' and $settings[ 'link_position' ] === 'image' ): ?>
            <a href="<?php echo esc_attr($settings['link_url']['url']); ?>" <?php echo esc_attr( $target ) .' '. esc_attr( $nofollow );  ?>>
                <?php endif; ?>

                <div class="mdp-videor-mask">

                    <div <?php echo $this->get_render_attribute_string( 'videor-video' ); ?>>

                        <div <?php echo $this->get_render_attribute_string( 'videor-wrap' ); ?>>

                            <?php

                            /** Video */
                            echo $video_html;

                            /** Lightbox */
                            if ( $settings['lightbox'] === 'yes' ) :

                                if ( 'hosted' === $settings['video_type'] ) {
                                    $lightbox_url = $video_url;
                                } else {
                                    $lightbox_url = Embed::get_embed_url( $video_url, $embed_params, $embed_options );
                                }

                                $lightbox_options = [
                                    'type' => 'video',
                                    'videoType' => $settings['video_type'],
                                    'url' => $lightbox_url,
                                    'modalOptions' => [
                                        'id' => 'elementor-lightbox-' . $this->get_id(),
                                        'entranceAnimation' => $settings['lightbox_content_animation'],
                                        'entranceAnimation_tablet' => $settings['lightbox_content_animation_tablet'],
                                        'entranceAnimation_mobile' => $settings['lightbox_content_animation_mobile'],
                                        'videoAspectRatio' => $settings['aspect_ratio'],
                                    ],
                                ];

                                if ( 'hosted' === $settings['video_type'] ) {
                                    $lightbox_options['videoParams'] = $this->get_hosted_params();
                                }

                                /** Prepare overlay */
                                $this->add_render_attribute( 'image-overlay', [
                                    'data-elementor-open-lightbox' => 'yes',
                                    'data-elementor-lightbox' => wp_json_encode( $lightbox_options ),
                                ] );

                                if ( Plugin::$instance->editor->is_edit_mode() ) {
                                    $this->add_render_attribute( 'image-overlay', 'class', 'elementor-clickable' );
                                }

                            endif;

                            /** Overlay */
                            if ( $settings['show_image_overlay'] === 'yes' ) :

                                $this->add_render_attribute( 'image-overlay', 'class', 'mdp-videor-overlay' ); ?>
                                <div <?php echo $this->get_render_attribute_string( 'image-overlay' ); ?>></div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <?php
                /** Display caption over the image */
                if( $settings[ 'header_position' ] === 'over'  or $settings[ 'description_position' ] === 'over' ): ?>
                    <div class="mdp-videor-over">
                        <?php
                        /** Display Header */
                        if ( $settings[ 'header_position' ] === 'over' and $settings[ 'show_header' ] === 'yes' ):
                            $this->header_render();
                        endif;
                        /** Display Description */
                        if ( $settings[ 'description_position' ] === 'over' and $settings[ 'show_description' ] === 'yes' ):
                            $this->add_inline_editing_attributes( 'description', 'basic' );
                            echo '<' . esc_attr( $settings[ 'description_tag' ] ) . ' ' . $this->get_render_attribute_string( 'description' ) . ' >' . wp_kses_post( $settings[ 'description' ] ) . '</' . esc_attr( $settings[ 'description_tag' ] ) . '>';
                        endif;
                        ?>
                    </div>
                <?php endif; ?>

                <?php if( $settings['show_link'] === 'yes' and $settings['link_position'] === 'image' ): ?>
            </a>
        <?php endif;

        /** Header on bottom */
        if( $settings[ 'show_header' ] === 'yes' and $settings[ 'header_position' ] === 'bottom' ): $this->header_render(); endif;

        /** We display a short description if you want to display it at the end of the section. */
        if ( $settings[ 'description_position' ] === 'footer' and $settings[ 'show_description' ] === 'yes' ):
            $this->add_inline_editing_attributes( 'description', 'basic' );
            echo '<' . esc_attr( $settings['description_tag'] ) . ' ' . $this->get_render_attribute_string( 'description' ) . '>' . wp_kses_post( $settings['description'] ) . '</' . esc_attr( $settings['description_tag'] ) . '>';
        endif;

        /** Link for the whole box */
        if( $settings[ 'show_link' ] === 'yes' and $settings[ 'link_position' ] === 'box' ): ?>
            <a href="<?php echo esc_attr( $settings[ 'link_url' ][ 'url' ] ); ?>" class="mdp-videor-link" <?php echo esc_attr( $target ) .' '. esc_attr( $nofollow );  ?> ></a>
        <?php endif; ?>

        </div>

        <!--suppress JSUnresolvedVariable -->
        <script>

            ( function ( $ ) {

                "use strict";

                $( document ).ready( function () {
                    mdpVideorCrop( '<?php echo esc_attr($idSection); ?>', <?php echo is_array( $settings[ 'ratio' ] ) ? esc_attr( $settings[ 'ratio' ][ 'size' ] ) : 100; ?> );
                } );

                <?php if ( Plugin::$instance->editor->is_edit_mode() || Plugin::$instance->preview->is_preview_mode() ) { ?>

                let mdpTryScale = 0;
                let mdpVideorInterval = setInterval( function () {
                    mdpVideorCrop( '<?php echo esc_attr( $idSection ); ?>', <?php echo is_array( $settings[ 'ratio' ] ) ? esc_attr( $settings[ 'ratio' ][ 'size' ] ) : 100; ?> );
                    mdpTryScale++;
                    if ( mdpTryScale > 10 ) {
                        clearInterval( mdpVideorInterval );
                    }
                }, 100);


                <?php } else { ?>

                $( window ).resize( function () {
                    mdpVideorCrop( '<?php echo esc_attr($idSection); ?>', <?php echo is_array( $settings[ 'ratio' ] ) ? esc_attr( $settings[ 'ratio' ][ 'size' ] ) : 100; ?> );
                } );

                <?php } ?>

            } ( jQuery ) );

        </script>

        <?php

    }

    /**
     * Render Header
     *
     * @since 1.0.0
     * @access private
     */
    private function header_render() {
        $settings = $this->get_settings_for_display();
        ?>

        <<?php echo esc_attr( $settings[ 'videor_tag' ] ) ?> class="mdp-videor-heading">
        <?php

        /** Display the subheader above the title. */
        if( $settings[ 'show_subheader' ] === 'yes' and $settings[ 'subheader_position' ] === 'top' ) {
            $this->add_inline_editing_attributes( 'videor_sub_name', 'basic' );
            ?><span <?php echo $this->get_render_attribute_string( 'videor_sub_name' ); ?>><?php echo wp_kses_post( $settings[ 'videor_sub_name' ] ); ?></span><?php
        }

        /** Display the header. */
        $this->add_inline_editing_attributes( 'header', 'basic' );
        ?><span <?php echo $this->get_render_attribute_string( 'header' ); ?>><?php echo wp_kses_post( $settings[ 'header' ] ); ?></span><?php


        /** Display the subheader below the title. */
        if($settings[ 'show_subheader' ] === 'yes' and $settings[ 'subheader_position' ] === 'bottom' ) {
            $this->add_inline_editing_attributes( 'videor_sub_name', 'basic' );
            ?><span <?php echo $this->get_render_attribute_string( 'videor_sub_name' ); ?>><?php echo wp_kses_post( $settings[ 'videor_sub_name' ] ); ?></span><?php
        }

        ?>
        </<?php echo esc_attr( $settings['videor_tag'] ) ?>>

        <?php
    }

    /**
     * Render video widget as plain content.
     * Override the default behavior, by printing the video URL instead of rendering it.
     *
     * @since 1.0.0
     * @access public
     */
    public function render_plain_content() {
        $settings = $this->get_settings_for_display();

        if ( 'hosted' !== $settings['video_type'] ) {
            $url = $settings[ $settings['video_type'] . '_url' ];
        } else {
            $url = $this->get_hosted_video_url();
        }

        echo esc_url( $url );
    }

    /**
     * Get embed params.
     *
     * Retrieve video widget embed parameters.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Video embed parameters.
     */
    public function get_embed_params() {

        $settings = $this->get_settings_for_display();
        $params = [];
        $params_dictionary = [];

        if ( $settings['autoplay'] ) {
            $params['autoplay'] = '1';

            if ( $settings['play_on_mobile'] ) {
                $params['playsinline'] = '1';
            }
        }

        /** YouTube params */
        if ( 'youtube' === $settings['video_type'] ) {

            $params_dictionary = [
                'loop',
                'controls',
                'mute',
                'modestbranding',
            ];

            if ( $settings['loop'] ) {
                $video_properties = Embed::get_video_properties( $settings[ 'youtube_url' ] );
                $params['playlist'] = $video_properties[ 'video_id' ];
            }

            $params[ 'start' ] = $settings[ 'start' ];
            $params[ 'end' ] = $settings[ 'end' ];
            $params[ 'rel' ] = '0';
            $params[ 'showinfo' ] = '0';
            $params[ 'fs' ] = '0';
            $params[ 'wmode' ] = 'opaque';

            /** Vimeo params */
        } elseif ( 'vimeo' === $settings['video_type'] ) {

            $params_dictionary = [
                'loop',
                'controls',
                'mute' => 'muted',
            ];
            $params[ 'vimeo_title' ] = 'title';
            $params[ 'vimeo_portrait' ] = 'portrait';
            $params[ 'vimeo_byline' ] = 'byline';
            $params[ 'vimeo_controls' ] = 'controls';
            $params[ 'autopause' ] = '0';
            $params[ 'transparent' ] = '1';
        }

        /**
         * @var  $key string
         * @var  $param_name string
         */
        foreach ( $params_dictionary as $key => $param_name ) {
            $setting_name = $param_name;

            if ( is_string( $key ) ) {
                $setting_name = $key;
            }

            $setting_value = $settings[ $setting_name ] ? '1' : '0';
            $params[ $param_name ] = $setting_value;
        }

        return $params;
    }

    /**
     * Get embed options
     *
     * @since 1.0.0
     * @access private
     */
    private function get_embed_options() {
        $settings = $this->get_settings_for_display();

        $embed_options = [];

        if ( 'youtube' === $settings['video_type'] ) {
            $embed_options['privacy'] = $settings['yt_privacy'];
        } elseif ( 'vimeo' === $settings['video_type'] ) {
            $embed_options['start'] = $settings['start'];
        }

        $embed_options['lazy_load'] = false;

        return $embed_options;
    }

    /**
     * Get self-hosted video URL
     *
     * @since 1.0.0
     * @access private
     */
    private function get_hosted_params() {

        $settings = $this->get_settings_for_display();

        $video_params = [];

        foreach ( [ 'autoplay', 'loop', 'controls' ] as $option_name ) {
            if ( $settings[ $option_name ] ) {
                $video_params[ $option_name ] = '';
            }
        }

        if ( $settings['mute'] ) {
            $video_params['muted'] = 'muted';
        }

        if ( $settings['play_on_mobile'] ) {
            $video_params['playsinline'] = '';
        }

        $video_params['controlsList'] = 'nodownload';

        if ( $settings['poster']['url'] ) {
            $video_params['poster'] = $settings['poster']['url'];
        }

        return $video_params;
    }

    /**
     * Get self-hosted videos URL
     *
     * @return string
     * @since 1.0.0
     * @access private
     */
    private function get_hosted_video_url() {
        $settings = $this->get_settings_for_display();

        if ( ! empty( $settings['insert_url'] ) ) {
            $video_url = $settings['external_url']['url'];
        } else {
            $video_url = $settings['hosted_url']['url'];
        }

        if ( empty( $video_url ) ) {
            return '';
        }

        if ( $settings['start'] || $settings['end'] ) {
            $video_url .= '#t=';
        }

        if ( $settings['start'] ) {
            $video_url .= $settings['start'];
        }

        if ( $settings['end'] ) {
            $video_url .= ',' . $settings['end'];
        }

        return $video_url;
    }

    /**
     * Render Hosted Videos
     *
     * @since 1.0.0
     * @access private
     */
    private function render_hosted_video() {
        $video_url = $this->get_hosted_video_url();
        if ( empty( $video_url ) ) {
            return;
        }

        $video_params = $this->get_hosted_params();
        ?>
        <video class="elementor-video" src="<?php echo esc_url( $video_url ); ?>" <?php echo Utils::render_html_attributes( $video_params ); ?>></video>
        <?php
    }

    /**
     * Return link for documentation
     * Used to add stuff after widget
     *
     * @since 1.0.0
     * @access public
     **/
    public function get_custom_help_url() {
        return 'https://docs.merkulov.design/category/videor-elementor/';
    }

}
