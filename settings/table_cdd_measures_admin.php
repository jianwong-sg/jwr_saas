<?php
global $runnerTableSettings;
$runnerTableSettings['cdd_measures-admin'] = array(
	'name' => 'cdd_measures-admin',
	'type' => 1,
	'shortName' => 'cdd_measures_admin',
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
	'tableOwnerIdField' => 'checked_by',
	'usersOwnerIdField' => 'full_name',
	'hasEncryptedFields' => true,
	'detailsBadgeColor' => 'D2691E',
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
	'sql' => 'SELECT
	cdd_measure_customer,
	checked_by,
	checked_date,
	customer_nric,
	customer_type,
	id,
	id_cddmeasures,
	measure1,
	measure10,
	measure11,
	measure12,
	measure13,
	measure2,
	measure3,
	measure4,
	measure5,
	measure6,
	measure7,
	measure8,
	measure9,
	measure_result,
	remark1,
	remark10,
	remark11,
	remark12,
	remark13,
	remark2,
	remark3,
	remark4,
	remark5,
	remark6,
	remark7,
	remark8,
	remark9,
	representing
FROM cdd_measures',
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
		'cdd_measure_customer' => array(
			'name' => 'cdd_measure_customer',
			'goodName' => 'cdd_measure_customer',
			'strField' => 'cdd_measure_customer',
			'index' => 1,
			'sqlExpression' => 'cdd_measure_customer',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '$arr = explode(",",$value);
for ($i=0;$i<count($arr);$i++)
$arr[$i]=" ".$arr[$i];
$value = implode(",",$arr);',
					'videoRewindEnabled' => false,
					'textShowFirst' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupSize' => 2,
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'parties_involved',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'id_cddmeasures',
							'lookupField' => 'id_tx' 
						),
						array(
							'masterField' => 'representing',
							'lookupField' => 'role' 
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
			'tableName' => 'cdd_measures' 
		),
		'checked_by' => array(
			'name' => 'checked_by',
			'goodName' => 'checked_by',
			'strField' => 'checked_by',
			'index' => 2,
			'sqlExpression' => 'checked_by',
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
			'tableName' => 'cdd_measures' 
		),
		'checked_date' => array(
			'name' => 'checked_date',
			'goodName' => 'checked_date',
			'strField' => 'checked_date',
			'index' => 3,
			'type' => 7,
			'sqlExpression' => 'checked_date',
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
					'defaultValue' => 'now()',
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
			'tableName' => 'cdd_measures' 
		),
		'customer_nric' => array(
			'name' => 'customer_nric',
			'goodName' => 'customer_nric',
			'strField' => 'customer_nric',
			'index' => 4,
			'encrypted' => true,
			'sqlExpression' => 'customer_nric',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);',
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
					'lookupTable' => 'parties_involved',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'id_cddmeasures',
							'lookupField' => 'id_tx' 
						),
						array(
							'masterField' => 'representing',
							'lookupField' => 'role' 
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
			'tableName' => 'cdd_measures' 
		),
		'customer_type' => array(
			'name' => 'customer_type',
			'goodName' => 'customer_type',
			'strField' => 'customer_type',
			'sourceSingle' => 'customer_type',
			'index' => 5,
			'sqlExpression' => 'customer_type',
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
			'tableName' => 'cdd_measures' 
		),
		'id' => array(
			'name' => 'id',
			'goodName' => 'id',
			'strField' => 'id',
			'index' => 6,
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
			'tableName' => 'cdd_measures' 
		),
		'id_cddmeasures' => array(
			'name' => 'id_cddmeasures',
			'goodName' => 'id_cddmeasures',
			'strField' => 'id_cddmeasures',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'id_cddmeasures',
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
			'tableName' => 'cdd_measures' 
		),
		'measure1' => array(
			'name' => 'measure1',
			'goodName' => 'measure1',
			'strField' => 'measure1',
			'index' => 8,
			'sqlExpression' => 'measure1',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure10' => array(
			'name' => 'measure10',
			'goodName' => 'measure10',
			'strField' => 'measure10',
			'index' => 9,
			'sqlExpression' => 'measure10',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure11' => array(
			'name' => 'measure11',
			'goodName' => 'measure11',
			'strField' => 'measure11',
			'index' => 10,
			'sqlExpression' => 'measure11',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure12' => array(
			'name' => 'measure12',
			'goodName' => 'measure12',
			'strField' => 'measure12',
			'index' => 11,
			'sqlExpression' => 'measure12',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes',
						'NA' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure13' => array(
			'name' => 'measure13',
			'goodName' => 'measure13',
			'strField' => 'measure13',
			'index' => 12,
			'sqlExpression' => 'measure13',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes',
						'NA' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure2' => array(
			'name' => 'measure2',
			'goodName' => 'measure2',
			'strField' => 'measure2',
			'index' => 13,
			'sqlExpression' => 'measure2',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes',
						'NA' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure3' => array(
			'name' => 'measure3',
			'goodName' => 'measure3',
			'strField' => 'measure3',
			'index' => 14,
			'sqlExpression' => 'measure3',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure4' => array(
			'name' => 'measure4',
			'goodName' => 'measure4',
			'strField' => 'measure4',
			'index' => 15,
			'sqlExpression' => 'measure4',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure5' => array(
			'name' => 'measure5',
			'goodName' => 'measure5',
			'strField' => 'measure5',
			'index' => 16,
			'sqlExpression' => 'measure5',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure6' => array(
			'name' => 'measure6',
			'goodName' => 'measure6',
			'strField' => 'measure6',
			'index' => 17,
			'sqlExpression' => 'measure6',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure7' => array(
			'name' => 'measure7',
			'goodName' => 'measure7',
			'strField' => 'measure7',
			'index' => 18,
			'sqlExpression' => 'measure7',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure8' => array(
			'name' => 'measure8',
			'goodName' => 'measure8',
			'strField' => 'measure8',
			'index' => 19,
			'sqlExpression' => 'measure8',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes',
						'NA' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure9' => array(
			'name' => 'measure9',
			'goodName' => 'measure9',
			'strField' => 'measure9',
			'index' => 20,
			'sqlExpression' => 'measure9',
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
					'textboxMaxLenth' => 5,
					'textHTML5Input' => '0',
					'lookupType' => 0,
					'lookupValues' => array( 
						'No',
						'Yes' 
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
			'tableName' => 'cdd_measures' 
		),
		'measure_result' => array(
			'name' => 'measure_result',
			'goodName' => 'measure_result',
			'strField' => 'measure_result',
			'index' => 21,
			'sqlExpression' => 'measure_result',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => 'if($value==\'Filing of STR not necessary\')
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
					'textboxSize' => 0,
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
			'tableName' => 'cdd_measures' 
		),
		'remark1' => array(
			'name' => 'remark1',
			'goodName' => 'remark1',
			'strField' => 'remark1',
			'index' => 22,
			'sqlExpression' => 'remark1',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark10' => array(
			'name' => 'remark10',
			'goodName' => 'remark10',
			'strField' => 'remark10',
			'index' => 23,
			'sqlExpression' => 'remark10',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark11' => array(
			'name' => 'remark11',
			'goodName' => 'remark11',
			'strField' => 'remark11',
			'index' => 24,
			'sqlExpression' => 'remark11',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark12' => array(
			'name' => 'remark12',
			'goodName' => 'remark12',
			'strField' => 'remark12',
			'index' => 25,
			'sqlExpression' => 'remark12',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark13' => array(
			'name' => 'remark13',
			'goodName' => 'remark13',
			'strField' => 'remark13',
			'index' => 26,
			'sqlExpression' => 'remark13',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark2' => array(
			'name' => 'remark2',
			'goodName' => 'remark2',
			'strField' => 'remark2',
			'index' => 27,
			'sqlExpression' => 'remark2',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark3' => array(
			'name' => 'remark3',
			'goodName' => 'remark3',
			'strField' => 'remark3',
			'index' => 28,
			'sqlExpression' => 'remark3',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark4' => array(
			'name' => 'remark4',
			'goodName' => 'remark4',
			'strField' => 'remark4',
			'index' => 29,
			'sqlExpression' => 'remark4',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark5' => array(
			'name' => 'remark5',
			'goodName' => 'remark5',
			'strField' => 'remark5',
			'index' => 30,
			'sqlExpression' => 'remark5',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark6' => array(
			'name' => 'remark6',
			'goodName' => 'remark6',
			'strField' => 'remark6',
			'index' => 31,
			'sqlExpression' => 'remark6',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark7' => array(
			'name' => 'remark7',
			'goodName' => 'remark7',
			'strField' => 'remark7',
			'index' => 32,
			'sqlExpression' => 'remark7',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark8' => array(
			'name' => 'remark8',
			'goodName' => 'remark8',
			'strField' => 'remark8',
			'index' => 33,
			'sqlExpression' => 'remark8',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'remark9' => array(
			'name' => 'remark9',
			'goodName' => 'remark9',
			'strField' => 'remark9',
			'index' => 34,
			'sqlExpression' => 'remark9',
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
					'textboxMaxLenth' => 500,
					'textHTML5Input' => '0',
					'textareaHeight' => 40,
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
			'tableName' => 'cdd_measures' 
		),
		'representing' => array(
			'name' => 'representing',
			'goodName' => 'representing',
			'strField' => 'representing',
			'index' => 35,
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
			'tableName' => 'cdd_measures' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	cdd_measure_customer,
	checked_by,
	checked_date,
	customer_nric,
	customer_type,
	id,
	id_cddmeasures,
	measure1,
	measure10,
	measure11,
	measure12,
	measure13,
	measure2,
	measure3,
	measure4,
	measure5,
	measure6,
	measure7,
	measure8,
	measure9,
	measure_result,
	remark1,
	remark10,
	remark11,
	remark12,
	remark13,
	remark2,
	remark3,
	remark4,
	remark5,
	remark6,
	remark7,
	remark8,
	remark9,
	representing
FROM cdd_measures',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'cdd_measure_customer',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'cdd_measure_customer' 
				),
				'encrypted' => false,
				'columnName' => 'cdd_measure_customer' 
			),
			array(
				'sql' => 'checked_by',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'checked_by' 
				),
				'encrypted' => false,
				'columnName' => 'checked_by' 
			),
			array(
				'sql' => 'checked_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'checked_date' 
				),
				'encrypted' => false,
				'columnName' => 'checked_date' 
			),
			array(
				'sql' => 'customer_nric',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'customer_nric' 
				),
				'encrypted' => true,
				'columnName' => 'customer_nric' 
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
					'table' => 'cdd_measures',
					'name' => 'customer_type' 
				),
				'encrypted' => false,
				'columnName' => 'customer_type' 
			),
			array(
				'sql' => 'id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'id_cddmeasures',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'id_cddmeasures' 
				),
				'encrypted' => false,
				'columnName' => 'id_cddmeasures' 
			),
			array(
				'sql' => 'measure1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure1' 
				),
				'encrypted' => false,
				'columnName' => 'measure1' 
			),
			array(
				'sql' => 'measure10',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure10' 
				),
				'encrypted' => false,
				'columnName' => 'measure10' 
			),
			array(
				'sql' => 'measure11',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure11' 
				),
				'encrypted' => false,
				'columnName' => 'measure11' 
			),
			array(
				'sql' => 'measure12',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure12' 
				),
				'encrypted' => false,
				'columnName' => 'measure12' 
			),
			array(
				'sql' => 'measure13',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure13' 
				),
				'encrypted' => false,
				'columnName' => 'measure13' 
			),
			array(
				'sql' => 'measure2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure2' 
				),
				'encrypted' => false,
				'columnName' => 'measure2' 
			),
			array(
				'sql' => 'measure3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure3' 
				),
				'encrypted' => false,
				'columnName' => 'measure3' 
			),
			array(
				'sql' => 'measure4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure4' 
				),
				'encrypted' => false,
				'columnName' => 'measure4' 
			),
			array(
				'sql' => 'measure5',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure5' 
				),
				'encrypted' => false,
				'columnName' => 'measure5' 
			),
			array(
				'sql' => 'measure6',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure6' 
				),
				'encrypted' => false,
				'columnName' => 'measure6' 
			),
			array(
				'sql' => 'measure7',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure7' 
				),
				'encrypted' => false,
				'columnName' => 'measure7' 
			),
			array(
				'sql' => 'measure8',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure8' 
				),
				'encrypted' => false,
				'columnName' => 'measure8' 
			),
			array(
				'sql' => 'measure9',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure9' 
				),
				'encrypted' => false,
				'columnName' => 'measure9' 
			),
			array(
				'sql' => 'measure_result',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'measure_result' 
				),
				'encrypted' => false,
				'columnName' => 'measure_result' 
			),
			array(
				'sql' => 'remark1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark1' 
				),
				'encrypted' => false,
				'columnName' => 'remark1' 
			),
			array(
				'sql' => 'remark10',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark10' 
				),
				'encrypted' => false,
				'columnName' => 'remark10' 
			),
			array(
				'sql' => 'remark11',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark11' 
				),
				'encrypted' => false,
				'columnName' => 'remark11' 
			),
			array(
				'sql' => 'remark12',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark12' 
				),
				'encrypted' => false,
				'columnName' => 'remark12' 
			),
			array(
				'sql' => 'remark13',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark13' 
				),
				'encrypted' => false,
				'columnName' => 'remark13' 
			),
			array(
				'sql' => 'remark2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark2' 
				),
				'encrypted' => false,
				'columnName' => 'remark2' 
			),
			array(
				'sql' => 'remark3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark3' 
				),
				'encrypted' => false,
				'columnName' => 'remark3' 
			),
			array(
				'sql' => 'remark4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark4' 
				),
				'encrypted' => false,
				'columnName' => 'remark4' 
			),
			array(
				'sql' => 'remark5',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark5' 
				),
				'encrypted' => false,
				'columnName' => 'remark5' 
			),
			array(
				'sql' => 'remark6',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark6' 
				),
				'encrypted' => false,
				'columnName' => 'remark6' 
			),
			array(
				'sql' => 'remark7',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark7' 
				),
				'encrypted' => false,
				'columnName' => 'remark7' 
			),
			array(
				'sql' => 'remark8',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark8' 
				),
				'encrypted' => false,
				'columnName' => 'remark8' 
			),
			array(
				'sql' => 'remark9',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_measures',
					'name' => 'remark9' 
				),
				'encrypted' => false,
				'columnName' => 'remark9' 
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
					'table' => 'cdd_measures',
					'name' => 'representing' 
				),
				'encrypted' => false,
				'columnName' => 'representing' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'cdd_measures',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'cdd_measures',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'id_cddmeasures',
						'measure1',
						'measure2',
						'measure3',
						'measure4',
						'measure5',
						'measure6',
						'measure7',
						'measure8',
						'measure9',
						'remark1',
						'remark2',
						'remark3',
						'remark4',
						'remark5',
						'remark6',
						'remark7',
						'remark8',
						'remark9',
						'measure_result',
						'measure10',
						'measure11',
						'measure12',
						'measure13',
						'remark10',
						'remark11',
						'remark12',
						'remark13',
						'cdd_measure_customer',
						'checked_by',
						'checked_date',
						'representing',
						'customer_nric',
						'customer_type' 
					),
					'name' => 'cdd_measures' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'cdd_measure_customer,
	checked_by,
	checked_date,
	customer_nric,
	customer_type,
	id,
	id_cddmeasures,
	measure1,
	measure10,
	measure11,
	measure12,
	measure13,
	measure2,
	measure3,
	measure4,
	measure5,
	measure6,
	measure7,
	measure8,
	measure9,
	measure_result,
	remark1,
	remark10,
	remark11,
	remark12,
	remark13,
	remark2,
	remark3,
	remark4,
	remark5,
	remark6,
	remark7,
	remark8,
	remark9,
	representing',
		'fromListSql' => 'FROM cdd_measures',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'cdd_measures',
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
			'cdd_measure_customer',
			'checked_by',
			'checked_date',
			'customer_nric',
			'customer_type',
			'id',
			'id_cddmeasures',
			'measure1',
			'measure10',
			'measure11',
			'measure12',
			'measure13',
			'measure2',
			'measure3',
			'measure4',
			'measure5',
			'measure6',
			'measure7',
			'measure8',
			'measure9',
			'measure_result',
			'remark1',
			'remark10',
			'remark11',
			'remark12',
			'remark13',
			'remark2',
			'remark3',
			'remark4',
			'remark5',
			'remark6',
			'remark7',
			'remark8',
			'remark9',
			'representing' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'cdd_measure_customer',
			'checked_by',
			'checked_date',
			'customer_nric',
			'customer_type',
			'id',
			'id_cddmeasures',
			'measure1',
			'measure10',
			'measure11',
			'measure12',
			'measure13',
			'measure2',
			'measure3',
			'measure4',
			'measure5',
			'measure6',
			'measure7',
			'measure8',
			'measure9',
			'measure_result',
			'remark1',
			'remark10',
			'remark11',
			'remark12',
			'remark13',
			'remark2',
			'remark3',
			'remark4',
			'remark5',
			'remark6',
			'remark7',
			'remark8',
			'remark9',
			'representing' 
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
	$runnerTableLabels['cdd_measures-admin'] = array(
	'tableCaption' => 'Cdd Measures',
	'fieldLabels' => array(
		'cdd_measure_customer' => 'Client\'s Name',
		'checked_by' => 'Checked By',
		'checked_date' => 'Dated',
		'customer_nric' => 'Client\'s ID',
		'customer_type' => 'Customer Type',
		'id' => 'Id',
		'id_cddmeasures' => 'Txn ID',
		'measure1' => 'Do you suspect that the client is not the BO* of this property transaction?',
		'measure10' => 'Does the property transaction have no apparent economic* or lawful purpose*?',
		'measure11' => 'Is the client or BO from higher risk countries*?',
		'measure12' => 'If the property transaction is of higher risk, have you conducted enhanced CDD measures by asking the following information from the client or BO, i.e. occupation, source of funds/wealth and purpose of the transaction.',
		'measure13' => 'Have you sought approval from your estate agent to continue with the property transaction?',
		'measure2' => 'If the client is not the BO, are you able to verify the identify of the BO?',
		'measure3' => 'In the screening of the client or BO against the UN Sanction Lists, is there any full name match or partial name match where the nationality and age range matched*?',
		'measure4' => 'Is the client or BO known to be involved in FT, or proliferation financing?',
		'measure5' => 'Have you screened the client or BO against the list of entities identified in the Panama Papers?',
		'measure6' => 'In the screening of the client or BO against the Panama Papers, is there any name match?',
		'measure7' => 'Do you have reasons to believe that the client or BO is a PEP*?',
		'measure8' => 'If the client or BO is a PEP, is the client or BO a foreign PEP, a family member* or close associate* of a foreign PEP?',
		'measure9' => 'Is the property transaction complex*, or unusually large*?',
		'measure_result' => 'Results',
		'remark1' => 'Remarks',
		'remark10' => 'Remarks',
		'remark11' => 'Remarks',
		'remark12' => 'Remarks',
		'remark13' => 'Remarks',
		'remark2' => 'Remarks',
		'remark3' => 'Remarks',
		'remark4' => 'Remarks',
		'remark5' => 'Remarks',
		'remark6' => 'Remarks',
		'remark7' => 'Remarks',
		'remark8' => 'Remarks',
		'remark9' => 'Remarks',
		'representing' => 'Representing' 
	),
	'fieldTooltips' => array(
		'cdd_measure_customer' => '',
		'checked_by' => '',
		'checked_date' => '',
		'customer_nric' => '',
		'customer_type' => '',
		'id' => '',
		'id_cddmeasures' => '',
		'measure1' => '',
		'measure10' => '',
		'measure11' => '',
		'measure12' => '',
		'measure13' => '',
		'measure2' => '',
		'measure3' => '',
		'measure4' => '',
		'measure5' => '',
		'measure6' => '',
		'measure7' => '',
		'measure8' => '',
		'measure9' => '',
		'measure_result' => '',
		'remark1' => '',
		'remark10' => '',
		'remark11' => '',
		'remark12' => '',
		'remark13' => '',
		'remark2' => '',
		'remark3' => '',
		'remark4' => '',
		'remark5' => '',
		'remark6' => '',
		'remark7' => '',
		'remark8' => '',
		'remark9' => '',
		'representing' => '' 
	),
	'fieldPlaceholders' => array(
		'cdd_measure_customer' => '',
		'checked_by' => '',
		'checked_date' => '',
		'customer_nric' => '',
		'customer_type' => '',
		'id' => '',
		'id_cddmeasures' => '',
		'measure1' => '',
		'measure10' => '',
		'measure11' => '',
		'measure12' => '',
		'measure13' => '',
		'measure2' => '',
		'measure3' => '',
		'measure4' => '',
		'measure5' => '',
		'measure6' => '',
		'measure7' => '',
		'measure8' => '',
		'measure9' => '',
		'measure_result' => '',
		'remark1' => '',
		'remark10' => '',
		'remark11' => '',
		'remark12' => '',
		'remark13' => '',
		'remark2' => '',
		'remark3' => '',
		'remark4' => '',
		'remark5' => '',
		'remark6' => '',
		'remark7' => '',
		'remark8' => '',
		'remark9' => '',
		'representing' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>