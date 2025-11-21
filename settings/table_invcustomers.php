<?php
global $runnerTableSettings;
$runnerTableSettings['invcustomers'] = array(
	'name' => 'invcustomers',
	'shortName' => 'invcustomers',
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
			'list',
			'list1' 
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
		'list1' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'tableOwnerIdField' => 'username',
	'usersOwnerIdField' => 'username',
	'hasEncryptedFields' => true,
	'listAjax' => true,
	'audit' => true,
	'afterEditAction' => 0,
	'afterAddAction' => 0,
	'detailsBadgeColor' => '6DA5C8',
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
	'strOrderBy' => 'ORDER BY
	id DESC',
	'orderInfo' => array( 
		array(
			'index' => 1,
			'dir' => 'DESC',
			'field' => 'id' 
		) 
	),
	'sql' => 'SELECT
	id,
	name,
	address,
	email,
	postal,
	nric,
	mobile,
	tel,
	doc_upload,
	id_property,
	docuserid,
	office_tel,
	remarks,
	doc_name,
	cus_type,
	trade,
	contact_person,
	destination,
	contact_email,
	biz_email,
	CONCAT_WS(\'; \', IF(LENGTH(`email`),`email`,NULL), IF(LENGTH(`contact_email`),`contact_email`,NULL), IF(LENGTH(`biz_email`),`biz_email`,NULL)) AS allemails,
	last_updated,
	registration_date,
	status,
	id_tx,
	id_type,
	country_incorporation,
	agency_name,
	license_no,
	agency_address,
	agency_postal,
	nationality,
	date_of_birth,
	occupation,
	contact_person_contact,
	gender,
	contact_person_id,
	salutation,
	race,
	tel_type,
	registration_no,
	COALESCE(nric, registration_no) AS nric_reg,
	date_added,
	username,
	billing_address
FROM
	invcustomers
ORDER BY
	id DESC
',
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
					'lookupTableConnection' => 'Tables',
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
			'tableName' => 'invcustomers' 
		),
		'name' => array(
			'name' => 'name',
			'goodName' => 'name',
			'strField' => 'name',
			'index' => 2,
			'sqlExpression' => 'name',
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
					'validateRegex' => '[.(),a-zA-Z0-9][.(),a-zA-Z0-9 ]*',
					'validateRegexMessage' => array(
						'text' => 'Special characters not allowed!',
						'type' => 0 
					),
					'textboxMaxLenth' => 100,
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'invcustomers' 
		),
		'address' => array(
			'name' => 'address',
			'goodName' => 'address',
			'strField' => 'address',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'address',
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
					'textareaHeight' => 60,
					'lookupTableConnection' => 'Tables',
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
			'tableName' => 'invcustomers' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'index' => 4,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'email',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				),
				'list' => array(
					'pageType' => 'list',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				),
				'print' => array(
					'pageType' => 'print',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				),
				'export' => array(
					'pageType' => 'export',
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
					'defaultValue' => '"no@email.com"',
					'validateAs' => 'Email',
					'textboxMaxLenth' => 250,
					'textHTML5Input' => '0',
					'lookupTableConnection' => 'Tables',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				),
				'add' => array(
					'pageType' => 'add',
					'defaultValue' => '"no@email.com"',
					'validateAs' => 'Email',
					'textboxMaxLenth' => 250,
					'textHTML5Input' => '0',
					'lookupTableConnection' => 'Tables',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				),
				'search' => array(
					'pageType' => 'search',
					'defaultValue' => '"no@email.com"',
					'validateAs' => 'Email',
					'textboxMaxLenth' => 250,
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
			'separateEditViewFormats' => true,
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'invcustomers' 
		),
		'postal' => array(
			'name' => 'postal',
			'goodName' => 'postal',
			'strField' => 'postal',
			'sourceSingle' => 'postal',
			'index' => 5,
			'sqlExpression' => 'postal',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'textboxMaxLenth' => 10,
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
			'tableName' => 'invcustomers' 
		),
		'nric' => array(
			'name' => 'nric',
			'goodName' => 'nric',
			'strField' => 'nric',
			'sourceSingle' => 'nric',
			'index' => 6,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'nric',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'denyDuplicate' => true,
					'denyDuplicateMessage' => array(
						'text' => 'ID %value% already exists',
						'type' => 0 
					),
					'textboxMaxLenth' => 15,
					'textInsertNull' => true,
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
			'tableName' => 'invcustomers' 
		),
		'mobile' => array(
			'name' => 'mobile',
			'goodName' => 'mobile',
			'strField' => 'mobile',
			'sourceSingle' => 'mobile',
			'index' => 7,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'mobile',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'defaultValue' => '0',
					'validateAs' => 'Number',
					'textboxMaxLenth' => 8,
					'textInsertNull' => true,
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
			'tableName' => 'invcustomers' 
		),
		'tel' => array(
			'name' => 'tel',
			'goodName' => 'tel',
			'strField' => 'tel',
			'sourceSingle' => 'tel',
			'index' => 8,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'tel',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'textboxMaxLenth' => 15,
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
			'tableName' => 'invcustomers' 
		),
		'doc_upload' => array(
			'name' => 'doc_upload',
			'goodName' => 'doc_upload',
			'strField' => 'doc_upload',
			'sourceSingle' => 'doc_upload',
			'index' => 9,
			'sqlExpression' => 'doc_upload',
			'deleteFile' => true,
			'viewFormats' => array(
				'view' => array(
					'format' => 'Document Download',
					'imageShowThumbnail' => true,
					'fileShowSize' => true,
					'fileShowPdf' => true,
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Document upload',
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'fileResize' => true,
					'fileCreateThumbnail' => true,
					'fileThumbnailSize' => 200,
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
			'tableName' => 'invcustomers' 
		),
		'id_property' => array(
			'name' => 'id_property',
			'goodName' => 'id_property',
			'strField' => 'id_property',
			'sourceSingle' => 'id_property',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => 'id_property',
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
			'tableName' => 'invcustomers' 
		),
		'docuserid' => array(
			'name' => 'docuserid',
			'goodName' => 'docuserid',
			'strField' => 'docuserid',
			'sourceSingle' => 'docuserid',
			'index' => 11,
			'sqlExpression' => 'docuserid',
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
					'textboxMaxLenth' => 15,
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
			'tableName' => 'invcustomers' 
		),
		'office_tel' => array(
			'name' => 'office_tel',
			'goodName' => 'office_tel',
			'strField' => 'office_tel',
			'sourceSingle' => 'office_tel',
			'index' => 12,
			'sqlExpression' => 'office_tel',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'textboxMaxLenth' => 15,
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
			'tableName' => 'invcustomers' 
		),
		'remarks' => array(
			'name' => 'remarks',
			'goodName' => 'remarks',
			'strField' => 'remarks',
			'sourceSingle' => 'remarks',
			'index' => 13,
			'sqlExpression' => 'remarks',
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
					'textboxMaxLenth' => 500,
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
			'tableName' => 'invcustomers' 
		),
		'doc_name' => array(
			'name' => 'doc_name',
			'goodName' => 'doc_name',
			'strField' => 'doc_name',
			'sourceSingle' => 'doc_name',
			'index' => 14,
			'sqlExpression' => 'doc_name',
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
			'tableName' => 'invcustomers' 
		),
		'cus_type' => array(
			'name' => 'cus_type',
			'goodName' => 'cus_type',
			'strField' => 'cus_type',
			'sourceSingle' => 'cus_type',
			'index' => 15,
			'sqlExpression' => 'cus_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'ownership_type',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'type',
					'lookupDisplayField' => 'type',
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
			'tableName' => 'invcustomers' 
		),
		'trade' => array(
			'name' => 'trade',
			'goodName' => 'trade',
			'strField' => 'trade',
			'sourceSingle' => 'trade',
			'index' => 16,
			'sqlExpression' => 'trade',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 70,
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
			'tableName' => 'invcustomers' 
		),
		'contact_person' => array(
			'name' => 'contact_person',
			'goodName' => 'contact_person',
			'strField' => 'contact_person',
			'sourceSingle' => 'contact_person',
			'index' => 17,
			'sqlExpression' => 'contact_person',
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
					'textboxMaxLenth' => 20,
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
			'tableName' => 'invcustomers' 
		),
		'destination' => array(
			'name' => 'destination',
			'goodName' => 'destination',
			'strField' => 'destination',
			'sourceSingle' => 'destination',
			'index' => 18,
			'sqlExpression' => 'destination',
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
					'textboxMaxLenth' => 20,
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
			'tableName' => 'invcustomers' 
		),
		'contact_email' => array(
			'name' => 'contact_email',
			'goodName' => 'contact_email',
			'strField' => 'contact_email',
			'sourceSingle' => 'contact_email',
			'index' => 19,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'contact_email',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Email',
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
			'tableName' => 'invcustomers' 
		),
		'biz_email' => array(
			'name' => 'biz_email',
			'goodName' => 'biz_email',
			'strField' => 'biz_email',
			'sourceSingle' => 'biz_email',
			'index' => 20,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'biz_email',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Email',
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
			'tableName' => 'invcustomers' 
		),
		'allemails' => array(
			'name' => 'allemails',
			'goodName' => 'allemails',
			'strField' => 'allemails',
			'index' => 21,
			'type' => 201,
			'sqlExpression' => 'CONCAT_WS(\'; \', IF(LENGTH(`email`),`email`,NULL), IF(LENGTH(`contact_email`),`contact_email`,NULL), IF(LENGTH(`biz_email`),`biz_email`,NULL))',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
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
			'tableName' => '' 
		),
		'last_updated' => array(
			'name' => 'last_updated',
			'goodName' => 'last_updated',
			'strField' => 'last_updated',
			'sourceSingle' => 'last_updated',
			'index' => 22,
			'type' => 7,
			'sqlExpression' => 'last_updated',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				),
				'list' => array(
					'format' => 'Short Date',
					'pageType' => 'list',
					'numberFractionalDigits' => 0 
				),
				'print' => array(
					'format' => 'Short Date',
					'pageType' => 'print',
					'numberFractionalDigits' => 0 
				),
				'export' => array(
					'format' => 'Short Date',
					'pageType' => 'export',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'defaultValue' => 'now()',
					'autoUpdateValue' => 'now()',
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
				),
				'add' => array(
					'format' => 'Date',
					'pageType' => 'add',
					'autoUpdateValue' => 'now()',
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
				),
				'search' => array(
					'format' => 'Date',
					'pageType' => 'search',
					'defaultValue' => 'now()',
					'autoUpdateValue' => 'now()',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 5,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'separateEditViewFormats' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'invcustomers' 
		),
		'registration_date' => array(
			'name' => 'registration_date',
			'goodName' => 'registration_date',
			'strField' => 'registration_date',
			'sourceSingle' => 'registration_date',
			'index' => 23,
			'type' => 7,
			'sqlExpression' => 'registration_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 2,
					'dateLastYearFactor' => 0,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'invcustomers' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'sourceSingle' => 'status',
			'index' => 24,
			'sqlExpression' => 'status',
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
			'tableName' => 'invcustomers' 
		),
		'id_tx' => array(
			'name' => 'id_tx',
			'goodName' => 'id_tx',
			'strField' => 'id_tx',
			'sourceSingle' => 'id_tx',
			'index' => 25,
			'type' => 3,
			'sqlExpression' => 'id_tx',
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
			'tableName' => 'invcustomers' 
		),
		'id_type' => array(
			'name' => 'id_type',
			'goodName' => 'id_type',
			'strField' => 'id_type',
			'sourceSingle' => 'id_type',
			'index' => 26,
			'sqlExpression' => 'id_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'ownership_typeid',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'id_type',
					'lookupDisplayField' => 'id_type',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'cus_type',
							'lookupField' => 'ownership_type' 
						) 
					),
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
			'tableName' => 'invcustomers' 
		),
		'country_incorporation' => array(
			'name' => 'country_incorporation',
			'goodName' => 'country_incorporation',
			'strField' => 'country_incorporation',
			'sourceSingle' => 'country_incorporation',
			'index' => 27,
			'sqlExpression' => 'country_incorporation',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'defaultValue' => '"SINGAPORE"',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'country',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'country',
					'lookupDisplayField' => 'country',
					'lookupOrderBy' => 'country',
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
			'tableName' => 'invcustomers' 
		),
		'agency_name' => array(
			'name' => 'agency_name',
			'goodName' => 'agency_name',
			'strField' => 'agency_name',
			'sourceSingle' => 'agency_name',
			'index' => 28,
			'sqlExpression' => 'agency_name',
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
			'tableName' => 'invcustomers' 
		),
		'license_no' => array(
			'name' => 'license_no',
			'goodName' => 'license_no',
			'strField' => 'license_no',
			'sourceSingle' => 'license_no',
			'index' => 29,
			'encrypted' => true,
			'sqlExpression' => 'license_no',
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
					'textboxMaxLenth' => 10,
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
			'tableName' => 'invcustomers' 
		),
		'agency_address' => array(
			'name' => 'agency_address',
			'goodName' => 'agency_address',
			'strField' => 'agency_address',
			'sourceSingle' => 'agency_address',
			'index' => 30,
			'type' => 201,
			'sqlExpression' => 'agency_address',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'textareaHeight' => 60,
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
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
			'tableName' => 'invcustomers' 
		),
		'agency_postal' => array(
			'name' => 'agency_postal',
			'goodName' => 'agency_postal',
			'strField' => 'agency_postal',
			'sourceSingle' => 'agency_postal',
			'index' => 31,
			'sqlExpression' => 'agency_postal',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'textboxMaxLenth' => 6,
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
			'tableName' => 'invcustomers' 
		),
		'nationality' => array(
			'name' => 'nationality',
			'goodName' => 'nationality',
			'strField' => 'nationality',
			'sourceSingle' => 'nationality',
			'index' => 32,
			'sqlExpression' => 'nationality',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'defaultValue' => '"SINGAPOREAN"',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'nationality',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nationality',
					'lookupDisplayField' => 'nationality',
					'lookupOrderBy' => 'nationality',
					'lookupAllowAdd' => true,
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
			'tableName' => 'invcustomers' 
		),
		'date_of_birth' => array(
			'name' => 'date_of_birth',
			'goodName' => 'date_of_birth',
			'strField' => 'date_of_birth',
			'sourceSingle' => 'date_of_birth',
			'index' => 33,
			'type' => 7,
			'sqlExpression' => 'date_of_birth',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 5,
					'dateLastYearFactor' => 0,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'invcustomers' 
		),
		'occupation' => array(
			'name' => 'occupation',
			'goodName' => 'occupation',
			'strField' => 'occupation',
			'sourceSingle' => 'occupation',
			'index' => 34,
			'sqlExpression' => 'occupation',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'textboxMaxLenth' => 100,
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
			'tableName' => 'invcustomers' 
		),
		'contact_person_contact' => array(
			'name' => 'contact_person_contact',
			'goodName' => 'contact_person_contact',
			'strField' => 'contact_person_contact',
			'sourceSingle' => 'contact_person_contact',
			'index' => 35,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'contact_person_contact',
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
					'textboxMaxLenth' => 15,
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
			'tableName' => 'invcustomers' 
		),
		'gender' => array(
			'name' => 'gender',
			'goodName' => 'gender',
			'strField' => 'gender',
			'sourceSingle' => 'gender',
			'index' => 36,
			'sqlExpression' => 'gender',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'MALE',
						'FEMALE',
						'OTHER' 
					),
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
			'tableName' => 'invcustomers' 
		),
		'contact_person_id' => array(
			'name' => 'contact_person_id',
			'goodName' => 'contact_person_id',
			'strField' => 'contact_person_id',
			'sourceSingle' => 'contact_person_id',
			'index' => 37,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'contact_person_id',
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
					'textboxMaxLenth' => 15,
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
			'tableName' => 'invcustomers' 
		),
		'salutation' => array(
			'name' => 'salutation',
			'goodName' => 'salutation',
			'strField' => 'salutation',
			'sourceSingle' => 'salutation',
			'index' => 38,
			'sqlExpression' => 'salutation',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'salutation',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'salutation',
					'lookupDisplayField' => 'salutation',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'cus_type',
							'lookupField' => 'type' 
						) 
					),
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
			'tableName' => 'invcustomers' 
		),
		'race' => array(
			'name' => 'race',
			'goodName' => 'race',
			'strField' => 'race',
			'sourceSingle' => 'race',
			'index' => 39,
			'sqlExpression' => 'race',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'race',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'race',
					'lookupDisplayField' => 'race',
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
			'tableName' => 'invcustomers' 
		),
		'tel_type' => array(
			'name' => 'tel_type',
			'goodName' => 'tel_type',
			'strField' => 'tel_type',
			'sourceSingle' => 'tel_type',
			'index' => 40,
			'sqlExpression' => 'tel_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Home',
						'Office',
						'2nd Mobile',
						'NA' 
					),
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
			'tableName' => 'invcustomers' 
		),
		'registration_no' => array(
			'name' => 'registration_no',
			'goodName' => 'registration_no',
			'strField' => 'registration_no',
			'sourceSingle' => 'registration_no',
			'index' => 41,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'registration_no',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'textboxMaxLenth' => 15,
					'textInsertNull' => true,
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
			'tableName' => 'invcustomers' 
		),
		'nric_reg' => array(
			'name' => 'nric_reg',
			'goodName' => 'nric_reg',
			'strField' => 'nric_reg',
			'index' => 42,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'COALESCE(nric, registration_no)',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
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
			'tableName' => '' 
		),
		'date_added' => array(
			'name' => 'date_added',
			'goodName' => 'date_added',
			'strField' => 'date_added',
			'sourceSingle' => 'date_added',
			'index' => 43,
			'type' => 7,
			'sqlExpression' => 'date_added',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				),
				'list' => array(
					'format' => 'Short Date',
					'pageType' => 'list',
					'numberFractionalDigits' => 0 
				),
				'print' => array(
					'format' => 'Short Date',
					'pageType' => 'print',
					'numberFractionalDigits' => 0 
				),
				'export' => array(
					'format' => 'Short Date',
					'pageType' => 'export',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => 'now()',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 5,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				),
				'add' => array(
					'format' => 'Date',
					'pageType' => 'add',
					'defaultValue' => 'now()',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 2,
					'dateFirstYearFactor' => 20,
					'dateLastYearFactor' => 0,
					'timeConvention' => 1 
				),
				'search' => array(
					'format' => 'Date',
					'pageType' => 'search',
					'defaultValue' => 'now()',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 5,
					'dateFirstYearFactor' => 20,
					'dateLastYearFactor' => 0,
					'timeConvention' => 1 
				) 
			),
			'separateEditViewFormats' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'invcustomers' 
		),
		'username' => array(
			'name' => 'username',
			'goodName' => 'username',
			'strField' => 'username',
			'sourceSingle' => 'username',
			'index' => 44,
			'type' => 201,
			'sqlExpression' => 'username',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["UserID"]',
					'textboxMaxLenth' => 10,
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
			'tableName' => 'invcustomers' 
		),
		'billing_address' => array(
			'name' => 'billing_address',
			'goodName' => 'billing_address',
			'strField' => 'billing_address',
			'sourceSingle' => 'billing_address',
			'index' => 45,
			'sqlExpression' => 'billing_address',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
					'textboxMaxLenth' => 200,
					'textHTML5Input' => '0',
					'textareaHeight' => 60,
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
			'tableName' => 'invcustomers' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	name,
	address,
	email,
	postal,
	nric,
	mobile,
	tel,
	doc_upload,
	id_property,
	docuserid,
	office_tel,
	remarks,
	doc_name,
	cus_type,
	trade,
	contact_person,
	destination,
	contact_email,
	biz_email,
	CONCAT_WS(\'; \', IF(LENGTH(`email`),`email`,NULL), IF(LENGTH(`contact_email`),`contact_email`,NULL), IF(LENGTH(`biz_email`),`biz_email`,NULL)) AS allemails,
	last_updated,
	registration_date,
	status,
	id_tx,
	id_type,
	country_incorporation,
	agency_name,
	license_no,
	agency_address,
	agency_postal,
	nationality,
	date_of_birth,
	occupation,
	contact_person_contact,
	gender,
	contact_person_id,
	salutation,
	race,
	tel_type,
	registration_no,
	COALESCE(nric, registration_no) AS nric_reg,
	date_added,
	username,
	billing_address
FROM
	invcustomers
ORDER BY
	id DESC
',
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
					'table' => 'invcustomers',
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
					'table' => 'invcustomers',
					'name' => 'name' 
				),
				'encrypted' => false,
				'columnName' => 'name' 
			),
			array(
				'sql' => 'address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'address' 
				),
				'encrypted' => false,
				'columnName' => 'address' 
			),
			array(
				'sql' => 'email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'email' 
				),
				'encrypted' => true,
				'columnName' => 'email' 
			),
			array(
				'sql' => 'postal',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'postal' 
				),
				'encrypted' => false,
				'columnName' => 'postal' 
			),
			array(
				'sql' => 'nric',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'nric' 
				),
				'encrypted' => true,
				'columnName' => 'nric' 
			),
			array(
				'sql' => 'mobile',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'mobile' 
				),
				'encrypted' => true,
				'columnName' => 'mobile' 
			),
			array(
				'sql' => 'tel',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'tel' 
				),
				'encrypted' => true,
				'columnName' => 'tel' 
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
					'table' => 'invcustomers',
					'name' => 'doc_upload' 
				),
				'encrypted' => false,
				'columnName' => 'doc_upload' 
			),
			array(
				'sql' => 'id_property',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'id_property' 
				),
				'encrypted' => false,
				'columnName' => 'id_property' 
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
					'table' => 'invcustomers',
					'name' => 'docuserid' 
				),
				'encrypted' => false,
				'columnName' => 'docuserid' 
			),
			array(
				'sql' => 'office_tel',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'office_tel' 
				),
				'encrypted' => false,
				'columnName' => 'office_tel' 
			),
			array(
				'sql' => 'remarks',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'remarks' 
				),
				'encrypted' => false,
				'columnName' => 'remarks' 
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
					'table' => 'invcustomers',
					'name' => 'doc_name' 
				),
				'encrypted' => false,
				'columnName' => 'doc_name' 
			),
			array(
				'sql' => 'cus_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'cus_type' 
				),
				'encrypted' => false,
				'columnName' => 'cus_type' 
			),
			array(
				'sql' => 'trade',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'trade' 
				),
				'encrypted' => false,
				'columnName' => 'trade' 
			),
			array(
				'sql' => 'contact_person',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'contact_person' 
				),
				'encrypted' => false,
				'columnName' => 'contact_person' 
			),
			array(
				'sql' => 'destination',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'destination' 
				),
				'encrypted' => false,
				'columnName' => 'destination' 
			),
			array(
				'sql' => 'contact_email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'contact_email' 
				),
				'encrypted' => true,
				'columnName' => 'contact_email' 
			),
			array(
				'sql' => 'biz_email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'biz_email' 
				),
				'encrypted' => true,
				'columnName' => 'biz_email' 
			),
			array(
				'sql' => 'CONCAT_WS(\'; \', IF(LENGTH(`email`),`email`,NULL), IF(LENGTH(`contact_email`),`contact_email`,NULL), IF(LENGTH(`biz_email`),`biz_email`,NULL))',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'allemails',
				'expression' => array(
					'sql' => 'CONCAT_WS(\'; \', IF(LENGTH(`email`),`email`,NULL), IF(LENGTH(`contact_email`),`contact_email`,NULL), IF(LENGTH(`biz_email`),`biz_email`,NULL))',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => '\'; \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'IF(LENGTH(`email`),`email`,NULL)',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'IF(LENGTH(`contact_email`),`contact_email`,NULL)',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'IF(LENGTH(`biz_email`),`biz_email`,NULL)',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'CONCAT_WS',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'allemails' 
			),
			array(
				'sql' => 'last_updated',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'last_updated' 
				),
				'encrypted' => false,
				'columnName' => 'last_updated' 
			),
			array(
				'sql' => 'registration_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'registration_date' 
				),
				'encrypted' => false,
				'columnName' => 'registration_date' 
			),
			array(
				'sql' => 'status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'status' 
				),
				'encrypted' => false,
				'columnName' => 'status' 
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
					'table' => 'invcustomers',
					'name' => 'id_tx' 
				),
				'encrypted' => false,
				'columnName' => 'id_tx' 
			),
			array(
				'sql' => 'id_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'id_type' 
				),
				'encrypted' => false,
				'columnName' => 'id_type' 
			),
			array(
				'sql' => 'country_incorporation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'country_incorporation' 
				),
				'encrypted' => false,
				'columnName' => 'country_incorporation' 
			),
			array(
				'sql' => 'agency_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'agency_name' 
				),
				'encrypted' => false,
				'columnName' => 'agency_name' 
			),
			array(
				'sql' => 'license_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'license_no' 
				),
				'encrypted' => true,
				'columnName' => 'license_no' 
			),
			array(
				'sql' => 'agency_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'agency_address' 
				),
				'encrypted' => false,
				'columnName' => 'agency_address' 
			),
			array(
				'sql' => 'agency_postal',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'agency_postal' 
				),
				'encrypted' => false,
				'columnName' => 'agency_postal' 
			),
			array(
				'sql' => 'nationality',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'nationality' 
				),
				'encrypted' => false,
				'columnName' => 'nationality' 
			),
			array(
				'sql' => 'date_of_birth',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'date_of_birth' 
				),
				'encrypted' => false,
				'columnName' => 'date_of_birth' 
			),
			array(
				'sql' => 'occupation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'occupation' 
				),
				'encrypted' => false,
				'columnName' => 'occupation' 
			),
			array(
				'sql' => 'contact_person_contact',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'contact_person_contact' 
				),
				'encrypted' => true,
				'columnName' => 'contact_person_contact' 
			),
			array(
				'sql' => 'gender',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'gender' 
				),
				'encrypted' => false,
				'columnName' => 'gender' 
			),
			array(
				'sql' => 'contact_person_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'contact_person_id' 
				),
				'encrypted' => true,
				'columnName' => 'contact_person_id' 
			),
			array(
				'sql' => 'salutation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'salutation' 
				),
				'encrypted' => false,
				'columnName' => 'salutation' 
			),
			array(
				'sql' => 'race',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'race' 
				),
				'encrypted' => false,
				'columnName' => 'race' 
			),
			array(
				'sql' => 'tel_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'tel_type' 
				),
				'encrypted' => false,
				'columnName' => 'tel_type' 
			),
			array(
				'sql' => 'registration_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'registration_no' 
				),
				'encrypted' => true,
				'columnName' => 'registration_no' 
			),
			array(
				'sql' => 'COALESCE(nric, registration_no)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'nric_reg',
				'expression' => array(
					'sql' => 'COALESCE(nric, registration_no)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'nric',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'registration_no',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'COALESCE',
					'functionType' => 5 
				),
				'encrypted' => true,
				'columnName' => 'nric_reg' 
			),
			array(
				'sql' => 'date_added',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'date_added' 
				),
				'encrypted' => false,
				'columnName' => 'date_added' 
			),
			array(
				'sql' => 'username',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'username' 
				),
				'encrypted' => false,
				'columnName' => 'username' 
			),
			array(
				'sql' => 'billing_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'billing_address' 
				),
				'encrypted' => false,
				'columnName' => 'billing_address' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'invcustomers',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'invcustomers',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'name',
						'address',
						'email',
						'postal',
						'nric',
						'mobile',
						'tel',
						'doc_upload',
						'id_property',
						'docuserid',
						'office_tel',
						'remarks',
						'doc_name',
						'cus_type',
						'trade',
						'contact_person',
						'destination',
						'contact_email',
						'biz_email',
						'last_updated',
						'registration_no',
						'registration_date',
						'status',
						'id_tx',
						'gender',
						'id_type',
						'country_incorporation',
						'agency_name',
						'license_no',
						'agency_address',
						'agency_postal',
						'nationality',
						'date_of_birth',
						'occupation',
						'beneficial_owner_indi',
						'beneficial_owner_corp',
						'contact_person_contact',
						'contact_person_id',
						'salutation',
						'race',
						'tel_type',
						'email_type',
						'relationship',
						'id_type1',
						'email_emailall',
						'date_added',
						'owner_type',
						'ownership_kind',
						'purchase_at',
						'purchase_date',
						'sold_at',
						'sold_date',
						'username',
						'billing_address' 
					),
					'name' => 'invcustomers' 
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
				'sql' => 'id DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'id' 
				),
				'asc' => false,
				'columnNumber' => 1 
			) 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => 0,
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
			),
			array(
				'fieldIndex' => 12,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 13,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 14,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 15,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 16,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 17,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 18,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 19,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 20,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 21,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 22,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 23,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 24,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 25,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 26,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 27,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 28,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 29,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 30,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 31,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 32,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 33,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 34,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 35,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 36,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 37,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 38,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 39,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 40,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 41,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 42,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 43,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 44,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	name,
	address,
	email,
	postal,
	nric,
	mobile,
	tel,
	doc_upload,
	id_property,
	docuserid,
	office_tel,
	remarks,
	doc_name,
	cus_type,
	trade,
	contact_person,
	destination,
	contact_email,
	biz_email,
	CONCAT_WS(\'; \', IF(LENGTH(`email`),`email`,NULL), IF(LENGTH(`contact_email`),`contact_email`,NULL), IF(LENGTH(`biz_email`),`biz_email`,NULL)) AS allemails,
	last_updated,
	registration_date,
	status,
	id_tx,
	id_type,
	country_incorporation,
	agency_name,
	license_no,
	agency_address,
	agency_postal,
	nationality,
	date_of_birth,
	occupation,
	contact_person_contact,
	gender,
	contact_person_id,
	salutation,
	race,
	tel_type,
	registration_no,
	COALESCE(nric, registration_no) AS nric_reg,
	date_added,
	username,
	billing_address',
		'fromListSql' => 'FROM
	invcustomers',
		'orderBySql' => 'ORDER BY
	id DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'invcustomers',
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
			'list',
			'list1' 
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
		'list1' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
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
			'name',
			'address',
			'email',
			'postal',
			'nric',
			'mobile',
			'tel',
			'doc_upload',
			'id_property',
			'docuserid',
			'office_tel',
			'remarks',
			'doc_name',
			'cus_type',
			'trade',
			'contact_person',
			'destination',
			'contact_email',
			'biz_email',
			'allemails',
			'last_updated',
			'registration_date',
			'status',
			'id_tx',
			'id_type',
			'country_incorporation',
			'agency_name',
			'license_no',
			'agency_address',
			'agency_postal',
			'nationality',
			'date_of_birth',
			'occupation',
			'contact_person_contact',
			'gender',
			'contact_person_id',
			'salutation',
			'race',
			'tel_type',
			'registration_no',
			'nric_reg',
			'date_added',
			'username',
			'billing_address' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'name',
			'address',
			'email',
			'postal',
			'nric',
			'mobile',
			'tel',
			'doc_upload',
			'id_property',
			'docuserid',
			'office_tel',
			'remarks',
			'doc_name',
			'cus_type',
			'trade',
			'contact_person',
			'destination',
			'contact_email',
			'biz_email',
			'allemails',
			'last_updated',
			'registration_date',
			'status',
			'id_tx',
			'id_type',
			'country_incorporation',
			'agency_name',
			'license_no',
			'agency_address',
			'agency_postal',
			'nationality',
			'date_of_birth',
			'occupation',
			'contact_person_contact',
			'gender',
			'contact_person_id',
			'salutation',
			'race',
			'tel_type',
			'registration_no',
			'nric_reg',
			'date_added',
			'username',
			'billing_address' 
		) 
	),
	'connId' => 'Tables',
	'sortByFields' => array(
		'sortOrder' => array( 
			 
		) 
	),
	'clickActions' => array(
		'row' => array(
			'action' => 'open',
			'codeData' => array(
				 
			),
			'gridData' => array(
				'action' => 'checkbox',
				'table' => null 
			),
			'openData' => array(
				'how' => 'popup',
				'page' => 'view',
				'table' => null,
				'url' => '' 
			) 
		),
		'fields' => array(
			'address' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'agency_address' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'agency_name' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'agency_postal' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'allemails' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'biz_email' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'contact_email' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'contact_person' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'contact_person_contact' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'contact_person_id' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'country_incorporation' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'cus_type' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'date_added' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'date_of_birth' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'destination' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'doc_name' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'doc_upload' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'docuserid' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'email' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'email_type' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'gender' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'id' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'id_property' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'id_tx' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'id_type' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'last_updated' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'license_no' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'mobile' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'name' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'nationality' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'nric' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'nric_reg' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'occupation' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'office_tel' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'postal' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'race' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'registration_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'registration_no' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remarks' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'salutation' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'status' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'tel' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'tel_type' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'trade' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			) 
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
	$runnerTableLabels['invcustomers'] = array(
	'tableCaption' => 'Contacts',
	'fieldLabels' => array(
		'id' => 'Id',
		'name' => 'Name',
		'address' => 'Address',
		'email' => 'Email',
		'postal' => 'Postal Code',
		'nric' => 'NRIC / FIN / PP / CEA #',
		'mobile' => 'Mobile',
		'tel' => 'Other Contact No.',
		'doc_upload' => 'Doc Upload',
		'id_property' => 'Id Property',
		'docuserid' => 'Docuserid',
		'office_tel' => 'Office Tel',
		'remarks' => 'Remarks',
		'doc_name' => 'Doc Name',
		'cus_type' => 'Type',
		'trade' => 'Trade',
		'contact_person' => 'Contact Person',
		'destination' => 'Destination',
		'contact_email' => 'Contact Person Email',
		'biz_email' => 'Biz Email',
		'allemails' => 'All Emails',
		'last_updated' => 'Last Updated',
		'registration_date' => 'Incorporation Date',
		'status' => 'Status',
		'id_tx' => 'Id Txn',
		'id_type' => 'Type of ID',
		'country_incorporation' => 'Country Incorporation',
		'agency_name' => 'Agency Name',
		'license_no' => 'Agency CEA Reg #',
		'agency_address' => 'Address',
		'agency_postal' => 'Postal Code',
		'nationality' => 'Nationality',
		'date_of_birth' => 'Date Of Birth',
		'occupation' => 'Occupation',
		'contact_person_contact' => 'Contact Person Phone',
		'gender' => 'Gender',
		'contact_person_id' => 'Contact Person ID',
		'salutation' => 'Salutation',
		'race' => 'Race',
		'tel_type' => 'Type of Contact',
		'registration_no' => 'Reg # / UEN',
		'nric_reg' => 'NRIC/Reg',
		'date_added' => 'Dated',
		'username' => 'Username',
		'billing_address' => 'Billing Address' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'name' => 'Name of person or Entity',
		'address' => 'Full address includes unit number and postal code',
		'email' => 'If not available, input \'no@email.com\'',
		'postal' => 'Enter the postal code and click "Find Address" to retrieve the mailing address',
		'nric' => '',
		'mobile' => 'Input \'0\' if not available',
		'tel' => 'For non local contact number, please include country area code',
		'doc_upload' => 'To upload copy of ID, name card or any other relevant documents, if available',
		'id_property' => '',
		'docuserid' => '',
		'office_tel' => 'Input \'0\' if Tel not available.<br>Foreign Tel, please include country area code',
		'remarks' => '',
		'doc_name' => '',
		'cus_type' => 'Select type of Contact',
		'trade' => 'Principal Activities as in ACRA Biz file',
		'contact_person' => 'Director/Partner/Sole Proprietor Name',
		'destination' => 'E.g Director / Sole Proprietor',
		'contact_email' => 'If not available, input \'no@email.com\'',
		'biz_email' => 'If email not available, input \'no@email.com\'',
		'allemails' => '',
		'last_updated' => '',
		'registration_date' => 'Date can be estimate and update later when available',
		'status' => '',
		'id_tx' => '',
		'id_type' => '',
		'country_incorporation' => '',
		'agency_name' => '',
		'license_no' => '',
		'agency_address' => 'Full address includes unit number and postal code',
		'agency_postal' => 'Key in postal code click Find Address to get mailing address',
		'nationality' => '',
		'date_of_birth' => 'The date can be an estimate and updated later when confirmed',
		'occupation' => 'E.g Network Engineer',
		'contact_person_contact' => 'If not available, input \'0\'.<br>For foreign Tel, please include country area code',
		'gender' => '',
		'contact_person_id' => 'NRIC / Passport / FIN',
		'salutation' => '',
		'race' => '',
		'tel_type' => '',
		'registration_no' => 'Input \'NA\' if not available.',
		'nric_reg' => '',
		'date_added' => '',
		'username' => '',
		'billing_address' => 'If different from home address' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'name' => '',
		'address' => '',
		'email' => '',
		'postal' => '',
		'nric' => 'NRIC/FIN/Passport/CEA#',
		'mobile' => '8 digit local mobile number only',
		'tel' => '',
		'doc_upload' => '',
		'id_property' => '',
		'docuserid' => '',
		'office_tel' => '',
		'remarks' => '',
		'doc_name' => '',
		'cus_type' => '',
		'trade' => 'E.g BUILDING CONSTRUCTION',
		'contact_person' => '',
		'destination' => '',
		'contact_email' => '',
		'biz_email' => '',
		'allemails' => '',
		'last_updated' => '',
		'registration_date' => '',
		'status' => '',
		'id_tx' => '',
		'id_type' => '',
		'country_incorporation' => '',
		'agency_name' => 'Name of Agency',
		'license_no' => 'Agency CEA Reg #',
		'agency_address' => '',
		'agency_postal' => 'Postal Code',
		'nationality' => '',
		'date_of_birth' => '',
		'occupation' => '',
		'contact_person_contact' => '',
		'gender' => '',
		'contact_person_id' => '',
		'salutation' => '',
		'race' => '',
		'tel_type' => '',
		'registration_no' => '',
		'nric_reg' => '',
		'date_added' => '',
		'username' => '',
		'billing_address' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>