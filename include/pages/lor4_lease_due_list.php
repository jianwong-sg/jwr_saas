<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'addToBottom' => false,
		'delete' => false,
		'updateSelected' => false,
		'addInPopup' => null,
		'editInPopup' => null,
		'viewInPopup' => null,
		'clickSort' => false,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => false,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'ID_Tx' => array(
			'totalsType' => '' 
		),
		'category' => array(
			'totalsType' => '' 
		),
		'prop_address' => array(
			'totalsType' => '' 
		),
		'Prop_kind' => array(
			'totalsType' => '' 
		),
		'lease_expiry' => array(
			'totalsType' => '' 
		),
		'date' => array(
			'totalsType' => '' 
		),
		'ta_date' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'ID_Tx',
			'prop_address',
			'lease_expiry' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'prop_address' => array( 
				'simple_grid_field2',
				'simple_grid_field' 
			),
			'lease_expiry' => array( 
				'simple_grid_field4',
				'simple_grid_field5' 
			),
			'ID_Tx' => array( 
				'grid_field2',
				'grid_field_label' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
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
					'text' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'supertop' => array( 
					'username_button' 
				),
				'left' => array( 
					 
				),
				'top' => array( 
					 
				),
				'grid' => array( 
					'grid_field_label',
					'grid_field2',
					'simple_grid_field',
					'simple_grid_field2',
					'simple_grid_field5',
					'simple_grid_field4' 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					'pagination' 
				),
				'supertop' => array( 
					'loggedas_message' 
				),
				'left' => array( 
					 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'text' => 'above-grid',
				'pagination' => 'below-grid',
				'username_button' => 'supertop',
				'grid_field_label' => 'grid',
				'grid_field2' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field4' => 'grid' 
			),
			'itemLocations' => array(
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				) 
			),
			'itemVisiblity' => array(
				'username_button' => 3 
			) 
		),
		'itemsByType' => array(
			'pagination' => array( 
				'pagination' 
			),
			'grid_field' => array( 
				'simple_grid_field2',
				'simple_grid_field4',
				'grid_field2' 
			),
			'grid_field_label' => array( 
				'simple_grid_field',
				'simple_grid_field5',
				'grid_field_label' 
			),
			'text' => array( 
				'text' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_field' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'ID_Tx_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'prop_address_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'lease_expiry_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'ID_Tx_fieldcolumn' 
						),
						'items' => array( 
							'grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'prop_address_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'lease_expiry_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field' => array(
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
					'footcell_field1' => array(
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
					'footcell_field2' => array(
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
		'type' => 'list',
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
	'id' => 'list',
	'type' => 'list',
	'layoutId' => 'topbar',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'list-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'colspan' => 1 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'text' 
					),
					'customCSS' => '/* Put  your custom CSS code here */
' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'list-below-grid',
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
						'pagination' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'topbar-menu',
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
						 
					),
					'customCSS' => '/* Put  your custom CSS code here */
/*
:host {
  display:none !important;
}
*/' 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'username_button' 
					),
					'customCSS' => '/* Put  your custom CSS code here */
/*
:host {
  display:none !important;
}
*/' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'list-vbar',
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
			'modelId' => 'list-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
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
							'cell' => 'headcell_field' 
						),
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field2' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_field' 
						),
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field2' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_field' 
						),
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field2' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label' 
					),
					'field' => 'ID_Tx',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field2' 
					),
					'field' => 'ID_Tx',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'prop_address',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'prop_address',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'lease_expiry',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'lease_expiry',
					'columnName' => 'field' 
				),
				'footcell_field2' => array(
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
		'pagination' => array(
			'type' => 'pagination' 
		),
		'simple_grid_field2' => array(
			'field' => 'prop_address',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false,
			'clickSort' => false,
			'nowrap' => false 
		),
		'simple_grid_field4' => array(
			'field' => 'lease_expiry',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false,
			'clickSort' => false,
			'color' => '#ffa500' 
		),
		'simple_grid_field' => array(
			'type' => 'grid_field_label',
			'field' => 'prop_address',
			'clickSort' => false 
		),
		'simple_grid_field5' => array(
			'type' => 'grid_field_label',
			'field' => 'lease_expiry',
			'clickSort' => false,
			'label' => array(
				'field' => 'lease_expiry',
				'table' => 'lor4_lease_due',
				'type' => 3 
			) 
		),
		'text' => array(
			'type' => 'text',
			'label' => array(
				'text' => '11 Lorong 4 Geylang lease(s) expiry within the next 2 months',
				'type' => 0 
			),
			'editedByRte' => false,
			'padding' => array(
				'left' => '20px' 
			),
			'color' => '#77e68c',
			'font-size' => '18px' 
		),
		'grid_field2' => array(
			'field' => 'ID_Tx',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'ID_Tx',
			'clickSort' => false,
			'label' => array(
				'field' => 'ID_Tx',
				'table' => 'lor4_lease_due',
				'type' => 3 
			) 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'changepassword_link' 
			) 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		) 
	),
	'version' => 14,
	'pageWidth' => 'full',
	'menuWidth' => 'full',
	'pageAlign' => 'left',
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