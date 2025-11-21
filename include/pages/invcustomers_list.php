<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'spreadsheetMode' => false,
		'reorderRows' => false,
		'addToBottom' => false,
		'delete' => true,
		'updateSelected' => false,
		'addInPopup' => false,
		'editInPopup' => false,
		'viewInPopup' => false,
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
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'id' => array(
			'totalsType' => '' 
		),
		'name' => array(
			'totalsType' => '' 
		),
		'address' => array(
			'totalsType' => '' 
		),
		'email' => array(
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
		'doc_upload' => array(
			'totalsType' => '' 
		),
		'id_property' => array(
			'totalsType' => '' 
		),
		'docuserid' => array(
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
		'allemails' => array(
			'totalsType' => '' 
		),
		'last_updated' => array(
			'totalsType' => '' 
		),
		'registration_date' => array(
			'totalsType' => '' 
		),
		'status' => array(
			'totalsType' => '' 
		),
		'id_tx' => array(
			'totalsType' => '' 
		),
		'id_type' => array(
			'totalsType' => '' 
		),
		'country_incorporation' => array(
			'totalsType' => '' 
		),
		'agency_name' => array(
			'totalsType' => '' 
		),
		'license_no' => array(
			'totalsType' => '' 
		),
		'agency_address' => array(
			'totalsType' => '' 
		),
		'agency_postal' => array(
			'totalsType' => '' 
		),
		'nationality' => array(
			'totalsType' => '' 
		),
		'date_of_birth' => array(
			'totalsType' => '' 
		),
		'occupation' => array(
			'totalsType' => '' 
		),
		'contact_person_contact' => array(
			'totalsType' => '' 
		),
		'gender' => array(
			'totalsType' => '' 
		),
		'contact_person_id' => array(
			'totalsType' => '' 
		),
		'salutation' => array(
			'totalsType' => '' 
		),
		'race' => array(
			'totalsType' => '' 
		),
		'tel_type' => array(
			'totalsType' => '' 
		),
		'registration_no' => array(
			'totalsType' => '' 
		),
		'nric_reg' => array(
			'totalsType' => '' 
		),
		'date_added' => array(
			'totalsType' => '' 
		),
		'username' => array(
			'totalsType' => '' 
		),
		'billing_address' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'name',
			'mobile',
			'email',
			'contact_person',
			'contact_person_contact',
			'contact_email',
			'office_tel',
			'biz_email',
			'date_added',
			'last_updated' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'name',
			'contact_person_contact',
			'mobile',
			'nric' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'name' => array( 
				'simple_grid_field1',
				'simple_grid_field' 
			),
			'email' => array( 
				'simple_grid_field3' 
			),
			'mobile' => array( 
				'grid_field' 
			),
			'office_tel' => array( 
				'grid_field7' 
			),
			'contact_person' => array( 
				'grid_field12',
				'grid_field_label12' 
			),
			'contact_email' => array( 
				'grid_field14' 
			),
			'biz_email' => array( 
				'grid_field15' 
			),
			'contact_person_contact' => array( 
				'grid_field33' 
			),
			'last_updated' => array( 
				'grid_field1',
				'grid_field_label' 
			),
			'date_added' => array( 
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
		'edit' => true,
		'add' => true,
		'view' => true,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'supertop' => array( 
					'logo',
					'menu',
					'simple_search',
					'list_options',
					'loginform_login',
					'username_button' 
				),
				'left' => array( 
					'search_panel',
					'filter_panel' 
				),
				'top' => array( 
					'breadcrumb' 
				),
				'above-grid' => array( 
					'add',
					'delete',
					'snippet',
					'details_found',
					'page_size' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'grid' => array( 
					'simple_grid_field',
					'simple_grid_field1',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_edit',
					'grid_view',
					'grid_field_label12',
					'grid_field12',
					'text1',
					'grid_field33',
					'grid_field14',
					'text2',
					'grid_field7',
					'grid_field15',
					'text',
					'grid_field',
					'simple_grid_field3',
					'grid_field_label1',
					'snippet1',
					'grid_field_label',
					'grid_field2',
					'grid_field1' 
				) 
			),
			'formXtTags' => array(
				'top' => array( 
					'breadcrumb' 
				),
				'below-grid' => array( 
					'pagination' 
				) 
			),
			'itemForms' => array(
				'logo' => 'supertop',
				'menu' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'search_panel' => 'left',
				'filter_panel' => 'left',
				'breadcrumb' => 'top',
				'add' => 'above-grid',
				'delete' => 'above-grid',
				'snippet' => 'above-grid',
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'pagination' => 'below-grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field1' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_edit' => 'grid',
				'grid_view' => 'grid',
				'grid_field_label12' => 'grid',
				'grid_field12' => 'grid',
				'text1' => 'grid',
				'grid_field33' => 'grid',
				'grid_field14' => 'grid',
				'text2' => 'grid',
				'grid_field7' => 'grid',
				'grid_field15' => 'grid',
				'text' => 'grid',
				'grid_field' => 'grid',
				'simple_grid_field3' => 'grid',
				'grid_field_label1' => 'grid',
				'snippet1' => 'grid',
				'grid_field_label' => 'grid',
				'grid_field2' => 'grid',
				'grid_field1' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
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
				'grid_field_label12' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field15' 
				),
				'grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'cell_field15' 
				),
				'text1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field17' 
				),
				'grid_field33' => array(
					'location' => 'grid',
					'cellId' => 'cell_field17' 
				),
				'grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_field17' 
				),
				'text2' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field18' 
				),
				'grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field18' 
				),
				'grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_field18' 
				),
				'text' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'grid_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'snippet1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				) 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'simple_search' => 3,
				'list_options' => 3,
				'loginform_login' => 3,
				'username_button' => 3,
				'search_panel' => 5,
				'filter_panel' => 3 
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
			'list_options' => array( 
				'list_options' 
			),
			'export' => array( 
				'export' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2',
				'-3',
				'-4',
				'-5',
				'-6' 
			),
			'export_selected' => array( 
				'export_selected' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'import' => array( 
				'import' 
			),
			'grid_field' => array( 
				'simple_grid_field1',
				'simple_grid_field3',
				'grid_field',
				'grid_field7',
				'grid_field12',
				'grid_field14',
				'grid_field15',
				'grid_field33',
				'grid_field1',
				'grid_field2' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'delete' => array( 
				'delete' 
			),
			'delete_selected' => array( 
				'delete_selected' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'add' => array( 
				'add' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'grid_field_label' => array( 
				'simple_grid_field',
				'grid_field_label12',
				'grid_field_label',
				'grid_field_label1' 
			),
			'text' => array( 
				'text',
				'text2',
				'text1' 
			),
			'grid_edit' => array( 
				'grid_edit' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
			),
			'snippet' => array( 
				'snippet',
				'snippet1' 
			),
			'filter_panel' => array( 
				'filter_panel' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field3' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
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
							'simple_grid_field' 
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
							 
						),
						'items' => array( 
							'text' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'headcell_field15' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'contact_person_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field17' => array(
						'cols' => array( 
							5 
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
					'headcell_field18' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'text2' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'grid_field_label1',
							'snippet1',
							'grid_field_label' 
						),
						'fixedAtServer' => true,
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
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'mobile_fieldcolumn',
							'email_fieldcolumn' 
						),
						'items' => array( 
							'grid_field',
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field15' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'contact_person_fieldcolumn' 
						),
						'items' => array( 
							'grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field17' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'contact_person_contact_fieldcolumn',
							'contact_email_fieldcolumn' 
						),
						'items' => array( 
							'grid_field33',
							'grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field18' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'office_tel_fieldcolumn',
							'biz_email_fieldcolumn' 
						),
						'items' => array( 
							'grid_field7',
							'grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'date_added_fieldcolumn',
							'last_updated_fieldcolumn' 
						),
						'items' => array( 
							'grid_field2',
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
					'headcell_field6' => array(
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
					'footcell_field15' => array(
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
					),
					'footcell_field17' => array(
						'cols' => array( 
							5 
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
					'footcell_field18' => array(
						'cols' => array( 
							6 
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
							7 
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
				'width' => 8,
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
			192420,
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
					),
					'_t' => 'Map',
					'_i' => array(
						 
					),
					'_s' => 0 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'simple_search',
						'list_options',
						'loginform_login',
						'username_button' 
					),
					'_t' => 'Map',
					'_i' => array(
						 
					),
					'_s' => 0 
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
				),
				array(
					'cells' => array( 
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
						'search_panel' 
					),
					'_t' => 'Map',
					'_i' => array(
						 
					),
					'_s' => 0 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'filter_panel' 
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
					),
					'_t' => 'Map',
					'_i' => array(
						 
					),
					'_s' => 0 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
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
						'delete',
						'snippet' 
					),
					'_t' => 'Map',
					'_i' => array(
						 
					),
					'_s' => 0 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size' 
					),
					'_t' => 'Map',
					'_i' => array(
						 
					),
					'_s' => 0 
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
					),
					'_t' => 'Map',
					'_i' => array(
						 
					),
					'_s' => 0 
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
							'cell' => 'headcell_field15' 
						),
						array(
							'cell' => 'headcell_field17' 
						),
						array(
							'cell' => 'headcell_field18' 
						),
						array(
							'cell' => 'headcell_field3' 
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
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'cell_field15' 
						),
						array(
							'cell' => 'cell_field17' 
						),
						array(
							'cell' => 'cell_field18' 
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
							'cell' => 'footcell_icons' 
						),
						array(
							'cell' => 'footcell_checkbox' 
						),
						array(
							'cell' => 'footcell_field' 
						),
						array(
							'cell' => 'headcell_field6' 
						),
						array(
							'cell' => 'footcell_field15' 
						),
						array(
							'cell' => 'footcell_field17' 
						),
						array(
							'cell' => 'footcell_field18' 
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
						'simple_grid_field' 
					),
					'field' => 'name',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'orientation' => 'vertical',
					'field' => 'name',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
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
				'headcell_field15' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label12' 
					),
					'field' => 'contact_person',
					'columnName' => 'field' 
				),
				'cell_field15' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field12' 
					),
					'field' => 'contact_person',
					'columnName' => 'field' 
				),
				'footcell_field15' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field17' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'text1' 
					) 
				),
				'cell_field17' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field33',
						'grid_field14' 
					),
					'orientation' => 'vertical',
					'field' => 'contact_person_contact',
					'columnName' => 'field' 
				),
				'footcell_field17' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field18' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'text2' 
					) 
				),
				'cell_field18' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field7',
						'grid_field15' 
					),
					'orientation' => 'vertical',
					'field' => 'office_tel',
					'columnName' => 'field' 
				),
				'footcell_field18' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'text' 
					) 
				),
				'headcell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field',
						'simple_grid_field3' 
					),
					'orientation' => 'vertical',
					'field' => 'mobile',
					'columnName' => 'field' 
				),
				'headcell_field6' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label1',
						'snippet1',
						'grid_field_label' 
					),
					'field' => 'date_added',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field2',
						'grid_field1' 
					),
					'orientation' => 'vertical',
					'field' => 'date_added',
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
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'export_selected',
				'delete_selected',
				'-6',
				'advsearch_link',
				'show_search_panel',
				'hide_search_panel',
				'-4',
				'export',
				'-2',
				'import' 
			) 
		),
		'export' => array(
			'type' => 'export' 
		),
		'-' => array(
			'type' => '-' 
		),
		'export_selected' => array(
			'type' => 'export_selected' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'import' => array(
			'type' => 'import' 
		),
		'-2' => array(
			'type' => '-' 
		),
		'-3' => array(
			'type' => '-' 
		),
		'-4' => array(
			'type' => '-' 
		),
		'simple_grid_field1' => array(
			'field' => 'name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field3' => array(
			'field' => 'email',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_view' => array(
			'type' => 'grid_view',
			'popup' => false,
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none !important;
}
' 
		),
		'delete' => array(
			'type' => 'delete' 
		),
		'delete_selected' => array(
			'type' => 'delete_selected' 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'changepassword_link' 
			) 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'add' => array(
			'type' => 'add',
			'popup' => false 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'-5' => array(
			'type' => '-' 
		),
		'simple_grid_field' => array(
			'type' => 'grid_field_label',
			'field' => 'name',
			'clickSort' => true 
		),
		'text' => array(
			'type' => 'text',
			'label' => array(
				'text' => 'Mobile / Email',
				'type' => 0 
			),
			'editedByRte' => false 
		),
		'grid_edit' => array(
			'type' => 'grid_edit',
			'popup' => false 
		),
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1' 
			),
			'_flexiblePanel' => true 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
		),
		'-6' => array(
			'type' => '-' 
		),
		'snippet' => array(
			'type' => 'snippet',
			'eventId' => 'Return_to_top',
			'label' => array(
				'text' => 'Return to top',
				'type' => 0 
			),
			'eventGid' => 192420 
		),
		'grid_field' => array(
			'field' => 'mobile',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field7' => array(
			'field' => 'office_tel',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'text2' => array(
			'type' => 'text',
			'label' => array(
				'text' => 'Office Tel',
				'type' => 0 
			),
			'editedByRte' => false 
		),
		'grid_field12' => array(
			'field' => 'contact_person',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label12' => array(
			'type' => 'grid_field_label',
			'field' => 'contact_person',
			'clickSort' => false 
		),
		'grid_field14' => array(
			'field' => 'contact_email',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field15' => array(
			'field' => 'biz_email',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'filter_panel' => array(
			'type' => 'filter_panel',
			'items' => array( 
				 
			) 
		),
		'grid_field33' => array(
			'field' => 'contact_person_contact',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'text1' => array(
			'type' => 'text',
			'label' => array(
				'text' => 'Contacts',
				'type' => 0 
			),
			'editedByRte' => false 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'search_panel_field' => array(
			'field' => 'name',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field1' => array(
			'field' => 'nric',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field2' => array(
			'field' => 'mobile',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field3' => array(
			'field' => 'contact_person_contact',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'grid_field1' => array(
			'field' => 'last_updated',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'last_updated',
			'clickSort' => false 
		),
		'grid_field2' => array(
			'field' => 'date_added',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label1' => array(
			'type' => 'grid_field_label',
			'field' => 'date_added',
			'clickSort' => false 
		),
		'snippet1' => array(
			'eventId' => 'Slash_mark',
			'label' => array(
				'text' => 'Slash mark',
				'type' => 0 
			),
			'type' => 'snippet',
			'eventGid' => 192445 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		) 
	),
	'spreadsheetGrid' => false,
	'version' => 14,
	'businessTemplate' => 'Invoice',
	'businessTemplatePageId' => 'list',
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
		 
	) 
);
		?>