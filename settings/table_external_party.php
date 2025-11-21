<?php
global $runnerTableSettings;
$runnerTableSettings['external_party'] = array(
	'name' => 'external_party',
	'shortName' => 'external_party',
	'advancedSecurityType' => 1,
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'list' => array( 
			'ext_pty_comm',
			'ext_pty_comm1',
			'list' 
		),
		'import' => array( 
			'import' 
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
		'export' => 'export',
		'ext_pty_comm' => 'list',
		'ext_pty_comm1' => 'list',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'list' => 'ext_pty_comm',
		'import' => 'import',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'tableOwnerIdField' => 'username',
	'usersOwnerIdField' => 'username',
	'hasEncryptedFields' => true,
	'listAjax' => true,
	'detailsBadgeColor' => 'b22222',
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
id_extparty,
category,
`role`,
name_ext_party,
identification,
mobile,
email,
address,
postal,
prop_address,
prop_postal,
comm_tp,
comm_percent_tp,
gst,
gst_include,
gross_tp,
username
FROM external_party',
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
			'tableName' => 'external_party' 
		),
		'id_extparty' => array(
			'name' => 'id_extparty',
			'goodName' => 'id_extparty',
			'strField' => 'id_extparty',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'id_extparty',
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
			'tableName' => 'external_party' 
		),
		'category' => array(
			'name' => 'category',
			'goodName' => 'category',
			'strField' => 'category',
			'index' => 3,
			'sqlExpression' => 'category',
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
					'defaultValue' => '$_SESSION["category"]',
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
			'tableName' => 'external_party' 
		),
		'role' => array(
			'name' => 'role',
			'goodName' => 'role',
			'strField' => 'role',
			'index' => 4,
			'sqlExpression' => '`role`',
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
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'transact_party',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'tx_party',
					'lookupDisplayField' => 'tx_party',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'category',
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
			'tableName' => 'external_party' 
		),
		'name_ext_party' => array(
			'name' => 'name_ext_party',
			'goodName' => 'name_ext_party',
			'strField' => 'name_ext_party',
			'index' => 5,
			'sqlExpression' => 'name_ext_party',
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
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupOrderBy' => 'name',
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
			'tableName' => 'external_party' 
		),
		'identification' => array(
			'name' => 'identification',
			'goodName' => 'identification',
			'strField' => 'identification',
			'index' => 6,
			'encrypted' => true,
			'sqlExpression' => 'identification',
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
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name_ext_party',
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
			'tableName' => 'external_party' 
		),
		'mobile' => array(
			'name' => 'mobile',
			'goodName' => 'mobile',
			'strField' => 'mobile',
			'index' => 7,
			'encrypted' => true,
			'sqlExpression' => 'mobile',
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
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'mobile',
					'lookupDisplayField' => 'mobile',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name_ext_party',
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
			'tableName' => 'external_party' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'index' => 8,
			'encrypted' => true,
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
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'email',
					'lookupDisplayField' => 'email',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name_ext_party',
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
			'tableName' => 'external_party' 
		),
		'address' => array(
			'name' => 'address',
			'goodName' => 'address',
			'strField' => 'address',
			'index' => 9,
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
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'address',
					'lookupDisplayField' => 'address',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name_ext_party',
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
			'tableName' => 'external_party' 
		),
		'postal' => array(
			'name' => 'postal',
			'goodName' => 'postal',
			'strField' => 'postal',
			'index' => 10,
			'sqlExpression' => 'postal',
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
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'postal',
					'lookupDisplayField' => 'postal',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name_ext_party',
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
			'tableName' => 'external_party' 
		),
		'prop_address' => array(
			'name' => 'prop_address',
			'goodName' => 'prop_address',
			'strField' => 'prop_address',
			'index' => 11,
			'sqlExpression' => 'prop_address',
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
					'defaultValue' => '$_SESSION["prop_address"]',
					'textboxMaxLenth' => 100,
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
			'tableName' => 'external_party' 
		),
		'prop_postal' => array(
			'name' => 'prop_postal',
			'goodName' => 'prop_postal',
			'strField' => 'prop_postal',
			'index' => 12,
			'sqlExpression' => 'prop_postal',
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
					'defaultValue' => '$_SESSION["prop_postal"]',
					'textboxMaxLenth' => 10,
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
			'tableName' => 'external_party' 
		),
		'comm_tp' => array(
			'name' => 'comm_tp',
			'goodName' => 'comm_tp',
			'strField' => 'comm_tp',
			'index' => 13,
			'type' => 14,
			'sqlExpression' => 'comm_tp',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number',
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
			'tableName' => 'external_party' 
		),
		'comm_percent_tp' => array(
			'name' => 'comm_percent_tp',
			'goodName' => 'comm_percent_tp',
			'strField' => 'comm_percent_tp',
			'index' => 14,
			'type' => 14,
			'sqlExpression' => 'comm_percent_tp',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number',
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
			'tableName' => 'external_party' 
		),
		'gst' => array(
			'name' => 'gst',
			'goodName' => 'gst',
			'strField' => 'gst',
			'index' => 15,
			'type' => 14,
			'sqlExpression' => 'gst',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number',
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
			'tableName' => 'external_party' 
		),
		'gst_include' => array(
			'name' => 'gst_include',
			'goodName' => 'gst_include',
			'strField' => 'gst_include',
			'index' => 16,
			'type' => 14,
			'sqlExpression' => 'gst_include',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number',
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
			'tableName' => 'external_party' 
		),
		'gross_tp' => array(
			'name' => 'gross_tp',
			'goodName' => 'gross_tp',
			'strField' => 'gross_tp',
			'index' => 17,
			'type' => 3,
			'sqlExpression' => 'gross_tp',
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
			'tableName' => 'external_party' 
		),
		'username' => array(
			'name' => 'username',
			'goodName' => 'username',
			'strField' => 'username',
			'sourceSingle' => 'username',
			'index' => 18,
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
			'tableName' => 'external_party' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'transactions',
			'detailsKeys' => array( 
				'id_extparty' 
			),
			'masterKeys' => array( 
				'id' 
			) 
		),
		array(
			'table' => 'transactions-admin',
			'detailsKeys' => array( 
				'id_extparty' 
			),
			'masterKeys' => array( 
				'id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
id,
id_extparty,
category,
`role`,
name_ext_party,
identification,
mobile,
email,
address,
postal,
prop_address,
prop_postal,
comm_tp,
comm_percent_tp,
gst,
gst_include,
gross_tp,
username
FROM external_party',
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
					'table' => 'external_party',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'id_extparty',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'id_extparty' 
				),
				'encrypted' => false,
				'columnName' => 'id_extparty' 
			),
			array(
				'sql' => 'category',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'category' 
				),
				'encrypted' => false,
				'columnName' => 'category' 
			),
			array(
				'sql' => '`role`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'role' 
				),
				'encrypted' => false,
				'columnName' => 'role' 
			),
			array(
				'sql' => 'name_ext_party',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'name_ext_party' 
				),
				'encrypted' => false,
				'columnName' => 'name_ext_party' 
			),
			array(
				'sql' => 'identification',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'identification' 
				),
				'encrypted' => true,
				'columnName' => 'identification' 
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
					'table' => 'external_party',
					'name' => 'mobile' 
				),
				'encrypted' => true,
				'columnName' => 'mobile' 
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
					'table' => 'external_party',
					'name' => 'email' 
				),
				'encrypted' => true,
				'columnName' => 'email' 
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
					'table' => 'external_party',
					'name' => 'address' 
				),
				'encrypted' => false,
				'columnName' => 'address' 
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
					'table' => 'external_party',
					'name' => 'postal' 
				),
				'encrypted' => false,
				'columnName' => 'postal' 
			),
			array(
				'sql' => 'prop_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'prop_address' 
				),
				'encrypted' => false,
				'columnName' => 'prop_address' 
			),
			array(
				'sql' => 'prop_postal',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'prop_postal' 
				),
				'encrypted' => false,
				'columnName' => 'prop_postal' 
			),
			array(
				'sql' => 'comm_tp',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'comm_tp' 
				),
				'encrypted' => false,
				'columnName' => 'comm_tp' 
			),
			array(
				'sql' => 'comm_percent_tp',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'comm_percent_tp' 
				),
				'encrypted' => false,
				'columnName' => 'comm_percent_tp' 
			),
			array(
				'sql' => 'gst',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'gst' 
				),
				'encrypted' => false,
				'columnName' => 'gst' 
			),
			array(
				'sql' => 'gst_include',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'gst_include' 
				),
				'encrypted' => false,
				'columnName' => 'gst_include' 
			),
			array(
				'sql' => 'gross_tp',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'external_party',
					'name' => 'gross_tp' 
				),
				'encrypted' => false,
				'columnName' => 'gross_tp' 
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
					'table' => 'external_party',
					'name' => 'username' 
				),
				'encrypted' => false,
				'columnName' => 'username' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'external_party',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'external_party',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'id_extparty',
						'category',
						'role',
						'name_ext_party',
						'identification',
						'mobile',
						'email',
						'address',
						'postal',
						'prop_address',
						'prop_postal',
						'comm_tp',
						'comm_percent_tp',
						'gst',
						'gst_include',
						'gross_tp',
						'docuser_cea',
						'name_agent',
						'username' 
					),
					'name' => 'external_party' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
id_extparty,
category,
`role`,
name_ext_party,
identification,
mobile,
email,
address,
postal,
prop_address,
prop_postal,
comm_tp,
comm_percent_tp,
gst,
gst_include,
gross_tp,
username',
		'fromListSql' => 'FROM external_party',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'external_party',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'list' => array( 
			'ext_pty_comm',
			'ext_pty_comm1',
			'list' 
		),
		'import' => array( 
			'import' 
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
		'export' => 'export',
		'ext_pty_comm' => 'list',
		'ext_pty_comm1' => 'list',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'list' => 'ext_pty_comm',
		'import' => 'import',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'id_extparty',
			'category',
			'role',
			'name_ext_party',
			'identification',
			'mobile',
			'email',
			'address',
			'postal',
			'prop_address',
			'prop_postal',
			'comm_tp',
			'comm_percent_tp',
			'gst',
			'gst_include',
			'gross_tp',
			'username' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'id_extparty',
			'category',
			'role',
			'name_ext_party',
			'identification',
			'mobile',
			'email',
			'address',
			'postal',
			'prop_address',
			'prop_postal',
			'comm_tp',
			'comm_percent_tp',
			'gst',
			'gst_include',
			'gross_tp',
			'username' 
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
	$runnerTableLabels['external_party'] = array(
	'tableCaption' => 'Fees to Third Party',
	'fieldLabels' => array(
		'id' => 'Id',
		'id_extparty' => 'Tx ID',
		'category' => 'Category',
		'role' => 'Role',
		'name_ext_party' => 'Name',
		'identification' => 'ID',
		'mobile' => 'Mobile',
		'email' => 'Email',
		'address' => 'Address',
		'postal' => 'Postal',
		'prop_address' => 'Prop Address',
		'prop_postal' => 'Postal Code',
		'comm_tp' => 'Amt $',
		'comm_percent_tp' => 'Comm %',
		'gst' => 'GST',
		'gst_include' => 'GST Include',
		'gross_tp' => 'Gross',
		'username' => 'Username' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'id_extparty' => '',
		'category' => '',
		'role' => '',
		'name_ext_party' => '',
		'identification' => '',
		'mobile' => '',
		'email' => '',
		'address' => '',
		'postal' => '',
		'prop_address' => '',
		'prop_postal' => '',
		'comm_tp' => '',
		'comm_percent_tp' => '',
		'gst' => '',
		'gst_include' => '',
		'gross_tp' => '',
		'username' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'id_extparty' => '',
		'category' => '',
		'role' => '',
		'name_ext_party' => '',
		'identification' => 'NRIC/FIN/Passport',
		'mobile' => 'Mobile #',
		'email' => '',
		'address' => '',
		'postal' => '',
		'prop_address' => '',
		'prop_postal' => '',
		'comm_tp' => '',
		'comm_percent_tp' => '',
		'gst' => '',
		'gst_include' => '',
		'gross_tp' => '',
		'username' => '' 
	),
	'pageTitles' => array(
		'ext_pty_comm' => 'Less Fee to Third Party' 
	) 
);
}
?>