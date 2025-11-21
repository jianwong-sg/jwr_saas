<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'id',
			'id_tx',
			'representing',
			'name_cobroke_ext',
			'reg_no',
			'email',
			'mobile',
			'agency_name',
			'license_no',
			'country',
			'address',
			'postal',
			'category',
			'prop_address',
			'prop_postal',
			'comm',
			'comm_percent',
			'gst',
			'gst_include',
			'gross',
			'username' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id' => array( 
				'import_field' 
			),
			'id_tx' => array( 
				'import_field1' 
			),
			'representing' => array( 
				'import_field2' 
			),
			'name_cobroke_ext' => array( 
				'import_field3' 
			),
			'reg_no' => array( 
				'import_field4' 
			),
			'email' => array( 
				'import_field5' 
			),
			'mobile' => array( 
				'import_field6' 
			),
			'agency_name' => array( 
				'import_field7' 
			),
			'license_no' => array( 
				'import_field8' 
			),
			'country' => array( 
				'import_field9' 
			),
			'address' => array( 
				'import_field10' 
			),
			'postal' => array( 
				'import_field11' 
			),
			'category' => array( 
				'import_field12' 
			),
			'prop_address' => array( 
				'import_field13' 
			),
			'prop_postal' => array( 
				'import_field14' 
			),
			'comm' => array( 
				'import_field15' 
			),
			'comm_percent' => array( 
				'import_field16' 
			),
			'gst' => array( 
				'import_field17' 
			),
			'gst_include' => array( 
				'import_field18' 
			),
			'gross' => array( 
				'import_field19' 
			),
			'username' => array( 
				'import_field20' 
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
				'supertop' => array( 
					 
				),
				'top' => array( 
					'import_header' 
				),
				'grid' => array( 
					'import_field',
					'import_field1',
					'import_field2',
					'import_field3',
					'import_field4',
					'import_field5',
					'import_field6',
					'import_field7',
					'import_field8',
					'import_field9',
					'import_field10',
					'import_field11',
					'import_field12',
					'import_field13',
					'import_field14',
					'import_field15',
					'import_field16',
					'import_field17',
					'import_field18',
					'import_field19',
					'import_field20' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'import_header' => 'top',
				'import_field' => 'grid',
				'import_field1' => 'grid',
				'import_field2' => 'grid',
				'import_field3' => 'grid',
				'import_field4' => 'grid',
				'import_field5' => 'grid',
				'import_field6' => 'grid',
				'import_field7' => 'grid',
				'import_field8' => 'grid',
				'import_field9' => 'grid',
				'import_field10' => 'grid',
				'import_field11' => 'grid',
				'import_field12' => 'grid',
				'import_field13' => 'grid',
				'import_field14' => 'grid',
				'import_field15' => 'grid',
				'import_field16' => 'grid',
				'import_field17' => 'grid',
				'import_field18' => 'grid',
				'import_field19' => 'grid',
				'import_field20' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'import_header' => array( 
				'import_header' 
			),
			'import_field' => array( 
				'import_field',
				'import_field1',
				'import_field2',
				'import_field3',
				'import_field4',
				'import_field5',
				'import_field6',
				'import_field7',
				'import_field8',
				'import_field9',
				'import_field10',
				'import_field11',
				'import_field12',
				'import_field13',
				'import_field14',
				'import_field15',
				'import_field16',
				'import_field17',
				'import_field18',
				'import_field19',
				'import_field20' 
			) 
		),
		'cellMaps' => array(
			 
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
	'id' => 'import',
	'type' => 'import',
	'layoutId' => 'first',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'supertop' => array(
			'modelId' => 'panel-top',
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
			'modelId' => 'import-header',
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
						'import_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'import-grid',
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
						'import_field',
						'import_field1',
						'import_field2',
						'import_field3',
						'import_field4',
						'import_field5',
						'import_field6',
						'import_field7',
						'import_field8',
						'import_field9',
						'import_field10',
						'import_field11',
						'import_field12',
						'import_field13',
						'import_field14',
						'import_field15',
						'import_field16',
						'import_field17',
						'import_field18',
						'import_field19',
						'import_field20' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'import_header' => array(
			'type' => 'import_header' 
		),
		'import_field' => array(
			'field' => 'id',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'id_tx',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'representing',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'name_cobroke_ext',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'reg_no',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'email',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'mobile',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'agency_name',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'license_no',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'country',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'address',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'postal',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'category',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'prop_address',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'prop_postal',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'comm',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'comm_percent',
			'type' => 'import_field' 
		),
		'import_field17' => array(
			'field' => 'gst',
			'type' => 'import_field' 
		),
		'import_field18' => array(
			'field' => 'gst_include',
			'type' => 'import_field' 
		),
		'import_field19' => array(
			'field' => 'gross',
			'type' => 'import_field' 
		),
		'import_field20' => array(
			'field' => 'username',
			'type' => 'import_field' 
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