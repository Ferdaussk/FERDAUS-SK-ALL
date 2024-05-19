<?php
namespace DualButtons\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwddb_buttons_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwddb_buttons_register_document_controls' ] );
	}

	public function bwddb_buttons_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New buttons', 'bwd-dual-buttons' ) );
	}

	public function bwddb_buttons_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwddb_buttons_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwd-dual-buttons' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwddb_buttons_text',
			[
				'label' => esc_html__( 'Title', 'bwd-dual-buttons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwd-dual-buttons' ),
			]
		);

		$document->end_controls_section();
	}
}
