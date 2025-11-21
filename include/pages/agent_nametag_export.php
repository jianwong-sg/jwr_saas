<?php
			$optionsArray = array(
	'totals' => array(
		'id' => array(
			'totalsType' => '' 
		),
		'docuserid' => array(
			'totalsType' => '' 
		),
		'agency' => array(
			'totalsType' => '' 
		),
		'agency_cea' => array(
			'totalsType' => '' 
		),
		'name' => array(
			'totalsType' => '' 
		),
		'biz_name' => array(
			'totalsType' => '' 
		),
		'cea_reg' => array(
			'totalsType' => '' 
		),
		'issue_date' => array(
			'totalsType' => '' 
		),
		'remarks' => array(
			'totalsType' => '' 
		),
		'image' => array(
			'totalsType' => '' 
		),
		'revoke_date' => array(
			'totalsType' => '' 
		),
		'signature' => array(
			'totalsType' => '' 
		),
		'sign_by' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'id',
			'docuserid',
			'agency',
			'agency_cea',
			'name',
			'biz_name',
			'cea_reg',
			'issue_date',
			'remarks',
			'image',
			'revoke_date',
			'signature',
			'sign_by' 
		),
		'exportFields' => array( 
			'id',
			'docuserid',
			'agency',
			'agency_cea',
			'name',
			'biz_name',
			'cea_reg',
			'issue_date',
			'remarks',
			'image',
			'revoke_date',
			'signature',
			'sign_by' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id' => array( 
				'export_field' 
			),
			'docuserid' => array( 
				'export_field1' 
			),
			'agency' => array( 
				'export_field2' 
			),
			'agency_cea' => array( 
				'export_field3' 
			),
			'name' => array( 
				'export_field4' 
			),
			'biz_name' => array( 
				'export_field5' 
			),
			'cea_reg' => array( 
				'export_field6' 
			),
			'issue_date' => array( 
				'export_field7' 
			),
			'remarks' => array( 
				'export_field8' 
			),
			'image' => array( 
				'export_field9' 
			),
			'revoke_date' => array( 
				'export_field10' 
			),
			'signature' => array( 
				'export_field11' 
			),
			'sign_by' => array( 
				'export_field12' 
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
					'export_field11',
					'export_field12' 
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
				'export_field12' => 'grid',
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
				'export_field11',
				'export_field12' 
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
						'export_field11',
						'export_field12' 
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
			'field' => 'docuserid',
			'type' => 'export_field' 
		),
		'export_field2' => array(
			'field' => 'agency',
			'type' => 'export_field' 
		),
		'export_field3' => array(
			'field' => 'agency_cea',
			'type' => 'export_field' 
		),
		'export_field4' => array(
			'field' => 'name',
			'type' => 'export_field' 
		),
		'export_field5' => array(
			'field' => 'biz_name',
			'type' => 'export_field' 
		),
		'export_field6' => array(
			'field' => 'cea_reg',
			'type' => 'export_field' 
		),
		'export_field7' => array(
			'field' => 'issue_date',
			'type' => 'export_field' 
		),
		'export_field8' => array(
			'field' => 'remarks',
			'type' => 'export_field' 
		),
		'export_field9' => array(
			'field' => 'image',
			'type' => 'export_field' 
		),
		'export_field10' => array(
			'field' => 'revoke_date',
			'type' => 'export_field' 
		),
		'export_field11' => array(
			'field' => 'signature',
			'type' => 'export_field' 
		),
		'export_field12' => array(
			'field' => 'sign_by',
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