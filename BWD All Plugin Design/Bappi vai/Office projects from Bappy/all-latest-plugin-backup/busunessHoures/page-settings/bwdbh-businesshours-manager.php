<?php
namespace Creativebusinesshours\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdbh_business_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdbh_business_register_document_controls' ] );
	}

	public function bwdbh_business_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'Business Hours', 'bwdbh-business-hours' ) );
	}

	public function bwdbh_business_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdbh_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdbh-business-hours' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdbh_text',
			[
				'label' => esc_html__( 'Title', 'bwdbh-business-hours' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdbh-business-hours' ),
			]
		);

		$document->end_controls_section();
	}
}
