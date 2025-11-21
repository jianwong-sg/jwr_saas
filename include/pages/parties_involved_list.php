<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => true,
		'inlineEdit' => false,
		'spreadsheetMode' => false,
		'reorderRows' => false,
		'addToBottom' => false,
		'delete' => true,
		'updateSelected' => false,
		'addInPopup' => true,
		'editInPopup' => true,
		'viewInPopup' => false,
		'clickSort' => false,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'master' => array(
		'transactions' => array(
			'preview' => false 
		),
		'transactions-admin' => array(
			'preview' => false 
		) 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'id' => array(
			'totalsType' => '' 
		),
		'id_tx' => array(
			'totalsType' => '' 
		),
		'tx_no' => array(
			'totalsType' => '' 
		),
		'name' => array(
			'totalsType' => '' 
		),
		'address' => array(
			'totalsType' => '' 
		),
		'postal' => array(
			'totalsType' => '' 
		),
		'nric' => array(
			'totalsType' => '' 
		),
		'mobile' => array(
			'totalsType' => '' 
		),
		'tel' => array(
			'totalsType' => '' 
		),
		'email' => array(
			'totalsType' => '' 
		),
		'doc_upload' => array(
			'totalsType' => '' 
		),
		'office_tel' => array(
			'totalsType' => '' 
		),
		'remarks' => array(
			'totalsType' => '' 
		),
		'doc_name' => array(
			'totalsType' => '' 
		),
		'cus_type' => array(
			'totalsType' => '' 
		),
		'trade' => array(
			'totalsType' => '' 
		),
		'contact_person' => array(
			'totalsType' => '' 
		),
		'destination' => array(
			'totalsType' => '' 
		),
		'contact_email' => array(
			'totalsType' => '' 
		),
		'biz_email' => array(
			'totalsType' => '' 
		),
		'last_updated' => array(
			'totalsType' => '' 
		),
		'contact_person_id' => array(
			'totalsType' => '' 
		),
		'contact_person_cell' => array(
			'totalsType' => '' 
		),
		'salutation' => array(
			'totalsType' => '' 
		),
		'id_type' => array(
			'totalsType' => '' 
		),
		'country_incorporation' => array(
			'totalsType' => '' 
		),
		'role' => array(
			'totalsType' => '' 
		),
		'category' => array(
			'totalsType' => '' 
		),
		'tel_type' => array(
			'totalsType' => '' 
		),
		'billing_address' => array(
			'totalsType' => '' 
		),
		'billing_postal' => array(
			'totalsType' => '' 
		),
		'reg_date' => array(
			'totalsType' => '' 
		),
		'registration_no' => array(
			'totalsType' => '' 
		),
		'custid' => array(
			'totalsType' => '' 
		),
		'tx_address' => array(
			'totalsType' => '' 
		),
		'representing' => array(
			'totalsType' => '' 
		),
		'marketing_rights' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'name',
			'role',
			'category' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'category',
			'tx_no',
			'tx_address',
			'role',
			'country_incorporation',
			'id_type',
			'contact_person_cell',
			'contact_person',
			'cus_type',
			'mobile',
			'nric',
			'name' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'name' => array( 
				'simple_grid_field',
				'simple_grid_field2' 
			),
			'role' => array( 
				'simple_grid_field1',
				'simple_grid_field3' 
			),
			'category' => array( 
				'grid_field1',
				'grid_field_label1' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => true,
		'view' => true,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'add',
					'inline_add',
					'delete',
					'details_found',
					'page_size' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'supertop' => array( 
					'logo',
					'menu',
					'simple_search',
					'list_options',
					'loginform_login',
					'username_button' 
				),
				'left' => array( 
					'search_panel' 
				),
				'top' => array( 
					'breadcrumb' 
				),
				'grid' => array( 
					'simple_grid_field2',
					'simple_grid_field',
					'simple_grid_field3',
					'simple_grid_field1',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_edit_parties_involved',
					'grid_inline_cancel',
					'grid_view',
					'grid_field_label1',
					'grid_field1' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'add_link',
					'inlineadd_link',
					'deleteselected_link',
					'details_found',
					'recsPerPage' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'top' => array( 
					'breadcrumb' 
				) 
			),
			'itemForms' => array(
				'add' => 'above-grid',
				'inline_add' => 'above-grid',
				'delete' => 'above-grid',
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'supertop',
				'menu' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'search_panel' => 'left',
				'breadcrumb' => 'top',
				'simple_grid_field2' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field1' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_edit_parties_involved' => 'grid',
				'grid_inline_cancel' => 'grid',
				'grid_view' => 'grid',
				'grid_field_label1' => 'grid',
				'grid_field1' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				),
				'grid_edit_parties_involved' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_inline_cancel' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_view' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				) 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'simple_search' => 3,
				'search_panel' => 5,
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
			'breadcrumb' => array( 
				'breadcrumb' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'simple_search' => array( 
				'simple_search' 
			),
			'pagination' => array( 
				'pagination' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field1',
				'search_panel_field4',
				'search_panel_field5',
				'search_panel_field13',
				'search_panel_field15',
				'search_panel_field21',
				'search_panel_field23',
				'search_panel_field24',
				'search_panel_field25',
				'search_panel_field26',
				'search_panel_field',
				'search_panel_field2' 
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
			'add' => array( 
				'add' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'grid_field1' 
			),
			'grid_field_label' => array( 
				'simple_grid_field2',
				'simple_grid_field3',
				'grid_field_label1' 
			),
			'delete' => array( 
				'delete' 
			),
			'delete_selected' => array( 
				'delete_selected' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2',
				'-3' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
			),
			'export' => array( 
				'export' 
			),
			'export_selected' => array( 
				'export_selected' 
			),
			'import' => array( 
				'import' 
			),
			'grid_edit' => array( 
				'grid_edit_parties_involved' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'inline_add' => array( 
				'inline_add' 
			),
			'grid_inline_cancel' => array( 
				'grid_inline_cancel' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox_head' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'role_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'category_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'edit_column',
							'inline_cancel',
							'view_column' 
						),
						'items' => array( 
							'grid_edit_parties_involved',
							'grid_inline_cancel',
							'grid_view' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'role_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							4 
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
					'footcell_icons' => array(
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
					'footcell_checkbox' => array(
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
					'footcell_field' => array(
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
					'footcell_field1' => array(
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
					'headcell_field7' => array(
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
		'breadcrumb' => true 
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
						'add',
						'inline_add',
						'delete' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size' 
					) 
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
						'logo',
						'menu' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'simple_search',
						'list_options',
						'loginform_login',
						'username_button' 
					) 
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
						'search_panel' 
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
						'breadcrumb' 
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
							'cell' => 'headcell_icons' 
						),
						array(
							'cell' => 'headcell_checkbox' 
						),
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
							'cell' => 'cell_icons' 
						),
						array(
							'cell' => 'cell_checkbox' 
						),
						array(
							'cell' => 'cell_field' 
						),
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'headcell_field3' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_icons' 
						),
						array(
							'cell' => 'footcell_checkbox' 
						),
						array(
							'cell' => 'footcell_field' 
						),
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'headcell_field7' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'width' => '60%',
					'field' => 'name',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'width' => '60%',
					'field' => 'name',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					),
					'width' => '60%' 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'width' => '40%',
					'field' => 'role',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'width' => '40%',
					'field' => 'role',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					),
					'width' => '40%' 
				),
				'headcell_checkbox' => array(
					'model' => 'headcell_checkbox',
					'items' => array( 
						'grid_checkbox_head' 
					) 
				),
				'cell_checkbox' => array(
					'model' => 'cell_checkbox',
					'items' => array( 
						'grid_checkbox' 
					) 
				),
				'footcell_checkbox' => array(
					'model' => 'footcell_checkbox',
					'items' => array( 
						 
					) 
				),
				'headcell_icons' => array(
					'model' => 'headcell_icons',
					'items' => array( 
						 
					) 
				),
				'cell_icons' => array(
					'model' => 'cell_icons',
					'items' => array( 
						'grid_edit_parties_involved',
						'grid_inline_cancel',
						'grid_view' 
					) 
				),
				'footcell_icons' => array(
					'model' => 'footcell_icons',
					'items' => array( 
						 
					) 
				),
				'headcell_field7' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label1' 
					),
					'field' => 'category',
					'columnName' => 'field' 
				),
				'headcell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1' 
					),
					'field' => 'category',
					'columnName' => 'field' 
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
		'breadcrumb' => array(
			'type' => 'breadcrumb' 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'simple_search' => array(
			'type' => 'simple_search' 
		),
		'pagination' => array(
			'type' => 'pagination' 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field26',
				'search_panel_field2',
				'search_panel_field',
				'search_panel_field25',
				'search_panel_field24',
				'search_panel_field23',
				'search_panel_field21',
				'search_panel_field15',
				'search_panel_field13',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field1' 
			),
			'_flexiblePanel' => true 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'export_selected',
				'delete_selected',
				'-1',
				'advsearch_link',
				'-',
				'show_search_panel',
				'hide_search_panel',
				'-2',
				'export',
				'-3',
				'import' 
			) 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'search_panel_field1' => array(
			'field' => 'name',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field4' => array(
			'field' => 'nric',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field5' => array(
			'field' => 'mobile',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field13' => array(
			'field' => 'cus_type',
			'type' => 'search_panel_field' 
		),
		'search_panel_field15' => array(
			'field' => 'contact_person',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field21' => array(
			'field' => 'contact_person_cell',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field23' => array(
			'field' => 'id_type',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field24' => array(
			'field' => 'country_incorporation',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field25' => array(
			'field' => 'role',
			'type' => 'search_panel_field' 
		),
		'search_panel_field26' => array(
			'field' => 'category',
			'type' => 'search_panel_field' 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'changepassword_link' 
			) 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'add' => array(
			'type' => 'add',
			'buttonStyle' => '',
			'label' => array(
				'type' => 0,
				'text' => 'Add Party' 
			),
			'font-size' => '12px',
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  margin-left:10px;
}
',
			'buttonSize' => '',
			'popup' => true 
		),
		'grid_view' => array(
			'type' => 'grid_view',
			'popup' => false 
		),
		'simple_grid_field' => array(
			'field' => 'name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field1' => array(
			'field' => 'role',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field2' => array(
			'type' => 'grid_field_label',
			'field' => 'name',
			'clickSort' => false 
		),
		'simple_grid_field3' => array(
			'type' => 'grid_field_label',
			'field' => 'role',
			'clickSort' => false 
		),
		'delete' => array(
			'type' => 'delete',
			'buttonSize' => '' 
		),
		'delete_selected' => array(
			'type' => 'delete_selected' 
		),
		'-' => array(
			'type' => '-' 
		),
		'grid_field1' => array(
			'field' => 'category',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label1' => array(
			'type' => 'grid_field_label',
			'field' => 'category',
			'clickSort' => false 
		),
		'search_panel_field' => array(
			'field' => 'tx_address',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'export' => array(
			'type' => 'export' 
		),
		'-2' => array(
			'type' => '-' 
		),
		'export_selected' => array(
			'type' => 'export_selected' 
		),
		'import' => array(
			'type' => 'import' 
		),
		'-3' => array(
			'type' => '-' 
		),
		'grid_edit_parties_involved' => array(
			'type' => 'grid_edit',
			'popup' => true 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'search_panel_field2' => array(
			'field' => 'tx_no',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'inline_add' => array(
			'type' => 'inline_add',
			'detailsOnly' => true 
		),
		'grid_inline_cancel' => array(
			'type' => 'grid_inline_cancel' 
		) 
	),
	'spreadsheetGrid' => false,
	'version' => 14,
	'pageWidth' => 'compact',
	'reorderRows' => false,
	'reorderRowsField' => '',
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		'English' => '' 
	) 
);
		?>