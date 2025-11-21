<?php
global $runnerTableSettings;
$runnerTableSettings['gst_incl'] = array(
	'name' => 'gst_incl',
	'shortName' => 'gst_incl',
	'pagesByType' => array(
		'list' => array( 
			'list' 
		) 
	),
	'pageTypes' => array(
		'list' => 'list' 
	),
	'defaultPages' => array(
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
	'sql' => 'SELECT
	gst,
	gst_incl,
	id
FROM gst_incl',
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
		'gst' => array(
			'name' => 'gst',
			'goodName' => 'gst',
			'strField' => 'gst',
			'index' => 1,
			'sqlExpression' => 'gst',
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
					'format' => 'Lookup wizard',
					'textboxSize' => 80,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'gst',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'gst',
					'lookupDisplayField' => 'gst',
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
			'tableName' => 'gst_incl' 
		),
		'gst_incl' => array(
			'name' => 'gst_incl',
			'goodName' => 'gst_incl',
			'strField' => 'gst_incl',
			'index' => 2,
			'sqlExpression' => 'gst_incl',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'gst_incl' 
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'gst_incl' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	gst,
	gst_incl,
	id
FROM gst_incl',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'gst',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'gst_incl',
					'name' => 'gst' 
				),
				'encrypted' => false,
				'columnName' => 'gst' 
			),
			array(
				'sql' => 'gst_incl',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'gst_incl',
					'name' => 'gst_incl' 
				),
				'encrypted' => false,
				'columnName' => 'gst_incl' 
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
					'table' => 'gst_incl',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'gst_incl',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'gst_incl',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'gst',
						'gst_incl' 
					),
					'name' => 'gst_incl' 
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
		'fieldListSql' => 'gst,
	gst_incl,
	id',
		'fromListSql' => 'FROM gst_incl',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'gst_incl',
	'originalPagesByType' => array(
		'list' => array( 
			'list' 
		) 
	),
	'originalPageTypes' => array(
		'list' => 'list' 
	),
	'originalDefaultPages' => array(
		'list' => 'list' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'gst',
			'gst_incl',
			'id' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'gst',
			'gst_incl',
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
	$runnerTableLabels['gst_incl'] = array(
	'tableCaption' => 'GST Incl',
	'fieldLabels' => array(
		'gst' => 'GST',
		'gst_incl' => 'GST Incl',
		'id' => 'ID' 
	),
	'fieldTooltips' => array(
		'gst' => '',
		'gst_incl' => '',
		'id' => '' 
	),
	'fieldPlaceholders' => array(
		'gst' => '',
		'gst_incl' => '',
		'id' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>