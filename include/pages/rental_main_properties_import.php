<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
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
			'agent',
			'land_size_unit',
			'builtup_unit',
			'title',
			'id',
			'id_rental',
			'owner',
			'tenant' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'prop_address' => array( 
				'import_field' 
			),
			'land_size' => array( 
				'import_field1' 
			),
			'builtup' => array( 
				'import_field2' 
			),
			'tenure' => array( 
				'import_field3' 
			),
			'year_built' => array( 
				'import_field4' 
			),
			'TOP' => array( 
				'import_field5' 
			),
			'types' => array( 
				'import_field6' 
			),
			'kind' => array( 
				'import_field7' 
			),
			'hdb_town' => array( 
				'import_field8' 
			),
			'hdb_scheme' => array( 
				'import_field9' 
			),
			'agent' => array( 
				'import_field10' 
			),
			'land_size_unit' => array( 
				'import_field11' 
			),
			'builtup_unit' => array( 
				'import_field12' 
			),
			'title' => array( 
				'import_field13' 
			),
			'id' => array( 
				'import_field14' 
			),
			'id_rental' => array( 
				'import_field15' 
			),
			'owner' => array( 
				'import_field16' 
			),
			'tenant' => array( 
				'import_field17' 
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
					'import_field17' 
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
				'import_field17' => 'grid' 
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
				'import_field17' 
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
						'import_field17' 
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
			'field' => 'prop_address',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'land_size',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'builtup',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'tenure',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'year_built',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'TOP',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'types',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'kind',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'hdb_town',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'hdb_scheme',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'agent',
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
			'field' => 'title',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'id',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'id_rental',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'owner',
			'type' => 'import_field' 
		),
		'import_field17' => array(
			'field' => 'tenant',
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