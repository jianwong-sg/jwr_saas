<?php
global $runnerTableSettings;
$runnerTableSettings['cpd_trainings_user'] = array(
	'name' => 'cpd_trainings_user',
	'type' => 1,
	'shortName' => 'cpd_trainings_user',
	'advancedSecurityType' => 1,
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
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'tableOwnerIdField' => 'cea_reg',
	'usersOwnerIdField' => 'username',
	'hasEncryptedFields' => true,
	'listAjax' => true,
	'afterEditAction' => 0,
	'afterAddAction' => 0,
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
	'displayLoading' => true,
	'sql' => 'SELECT
cpdtrainingid,
cea_reg,
name,
cpd_type,
period,
provider,
activity,
cpd_hour,
startdate,
enddate,
doc_upload,
docuserid,
dateupdated,
cost
FROM cpd_trainings',
	'keyFields' => array( 
		'cpdtrainingid' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'cpdtrainingid' => array(
			'name' => 'cpdtrainingid',
			'goodName' => 'cpdtrainingid',
			'strField' => 'cpdtrainingid',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'cpdtrainingid',
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
					'required' => true,
					'validateAs' => 'Number',
					'textboxSize' => 10,
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainings' 
		),
		'cea_reg' => array(
			'name' => 'cea_reg',
			'goodName' => 'cea_reg',
			'strField' => 'cea_reg',
			'index' => 2,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'cea_reg',
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
					'required' => true,
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
			'searchOptions' => array( 
				'Contains',
				'Equals',
				'Starts with',
				'More than',
				'Less than',
				'Between',
				'Empty',
				'NOT Contains',
				'NOT Equals',
				'NOT Starts with',
				'NOT More than',
				'NOT Less than',
				'NOT Between',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainings' 
		),
		'name' => array(
			'name' => 'name',
			'goodName' => 'name',
			'strField' => 'name',
			'index' => 3,
			'sqlExpression' => 'name',
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
					'required' => true,
					'defaultValue' => '$_SESSION["FullName"]',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupLinkField' => 'full_name',
					'lookupDisplayField' => 'full_name',
					'lookupControlType' => 1,
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
				'More than',
				'Less than',
				'Between',
				'Empty',
				'NOT Contains',
				'NOT Equals',
				'NOT Starts with',
				'NOT More than',
				'NOT Less than',
				'NOT Between',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainings' 
		),
		'cpd_type' => array(
			'name' => 'cpd_type',
			'goodName' => 'cpd_type',
			'strField' => 'cpd_type',
			'index' => 4,
			'sqlExpression' => 'cpd_type',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => 'if ($value!="Core")
$color="green";
else
$color="red";
$value="<font color=\'$color\'>$value</font>";',
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxSize' => 90,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupValues' => array( 
						'Core',
						'Non-Core',
						'Misc' 
					),
					'lookupTable' => 'cpd_activities',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'type',
					'lookupDisplayField' => 'type',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'activity',
							'lookupField' => 'activities' 
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainings' 
		),
		'period' => array(
			'name' => 'period',
			'goodName' => 'period',
			'strField' => 'period',
			'index' => 5,
			'sqlExpression' => 'period',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => 'if ($value==$_SESSION["period"])
$value="";
else
$_SESSION["period"]=$value;',
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'defaultValue' => '$_SESSION["period"]',
					'autoUpdateValue' => '$_SESSION["period"]',
					'textboxSize' => 250,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupValues' => array( 
						'01/10/2013  -  30/09/2014',
						'01/01/2013  -  30/09/2013',
						'01/01/2012  -  31/12/2012',
						'01/04/2011  -  30/04/2012' 
					),
					'lookupTable' => 'cpd_period',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'period',
					'lookupDisplayField' => 'period',
					'lookupAllowAdd' => true,
					'lookupAutofillEdit' => true,
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 13,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'searchOptions' => array( 
				'Contains',
				'Equals',
				'Starts with',
				'More than',
				'Less than',
				'Between',
				'Empty',
				'NOT Contains',
				'NOT Equals',
				'NOT Starts with',
				'NOT More than',
				'NOT Less than',
				'NOT Between',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotalsField' => 'cpdtrainingid' 
			),
			'tableName' => 'cpd_trainings' 
		),
		'provider' => array(
			'name' => 'provider',
			'goodName' => 'provider',
			'strField' => 'provider',
			'index' => 6,
			'sqlExpression' => 'provider',
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
					'required' => true,
					'textboxSize' => 250,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupTable' => 'cpd_providers',
					'lookupLinkField' => 'provider',
					'lookupDisplayField' => 'provider',
					'lookupOrderBy' => 'provider',
					'lookupAllowAdd' => true,
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
			'tableName' => 'cpd_trainings' 
		),
		'activity' => array(
			'name' => 'activity',
			'goodName' => 'activity',
			'strField' => 'activity',
			'index' => 7,
			'sqlExpression' => 'activity',
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
					'required' => true,
					'textboxSize' => 250,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupTable' => 'cpd_activities',
					'lookupLinkField' => 'activities',
					'lookupDisplayField' => 'activities',
					'lookupOrderBy' => 'activities',
					'lookupAllowAdd' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'provider',
							'lookupField' => 'provider' 
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainings' 
		),
		'cpd_hour' => array(
			'name' => 'cpd_hour',
			'goodName' => 'cpd_hour',
			'strField' => 'cpd_hour',
			'index' => 8,
			'sqlExpression' => 'cpd_hour',
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
					'textboxSize' => 90,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'cpd_activities',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'hour',
					'lookupDisplayField' => 'hour',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'activity',
							'lookupField' => 'activities' 
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainings' 
		),
		'startdate' => array(
			'name' => 'startdate',
			'goodName' => 'startdate',
			'strField' => 'startdate',
			'index' => 9,
			'type' => 7,
			'sqlExpression' => 'startdate',
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
					'textboxSize' => 100,
					'textHTML5Input' => '0',
					'lookupTableConnection' => 'Tables',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 2,
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
			'tableName' => 'cpd_trainings' 
		),
		'enddate' => array(
			'name' => 'enddate',
			'goodName' => 'enddate',
			'strField' => 'enddate',
			'index' => 10,
			'type' => 7,
			'sqlExpression' => 'enddate',
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
					'textboxSize' => 100,
					'textHTML5Input' => '0',
					'lookupTableConnection' => 'Tables',
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 2,
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
			'tableName' => 'cpd_trainings' 
		),
		'doc_upload' => array(
			'name' => 'doc_upload',
			'goodName' => 'doc_upload',
			'strField' => 'doc_upload',
			'index' => 11,
			'type' => 201,
			'sqlExpression' => 'doc_upload',
			'uploadFolder' => 'CPD-files',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Document Download',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'fileShowSize' => true,
					'fileShowIcon' => false,
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
					'lookupTableConnection' => 'Tables',
					'fileResize' => true,
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileTypes' => array( 
						'pdf' 
					),
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
			'tableName' => 'cpd_trainings' 
		),
		'docuserid' => array(
			'name' => 'docuserid',
			'goodName' => 'docuserid',
			'strField' => 'docuserid',
			'index' => 12,
			'type' => 3,
			'sqlExpression' => 'docuserid',
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
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainings' 
		),
		'dateupdated' => array(
			'name' => 'dateupdated',
			'goodName' => 'dateupdated',
			'strField' => 'dateupdated',
			'index' => 13,
			'type' => 7,
			'sqlExpression' => 'dateupdated',
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
					'format' => 'Readonly',
					'defaultValue' => 'now()',
					'textboxSize' => 100,
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainings' 
		),
		'cost' => array(
			'name' => 'cost',
			'goodName' => 'cost',
			'strField' => 'cost',
			'index' => 14,
			'sqlExpression' => 'cost',
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
					'validateAs' => 'Number',
					'textboxSize' => 50,
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
			'defaultSearchOption' => '',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainings' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
cpdtrainingid,
cea_reg,
name,
cpd_type,
period,
provider,
activity,
cpd_hour,
startdate,
enddate,
doc_upload,
docuserid,
dateupdated,
cost
FROM cpd_trainings',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'cpdtrainingid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'cpdtrainingid' 
				),
				'encrypted' => false,
				'columnName' => 'cpdtrainingid' 
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
					'table' => 'cpd_trainings',
					'name' => 'cea_reg' 
				),
				'encrypted' => true,
				'columnName' => 'cea_reg' 
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
					'table' => 'cpd_trainings',
					'name' => 'name' 
				),
				'encrypted' => false,
				'columnName' => 'name' 
			),
			array(
				'sql' => 'cpd_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'cpd_type' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_type' 
			),
			array(
				'sql' => 'period',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'period' 
				),
				'encrypted' => false,
				'columnName' => 'period' 
			),
			array(
				'sql' => 'provider',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'provider' 
				),
				'encrypted' => false,
				'columnName' => 'provider' 
			),
			array(
				'sql' => 'activity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'activity' 
				),
				'encrypted' => false,
				'columnName' => 'activity' 
			),
			array(
				'sql' => 'cpd_hour',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'cpd_hour' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_hour' 
			),
			array(
				'sql' => 'startdate',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'startdate' 
				),
				'encrypted' => false,
				'columnName' => 'startdate' 
			),
			array(
				'sql' => 'enddate',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'enddate' 
				),
				'encrypted' => false,
				'columnName' => 'enddate' 
			),
			array(
				'sql' => 'doc_upload',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'doc_upload' 
				),
				'encrypted' => false,
				'columnName' => 'doc_upload' 
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
					'table' => 'cpd_trainings',
					'name' => 'docuserid' 
				),
				'encrypted' => false,
				'columnName' => 'docuserid' 
			),
			array(
				'sql' => 'dateupdated',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'dateupdated' 
				),
				'encrypted' => false,
				'columnName' => 'dateupdated' 
			),
			array(
				'sql' => 'cost',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainings',
					'name' => 'cost' 
				),
				'encrypted' => false,
				'columnName' => 'cost' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'cpd_trainings',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'cpd_trainings',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'cpdtrainingid',
						'cpd_type',
						'period',
						'provider',
						'activity',
						'cpd_hour',
						'startdate',
						'enddate',
						'doc_upload',
						'docuserid',
						'dateupdated',
						'cost',
						'cea_reg',
						'name',
						'cpd_recordid' 
					),
					'name' => 'cpd_trainings' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'cpdtrainingid,
cea_reg,
name,
cpd_type,
period,
provider,
activity,
cpd_hour,
startdate,
enddate,
doc_upload,
docuserid,
dateupdated,
cost',
		'fromListSql' => 'FROM cpd_trainings',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'cpd_trainings',
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
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'cpdtrainingid',
			'cea_reg',
			'name',
			'cpd_type',
			'period',
			'provider',
			'activity',
			'cpd_hour',
			'startdate',
			'enddate',
			'doc_upload',
			'docuserid',
			'dateupdated',
			'cost' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'cea_reg',
			'name',
			'period' 
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
	$runnerTableLabels['cpd_trainings_user'] = array(
	'tableCaption' => 'CPD Records',
	'fieldLabels' => array(
		'cpdtrainingid' => 'Cpdtrainingid',
		'cea_reg' => 'CEA Reg',
		'name' => 'Name',
		'cpd_type' => 'Type',
		'period' => 'Cycle',
		'provider' => 'Course Provider',
		'activity' => 'Course Title',
		'cpd_hour' => 'Hour',
		'startdate' => 'Attendance Start Date',
		'enddate' => 'Attendance End date',
		'doc_upload' => 'Cert. Upload',
		'docuserid' => 'Docuserid',
		'dateupdated' => 'Date Updated',
		'cost' => 'Course Fee' 
	),
	'fieldTooltips' => array(
		'cpdtrainingid' => '',
		'cea_reg' => '',
		'name' => '',
		'cpd_type' => '',
		'period' => '',
		'provider' => '',
		'activity' => '',
		'cpd_hour' => '',
		'startdate' => '',
		'enddate' => '',
		'doc_upload' => '',
		'docuserid' => '',
		'dateupdated' => '',
		'cost' => 'Input digit only' 
	),
	'fieldPlaceholders' => array(
		'cpdtrainingid' => '',
		'cea_reg' => '',
		'name' => '',
		'cpd_type' => '',
		'period' => '',
		'provider' => '',
		'activity' => '',
		'cpd_hour' => '',
		'startdate' => '',
		'enddate' => '',
		'doc_upload' => '',
		'docuserid' => '',
		'dateupdated' => '',
		'cost' => 'E.g 35' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>