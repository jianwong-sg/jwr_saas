<?php
global $runnerTableSettings;
$runnerTableSettings['rental_main_journal'] = array(
	'name' => 'rental_main_journal',
	'shortName' => 'rental_main_journal',
	'pagesByType' => array(
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
		),
		'view' => array( 
			'view' 
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'tableOwnerIdField' => 'id',
	'usersOwnerIdField' => 'username',
	'afterEditAction' => 0,
	'afterAddAction' => 0,
	'detailsBadgeColor' => 'cd5c5c',
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
	'orderInfo' => array( 
		array(
			'index' => 4,
			'dir' => 'ASC',
			'field' => 'rental_main_date' 
		) 
	),
	'sql' => 'SELECT
id,
id_main,
pos,
rental_main_date,
descriptions,
doc_upload,
images
FROM rental_main_journal
ORDER BY rental_main_date',
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
			'tableName' => 'rental_main_journal' 
		),
		'id_main' => array(
			'name' => 'id_main',
			'goodName' => 'id_main',
			'strField' => 'id_main',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'id_main',
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
			'tableName' => 'rental_main_journal' 
		),
		'pos' => array(
			'name' => 'pos',
			'goodName' => 'pos',
			'strField' => 'pos',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'pos',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false,
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'textboxSize' => 50,
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
			'tableName' => 'rental_main_journal' 
		),
		'rental_main_date' => array(
			'name' => 'rental_main_date',
			'goodName' => 'rental_main_date',
			'strField' => 'rental_main_date',
			'index' => 4,
			'type' => 7,
			'sqlExpression' => 'rental_main_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'required' => true,
					'defaultValue' => 'now()',
					'textboxSize' => 120,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 11,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'rental_main_journal' 
		),
		'descriptions' => array(
			'name' => 'descriptions',
			'goodName' => 'descriptions',
			'strField' => 'descriptions',
			'index' => 5,
			'type' => 201,
			'sqlExpression' => 'descriptions',
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
					'format' => 'Text area',
					'textboxMaxLenth' => 500,
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
			'tableName' => 'rental_main_journal' 
		),
		'doc_upload' => array(
			'name' => 'doc_upload',
			'goodName' => 'doc_upload',
			'strField' => 'doc_upload',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => 'doc_upload',
			'deleteFile' => true,
			'viewFormats' => array(
				'view' => array(
					'format' => 'Document Download',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageShowThumbnail' => true,
					'videoRewindEnabled' => false 
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
			'tableName' => 'rental_main_journal' 
		),
		'images' => array(
			'name' => 'images',
			'goodName' => 'images',
			'strField' => 'images',
			'index' => 7,
			'type' => 201,
			'sqlExpression' => 'images',
			'deleteFile' => true,
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageShowThumbnail' => true,
					'videoRewindEnabled' => false 
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
					'fileTypes' => array( 
						'bmp',
						'gif',
						'jpeg',
						'jpg',
						'png' 
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
			'tableName' => 'rental_main_journal' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'rental_main',
			'detailsKeys' => array( 
				'id_main' 
			),
			'masterKeys' => array( 
				'id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
id,
id_main,
pos,
rental_main_date,
descriptions,
doc_upload,
images
FROM rental_main_journal
ORDER BY rental_main_date',
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
					'table' => 'rental_main_journal',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'id_main',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_journal',
					'name' => 'id_main' 
				),
				'encrypted' => false,
				'columnName' => 'id_main' 
			),
			array(
				'sql' => 'pos',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_journal',
					'name' => 'pos' 
				),
				'encrypted' => false,
				'columnName' => 'pos' 
			),
			array(
				'sql' => 'rental_main_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_journal',
					'name' => 'rental_main_date' 
				),
				'encrypted' => false,
				'columnName' => 'rental_main_date' 
			),
			array(
				'sql' => 'descriptions',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_journal',
					'name' => 'descriptions' 
				),
				'encrypted' => false,
				'columnName' => 'descriptions' 
			),
			array(
				'sql' => 'doc_upload',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_journal',
					'name' => 'doc_upload' 
				),
				'encrypted' => false,
				'columnName' => 'doc_upload' 
			),
			array(
				'sql' => 'images',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_journal',
					'name' => 'images' 
				),
				'encrypted' => false,
				'columnName' => 'images' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'rental_main_journal',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'rental_main_journal',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'id_main',
						'pos',
						'rental_main_date',
						'descriptions',
						'doc_upload',
						'images' 
					),
					'name' => 'rental_main_journal' 
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
				'sql' => 'rental_main_date',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_journal',
					'name' => 'rental_main_date' 
				),
				'asc' => true,
				'columnNumber' => 4 
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
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => 0,
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
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
id_main,
pos,
rental_main_date,
descriptions,
doc_upload,
images',
		'fromListSql' => 'FROM rental_main_journal',
		'orderBySql' => 'ORDER BY rental_main_date',
		'tailSql' => '' 
	),
	'originalTable' => 'rental_main_journal',
	'originalPagesByType' => array(
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
		),
		'view' => array( 
			'view' 
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'id_main',
			'pos',
			'rental_main_date',
			'descriptions',
			'doc_upload',
			'images' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'id_main',
			'pos',
			'rental_main_date',
			'descriptions',
			'doc_upload',
			'images' 
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
	$runnerTableLabels['rental_main_journal'] = array(
	'tableCaption' => 'Journal',
	'fieldLabels' => array(
		'id' => 'ID',
		'id_main' => 'ID Main',
		'pos' => 'Item',
		'rental_main_date' => 'Date',
		'descriptions' => 'Descriptions',
		'doc_upload' => 'Doc Upload',
		'images' => 'Images' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'id_main' => '',
		'pos' => '',
		'rental_main_date' => '',
		'descriptions' => '',
		'doc_upload' => '',
		'images' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'id_main' => '',
		'pos' => '',
		'rental_main_date' => '',
		'descriptions' => '',
		'doc_upload' => '',
		'images' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>