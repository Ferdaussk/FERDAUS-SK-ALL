<?php
namespace BwdBrandLogo\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdlc_brand_logo_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdlc_brand_logo_register_document_controls' ] );
	}

	public function bwdlc_brand_logo_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Tab', 'bwdlc-brand-logo' ) );
	}

	public function bwdlc_brand_logo_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdlc_brand_logo_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdlc-brand-logo' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdlc_brand_logo_text',
			[
				'label' => esc_html__( 'Title', 'bwdlc-brand-logo' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdlc-brand-logo' ),
			]
		);

		$document->end_controls_section();
	}
}
