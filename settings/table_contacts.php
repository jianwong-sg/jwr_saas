<?php
global $runnerTableSettings;
$runnerTableSettings['contacts'] = array(
	'name' => 'contacts',
	'type' => 1,
	'shortName' => 'contacts',
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
	'tableOwnerIdField' => 'docuserid',
	'usersOwnerIdField' => 'id',
	'closePopupAfterAdd' => false,
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
	'hideEmptyFieldsOnView' => true,
	'orderInfo' => array( 
		array(
			'index' => 2,
			'dir' => 'ASC',
			'field' => 'name' 
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
office_tel,
contact_person,
contact_email,
biz_email,
registration_date,
country_incorporation,
nationality,
contact_person_contact,
contact_person_id,
id_type
FROM invcustomers
ORDER BY name',
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
			'uploadFolder' => '',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'fileShowIcon' => false,
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
					'textboxSize' => 0,
					'textHTML5Input' => '0',
					'lookupTableConnection' => 'Tables',
					'fileResizeSize' => 0,
					'fileThumbnailPrefix' => '',
					'fileThumbnailSize' => 0,
					'fileMaxNumber' => 1,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'invcustomers' 
		),
		'name' => array(
			'name' => 'name',
			'goodName' => 'name',
			'strField' => 'name',
			'index' => 2,
			'sqlExpression' => 'name',
			'uploadFolder' => '',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '$value = "<a href=\\"contacts_view.php?editid1=".$data["id"]."\\"".$value."</a>";',
					'fileShowIcon' => false,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'textboxSize' => 0,
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'invcustomers',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupAllowAdd' => true,
					'lookupControlType' => 1,
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'address',
							'lookupField' => 'address' 
						),
						array(
							'masterField' => 'postal',
							'lookupField' => 'postal' 
						),
						array(
							'masterField' => 'nric',
							'lookupField' => 'nric' 
						),
						array(
							'masterField' => 'mobile',
							'lookupField' => 'mobile' 
						),
						array(
							'masterField' => 'tel',
							'lookupField' => 'tel' 
						),
						array(
							'masterField' => 'email',
							'lookupField' => 'email' 
						),
						array(
							'masterField' => 'office_tel',
							'lookupField' => 'office_tel' 
						),
						array(
							'masterField' => 'trade',
							'lookupField' => 'trade' 
						),
						array(
							'masterField' => 'contact_person',
							'lookupField' => 'contact_person' 
						),
						array(
							'masterField' => 'destination',
							'lookupField' => 'destination' 
						),
						array(
							'masterField' => 'contact_email',
							'lookupField' => 'contact_email' 
						),
						array(
							'masterField' => 'biz_email',
							'lookupField' => 'biz_email' 
						),
						array(
							'masterField' => 'contact_person_id',
							'lookupField' => 'contact_person_id' 
						),
						array(
							'masterField' => 'contact_person_cell',
							'lookupField' => 'contact_person_cell' 
						),
						array(
							'masterField' => 'status',
							'lookupField' => 'status' 
						) 
					),
					'fileResizeSize' => 0,
					'fileThumbnailPrefix' => '',
					'fileThumbnailSize' => 0,
					'fileMaxNumber' => 1,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
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
			'uploadFolder' => '',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'fileShowIcon' => false,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
					'textboxSize' => 300,
					'textHTML5Input' => '0',
					'lookupTable' => 'prop_data',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'address',
					'lookupDisplayField' => 'address',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'fileResizeSize' => 0,
					'fileThumbnailPrefix' => '',
					'fileThumbnailSize' => 0,
					'fileMaxNumber' => 1,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
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
					'imageWidth' => 0,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'fileShowIcon' => false,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
					'validateAs' => 'Email',
					'textboxSize' => 150,
					'textHTML5Input' => '0',
					'lookupTableConnection' => 'Tables',
					'fileResizeSize' => 0,
					'fileThumbnailPrefix' => '',
					'fileThumbnailSize' => 0,
					'fileMaxNumber' => 1,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'invcustomers' 
		),
		'postal' => array(
			'name' => 'postal',
			'goodName' => 'postal',
			'strField' => 'postal',
			'index' => 5,
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
					'required' => true,
					'textboxSize' => 80,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupTable' => 'prop_data',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'postal',
					'lookupDisplayField' => 'postal',
					'lookupControlType' => 1,
					'lookupFreeInput' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'address',
							'lookupField' => 'address' 
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
		'nric' => array(
			'name' => 'nric',
			'goodName' => 'nric',
			'strField' => 'nric',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => 'nric',
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
			'tableName' => 'invcustomers' 
		),
		'mobile' => array(
			'name' => 'mobile',
			'goodName' => 'mobile',
			'strField' => 'mobile',
			'index' => 7,
			'type' => 201,
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
					'required' => true,
					'validateAs' => 'Number',
					'textboxSize' => 80,
					'textboxMaxLenth' => 8,
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
			'tableName' => 'invcustomers' 
		),
		'tel' => array(
			'name' => 'tel',
			'goodName' => 'tel',
			'strField' => 'tel',
			'index' => 8,
			'type' => 201,
			'sqlExpression' => 'tel',
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
					'textboxSize' => 80,
					'textboxMaxLenth' => 8,
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
			'tableName' => 'invcustomers' 
		),
		'office_tel' => array(
			'name' => 'office_tel',
			'goodName' => 'office_tel',
			'strField' => 'office_tel',
			'index' => 9,
			'sqlExpression' => 'office_tel',
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
					'textboxSize' => 100,
					'textboxMaxLenth' => 8,
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
			'tableName' => 'invcustomers' 
		),
		'contact_person' => array(
			'name' => 'contact_person',
			'goodName' => 'contact_person',
			'strField' => 'contact_person',
			'index' => 10,
			'sqlExpression' => 'contact_person',
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
					'textboxSize' => 150,
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
			'index' => 11,
			'type' => 201,
			'sqlExpression' => 'contact_email',
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
					'validateAs' => 'Email',
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
			'tableName' => 'invcustomers' 
		),
		'biz_email' => array(
			'name' => 'biz_email',
			'goodName' => 'biz_email',
			'strField' => 'biz_email',
			'index' => 12,
			'type' => 201,
			'sqlExpression' => 'biz_email',
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
					'validateAs' => 'Email',
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
			'tableName' => 'invcustomers' 
		),
		'registration_date' => array(
			'name' => 'registration_date',
			'goodName' => 'registration_date',
			'strField' => 'registration_date',
			'index' => 13,
			'type' => 7,
			'sqlExpression' => 'registration_date',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'invcustomers' 
		),
		'country_incorporation' => array(
			'name' => 'country_incorporation',
			'goodName' => 'country_incorporation',
			'strField' => 'country_incorporation',
			'index' => 14,
			'sqlExpression' => 'country_incorporation',
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
			'tableName' => 'invcustomers' 
		),
		'nationality' => array(
			'name' => 'nationality',
			'goodName' => 'nationality',
			'strField' => 'nationality',
			'index' => 15,
			'sqlExpression' => 'nationality',
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
			'tableName' => 'invcustomers' 
		),
		'contact_person_contact' => array(
			'name' => 'contact_person_contact',
			'goodName' => 'contact_person_contact',
			'strField' => 'contact_person_contact',
			'index' => 16,
			'type' => 201,
			'sqlExpression' => 'contact_person_contact',
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
			'tableName' => 'invcustomers' 
		),
		'contact_person_id' => array(
			'name' => 'contact_person_id',
			'goodName' => 'contact_person_id',
			'strField' => 'contact_person_id',
			'index' => 17,
			'type' => 201,
			'sqlExpression' => 'contact_person_id',
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
			'tableName' => 'invcustomers' 
		),
		'id_type' => array(
			'name' => 'id_type',
			'goodName' => 'id_type',
			'strField' => 'id_type',
			'index' => 18,
			'sqlExpression' => 'id_type',
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
office_tel,
contact_person,
contact_email,
biz_email,
registration_date,
country_incorporation,
nationality,
contact_person_contact,
contact_person_id,
id_type
FROM invcustomers
ORDER BY name',
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
				'sql' => 'name',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'invcustomers',
					'name' => 'name' 
				),
				'asc' => true,
				'columnNumber' => 2 
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
				'orderByIndex' => 0,
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
name,
address,
email,
postal,
nric,
mobile,
tel,
office_tel,
contact_person,
contact_email,
biz_email,
registration_date,
country_incorporation,
nationality,
contact_person_contact,
contact_person_id,
id_type',
		'fromListSql' => 'FROM invcustomers',
		'orderBySql' => 'ORDER BY name',
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
			'office_tel',
			'contact_person',
			'contact_email',
			'biz_email',
			'registration_date',
			'country_incorporation',
			'nationality',
			'contact_person_contact',
			'contact_person_id',
			'id_type' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => true,
		'googleLikeSearchFields' => array( 
			'id',
			'name',
			'mobile',
			'office_tel',
			'nationality',
			'contact_person_contact',
			'contact_person_id',
			'id_type' 
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
	$runnerTableLabels['contacts'] = array(
	'tableCaption' => 'Contacts',
	'fieldLabels' => array(
		'id' => 'Id',
		'name' => 'Name',
		'address' => 'Address',
		'email' => 'Email',
		'postal' => 'Postal',
		'nric' => 'Identification',
		'mobile' => 'Mobile',
		'tel' => 'Tel',
		'office_tel' => 'Office Tel',
		'contact_person' => 'Contact Person',
		'contact_email' => 'Email (Contact person)',
		'biz_email' => 'Email (Biz)',
		'registration_date' => 'Registration Date',
		'country_incorporation' => 'Country Incorporation',
		'nationality' => 'Nationality',
		'contact_person_contact' => 'Contact Person Contact',
		'contact_person_id' => 'Contact Person ID',
		'id_type' => 'Id Type' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'name' => '',
		'address' => '',
		'email' => '',
		'postal' => '',
		'nric' => 'NRIC/FIN/PP/UEN/CEA',
		'mobile' => '',
		'tel' => '',
		'office_tel' => '',
		'contact_person' => '',
		'contact_email' => '',
		'biz_email' => '',
		'registration_date' => '',
		'country_incorporation' => '',
		'nationality' => '',
		'contact_person_contact' => '',
		'contact_person_id' => '',
		'id_type' => '' 
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
		'office_tel' => '',
		'contact_person' => '',
		'contact_email' => '',
		'biz_email' => '',
		'registration_date' => '',
		'country_incorporation' => '',
		'nationality' => '',
		'contact_person_contact' => '',
		'contact_person_id' => '',
		'id_type' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>