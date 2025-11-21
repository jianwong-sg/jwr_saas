<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'master' => array(
		'rental_main_details' => array(
			'preview' => false 
		) 
	),
	'totals' => array(
		'id' => array(
			'totalsType' => '' 
		),
		'id_detail' => array(
			'totalsType' => '' 
		),
		'occupier_name' => array(
			'totalsType' => '' 
		),
		'occupier_id' => array(
			'totalsType' => '' 
		),
		'occupier_occupation' => array(
			'totalsType' => '' 
		),
		'file_upload' => array(
			'totalsType' => '' 
		),
		'occupier_relationship' => array(
			'totalsType' => '' 
		),
		'occupier_nationality' => array(
			'totalsType' => '' 
		),
		'occupier_gender' => array(
			'totalsType' => '' 
		),
		'updatedate' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'occupier_relationship',
			'occupier_nationality',
			'occupier_gender',
			'updatedate',
			'occupier_id',
			'occupier_name',
			'occupier_occupation',
			'file_upload' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'occupier_relationship' => array( 
				'simple_grid_field',
				'simple_grid_field8' 
			),
			'occupier_nationality' => array( 
				'simple_grid_field1',
				'simple_grid_field9' 
			),
			'occupier_gender' => array( 
				'simple_grid_field2',
				'simple_grid_field10' 
			),
			'updatedate' => array( 
				'simple_grid_field3',
				'simple_grid_field11' 
			),
			'occupier_id' => array( 
				'simple_grid_field4',
				'simple_grid_field12' 
			),
			'occupier_name' => array( 
				'simple_grid_field5',
				'simple_grid_field13' 
			),
			'occupier_occupation' => array( 
				'simple_grid_field6',
				'simple_grid_field14' 
			),
			'file_upload' => array( 
				'simple_grid_field7',
				'simple_grid_field15' 
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
					'print_pages',
					'grid_inline_cancel',
					'inline_add' 
				),
				'below-grid' => array( 
					 
				),
				'top' => array( 
					'print_header',
					'print_subheader' 
				),
				'grid' => array( 
					'simple_grid_field8',
					'simple_grid_field',
					'simple_grid_field12',
					'simple_grid_field4',
					'simple_grid_field9',
					'simple_grid_field1',
					'simple_grid_field13',
					'simple_grid_field5',
					'simple_grid_field10',
					'simple_grid_field2',
					'simple_grid_field14',
					'simple_grid_field6',
					'simple_grid_field11',
					'simple_grid_field3',
					'simple_grid_field15',
					'simple_grid_field7' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'print_pages',
					'inline_cancel',
					'inlineadd_link' 
				),
				'below-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'print_pages' => 'above-grid',
				'grid_inline_cancel' => 'above-grid',
				'inline_add' => 'above-grid',
				'print_header' => 'top',
				'print_subheader' => 'top',
				'simple_grid_field8' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field7' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_label' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'cell_label1' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_label2' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'cell_label3' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_label4' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_label5' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_label6' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_label7' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
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
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'simple_grid_field2',
				'simple_grid_field3',
				'simple_grid_field4',
				'simple_grid_field5',
				'simple_grid_field6',
				'simple_grid_field7' 
			),
			'grid_field_label' => array( 
				'simple_grid_field8',
				'simple_grid_field9',
				'simple_grid_field10',
				'simple_grid_field11',
				'simple_grid_field12',
				'simple_grid_field13',
				'simple_grid_field14',
				'simple_grid_field15' 
			),
			'inline_add' => array( 
				'inline_add' 
			),
			'grid_inline_cancel' => array( 
				'grid_inline_cancel' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'cell_top' => array(
						'cols' => array( 
							0,
							1,
							2,
							3 
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
							'occupier_relationship_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
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
							'occupier_relationship_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'occupier_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'occupier_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label2' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'occupier_nationality_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'occupier_nationality_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label3' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'occupier_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'occupier_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label4' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'occupier_gender_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'occupier_gender_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label5' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'occupier_occupation_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'occupier_occupation_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label6' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'updatedate_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'updatedate_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label7' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'file_upload_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'file_upload_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_dpreview' => array(
						'cols' => array( 
							0,
							1,
							2,
							3 
						),
						'rows' => array( 
							5 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 4,
				'height' => 6 
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
		'gridType' => 2,
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
						'print_pages',
						'grid_inline_cancel',
						'inline_add' 
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
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'columns-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_top',
							'colspan' => 4 
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
						),
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
						),
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
						),
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
						),
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
							'cell' => 'cell_dpreview',
							'colspan' => 4 
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
						 
					) 
				),
				'cell_label' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'occupier_relationship',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'occupier_relationship',
					'columnName' => 'field' 
				),
				'cell_label1' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'occupier_id',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'occupier_id',
					'columnName' => 'field' 
				),
				'cell_label2' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'occupier_nationality',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'occupier_nationality',
					'columnName' => 'field' 
				),
				'cell_label3' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'occupier_name',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'occupier_name',
					'columnName' => 'field' 
				),
				'cell_label4' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'occupier_gender',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'occupier_gender',
					'columnName' => 'field' 
				),
				'cell_label5' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'occupier_occupation',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'occupier_occupation',
					'columnName' => 'field' 
				),
				'cell_label6' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'updatedate',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'updatedate',
					'columnName' => 'field' 
				),
				'cell_label7' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'file_upload',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'file_upload',
					'columnName' => 'field' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'buildType' => 2,
			'columnCount' => 2 
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
		'simple_grid_field' => array(
			'field' => 'occupier_relationship',
			'type' => 'grid_field' 
		),
		'simple_grid_field8' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_relationship' 
		),
		'simple_grid_field1' => array(
			'field' => 'occupier_nationality',
			'type' => 'grid_field' 
		),
		'simple_grid_field9' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_nationality' 
		),
		'simple_grid_field2' => array(
			'field' => 'occupier_gender',
			'type' => 'grid_field' 
		),
		'simple_grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_gender' 
		),
		'simple_grid_field3' => array(
			'field' => 'updatedate',
			'type' => 'grid_field' 
		),
		'simple_grid_field11' => array(
			'type' => 'grid_field_label',
			'field' => 'updatedate' 
		),
		'simple_grid_field4' => array(
			'field' => 'occupier_id',
			'type' => 'grid_field' 
		),
		'simple_grid_field12' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_id' 
		),
		'simple_grid_field5' => array(
			'field' => 'occupier_name',
			'type' => 'grid_field' 
		),
		'simple_grid_field13' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_name' 
		),
		'simple_grid_field6' => array(
			'field' => 'occupier_occupation',
			'type' => 'grid_field' 
		),
		'simple_grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_occupation' 
		),
		'simple_grid_field7' => array(
			'field' => 'file_upload',
			'type' => 'grid_field' 
		),
		'simple_grid_field15' => array(
			'type' => 'grid_field_label',
			'field' => 'file_upload' 
		),
		'inline_add' => array(
			'type' => 'inline_add',
			'detailsOnly' => true 
		),
		'grid_inline_cancel' => array(
			'type' => 'grid_inline_cancel' 
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