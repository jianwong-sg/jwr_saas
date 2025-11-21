<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'master' => array(
		'eat_users_user' => array(
			'preview' => false 
		),
		'eat_users' => array(
			'preview' => false 
		) 
	),
	'totals' => array(
		'agent_name' => array(
			'totalsType' => '' 
		),
		'cea_reg' => array(
			'totalsType' => '' 
		),
		'descriptions' => array(
			'totalsType' => '' 
		),
		'doc_upload' => array(
			'totalsType' => '' 
		),
		'eatuser_id' => array(
			'totalsType' => '' 
		),
		'id' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'cea_reg',
			'descriptions',
			'agent_name',
			'doc_upload' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'cea_reg' => array( 
				'simple_grid_field' 
			),
			'descriptions' => array( 
				'simple_grid_field1',
				'simple_grid_field5' 
			),
			'agent_name' => array( 
				'simple_grid_field3',
				'simple_grid_field7' 
			),
			'doc_upload' => array( 
				'grid_field',
				'grid_field_label' 
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
					'simple_grid_field7',
					'simple_grid_field3',
					'simple_grid_field',
					'simple_grid_field5',
					'simple_grid_field1',
					'grid_field_label',
					'grid_field' 
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
				'simple_grid_field7' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field1' => 'grid',
				'grid_field_label' => 'grid',
				'grid_field' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
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
				'simple_grid_field3',
				'grid_field' 
			),
			'grid_field_label' => array( 
				'simple_grid_field5',
				'simple_grid_field7',
				'grid_field_label' 
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
					'headcell_field1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'agent_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'descriptions_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'doc_upload_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'agent_name_fieldcolumn',
							'cea_reg_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3',
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'descriptions_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'doc_upload_fieldcolumn' 
						),
						'items' => array( 
							'grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field4' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 3,
				'height' => 3 
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
		'gridType' => 0,
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
			'modelId' => 'horizontal-grid',
			'grid' => array( 
				array(
					'section' => 'head',
					'cells' => array( 
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field4' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field4' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field4' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'agent_name',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3',
						'simple_grid_field' 
					),
					'orientation' => 'vertical',
					'field' => 'agent_name',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'descriptions',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'descriptions',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label' 
					),
					'field' => 'doc_upload',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'field' => 'doc_upload',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
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
		'simple_grid_field' => array(
			'field' => 'cea_reg',
			'type' => 'grid_field' 
		),
		'simple_grid_field1' => array(
			'field' => 'descriptions',
			'type' => 'grid_field' 
		),
		'simple_grid_field3' => array(
			'field' => 'agent_name',
			'type' => 'grid_field' 
		),
		'simple_grid_field5' => array(
			'type' => 'grid_field_label',
			'field' => 'descriptions' 
		),
		'simple_grid_field7' => array(
			'type' => 'grid_field_label',
			'field' => 'agent_name' 
		),
		'grid_field' => array(
			'field' => 'doc_upload',
			'type' => 'grid_field' 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'doc_upload' 
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