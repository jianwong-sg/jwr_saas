<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'id',
			'name',
			'address',
			'email',
			'postal',
			'nric',
			'mobile',
			'tel',
			'office_tel',
			'contact_person',
			'contact_email',
			'biz_email',
			'registration_date',
			'country_incorporation',
			'nationality',
			'contact_person_contact',
			'contact_person_id',
			'id_type' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id' => array( 
				'import_field' 
			),
			'name' => array( 
				'import_field1' 
			),
			'address' => array( 
				'import_field2' 
			),
			'email' => array( 
				'import_field3' 
			),
			'postal' => array( 
				'import_field4' 
			),
			'nric' => array( 
				'import_field5' 
			),
			'mobile' => array( 
				'import_field6' 
			),
			'tel' => array( 
				'import_field7' 
			),
			'office_tel' => array( 
				'import_field8' 
			),
			'contact_person' => array( 
				'import_field9' 
			),
			'contact_email' => array( 
				'import_field10' 
			),
			'biz_email' => array( 
				'import_field11' 
			),
			'registration_date' => array( 
				'import_field12' 
			),
			'country_incorporation' => array( 
				'import_field13' 
			),
			'nationality' => array( 
				'import_field14' 
			),
			'contact_person_contact' => array( 
				'import_field15' 
			),
			'contact_person_id' => array( 
				'import_field16' 
			),
			'id_type' => array( 
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
			'field' => 'id',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'name',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'address',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'email',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'postal',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'nric',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'mobile',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'tel',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'office_tel',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'contact_person',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'contact_email',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'biz_email',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'registration_date',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'country_incorporation',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'nationality',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'contact_person_contact',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'contact_person_id',
			'type' => 'import_field' 
		),
		'import_field17' => array(
			'field' => 'id_type',
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