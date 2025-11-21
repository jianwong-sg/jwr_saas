<?php
global $runnerTableSettings;
$runnerTableSettings['cdd_checklist-admin'] = array(
	'name' => 'cdd_checklist-admin',
	'type' => 1,
	'shortName' => 'cdd_checklist_admin',
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
	'tableOwnerIdField' => 'checked_by_cea',
	'usersOwnerIdField' => 'active',
	'listAjax' => true,
	'afterAddAction' => 0,
	'detailsBadgeColor' => 'CD853F',
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
			'index' => 4,
			'dir' => 'DESC',
			'field' => 'id_cddlist' 
		) 
	),
	'sql' => 'SELECT
	id,
	checked_by,
	cdd_checklist_customer,
	id_cddlist,
	list01,
	remark01,
	list02,
	remark02,
	list03,
	remark03,
	list04,
	remark04,
	list05,
	remark05,
	list06,
	remark06,
	list07,
	remark07,
	list08,
	remark08,
	list09,
	remark09,
	list10,
	remark10,
	list11,
	remark11,
	list12,
	remark12,
	list13,
	remark13,
	list14,
	remark14,
	results,
	results2,
	results3,
	checked_date,
	checked_by_cea,
	representing,
	cdd_checklist_customer_nric,
	cdd_checklist_custype
FROM
	cdd_checklist
ORDER BY
	id_cddlist DESC
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
			'tableName' => 'cdd_checklist' 
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
					'defaultValue' => '$_SESSION["FullName"]',
					'textboxSize' => 120,
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
			'tableName' => 'cdd_checklist' 
		),
		'cdd_checklist_customer' => array(
			'name' => 'cdd_checklist_customer',
			'goodName' => 'cdd_checklist_customer',
			'strField' => 'cdd_checklist_customer',
			'index' => 3,
			'sqlExpression' => 'cdd_checklist_customer',
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
					'required' => true,
					'textboxSize' => 280,
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
							'masterField' => 'id_cddlist',
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
			'tableName' => 'cdd_checklist' 
		),
		'id_cddlist' => array(
			'name' => 'id_cddlist',
			'goodName' => 'id_cddlist',
			'strField' => 'id_cddlist',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'id_cddlist',
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
					'defaultValue' => '$_SESSION["id"]',
					'validateAs' => 'Number',
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
			'tableName' => 'cdd_checklist' 
		),
		'list01' => array(
			'name' => 'list01',
			'goodName' => 'list01',
			'strField' => 'list01',
			'index' => 5,
			'sqlExpression' => 'list01',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark01' => array(
			'name' => 'remark01',
			'goodName' => 'remark01',
			'strField' => 'remark01',
			'index' => 6,
			'sqlExpression' => 'remark01',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list02' => array(
			'name' => 'list02',
			'goodName' => 'list02',
			'strField' => 'list02',
			'index' => 7,
			'sqlExpression' => 'list02',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark02' => array(
			'name' => 'remark02',
			'goodName' => 'remark02',
			'strField' => 'remark02',
			'index' => 8,
			'sqlExpression' => 'remark02',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list03' => array(
			'name' => 'list03',
			'goodName' => 'list03',
			'strField' => 'list03',
			'index' => 9,
			'sqlExpression' => 'list03',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark03' => array(
			'name' => 'remark03',
			'goodName' => 'remark03',
			'strField' => 'remark03',
			'index' => 10,
			'sqlExpression' => 'remark03',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list04' => array(
			'name' => 'list04',
			'goodName' => 'list04',
			'strField' => 'list04',
			'index' => 11,
			'sqlExpression' => 'list04',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark04' => array(
			'name' => 'remark04',
			'goodName' => 'remark04',
			'strField' => 'remark04',
			'index' => 12,
			'sqlExpression' => 'remark04',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list05' => array(
			'name' => 'list05',
			'goodName' => 'list05',
			'strField' => 'list05',
			'index' => 13,
			'sqlExpression' => 'list05',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark05' => array(
			'name' => 'remark05',
			'goodName' => 'remark05',
			'strField' => 'remark05',
			'index' => 14,
			'sqlExpression' => 'remark05',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list06' => array(
			'name' => 'list06',
			'goodName' => 'list06',
			'strField' => 'list06',
			'index' => 15,
			'sqlExpression' => 'list06',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark06' => array(
			'name' => 'remark06',
			'goodName' => 'remark06',
			'strField' => 'remark06',
			'index' => 16,
			'sqlExpression' => 'remark06',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list07' => array(
			'name' => 'list07',
			'goodName' => 'list07',
			'strField' => 'list07',
			'index' => 17,
			'sqlExpression' => 'list07',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark07' => array(
			'name' => 'remark07',
			'goodName' => 'remark07',
			'strField' => 'remark07',
			'index' => 18,
			'sqlExpression' => 'remark07',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list08' => array(
			'name' => 'list08',
			'goodName' => 'list08',
			'strField' => 'list08',
			'index' => 19,
			'sqlExpression' => 'list08',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark08' => array(
			'name' => 'remark08',
			'goodName' => 'remark08',
			'strField' => 'remark08',
			'index' => 20,
			'sqlExpression' => 'remark08',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list09' => array(
			'name' => 'list09',
			'goodName' => 'list09',
			'strField' => 'list09',
			'index' => 21,
			'sqlExpression' => 'list09',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark09' => array(
			'name' => 'remark09',
			'goodName' => 'remark09',
			'strField' => 'remark09',
			'index' => 22,
			'sqlExpression' => 'remark09',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list10' => array(
			'name' => 'list10',
			'goodName' => 'list10',
			'strField' => 'list10',
			'index' => 23,
			'sqlExpression' => 'list10',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark10' => array(
			'name' => 'remark10',
			'goodName' => 'remark10',
			'strField' => 'remark10',
			'index' => 24,
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list11' => array(
			'name' => 'list11',
			'goodName' => 'list11',
			'strField' => 'list11',
			'index' => 25,
			'sqlExpression' => 'list11',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark11' => array(
			'name' => 'remark11',
			'goodName' => 'remark11',
			'strField' => 'remark11',
			'index' => 26,
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list12' => array(
			'name' => 'list12',
			'goodName' => 'list12',
			'strField' => 'list12',
			'index' => 27,
			'sqlExpression' => 'list12',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark12' => array(
			'name' => 'remark12',
			'goodName' => 'remark12',
			'strField' => 'remark12',
			'index' => 28,
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list13' => array(
			'name' => 'list13',
			'goodName' => 'list13',
			'strField' => 'list13',
			'index' => 29,
			'sqlExpression' => 'list13',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark13' => array(
			'name' => 'remark13',
			'goodName' => 'remark13',
			'strField' => 'remark13',
			'index' => 30,
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cdd_checklist' 
		),
		'list14' => array(
			'name' => 'list14',
			'goodName' => 'list14',
			'strField' => 'list14',
			'index' => 31,
			'sqlExpression' => 'list14',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'remark14' => array(
			'name' => 'remark14',
			'goodName' => 'remark14',
			'strField' => 'remark14',
			'index' => 32,
			'sqlExpression' => 'remark14',
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
			'tableName' => 'cdd_checklist' 
		),
		'results' => array(
			'name' => 'results',
			'goodName' => 'results',
			'strField' => 'results',
			'index' => 33,
			'type' => 201,
			'sqlExpression' => 'results',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '$color="green";
$value="<font color=\'$color\'>$value</font>";',
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
					'textboxMaxLenth' => 200,
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
			'tableName' => 'cdd_checklist' 
		),
		'results2' => array(
			'name' => 'results2',
			'goodName' => 'results2',
			'strField' => 'results2',
			'index' => 34,
			'type' => 201,
			'sqlExpression' => 'results2',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '$color="#FF4500";
$value="<font color=\'$color\'>$value</font>";',
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
			'tableName' => 'cdd_checklist' 
		),
		'results3' => array(
			'name' => 'results3',
			'goodName' => 'results3',
			'strField' => 'results3',
			'index' => 35,
			'type' => 201,
			'sqlExpression' => 'results3',
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'checked_date' => array(
			'name' => 'checked_date',
			'goodName' => 'checked_date',
			'strField' => 'checked_date',
			'index' => 36,
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
					'dateEditType' => 2,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cdd_checklist' 
		),
		'checked_by_cea' => array(
			'name' => 'checked_by_cea',
			'goodName' => 'checked_by_cea',
			'strField' => 'checked_by_cea',
			'index' => 37,
			'type' => 201,
			'sqlExpression' => 'checked_by_cea',
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
					'defaultValue' => '$_SESSION["UserID"]',
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
			'tableName' => 'cdd_checklist' 
		),
		'representing' => array(
			'name' => 'representing',
			'goodName' => 'representing',
			'strField' => 'representing',
			'index' => 38,
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
			'tableName' => 'cdd_checklist' 
		),
		'cdd_checklist_customer_nric' => array(
			'name' => 'cdd_checklist_customer_nric',
			'goodName' => 'cdd_checklist_customer_nric',
			'strField' => 'cdd_checklist_customer_nric',
			'index' => 39,
			'sqlExpression' => 'cdd_checklist_customer_nric',
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
					'textHTML5Input' => '0',
					'textareaHeight' => 30,
					'lookupSize' => 2,
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'parties_involved',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'nric',
					'lookupDisplayField' => 'nric',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'id_cddlist',
							'lookupField' => 'id_tx' 
						),
						array(
							'masterField' => 'cdd_checklist_customer',
							'lookupField' => 'name' 
						),
						array(
							'masterField' => 'representing',
							'lookupField' => 'role' 
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
			'tableName' => 'cdd_checklist' 
		),
		'cdd_checklist_custype' => array(
			'name' => 'cdd_checklist_custype',
			'goodName' => 'cdd_checklist_custype',
			'strField' => 'cdd_checklist_custype',
			'sourceSingle' => 'cdd_checklist_custype',
			'index' => 40,
			'sqlExpression' => 'cdd_checklist_custype',
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
			'tableName' => 'cdd_checklist' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	checked_by,
	cdd_checklist_customer,
	id_cddlist,
	list01,
	remark01,
	list02,
	remark02,
	list03,
	remark03,
	list04,
	remark04,
	list05,
	remark05,
	list06,
	remark06,
	list07,
	remark07,
	list08,
	remark08,
	list09,
	remark09,
	list10,
	remark10,
	list11,
	remark11,
	list12,
	remark12,
	list13,
	remark13,
	list14,
	remark14,
	results,
	results2,
	results3,
	checked_date,
	checked_by_cea,
	representing,
	cdd_checklist_customer_nric,
	cdd_checklist_custype
FROM
	cdd_checklist
ORDER BY
	id_cddlist DESC
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
					'table' => 'cdd_checklist',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
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
					'table' => 'cdd_checklist',
					'name' => 'checked_by' 
				),
				'encrypted' => false,
				'columnName' => 'checked_by' 
			),
			array(
				'sql' => 'cdd_checklist_customer',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'cdd_checklist_customer' 
				),
				'encrypted' => false,
				'columnName' => 'cdd_checklist_customer' 
			),
			array(
				'sql' => 'id_cddlist',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'id_cddlist' 
				),
				'encrypted' => false,
				'columnName' => 'id_cddlist' 
			),
			array(
				'sql' => 'list01',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list01' 
				),
				'encrypted' => false,
				'columnName' => 'list01' 
			),
			array(
				'sql' => 'remark01',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark01' 
				),
				'encrypted' => false,
				'columnName' => 'remark01' 
			),
			array(
				'sql' => 'list02',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list02' 
				),
				'encrypted' => false,
				'columnName' => 'list02' 
			),
			array(
				'sql' => 'remark02',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark02' 
				),
				'encrypted' => false,
				'columnName' => 'remark02' 
			),
			array(
				'sql' => 'list03',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list03' 
				),
				'encrypted' => false,
				'columnName' => 'list03' 
			),
			array(
				'sql' => 'remark03',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark03' 
				),
				'encrypted' => false,
				'columnName' => 'remark03' 
			),
			array(
				'sql' => 'list04',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list04' 
				),
				'encrypted' => false,
				'columnName' => 'list04' 
			),
			array(
				'sql' => 'remark04',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark04' 
				),
				'encrypted' => false,
				'columnName' => 'remark04' 
			),
			array(
				'sql' => 'list05',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list05' 
				),
				'encrypted' => false,
				'columnName' => 'list05' 
			),
			array(
				'sql' => 'remark05',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark05' 
				),
				'encrypted' => false,
				'columnName' => 'remark05' 
			),
			array(
				'sql' => 'list06',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list06' 
				),
				'encrypted' => false,
				'columnName' => 'list06' 
			),
			array(
				'sql' => 'remark06',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark06' 
				),
				'encrypted' => false,
				'columnName' => 'remark06' 
			),
			array(
				'sql' => 'list07',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list07' 
				),
				'encrypted' => false,
				'columnName' => 'list07' 
			),
			array(
				'sql' => 'remark07',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark07' 
				),
				'encrypted' => false,
				'columnName' => 'remark07' 
			),
			array(
				'sql' => 'list08',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list08' 
				),
				'encrypted' => false,
				'columnName' => 'list08' 
			),
			array(
				'sql' => 'remark08',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark08' 
				),
				'encrypted' => false,
				'columnName' => 'remark08' 
			),
			array(
				'sql' => 'list09',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list09' 
				),
				'encrypted' => false,
				'columnName' => 'list09' 
			),
			array(
				'sql' => 'remark09',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark09' 
				),
				'encrypted' => false,
				'columnName' => 'remark09' 
			),
			array(
				'sql' => 'list10',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list10' 
				),
				'encrypted' => false,
				'columnName' => 'list10' 
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
					'table' => 'cdd_checklist',
					'name' => 'remark10' 
				),
				'encrypted' => false,
				'columnName' => 'remark10' 
			),
			array(
				'sql' => 'list11',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list11' 
				),
				'encrypted' => false,
				'columnName' => 'list11' 
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
					'table' => 'cdd_checklist',
					'name' => 'remark11' 
				),
				'encrypted' => false,
				'columnName' => 'remark11' 
			),
			array(
				'sql' => 'list12',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list12' 
				),
				'encrypted' => false,
				'columnName' => 'list12' 
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
					'table' => 'cdd_checklist',
					'name' => 'remark12' 
				),
				'encrypted' => false,
				'columnName' => 'remark12' 
			),
			array(
				'sql' => 'list13',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list13' 
				),
				'encrypted' => false,
				'columnName' => 'list13' 
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
					'table' => 'cdd_checklist',
					'name' => 'remark13' 
				),
				'encrypted' => false,
				'columnName' => 'remark13' 
			),
			array(
				'sql' => 'list14',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'list14' 
				),
				'encrypted' => false,
				'columnName' => 'list14' 
			),
			array(
				'sql' => 'remark14',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'remark14' 
				),
				'encrypted' => false,
				'columnName' => 'remark14' 
			),
			array(
				'sql' => 'results',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'results' 
				),
				'encrypted' => false,
				'columnName' => 'results' 
			),
			array(
				'sql' => 'results2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'results2' 
				),
				'encrypted' => false,
				'columnName' => 'results2' 
			),
			array(
				'sql' => 'results3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'results3' 
				),
				'encrypted' => false,
				'columnName' => 'results3' 
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
					'table' => 'cdd_checklist',
					'name' => 'checked_date' 
				),
				'encrypted' => false,
				'columnName' => 'checked_date' 
			),
			array(
				'sql' => 'checked_by_cea',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'checked_by_cea' 
				),
				'encrypted' => false,
				'columnName' => 'checked_by_cea' 
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
					'table' => 'cdd_checklist',
					'name' => 'representing' 
				),
				'encrypted' => false,
				'columnName' => 'representing' 
			),
			array(
				'sql' => 'cdd_checklist_customer_nric',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'cdd_checklist_customer_nric' 
				),
				'encrypted' => false,
				'columnName' => 'cdd_checklist_customer_nric' 
			),
			array(
				'sql' => 'cdd_checklist_custype',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'cdd_checklist_custype' 
				),
				'encrypted' => false,
				'columnName' => 'cdd_checklist_custype' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'cdd_checklist',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'cdd_checklist',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'id_cddlist',
						'checked_by',
						'list01',
						'remark01',
						'list02',
						'remark02',
						'list03',
						'remark03',
						'list04',
						'remark04',
						'list05',
						'remark05',
						'list06',
						'remark06',
						'list07',
						'remark07',
						'list08',
						'remark08',
						'list09',
						'remark09',
						'list10',
						'remark10',
						'list11',
						'remark11',
						'list12',
						'remark12',
						'list13',
						'remark13',
						'cdd_checklist_customer',
						'list14',
						'remark14',
						'results',
						'results2',
						'results3',
						'checked_date',
						'checked_by_cea',
						'cdd_checklist_customer_type',
						'representing',
						'cdd_checklist_customer_nric',
						'cdd_checklist_cust_biz_reg',
						'cdd_checklist_custype' 
					),
					'name' => 'cdd_checklist' 
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
				'sql' => 'id_cddlist DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cdd_checklist',
					'name' => 'id_cddlist' 
				),
				'asc' => false,
				'columnNumber' => 4 
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
				'orderByIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	checked_by,
	cdd_checklist_customer,
	id_cddlist,
	list01,
	remark01,
	list02,
	remark02,
	list03,
	remark03,
	list04,
	remark04,
	list05,
	remark05,
	list06,
	remark06,
	list07,
	remark07,
	list08,
	remark08,
	list09,
	remark09,
	list10,
	remark10,
	list11,
	remark11,
	list12,
	remark12,
	list13,
	remark13,
	list14,
	remark14,
	results,
	results2,
	results3,
	checked_date,
	checked_by_cea,
	representing,
	cdd_checklist_customer_nric,
	cdd_checklist_custype',
		'fromListSql' => 'FROM
	cdd_checklist',
		'orderBySql' => 'ORDER BY
	id_cddlist DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'cdd_checklist',
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
			'checked_by',
			'cdd_checklist_customer',
			'id_cddlist',
			'list01',
			'remark01',
			'list02',
			'remark02',
			'list03',
			'remark03',
			'list04',
			'remark04',
			'list05',
			'remark05',
			'list06',
			'remark06',
			'list07',
			'remark07',
			'list08',
			'remark08',
			'list09',
			'remark09',
			'list10',
			'remark10',
			'list11',
			'remark11',
			'list12',
			'remark12',
			'list13',
			'remark13',
			'list14',
			'remark14',
			'results',
			'results2',
			'results3',
			'checked_date',
			'checked_by_cea',
			'representing',
			'cdd_checklist_customer_nric',
			'cdd_checklist_custype' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'checked_by',
			'cdd_checklist_customer',
			'id_cddlist',
			'list01',
			'remark01',
			'list02',
			'remark02',
			'list03',
			'remark03',
			'list04',
			'remark04',
			'list05',
			'remark05',
			'list06',
			'remark06',
			'list07',
			'remark07',
			'list08',
			'remark08',
			'list09',
			'remark09',
			'list10',
			'remark10',
			'list11',
			'remark11',
			'list12',
			'remark12',
			'list13',
			'remark13',
			'list14',
			'remark14',
			'results',
			'results2',
			'results3',
			'checked_date',
			'checked_by_cea',
			'representing',
			'cdd_checklist_customer_nric',
			'cdd_checklist_custype' 
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
			'cdd_checklist_customer' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'checked_by' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'checked_date' => array(
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
					'how' => 'goto',
					'page' => 'view',
					'table' => null,
					'url' => '' 
				) 
			),
			'id_cddlist' => array(
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
			'list01' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list02' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list03' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list04' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list05' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list06' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list07' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list08' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list09' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list10' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list11' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list12' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list13' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'list14' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark01' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark02' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark03' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark04' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark05' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark06' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark07' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark08' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark09' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark10' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark11' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark12' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark13' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remark14' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'results' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'results2' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'results3' => array(
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
	$runnerTableLabels['cdd_checklist-admin'] = array(
	'tableCaption' => 'Cdd Checklist-admin',
	'fieldLabels' => array(
		'id' => 'Id',
		'checked_by' => 'Checked By',
		'cdd_checklist_customer' => 'Client\'s Name',
		'id_cddlist' => 'Txn ID',
		'list01' => 'Is the client a foreigner* purchasing a property for this property transaction?',
		'remark01' => 'Remarks',
		'list02' => 'Is physical cash* used for the property purchase in this property transaction?',
		'remark02' => 'Remarks',
		'list03' => 'Are there doubts about the client\'s particulars provided to you for this property transaction?',
		'remark03' => 'Remarks',
		'list04' => 'There is adverse news concerning the client in the media or newspapers.',
		'remark04' => 'Remarks',
		'list05' => 'Client appears hesitant or declines to put his/her name on any document that would connect him/her with the property.',
		'remark05' => 'Remarks',
		'list06' => 'Client attempts to hide the identity of the true client or requests that the transaction be structured to hide the identity of the true client.',
		'remark06' => 'Remarks',
		'list07' => 'Client pays substantial down payment in cash, and the balance is financed by an offshore bank.',
		'remark07' => 'Remarks',
		'list08' => 'Client is unconcerned about the value of the property, and is willing to pay for the property or rent it at a much higher price than the market price; or sell the property or let it out much lower than the market price.',
		'remark08' => 'Remarks',
		'list09' => 'Client is planning to purchase or rent multiple properties in a short period of time.',
		'remark09' => 'Remarks',
		'list10' => 'Client is willing to purchase or rent the property without inspecting it.',
		'remark10' => 'Remarks',
		'list11' => 'Client pays rent for a long duration of lease in advance.',
		'remark11' => 'Remarks',
		'list12' => 'Client\'s known business activity and purpose does not match the property transaction, e.g. the client is a non-profit organisation but the property is purchased for investment and the client intends to take a large loan.',
		'remark12' => 'Remarks',
		'list13' => 'There is other suspicion (please specify):',
		'remark13' => 'Remarks',
		'list14' => 'Are you able to complete the <strong>Customer\'s Particulars Form</strong>? It is mandatory to do so. If it is not done, please state the reasons in the Remarks column.',
		'remark14' => 'Remarks',
		'results' => 'Results',
		'results2' => 'Results2',
		'results3' => 'Results3',
		'checked_date' => 'Dated',
		'checked_by_cea' => 'Checked By Cea',
		'representing' => 'Representing',
		'cdd_checklist_customer_nric' => 'Client\'s ID',
		'cdd_checklist_custype' => 'Cdd Checklist Custype' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'checked_by' => '',
		'cdd_checklist_customer' => '',
		'id_cddlist' => '',
		'list01' => '',
		'remark01' => '',
		'list02' => '',
		'remark02' => '',
		'list03' => '',
		'remark03' => '',
		'list04' => '',
		'remark04' => '',
		'list05' => '',
		'remark05' => '',
		'list06' => '',
		'remark06' => '',
		'list07' => '',
		'remark07' => '',
		'list08' => '',
		'remark08' => '',
		'list09' => '',
		'remark09' => '',
		'list10' => '',
		'remark10' => '',
		'list11' => '',
		'remark11' => '',
		'list12' => '',
		'remark12' => '',
		'list13' => '',
		'remark13' => '',
		'list14' => '',
		'remark14' => '',
		'results' => '',
		'results2' => '',
		'results3' => '',
		'checked_date' => '',
		'checked_by_cea' => '',
		'representing' => '',
		'cdd_checklist_customer_nric' => '',
		'cdd_checklist_custype' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'checked_by' => '',
		'cdd_checklist_customer' => '',
		'id_cddlist' => '',
		'list01' => '',
		'remark01' => '',
		'list02' => '',
		'remark02' => '',
		'list03' => '',
		'remark03' => '',
		'list04' => '',
		'remark04' => '',
		'list05' => '',
		'remark05' => '',
		'list06' => '',
		'remark06' => '',
		'list07' => '',
		'remark07' => '',
		'list08' => '',
		'remark08' => '',
		'list09' => '',
		'remark09' => '',
		'list10' => '',
		'remark10' => '',
		'list11' => '',
		'remark11' => '',
		'list12' => '',
		'remark12' => '',
		'list13' => '',
		'remark13' => '',
		'list14' => '',
		'remark14' => '',
		'results' => '',
		'results2' => '',
		'results3' => '',
		'checked_date' => '',
		'checked_by_cea' => '',
		'representing' => '',
		'cdd_checklist_customer_nric' => '',
		'cdd_checklist_custype' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>