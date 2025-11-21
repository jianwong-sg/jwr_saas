<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => true,
		'orientation' => 'portrait',
		'scale' => 100 
	),
	'details' => array(
		'prop_cust' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'types',
			'kind',
			'hdb_town',
			'hdb_scheme',
			'prop_address',
			'prop_name',
			'land_size',
			'builtup',
			'tenure',
			'year_built',
			'TOP',
			'photos',
			'land_size_unit',
			'builtup_unit',
			'agentid' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'types' => array( 
				'integrated_edit_field',
				'integrated_edit_field13' 
			),
			'kind' => array( 
				'integrated_edit_field1',
				'integrated_edit_field14' 
			),
			'hdb_town' => array( 
				'integrated_edit_field2',
				'integrated_edit_field15' 
			),
			'hdb_scheme' => array( 
				'integrated_edit_field3',
				'integrated_edit_field16' 
			),
			'prop_address' => array( 
				'integrated_edit_field4',
				'integrated_edit_field17' 
			),
			'prop_name' => array( 
				'integrated_edit_field5',
				'integrated_edit_field18' 
			),
			'land_size' => array( 
				'integrated_edit_field6',
				'integrated_edit_field19' 
			),
			'builtup' => array( 
				'integrated_edit_field8',
				'integrated_edit_field20' 
			),
			'tenure' => array( 
				'integrated_edit_field10',
				'integrated_edit_field22' 
			),
			'year_built' => array( 
				'integrated_edit_field11',
				'integrated_edit_field23' 
			),
			'TOP' => array( 
				'integrated_edit_field12',
				'integrated_edit_field24' 
			),
			'photos' => array( 
				'edit_field',
				'edit_field_label' 
			),
			'land_size_unit' => array( 
				'land_size_unit' 
			),
			'builtup_unit' => array( 
				'builtup_unit' 
			),
			'agentid' => array( 
				'edit_field1',
				'edit_field_label1' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'below-grid' => array( 
					'view_back_list',
					'view_close',
					'prev',
					'next',
					'hamburger' 
				),
				'top' => array( 
					'view_header' 
				),
				'grid' => array( 
					'integrated_edit_field13',
					'integrated_edit_field',
					'integrated_edit_field14',
					'integrated_edit_field1',
					'integrated_edit_field15',
					'integrated_edit_field2',
					'integrated_edit_field16',
					'integrated_edit_field3',
					'integrated_edit_field17',
					'integrated_edit_field4',
					'integrated_edit_field18',
					'integrated_edit_field5',
					'integrated_edit_field19',
					'integrated_edit_field6',
					'land_size_unit',
					'integrated_edit_field20',
					'integrated_edit_field8',
					'builtup_unit',
					'integrated_edit_field22',
					'integrated_edit_field10',
					'integrated_edit_field23',
					'integrated_edit_field11',
					'integrated_edit_field24',
					'integrated_edit_field12',
					'edit_field_label',
					'edit_field',
					'details_preview',
					'edit_field_label1',
					'edit_field1' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'view_back_list' => 'below-grid',
				'view_close' => 'below-grid',
				'prev' => 'below-grid',
				'next' => 'below-grid',
				'hamburger' => 'below-grid',
				'view_header' => 'top',
				'integrated_edit_field13' => 'grid',
				'integrated_edit_field' => 'grid',
				'integrated_edit_field14' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field15' => 'grid',
				'integrated_edit_field2' => 'grid',
				'integrated_edit_field16' => 'grid',
				'integrated_edit_field3' => 'grid',
				'integrated_edit_field17' => 'grid',
				'integrated_edit_field4' => 'grid',
				'integrated_edit_field18' => 'grid',
				'integrated_edit_field5' => 'grid',
				'integrated_edit_field19' => 'grid',
				'integrated_edit_field6' => 'grid',
				'land_size_unit' => 'grid',
				'integrated_edit_field20' => 'grid',
				'integrated_edit_field8' => 'grid',
				'builtup_unit' => 'grid',
				'integrated_edit_field22' => 'grid',
				'integrated_edit_field10' => 'grid',
				'integrated_edit_field23' => 'grid',
				'integrated_edit_field11' => 'grid',
				'integrated_edit_field24' => 'grid',
				'integrated_edit_field12' => 'grid',
				'edit_field_label' => 'grid',
				'edit_field' => 'grid',
				'details_preview' => 'grid',
				'edit_field_label1' => 'grid',
				'edit_field1' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field13' => array(
					'location' => 'grid',
					'cellId' => 'c4' 
				),
				'integrated_edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c2' 
				),
				'integrated_edit_field14' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field15' => array(
					'location' => 'grid',
					'cellId' => 'c5' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c6' 
				),
				'integrated_edit_field16' => array(
					'location' => 'grid',
					'cellId' => 'c7' 
				),
				'integrated_edit_field3' => array(
					'location' => 'grid',
					'cellId' => 'c8' 
				),
				'integrated_edit_field17' => array(
					'location' => 'grid',
					'cellId' => 'c9' 
				),
				'integrated_edit_field4' => array(
					'location' => 'grid',
					'cellId' => 'c10' 
				),
				'integrated_edit_field18' => array(
					'location' => 'grid',
					'cellId' => 'c11' 
				),
				'integrated_edit_field5' => array(
					'location' => 'grid',
					'cellId' => 'c12' 
				),
				'integrated_edit_field19' => array(
					'location' => 'grid',
					'cellId' => 'c13' 
				),
				'integrated_edit_field6' => array(
					'location' => 'grid',
					'cellId' => 'c14' 
				),
				'land_size_unit' => array(
					'location' => 'grid',
					'cellId' => 'c14' 
				),
				'integrated_edit_field20' => array(
					'location' => 'grid',
					'cellId' => 'c17' 
				),
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c18' 
				),
				'builtup_unit' => array(
					'location' => 'grid',
					'cellId' => 'c18' 
				),
				'integrated_edit_field22' => array(
					'location' => 'grid',
					'cellId' => 'c21' 
				),
				'integrated_edit_field10' => array(
					'location' => 'grid',
					'cellId' => 'c22' 
				),
				'integrated_edit_field23' => array(
					'location' => 'grid',
					'cellId' => 'c23' 
				),
				'integrated_edit_field11' => array(
					'location' => 'grid',
					'cellId' => 'c24' 
				),
				'integrated_edit_field24' => array(
					'location' => 'grid',
					'cellId' => 'c25' 
				),
				'integrated_edit_field12' => array(
					'location' => 'grid',
					'cellId' => 'c26' 
				),
				'edit_field_label' => array(
					'location' => 'grid',
					'cellId' => 'c29' 
				),
				'edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c30' 
				),
				'details_preview' => array(
					'location' => 'grid',
					'cellId' => 'c1' 
				),
				'edit_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'c19' 
				),
				'edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c20' 
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
				'view_back_list' 
			),
			'view_close' => array( 
				'view_close' 
			),
			'hamburger' => array( 
				'hamburger' 
			),
			'view_edit' => array( 
				'view_edit' 
			),
			'view_pdf' => array( 
				'view_pdf' 
			),
			'next' => array( 
				'next' 
			),
			'prev' => array( 
				'prev' 
			),
			'edit_field' => array( 
				'integrated_edit_field',
				'integrated_edit_field1',
				'integrated_edit_field2',
				'integrated_edit_field3',
				'integrated_edit_field4',
				'integrated_edit_field5',
				'integrated_edit_field6',
				'integrated_edit_field8',
				'integrated_edit_field10',
				'integrated_edit_field11',
				'integrated_edit_field12',
				'edit_field',
				'land_size_unit',
				'builtup_unit',
				'edit_field1' 
			),
			'edit_field_label' => array( 
				'integrated_edit_field13',
				'integrated_edit_field14',
				'integrated_edit_field15',
				'integrated_edit_field16',
				'integrated_edit_field17',
				'integrated_edit_field18',
				'integrated_edit_field19',
				'integrated_edit_field20',
				'integrated_edit_field22',
				'integrated_edit_field23',
				'integrated_edit_field24',
				'edit_field_label',
				'edit_field_label1' 
			),
			'details_preview' => array( 
				'details_preview' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c19' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'agentid_fieldblock' 
						),
						'items' => array( 
							'edit_field_label1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c20' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c4' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'types_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c2' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'kind_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c5' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'hdb_town_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c6' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field2' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'hdb_scheme_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c8' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field3' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c9' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							5 
						),
						'tags' => array( 
							'prop_address_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field17' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c10' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							5 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field4' 
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
							'prop_name_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c12' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							6 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field5' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c13' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							7 
						),
						'tags' => array( 
							'land_size_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c14' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							7 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field6',
							'land_size_unit' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c17' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							8 
						),
						'tags' => array( 
							'builtup_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field20' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c18' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							8 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field8',
							'builtup_unit' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c21' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							9 
						),
						'tags' => array( 
							'tenure_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field22' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c22' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							9 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field10' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c23' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							10 
						),
						'tags' => array( 
							'year_built_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field23' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c24' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							10 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field11' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c25' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							11 
						),
						'tags' => array( 
							'TOP_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field24' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c26' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							11 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field12' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c29' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							12 
						),
						'tags' => array( 
							'photos_fieldblock' 
						),
						'items' => array( 
							'edit_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c30' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							12 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c1' => array(
						'cols' => array( 
							0,
							1 
						),
						'rows' => array( 
							13 
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
				'width' => 2,
				'height' => 14 
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
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
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
		'nextPrev' => true 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
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
						'view_close' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'prev',
						'next',
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
							'cell' => 'c19' 
						),
						array(
							'cell' => 'c20' 
						) 
					) 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c4' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c' 
						),
						array(
							'cell' => 'c3' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c5' 
						),
						array(
							'cell' => 'c6' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c7' 
						),
						array(
							'cell' => 'c8' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c9' 
						),
						array(
							'cell' => 'c10' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c11' 
						),
						array(
							'cell' => 'c12' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c13' 
						),
						array(
							'cell' => 'c14' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c17' 
						),
						array(
							'cell' => 'c18' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c21' 
						),
						array(
							'cell' => 'c22' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c23' 
						),
						array(
							'cell' => 'c24' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c25' 
						),
						array(
							'cell' => 'c26' 
						) 
					),
					'section' => '' 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c29' 
						),
						array(
							'cell' => 'c30' 
						) 
					) 
				),
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
				'c4' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field13' 
					),
					'field' => 'types' 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field' 
					),
					'field' => 'types' 
				),
				'c' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field14' 
					),
					'field' => 'kind' 
				),
				'c3' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field1' 
					),
					'field' => 'kind' 
				),
				'c5' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field15' 
					),
					'field' => 'hdb_town' 
				),
				'c6' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field2' 
					),
					'field' => 'hdb_town' 
				),
				'c7' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field16' 
					),
					'field' => 'hdb_scheme' 
				),
				'c8' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field3' 
					),
					'field' => 'hdb_scheme' 
				),
				'c9' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field17' 
					),
					'field' => 'prop_address' 
				),
				'c10' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field4' 
					),
					'field' => 'prop_address' 
				),
				'c11' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field18' 
					),
					'field' => 'prop_name' 
				),
				'c12' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field5' 
					),
					'field' => 'prop_name' 
				),
				'c13' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field19' 
					),
					'field' => 'land_size' 
				),
				'c14' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field6',
						'land_size_unit' 
					),
					'field' => 'land_size' 
				),
				'c17' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field20' 
					),
					'field' => 'builtup' 
				),
				'c18' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field8',
						'builtup_unit' 
					),
					'field' => 'builtup' 
				),
				'c21' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field22' 
					),
					'field' => 'tenure' 
				),
				'c22' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field10' 
					),
					'field' => 'tenure' 
				),
				'c23' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field23' 
					),
					'field' => 'year_built' 
				),
				'c24' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field11' 
					),
					'field' => 'year_built' 
				),
				'c25' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field24' 
					),
					'field' => 'TOP' 
				),
				'c26' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field12' 
					),
					'field' => 'TOP' 
				),
				'c29' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field_label' 
					),
					'field' => 'TOP' 
				),
				'c30' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field' 
					),
					'field' => 'TOP' 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'details_preview' 
					),
					'field' => null 
				),
				'c19' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field_label1' 
					),
					'field' => 'types' 
				),
				'c20' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field1' 
					),
					'field' => 'types' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => true,
			'separateLabels' => true 
		) 
	),
	'items' => array(
		'view_header' => array(
			'type' => 'view_header' 
		),
		'view_back_list' => array(
			'type' => 'view_back_list' 
		),
		'view_close' => array(
			'type' => 'view_close' 
		),
		'hamburger' => array(
			'type' => 'hamburger',
			'items' => array( 
				'view_edit',
				'view_pdf' 
			) 
		),
		'view_edit' => array(
			'type' => 'view_edit' 
		),
		'view_pdf' => array(
			'type' => 'view_pdf',
			'targetPages' => array( 
				 
			),
			'splitModes' => array( 
				 
			),
			'scopes' => array( 
				 
			) 
		),
		'next' => array(
			'type' => 'next' 
		),
		'prev' => array(
			'type' => 'prev' 
		),
		'integrated_edit_field' => array(
			'field' => 'types',
			'type' => 'edit_field' 
		),
		'integrated_edit_field1' => array(
			'field' => 'kind',
			'type' => 'edit_field' 
		),
		'integrated_edit_field2' => array(
			'field' => 'hdb_town',
			'type' => 'edit_field' 
		),
		'integrated_edit_field3' => array(
			'field' => 'hdb_scheme',
			'type' => 'edit_field' 
		),
		'integrated_edit_field4' => array(
			'field' => 'prop_address',
			'type' => 'edit_field' 
		),
		'integrated_edit_field5' => array(
			'field' => 'prop_name',
			'type' => 'edit_field' 
		),
		'integrated_edit_field6' => array(
			'field' => 'land_size',
			'type' => 'edit_field' 
		),
		'integrated_edit_field8' => array(
			'field' => 'builtup',
			'type' => 'edit_field' 
		),
		'integrated_edit_field10' => array(
			'field' => 'tenure',
			'type' => 'edit_field' 
		),
		'integrated_edit_field11' => array(
			'field' => 'year_built',
			'type' => 'edit_field' 
		),
		'integrated_edit_field12' => array(
			'field' => 'TOP',
			'type' => 'edit_field' 
		),
		'integrated_edit_field13' => array(
			'type' => 'edit_field_label',
			'field' => 'types' 
		),
		'integrated_edit_field14' => array(
			'type' => 'edit_field_label',
			'field' => 'kind' 
		),
		'integrated_edit_field15' => array(
			'type' => 'edit_field_label',
			'field' => 'hdb_town' 
		),
		'integrated_edit_field16' => array(
			'type' => 'edit_field_label',
			'field' => 'hdb_scheme' 
		),
		'integrated_edit_field17' => array(
			'type' => 'edit_field_label',
			'field' => 'prop_address' 
		),
		'integrated_edit_field18' => array(
			'type' => 'edit_field_label',
			'field' => 'prop_name' 
		),
		'integrated_edit_field19' => array(
			'type' => 'edit_field_label',
			'field' => 'land_size' 
		),
		'integrated_edit_field20' => array(
			'type' => 'edit_field_label',
			'field' => 'builtup' 
		),
		'integrated_edit_field22' => array(
			'type' => 'edit_field_label',
			'field' => 'tenure' 
		),
		'integrated_edit_field23' => array(
			'type' => 'edit_field_label',
			'field' => 'year_built' 
		),
		'integrated_edit_field24' => array(
			'type' => 'edit_field_label',
			'field' => 'TOP' 
		),
		'edit_field' => array(
			'field' => 'photos',
			'type' => 'edit_field' 
		),
		'edit_field_label' => array(
			'type' => 'edit_field_label',
			'field' => 'photos' 
		),
		'details_preview' => array(
			'type' => 'details_preview',
			'table' => 193340,
			'items' => array( 
				 
			),
			'popup' => false,
			'pageId' => 'list' 
		),
		'land_size_unit' => array(
			'field' => 'land_size_unit',
			'type' => 'edit_field' 
		),
		'builtup_unit' => array(
			'field' => 'builtup_unit',
			'type' => 'edit_field' 
		),
		'edit_field1' => array(
			'field' => 'agentid',
			'type' => 'edit_field' 
		),
		'edit_field_label1' => array(
			'type' => 'edit_field_label',
			'field' => 'agentid' 
		) 
	),
	'version' => 14,
	'pageAlign' => 'left',
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>