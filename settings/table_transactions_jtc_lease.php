<?php
global $runnerTableSettings;
$runnerTableSettings['transactions_jtc_lease'] = array(
	'name' => 'transactions_jtc_lease',
	'type' => 1,
	'shortName' => 'transactions_jtc_lease',
	'pagesByType' => array(
		'list' => array( 
			'list' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'list' => 'list',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search',
		'view' => 'view' 
	),
	'tableOwnerIdField' => 'cea_reg',
	'usersOwnerIdField' => 'active',
	'listAjax' => true,
	'afterEditAction' => 2,
	'afterAddAction' => 3,
	'detailsBadgeColor' => '778899',
	'pageSizeRecords' => 5,
	'pageSizeSelectorRecords' => array( 
		'5',
		'10',
		'20',
		'30',
		'50',
		'100',
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
			'index' => 13,
			'dir' => 'DESC',
			'field' => 'date' 
		),
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
prop_name,
prop_address,
cea_reg,
concat(lease_duration_no, \' \', lease_duration_unit) AS lease_duration,
land,
tenure,
concat(rental_price, \' \', rental_price_type) AS rental,
`date`,
service_commencement,
service_completion,
`result`,
built_up,
built_up_unit,
land_unit
FROM transactions
ORDER BY `date` DESC, id DESC',
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
					'textboxSize' => 100,
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
					'textboxSize' => 250,
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
					'textboxSize' => 150,
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
		'prop_name' => array(
			'name' => 'prop_name',
			'goodName' => 'prop_name',
			'strField' => 'prop_name',
			'index' => 6,
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
		'prop_address' => array(
			'name' => 'prop_address',
			'goodName' => 'prop_address',
			'strField' => 'prop_address',
			'index' => 7,
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
					'textboxMaxLenth' => 200,
					'textHTML5Input' => '0',
					'textareaHeight' => 50,
					'lookupType' => 2,
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'prop_address',
					'lookupDisplayField' => 'prop_address',
					'lookupAllowAdd' => true,
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'tenure',
							'lookupField' => 'tenure' 
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
		'cea_reg' => array(
			'name' => 'cea_reg',
			'goodName' => 'cea_reg',
			'strField' => 'cea_reg',
			'index' => 8,
			'type' => 201,
			'sqlExpression' => 'cea_reg',
			'uploadFolder' => '',
			'codeUploadFolderLang' => '',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '$value="CEA: ".$value;',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
							'masterField' => 'salesperson_name',
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
		'lease_duration' => array(
			'name' => 'lease_duration',
			'goodName' => 'lease_duration',
			'strField' => 'lease_duration',
			'index' => 9,
			'sqlExpression' => 'concat(lease_duration_no, \' \', lease_duration_unit)',
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
		'land' => array(
			'name' => 'land',
			'goodName' => 'land',
			'strField' => 'land',
			'index' => 10,
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
			'index' => 11,
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
						'FreeHold',
						'20-yrs LeaseHold',
						'30-yrs LeaseHold',
						'60-yrs LeaseHold',
						'99-yrs LeaseHold',
						'999-yrs LeaseHold',
						'9999-yrs LeaseHold' 
					),
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupDisplayField' => 'tenure',
					'lookupCustomDisplay' => true,
					'lookupFreeInput' => true,
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
		'rental' => array(
			'name' => 'rental',
			'goodName' => 'rental',
			'strField' => 'rental',
			'index' => 12,
			'sqlExpression' => 'concat(rental_price, \' \', rental_price_type)',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Currency',
					'videoRewindEnabled' => false,
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
		'date' => array(
			'name' => 'date',
			'goodName' => 'date',
			'strField' => 'date',
			'index' => 13,
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
					'dateEditType' => 2,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Between',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'transactions' 
		),
		'service_commencement' => array(
			'name' => 'service_commencement',
			'goodName' => 'service_commencement',
			'strField' => 'service_commencement',
			'sourceSingle' => 'service_commencement',
			'index' => 14,
			'type' => 7,
			'sqlExpression' => 'service_commencement',
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
		'service_completion' => array(
			'name' => 'service_completion',
			'goodName' => 'service_completion',
			'strField' => 'service_completion',
			'sourceSingle' => 'service_completion',
			'index' => 15,
			'type' => 7,
			'sqlExpression' => 'service_completion',
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
		'result' => array(
			'name' => 'result',
			'goodName' => 'result',
			'strField' => 'result',
			'sourceSingle' => 'result',
			'index' => 16,
			'sqlExpression' => '`result`',
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
			'tableName' => 'transactions' 
		),
		'built_up' => array(
			'name' => 'built_up',
			'goodName' => 'built_up',
			'strField' => 'built_up',
			'sourceSingle' => 'built_up',
			'index' => 17,
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
					'format' => 'Lookup wizard',
					'validateAs' => 'Number',
					'textboxSize' => 80,
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'builtup',
					'lookupDisplayField' => 'builtup',
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
					'dateFirstYearFactor' => 5,
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
		'built_up_unit' => array(
			'name' => 'built_up_unit',
			'goodName' => 'built_up_unit',
			'strField' => 'built_up_unit',
			'sourceSingle' => 'built_up_unit',
			'index' => 18,
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
					'lookupType' => 2,
					'lookupValues' => array( 
						'Sqf',
						'Sqm' 
					),
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'builtup_unit',
					'lookupDisplayField' => 'builtup_unit',
					'lookupControlType' => 1,
					'lookupHorizontal' => true,
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
					'dateFirstYearFactor' => 5,
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
		'land_unit' => array(
			'name' => 'land_unit',
			'goodName' => 'land_unit',
			'strField' => 'land_unit',
			'sourceSingle' => 'land_unit',
			'index' => 19,
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
					'lookupType' => 2,
					'lookupValues' => array( 
						'Sqf',
						'Sqm' 
					),
					'lookupTable' => 'properties',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'land_size_unit',
					'lookupDisplayField' => 'land_size_unit',
					'lookupControlType' => 1,
					'lookupHorizontal' => true,
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
					'dateFirstYearFactor' => 5,
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
prop_name,
prop_address,
cea_reg,
concat(lease_duration_no, \' \', lease_duration_unit) AS lease_duration,
land,
tenure,
concat(rental_price, \' \', rental_price_type) AS rental,
`date`,
service_commencement,
service_completion,
`result`,
built_up,
built_up_unit,
land_unit
FROM transactions
ORDER BY `date` DESC, id DESC',
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
				'encrypted' => false,
				'columnName' => 'cea_reg' 
			),
			array(
				'sql' => 'concat(lease_duration_no, \' \', lease_duration_unit)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'lease_duration',
				'expression' => array(
					'sql' => 'concat(lease_duration_no, \' \', lease_duration_unit)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'lease_duration_no',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'lease_duration_unit',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'concat',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'lease_duration' 
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
				'sql' => 'concat(rental_price, \' \', rental_price_type)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'rental',
				'expression' => array(
					'sql' => 'concat(rental_price, \' \', rental_price_type)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'rental_price',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'rental_price_type',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'concat',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'rental' 
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
				'sql' => 'service_commencement',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'service_commencement' 
				),
				'encrypted' => false,
				'columnName' => 'service_commencement' 
			),
			array(
				'sql' => 'service_completion',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'service_completion' 
				),
				'encrypted' => false,
				'columnName' => 'service_completion' 
			),
			array(
				'sql' => '`result`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'result' 
				),
				'encrypted' => false,
				'columnName' => 'result' 
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
				'sql' => '`date` DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'date' 
				),
				'asc' => false,
				'columnNumber' => 13 
			),
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
				'orderByIndex' => 1,
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
				'orderByIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
category,
prop_type,
Prop_kind,
rental_price,
prop_name,
prop_address,
cea_reg,
concat(lease_duration_no, \' \', lease_duration_unit) AS lease_duration,
land,
tenure,
concat(rental_price, \' \', rental_price_type) AS rental,
`date`,
service_commencement,
service_completion,
`result`,
built_up,
built_up_unit,
land_unit',
		'fromListSql' => 'FROM transactions',
		'orderBySql' => 'ORDER BY `date` DESC, id DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'transactions',
	'originalPagesByType' => array(
		'list' => array( 
			'list' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'list' => 'list',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'category',
			'prop_type',
			'Prop_kind',
			'rental_price',
			'prop_name',
			'prop_address',
			'cea_reg',
			'lease_duration',
			'land',
			'tenure',
			'rental',
			'date',
			'service_commencement',
			'service_completion',
			'result',
			'built_up',
			'built_up_unit',
			'land_unit' 
		),
		'searchSuggest' => false,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'category',
			'prop_type',
			'Prop_kind',
			'prop_name',
			'prop_address',
			'lease_duration',
			'tenure',
			'rental',
			'date',
			'service_commencement',
			'service_completion',
			'result',
			'built_up',
			'built_up_unit',
			'land_unit' 
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
			'date' => array(
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
	$runnerTableLabels['transactions_jtc_lease'] = array(
	'tableCaption' => 'Transactions - JTC Lease',
	'fieldLabels' => array(
		'id' => 'Txn ID',
		'category' => 'Txn Type',
		'prop_type' => 'Prop Type',
		'Prop_kind' => 'Prop Kind',
		'rental_price' => 'Rental',
		'prop_name' => 'Name of Development',
		'prop_address' => 'Address',
		'cea_reg' => 'Salesperson CEA Reg',
		'lease_duration' => 'Lease Duration',
		'land' => 'Land',
		'tenure' => 'Tenure',
		'rental' => 'Rental',
		'date' => 'Date',
		'service_commencement' => 'Service Commencement',
		'service_completion' => 'Service Completion',
		'result' => 'Result',
		'built_up' => 'Built Up',
		'built_up_unit' => 'Built Up Unit',
		'land_unit' => 'Land Unit' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'category' => '',
		'prop_type' => '',
		'Prop_kind' => '',
		'rental_price' => '',
		'prop_name' => '',
		'prop_address' => '',
		'cea_reg' => '',
		'lease_duration' => '',
		'land' => '',
		'tenure' => '',
		'rental' => '',
		'date' => '',
		'service_commencement' => '',
		'service_completion' => '',
		'result' => '',
		'built_up' => '',
		'built_up_unit' => '',
		'land_unit' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'category' => '',
		'prop_type' => '',
		'Prop_kind' => '',
		'rental_price' => '',
		'prop_name' => '',
		'prop_address' => '',
		'cea_reg' => '',
		'lease_duration' => '',
		'land' => '',
		'tenure' => '',
		'rental' => '',
		'date' => '',
		'service_commencement' => '',
		'service_completion' => '',
		'result' => '',
		'built_up' => '',
		'built_up_unit' => '',
		'land_unit' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>