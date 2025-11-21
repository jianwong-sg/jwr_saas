<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => true,
		'inlineEdit' => false,
		'spreadsheetMode' => false,
		'addToBottom' => false,
		'delete' => true,
		'updateSelected' => false,
		'addInPopup' => false,
		'editInPopup' => false,
		'viewInPopup' => null,
		'clickSort' => true,
		'sortDropdown' => true,
		'showHideFields' => false,
		'reorderFields' => false,
		'hideNumberOfRecords' => false 
	),
	'master' => array(
		'rental_main_details' => array(
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
		'id_detail' => array(
			'totalsType' => '' 
		),
		'occupier_name' => array(
			'totalsType' => '' 
		),
		'occupier_id' => array(
			'totalsType' => '' 
		),
		'occupier_occupation' => array(
			'totalsType' => '' 
		),
		'file_upload' => array(
			'totalsType' => '' 
		),
		'occupier_relationship' => array(
			'totalsType' => '' 
		),
		'occupier_nationality' => array(
			'totalsType' => '' 
		),
		'occupier_gender' => array(
			'totalsType' => '' 
		),
		'updatedate' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'occupier_relationship',
			'occupier_nationality',
			'occupier_gender',
			'updatedate',
			'occupier_id',
			'occupier_name',
			'occupier_occupation',
			'file_upload' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'occupier_id',
			'occupier_name' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'occupier_relationship' => array( 
				'simple_grid_field',
				'simple_grid_field8' 
			),
			'occupier_nationality' => array( 
				'simple_grid_field1',
				'simple_grid_field9' 
			),
			'occupier_gender' => array( 
				'simple_grid_field2',
				'simple_grid_field10' 
			),
			'updatedate' => array( 
				'simple_grid_field3',
				'simple_grid_field11' 
			),
			'occupier_id' => array( 
				'simple_grid_field4',
				'simple_grid_field12' 
			),
			'occupier_name' => array( 
				'simple_grid_field5',
				'simple_grid_field13' 
			),
			'occupier_occupation' => array( 
				'simple_grid_field6',
				'simple_grid_field14' 
			),
			'file_upload' => array( 
				'simple_grid_field7',
				'simple_grid_field15' 
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
		'view' => false,
		'print' => true 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'add',
					'inline_add',
					'delete',
					'details_found',
					'page_size',
					'print_panel',
					'sort_dropdown' 
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
					'grid_edit',
					'grid_inline_cancel',
					'simple_grid_field8',
					'simple_grid_field',
					'simple_grid_field11',
					'simple_grid_field3',
					'simple_grid_field14',
					'simple_grid_field6',
					'simple_grid_field9',
					'simple_grid_field1',
					'simple_grid_field12',
					'simple_grid_field4',
					'simple_grid_field15',
					'simple_grid_field7',
					'simple_grid_field10',
					'simple_grid_field2',
					'simple_grid_field13',
					'simple_grid_field5' 
				) 
			),
			'formXtTags' => array(
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
				'print_panel' => 'above-grid',
				'sort_dropdown' => 'above-grid',
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
				'grid_edit' => 'grid',
				'grid_inline_cancel' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field5' => 'grid' 
			),
			'itemLocations' => array(
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_top' 
				),
				'grid_edit' => array(
					'location' => 'grid',
					'cellId' => 'cell_top' 
				),
				'grid_inline_cancel' => array(
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
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_label1' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_label2' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_label3' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'cell_label4' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_label5' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_label6' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'cell_label7' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
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
				'search_panel_field2',
				'search_panel_field3' 
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
			'add' => array( 
				'add' 
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
			'sort_dropdown' => array( 
				'sort_dropdown' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
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
			'export' => array( 
				'export' 
			),
			'export_selected' => array( 
				'export_selected' 
			),
			'import' => array( 
				'import' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'simple_grid_field2',
				'simple_grid_field3',
				'simple_grid_field4',
				'simple_grid_field5',
				'simple_grid_field6',
				'simple_grid_field7' 
			),
			'grid_field_label' => array( 
				'simple_grid_field8',
				'simple_grid_field9',
				'simple_grid_field10',
				'simple_grid_field11',
				'simple_grid_field12',
				'simple_grid_field13',
				'simple_grid_field14',
				'simple_grid_field15' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'grid_edit' => array( 
				'grid_edit' 
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
					'cell_top' => array(
						'cols' => array( 
							0,
							1,
							2,
							3,
							4,
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'checkbox_column',
							'edit_column',
							'inline_cancel' 
						),
						'items' => array( 
							'grid_checkbox',
							'grid_edit',
							'grid_inline_cancel' 
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
							'occupier_relationship_fieldheadercolumn' 
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
							'occupier_relationship_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'updatedate_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
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
							'updatedate_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'occupier_occupation_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'occupier_occupation_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'occupier_nationality_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'occupier_nationality_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label4' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'occupier_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'occupier_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label5' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'file_upload_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'file_upload_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label6' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'occupier_gender_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'occupier_gender_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label7' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'occupier_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'occupier_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_label8' => array(
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
					'cell_field8' => array(
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
					'cell_dpreview' => array(
						'cols' => array( 
							0,
							1,
							2,
							3,
							4,
							5 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 6,
				'height' => 5 
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
		'gridType' => 2,
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
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c3' 
						),
						array(
							'cell' => 'c4' 
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
						'page_size',
						'print_panel' 
					) 
				),
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						 
					) 
				),
				'c4' => array(
					'model' => 'c4',
					'items' => array( 
						'sort_dropdown' 
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
			'modelId' => 'columns-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_top',
							'colspan' => 6 
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
						),
						array(
							'cell' => 'cell_label1' 
						),
						array(
							'cell' => 'cell_field1' 
						),
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
						),
						array(
							'cell' => 'cell_label4' 
						),
						array(
							'cell' => 'cell_field4' 
						),
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
						),
						array(
							'cell' => 'cell_label7' 
						),
						array(
							'cell' => 'cell_field7' 
						),
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
							'colspan' => 6 
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
						'grid_edit',
						'grid_inline_cancel' 
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
					'field' => 'occupier_relationship',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'occupier_relationship',
					'columnName' => 'field' 
				),
				'cell_label1' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'updatedate',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'updatedate',
					'columnName' => 'field' 
				),
				'cell_label2' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'occupier_occupation',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'occupier_occupation',
					'columnName' => 'field' 
				),
				'cell_label3' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'occupier_nationality',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'occupier_nationality',
					'columnName' => 'field' 
				),
				'cell_label4' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'occupier_id',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'occupier_id',
					'columnName' => 'field' 
				),
				'cell_label5' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'file_upload',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'file_upload',
					'columnName' => 'field' 
				),
				'cell_label6' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'occupier_gender',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'occupier_gender',
					'columnName' => 'field' 
				),
				'cell_label7' => array(
					'model' => 'cell_label',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'occupier_name',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'occupier_name',
					'columnName' => 'field' 
				),
				'cell_label8' => array(
					'model' => 'cell_label',
					'items' => array( 
						 
					) 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				'grid_checkbox_head' 
			),
			'buildType' => 2,
			'columnCount' => 3 
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
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field3',
				'search_panel_field2' 
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
		'search_panel_field2' => array(
			'field' => 'occupier_name',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field3' => array(
			'field' => 'occupier_id',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
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
		'add' => array(
			'type' => 'add',
			'popup' => false 
		),
		'delete' => array(
			'type' => 'delete' 
		),
		'delete_selected' => array(
			'type' => 'delete_selected' 
		),
		'-' => array(
			'type' => '-' 
		),
		'sort_dropdown' => array(
			'type' => 'sort_dropdown' 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
		),
		'-1' => array(
			'type' => '-' 
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
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'simple_grid_field' => array(
			'field' => 'occupier_relationship',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field8' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_relationship' 
		),
		'simple_grid_field1' => array(
			'field' => 'occupier_nationality',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field9' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_nationality' 
		),
		'simple_grid_field2' => array(
			'field' => 'occupier_gender',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_gender' 
		),
		'simple_grid_field3' => array(
			'field' => 'updatedate',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field11' => array(
			'type' => 'grid_field_label',
			'field' => 'updatedate' 
		),
		'simple_grid_field4' => array(
			'field' => 'occupier_id',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field12' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_id' 
		),
		'simple_grid_field5' => array(
			'field' => 'occupier_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field13' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_name' 
		),
		'simple_grid_field6' => array(
			'field' => 'occupier_occupation',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'occupier_occupation' 
		),
		'simple_grid_field7' => array(
			'field' => 'file_upload',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field15' => array(
			'type' => 'grid_field_label',
			'field' => 'file_upload' 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'grid_edit' => array(
			'type' => 'grid_edit',
			'popup' => false 
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