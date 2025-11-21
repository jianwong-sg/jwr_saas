<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			'name',
			'cea_reg',
			'cpd_hour',
			'provider',
			'activity',
			'cost',
			'cpd_type',
			'startdate',
			'enddate',
			'doc_upload' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'name' => array( 
				'integrated_edit_field' 
			),
			'cea_reg' => array( 
				'integrated_edit_field1' 
			),
			'cpd_hour' => array( 
				'integrated_edit_field2' 
			),
			'provider' => array( 
				'integrated_edit_field3' 
			),
			'activity' => array( 
				'integrated_edit_field4' 
			),
			'cost' => array( 
				'integrated_edit_field5' 
			),
			'cpd_type' => array( 
				'integrated_edit_field6' 
			),
			'startdate' => array( 
				'integrated_edit_field8' 
			),
			'enddate' => array( 
				'integrated_edit_field9' 
			),
			'doc_upload' => array( 
				'integrated_edit_field10' 
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
					'integrated_edit_field',
					'integrated_edit_field1',
					'integrated_edit_field3',
					'integrated_edit_field4',
					'integrated_edit_field6',
					'integrated_edit_field2',
					'integrated_edit_field8',
					'integrated_edit_field9',
					'integrated_edit_field5',
					'integrated_edit_field10' 
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
				'integrated_edit_field' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field3' => 'grid',
				'integrated_edit_field4' => 'grid',
				'integrated_edit_field6' => 'grid',
				'integrated_edit_field2' => 'grid',
				'integrated_edit_field8' => 'grid',
				'integrated_edit_field9' => 'grid',
				'integrated_edit_field5' => 'grid',
				'integrated_edit_field10' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field3' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field4' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field6' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field9' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field5' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field10' => array(
					'location' => 'grid',
					'cellId' => 'c' 
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
			'next' => array( 
				'next' 
			),
			'prev' => array( 
				'prev' 
			),
			'integrated_edit_field' => array( 
				'integrated_edit_field',
				'integrated_edit_field1',
				'integrated_edit_field2',
				'integrated_edit_field3',
				'integrated_edit_field4',
				'integrated_edit_field5',
				'integrated_edit_field6',
				'integrated_edit_field8',
				'integrated_edit_field9',
				'integrated_edit_field10' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
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
							'integrated_edit_field',
							'integrated_edit_field1',
							'integrated_edit_field3',
							'integrated_edit_field4',
							'integrated_edit_field6',
							'integrated_edit_field2' 
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
							'integrated_edit_field8',
							'integrated_edit_field9',
							'integrated_edit_field5',
							'integrated_edit_field10' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 2,
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
					'cells' => array( 
						array(
							'cell' => 'c3' 
						),
						array(
							'cell' => 'c' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field',
						'integrated_edit_field1',
						'integrated_edit_field3',
						'integrated_edit_field4',
						'integrated_edit_field6',
						'integrated_edit_field2' 
					) 
				),
				'c' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field8',
						'integrated_edit_field9',
						'integrated_edit_field5',
						'integrated_edit_field10' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 2,
			'inlineLabels' => false,
			'separateLabels' => false 
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
				'view_edit' 
			) 
		),
		'view_edit' => array(
			'type' => 'view_edit' 
		),
		'next' => array(
			'type' => 'next' 
		),
		'prev' => array(
			'type' => 'prev' 
		),
		'integrated_edit_field' => array(
			'field' => 'name',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => true 
		),
		'integrated_edit_field1' => array(
			'field' => 'cea_reg',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => true 
		),
		'integrated_edit_field2' => array(
			'field' => 'cpd_hour',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field3' => array(
			'field' => 'provider',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => true 
		),
		'integrated_edit_field4' => array(
			'field' => 'activity',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => true 
		),
		'integrated_edit_field5' => array(
			'field' => 'cost',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => true 
		),
		'integrated_edit_field6' => array(
			'field' => 'cpd_type',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => true 
		),
		'integrated_edit_field8' => array(
			'field' => 'startdate',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => true 
		),
		'integrated_edit_field9' => array(
			'field' => 'enddate',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => true 
		),
		'integrated_edit_field10' => array(
			'field' => 'doc_upload',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => true 
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