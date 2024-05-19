<?php
namespace Creativecv\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCVFOOTER extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bwdcv-cv-builder-footer';
	}

	public function get_title() {
		return esc_html__( 'BWD CV FOOTER', 'bwdcv-cv-builder' );
	}

	public function get_icon() {
		return 'eicon-archive-posts bwdcv-cv-builder-icon';
	}

	public function get_categories() {
		return [ 'bwdcv-cv-builder-category' ];
	}

    public function get_keywords() {
		return [ 'cv', 'arrow', 'bwdcv-cv-builder' ];
	}

	public function get_script_depends() {
		return [ 'bwdcv-cv-builder-category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdcv_cv_builder_style',
		    [
		        'label' => esc_html__('Cv Style','bwdcv-cv-builder'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcv-cv-builder_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwdcv-cv-builder' ),
					'style2' => esc_html__( 'Style 2', 'bwdcv-cv-builder' ),
					'style3' => esc_html__( 'Style 3', 'bwdcv-cv-builder' ),
					'style4' => esc_html__( 'Style 4', 'bwdcv-cv-builder' ),
					'style5' => esc_html__( 'Style 5', 'bwdcv-cv-builder' ),
					'style6' => esc_html__( 'Style 6', 'bwdcv-cv-builder' ),
					'style7' => esc_html__( 'Style 7', 'bwdcv-cv-builder' ),
					'style8' => esc_html__( 'Style 8', 'bwdcv-cv-builder' ),
					'style9' => esc_html__( 'Style 9', 'bwdcv-cv-builder' ),
					'style10' => esc_html__( 'Style 10', 'bwdcv-cv-builder' ),
					'style11' => esc_html__( 'Style 11', 'bwdcv-cv-builder' ),
					'style12' => esc_html__( 'Style 12', 'bwdcv-cv-builder' ),
					'style13' => esc_html__( 'Style 13', 'bwdcv-cv-builder' ),
					'style14' => esc_html__( 'Style 14', 'bwdcv-cv-builder' ),
					'style15' => esc_html__( 'Style 15', 'bwdcv-cv-builder' ),
					'style16' => esc_html__( 'Style 16', 'bwdcv-cv-builder' ),
					'style17' => esc_html__( 'Style 17', 'bwdcv-cv-builder' ),
					'style18' => esc_html__( 'Style 18', 'bwdcv-cv-builder' ),
					'style19' => esc_html__( 'Style 19', 'bwdcv-cv-builder' ),
					'style20' => esc_html__( 'Style 20', 'bwdcv-cv-builder' ),
					'style21' => esc_html__( 'Style 21', 'bwdcv-cv-builder' ),
					'style22' => esc_html__( 'Style 22', 'bwdcv-cv-builder' ),
					'style23' => esc_html__( 'Style 23', 'bwdcv-cv-builder' ),
					'style24' => esc_html__( 'Style 24', 'bwdcv-cv-builder' ),
					'style25' => esc_html__( 'Style 25', 'bwdcv-cv-builder' ),
				],
			]
		);

		$this->end_controls_section();
        
		// footer
		$this->start_controls_section(
			'bwdcv_footer_section',
			[
				'label' => esc_html__( 'Footer', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
			
		);
		// footer-title-align
        $this->add_responsive_control(
			'bwdcv_footer_align',
			[
				'label' => esc_html__( 'Title Alignment', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdcv-cv-builder' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdcv-cv-builder' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdcv-cv-builder' ),
						'icon' => 'eicon-text-align-right',
					],
				],
                'selectors' => [
					'{{WRAPPER}} .bwd-cv-meta' => 'text-align: {{VALUE}}',
				],
				'default' => 'left',
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdcv_video_type_show',
			[
				'label' => esc_html__( 'Show Video', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdcv-cv-builder' ),
				'label_off' => esc_html__( 'Hide', 'bwdcv-cv-builder' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_video_type',
			[
				'label' => esc_html__( 'Source', 'bwdcv-cv-builder' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'youtube',
				'options' => [
					'youtube' => esc_html__( 'YouTube', 'bwdcv-cv-builder' ),
					'hosted' => esc_html__( 'Self Hosted', 'bwdcv-cv-builder' ),
				],
				'condition' => [
					'bwdcv_video_type_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_video_youtube_url',
			[
				'label' => esc_html__( 'Link', 'bwdcv-cv-builder' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your URL', 'bwdcv-cv-builder' ) . ' (YouTube)',
				'label_block' => true,
				'default' => [
					'url' => 'https://www.youtube.com/watch?v=pNje3bWz7V8',
				],
				'condition' => [
					'bwdcv_video_type' => 'youtube',
					'bwdcv_video_type_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_video',
			[
				'label' => esc_html__( 'Choose video', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'video',
				'condition' => [
					'bwdcv_video_type' => 'hosted',
					'bwdcv_video_type_show' => 'yes',
				],
			]
		);
		// footer signature_upload
		$this->add_control(
			'bwdcv_signature_upload_show',
			[
				'label' => esc_html__( 'Show Signature', 'bwdab-author-bio' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdab-author-bio' ),
				'label_off' => esc_html__( 'Hide', 'bwdab-author-bio' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_signature_upload',
			[
				'label' => esc_html__( 'Choose Image', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/sign-white.png',
				],
				'condition' => [
					'bwdcv_signature_upload_show' => 'yes',
				],
			]
		);
		// footer button
		$this->add_control(
			'bwdcv_footer_btn_show',
			[
				'label' => esc_html__( 'Show Button', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdcv-cv-builder' ),
				'label_off' => esc_html__( 'Hide', 'bwdcv-cv-builder' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_footer_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Contact Me', 'bwdcv-cv-builder' ),
				'placeholder' => esc_html__( 'Type button text here', 'bwdcv-cv-builder' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcv_footer_btn_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_footer_btn_link',
			[
				'label' => esc_html__( 'Link', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwdcv-cv-builder' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcv_footer_btn_show' => 'yes',
				],
			]
		);
		$this->end_controls_section();
        
		//box information
		$this->start_controls_section(
			'bwdcv_shadow_section',
			[
				'label' => esc_html__( 'Box Information', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		//shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdcv-cv-builder' ),
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-information',
			]
		);
		// information background color
		$this->add_control(
			'bwdcv_information_bg_color',
			[
				'label' => esc_html__( 'Box Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		// left item bg color
		$this->add_control(
			'bwdcv_item_bg_color',
			[
				'label' => esc_html__( 'Left Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-left-content, {{WRAPPER}} .bwd-cv-vilder-left-content-item' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style3','style4','style7','style10','style12','style14','style16','style17','style18','style21',],
				],
				
			]
		);
		// right item bg color
		$this->add_control(
			'bwdcv_item_right_bg_color',
			[
				'label' => esc_html__( 'Right Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-3-area .bwd-cv-vilder-right-content, {{WRAPPER}} .bwd-cv-vilder-12-area .bwd-cv-vilder-right-content' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
				
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcv_builder_wrapper_box_border',
				'label' => esc_html__( 'Border', 'bwdcv-cv-builder' ),
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-information',
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', "rem" ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// footer style tab
		$this->start_controls_section(
			'bwdcv_footer',
			[
				'label' => esc_html__( 'Footer', 'bwdcv-cv-builder' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// footer  Background-color
		$this->add_control(
			'bwdcv_footer_background_color',
			[
				'label' => esc_html__( 'Footer Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta' => 'Background: {{VALUE}}',
				],
			]
		);
		// footer vedio color
		$this->add_control(
			'bwdcv_footer_vedio_color',
			[
				'label' => esc_html__( 'Vedio Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'color: {{VALUE}}',
				],
			]
		);
		// footer vedio Background-color
		$this->add_control(
			'bwdcv_footer_vedio_background_color',
			[
				'label' => esc_html__( 'Vedio Background Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'Background: {{VALUE}}',
				],
			]
		);
		// footer vedio icon size
		$this->add_responsive_control(
			'bwdcv-footer-vedio-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 25,
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// footer vedio icon Round Size
		$this->add_responsive_control(
			'bwdcv-footer-vedio-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 80,
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// footer button tab
		$this->start_controls_tabs(
			'bwdcv_button_tabs'
		);
		// footer button normal
		$this->start_controls_tab(
			'bwdcv_button_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdcv-cv-builder' ),
			]
		);
		// footer button normal color
		$this->add_control(
			'bwdcv_footer_button_normal_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'color: {{VALUE}}',
				],
			]
		);
		// footer button normal Background-color
		$this->add_control(
			'bwdcv_footer_button_normal_background_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'Background: {{VALUE}}',
				],
			]
		);
		// footer button normal Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_footer_button_normal_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button',
			]
		);
		// footer button padding
		$this->add_responsive_control(
			'bwdcv_button_padding',
			[
				'label' => esc_html__( 'Button Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// footer button border radius
		$this->add_responsive_control(
			'bwdcv-button-border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		// footer button hover
		$this->start_controls_tab(
			'bwdcv_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdcv-cv-builder' ),
			]
		);
		// footer button hover color
		$this->add_control(
			'bwdcv_footer_button_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button:hover' => 'color: {{VALUE}}',
				],
			]
		);
		// footer button hover Background-color
		$this->add_control(
			'bwdcv_footer_button_hover_background_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button:hover' => 'Background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_responsive_control(
			'bwdcv_footer_padding',
			[
				'label' => esc_html__( 'Footer Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $bwdcv_signature_show = $settings['bwdcv_signature_upload_show'];
		$bwdcv_signature_upload = $settings['bwdcv_signature_upload']['url'];
		$bwdcv_show_video = $settings['bwdcv_video_type_show'];
		$video = $settings['bwdcv_video_type'];
		$bwdcv_button_show = $settings['bwdcv_footer_btn_show'];
		$bwdcv_button_text = $settings['bwdcv_footer_btn_text'];
		$bwdcv_button_url = $settings['bwdcv_footer_btn_link']['url'];
		$bwdcv_video_youtube = $settings['bwdcv_video_youtube_url']['url'];

        if ( ! empty( $settings['bwdcv_footer_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdcv_footer_btn_link', $settings['bwdcv_footer_btn_link'] );
		}

        if ('style1' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-1-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-skill-information">
                                    <div class="bwd-cv-meta d-flex align-items-center">
                                        <?php if($bwdcv_show_video === 'yes') { ?>
                                            <div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
                                            elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
                                            ?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
                                        <?php } ?>
                                        <?php if( $bwdcv_signature_show === 'yes' ) { ?>
                                        <div class="bwd-cv-signature">
                                            <img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
                                        </div><?php } ?>
                                        <?php if( $bwdcv_button_show === 'yes' ) {?>
                                        <a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style2' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-2-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-education-information">
                                    <div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style3' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-3-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style4' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-4-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
                                    <div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style5' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-5-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
                                    <div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style6' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-6-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style7' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-7-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-skill-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style8' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-8-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style9' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-9-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style10' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-10-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-language-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style11' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-11-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-hobby-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style12' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-12-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style13' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-13-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information 
                                bwd-cv-footer-information bwd-cv-about-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style14' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-14-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-eucation-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style15' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-15-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-hobby-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style16' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-16-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style17' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-17-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-education-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style18' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-18-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-skill-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style19' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-19-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style20' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-20-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-hobby-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style21' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-21-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-skill-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style22' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-22-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-hobby-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style23' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-23-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-hobby-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style24' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-24-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style25' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-25-area bwd-cv-vilder-common">
					<div class="row g-0 g-0">
						<div class="col-lg-12">
							<div class="bwd-cv-vilder-information bwd-cv-footer-information bwd-cv-about-information">
								<div class="bwd-cv-meta d-flex align-items-center">
									<?php if($bwdcv_show_video === 'yes') { ?>
										<div href="<?php if('youtube' === $video) {echo esc_url($bwdcv_video_youtube);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></div>
									<?php } ?>
									<?php if( $bwdcv_signature_show === 'yes' ) { ?>
									<div class="bwd-cv-signature">
										<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
									</div><?php } ?>
									<?php if( $bwdcv_button_show === 'yes' ) {?>
									<a href="<?php echo esc_url($bwdcv_button_url); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
								</div>
							</div>
						</div>
					</div>
                </div>
            <?php
        }
    }
}