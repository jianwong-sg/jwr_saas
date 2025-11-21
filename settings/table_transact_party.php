<?php
global $runnerTableSettings;
$runnerTableSettings['transact_party'] = array(
	'name' => 'transact_party',
	'shortName' => 'transact_party',
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
	'detailsBadgeColor' => '008B8B',
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
	id,
	tx_party,
	tx_type
FROM transact_party',
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
			'tableName' => 'transact_party' 
		),
		'tx_party' => array(
			'name' => 'tx_party',
			'goodName' => 'tx_party',
			'strField' => 'tx_party',
			'index' => 2,
			'sqlExpression' => 'tx_party',
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
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'transact_party',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'tx_party',
					'lookupDisplayField' => 'tx_party',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'tx_type',
							'lookupField' => 'tx_type' 
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
			'tableName' => 'transact_party' 
		),
		'tx_type' => array(
			'name' => 'tx_type',
			'goodName' => 'tx_type',
			'strField' => 'tx_type',
			'index' => 3,
			'sqlExpression' => 'tx_type',
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
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'transact_type',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'tx_type',
					'lookupDisplayField' => 'tx_type',
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
			'tableName' => 'transact_party' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	tx_party,
	tx_type
FROM transact_party',
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
					'table' => 'transact_party',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'tx_party',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transact_party',
					'name' => 'tx_party' 
				),
				'encrypted' => false,
				'columnName' => 'tx_party' 
			),
			array(
				'sql' => 'tx_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transact_party',
					'name' => 'tx_type' 
				),
				'encrypted' => false,
				'columnName' => 'tx_type' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'transact_party',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'transact_party',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'tx_type',
						'tx_party' 
					),
					'name' => 'transact_party' 
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
		'fieldListSql' => 'id,
	tx_party,
	tx_type',
		'fromListSql' => 'FROM transact_party',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'transact_party',
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
			'id',
			'tx_party',
			'tx_type' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'tx_party',
			'tx_type' 
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
	$runnerTableLabels['transact_party'] = array(
	'tableCaption' => 'Transact Party',
	'fieldLabels' => array(
		'id' => 'Id',
		'tx_party' => 'Txn Party',
		'tx_type' => 'Txn Type' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'tx_party' => '',
		'tx_type' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'tx_party' => '',
		'tx_type' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>