<?php
global $runnerTableSettings;
$runnerTableSettings['cpd_hours'] = array(
	'name' => 'cpd_hours',
	'shortName' => 'cpd_hours',
	'pagesByType' => array(
		'add' => array( 
			'add' 
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
		'list' => 'list',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'list' => 'list',
		'search' => 'search' 
	),
	'tableOwnerIdField' => 'cpdhourid',
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
	'sql' => 'SELECT
	cpd_activity,
	cpd_hour,
	cpd_provider,
	cpd_type,
	cpdhourid
FROM cpd_hours',
	'keyFields' => array( 
		'cpdhourid' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'cpd_activity' => array(
			'name' => 'cpd_activity',
			'goodName' => 'cpd_activity',
			'strField' => 'cpd_activity',
			'index' => 1,
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cpd_hours' 
		),
		'cpd_hour' => array(
			'name' => 'cpd_hour',
			'goodName' => 'cpd_hour',
			'strField' => 'cpd_hour',
			'index' => 2,
			'sqlExpression' => 'cpd_hour',
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
					'textboxSize' => 90,
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
					'lookupTable' => 'cpd_hours',
					'lookupDisplayField' => 'cpd_hour',
					'lookupCustomDisplay' => true,
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
			'tableName' => 'cpd_hours' 
		),
		'cpd_provider' => array(
			'name' => 'cpd_provider',
			'goodName' => 'cpd_provider',
			'strField' => 'cpd_provider',
			'index' => 3,
			'sqlExpression' => 'cpd_provider',
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
					'textHTML5Input' => '0',
					'lookupTable' => 'cpd_providers',
					'lookupLinkField' => 'provider',
					'lookupDisplayField' => 'provider',
					'lookupOrderBy' => 'provider',
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
			'tableName' => 'cpd_hours' 
		),
		'cpd_type' => array(
			'name' => 'cpd_type',
			'goodName' => 'cpd_type',
			'strField' => 'cpd_type',
			'index' => 4,
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
					'textHTML5Input' => '0',
					'lookupTable' => 'cpd_types',
					'lookupLinkField' => 'cpd_type',
					'lookupDisplayField' => 'cpd_type',
					'lookupOrderBy' => 'cpd_type',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'cpd_activity',
							'lookupField' => 'cpd_activity' 
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
			'tableName' => 'cpd_hours' 
		),
		'cpdhourid' => array(
			'name' => 'cpdhourid',
			'goodName' => 'cpdhourid',
			'strField' => 'cpdhourid',
			'index' => 5,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'cpdhourid',
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
			'tableName' => 'cpd_hours' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	cpd_activity,
	cpd_hour,
	cpd_provider,
	cpd_type,
	cpdhourid
FROM cpd_hours',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'cpd_activity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_hours',
					'name' => 'cpd_activity' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_activity' 
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
					'table' => 'cpd_hours',
					'name' => 'cpd_hour' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_hour' 
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
					'table' => 'cpd_hours',
					'name' => 'cpd_provider' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_provider' 
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
					'table' => 'cpd_hours',
					'name' => 'cpd_type' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_type' 
			),
			array(
				'sql' => 'cpdhourid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_hours',
					'name' => 'cpdhourid' 
				),
				'encrypted' => false,
				'columnName' => 'cpdhourid' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'cpd_hours',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'cpd_hours',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'cpdhourid',
						'cpd_activity',
						'cpd_hour',
						'cpd_provider',
						'cpd_type' 
					),
					'name' => 'cpd_hours' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'cpd_activity,
	cpd_hour,
	cpd_provider,
	cpd_type,
	cpdhourid',
		'fromListSql' => 'FROM cpd_hours',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'cpd_hours',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
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
		'list' => 'list',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'list' => 'list',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'cpd_activity',
			'cpd_hour',
			'cpd_provider',
			'cpd_type',
			'cpdhourid' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'cpd_activity',
			'cpd_hour',
			'cpd_provider',
			'cpd_type',
			'cpdhourid' 
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
	$runnerTableLabels['cpd_hours'] = array(
	'tableCaption' => 'CPD Hours',
	'fieldLabels' => array(
		'cpd_activity' => 'Course Title',
		'cpd_hour' => 'CPD Hour',
		'cpd_provider' => 'CPD Provider',
		'cpd_type' => 'CPD Type',
		'cpdhourid' => 'Cpdhourid' 
	),
	'fieldTooltips' => array(
		'cpd_activity' => '',
		'cpd_hour' => '',
		'cpd_provider' => '',
		'cpd_type' => '',
		'cpdhourid' => '' 
	),
	'fieldPlaceholders' => array(
		'cpd_activity' => '',
		'cpd_hour' => '',
		'cpd_provider' => '',
		'cpd_type' => '',
		'cpdhourid' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>