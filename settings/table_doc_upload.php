<?php
global $runnerTableSettings;
$runnerTableSettings['doc_upload'] = array(
	'name' => 'doc_upload',
	'shortName' => 'doc_upload',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'edit' => array( 
			'edit' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print1' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'list' => 'list',
		'print1' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'list' => 'list',
		'print' => 'print1',
		'search' => 'search' 
	),
	'tableOwnerIdField' => 'date_added',
	'usersOwnerIdField' => 'active',
	'detailsBadgeColor' => '7b68ee',
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
	'sql' => 'SELECT
	date_added,
	doc_name,
	docs,
	ID,
	id_tx
FROM doc_upload',
	'keyFields' => array( 
		'ID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'date_added' => array(
			'name' => 'date_added',
			'goodName' => 'date_added',
			'strField' => 'date_added',
			'sourceSingle' => 'date_added',
			'index' => 1,
			'type' => 7,
			'sqlExpression' => 'date_added',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'videoRewindEnabled' => false,
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'defaultValue' => 'now()',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 2,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'doc_upload' 
		),
		'doc_name' => array(
			'name' => 'doc_name',
			'goodName' => 'doc_name',
			'strField' => 'doc_name',
			'sourceSingle' => 'doc_name',
			'index' => 2,
			'sqlExpression' => 'doc_name',
			'viewFormats' => array(
				'view' => array(
					'videoRewindEnabled' => false,
					'numberFractionalDigits' => 0 
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'doc_upload' 
		),
		'docs' => array(
			'name' => 'docs',
			'goodName' => 'docs',
			'strField' => 'docs',
			'sourceSingle' => 'docs',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'docs',
			'deleteFile' => true,
			'viewFormats' => array(
				'view' => array(
					'format' => 'Document Download',
					'imageShowThumbnail' => true,
					'fileShowSize' => true,
					'fileShowPdf' => true,
					'videoRewindEnabled' => false,
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Document upload',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileResize' => true,
					'fileCreateThumbnail' => true,
					'fileThumbnailSize' => 150,
					'fileSizeLimit' => 10000,
					'fileTypes' => array( 
						'doc',
						'docx',
						'jpeg',
						'jpg',
						'pdf',
						'png.txt' 
					),
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
			'tableName' => 'doc_upload' 
		),
		'ID' => array(
			'name' => 'ID',
			'goodName' => 'ID',
			'strField' => 'ID',
			'sourceSingle' => 'ID',
			'index' => 4,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'ID',
			'viewFormats' => array(
				'view' => array(
					'videoRewindEnabled' => false,
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
			'tableName' => 'doc_upload' 
		),
		'id_tx' => array(
			'name' => 'id_tx',
			'goodName' => 'id_tx',
			'strField' => 'id_tx',
			'sourceSingle' => 'id_tx',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'id_tx',
			'viewFormats' => array(
				'view' => array(
					'videoRewindEnabled' => false,
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
			'tableName' => 'doc_upload' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'transactions-admin',
			'detailsKeys' => array( 
				'id_tx' 
			),
			'masterKeys' => array( 
				'id' 
			) 
		),
		array(
			'table' => 'transactions',
			'detailsKeys' => array( 
				'id_tx' 
			),
			'masterKeys' => array( 
				'id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	date_added,
	doc_name,
	docs,
	ID,
	id_tx
FROM doc_upload',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'date_added',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'doc_upload',
					'name' => 'date_added' 
				),
				'encrypted' => false,
				'columnName' => 'date_added' 
			),
			array(
				'sql' => 'doc_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'doc_upload',
					'name' => 'doc_name' 
				),
				'encrypted' => false,
				'columnName' => 'doc_name' 
			),
			array(
				'sql' => 'docs',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'doc_upload',
					'name' => 'docs' 
				),
				'encrypted' => false,
				'columnName' => 'docs' 
			),
			array(
				'sql' => 'ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'doc_upload',
					'name' => 'ID' 
				),
				'encrypted' => false,
				'columnName' => 'ID' 
			),
			array(
				'sql' => 'id_tx',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'doc_upload',
					'name' => 'id_tx' 
				),
				'encrypted' => false,
				'columnName' => 'id_tx' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'doc_upload',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'doc_upload',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ID',
						'docs',
						'date_added',
						'doc_name',
						'id_tx' 
					),
					'name' => 'doc_upload' 
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
		'fieldListSql' => 'date_added,
	doc_name,
	docs,
	ID,
	id_tx',
		'fromListSql' => 'FROM doc_upload',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'doc_upload',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'edit' => array( 
			'edit' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print1' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'list' => 'list',
		'print1' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'list' => 'list',
		'print' => 'print1',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'date_added',
			'doc_name',
			'docs',
			'ID',
			'id_tx' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'date_added',
			'doc_name',
			'docs',
			'ID',
			'id_tx' 
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
	$runnerTableLabels['doc_upload'] = array(
	'tableCaption' => 'Doc Upload',
	'fieldLabels' => array(
		'date_added' => 'Date Added',
		'doc_name' => 'Doc Name',
		'docs' => 'Files',
		'ID' => 'ID',
		'id_tx' => 'Id TxN' 
	),
	'fieldTooltips' => array(
		'date_added' => '',
		'doc_name' => '',
		'docs' => '',
		'ID' => '',
		'id_tx' => '' 
	),
	'fieldPlaceholders' => array(
		'date_added' => '',
		'doc_name' => '',
		'docs' => '',
		'ID' => '',
		'id_tx' => '' 
	),
	'pageTitles' => array(
		'list' => '' 
	) 
);
}
?>