<?php
namespace FFBWDFFlipBox\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdff_flipflop_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdff_flipflop_register_document_controls' ] );
	}

	public function bwdff_flipflop_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Flip Flop', 'bwd-flip-flop' ) );
	}

	public function bwdff_flipflop_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdff_flipflop_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwd-flip-flop' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdff_flipflop_text',
			[
				'label' => esc_html__( 'Title', 'bwd-flip-flop' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwd-flip-flop' ),
			]
		);

		$document->end_controls_section();
	}
}
