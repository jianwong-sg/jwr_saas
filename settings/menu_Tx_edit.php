<?php
global $runnerMenus;
$runnerMenus['Tx_edit'] = array(
	'name' => 'Tx_edit',
	'id' => 'Tx_edit',
	'treeLike' => false,
	'root' => array(
		'id' => '',
		'parent' => '',
		'children' => array( 
			array(
				'id' => '1',
				'parent' => '0',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'text' => 'Transaction Info',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => 'font-size: small;
font-weight: 600;',
					'href' => '#transaction_info',
					'params' => 'editid1=".$_SESSION[\'id\']."&#tx_info',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 1,
					'iconName' => 'planner.png',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'pageType' => 'edit',
					'table' => 201085 
				) 
			),
			array(
				'id' => '2',
				'parent' => '0',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'text' => 'Property Info',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => 'font-size: small;
font-weight: 600;',
					'href' => '#property_info',
					'params' => 'editid1=".$_SESSION[\'id\']."&#prop_info',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 1,
					'iconName' => 'yard-sale.png',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'pageType' => 'edit',
					'table' => 201085 
				) 
			),
			array(
				'id' => '3',
				'parent' => '0',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'text' => 'Party Involved',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => 'font-size: small;
font-weight: 600;',
					'href' => '#parties_involved',
					'params' => 'editid1=".$_SESSION[\'id\']."&#parties_involved',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 1,
					'iconName' => 'commercial-development-management.png',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'pageType' => 'edit',
					'table' => 201085 
				) 
			),
			array(
				'id' => '4',
				'parent' => '0',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'text' => 'Customer Due Diligence',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => 'font-size: small;
font-weight: 600;',
					'href' => '#cdd',
					'params' => 'editid1=".$_SESSION[\'id\']."&#cdd',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 1,
					'iconName' => 'high-priority.png',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'pageType' => 'edit',
					'table' => 201085 
				) 
			),
			array(
				'id' => '5',
				'parent' => '0',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'text' => 'CEA Prescribed Forms',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => 'font-size: small;
font-weight: 600;',
					'href' => '#cea_forms',
					'params' => 'editid1=".$_SESSION[\'id\']."&#cea_forms',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 1,
					'iconName' => 'documents.png',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'pageType' => 'edit',
					'table' => 201085 
				) 
			),
			array(
				'id' => '6',
				'parent' => '0',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'text' => 'Docs Upload',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => 'font-size: small;
font-weight: 600;',
					'href' => '#doc_upload',
					'params' => 'editid1=".$_SESSION[\'id\']."&#docs_upload',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 1,
					'iconName' => 'upload-2.png',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'pageType' => 'edit',
					'table' => 201085 
				) 
			),
			array(
				'id' => '7',
				'parent' => '0',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'text' => 'Commission',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => 'font-size: small;
font-weight: 600;',
					'href' => 'mypage.htm',
					'params' => 'editid1=".$_SESSION[\'id\']."&#comm',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 1,
					'iconName' => 'coins.png',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'pageType' => 'edit',
					'table' => 201085 
				) 
			) 
		),
		'data' => array(
			'name' => array(
				'text' => '',
				'type' => 0 
			),
			'comments' => array(
				'text' => '',
				'type' => 0 
			),
			'style' => '',
			'href' => '',
			'params' => '',
			'pageId' => '',
			'itemType' => 0,
			'linkType' => 2,
			'openType' => 0,
			'iconType' => 0,
			'iconName' => '',
			'iconStyle' => 0,
			'showIconType' => 1,
			'linkToAnotherApp' => false 
		) 
	) 
);
?>