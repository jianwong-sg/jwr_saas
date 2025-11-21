<?php
global $runnerTableSettings;
$runnerTableSettings['rental_main_detail_occupier'] = array(
	'name' => 'rental_main_detail_occupier',
	'shortName' => 'rental_main_detail_occupier',
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
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'tableOwnerIdField' => 'id',
	'usersOwnerIdField' => 'active',
	'afterEditAction' => 0,
	'afterAddAction' => 3,
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
	'sql' => 'SELECT
id,
id_detail,
occupier_name,
occupier_id,
occupier_occupation,
file_upload,
occupier_relationship,
occupier_nationality,
occupier_gender,
updatedate
FROM rental_main_detail_occupier',
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
			'tableName' => 'rental_main_detail_occupier' 
		),
		'id_detail' => array(
			'name' => 'id_detail',
			'goodName' => 'id_detail',
			'strField' => 'id_detail',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'id_detail',
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
			'tableName' => 'rental_main_detail_occupier' 
		),
		'occupier_name' => array(
			'name' => 'occupier_name',
			'goodName' => 'occupier_name',
			'strField' => 'occupier_name',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'occupier_name',
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
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'occupier_id',
							'lookupField' => 'nric' 
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
			'tableName' => 'rental_main_detail_occupier' 
		),
		'occupier_id' => array(
			'name' => 'occupier_id',
			'goodName' => 'occupier_id',
			'strField' => 'occupier_id',
			'index' => 4,
			'sqlExpression' => 'occupier_id',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				),
				'list' => array(
					'pageType' => 'list',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				),
				'print' => array(
					'pageType' => 'print',
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
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				),
				'register' => array(
					'format' => 'Lookup wizard',
					'pageType' => 'register',
					'required' => true,
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'add' => array(
					'format' => 'Lookup wizard',
					'pageType' => 'add',
					'required' => true,
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'invcust_id',
							'lookupField' => 'id' 
						) 
					),
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'search' => array(
					'format' => 'Lookup wizard',
					'pageType' => 'search',
					'required' => true,
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'separateEditViewFormats' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'rental_main_detail_occupier' 
		),
		'occupier_occupation' => array(
			'name' => 'occupier_occupation',
			'goodName' => 'occupier_occupation',
			'strField' => 'occupier_occupation',
			'index' => 5,
			'sqlExpression' => 'occupier_occupation',
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
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'occupation',
					'lookupDisplayField' => 'occupation',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'occupier_id',
							'lookupField' => 'nric' 
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
			'tableName' => 'rental_main_detail_occupier' 
		),
		'file_upload' => array(
			'name' => 'file_upload',
			'goodName' => 'file_upload',
			'strField' => 'file_upload',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => 'file_upload',
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
					'fileSizeLimit' => 5000,
					'fileTypes' => array( 
						'doc',
						'docx',
						'jpeg',
						'jpg',
						'pdf',
						'png',
						'txt' 
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
			'tableName' => 'rental_main_detail_occupier' 
		),
		'occupier_relationship' => array(
			'name' => 'occupier_relationship',
			'goodName' => 'occupier_relationship',
			'strField' => 'occupier_relationship',
			'index' => 7,
			'sqlExpression' => 'occupier_relationship',
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
					'textboxSize' => 150,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Spouse',
						'Partner',
						'Sibling',
						'Son',
						'Daughter',
						'Relative',
						'Parent',
						'Friend',
						'Un Related' 
					),
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
			'tableName' => 'rental_main_detail_occupier' 
		),
		'occupier_nationality' => array(
			'name' => 'occupier_nationality',
			'goodName' => 'occupier_nationality',
			'strField' => 'occupier_nationality',
			'index' => 8,
			'sqlExpression' => 'occupier_nationality',
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
					'textboxSize' => 150,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'nationality',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nationality',
					'lookupDisplayField' => 'nationality',
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
			'tableName' => 'rental_main_detail_occupier' 
		),
		'occupier_gender' => array(
			'name' => 'occupier_gender',
			'goodName' => 'occupier_gender',
			'strField' => 'occupier_gender',
			'index' => 9,
			'sqlExpression' => 'occupier_gender',
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
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Male',
						'Female' 
					),
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'gender',
					'lookupDisplayField' => 'gender',
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'occupier_id',
							'lookupField' => 'nric' 
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'rental_main_detail_occupier' 
		),
		'updatedate' => array(
			'name' => 'updatedate',
			'goodName' => 'updatedate',
			'strField' => 'updatedate',
			'index' => 10,
			'type' => 7,
			'sqlExpression' => 'updatedate',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				),
				'list' => array(
					'format' => 'Short Date',
					'pageType' => 'list',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				),
				'print' => array(
					'format' => 'Short Date',
					'pageType' => 'print',
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
					'defaultValue' => 'now()',
					'autoUpdateValue' => 'now()',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				),
				'register' => array(
					'format' => 'Readonly',
					'pageType' => 'register',
					'defaultValue' => 'now()',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'add' => array(
					'format' => 'Readonly',
					'pageType' => 'add',
					'defaultValue' => 'now()',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'search' => array(
					'format' => 'Readonly',
					'pageType' => 'search',
					'defaultValue' => 'now()',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'separateEditViewFormats' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'rental_main_detail_occupier' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'rental_main_details',
			'detailsKeys' => array( 
				'id_detail' 
			),
			'masterKeys' => array( 
				'id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
id,
id_detail,
occupier_name,
occupier_id,
occupier_occupation,
file_upload,
occupier_relationship,
occupier_nationality,
occupier_gender,
updatedate
FROM rental_main_detail_occupier',
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
					'table' => 'rental_main_detail_occupier',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'id_detail',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_detail_occupier',
					'name' => 'id_detail' 
				),
				'encrypted' => false,
				'columnName' => 'id_detail' 
			),
			array(
				'sql' => 'occupier_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_detail_occupier',
					'name' => 'occupier_name' 
				),
				'encrypted' => false,
				'columnName' => 'occupier_name' 
			),
			array(
				'sql' => 'occupier_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_detail_occupier',
					'name' => 'occupier_id' 
				),
				'encrypted' => false,
				'columnName' => 'occupier_id' 
			),
			array(
				'sql' => 'occupier_occupation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_detail_occupier',
					'name' => 'occupier_occupation' 
				),
				'encrypted' => false,
				'columnName' => 'occupier_occupation' 
			),
			array(
				'sql' => 'file_upload',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_detail_occupier',
					'name' => 'file_upload' 
				),
				'encrypted' => false,
				'columnName' => 'file_upload' 
			),
			array(
				'sql' => 'occupier_relationship',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_detail_occupier',
					'name' => 'occupier_relationship' 
				),
				'encrypted' => false,
				'columnName' => 'occupier_relationship' 
			),
			array(
				'sql' => 'occupier_nationality',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_detail_occupier',
					'name' => 'occupier_nationality' 
				),
				'encrypted' => false,
				'columnName' => 'occupier_nationality' 
			),
			array(
				'sql' => 'occupier_gender',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_detail_occupier',
					'name' => 'occupier_gender' 
				),
				'encrypted' => false,
				'columnName' => 'occupier_gender' 
			),
			array(
				'sql' => 'updatedate',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'rental_main_detail_occupier',
					'name' => 'updatedate' 
				),
				'encrypted' => false,
				'columnName' => 'updatedate' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'rental_main_detail_occupier',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'rental_main_detail_occupier',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'id_detail',
						'occupier_name',
						'occupier_id',
						'occupier_occupation',
						'occupier_relationship',
						'file_upload',
						'occupier_nationality',
						'occupier_gender',
						'updatedate' 
					),
					'name' => 'rental_main_detail_occupier' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
id_detail,
occupier_name,
occupier_id,
occupier_occupation,
file_upload,
occupier_relationship,
occupier_nationality,
occupier_gender,
updatedate',
		'fromListSql' => 'FROM rental_main_detail_occupier',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'rental_main_detail_occupier',
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
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'id_detail',
			'occupier_name',
			'occupier_id',
			'occupier_occupation',
			'file_upload',
			'occupier_relationship',
			'occupier_nationality',
			'occupier_gender',
			'updatedate' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'id_detail',
			'occupier_name',
			'occupier_id',
			'occupier_occupation',
			'file_upload',
			'occupier_relationship',
			'occupier_nationality',
			'occupier_gender',
			'updatedate' 
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
	$runnerTableLabels['rental_main_detail_occupier'] = array(
	'tableCaption' => 'Occupier Detail',
	'fieldLabels' => array(
		'id' => 'Id',
		'id_detail' => 'Id Detail',
		'occupier_name' => 'Occupier Name',
		'occupier_id' => 'ID #',
		'occupier_occupation' => 'Occupation',
		'file_upload' => 'ID Upload',
		'occupier_relationship' => 'Relationship To Tenant',
		'occupier_nationality' => 'Nationality',
		'occupier_gender' => 'Gender',
		'updatedate' => 'Last Updated' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'id_detail' => '',
		'occupier_name' => '',
		'occupier_id' => 'NRIC/FIN/Passport #',
		'occupier_occupation' => '',
		'file_upload' => '',
		'occupier_relationship' => '',
		'occupier_nationality' => '',
		'occupier_gender' => '',
		'updatedate' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'id_detail' => '',
		'occupier_name' => '',
		'occupier_id' => '',
		'occupier_occupation' => '',
		'file_upload' => '',
		'occupier_relationship' => '',
		'occupier_nationality' => '',
		'occupier_gender' => '',
		'updatedate' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>