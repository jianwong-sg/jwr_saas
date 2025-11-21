<?php
global $runnerTableSettings;
$runnerTableSettings['cpd_activities'] = array(
	'name' => 'cpd_activities',
	'shortName' => 'cpd_activities',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'edit' => array( 
			'edit' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'list' => array( 
			'list' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search' 
	),
	'tableOwnerIdField' => 'cpdactivityid',
	'usersOwnerIdField' => 'user_id',
	'listAjax' => true,
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
			'index' => 1,
			'dir' => 'DESC',
			'field' => 'cpdactivityid' 
		),
		array(
			'index' => 2,
			'dir' => 'ASC',
			'field' => 'activities' 
		) 
	),
	'sql' => 'SELECT
cpdactivityid,
activities,
provider,
`type`,
`hour`
FROM cpd_activities
ORDER BY cpdactivityid DESC, activities',
	'keyFields' => array( 
		'cpdactivityid' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'cpdactivityid' => array(
			'name' => 'cpdactivityid',
			'goodName' => 'cpdactivityid',
			'strField' => 'cpdactivityid',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'cpdactivityid',
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
					'textHTML5Input' => '0',
					'lookupTableConnection' => 'Tables',
					'fileThumbnailSize' => 150,
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
			'tableName' => 'cpd_activities' 
		),
		'activities' => array(
			'name' => 'activities',
			'goodName' => 'activities',
			'strField' => 'activities',
			'index' => 2,
			'sqlExpression' => 'activities',
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
					'denyDuplicate' => true,
					'denyDuplicateMessage' => array(
						'text' => '%value% already exists',
						'type' => 0 
					),
					'textboxSize' => 400,
					'textHTML5Input' => '0',
					'lookupTable' => 'cpd_activities',
					'lookupLinkField' => 'activities',
					'lookupDisplayField' => 'activities',
					'lookupOrderBy' => 'activities',
					'fileThumbnailSize' => 150,
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
			'tableName' => 'cpd_activities' 
		),
		'provider' => array(
			'name' => 'provider',
			'goodName' => 'provider',
			'strField' => 'provider',
			'index' => 3,
			'sqlExpression' => 'provider',
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
					'format' => 'Lookup wizard',
					'required' => true,
					'textboxSize' => 250,
					'textHTML5Input' => '0',
					'lookupTable' => 'cpd_providers',
					'lookupLinkField' => 'provider',
					'lookupDisplayField' => 'provider',
					'lookupOrderBy' => 'provider',
					'lookupAllowAdd' => true,
					'fileThumbnailSize' => 150,
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
			'tableName' => 'cpd_activities' 
		),
		'type' => array(
			'name' => 'type',
			'goodName' => 'type',
			'strField' => 'type',
			'index' => 4,
			'sqlExpression' => '`type`',
			'uploadFolder' => '',
			'codeUploadFolderLang' => '',
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
					'format' => 'Lookup wizard',
					'required' => true,
					'textboxSize' => 100,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Core',
						'Non Core',
						'Misc' 
					),
					'fileThumbnailSize' => 150,
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
			'tableName' => 'cpd_activities' 
		),
		'hour' => array(
			'name' => 'hour',
			'goodName' => 'hour',
			'strField' => 'hour',
			'index' => 5,
			'sqlExpression' => '`hour`',
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
					'format' => 'Lookup wizard',
					'required' => true,
					'textboxSize' => 100,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'0',
						'1',
						'2',
						'3',
						'4',
						'5',
						'6',
						'7',
						'8',
						'9',
						'10',
						'11',
						'12' 
					),
					'fileThumbnailSize' => 150,
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
			'tableName' => 'cpd_activities' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
cpdactivityid,
activities,
provider,
`type`,
`hour`
FROM cpd_activities
ORDER BY cpdactivityid DESC, activities',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'cpdactivityid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_activities',
					'name' => 'cpdactivityid' 
				),
				'encrypted' => false,
				'columnName' => 'cpdactivityid' 
			),
			array(
				'sql' => 'activities',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_activities',
					'name' => 'activities' 
				),
				'encrypted' => false,
				'columnName' => 'activities' 
			),
			array(
				'sql' => 'provider',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_activities',
					'name' => 'provider' 
				),
				'encrypted' => false,
				'columnName' => 'provider' 
			),
			array(
				'sql' => '`type`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_activities',
					'name' => 'type' 
				),
				'encrypted' => false,
				'columnName' => 'type' 
			),
			array(
				'sql' => '`hour`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_activities',
					'name' => 'hour' 
				),
				'encrypted' => false,
				'columnName' => 'hour' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'cpd_activities',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'cpd_activities',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'cpdactivityid',
						'activities',
						'provider',
						'type',
						'hour' 
					),
					'name' => 'cpd_activities' 
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
				'sql' => 'cpdactivityid DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_activities',
					'name' => 'cpdactivityid' 
				),
				'asc' => false,
				'columnNumber' => 1 
			),
			array(
				'sql' => 'activities',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_activities',
					'name' => 'activities' 
				),
				'asc' => true,
				'columnNumber' => 2 
			) 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => 0,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => 1,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'cpdactivityid,
activities,
provider,
`type`,
`hour`',
		'fromListSql' => 'FROM cpd_activities',
		'orderBySql' => 'ORDER BY cpdactivityid DESC, activities',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'cpd_activities',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'edit' => array( 
			'edit' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'list' => array( 
			'list' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'cpdactivityid',
			'activities',
			'provider',
			'type',
			'hour' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'cpdactivityid',
			'activities',
			'provider',
			'type',
			'hour' 
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
	$runnerTableLabels['cpd_activities'] = array(
	'tableCaption' => 'CPD Activities',
	'fieldLabels' => array(
		'cpdactivityid' => 'Cpdactivityid',
		'activities' => 'Course Title',
		'provider' => 'Course Provider',
		'type' => 'Type',
		'hour' => 'CPD Hour' 
	),
	'fieldTooltips' => array(
		'cpdactivityid' => '',
		'activities' => '',
		'provider' => '',
		'type' => '',
		'hour' => '' 
	),
	'fieldPlaceholders' => array(
		'cpdactivityid' => '',
		'activities' => '',
		'provider' => '',
		'type' => '',
		'hour' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>