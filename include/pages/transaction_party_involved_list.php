<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'spreadsheetMode' => false,
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
			'totalsType' => 'COUNT' 
		),
		'category' => array(
			'totalsType' => '' 
		),
		'cus_type' => array(
			'totalsType' => '' 
		),
		'salesperson_name' => array(
			'totalsType' => '' 
		),
		'cea_reg' => array(
			'totalsType' => '' 
		),
		'prop_address' => array(
			'totalsType' => '' 
		),
		'prop_type' => array(
			'totalsType' => '' 
		),
		'Prop_kind' => array(
			'totalsType' => '' 
		),
		'representing' => array(
			'totalsType' => '' 
		),
		'rental_price' => array(
			'totalsType' => '' 
		),
		'sale_price' => array(
			'totalsType' => '' 
		),
		'valuation_price' => array(
			'totalsType' => '' 
		),
		'transacted_price' => array(
			'totalsType' => '' 
		),
		'agency' => array(
			'totalsType' => '' 
		),
		'custid' => array(
			'totalsType' => '' 
		),
		'role' => array(
			'totalsType' => '' 
		),
		'mobile' => array(
			'totalsType' => '' 
		),
		'name' => array(
			'totalsType' => '' 
		),
		'country_incorporation' => array(
			'totalsType' => '' 
		),
		'reg_date' => array(
			'totalsType' => '' 
		),
		'address' => array(
			'totalsType' => '' 
		),
		'nric' => array(
			'totalsType' => '' 
		),
		'office_tel' => array(
			'totalsType' => '' 
		),
		'biz_email' => array(
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
		'contact_person_cell' => array(
			'totalsType' => '' 
		),
		'contact_person_id' => array(
			'totalsType' => '' 
		),
		'contact_email' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'id',
			'category',
			'representing',
			'cus_type',
			'contact_person_cell',
			'role',
			'mobile',
			'name',
			'address',
			'nric',
			'custid' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'representing',
			'custid',
			'nric',
			'address',
			'name',
			'mobile',
			'category',
			'id',
			'role' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'representing' => array( 
				'simple_grid_field6',
				'simple_grid_field16' 
			),
			'category' => array( 
				'simple_grid_field4',
				'simple_grid_field14' 
			),
			'id' => array( 
				'simple_grid_field',
				'simple_grid_field9',
				'simple_grid_field10' 
			),
			'mobile' => array( 
				'grid_field',
				'grid_field_label' 
			),
			'cus_type' => array( 
				'grid_field2',
				'grid_field_label2' 
			),
			'contact_person_cell' => array( 
				'grid_field8',
				'grid_field_label8' 
			),
			'role' => array( 
				'grid_field11',
				'grid_field_label11' 
			),
			'name' => array( 
				'grid_field1',
				'grid_field_label1' 
			),
			'address' => array( 
				'grid_field3',
				'grid_field_label3' 
			),
			'nric' => array( 
				'grid_field4',
				'grid_field_label4' 
			),
			'custid' => array( 
				'grid_field5',
				'grid_field_label5' 
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
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'custom_button',
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
					'search_panel' 
				),
				'top' => array( 
					'breadcrumb' 
				),
				'grid' => array( 
					'simple_grid_field9',
					'simple_grid_field',
					'simple_grid_field10',
					'simple_grid_field16',
					'simple_grid_field6',
					'grid_field_label3',
					'grid_field3',
					'grid_field_label2',
					'grid_field2',
					'simple_grid_field14',
					'simple_grid_field4',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_view',
					'grid_field_label8',
					'grid_field8',
					'grid_field_label11',
					'grid_field11',
					'grid_field_label',
					'grid_field',
					'grid_field_label1',
					'grid_field1',
					'grid_field_label4',
					'grid_field4',
					'grid_field_label5',
					'grid_field5' 
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
				'custom_button' => 'above-grid',
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
				'search_panel' => 'left',
				'breadcrumb' => 'top',
				'simple_grid_field9' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field16' => 'grid',
				'simple_grid_field6' => 'grid',
				'grid_field_label3' => 'grid',
				'grid_field3' => 'grid',
				'grid_field_label2' => 'grid',
				'grid_field2' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field4' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_view' => 'grid',
				'grid_field_label8' => 'grid',
				'grid_field8' => 'grid',
				'grid_field_label11' => 'grid',
				'grid_field11' => 'grid',
				'grid_field_label' => 'grid',
				'grid_field' => 'grid',
				'grid_field_label1' => 'grid',
				'grid_field1' => 'grid',
				'grid_field_label4' => 'grid',
				'grid_field4' => 'grid',
				'grid_field_label5' => 'grid',
				'grid_field5' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'footcell_field' 
				),
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'grid_field_label3' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'grid_field_label2' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				),
				'grid_view' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_field_label8' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field12' 
				),
				'grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field12' 
				),
				'grid_field_label11' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field15' 
				),
				'grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_field15' 
				),
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'grid_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_field_label4' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'grid_field_label5' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				) 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'simple_search' => 3,
				'list_options' => 3,
				'username_button' => 3,
				'loginform_login' => 3,
				'search_panel' => 5 
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
			'list_options' => array( 
				'list_options' 
			),
			'custom_button' => array( 
				'custom_button' 
			),
			'grid_field' => array( 
				'simple_grid_field6',
				'simple_grid_field4',
				'simple_grid_field',
				'grid_field',
				'grid_field2',
				'grid_field8',
				'grid_field11',
				'grid_field1',
				'grid_field3',
				'grid_field4',
				'grid_field5' 
			),
			'-' => array( 
				'-3',
				'-',
				'-1',
				'-2' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
			),
			'print_details' => array( 
				'print_details' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'grid_field_label' => array( 
				'simple_grid_field9',
				'simple_grid_field14',
				'simple_grid_field16',
				'grid_field_label',
				'grid_field_label2',
				'grid_field_label8',
				'grid_field_label11',
				'grid_field_label1',
				'grid_field_label3',
				'grid_field_label4',
				'grid_field_label5' 
			),
			'grid_field_totals' => array( 
				'simple_grid_field10' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field11',
				'search_panel_field4',
				'search_panel_field5',
				'search_panel_field6',
				'search_panel_field7' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
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
							'id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'category_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
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
							'representing_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'cus_type_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field12' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'contact_person_cell_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field15' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'role_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'mobile_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'name_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'address_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'nric_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'custid_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label5' 
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
							'view_column' 
						),
						'items' => array( 
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
							'id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'category_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'representing_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'cus_type_fieldcolumn' 
						),
						'items' => array( 
							'grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field12' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'contact_person_cell_fieldcolumn' 
						),
						'items' => array( 
							'grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field15' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'role_fieldcolumn' 
						),
						'items' => array( 
							'grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'mobile_fieldcolumn' 
						),
						'items' => array( 
							'grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'name_fieldcolumn' 
						),
						'items' => array( 
							'grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'address_fieldcolumn' 
						),
						'items' => array( 
							'grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'nric_fieldcolumn' 
						),
						'items' => array( 
							'grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'custid_fieldcolumn' 
						),
						'items' => array( 
							'grid_field5' 
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
							'id_fieldfootercolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field6' => array(
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
					'footcell_field1' => array(
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
					'footcell_field5' => array(
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
					'footcell_field12' => array(
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
					'footcell_field15' => array(
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
					),
					'footcell_field2' => array(
						'cols' => array( 
							8 
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
							9 
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
					'footcell_field4' => array(
						'cols' => array( 
							10 
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
					'footcell_field7' => array(
						'cols' => array( 
							11 
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
					'footcell_field8' => array(
						'cols' => array( 
							12 
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
				'width' => 13,
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
		'hasCustomButtons' => true,
		'customButtons' => array( 
			192276 
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
			192276 
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
						'custom_button' 
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
							'cell' => 'headcell_field6' 
						),
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field5' 
						),
						array(
							'cell' => 'headcell_field12' 
						),
						array(
							'cell' => 'headcell_field15' 
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
							'cell' => 'headcell_field7' 
						),
						array(
							'cell' => 'headcell_field8' 
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
							'cell' => 'cell_field6' 
						),
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field5' 
						),
						array(
							'cell' => 'cell_field12' 
						),
						array(
							'cell' => 'cell_field15' 
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
							'cell' => 'cell_field7' 
						),
						array(
							'cell' => 'cell_field8' 
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
							'cell' => 'footcell_field6' 
						),
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field5' 
						),
						array(
							'cell' => 'footcell_field12' 
						),
						array(
							'cell' => 'footcell_field15' 
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
							'cell' => 'footcell_field7' 
						),
						array(
							'cell' => 'footcell_field8' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'align' => 'center',
					'field' => 'id',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'align' => 'center',
					'field' => 'id',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
					'model' => 'footcell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'id',
					'columnName' => 'field' 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'representing',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'representing',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label3' 
					),
					'field' => 'address',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field3' 
					),
					'field' => 'address',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field5' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label2' 
					),
					'field' => 'cus_type',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field2' 
					),
					'field' => 'cus_type',
					'columnName' => 'field' 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field6' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'category',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'category',
					'columnName' => 'field' 
				),
				'footcell_field6' => array(
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
						'grid_view' 
					) 
				),
				'footcell_icons' => array(
					'model' => 'footcell_icons',
					'items' => array( 
						 
					) 
				),
				'headcell_field12' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label8' 
					),
					'field' => 'contact_person_cell',
					'columnName' => 'field' 
				),
				'cell_field12' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field8' 
					),
					'field' => 'contact_person_cell',
					'columnName' => 'field' 
				),
				'footcell_field12' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field15' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label11' 
					),
					'field' => 'role',
					'columnName' => 'field' 
				),
				'cell_field15' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field11' 
					),
					'field' => 'role',
					'columnName' => 'field' 
				),
				'footcell_field15' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label' 
					),
					'field' => 'mobile',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'field' => 'mobile',
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
						'grid_field_label1' 
					),
					'field' => 'name',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1' 
					),
					'field' => 'name',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field7' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label4' 
					),
					'field' => 'nric',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field4' 
					),
					'field' => 'nric',
					'columnName' => 'field' 
				),
				'footcell_field7' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field8' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label5' 
					),
					'field' => 'custid',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field5' 
					),
					'field' => 'custid',
					'columnName' => 'field' 
				),
				'footcell_field8' => array(
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
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'advsearch_link',
				'show_search_panel',
				'hide_search_panel' 
			) 
		),
		'custom_button' => array(
			'eventId' => 'Submit',
			'label' => array(
				'text' => 'Submit',
				'type' => 0 
			),
			'type' => 'custom_button',
			'eventGid' => 192276 
		),
		'simple_grid_field6' => array(
			'field' => 'representing',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field4' => array(
			'field' => 'category',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field' => array(
			'field' => 'id',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'-3' => array(
			'type' => '-' 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
		),
		'print_details' => array(
			'type' => 'print_details',
			'tables' => array(
				'195438' => true 
			) 
		),
		'grid_view' => array(
			'type' => 'grid_view',
			'popup' => false 
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
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'changepassword_link' 
			) 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'simple_grid_field9' => array(
			'type' => 'grid_field_label',
			'field' => 'id' 
		),
		'simple_grid_field10' => array(
			'type' => 'grid_field_totals',
			'field' => 'id',
			'totals' => 'COUNT' 
		),
		'simple_grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'category' 
		),
		'simple_grid_field16' => array(
			'type' => 'grid_field_label',
			'field' => 'representing' 
		),
		'grid_field' => array(
			'field' => 'mobile',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'mobile' 
		),
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field3',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field',
				'search_panel_field2',
				'search_panel_field1',
				'search_panel_field11' 
			) 
		),
		'search_panel_field' => array(
			'field' => 'mobile',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field1' => array(
			'field' => 'id',
			'type' => 'search_panel_field' 
		),
		'grid_field2' => array(
			'field' => 'cus_type',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label2' => array(
			'type' => 'grid_field_label',
			'field' => 'cus_type' 
		),
		'search_panel_field2' => array(
			'field' => 'category',
			'type' => 'search_panel_field' 
		),
		'search_panel_field3' => array(
			'field' => 'representing',
			'type' => 'search_panel_field' 
		),
		'grid_field8' => array(
			'field' => 'contact_person_cell',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label8' => array(
			'type' => 'grid_field_label',
			'field' => 'contact_person_cell' 
		),
		'grid_field11' => array(
			'field' => 'role',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label11' => array(
			'type' => 'grid_field_label',
			'field' => 'role' 
		),
		'search_panel_field11' => array(
			'field' => 'role',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'grid_field1' => array(
			'field' => 'name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label1' => array(
			'type' => 'grid_field_label',
			'field' => 'name' 
		),
		'search_panel_field4' => array(
			'field' => 'name',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'grid_field3' => array(
			'field' => 'address',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label3' => array(
			'type' => 'grid_field_label',
			'field' => 'address' 
		),
		'search_panel_field5' => array(
			'field' => 'address',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'grid_field4' => array(
			'field' => 'nric',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label4' => array(
			'type' => 'grid_field_label',
			'field' => 'nric' 
		),
		'search_panel_field6' => array(
			'field' => 'nric',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'grid_field5' => array(
			'field' => 'custid',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label5' => array(
			'type' => 'grid_field_label',
			'field' => 'custid' 
		),
		'search_panel_field7' => array(
			'field' => 'custid',
			'type' => 'search_panel_field',
			'required' => false 
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