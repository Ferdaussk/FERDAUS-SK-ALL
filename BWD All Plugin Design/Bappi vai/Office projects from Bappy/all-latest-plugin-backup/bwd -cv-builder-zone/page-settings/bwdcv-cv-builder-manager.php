<?php
namespace Creativecv\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdcv_cv_builder_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdcv_cv_builder_register_document_controls' ] );
	}

	public function bwdcv_cv_builder_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'bwdcv-cv-builder', 'cv' ) );
	}

	public function bwdcv_cv_builder_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdcv_cv_builder_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdcv_cv_builder' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdcv_cv_builder_text',
			[
				'label' => esc_html__( 'Title', 'bwdcv_cv_builder' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdcv_cv_builder' ),
			]
		);

		$document->end_controls_section();
	}
}
