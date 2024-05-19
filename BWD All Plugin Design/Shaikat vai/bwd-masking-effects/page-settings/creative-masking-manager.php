<?php
namespace Creativemasking\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdme_masking_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdme_masking_register_document_controls' ] );
	}

	public function bwdme_masking_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Masking', 'bwd-masking-effects' ) );
	}

	public function bwdme_masking_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdme_masking_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwd-masking-effects' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdme_masking_text',
			[
				'label' => esc_html__( 'Title', 'bwd-masking-effects' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwd-masking-effects' ),
			]
		);

		$document->end_controls_section();
	}
}
