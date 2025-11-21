<?php
global $runnerTableSettings;
$runnerTableSettings['awards'] = array(
	'name' => 'awards',
	'shortName' => 'awards',
	'advancedSecurityType' => 1,
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
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'tableOwnerIdField' => 'cea_reg',
	'usersOwnerIdField' => 'username',
	'hasEncryptedFields' => true,
	'listAjax' => true,
	'afterEditAction' => 0,
	'afterAddAction' => 0,
	'detailsBadgeColor' => '9acd32',
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
	agency,
	award_type,
	cea_reg,
	dateadded,
	descriptions,
	doc_upload,
	docuserid,
	eatuser_id,
	filename,
	id,
	name,
	third_party
FROM awards',
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
		'agency' => array(
			'name' => 'agency',
			'goodName' => 'agency',
			'strField' => 'agency',
			'index' => 1,
			'sqlExpression' => 'agency',
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
					'format' => 'Readonly',
					'required' => true,
					'defaultValue' => '$_SESSION["agency"]',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agency',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
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
			'tableName' => 'awards' 
		),
		'award_type' => array(
			'name' => 'award_type',
			'goodName' => 'award_type',
			'strField' => 'award_type',
			'sourceSingle' => 'award_type',
			'index' => 2,
			'sqlExpression' => 'award_type',
			'viewFormats' => array(
				'view' => array(
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
			'tableName' => 'awards' 
		),
		'cea_reg' => array(
			'name' => 'cea_reg',
			'goodName' => 'cea_reg',
			'strField' => 'cea_reg',
			'index' => 3,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'cea_reg',
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION[\'agentcea\']',
					'textboxSize' => 80,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupControlType' => 1,
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
			'tableName' => 'awards' 
		),
		'dateadded' => array(
			'name' => 'dateadded',
			'goodName' => 'dateadded',
			'strField' => 'dateadded',
			'index' => 4,
			'type' => 7,
			'sqlExpression' => 'dateadded',
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
					'textboxSize' => 100,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
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
			'tableName' => 'awards' 
		),
		'descriptions' => array(
			'name' => 'descriptions',
			'goodName' => 'descriptions',
			'strField' => 'descriptions',
			'index' => 5,
			'sqlExpression' => 'descriptions',
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
					'format' => 'Text area',
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 80,
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
			'tableName' => 'awards' 
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
					'imageWidth' => 120,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageShowThumbnail' => true,
					'fileShowPdf' => true,
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
					'fileResizeSize' => 1000,
					'fileCreateThumbnail' => true,
					'fileThumbnailSize' => 100,
					'fileSizeLimit' => 1000,
					'fileTypes' => array( 
						'jpg',
						'pdf',
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
			'tableName' => 'awards' 
		),
		'docuserid' => array(
			'name' => 'docuserid',
			'goodName' => 'docuserid',
			'strField' => 'docuserid',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'docuserid',
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
					'textHTML5Input' => '1',
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
			'tableName' => 'awards' 
		),
		'eatuser_id' => array(
			'name' => 'eatuser_id',
			'goodName' => 'eatuser_id',
			'strField' => 'eatuser_id',
			'sourceSingle' => 'eatuser_id',
			'index' => 8,
			'type' => 3,
			'sqlExpression' => 'eatuser_id',
			'viewFormats' => array(
				'view' => array(
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
			'tableName' => 'awards' 
		),
		'filename' => array(
			'name' => 'filename',
			'goodName' => 'filename',
			'strField' => 'filename',
			'index' => 9,
			'sqlExpression' => 'filename',
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
			'tableName' => 'awards' 
		),
		'id' => array(
			'name' => 'id',
			'goodName' => 'id',
			'strField' => 'id',
			'index' => 10,
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
					'textHTML5Input' => '1',
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
			'tableName' => 'awards' 
		),
		'name' => array(
			'name' => 'name',
			'goodName' => 'name',
			'strField' => 'name',
			'index' => 11,
			'sqlExpression' => 'name',
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
					'format' => 'Readonly',
					'required' => true,
					'defaultValue' => '$_SESSION["FullName"]',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'awards' 
		),
		'third_party' => array(
			'name' => 'third_party',
			'goodName' => 'third_party',
			'strField' => 'third_party',
			'index' => 12,
			'sqlExpression' => 'third_party',
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
			'tableName' => 'awards' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'eat_users',
			'detailsKeys' => array( 
				'eatuser_id',
				'name',
				'cea_reg' 
			),
			'masterKeys' => array( 
				'eatuser_id',
				'full_name',
				'username' 
			) 
		),
		array(
			'table' => 'eat_users_user',
			'detailsKeys' => array( 
				'eatuser_id' 
			),
			'masterKeys' => array( 
				'eatuser_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	agency,
	award_type,
	cea_reg,
	dateadded,
	descriptions,
	doc_upload,
	docuserid,
	eatuser_id,
	filename,
	id,
	name,
	third_party
FROM awards',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'agency',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'awards',
					'name' => 'agency' 
				),
				'encrypted' => false,
				'columnName' => 'agency' 
			),
			array(
				'sql' => 'award_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'awards',
					'name' => 'award_type' 
				),
				'encrypted' => false,
				'columnName' => 'award_type' 
			),
			array(
				'sql' => 'cea_reg',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'awards',
					'name' => 'cea_reg' 
				),
				'encrypted' => true,
				'columnName' => 'cea_reg' 
			),
			array(
				'sql' => 'dateadded',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'awards',
					'name' => 'dateadded' 
				),
				'encrypted' => false,
				'columnName' => 'dateadded' 
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
					'table' => 'awards',
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
					'table' => 'awards',
					'name' => 'doc_upload' 
				),
				'encrypted' => false,
				'columnName' => 'doc_upload' 
			),
			array(
				'sql' => 'docuserid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'awards',
					'name' => 'docuserid' 
				),
				'encrypted' => false,
				'columnName' => 'docuserid' 
			),
			array(
				'sql' => 'eatuser_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'awards',
					'name' => 'eatuser_id' 
				),
				'encrypted' => false,
				'columnName' => 'eatuser_id' 
			),
			array(
				'sql' => 'filename',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'awards',
					'name' => 'filename' 
				),
				'encrypted' => false,
				'columnName' => 'filename' 
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
					'table' => 'awards',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'awards',
					'name' => 'name' 
				),
				'encrypted' => false,
				'columnName' => 'name' 
			),
			array(
				'sql' => 'third_party',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'awards',
					'name' => 'third_party' 
				),
				'encrypted' => false,
				'columnName' => 'third_party' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'awards',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'awards',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'cea_reg',
						'name',
						'dateadded',
						'descriptions',
						'doc_upload',
						'filename',
						'agency',
						'third_party',
						'award_type',
						'docuserid',
						'eatuser_id' 
					),
					'name' => 'awards' 
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
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'agency,
	award_type,
	cea_reg,
	dateadded,
	descriptions,
	doc_upload,
	docuserid,
	eatuser_id,
	filename,
	id,
	name,
	third_party',
		'fromListSql' => 'FROM awards',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'awards',
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
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'agency',
			'award_type',
			'cea_reg',
			'dateadded',
			'descriptions',
			'doc_upload',
			'docuserid',
			'eatuser_id',
			'filename',
			'id',
			'name',
			'third_party' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'agency',
			'award_type',
			'cea_reg',
			'dateadded',
			'descriptions',
			'doc_upload',
			'docuserid',
			'eatuser_id',
			'filename',
			'id',
			'name',
			'third_party' 
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
	$runnerTableLabels['awards'] = array(
	'tableCaption' => 'Notes & Records',
	'fieldLabels' => array(
		'agency' => 'Agency',
		'award_type' => 'Award Type',
		'cea_reg' => 'CEA Reg',
		'dateadded' => 'Date',
		'descriptions' => 'Descriptions',
		'doc_upload' => 'Doc Upload',
		'docuserid' => 'Docuserid',
		'eatuser_id' => 'Eatuser Id',
		'filename' => 'Filename',
		'id' => 'Id',
		'name' => 'Name',
		'third_party' => 'From' 
	),
	'fieldTooltips' => array(
		'agency' => '',
		'award_type' => '',
		'cea_reg' => '',
		'dateadded' => '',
		'descriptions' => '',
		'doc_upload' => '',
		'docuserid' => '',
		'eatuser_id' => '',
		'filename' => '',
		'id' => '',
		'name' => '',
		'third_party' => '' 
	),
	'fieldPlaceholders' => array(
		'agency' => '',
		'award_type' => '',
		'cea_reg' => '',
		'dateadded' => '',
		'descriptions' => '',
		'doc_upload' => '',
		'docuserid' => '',
		'eatuser_id' => '',
		'filename' => '',
		'id' => '',
		'name' => '',
		'third_party' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>