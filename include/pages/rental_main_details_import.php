<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'id',
			'id_prop_info',
			'id_tx',
			'start_date',
			'end_date',
			'rent_amt',
			'reminder',
			'send_reminder_email',
			'inventory',
			'expense',
			'doc_upload',
			'prop_address',
			'tenant',
			'reminder1_sent',
			'reminder2_sent',
			'agent_email',
			'lease_no' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id' => array( 
				'import_field' 
			),
			'id_prop_info' => array( 
				'import_field1' 
			),
			'id_tx' => array( 
				'import_field2' 
			),
			'start_date' => array( 
				'import_field3' 
			),
			'end_date' => array( 
				'import_field4' 
			),
			'rent_amt' => array( 
				'import_field5' 
			),
			'reminder' => array( 
				'import_field6' 
			),
			'send_reminder_email' => array( 
				'import_field7' 
			),
			'inventory' => array( 
				'import_field8' 
			),
			'expense' => array( 
				'import_field9' 
			),
			'doc_upload' => array( 
				'import_field10' 
			),
			'prop_address' => array( 
				'import_field11' 
			),
			'tenant' => array( 
				'import_field12' 
			),
			'reminder1_sent' => array( 
				'import_field13' 
			),
			'reminder2_sent' => array( 
				'import_field14' 
			),
			'agent_email' => array( 
				'import_field15' 
			),
			'lease_no' => array( 
				'import_field16' 
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
					'import_field16' 
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
				'import_field16' => 'grid' 
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
				'import_field16' 
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
						'import_field16' 
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
			'field' => 'id_prop_info',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'id_tx',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'start_date',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'end_date',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'rent_amt',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'reminder',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'send_reminder_email',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'inventory',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'expense',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'doc_upload',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'prop_address',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'tenant',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'reminder1_sent',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'reminder2_sent',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'agent_email',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'lease_no',
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