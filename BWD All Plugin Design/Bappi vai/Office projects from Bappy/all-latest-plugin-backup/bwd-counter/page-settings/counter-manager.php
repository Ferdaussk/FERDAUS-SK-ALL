<?php
namespace bwdcCounter\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdc_counter_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdc_counter_register_document_controls' ] );
	}

	public function bwdc_counter_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Counter', 'bwdc-counter' ) );
	}

	public function bwdc_counter_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdc_counter_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdc-counter' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdc_counter_text',
			[
				'label' => esc_html__( 'Title', 'bwdc-counter' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdc-counter' ),
			]
		);

		$document->end_controls_section();
	}
}
