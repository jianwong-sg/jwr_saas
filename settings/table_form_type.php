<?php
global $runnerTableSettings;
$runnerTableSettings['form_type'] = array(
	'name' => 'form_type',
	'shortName' => 'form_type',
	'pagesByType' => array(
		'list' => array( 
			'list' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'list' => 'list',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'list' => 'list',
		'search' => 'search' 
	),
	'tableOwnerIdField' => 'id',
	'usersOwnerIdField' => 'user_id',
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
	'sql' => 'SELECT
	form_id,
	form_title,
	id
FROM form_type',
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
		'form_id' => array(
			'name' => 'form_id',
			'goodName' => 'form_id',
			'strField' => 'form_id',
			'index' => 1,
			'type' => 3,
			'sqlExpression' => 'form_id',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
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
					'fileThumbnailSize' => 150,
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
			'tableName' => 'form_type' 
		),
		'form_title' => array(
			'name' => 'form_title',
			'goodName' => 'form_title',
			'strField' => 'form_title',
			'index' => 2,
			'sqlExpression' => 'form_title',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
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
			'tableName' => 'form_type' 
		),
		'id' => array(
			'name' => 'id',
			'goodName' => 'id',
			'strField' => 'id',
			'index' => 3,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
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
					'fileThumbnailSize' => 150,
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
			'tableName' => 'form_type' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	form_id,
	form_title,
	id
FROM form_type',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'form_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'form_type',
					'name' => 'form_id' 
				),
				'encrypted' => false,
				'columnName' => 'form_id' 
			),
			array(
				'sql' => 'form_title',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'form_type',
					'name' => 'form_title' 
				),
				'encrypted' => false,
				'columnName' => 'form_title' 
			),
			array(
				'sql' => 'id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'form_type',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'form_type',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'form_type',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'form_title',
						'form_id' 
					),
					'name' => 'form_type' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'form_id,
	form_title,
	id',
		'fromListSql' => 'FROM form_type',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'form_type',
	'originalPagesByType' => array(
		'list' => array( 
			'list' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'list' => 'list',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'list' => 'list',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'form_id',
			'form_title',
			'id' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'form_id',
			'form_title',
			'id' 
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
	$runnerTableLabels['form_type'] = array(
	'tableCaption' => 'Form Type',
	'fieldLabels' => array(
		'form_id' => 'Form Id',
		'form_title' => 'Form Title',
		'id' => 'Id' 
	),
	'fieldTooltips' => array(
		'form_id' => '',
		'form_title' => '',
		'id' => '' 
	),
	'fieldPlaceholders' => array(
		'form_id' => '',
		'form_title' => '',
		'id' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>