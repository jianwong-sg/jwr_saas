<?php
global $runnerTableSettings;
$runnerTableSettings['my_comm_admin'] = array(
	'name' => 'my_comm_admin',
	'type' => 1,
	'shortName' => 'my_comm_admin',
	'pagesByType' => array(
		'export' => array( 
			'export' 
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
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'tableOwnerIdField' => 'cea_reg',
	'usersOwnerIdField' => 'active',
	'hasEncryptedFields' => true,
	'listAjax' => true,
	'afterEditAction' => 2,
	'afterAddAction' => 3,
	'detailsBadgeColor' => '7B68EE',
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
	'hideEmptyFieldsOnView' => true,
	'orderInfo' => array( 
		array(
			'index' => 1,
			'dir' => 'DESC',
			'field' => 'id' 
		) 
	),
	'sql' => 'SELECT
	id,
	category,
	prop_type,
	Prop_kind,
	rental_price,
	salesperson_name,
	prop_name,
	prop_address,
	docuserid,
	cea_reg,
	prop_postal,
	cobroke_comm,
	agency_fee,
	commission,
	sale_price,
	representing,
	marketing_rights,
	currency,
	loi_date,
	ta_date,
	lease_start_date,
	lease_duration_no,
	lease_duration_unit,
	lease_expiry,
	valuation_price,
	option_money,
	otp_date,
	option_exercise_date,
	est_completion_date,
	sp_execution_date,
	`TOP`,
	built_up,
	land,
	tenure,
	`condition`,
	no_bedrooms,
	no_bathrooms,
	built_up_unit,
	land_unit,
	rental_price_type,
	transacted_price,
	cdd_result,
	sls_cust,
	sls_result,
	pps_cust,
	pps_result,
	comm_unit,
	comm_amt,
	gst_payable,
	gst_inclusive,
	comm_earned,
	gst,
	comm_gross,
	comm_earned_agency,
	gst_agency,
	comm_gross_agency,
	comm_earned_salesperson,
	comm_earned_percent_salesperson,
	comm_percent,
	status,
	datesubmit,
	datereject,
	dateapprove,
	status_status,
	`date`,
	salesperson_nric,
	cdd_check_result,
	str_filing_date,
	remarks,
	salesperson_email
FROM
	transactions
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
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'transactions' 
		),
		'category' => array(
			'name' => 'category',
			'goodName' => 'category',
			'strField' => 'category',
			'index' => 2,
			'sqlExpression' => 'category',
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
					'required' => true,
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupValues' => array( 
						'Sale',
						'Rental',
						'Assignment' 
					),
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
			'searchOptions' => array( 
				'Contains',
				'Equals',
				'Starts with',
				'Empty',
				'NOT Contains',
				'NOT Equals',
				'NOT Starts with',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'transactions' 
		),
		'prop_type' => array(
			'name' => 'prop_type',
			'goodName' => 'prop_type',
			'strField' => 'prop_type',
			'index' => 3,
			'sqlExpression' => 'prop_type',
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
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'types',
					'lookupDisplayField' => 'types',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'prop_address',
							'lookupField' => 'prop_address' 
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
			'searchOptions' => array( 
				'Contains',
				'Equals',
				'Starts with',
				'Empty',
				'NOT Contains',
				'NOT Equals',
				'NOT Starts with',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'transactions' 
		),
		'Prop_kind' => array(
			'name' => 'Prop_kind',
			'goodName' => 'Prop_kind',
			'strField' => 'Prop_kind',
			'index' => 4,
			'sqlExpression' => 'Prop_kind',
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
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'kind',
					'lookupDisplayField' => 'kind',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'prop_address',
							'lookupField' => 'prop_address' 
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
			'searchOptions' => array( 
				'Contains',
				'Equals',
				'Starts with',
				'Empty',
				'NOT Contains',
				'NOT Equals',
				'NOT Starts with',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'transactions' 
		),
		'rental_price' => array(
			'name' => 'rental_price',
			'goodName' => 'rental_price',
			'strField' => 'rental_price',
			'index' => 5,
			'type' => 14,
			'sqlExpression' => 'rental_price',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'required' => true,
					'validateAs' => 'Currency',
					'textboxSize' => 80,
					'textboxMaxLenth' => 20,
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
			'tableName' => 'transactions' 
		),
		'salesperson_name' => array(
			'name' => 'salesperson_name',
			'goodName' => 'salesperson_name',
			'strField' => 'salesperson_name',
			'index' => 6,
			'sqlExpression' => 'salesperson_name',
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
					'format' => 'Readonly',
					'required' => true,
					'defaultValue' => '$_SESSION["full_name"]',
					'autoUpdateValue' => '$_SESSION["full_name"]',
					'textboxSize' => 120,
					'textboxMaxLenth' => 30,
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
					'required' => true,
					'defaultValue' => '$_SESSION["full_name"]',
					'textboxSize' => 120,
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'add' => array(
					'format' => 'Readonly',
					'pageType' => 'add',
					'required' => true,
					'defaultValue' => '$_SESSION["full_name"]',
					'textboxSize' => 120,
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'search' => array(
					'format' => 'Readonly',
					'pageType' => 'search',
					'required' => true,
					'defaultValue' => '$_SESSION["full_name"]',
					'textboxSize' => 120,
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'separateEditViewFormats' => true,
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'transactions' 
		),
		'prop_name' => array(
			'name' => 'prop_name',
			'goodName' => 'prop_name',
			'strField' => 'prop_name',
			'index' => 7,
			'sqlExpression' => 'prop_name',
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
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'prop_name',
					'lookupDisplayField' => 'prop_name',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'prop_address',
							'lookupField' => 'prop_address' 
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
			'tableName' => 'transactions' 
		),
		'prop_address' => array(
			'name' => 'prop_address',
			'goodName' => 'prop_address',
			'strField' => 'prop_address',
			'index' => 8,
			'sqlExpression' => 'prop_address',
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
					'required' => true,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'prop_address',
					'lookupDisplayField' => 'prop_address',
					'lookupAllowAdd' => true,
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
			'tableName' => 'transactions' 
		),
		'docuserid' => array(
			'name' => 'docuserid',
			'goodName' => 'docuserid',
			'strField' => 'docuserid',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'docuserid',
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
					'validateAs' => 'Number',
					'textboxSize' => 30,
					'textHTML5Input' => '1',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'id',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'By',
							'lookupField' => 'full_name' 
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'transactions' 
		),
		'cea_reg' => array(
			'name' => 'cea_reg',
			'goodName' => 'cea_reg',
			'strField' => 'cea_reg',
			'index' => 10,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'cea_reg',
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
					'format' => 'Readonly',
					'required' => true,
					'defaultValue' => '$_SESSION["cea_reg"]',
					'autoUpdateValue' => '$_SESSION["cea_reg"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupLinkField' => 'cea_reg',
					'lookupDisplayField' => 'cea_reg',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'By',
							'lookupField' => 'full_name' 
						) 
					),
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
					'required' => true,
					'defaultValue' => '$_SESSION["cea_reg"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupLinkField' => 'cea_reg',
					'lookupDisplayField' => 'cea_reg',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'By',
							'lookupField' => 'full_name' 
						) 
					),
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'add' => array(
					'format' => 'Readonly',
					'pageType' => 'add',
					'required' => true,
					'defaultValue' => '$_SESSION["cea_reg"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupLinkField' => 'cea_reg',
					'lookupDisplayField' => 'cea_reg',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'By',
							'lookupField' => 'full_name' 
						) 
					),
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'search' => array(
					'format' => 'Readonly',
					'pageType' => 'search',
					'required' => true,
					'defaultValue' => '$_SESSION["cea_reg"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupLinkField' => 'cea_reg',
					'lookupDisplayField' => 'cea_reg',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'By',
							'lookupField' => 'full_name' 
						) 
					),
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'separateEditViewFormats' => true,
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'transactions' 
		),
		'prop_postal' => array(
			'name' => 'prop_postal',
			'goodName' => 'prop_postal',
			'strField' => 'prop_postal',
			'index' => 11,
			'sqlExpression' => 'prop_postal',
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
					'textboxSize' => 60,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'prop_postal',
					'lookupDisplayField' => 'prop_postal',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'prop_address',
							'lookupField' => 'prop_address' 
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
			'tableName' => 'transactions' 
		),
		'cobroke_comm' => array(
			'name' => 'cobroke_comm',
			'goodName' => 'cobroke_comm',
			'strField' => 'cobroke_comm',
			'index' => 12,
			'sqlExpression' => 'cobroke_comm',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'validateAs' => 'Number',
					'textboxSize' => 80,
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
			'tableName' => 'transactions' 
		),
		'agency_fee' => array(
			'name' => 'agency_fee',
			'goodName' => 'agency_fee',
			'strField' => 'agency_fee',
			'index' => 13,
			'type' => 14,
			'sqlExpression' => 'agency_fee',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'required' => true,
					'validateAs' => 'Number',
					'textboxSize' => 80,
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
			'tableName' => 'transactions' 
		),
		'commission' => array(
			'name' => 'commission',
			'goodName' => 'commission',
			'strField' => 'commission',
			'index' => 14,
			'type' => 14,
			'sqlExpression' => 'commission',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'required' => true,
					'validateAs' => 'Number',
					'textboxSize' => 80,
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
			'tableName' => 'transactions' 
		),
		'sale_price' => array(
			'name' => 'sale_price',
			'goodName' => 'sale_price',
			'strField' => 'sale_price',
			'index' => 15,
			'type' => 14,
			'sqlExpression' => 'sale_price',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'required' => true,
					'validateAs' => 'Currency',
					'textboxSize' => 80,
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
			'tableName' => 'transactions' 
		),
		'representing' => array(
			'name' => 'representing',
			'goodName' => 'representing',
			'strField' => 'representing',
			'index' => 16,
			'sqlExpression' => 'representing',
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
					'required' => true,
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupValues' => array( 
						'Landlord',
						'Tenant',
						'Buyer' 
					),
					'lookupTable' => 'represent_type',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'type',
					'lookupDisplayField' => 'type',
					'lookupHorizontal' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'category',
							'lookupField' => 'categories' 
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
			'tableName' => 'transactions' 
		),
		'marketing_rights' => array(
			'name' => 'marketing_rights',
			'goodName' => 'marketing_rights',
			'strField' => 'marketing_rights',
			'index' => 17,
			'sqlExpression' => 'marketing_rights',
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
					'textboxSize' => 100,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Exclusive',
						'Non-Exclusive' 
					),
					'lookupControlType' => 4,
					'lookupHorizontal' => true,
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
			'tableName' => 'transactions' 
		),
		'currency' => array(
			'name' => 'currency',
			'goodName' => 'currency',
			'strField' => 'currency',
			'index' => 18,
			'sqlExpression' => 'currency',
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
					'defaultValue' => '"SGD"',
					'textboxSize' => 50,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'dollars',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'currency',
					'lookupDisplayField' => 'currency',
					'lookupAllowAdd' => true,
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
			'tableName' => 'transactions' 
		),
		'loi_date' => array(
			'name' => 'loi_date',
			'goodName' => 'loi_date',
			'strField' => 'loi_date',
			'index' => 19,
			'type' => 7,
			'sqlExpression' => 'loi_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
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
			'tableName' => 'transactions' 
		),
		'ta_date' => array(
			'name' => 'ta_date',
			'goodName' => 'ta_date',
			'strField' => 'ta_date',
			'index' => 20,
			'type' => 7,
			'sqlExpression' => 'ta_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
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
			'tableName' => 'transactions' 
		),
		'lease_start_date' => array(
			'name' => 'lease_start_date',
			'goodName' => 'lease_start_date',
			'strField' => 'lease_start_date',
			'index' => 21,
			'type' => 7,
			'sqlExpression' => 'lease_start_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
					'format' => 'Date',
					'textboxSize' => 100,
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
			'tableName' => 'transactions' 
		),
		'lease_duration_no' => array(
			'name' => 'lease_duration_no',
			'goodName' => 'lease_duration_no',
			'strField' => 'lease_duration_no',
			'index' => 22,
			'sqlExpression' => 'lease_duration_no',
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
					'validateAs' => 'Number',
					'textboxSize' => 50,
					'textboxMaxLenth' => 5,
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
			'tableName' => 'transactions' 
		),
		'lease_duration_unit' => array(
			'name' => 'lease_duration_unit',
			'goodName' => 'lease_duration_unit',
			'strField' => 'lease_duration_unit',
			'index' => 23,
			'sqlExpression' => 'lease_duration_unit',
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
					'textboxSize' => 100,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Months',
						'Years' 
					),
					'lookupControlType' => 3,
					'lookupHorizontal' => true,
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
			'tableName' => 'transactions' 
		),
		'lease_expiry' => array(
			'name' => 'lease_expiry',
			'goodName' => 'lease_expiry',
			'strField' => 'lease_expiry',
			'index' => 24,
			'type' => 7,
			'sqlExpression' => 'lease_expiry',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
					'format' => 'Date',
					'textboxSize' => 100,
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
			'tableName' => 'transactions' 
		),
		'valuation_price' => array(
			'name' => 'valuation_price',
			'goodName' => 'valuation_price',
			'strField' => 'valuation_price',
			'index' => 25,
			'type' => 14,
			'sqlExpression' => 'valuation_price',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'validateAs' => 'Currency',
					'textboxSize' => 80,
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
			'tableName' => 'transactions' 
		),
		'option_money' => array(
			'name' => 'option_money',
			'goodName' => 'option_money',
			'strField' => 'option_money',
			'index' => 26,
			'type' => 14,
			'sqlExpression' => 'option_money',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'validateAs' => 'Currency',
					'textboxSize' => 80,
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
			'tableName' => 'transactions' 
		),
		'otp_date' => array(
			'name' => 'otp_date',
			'goodName' => 'otp_date',
			'strField' => 'otp_date',
			'index' => 27,
			'type' => 7,
			'sqlExpression' => 'otp_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
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
			'tableName' => 'transactions' 
		),
		'option_exercise_date' => array(
			'name' => 'option_exercise_date',
			'goodName' => 'option_exercise_date',
			'strField' => 'option_exercise_date',
			'index' => 28,
			'type' => 7,
			'sqlExpression' => 'option_exercise_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
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
			'tableName' => 'transactions' 
		),
		'est_completion_date' => array(
			'name' => 'est_completion_date',
			'goodName' => 'est_completion_date',
			'strField' => 'est_completion_date',
			'index' => 29,
			'type' => 7,
			'sqlExpression' => 'est_completion_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
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
			'tableName' => 'transactions' 
		),
		'sp_execution_date' => array(
			'name' => 'sp_execution_date',
			'goodName' => 'sp_execution_date',
			'strField' => 'sp_execution_date',
			'index' => 30,
			'type' => 7,
			'sqlExpression' => 'sp_execution_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
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
			'tableName' => 'transactions' 
		),
		'TOP' => array(
			'name' => 'TOP',
			'goodName' => 'TOP',
			'strField' => 'TOP',
			'index' => 31,
			'sqlExpression' => '`TOP`',
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
					'textboxSize' => 100,
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
			'tableName' => 'transactions' 
		),
		'built_up' => array(
			'name' => 'built_up',
			'goodName' => 'built_up',
			'strField' => 'built_up',
			'index' => 32,
			'sqlExpression' => 'built_up',
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
					'validateAs' => 'Number',
					'textboxSize' => 80,
					'textboxMaxLenth' => 5,
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
			'tableName' => 'transactions' 
		),
		'land' => array(
			'name' => 'land',
			'goodName' => 'land',
			'strField' => 'land',
			'index' => 33,
			'sqlExpression' => 'land',
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
					'validateAs' => 'Number',
					'textboxSize' => 80,
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'land_size',
					'lookupDisplayField' => 'land_size',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'prop_address',
							'lookupField' => 'prop_address' 
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
			'tableName' => 'transactions' 
		),
		'tenure' => array(
			'name' => 'tenure',
			'goodName' => 'tenure',
			'strField' => 'tenure',
			'index' => 34,
			'sqlExpression' => 'tenure',
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
					'textboxSize' => 100,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'30 Years Leasehold',
						'60 Years Leasehold',
						'99 Years Leasehold',
						'999 Years Leasehold',
						'Freehold' 
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
			'tableName' => 'transactions' 
		),
		'condition' => array(
			'name' => 'condition',
			'goodName' => 'condition',
			'strField' => 'condition',
			'index' => 35,
			'sqlExpression' => '`condition`',
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
					'textboxSize' => 100,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Bare',
						'Brand New',
						'Partially Furnished',
						'Fully Furnished',
						'Original',
						'Renovated' 
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
			'tableName' => 'transactions' 
		),
		'no_bedrooms' => array(
			'name' => 'no_bedrooms',
			'goodName' => 'no_bedrooms',
			'strField' => 'no_bedrooms',
			'index' => 36,
			'sqlExpression' => 'no_bedrooms',
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
					'textboxSize' => 80,
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Studio',
						'1',
						'2',
						'3',
						'4',
						'5',
						'6',
						'7',
						'8',
						'9',
						'10' 
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
			'tableName' => 'transactions' 
		),
		'no_bathrooms' => array(
			'name' => 'no_bathrooms',
			'goodName' => 'no_bathrooms',
			'strField' => 'no_bathrooms',
			'index' => 37,
			'sqlExpression' => 'no_bathrooms',
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
					'textboxSize' => 80,
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'1',
						'2',
						'3',
						'4',
						'5',
						'6',
						'7',
						'8' 
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
			'tableName' => 'transactions' 
		),
		'built_up_unit' => array(
			'name' => 'built_up_unit',
			'goodName' => 'built_up_unit',
			'strField' => 'built_up_unit',
			'index' => 38,
			'sqlExpression' => 'built_up_unit',
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
					'textboxSize' => 80,
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Sqf',
						'Sqm' 
					),
					'lookupControlType' => 3,
					'lookupHorizontal' => true,
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
			'tableName' => 'transactions' 
		),
		'land_unit' => array(
			'name' => 'land_unit',
			'goodName' => 'land_unit',
			'strField' => 'land_unit',
			'index' => 39,
			'sqlExpression' => 'land_unit',
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
					'textboxSize' => 80,
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Sqf',
						'Sqm' 
					),
					'lookupControlType' => 3,
					'lookupHorizontal' => true,
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
			'tableName' => 'transactions' 
		),
		'rental_price_type' => array(
			'name' => 'rental_price_type',
			'goodName' => 'rental_price_type',
			'strField' => 'rental_price_type',
			'index' => 40,
			'sqlExpression' => 'rental_price_type',
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
					'defaultValue' => '"per month"',
					'textboxSize' => 100,
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'lump sum',
						'per week',
						'per month',
						'per year' 
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
			'tableName' => 'transactions' 
		),
		'transacted_price' => array(
			'name' => 'transacted_price',
			'goodName' => 'transacted_price',
			'strField' => 'transacted_price',
			'index' => 41,
			'type' => 14,
			'sqlExpression' => 'transacted_price',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'format' => 'Readonly',
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
			'tableName' => 'transactions' 
		),
		'cdd_result' => array(
			'name' => 'cdd_result',
			'goodName' => 'cdd_result',
			'strField' => 'cdd_result',
			'index' => 42,
			'sqlExpression' => 'cdd_result',
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
					'format' => 'Readonly',
					'textboxSize' => 250,
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
			'tableName' => 'transactions' 
		),
		'sls_cust' => array(
			'name' => 'sls_cust',
			'goodName' => 'sls_cust',
			'strField' => 'sls_cust',
			'index' => 43,
			'sqlExpression' => 'sls_cust',
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
					'format' => 'Readonly',
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
			'tableName' => 'transactions' 
		),
		'sls_result' => array(
			'name' => 'sls_result',
			'goodName' => 'sls_result',
			'strField' => 'sls_result',
			'index' => 44,
			'type' => 201,
			'sqlExpression' => 'sls_result',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => 'if($value==\'No record found\')
{
$v="<font color=#16E80C>".$value."</font>";
}else
{
$v="<font color=#FF4500>".$value."</font>";
}

$value=$v;',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
			'tableName' => 'transactions' 
		),
		'pps_cust' => array(
			'name' => 'pps_cust',
			'goodName' => 'pps_cust',
			'strField' => 'pps_cust',
			'index' => 45,
			'sqlExpression' => 'pps_cust',
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
					'format' => 'Readonly',
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
			'tableName' => 'transactions' 
		),
		'pps_result' => array(
			'name' => 'pps_result',
			'goodName' => 'pps_result',
			'strField' => 'pps_result',
			'index' => 46,
			'type' => 201,
			'sqlExpression' => 'pps_result',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => 'if($value==\'No record found\')
{
$v="<font color=#16E80C>".$value."</font>";
}else
{
$v="<font color=#FF4500>".$value."</font>";
}
$value=$v;',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
			'tableName' => 'transactions' 
		),
		'comm_unit' => array(
			'name' => 'comm_unit',
			'goodName' => 'comm_unit',
			'strField' => 'comm_unit',
			'index' => 47,
			'sqlExpression' => 'comm_unit',
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
					'validateAs' => 'Number',
					'textboxSize' => 30,
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
			'tableName' => 'transactions' 
		),
		'comm_amt' => array(
			'name' => 'comm_amt',
			'goodName' => 'comm_amt',
			'strField' => 'comm_amt',
			'index' => 48,
			'sqlExpression' => 'comm_amt',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'textboxSize' => 80,
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
			'tableName' => 'transactions' 
		),
		'gst_payable' => array(
			'name' => 'gst_payable',
			'goodName' => 'gst_payable',
			'strField' => 'gst_payable',
			'index' => 49,
			'sqlExpression' => 'gst_payable',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
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
					'format' => 'Checkbox',
					'validateAs' => 'Number',
					'textboxSize' => 30,
					'textHTML5Input' => '0',
					'lookupControlType' => 4,
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
			'tableName' => 'transactions' 
		),
		'gst_inclusive' => array(
			'name' => 'gst_inclusive',
			'goodName' => 'gst_inclusive',
			'strField' => 'gst_inclusive',
			'index' => 50,
			'sqlExpression' => 'gst_inclusive',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
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
					'format' => 'Checkbox',
					'validateAs' => 'Number',
					'textboxSize' => 30,
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
			'tableName' => 'transactions' 
		),
		'comm_earned' => array(
			'name' => 'comm_earned',
			'goodName' => 'comm_earned',
			'strField' => 'comm_earned',
			'index' => 51,
			'type' => 14,
			'sqlExpression' => 'comm_earned',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'format' => 'Readonly',
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
			'tableName' => 'transactions' 
		),
		'gst' => array(
			'name' => 'gst',
			'goodName' => 'gst',
			'strField' => 'gst',
			'index' => 52,
			'type' => 14,
			'sqlExpression' => 'gst',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'format' => 'Readonly',
					'textboxSize' => 42,
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
			'tableName' => 'transactions' 
		),
		'comm_gross' => array(
			'name' => 'comm_gross',
			'goodName' => 'comm_gross',
			'strField' => 'comm_gross',
			'index' => 53,
			'type' => 14,
			'sqlExpression' => 'comm_gross',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'format' => 'Readonly',
					'textboxSize' => 72,
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
			'tableName' => 'transactions' 
		),
		'comm_earned_agency' => array(
			'name' => 'comm_earned_agency',
			'goodName' => 'comm_earned_agency',
			'strField' => 'comm_earned_agency',
			'index' => 54,
			'type' => 14,
			'sqlExpression' => 'comm_earned_agency',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'textboxSize' => 52,
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
			'tableName' => 'transactions' 
		),
		'gst_agency' => array(
			'name' => 'gst_agency',
			'goodName' => 'gst_agency',
			'strField' => 'gst_agency',
			'index' => 55,
			'type' => 14,
			'sqlExpression' => 'gst_agency',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'textboxSize' => 42,
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
			'tableName' => 'transactions' 
		),
		'comm_gross_agency' => array(
			'name' => 'comm_gross_agency',
			'goodName' => 'comm_gross_agency',
			'strField' => 'comm_gross_agency',
			'index' => 56,
			'type' => 14,
			'sqlExpression' => 'comm_gross_agency',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'textboxSize' => 72,
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
			'tableName' => 'transactions' 
		),
		'comm_earned_salesperson' => array(
			'name' => 'comm_earned_salesperson',
			'goodName' => 'comm_earned_salesperson',
			'strField' => 'comm_earned_salesperson',
			'index' => 57,
			'type' => 14,
			'sqlExpression' => 'comm_earned_salesperson',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
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
					'textboxSize' => 50,
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
			'tableName' => 'transactions' 
		),
		'comm_earned_percent_salesperson' => array(
			'name' => 'comm_earned_percent_salesperson',
			'goodName' => 'comm_earned_percent_salesperson',
			'strField' => 'comm_earned_percent_salesperson',
			'index' => 58,
			'sqlExpression' => 'comm_earned_percent_salesperson',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number',
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
			'tableName' => 'transactions' 
		),
		'comm_percent' => array(
			'name' => 'comm_percent',
			'goodName' => 'comm_percent',
			'strField' => 'comm_percent',
			'index' => 59,
			'type' => 14,
			'sqlExpression' => 'comm_percent',
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
					'validateAs' => 'Number',
					'textboxSize' => 30,
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
			'tableName' => 'transactions' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'index' => 60,
			'type' => 3,
			'sqlExpression' => 'status',
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
			'tableName' => 'transactions' 
		),
		'datesubmit' => array(
			'name' => 'datesubmit',
			'goodName' => 'datesubmit',
			'strField' => 'datesubmit',
			'index' => 61,
			'type' => 135,
			'sqlExpression' => 'datesubmit',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Datetime',
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
					'format' => 'Readonly',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
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
			'tableName' => 'transactions' 
		),
		'datereject' => array(
			'name' => 'datereject',
			'goodName' => 'datereject',
			'strField' => 'datereject',
			'index' => 62,
			'type' => 135,
			'sqlExpression' => 'datereject',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Datetime',
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
					'format' => 'Readonly',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
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
			'tableName' => 'transactions' 
		),
		'dateapprove' => array(
			'name' => 'dateapprove',
			'goodName' => 'dateapprove',
			'strField' => 'dateapprove',
			'index' => 63,
			'type' => 135,
			'sqlExpression' => 'dateapprove',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
					'format' => 'Readonly',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
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
			'tableName' => 'transactions' 
		),
		'status_status' => array(
			'name' => 'status_status',
			'goodName' => 'status_status',
			'strField' => 'status_status',
			'index' => 64,
			'sqlExpression' => 'status_status',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => 'if ($value=="Submitted")
$color="dark grey";
else if ($value=="Approved")
$color="green";
else
$color="red";

$value="<font color=\'$color\'>$value</font>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => '"Draft"',
					'textboxSize' => 100,
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
			'tableName' => 'transactions' 
		),
		'date' => array(
			'name' => 'date',
			'goodName' => 'date',
			'strField' => 'date',
			'index' => 65,
			'type' => 7,
			'sqlExpression' => '`date`',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
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
			'tableName' => 'transactions' 
		),
		'salesperson_nric' => array(
			'name' => 'salesperson_nric',
			'goodName' => 'salesperson_nric',
			'strField' => 'salesperson_nric',
			'index' => 66,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'salesperson_nric',
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["nric"]',
					'autoUpdateValue' => '$_SESSION["nric"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
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
					'defaultValue' => '$_SESSION["nric"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'add' => array(
					'format' => 'Readonly',
					'pageType' => 'add',
					'defaultValue' => '$_SESSION["nric"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				),
				'search' => array(
					'format' => 'Readonly',
					'pageType' => 'search',
					'defaultValue' => '$_SESSION["nric"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'separateEditViewFormats' => true,
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'transactions' 
		),
		'cdd_check_result' => array(
			'name' => 'cdd_check_result',
			'goodName' => 'cdd_check_result',
			'strField' => 'cdd_check_result',
			'index' => 67,
			'sqlExpression' => 'cdd_check_result',
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
			'tableName' => 'transactions' 
		),
		'str_filing_date' => array(
			'name' => 'str_filing_date',
			'goodName' => 'str_filing_date',
			'strField' => 'str_filing_date',
			'index' => 68,
			'sqlExpression' => 'str_filing_date',
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
			'tableName' => 'transactions' 
		),
		'remarks' => array(
			'name' => 'remarks',
			'goodName' => 'remarks',
			'strField' => 'remarks',
			'index' => 69,
			'sqlExpression' => 'remarks',
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
					'textboxSize' => 400,
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
			'tableName' => 'transactions' 
		),
		'salesperson_email' => array(
			'name' => 'salesperson_email',
			'goodName' => 'salesperson_email',
			'strField' => 'salesperson_email',
			'index' => 70,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'salesperson_email',
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["email"]',
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
			'tableName' => 'transactions' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	category,
	prop_type,
	Prop_kind,
	rental_price,
	salesperson_name,
	prop_name,
	prop_address,
	docuserid,
	cea_reg,
	prop_postal,
	cobroke_comm,
	agency_fee,
	commission,
	sale_price,
	representing,
	marketing_rights,
	currency,
	loi_date,
	ta_date,
	lease_start_date,
	lease_duration_no,
	lease_duration_unit,
	lease_expiry,
	valuation_price,
	option_money,
	otp_date,
	option_exercise_date,
	est_completion_date,
	sp_execution_date,
	`TOP`,
	built_up,
	land,
	tenure,
	`condition`,
	no_bedrooms,
	no_bathrooms,
	built_up_unit,
	land_unit,
	rental_price_type,
	transacted_price,
	cdd_result,
	sls_cust,
	sls_result,
	pps_cust,
	pps_result,
	comm_unit,
	comm_amt,
	gst_payable,
	gst_inclusive,
	comm_earned,
	gst,
	comm_gross,
	comm_earned_agency,
	gst_agency,
	comm_gross_agency,
	comm_earned_salesperson,
	comm_earned_percent_salesperson,
	comm_percent,
	status,
	datesubmit,
	datereject,
	dateapprove,
	status_status,
	`date`,
	salesperson_nric,
	cdd_check_result,
	str_filing_date,
	remarks,
	salesperson_email
FROM
	transactions
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
					'table' => 'transactions',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
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
					'table' => 'transactions',
					'name' => 'category' 
				),
				'encrypted' => false,
				'columnName' => 'category' 
			),
			array(
				'sql' => 'prop_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'prop_type' 
				),
				'encrypted' => false,
				'columnName' => 'prop_type' 
			),
			array(
				'sql' => 'Prop_kind',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'Prop_kind' 
				),
				'encrypted' => false,
				'columnName' => 'Prop_kind' 
			),
			array(
				'sql' => 'rental_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'rental_price' 
				),
				'encrypted' => false,
				'columnName' => 'rental_price' 
			),
			array(
				'sql' => 'salesperson_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'salesperson_name' 
				),
				'encrypted' => false,
				'columnName' => 'salesperson_name' 
			),
			array(
				'sql' => 'prop_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'prop_name' 
				),
				'encrypted' => false,
				'columnName' => 'prop_name' 
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
					'table' => 'transactions',
					'name' => 'prop_address' 
				),
				'encrypted' => false,
				'columnName' => 'prop_address' 
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
					'table' => 'transactions',
					'name' => 'docuserid' 
				),
				'encrypted' => false,
				'columnName' => 'docuserid' 
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
					'table' => 'transactions',
					'name' => 'cea_reg' 
				),
				'encrypted' => true,
				'columnName' => 'cea_reg' 
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
					'table' => 'transactions',
					'name' => 'prop_postal' 
				),
				'encrypted' => false,
				'columnName' => 'prop_postal' 
			),
			array(
				'sql' => 'cobroke_comm',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'cobroke_comm' 
				),
				'encrypted' => false,
				'columnName' => 'cobroke_comm' 
			),
			array(
				'sql' => 'agency_fee',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'agency_fee' 
				),
				'encrypted' => false,
				'columnName' => 'agency_fee' 
			),
			array(
				'sql' => 'commission',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'commission' 
				),
				'encrypted' => false,
				'columnName' => 'commission' 
			),
			array(
				'sql' => 'sale_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'sale_price' 
				),
				'encrypted' => false,
				'columnName' => 'sale_price' 
			),
			array(
				'sql' => 'representing',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'representing' 
				),
				'encrypted' => false,
				'columnName' => 'representing' 
			),
			array(
				'sql' => 'marketing_rights',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'marketing_rights' 
				),
				'encrypted' => false,
				'columnName' => 'marketing_rights' 
			),
			array(
				'sql' => 'currency',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'currency' 
				),
				'encrypted' => false,
				'columnName' => 'currency' 
			),
			array(
				'sql' => 'loi_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'loi_date' 
				),
				'encrypted' => false,
				'columnName' => 'loi_date' 
			),
			array(
				'sql' => 'ta_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'ta_date' 
				),
				'encrypted' => false,
				'columnName' => 'ta_date' 
			),
			array(
				'sql' => 'lease_start_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'lease_start_date' 
				),
				'encrypted' => false,
				'columnName' => 'lease_start_date' 
			),
			array(
				'sql' => 'lease_duration_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'lease_duration_no' 
				),
				'encrypted' => false,
				'columnName' => 'lease_duration_no' 
			),
			array(
				'sql' => 'lease_duration_unit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'lease_duration_unit' 
				),
				'encrypted' => false,
				'columnName' => 'lease_duration_unit' 
			),
			array(
				'sql' => 'lease_expiry',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'lease_expiry' 
				),
				'encrypted' => false,
				'columnName' => 'lease_expiry' 
			),
			array(
				'sql' => 'valuation_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'valuation_price' 
				),
				'encrypted' => false,
				'columnName' => 'valuation_price' 
			),
			array(
				'sql' => 'option_money',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'option_money' 
				),
				'encrypted' => false,
				'columnName' => 'option_money' 
			),
			array(
				'sql' => 'otp_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'otp_date' 
				),
				'encrypted' => false,
				'columnName' => 'otp_date' 
			),
			array(
				'sql' => 'option_exercise_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'option_exercise_date' 
				),
				'encrypted' => false,
				'columnName' => 'option_exercise_date' 
			),
			array(
				'sql' => 'est_completion_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'est_completion_date' 
				),
				'encrypted' => false,
				'columnName' => 'est_completion_date' 
			),
			array(
				'sql' => 'sp_execution_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'sp_execution_date' 
				),
				'encrypted' => false,
				'columnName' => 'sp_execution_date' 
			),
			array(
				'sql' => '`TOP`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'TOP' 
				),
				'encrypted' => false,
				'columnName' => 'TOP' 
			),
			array(
				'sql' => 'built_up',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'built_up' 
				),
				'encrypted' => false,
				'columnName' => 'built_up' 
			),
			array(
				'sql' => 'land',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'land' 
				),
				'encrypted' => false,
				'columnName' => 'land' 
			),
			array(
				'sql' => 'tenure',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'tenure' 
				),
				'encrypted' => false,
				'columnName' => 'tenure' 
			),
			array(
				'sql' => '`condition`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'condition' 
				),
				'encrypted' => false,
				'columnName' => 'condition' 
			),
			array(
				'sql' => 'no_bedrooms',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'no_bedrooms' 
				),
				'encrypted' => false,
				'columnName' => 'no_bedrooms' 
			),
			array(
				'sql' => 'no_bathrooms',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'no_bathrooms' 
				),
				'encrypted' => false,
				'columnName' => 'no_bathrooms' 
			),
			array(
				'sql' => 'built_up_unit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'built_up_unit' 
				),
				'encrypted' => false,
				'columnName' => 'built_up_unit' 
			),
			array(
				'sql' => 'land_unit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'land_unit' 
				),
				'encrypted' => false,
				'columnName' => 'land_unit' 
			),
			array(
				'sql' => 'rental_price_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'rental_price_type' 
				),
				'encrypted' => false,
				'columnName' => 'rental_price_type' 
			),
			array(
				'sql' => 'transacted_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'transacted_price' 
				),
				'encrypted' => false,
				'columnName' => 'transacted_price' 
			),
			array(
				'sql' => 'cdd_result',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'cdd_result' 
				),
				'encrypted' => false,
				'columnName' => 'cdd_result' 
			),
			array(
				'sql' => 'sls_cust',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'sls_cust' 
				),
				'encrypted' => false,
				'columnName' => 'sls_cust' 
			),
			array(
				'sql' => 'sls_result',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'sls_result' 
				),
				'encrypted' => false,
				'columnName' => 'sls_result' 
			),
			array(
				'sql' => 'pps_cust',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'pps_cust' 
				),
				'encrypted' => false,
				'columnName' => 'pps_cust' 
			),
			array(
				'sql' => 'pps_result',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'pps_result' 
				),
				'encrypted' => false,
				'columnName' => 'pps_result' 
			),
			array(
				'sql' => 'comm_unit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'comm_unit' 
				),
				'encrypted' => false,
				'columnName' => 'comm_unit' 
			),
			array(
				'sql' => 'comm_amt',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'comm_amt' 
				),
				'encrypted' => false,
				'columnName' => 'comm_amt' 
			),
			array(
				'sql' => 'gst_payable',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'gst_payable' 
				),
				'encrypted' => false,
				'columnName' => 'gst_payable' 
			),
			array(
				'sql' => 'gst_inclusive',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'gst_inclusive' 
				),
				'encrypted' => false,
				'columnName' => 'gst_inclusive' 
			),
			array(
				'sql' => 'comm_earned',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'comm_earned' 
				),
				'encrypted' => false,
				'columnName' => 'comm_earned' 
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
					'table' => 'transactions',
					'name' => 'gst' 
				),
				'encrypted' => false,
				'columnName' => 'gst' 
			),
			array(
				'sql' => 'comm_gross',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'comm_gross' 
				),
				'encrypted' => false,
				'columnName' => 'comm_gross' 
			),
			array(
				'sql' => 'comm_earned_agency',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'comm_earned_agency' 
				),
				'encrypted' => false,
				'columnName' => 'comm_earned_agency' 
			),
			array(
				'sql' => 'gst_agency',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'gst_agency' 
				),
				'encrypted' => false,
				'columnName' => 'gst_agency' 
			),
			array(
				'sql' => 'comm_gross_agency',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'comm_gross_agency' 
				),
				'encrypted' => false,
				'columnName' => 'comm_gross_agency' 
			),
			array(
				'sql' => 'comm_earned_salesperson',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'comm_earned_salesperson' 
				),
				'encrypted' => false,
				'columnName' => 'comm_earned_salesperson' 
			),
			array(
				'sql' => 'comm_earned_percent_salesperson',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'comm_earned_percent_salesperson' 
				),
				'encrypted' => false,
				'columnName' => 'comm_earned_percent_salesperson' 
			),
			array(
				'sql' => 'comm_percent',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'comm_percent' 
				),
				'encrypted' => false,
				'columnName' => 'comm_percent' 
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
					'table' => 'transactions',
					'name' => 'status' 
				),
				'encrypted' => false,
				'columnName' => 'status' 
			),
			array(
				'sql' => 'datesubmit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'datesubmit' 
				),
				'encrypted' => false,
				'columnName' => 'datesubmit' 
			),
			array(
				'sql' => 'datereject',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'datereject' 
				),
				'encrypted' => false,
				'columnName' => 'datereject' 
			),
			array(
				'sql' => 'dateapprove',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'dateapprove' 
				),
				'encrypted' => false,
				'columnName' => 'dateapprove' 
			),
			array(
				'sql' => 'status_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'status_status' 
				),
				'encrypted' => false,
				'columnName' => 'status_status' 
			),
			array(
				'sql' => '`date`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'date' 
				),
				'encrypted' => false,
				'columnName' => 'date' 
			),
			array(
				'sql' => 'salesperson_nric',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'salesperson_nric' 
				),
				'encrypted' => true,
				'columnName' => 'salesperson_nric' 
			),
			array(
				'sql' => 'cdd_check_result',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'cdd_check_result' 
				),
				'encrypted' => false,
				'columnName' => 'cdd_check_result' 
			),
			array(
				'sql' => 'str_filing_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'str_filing_date' 
				),
				'encrypted' => false,
				'columnName' => 'str_filing_date' 
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
					'table' => 'transactions',
					'name' => 'remarks' 
				),
				'encrypted' => false,
				'columnName' => 'remarks' 
			),
			array(
				'sql' => 'salesperson_email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'salesperson_email' 
				),
				'encrypted' => true,
				'columnName' => 'salesperson_email' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'transactions',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'transactions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ID_Tx',
						'id',
						'date',
						'category',
						'prop_type',
						'rental_price',
						'salesperson_name',
						'commission',
						'prop_name',
						'prop_address',
						'docuserid',
						'Prop_kind',
						'cea_reg',
						'cobroke_comm',
						'agency_fee',
						'prop_postal',
						'cdd_check_result',
						'cdd_result',
						'sls_cust',
						'sls_result',
						'pps_cust',
						'pps_result',
						'representing',
						'marketing_rights',
						'currency',
						'loi_date',
						'ta_date',
						'lease_start_date',
						'lease_duration_no',
						'lease_duration_unit',
						'lease_expiry',
						'sale_price',
						'valuation_price',
						'option_money',
						'otp_date',
						'option_exercise_date',
						'est_completion_date',
						'sp_execution_date',
						'TOP',
						'built_up',
						'land',
						'tenure',
						'condition',
						'no_bedrooms',
						'no_bathrooms',
						'built_up_unit',
						'land_unit',
						'rental_price_type',
						'transacted_price',
						'comm_unit',
						'comm_amt',
						'gst_payable',
						'gst_inclusive',
						'comm_earned',
						'gst',
						'comm_gross',
						'comm_earned_percent_salesperson',
						'comm_earned_agency',
						'gst_agency',
						'comm_gross_agency',
						'comm_earned_salesperson',
						'comm_percent',
						'status',
						'datesubmit',
						'datereject',
						'dateapprove',
						'status_status',
						'salesperson_nric',
						'str_filing_date',
						'remarks',
						'salesperson_email',
						'comm_to_agency',
						'comm_nett_salesperson',
						'agency_share',
						'percent_to_agency',
						'client',
						'agency',
						'agency_cea',
						'management_fee',
						'commencement_date',
						'end_date',
						'comm_to_agency1',
						'sub_category',
						'service_commencement',
						'service_completion',
						'result',
						'consultation_fee',
						'reminder_agent',
						'reminder_tenant',
						'reminderdate_agent',
						'reminderdate_tenant',
						'reminder_tenant_email',
						'client_type',
						'client_id',
						'client_nric',
						'rm_rental_rm_type',
						'rm_builtup',
						'rm_builtup_unit',
						'namelist_cust',
						'namelist_result',
						'form_number',
						'agency_gst_reg',
						'tenants',
						'alertlist_cust',
						'alertlist_result',
						'prop_id',
						'cddmeasure_result' 
					),
					'name' => 'transactions' 
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
					'table' => 'transactions',
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
			),
			array(
				'fieldIndex' => 45,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 46,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 47,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 48,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 49,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 50,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 51,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 52,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 53,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 54,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 55,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 56,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 57,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 58,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 59,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 60,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 61,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 62,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 63,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 64,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 65,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 66,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 67,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 68,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 69,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	category,
	prop_type,
	Prop_kind,
	rental_price,
	salesperson_name,
	prop_name,
	prop_address,
	docuserid,
	cea_reg,
	prop_postal,
	cobroke_comm,
	agency_fee,
	commission,
	sale_price,
	representing,
	marketing_rights,
	currency,
	loi_date,
	ta_date,
	lease_start_date,
	lease_duration_no,
	lease_duration_unit,
	lease_expiry,
	valuation_price,
	option_money,
	otp_date,
	option_exercise_date,
	est_completion_date,
	sp_execution_date,
	`TOP`,
	built_up,
	land,
	tenure,
	`condition`,
	no_bedrooms,
	no_bathrooms,
	built_up_unit,
	land_unit,
	rental_price_type,
	transacted_price,
	cdd_result,
	sls_cust,
	sls_result,
	pps_cust,
	pps_result,
	comm_unit,
	comm_amt,
	gst_payable,
	gst_inclusive,
	comm_earned,
	gst,
	comm_gross,
	comm_earned_agency,
	gst_agency,
	comm_gross_agency,
	comm_earned_salesperson,
	comm_earned_percent_salesperson,
	comm_percent,
	status,
	datesubmit,
	datereject,
	dateapprove,
	status_status,
	`date`,
	salesperson_nric,
	cdd_check_result,
	str_filing_date,
	remarks,
	salesperson_email',
		'fromListSql' => 'FROM
	transactions',
		'orderBySql' => 'ORDER BY
	id DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'transactions',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
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
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'category',
			'prop_type',
			'Prop_kind',
			'rental_price',
			'salesperson_name',
			'prop_name',
			'prop_address',
			'docuserid',
			'cea_reg',
			'prop_postal',
			'cobroke_comm',
			'agency_fee',
			'commission',
			'sale_price',
			'representing',
			'marketing_rights',
			'currency',
			'loi_date',
			'ta_date',
			'lease_start_date',
			'lease_duration_no',
			'lease_duration_unit',
			'lease_expiry',
			'valuation_price',
			'option_money',
			'otp_date',
			'option_exercise_date',
			'est_completion_date',
			'sp_execution_date',
			'TOP',
			'built_up',
			'land',
			'tenure',
			'condition',
			'no_bedrooms',
			'no_bathrooms',
			'built_up_unit',
			'land_unit',
			'rental_price_type',
			'transacted_price',
			'cdd_result',
			'sls_cust',
			'sls_result',
			'pps_cust',
			'pps_result',
			'comm_unit',
			'comm_amt',
			'gst_payable',
			'gst_inclusive',
			'comm_earned',
			'gst',
			'comm_gross',
			'comm_earned_agency',
			'gst_agency',
			'comm_gross_agency',
			'comm_earned_salesperson',
			'comm_earned_percent_salesperson',
			'comm_percent',
			'status',
			'datesubmit',
			'datereject',
			'dateapprove',
			'status_status',
			'date',
			'salesperson_nric',
			'cdd_check_result',
			'str_filing_date',
			'remarks',
			'salesperson_email' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => true,
		'googleLikeSearchFields' => array( 
			'id',
			'category',
			'prop_type',
			'Prop_kind',
			'rental_price',
			'salesperson_name',
			'prop_name',
			'prop_address',
			'docuserid',
			'cea_reg',
			'prop_postal',
			'cobroke_comm',
			'agency_fee',
			'commission',
			'sale_price',
			'representing',
			'marketing_rights',
			'currency',
			'loi_date',
			'ta_date',
			'lease_start_date',
			'lease_duration_no',
			'lease_duration_unit',
			'lease_expiry',
			'valuation_price',
			'option_money',
			'otp_date',
			'option_exercise_date',
			'est_completion_date',
			'sp_execution_date',
			'TOP',
			'built_up',
			'land',
			'tenure',
			'condition',
			'no_bedrooms',
			'no_bathrooms',
			'built_up_unit',
			'land_unit',
			'rental_price_type',
			'transacted_price',
			'cdd_result',
			'sls_cust',
			'sls_result',
			'pps_cust',
			'pps_result',
			'comm_unit',
			'comm_amt',
			'gst_payable',
			'gst_inclusive',
			'comm_earned',
			'gst',
			'comm_gross',
			'comm_earned_agency',
			'gst_agency',
			'comm_gross_agency',
			'comm_earned_salesperson',
			'comm_earned_percent_salesperson',
			'comm_percent',
			'status',
			'datesubmit',
			'datereject',
			'dateapprove',
			'status_status',
			'date',
			'salesperson_nric',
			'cdd_check_result',
			'str_filing_date',
			'remarks',
			'salesperson_email' 
		) 
	),
	'connId' => 'Tables',
	'sortByFields' => array(
		'sortOrder' => array( 
			 
		) 
	),
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction',
			'codeData' => array(
				 
			),
			'gridData' => array(
				'action' => 'checkbox',
				'table' => 'parties_involved',
				'tableGid' => 194217 
			),
			'openData' => array(
				'how' => 'goto',
				'page' => 'edit',
				'table' => 'parties_involved',
				'url' => '',
				'tableGid' => 194217 
			) 
		),
		'fields' => array(
			'Prop_kind' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'TOP' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'Unit_no' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'agency_fee' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'built_up' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'built_up_unit' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'category' => array(
				'action' => 'open',
				'codeData' => array(
					 
				),
				'gridData' => array(
					'action' => 'checkbox',
					'table' => 'parties_involved',
					'tableGid' => 194217 
				),
				'openData' => array(
					'how' => 'goto',
					'page' => 'edit',
					'table' => 'parties_involved',
					'url' => '',
					'tableGid' => 194217 
				) 
			),
			'cdd_result' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'cea_reg' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'cobroke_comm' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm_amt' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm_earned' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm_earned_agency' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm_earned_percent_salesperson' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm_earned_salesperson' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm_gross' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm_gross_agency' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm_percent' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm_unit' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'commission' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'condition' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'currency' => array(
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
			'est_completion_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'gst' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'gst_agency' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'gst_inclusive' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'gst_payable' => array(
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
			'land' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'land_unit' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'lease_duration_no' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'lease_duration_unit' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'lease_expiry' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'lease_start_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'loi_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'marketing_rights' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'no_bathrooms' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'no_bedrooms' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'option_exercise_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'option_money' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'otp_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'pps_cust' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'pps_result' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'prop_address' => array(
				'action' => 'open',
				'codeData' => array(
					 
				),
				'gridData' => array(
					'action' => 'checkbox',
					'table' => 'parties_involved',
					'tableGid' => 194217 
				),
				'openData' => array(
					'how' => 'goto',
					'page' => 'edit',
					'table' => 'parties_involved',
					'url' => '',
					'tableGid' => 194217 
				) 
			),
			'prop_name' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'prop_postal' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'prop_type' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'rental_price' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'rental_price_type' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'representing' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sale_price' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'salesperson_name' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sls_cust' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sls_result' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sp_execution_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'ta_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'tenure' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'transacted_price' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'valuation_price' => array(
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
		array(
			'title' => array(
				'text' => 'All data',
				'type' => 0 
			),
			'where' => '',
			'id' => '',
			'showCount' => false,
			'hideEmpty' => false 
		) 
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
	$runnerTableLabels['my_comm_admin'] = array(
	'tableCaption' => 'Agent Comm',
	'fieldLabels' => array(
		'id' => 'Txn ID',
		'category' => 'Txn Type',
		'prop_type' => 'Property Type',
		'Prop_kind' => 'Prop Kind',
		'rental_price' => 'Rental Price',
		'salesperson_name' => 'Salesperson',
		'prop_name' => 'Property Name',
		'prop_address' => 'Address',
		'docuserid' => 'ID',
		'cea_reg' => 'CEA Reg',
		'prop_postal' => 'Postal',
		'cobroke_comm' => 'Comm To Co-broke Agent',
		'agency_fee' => 'Agency Fee',
		'commission' => 'Comm To Salesperson',
		'sale_price' => 'Sale Price',
		'representing' => 'Representing',
		'marketing_rights' => 'Marketing Rights',
		'currency' => 'Currency',
		'loi_date' => 'LOI Date',
		'ta_date' => 'TA Date',
		'lease_start_date' => 'Lease Commencement',
		'lease_duration_no' => 'Lease Duration',
		'lease_duration_unit' => 'Mth / Yr',
		'lease_expiry' => 'Lease Expiry',
		'valuation_price' => 'Valuation',
		'option_money' => 'Option Money',
		'otp_date' => 'OTP Date',
		'option_exercise_date' => 'Option Exercise Date',
		'est_completion_date' => 'Est Completion Date',
		'sp_execution_date' => 'S&P Execution Date',
		'TOP' => 'TOP',
		'built_up' => 'Built Up',
		'land' => 'Land',
		'tenure' => 'Tenure',
		'condition' => 'Condition',
		'no_bedrooms' => 'No of Bedrooms',
		'no_bathrooms' => 'No of Bathrooms',
		'built_up_unit' => 'Sqf / Sqm',
		'land_unit' => 'Sqf / Sqm',
		'rental_price_type' => '',
		'transacted_price' => 'Transacted Price',
		'cdd_result' => 'CDD Results',
		'sls_cust' => 'Customer',
		'sls_result' => 'SLS Results',
		'pps_cust' => 'Customer',
		'pps_result' => 'PPS Results',
		'comm_unit' => 'No. of month',
		'comm_amt' => 'Comm Amt',
		'gst_payable' => 'GST Payable',
		'gst_inclusive' => 'GST Inclusive',
		'comm_earned' => 'Commission Earned',
		'gst' => 'GST',
		'comm_gross' => 'Gross',
		'comm_earned_agency' => 'Gross Comm To Agency',
		'gst_agency' => 'GST',
		'comm_gross_agency' => 'Total',
		'comm_earned_salesperson' => 'Comm Earned',
		'comm_earned_percent_salesperson' => 'Percentage',
		'comm_percent' => 'Percentage',
		'status' => 'Status',
		'datesubmit' => 'Date Submit',
		'datereject' => 'Date Reject',
		'dateapprove' => 'Date Approve',
		'status_status' => 'Status',
		'date' => 'Date',
		'salesperson_nric' => 'Salesperson ID',
		'cdd_check_result' => 'CDD measure result',
		'str_filing_date' => 'Str Filing Date',
		'remarks' => 'Remarks',
		'salesperson_email' => 'Email' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'category' => '',
		'prop_type' => '',
		'Prop_kind' => '',
		'rental_price' => '',
		'salesperson_name' => '',
		'prop_name' => '',
		'prop_address' => '',
		'docuserid' => '',
		'cea_reg' => '',
		'prop_postal' => '',
		'cobroke_comm' => '',
		'agency_fee' => '',
		'commission' => '',
		'sale_price' => '',
		'representing' => '',
		'marketing_rights' => '',
		'currency' => '',
		'loi_date' => '',
		'ta_date' => '',
		'lease_start_date' => '',
		'lease_duration_no' => '',
		'lease_duration_unit' => '',
		'lease_expiry' => '',
		'valuation_price' => '',
		'option_money' => '',
		'otp_date' => '',
		'option_exercise_date' => '',
		'est_completion_date' => '',
		'sp_execution_date' => '',
		'TOP' => '',
		'built_up' => '',
		'land' => '',
		'tenure' => '',
		'condition' => '',
		'no_bedrooms' => '',
		'no_bathrooms' => '',
		'built_up_unit' => '',
		'land_unit' => '',
		'rental_price_type' => '',
		'transacted_price' => '',
		'cdd_result' => '',
		'sls_cust' => '',
		'sls_result' => '',
		'pps_cust' => '',
		'pps_result' => '',
		'comm_unit' => '',
		'comm_amt' => '',
		'gst_payable' => '',
		'gst_inclusive' => '',
		'comm_earned' => '',
		'gst' => '',
		'comm_gross' => '',
		'comm_earned_agency' => '',
		'gst_agency' => '',
		'comm_gross_agency' => '',
		'comm_earned_salesperson' => '',
		'comm_earned_percent_salesperson' => '',
		'comm_percent' => '',
		'status' => '',
		'datesubmit' => '',
		'datereject' => '',
		'dateapprove' => '',
		'status_status' => '',
		'date' => '',
		'salesperson_nric' => '',
		'cdd_check_result' => '',
		'str_filing_date' => '',
		'remarks' => '',
		'salesperson_email' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'category' => '',
		'prop_type' => '',
		'Prop_kind' => '',
		'rental_price' => '',
		'salesperson_name' => '',
		'prop_name' => '',
		'prop_address' => '',
		'docuserid' => '',
		'cea_reg' => '',
		'prop_postal' => '',
		'cobroke_comm' => '',
		'agency_fee' => '',
		'commission' => '',
		'sale_price' => '',
		'representing' => '',
		'marketing_rights' => '',
		'currency' => '',
		'loi_date' => '',
		'ta_date' => '',
		'lease_start_date' => '',
		'lease_duration_no' => '',
		'lease_duration_unit' => '',
		'lease_expiry' => '',
		'valuation_price' => '',
		'option_money' => '',
		'otp_date' => '',
		'option_exercise_date' => '',
		'est_completion_date' => '',
		'sp_execution_date' => '',
		'TOP' => '',
		'built_up' => '',
		'land' => '',
		'tenure' => '',
		'condition' => '',
		'no_bedrooms' => '',
		'no_bathrooms' => '',
		'built_up_unit' => '',
		'land_unit' => '',
		'rental_price_type' => '',
		'transacted_price' => '',
		'cdd_result' => '',
		'sls_cust' => '',
		'sls_result' => '',
		'pps_cust' => '',
		'pps_result' => '',
		'comm_unit' => '',
		'comm_amt' => '',
		'gst_payable' => '',
		'gst_inclusive' => '',
		'comm_earned' => '',
		'gst' => '',
		'comm_gross' => '',
		'comm_earned_agency' => '',
		'gst_agency' => '',
		'comm_gross_agency' => '',
		'comm_earned_salesperson' => '',
		'comm_earned_percent_salesperson' => '',
		'comm_percent' => '',
		'status' => '',
		'datesubmit' => '',
		'datereject' => '',
		'dateapprove' => '',
		'status_status' => '',
		'date' => '',
		'salesperson_nric' => '',
		'cdd_check_result' => '',
		'str_filing_date' => '',
		'remarks' => '',
		'salesperson_email' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>