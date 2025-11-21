<?php
global $runnerTableSettings;
$runnerTableSettings['eat_user_subscriptions'] = array(
	'name' => 'eat_user_subscriptions',
	'shortName' => 'eat_user_subscriptions',
	'pagesByType' => array(
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'tableOwnerIdField' => 'user_sub_id',
	'usersOwnerIdField' => 'user_id',
	'hasEncryptedFields' => true,
	'detailsBadgeColor' => 'D2AF80',
	'pageSizeSelectorRecords' => array( 
		'10',
		'20',
		'30',
		'50',
		'100',
		'500',
		'-1' 
	),
	'pageSizeSelectorGroups' => array( 
		'1',
		'3',
		'5',
		'10',
		'50',
		'100',
		'-1' 
	),
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	user_sub_id,
	agency_cea_reg,
	agency,
	company_dbname,
	expiry_date,
	renew_date,
	signup_date,
	subscription_type
FROM eat_user_subscriptions',
	'keyFields' => array( 
		'user_sub_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'user_sub_id' => array(
			'name' => 'user_sub_id',
			'goodName' => 'user_sub_id',
			'strField' => 'user_sub_id',
			'sourceSingle' => 'user_sub_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'user_sub_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'eat_user_subscriptions' 
		),
		'agency_cea_reg' => array(
			'name' => 'agency_cea_reg',
			'goodName' => 'agency_cea_reg',
			'strField' => 'agency_cea_reg',
			'sourceSingle' => 'agency_cea_reg',
			'index' => 2,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'agency_cea_reg',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'eat_user_subscriptions' 
		),
		'agency' => array(
			'name' => 'agency',
			'goodName' => 'agency',
			'strField' => 'agency',
			'sourceSingle' => 'agency',
			'index' => 3,
			'sqlExpression' => 'agency',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'eat_user_subscriptions' 
		),
		'company_dbname' => array(
			'name' => 'company_dbname',
			'goodName' => 'company_dbname',
			'strField' => 'company_dbname',
			'sourceSingle' => 'company_dbname',
			'index' => 4,
			'sqlExpression' => 'company_dbname',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'eat_user_subscriptions' 
		),
		'expiry_date' => array(
			'name' => 'expiry_date',
			'goodName' => 'expiry_date',
			'strField' => 'expiry_date',
			'sourceSingle' => 'expiry_date',
			'index' => 5,
			'type' => 7,
			'sqlExpression' => 'expiry_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 2,
					'dateFirstYearFactor' => 5,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'eat_user_subscriptions' 
		),
		'renew_date' => array(
			'name' => 'renew_date',
			'goodName' => 'renew_date',
			'strField' => 'renew_date',
			'sourceSingle' => 'renew_date',
			'index' => 6,
			'type' => 7,
			'sqlExpression' => 'renew_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 2,
					'dateFirstYearFactor' => 5,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'eat_user_subscriptions' 
		),
		'signup_date' => array(
			'name' => 'signup_date',
			'goodName' => 'signup_date',
			'strField' => 'signup_date',
			'sourceSingle' => 'signup_date',
			'index' => 7,
			'type' => 7,
			'sqlExpression' => 'signup_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 2,
					'dateFirstYearFactor' => 5,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'eat_user_subscriptions' 
		),
		'subscription_type' => array(
			'name' => 'subscription_type',
			'goodName' => 'subscription_type',
			'strField' => 'subscription_type',
			'sourceSingle' => 'subscription_type',
			'index' => 8,
			'sqlExpression' => 'subscription_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'eat_user_subscriptions' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	user_sub_id,
	agency_cea_reg,
	agency,
	company_dbname,
	expiry_date,
	renew_date,
	signup_date,
	subscription_type
FROM eat_user_subscriptions',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'user_sub_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_user_subscriptions',
					'name' => 'user_sub_id' 
				),
				'encrypted' => false,
				'columnName' => 'user_sub_id' 
			),
			array(
				'sql' => 'agency_cea_reg',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_user_subscriptions',
					'name' => 'agency_cea_reg' 
				),
				'encrypted' => true,
				'columnName' => 'agency_cea_reg' 
			),
			array(
				'sql' => 'agency',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_user_subscriptions',
					'name' => 'agency' 
				),
				'encrypted' => false,
				'columnName' => 'agency' 
			),
			array(
				'sql' => 'company_dbname',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_user_subscriptions',
					'name' => 'company_dbname' 
				),
				'encrypted' => false,
				'columnName' => 'company_dbname' 
			),
			array(
				'sql' => 'expiry_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_user_subscriptions',
					'name' => 'expiry_date' 
				),
				'encrypted' => false,
				'columnName' => 'expiry_date' 
			),
			array(
				'sql' => 'renew_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_user_subscriptions',
					'name' => 'renew_date' 
				),
				'encrypted' => false,
				'columnName' => 'renew_date' 
			),
			array(
				'sql' => 'signup_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_user_subscriptions',
					'name' => 'signup_date' 
				),
				'encrypted' => false,
				'columnName' => 'signup_date' 
			),
			array(
				'sql' => 'subscription_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_user_subscriptions',
					'name' => 'subscription_type' 
				),
				'encrypted' => false,
				'columnName' => 'subscription_type' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'eat_user_subscriptions',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'eat_user_subscriptions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'user_sub_id',
						'agency_cea_reg',
						'agency',
						'company_dbname',
						'expiry_date',
						'renew_date',
						'signup_date',
						'subscription_type' 
					),
					'name' => 'eat_user_subscriptions' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'link' => 0 
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'user_sub_id,
	agency_cea_reg,
	agency,
	company_dbname,
	expiry_date,
	renew_date,
	signup_date,
	subscription_type',
		'fromListSql' => 'FROM eat_user_subscriptions',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'eat_user_subscriptions',
	'originalPagesByType' => array(
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'user_sub_id',
			'agency_cea_reg',
			'agency',
			'company_dbname',
			'expiry_date',
			'renew_date',
			'signup_date',
			'subscription_type' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'user_sub_id',
			'agency_cea_reg',
			'agency',
			'company_dbname',
			'expiry_date',
			'renew_date',
			'signup_date',
			'subscription_type' 
		) 
	),
	'connId' => 'jwresourjweat1091saasatjwrealt',
	'sortByFields' => array(
		'sortOrder' => array( 
			 
		) 
	),
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels['eat_user_subscriptions'] = array(
	'tableCaption' => 'Eat User Subscriptions',
	'fieldLabels' => array(
		'user_sub_id' => 'ID',
		'agency_cea_reg' => 'EA CEA #',
		'agency' => 'Estate Agent',
		'company_dbname' => 'DB name',
		'expiry_date' => 'Expiry Date',
		'renew_date' => 'Renew Date',
		'signup_date' => 'Signup Date',
		'subscription_type' => 'Subscription Type' 
	),
	'fieldTooltips' => array(
		'user_sub_id' => '',
		'agency_cea_reg' => '',
		'agency' => '',
		'company_dbname' => '',
		'expiry_date' => '',
		'renew_date' => '',
		'signup_date' => '',
		'subscription_type' => '' 
	),
	'fieldPlaceholders' => array(
		'user_sub_id' => '',
		'agency_cea_reg' => '',
		'agency' => '',
		'company_dbname' => '',
		'expiry_date' => '',
		'renew_date' => '',
		'signup_date' => '',
		'subscription_type' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>