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
		'viewInPopup' => false,
		'clickSort' => true,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'hideNumberOfRecords' => false 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			'agency',
			'cea_reg',
			'descriptions',
			'name',
			'third_party' 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => true,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'agency' => array(
			'totalsType' => '' 
		),
		'award_type' => array(
			'totalsType' => '' 
		),
		'cea_reg' => array(
			'totalsType' => '' 
		),
		'dateadded' => array(
			'totalsType' => '' 
		),
		'descriptions' => array(
			'totalsType' => '' 
		),
		'doc_upload' => array(
			'totalsType' => '' 
		),
		'docuserid' => array(
			'totalsType' => '' 
		),
		'eatuser_id' => array(
			'totalsType' => '' 
		),
		'filename' => array(
			'totalsType' => '' 
		),
		'id' => array(
			'totalsType' => '' 
		),
		'name' => array(
			'totalsType' => '' 
		),
		'third_party' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'dateadded',
			'name',
			'cea_reg',
			'agency',
			'third_party',
			'descriptions',
			'doc_upload',
			'award_type',
			'eatuser_id' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'third_party',
			'eatuser_id',
			'award_type',
			'agency',
			'descriptions',
			'name',
			'cea_reg' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			'award_type',
			'eatuser_id' 
		),
		'inlineEditFields' => array( 
			'award_type',
			'eatuser_id' 
		),
		'fieldItems' => array(
			'dateadded' => array( 
				'simple_grid_field',
				'simple_grid_field8' 
			),
			'name' => array( 
				'simple_grid_field1',
				'simple_grid_field9' 
			),
			'cea_reg' => array( 
				'simple_grid_field2',
				'simple_grid_field10' 
			),
			'agency' => array( 
				'simple_grid_field3',
				'simple_grid_field11' 
			),
			'third_party' => array( 
				'simple_grid_field5',
				'simple_grid_field13' 
			),
			'descriptions' => array( 
				'simple_grid_field6',
				'simple_grid_field14' 
			),
			'doc_upload' => array( 
				'simple_grid_field7',
				'simple_grid_field15' 
			),
			'award_type' => array( 
				'grid_field',
				'grid_field_label' 
			),
			'eatuser_id' => array( 
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
		'edit' => false,
		'add' => false,
		'view' => true,
		'print' => true 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'details_found',
					'page_size',
					'print_panel' 
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
					'grid_checkbox',
					'grid_view',
					'simple_grid_field8',
					'simple_grid_field',
					'simple_grid_field9',
					'simple_grid_field1',
					'simple_grid_field10',
					'simple_grid_field2',
					'simple_grid_field11',
					'simple_grid_field3',
					'grid_field_label',
					'grid_field',
					'simple_grid_field13',
					'simple_grid_field5',
					'simple_grid_field14',
					'simple_grid_field6',
					'simple_grid_field15',
					'simple_grid_field7',
					'grid_field_label1',
					'grid_field1' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'details_found',
					'recsPerPage',
					'print_friendly' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'top' => array( 
					'breadcrumb' 
				) 
			),
			'itemForms' => array(
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'print_panel' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'supertop',
				'menu' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'search_panel' => 'left',
				'breadcrumb' => 'top',
				'grid_checkbox' => 'grid',
				'grid_view' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field3' => 'grid',
				'grid_field_label' => 'grid',
				'grid_field' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field7' => 'grid',
				'grid_field_label1' => 'grid',
				'grid_field1' => 'grid' 
			),
			'itemLocations' => array(
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_top' 
				),
				'grid_view' => array(
					'location' => 'grid',
					'cellId' => 'cell_top' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_label' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_label1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_label2' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_label3' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'cell_label4' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'cell_label5' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_label6' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_label7' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'grid_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'cell_label8' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				) 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'simple_search' => 3,
				'search_panel' => 5,
				'list_options' => 3,
				'print_panel' => 5,
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
				'search_panel_field2',
				'search_panel_field4',
				'search_panel_field7',
				'search_panel_field8',
				'search_panel_field',
				'search_panel_field3' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'print_panel' => array( 
				'print_panel' 
			),
			'print_scope' => array( 
				'print_scope' 
			),
			'print_button' => array( 
				'print_button' 
			),
			'print_records' => array( 
				'print_records' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'simple_grid_field2',
				'simple_grid_field3',
				'simple_grid_field5',
				'simple_grid_field6',
				'simple_grid_field7',
				'grid_field',
				'grid_field1' 
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
				'simple_grid_field8',
				'simple_grid_field9',
				'simple_grid_field10',
				'simple_grid_field11',
				'simple_grid_field13',
				'simple_grid_field14',
				'simple_grid_field15',
				'grid_field_label',
				'grid_field_label1' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'cell_top' => array(
						'cols' => array( 
							0,
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'checkbox_column',
							'view_column' 
						),
						'items' => array( 
							'grid_checkbox',
							'grid_view' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'dateadded_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'dateadded_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
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
					'cell_label2' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'cea_reg_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'cea_reg_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'agency_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'agency_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label5' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							5 
						),
						'tags' => array( 
							'third_party_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							5 
						),
						'tags' => array( 
							'third_party_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label6' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							6 
						),
						'tags' => array( 
							'descriptions_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							6 
						),
						'tags' => array( 
							'descriptions_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							7 
						),
						'tags' => array( 
							'doc_upload_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							7 
						),
						'tags' => array( 
							'doc_upload_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label4' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							8 
						),
						'tags' => array( 
							'award_type_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							8 
						),
						'tags' => array( 
							'award_type_fieldcolumn' 
						),
						'items' => array( 
							'grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label8' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							9 
						),
						'tags' => array( 
							'eatuser_id_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							9 
						),
						'tags' => array( 
							'eatuser_id_fieldcolumn' 
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
							1 
						),
						'rows' => array( 
							10 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 2,
				'height' => 11 
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
		'gridType' => 1,
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
						 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size',
						'print_panel' 
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
			'modelId' => 'vertical-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_top',
							'colspan' => 2 
						) 
					),
					'section' => 'head' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label' 
						),
						array(
							'cell' => 'cell_field' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label1' 
						),
						array(
							'cell' => 'cell_field1' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label2' 
						),
						array(
							'cell' => 'cell_field2' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label3' 
						),
						array(
							'cell' => 'cell_field3' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label5' 
						),
						array(
							'cell' => 'cell_field5' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label6' 
						),
						array(
							'cell' => 'cell_field6' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label7' 
						),
						array(
							'cell' => 'cell_field7' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label4' 
						),
						array(
							'cell' => 'cell_field4' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_label8' 
						),
						array(
							'cell' => 'cell_field8' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_dpreview',
							'colspan' => 2 
						) 
					),
					'section' => 'foot' 
				) 
			),
			'cells' => array(
				'cell_top' => array(
					'model' => 'cell_top',
					'items' => array( 
						'grid_checkbox',
						'grid_view' 
					) 
				),
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						 
					) 
				),
				'cell_label' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'dateadded',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'dateadded',
					'columnName' => 'field' 
				),
				'cell_label1' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'name',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'name',
					'columnName' => 'field' 
				),
				'cell_label2' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'cea_reg',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'cea_reg',
					'columnName' => 'field' 
				),
				'cell_label3' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'agency',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'agency',
					'columnName' => 'field' 
				),
				'cell_label4' => array(
					'model' => 'cell_label',
					'items' => array( 
						'grid_field_label' 
					),
					'field' => 'award_type',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'field' => 'award_type',
					'columnName' => 'field' 
				),
				'cell_label5' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'third_party',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'third_party',
					'columnName' => 'field' 
				),
				'cell_label6' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'descriptions',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'descriptions',
					'columnName' => 'field' 
				),
				'cell_label7' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'doc_upload',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'doc_upload',
					'columnName' => 'field' 
				),
				'cell_label8' => array(
					'model' => 'cell_label',
					'items' => array( 
						'grid_field_label1' 
					),
					'field' => 'eatuser_id',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1' 
					),
					'field' => 'eatuser_id',
					'columnName' => 'field' 
				) 
			),
			'deferredItems' => array( 
				'grid_checkbox_head' 
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
				'search_panel_field8',
				'search_panel_field3',
				'search_panel_field',
				'search_panel_field7',
				'search_panel_field4',
				'search_panel_field2',
				'search_panel_field1' 
			),
			'_flexiblePanel' => false 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'advsearch_link',
				'show_search_panel',
				'hide_search_panel' 
			) 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'search_panel_field1' => array(
			'field' => 'cea_reg',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field2' => array(
			'field' => 'name',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field4' => array(
			'field' => 'descriptions',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field7' => array(
			'field' => 'agency',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field8' => array(
			'field' => 'third_party',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'grid_view' => array(
			'type' => 'grid_view',
			'popup' => false 
		),
		'print_panel' => array(
			'type' => 'print_panel',
			'items' => array( 
				'print_scope',
				'print_records',
				'print_button' 
			) 
		),
		'print_scope' => array(
			'type' => 'print_scope' 
		),
		'print_button' => array(
			'type' => 'print_button' 
		),
		'print_records' => array(
			'type' => 'print_records' 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
		),
		'simple_grid_field' => array(
			'field' => 'dateadded',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field1' => array(
			'field' => 'name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field2' => array(
			'field' => 'cea_reg',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field3' => array(
			'field' => 'agency',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field5' => array(
			'field' => 'third_party',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field6' => array(
			'field' => 'descriptions',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field7' => array(
			'field' => 'doc_upload',
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
		'simple_grid_field8' => array(
			'type' => 'grid_field_label',
			'field' => 'dateadded' 
		),
		'simple_grid_field9' => array(
			'type' => 'grid_field_label',
			'field' => 'name' 
		),
		'simple_grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'cea_reg' 
		),
		'simple_grid_field11' => array(
			'type' => 'grid_field_label',
			'field' => 'agency' 
		),
		'simple_grid_field13' => array(
			'type' => 'grid_field_label',
			'field' => 'third_party' 
		),
		'simple_grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'descriptions' 
		),
		'simple_grid_field15' => array(
			'type' => 'grid_field_label',
			'field' => 'doc_upload' 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'grid_field' => array(
			'field' => 'award_type',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'award_type' 
		),
		'search_panel_field' => array(
			'field' => 'award_type',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'grid_field1' => array(
			'field' => 'eatuser_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label1' => array(
			'type' => 'grid_field_label',
			'field' => 'eatuser_id' 
		),
		'search_panel_field3' => array(
			'field' => 'eatuser_id',
			'type' => 'search_panel_field',
			'required' => false 
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