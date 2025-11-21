<?php
global $runnerTableSettings;
$runnerTableSettings['prop_type'] = array(
	'name' => 'prop_type',
	'shortName' => 'prop_type',
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
	'tableOwnerIdField' => 'proptypeid',
	'usersOwnerIdField' => 'user_id',
	'afterEditAction' => 0,
	'afterAddAction' => 0,
	'detailsBadgeColor' => '4682B4',
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
	property_type,
	proptypeid
FROM prop_type',
	'keyFields' => array( 
		'proptypeid' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'property_type' => array(
			'name' => 'property_type',
			'goodName' => 'property_type',
			'strField' => 'property_type',
			'index' => 1,
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
					'textboxSize' => 0,
					'textboxMaxLenth' => 50,
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
			'tableName' => 'prop_type' 
		),
		'proptypeid' => array(
			'name' => 'proptypeid',
			'goodName' => 'proptypeid',
			'strField' => 'proptypeid',
			'index' => 2,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'proptypeid',
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
			'tableName' => 'prop_type' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	property_type,
	proptypeid
FROM prop_type',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'property_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'prop_type',
					'name' => 'property_type' 
				),
				'encrypted' => false,
				'columnName' => 'property_type' 
			),
			array(
				'sql' => 'proptypeid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'prop_type',
					'name' => 'proptypeid' 
				),
				'encrypted' => false,
				'columnName' => 'proptypeid' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'prop_type',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'prop_type',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'proptypeid',
						'property_type' 
					),
					'name' => 'prop_type' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'property_type,
	proptypeid',
		'fromListSql' => 'FROM prop_type',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'prop_type',
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
			'property_type',
			'proptypeid' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'property_type',
			'proptypeid' 
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
	$runnerTableLabels['prop_type'] = array(
	'tableCaption' => 'Prop Type',
	'fieldLabels' => array(
		'property_type' => 'Property Type',
		'proptypeid' => 'Proptypeid' 
	),
	'fieldTooltips' => array(
		'property_type' => '',
		'proptypeid' => '' 
	),
	'fieldPlaceholders' => array(
		'property_type' => '',
		'proptypeid' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>