<?php
			$optionsArray = array(
	'totals' => array(
		'id' => array(
			'totalsType' => '' 
		),
		'id_tx' => array(
			'totalsType' => '' 
		),
		'representing' => array(
			'totalsType' => '' 
		),
		'name_cobroke_int' => array(
			'totalsType' => '' 
		),
		'reg_no' => array(
			'totalsType' => '' 
		),
		'email' => array(
			'totalsType' => '' 
		),
		'mobil' => array(
			'totalsType' => '' 
		),
		'category' => array(
			'totalsType' => '' 
		),
		'comm_earned_inter' => array(
			'totalsType' => '' 
		),
		'comm_percent_inter' => array(
			'totalsType' => '' 
		),
		'prop_address' => array(
			'totalsType' => '' 
		),
		'prop_postal' => array(
			'totalsType' => '' 
		),
		'username' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'id',
			'id_tx',
			'representing',
			'name_cobroke_int',
			'reg_no',
			'email',
			'mobil',
			'category',
			'comm_earned_inter',
			'comm_percent_inter',
			'prop_address',
			'username' 
		),
		'exportFields' => array( 
			'id',
			'id_tx',
			'representing',
			'name_cobroke_int',
			'reg_no',
			'email',
			'mobil',
			'category',
			'comm_earned_inter',
			'comm_percent_inter',
			'prop_address',
			'username' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id' => array( 
				'export_field' 
			),
			'id_tx' => array( 
				'export_field1' 
			),
			'representing' => array( 
				'export_field2' 
			),
			'name_cobroke_int' => array( 
				'export_field3' 
			),
			'reg_no' => array( 
				'export_field4' 
			),
			'email' => array( 
				'export_field5' 
			),
			'mobil' => array( 
				'export_field6' 
			),
			'category' => array( 
				'export_field7' 
			),
			'comm_earned_inter' => array( 
				'export_field8' 
			),
			'comm_percent_inter' => array( 
				'export_field9' 
			),
			'prop_address' => array( 
				'export_field10' 
			),
			'username' => array( 
				'export_field11' 
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
					'export_header' 
				),
				'grid' => array( 
					'export_field',
					'export_field1',
					'export_field2',
					'export_field3',
					'export_field4',
					'export_field5',
					'export_field6',
					'export_field7',
					'export_field8',
					'export_field9',
					'export_field10',
					'export_field11' 
				),
				'footer' => array( 
					'export_export',
					'export_cancel' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'export_header' => 'top',
				'export_field' => 'grid',
				'export_field1' => 'grid',
				'export_field2' => 'grid',
				'export_field3' => 'grid',
				'export_field4' => 'grid',
				'export_field5' => 'grid',
				'export_field6' => 'grid',
				'export_field7' => 'grid',
				'export_field8' => 'grid',
				'export_field9' => 'grid',
				'export_field10' => 'grid',
				'export_field11' => 'grid',
				'export_export' => 'footer',
				'export_cancel' => 'footer' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'export_header' => array( 
				'export_header' 
			),
			'export_export' => array( 
				'export_export' 
			),
			'export_cancel' => array( 
				'export_cancel' 
			),
			'export_field' => array( 
				'export_field',
				'export_field1',
				'export_field2',
				'export_field3',
				'export_field4',
				'export_field5',
				'export_field6',
				'export_field7',
				'export_field8',
				'export_field9',
				'export_field10',
				'export_field11' 
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
	),
	'export' => array(
		'format' => 2,
		'selectFields' => true,
		'delimiter' => ',',
		'selectDelimiter' => true,
		'exportFileTypes' => array(
			'excel' => true,
			'word' => true,
			'csv' => true,
			'xml' => false 
		) 
	) 
);
			$pageArray = array(
	'id' => 'export',
	'type' => 'export',
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
			'modelId' => 'export-header',
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
						'export_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'export-grid',
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
						'export_field',
						'export_field1',
						'export_field2',
						'export_field3',
						'export_field4',
						'export_field5',
						'export_field6',
						'export_field7',
						'export_field8',
						'export_field9',
						'export_field10',
						'export_field11' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'footer' => array(
			'modelId' => 'export-footer',
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
						 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'export_export',
						'export_cancel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'export_header' => array(
			'type' => 'export_header' 
		),
		'export_export' => array(
			'type' => 'export_export' 
		),
		'export_cancel' => array(
			'type' => 'export_cancel' 
		),
		'export_field' => array(
			'field' => 'id',
			'type' => 'export_field' 
		),
		'export_field1' => array(
			'field' => 'id_tx',
			'type' => 'export_field' 
		),
		'export_field2' => array(
			'field' => 'representing',
			'type' => 'export_field' 
		),
		'export_field3' => array(
			'field' => 'name_cobroke_int',
			'type' => 'export_field' 
		),
		'export_field4' => array(
			'field' => 'reg_no',
			'type' => 'export_field' 
		),
		'export_field5' => array(
			'field' => 'email',
			'type' => 'export_field' 
		),
		'export_field6' => array(
			'field' => 'mobil',
			'type' => 'export_field' 
		),
		'export_field7' => array(
			'field' => 'category',
			'type' => 'export_field' 
		),
		'export_field8' => array(
			'field' => 'comm_earned_inter',
			'type' => 'export_field' 
		),
		'export_field9' => array(
			'field' => 'comm_percent_inter',
			'type' => 'export_field' 
		),
		'export_field10' => array(
			'field' => 'prop_address',
			'type' => 'export_field' 
		),
		'export_field11' => array(
			'field' => 'username',
			'type' => 'export_field' 
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
		 
	),
	'exportFormat' => 2,
	'exportDelimiter' => ',',
	'exportSelectDelimiter' => true,
	'exportSelectFields' => true 
);
		?>