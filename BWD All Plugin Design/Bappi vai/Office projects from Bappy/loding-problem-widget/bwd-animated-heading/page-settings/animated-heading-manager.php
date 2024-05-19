<?php
namespace bwdahAnimatedHeading\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdah_animated_heading_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdah_animated_heading_register_document_controls' ] );
	}

	public function bwdah_animated_heading_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Animated Heading', 'bwdah-animated-heading' ) );
	}

	public function bwdah_animated_heading_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdah_animated_heading_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdah-animated-heading' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdah_animated_heading_text',
			[
				'label' => esc_html__( 'Title', 'bwdah-animated-heading' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdah-animated-heading' ),
			]
		);

		$document->end_controls_section();
	}
}
