<?php
global $runnerTableSettings;
$runnerTableSettings['form1'] = array(
	'name' => 'form1',
	'type' => 1,
	'shortName' => 'form1',
	'advancedSecurityType' => 1,
	'pagesByType' => array(
		'edit' => array( 
			'edit',
			'edit_sign' 
		),
		'list' => array( 
			'list' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view_print',
			'view_signed' 
		) 
	),
	'pageTypes' => array(
		'edit' => 'edit',
		'edit_sign' => 'edit',
		'list' => 'list',
		'search' => 'search',
		'view_print' => 'view',
		'view_signed' => 'view' 
	),
	'defaultPages' => array(
		'edit' => 'edit',
		'list' => 'list',
		'search' => 'search',
		'view' => 'view_print' 
	),
	'tableOwnerIdField' => 'salesperson_cea',
	'usersOwnerIdField' => 'username',
	'hasEncryptedFields' => true,
	'listAjax' => true,
	'detailsBadgeColor' => 'bc8f8f',
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
	id_form,
	id_tx,
	category,
	representing,
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
	estateagent_address,
	gst_include,
	salesperson_ic,
	salesperson_address,
	estateagent_tel,
	estateagent2,
	estateagent_cea2,
	date_sign,
	date_sp,
	status,
	docuserid,
	agency_or_salesperson,
	sign_agent,
	sign_interpreter4,
	sign_interpreter3,
	sign_interpreter2,
	sign_interpreter1,
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
	sign_seller1,
	sign_seller2,
	sign_seller3,
	sign_seller4,
	interpreterID1,
	interpreterID2,
	interpreterID3,
	interpreterID4,
	interpretation1,
	interpretation2,
	interpretation3,
	interpretation4,
	sign1,
	sign2,
	sign3,
	sign4,
	sign5,
	sign6,
	estateagent_address2
FROM
	forms
WHERE
status =1
GROUP BY
	id_form
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
					'customExpression' => '$value = "<a href=\\"form1_view.php?editid1=".$value."\\">".$value."</a>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'validateAs' => 'Number',
					'textboxSize' => 50,
					'textHTML5Input' => '1',
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
			'tableName' => 'forms' 
		),
		'category' => array(
			'name' => 'category',
			'goodName' => 'category',
			'strField' => 'category',
			'sourceSingle' => 'category',
			'index' => 4,
			'sqlExpression' => 'category',
			'viewFormats' => array(
				'view' => array(
					'videoRewindEnabled' => false,
					'numberFractionalDigits' => 0,
					'textShowFirst' => false 
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
			'tableName' => 'forms' 
		),
		'representing' => array(
			'name' => 'representing',
			'goodName' => 'representing',
			'strField' => 'representing',
			'index' => 5,
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
					'format' => 'Readonly',
					'textboxSize' => 110,
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
		'salesperson' => array(
			'name' => 'salesperson',
			'goodName' => 'salesperson',
			'strField' => 'salesperson',
			'index' => 6,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["FullName"]',
					'autoUpdateValue' => '$_SESSION["FullName"]',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupTable' => 'my_profile_user',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'full_name',
					'lookupDisplayField' => 'full_name',
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
			'tableName' => 'forms' 
		),
		'salesperson_cea' => array(
			'name' => 'salesperson_cea',
			'goodName' => 'salesperson_cea',
			'strField' => 'salesperson_cea',
			'index' => 7,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["UserID"]',
					'autoUpdateValue' => '$_SESSION["UserID"]',
					'textboxSize' => 80,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupLinkField' => 'cea_reg',
					'lookupDisplayField' => 'cea_reg',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'salesperson',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'salesperson_contact' => array(
			'name' => 'salesperson_contact',
			'goodName' => 'salesperson_contact',
			'strField' => 'salesperson_contact',
			'index' => 8,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["AgentMobile"]',
					'autoUpdateValue' => '$_SESSION["AgentMobile"]',
					'textboxSize' => 80,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupLinkField' => 'mobile',
					'lookupDisplayField' => 'mobile',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'salesperson',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'estateagent' => array(
			'name' => 'estateagent',
			'goodName' => 'estateagent',
			'strField' => 'estateagent',
			'index' => 9,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["Agency"]',
					'autoUpdateValue' => '$_SESSION["Agency"]',
					'textboxSize' => 120,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agency',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'agency_name',
					'lookupDisplayField' => 'agency_name',
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'estateagent_address',
							'lookupField' => 'agency_address' 
						),
						array(
							'masterField' => 'estateagent_cea2',
							'lookupField' => 'agency_cea_reg' 
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
			'tableName' => 'forms' 
		),
		'estateagent_cea' => array(
			'name' => 'estateagent_cea',
			'goodName' => 'estateagent_cea',
			'strField' => 'estateagent_cea',
			'index' => 10,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["AgencyCEA"]',
					'autoUpdateValue' => '$_SESSION["AgencyCEA"]',
					'textboxSize' => 80,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agency',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'cea_reg',
					'lookupDisplayField' => 'cea_reg',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'estateagent',
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
			'tableName' => 'forms' 
		),
		'property_address' => array(
			'name' => 'property_address',
			'goodName' => 'property_address',
			'strField' => 'property_address',
			'index' => 11,
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
					'format' => 'Readonly',
					'textboxSize' => 250,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'transactions',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'prop_address',
					'lookupDisplayField' => 'prop_address',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'id_form',
							'lookupField' => 'id' 
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
			'tableName' => 'forms' 
		),
		'comm' => array(
			'name' => 'comm',
			'goodName' => 'comm',
			'strField' => 'comm',
			'index' => 12,
			'sqlExpression' => 'comm',
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
					'textboxSize' => 60,
					'textboxMaxLenth' => 10,
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
			'tableName' => 'forms' 
		),
		'percentage' => array(
			'name' => 'percentage',
			'goodName' => 'percentage',
			'strField' => 'percentage',
			'index' => 13,
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
					'format' => 'Lookup wizard',
					'validateAs' => 'Number',
					'textboxSize' => 100,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'percentage',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'percentage',
					'lookupDisplayField' => 'percentage',
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
			'tableName' => 'forms' 
		),
		'GST' => array(
			'name' => 'GST',
			'goodName' => 'GST',
			'strField' => 'GST',
			'index' => 14,
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
					'format' => 'Lookup wizard',
					'required' => true,
					'defaultValue' => '"No"',
					'textboxSize' => 100,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupValues' => array( 
						'Yes',
						'No' 
					),
					'lookupTable' => 'gst',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'gst',
					'lookupDisplayField' => 'gst',
					'lookupHorizontal' => true,
					'lookupAutofillEdit' => true,
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
			'tableName' => 'forms' 
		),
		'conflict' => array(
			'name' => 'conflict',
			'goodName' => 'conflict',
			'strField' => 'conflict',
			'index' => 15,
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
					'format' => 'Lookup wizard',
					'required' => true,
					'textboxSize' => 100,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'has',
						'does not have' 
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
			'tableName' => 'forms' 
		),
		'conflict_description' => array(
			'name' => 'conflict_description',
			'goodName' => 'conflict_description',
			'strField' => 'conflict_description',
			'index' => 16,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 700,
					'textHTML5Input' => '0',
					'textareaHeight' => 60,
					'lookupType' => 2,
					'lookupTable' => 'conflect_descriptions',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'descriptions',
					'lookupDisplayField' => 'descriptions',
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
			'tableName' => 'forms' 
		),
		'co-broke' => array(
			'name' => 'co-broke',
			'goodName' => 'co_broke',
			'strField' => 'co-broke',
			'index' => 17,
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
					'format' => 'Lookup wizard',
					'required' => true,
					'textboxSize' => 100,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'may',
						'may not' 
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
			'tableName' => 'forms' 
		),
		'ownership' => array(
			'name' => 'ownership',
			'goodName' => 'ownership',
			'strField' => 'ownership',
			'index' => 18,
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
					'format' => 'Lookup wizard',
					'required' => true,
					'textboxSize' => 100,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'the owner of',
						'duly authorised' 
					),
					'lookupAutofillEdit' => true,
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
			'tableName' => 'forms' 
		),
		'additional_term' => array(
			'name' => 'additional_term',
			'goodName' => 'additional_term',
			'strField' => 'additional_term',
			'index' => 19,
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
					'format' => 'Text area',
					'defaultValue' => '"NA"',
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'textareaHeight' => 80,
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
			'tableName' => 'forms' 
		),
		'date_agreement' => array(
			'name' => 'date_agreement',
			'goodName' => 'date_agreement',
			'strField' => 'date_agreement',
			'index' => 20,
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
					'required' => true,
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
			'tableName' => 'forms' 
		),
		'title' => array(
			'name' => 'title',
			'goodName' => 'title',
			'strField' => 'title',
			'index' => 21,
			'sqlExpression' => 'title',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '"ESTATE AGENCY AGREEMENT FOR\\n". 
"THE SALE RESIDENTIAL PROPERTY"',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'textboxSize' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 50,
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
		'form_name' => array(
			'name' => 'form_name',
			'goodName' => 'form_name',
			'strField' => 'form_name',
			'index' => 22,
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
					'format' => 'Readonly',
					'defaultValue' => '"Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 1"',
					'autoUpdateValue' => '"Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 1"',
					'textboxSize' => 500,
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'textareaHeight' => 30,
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
				'format' => 'Values list',
				'filterTotalsField' => 'id' 
			),
			'tableName' => 'forms' 
		),
		'seller1' => array(
			'name' => 'seller1',
			'goodName' => 'seller1',
			'strField' => 'seller1',
			'index' => 23,
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
					'required' => true,
					'textboxSize' => 150,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'parties_involved',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'id_form',
							'lookupField' => 'id_tx' 
						),
						array(
							'masterField' => 'representing',
							'lookupField' => 'role' 
						),
						array(
							'masterField' => 'id_tx',
							'lookupField' => 'tx_no' 
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
			'tableName' => 'forms' 
		),
		'seller1_id' => array(
			'name' => 'seller1_id',
			'goodName' => 'seller1_id',
			'strField' => 'seller1_id',
			'index' => 24,
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
					'textboxSize' => 80,
					'textboxMaxLenth' => 50,
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller1_address' => array(
			'name' => 'seller1_address',
			'goodName' => 'seller1_address',
			'strField' => 'seller1_address',
			'index' => 25,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 250,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'address',
					'lookupDisplayField' => 'address',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'seller2' => array(
			'name' => 'seller2',
			'goodName' => 'seller2',
			'strField' => 'seller2',
			'index' => 26,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 150,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'parties_involved',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'id_form',
							'lookupField' => 'id_tx' 
						),
						array(
							'masterField' => 'representing',
							'lookupField' => 'role' 
						),
						array(
							'masterField' => 'id_tx',
							'lookupField' => 'tx_no' 
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
			'tableName' => 'forms' 
		),
		'seller2_id' => array(
			'name' => 'seller2_id',
			'goodName' => 'seller2_id',
			'strField' => 'seller2_id',
			'index' => 27,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 80,
					'textboxMaxLenth' => 50,
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
							'masterField' => 'seller2',
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
			'tableName' => 'forms' 
		),
		'seller2_address' => array(
			'name' => 'seller2_address',
			'goodName' => 'seller2_address',
			'strField' => 'seller2_address',
			'index' => 28,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 250,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'address',
					'lookupDisplayField' => 'address',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'seller2',
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
			'tableName' => 'forms' 
		),
		'seller3' => array(
			'name' => 'seller3',
			'goodName' => 'seller3',
			'strField' => 'seller3',
			'index' => 29,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 150,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'parties_involved',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'id_form',
							'lookupField' => 'id_tx' 
						),
						array(
							'masterField' => 'representing',
							'lookupField' => 'role' 
						),
						array(
							'masterField' => 'id_tx',
							'lookupField' => 'tx_no' 
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
			'tableName' => 'forms' 
		),
		'seller3_id' => array(
			'name' => 'seller3_id',
			'goodName' => 'seller3_id',
			'strField' => 'seller3_id',
			'index' => 30,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 80,
					'textboxMaxLenth' => 50,
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
							'masterField' => 'seller3',
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
			'tableName' => 'forms' 
		),
		'seller3_address' => array(
			'name' => 'seller3_address',
			'goodName' => 'seller3_address',
			'strField' => 'seller3_address',
			'index' => 31,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 250,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'address',
					'lookupDisplayField' => 'address',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'seller3',
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
			'tableName' => 'forms' 
		),
		'seller4' => array(
			'name' => 'seller4',
			'goodName' => 'seller4',
			'strField' => 'seller4',
			'index' => 32,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 150,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'parties_involved',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'id_form',
							'lookupField' => 'id_tx' 
						),
						array(
							'masterField' => 'representing',
							'lookupField' => 'role' 
						),
						array(
							'masterField' => 'id_tx',
							'lookupField' => 'tx_no' 
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
			'tableName' => 'forms' 
		),
		'seller4_id' => array(
			'name' => 'seller4_id',
			'goodName' => 'seller4_id',
			'strField' => 'seller4_id',
			'index' => 33,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'seller4_id',
			'uploadFolder' => '',
			'codeUploadFolderLang' => '',
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
					'textboxMaxLenth' => 50,
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
							'masterField' => 'seller4',
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
			'tableName' => 'forms' 
		),
		'seller4_address' => array(
			'name' => 'seller4_address',
			'goodName' => 'seller4_address',
			'strField' => 'seller4_address',
			'index' => 34,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 250,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'address',
					'lookupDisplayField' => 'address',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'seller4',
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
			'tableName' => 'forms' 
		),
		'buyer1' => array(
			'name' => 'buyer1',
			'goodName' => 'buyer1',
			'strField' => 'buyer1',
			'index' => 35,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 150,
					'textHTML5Input' => '0',
					'lookupTable' => 'parties_involved_buyer',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'id_form',
							'lookupField' => 'id_tx' 
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
			'tableName' => 'forms' 
		),
		'buyer1_id' => array(
			'name' => 'buyer1_id',
			'goodName' => 'buyer1_id',
			'strField' => 'buyer1_id',
			'index' => 36,
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
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric_reg',
					'lookupDisplayField' => 'nric_reg',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'buyer1',
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
			'tableName' => 'forms' 
		),
		'buyer1_address' => array(
			'name' => 'buyer1_address',
			'goodName' => 'buyer1_address',
			'strField' => 'buyer1_address',
			'index' => 37,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 250,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'address',
					'lookupDisplayField' => 'address',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'buyer1',
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
			'tableName' => 'forms' 
		),
		'estateagent_address' => array(
			'name' => 'estateagent_address',
			'goodName' => 'estateagent_address',
			'strField' => 'estateagent_address',
			'index' => 38,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["AgencyAddress"]',
					'autoUpdateValue' => '$_SESSION["AgencyAddress"]',
					'textboxSize' => 250,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agency',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'agency_address',
					'lookupDisplayField' => 'agency_address',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'estateagent',
							'lookupField' => 'agency_name' 
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
			'tableName' => 'forms' 
		),
		'gst_include' => array(
			'name' => 'gst_include',
			'goodName' => 'gst_include',
			'strField' => 'gst_include',
			'index' => 39,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 110,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupValues' => array( 
						'inclusive of GST.',
						'exclusive of GST.' 
					),
					'lookupTable' => 'gst_incl',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'gst_incl',
					'lookupDisplayField' => 'gst_incl',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'GST',
							'lookupField' => 'gst' 
						) 
					),
					'lookupAutofillEdit' => true,
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
			'tableName' => 'forms' 
		),
		'salesperson_ic' => array(
			'name' => 'salesperson_ic',
			'goodName' => 'salesperson_ic',
			'strField' => 'salesperson_ic',
			'index' => 40,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["AgentNric"]',
					'autoUpdateValue' => '$_SESSION["AgentNric"]',
					'textboxSize' => 80,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'salesperson',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'salesperson_address' => array(
			'name' => 'salesperson_address',
			'goodName' => 'salesperson_address',
			'strField' => 'salesperson_address',
			'index' => 41,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["AgentAddress"]',
					'autoUpdateValue' => '$_SESSION["AgentAddress"]',
					'textboxSize' => 250,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupLinkField' => 'home_address',
					'lookupDisplayField' => 'home_address',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'salesperson',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'estateagent_tel' => array(
			'name' => 'estateagent_tel',
			'goodName' => 'estateagent_tel',
			'strField' => 'estateagent_tel',
			'index' => 42,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["AgencyTel"]',
					'autoUpdateValue' => '$_SESSION["AgencyTel"]',
					'textboxSize' => 80,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agency',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'agency_tel',
					'lookupDisplayField' => 'agency_tel',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'estateagent2',
							'lookupField' => 'agency_name' 
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
			'tableName' => 'forms' 
		),
		'estateagent2' => array(
			'name' => 'estateagent2',
			'goodName' => 'estateagent2',
			'strField' => 'estateagent2',
			'index' => 43,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["Agency"]',
					'autoUpdateValue' => '$_SESSION["Agency"]',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agency',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'estateagent_tel',
							'lookupField' => 'tel' 
						),
						array(
							'masterField' => 'estateagent_cea2',
							'lookupField' => 'cea_reg' 
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
			'tableName' => 'forms' 
		),
		'estateagent_cea2' => array(
			'name' => 'estateagent_cea2',
			'goodName' => 'estateagent_cea2',
			'strField' => 'estateagent_cea2',
			'index' => 44,
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
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["AgencyCEA"]',
					'autoUpdateValue' => '$_SESSION["AgencyCEA"]',
					'textboxSize' => 80,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agency',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'cea_reg',
					'lookupDisplayField' => 'cea_reg',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'estateagent',
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
			'tableName' => 'forms' 
		),
		'date_sign' => array(
			'name' => 'date_sign',
			'goodName' => 'date_sign',
			'strField' => 'date_sign',
			'index' => 45,
			'sqlExpression' => 'date_sign',
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
			'tableName' => 'forms' 
		),
		'date_sp' => array(
			'name' => 'date_sp',
			'goodName' => 'date_sp',
			'strField' => 'date_sp',
			'index' => 46,
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
					'textboxSize' => 100,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
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
			'tableName' => 'forms' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'index' => 47,
			'type' => 3,
			'sqlExpression' => 'status',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '$value = "Form 1";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'validateAs' => 'Number',
					'textboxSize' => 0,
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
			'tableName' => 'forms' 
		),
		'docuserid' => array(
			'name' => 'docuserid',
			'goodName' => 'docuserid',
			'strField' => 'docuserid',
			'index' => 48,
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'forms' 
		),
		'agency_or_salesperson' => array(
			'name' => 'agency_or_salesperson',
			'goodName' => 'agency_or_salesperson',
			'strField' => 'agency_or_salesperson',
			'index' => 49,
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
					'format' => 'Lookup wizard',
					'required' => true,
					'defaultValue' => '"Salesperson for and on behalf of the Estate Agent"',
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Salesperson for and on behalf of the Estate Agent',
						'Estate Agent' 
					),
					'lookupControlType' => 4,
					'lookupAutofillEdit' => true,
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
			'tableName' => 'forms' 
		),
		'sign_agent' => array(
			'name' => 'sign_agent',
			'goodName' => 'sign_agent',
			'strField' => 'sign_agent',
			'index' => 50,
			'type' => 201,
			'sqlExpression' => 'sign_agent',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
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
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
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
		'sign_interpreter4' => array(
			'name' => 'sign_interpreter4',
			'goodName' => 'sign_interpreter4',
			'strField' => 'sign_interpreter4',
			'index' => 51,
			'type' => 201,
			'sqlExpression' => 'sign_interpreter4',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
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
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
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
		'sign_interpreter3' => array(
			'name' => 'sign_interpreter3',
			'goodName' => 'sign_interpreter3',
			'strField' => 'sign_interpreter3',
			'index' => 52,
			'type' => 201,
			'sqlExpression' => 'sign_interpreter3',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
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
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
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
		'sign_interpreter2' => array(
			'name' => 'sign_interpreter2',
			'goodName' => 'sign_interpreter2',
			'strField' => 'sign_interpreter2',
			'index' => 53,
			'type' => 201,
			'sqlExpression' => 'sign_interpreter2',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
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
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
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
		'sign_interpreter1' => array(
			'name' => 'sign_interpreter1',
			'goodName' => 'sign_interpreter1',
			'strField' => 'sign_interpreter1',
			'index' => 54,
			'type' => 201,
			'sqlExpression' => 'sign_interpreter1',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
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
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
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
		'interpret1' => array(
			'name' => 'interpret1',
			'goodName' => 'interpret1',
			'strField' => 'interpret1',
			'index' => 55,
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
					'format' => 'Lookup wizard',
					'denyDuplicateMessage' => array(
						'text' => '%value% already exists',
						'type' => 0 
					),
					'textboxSize' => 100,
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'interpretation',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'language',
					'lookupDisplayField' => 'language',
					'lookupOrderBy' => 'language',
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
			'tableName' => 'forms' 
		),
		'interpret2' => array(
			'name' => 'interpret2',
			'goodName' => 'interpret2',
			'strField' => 'interpret2',
			'index' => 56,
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
					'format' => 'Lookup wizard',
					'denyDuplicateMessage' => array(
						'text' => '%value% already exists',
						'type' => 0 
					),
					'textboxSize' => 100,
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'interpretation',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'language',
					'lookupDisplayField' => 'language',
					'lookupOrderBy' => 'language',
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
			'tableName' => 'forms' 
		),
		'interpret3' => array(
			'name' => 'interpret3',
			'goodName' => 'interpret3',
			'strField' => 'interpret3',
			'index' => 57,
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
					'format' => 'Lookup wizard',
					'denyDuplicateMessage' => array(
						'text' => '%value% already exists',
						'type' => 0 
					),
					'textboxSize' => 100,
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'interpretation',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'language',
					'lookupDisplayField' => 'language',
					'lookupOrderBy' => 'language',
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
			'tableName' => 'forms' 
		),
		'interpret4' => array(
			'name' => 'interpret4',
			'goodName' => 'interpret4',
			'strField' => 'interpret4',
			'index' => 58,
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
					'format' => 'Lookup wizard',
					'denyDuplicateMessage' => array(
						'text' => '%value% already exists',
						'type' => 0 
					),
					'textboxSize' => 100,
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'interpretation',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'language',
					'lookupDisplayField' => 'language',
					'lookupOrderBy' => 'language',
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
			'tableName' => 'forms' 
		),
		'interpretdate1' => array(
			'name' => 'interpretdate1',
			'goodName' => 'interpretdate1',
			'strField' => 'interpretdate1',
			'index' => 59,
			'type' => 7,
			'sqlExpression' => 'interpretdate1',
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
			'tableName' => 'forms' 
		),
		'interpretdate2' => array(
			'name' => 'interpretdate2',
			'goodName' => 'interpretdate2',
			'strField' => 'interpretdate2',
			'index' => 60,
			'type' => 7,
			'sqlExpression' => 'interpretdate2',
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
			'tableName' => 'forms' 
		),
		'interpretdate3' => array(
			'name' => 'interpretdate3',
			'goodName' => 'interpretdate3',
			'strField' => 'interpretdate3',
			'index' => 61,
			'type' => 7,
			'sqlExpression' => 'interpretdate3',
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
			'tableName' => 'forms' 
		),
		'interpretdate4' => array(
			'name' => 'interpretdate4',
			'goodName' => 'interpretdate4',
			'strField' => 'interpretdate4',
			'index' => 62,
			'type' => 7,
			'sqlExpression' => 'interpretdate4',
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
			'tableName' => 'forms' 
		),
		'sign_date1' => array(
			'name' => 'sign_date1',
			'goodName' => 'sign_date1',
			'strField' => 'sign_date1',
			'index' => 63,
			'type' => 7,
			'sqlExpression' => 'sign_date1',
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
			'tableName' => 'forms' 
		),
		'sign_date2' => array(
			'name' => 'sign_date2',
			'goodName' => 'sign_date2',
			'strField' => 'sign_date2',
			'index' => 64,
			'type' => 7,
			'sqlExpression' => 'sign_date2',
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
			'tableName' => 'forms' 
		),
		'sign_date3' => array(
			'name' => 'sign_date3',
			'goodName' => 'sign_date3',
			'strField' => 'sign_date3',
			'index' => 65,
			'type' => 7,
			'sqlExpression' => 'sign_date3',
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
			'tableName' => 'forms' 
		),
		'sign_date4' => array(
			'name' => 'sign_date4',
			'goodName' => 'sign_date4',
			'strField' => 'sign_date4',
			'index' => 66,
			'type' => 7,
			'sqlExpression' => 'sign_date4',
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
			'tableName' => 'forms' 
		),
		'sign_seller1' => array(
			'name' => 'sign_seller1',
			'goodName' => 'sign_seller1',
			'strField' => 'sign_seller1',
			'index' => 67,
			'type' => 201,
			'sqlExpression' => 'sign_seller1',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
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
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
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
			'index' => 68,
			'type' => 201,
			'sqlExpression' => 'sign_seller2',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
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
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
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
		'sign_seller3' => array(
			'name' => 'sign_seller3',
			'goodName' => 'sign_seller3',
			'strField' => 'sign_seller3',
			'index' => 69,
			'type' => 201,
			'sqlExpression' => 'sign_seller3',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
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
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
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
		'sign_seller4' => array(
			'name' => 'sign_seller4',
			'goodName' => 'sign_seller4',
			'strField' => 'sign_seller4',
			'index' => 70,
			'type' => 201,
			'sqlExpression' => 'sign_seller4',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 120,
					'imageHeight' => 55,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
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
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
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
		'interpreterID1' => array(
			'name' => 'interpreterID1',
			'goodName' => 'interpreterID1',
			'strField' => 'interpreterID1',
			'index' => 71,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 100,
					'textboxMaxLenth' => 9,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'eat_users',
					'lookupTableConnection' => 'jwresourjweat1091saasatjwrealt',
					'lookupLinkField' => 'full_name',
					'lookupDisplayField' => 'nric',
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
			'tableName' => 'forms' 
		),
		'interpreterID2' => array(
			'name' => 'interpreterID2',
			'goodName' => 'interpreterID2',
			'strField' => 'interpreterID2',
			'index' => 72,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 100,
					'textboxMaxLenth' => 9,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'eat_users',
					'lookupTableConnection' => 'jwresourjweat1091saasatjwrealt',
					'lookupLinkField' => 'full_name',
					'lookupDisplayField' => 'nric',
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
			'tableName' => 'forms' 
		),
		'interpreterID3' => array(
			'name' => 'interpreterID3',
			'goodName' => 'interpreterID3',
			'strField' => 'interpreterID3',
			'index' => 73,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 100,
					'textboxMaxLenth' => 9,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'eat_users',
					'lookupTableConnection' => 'jwresourjweat1091saasatjwrealt',
					'lookupLinkField' => 'full_name',
					'lookupDisplayField' => 'nric',
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
			'tableName' => 'forms' 
		),
		'interpreterID4' => array(
			'name' => 'interpreterID4',
			'goodName' => 'interpreterID4',
			'strField' => 'interpreterID4',
			'index' => 74,
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
					'format' => 'Lookup wizard',
					'textboxSize' => 100,
					'textboxMaxLenth' => 9,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'eat_users',
					'lookupTableConnection' => 'jwresourjweat1091saasatjwrealt',
					'lookupLinkField' => 'full_name',
					'lookupDisplayField' => 'nric',
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
			'tableName' => 'forms' 
		),
		'interpretation1' => array(
			'name' => 'interpretation1',
			'goodName' => 'interpretation1',
			'strField' => 'interpretation1',
			'index' => 75,
			'sqlExpression' => 'interpretation1',
			'uploadFolder' => '',
			'codeUploadFolderLang' => '',
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
					'defaultValue' => '"Through the interpretation of"',
					'autoUpdateValue' => '"Through the interpretation of"',
					'textboxSize' => 180,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Through the interpretation of',
						'No interpretation required' 
					),
					'lookupControlType' => 4,
					'lookupAutofillEdit' => true,
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
			'tableName' => 'forms' 
		),
		'interpretation2' => array(
			'name' => 'interpretation2',
			'goodName' => 'interpretation2',
			'strField' => 'interpretation2',
			'index' => 76,
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
					'defaultValue' => '"Through the interpretation of"',
					'autoUpdateValue' => '"Through the interpretation of"',
					'textboxSize' => 180,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Through the interpretation of',
						'No interpretation required' 
					),
					'lookupControlType' => 4,
					'lookupAutofillEdit' => true,
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
			'tableName' => 'forms' 
		),
		'interpretation3' => array(
			'name' => 'interpretation3',
			'goodName' => 'interpretation3',
			'strField' => 'interpretation3',
			'index' => 77,
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
					'defaultValue' => '"Through the interpretation of"',
					'autoUpdateValue' => '"Through the interpretation of"',
					'textboxSize' => 180,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Through the interpretation of',
						'No interpretation required' 
					),
					'lookupControlType' => 4,
					'lookupAutofillEdit' => true,
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
			'tableName' => 'forms' 
		),
		'interpretation4' => array(
			'name' => 'interpretation4',
			'goodName' => 'interpretation4',
			'strField' => 'interpretation4',
			'index' => 78,
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
					'defaultValue' => '"Through the interpretation of"',
					'autoUpdateValue' => '"Through the interpretation of"',
					'textboxSize' => 180,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Through the interpretation of',
						'No interpretation required' 
					),
					'lookupControlType' => 4,
					'lookupAutofillEdit' => true,
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
			'tableName' => 'forms' 
		),
		'sign1' => array(
			'name' => 'sign1',
			'goodName' => 'sign1',
			'strField' => 'sign1',
			'sourceSingle' => 'sign1',
			'index' => 79,
			'type' => 201,
			'sqlExpression' => 'sign1',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 60,
					'imageHeight' => 30,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1,
					'pluginInitString' => '// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;' 
				) 
			),
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
			'index' => 80,
			'type' => 201,
			'sqlExpression' => 'sign2',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 60,
					'imageHeight' => 30,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1,
					'pluginInitString' => '// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;' 
				) 
			),
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
			'index' => 81,
			'type' => 201,
			'sqlExpression' => 'sign3',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 60,
					'imageHeight' => 30,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1,
					'pluginInitString' => '// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;' 
				) 
			),
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
			'index' => 82,
			'type' => 201,
			'sqlExpression' => 'sign4',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 60,
					'imageHeight' => 30,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1,
					'pluginInitString' => '// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;' 
				) 
			),
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
			'index' => 83,
			'type' => 201,
			'sqlExpression' => 'sign5',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 60,
					'imageHeight' => 30,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'imageGallery' => false,
					'imageBorder' => false,
					'imageMobileFullWidth' => false,
					'customExpression' => '$value="<img src=\'".$value."\' width=150 height=50>";',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxSize' => 100,
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1,
					'pluginInitString' => '// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;' 
				) 
			),
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
			'index' => 84,
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
		'estateagent_address2' => array(
			'name' => 'estateagent_address2',
			'goodName' => 'estateagent_address2',
			'strField' => 'estateagent_address2',
			'sourceSingle' => 'estateagent_address2',
			'index' => 85,
			'sqlExpression' => 'estateagent_address2',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["AgencyAddress"]',
					'autoUpdateValue' => '$_SESSION["AgencyAddress"]',
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agency',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'agency_address',
					'lookupDisplayField' => 'agency_address',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'estateagent2',
							'lookupField' => 'agency_name' 
						) 
					),
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
	'masterTables' => array( 
		array(
			'table' => 'transactions',
			'detailsKeys' => array( 
				'id_form' 
			),
			'masterKeys' => array( 
				'id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	id_form,
	id_tx,
	category,
	representing,
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
	estateagent_address,
	gst_include,
	salesperson_ic,
	salesperson_address,
	estateagent_tel,
	estateagent2,
	estateagent_cea2,
	date_sign,
	date_sp,
	status,
	docuserid,
	agency_or_salesperson,
	sign_agent,
	sign_interpreter4,
	sign_interpreter3,
	sign_interpreter2,
	sign_interpreter1,
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
	sign_seller1,
	sign_seller2,
	sign_seller3,
	sign_seller4,
	interpreterID1,
	interpreterID2,
	interpreterID3,
	interpreterID4,
	interpretation1,
	interpretation2,
	interpretation3,
	interpretation4,
	sign1,
	sign2,
	sign3,
	sign4,
	sign5,
	sign6,
	estateagent_address2
FROM
	forms
WHERE
status =1
GROUP BY
	id_form
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
			'sql' => 'status =1',
			'parsed' => true,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => array(
				'sql' => '',
				'parsed' => true,
				'type' => 'SQLField',
				'table' => 'forms',
				'name' => 'status' 
			),
			'case' => '=1',
			'useAlias' => false 
		),
		'groupBy' => array( 
			array(
				'sql' => 'id_form',
				'parsed' => true,
				'type' => 'GroupByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'forms',
					'name' => 'id_form' 
				) 
			) 
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
				'groupByIndex' => 0,
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
				'whereIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	id_form,
	id_tx,
	category,
	representing,
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
	estateagent_address,
	gst_include,
	salesperson_ic,
	salesperson_address,
	estateagent_tel,
	estateagent2,
	estateagent_cea2,
	date_sign,
	date_sp,
	status,
	docuserid,
	agency_or_salesperson,
	sign_agent,
	sign_interpreter4,
	sign_interpreter3,
	sign_interpreter2,
	sign_interpreter1,
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
	sign_seller1,
	sign_seller2,
	sign_seller3,
	sign_seller4,
	interpreterID1,
	interpreterID2,
	interpreterID3,
	interpreterID4,
	interpretation1,
	interpretation2,
	interpretation3,
	interpretation4,
	sign1,
	sign2,
	sign3,
	sign4,
	sign5,
	sign6,
	estateagent_address2',
		'fromListSql' => 'FROM
	forms',
		'whereSql' => 'status =1',
		'orderBySql' => 'ORDER BY
	id DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'forms',
	'originalPagesByType' => array(
		'edit' => array( 
			'edit',
			'edit_sign' 
		),
		'list' => array( 
			'list' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view_print',
			'view_signed' 
		) 
	),
	'originalPageTypes' => array(
		'edit' => 'edit',
		'edit_sign' => 'edit',
		'list' => 'list',
		'search' => 'search',
		'view_print' => 'view',
		'view_signed' => 'view' 
	),
	'originalDefaultPages' => array(
		'edit' => 'edit',
		'list' => 'list',
		'search' => 'search',
		'view' => 'view_print' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'id_form',
			'id_tx',
			'category',
			'representing',
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
			'estateagent_address',
			'gst_include',
			'salesperson_ic',
			'salesperson_address',
			'estateagent_tel',
			'estateagent2',
			'estateagent_cea2',
			'date_sign',
			'date_sp',
			'status',
			'docuserid',
			'agency_or_salesperson',
			'sign_agent',
			'sign_interpreter4',
			'sign_interpreter3',
			'sign_interpreter2',
			'sign_interpreter1',
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
			'sign_seller1',
			'sign_seller2',
			'sign_seller3',
			'sign_seller4',
			'interpreterID1',
			'interpreterID2',
			'interpreterID3',
			'interpreterID4',
			'interpretation1',
			'interpretation2',
			'interpretation3',
			'interpretation4',
			'sign1',
			'sign2',
			'sign3',
			'sign4',
			'sign5',
			'sign6',
			'estateagent_address2' 
		),
		'searchSuggest' => false,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'id_form',
			'id_tx',
			'category',
			'representing',
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
			'estateagent_address',
			'gst_include',
			'salesperson_ic',
			'salesperson_address',
			'estateagent_tel',
			'estateagent2',
			'estateagent_cea2',
			'date_sign',
			'date_sp',
			'status',
			'docuserid',
			'agency_or_salesperson',
			'sign_agent',
			'sign_interpreter4',
			'sign_interpreter3',
			'sign_interpreter2',
			'sign_interpreter1',
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
			'sign_seller1',
			'sign_seller2',
			'sign_seller3',
			'sign_seller4',
			'interpreterID1',
			'interpreterID2',
			'interpreterID3',
			'interpreterID4',
			'interpretation1',
			'interpretation2',
			'interpretation3',
			'interpretation4',
			'sign1',
			'sign2',
			'sign3',
			'sign4',
			'sign5',
			'sign6',
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
			'action' => 'noaction',
			'codeData' => array(
				 
			),
			'gridData' => array(
				'action' => 'checkbox',
				'table' => null 
			),
			'openData' => array(
				'how' => 'goto',
				'page' => 'view',
				'table' => null,
				'url' => '' 
			) 
		),
		'fields' => array(
			'GST' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'additional_term' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'agency_or_salesperson' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'buyer1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'buyer1_address' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'buyer1_id' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'category' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'co-broke' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'comm' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'conflict' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'conflict_description' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'date_agreement' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'date_sign' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'date_sp' => array(
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
			'estateagent' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'estateagent2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'estateagent_address' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'estateagent_address2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'estateagent_cea' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'estateagent_cea2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'estateagent_tel' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'form_name' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'gst_include' => array(
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
					'action' => 'checkbox',
					'table' => null 
				),
				'openData' => array(
					'how' => 'new',
					'page' => 'view',
					'table' => null,
					'url' => '' 
				) 
			),
			'id_form' => array(
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
			'interpret1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpret2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpret3' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpret4' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpretation1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpretation2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpretation3' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpretation4' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpretdate1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpretdate2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpretdate3' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpretdate4' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpreterID1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpreterID2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpreterID3' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'interpreterID4' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'ownership' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'percentage' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'property_address' => array(
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
			'salesperson' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'salesperson_address' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'salesperson_cea' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'salesperson_contact' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'salesperson_ic' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller1_address' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller1_id' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller2_address' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller2_id' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller3' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller3_address' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller3_id' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller4' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller4_address' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'seller4_id' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign3' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign4' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign5' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign6' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_agent' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_date1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_date2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_date3' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_date4' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_interpreter1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_interpreter2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_interpreter3' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_interpreter4' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_seller1' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_seller2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_seller3' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_seller4' => array(
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
			'title' => array(
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
	$runnerTableLabels['form1'] = array(
	'tableCaption' => 'Prescribed Form 1',
	'fieldLabels' => array(
		'id' => '',
		'id_form' => 'Id Form',
		'id_tx' => 'Id Txn',
		'category' => 'Category',
		'representing' => 'Representing',
		'salesperson' => 'Name of Salesperson:',
		'salesperson_cea' => 'Salesperson Registration No.:',
		'salesperson_contact' => 'Telephone number:',
		'estateagent' => 'Name of Estate Agent:',
		'estateagent_cea' => 'License No.',
		'property_address' => '',
		'comm' => '',
		'percentage' => '',
		'GST' => '',
		'conflict' => '',
		'conflict_description' => '',
		'co_broke' => '',
		'ownership' => '',
		'additional_term' => 'Additional Term:',
		'date_agreement' => 'Agreement Date:',
		'title' => '',
		'form_name' => '',
		'seller1' => 'Seller (1) Name:',
		'seller1_id' => 'NRIC No.: <sup>(3)</sup>',
		'seller1_address' => 'Address:',
		'seller2' => 'Seller (2) Name:',
		'seller2_id' => 'NRIC No.: <sup>(3)</sup>',
		'seller2_address' => 'Address:',
		'seller3' => 'Seller (3) Name:',
		'seller3_id' => 'NRIC No.: <sup>(3)</sup>',
		'seller3_address' => 'Address:',
		'seller4' => 'Seller (4) Name:',
		'seller4_id' => 'NRIC No.: <sup>(3)</sup>',
		'seller4_address' => 'Address:',
		'buyer1' => 'Buyer Name:',
		'buyer1_id' => 'ID:',
		'buyer1_address' => 'Address:',
		'estateagent_address' => 'Address:',
		'gst_include' => '',
		'salesperson_ic' => 'NRIC No. <sup>(3)</sup>:',
		'salesperson_address' => 'Address:',
		'estateagent_tel' => 'Telephone number:',
		'estateagent2' => 'Name of Estate Agent:',
		'estateagent_cea2' => 'Estate Agent Licence No.:',
		'date_sign' => 'Date:',
		'date_sp' => 'Date of S&P:',
		'status' => 'Status',
		'docuserid' => 'Docuserid',
		'agency_or_salesperson' => '',
		'sign_agent' => 'Sign Agent',
		'sign_interpreter4' => 'Signed by Interpreter',
		'sign_interpreter3' => 'Signed by Interpreter',
		'sign_interpreter2' => 'Signed by Interpreter',
		'sign_interpreter1' => 'Signed by Interpreter',
		'interpret1' => 'Through the interpretation of',
		'interpret2' => 'Through the interpretation of',
		'interpret3' => 'Through the interpretation of',
		'interpret4' => 'Through the interpretation of',
		'interpretdate1' => 'Date:',
		'interpretdate2' => 'Date:',
		'interpretdate3' => 'Date:',
		'interpretdate4' => 'Date:',
		'sign_date1' => 'Date:',
		'sign_date2' => 'Date:',
		'sign_date3' => 'Date:',
		'sign_date4' => 'Date:',
		'sign_seller1' => 'Sign by Seller (1)',
		'sign_seller2' => 'Sign by Seller (2)',
		'sign_seller3' => 'Sign by Seller (3)',
		'sign_seller4' => 'Sign by Seller (4)',
		'interpreterID1' => 'Interpreter\'s NRIC No.<sup>(3)</sup>:',
		'interpreterID2' => 'Interpreter\'s NRIC No.<sup>(3)</sup>:',
		'interpreterID3' => 'Interpreter\'s NRIC No.<sup>(3)</sup>:',
		'interpreterID4' => 'Interpreter\'s NRIC No.<sup>(3)</sup>:',
		'interpretation1' => '',
		'interpretation2' => '',
		'interpretation3' => '',
		'interpretation4' => '',
		'sign1' => '',
		'sign2' => '',
		'sign3' => '',
		'sign4' => '',
		'sign5' => '',
		'sign6' => '',
		'estateagent_address2' => 'Address:' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'id_form' => '',
		'id_tx' => '',
		'category' => '',
		'representing' => '',
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
		'seller1' => 'Please add Seller in all parties involved, if Seller\'s name not in the dropdown list',
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
		'estateagent_address' => '',
		'gst_include' => '',
		'salesperson_ic' => '',
		'salesperson_address' => '',
		'estateagent_tel' => '',
		'estateagent2' => '',
		'estateagent_cea2' => '',
		'date_sign' => '',
		'date_sp' => '',
		'status' => '',
		'docuserid' => '',
		'agency_or_salesperson' => '',
		'sign_agent' => '',
		'sign_interpreter4' => '',
		'sign_interpreter3' => '',
		'sign_interpreter2' => '',
		'sign_interpreter1' => '',
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
		'sign_seller1' => '',
		'sign_seller2' => '',
		'sign_seller3' => '',
		'sign_seller4' => '',
		'interpreterID1' => '',
		'interpreterID2' => '',
		'interpreterID3' => '',
		'interpreterID4' => '',
		'interpretation1' => '',
		'interpretation2' => '',
		'interpretation3' => '',
		'interpretation4' => '',
		'sign1' => '',
		'sign2' => '',
		'sign3' => '',
		'sign4' => '',
		'sign5' => '',
		'sign6' => '',
		'estateagent_address2' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'id_form' => '',
		'id_tx' => '',
		'category' => '',
		'representing' => '',
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
		'estateagent_address' => '',
		'gst_include' => '',
		'salesperson_ic' => '',
		'salesperson_address' => '',
		'estateagent_tel' => '',
		'estateagent2' => '',
		'estateagent_cea2' => '',
		'date_sign' => '',
		'date_sp' => '',
		'status' => '',
		'docuserid' => '',
		'agency_or_salesperson' => '',
		'sign_agent' => '',
		'sign_interpreter4' => '',
		'sign_interpreter3' => '',
		'sign_interpreter2' => '',
		'sign_interpreter1' => '',
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
		'sign_seller1' => '',
		'sign_seller2' => '',
		'sign_seller3' => '',
		'sign_seller4' => '',
		'interpreterID1' => '',
		'interpreterID2' => '',
		'interpreterID3' => '',
		'interpreterID4' => '',
		'interpretation1' => '',
		'interpretation2' => '',
		'interpretation3' => '',
		'interpretation4' => '',
		'sign1' => '',
		'sign2' => '',
		'sign3' => '',
		'sign4' => '',
		'sign5' => '',
		'sign6' => '',
		'estateagent_address2' => '' 
	),
	'pageTitles' => array(
		'list' => 'Form 1' 
	) 
);
}
?>