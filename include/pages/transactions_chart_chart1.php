<?php
			$optionsArray = array(
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => false,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'filterFields' => array( 
			 
		),
		'fieldItems' => array(
			 
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
					 
				),
				'below-grid' => array( 
					 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'menu' 
				),
				'supertop' => array( 
					'expand_menu_button',
					'collapse_button',
					'simple_search',
					'list_options',
					'loginform_login',
					'username_button' 
				),
				'grid' => array( 
					'chart' 
				),
				'top' => array( 
					 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				),
				'below-grid' => array( 
					 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'logo' => 'left',
				'expand_button' => 'left',
				'menu' => 'left',
				'expand_menu_button' => 'supertop',
				'collapse_button' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'chart' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'expand_menu_button' => 2,
				'expand_button' => 5 
			) 
		),
		'itemsByType' => array(
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'simple_search' => array( 
				'simple_search' 
			),
			'list_options' => array( 
				'list_options' 
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
			'chart' => array( 
				'chart' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
	),
	'page' => array(
		'verticalBar' => true,
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
			array(
				'id' => 'main',
				'horizontal' => false 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => true 
	),
	'chart' => array(
		'chartCount' => 1 
	),
	'misc' => array(
		'type' => 'chart',
		'breadcrumb' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'chart1',
	'type' => 'chart',
	'layoutId' => 'leftbar',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'empty-above-grid',
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
		'below-grid' => array(
			'modelId' => 'empty-above-grid',
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
		'left' => array(
			'modelId' => 'leftbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c0' 
						) 
					),
					'section' => '' 
				),
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
				'c0' => array(
					'model' => 'c0',
					'items' => array( 
						'logo',
						'expand_button' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'menu' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'leftbar-top-chart',
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
						'expand_menu_button',
						'collapse_button' 
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
		'grid' => array(
			'modelId' => 'chart-grid',
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
						'chart' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'list-sidebar-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
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
		'simple_search' => array(
			'type' => 'simple_search',
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
' 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
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
		'chart' => array(
			'type' => 'chart',
			'table' => 192726,
			'icon' => array(
				'glyph' => 'signal' 
			) 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button',
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none !important;
}
' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button',
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none !important;
}
' 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
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