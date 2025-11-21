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
					'chart',
					'text1' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				),
				'below-grid' => array( 
					 
				),
				'left' => array( 
					 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'logo' => 'supertop',
				'menu' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'chart' => 'grid',
				'text1' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'username_button' => 3,
				'loginform_login' => 3,
				'list_options' => 3 
			) 
		),
		'itemsByType' => array(
			'chart' => array( 
				'chart' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
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
			'list_options' => array( 
				'list_options' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'text' => array( 
				'text1' 
			) 
		),
		'cellMaps' => array(
			 
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
				'horizontal' => true 
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
	'id' => 'chart',
	'type' => 'chart',
	'layoutId' => 'topbar',
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
		'supertop' => array(
			'modelId' => 'topbar-chart',
			'grid' => array( 
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
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'logo',
						'menu',
						'list_options',
						'loginform_login',
						'username_button' 
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
			'modelId' => 'chart-grid',
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
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c' 
						) 
					) 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'chart' 
					) 
				),
				'c' => array(
					'model' => 'c1',
					'items' => array( 
						'text1' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'chart' => array(
			'type' => 'chart',
			'table' => 202565,
			'icon' => array(
				'glyph' => 'signal' 
			),
			'height' => '400px',
			'width' => '',
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  margin-top:-80px;
}
' 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
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
			'type' => 'loginform_login' 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				 
			) 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'text1' => array(
			'type' => 'text',
			'label' => array(
				'text' => '<iframe width="100%" height="1000" src="https://jwrealty.sg/jweat10913/transactions_pub_chart.php" scrolling="yes" allowfullscreen="allowfullscreen"></iframe>',
				'type' => 0 
			),
			'editedByRte' => false,
			'customCSS' => '/* Put  your custom CSS code here */

' 
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