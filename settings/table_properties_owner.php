<?php
global $runnerTableSettings;
$runnerTableSettings['properties_owner'] = array(
	'name' => 'properties_owner',
	'type' => 1,
	'shortName' => 'properties_owner',
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
	'tableOwnerIdField' => 'id',
	'usersOwnerIdField' => 'username',
	'listAjax' => true,
	'afterEditAction' => 2,
	'afterAddAction' => 2,
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
nationality,
date_of_birth,
occupation,
contact_person_contact,
gender,
contact_person_id,
salutation,
race,
tel_type,
email_type,
registration_no,
CONCAT(Ifnull(nric,""), Ifnull(registration_no,"")) AS nric_reg,
owner_type,
ownership_kind,
purchase_at,
purchase_date,
sold_at,
sold_date
FROM invcustomers
ORDER BY id DESC',
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
					'format' => 'Lookup wizard',
					'validateAs' => 'Regular expression',
					'validateRegex' => '[.(),a-zA-Z0-9][.(),a-zA-Z0-9 ]*',
					'validateRegexMessage' => array(
						'text' => 'Special characters not allowed!',
						'type' => 0 
					),
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupAllowAdd' => true,
					'lookupAddPage' => 'add',
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
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 60,
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'address',
					'lookupDisplayField' => 'address',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name',
							'lookupField' => 'name' 
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
			'tableName' => 'invcustomers' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => 'email',
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
			'sqlExpression' => 'nric',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'denyDuplicateMessage' => array(
						'text' => 'ID %value% already exists',
						'type' => 0 
					),
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name',
							'lookupField' => 'name' 
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
		'mobile' => array(
			'name' => 'mobile',
			'goodName' => 'mobile',
			'strField' => 'mobile',
			'sourceSingle' => 'mobile',
			'index' => 7,
			'type' => 201,
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
					'fileThumbnailSize' => 150,
					'fileTypes' => array( 
						'gif',
						'jpeg',
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
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
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
					'dateEditType' => 13,
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
		'nationality' => array(
			'name' => 'nationality',
			'goodName' => 'nationality',
			'strField' => 'nationality',
			'sourceSingle' => 'nationality',
			'index' => 28,
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
			'index' => 29,
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
		'occupation' => array(
			'name' => 'occupation',
			'goodName' => 'occupation',
			'strField' => 'occupation',
			'sourceSingle' => 'occupation',
			'index' => 30,
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
			'index' => 31,
			'type' => 201,
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
			'index' => 32,
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
			'index' => 33,
			'type' => 201,
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
			'index' => 34,
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
			'index' => 35,
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
			'index' => 36,
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
		'email_type' => array(
			'name' => 'email_type',
			'goodName' => 'email_type',
			'strField' => 'email_type',
			'sourceSingle' => 'email_type',
			'index' => 37,
			'sqlExpression' => 'email_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'defaultValue' => '"NA"',
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Private',
						'Work',
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
			'index' => 38,
			'type' => 201,
			'sqlExpression' => 'registration_no',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
		'nric_reg' => array(
			'name' => 'nric_reg',
			'goodName' => 'nric_reg',
			'strField' => 'nric_reg',
			'index' => 39,
			'type' => 201,
			'sqlExpression' => 'CONCAT(Ifnull(nric,""), Ifnull(registration_no,""))',
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
		'owner_type' => array(
			'name' => 'owner_type',
			'goodName' => 'owner_type',
			'strField' => 'owner_type',
			'sourceSingle' => 'owner_type',
			'index' => 40,
			'sqlExpression' => 'owner_type',
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
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'cus_type',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name',
							'lookupField' => 'name' 
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
		'ownership_kind' => array(
			'name' => 'ownership_kind',
			'goodName' => 'ownership_kind',
			'strField' => 'ownership_kind',
			'sourceSingle' => 'ownership_kind',
			'index' => 41,
			'sqlExpression' => 'ownership_kind',
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
					'lookupTable' => 'ownership_kind',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'kind',
					'lookupDisplayField' => 'kind',
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
		'purchase_at' => array(
			'name' => 'purchase_at',
			'goodName' => 'purchase_at',
			'strField' => 'purchase_at',
			'sourceSingle' => 'purchase_at',
			'index' => 42,
			'sqlExpression' => 'purchase_at',
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
		'purchase_date' => array(
			'name' => 'purchase_date',
			'goodName' => 'purchase_date',
			'strField' => 'purchase_date',
			'sourceSingle' => 'purchase_date',
			'index' => 43,
			'type' => 7,
			'sqlExpression' => 'purchase_date',
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
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 13,
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
		'sold_at' => array(
			'name' => 'sold_at',
			'goodName' => 'sold_at',
			'strField' => 'sold_at',
			'sourceSingle' => 'sold_at',
			'index' => 44,
			'sqlExpression' => 'sold_at',
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
		'sold_date' => array(
			'name' => 'sold_date',
			'goodName' => 'sold_date',
			'strField' => 'sold_date',
			'sourceSingle' => 'sold_date',
			'index' => 45,
			'type' => 7,
			'sqlExpression' => 'sold_date',
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
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 13,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
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
nationality,
date_of_birth,
occupation,
contact_person_contact,
gender,
contact_person_id,
salutation,
race,
tel_type,
email_type,
registration_no,
CONCAT(Ifnull(nric,""), Ifnull(registration_no,"")) AS nric_reg,
owner_type,
ownership_kind,
purchase_at,
purchase_date,
sold_at,
sold_date
FROM invcustomers
ORDER BY id DESC',
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
				'encrypted' => false,
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
				'encrypted' => false,
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
				'encrypted' => false,
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
				'encrypted' => false,
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
				'encrypted' => false,
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
				'encrypted' => false,
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
				'encrypted' => false,
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
				'encrypted' => false,
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
				'sql' => 'email_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'email_type' 
				),
				'encrypted' => false,
				'columnName' => 'email_type' 
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
				'encrypted' => false,
				'columnName' => 'registration_no' 
			),
			array(
				'sql' => 'CONCAT(Ifnull(nric,""), Ifnull(registration_no,""))',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'nric_reg',
				'expression' => array(
					'sql' => 'CONCAT(Ifnull(nric,""), Ifnull(registration_no,""))',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'Ifnull(nric,"")',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'Ifnull(registration_no,"")',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'CONCAT',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'nric_reg' 
			),
			array(
				'sql' => 'owner_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'owner_type' 
				),
				'encrypted' => false,
				'columnName' => 'owner_type' 
			),
			array(
				'sql' => 'ownership_kind',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'ownership_kind' 
				),
				'encrypted' => false,
				'columnName' => 'ownership_kind' 
			),
			array(
				'sql' => 'purchase_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'purchase_at' 
				),
				'encrypted' => false,
				'columnName' => 'purchase_at' 
			),
			array(
				'sql' => 'purchase_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'purchase_date' 
				),
				'encrypted' => false,
				'columnName' => 'purchase_date' 
			),
			array(
				'sql' => 'sold_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'sold_at' 
				),
				'encrypted' => false,
				'columnName' => 'sold_at' 
			),
			array(
				'sql' => 'sold_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'sold_date' 
				),
				'encrypted' => false,
				'columnName' => 'sold_date' 
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
nationality,
date_of_birth,
occupation,
contact_person_contact,
gender,
contact_person_id,
salutation,
race,
tel_type,
email_type,
registration_no,
CONCAT(Ifnull(nric,""), Ifnull(registration_no,"")) AS nric_reg,
owner_type,
ownership_kind,
purchase_at,
purchase_date,
sold_at,
sold_date',
		'fromListSql' => 'FROM invcustomers',
		'orderBySql' => 'ORDER BY id DESC',
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
			'nationality',
			'date_of_birth',
			'occupation',
			'contact_person_contact',
			'gender',
			'contact_person_id',
			'salutation',
			'race',
			'tel_type',
			'email_type',
			'registration_no',
			'nric_reg',
			'owner_type',
			'ownership_kind',
			'purchase_at',
			'purchase_date',
			'sold_at',
			'sold_date' 
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
			'nationality',
			'date_of_birth',
			'occupation',
			'contact_person_contact',
			'gender',
			'contact_person_id',
			'salutation',
			'race',
			'tel_type',
			'email_type',
			'registration_no',
			'nric_reg',
			'owner_type',
			'ownership_kind',
			'purchase_at',
			'purchase_date',
			'sold_at',
			'sold_date' 
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
	$runnerTableLabels['properties_owner'] = array(
	'tableCaption' => 'Properties Owner',
	'fieldLabels' => array(
		'id' => 'Id',
		'name' => 'Name',
		'address' => 'Address',
		'email' => 'Email',
		'postal' => 'Postal Code',
		'nric' => 'NRIC / FIN / PP',
		'mobile' => 'Mobile',
		'tel' => 'Tel',
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
		'id_tx' => 'Id Tx',
		'id_type' => 'Type of ID',
		'country_incorporation' => 'Country Incorporation',
		'nationality' => 'Nationality',
		'date_of_birth' => 'Date Of Birth',
		'occupation' => 'Occupation',
		'contact_person_contact' => 'Contact Person Phone',
		'gender' => 'Gender',
		'contact_person_id' => 'Contact Person ID',
		'salutation' => 'Salutation',
		'race' => 'Race',
		'tel_type' => 'Type of Contact',
		'email_type' => 'Type of Email',
		'registration_no' => 'Reg # / UEN',
		'nric_reg' => 'ID',
		'owner_type' => 'Owner Type',
		'ownership_kind' => 'Ownership Kind',
		'purchase_at' => 'Purchase At',
		'purchase_date' => 'Purchase Date',
		'sold_at' => 'Sold At',
		'sold_date' => 'Sold Date' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'name' => '',
		'address' => '',
		'email' => '',
		'postal' => '',
		'nric' => '',
		'mobile' => '',
		'tel' => '',
		'doc_upload' => '',
		'id_property' => '',
		'docuserid' => '',
		'office_tel' => '',
		'remarks' => '',
		'doc_name' => '',
		'cus_type' => '',
		'trade' => '',
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
		'nationality' => '',
		'date_of_birth' => '',
		'occupation' => '',
		'contact_person_contact' => '',
		'gender' => '',
		'contact_person_id' => '',
		'salutation' => '',
		'race' => '',
		'tel_type' => '',
		'email_type' => '',
		'registration_no' => '',
		'nric_reg' => '',
		'owner_type' => '',
		'ownership_kind' => '',
		'purchase_at' => '',
		'purchase_date' => '',
		'sold_at' => '',
		'sold_date' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'name' => '',
		'address' => '',
		'email' => '',
		'postal' => '',
		'nric' => '',
		'mobile' => '',
		'tel' => '',
		'doc_upload' => '',
		'id_property' => '',
		'docuserid' => '',
		'office_tel' => '',
		'remarks' => '',
		'doc_name' => '',
		'cus_type' => '',
		'trade' => '',
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
		'nationality' => '',
		'date_of_birth' => '',
		'occupation' => '',
		'contact_person_contact' => '',
		'gender' => '',
		'contact_person_id' => '',
		'salutation' => '',
		'race' => '',
		'tel_type' => '',
		'email_type' => '',
		'registration_no' => '',
		'nric_reg' => '',
		'owner_type' => '',
		'ownership_kind' => '',
		'purchase_at' => '',
		'purchase_date' => '',
		'sold_at' => '',
		'sold_date' => '' 
	),
	'pageTitles' => array(
		'add' => 'Property Owner, Add new',
		'edit' => 'Property Owner, Edit [{%id}]',
		'view' => 'Property Owner {%id}' 
	) 
);
}
?>