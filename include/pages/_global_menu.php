<?php
			$optionsArray = array(
	'welcome' => array(
		'welcomePageSkip' => true,
		'welcomeItems' => array(
			'logo' => array(
				'menutItem' => false 
			),
			'menu' => array(
				'menutItem' => false 
			),
			'loginform_login' => array(
				'menutItem' => false 
			),
			'username_button' => array(
				'menutItem' => false 
			),
			'transactions_item' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'transactions',
				'page' => 'list' 
			),
			'properties_item' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'properties',
				'page' => 'list' 
			),
			'welcome_item' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'invcustomers',
				'page' => 'list',
				'pageId' => 'list1' 
			),
			'welcome_item2' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'lease_due',
				'page' => 'list' 
			),
			'welcome_item7' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'cdd_checklist1',
				'page' => 'list' 
			),
			'commissions_group' => array(
				'menutItem' => true,
				'group' => true,
				'items' => array(
					'welcome_item3' => array(
						'menutItem' => true,
						'group' => false,
						'linkType' => 0,
						'items' => null,
						'table' => 'cobroke_external_comm',
						'page' => 'list' 
					),
					'welcome_item4' => array(
						'menutItem' => true,
						'group' => false,
						'linkType' => 0,
						'items' => null,
						'table' => 'cobroke_internal_comm',
						'page' => 'list' 
					),
					'welcome_item5' => array(
						'menutItem' => true,
						'group' => false,
						'linkType' => 0,
						'items' => null,
						'table' => 'external_party_comm',
						'page' => 'list' 
					) 
				) 
			) 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			 
		) 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'supertop' => array( 
					'logo',
					'menu',
					'loginform_login',
					'username_button' 
				),
				'grid' => array( 
					'transactions_item',
					'properties_item',
					'welcome_item',
					'welcome_item2',
					'welcome_item7',
					'commissions_group' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'logo' => 'supertop',
				'menu' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'transactions_item' => 'grid',
				'properties_item' => 'grid',
				'welcome_item' => 'grid',
				'welcome_item2' => 'grid',
				'welcome_item7' => 'grid',
				'commissions_group' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'username_button' => 3,
				'loginform_login' => 3 
			) 
		),
		'itemsByType' => array(
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
			'logout_link' => array( 
				'logout_link' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'welcome_item' => array( 
				'welcome_item2',
				'transactions_item',
				'properties_item',
				'welcome_item',
				'welcome_item7',
				'welcome_item3',
				'welcome_item4',
				'welcome_item5' 
			),
			'welcome_group' => array( 
				'commissions_group' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
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
		'hasCharts' => false 
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
	'id' => 'menu',
	'type' => 'menu',
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
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'menu-topbar-menu',
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
			'modelId' => 'welcome',
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
						'transactions_item',
						'properties_item',
						'welcome_item',
						'welcome_item2',
						'welcome_item7',
						'commissions_group' 
					) 
				),
				'c' => array(
					'model' => 'c1',
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
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu',
			'menuId' => 'main' 
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
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'welcome_item2' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'lease_due',
			'linkPage' => 'list',
			'linkText' => array(
				'type' => 0,
				'text' => 'Upcoming lease expirations' 
			),
			'linkIcon' => null,
			'linkCSS' => '',
			'linkComments' => array(
				'text' => 'Records of lease expiring in the next 60 days',
				'type' => 0 
			),
			'linkParams' => '',
			'background' => '#FFAD5B',
			'linkType' => 0 
		),
		'commissions_group' => array(
			'type' => 'welcome_group',
			'linkText' => array(
				'type' => 0,
				'text' => 'Co-Broke' 
			),
			'linkIcon' => array(
				'file' => 'coins.png' 
			),
			'linkCSS' => '',
			'linkComments' => array(
				'text' => '',
				'type' => 0 
			),
			'items' => array( 
				'welcome_item3',
				'welcome_item4',
				'welcome_item5' 
			),
			'background' => 'transparent',
			'customCSS' => '/* Put  your custom CSS code here */
/*
:host {
  border: 1px solid blue;
}
*/' 
		),
		'transactions_item' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'transactions',
			'linkPage' => 'list',
			'linkText' => array(
				'text' => 'Transactions',
				'type' => 0 
			),
			'linkIcon' => array(
				'glyph' => '' 
			),
			'linkCSS' => '',
			'linkComments' => array(
				'text' => 'To Add and Update of property transactions',
				'type' => 0 
			),
			'linkParams' => '',
			'background' => '#3CB371',
			'linkType' => 0 
		),
		'properties_item' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'properties',
			'linkPage' => 'list',
			'linkText' => array(
				'text' => 'Properties',
				'type' => 0 
			),
			'linkIcon' => array(
				'glyph' => '' 
			),
			'linkCSS' => '',
			'linkComments' => array(
				'text' => 'Information of all properties dealing',
				'type' => 0 
			),
			'linkParams' => '',
			'background' => '#D2B48C',
			'linkType' => 0 
		),
		'welcome_item' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'invcustomers',
			'linkPage' => 'list',
			'background' => '#E8926F',
			'linkType' => 0,
			'linkComments' => array(
				'type' => 0,
				'text' => 'Contact includes clients, salesperson, vendors & etc.' 
			),
			'linkPageId' => 'list1' 
		),
		'welcome_item7' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'cdd_checklist1',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'cdd_checklist1',
				'type' => 6 
			),
			'background' => '#2F4F4F',
			'linkType' => 0,
			'linkComments' => array(
				'type' => 0,
				'text' => 'Records of customer CDD checklists' 
			) 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'welcome_item3' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'cobroke_external_comm',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'cobroke_external_comm',
				'type' => 6 
			),
			'background' => '#9ACD32',
			'linkType' => 0,
			'linkIcon' => array(
				 
			) 
		),
		'welcome_item4' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'cobroke_internal_comm',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'cobroke_internal_comm',
				'type' => 6 
			),
			'background' => '#E67349',
			'linkType' => 0 
		),
		'welcome_item5' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'external_party_comm',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'external_party_comm',
				'type' => 6 
			),
			'background' => '#BC8F8F',
			'linkType' => 0 
		) 
	),
	'version' => 14,
	'pageAlign' => 'left',
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