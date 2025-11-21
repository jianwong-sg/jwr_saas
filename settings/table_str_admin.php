<?php
global $runnerTableSettings;
$runnerTableSettings['str-admin'] = array(
	'name' => 'str-admin',
	'type' => 1,
	'shortName' => 'str_admin',
	'pagesByType' => array(
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
		'list' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'list' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'tableOwnerIdField' => 'salesperson_nric',
	'usersOwnerIdField' => 'nric',
	'detailsBadgeColor' => '1E90FF',
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
			'index' => 52,
			'dir' => 'DESC',
			'field' => 'filing_date' 
		) 
	),
	'sql' => 'SELECT
id,
ea_name,
ea_address,
ea_contact,
ea_email,
relationship_with_subject,
officer_name1,
designation1,
report_ref,
officer_name2,
designation2,
entity_name,
country_reg,
reg_no,
reg_date,
entity_address,
entity_foreign_address,
entity_contact,
entity_director_name,
biz_activity,
bo_name,
indi_name,
indi_id,
indi_dob,
indi_nationalty,
indi_address,
indi_address_foreign,
indi_contact,
indi_occupation,
indi_employer,
indi_bank_details,
indi_bo_name,
prop_address,
prop_tenure,
prop_type,
transact_type,
transact_price,
valuation,
lease_period,
lease_period_unit,
deposit,
salesperson_name,
salesperson_nric,
suspicious_amount,
suspicious_date,
description,
reason_suspicion,
other_info,
docs_attach,
id_tx,
customer_type,
filing_date,
represnting,
party_id
FROM str
ORDER BY filing_date DESC',
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
			'tableName' => 'str' 
		),
		'ea_name' => array(
			'name' => 'ea_name',
			'goodName' => 'ea_name',
			'strField' => 'ea_name',
			'index' => 2,
			'sqlExpression' => 'ea_name',
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
					'defaultValue' => '$_SESSION["agency"]',
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
			'tableName' => 'str' 
		),
		'ea_address' => array(
			'name' => 'ea_address',
			'goodName' => 'ea_address',
			'strField' => 'ea_address',
			'index' => 3,
			'sqlExpression' => 'ea_address',
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
					'defaultValue' => '$_SESSION["agency_address"]',
					'textboxMaxLenth' => 100,
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
			'tableName' => 'str' 
		),
		'ea_contact' => array(
			'name' => 'ea_contact',
			'goodName' => 'ea_contact',
			'strField' => 'ea_contact',
			'index' => 4,
			'sqlExpression' => 'ea_contact',
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
					'defaultValue' => '$_SESSION["agency_tel"]',
					'textboxSize' => 100,
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'str' 
		),
		'ea_email' => array(
			'name' => 'ea_email',
			'goodName' => 'ea_email',
			'strField' => 'ea_email',
			'index' => 5,
			'sqlExpression' => 'ea_email',
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
					'defaultValue' => '$_SESSION["agency_email"]',
					'textboxSize' => 150,
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
			'tableName' => 'str' 
		),
		'relationship_with_subject' => array(
			'name' => 'relationship_with_subject',
			'goodName' => 'relationship_with_subject',
			'strField' => 'relationship_with_subject',
			'index' => 6,
			'sqlExpression' => 'relationship_with_subject',
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
			'tableName' => 'str' 
		),
		'officer_name1' => array(
			'name' => 'officer_name1',
			'goodName' => 'officer_name1',
			'strField' => 'officer_name1',
			'index' => 7,
			'sqlExpression' => 'officer_name1',
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
					'defaultValue' => '$_SESSION["full_name"]',
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
			'tableName' => 'str' 
		),
		'designation1' => array(
			'name' => 'designation1',
			'goodName' => 'designation1',
			'strField' => 'designation1',
			'index' => 8,
			'sqlExpression' => 'designation1',
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
					'defaultValue' => '$_SESSION["designation"]',
					'textboxSize' => 100,
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
			'tableName' => 'str' 
		),
		'report_ref' => array(
			'name' => 'report_ref',
			'goodName' => 'report_ref',
			'strField' => 'report_ref',
			'index' => 9,
			'sqlExpression' => 'report_ref',
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
					'textboxSize' => 100,
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'str' 
		),
		'officer_name2' => array(
			'name' => 'officer_name2',
			'goodName' => 'officer_name2',
			'strField' => 'officer_name2',
			'index' => 10,
			'sqlExpression' => 'officer_name2',
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
					'textboxSize' => 100,
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
			'tableName' => 'str' 
		),
		'designation2' => array(
			'name' => 'designation2',
			'goodName' => 'designation2',
			'strField' => 'designation2',
			'index' => 11,
			'sqlExpression' => 'designation2',
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
					'textboxSize' => 100,
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
			'tableName' => 'str' 
		),
		'entity_name' => array(
			'name' => 'entity_name',
			'goodName' => 'entity_name',
			'strField' => 'entity_name',
			'index' => 12,
			'sqlExpression' => 'entity_name',
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
					'defaultValue' => '$_SESSION["name"]',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupOrderBy' => 'name',
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'country_reg',
							'lookupField' => 'country_incorporation' 
						),
						array(
							'masterField' => 'reg_no',
							'lookupField' => 'registration_no' 
						),
						array(
							'masterField' => 'reg_date',
							'lookupField' => 'registration_date' 
						),
						array(
							'masterField' => 'entity_address',
							'lookupField' => 'address' 
						),
						array(
							'masterField' => 'entity_contact',
							'lookupField' => 'office_tel' 
						),
						array(
							'masterField' => 'entity_director_name',
							'lookupField' => 'contact_person' 
						),
						array(
							'masterField' => 'biz_activity',
							'lookupField' => 'trade' 
						),
						array(
							'masterField' => 'entity_postal',
							'lookupField' => 'postal' 
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
			'tableName' => 'str' 
		),
		'country_reg' => array(
			'name' => 'country_reg',
			'goodName' => 'country_reg',
			'strField' => 'country_reg',
			'index' => 13,
			'sqlExpression' => 'country_reg',
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
					'defaultValue' => '$_SESSION["country_incorporation"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'country_incorporation',
					'lookupDisplayField' => 'country_incorporation',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'entity_name',
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
			'tableName' => 'str' 
		),
		'reg_no' => array(
			'name' => 'reg_no',
			'goodName' => 'reg_no',
			'strField' => 'reg_no',
			'index' => 14,
			'sqlExpression' => 'reg_no',
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
					'defaultValue' => '$_SESSION["nric"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'registration_no',
					'lookupDisplayField' => 'registration_no',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'entity_name',
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
			'tableName' => 'str' 
		),
		'reg_date' => array(
			'name' => 'reg_date',
			'goodName' => 'reg_date',
			'strField' => 'reg_date',
			'index' => 15,
			'type' => 7,
			'sqlExpression' => 'reg_date',
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
					'defaultValue' => '$_SESSION["reg_date"]',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'registration_date',
					'lookupDisplayField' => 'registration_date',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'entity_name',
							'lookupField' => 'name' 
						) 
					),
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
			'tableName' => 'str' 
		),
		'entity_address' => array(
			'name' => 'entity_address',
			'goodName' => 'entity_address',
			'strField' => 'entity_address',
			'index' => 16,
			'sqlExpression' => 'entity_address',
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
					'defaultValue' => '$_SESSION["address"]',
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'textareaHeight' => 50,
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'address',
					'lookupDisplayField' => 'address',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'entity_name',
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
			'tableName' => 'str' 
		),
		'entity_foreign_address' => array(
			'name' => 'entity_foreign_address',
			'goodName' => 'entity_foreign_address',
			'strField' => 'entity_foreign_address',
			'index' => 17,
			'sqlExpression' => 'entity_foreign_address',
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
					'textboxMaxLenth' => 100,
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
			'tableName' => 'str' 
		),
		'entity_contact' => array(
			'name' => 'entity_contact',
			'goodName' => 'entity_contact',
			'strField' => 'entity_contact',
			'index' => 18,
			'sqlExpression' => 'entity_contact',
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
					'defaultValue' => '$_SESSION["office_tel"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'office_tel',
					'lookupDisplayField' => 'office_tel',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'entity_name',
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
			'tableName' => 'str' 
		),
		'entity_director_name' => array(
			'name' => 'entity_director_name',
			'goodName' => 'entity_director_name',
			'strField' => 'entity_director_name',
			'index' => 19,
			'sqlExpression' => 'entity_director_name',
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
					'defaultValue' => '$_SESSION["contact_person"]',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'contact_person',
					'lookupDisplayField' => 'contact_person',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'entity_name',
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
			'tableName' => 'str' 
		),
		'biz_activity' => array(
			'name' => 'biz_activity',
			'goodName' => 'biz_activity',
			'strField' => 'biz_activity',
			'index' => 20,
			'sqlExpression' => 'biz_activity',
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
					'defaultValue' => '$_SESSION["trade"]',
					'textboxMaxLenth' => 200,
					'textHTML5Input' => '0',
					'textareaHeight' => 50,
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'trade',
					'lookupDisplayField' => 'trade',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'entity_name',
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
			'tableName' => 'str' 
		),
		'bo_name' => array(
			'name' => 'bo_name',
			'goodName' => 'bo_name',
			'strField' => 'bo_name',
			'index' => 21,
			'sqlExpression' => 'bo_name',
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
			'tableName' => 'str' 
		),
		'indi_name' => array(
			'name' => 'indi_name',
			'goodName' => 'indi_name',
			'strField' => 'indi_name',
			'index' => 22,
			'sqlExpression' => 'indi_name',
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
					'defaultValue' => '$_SESSION["indiv_name"]',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupOrderBy' => 'name',
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'indi_id',
							'lookupField' => 'nric' 
						),
						array(
							'masterField' => 'indi_dob',
							'lookupField' => 'date_of_birth' 
						),
						array(
							'masterField' => 'indi_nationalty',
							'lookupField' => 'nationality' 
						),
						array(
							'masterField' => 'indi_address',
							'lookupField' => 'address' 
						),
						array(
							'masterField' => 'indi_contact',
							'lookupField' => 'mobile' 
						),
						array(
							'masterField' => 'indi_occupation',
							'lookupField' => 'occupation' 
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
			'tableName' => 'str' 
		),
		'indi_id' => array(
			'name' => 'indi_id',
			'goodName' => 'indi_id',
			'strField' => 'indi_id',
			'index' => 23,
			'sqlExpression' => 'indi_id',
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
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
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
							'masterField' => 'indi_name',
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
			'tableName' => 'str' 
		),
		'indi_dob' => array(
			'name' => 'indi_dob',
			'goodName' => 'indi_dob',
			'strField' => 'indi_dob',
			'index' => 24,
			'type' => 7,
			'sqlExpression' => 'indi_dob',
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
					'textboxSize' => 100,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'date_of_birth',
					'lookupDisplayField' => 'date_of_birth',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'indi_name',
							'lookupField' => 'name' 
						) 
					),
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
			'tableName' => 'str' 
		),
		'indi_nationalty' => array(
			'name' => 'indi_nationalty',
			'goodName' => 'indi_nationalty',
			'strField' => 'indi_nationalty',
			'index' => 25,
			'sqlExpression' => 'indi_nationalty',
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
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nationality',
					'lookupDisplayField' => 'nationality',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'indi_name',
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
			'tableName' => 'str' 
		),
		'indi_address' => array(
			'name' => 'indi_address',
			'goodName' => 'indi_address',
			'strField' => 'indi_address',
			'index' => 26,
			'sqlExpression' => 'indi_address',
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
							'masterField' => 'indi_name',
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
			'tableName' => 'str' 
		),
		'indi_address_foreign' => array(
			'name' => 'indi_address_foreign',
			'goodName' => 'indi_address_foreign',
			'strField' => 'indi_address_foreign',
			'index' => 27,
			'sqlExpression' => 'indi_address_foreign',
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
					'textboxMaxLenth' => 100,
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
			'tableName' => 'str' 
		),
		'indi_contact' => array(
			'name' => 'indi_contact',
			'goodName' => 'indi_contact',
			'strField' => 'indi_contact',
			'index' => 28,
			'sqlExpression' => 'indi_contact',
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
					'textboxSize' => 100,
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
							'masterField' => 'indi_name',
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
			'tableName' => 'str' 
		),
		'indi_occupation' => array(
			'name' => 'indi_occupation',
			'goodName' => 'indi_occupation',
			'strField' => 'indi_occupation',
			'index' => 29,
			'sqlExpression' => 'indi_occupation',
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
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'occupation',
					'lookupDisplayField' => 'occupation',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'indi_name',
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
			'tableName' => 'str' 
		),
		'indi_employer' => array(
			'name' => 'indi_employer',
			'goodName' => 'indi_employer',
			'strField' => 'indi_employer',
			'index' => 30,
			'sqlExpression' => 'indi_employer',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'str' 
		),
		'indi_bank_details' => array(
			'name' => 'indi_bank_details',
			'goodName' => 'indi_bank_details',
			'strField' => 'indi_bank_details',
			'index' => 31,
			'sqlExpression' => 'indi_bank_details',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'str' 
		),
		'indi_bo_name' => array(
			'name' => 'indi_bo_name',
			'goodName' => 'indi_bo_name',
			'strField' => 'indi_bo_name',
			'index' => 32,
			'sqlExpression' => 'indi_bo_name',
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
			'tableName' => 'str' 
		),
		'prop_address' => array(
			'name' => 'prop_address',
			'goodName' => 'prop_address',
			'strField' => 'prop_address',
			'index' => 33,
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
					'format' => 'Text area',
					'defaultValue' => '$_SESSION["prop_address"]',
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'textareaHeight' => 50,
					'lookupTable' => 'prop_data',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'prop_address',
					'lookupDisplayField' => 'prop_address',
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
			'tableName' => 'str' 
		),
		'prop_tenure' => array(
			'name' => 'prop_tenure',
			'goodName' => 'prop_tenure',
			'strField' => 'prop_tenure',
			'index' => 34,
			'sqlExpression' => 'prop_tenure',
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
					'defaultValue' => '$_SESSION["tenure"]',
					'textboxSize' => 120,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Leasehold',
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
			'tableName' => 'str' 
		),
		'prop_type' => array(
			'name' => 'prop_type',
			'goodName' => 'prop_type',
			'strField' => 'prop_type',
			'index' => 35,
			'sqlExpression' => 'prop_type',
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
					'defaultValue' => '$_SESSION["prop_type"]',
					'textboxSize' => 120,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupValues' => array( 
						'HDB',
						'Private' 
					),
					'lookupTable' => 'prop_type',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'property_type',
					'lookupDisplayField' => 'property_type',
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
			'tableName' => 'str' 
		),
		'transact_type' => array(
			'name' => 'transact_type',
			'goodName' => 'transact_type',
			'strField' => 'transact_type',
			'index' => 36,
			'sqlExpression' => 'transact_type',
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
					'textboxSize' => 120,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Sale',
						'Lease' 
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
			'tableName' => 'str' 
		),
		'transact_price' => array(
			'name' => 'transact_price',
			'goodName' => 'transact_price',
			'strField' => 'transact_price',
			'index' => 37,
			'sqlExpression' => 'transact_price',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'defaultValue' => '$_SESSION["transacted_price"]',
					'textboxSize' => 100,
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'str' 
		),
		'valuation' => array(
			'name' => 'valuation',
			'goodName' => 'valuation',
			'strField' => 'valuation',
			'index' => 38,
			'sqlExpression' => 'valuation',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'defaultValue' => '$_SESSION["valuation_price"]',
					'textboxSize' => 100,
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'str' 
		),
		'lease_period' => array(
			'name' => 'lease_period',
			'goodName' => 'lease_period',
			'strField' => 'lease_period',
			'index' => 39,
			'sqlExpression' => 'lease_period',
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
					'defaultValue' => '$_SESSION["lease_period"]',
					'textboxSize' => 150,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'lease_tenure1',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'lease_tenure1',
					'lookupDisplayField' => 'lease_tenure1',
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
			'tableName' => 'str' 
		),
		'lease_period_unit' => array(
			'name' => 'lease_period_unit',
			'goodName' => 'lease_period_unit',
			'strField' => 'lease_period_unit',
			'sourceSingle' => 'lease_period_unit',
			'index' => 40,
			'sqlExpression' => 'lease_period_unit',
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
			'tableName' => 'str' 
		),
		'deposit' => array(
			'name' => 'deposit',
			'goodName' => 'deposit',
			'strField' => 'deposit',
			'index' => 41,
			'sqlExpression' => 'deposit',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'textboxSize' => 100,
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'str' 
		),
		'salesperson_name' => array(
			'name' => 'salesperson_name',
			'goodName' => 'salesperson_name',
			'strField' => 'salesperson_name',
			'index' => 42,
			'sqlExpression' => 'salesperson_name',
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
					'defaultValue' => '$_SESSION["salesperson_name"]',
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
			'tableName' => 'str' 
		),
		'salesperson_nric' => array(
			'name' => 'salesperson_nric',
			'goodName' => 'salesperson_nric',
			'strField' => 'salesperson_nric',
			'index' => 43,
			'sqlExpression' => 'salesperson_nric',
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
					'defaultValue' => '$_SESSION["salesperson_nric"]',
					'textboxSize' => 100,
					'textboxMaxLenth' => 15,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupOrderBy' => 'name',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'salesperson_name',
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
			'tableName' => 'str' 
		),
		'suspicious_amount' => array(
			'name' => 'suspicious_amount',
			'goodName' => 'suspicious_amount',
			'strField' => 'suspicious_amount',
			'index' => 44,
			'sqlExpression' => 'suspicious_amount',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'textboxSize' => 100,
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'str' 
		),
		'suspicious_date' => array(
			'name' => 'suspicious_date',
			'goodName' => 'suspicious_date',
			'strField' => 'suspicious_date',
			'index' => 45,
			'type' => 7,
			'sqlExpression' => 'suspicious_date',
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
					'textboxSize' => 100,
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
			'tableName' => 'str' 
		),
		'description' => array(
			'name' => 'description',
			'goodName' => 'description',
			'strField' => 'description',
			'index' => 46,
			'sqlExpression' => 'description',
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
			'tableName' => 'str' 
		),
		'reason_suspicion' => array(
			'name' => 'reason_suspicion',
			'goodName' => 'reason_suspicion',
			'strField' => 'reason_suspicion',
			'index' => 47,
			'sqlExpression' => 'reason_suspicion',
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
			'tableName' => 'str' 
		),
		'other_info' => array(
			'name' => 'other_info',
			'goodName' => 'other_info',
			'strField' => 'other_info',
			'index' => 48,
			'sqlExpression' => 'other_info',
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
					'textboxSize' => 50,
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
			'tableName' => 'str' 
		),
		'docs_attach' => array(
			'name' => 'docs_attach',
			'goodName' => 'docs_attach',
			'strField' => 'docs_attach',
			'index' => 49,
			'type' => 201,
			'sqlExpression' => 'docs_attach',
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
			'tableName' => 'str' 
		),
		'id_tx' => array(
			'name' => 'id_tx',
			'goodName' => 'id_tx',
			'strField' => 'id_tx',
			'index' => 50,
			'type' => 3,
			'sqlExpression' => 'id_tx',
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
					'defaultValue' => '$_SESSION["id"]',
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
			'tableName' => 'str' 
		),
		'customer_type' => array(
			'name' => 'customer_type',
			'goodName' => 'customer_type',
			'strField' => 'customer_type',
			'index' => 51,
			'sqlExpression' => 'customer_type',
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
					'lookupType' => 2,
					'lookupValues' => array( 
						'ENTITY',
						'INDIVIDUAL' 
					),
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'cus_type',
					'lookupDisplayField' => 'cus_type',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'party_id',
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
			'tableName' => 'str' 
		),
		'filing_date' => array(
			'name' => 'filing_date',
			'goodName' => 'filing_date',
			'strField' => 'filing_date',
			'index' => 52,
			'type' => 7,
			'sqlExpression' => 'filing_date',
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
			'tableName' => 'str' 
		),
		'represnting' => array(
			'name' => 'represnting',
			'goodName' => 'represnting',
			'strField' => 'represnting',
			'index' => 53,
			'sqlExpression' => 'represnting',
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
					'defaultValue' => '$_SESSION["representing"]',
					'textboxSize' => 100,
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
			'tableName' => 'str' 
		),
		'party_id' => array(
			'name' => 'party_id',
			'goodName' => 'party_id',
			'strField' => 'party_id',
			'index' => 54,
			'sqlExpression' => 'party_id',
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
					'defaultValue' => '$_SESSION[party_id]',
					'validateAs' => 'Number',
					'textboxSize' => 100,
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
			'tableName' => 'str' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
id,
ea_name,
ea_address,
ea_contact,
ea_email,
relationship_with_subject,
officer_name1,
designation1,
report_ref,
officer_name2,
designation2,
entity_name,
country_reg,
reg_no,
reg_date,
entity_address,
entity_foreign_address,
entity_contact,
entity_director_name,
biz_activity,
bo_name,
indi_name,
indi_id,
indi_dob,
indi_nationalty,
indi_address,
indi_address_foreign,
indi_contact,
indi_occupation,
indi_employer,
indi_bank_details,
indi_bo_name,
prop_address,
prop_tenure,
prop_type,
transact_type,
transact_price,
valuation,
lease_period,
lease_period_unit,
deposit,
salesperson_name,
salesperson_nric,
suspicious_amount,
suspicious_date,
description,
reason_suspicion,
other_info,
docs_attach,
id_tx,
customer_type,
filing_date,
represnting,
party_id
FROM str
ORDER BY filing_date DESC',
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
					'table' => 'str',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'ea_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'ea_name' 
				),
				'encrypted' => false,
				'columnName' => 'ea_name' 
			),
			array(
				'sql' => 'ea_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'ea_address' 
				),
				'encrypted' => false,
				'columnName' => 'ea_address' 
			),
			array(
				'sql' => 'ea_contact',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'ea_contact' 
				),
				'encrypted' => false,
				'columnName' => 'ea_contact' 
			),
			array(
				'sql' => 'ea_email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'ea_email' 
				),
				'encrypted' => false,
				'columnName' => 'ea_email' 
			),
			array(
				'sql' => 'relationship_with_subject',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'relationship_with_subject' 
				),
				'encrypted' => false,
				'columnName' => 'relationship_with_subject' 
			),
			array(
				'sql' => 'officer_name1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'officer_name1' 
				),
				'encrypted' => false,
				'columnName' => 'officer_name1' 
			),
			array(
				'sql' => 'designation1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'designation1' 
				),
				'encrypted' => false,
				'columnName' => 'designation1' 
			),
			array(
				'sql' => 'report_ref',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'report_ref' 
				),
				'encrypted' => false,
				'columnName' => 'report_ref' 
			),
			array(
				'sql' => 'officer_name2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'officer_name2' 
				),
				'encrypted' => false,
				'columnName' => 'officer_name2' 
			),
			array(
				'sql' => 'designation2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'designation2' 
				),
				'encrypted' => false,
				'columnName' => 'designation2' 
			),
			array(
				'sql' => 'entity_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'entity_name' 
				),
				'encrypted' => false,
				'columnName' => 'entity_name' 
			),
			array(
				'sql' => 'country_reg',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'country_reg' 
				),
				'encrypted' => false,
				'columnName' => 'country_reg' 
			),
			array(
				'sql' => 'reg_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'reg_no' 
				),
				'encrypted' => false,
				'columnName' => 'reg_no' 
			),
			array(
				'sql' => 'reg_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'reg_date' 
				),
				'encrypted' => false,
				'columnName' => 'reg_date' 
			),
			array(
				'sql' => 'entity_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'entity_address' 
				),
				'encrypted' => false,
				'columnName' => 'entity_address' 
			),
			array(
				'sql' => 'entity_foreign_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'entity_foreign_address' 
				),
				'encrypted' => false,
				'columnName' => 'entity_foreign_address' 
			),
			array(
				'sql' => 'entity_contact',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'entity_contact' 
				),
				'encrypted' => false,
				'columnName' => 'entity_contact' 
			),
			array(
				'sql' => 'entity_director_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'entity_director_name' 
				),
				'encrypted' => false,
				'columnName' => 'entity_director_name' 
			),
			array(
				'sql' => 'biz_activity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'biz_activity' 
				),
				'encrypted' => false,
				'columnName' => 'biz_activity' 
			),
			array(
				'sql' => 'bo_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'bo_name' 
				),
				'encrypted' => false,
				'columnName' => 'bo_name' 
			),
			array(
				'sql' => 'indi_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_name' 
				),
				'encrypted' => false,
				'columnName' => 'indi_name' 
			),
			array(
				'sql' => 'indi_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_id' 
				),
				'encrypted' => false,
				'columnName' => 'indi_id' 
			),
			array(
				'sql' => 'indi_dob',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_dob' 
				),
				'encrypted' => false,
				'columnName' => 'indi_dob' 
			),
			array(
				'sql' => 'indi_nationalty',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_nationalty' 
				),
				'encrypted' => false,
				'columnName' => 'indi_nationalty' 
			),
			array(
				'sql' => 'indi_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_address' 
				),
				'encrypted' => false,
				'columnName' => 'indi_address' 
			),
			array(
				'sql' => 'indi_address_foreign',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_address_foreign' 
				),
				'encrypted' => false,
				'columnName' => 'indi_address_foreign' 
			),
			array(
				'sql' => 'indi_contact',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_contact' 
				),
				'encrypted' => false,
				'columnName' => 'indi_contact' 
			),
			array(
				'sql' => 'indi_occupation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_occupation' 
				),
				'encrypted' => false,
				'columnName' => 'indi_occupation' 
			),
			array(
				'sql' => 'indi_employer',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_employer' 
				),
				'encrypted' => false,
				'columnName' => 'indi_employer' 
			),
			array(
				'sql' => 'indi_bank_details',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_bank_details' 
				),
				'encrypted' => false,
				'columnName' => 'indi_bank_details' 
			),
			array(
				'sql' => 'indi_bo_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'indi_bo_name' 
				),
				'encrypted' => false,
				'columnName' => 'indi_bo_name' 
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
					'table' => 'str',
					'name' => 'prop_address' 
				),
				'encrypted' => false,
				'columnName' => 'prop_address' 
			),
			array(
				'sql' => 'prop_tenure',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'prop_tenure' 
				),
				'encrypted' => false,
				'columnName' => 'prop_tenure' 
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
					'table' => 'str',
					'name' => 'prop_type' 
				),
				'encrypted' => false,
				'columnName' => 'prop_type' 
			),
			array(
				'sql' => 'transact_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'transact_type' 
				),
				'encrypted' => false,
				'columnName' => 'transact_type' 
			),
			array(
				'sql' => 'transact_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'transact_price' 
				),
				'encrypted' => false,
				'columnName' => 'transact_price' 
			),
			array(
				'sql' => 'valuation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'valuation' 
				),
				'encrypted' => false,
				'columnName' => 'valuation' 
			),
			array(
				'sql' => 'lease_period',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'lease_period' 
				),
				'encrypted' => false,
				'columnName' => 'lease_period' 
			),
			array(
				'sql' => 'lease_period_unit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'lease_period_unit' 
				),
				'encrypted' => false,
				'columnName' => 'lease_period_unit' 
			),
			array(
				'sql' => 'deposit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'deposit' 
				),
				'encrypted' => false,
				'columnName' => 'deposit' 
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
					'table' => 'str',
					'name' => 'salesperson_name' 
				),
				'encrypted' => false,
				'columnName' => 'salesperson_name' 
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
					'table' => 'str',
					'name' => 'salesperson_nric' 
				),
				'encrypted' => false,
				'columnName' => 'salesperson_nric' 
			),
			array(
				'sql' => 'suspicious_amount',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'suspicious_amount' 
				),
				'encrypted' => false,
				'columnName' => 'suspicious_amount' 
			),
			array(
				'sql' => 'suspicious_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'suspicious_date' 
				),
				'encrypted' => false,
				'columnName' => 'suspicious_date' 
			),
			array(
				'sql' => 'description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'description' 
				),
				'encrypted' => false,
				'columnName' => 'description' 
			),
			array(
				'sql' => 'reason_suspicion',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'reason_suspicion' 
				),
				'encrypted' => false,
				'columnName' => 'reason_suspicion' 
			),
			array(
				'sql' => 'other_info',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'other_info' 
				),
				'encrypted' => false,
				'columnName' => 'other_info' 
			),
			array(
				'sql' => 'docs_attach',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'docs_attach' 
				),
				'encrypted' => false,
				'columnName' => 'docs_attach' 
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
					'table' => 'str',
					'name' => 'id_tx' 
				),
				'encrypted' => false,
				'columnName' => 'id_tx' 
			),
			array(
				'sql' => 'customer_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'customer_type' 
				),
				'encrypted' => false,
				'columnName' => 'customer_type' 
			),
			array(
				'sql' => 'filing_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'filing_date' 
				),
				'encrypted' => false,
				'columnName' => 'filing_date' 
			),
			array(
				'sql' => 'represnting',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'represnting' 
				),
				'encrypted' => false,
				'columnName' => 'represnting' 
			),
			array(
				'sql' => 'party_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'party_id' 
				),
				'encrypted' => false,
				'columnName' => 'party_id' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'str',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'str',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'ea_name',
						'ea_address',
						'ea_contact',
						'ea_email',
						'relationship_with_subject',
						'officer_name1',
						'designation1',
						'report_ref',
						'officer_name2',
						'designation2',
						'entity_name',
						'country_reg',
						'reg_no',
						'reg_date',
						'entity_address',
						'entity_foreign_address',
						'entity_contact',
						'entity_director_name',
						'biz_activity',
						'bo_name',
						'indi_name',
						'indi_id',
						'indi_dob',
						'indi_nationalty',
						'indi_address',
						'indi_address_foreign',
						'indi_contact',
						'indi_occupation',
						'indi_employer',
						'indi_bank_details',
						'indi_bo_name',
						'prop_address',
						'prop_tenure',
						'prop_type',
						'transact_type',
						'transact_price',
						'valuation',
						'lease_period',
						'deposit',
						'salesperson_name',
						'salesperson_nric',
						'suspicious_amount',
						'suspicious_date',
						'description',
						'reason_suspicion',
						'other_info',
						'docs_attach',
						'id_tx',
						'ea_postal',
						'entity_postal',
						'indi_postal',
						'prop_postal',
						'customer_type',
						'filing_date',
						'represnting',
						'party_id',
						'lease_period_unit' 
					),
					'name' => 'str' 
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
				'sql' => 'filing_date DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'str',
					'name' => 'filing_date' 
				),
				'asc' => false,
				'columnNumber' => 52 
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
				'orderByIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
ea_name,
ea_address,
ea_contact,
ea_email,
relationship_with_subject,
officer_name1,
designation1,
report_ref,
officer_name2,
designation2,
entity_name,
country_reg,
reg_no,
reg_date,
entity_address,
entity_foreign_address,
entity_contact,
entity_director_name,
biz_activity,
bo_name,
indi_name,
indi_id,
indi_dob,
indi_nationalty,
indi_address,
indi_address_foreign,
indi_contact,
indi_occupation,
indi_employer,
indi_bank_details,
indi_bo_name,
prop_address,
prop_tenure,
prop_type,
transact_type,
transact_price,
valuation,
lease_period,
lease_period_unit,
deposit,
salesperson_name,
salesperson_nric,
suspicious_amount,
suspicious_date,
description,
reason_suspicion,
other_info,
docs_attach,
id_tx,
customer_type,
filing_date,
represnting,
party_id',
		'fromListSql' => 'FROM str',
		'orderBySql' => 'ORDER BY filing_date DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'str',
	'originalPagesByType' => array(
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
		'list' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'list' => 'list',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'ea_name',
			'ea_address',
			'ea_contact',
			'ea_email',
			'relationship_with_subject',
			'officer_name1',
			'designation1',
			'report_ref',
			'officer_name2',
			'designation2',
			'entity_name',
			'country_reg',
			'reg_no',
			'reg_date',
			'entity_address',
			'entity_foreign_address',
			'entity_contact',
			'entity_director_name',
			'biz_activity',
			'bo_name',
			'indi_name',
			'indi_id',
			'indi_dob',
			'indi_nationalty',
			'indi_address',
			'indi_address_foreign',
			'indi_contact',
			'indi_occupation',
			'indi_employer',
			'indi_bank_details',
			'indi_bo_name',
			'prop_address',
			'prop_tenure',
			'prop_type',
			'transact_type',
			'transact_price',
			'valuation',
			'lease_period',
			'lease_period_unit',
			'deposit',
			'salesperson_name',
			'salesperson_nric',
			'suspicious_amount',
			'suspicious_date',
			'description',
			'reason_suspicion',
			'other_info',
			'docs_attach',
			'id_tx',
			'customer_type',
			'filing_date',
			'represnting',
			'party_id' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'ea_name',
			'ea_address',
			'ea_contact',
			'ea_email',
			'relationship_with_subject',
			'officer_name1',
			'designation1',
			'report_ref',
			'officer_name2',
			'designation2',
			'entity_name',
			'country_reg',
			'reg_no',
			'reg_date',
			'entity_address',
			'entity_foreign_address',
			'entity_contact',
			'entity_director_name',
			'biz_activity',
			'bo_name',
			'indi_name',
			'indi_id',
			'indi_dob',
			'indi_nationalty',
			'indi_address',
			'indi_address_foreign',
			'indi_contact',
			'indi_occupation',
			'indi_employer',
			'indi_bank_details',
			'indi_bo_name',
			'prop_address',
			'prop_tenure',
			'prop_type',
			'transact_type',
			'transact_price',
			'valuation',
			'lease_period',
			'lease_period_unit',
			'deposit',
			'salesperson_name',
			'salesperson_nric',
			'suspicious_amount',
			'suspicious_date',
			'description',
			'reason_suspicion',
			'other_info',
			'docs_attach',
			'id_tx',
			'customer_type',
			'filing_date',
			'represnting',
			'party_id' 
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
	$runnerTableLabels['str-admin'] = array(
	'tableCaption' => 'Str-admin',
	'fieldLabels' => array(
		'id' => 'Id',
		'ea_name' => 'Estate Agent',
		'ea_address' => 'Address',
		'ea_contact' => 'Contact No.',
		'ea_email' => 'Email',
		'relationship_with_subject' => 'Biz Relationship with Subject of Interest',
		'officer_name1' => 'Name of Officer',
		'designation1' => 'Designation',
		'report_ref' => 'Report Ref No.',
		'officer_name2' => 'Contact Office (if different from above)',
		'designation2' => 'Designation',
		'entity_name' => 'Entity',
		'country_reg' => 'Country of Registration',
		'reg_no' => 'Reg. No',
		'reg_date' => 'Reg. Date',
		'entity_address' => 'Address',
		'entity_foreign_address' => 'Foreign Address (if any)',
		'entity_contact' => 'Contact No.',
		'entity_director_name' => 'Name of CEO/Partners/Sole-Proprietors or Trustees (if available)',
		'biz_activity' => 'Main Biz Activity',
		'bo_name' => 'Name of Beneficial Owner (if entity is not the true owner)',
		'indi_name' => 'Name of Subject',
		'indi_id' => 'NRIC/Passport No./Other ID',
		'indi_dob' => 'Date of Birth',
		'indi_nationalty' => 'Nationalty',
		'indi_address' => 'Address',
		'indi_address_foreign' => 'Foreign Address (if any)',
		'indi_contact' => 'Contact No.',
		'indi_occupation' => 'Occupation',
		'indi_employer' => 'Employer Details (if available)',
		'indi_bank_details' => 'Bank Ac. Details (if applicable)',
		'indi_bo_name' => 'Name of Beneficial Owner (if individual is not the true owner)',
		'prop_address' => 'Prop Address',
		'prop_tenure' => 'Tenure',
		'prop_type' => 'Type',
		'transact_type' => 'Type of Txn',
		'transact_price' => 'Txn/Rental Price',
		'valuation' => 'Valuation Price (for sale transaction)',
		'lease_period' => 'Lease Period',
		'lease_period_unit' => 'Lease Period Unit',
		'deposit' => 'Deposit Amount',
		'salesperson_name' => 'Salesperson',
		'salesperson_nric' => 'NRIC of Salesperson',
		'suspicious_amount' => 'Amount',
		'suspicious_date' => 'Date',
		'description' => 'Description of Txn',
		'reason_suspicion' => 'Reason for Suspicion',
		'other_info' => 'Other Relevant Information',
		'docs_attach' => 'Customer ID documents, relevant documents supporting the Suspicious Transaction (s)',
		'id_tx' => 'Id Txn',
		'customer_type' => 'Customer Type',
		'filing_date' => 'Filing Date',
		'represnting' => 'Represnting',
		'party_id' => 'Party Id' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'ea_name' => '',
		'ea_address' => '',
		'ea_contact' => '',
		'ea_email' => '',
		'relationship_with_subject' => '',
		'officer_name1' => '',
		'designation1' => '',
		'report_ref' => '',
		'officer_name2' => '',
		'designation2' => '',
		'entity_name' => '',
		'country_reg' => '',
		'reg_no' => '',
		'reg_date' => '',
		'entity_address' => '',
		'entity_foreign_address' => '',
		'entity_contact' => '',
		'entity_director_name' => '',
		'biz_activity' => '',
		'bo_name' => '',
		'indi_name' => '',
		'indi_id' => '',
		'indi_dob' => '',
		'indi_nationalty' => '',
		'indi_address' => '',
		'indi_address_foreign' => '',
		'indi_contact' => '',
		'indi_occupation' => '',
		'indi_employer' => '',
		'indi_bank_details' => '',
		'indi_bo_name' => '',
		'prop_address' => '',
		'prop_tenure' => '',
		'prop_type' => '',
		'transact_type' => '',
		'transact_price' => '',
		'valuation' => '',
		'lease_period' => '',
		'lease_period_unit' => '',
		'deposit' => '',
		'salesperson_name' => '',
		'salesperson_nric' => '',
		'suspicious_amount' => '',
		'suspicious_date' => '',
		'description' => '',
		'reason_suspicion' => '',
		'other_info' => '',
		'docs_attach' => '',
		'id_tx' => '',
		'customer_type' => '',
		'filing_date' => '',
		'represnting' => '',
		'party_id' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'ea_name' => '',
		'ea_address' => '',
		'ea_contact' => '',
		'ea_email' => '',
		'relationship_with_subject' => '',
		'officer_name1' => '',
		'designation1' => '',
		'report_ref' => '',
		'officer_name2' => '',
		'designation2' => '',
		'entity_name' => '',
		'country_reg' => '',
		'reg_no' => '',
		'reg_date' => '',
		'entity_address' => '',
		'entity_foreign_address' => '',
		'entity_contact' => '',
		'entity_director_name' => '',
		'biz_activity' => '',
		'bo_name' => '',
		'indi_name' => '',
		'indi_id' => '',
		'indi_dob' => '',
		'indi_nationalty' => '',
		'indi_address' => '',
		'indi_address_foreign' => '',
		'indi_contact' => '',
		'indi_occupation' => '',
		'indi_employer' => '',
		'indi_bank_details' => '',
		'indi_bo_name' => '',
		'prop_address' => '',
		'prop_tenure' => '',
		'prop_type' => '',
		'transact_type' => '',
		'transact_price' => '',
		'valuation' => '',
		'lease_period' => '',
		'lease_period_unit' => '',
		'deposit' => '',
		'salesperson_name' => '',
		'salesperson_nric' => '',
		'suspicious_amount' => '',
		'suspicious_date' => '',
		'description' => '',
		'reason_suspicion' => '',
		'other_info' => '',
		'docs_attach' => '',
		'id_tx' => '',
		'customer_type' => '',
		'filing_date' => '',
		'represnting' => '',
		'party_id' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>