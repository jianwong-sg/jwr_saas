<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'spreadsheetMode' => false,
		'addToBottom' => false,
		'delete' => true,
		'updateSelected' => false,
		'addInPopup' => null,
		'editInPopup' => true,
		'viewInPopup' => true,
		'clickSort' => false,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'allDetails' => array(
		'linkType' => 1 
	),
	'details' => array(
		'awards' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => false,
			'printDetails' => true 
		),
		'qualifications' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => false,
			'printDetails' => true 
		) 
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
		'eatuser_id' => array(
			'totalsType' => '' 
		),
		'user_status' => array(
			'totalsType' => '' 
		),
		'username' => array(
			'totalsType' => '' 
		),
		'user_group' => array(
			'totalsType' => '' 
		),
		'signup_date' => array(
			'totalsType' => '' 
		),
		'password' => array(
			'totalsType' => '' 
		),
		'email' => array(
			'totalsType' => '' 
		),
		'company_dbname' => array(
			'totalsType' => '' 
		),
		'active' => array(
			'totalsType' => '' 
		),
		'full_name' => array(
			'totalsType' => '' 
		),
		'biz_name' => array(
			'totalsType' => '' 
		),
		'mobile' => array(
			'totalsType' => '' 
		),
		'bank_ac_no' => array(
			'totalsType' => '' 
		),
		'bank_name' => array(
			'totalsType' => '' 
		),
		'date_of_birth' => array(
			'totalsType' => '' 
		),
		'entry_year' => array(
			'totalsType' => '' 
		),
		'home_address' => array(
			'totalsType' => '' 
		),
		'home_tel' => array(
			'totalsType' => '' 
		),
		'nric' => array(
			'totalsType' => '' 
		),
		'cut_to_agency' => array(
			'totalsType' => '' 
		),
		'salesperson_share' => array(
			'totalsType' => '' 
		),
		'agency' => array(
			'totalsType' => '' 
		),
		'agency_cea_reg' => array(
			'totalsType' => '' 
		),
		'destination' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'username',
			'full_name',
			'biz_name',
			'email',
			'mobile',
			'cut_to_agency' 
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
			'biz_name' => array( 
				'grid_field' 
			),
			'username' => array( 
				'simple_grid_field7',
				'simple_grid_field3' 
			),
			'email' => array( 
				'simple_grid_field6',
				'simple_grid_field2' 
			),
			'mobile' => array( 
				'grid_field2',
				'grid_field_label2' 
			),
			'full_name' => array( 
				'grid_field6' 
			),
			'cut_to_agency' => array( 
				'grid_field1',
				'grid_field_label' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => false,
		'view' => true,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'delete',
					'details_found',
					'page_size',
					'print_details' 
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
					 
				),
				'top' => array( 
					'breadcrumb' 
				),
				'grid' => array( 
					'simple_grid_field7',
					'simple_grid_field3',
					'text',
					'grid_field6',
					'grid_field',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_edit',
					'grid_view',
					'simple_grid_field6',
					'snippet',
					'grid_field_label2',
					'simple_grid_field2',
					'grid_field2',
					'details_preview',
					'details_preview2',
					'grid_details_link',
					'grid_details_link2',
					'grid_field_label',
					'grid_field1' 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					'pagination' 
				),
				'left' => array( 
					 
				),
				'top' => array( 
					'breadcrumb' 
				) 
			),
			'itemForms' => array(
				'delete' => 'above-grid',
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'print_details' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'supertop',
				'menu' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'breadcrumb' => 'top',
				'simple_grid_field7' => 'grid',
				'simple_grid_field3' => 'grid',
				'text' => 'grid',
				'grid_field6' => 'grid',
				'grid_field' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_edit' => 'grid',
				'grid_view' => 'grid',
				'simple_grid_field6' => 'grid',
				'snippet' => 'grid',
				'grid_field_label2' => 'grid',
				'simple_grid_field2' => 'grid',
				'grid_field2' => 'grid',
				'details_preview' => 'grid',
				'details_preview2' => 'grid',
				'grid_details_link' => 'grid',
				'grid_details_link2' => 'grid',
				'grid_field_label' => 'grid',
				'grid_field1' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'text' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				),
				'grid_edit' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_view' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'snippet' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'grid_field_label2' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'details_preview' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview2' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'grid_details_link' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link2' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				) 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'simple_search' => 3,
				'list_options' => 3,
				'username_button' => 3,
				'loginform_login' => 3 
			) 
		),
		'itemsByType' => array(
			'page_size' => array( 
				'page_size' 
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
			'details_found' => array( 
				'details_found' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'grid_field' => array( 
				'grid_field',
				'simple_grid_field3',
				'simple_grid_field2',
				'grid_field2',
				'grid_field6',
				'grid_field1' 
			),
			'grid_field_label' => array( 
				'simple_grid_field7',
				'simple_grid_field6',
				'grid_field_label2',
				'grid_field_label' 
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
			'grid_edit' => array( 
				'grid_edit' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2',
				'-3',
				'-4',
				'-5' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'print_details' => array( 
				'print_details' 
			),
			'text' => array( 
				'text' 
			),
			'snippet' => array( 
				'snippet' 
			),
			'details_preview' => array( 
				'details_preview2',
				'details_preview' 
			),
			'grid_details_link' => array( 
				'grid_details_link2',
				'grid_details_link' 
			),
			'delete' => array( 
				'delete' 
			),
			'delete_selected' => array( 
				'delete_selected' 
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
					'headcell_details' => array(
						'cols' => array( 
							2 
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
					'headcell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'username_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'text' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'simple_grid_field6',
							'snippet',
							'grid_field_label2' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'headcell_field' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'cut_to_agency_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label' 
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
							'view_column' 
						),
						'items' => array( 
							'grid_edit',
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
					'cell_details' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'grid_details_link',
							'grid_details_link2' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'username_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'full_name_fieldcolumn',
							'biz_name_fieldcolumn' 
						),
						'items' => array( 
							'grid_field6',
							'grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'email_fieldcolumn',
							'mobile_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2',
							'grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'cut_to_agency_fieldcolumn' 
						),
						'items' => array( 
							'grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_dpreview' => array(
						'cols' => array( 
							0,
							1,
							2,
							3,
							4,
							5,
							6 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'details_preview',
							'details_preview2' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'footcell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
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
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_details' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							3 
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
							3 
						),
						'rows' => array( 
							3 
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
							4 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							3 
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
							6 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 7,
				'height' => 4 
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
			192445 
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
						'delete' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size',
						'print_details' 
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
							'cell' => 'headcell_details' 
						),
						array(
							'cell' => 'headcell_field2' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'headcell_field' 
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
							'cell' => 'cell_details' 
						),
						array(
							'cell' => 'cell_field2' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field4' 
						),
						array(
							'cell' => 'cell_field' 
						) 
					) 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_dpreview',
							'colspan' => 7 
						) 
					),
					'section' => 'body' 
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
							'cell' => 'footcell_details' 
						),
						array(
							'cell' => 'footcell_field2' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field4' 
						),
						array(
							'cell' => 'footcell_field' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'username',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'username',
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
						'text' 
					) 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field6',
						'grid_field' 
					),
					'orientation' => 'vertical',
					'field' => 'full_name',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
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
						'grid_edit',
						'grid_view' 
					) 
				),
				'footcell_icons' => array(
					'model' => 'footcell_icons',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field6',
						'snippet',
						'grid_field_label2' 
					),
					'field' => 'email',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2',
						'grid_field2' 
					),
					'orientation' => 'vertical',
					'field' => 'email',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						'details_preview',
						'details_preview2' 
					) 
				),
				'headcell_details' => array(
					'model' => 'headcell_details',
					'items' => array( 
						 
					) 
				),
				'cell_details' => array(
					'model' => 'cell_details',
					'items' => array( 
						'grid_details_link',
						'grid_details_link2' 
					) 
				),
				'footcell_details' => array(
					'model' => 'footcell_details',
					'items' => array( 
						 
					) 
				),
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label' 
					),
					'field' => 'cut_to_agency',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1' 
					),
					'field' => 'cut_to_agency',
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
		'details_found' => array(
			'type' => 'details_found' 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'delete_selected',
				'-5',
				'advsearch_link' 
			) 
		),
		'grid_field' => array(
			'field' => 'biz_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field7' => array(
			'type' => 'grid_field_label',
			'field' => 'username',
			'clickSort' => false 
		),
		'simple_grid_field6' => array(
			'type' => 'grid_field_label',
			'field' => 'email',
			'clickSort' => false 
		),
		'simple_grid_field3' => array(
			'field' => 'username',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field2' => array(
			'field' => 'email',
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
		'grid_edit' => array(
			'type' => 'grid_edit',
			'popup' => true 
		),
		'grid_view' => array(
			'type' => 'grid_view',
			'popup' => true 
		),
		'-' => array(
			'type' => '-' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'-2' => array(
			'type' => '-' 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
		),
		'-3' => array(
			'type' => '-' 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'print_details' => array(
			'type' => 'print_details',
			'tables' => array(
				'193473' => true,
				'196330' => true 
			) 
		),
		'grid_field2' => array(
			'field' => 'mobile',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label2' => array(
			'type' => 'grid_field_label',
			'field' => 'mobile',
			'clickSort' => false 
		),
		'grid_field6' => array(
			'field' => 'full_name',
			'type' => 'grid_field',
			'inlineEdit' => false,
			'inlineAdd' => false 
		),
		'text' => array(
			'type' => 'text',
			'label' => array(
				'text' => 'Name',
				'type' => 0 
			),
			'editedByRte' => false 
		),
		'snippet' => array(
			'type' => 'snippet',
			'eventId' => 'Slash_mark',
			'label' => array(
				'text' => 'Slash mark',
				'type' => 0 
			),
			'eventGid' => 192445 
		),
		'details_preview2' => array(
			'type' => 'details_preview',
			'table' => 193473,
			'items' => array( 
				 
			),
			'popup' => false,
			'hideEmptyPreview' => false,
			'proceedLink' => false,
			'pageId' => 'list' 
		),
		'grid_details_link2' => array(
			'type' => 'grid_details_link',
			'table' => 193473,
			'badge' => false,
			'showCount' => true,
			'hideIfNone' => false,
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  padding-left:20px;
}
',
			'icon' => array(
				'glyph' => 'bookmark' 
			) 
		),
		'details_preview' => array(
			'type' => 'details_preview',
			'table' => 196330,
			'items' => array( 
				 
			),
			'popup' => false,
			'hideEmptyPreview' => false,
			'proceedLink' => false,
			'pageId' => 'list' 
		),
		'grid_details_link' => array(
			'type' => 'grid_details_link',
			'table' => 196330,
			'badge' => false,
			'showCount' => true,
			'hideIfNone' => false,
			'icon' => array(
				'glyph' => 'file' 
			),
			'color' => '#ddb37a' 
		),
		'grid_field1' => array(
			'field' => 'cut_to_agency',
			'type' => 'grid_field',
			'inlineEdit' => false,
			'inlineAdd' => false 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'cut_to_agency',
			'clickSort' => false 
		),
		'-4' => array(
			'type' => '-' 
		),
		'delete' => array(
			'type' => 'delete' 
		),
		'delete_selected' => array(
			'type' => 'delete_selected' 
		),
		'-5' => array(
			'type' => '-' 
		) 
	),
	'spreadsheetGrid' => false,
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