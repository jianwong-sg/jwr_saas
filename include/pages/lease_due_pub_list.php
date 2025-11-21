<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'spreadsheetMode' => false,
		'reorderRows' => false,
		'addToBottom' => false,
		'delete' => false,
		'updateSelected' => false,
		'addInPopup' => null,
		'editInPopup' => null,
		'viewInPopup' => null,
		'clickSort' => true,
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
		),
		'agency' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'category',
			'Prop_kind',
			'prop_address',
			'lease_expiry',
			'agency' 
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
			'lease_expiry' => array( 
				'simple_grid_field4',
				'simple_grid_field7' 
			),
			'prop_address' => array( 
				'simple_grid_field2',
				'simple_grid_field6' 
			),
			'Prop_kind' => array( 
				'grid_field' 
			),
			'category' => array( 
				'grid_field1',
				'grid_field_label' 
			),
			'agency' => array( 
				'grid_field2',
				'grid_field_label1' 
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
					'details_found',
					'page_size' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'supertop' => array( 
					'logo',
					'menu',
					'text',
					'list_options',
					'loginform_login',
					'username_button' 
				),
				'left' => array( 
					 
				),
				'top' => array( 
					 
				),
				'grid' => array( 
					'text1',
					'simple_grid_field6',
					'simple_grid_field2',
					'simple_grid_field7',
					'simple_grid_field4',
					'grid_field',
					'grid_field_label',
					'grid_field1',
					'grid_field_label1',
					'grid_field2' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'details_found',
					'recsPerPage' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'left' => array( 
					 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'supertop',
				'menu' => 'supertop',
				'text' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'text1' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field4' => 'grid',
				'grid_field' => 'grid',
				'grid_field_label' => 'grid',
				'grid_field1' => 'grid',
				'grid_field_label1' => 'grid',
				'grid_field2' => 'grid' 
			),
			'itemLocations' => array(
				'text1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'grid_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				) 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'list_options' => 3,
				'username_button' => 3,
				'loginform_login' => 3 
			) 
		),
		'itemsByType' => array(
			'page_size' => array( 
				'page_size' 
			),
			'details_found' => array( 
				'details_found' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'pagination' => array( 
				'pagination' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'grid_field' => array( 
				'simple_grid_field4',
				'simple_grid_field2',
				'grid_field',
				'grid_field1',
				'grid_field2' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'grid_field_label' => array( 
				'simple_grid_field6',
				'simple_grid_field7',
				'grid_field_label',
				'grid_field_label1' 
			),
			'text' => array( 
				'text',
				'text1' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_field6' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'category_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'text1' 
						),
						'fixedAtServer' => true,
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
							'prop_address_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'lease_expiry_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'agency_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'category_fieldcolumn' 
						),
						'items' => array( 
							'grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'Prop_kind_fieldcolumn' 
						),
						'items' => array( 
							'grid_field' 
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
							'prop_address_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							3 
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
					'cell_field' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'agency_fieldcolumn' 
						),
						'items' => array( 
							'grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
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
					'headcell_field5' => array(
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
					),
					'footcell_field3' => array(
						'cols' => array( 
							3 
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
					'footcell_field' => array(
						'cols' => array( 
							4 
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
				'width' => 5,
				'height' => 3 
			) 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
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
				'details_found' => array(
					'tag' => 'DISPLAYING',
					'type' => 2 
				) 
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
			array(
				'id' => 'main',
				'horizontal' => true 
			) 
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
						'details_found',
						'page_size' 
					),
					'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none !important;
}
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
							'cell' => 'c1',
							'colspan' => 1 
						),
						array(
							'cell' => 'c' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'logo',
						'menu',
						'text' 
					),
					'customCSS' => '/* Put  your custom CSS code here */


',
					'width' => '90%' 
				),
				'c' => array(
					'model' => 'c2',
					'items' => array( 
						'list_options',
						'loginform_login',
						'username_button' 
					),
					'customCSS' => '/* Put  your custom CSS code here */


' 
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
		'grid' => array(
			'modelId' => 'horizontal-grid',
			'grid' => array( 
				array(
					'section' => 'head',
					'cells' => array( 
						array(
							'cell' => 'headcell_field6' 
						),
						array(
							'cell' => 'headcell_field' 
						),
						array(
							'cell' => 'headcell_field2' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field1' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'headcell_field7' 
						),
						array(
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'cell_field2' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'headcell_field8' 
						),
						array(
							'cell' => 'headcell_field5' 
						),
						array(
							'cell' => 'footcell_field2' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'text1' 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'prop_address',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'prop_address',
					'columnName' => 'field' 
				),
				'footcell_field2' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'lease_expiry',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'lease_expiry',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'field' => 'Prop_kind',
					'columnName' => 'field' 
				),
				'headcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field6' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label' 
					),
					'field' => 'category',
					'columnName' => 'field' 
				),
				'headcell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1' 
					),
					'field' => 'category',
					'columnName' => 'field' 
				),
				'headcell_field8' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label1' 
					),
					'field' => 'agency',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field2' 
					),
					'field' => 'agency',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
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
		'page_size' => array(
			'type' => 'page_size' 
		),
		'details_found' => array(
			'type' => 'details_found' 
		),
		'logo' => array(
			'type' => 'logo',
			'customCSS' => '/* Put  your custom CSS code here */

:host {
 display:none !important;
}
' 
		),
		'menu' => array(
			'type' => 'menu',
			'customCSS' => '/* Put  your custom CSS code here */

:host {
 display:none !important;
}
' 
		),
		'pagination' => array(
			'type' => 'pagination' 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'advsearch_link' 
			),
			'customCSS' => '/* Put  your custom CSS code here */

:host {
 display:none !important;
}
' 
		),
		'simple_grid_field4' => array(
			'field' => 'lease_expiry',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field2' => array(
			'field' => 'prop_address',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'changepassword_link' 
			),
			'customCSS' => '/* Put  your custom CSS code here */

:host {
 display:none !important;
}
' 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false,
			'customCSS' => '/* Put  your custom CSS code here */

:host {
 display:none !important;
}
' 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'simple_grid_field6' => array(
			'type' => 'grid_field_label',
			'field' => 'prop_address',
			'clickSort' => false,
			'label' => array(
				'field' => 'prop_address',
				'table' => 'lease_due_pub',
				'type' => 3 
			) 
		),
		'simple_grid_field7' => array(
			'type' => 'grid_field_label',
			'field' => 'lease_expiry',
			'clickSort' => false,
			'label' => array(
				'field' => 'lease_expiry',
				'table' => 'lease_due_pub',
				'type' => 3 
			) 
		),
		'text' => array(
			'type' => 'text',
			'label' => array(
				'type' => 0,
				'text' => 'Lease(s) due for renewal' 
			),
			'editedByRte' => false,
			'padding' => array(
				'left' => '30px' 
			) 
		),
		'grid_field' => array(
			'field' => 'Prop_kind',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'text1' => array(
			'type' => 'text',
			'label' => array(
				'text' => 'Property Type',
				'type' => 0 
			),
			'editedByRte' => false 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
		),
		'grid_field1' => array(
			'field' => 'category',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'category',
			'label' => array(
				'field' => 'category',
				'table' => 'lease_due_pub',
				'type' => 3 
			) 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'grid_field2' => array(
			'field' => 'agency',
			'type' => 'grid_field' 
		),
		'grid_field_label1' => array(
			'type' => 'grid_field_label',
			'field' => 'agency' 
		) 
	),
	'spreadsheetGrid' => false,
	'version' => 14,
	'pageWidth' => 'standard',
	'menuWidth' => 'compact',
	'pageAlign' => 'left',
	'reorderRows' => false,
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