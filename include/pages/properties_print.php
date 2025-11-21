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
			'previewPageId' => 'print' 
		) 
	),
	'totals' => array(
		'id' => array(
			'totalsType' => '' 
		),
		'prop_name' => array(
			'totalsType' => '' 
		),
		'prop_address' => array(
			'totalsType' => '' 
		),
		'prop_postal' => array(
			'totalsType' => '' 
		),
		'land_size' => array(
			'totalsType' => '' 
		),
		'builtup' => array(
			'totalsType' => '' 
		),
		'tenure' => array(
			'totalsType' => '' 
		),
		'year_built' => array(
			'totalsType' => '' 
		),
		'TOP' => array(
			'totalsType' => '' 
		),
		'docuserid' => array(
			'totalsType' => '' 
		),
		'types' => array(
			'totalsType' => '' 
		),
		'kind' => array(
			'totalsType' => '' 
		),
		'hdb_town' => array(
			'totalsType' => '' 
		),
		'hdb_scheme' => array(
			'totalsType' => '' 
		),
		'cusid' => array(
			'totalsType' => '' 
		),
		'agentid' => array(
			'totalsType' => '' 
		),
		'photos' => array(
			'totalsType' => '' 
		),
		'land_size_unit' => array(
			'totalsType' => '' 
		),
		'builtup_unit' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'prop_name',
			'prop_address',
			'types',
			'kind',
			'hdb_town',
			'hdb_scheme',
			'land_size',
			'builtup',
			'tenure',
			'year_built',
			'TOP',
			'land_size_unit',
			'builtup_unit',
			'photos' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'prop_name' => array( 
				'simple_grid_field',
				'simple_grid_field14' 
			),
			'prop_address' => array( 
				'simple_grid_field1',
				'simple_grid_field15' 
			),
			'types' => array( 
				'simple_grid_field2',
				'simple_grid_field16' 
			),
			'kind' => array( 
				'simple_grid_field3',
				'simple_grid_field17' 
			),
			'hdb_town' => array( 
				'simple_grid_field4',
				'simple_grid_field18' 
			),
			'hdb_scheme' => array( 
				'simple_grid_field5',
				'simple_grid_field19' 
			),
			'land_size' => array( 
				'simple_grid_field6',
				'simple_grid_field20' 
			),
			'builtup' => array( 
				'simple_grid_field7',
				'simple_grid_field21' 
			),
			'tenure' => array( 
				'simple_grid_field8',
				'simple_grid_field22' 
			),
			'year_built' => array( 
				'simple_grid_field9',
				'simple_grid_field23' 
			),
			'TOP' => array( 
				'simple_grid_field10',
				'simple_grid_field24' 
			),
			'land_size_unit' => array( 
				'simple_grid_field11',
				'simple_grid_field25' 
			),
			'builtup_unit' => array( 
				'simple_grid_field12',
				'simple_grid_field26' 
			),
			'photos' => array( 
				'simple_grid_field13',
				'simple_grid_field27' 
			) 
		),
		'hideEmptyFields' => array( 
			 
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
					'print_pages' 
				),
				'below-grid' => array( 
					 
				),
				'top' => array( 
					'print_header',
					'print_subheader',
					'print_pdf' 
				),
				'grid' => array( 
					'details_preview',
					'simple_grid_field14',
					'simple_grid_field',
					'simple_grid_field15',
					'simple_grid_field1',
					'simple_grid_field16',
					'simple_grid_field2',
					'simple_grid_field17',
					'simple_grid_field3',
					'simple_grid_field18',
					'simple_grid_field4',
					'simple_grid_field19',
					'simple_grid_field5',
					'simple_grid_field20',
					'simple_grid_field6',
					'simple_grid_field21',
					'simple_grid_field7',
					'simple_grid_field22',
					'simple_grid_field8',
					'simple_grid_field23',
					'simple_grid_field9',
					'simple_grid_field24',
					'simple_grid_field10',
					'simple_grid_field25',
					'simple_grid_field11',
					'simple_grid_field26',
					'simple_grid_field12',
					'simple_grid_field27',
					'simple_grid_field13' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'print_pages' 
				),
				'below-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'print_pages' => 'above-grid',
				'print_header' => 'top',
				'print_subheader' => 'top',
				'print_pdf' => 'top',
				'details_preview' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field16' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field17' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field18' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field19' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field20' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field21' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field22' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field23' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field24' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field25' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field26' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field27' => 'grid',
				'simple_grid_field13' => 'grid' 
			),
			'itemLocations' => array(
				'details_preview' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_label' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_label1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'cell_label2' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'cell_label3' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field18' => array(
					'location' => 'grid',
					'cellId' => 'cell_label4' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field19' => array(
					'location' => 'grid',
					'cellId' => 'cell_label5' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field20' => array(
					'location' => 'grid',
					'cellId' => 'cell_label6' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field21' => array(
					'location' => 'grid',
					'cellId' => 'cell_label7' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'simple_grid_field22' => array(
					'location' => 'grid',
					'cellId' => 'cell_label8' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'simple_grid_field23' => array(
					'location' => 'grid',
					'cellId' => 'cell_label9' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'simple_grid_field24' => array(
					'location' => 'grid',
					'cellId' => 'cell_label10' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_field10' 
				),
				'simple_grid_field25' => array(
					'location' => 'grid',
					'cellId' => 'cell_label11' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_field11' 
				),
				'simple_grid_field26' => array(
					'location' => 'grid',
					'cellId' => 'cell_label12' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'cell_field12' 
				),
				'simple_grid_field27' => array(
					'location' => 'grid',
					'cellId' => 'cell_label13' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'cell_field13' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'print_header' => array( 
				'print_header' 
			),
			'print_subheader' => array( 
				'print_subheader' 
			),
			'print_pages' => array( 
				'print_pages' 
			),
			'print_pdf' => array( 
				'print_pdf' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'simple_grid_field2',
				'simple_grid_field3',
				'simple_grid_field4',
				'simple_grid_field5',
				'simple_grid_field6',
				'simple_grid_field7',
				'simple_grid_field8',
				'simple_grid_field9',
				'simple_grid_field10',
				'simple_grid_field11',
				'simple_grid_field12',
				'simple_grid_field13' 
			),
			'grid_field_label' => array( 
				'simple_grid_field14',
				'simple_grid_field15',
				'simple_grid_field16',
				'simple_grid_field17',
				'simple_grid_field18',
				'simple_grid_field19',
				'simple_grid_field20',
				'simple_grid_field21',
				'simple_grid_field22',
				'simple_grid_field23',
				'simple_grid_field24',
				'simple_grid_field25',
				'simple_grid_field26',
				'simple_grid_field27' 
			),
			'details_preview' => array( 
				'details_preview' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'cell_top' => array(
						'cols' => array( 
							0,
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'prop_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'prop_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'prop_address_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'prop_address_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label2' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'types_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'types_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'kind_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field17' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'kind_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label4' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							5 
						),
						'tags' => array( 
							'hdb_town_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							5 
						),
						'tags' => array( 
							'hdb_town_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label5' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							6 
						),
						'tags' => array( 
							'hdb_scheme_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							6 
						),
						'tags' => array( 
							'hdb_scheme_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label6' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							7 
						),
						'tags' => array( 
							'land_size_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field20' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							7 
						),
						'tags' => array( 
							'land_size_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							8 
						),
						'tags' => array( 
							'builtup_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field21' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							8 
						),
						'tags' => array( 
							'builtup_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label8' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							9 
						),
						'tags' => array( 
							'tenure_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field22' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							9 
						),
						'tags' => array( 
							'tenure_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label9' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							10 
						),
						'tags' => array( 
							'year_built_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field23' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							10 
						),
						'tags' => array( 
							'year_built_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label10' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							11 
						),
						'tags' => array( 
							'TOP_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field24' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field10' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							11 
						),
						'tags' => array( 
							'TOP_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label11' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							12 
						),
						'tags' => array( 
							'land_size_unit_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field25' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field11' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							12 
						),
						'tags' => array( 
							'land_size_unit_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label12' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							13 
						),
						'tags' => array( 
							'builtup_unit_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field26' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field12' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							13 
						),
						'tags' => array( 
							'builtup_unit_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label13' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							14 
						),
						'tags' => array( 
							'photos_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field27' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field13' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							14 
						),
						'tags' => array( 
							'photos_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label14' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							15 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field14' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							15 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_dpreview' => array(
						'cols' => array( 
							0,
							1 
						),
						'rows' => array( 
							16 
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
				'height' => 17 
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
				'print_pages' => array(
					'tag' => 'PRINT_PAGES',
					'type' => 2 
				) 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'gridType' => 1,
		'recsPerRow' => 1,
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
		'type' => 'print',
		'breadcrumb' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'dataGrid' => array(
		'groupFields' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'print',
	'type' => 'print',
	'layoutId' => 'basic',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'print-above-grid',
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
						'print_pages' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'print-below-grid',
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
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'print-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'print_header',
						'print_subheader' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'print_pdf' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'vertical-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_top',
							'colspan' => 2 
						) 
					),
					'section' => 'head' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label' 
						),
						array(
							'cell' => 'cell_field' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label1' 
						),
						array(
							'cell' => 'cell_field1' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label2' 
						),
						array(
							'cell' => 'cell_field2' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label3' 
						),
						array(
							'cell' => 'cell_field3' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label4' 
						),
						array(
							'cell' => 'cell_field4' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label5' 
						),
						array(
							'cell' => 'cell_field5' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label6' 
						),
						array(
							'cell' => 'cell_field6' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label7' 
						),
						array(
							'cell' => 'cell_field7' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label8' 
						),
						array(
							'cell' => 'cell_field8' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label9' 
						),
						array(
							'cell' => 'cell_field9' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label10' 
						),
						array(
							'cell' => 'cell_field10' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label11' 
						),
						array(
							'cell' => 'cell_field11' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label12' 
						),
						array(
							'cell' => 'cell_field12' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label13' 
						),
						array(
							'cell' => 'cell_field13' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label14' 
						),
						array(
							'cell' => 'cell_field14' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_dpreview',
							'colspan' => 2 
						) 
					),
					'section' => 'foot' 
				) 
			),
			'cells' => array(
				'cell_top' => array(
					'model' => 'cell_top',
					'items' => array( 
						 
					) 
				),
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						'details_preview' 
					) 
				),
				'cell_label' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'prop_name',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'prop_name',
					'columnName' => 'field' 
				),
				'cell_label1' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'prop_address',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'prop_address',
					'columnName' => 'field' 
				),
				'cell_label2' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'types',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'types',
					'columnName' => 'field' 
				),
				'cell_label3' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field17' 
					),
					'field' => 'kind',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'kind',
					'columnName' => 'field' 
				),
				'cell_label4' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field18' 
					),
					'field' => 'hdb_town',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'hdb_town',
					'columnName' => 'field' 
				),
				'cell_label5' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field19' 
					),
					'field' => 'hdb_scheme',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'hdb_scheme',
					'columnName' => 'field' 
				),
				'cell_label6' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field20' 
					),
					'field' => 'land_size',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'land_size',
					'columnName' => 'field' 
				),
				'cell_label7' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field21' 
					),
					'field' => 'builtup',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'builtup',
					'columnName' => 'field' 
				),
				'cell_label8' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field22' 
					),
					'field' => 'tenure',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'tenure',
					'columnName' => 'field' 
				),
				'cell_label9' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field23' 
					),
					'field' => 'year_built',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'year_built',
					'columnName' => 'field' 
				),
				'cell_label10' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field24' 
					),
					'field' => 'TOP',
					'columnName' => 'field' 
				),
				'cell_field10' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'TOP',
					'columnName' => 'field' 
				),
				'cell_label11' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field25' 
					),
					'field' => 'land_size_unit',
					'columnName' => 'field' 
				),
				'cell_field11' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'land_size_unit',
					'columnName' => 'field' 
				),
				'cell_label12' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field26' 
					),
					'field' => 'builtup_unit',
					'columnName' => 'field' 
				),
				'cell_field12' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'builtup_unit',
					'columnName' => 'field' 
				),
				'cell_label13' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field27' 
					),
					'field' => 'photos',
					'columnName' => 'field' 
				),
				'cell_field13' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'photos',
					'columnName' => 'field' 
				),
				'cell_label14' => array(
					'model' => 'cell_label',
					'items' => array( 
						 
					) 
				),
				'cell_field14' => array(
					'model' => 'cell_field',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'print_header' => array(
			'type' => 'print_header' 
		),
		'print_subheader' => array(
			'type' => 'print_subheader' 
		),
		'print_pages' => array(
			'type' => 'print_pages' 
		),
		'print_pdf' => array(
			'type' => 'print_pdf',
			'targetPages' => array( 
				 
			),
			'splitModes' => array( 
				 
			),
			'scopes' => array( 
				 
			) 
		),
		'simple_grid_field' => array(
			'field' => 'prop_name',
			'type' => 'grid_field' 
		),
		'simple_grid_field1' => array(
			'field' => 'prop_address',
			'type' => 'grid_field' 
		),
		'simple_grid_field2' => array(
			'field' => 'types',
			'type' => 'grid_field' 
		),
		'simple_grid_field3' => array(
			'field' => 'kind',
			'type' => 'grid_field' 
		),
		'simple_grid_field4' => array(
			'field' => 'hdb_town',
			'type' => 'grid_field' 
		),
		'simple_grid_field5' => array(
			'field' => 'hdb_scheme',
			'type' => 'grid_field' 
		),
		'simple_grid_field6' => array(
			'field' => 'land_size',
			'type' => 'grid_field' 
		),
		'simple_grid_field7' => array(
			'field' => 'builtup',
			'type' => 'grid_field' 
		),
		'simple_grid_field8' => array(
			'field' => 'tenure',
			'type' => 'grid_field' 
		),
		'simple_grid_field9' => array(
			'field' => 'year_built',
			'type' => 'grid_field' 
		),
		'simple_grid_field10' => array(
			'field' => 'TOP',
			'type' => 'grid_field' 
		),
		'simple_grid_field11' => array(
			'field' => 'land_size_unit',
			'type' => 'grid_field' 
		),
		'simple_grid_field12' => array(
			'field' => 'builtup_unit',
			'type' => 'grid_field' 
		),
		'simple_grid_field13' => array(
			'field' => 'photos',
			'type' => 'grid_field' 
		),
		'simple_grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'prop_name' 
		),
		'simple_grid_field15' => array(
			'type' => 'grid_field_label',
			'field' => 'prop_address' 
		),
		'simple_grid_field16' => array(
			'type' => 'grid_field_label',
			'field' => 'types' 
		),
		'simple_grid_field17' => array(
			'type' => 'grid_field_label',
			'field' => 'kind' 
		),
		'simple_grid_field18' => array(
			'type' => 'grid_field_label',
			'field' => 'hdb_town' 
		),
		'simple_grid_field19' => array(
			'type' => 'grid_field_label',
			'field' => 'hdb_scheme' 
		),
		'simple_grid_field20' => array(
			'type' => 'grid_field_label',
			'field' => 'land_size' 
		),
		'simple_grid_field21' => array(
			'type' => 'grid_field_label',
			'field' => 'builtup' 
		),
		'simple_grid_field22' => array(
			'type' => 'grid_field_label',
			'field' => 'tenure' 
		),
		'simple_grid_field23' => array(
			'type' => 'grid_field_label',
			'field' => 'year_built' 
		),
		'simple_grid_field24' => array(
			'type' => 'grid_field_label',
			'field' => 'TOP' 
		),
		'simple_grid_field25' => array(
			'type' => 'grid_field_label',
			'field' => 'land_size_unit' 
		),
		'simple_grid_field26' => array(
			'type' => 'grid_field_label',
			'field' => 'builtup_unit' 
		),
		'simple_grid_field27' => array(
			'type' => 'grid_field_label',
			'field' => 'photos' 
		),
		'details_preview' => array(
			'type' => 'details_preview',
			'table' => 193340,
			'items' => array( 
				 
			),
			'popup' => false,
			'pageId' => 'print' 
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
		 
	) 
);
		?>