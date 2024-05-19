<?php
namespace Creativefilterable\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDFGfilterable extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameFilterableGallery', 'bwdfg-filterable-gallery' );
	}

	public function get_title() {
		return esc_html__( 'BWD Filterable Gallery', 'elementor' );
	}

	public function get_icon() {
		return 'bwdfg-filterable-icon eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'bwdfg-filterable-gallery-category' ];
	}
	
	public function get_script_depends() {
		return [ 'bwdfg-filterable-gallery-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdfg_filterable_content_basic_settings',
			[
				'label' => esc_html__( 'Filterable Gallery Settings', 'bwdfg-filterable-gallery' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdfg_style_selection',
			[
				'label' => esc_html__( 'Filterable Gallery Styles', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwdfg-filterable-gallery' ),
					'style2' => esc_html__( 'Style 2', 'bwdfg-filterable-gallery' ),
					'style3' => esc_html__( 'Style 3', 'bwdfg-filterable-gallery' ),
					'style4' => esc_html__( 'Style 4', 'bwdfg-filterable-gallery' ),
					'style5' => esc_html__( 'Style 5', 'bwdfg-filterable-gallery' ),
					'style6' => esc_html__( 'Style 6', 'bwdfg-filterable-gallery' ),
					'style7' => esc_html__( 'Style 7', 'bwdfg-filterable-gallery' ),
					'style8' => esc_html__( 'Style 8', 'bwdfg-filterable-gallery' ),
					'style9' => esc_html__( 'Style 9', 'bwdfg-filterable-gallery' ),
					'style10' => esc_html__( 'Style 10', 'bwdfg-filterable-gallery' ),
					'style11' => esc_html__( 'Style 11', 'bwdfg-filterable-gallery' ),
					'style12' => esc_html__( 'Style 12', 'bwdfg-filterable-gallery' ),
					'style13' => esc_html__( 'Style 13', 'bwdfg-filterable-gallery' ),
					'style14' => esc_html__( 'Style 14', 'bwdfg-filterable-gallery' ),
					'style15' => esc_html__( 'Style 15', 'bwdfg-filterable-gallery' ),
					'style16' => esc_html__( 'Style 16', 'bwdfg-filterable-gallery' ),
					'style17' => esc_html__( 'Style 17', 'bwdfg-filterable-gallery' ),
					'style18' => esc_html__( 'Style 18', 'bwdfg-filterable-gallery' ),
					'style19' => esc_html__( 'Style 19', 'bwdfg-filterable-gallery' ),
					'style20' => esc_html__( 'Style 20', 'bwdfg-filterable-gallery' ),
					'style21' => esc_html__( 'Style 21', 'bwdfg-filterable-gallery' ),
					'style22' => esc_html__( 'Style 22', 'bwdfg-filterable-gallery' ),
					'style23' => esc_html__( 'Style 23', 'bwdfg-filterable-gallery' ),
					'style24' => esc_html__( 'Style 24', 'bwdfg-filterable-gallery' ),
					'style25' => esc_html__( 'Style 25', 'bwdfg-filterable-gallery' ),
					'style26' => esc_html__( 'Style 26', 'bwdfg-filterable-gallery' ),
					'style27' => esc_html__( 'Style 27', 'bwdfg-filterable-gallery' ),
					'style28' => esc_html__( 'Style 28', 'bwdfg-filterable-gallery' ),
					'style29' => esc_html__( 'Style 29', 'bwdfg-filterable-gallery' ),
					'style30' => esc_html__( 'Style 30', 'bwdfg-filterable-gallery' ),
					'style31' => esc_html__( 'Style 31', 'bwdfg-filterable-gallery' ),
				],
			]
		);
		$this->add_control(
			'bwdfg_column_check',
			[
				'label' => esc_html__( 'Column', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'column_default',
				'options' => [
					'column_default' => esc_html__( 'Default', 'bwdfg-filterable-gallery' ),
					'column_three' => esc_html__( 'Column Three', 'bwdfg-filterable-gallery' ),
					'column_two' => esc_html__( 'Column Two', 'bwdfg-filterable-gallery' ),
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_enable_filter',
			[
				'label' => __( 'Show Filter', 'bwdfg-filterable-gallery' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'bwdfg-filterable-gallery' ),
				'label_off' => __( 'Hide', 'bwdfg-filterable-gallery' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfg_filterable_content_section',
			[
				'label' => esc_html__( 'Filterable Item', 'bwdfg-filterable-gallery' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdfg_filterable_all_enable_filter' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item',
			[
				'label' => esc_html__( 'All Item', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('All', 'bwdfg-filterable-gallery'),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_items_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdfg-filterable-gallery' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdfg-filterable-gallery' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdfg-filterable-gallery' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdfg-filterable-gallery' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'right',
				'toggle' => true,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdfg_filterable_item_name',
			[
				'label' => esc_html__( 'Item Name', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Development', 'bwdfg-filterable-gallery'),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdfg_filterable_item_id',
			[
				'label' => esc_html__( 'Item ID', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item', 'bwdfg-filterable-gallery'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'bwdfg_total_box',
			[
				'label' => esc_html__( 'Filterable Gallery Items', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdfg_total_box_title_one' => esc_html__( 'Filterable Gallery #1', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_title' => esc_html__( 'Filterable Gallery #2', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_title' => esc_html__( 'Filterable Gallery #3', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_title' => esc_html__( 'Filterable Gallery #4', 'bwdfg-filterable-gallery' ),
					],
				],
				'title_field' => `{{{ bwdfg_total_box_title }}}`,
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'bwdfg_filterable_content_section_image',
			[
				'label' => esc_html__( 'Filterable Images', 'bwdfg-filterable-gallery' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$image_repeater = new \Elementor\Repeater();

		$image_repeater->add_control(
			'bwdfg_filterable_iamge_for_gallery',
			[
				'label' => esc_html__( 'Item ID', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item', 'bwdfg-filterable-gallery'),
				'description' => esc_html__('Copy from Filterable Item', 'bwdfg-filterable-gallery'),
				'label_block' => true,
			]
		);
		$image_repeater->add_control(
			'bwdfg_filterable_item_image_name',
			[
				'label' => esc_html__( 'Item Name', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Programming', 'bwdfg-filterable-gallery'),
				'label_block' => true,
			]
		);
		$image_repeater->add_control(
			'bwdfg_image_profile_image_image',
			[
				'label' => esc_html__( 'Choose Profile', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'bwdfg_total_box_image',
			[
				'label' => esc_html__( 'Filterable Gallery Boxes', 'bwdfg-filterable-gallery' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $image_repeater->get_controls(),
				'default' => [
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #1', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #2', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #3', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #4', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #5', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #6', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #7', 'bwdfg-filterable-gallery' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #8', 'bwdfg-filterable-gallery' ),
					],
				],
				'image_field' => `{{{ bwdfg_total_box_image_pic }}}`,
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$the_class_one = esc_attr('active', 'bwdfg-filterable-gallery');
		if($settings == 1){
			$the_class_one;
		}
		$bwdfg_column_class = $settings['bwdfg_column_check'];
		if( $bwdfg_column_class === 'column_two') {
			$bwdfg_column = esc_attr('col-xl-6', 'bwdfg-filterable-gallery');
			$bwdfg_column_lg = esc_attr('col-lg-6', 'bwdfg-filterable-gallery');
		} elseif($bwdfg_column_class === 'column_three') {
			$bwdfg_column = esc_attr('col-xl-4', 'bwdfg-filterable-gallery');
			$bwdfg_column_lg = esc_attr('col-lg-4', 'bwdfg-filterable-gallery');
		} else{
			$bwdfg_column = esc_attr('col-xl-3', 'bwdfg-filterable-gallery');
			$bwdfg_column_lg = esc_attr('col-lg-3', 'bwdfg-filterable-gallery');
		}

		$bwdfg_item_align_class = $settings['bwdfg_filterable_all_items_align'];
		if( $bwdfg_item_align_class === 'column_two') {
			$bwdfg_column = esc_attr('col-xl-6', 'bwdfg-filterable-gallery');
			$bwdfg_column_lg = esc_attr('col-lg-6', 'bwdfg-filterable-gallery');
		} elseif($bwdfg_item_align_class === 'column_three') {
			$bwdfg_column = esc_attr('col-xl-4', 'bwdfg-filterable-gallery');
			$bwdfg_column_lg = esc_attr('col-lg-4', 'bwdfg-filterable-gallery');
		} else{
			$bwdfg_column = esc_attr('col-xl-3', 'bwdfg-filterable-gallery');
			$bwdfg_column_lg = esc_attr('col-lg-3', 'bwdfg-filterable-gallery');
		}
        if('style1' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-one pt-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<button class="<?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></button>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<button class="elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter=".'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></button>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<a href=""><img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty"></a>
								</div>
								<div class="bwdfg-content-box">
									<div class="bwdfg-content">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image">
											<h2><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></h2>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		<?php
        } elseif('style2' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-our-gallery-two pt-100 pb-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-two pb-40 d-flex <?php if('' === $settings['bwdfg_filterable_all_items_align']){ ?>justify-content-end <?php } ?>">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<button class="<?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></button>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<button class="elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter=".'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></button>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-two ">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-single-gallery snake mb-30">
								<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								<div class="overlay"><h2><a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></a></h2></div>
							</div>
						</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		<?php
        } elseif('style3' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-three pt-100 pb-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-three d-flex justify-content-center pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<button class="<?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></button>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<button class="elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter=".'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></button>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-three">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
									<div class="bwdfg-gallery-content">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><i class="fa-solid fa-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
						<?php
								}
							}
							?>
					</div>
				</div>
			</div>
		<?php
        } elseif('style4' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-four pt-100 pb-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-four d-flex justify-content-center pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<button class="<?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></button>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<button class="elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter=".'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></button>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-four">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30"><div class="bwdfg-gallery-thumb">
								<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gellary-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
								</div>
							</div>
						</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		<?php
        } elseif('style5' === $settings['bwdfg_style_selection']){
            ?>
		<?php
        } elseif('style6' === $settings['bwdfg_style_selection']){
            ?>
		<?php
        } elseif('style7' === $settings['bwdfg_style_selection']){
            ?>
		<?php
        } elseif('style8' === $settings['bwdfg_style_selection']){
            ?>
		<?php
        } elseif('style9' === $settings['bwdfg_style_selection']){
            ?>
		<?php
        } elseif('style10' === $settings['bwdfg_style_selection']){
            ?>
            <?php
        }
	}
}
