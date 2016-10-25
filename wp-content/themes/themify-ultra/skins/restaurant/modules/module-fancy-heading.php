<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Module Name: Fancy Heading
 * Description: Heading with fancy styles
 */
class TB_Fancy_Heading_Module extends Themify_Builder_Module {
	function __construct() {
		parent::__construct(array(
			'name' => __('Fancy Heading', 'themify'),
			'slug' => 'fancy-heading'
		));
	}

	public function get_title( $module ) {
		return isset( $module['mod_settings']['heading'] ) ? esc_html( $module['mod_settings']['heading'] ) : '';
	}

	public function get_options() {
		$options = array(
			array(
				'id' => 'sub_heading',
				'type' => 'text',
				'label' => __('Sub Heading', 'themify'),
				'class' => 'large'
			),
			array(
				'id' => 'multi_heading Effect',
				'type' => 'multi',
				'label' => __( 'Heading', 'themify' ),
				'fields' => array(
					array(
						'id' => 'heading',
						'type' => 'text',
						'label' => __('Heading', 'themify'),
						'class' => 'fullwidth'
					),
					array(
						'id' => 'heading_tag',
						'label' => __( 'Tag', 'themify' ),
						'type' => 'select',
						'options' => array(
							'h1' => __( 'h1', 'themify' ),
							'h2' => __( 'h2', 'themify' ),
						),
						'class' => 'small'
					)
				)
			),
		);
		return $options;
	}

	public function get_animation() {
		$animation = array(
			array(
				'type' => 'separator',
				'meta' => array( 'html' => '<h4>' . esc_html__( 'Appearance Animation', 'themify' ) . '</h4>')
			),
			array(
				'id' => 'multi_Animation Effect',
				'type' => 'multi',
				'label' => __('Effect', 'themify'),
				'fields' => array(
					array(
						'id' => 'animation_effect',
						'type' => 'animation_select',
						'label' => __( 'Effect', 'themify' )
					),
					array(
						'id' => 'animation_effect_delay',
						'type' => 'text',
						'label' => __( 'Delay', 'themify' ),
						'class' => 'xsmall',
						'description' => __( 'Delay (s)', 'themify' ),
					),
					array(
						'id' => 'animation_effect_repeat',
						'type' => 'text',
						'label' => __( 'Repeat', 'themify' ),
						'class' => 'xsmall',
						'description' => __( 'Repeat (x)', 'themify' ),
					),
				)
			)
		);

		return $animation;
	}

	public function get_styling() {
		$general = array(
			// Font
			array(
				'type' => 'separator',
				'meta' => array('html'=>'<hr />')
			),
			array(
				'id' => 'separator_font',
				'type' => 'separator',
				'meta' => array('html'=>'<h4>'.__('Font', 'themify').'</h4>'),
			),
			array(
				'id' => 'font_family',
				'type' => 'font_select',
				'label' => __('Font Family', 'themify'),
				'class' => 'font-family-select',
				'prop' => 'font-family',
				'selector' => array( '.module h1', '.module h2' )
			),
			array(
				'id' => 'font_color',
				'type' => 'color',
				'label' => __('Font Color', 'themify'),
				'class' => 'small',
				'prop' => 'color',
				'selector' => array( '.module h1', '.module h2' )
			),
			array(
				'id' => 'multi_font_size',
				'type' => 'multi',
				'label' => __('Font Size', 'themify'),
				'fields' => array(
					array(
						'id' => 'font_size',
						'type' => 'text',
						'class' => 'xsmall',
						'prop' => 'font-size',
						'selector' => array( '.module h1', '.module h2' )
					),
					array(
						'id' => 'font_size_unit',
						'type' => 'select',
						'meta' => array(
							array('value' => 'px', 'name' => __('px', 'themify')),
							array('value' => 'em', 'name' => __('em', 'themify')),
							array('value' => '%', 'name' => __('%', 'themify')),
						)
					)
				)
			),
			array(
				'id' => 'multi_line_height',
				'type' => 'multi',
				'label' => __('Line Height', 'themify'),
				'fields' => array(
					array(
						'id' => 'line_height',
						'type' => 'text',
						'class' => 'xsmall',
						'prop' => 'line-height',
						'selector' => array( '.module h1', '.module h2' )
					),
					array(
						'id' => 'line_height_unit',
						'type' => 'select',
						'meta' => array(
							array('value' => 'px', 'name' => __('px', 'themify')),
							array('value' => 'em', 'name' => __('em', 'themify')),
							array('value' => '%', 'name' => __('%', 'themify')),
						)
					)
				)
			),
		);

		return $general;
	}
}
///////////////////////////////////////
// Module Options
///////////////////////////////////////
Themify_Builder_Model::register_module( 'TB_Fancy_Heading_Module' );