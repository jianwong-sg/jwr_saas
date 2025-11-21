<?php
global $runnerTableSettings;
$runnerTableSettings['cpd_types'] = array(
	'name' => 'cpd_types',
	'shortName' => 'cpd_types',
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
	'tableOwnerIdField' => 'cpdtypeid',
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
			'index' => 3,
			'dir' => 'ASC',
			'field' => 'cpd_provider' 
		) 
	),
	'sql' => 'SELECT
cpdtypeid,
cpd_type,
cpd_provider,
cpd_activity,
cpd_hr
FROM cpd_types
ORDER BY cpd_provider',
	'keyFields' => array( 
		'cpdtypeid' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'cpdtypeid' => array(
			'name' => 'cpdtypeid',
			'goodName' => 'cpdtypeid',
			'strField' => 'cpdtypeid',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'cpdtypeid',
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
			'tableName' => 'cpd_types' 
		),
		'cpd_type' => array(
			'name' => 'cpd_type',
			'goodName' => 'cpd_type',
			'strField' => 'cpd_type',
			'index' => 2,
			'sqlExpression' => 'cpd_type',
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
			'tableName' => 'cpd_types' 
		),
		'cpd_provider' => array(
			'name' => 'cpd_provider',
			'goodName' => 'cpd_provider',
			'strField' => 'cpd_provider',
			'index' => 3,
			'sqlExpression' => 'cpd_provider',
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
			'tableName' => 'cpd_types' 
		),
		'cpd_activity' => array(
			'name' => 'cpd_activity',
			'goodName' => 'cpd_activity',
			'strField' => 'cpd_activity',
			'index' => 4,
			'sqlExpression' => 'cpd_activity',
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
					'textboxSize' => 400,
					'textHTML5Input' => '0',
					'lookupTable' => 'cpd_activities',
					'lookupLinkField' => 'activities',
					'lookupDisplayField' => 'activities',
					'lookupOrderBy' => 'activities',
					'lookupAllowAdd' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'cpd_provider',
							'lookupField' => 'provider' 
						) 
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
			'tableName' => 'cpd_types' 
		),
		'cpd_hr' => array(
			'name' => 'cpd_hr',
			'goodName' => 'cpd_hr',
			'strField' => 'cpd_hr',
			'index' => 5,
			'sqlExpression' => 'cpd_hr',
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
						'6' 
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
			'tableName' => 'cpd_types' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
cpdtypeid,
cpd_type,
cpd_provider,
cpd_activity,
cpd_hr
FROM cpd_types
ORDER BY cpd_provider',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'cpdtypeid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_types',
					'name' => 'cpdtypeid' 
				),
				'encrypted' => false,
				'columnName' => 'cpdtypeid' 
			),
			array(
				'sql' => 'cpd_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_types',
					'name' => 'cpd_type' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_type' 
			),
			array(
				'sql' => 'cpd_provider',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_types',
					'name' => 'cpd_provider' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_provider' 
			),
			array(
				'sql' => 'cpd_activity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_types',
					'name' => 'cpd_activity' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_activity' 
			),
			array(
				'sql' => 'cpd_hr',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_types',
					'name' => 'cpd_hr' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_hr' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'cpd_types',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'cpd_types',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'cpdtypeid',
						'cpd_type',
						'cpd_provider',
						'cpd_activity',
						'cpd_hr' 
					),
					'name' => 'cpd_types' 
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
				'sql' => 'cpd_provider',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_types',
					'name' => 'cpd_provider' 
				),
				'asc' => true,
				'columnNumber' => 3 
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
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => 0,
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
		'fieldListSql' => 'cpdtypeid,
cpd_type,
cpd_provider,
cpd_activity,
cpd_hr',
		'fromListSql' => 'FROM cpd_types',
		'orderBySql' => 'ORDER BY cpd_provider',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'cpd_types',
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
			'cpdtypeid',
			'cpd_type',
			'cpd_provider',
			'cpd_activity',
			'cpd_hr' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'cpdtypeid',
			'cpd_type',
			'cpd_provider',
			'cpd_activity',
			'cpd_hr' 
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
	$runnerTableLabels['cpd_types'] = array(
	'tableCaption' => 'CPD Types',
	'fieldLabels' => array(
		'cpdtypeid' => 'Cpdtypeid',
		'cpd_type' => 'CPD Type',
		'cpd_provider' => 'CPD Provider',
		'cpd_activity' => 'CPD Course Title',
		'cpd_hr' => 'CPD Hour' 
	),
	'fieldTooltips' => array(
		'cpdtypeid' => '',
		'cpd_type' => '',
		'cpd_provider' => '',
		'cpd_activity' => '',
		'cpd_hr' => '' 
	),
	'fieldPlaceholders' => array(
		'cpdtypeid' => '',
		'cpd_type' => '',
		'cpd_provider' => '',
		'cpd_activity' => '',
		'cpd_hr' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>