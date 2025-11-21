<?php
global $runnerTableSettings;
$runnerTableSettings['prop_kind'] = array(
	'name' => 'prop_kind',
	'shortName' => 'prop_kind',
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
	'tableOwnerIdField' => 'propkindid',
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
	property_kind,
	property_type,
	propkindid
FROM prop_kind',
	'keyFields' => array( 
		'propkindid' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'property_kind' => array(
			'name' => 'property_kind',
			'goodName' => 'property_kind',
			'strField' => 'property_kind',
			'index' => 1,
			'sqlExpression' => 'property_kind',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxSize' => 0,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'prop_kind',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'property_type',
					'lookupDisplayField' => 'property_kind',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'prop_kind' 
		),
		'property_type' => array(
			'name' => 'property_type',
			'goodName' => 'property_type',
			'strField' => 'property_type',
			'index' => 2,
			'sqlExpression' => 'property_type',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
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
					'textboxSize' => 0,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'prop_type',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'property_type',
					'lookupDisplayField' => 'property_type',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'prop_kind' 
		),
		'propkindid' => array(
			'name' => 'propkindid',
			'goodName' => 'propkindid',
			'strField' => 'propkindid',
			'index' => 3,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'propkindid',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
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
					'textboxSize' => 143,
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'prop_kind' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	property_kind,
	property_type,
	propkindid
FROM prop_kind',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'property_kind',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'prop_kind',
					'name' => 'property_kind' 
				),
				'encrypted' => false,
				'columnName' => 'property_kind' 
			),
			array(
				'sql' => 'property_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'prop_kind',
					'name' => 'property_type' 
				),
				'encrypted' => false,
				'columnName' => 'property_type' 
			),
			array(
				'sql' => 'propkindid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'prop_kind',
					'name' => 'propkindid' 
				),
				'encrypted' => false,
				'columnName' => 'propkindid' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'prop_kind',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'prop_kind',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'propkindid',
						'property_type',
						'property_kind' 
					),
					'name' => 'prop_kind' 
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
		'fieldListSql' => 'property_kind,
	property_type,
	propkindid',
		'fromListSql' => 'FROM prop_kind',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'prop_kind',
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
			'property_kind',
			'property_type',
			'propkindid' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'property_kind',
			'property_type',
			'propkindid' 
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
	$runnerTableLabels['prop_kind'] = array(
	'tableCaption' => 'Prop Kind',
	'fieldLabels' => array(
		'property_kind' => 'Sub Type',
		'property_type' => 'Property Type',
		'propkindid' => 'Propkindid' 
	),
	'fieldTooltips' => array(
		'property_kind' => '',
		'property_type' => '',
		'propkindid' => '' 
	),
	'fieldPlaceholders' => array(
		'property_kind' => '',
		'property_type' => '',
		'propkindid' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>