<?php
namespace BWDSDSlider\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdsd_slider_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdsd_slider_register_document_controls' ] );
	}

	public function bwdsd_slider_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Slider', 'bwdsd-slider' ) );
	}

	public function bwdsd_slider_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdsd_slider_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdsd-slider' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdsd_slider_text',
			[
				'label' => esc_html__( 'Title', 'bwdsd-slider' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdsd-slider' ),
			]
		);

		$document->end_controls_section();
	}
}
