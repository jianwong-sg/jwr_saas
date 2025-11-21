<?php
global $runnerTableSettings;
$runnerTableSettings['forms'] = array(
	'name' => 'forms',
	'shortName' => 'forms',
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
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search' 
	),
	'tableOwnerIdField' => 'docuserid',
	'usersOwnerIdField' => 'active',
	'hasEncryptedFields' => true,
	'afterEditAction' => 0,
	'afterAddAction' => 0,
	'detailsBadgeColor' => 'e07878',
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
	'orderInfo' => array( 
		array(
			'index' => 1,
			'dir' => 'DESC',
			'field' => 'id' 
		) 
	),
	'sql' => 'SELECT
	id,
	id_form,
	id_tx,
	salesperson,
	salesperson_cea,
	salesperson_contact,
	estateagent,
	estateagent_cea,
	property_address,
	comm,
	percentage,
	GST,
	conflict,
	conflict_description,
	`co-broke`,
	ownership,
	additional_term,
	date_agreement,
	title,
	form_name,
	seller1,
	seller1_id,
	seller1_address,
	seller2,
	seller2_id,
	seller2_address,
	seller3,
	seller3_id,
	seller3_address,
	seller4,
	seller4_id,
	seller4_address,
	buyer1,
	buyer1_id,
	buyer1_address,
	buyer2,
	buyer2_id,
	buyer2_address,
	buyer3,
	buyer3_id,
	buyer3_address,
	buyer4,
	buyer4_id,
	buyer4_address,
	landlord1,
	landlord1_id,
	landlord1_address,
	landlord2,
	landlord2_id,
	landlord2_address,
	landlord3,
	landlord3_id,
	landlord3_address,
	landlord4,
	landlord4_id,
	landlord4_address,
	tenant1,
	tenant1_id,
	tenant1_address,
	tenant2,
	tenant2_id,
	tenant2_address,
	tenant3,
	tenant3_id,
	tenant3_address,
	tenant4,
	tenant4_id,
	tenant4_address,
	estateagent_address,
	gst_include,
	salesperson_ic,
	salesperson_address,
	estateagent_tel,
	estateagent2,
	estateagent_cea2,
	date_sign,
	date_sp,
	docuserid,
	status,
	date_ta,
	lease_tenure,
	renewal_term,
	renewal_agree,
	renewal_comm,
	renewal_percent,
	lease_tenure2,
	expiry_date,
	expected_sale_price,
	expected_sale_price_text,
	effect_date,
	expected_rental_price,
	expected_rental_price_text,
	period_per_rent,
	lease_tenure3,
	renewal_term2,
	agency_or_salesperson,
	sign_seller1,
	sign_seller2,
	sign_seller3,
	sign_seller4,
	sign_interpreter1,
	sign_interpreter2,
	sign_interpreter3,
	sign_interpreter4,
	sign_agent,
	interpret1,
	interpret2,
	interpret3,
	interpret4,
	interpretdate1,
	interpretdate2,
	interpretdate3,
	interpretdate4,
	sign_date1,
	sign_date2,
	sign_date3,
	sign_date4,
	interpreterID1,
	interpreterID2,
	interpreterID3,
	interpreterID4,
	sign_buyer1,
	interpretation1,
	interpretation2,
	interpretation3,
	interpretation4,
	representing,
	category,
	sign1,
	sign2,
	sign3,
	sign4,
	sign5,
	sign6,
	sign7,
	sign8,
	sign9,
	sign_landlord1,
	sign_landlord2,
	sign_landlord3,
	sign_landlord4,
	sign_tenant1,
	sign_tenant2,
	sign_tenant3,
	sign_tenant4,
	sign_buyer2,
	sign_buyer3,
	sign_buyer4,
	estateagent_address2
FROM
	forms
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
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '$value = "<a href=\\"forms_view.php?editid1=".$value."\\">".$value."</a>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'textboxSize' => 50,
					'textHTML5Input' => '1',
					'lookupType' => 2,
					'lookupTable' => 'forms',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'status',
					'lookupControlType' => 1,
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'id_form' => array(
			'name' => 'id_form',
			'goodName' => 'id_form',
			'strField' => 'id_form',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'id_form',
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
			'tableName' => 'forms' 
		),
		'id_tx' => array(
			'name' => 'id_tx',
			'goodName' => 'id_tx',
			'strField' => 'id_tx',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'id_tx',
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
			'tableName' => 'forms' 
		),
		'salesperson' => array(
			'name' => 'salesperson',
			'goodName' => 'salesperson',
			'strField' => 'salesperson',
			'index' => 4,
			'sqlExpression' => 'salesperson',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'salesperson_cea' => array(
			'name' => 'salesperson_cea',
			'goodName' => 'salesperson_cea',
			'strField' => 'salesperson_cea',
			'index' => 5,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'salesperson_cea',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'salesperson_contact' => array(
			'name' => 'salesperson_contact',
			'goodName' => 'salesperson_contact',
			'strField' => 'salesperson_contact',
			'index' => 6,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'salesperson_contact',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'estateagent' => array(
			'name' => 'estateagent',
			'goodName' => 'estateagent',
			'strField' => 'estateagent',
			'index' => 7,
			'sqlExpression' => 'estateagent',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'estateagent_cea' => array(
			'name' => 'estateagent_cea',
			'goodName' => 'estateagent_cea',
			'strField' => 'estateagent_cea',
			'index' => 8,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'estateagent_cea',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'property_address' => array(
			'name' => 'property_address',
			'goodName' => 'property_address',
			'strField' => 'property_address',
			'index' => 9,
			'sqlExpression' => 'property_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'comm' => array(
			'name' => 'comm',
			'goodName' => 'comm',
			'strField' => 'comm',
			'index' => 10,
			'sqlExpression' => 'comm',
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
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'percentage' => array(
			'name' => 'percentage',
			'goodName' => 'percentage',
			'strField' => 'percentage',
			'index' => 11,
			'sqlExpression' => 'percentage',
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
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'GST' => array(
			'name' => 'GST',
			'goodName' => 'GST',
			'strField' => 'GST',
			'index' => 12,
			'sqlExpression' => 'GST',
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
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'conflict' => array(
			'name' => 'conflict',
			'goodName' => 'conflict',
			'strField' => 'conflict',
			'index' => 13,
			'sqlExpression' => 'conflict',
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
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'conflict_description' => array(
			'name' => 'conflict_description',
			'goodName' => 'conflict_description',
			'strField' => 'conflict_description',
			'index' => 14,
			'sqlExpression' => 'conflict_description',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'co-broke' => array(
			'name' => 'co-broke',
			'goodName' => 'co_broke',
			'strField' => 'co-broke',
			'index' => 15,
			'sqlExpression' => '`co-broke`',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'ownership' => array(
			'name' => 'ownership',
			'goodName' => 'ownership',
			'strField' => 'ownership',
			'index' => 16,
			'sqlExpression' => 'ownership',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'additional_term' => array(
			'name' => 'additional_term',
			'goodName' => 'additional_term',
			'strField' => 'additional_term',
			'index' => 17,
			'sqlExpression' => 'additional_term',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'date_agreement' => array(
			'name' => 'date_agreement',
			'goodName' => 'date_agreement',
			'strField' => 'date_agreement',
			'index' => 18,
			'type' => 7,
			'sqlExpression' => 'date_agreement',
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
					'textboxSize' => 120,
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'title' => array(
			'name' => 'title',
			'goodName' => 'title',
			'strField' => 'title',
			'index' => 19,
			'sqlExpression' => 'title',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'form_name' => array(
			'name' => 'form_name',
			'goodName' => 'form_name',
			'strField' => 'form_name',
			'index' => 20,
			'sqlExpression' => 'form_name',
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller1' => array(
			'name' => 'seller1',
			'goodName' => 'seller1',
			'strField' => 'seller1',
			'index' => 21,
			'sqlExpression' => 'seller1',
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
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'parties_involved',
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller1_id' => array(
			'name' => 'seller1_id',
			'goodName' => 'seller1_id',
			'strField' => 'seller1_id',
			'index' => 22,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'seller1_id',
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
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'parties_involved',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'seller1',
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller1_address' => array(
			'name' => 'seller1_address',
			'goodName' => 'seller1_address',
			'strField' => 'seller1_address',
			'index' => 23,
			'sqlExpression' => 'seller1_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller2' => array(
			'name' => 'seller2',
			'goodName' => 'seller2',
			'strField' => 'seller2',
			'index' => 24,
			'sqlExpression' => 'seller2',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller2_id' => array(
			'name' => 'seller2_id',
			'goodName' => 'seller2_id',
			'strField' => 'seller2_id',
			'index' => 25,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'seller2_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller2_address' => array(
			'name' => 'seller2_address',
			'goodName' => 'seller2_address',
			'strField' => 'seller2_address',
			'index' => 26,
			'sqlExpression' => 'seller2_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller3' => array(
			'name' => 'seller3',
			'goodName' => 'seller3',
			'strField' => 'seller3',
			'index' => 27,
			'sqlExpression' => 'seller3',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller3_id' => array(
			'name' => 'seller3_id',
			'goodName' => 'seller3_id',
			'strField' => 'seller3_id',
			'index' => 28,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'seller3_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller3_address' => array(
			'name' => 'seller3_address',
			'goodName' => 'seller3_address',
			'strField' => 'seller3_address',
			'index' => 29,
			'sqlExpression' => 'seller3_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller4' => array(
			'name' => 'seller4',
			'goodName' => 'seller4',
			'strField' => 'seller4',
			'index' => 30,
			'sqlExpression' => 'seller4',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller4_id' => array(
			'name' => 'seller4_id',
			'goodName' => 'seller4_id',
			'strField' => 'seller4_id',
			'index' => 31,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'seller4_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller4_address' => array(
			'name' => 'seller4_address',
			'goodName' => 'seller4_address',
			'strField' => 'seller4_address',
			'index' => 32,
			'sqlExpression' => 'seller4_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer1' => array(
			'name' => 'buyer1',
			'goodName' => 'buyer1',
			'strField' => 'buyer1',
			'index' => 33,
			'sqlExpression' => 'buyer1',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer1_id' => array(
			'name' => 'buyer1_id',
			'goodName' => 'buyer1_id',
			'strField' => 'buyer1_id',
			'index' => 34,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'buyer1_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer1_address' => array(
			'name' => 'buyer1_address',
			'goodName' => 'buyer1_address',
			'strField' => 'buyer1_address',
			'index' => 35,
			'sqlExpression' => 'buyer1_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer2' => array(
			'name' => 'buyer2',
			'goodName' => 'buyer2',
			'strField' => 'buyer2',
			'index' => 36,
			'sqlExpression' => 'buyer2',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer2_id' => array(
			'name' => 'buyer2_id',
			'goodName' => 'buyer2_id',
			'strField' => 'buyer2_id',
			'index' => 37,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'buyer2_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer2_address' => array(
			'name' => 'buyer2_address',
			'goodName' => 'buyer2_address',
			'strField' => 'buyer2_address',
			'index' => 38,
			'sqlExpression' => 'buyer2_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer3' => array(
			'name' => 'buyer3',
			'goodName' => 'buyer3',
			'strField' => 'buyer3',
			'index' => 39,
			'sqlExpression' => 'buyer3',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer3_id' => array(
			'name' => 'buyer3_id',
			'goodName' => 'buyer3_id',
			'strField' => 'buyer3_id',
			'index' => 40,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'buyer3_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer3_address' => array(
			'name' => 'buyer3_address',
			'goodName' => 'buyer3_address',
			'strField' => 'buyer3_address',
			'index' => 41,
			'sqlExpression' => 'buyer3_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer4' => array(
			'name' => 'buyer4',
			'goodName' => 'buyer4',
			'strField' => 'buyer4',
			'index' => 42,
			'sqlExpression' => 'buyer4',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer4_id' => array(
			'name' => 'buyer4_id',
			'goodName' => 'buyer4_id',
			'strField' => 'buyer4_id',
			'index' => 43,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'buyer4_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'buyer4_address' => array(
			'name' => 'buyer4_address',
			'goodName' => 'buyer4_address',
			'strField' => 'buyer4_address',
			'index' => 44,
			'sqlExpression' => 'buyer4_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord1' => array(
			'name' => 'landlord1',
			'goodName' => 'landlord1',
			'strField' => 'landlord1',
			'index' => 45,
			'sqlExpression' => 'landlord1',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord1_id' => array(
			'name' => 'landlord1_id',
			'goodName' => 'landlord1_id',
			'strField' => 'landlord1_id',
			'index' => 46,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'landlord1_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord1_address' => array(
			'name' => 'landlord1_address',
			'goodName' => 'landlord1_address',
			'strField' => 'landlord1_address',
			'index' => 47,
			'sqlExpression' => 'landlord1_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord2' => array(
			'name' => 'landlord2',
			'goodName' => 'landlord2',
			'strField' => 'landlord2',
			'index' => 48,
			'sqlExpression' => 'landlord2',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord2_id' => array(
			'name' => 'landlord2_id',
			'goodName' => 'landlord2_id',
			'strField' => 'landlord2_id',
			'index' => 49,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'landlord2_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord2_address' => array(
			'name' => 'landlord2_address',
			'goodName' => 'landlord2_address',
			'strField' => 'landlord2_address',
			'index' => 50,
			'sqlExpression' => 'landlord2_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord3' => array(
			'name' => 'landlord3',
			'goodName' => 'landlord3',
			'strField' => 'landlord3',
			'index' => 51,
			'sqlExpression' => 'landlord3',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord3_id' => array(
			'name' => 'landlord3_id',
			'goodName' => 'landlord3_id',
			'strField' => 'landlord3_id',
			'index' => 52,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'landlord3_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord3_address' => array(
			'name' => 'landlord3_address',
			'goodName' => 'landlord3_address',
			'strField' => 'landlord3_address',
			'index' => 53,
			'sqlExpression' => 'landlord3_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord4' => array(
			'name' => 'landlord4',
			'goodName' => 'landlord4',
			'strField' => 'landlord4',
			'index' => 54,
			'sqlExpression' => 'landlord4',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord4_id' => array(
			'name' => 'landlord4_id',
			'goodName' => 'landlord4_id',
			'strField' => 'landlord4_id',
			'index' => 55,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'landlord4_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'landlord4_address' => array(
			'name' => 'landlord4_address',
			'goodName' => 'landlord4_address',
			'strField' => 'landlord4_address',
			'index' => 56,
			'sqlExpression' => 'landlord4_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant1' => array(
			'name' => 'tenant1',
			'goodName' => 'tenant1',
			'strField' => 'tenant1',
			'index' => 57,
			'sqlExpression' => 'tenant1',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant1_id' => array(
			'name' => 'tenant1_id',
			'goodName' => 'tenant1_id',
			'strField' => 'tenant1_id',
			'index' => 58,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'tenant1_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant1_address' => array(
			'name' => 'tenant1_address',
			'goodName' => 'tenant1_address',
			'strField' => 'tenant1_address',
			'index' => 59,
			'sqlExpression' => 'tenant1_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant2' => array(
			'name' => 'tenant2',
			'goodName' => 'tenant2',
			'strField' => 'tenant2',
			'index' => 60,
			'sqlExpression' => 'tenant2',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant2_id' => array(
			'name' => 'tenant2_id',
			'goodName' => 'tenant2_id',
			'strField' => 'tenant2_id',
			'index' => 61,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'tenant2_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant2_address' => array(
			'name' => 'tenant2_address',
			'goodName' => 'tenant2_address',
			'strField' => 'tenant2_address',
			'index' => 62,
			'sqlExpression' => 'tenant2_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant3' => array(
			'name' => 'tenant3',
			'goodName' => 'tenant3',
			'strField' => 'tenant3',
			'index' => 63,
			'sqlExpression' => 'tenant3',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant3_id' => array(
			'name' => 'tenant3_id',
			'goodName' => 'tenant3_id',
			'strField' => 'tenant3_id',
			'index' => 64,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'tenant3_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant3_address' => array(
			'name' => 'tenant3_address',
			'goodName' => 'tenant3_address',
			'strField' => 'tenant3_address',
			'index' => 65,
			'sqlExpression' => 'tenant3_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant4' => array(
			'name' => 'tenant4',
			'goodName' => 'tenant4',
			'strField' => 'tenant4',
			'index' => 66,
			'sqlExpression' => 'tenant4',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant4_id' => array(
			'name' => 'tenant4_id',
			'goodName' => 'tenant4_id',
			'strField' => 'tenant4_id',
			'index' => 67,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'tenant4_id',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'tenant4_address' => array(
			'name' => 'tenant4_address',
			'goodName' => 'tenant4_address',
			'strField' => 'tenant4_address',
			'index' => 68,
			'sqlExpression' => 'tenant4_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'estateagent_address' => array(
			'name' => 'estateagent_address',
			'goodName' => 'estateagent_address',
			'strField' => 'estateagent_address',
			'index' => 69,
			'sqlExpression' => 'estateagent_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'gst_include' => array(
			'name' => 'gst_include',
			'goodName' => 'gst_include',
			'strField' => 'gst_include',
			'index' => 70,
			'sqlExpression' => 'gst_include',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'salesperson_ic' => array(
			'name' => 'salesperson_ic',
			'goodName' => 'salesperson_ic',
			'strField' => 'salesperson_ic',
			'index' => 71,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'salesperson_ic',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'salesperson_address' => array(
			'name' => 'salesperson_address',
			'goodName' => 'salesperson_address',
			'strField' => 'salesperson_address',
			'index' => 72,
			'sqlExpression' => 'salesperson_address',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'estateagent_tel' => array(
			'name' => 'estateagent_tel',
			'goodName' => 'estateagent_tel',
			'strField' => 'estateagent_tel',
			'index' => 73,
			'sqlExpression' => 'estateagent_tel',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'estateagent2' => array(
			'name' => 'estateagent2',
			'goodName' => 'estateagent2',
			'strField' => 'estateagent2',
			'index' => 74,
			'sqlExpression' => 'estateagent2',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'estateagent_cea2' => array(
			'name' => 'estateagent_cea2',
			'goodName' => 'estateagent_cea2',
			'strField' => 'estateagent_cea2',
			'index' => 75,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'estateagent_cea2',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'date_sign' => array(
			'name' => 'date_sign',
			'goodName' => 'date_sign',
			'strField' => 'date_sign',
			'index' => 76,
			'sqlExpression' => 'date_sign',
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
					'dateEditType' => 13,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'date_sp' => array(
			'name' => 'date_sp',
			'goodName' => 'date_sp',
			'strField' => 'date_sp',
			'index' => 77,
			'type' => 7,
			'sqlExpression' => 'date_sp',
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
					'denyDuplicateMessage' => array(
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'docuserid' => array(
			'name' => 'docuserid',
			'goodName' => 'docuserid',
			'strField' => 'docuserid',
			'index' => 78,
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
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'index' => 79,
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
					'textboxSize' => 50,
					'textHTML5Input' => '1',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'id' 
			),
			'tableName' => 'forms' 
		),
		'date_ta' => array(
			'name' => 'date_ta',
			'goodName' => 'date_ta',
			'strField' => 'date_ta',
			'index' => 80,
			'type' => 7,
			'sqlExpression' => 'date_ta',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'lease_tenure' => array(
			'name' => 'lease_tenure',
			'goodName' => 'lease_tenure',
			'strField' => 'lease_tenure',
			'index' => 81,
			'sqlExpression' => 'lease_tenure',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'renewal_term' => array(
			'name' => 'renewal_term',
			'goodName' => 'renewal_term',
			'strField' => 'renewal_term',
			'index' => 82,
			'sqlExpression' => 'renewal_term',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'renewal_agree' => array(
			'name' => 'renewal_agree',
			'goodName' => 'renewal_agree',
			'strField' => 'renewal_agree',
			'index' => 83,
			'sqlExpression' => 'renewal_agree',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'renewal_comm' => array(
			'name' => 'renewal_comm',
			'goodName' => 'renewal_comm',
			'strField' => 'renewal_comm',
			'index' => 84,
			'sqlExpression' => 'renewal_comm',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'renewal_percent' => array(
			'name' => 'renewal_percent',
			'goodName' => 'renewal_percent',
			'strField' => 'renewal_percent',
			'index' => 85,
			'sqlExpression' => 'renewal_percent',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'lease_tenure2' => array(
			'name' => 'lease_tenure2',
			'goodName' => 'lease_tenure2',
			'strField' => 'lease_tenure2',
			'index' => 86,
			'sqlExpression' => 'lease_tenure2',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'expiry_date' => array(
			'name' => 'expiry_date',
			'goodName' => 'expiry_date',
			'strField' => 'expiry_date',
			'index' => 87,
			'type' => 7,
			'sqlExpression' => 'expiry_date',
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
					'denyDuplicateMessage' => array(
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'expected_sale_price' => array(
			'name' => 'expected_sale_price',
			'goodName' => 'expected_sale_price',
			'strField' => 'expected_sale_price',
			'index' => 88,
			'sqlExpression' => 'expected_sale_price',
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
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'expected_sale_price_text' => array(
			'name' => 'expected_sale_price_text',
			'goodName' => 'expected_sale_price_text',
			'strField' => 'expected_sale_price_text',
			'sourceSingle' => 'expected_sale_price_text',
			'index' => 89,
			'sqlExpression' => 'expected_sale_price_text',
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
			'tableName' => 'forms' 
		),
		'effect_date' => array(
			'name' => 'effect_date',
			'goodName' => 'effect_date',
			'strField' => 'effect_date',
			'index' => 90,
			'type' => 7,
			'sqlExpression' => 'effect_date',
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
					'denyDuplicateMessage' => array(
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'expected_rental_price' => array(
			'name' => 'expected_rental_price',
			'goodName' => 'expected_rental_price',
			'strField' => 'expected_rental_price',
			'index' => 91,
			'sqlExpression' => 'expected_rental_price',
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
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'expected_rental_price_text' => array(
			'name' => 'expected_rental_price_text',
			'goodName' => 'expected_rental_price_text',
			'strField' => 'expected_rental_price_text',
			'index' => 92,
			'sqlExpression' => 'expected_rental_price_text',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'period_per_rent' => array(
			'name' => 'period_per_rent',
			'goodName' => 'period_per_rent',
			'strField' => 'period_per_rent',
			'index' => 93,
			'sqlExpression' => 'period_per_rent',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'lease_tenure3' => array(
			'name' => 'lease_tenure3',
			'goodName' => 'lease_tenure3',
			'strField' => 'lease_tenure3',
			'index' => 94,
			'sqlExpression' => 'lease_tenure3',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'renewal_term2' => array(
			'name' => 'renewal_term2',
			'goodName' => 'renewal_term2',
			'strField' => 'renewal_term2',
			'index' => 95,
			'sqlExpression' => 'renewal_term2',
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'agency_or_salesperson' => array(
			'name' => 'agency_or_salesperson',
			'goodName' => 'agency_or_salesperson',
			'strField' => 'agency_or_salesperson',
			'index' => 96,
			'sqlExpression' => 'agency_or_salesperson',
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
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_seller1' => array(
			'name' => 'sign_seller1',
			'goodName' => 'sign_seller1',
			'strField' => 'sign_seller1',
			'index' => 97,
			'type' => 201,
			'sqlExpression' => 'sign_seller1',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageMultipleMode' => 2,
					'imageMaxCount' => 1,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1,
					'pluginInitString' => '// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="files";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";' 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_seller2' => array(
			'name' => 'sign_seller2',
			'goodName' => 'sign_seller2',
			'strField' => 'sign_seller2',
			'index' => 98,
			'type' => 201,
			'sqlExpression' => 'sign_seller2',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_seller3' => array(
			'name' => 'sign_seller3',
			'goodName' => 'sign_seller3',
			'strField' => 'sign_seller3',
			'index' => 99,
			'type' => 201,
			'sqlExpression' => 'sign_seller3',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_seller4' => array(
			'name' => 'sign_seller4',
			'goodName' => 'sign_seller4',
			'strField' => 'sign_seller4',
			'index' => 100,
			'type' => 201,
			'sqlExpression' => 'sign_seller4',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_interpreter1' => array(
			'name' => 'sign_interpreter1',
			'goodName' => 'sign_interpreter1',
			'strField' => 'sign_interpreter1',
			'index' => 101,
			'type' => 201,
			'sqlExpression' => 'sign_interpreter1',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_interpreter2' => array(
			'name' => 'sign_interpreter2',
			'goodName' => 'sign_interpreter2',
			'strField' => 'sign_interpreter2',
			'index' => 102,
			'type' => 201,
			'sqlExpression' => 'sign_interpreter2',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_interpreter3' => array(
			'name' => 'sign_interpreter3',
			'goodName' => 'sign_interpreter3',
			'strField' => 'sign_interpreter3',
			'index' => 103,
			'type' => 201,
			'sqlExpression' => 'sign_interpreter3',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_interpreter4' => array(
			'name' => 'sign_interpreter4',
			'goodName' => 'sign_interpreter4',
			'strField' => 'sign_interpreter4',
			'index' => 104,
			'type' => 201,
			'sqlExpression' => 'sign_interpreter4',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_agent' => array(
			'name' => 'sign_agent',
			'goodName' => 'sign_agent',
			'strField' => 'sign_agent',
			'index' => 105,
			'type' => 201,
			'sqlExpression' => 'sign_agent',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpret1' => array(
			'name' => 'interpret1',
			'goodName' => 'interpret1',
			'strField' => 'interpret1',
			'index' => 106,
			'sqlExpression' => 'interpret1',
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
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpret2' => array(
			'name' => 'interpret2',
			'goodName' => 'interpret2',
			'strField' => 'interpret2',
			'index' => 107,
			'sqlExpression' => 'interpret2',
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
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpret3' => array(
			'name' => 'interpret3',
			'goodName' => 'interpret3',
			'strField' => 'interpret3',
			'index' => 108,
			'sqlExpression' => 'interpret3',
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
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpret4' => array(
			'name' => 'interpret4',
			'goodName' => 'interpret4',
			'strField' => 'interpret4',
			'index' => 109,
			'sqlExpression' => 'interpret4',
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
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpretdate1' => array(
			'name' => 'interpretdate1',
			'goodName' => 'interpretdate1',
			'strField' => 'interpretdate1',
			'index' => 110,
			'type' => 7,
			'sqlExpression' => 'interpretdate1',
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
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpretdate2' => array(
			'name' => 'interpretdate2',
			'goodName' => 'interpretdate2',
			'strField' => 'interpretdate2',
			'index' => 111,
			'type' => 7,
			'sqlExpression' => 'interpretdate2',
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
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpretdate3' => array(
			'name' => 'interpretdate3',
			'goodName' => 'interpretdate3',
			'strField' => 'interpretdate3',
			'index' => 112,
			'type' => 7,
			'sqlExpression' => 'interpretdate3',
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
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpretdate4' => array(
			'name' => 'interpretdate4',
			'goodName' => 'interpretdate4',
			'strField' => 'interpretdate4',
			'index' => 113,
			'type' => 7,
			'sqlExpression' => 'interpretdate4',
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
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_date1' => array(
			'name' => 'sign_date1',
			'goodName' => 'sign_date1',
			'strField' => 'sign_date1',
			'index' => 114,
			'type' => 7,
			'sqlExpression' => 'sign_date1',
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
					'dateEditType' => 13,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_date2' => array(
			'name' => 'sign_date2',
			'goodName' => 'sign_date2',
			'strField' => 'sign_date2',
			'index' => 115,
			'type' => 7,
			'sqlExpression' => 'sign_date2',
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
					'dateEditType' => 13,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_date3' => array(
			'name' => 'sign_date3',
			'goodName' => 'sign_date3',
			'strField' => 'sign_date3',
			'index' => 116,
			'type' => 7,
			'sqlExpression' => 'sign_date3',
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
					'dateEditType' => 13,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_date4' => array(
			'name' => 'sign_date4',
			'goodName' => 'sign_date4',
			'strField' => 'sign_date4',
			'index' => 117,
			'type' => 7,
			'sqlExpression' => 'sign_date4',
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
					'dateEditType' => 13,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpreterID1' => array(
			'name' => 'interpreterID1',
			'goodName' => 'interpreterID1',
			'strField' => 'interpreterID1',
			'index' => 118,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'interpreterID1',
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
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpreterID2' => array(
			'name' => 'interpreterID2',
			'goodName' => 'interpreterID2',
			'strField' => 'interpreterID2',
			'index' => 119,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'interpreterID2',
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
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpreterID3' => array(
			'name' => 'interpreterID3',
			'goodName' => 'interpreterID3',
			'strField' => 'interpreterID3',
			'index' => 120,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'interpreterID3',
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
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpreterID4' => array(
			'name' => 'interpreterID4',
			'goodName' => 'interpreterID4',
			'strField' => 'interpreterID4',
			'index' => 121,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'interpreterID4',
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
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'sign_buyer1' => array(
			'name' => 'sign_buyer1',
			'goodName' => 'sign_buyer1',
			'strField' => 'sign_buyer1',
			'index' => 122,
			'type' => 201,
			'sqlExpression' => 'sign_buyer1',
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
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpretation1' => array(
			'name' => 'interpretation1',
			'goodName' => 'interpretation1',
			'strField' => 'interpretation1',
			'index' => 123,
			'sqlExpression' => 'interpretation1',
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
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpretation2' => array(
			'name' => 'interpretation2',
			'goodName' => 'interpretation2',
			'strField' => 'interpretation2',
			'index' => 124,
			'sqlExpression' => 'interpretation2',
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
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpretation3' => array(
			'name' => 'interpretation3',
			'goodName' => 'interpretation3',
			'strField' => 'interpretation3',
			'index' => 125,
			'sqlExpression' => 'interpretation3',
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
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'interpretation4' => array(
			'name' => 'interpretation4',
			'goodName' => 'interpretation4',
			'strField' => 'interpretation4',
			'index' => 126,
			'sqlExpression' => 'interpretation4',
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
			'defaultSearchOption' => '',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'representing' => array(
			'name' => 'representing',
			'goodName' => 'representing',
			'strField' => 'representing',
			'index' => 127,
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
			'tableName' => 'forms' 
		),
		'category' => array(
			'name' => 'category',
			'goodName' => 'category',
			'strField' => 'category',
			'sourceSingle' => 'category',
			'index' => 128,
			'sqlExpression' => 'category',
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
			'tableName' => 'forms' 
		),
		'sign1' => array(
			'name' => 'sign1',
			'goodName' => 'sign1',
			'strField' => 'sign1',
			'sourceSingle' => 'sign1',
			'index' => 129,
			'type' => 201,
			'sqlExpression' => 'sign1',
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
			'tableName' => 'forms' 
		),
		'sign2' => array(
			'name' => 'sign2',
			'goodName' => 'sign2',
			'strField' => 'sign2',
			'sourceSingle' => 'sign2',
			'index' => 130,
			'type' => 201,
			'sqlExpression' => 'sign2',
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
			'tableName' => 'forms' 
		),
		'sign3' => array(
			'name' => 'sign3',
			'goodName' => 'sign3',
			'strField' => 'sign3',
			'sourceSingle' => 'sign3',
			'index' => 131,
			'type' => 201,
			'sqlExpression' => 'sign3',
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
			'tableName' => 'forms' 
		),
		'sign4' => array(
			'name' => 'sign4',
			'goodName' => 'sign4',
			'strField' => 'sign4',
			'sourceSingle' => 'sign4',
			'index' => 132,
			'type' => 201,
			'sqlExpression' => 'sign4',
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
			'tableName' => 'forms' 
		),
		'sign5' => array(
			'name' => 'sign5',
			'goodName' => 'sign5',
			'strField' => 'sign5',
			'sourceSingle' => 'sign5',
			'index' => 133,
			'type' => 201,
			'sqlExpression' => 'sign5',
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
			'tableName' => 'forms' 
		),
		'sign6' => array(
			'name' => 'sign6',
			'goodName' => 'sign6',
			'strField' => 'sign6',
			'sourceSingle' => 'sign6',
			'index' => 134,
			'type' => 201,
			'sqlExpression' => 'sign6',
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
			'tableName' => 'forms' 
		),
		'sign7' => array(
			'name' => 'sign7',
			'goodName' => 'sign7',
			'strField' => 'sign7',
			'sourceSingle' => 'sign7',
			'index' => 135,
			'type' => 201,
			'sqlExpression' => 'sign7',
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
			'tableName' => 'forms' 
		),
		'sign8' => array(
			'name' => 'sign8',
			'goodName' => 'sign8',
			'strField' => 'sign8',
			'sourceSingle' => 'sign8',
			'index' => 136,
			'type' => 201,
			'sqlExpression' => 'sign8',
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
			'tableName' => 'forms' 
		),
		'sign9' => array(
			'name' => 'sign9',
			'goodName' => 'sign9',
			'strField' => 'sign9',
			'sourceSingle' => 'sign9',
			'index' => 137,
			'type' => 201,
			'sqlExpression' => 'sign9',
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
			'tableName' => 'forms' 
		),
		'sign_landlord1' => array(
			'name' => 'sign_landlord1',
			'goodName' => 'sign_landlord1',
			'strField' => 'sign_landlord1',
			'sourceSingle' => 'sign_landlord1',
			'index' => 138,
			'type' => 201,
			'sqlExpression' => 'sign_landlord1',
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
			'tableName' => 'forms' 
		),
		'sign_landlord2' => array(
			'name' => 'sign_landlord2',
			'goodName' => 'sign_landlord2',
			'strField' => 'sign_landlord2',
			'sourceSingle' => 'sign_landlord2',
			'index' => 139,
			'type' => 201,
			'sqlExpression' => 'sign_landlord2',
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
			'tableName' => 'forms' 
		),
		'sign_landlord3' => array(
			'name' => 'sign_landlord3',
			'goodName' => 'sign_landlord3',
			'strField' => 'sign_landlord3',
			'sourceSingle' => 'sign_landlord3',
			'index' => 140,
			'type' => 201,
			'sqlExpression' => 'sign_landlord3',
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
			'tableName' => 'forms' 
		),
		'sign_landlord4' => array(
			'name' => 'sign_landlord4',
			'goodName' => 'sign_landlord4',
			'strField' => 'sign_landlord4',
			'sourceSingle' => 'sign_landlord4',
			'index' => 141,
			'type' => 201,
			'sqlExpression' => 'sign_landlord4',
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
			'tableName' => 'forms' 
		),
		'sign_tenant1' => array(
			'name' => 'sign_tenant1',
			'goodName' => 'sign_tenant1',
			'strField' => 'sign_tenant1',
			'sourceSingle' => 'sign_tenant1',
			'index' => 142,
			'type' => 201,
			'sqlExpression' => 'sign_tenant1',
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
			'tableName' => 'forms' 
		),
		'sign_tenant2' => array(
			'name' => 'sign_tenant2',
			'goodName' => 'sign_tenant2',
			'strField' => 'sign_tenant2',
			'sourceSingle' => 'sign_tenant2',
			'index' => 143,
			'type' => 201,
			'sqlExpression' => 'sign_tenant2',
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
			'tableName' => 'forms' 
		),
		'sign_tenant3' => array(
			'name' => 'sign_tenant3',
			'goodName' => 'sign_tenant3',
			'strField' => 'sign_tenant3',
			'sourceSingle' => 'sign_tenant3',
			'index' => 144,
			'type' => 201,
			'sqlExpression' => 'sign_tenant3',
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
			'tableName' => 'forms' 
		),
		'sign_tenant4' => array(
			'name' => 'sign_tenant4',
			'goodName' => 'sign_tenant4',
			'strField' => 'sign_tenant4',
			'sourceSingle' => 'sign_tenant4',
			'index' => 145,
			'type' => 201,
			'sqlExpression' => 'sign_tenant4',
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
			'tableName' => 'forms' 
		),
		'sign_buyer2' => array(
			'name' => 'sign_buyer2',
			'goodName' => 'sign_buyer2',
			'strField' => 'sign_buyer2',
			'sourceSingle' => 'sign_buyer2',
			'index' => 146,
			'type' => 201,
			'sqlExpression' => 'sign_buyer2',
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
			'tableName' => 'forms' 
		),
		'sign_buyer3' => array(
			'name' => 'sign_buyer3',
			'goodName' => 'sign_buyer3',
			'strField' => 'sign_buyer3',
			'sourceSingle' => 'sign_buyer3',
			'index' => 147,
			'type' => 201,
			'sqlExpression' => 'sign_buyer3',
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
			'tableName' => 'forms' 
		),
		'sign_buyer4' => array(
			'name' => 'sign_buyer4',
			'goodName' => 'sign_buyer4',
			'strField' => 'sign_buyer4',
			'sourceSingle' => 'sign_buyer4',
			'index' => 148,
			'type' => 201,
			'sqlExpression' => 'sign_buyer4',
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
			'tableName' => 'forms' 
		),
		'estateagent_address2' => array(
			'name' => 'estateagent_address2',
			'goodName' => 'estateagent_address2',
			'strField' => 'estateagent_address2',
			'sourceSingle' => 'estateagent_address2',
			'index' => 149,
			'sqlExpression' => 'estateagent_address2',
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
			'tableName' => 'forms' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	id_form,
	id_tx,
	salesperson,
	salesperson_cea,
	salesperson_contact,
	estateagent,
	estateagent_cea,
	property_address,
	comm,
	percentage,
	GST,
	conflict,
	conflict_description,
	`co-broke`,
	ownership,
	additional_term,
	date_agreement,
	title,
	form_name,
	seller1,
	seller1_id,
	seller1_address,
	seller2,
	seller2_id,
	seller2_address,
	seller3,
	seller3_id,
	seller3_address,
	seller4,
	seller4_id,
	seller4_address,
	buyer1,
	buyer1_id,
	buyer1_address,
	buyer2,
	buyer2_id,
	buyer2_address,
	buyer3,
	buyer3_id,
	buyer3_address,
	buyer4,
	buyer4_id,
	buyer4_address,
	landlord1,
	landlord1_id,
	landlord1_address,
	landlord2,
	landlord2_id,
	landlord2_address,
	landlord3,
	landlord3_id,
	landlord3_address,
	landlord4,
	landlord4_id,
	landlord4_address,
	tenant1,
	tenant1_id,
	tenant1_address,
	tenant2,
	tenant2_id,
	tenant2_address,
	tenant3,
	tenant3_id,
	tenant3_address,
	tenant4,
	tenant4_id,
	tenant4_address,
	estateagent_address,
	gst_include,
	salesperson_ic,
	salesperson_address,
	estateagent_tel,
	estateagent2,
	estateagent_cea2,
	date_sign,
	date_sp,
	docuserid,
	status,
	date_ta,
	lease_tenure,
	renewal_term,
	renewal_agree,
	renewal_comm,
	renewal_percent,
	lease_tenure2,
	expiry_date,
	expected_sale_price,
	expected_sale_price_text,
	effect_date,
	expected_rental_price,
	expected_rental_price_text,
	period_per_rent,
	lease_tenure3,
	renewal_term2,
	agency_or_salesperson,
	sign_seller1,
	sign_seller2,
	sign_seller3,
	sign_seller4,
	sign_interpreter1,
	sign_interpreter2,
	sign_interpreter3,
	sign_interpreter4,
	sign_agent,
	interpret1,
	interpret2,
	interpret3,
	interpret4,
	interpretdate1,
	interpretdate2,
	interpretdate3,
	interpretdate4,
	sign_date1,
	sign_date2,
	sign_date3,
	sign_date4,
	interpreterID1,
	interpreterID2,
	interpreterID3,
	interpreterID4,
	sign_buyer1,
	interpretation1,
	interpretation2,
	interpretation3,
	interpretation4,
	representing,
	category,
	sign1,
	sign2,
	sign3,
	sign4,
	sign5,
	sign6,
	sign7,
	sign8,
	sign9,
	sign_landlord1,
	sign_landlord2,
	sign_landlord3,
	sign_landlord4,
	sign_tenant1,
	sign_tenant2,
	sign_tenant3,
	sign_tenant4,
	sign_buyer2,
	sign_buyer3,
	sign_buyer4,
	estateagent_address2
FROM
	forms
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
					'table' => 'forms',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'id_form',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'id_form' 
				),
				'encrypted' => false,
				'columnName' => 'id_form' 
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
					'table' => 'forms',
					'name' => 'id_tx' 
				),
				'encrypted' => false,
				'columnName' => 'id_tx' 
			),
			array(
				'sql' => 'salesperson',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'salesperson' 
				),
				'encrypted' => false,
				'columnName' => 'salesperson' 
			),
			array(
				'sql' => 'salesperson_cea',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'salesperson_cea' 
				),
				'encrypted' => true,
				'columnName' => 'salesperson_cea' 
			),
			array(
				'sql' => 'salesperson_contact',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'salesperson_contact' 
				),
				'encrypted' => true,
				'columnName' => 'salesperson_contact' 
			),
			array(
				'sql' => 'estateagent',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'estateagent' 
				),
				'encrypted' => false,
				'columnName' => 'estateagent' 
			),
			array(
				'sql' => 'estateagent_cea',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'estateagent_cea' 
				),
				'encrypted' => true,
				'columnName' => 'estateagent_cea' 
			),
			array(
				'sql' => 'property_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'property_address' 
				),
				'encrypted' => false,
				'columnName' => 'property_address' 
			),
			array(
				'sql' => 'comm',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'comm' 
				),
				'encrypted' => false,
				'columnName' => 'comm' 
			),
			array(
				'sql' => 'percentage',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'percentage' 
				),
				'encrypted' => false,
				'columnName' => 'percentage' 
			),
			array(
				'sql' => 'GST',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'GST' 
				),
				'encrypted' => false,
				'columnName' => 'GST' 
			),
			array(
				'sql' => 'conflict',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'conflict' 
				),
				'encrypted' => false,
				'columnName' => 'conflict' 
			),
			array(
				'sql' => 'conflict_description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'conflict_description' 
				),
				'encrypted' => false,
				'columnName' => 'conflict_description' 
			),
			array(
				'sql' => '`co-broke`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'co-broke' 
				),
				'encrypted' => false,
				'columnName' => 'co-broke' 
			),
			array(
				'sql' => 'ownership',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'ownership' 
				),
				'encrypted' => false,
				'columnName' => 'ownership' 
			),
			array(
				'sql' => 'additional_term',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'additional_term' 
				),
				'encrypted' => false,
				'columnName' => 'additional_term' 
			),
			array(
				'sql' => 'date_agreement',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'date_agreement' 
				),
				'encrypted' => false,
				'columnName' => 'date_agreement' 
			),
			array(
				'sql' => 'title',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'title' 
				),
				'encrypted' => false,
				'columnName' => 'title' 
			),
			array(
				'sql' => 'form_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'form_name' 
				),
				'encrypted' => false,
				'columnName' => 'form_name' 
			),
			array(
				'sql' => 'seller1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller1' 
				),
				'encrypted' => false,
				'columnName' => 'seller1' 
			),
			array(
				'sql' => 'seller1_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller1_id' 
				),
				'encrypted' => true,
				'columnName' => 'seller1_id' 
			),
			array(
				'sql' => 'seller1_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller1_address' 
				),
				'encrypted' => false,
				'columnName' => 'seller1_address' 
			),
			array(
				'sql' => 'seller2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller2' 
				),
				'encrypted' => false,
				'columnName' => 'seller2' 
			),
			array(
				'sql' => 'seller2_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller2_id' 
				),
				'encrypted' => true,
				'columnName' => 'seller2_id' 
			),
			array(
				'sql' => 'seller2_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller2_address' 
				),
				'encrypted' => false,
				'columnName' => 'seller2_address' 
			),
			array(
				'sql' => 'seller3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller3' 
				),
				'encrypted' => false,
				'columnName' => 'seller3' 
			),
			array(
				'sql' => 'seller3_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller3_id' 
				),
				'encrypted' => true,
				'columnName' => 'seller3_id' 
			),
			array(
				'sql' => 'seller3_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller3_address' 
				),
				'encrypted' => false,
				'columnName' => 'seller3_address' 
			),
			array(
				'sql' => 'seller4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller4' 
				),
				'encrypted' => false,
				'columnName' => 'seller4' 
			),
			array(
				'sql' => 'seller4_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller4_id' 
				),
				'encrypted' => true,
				'columnName' => 'seller4_id' 
			),
			array(
				'sql' => 'seller4_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'seller4_address' 
				),
				'encrypted' => false,
				'columnName' => 'seller4_address' 
			),
			array(
				'sql' => 'buyer1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer1' 
				),
				'encrypted' => false,
				'columnName' => 'buyer1' 
			),
			array(
				'sql' => 'buyer1_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer1_id' 
				),
				'encrypted' => true,
				'columnName' => 'buyer1_id' 
			),
			array(
				'sql' => 'buyer1_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer1_address' 
				),
				'encrypted' => false,
				'columnName' => 'buyer1_address' 
			),
			array(
				'sql' => 'buyer2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer2' 
				),
				'encrypted' => false,
				'columnName' => 'buyer2' 
			),
			array(
				'sql' => 'buyer2_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer2_id' 
				),
				'encrypted' => true,
				'columnName' => 'buyer2_id' 
			),
			array(
				'sql' => 'buyer2_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer2_address' 
				),
				'encrypted' => false,
				'columnName' => 'buyer2_address' 
			),
			array(
				'sql' => 'buyer3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer3' 
				),
				'encrypted' => false,
				'columnName' => 'buyer3' 
			),
			array(
				'sql' => 'buyer3_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer3_id' 
				),
				'encrypted' => true,
				'columnName' => 'buyer3_id' 
			),
			array(
				'sql' => 'buyer3_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer3_address' 
				),
				'encrypted' => false,
				'columnName' => 'buyer3_address' 
			),
			array(
				'sql' => 'buyer4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer4' 
				),
				'encrypted' => false,
				'columnName' => 'buyer4' 
			),
			array(
				'sql' => 'buyer4_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer4_id' 
				),
				'encrypted' => true,
				'columnName' => 'buyer4_id' 
			),
			array(
				'sql' => 'buyer4_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'buyer4_address' 
				),
				'encrypted' => false,
				'columnName' => 'buyer4_address' 
			),
			array(
				'sql' => 'landlord1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord1' 
				),
				'encrypted' => false,
				'columnName' => 'landlord1' 
			),
			array(
				'sql' => 'landlord1_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord1_id' 
				),
				'encrypted' => true,
				'columnName' => 'landlord1_id' 
			),
			array(
				'sql' => 'landlord1_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord1_address' 
				),
				'encrypted' => false,
				'columnName' => 'landlord1_address' 
			),
			array(
				'sql' => 'landlord2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord2' 
				),
				'encrypted' => false,
				'columnName' => 'landlord2' 
			),
			array(
				'sql' => 'landlord2_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord2_id' 
				),
				'encrypted' => true,
				'columnName' => 'landlord2_id' 
			),
			array(
				'sql' => 'landlord2_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord2_address' 
				),
				'encrypted' => false,
				'columnName' => 'landlord2_address' 
			),
			array(
				'sql' => 'landlord3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord3' 
				),
				'encrypted' => false,
				'columnName' => 'landlord3' 
			),
			array(
				'sql' => 'landlord3_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord3_id' 
				),
				'encrypted' => true,
				'columnName' => 'landlord3_id' 
			),
			array(
				'sql' => 'landlord3_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord3_address' 
				),
				'encrypted' => false,
				'columnName' => 'landlord3_address' 
			),
			array(
				'sql' => 'landlord4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord4' 
				),
				'encrypted' => false,
				'columnName' => 'landlord4' 
			),
			array(
				'sql' => 'landlord4_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord4_id' 
				),
				'encrypted' => true,
				'columnName' => 'landlord4_id' 
			),
			array(
				'sql' => 'landlord4_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'landlord4_address' 
				),
				'encrypted' => false,
				'columnName' => 'landlord4_address' 
			),
			array(
				'sql' => 'tenant1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant1' 
				),
				'encrypted' => false,
				'columnName' => 'tenant1' 
			),
			array(
				'sql' => 'tenant1_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant1_id' 
				),
				'encrypted' => true,
				'columnName' => 'tenant1_id' 
			),
			array(
				'sql' => 'tenant1_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant1_address' 
				),
				'encrypted' => false,
				'columnName' => 'tenant1_address' 
			),
			array(
				'sql' => 'tenant2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant2' 
				),
				'encrypted' => false,
				'columnName' => 'tenant2' 
			),
			array(
				'sql' => 'tenant2_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant2_id' 
				),
				'encrypted' => true,
				'columnName' => 'tenant2_id' 
			),
			array(
				'sql' => 'tenant2_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant2_address' 
				),
				'encrypted' => false,
				'columnName' => 'tenant2_address' 
			),
			array(
				'sql' => 'tenant3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant3' 
				),
				'encrypted' => false,
				'columnName' => 'tenant3' 
			),
			array(
				'sql' => 'tenant3_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant3_id' 
				),
				'encrypted' => true,
				'columnName' => 'tenant3_id' 
			),
			array(
				'sql' => 'tenant3_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant3_address' 
				),
				'encrypted' => false,
				'columnName' => 'tenant3_address' 
			),
			array(
				'sql' => 'tenant4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant4' 
				),
				'encrypted' => false,
				'columnName' => 'tenant4' 
			),
			array(
				'sql' => 'tenant4_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant4_id' 
				),
				'encrypted' => true,
				'columnName' => 'tenant4_id' 
			),
			array(
				'sql' => 'tenant4_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'tenant4_address' 
				),
				'encrypted' => false,
				'columnName' => 'tenant4_address' 
			),
			array(
				'sql' => 'estateagent_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'estateagent_address' 
				),
				'encrypted' => false,
				'columnName' => 'estateagent_address' 
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
					'table' => 'forms',
					'name' => 'gst_include' 
				),
				'encrypted' => false,
				'columnName' => 'gst_include' 
			),
			array(
				'sql' => 'salesperson_ic',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'salesperson_ic' 
				),
				'encrypted' => true,
				'columnName' => 'salesperson_ic' 
			),
			array(
				'sql' => 'salesperson_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'salesperson_address' 
				),
				'encrypted' => false,
				'columnName' => 'salesperson_address' 
			),
			array(
				'sql' => 'estateagent_tel',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'estateagent_tel' 
				),
				'encrypted' => false,
				'columnName' => 'estateagent_tel' 
			),
			array(
				'sql' => 'estateagent2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'estateagent2' 
				),
				'encrypted' => false,
				'columnName' => 'estateagent2' 
			),
			array(
				'sql' => 'estateagent_cea2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'estateagent_cea2' 
				),
				'encrypted' => true,
				'columnName' => 'estateagent_cea2' 
			),
			array(
				'sql' => 'date_sign',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'date_sign' 
				),
				'encrypted' => false,
				'columnName' => 'date_sign' 
			),
			array(
				'sql' => 'date_sp',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'date_sp' 
				),
				'encrypted' => false,
				'columnName' => 'date_sp' 
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
					'table' => 'forms',
					'name' => 'docuserid' 
				),
				'encrypted' => false,
				'columnName' => 'docuserid' 
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
					'table' => 'forms',
					'name' => 'status' 
				),
				'encrypted' => false,
				'columnName' => 'status' 
			),
			array(
				'sql' => 'date_ta',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'date_ta' 
				),
				'encrypted' => false,
				'columnName' => 'date_ta' 
			),
			array(
				'sql' => 'lease_tenure',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'lease_tenure' 
				),
				'encrypted' => false,
				'columnName' => 'lease_tenure' 
			),
			array(
				'sql' => 'renewal_term',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'renewal_term' 
				),
				'encrypted' => false,
				'columnName' => 'renewal_term' 
			),
			array(
				'sql' => 'renewal_agree',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'renewal_agree' 
				),
				'encrypted' => false,
				'columnName' => 'renewal_agree' 
			),
			array(
				'sql' => 'renewal_comm',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'renewal_comm' 
				),
				'encrypted' => false,
				'columnName' => 'renewal_comm' 
			),
			array(
				'sql' => 'renewal_percent',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'renewal_percent' 
				),
				'encrypted' => false,
				'columnName' => 'renewal_percent' 
			),
			array(
				'sql' => 'lease_tenure2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'lease_tenure2' 
				),
				'encrypted' => false,
				'columnName' => 'lease_tenure2' 
			),
			array(
				'sql' => 'expiry_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'expiry_date' 
				),
				'encrypted' => false,
				'columnName' => 'expiry_date' 
			),
			array(
				'sql' => 'expected_sale_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'expected_sale_price' 
				),
				'encrypted' => false,
				'columnName' => 'expected_sale_price' 
			),
			array(
				'sql' => 'expected_sale_price_text',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'expected_sale_price_text' 
				),
				'encrypted' => false,
				'columnName' => 'expected_sale_price_text' 
			),
			array(
				'sql' => 'effect_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'effect_date' 
				),
				'encrypted' => false,
				'columnName' => 'effect_date' 
			),
			array(
				'sql' => 'expected_rental_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'expected_rental_price' 
				),
				'encrypted' => false,
				'columnName' => 'expected_rental_price' 
			),
			array(
				'sql' => 'expected_rental_price_text',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'expected_rental_price_text' 
				),
				'encrypted' => false,
				'columnName' => 'expected_rental_price_text' 
			),
			array(
				'sql' => 'period_per_rent',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'period_per_rent' 
				),
				'encrypted' => false,
				'columnName' => 'period_per_rent' 
			),
			array(
				'sql' => 'lease_tenure3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'lease_tenure3' 
				),
				'encrypted' => false,
				'columnName' => 'lease_tenure3' 
			),
			array(
				'sql' => 'renewal_term2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'renewal_term2' 
				),
				'encrypted' => false,
				'columnName' => 'renewal_term2' 
			),
			array(
				'sql' => 'agency_or_salesperson',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'agency_or_salesperson' 
				),
				'encrypted' => false,
				'columnName' => 'agency_or_salesperson' 
			),
			array(
				'sql' => 'sign_seller1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_seller1' 
				),
				'encrypted' => false,
				'columnName' => 'sign_seller1' 
			),
			array(
				'sql' => 'sign_seller2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_seller2' 
				),
				'encrypted' => false,
				'columnName' => 'sign_seller2' 
			),
			array(
				'sql' => 'sign_seller3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_seller3' 
				),
				'encrypted' => false,
				'columnName' => 'sign_seller3' 
			),
			array(
				'sql' => 'sign_seller4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_seller4' 
				),
				'encrypted' => false,
				'columnName' => 'sign_seller4' 
			),
			array(
				'sql' => 'sign_interpreter1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_interpreter1' 
				),
				'encrypted' => false,
				'columnName' => 'sign_interpreter1' 
			),
			array(
				'sql' => 'sign_interpreter2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_interpreter2' 
				),
				'encrypted' => false,
				'columnName' => 'sign_interpreter2' 
			),
			array(
				'sql' => 'sign_interpreter3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_interpreter3' 
				),
				'encrypted' => false,
				'columnName' => 'sign_interpreter3' 
			),
			array(
				'sql' => 'sign_interpreter4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_interpreter4' 
				),
				'encrypted' => false,
				'columnName' => 'sign_interpreter4' 
			),
			array(
				'sql' => 'sign_agent',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_agent' 
				),
				'encrypted' => false,
				'columnName' => 'sign_agent' 
			),
			array(
				'sql' => 'interpret1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpret1' 
				),
				'encrypted' => false,
				'columnName' => 'interpret1' 
			),
			array(
				'sql' => 'interpret2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpret2' 
				),
				'encrypted' => false,
				'columnName' => 'interpret2' 
			),
			array(
				'sql' => 'interpret3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpret3' 
				),
				'encrypted' => false,
				'columnName' => 'interpret3' 
			),
			array(
				'sql' => 'interpret4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpret4' 
				),
				'encrypted' => false,
				'columnName' => 'interpret4' 
			),
			array(
				'sql' => 'interpretdate1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpretdate1' 
				),
				'encrypted' => false,
				'columnName' => 'interpretdate1' 
			),
			array(
				'sql' => 'interpretdate2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpretdate2' 
				),
				'encrypted' => false,
				'columnName' => 'interpretdate2' 
			),
			array(
				'sql' => 'interpretdate3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpretdate3' 
				),
				'encrypted' => false,
				'columnName' => 'interpretdate3' 
			),
			array(
				'sql' => 'interpretdate4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpretdate4' 
				),
				'encrypted' => false,
				'columnName' => 'interpretdate4' 
			),
			array(
				'sql' => 'sign_date1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_date1' 
				),
				'encrypted' => false,
				'columnName' => 'sign_date1' 
			),
			array(
				'sql' => 'sign_date2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_date2' 
				),
				'encrypted' => false,
				'columnName' => 'sign_date2' 
			),
			array(
				'sql' => 'sign_date3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_date3' 
				),
				'encrypted' => false,
				'columnName' => 'sign_date3' 
			),
			array(
				'sql' => 'sign_date4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_date4' 
				),
				'encrypted' => false,
				'columnName' => 'sign_date4' 
			),
			array(
				'sql' => 'interpreterID1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpreterID1' 
				),
				'encrypted' => true,
				'columnName' => 'interpreterID1' 
			),
			array(
				'sql' => 'interpreterID2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpreterID2' 
				),
				'encrypted' => true,
				'columnName' => 'interpreterID2' 
			),
			array(
				'sql' => 'interpreterID3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpreterID3' 
				),
				'encrypted' => true,
				'columnName' => 'interpreterID3' 
			),
			array(
				'sql' => 'interpreterID4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpreterID4' 
				),
				'encrypted' => true,
				'columnName' => 'interpreterID4' 
			),
			array(
				'sql' => 'sign_buyer1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_buyer1' 
				),
				'encrypted' => false,
				'columnName' => 'sign_buyer1' 
			),
			array(
				'sql' => 'interpretation1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpretation1' 
				),
				'encrypted' => false,
				'columnName' => 'interpretation1' 
			),
			array(
				'sql' => 'interpretation2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpretation2' 
				),
				'encrypted' => false,
				'columnName' => 'interpretation2' 
			),
			array(
				'sql' => 'interpretation3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpretation3' 
				),
				'encrypted' => false,
				'columnName' => 'interpretation3' 
			),
			array(
				'sql' => 'interpretation4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'interpretation4' 
				),
				'encrypted' => false,
				'columnName' => 'interpretation4' 
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
					'table' => 'forms',
					'name' => 'representing' 
				),
				'encrypted' => false,
				'columnName' => 'representing' 
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
					'table' => 'forms',
					'name' => 'category' 
				),
				'encrypted' => false,
				'columnName' => 'category' 
			),
			array(
				'sql' => 'sign1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign1' 
				),
				'encrypted' => false,
				'columnName' => 'sign1' 
			),
			array(
				'sql' => 'sign2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign2' 
				),
				'encrypted' => false,
				'columnName' => 'sign2' 
			),
			array(
				'sql' => 'sign3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign3' 
				),
				'encrypted' => false,
				'columnName' => 'sign3' 
			),
			array(
				'sql' => 'sign4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign4' 
				),
				'encrypted' => false,
				'columnName' => 'sign4' 
			),
			array(
				'sql' => 'sign5',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign5' 
				),
				'encrypted' => false,
				'columnName' => 'sign5' 
			),
			array(
				'sql' => 'sign6',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign6' 
				),
				'encrypted' => false,
				'columnName' => 'sign6' 
			),
			array(
				'sql' => 'sign7',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign7' 
				),
				'encrypted' => false,
				'columnName' => 'sign7' 
			),
			array(
				'sql' => 'sign8',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign8' 
				),
				'encrypted' => false,
				'columnName' => 'sign8' 
			),
			array(
				'sql' => 'sign9',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign9' 
				),
				'encrypted' => false,
				'columnName' => 'sign9' 
			),
			array(
				'sql' => 'sign_landlord1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_landlord1' 
				),
				'encrypted' => false,
				'columnName' => 'sign_landlord1' 
			),
			array(
				'sql' => 'sign_landlord2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_landlord2' 
				),
				'encrypted' => false,
				'columnName' => 'sign_landlord2' 
			),
			array(
				'sql' => 'sign_landlord3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_landlord3' 
				),
				'encrypted' => false,
				'columnName' => 'sign_landlord3' 
			),
			array(
				'sql' => 'sign_landlord4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_landlord4' 
				),
				'encrypted' => false,
				'columnName' => 'sign_landlord4' 
			),
			array(
				'sql' => 'sign_tenant1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_tenant1' 
				),
				'encrypted' => false,
				'columnName' => 'sign_tenant1' 
			),
			array(
				'sql' => 'sign_tenant2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_tenant2' 
				),
				'encrypted' => false,
				'columnName' => 'sign_tenant2' 
			),
			array(
				'sql' => 'sign_tenant3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_tenant3' 
				),
				'encrypted' => false,
				'columnName' => 'sign_tenant3' 
			),
			array(
				'sql' => 'sign_tenant4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_tenant4' 
				),
				'encrypted' => false,
				'columnName' => 'sign_tenant4' 
			),
			array(
				'sql' => 'sign_buyer2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_buyer2' 
				),
				'encrypted' => false,
				'columnName' => 'sign_buyer2' 
			),
			array(
				'sql' => 'sign_buyer3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_buyer3' 
				),
				'encrypted' => false,
				'columnName' => 'sign_buyer3' 
			),
			array(
				'sql' => 'sign_buyer4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'sign_buyer4' 
				),
				'encrypted' => false,
				'columnName' => 'sign_buyer4' 
			),
			array(
				'sql' => 'estateagent_address2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'estateagent_address2' 
				),
				'encrypted' => false,
				'columnName' => 'estateagent_address2' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'forms',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'forms',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'salesperson',
						'salesperson_cea',
						'salesperson_contact',
						'estateagent',
						'estateagent_cea',
						'property_address',
						'comm',
						'percentage',
						'GST',
						'conflict',
						'conflict_description',
						'co-broke',
						'ownership',
						'additional_term',
						'date_agreement',
						'title',
						'form_name',
						'seller1',
						'seller1_id',
						'seller1_address',
						'seller2',
						'seller2_id',
						'seller2_address',
						'seller3',
						'seller3_id',
						'seller3_address',
						'seller4',
						'seller4_id',
						'seller4_address',
						'buyer1',
						'buyer1_id',
						'buyer1_address',
						'buyer2',
						'buyer2_id',
						'buyer2_address',
						'buyer3',
						'buyer3_id',
						'buyer3_address',
						'buyer4',
						'buyer4_id',
						'buyer4_address',
						'landlord1',
						'landlord1_id',
						'landlord1_address',
						'landlord2',
						'landlord2_id',
						'landlord2_address',
						'landlord3',
						'landlord3_id',
						'landlord3_address',
						'landlord4',
						'landlord4_id',
						'landlord4_address',
						'tenant1',
						'tenant1_id',
						'tenant1_address',
						'tenant2',
						'tenant2_id',
						'tenant2_address',
						'tenant3',
						'tenant3_id',
						'tenant3_address',
						'tenant4',
						'tenant4_id',
						'tenant4_address',
						'estateagent_address',
						'gst_include',
						'salesperson_ic',
						'salesperson_address',
						'estateagent_tel',
						'estateagent2',
						'estateagent_cea2',
						'date_sign',
						'date_sp',
						'docuserid',
						'status',
						'date_ta',
						'lease_tenure',
						'renewal_term',
						'renewal_agree',
						'renewal_comm',
						'renewal_percent',
						'lease_tenure2',
						'expiry_date',
						'expected_sale_price',
						'expected_sale_price_text',
						'effect_date',
						'expected_rental_price',
						'expected_rental_price_text',
						'period_per_rent',
						'lease_tenure3',
						'renewal_term2',
						'agency_or_salesperson',
						'sign_seller1',
						'sign_seller2',
						'sign_seller3',
						'sign_seller4',
						'sign_interpreter1',
						'sign_interpreter2',
						'sign_interpreter3',
						'sign_interpreter4',
						'sign_agent',
						'interpret1',
						'interpret2',
						'interpret3',
						'interpret4',
						'interpretdate1',
						'interpretdate2',
						'interpretdate3',
						'interpretdate4',
						'sign_date1',
						'sign_date2',
						'sign_date3',
						'sign_date4',
						'interpreterID1',
						'interpreterID2',
						'interpreterID3',
						'interpreterID4',
						'sign_buyer1',
						'interpretation1',
						'interpretation2',
						'interpretation3',
						'interpretation4',
						'id_tx',
						'representing',
						'id_form',
						'category',
						'sign1',
						'sign2',
						'sign3',
						'sign4',
						'sign5',
						'sign6',
						'sign7',
						'sign8',
						'sign_landlord1',
						'sign_landlord2',
						'sign_landlord3',
						'sign_landlord4',
						'sign_tenant1',
						'sign_tenant2',
						'sign_tenant3',
						'sign_tenant4',
						'sign_buyer2',
						'sign_buyer3',
						'sign_buyer4',
						'estateagent_address2',
						'sign9' 
					),
					'name' => 'forms' 
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
					'table' => 'forms',
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
			),
			array(
				'fieldIndex' => 70,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 71,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 72,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 73,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 74,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 75,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 76,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 77,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 78,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 79,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 80,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 81,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 82,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 83,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 84,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 85,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 86,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 87,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 88,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 89,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 90,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 91,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 92,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 93,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 94,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 95,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 96,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 97,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 98,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 99,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 100,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 101,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 102,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 103,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 104,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 105,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 106,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 107,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 108,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 109,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 110,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 111,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 112,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 113,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 114,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 115,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 116,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 117,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 118,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 119,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 120,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 121,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 122,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 123,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 124,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 125,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 126,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 127,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 128,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 129,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 130,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 131,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 132,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 133,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 134,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 135,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 136,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 137,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 138,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 139,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 140,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 141,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 142,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 143,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 144,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 145,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 146,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 147,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 148,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	id_form,
	id_tx,
	salesperson,
	salesperson_cea,
	salesperson_contact,
	estateagent,
	estateagent_cea,
	property_address,
	comm,
	percentage,
	GST,
	conflict,
	conflict_description,
	`co-broke`,
	ownership,
	additional_term,
	date_agreement,
	title,
	form_name,
	seller1,
	seller1_id,
	seller1_address,
	seller2,
	seller2_id,
	seller2_address,
	seller3,
	seller3_id,
	seller3_address,
	seller4,
	seller4_id,
	seller4_address,
	buyer1,
	buyer1_id,
	buyer1_address,
	buyer2,
	buyer2_id,
	buyer2_address,
	buyer3,
	buyer3_id,
	buyer3_address,
	buyer4,
	buyer4_id,
	buyer4_address,
	landlord1,
	landlord1_id,
	landlord1_address,
	landlord2,
	landlord2_id,
	landlord2_address,
	landlord3,
	landlord3_id,
	landlord3_address,
	landlord4,
	landlord4_id,
	landlord4_address,
	tenant1,
	tenant1_id,
	tenant1_address,
	tenant2,
	tenant2_id,
	tenant2_address,
	tenant3,
	tenant3_id,
	tenant3_address,
	tenant4,
	tenant4_id,
	tenant4_address,
	estateagent_address,
	gst_include,
	salesperson_ic,
	salesperson_address,
	estateagent_tel,
	estateagent2,
	estateagent_cea2,
	date_sign,
	date_sp,
	docuserid,
	status,
	date_ta,
	lease_tenure,
	renewal_term,
	renewal_agree,
	renewal_comm,
	renewal_percent,
	lease_tenure2,
	expiry_date,
	expected_sale_price,
	expected_sale_price_text,
	effect_date,
	expected_rental_price,
	expected_rental_price_text,
	period_per_rent,
	lease_tenure3,
	renewal_term2,
	agency_or_salesperson,
	sign_seller1,
	sign_seller2,
	sign_seller3,
	sign_seller4,
	sign_interpreter1,
	sign_interpreter2,
	sign_interpreter3,
	sign_interpreter4,
	sign_agent,
	interpret1,
	interpret2,
	interpret3,
	interpret4,
	interpretdate1,
	interpretdate2,
	interpretdate3,
	interpretdate4,
	sign_date1,
	sign_date2,
	sign_date3,
	sign_date4,
	interpreterID1,
	interpreterID2,
	interpreterID3,
	interpreterID4,
	sign_buyer1,
	interpretation1,
	interpretation2,
	interpretation3,
	interpretation4,
	representing,
	category,
	sign1,
	sign2,
	sign3,
	sign4,
	sign5,
	sign6,
	sign7,
	sign8,
	sign9,
	sign_landlord1,
	sign_landlord2,
	sign_landlord3,
	sign_landlord4,
	sign_tenant1,
	sign_tenant2,
	sign_tenant3,
	sign_tenant4,
	sign_buyer2,
	sign_buyer3,
	sign_buyer4,
	estateagent_address2',
		'fromListSql' => 'FROM
	forms',
		'orderBySql' => 'ORDER BY
	id DESC',
		'tailSql' => '' 
	),
	'originalTable' => 'forms',
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
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'id_form',
			'id_tx',
			'salesperson',
			'salesperson_cea',
			'salesperson_contact',
			'estateagent',
			'estateagent_cea',
			'property_address',
			'comm',
			'percentage',
			'GST',
			'conflict',
			'conflict_description',
			'co-broke',
			'ownership',
			'additional_term',
			'date_agreement',
			'title',
			'form_name',
			'seller1',
			'seller1_id',
			'seller1_address',
			'seller2',
			'seller2_id',
			'seller2_address',
			'seller3',
			'seller3_id',
			'seller3_address',
			'seller4',
			'seller4_id',
			'seller4_address',
			'buyer1',
			'buyer1_id',
			'buyer1_address',
			'buyer2',
			'buyer2_id',
			'buyer2_address',
			'buyer3',
			'buyer3_id',
			'buyer3_address',
			'buyer4',
			'buyer4_id',
			'buyer4_address',
			'landlord1',
			'landlord1_id',
			'landlord1_address',
			'landlord2',
			'landlord2_id',
			'landlord2_address',
			'landlord3',
			'landlord3_id',
			'landlord3_address',
			'landlord4',
			'landlord4_id',
			'landlord4_address',
			'tenant1',
			'tenant1_id',
			'tenant1_address',
			'tenant2',
			'tenant2_id',
			'tenant2_address',
			'tenant3',
			'tenant3_id',
			'tenant3_address',
			'tenant4',
			'tenant4_id',
			'tenant4_address',
			'estateagent_address',
			'gst_include',
			'salesperson_ic',
			'salesperson_address',
			'estateagent_tel',
			'estateagent2',
			'estateagent_cea2',
			'date_sign',
			'date_sp',
			'docuserid',
			'status',
			'date_ta',
			'lease_tenure',
			'renewal_term',
			'renewal_agree',
			'renewal_comm',
			'renewal_percent',
			'lease_tenure2',
			'expiry_date',
			'expected_sale_price',
			'expected_sale_price_text',
			'effect_date',
			'expected_rental_price',
			'expected_rental_price_text',
			'period_per_rent',
			'lease_tenure3',
			'renewal_term2',
			'agency_or_salesperson',
			'sign_seller1',
			'sign_seller2',
			'sign_seller3',
			'sign_seller4',
			'sign_interpreter1',
			'sign_interpreter2',
			'sign_interpreter3',
			'sign_interpreter4',
			'sign_agent',
			'interpret1',
			'interpret2',
			'interpret3',
			'interpret4',
			'interpretdate1',
			'interpretdate2',
			'interpretdate3',
			'interpretdate4',
			'sign_date1',
			'sign_date2',
			'sign_date3',
			'sign_date4',
			'interpreterID1',
			'interpreterID2',
			'interpreterID3',
			'interpreterID4',
			'sign_buyer1',
			'interpretation1',
			'interpretation2',
			'interpretation3',
			'interpretation4',
			'representing',
			'category',
			'sign1',
			'sign2',
			'sign3',
			'sign4',
			'sign5',
			'sign6',
			'sign7',
			'sign8',
			'sign9',
			'sign_landlord1',
			'sign_landlord2',
			'sign_landlord3',
			'sign_landlord4',
			'sign_tenant1',
			'sign_tenant2',
			'sign_tenant3',
			'sign_tenant4',
			'sign_buyer2',
			'sign_buyer3',
			'sign_buyer4',
			'estateagent_address2' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id_form',
			'id_tx',
			'docuserid',
			'expected_sale_price_text',
			'agency_or_salesperson',
			'sign_seller1',
			'sign_seller2',
			'sign_seller3',
			'sign_seller4',
			'sign_interpreter1',
			'sign_interpreter2',
			'sign_interpreter3',
			'sign_interpreter4',
			'sign_agent',
			'interpret1',
			'interpret2',
			'interpret3',
			'interpret4',
			'interpretdate1',
			'interpretdate2',
			'interpretdate3',
			'interpretdate4',
			'sign_date1',
			'sign_date2',
			'sign_date3',
			'sign_date4',
			'interpreterID1',
			'interpreterID2',
			'interpreterID3',
			'interpreterID4',
			'sign_buyer1',
			'interpretation1',
			'interpretation2',
			'interpretation3',
			'interpretation4',
			'representing',
			'category',
			'sign1',
			'sign2',
			'sign3',
			'sign4',
			'sign5',
			'sign6',
			'sign7',
			'sign8',
			'sign9',
			'sign_landlord1',
			'sign_landlord2',
			'sign_landlord3',
			'sign_landlord4',
			'sign_tenant1',
			'sign_tenant2',
			'sign_tenant3',
			'sign_tenant4',
			'sign_buyer2',
			'sign_buyer3',
			'sign_buyer4',
			'estateagent_address2' 
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
	$runnerTableLabels['forms'] = array(
	'tableCaption' => 'Forms',
	'fieldLabels' => array(
		'id' => 'ID',
		'id_form' => 'Id Form',
		'id_tx' => 'Id Txn',
		'salesperson' => 'Salesperson',
		'salesperson_cea' => 'Salesperson Cea',
		'salesperson_contact' => 'Salesperson Contact',
		'estateagent' => 'Estateagent',
		'estateagent_cea' => 'Estateagent Cea',
		'property_address' => 'Property Address',
		'comm' => 'Comm',
		'percentage' => 'Percentage',
		'GST' => 'GST',
		'conflict' => 'Conflict',
		'conflict_description' => 'Conflict Description',
		'co_broke' => 'Co-broke',
		'ownership' => 'Ownership',
		'additional_term' => 'Additional Term',
		'date_agreement' => 'Dated',
		'title' => 'Title',
		'form_name' => 'Form #',
		'seller1' => 'Seller1',
		'seller1_id' => 'Seller1 Id',
		'seller1_address' => 'Seller1 Address',
		'seller2' => 'Seller2',
		'seller2_id' => 'Seller2 Id',
		'seller2_address' => 'Seller2 Address',
		'seller3' => 'Seller3',
		'seller3_id' => 'Seller3 Id',
		'seller3_address' => 'Seller3 Address',
		'seller4' => 'Seller4',
		'seller4_id' => 'Seller4 Id',
		'seller4_address' => 'Seller4 Address',
		'buyer1' => 'Buyer1',
		'buyer1_id' => 'Buyer1 Id',
		'buyer1_address' => 'Buyer1 Address',
		'buyer2' => 'Buyer2',
		'buyer2_id' => 'Buyer2 Id',
		'buyer2_address' => 'Buyer2 Address',
		'buyer3' => 'Buyer3',
		'buyer3_id' => 'Buyer3 Id',
		'buyer3_address' => 'Buyer3 Address',
		'buyer4' => 'Buyer4',
		'buyer4_id' => 'Buyer4 Id',
		'buyer4_address' => 'Buyer4 Address',
		'landlord1' => 'Landlord1',
		'landlord1_id' => 'Landlord1 Id',
		'landlord1_address' => 'Landlord1 Address',
		'landlord2' => 'Landlord2',
		'landlord2_id' => 'Landlord2 Id',
		'landlord2_address' => 'Landlord2 Address',
		'landlord3' => 'Landlord3',
		'landlord3_id' => 'Landlord3 Id',
		'landlord3_address' => 'Landlord3 Address',
		'landlord4' => 'Landlord4',
		'landlord4_id' => 'Landlord4 Id',
		'landlord4_address' => 'Landlord4 Address',
		'tenant1' => 'Tenant1',
		'tenant1_id' => 'Tenant1 Id',
		'tenant1_address' => 'Tenant1 Address',
		'tenant2' => 'Tenant2',
		'tenant2_id' => 'Tenant2 Id',
		'tenant2_address' => 'Tenant2 Address',
		'tenant3' => 'Tenant3',
		'tenant3_id' => 'Tenant3 Id',
		'tenant3_address' => 'Tenant3 Address',
		'tenant4' => 'Tenant4',
		'tenant4_id' => 'Tenant4 Id',
		'tenant4_address' => 'Tenant4 Address',
		'estateagent_address' => 'Estateagent Address',
		'gst_include' => 'Gst Include',
		'salesperson_ic' => 'Salesperson Ic',
		'salesperson_address' => 'Salesperson Address',
		'estateagent_tel' => 'Estateagent Tel',
		'estateagent2' => 'Estateagent2',
		'estateagent_cea2' => 'Estateagent Cea2',
		'date_sign' => 'Date Sign',
		'date_sp' => 'Date Sp',
		'docuserid' => 'Docuserid',
		'status' => 'Forms',
		'date_ta' => 'Date Ta',
		'lease_tenure' => 'Lease Tenure',
		'renewal_term' => 'Renewal Term',
		'renewal_agree' => 'Renewal Agree',
		'renewal_comm' => 'Renewal Comm',
		'renewal_percent' => 'Renewal Percent',
		'lease_tenure2' => 'Lease Tenure2',
		'expiry_date' => 'Expiry Date',
		'expected_sale_price' => 'Expected Sale Price',
		'expected_sale_price_text' => 'Expected Sale Price Text',
		'effect_date' => 'Effect Date',
		'expected_rental_price' => 'Expected Rental Price',
		'expected_rental_price_text' => 'Expected Rental Price Text',
		'period_per_rent' => 'Period Per Rent',
		'lease_tenure3' => 'Lease Tenure3',
		'renewal_term2' => 'Renewal Term2',
		'agency_or_salesperson' => 'Agency Or Salesperson',
		'sign_seller1' => 'Sign Seller1',
		'sign_seller2' => 'Sign Seller2',
		'sign_seller3' => 'Sign Seller3',
		'sign_seller4' => 'Sign Seller4',
		'sign_interpreter1' => 'Sign Interpreter1',
		'sign_interpreter2' => 'Sign Interpreter2',
		'sign_interpreter3' => 'Sign Interpreter3',
		'sign_interpreter4' => 'Sign Interpreter4',
		'sign_agent' => 'Sign Agent',
		'interpret1' => 'Interpret1',
		'interpret2' => 'Interpret2',
		'interpret3' => 'Interpret3',
		'interpret4' => 'Interpret4',
		'interpretdate1' => 'Interpretdate1',
		'interpretdate2' => 'Interpretdate2',
		'interpretdate3' => 'Interpretdate3',
		'interpretdate4' => 'Interpretdate4',
		'sign_date1' => 'Sign Date1',
		'sign_date2' => 'Sign Date2',
		'sign_date3' => 'Sign Date3',
		'sign_date4' => 'Sign Date4',
		'interpreterID1' => 'Interpreter ID1',
		'interpreterID2' => 'Interpreter ID2',
		'interpreterID3' => 'Interpreter ID3',
		'interpreterID4' => 'Interpreter ID4',
		'sign_buyer1' => 'Sign Buyer1',
		'interpretation1' => 'Interpretation1',
		'interpretation2' => 'Interpretation2',
		'interpretation3' => 'Interpretation3',
		'interpretation4' => 'Interpretation4',
		'representing' => 'Representing',
		'category' => 'Category',
		'sign1' => 'Sign1',
		'sign2' => 'Sign2',
		'sign3' => 'Sign3',
		'sign4' => 'Sign4',
		'sign5' => 'Sign5',
		'sign6' => 'Sign6',
		'sign7' => 'Sign7',
		'sign8' => 'Sign8',
		'sign9' => 'Sign9',
		'sign_landlord1' => 'Sign Landlord1',
		'sign_landlord2' => 'Sign Landlord2',
		'sign_landlord3' => 'Sign Landlord3',
		'sign_landlord4' => 'Sign Landlord4',
		'sign_tenant1' => 'Sign Tenant1',
		'sign_tenant2' => 'Sign Tenant2',
		'sign_tenant3' => 'Sign Tenant3',
		'sign_tenant4' => 'Sign Tenant4',
		'sign_buyer2' => 'Sign Buyer2',
		'sign_buyer3' => 'Sign Buyer3',
		'sign_buyer4' => 'Sign Buyer4',
		'estateagent_address2' => 'Estateagent Address2' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'id_form' => '',
		'id_tx' => '',
		'salesperson' => '',
		'salesperson_cea' => '',
		'salesperson_contact' => '',
		'estateagent' => '',
		'estateagent_cea' => '',
		'property_address' => '',
		'comm' => '',
		'percentage' => '',
		'GST' => '',
		'conflict' => '',
		'conflict_description' => '',
		'co_broke' => '',
		'ownership' => '',
		'additional_term' => '',
		'date_agreement' => '',
		'title' => '',
		'form_name' => '',
		'seller1' => '',
		'seller1_id' => '',
		'seller1_address' => '',
		'seller2' => '',
		'seller2_id' => '',
		'seller2_address' => '',
		'seller3' => '',
		'seller3_id' => '',
		'seller3_address' => '',
		'seller4' => '',
		'seller4_id' => '',
		'seller4_address' => '',
		'buyer1' => '',
		'buyer1_id' => '',
		'buyer1_address' => '',
		'buyer2' => '',
		'buyer2_id' => '',
		'buyer2_address' => '',
		'buyer3' => '',
		'buyer3_id' => '',
		'buyer3_address' => '',
		'buyer4' => '',
		'buyer4_id' => '',
		'buyer4_address' => '',
		'landlord1' => '',
		'landlord1_id' => '',
		'landlord1_address' => '',
		'landlord2' => '',
		'landlord2_id' => '',
		'landlord2_address' => '',
		'landlord3' => '',
		'landlord3_id' => '',
		'landlord3_address' => '',
		'landlord4' => '',
		'landlord4_id' => '',
		'landlord4_address' => '',
		'tenant1' => '',
		'tenant1_id' => '',
		'tenant1_address' => '',
		'tenant2' => '',
		'tenant2_id' => '',
		'tenant2_address' => '',
		'tenant3' => '',
		'tenant3_id' => '',
		'tenant3_address' => '',
		'tenant4' => '',
		'tenant4_id' => '',
		'tenant4_address' => '',
		'estateagent_address' => '',
		'gst_include' => '',
		'salesperson_ic' => '',
		'salesperson_address' => '',
		'estateagent_tel' => '',
		'estateagent2' => '',
		'estateagent_cea2' => '',
		'date_sign' => '',
		'date_sp' => '',
		'docuserid' => '',
		'status' => '',
		'date_ta' => '',
		'lease_tenure' => '',
		'renewal_term' => '',
		'renewal_agree' => '',
		'renewal_comm' => '',
		'renewal_percent' => '',
		'lease_tenure2' => '',
		'expiry_date' => '',
		'expected_sale_price' => '',
		'expected_sale_price_text' => '',
		'effect_date' => '',
		'expected_rental_price' => '',
		'expected_rental_price_text' => '',
		'period_per_rent' => '',
		'lease_tenure3' => '',
		'renewal_term2' => '',
		'agency_or_salesperson' => '',
		'sign_seller1' => '',
		'sign_seller2' => '',
		'sign_seller3' => '',
		'sign_seller4' => '',
		'sign_interpreter1' => '',
		'sign_interpreter2' => '',
		'sign_interpreter3' => '',
		'sign_interpreter4' => '',
		'sign_agent' => '',
		'interpret1' => '',
		'interpret2' => '',
		'interpret3' => '',
		'interpret4' => '',
		'interpretdate1' => '',
		'interpretdate2' => '',
		'interpretdate3' => '',
		'interpretdate4' => '',
		'sign_date1' => '',
		'sign_date2' => '',
		'sign_date3' => '',
		'sign_date4' => '',
		'interpreterID1' => '',
		'interpreterID2' => '',
		'interpreterID3' => '',
		'interpreterID4' => '',
		'sign_buyer1' => '',
		'interpretation1' => '',
		'interpretation2' => '',
		'interpretation3' => '',
		'interpretation4' => '',
		'representing' => '',
		'category' => '',
		'sign1' => '',
		'sign2' => '',
		'sign3' => '',
		'sign4' => '',
		'sign5' => '',
		'sign6' => '',
		'sign7' => '',
		'sign8' => '',
		'sign9' => '',
		'sign_landlord1' => '',
		'sign_landlord2' => '',
		'sign_landlord3' => '',
		'sign_landlord4' => '',
		'sign_tenant1' => '',
		'sign_tenant2' => '',
		'sign_tenant3' => '',
		'sign_tenant4' => '',
		'sign_buyer2' => '',
		'sign_buyer3' => '',
		'sign_buyer4' => '',
		'estateagent_address2' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'id_form' => '',
		'id_tx' => '',
		'salesperson' => '',
		'salesperson_cea' => '',
		'salesperson_contact' => '',
		'estateagent' => '',
		'estateagent_cea' => '',
		'property_address' => '',
		'comm' => '',
		'percentage' => '',
		'GST' => '',
		'conflict' => '',
		'conflict_description' => '',
		'co_broke' => '',
		'ownership' => '',
		'additional_term' => '',
		'date_agreement' => '',
		'title' => '',
		'form_name' => '',
		'seller1' => '',
		'seller1_id' => '',
		'seller1_address' => '',
		'seller2' => '',
		'seller2_id' => '',
		'seller2_address' => '',
		'seller3' => '',
		'seller3_id' => '',
		'seller3_address' => '',
		'seller4' => '',
		'seller4_id' => '',
		'seller4_address' => '',
		'buyer1' => '',
		'buyer1_id' => '',
		'buyer1_address' => '',
		'buyer2' => '',
		'buyer2_id' => '',
		'buyer2_address' => '',
		'buyer3' => '',
		'buyer3_id' => '',
		'buyer3_address' => '',
		'buyer4' => '',
		'buyer4_id' => '',
		'buyer4_address' => '',
		'landlord1' => '',
		'landlord1_id' => '',
		'landlord1_address' => '',
		'landlord2' => '',
		'landlord2_id' => '',
		'landlord2_address' => '',
		'landlord3' => '',
		'landlord3_id' => '',
		'landlord3_address' => '',
		'landlord4' => '',
		'landlord4_id' => '',
		'landlord4_address' => '',
		'tenant1' => '',
		'tenant1_id' => '',
		'tenant1_address' => '',
		'tenant2' => '',
		'tenant2_id' => '',
		'tenant2_address' => '',
		'tenant3' => '',
		'tenant3_id' => '',
		'tenant3_address' => '',
		'tenant4' => '',
		'tenant4_id' => '',
		'tenant4_address' => '',
		'estateagent_address' => '',
		'gst_include' => '',
		'salesperson_ic' => '',
		'salesperson_address' => '',
		'estateagent_tel' => '',
		'estateagent2' => '',
		'estateagent_cea2' => '',
		'date_sign' => '',
		'date_sp' => '',
		'docuserid' => '',
		'status' => '',
		'date_ta' => '',
		'lease_tenure' => '',
		'renewal_term' => '',
		'renewal_agree' => '',
		'renewal_comm' => '',
		'renewal_percent' => '',
		'lease_tenure2' => '',
		'expiry_date' => '',
		'expected_sale_price' => '',
		'expected_sale_price_text' => '',
		'effect_date' => '',
		'expected_rental_price' => '',
		'expected_rental_price_text' => '',
		'period_per_rent' => '',
		'lease_tenure3' => '',
		'renewal_term2' => '',
		'agency_or_salesperson' => '',
		'sign_seller1' => '',
		'sign_seller2' => '',
		'sign_seller3' => '',
		'sign_seller4' => '',
		'sign_interpreter1' => '',
		'sign_interpreter2' => '',
		'sign_interpreter3' => '',
		'sign_interpreter4' => '',
		'sign_agent' => '',
		'interpret1' => '',
		'interpret2' => '',
		'interpret3' => '',
		'interpret4' => '',
		'interpretdate1' => '',
		'interpretdate2' => '',
		'interpretdate3' => '',
		'interpretdate4' => '',
		'sign_date1' => '',
		'sign_date2' => '',
		'sign_date3' => '',
		'sign_date4' => '',
		'interpreterID1' => '',
		'interpreterID2' => '',
		'interpreterID3' => '',
		'interpreterID4' => '',
		'sign_buyer1' => '',
		'interpretation1' => '',
		'interpretation2' => '',
		'interpretation3' => '',
		'interpretation4' => '',
		'representing' => '',
		'category' => '',
		'sign1' => '',
		'sign2' => '',
		'sign3' => '',
		'sign4' => '',
		'sign5' => '',
		'sign6' => '',
		'sign7' => '',
		'sign8' => '',
		'sign9' => '',
		'sign_landlord1' => '',
		'sign_landlord2' => '',
		'sign_landlord3' => '',
		'sign_landlord4' => '',
		'sign_tenant1' => '',
		'sign_tenant2' => '',
		'sign_tenant3' => '',
		'sign_tenant4' => '',
		'sign_buyer2' => '',
		'sign_buyer3' => '',
		'sign_buyer4' => '',
		'estateagent_address2' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>