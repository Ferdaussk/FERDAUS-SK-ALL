<?php
namespace BWDTLTimeline\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdtl_timeline_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdtl_timeline_register_document_controls' ] );
	}

	public function bwdtl_timeline_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Timeline', 'bwdtl-timeline' ) );
	}

	public function bwdtl_timeline_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdtl_timeline_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdtl-timeline' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdtl_timeline_text',
			[
				'label' => esc_html__( 'Title', 'bwdtl-timeline' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdtl-timeline' ),
			]
		);

		$document->end_controls_section();
	}
}
