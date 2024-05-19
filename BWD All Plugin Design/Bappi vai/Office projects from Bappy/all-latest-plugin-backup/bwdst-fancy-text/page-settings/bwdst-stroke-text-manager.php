<?php
namespace Creativestroketext\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdst_stroke_text_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdst_stroke_text_register_document_controls' ] );
	}

	public function bwdst_stroke_text_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New stroke text', 'bwdst-stroke-text' ) );
	}

	public function bwdst_stroke_text_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdst_stroke_text_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdst-stroke-text' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bbwdst_stroke_text_text',
			[
				'label' => esc_html__( 'Title', 'bwdst-stroke-text' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdst-stroke-text' ),
			]
		);

		$document->end_controls_section();
	}
}
