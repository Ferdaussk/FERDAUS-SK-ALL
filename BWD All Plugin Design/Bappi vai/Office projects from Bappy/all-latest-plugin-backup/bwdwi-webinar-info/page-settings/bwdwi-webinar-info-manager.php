<?php
namespace Creativewebinarinfo\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdwi_webinar_info_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdwi_webinar_info_register_document_controls' ] );
	}

	public function bwdwi_webinar_info_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Webinar Info', 'bwdwi-webinar-info' ) );
	}

	public function bwdwi_webinar_info_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdwi_webinar_info_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdwi-webinar-info' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdwi_webinar_info_text',
			[
				'label' => esc_html__( 'Title', 'bwdwi-webinar-info' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdwi-webinar-info' ),
			]
		);

		$document->end_controls_section();
	}
}
