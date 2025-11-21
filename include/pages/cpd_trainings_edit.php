<?php
			$optionsArray = array(
	'captcha' => array(
		'captcha' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			'cea_reg',
			'cpd_hour',
			'provider',
			'activity',
			'startdate',
			'enddate',
			'doc_upload',
			'cost',
			'name',
			'period' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'updateOnEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'cea_reg' => array( 
				'integrated_edit_field7' 
			),
			'cpd_hour' => array( 
				'integrated_edit_field' 
			),
			'provider' => array( 
				'integrated_edit_field1' 
			),
			'activity' => array( 
				'integrated_edit_field2' 
			),
			'startdate' => array( 
				'integrated_edit_field3' 
			),
			'enddate' => array( 
				'integrated_edit_field4' 
			),
			'doc_upload' => array( 
				'integrated_edit_field5' 
			),
			'cost' => array( 
				'integrated_edit_field6' 
			),
			'name' => array( 
				'integrated_edit_field8' 
			),
			'period' => array( 
				'integrated_edit_field9' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => true,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'edit_message' 
				),
				'below-grid' => array( 
					'edit_save',
					'edit_back_list',
					'edit_close',
					'prev',
					'next',
					'hamburger' 
				),
				'top' => array( 
					'edit_header' 
				),
				'grid' => array( 
					'integrated_edit_field8',
					'integrated_edit_field7',
					'integrated_edit_field1',
					'integrated_edit_field2',
					'integrated_edit_field',
					'integrated_edit_field3',
					'integrated_edit_field4',
					'integrated_edit_field6',
					'integrated_edit_field5',
					'integrated_edit_field9' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'message_block' 
				) 
			),
			'itemForms' => array(
				'edit_message' => 'above-grid',
				'edit_save' => 'below-grid',
				'edit_back_list' => 'below-grid',
				'edit_close' => 'below-grid',
				'prev' => 'below-grid',
				'next' => 'below-grid',
				'hamburger' => 'below-grid',
				'edit_header' => 'top',
				'integrated_edit_field8' => 'grid',
				'integrated_edit_field7' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field2' => 'grid',
				'integrated_edit_field' => 'grid',
				'integrated_edit_field3' => 'grid',
				'integrated_edit_field4' => 'grid',
				'integrated_edit_field6' => 'grid',
				'integrated_edit_field5' => 'grid',
				'integrated_edit_field9' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field7' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field3' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field4' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field6' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field5' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field9' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'edit_header' => array( 
				'edit_header' 
			),
			'hamburger' => array( 
				'hamburger' 
			),
			'edit_reset' => array( 
				'edit_reset' 
			),
			'edit_message' => array( 
				'edit_message' 
			),
			'edit_save' => array( 
				'edit_save' 
			),
			'edit_back_list' => array( 
				'edit_back_list' 
			),
			'edit_close' => array( 
				'edit_close' 
			),
			'edit_view' => array( 
				'edit_view' 
			),
			'next' => array( 
				'next' 
			),
			'prev' => array( 
				'prev' 
			),
			'integrated_edit_field' => array( 
				'integrated_edit_field7',
				'integrated_edit_field',
				'integrated_edit_field1',
				'integrated_edit_field2',
				'integrated_edit_field3',
				'integrated_edit_field4',
				'integrated_edit_field5',
				'integrated_edit_field6',
				'integrated_edit_field8',
				'integrated_edit_field9' 
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
							'integrated_edit_field8',
							'integrated_edit_field7',
							'integrated_edit_field1',
							'integrated_edit_field2',
							'integrated_edit_field' 
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
							'integrated_edit_field3',
							'integrated_edit_field4',
							'integrated_edit_field6',
							'integrated_edit_field5',
							'integrated_edit_field9' 
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
		'type' => 'edit',
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
	),
	'edit' => array(
		'updateSelected' => false 
	) 
);
			$pageArray = array(
	'id' => 'edit',
	'type' => 'edit',
	'layoutId' => 'nomenu',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'edit-above-grid',
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
						'edit_message' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'edit-below-grid',
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
						'edit_save',
						'edit_back_list',
						'edit_close' 
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
			'modelId' => 'edit-header',
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
						'edit_header' 
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
						'integrated_edit_field8',
						'integrated_edit_field7',
						'integrated_edit_field1',
						'integrated_edit_field2',
						'integrated_edit_field' 
					) 
				),
				'c' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field3',
						'integrated_edit_field4',
						'integrated_edit_field6',
						'integrated_edit_field5',
						'integrated_edit_field9' 
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
		'edit_header' => array(
			'type' => 'edit_header' 
		),
		'hamburger' => array(
			'type' => 'hamburger',
			'items' => array( 
				'edit_reset',
				'edit_view' 
			) 
		),
		'edit_reset' => array(
			'type' => 'edit_reset' 
		),
		'edit_message' => array(
			'type' => 'edit_message' 
		),
		'edit_save' => array(
			'type' => 'edit_save' 
		),
		'edit_back_list' => array(
			'type' => 'edit_back_list' 
		),
		'edit_close' => array(
			'type' => 'edit_close' 
		),
		'edit_view' => array(
			'type' => 'edit_view' 
		),
		'next' => array(
			'type' => 'next' 
		),
		'prev' => array(
			'type' => 'prev' 
		),
		'integrated_edit_field7' => array(
			'field' => 'cea_reg',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => false 
		),
		'integrated_edit_field' => array(
			'field' => 'cpd_hour',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field1' => array(
			'field' => 'provider',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field2' => array(
			'field' => 'activity',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field3' => array(
			'field' => 'startdate',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field4' => array(
			'field' => 'enddate',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field5' => array(
			'field' => 'doc_upload',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field6' => array(
			'field' => 'cost',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field8' => array(
			'field' => 'name',
			'type' => 'integrated_edit_field',
			'orientation' => 0,
			'updateOnEdit' => false 
		),
		'integrated_edit_field9' => array(
			'field' => 'period',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
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