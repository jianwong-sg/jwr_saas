<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'details' => array(
		'parties_involved_lcsc' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list' 
		),
		'cdd_checklist' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		),
		'cdd_checklist1' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		),
		'doc_upload_lcsc' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'category',
			'agency_cea',
			'reminder_tenant_email',
			'reminder_tenant',
			'reminder_agent',
			'lease_expiry',
			'lease_start_date',
			'ta_date',
			'agency',
			'loi_date',
			'lease_duration',
			'rental',
			'prop_type',
			'Prop_kind',
			'prop_address',
			'no_bedrooms',
			'no_bathrooms',
			'condition',
			'tenure',
			'builtup',
			'TOP',
			'remarks',
			'ID_Tx',
			'management_fee' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'category' => array( 
				'integrated_edit_field2',
				'edit_field_label2' 
			),
			'agency_cea' => array( 
				'integrated_edit_field6',
				'edit_field_label14',
				'edit_field' 
			),
			'reminder_tenant_email' => array( 
				'integrated_edit_field32' 
			),
			'reminder_tenant' => array( 
				'integrated_edit_field31' 
			),
			'reminder_agent' => array( 
				'integrated_edit_field30' 
			),
			'lease_expiry' => array( 
				'integrated_edit_field25' 
			),
			'lease_start_date' => array( 
				'integrated_edit_field24' 
			),
			'ta_date' => array( 
				'integrated_edit_field17' 
			),
			'agency' => array( 
				'edit_field_label13',
				'integrated_edit_field5' 
			),
			'loi_date' => array( 
				'integrated_edit_field16' 
			),
			'lease_duration' => array( 
				'lease_duration' 
			),
			'rental' => array( 
				'integrated_edit_field39' 
			),
			'prop_type' => array( 
				'integrated_edit_field35' 
			),
			'Prop_kind' => array( 
				'integrated_edit_field36' 
			),
			'prop_address' => array( 
				'integrated_edit_field34' 
			),
			'no_bedrooms' => array( 
				'no_bedrooms' 
			),
			'no_bathrooms' => array( 
				'no_bathrooms' 
			),
			'condition' => array( 
				'integrated_edit_field44' 
			),
			'tenure' => array( 
				'integrated_edit_field45' 
			),
			'builtup' => array( 
				'integrated_edit_field73' 
			),
			'TOP' => array( 
				'integrated_edit_field46' 
			),
			'remarks' => array( 
				'integrated_edit_field65' 
			),
			'ID_Tx' => array( 
				'edit_field_label6',
				'integrated_edit_field10' 
			),
			'management_fee' => array( 
				'integrated_edit_field41' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'view_back_list1',
					'custom_button1',
					'tx_view_print1' 
				),
				'below-grid' => array( 
					'view_back_list',
					'custom_button',
					'view_close',
					'tx_view_print',
					'hamburger' 
				),
				'top' => array( 
					'view_header' 
				),
				'grid' => array( 
					'text24',
					'tx_section',
					'edit_field_label2',
					'integrated_edit_field2',
					'snippet1',
					'prop_section',
					'comm_section',
					'doc_upload_section',
					'party_involved_section',
					'edit_field_label6',
					'integrated_edit_field10' 
				),
				'section' => array( 
					'agency_info_section',
					'rental_info_section' 
				),
				'section1' => array( 
					'integrated_edit_field35',
					'integrated_edit_field36',
					'integrated_edit_field34',
					'no_bedrooms',
					'no_bathrooms',
					'integrated_edit_field44',
					'integrated_edit_field45',
					'integrated_edit_field73',
					'integrated_edit_field46' 
				),
				'section6' => array( 
					'mag_fee_label',
					'integrated_edit_field41',
					'integrated_edit_field65' 
				),
				'section7' => array( 
					'integrated_edit_field39',
					'lease_duration',
					'integrated_edit_field16',
					'integrated_edit_field17',
					'integrated_edit_field24',
					'integrated_edit_field25',
					'integrated_edit_field30',
					'integrated_edit_field31',
					'integrated_edit_field32' 
				),
				'section4' => array( 
					'details_preview' 
				),
				'section9' => array( 
					'edit_field_label13',
					'integrated_edit_field5',
					'edit_field_label14',
					'integrated_edit_field6',
					'edit_field' 
				),
				'section2' => array( 
					'details_preview1' 
				) 
			),
			'formXtTags' => array(
				 
			),
			'itemForms' => array(
				'view_back_list1' => 'above-grid',
				'custom_button1' => 'above-grid',
				'tx_view_print1' => 'above-grid',
				'view_back_list' => 'below-grid',
				'custom_button' => 'below-grid',
				'view_close' => 'below-grid',
				'tx_view_print' => 'below-grid',
				'hamburger' => 'below-grid',
				'view_header' => 'top',
				'text24' => 'grid',
				'tx_section' => 'grid',
				'edit_field_label2' => 'grid',
				'integrated_edit_field2' => 'grid',
				'snippet1' => 'grid',
				'prop_section' => 'grid',
				'comm_section' => 'grid',
				'doc_upload_section' => 'grid',
				'party_involved_section' => 'grid',
				'edit_field_label6' => 'grid',
				'integrated_edit_field10' => 'grid',
				'agency_info_section' => 'section',
				'rental_info_section' => 'section',
				'integrated_edit_field35' => 'section1',
				'integrated_edit_field36' => 'section1',
				'integrated_edit_field34' => 'section1',
				'no_bedrooms' => 'section1',
				'no_bathrooms' => 'section1',
				'integrated_edit_field44' => 'section1',
				'integrated_edit_field45' => 'section1',
				'integrated_edit_field73' => 'section1',
				'integrated_edit_field46' => 'section1',
				'mag_fee_label' => 'section6',
				'integrated_edit_field41' => 'section6',
				'integrated_edit_field65' => 'section6',
				'integrated_edit_field39' => 'section7',
				'lease_duration' => 'section7',
				'integrated_edit_field16' => 'section7',
				'integrated_edit_field17' => 'section7',
				'integrated_edit_field24' => 'section7',
				'integrated_edit_field25' => 'section7',
				'integrated_edit_field30' => 'section7',
				'integrated_edit_field31' => 'section7',
				'integrated_edit_field32' => 'section7',
				'details_preview' => 'section4',
				'edit_field_label13' => 'section9',
				'integrated_edit_field5' => 'section9',
				'edit_field_label14' => 'section9',
				'integrated_edit_field6' => 'section9',
				'edit_field' => 'section9',
				'details_preview1' => 'section2' 
			),
			'itemLocations' => array(
				'text24' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'tx_section' => array(
					'location' => 'grid',
					'cellId' => 'c4' 
				),
				'edit_field_label2' => array(
					'location' => 'grid',
					'cellId' => 'c6' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c6' 
				),
				'snippet1' => array(
					'location' => 'grid',
					'cellId' => 'c7' 
				),
				'prop_section' => array(
					'location' => 'grid',
					'cellId' => 'c8' 
				),
				'comm_section' => array(
					'location' => 'grid',
					'cellId' => 'c10' 
				),
				'doc_upload_section' => array(
					'location' => 'grid',
					'cellId' => 'c11' 
				),
				'party_involved_section' => array(
					'location' => 'grid',
					'cellId' => 'c12' 
				),
				'edit_field_label6' => array(
					'location' => 'grid',
					'cellId' => 'c13' 
				),
				'integrated_edit_field10' => array(
					'location' => 'grid',
					'cellId' => 'c13' 
				),
				'agency_info_section' => array(
					'location' => 'section',
					'cellId' => 'c5' 
				),
				'rental_info_section' => array(
					'location' => 'section',
					'cellId' => 'c5' 
				),
				'integrated_edit_field35' => array(
					'location' => 'section1',
					'cellId' => 'c1' 
				),
				'integrated_edit_field36' => array(
					'location' => 'section1',
					'cellId' => 'c1' 
				),
				'integrated_edit_field34' => array(
					'location' => 'section1',
					'cellId' => 'c1' 
				),
				'no_bedrooms' => array(
					'location' => 'section1',
					'cellId' => 'c' 
				),
				'no_bathrooms' => array(
					'location' => 'section1',
					'cellId' => 'c' 
				),
				'integrated_edit_field44' => array(
					'location' => 'section1',
					'cellId' => 'c' 
				),
				'integrated_edit_field45' => array(
					'location' => 'section1',
					'cellId' => 'c2' 
				),
				'integrated_edit_field73' => array(
					'location' => 'section1',
					'cellId' => 'c2' 
				),
				'integrated_edit_field46' => array(
					'location' => 'section1',
					'cellId' => 'c2' 
				),
				'mag_fee_label' => array(
					'location' => 'section6',
					'cellId' => 'c6' 
				),
				'integrated_edit_field41' => array(
					'location' => 'section6',
					'cellId' => 'c6' 
				),
				'integrated_edit_field65' => array(
					'location' => 'section6',
					'cellId' => 'c7' 
				),
				'integrated_edit_field39' => array(
					'location' => 'section7',
					'cellId' => 'c3' 
				),
				'lease_duration' => array(
					'location' => 'section7',
					'cellId' => 'c3' 
				),
				'integrated_edit_field16' => array(
					'location' => 'section7',
					'cellId' => 'c3' 
				),
				'integrated_edit_field17' => array(
					'location' => 'section7',
					'cellId' => 'c' 
				),
				'integrated_edit_field24' => array(
					'location' => 'section7',
					'cellId' => 'c' 
				),
				'integrated_edit_field25' => array(
					'location' => 'section7',
					'cellId' => 'c' 
				),
				'integrated_edit_field30' => array(
					'location' => 'section7',
					'cellId' => 'c4' 
				),
				'integrated_edit_field31' => array(
					'location' => 'section7',
					'cellId' => 'c4' 
				),
				'integrated_edit_field32' => array(
					'location' => 'section7',
					'cellId' => 'c4' 
				),
				'details_preview' => array(
					'location' => 'section4',
					'cellId' => 'c1' 
				),
				'edit_field_label13' => array(
					'location' => 'section9',
					'cellId' => 'c3' 
				),
				'integrated_edit_field5' => array(
					'location' => 'section9',
					'cellId' => 'c3' 
				),
				'edit_field_label14' => array(
					'location' => 'section9',
					'cellId' => 'c' 
				),
				'integrated_edit_field6' => array(
					'location' => 'section9',
					'cellId' => 'c' 
				),
				'edit_field' => array(
					'location' => 'section9',
					'cellId' => 'c4' 
				),
				'details_preview1' => array(
					'location' => 'section2',
					'cellId' => 'c1' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'view_header' => array( 
				'view_header' 
			),
			'view_back_list' => array( 
				'view_back_list',
				'view_back_list1' 
			),
			'view_close' => array( 
				'view_close' 
			),
			'hamburger' => array( 
				'hamburger' 
			),
			'edit_field' => array( 
				'integrated_edit_field2',
				'integrated_edit_field6',
				'integrated_edit_field5',
				'integrated_edit_field10',
				'edit_field',
				'integrated_edit_field41' 
			),
			'edit_field_label' => array( 
				'edit_field_label2',
				'edit_field_label14',
				'edit_field_label13',
				'edit_field_label6' 
			),
			'section' => array( 
				'tx_section',
				'agency_info_section',
				'rental_info_section',
				'prop_section',
				'comm_section',
				'doc_upload_section',
				'party_involved_section' 
			),
			'integrated_edit_field' => array( 
				'integrated_edit_field32',
				'integrated_edit_field31',
				'integrated_edit_field30',
				'integrated_edit_field25',
				'integrated_edit_field24',
				'integrated_edit_field17',
				'integrated_edit_field16',
				'lease_duration',
				'integrated_edit_field39',
				'integrated_edit_field35',
				'integrated_edit_field36',
				'integrated_edit_field34',
				'no_bedrooms',
				'no_bathrooms',
				'integrated_edit_field44',
				'integrated_edit_field45',
				'integrated_edit_field73',
				'integrated_edit_field46',
				'integrated_edit_field65' 
			),
			'custom_button' => array( 
				'tx_view_print1',
				'tx_view_print',
				'custom_button',
				'custom_button1' 
			),
			'text' => array( 
				'text24',
				'mag_fee_label' 
			),
			'snippet' => array( 
				'snippet1' 
			),
			'details_preview' => array( 
				'details_preview',
				'details_preview1' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'text24' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c13' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field_label6',
							'integrated_edit_field10' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c6' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field_label2',
							'integrated_edit_field2' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c4' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'tx_section' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c8' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'prop_section' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c12' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							5 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'party_involved_section' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c11' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							6 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'doc_upload_section' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c10' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							7 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'comm_section' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							8 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'snippet1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 9 
			),
			'section' => array(
				'cells' => array(
					'c5' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'agency_info_section',
							'rental_info_section' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			),
			'section1' => array(
				'cells' => array(
					'c1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field35',
							'integrated_edit_field36',
							'integrated_edit_field34' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'no_bedrooms',
							'no_bathrooms',
							'integrated_edit_field44' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c2' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field45',
							'integrated_edit_field73',
							'integrated_edit_field46' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 3,
				'height' => 1 
			),
			'section6' => array(
				'cells' => array(
					'c6' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'mag_fee_label',
							'integrated_edit_field41' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c7' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field65' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 2,
				'height' => 1 
			),
			'section7' => array(
				'cells' => array(
					'c3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field39',
							'lease_duration',
							'integrated_edit_field16' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field17',
							'integrated_edit_field24',
							'integrated_edit_field25' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c4' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field30',
							'integrated_edit_field31',
							'integrated_edit_field32' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 3,
				'height' => 1 
			),
			'section4' => array(
				'cells' => array(
					'c1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'details_preview' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			),
			'section9' => array(
				'cells' => array(
					'c3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field_label13',
							'integrated_edit_field5' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field_label14',
							'integrated_edit_field6' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c4' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 3,
				'height' => 1 
			),
			'section2' => array(
				'cells' => array(
					'c1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'details_preview1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			) 
		) 
	),
	'loginForm' => array(
		'loginForm' => 3 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => true,
		'customButtons' => array( 
			192403,
			192403,
			192334,
			192334 
		),
		'codeSnippets' => array( 
			192420 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'view',
		'breadcrumb' => false,
		'nextPrev' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			192403,
			192403,
			192334,
			192334 
		) 
	) 
);
			$pageArray = array(
	'id' => 'view',
	'type' => 'view',
	'layoutId' => 'nomenu',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'view-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'colspan' => 2 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'view_back_list1',
						'custom_button1',
						'tx_view_print1' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'view-below-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'view_back_list',
						'custom_button',
						'view_close',
						'tx_view_print' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'hamburger' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'view-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'view_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c' 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c13' 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c6' 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c4' 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c8' 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c12' 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c11' 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c10' 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c7' 
						) 
					) 
				) 
			),
			'cells' => array(
				'c' => array(
					'model' => 'c3',
					'items' => array( 
						'text24' 
					) 
				),
				'c4' => array(
					'model' => 'c3',
					'items' => array( 
						'tx_section' 
					),
					'pageBreak' => '' 
				),
				'c6' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field_label2',
						'integrated_edit_field2' 
					),
					'customCSS' => '/* Put  your custom CSS code here */
',
					'align' => 'left' 
				),
				'c7' => array(
					'model' => 'c3',
					'items' => array( 
						'snippet1' 
					) 
				),
				'c8' => array(
					'model' => 'c3',
					'items' => array( 
						'prop_section' 
					),
					'pageBreak' => '' 
				),
				'c10' => array(
					'model' => 'c3',
					'items' => array( 
						'comm_section' 
					),
					'pageBreak' => '' 
				),
				'c11' => array(
					'model' => 'c3',
					'items' => array( 
						'doc_upload_section' 
					),
					'pageBreak' => '' 
				),
				'c12' => array(
					'model' => 'c3',
					'items' => array( 
						'party_involved_section' 
					) 
				),
				'c13' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field_label6',
						'integrated_edit_field10' 
					),
					'customCSS' => '/* Put  your custom CSS code here */
',
					'align' => 'left' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => true,
			'separateLabels' => false 
		),
		'section' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c5',
							'colspan' => 1 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c5' => array(
					'model' => 'c3',
					'items' => array( 
						'agency_info_section',
						'rental_info_section' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 3,
			'inlineLabels' => false,
			'separateLabels' => false 
		),
		'section1' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'rowspan' => 1 
						),
						array(
							'cell' => 'c',
							'rowspan' => 1 
						),
						array(
							'cell' => 'c2',
							'rowspan' => 1 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field35',
						'integrated_edit_field36',
						'integrated_edit_field34' 
					),
					'field' => 'prop_type' 
				),
				'c' => array(
					'model' => 'c3',
					'items' => array( 
						'no_bedrooms',
						'no_bathrooms',
						'integrated_edit_field44' 
					),
					'field' => 'no_bedrooms' 
				),
				'c2' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field45',
						'integrated_edit_field73',
						'integrated_edit_field46' 
					),
					'field' => 'builtup',
					'customCSS' => '/* Put  your custom CSS code here */


' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 3,
			'inlineLabels' => false,
			'separateLabels' => true 
		),
		'section6' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c6' 
						),
						array(
							'cell' => 'c7',
							'colspan' => 1 
						) 
					) 
				) 
			),
			'cells' => array(
				'c6' => array(
					'model' => 'c3',
					'items' => array( 
						'mag_fee_label',
						'integrated_edit_field41' 
					),
					'orientation' => 'horizontal' 
				),
				'c7' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field65' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 3,
			'inlineLabels' => false,
			'separateLabels' => false 
		),
		'section7' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c3',
							'rowspan' => 1 
						),
						array(
							'cell' => 'c',
							'rowspan' => 1 
						),
						array(
							'cell' => 'c4',
							'rowspan' => 1 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field39',
						'lease_duration',
						'integrated_edit_field16' 
					) 
				),
				'c' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field17',
						'integrated_edit_field24',
						'integrated_edit_field25' 
					),
					'width' => '30%' 
				),
				'c4' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field30',
						'integrated_edit_field31',
						'integrated_edit_field32' 
					),
					'customCSS' => '/* Put  your custom CSS code here */


' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 3,
			'inlineLabels' => false,
			'separateLabels' => false 
		),
		'section4' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'details_preview' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => false,
			'separateLabels' => false 
		),
		'section9' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c3' 
						),
						array(
							'cell' => 'c' 
						),
						array(
							'cell' => 'c4' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'edit_field_label13',
						'integrated_edit_field5' 
					) 
				),
				'c' => array(
					'model' => 'c3',
					'items' => array( 
						'edit_field_label14',
						'integrated_edit_field6' 
					) 
				),
				'c4' => array(
					'model' => 'c3',
					'items' => array( 
						'edit_field' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 3,
			'inlineLabels' => false,
			'separateLabels' => false 
		),
		'section2' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'details_preview1' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => false,
			'separateLabels' => false 
		) 
	),
	'items' => array(
		'view_header' => array(
			'type' => 'view_header',
			'title' => array(
				'page' => 'view',
				'table' => 'transactions_lcsc',
				'type' => 7 
			),
			'customCSS' => '/* Put  your custom CSS code here */

:host{
    display:none !important;
}' 
		),
		'view_back_list' => array(
			'type' => 'view_back_list',
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none !important;
}
' 
		),
		'view_close' => array(
			'type' => 'view_close' 
		),
		'hamburger' => array(
			'type' => 'hamburger',
			'items' => array( 
				 
			) 
		),
		'integrated_edit_field2' => array(
			'field' => 'category',
			'type' => 'edit_field',
			'updateOnEdit' => true,
			'orientation' => 1,
			'joined' => false,
			'separated' => true 
		),
		'edit_field_label2' => array(
			'type' => 'edit_field_label',
			'field' => 'category',
			'separated' => true 
		),
		'integrated_edit_field6' => array(
			'field' => 'agency_cea',
			'type' => 'edit_field',
			'orientation' => 0,
			'updateOnEdit' => true,
			'label' => array(
				'field' => 'agency_cea',
				'table' => 'transactions',
				'type' => 3 
			),
			'joined' => false,
			'separated' => true 
		),
		'tx_section' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'Transaction Details' 
			),
			'initiallyClosed' => false,
			'location' => 'section',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'agency_info_section' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'Estate Agent Info' 
			),
			'location' => 'section9',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'view_back_list1' => array(
			'type' => 'view_back_list',
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none !important;
}
' 
		),
		'integrated_edit_field32' => array(
			'field' => 'reminder_tenant_email',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'orientation' => 0,
			'customCSS' => '/* Put  your custom CSS code here */




',
			'label' => array(
				'field' => 'reminder_tenant_email',
				'table' => null,
				'type' => 3 
			) 
		),
		'integrated_edit_field31' => array(
			'field' => 'reminder_tenant',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'customCSS' => '/* Put  your custom CSS code here */




',
			'orientation' => 0 
		),
		'integrated_edit_field30' => array(
			'field' => 'reminder_agent',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'customCSS' => '/* Put  your custom CSS code here */




',
			'orientation' => 0 
		),
		'integrated_edit_field25' => array(
			'field' => 'lease_expiry',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'orientation' => 0,
			'label' => array(
				'field' => 'lease_expiry',
				'table' => 'transactions_lcsc',
				'type' => 3 
			) 
		),
		'integrated_edit_field24' => array(
			'field' => 'lease_start_date',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'orientation' => 0,
			'label' => array(
				'field' => 'lease_start_date',
				'table' => 'transactions_lcsc',
				'type' => 3 
			) 
		),
		'tx_view_print1' => array(
			'type' => 'custom_button',
			'eventId' => 'Print_page',
			'label' => array(
				'type' => 0,
				'text' => 'Print' 
			),
			'eventGid' => 192403 
		),
		'tx_view_print' => array(
			'eventId' => 'Print_page',
			'label' => array(
				'type' => 0,
				'text' => 'Print' 
			),
			'type' => 'custom_button',
			'eventGid' => 192403 
		),
		'edit_field_label14' => array(
			'type' => 'edit_field_label',
			'field' => 'agency_cea',
			'separated' => true 
		),
		'integrated_edit_field17' => array(
			'field' => 'ta_date',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'orientation' => 0 
		),
		'edit_field_label13' => array(
			'type' => 'edit_field_label',
			'field' => 'agency',
			'separated' => true 
		),
		'integrated_edit_field5' => array(
			'field' => 'agency',
			'type' => 'edit_field',
			'updateOnEdit' => true,
			'orientation' => 0,
			'joined' => false,
			'separated' => true 
		),
		'integrated_edit_field16' => array(
			'field' => 'loi_date',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'orientation' => 0 
		),
		'lease_duration' => array(
			'field' => 'lease_duration',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'label' => array(
				'field' => 'lease_duration',
				'table' => 'transactions_lcsc',
				'type' => 3 
			) 
		),
		'custom_button' => array(
			'type' => 'custom_button',
			'eventId' => 'Back_to_list',
			'label' => array(
				'text' => 'Back',
				'type' => 0 
			),
			'eventGid' => 192334 
		),
		'custom_button1' => array(
			'type' => 'custom_button',
			'eventId' => 'Back_to_list',
			'label' => array(
				'text' => 'Back',
				'type' => 0 
			),
			'eventGid' => 192334 
		),
		'integrated_edit_field39' => array(
			'field' => 'rental',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'rental_info_section' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'Tenancy Input' 
			),
			'location' => 'section7',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'text24' => array(
			'type' => 'text',
			'label' => array(
				'text' => '<head><SCRIPT src="common.js" type="text/javascript">
    </SCRIPT></head>',
				'type' => 0 
			),
			'editedByRte' => false 
		),
		'snippet1' => array(
			'type' => 'snippet',
			'eventId' => 'Return_to_top',
			'label' => array(
				'text' => 'Return to top',
				'type' => 0 
			),
			'eventGid' => 192420 
		),
		'prop_section' => array(
			'type' => 'section',
			'title' => array(
				'text' => 'Property Info',
				'type' => 0 
			),
			'initiallyClosed' => false,
			'location' => 'section1',
			'bsStyle' => 'default',
			'panelType' => 3,
			'pageBreak' => '' 
		),
		'integrated_edit_field35' => array(
			'field' => 'prop_type',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'joined' => true,
			'separated' => false 
		),
		'integrated_edit_field36' => array(
			'field' => 'Prop_kind',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'joined' => true,
			'separated' => false,
			'orientation' => 0 
		),
		'integrated_edit_field34' => array(
			'field' => 'prop_address',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'joined' => true,
			'separated' => false,
			'orientation' => 0 
		),
		'no_bedrooms' => array(
			'field' => 'no_bedrooms',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'joined' => true,
			'separated' => false,
			'orientation' => 0 
		),
		'no_bathrooms' => array(
			'field' => 'no_bathrooms',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'joined' => true,
			'separated' => false,
			'orientation' => 0 
		),
		'integrated_edit_field44' => array(
			'field' => 'condition',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'joined' => true,
			'separated' => false,
			'orientation' => 0 
		),
		'integrated_edit_field45' => array(
			'field' => 'tenure',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'joined' => true,
			'separated' => false,
			'orientation' => 0 
		),
		'integrated_edit_field73' => array(
			'field' => 'builtup',
			'type' => 'integrated_edit_field',
			'joined' => true,
			'separated' => false,
			'orientation' => 0 
		),
		'integrated_edit_field46' => array(
			'field' => 'TOP',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'joined' => true,
			'separated' => false,
			'orientation' => 0 
		),
		'comm_section' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'Management Fee' 
			),
			'initiallyClosed' => false,
			'location' => 'section6',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'mag_fee_label' => array(
			'type' => 'text',
			'label' => array(
				'type' => 0,
				'text' => 'Total Fee' 
			),
			'editedByRte' => false,
			'customCSS' => '/* Put  your custom CSS code here */

/*
:host{
    padding:0 !important;
    margin-left:10px !important;
}
*/',
			'bold' => true,
			'padding' => array(
				'left' => '10px' 
			) 
		),
		'integrated_edit_field65' => array(
			'field' => 'remarks',
			'type' => 'integrated_edit_field',
			'updateOnEdit' => true,
			'orientation' => 1,
			'joined' => true,
			'separated' => false 
		),
		'edit_field_label6' => array(
			'type' => 'edit_field_label',
			'field' => 'ID_Tx',
			'separated' => true 
		),
		'integrated_edit_field10' => array(
			'field' => 'ID_Tx',
			'type' => 'edit_field',
			'orientation' => 1,
			'joined' => false,
			'separated' => true 
		),
		'edit_field' => array(
			'field' => 'agency_cea',
			'type' => 'edit_field',
			'orientation' => 0,
			'updateOnEdit' => true,
			'label' => array(
				'field' => 'agency_cea',
				'table' => 'transactions',
				'type' => 3 
			),
			'joined' => false,
			'separated' => true,
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none;
}
' 
		),
		'integrated_edit_field41' => array(
			'field' => 'management_fee',
			'type' => 'edit_field',
			'orientation' => 1,
			'joined' => false,
			'separated' => true 
		),
		'details_preview' => array(
			'type' => 'details_preview',
			'table' => 193448,
			'items' => array( 
				 
			),
			'popup' => false,
			'pageId' => 'list' 
		),
		'doc_upload_section' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'Documents' 
			),
			'location' => 'section4',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'details_preview1' => array(
			'type' => 'details_preview',
			'table' => 196726,
			'items' => array( 
				 
			),
			'popup' => false,
			'pageId' => 'list' 
		),
		'party_involved_section' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'Parties Involved' 
			),
			'location' => 'section2',
			'bsStyle' => 'default',
			'panelType' => 3 
		) 
	),
	'version' => 14,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		'English' => 'Transactions {%ID_Tx}' 
	) 
);
		?>