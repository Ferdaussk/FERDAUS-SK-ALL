<?php
namespace TheHeaderFooter\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'thf_hf_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'thf_hf_register_document_controls' ] );
	}

	public function thf_hf_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Header Footer', 'the-header-footer' ) );
	}

	public function thf_hf_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'thf_hf_new_section',
			[
				'label' => esc_html__( 'Settings', 'the-header-footer' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'thf_hf_text',
			[
				'label' => esc_html__( 'Title', 'the-header-footer' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'the-header-footer' ),
			]
		);

		$document->end_controls_section();
	}
}
