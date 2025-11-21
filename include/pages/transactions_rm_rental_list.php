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
		'viewInPopup' => true,
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
		'id' => array(
			'totalsType' => '' 
		),
		'category' => array(
			'totalsType' => '' 
		),
		'prop_type' => array(
			'totalsType' => '' 
		),
		'Prop_kind' => array(
			'totalsType' => '' 
		),
		'prop_name' => array(
			'totalsType' => '' 
		),
		'prop_address' => array(
			'totalsType' => '' 
		),
		'cea_reg' => array(
			'totalsType' => '' 
		),
		'land' => array(
			'totalsType' => '' 
		),
		'tenure' => array(
			'totalsType' => '' 
		),
		'lease_duration' => array(
			'totalsType' => '' 
		),
		'rental' => array(
			'totalsType' => '' 
		),
		'no_bedrooms' => array(
			'totalsType' => '' 
		),
		'no_bathrooms' => array(
			'totalsType' => '' 
		),
		'date' => array(
			'totalsType' => '' 
		),
		'rm_rental_rm_type' => array(
			'totalsType' => '' 
		),
		'built_up' => array(
			'totalsType' => '' 
		),
		'built_up_unit' => array(
			'totalsType' => '' 
		),
		'land_unit' => array(
			'totalsType' => '' 
		),
		'rm_builtup' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'date',
			'category',
			'prop_type',
			'Prop_kind',
			'prop_name',
			'rm_rental_rm_type' 
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
			'date' => array( 
				'simple_grid_field11',
				'tx_date' 
			),
			'category' => array( 
				'simple_grid_field14',
				'simple_grid_field4' 
			),
			'prop_type' => array( 
				'grid_field_label',
				'grid_field1' 
			),
			'Prop_kind' => array( 
				'grid_field2' 
			),
			'prop_name' => array( 
				'grid_field_label3',
				'grid_field3' 
			),
			'rm_rental_rm_type' => array( 
				'grid_field',
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
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'custom_button3',
					'custom_button4',
					'custom_button1',
					'text',
					'custom_button2',
					'details_found',
					'page_size',
					'snippet1' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'supertop' => array( 
					'logo',
					'menu',
					'list_options',
					'loginform_login',
					'username_button' 
				),
				'left' => array( 
					 
				),
				'top' => array( 
					 
				),
				'grid' => array( 
					'simple_grid_field11',
					'tx_date',
					'simple_grid_field14',
					'simple_grid_field4',
					'snippet',
					'grid_view',
					'grid_field_label',
					'grid_field1',
					'grid_field2',
					'grid_field_label3',
					'grid_field3',
					'grid_field_label1',
					'grid_field' 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					'pagination' 
				),
				'left' => array( 
					 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'custom_button3' => 'above-grid',
				'custom_button4' => 'above-grid',
				'custom_button1' => 'above-grid',
				'text' => 'above-grid',
				'custom_button2' => 'above-grid',
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'snippet1' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'supertop',
				'menu' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'simple_grid_field11' => 'grid',
				'tx_date' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field4' => 'grid',
				'snippet' => 'grid',
				'grid_view' => 'grid',
				'grid_field_label' => 'grid',
				'grid_field1' => 'grid',
				'grid_field2' => 'grid',
				'grid_field_label3' => 'grid',
				'grid_field3' => 'grid',
				'grid_field_label1' => 'grid',
				'grid_field' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'tx_date' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'snippet' => array(
					'location' => 'grid',
					'cellId' => 'footcell_field4' 
				),
				'grid_view' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'grid_field_label3' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'grid_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
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
			'details_found' => array( 
				'details_found' 
			),
			'page_size' => array( 
				'page_size' 
			),
			'pagination' => array( 
				'pagination' 
			),
			'grid_field_label' => array( 
				'simple_grid_field11',
				'simple_grid_field14',
				'grid_field_label',
				'grid_field_label3',
				'grid_field_label1' 
			),
			'grid_field' => array( 
				'tx_date',
				'simple_grid_field4',
				'grid_field1',
				'grid_field2',
				'grid_field3',
				'grid_field' 
			),
			'snippet' => array( 
				'snippet',
				'snippet1' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2',
				'-3' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'text' => array( 
				'text' 
			),
			'custom_button' => array( 
				'custom_button1',
				'custom_button2',
				'custom_button3',
				'custom_button4' 
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
					'headcell_field1' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'date_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							2 
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
					'headcell_field' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'prop_type_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'prop_name_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'rm_rental_rm_type_fieldheadercolumn' 
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
							'view_column' 
						),
						'items' => array( 
							'grid_view' 
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
							'date_fieldcolumn' 
						),
						'items' => array( 
							'tx_date' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							2 
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
					'cell_field' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'prop_type_fieldcolumn',
							'Prop_kind_fieldcolumn' 
						),
						'items' => array( 
							'grid_field1',
							'grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'prop_name_fieldcolumn' 
						),
						'items' => array( 
							'grid_field3' 
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
							'rm_rental_rm_type_fieldcolumn' 
						),
						'items' => array( 
							'grid_field' 
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
					'footcell_field4' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'snippet' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'footcell_field' => array(
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
					'footcell_field5' => array(
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
					'footcell_field2' => array(
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
					) 
				),
				'width' => 6,
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
			192505,
			192384,
			192329,
			192224 
		),
		'codeSnippets' => array( 
			192420,
			192417 
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
			192505,
			192384,
			192329,
			192224 
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
							'cell' => 'c2' 
						),
						array(
							'cell' => 'c' 
						) 
					),
					'section' => '' 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c3' 
						),
						array(
							'cell' => 'c4' 
						) 
					) 
				) 
			),
			'cells' => array(
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'custom_button3',
						'custom_button4',
						'custom_button1',
						'text',
						'custom_button2' 
					),
					'align' => 'left' 
				),
				'c' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size' 
					) 
				),
				'c3' => array(
					'model' => 'c2',
					'items' => array( 
						'snippet1' 
					),
					'align' => 'left' 
				),
				'c4' => array(
					'model' => 'c2',
					'items' => array( 
						 
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
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c1',
							'rowspan' => 1 
						) 
					) 
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
							'cell' => 'headcell_icons' 
						),
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'headcell_field' 
						),
						array(
							'cell' => 'headcell_field5' 
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
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field4' 
						),
						array(
							'cell' => 'cell_field' 
						),
						array(
							'cell' => 'cell_field5' 
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
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field4' 
						),
						array(
							'cell' => 'footcell_field' 
						),
						array(
							'cell' => 'footcell_field5' 
						),
						array(
							'cell' => 'footcell_field2' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'date',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'tx_date' 
					),
					'field' => 'date',
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
						'simple_grid_field14' 
					),
					'field' => 'category',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'category',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
					'items' => array( 
						'snippet' 
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
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label' 
					),
					'field' => 'prop_type',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1',
						'grid_field2' 
					),
					'orientation' => 'vertical',
					'field' => 'prop_type',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field5' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label3' 
					),
					'field' => 'prop_name',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field3' 
					),
					'field' => 'prop_name',
					'columnName' => 'field' 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label1' 
					),
					'field' => 'rm_rental_rm_type',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'field' => 'rm_rental_rm_type',
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
		'details_found' => array(
			'type' => 'details_found' 
		),
		'page_size' => array(
			'type' => 'page_size' 
		),
		'pagination' => array(
			'type' => 'pagination' 
		),
		'simple_grid_field11' => array(
			'type' => 'grid_field_label',
			'field' => 'date',
			'clickSort' => true 
		),
		'tx_date' => array(
			'field' => 'date',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'category',
			'clickSort' => true 
		),
		'simple_grid_field4' => array(
			'field' => 'category',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
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
		'grid_view' => array(
			'type' => 'grid_view',
			'popup' => true,
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none !important;
}
' 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'prop_type' 
		),
		'grid_field1' => array(
			'field' => 'prop_type',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field2' => array(
			'field' => 'Prop_kind',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
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
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'advsearch_link' 
			),
			'customCSS' => '/* Put  your custom CSS code here */

:host {
 display:none !important;
}

',
			'mobileControl' => '' 
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
		'-3' => array(
			'type' => '-' 
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
		'text' => array(
			'type' => 'text',
			'label' => array(
				'type' => 0,
				'text' => 'Room Rental' 
			),
			'editedByRte' => false,
			'font-size' => '18px',
			'padding' => array(
				'right' => '5px',
				'left' => '5px' 
			) 
		),
		'grid_field_label3' => array(
			'type' => 'grid_field_label',
			'field' => 'prop_name' 
		),
		'grid_field3' => array(
			'field' => 'prop_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'custom_button1' => array(
			'type' => 'custom_button',
			'eventId' => 'View_Rentals',
			'label' => array(
				'type' => 0,
				'text' => 'Rental' 
			),
			'buttonSize' => 'xtra-small',
			'background' => '#ef6c00',
			'eventGid' => 192505 
		),
		'custom_button2' => array(
			'type' => 'custom_button',
			'eventId' => 'View_Sales',
			'label' => array(
				'type' => 0,
				'text' => 'Sale' 
			),
			'buttonSize' => 'xtra-small',
			'background' => '#455a64',
			'eventGid' => 192384 
		),
		'custom_button3' => array(
			'type' => 'custom_button',
			'eventId' => 'View_JTC_Lease',
			'label' => array(
				'type' => 0,
				'text' => 'JTC Lease Mgmt' 
			),
			'buttonSize' => 'xtra-small',
			'background' => '#64b5f6',
			'eventGid' => 192329 
		),
		'custom_button4' => array(
			'type' => 'custom_button',
			'eventId' => 'View_Rental',
			'label' => array(
				'type' => 0,
				'text' => 'Property Mgmt' 
			),
			'buttonSize' => 'xtra-small',
			'background' => '#1976d2',
			'eventGid' => 192224 
		),
		'grid_field' => array(
			'field' => 'rm_rental_rm_type',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label1' => array(
			'type' => 'grid_field_label',
			'field' => 'rm_rental_rm_type',
			'label' => array(
				'field' => 'rm_rental_rm_type',
				'table' => 'transactions_rm_rental',
				'type' => 3 
			) 
		),
		'snippet1' => array(
			'type' => 'snippet',
			'eventId' => 'Click_date_view_details',
			'label' => array(
				'text' => 'Click date view details',
				'type' => 0 
			),
			'padding' => array(
				'left' => '30px' 
			),
			'color' => '#b7b7b7',
			'eventGid' => 192417 
		) 
	),
	'spreadsheetGrid' => false,
	'version' => 14,
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