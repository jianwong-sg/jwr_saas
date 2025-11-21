<?php
global $runnerTableSettings;
$runnerTableSettings['hdb_towns'] = array(
	'name' => 'hdb_towns',
	'shortName' => 'hdb_towns',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'list' => array( 
			'list' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'list' => 'list' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'list' => 'list' 
	),
	'tableOwnerIdField' => 'id',
	'usersOwnerIdField' => 'user_id',
	'afterEditAction' => 0,
	'afterAddAction' => 0,
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
	'orderInfo' => array( 
		array(
			'index' => 2,
			'dir' => 'ASC',
			'field' => 'towns' 
		) 
	),
	'sql' => 'SELECT
id,
towns
FROM hdb_towns
ORDER BY towns',
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
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
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
					'textHTML5Input' => '1',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'searchOptions' => array( 
				'Contains',
				'Equals',
				'Starts with',
				'More than',
				'Less than',
				'Between',
				'Empty',
				'NOT Contains',
				'NOT Equals',
				'NOT Starts with',
				'NOT More than',
				'NOT Less than',
				'NOT Between',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'hdb_towns' 
		),
		'towns' => array(
			'name' => 'towns',
			'goodName' => 'towns',
			'strField' => 'towns',
			'index' => 2,
			'sqlExpression' => 'towns',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'denyDuplicate' => true,
					'denyDuplicateMessage' => array(
						'text' => '%value% already exists',
						'type' => 0 
					),
					'textboxSize' => 150,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'searchOptions' => array( 
				'Contains',
				'Equals',
				'Starts with',
				'More than',
				'Less than',
				'Between',
				'Empty',
				'NOT Contains',
				'NOT Equals',
				'NOT Starts with',
				'NOT More than',
				'NOT Less than',
				'NOT Between',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'hdb_towns' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
id,
towns
FROM hdb_towns
ORDER BY towns',
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
					'table' => 'hdb_towns',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'towns',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'hdb_towns',
					'name' => 'towns' 
				),
				'encrypted' => false,
				'columnName' => 'towns' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'hdb_towns',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'hdb_towns',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'towns' 
					),
					'name' => 'hdb_towns' 
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
				'sql' => 'towns',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'hdb_towns',
					'name' => 'towns' 
				),
				'asc' => true,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
towns',
		'fromListSql' => 'FROM hdb_towns',
		'orderBySql' => 'ORDER BY towns',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'hdb_towns',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'list' => array( 
			'list' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'list' => 'list' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'list' => 'list' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'towns' 
		),
		'searchSuggest' => false,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'towns' 
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
	$runnerTableLabels['hdb_towns'] = array(
	'tableCaption' => 'HDB Towns',
	'fieldLabels' => array(
		'id' => 'ID',
		'towns' => 'Towns' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'towns' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'towns' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>