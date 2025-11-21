<?php
global $runnerTableSettings;
$runnerTableSettings['cpd_records'] = array(
	'name' => 'cpd_records',
	'shortName' => 'cpd_records',
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'list' => array( 
			'list',
			'list1' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view',
			'view1' 
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'list1' => 'list',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search',
		'view' => 'view',
		'view1' => 'view' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list1',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search',
		'view' => 'view1' 
	),
	'tableOwnerIdField' => 'id',
	'usersOwnerIdField' => 'username',
	'detailsBadgeColor' => '4169E1',
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
	'orderInfo' => array( 
		array(
			'index' => 2,
			'dir' => 'DESC',
			'field' => 'cpd_window' 
		) 
	),
	'sql' => 'SELECT
id,
cpd_window,
cpd_hour
FROM cpd_records
ORDER BY cpd_window DESC',
	'keyFields' => array( 
		'id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'goodName' => 'id',
			'strField' => 'id',
			'sourceSingle' => 'id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
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
			'tableName' => 'cpd_records' 
		),
		'cpd_window' => array(
			'name' => 'cpd_window',
			'goodName' => 'cpd_window',
			'strField' => 'cpd_window',
			'sourceSingle' => 'cpd_window',
			'index' => 2,
			'sqlExpression' => 'cpd_window',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'cpd_period',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'period',
					'lookupDisplayField' => 'period',
					'lookupAllowAdd' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_records' 
		),
		'cpd_hour' => array(
			'name' => 'cpd_hour',
			'goodName' => 'cpd_hour',
			'strField' => 'cpd_hour',
			'sourceSingle' => 'cpd_hour',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'cpd_hour',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'cpd_records' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
id,
cpd_window,
cpd_hour
FROM cpd_records
ORDER BY cpd_window DESC',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_records',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'cpd_window',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_records',
					'name' => 'cpd_window' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_window' 
			),
			array(
				'sql' => 'cpd_hour',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_records',
					'name' => 'cpd_hour' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_hour' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'cpd_records',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'cpd_records',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'cpd_window',
						'cea_reg',
						'salesperson_name',
						'cpd_hour' 
					),
					'name' => 'cpd_records' 
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
			array(
				'sql' => 'cpd_window DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_records',
					'name' => 'cpd_window' 
				),
				'asc' => false,
				'columnNumber' => 2 
			) 
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
				'orderByIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
cpd_window,
cpd_hour',
		'fromListSql' => 'FROM cpd_records',
		'orderBySql' => 'ORDER BY cpd_window DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'cpd_records',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'list' => array( 
			'list',
			'list1' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view',
			'view1' 
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'list1' => 'list',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search',
		'view' => 'view',
		'view1' => 'view' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list1',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search',
		'view' => 'view1' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'cpd_window',
			'cpd_hour' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			 
		) 
	),
	'connId' => 'Tables',
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
	$runnerTableLabels['cpd_records'] = array(
	'tableCaption' => 'My CPD',
	'fieldLabels' => array(
		'id' => 'Id',
		'cpd_window' => 'CPD Window',
		'cpd_hour' => 'Total CPD Hr' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'cpd_window' => '',
		'cpd_hour' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'cpd_window' => '',
		'cpd_hour' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>