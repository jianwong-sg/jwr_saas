<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'prop_name',
			'prop_address',
			'land_size',
			'builtup',
			'tenure',
			'year_built',
			'TOP',
			'types',
			'kind',
			'hdb_town',
			'hdb_scheme',
			'land_size_unit',
			'builtup_unit',
			'photos',
			'id',
			'prop_postal',
			'docuserid',
			'cusid',
			'agentid' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'prop_name' => array( 
				'import_field' 
			),
			'prop_address' => array( 
				'import_field1' 
			),
			'land_size' => array( 
				'import_field2' 
			),
			'builtup' => array( 
				'import_field3' 
			),
			'tenure' => array( 
				'import_field4' 
			),
			'year_built' => array( 
				'import_field5' 
			),
			'TOP' => array( 
				'import_field6' 
			),
			'types' => array( 
				'import_field7' 
			),
			'kind' => array( 
				'import_field8' 
			),
			'hdb_town' => array( 
				'import_field9' 
			),
			'hdb_scheme' => array( 
				'import_field10' 
			),
			'land_size_unit' => array( 
				'import_field11' 
			),
			'builtup_unit' => array( 
				'import_field12' 
			),
			'photos' => array( 
				'import_field13' 
			),
			'id' => array( 
				'import_field14' 
			),
			'prop_postal' => array( 
				'import_field15' 
			),
			'docuserid' => array( 
				'import_field16' 
			),
			'cusid' => array( 
				'import_field17' 
			),
			'agentid' => array( 
				'import_field18' 
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
					'import_field18' 
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
				'import_field18' => 'grid' 
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
				'import_field18' 
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
						'import_field18' 
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
			'field' => 'prop_name',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'prop_address',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'land_size',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'builtup',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'tenure',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'year_built',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'TOP',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'types',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'kind',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'hdb_town',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'hdb_scheme',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'land_size_unit',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'builtup_unit',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'photos',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'id',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'prop_postal',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'docuserid',
			'type' => 'import_field' 
		),
		'import_field17' => array(
			'field' => 'cusid',
			'type' => 'import_field' 
		),
		'import_field18' => array(
			'field' => 'agentid',
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