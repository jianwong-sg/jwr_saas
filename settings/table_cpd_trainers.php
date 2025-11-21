<?php
global $runnerTableSettings;
$runnerTableSettings['cpd_trainers'] = array(
	'name' => 'cpd_trainers',
	'shortName' => 'cpd_trainers',
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
	'tableOwnerIdField' => 'docuserid',
	'usersOwnerIdField' => 'user_id',
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
	activity,
	cpd_hour,
	cpd_type,
	cpdtrainerid,
	dateupdated,
	doc_upload,
	docuserid,
	enddate,
	period,
	provider,
	startdate
FROM cpd_trainers',
	'keyFields' => array( 
		'cpdtrainerid' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'activity' => array(
			'name' => 'activity',
			'goodName' => 'activity',
			'strField' => 'activity',
			'index' => 1,
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainers' 
		),
		'cpd_hour' => array(
			'name' => 'cpd_hour',
			'goodName' => 'cpd_hour',
			'strField' => 'cpd_hour',
			'index' => 2,
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
					'required' => true,
					'textboxSize' => 90,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupTable' => 'cpd_hours',
					'lookupLinkField' => 'cpd_hour',
					'lookupDisplayField' => 'cpd_hour',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'activity',
							'lookupField' => 'cpd_activity' 
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
			'tableName' => 'cpd_trainers' 
		),
		'cpd_type' => array(
			'name' => 'cpd_type',
			'goodName' => 'cpd_type',
			'strField' => 'cpd_type',
			'index' => 3,
			'sqlExpression' => 'cpd_type',
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
					'textboxSize' => 90,
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupTable' => 'cpd_types',
					'lookupLinkField' => 'cpd_type',
					'lookupDisplayField' => 'cpd_type',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'activity',
							'lookupField' => 'cpd_activity' 
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
			'tableName' => 'cpd_trainers' 
		),
		'cpdtrainerid' => array(
			'name' => 'cpdtrainerid',
			'goodName' => 'cpdtrainerid',
			'strField' => 'cpdtrainerid',
			'index' => 4,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'cpdtrainerid',
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
					'lookupTableConnection' => 'Tables',
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
			'tableName' => 'cpd_trainers' 
		),
		'dateupdated' => array(
			'name' => 'dateupdated',
			'goodName' => 'dateupdated',
			'strField' => 'dateupdated',
			'index' => 5,
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
					'dateEditType' => 13,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainers' 
		),
		'doc_upload' => array(
			'name' => 'doc_upload',
			'goodName' => 'doc_upload',
			'strField' => 'doc_upload',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => 'doc_upload',
			'uploadFolder' => 'CPD-files-trainer',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainers' 
		),
		'docuserid' => array(
			'name' => 'docuserid',
			'goodName' => 'docuserid',
			'strField' => 'docuserid',
			'index' => 7,
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainers' 
		),
		'enddate' => array(
			'name' => 'enddate',
			'goodName' => 'enddate',
			'strField' => 'enddate',
			'index' => 8,
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
					'textboxSize' => 150,
					'textHTML5Input' => '0',
					'lookupTableConnection' => 'Tables',
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
			'tableName' => 'cpd_trainers' 
		),
		'period' => array(
			'name' => 'period',
			'goodName' => 'period',
			'strField' => 'period',
			'index' => 9,
			'sqlExpression' => 'period',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'cpd_trainers' 
		),
		'provider' => array(
			'name' => 'provider',
			'goodName' => 'provider',
			'strField' => 'provider',
			'index' => 10,
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'cpd_trainers' 
		),
		'startdate' => array(
			'name' => 'startdate',
			'goodName' => 'startdate',
			'strField' => 'startdate',
			'index' => 11,
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
					'textboxSize' => 150,
					'textHTML5Input' => '0',
					'lookupTableConnection' => 'Tables',
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
			'tableName' => 'cpd_trainers' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	activity,
	cpd_hour,
	cpd_type,
	cpdtrainerid,
	dateupdated,
	doc_upload,
	docuserid,
	enddate,
	period,
	provider,
	startdate
FROM cpd_trainers',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'activity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainers',
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
					'table' => 'cpd_trainers',
					'name' => 'cpd_hour' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_hour' 
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
					'table' => 'cpd_trainers',
					'name' => 'cpd_type' 
				),
				'encrypted' => false,
				'columnName' => 'cpd_type' 
			),
			array(
				'sql' => 'cpdtrainerid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'cpd_trainers',
					'name' => 'cpdtrainerid' 
				),
				'encrypted' => false,
				'columnName' => 'cpdtrainerid' 
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
					'table' => 'cpd_trainers',
					'name' => 'dateupdated' 
				),
				'encrypted' => false,
				'columnName' => 'dateupdated' 
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
					'table' => 'cpd_trainers',
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
					'table' => 'cpd_trainers',
					'name' => 'docuserid' 
				),
				'encrypted' => false,
				'columnName' => 'docuserid' 
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
					'table' => 'cpd_trainers',
					'name' => 'enddate' 
				),
				'encrypted' => false,
				'columnName' => 'enddate' 
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
					'table' => 'cpd_trainers',
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
					'table' => 'cpd_trainers',
					'name' => 'provider' 
				),
				'encrypted' => false,
				'columnName' => 'provider' 
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
					'table' => 'cpd_trainers',
					'name' => 'startdate' 
				),
				'encrypted' => false,
				'columnName' => 'startdate' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'cpd_trainers',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'cpd_trainers',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'cpdtrainerid',
						'cpd_type',
						'period',
						'provider',
						'activity',
						'cpd_hour',
						'startdate',
						'enddate',
						'doc_upload',
						'docuserid',
						'dateupdated' 
					),
					'name' => 'cpd_trainers' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'activity,
	cpd_hour,
	cpd_type,
	cpdtrainerid,
	dateupdated,
	doc_upload,
	docuserid,
	enddate,
	period,
	provider,
	startdate',
		'fromListSql' => 'FROM cpd_trainers',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'cpd_trainers',
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
			'activity',
			'cpd_hour',
			'cpd_type',
			'cpdtrainerid',
			'dateupdated',
			'doc_upload',
			'docuserid',
			'enddate',
			'period',
			'provider',
			'startdate' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'activity',
			'cpd_type',
			'docuserid',
			'period',
			'provider' 
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
	$runnerTableLabels['cpd_trainers'] = array(
	'tableCaption' => 'CPD Trainers',
	'fieldLabels' => array(
		'activity' => 'Course Title',
		'cpd_hour' => 'CPD Hour',
		'cpd_type' => 'Type',
		'cpdtrainerid' => 'Cpdtrainerid',
		'dateupdated' => 'Date Updated',
		'doc_upload' => 'Doc Upload',
		'docuserid' => 'Docuserid',
		'enddate' => 'End date',
		'period' => 'CPD Window Period',
		'provider' => 'Course Provider',
		'startdate' => 'Start date' 
	),
	'fieldTooltips' => array(
		'activity' => '',
		'cpd_hour' => '',
		'cpd_type' => '',
		'cpdtrainerid' => '',
		'dateupdated' => '',
		'doc_upload' => '',
		'docuserid' => '',
		'enddate' => '',
		'period' => '',
		'provider' => '',
		'startdate' => '' 
	),
	'fieldPlaceholders' => array(
		'activity' => '',
		'cpd_hour' => '',
		'cpd_type' => '',
		'cpdtrainerid' => '',
		'dateupdated' => '',
		'doc_upload' => '',
		'docuserid' => '',
		'enddate' => '',
		'period' => '',
		'provider' => '',
		'startdate' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>