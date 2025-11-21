<?php
global $runnerTableSettings;
$runnerTableSettings['eat_users_user'] = array(
	'name' => 'eat_users_user',
	'type' => 1,
	'shortName' => 'eat_users_user',
	'advancedSecurityType' => 1,
	'pagesByType' => array(
		'edit' => array( 
			'edit' 
		),
		'list' => array( 
			'list' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view' 
		) 
	),
	'pageTypes' => array(
		'edit' => 'edit',
		'list' => 'list',
		'masterlist' => 'masterlist',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'edit' => 'edit',
		'list' => 'list',
		'masterlist' => 'masterlist',
		'search' => 'search',
		'view' => 'view' 
	),
	'tableOwnerIdField' => 'username',
	'usersOwnerIdField' => 'username',
	'hasEncryptedFields' => true,
	'afterEditAction' => 0,
	'detailsBadgeColor' => 'DB7093',
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
eatuser_id,
user_status,
username,
user_group,
signup_date,
password,
email,
company_dbname,
active,
full_name,
biz_name,
mobile,
bank_ac_no,
bank_name,
date_of_birth,
entry_year,
home_address,
home_tel,
nric,
cut_to_agency,
salesperson_share,
agency,
agency_cea_reg,
destination
FROM eat_users',
	'keyFields' => array( 
		'eatuser_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'eatuser_id' => array(
			'name' => 'eatuser_id',
			'goodName' => 'eatuser_id',
			'strField' => 'eatuser_id',
			'sourceSingle' => 'eatuser_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'eatuser_id',
			'viewFormats' => array(
				'view' => array(
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
			'tableName' => 'eat_users' 
		),
		'user_status' => array(
			'name' => 'user_status',
			'goodName' => 'user_status',
			'strField' => 'user_status',
			'sourceSingle' => 'user_status',
			'index' => 2,
			'sqlExpression' => 'user_status',
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
					'lookupType' => 0,
					'lookupValues' => array( 
						'Active',
						'Non active' 
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
			'tableName' => 'eat_users' 
		),
		'username' => array(
			'name' => 'username',
			'goodName' => 'username',
			'strField' => 'username',
			'sourceSingle' => 'username',
			'index' => 3,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'username',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
			'tableName' => 'eat_users' 
		),
		'user_group' => array(
			'name' => 'user_group',
			'goodName' => 'user_group',
			'strField' => 'user_group',
			'sourceSingle' => 'user_group',
			'index' => 4,
			'sqlExpression' => 'user_group',
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
					'lookupType' => 0,
					'lookupValues' => array( 
						'account admin',
						'user' 
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
			'tableName' => 'eat_users' 
		),
		'signup_date' => array(
			'name' => 'signup_date',
			'goodName' => 'signup_date',
			'strField' => 'signup_date',
			'sourceSingle' => 'signup_date',
			'index' => 5,
			'type' => 135,
			'sqlExpression' => 'signup_date',
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
			'tableName' => 'eat_users' 
		),
		'password' => array(
			'name' => 'password',
			'goodName' => 'password',
			'strField' => 'password',
			'sourceSingle' => 'password',
			'index' => 6,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'password',
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
			'tableName' => 'eat_users' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'sourceSingle' => 'email',
			'index' => 7,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'email',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
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
			'tableName' => 'eat_users' 
		),
		'company_dbname' => array(
			'name' => 'company_dbname',
			'goodName' => 'company_dbname',
			'strField' => 'company_dbname',
			'sourceSingle' => 'company_dbname',
			'index' => 8,
			'sqlExpression' => 'company_dbname',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
			'tableName' => 'eat_users' 
		),
		'active' => array(
			'name' => 'active',
			'goodName' => 'active',
			'strField' => 'active',
			'sourceSingle' => 'active',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'active',
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
			'tableName' => 'eat_users' 
		),
		'full_name' => array(
			'name' => 'full_name',
			'goodName' => 'full_name',
			'strField' => 'full_name',
			'sourceSingle' => 'full_name',
			'index' => 10,
			'sqlExpression' => 'full_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
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
			'tableName' => 'eat_users' 
		),
		'biz_name' => array(
			'name' => 'biz_name',
			'goodName' => 'biz_name',
			'strField' => 'biz_name',
			'sourceSingle' => 'biz_name',
			'index' => 11,
			'sqlExpression' => 'biz_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
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
			'tableName' => 'eat_users' 
		),
		'mobile' => array(
			'name' => 'mobile',
			'goodName' => 'mobile',
			'strField' => 'mobile',
			'sourceSingle' => 'mobile',
			'index' => 12,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'mobile',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
					'validateAs' => 'Number',
					'denyDuplicate' => true,
					'textboxMaxLenth' => 50,
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
			'tableName' => 'eat_users' 
		),
		'bank_ac_no' => array(
			'name' => 'bank_ac_no',
			'goodName' => 'bank_ac_no',
			'strField' => 'bank_ac_no',
			'sourceSingle' => 'bank_ac_no',
			'index' => 13,
			'encrypted' => true,
			'sqlExpression' => 'bank_ac_no',
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
			'tableName' => 'eat_users' 
		),
		'bank_name' => array(
			'name' => 'bank_name',
			'goodName' => 'bank_name',
			'strField' => 'bank_name',
			'sourceSingle' => 'bank_name',
			'index' => 14,
			'sqlExpression' => 'bank_name',
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
			'tableName' => 'eat_users' 
		),
		'date_of_birth' => array(
			'name' => 'date_of_birth',
			'goodName' => 'date_of_birth',
			'strField' => 'date_of_birth',
			'sourceSingle' => 'date_of_birth',
			'index' => 15,
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
					'required' => true,
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 2,
					'dateFirstYearFactor' => 70,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'eat_users' 
		),
		'entry_year' => array(
			'name' => 'entry_year',
			'goodName' => 'entry_year',
			'strField' => 'entry_year',
			'sourceSingle' => 'entry_year',
			'index' => 16,
			'sqlExpression' => 'entry_year',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
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
			'tableName' => 'eat_users' 
		),
		'home_address' => array(
			'name' => 'home_address',
			'goodName' => 'home_address',
			'strField' => 'home_address',
			'sourceSingle' => 'home_address',
			'index' => 17,
			'sqlExpression' => 'home_address',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
					'textboxMaxLenth' => 100,
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
			'tableName' => 'eat_users' 
		),
		'home_tel' => array(
			'name' => 'home_tel',
			'goodName' => 'home_tel',
			'strField' => 'home_tel',
			'sourceSingle' => 'home_tel',
			'index' => 18,
			'sqlExpression' => 'home_tel',
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
			'tableName' => 'eat_users' 
		),
		'nric' => array(
			'name' => 'nric',
			'goodName' => 'nric',
			'strField' => 'nric',
			'sourceSingle' => 'nric',
			'index' => 19,
			'encrypted' => true,
			'sqlExpression' => 'nric',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
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
			'tableName' => 'eat_users' 
		),
		'cut_to_agency' => array(
			'name' => 'cut_to_agency',
			'goodName' => 'cut_to_agency',
			'strField' => 'cut_to_agency',
			'sourceSingle' => 'cut_to_agency',
			'index' => 20,
			'sqlExpression' => 'cut_to_agency',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'customExpression' => '$value=$value."%";',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'eat_users' 
		),
		'salesperson_share' => array(
			'name' => 'salesperson_share',
			'goodName' => 'salesperson_share',
			'strField' => 'salesperson_share',
			'sourceSingle' => 'salesperson_share',
			'index' => 21,
			'sqlExpression' => 'salesperson_share',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'customExpression' => '$value=$value."%";',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
			'tableName' => 'eat_users' 
		),
		'agency' => array(
			'name' => 'agency',
			'goodName' => 'agency',
			'strField' => 'agency',
			'sourceSingle' => 'agency',
			'index' => 22,
			'sqlExpression' => 'agency',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
			'tableName' => 'eat_users' 
		),
		'agency_cea_reg' => array(
			'name' => 'agency_cea_reg',
			'goodName' => 'agency_cea_reg',
			'strField' => 'agency_cea_reg',
			'sourceSingle' => 'agency_cea_reg',
			'index' => 23,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'agency_cea_reg',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
			'tableName' => 'eat_users' 
		),
		'destination' => array(
			'name' => 'destination',
			'goodName' => 'destination',
			'strField' => 'destination',
			'sourceSingle' => 'destination',
			'index' => 24,
			'sqlExpression' => 'destination',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
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
			'tableName' => 'eat_users' 
		) 
	),
	'detailsTables' => array( 
		'awards',
		'qualifications' 
	),
	'query' => array(
		'sql' => 'SELECT
eatuser_id,
user_status,
username,
user_group,
signup_date,
password,
email,
company_dbname,
active,
full_name,
biz_name,
mobile,
bank_ac_no,
bank_name,
date_of_birth,
entry_year,
home_address,
home_tel,
nric,
cut_to_agency,
salesperson_share,
agency,
agency_cea_reg,
destination
FROM eat_users',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'eatuser_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'eatuser_id' 
				),
				'encrypted' => false,
				'columnName' => 'eatuser_id' 
			),
			array(
				'sql' => 'user_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'user_status' 
				),
				'encrypted' => false,
				'columnName' => 'user_status' 
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
					'table' => 'eat_users',
					'name' => 'username' 
				),
				'encrypted' => true,
				'columnName' => 'username' 
			),
			array(
				'sql' => 'user_group',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'user_group' 
				),
				'encrypted' => false,
				'columnName' => 'user_group' 
			),
			array(
				'sql' => 'signup_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'signup_date' 
				),
				'encrypted' => false,
				'columnName' => 'signup_date' 
			),
			array(
				'sql' => 'password',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'password' 
				),
				'encrypted' => true,
				'columnName' => 'password' 
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
					'table' => 'eat_users',
					'name' => 'email' 
				),
				'encrypted' => true,
				'columnName' => 'email' 
			),
			array(
				'sql' => 'company_dbname',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'company_dbname' 
				),
				'encrypted' => false,
				'columnName' => 'company_dbname' 
			),
			array(
				'sql' => 'active',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'active' 
				),
				'encrypted' => false,
				'columnName' => 'active' 
			),
			array(
				'sql' => 'full_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'full_name' 
				),
				'encrypted' => false,
				'columnName' => 'full_name' 
			),
			array(
				'sql' => 'biz_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'biz_name' 
				),
				'encrypted' => false,
				'columnName' => 'biz_name' 
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
					'table' => 'eat_users',
					'name' => 'mobile' 
				),
				'encrypted' => true,
				'columnName' => 'mobile' 
			),
			array(
				'sql' => 'bank_ac_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'bank_ac_no' 
				),
				'encrypted' => true,
				'columnName' => 'bank_ac_no' 
			),
			array(
				'sql' => 'bank_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'bank_name' 
				),
				'encrypted' => false,
				'columnName' => 'bank_name' 
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
					'table' => 'eat_users',
					'name' => 'date_of_birth' 
				),
				'encrypted' => false,
				'columnName' => 'date_of_birth' 
			),
			array(
				'sql' => 'entry_year',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'entry_year' 
				),
				'encrypted' => false,
				'columnName' => 'entry_year' 
			),
			array(
				'sql' => 'home_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'home_address' 
				),
				'encrypted' => false,
				'columnName' => 'home_address' 
			),
			array(
				'sql' => 'home_tel',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'home_tel' 
				),
				'encrypted' => false,
				'columnName' => 'home_tel' 
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
					'table' => 'eat_users',
					'name' => 'nric' 
				),
				'encrypted' => true,
				'columnName' => 'nric' 
			),
			array(
				'sql' => 'cut_to_agency',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'cut_to_agency' 
				),
				'encrypted' => false,
				'columnName' => 'cut_to_agency' 
			),
			array(
				'sql' => 'salesperson_share',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'salesperson_share' 
				),
				'encrypted' => false,
				'columnName' => 'salesperson_share' 
			),
			array(
				'sql' => 'agency',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'agency' 
				),
				'encrypted' => false,
				'columnName' => 'agency' 
			),
			array(
				'sql' => 'agency_cea_reg',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'eat_users',
					'name' => 'agency_cea_reg' 
				),
				'encrypted' => true,
				'columnName' => 'agency_cea_reg' 
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
					'table' => 'eat_users',
					'name' => 'destination' 
				),
				'encrypted' => false,
				'columnName' => 'destination' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'eat_users',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'eat_users',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'eatuser_id',
						'user_status',
						'username',
						'password',
						'user_group',
						'tmp_password',
						'subscription_type',
						'subscription_plan',
						'signup_date',
						'registration_source',
						'invname',
						'email',
						'company_dbname',
						'active',
						'full_name',
						'biz_name',
						'expiry_date',
						'mobile',
						'nric',
						'date_of_birth',
						'home_address',
						'home_tel',
						'entry_year',
						'bank_name',
						'bank_ac_no',
						'agency',
						'cut_to_agency',
						'salesperson_share',
						'apikey',
						'agency_cea_reg',
						'destination' 
					),
					'name' => 'eat_users' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'eatuser_id,
user_status,
username,
user_group,
signup_date,
password,
email,
company_dbname,
active,
full_name,
biz_name,
mobile,
bank_ac_no,
bank_name,
date_of_birth,
entry_year,
home_address,
home_tel,
nric,
cut_to_agency,
salesperson_share,
agency,
agency_cea_reg,
destination',
		'fromListSql' => 'FROM eat_users',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'eat_users',
	'originalPagesByType' => array(
		'edit' => array( 
			'edit' 
		),
		'list' => array( 
			'list' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view' 
		) 
	),
	'originalPageTypes' => array(
		'edit' => 'edit',
		'list' => 'list',
		'masterlist' => 'masterlist',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'edit' => 'edit',
		'list' => 'list',
		'masterlist' => 'masterlist',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'eatuser_id',
			'user_status',
			'username',
			'user_group',
			'signup_date',
			'password',
			'email',
			'company_dbname',
			'active',
			'full_name',
			'biz_name',
			'mobile',
			'bank_ac_no',
			'bank_name',
			'date_of_birth',
			'entry_year',
			'home_address',
			'home_tel',
			'nric',
			'cut_to_agency',
			'salesperson_share',
			'agency',
			'agency_cea_reg',
			'destination' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'eatuser_id',
			'user_status',
			'username',
			'user_group',
			'signup_date',
			'password',
			'email',
			'company_dbname',
			'active',
			'full_name',
			'biz_name',
			'mobile',
			'bank_ac_no',
			'bank_name',
			'date_of_birth',
			'entry_year',
			'home_address',
			'home_tel',
			'nric',
			'cut_to_agency',
			'salesperson_share',
			'agency',
			'agency_cea_reg',
			'destination' 
		) 
	),
	'connId' => 'jwresourjweat1091saasatjwrealt',
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
	$runnerTableLabels['eat_users_user'] = array(
	'tableCaption' => 'User Info',
	'fieldLabels' => array(
		'eatuser_id' => 'Id',
		'user_status' => 'Status',
		'username' => 'CEA Reg.',
		'user_group' => 'User Group',
		'signup_date' => 'Signup Date',
		'password' => 'Password',
		'email' => 'Email',
		'company_dbname' => 'Company Dbname',
		'active' => 'Active',
		'full_name' => 'Full Name',
		'biz_name' => 'Biz Name',
		'mobile' => 'Mobile',
		'bank_ac_no' => 'Bank Ac No',
		'bank_name' => 'Bank Name',
		'date_of_birth' => 'Date Of Birth',
		'entry_year' => 'Entry Year',
		'home_address' => 'Home Address',
		'home_tel' => 'Home Tel',
		'nric' => 'NRIC/FIN',
		'cut_to_agency' => 'Cut To Agency',
		'salesperson_share' => 'Salesperson Share',
		'agency' => 'Agency',
		'agency_cea_reg' => 'Agency CEA Reg',
		'destination' => 'Destination' 
	),
	'fieldTooltips' => array(
		'eatuser_id' => '',
		'user_status' => '',
		'username' => '',
		'user_group' => '',
		'signup_date' => '',
		'password' => '',
		'email' => '',
		'company_dbname' => '',
		'active' => '',
		'full_name' => '',
		'biz_name' => '',
		'mobile' => '',
		'bank_ac_no' => 'Only digit, e.g 1234567',
		'bank_name' => '',
		'date_of_birth' => '',
		'entry_year' => 'Year joining the industry, e.g 2000',
		'home_address' => '',
		'home_tel' => '',
		'nric' => '',
		'cut_to_agency' => '',
		'salesperson_share' => '',
		'agency' => '',
		'agency_cea_reg' => '',
		'destination' => '' 
	),
	'fieldPlaceholders' => array(
		'eatuser_id' => '',
		'user_status' => '',
		'username' => 'CEA Reg No.',
		'user_group' => '',
		'signup_date' => '',
		'password' => '',
		'email' => '',
		'company_dbname' => '',
		'active' => '',
		'full_name' => '',
		'biz_name' => '',
		'mobile' => '',
		'bank_ac_no' => '',
		'bank_name' => '',
		'date_of_birth' => '',
		'entry_year' => '',
		'home_address' => '',
		'home_tel' => '',
		'nric' => '',
		'cut_to_agency' => '',
		'salesperson_share' => '',
		'agency' => '',
		'agency_cea_reg' => '',
		'destination' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>