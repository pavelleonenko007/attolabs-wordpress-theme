<?php
/**
 * Options
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;

if ( function_exists( 'acf_add_local_field_group' ) && function_exists( 'pll_the_languages' ) ) {
	$languages = pll_the_languages(
		array( 'raw' => 1 )
	);

	$cookies_fields = array(
		array(
			'key'               => 'cookie_tab',
			'label'             => 'Cookie Settings',
			'name'              => '',
			'type'              => 'tab',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'placement'         => 'top',
			'endpoint'          => 0,
		),
	);

	foreach ( $languages as $slug => $language ) {
		$cookies_fields[] = array(
			'key'               => '',
			'label'             => 'Cookie Dialog content in ' . strtoupper( $slug ),
			'name'              => 'cookie_text_' . $slug,
			'type'              => 'textarea',
			'prefix'            => '',
			'instructions'      => 'Add content to cookie block.',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'append'            => '',
			'maxlength'         => '',
			'readonly'          => 0,
			'disabled'          => 0,
		);
	}

	$branches_fields = array(
		array(
			'key'               => 'branches_tab',
			'label'             => 'Branches',
			'name'              => '',
			'type'              => 'tab',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'placement'         => 'top',
			'endpoint'          => 0,
		),
		$branches_fields[] = array(
			'key'               => 'field_65fc301522090',
			'label'             => 'Branches',
			'name'              => 'branches',
			'aria-label'        => '',
			'type'              => 'repeater',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'layout'            => 'row',
			'pagination'        => 0,
			'min'               => 0,
			'max'               => 0,
			'collapsed'         => '',
			'button_label'      => 'Add Row',
			'rows_per_page'     => 20,
			'sub_fields'        => array(
				array(
					'key'               => 'field_65fc31489ea2a',
					'label'             => 'Country',
					'name'              => 'country',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'maxlength'         => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'parent_repeater'   => 'field_65fc301522090',
				),
				array(
					'key'               => 'field_language',
					'label'             => 'Language',
					'name'              => 'language',
					'aria-label'        => '',
					'type'              => 'select',
					'instructions'      => 'Select the language in which the address will be displayed',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'choices'           => array_map(
						function ( $language ) {
							return $language['name'];
						},
						$languages
					),
					'default_value'     => 'en',
					'maxlength'         => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'parent_repeater'   => 'field_65fc301522090',
				),
				array(
					'key'               => 'field_65fc303422091',
					'label'             => 'Address Name',
					'name'              => 'address_name',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => 'Add address name.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'maxlength'         => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'parent_repeater'   => 'field_65fc301522090',
				),
				array(
					'key'               => 'field_65fc305b22092',
					'label'             => 'Contact Phones',
					'name'              => 'contact_phones',
					'aria-label'        => '',
					'type'              => 'repeater',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'layout'            => 'row',
					'pagination'        => 0,
					'min'               => 0,
					'max'               => 0,
					'collapsed'         => '',
					'button_label'      => 'Add phone',
					'rows_per_page'     => 20,
					'sub_fields'        => array(
						array(
							'key'               => 'field_65fc308522093',
							'label'             => 'Phone number',
							'name'              => 'phone_number',
							'aria-label'        => '',
							'type'              => 'text',
							'instructions'      => 'Add phone number.',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'maxlength'         => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'parent_repeater'   => 'field_65fc305b22092',
						),
					),
					'parent_repeater'   => 'field_65fc301522090',
				),
				array(
					'key'               => 'field_65fc30a922094',
					'label'             => 'Contact Email',
					'name'              => 'contact_email',
					'aria-label'        => '',
					'type'              => 'email',
					'instructions'      => 'Add contact email.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'parent_repeater'   => 'field_65fc301522090',
				),
				array(
					'key'               => 'field_65fc30e87a112',
					'label'             => 'Display in footer',
					'name'              => 'display_in_footer',
					'aria-label'        => '',
					'type'              => 'true_false',
					'instructions'      => 'Switch toggle to Yes option if this address should be displayed in footer.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'message'           => '',
					'default_value'     => 0,
					'ui_on_text'        => '',
					'ui_off_text'       => '',
					'ui'                => 1,
					'parent_repeater'   => 'field_65fc301522090',
				),
				array(
					'key'               => 'field_display_in_header',
					'label'             => 'Display in header',
					'name'              => 'display_in_header',
					'aria-label'        => '',
					'type'              => 'true_false',
					'instructions'      => 'Switch toggle to Yes option if this address should be displayed in header mobile menu. Must be one for each language',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'message'           => '',
					'default_value'     => 0,
					'ui_on_text'        => '',
					'ui_off_text'       => '',
					'ui'                => 1,
					'parent_repeater'   => 'field_65fc301522090',
				),
			),
		),
	);

	$other_fields = array(
		array(
			'key'               => 'other_fields_tab',
			'label'             => 'Other fields',
			'name'              => '',
			'type'              => 'tab',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'placement'         => 'top',
			'endpoint'          => 0,
		),
		array(
			'key'               => 'field_66028b05c32b0',
			'label'             => 'Copyright',
			'name'              => 'copyright',
			'aria-label'        => '',
			'type'              => 'text',
			'instructions'      => 'Add copyright. No needs to add year.',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'default_value'     => '',
			'maxlength'         => '',
			'placeholder'       => '',
			'prepend'           => '',
			'append'            => '',
		),
	);

	acf_add_local_field_group(
		array(
			'key'                   => 'option_group',
			'title'                 => 'Global fields',
			'fields'                => array_merge( $cookies_fields, $branches_fields, $other_fields ),
			'location'              => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'options',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
		)
	);
}
