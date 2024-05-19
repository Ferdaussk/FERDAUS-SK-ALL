<?php
namespace BWDCDCountDown\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdcd_count_down_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdcd_count_down_register_document_controls' ] );
	}

	public function bwdcd_count_down_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Count Down', 'bwdcd-count-down' ) );
	}

	public function bwdcd_count_down_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdcd_count_down_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdcd-count-down' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdcd_count_down_text',
			[
				'label' => esc_html__( 'Title', 'bwdcd-count-down' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdcd-count-down' ),
			]
		);

		$document->end_controls_section();
	}
}
