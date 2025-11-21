<?php
global $runnerTableSettings;
$runnerTableSettings['agent_nametag_user'] = array(
	'name' => 'agent_nametag_user',
	'type' => 1,
	'shortName' => 'agent_nametag_user',
	'advancedSecurityType' => 1,
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
	'tableOwnerIdField' => 'cea_reg',
	'usersOwnerIdField' => 'username',
	'hasEncryptedFields' => true,
	'afterEditAction' => 0,
	'afterAddAction' => 0,
	'detailsBadgeColor' => 'B22222',
	'pageSizeRecords' => 10,
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
id,
docuserid,
agency,
agency_cea,
name,
biz_name,
cea_reg,
issue_date,
remarks,
image,
revoke_date,
signature,
sign_by
FROM agent_nametag',
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
			'tableName' => 'agent_nametag' 
		),
		'docuserid' => array(
			'name' => 'docuserid',
			'goodName' => 'docuserid',
			'strField' => 'docuserid',
			'index' => 2,
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
			'tableName' => 'agent_nametag' 
		),
		'agency' => array(
			'name' => 'agency',
			'goodName' => 'agency',
			'strField' => 'agency',
			'index' => 3,
			'sqlExpression' => 'agency',
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
					'defaultValue' => '$_SESSION["agency"]',
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agency',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'agency_cea',
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'agent_nametag' 
		),
		'agency_cea' => array(
			'name' => 'agency_cea',
			'goodName' => 'agency_cea',
			'strField' => 'agency_cea',
			'index' => 4,
			'type' => 201,
			'encrypted' => true,
			'sqlExpression' => 'agency_cea',
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
					'defaultValue' => '$_SESSION["agency_cea"]',
					'textboxSize' => 100,
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
							'masterField' => 'agency',
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
			'tableName' => 'agent_nametag' 
		),
		'name' => array(
			'name' => 'name',
			'goodName' => 'name',
			'strField' => 'name',
			'index' => 5,
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
					'defaultValue' => '$_SESSION["full_name"]',
					'textboxSize' => 150,
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'my_profile',
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'agent_nametag' 
		),
		'biz_name' => array(
			'name' => 'biz_name',
			'goodName' => 'biz_name',
			'strField' => 'biz_name',
			'index' => 6,
			'sqlExpression' => 'biz_name',
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
					'defaultValue' => '$_SESSION["name"]',
					'textboxSize' => 150,
					'textboxMaxLenth' => 30,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'my_profile',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'name',
					'lookupDisplayField' => 'name',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name',
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
			'tableName' => 'agent_nametag' 
		),
		'cea_reg' => array(
			'name' => 'cea_reg',
			'goodName' => 'cea_reg',
			'strField' => 'cea_reg',
			'index' => 7,
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
					'defaultValue' => '$_SESSION["username"]',
					'textboxSize' => 80,
					'textboxMaxLenth' => 10,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'my_profile',
					'lookupTableConnection' => 'Tables',
					'lookupLinkField' => 'cea_reg',
					'lookupDisplayField' => 'cea_reg',
					'lookupControlType' => 1,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'name',
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
			'tableName' => 'agent_nametag' 
		),
		'issue_date' => array(
			'name' => 'issue_date',
			'goodName' => 'issue_date',
			'strField' => 'issue_date',
			'index' => 8,
			'type' => 7,
			'sqlExpression' => 'issue_date',
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
					'fileThumbnailSize' => 150,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 5,
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
			'tableName' => 'agent_nametag' 
		),
		'remarks' => array(
			'name' => 'remarks',
			'goodName' => 'remarks',
			'strField' => 'remarks',
			'index' => 9,
			'sqlExpression' => 'remarks',
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
					'textboxMaxLenth' => 300,
					'textHTML5Input' => '0',
					'textareaHeight' => 60,
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
			'tableName' => 'agent_nametag' 
		),
		'image' => array(
			'name' => 'image',
			'goodName' => 'image',
			'strField' => 'image',
			'index' => 10,
			'type' => 201,
			'sqlExpression' => 'image',
			'deleteFile' => true,
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 300,
					'imageHeight' => 300,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
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
					'fileResizeSize' => 300,
					'fileCreateThumbnail' => true,
					'fileThumbnailSize' => 200,
					'fileMaxNumber' => 1,
					'fileSizeLimit' => 1000,
					'fileTypes' => array( 
						'bmp',
						'gif',
						'jpg',
						'png' 
					),
					'fileThumbnailField' => 'th',
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'searchOptions' => array( 
				'Contains',
				'Equals',
				'Empty',
				'NOT Contains',
				'NOT Equals',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'agent_nametag' 
		),
		'revoke_date' => array(
			'name' => 'revoke_date',
			'goodName' => 'revoke_date',
			'strField' => 'revoke_date',
			'index' => 11,
			'type' => 7,
			'sqlExpression' => 'revoke_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'customExpression' => '$color="red";
$value="<font color=\'$color\'>$value</font>";',
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
					'dateEditType' => 5,
					'dateFirstYearFactor' => 30,
					'dateLastYearFactor' => 1,
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => '',
			'searchOptions' => array( 
				'Equals',
				'More than',
				'Less than',
				'Between',
				'Empty',
				'NOT Equals',
				'NOT More than',
				'NOT Less than',
				'NOT Between',
				'NOT Empty' 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'agent_nametag' 
		),
		'signature' => array(
			'name' => 'signature',
			'goodName' => 'signature',
			'strField' => 'signature',
			'index' => 12,
			'sqlExpression' => 'signature',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 457,
					'imageHeight' => 0,
					'imageThumbWidth' => 72,
					'imageThumbHeight' => 72,
					'videoRewindEnabled' => false 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'SignaturePad',
					'textboxMaxLenth' => 50,
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
$this->settings["width"] = 300;
// signature background color
$this->settings["bgcolor"] = array(0xff, 0xff, 0xff);
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="files";
// signature pen color
$this->settings["color"] = "#000000";
// signature line width
$this->settings["linewidth"] = 2;' 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'agent_nametag' 
		),
		'sign_by' => array(
			'name' => 'sign_by',
			'goodName' => 'sign_by',
			'strField' => 'sign_by',
			'index' => 13,
			'sqlExpression' => 'sign_by',
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
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'agents',
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
			'tableName' => 'agent_nametag' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
id,
docuserid,
agency,
agency_cea,
name,
biz_name,
cea_reg,
issue_date,
remarks,
image,
revoke_date,
signature,
sign_by
FROM agent_nametag',
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
					'table' => 'agent_nametag',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
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
					'table' => 'agent_nametag',
					'name' => 'docuserid' 
				),
				'encrypted' => false,
				'columnName' => 'docuserid' 
			),
			array(
				'sql' => 'agency',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'agent_nametag',
					'name' => 'agency' 
				),
				'encrypted' => false,
				'columnName' => 'agency' 
			),
			array(
				'sql' => 'agency_cea',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'agent_nametag',
					'name' => 'agency_cea' 
				),
				'encrypted' => true,
				'columnName' => 'agency_cea' 
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
					'table' => 'agent_nametag',
					'name' => 'name' 
				),
				'encrypted' => false,
				'columnName' => 'name' 
			),
			array(
				'sql' => 'biz_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'agent_nametag',
					'name' => 'biz_name' 
				),
				'encrypted' => false,
				'columnName' => 'biz_name' 
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
					'table' => 'agent_nametag',
					'name' => 'cea_reg' 
				),
				'encrypted' => true,
				'columnName' => 'cea_reg' 
			),
			array(
				'sql' => 'issue_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'agent_nametag',
					'name' => 'issue_date' 
				),
				'encrypted' => false,
				'columnName' => 'issue_date' 
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
					'table' => 'agent_nametag',
					'name' => 'remarks' 
				),
				'encrypted' => false,
				'columnName' => 'remarks' 
			),
			array(
				'sql' => 'image',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'agent_nametag',
					'name' => 'image' 
				),
				'encrypted' => false,
				'columnName' => 'image' 
			),
			array(
				'sql' => 'revoke_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'agent_nametag',
					'name' => 'revoke_date' 
				),
				'encrypted' => false,
				'columnName' => 'revoke_date' 
			),
			array(
				'sql' => 'signature',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'agent_nametag',
					'name' => 'signature' 
				),
				'encrypted' => false,
				'columnName' => 'signature' 
			),
			array(
				'sql' => 'sign_by',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'agent_nametag',
					'name' => 'sign_by' 
				),
				'encrypted' => false,
				'columnName' => 'sign_by' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'agent_nametag',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'agent_nametag',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'docuserid',
						'agency',
						'agency_cea',
						'name',
						'biz_name',
						'cea_reg',
						'expiry',
						'issue_date',
						'remarks',
						'photo',
						'image',
						'revoke_date',
						'signature',
						'sign_by' 
					),
					'name' => 'agent_nametag' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
docuserid,
agency,
agency_cea,
name,
biz_name,
cea_reg,
issue_date,
remarks,
image,
revoke_date,
signature,
sign_by',
		'fromListSql' => 'FROM agent_nametag',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'agent_nametag',
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
			'docuserid',
			'agency',
			'agency_cea',
			'name',
			'biz_name',
			'cea_reg',
			'issue_date',
			'remarks',
			'image',
			'revoke_date',
			'signature',
			'sign_by' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'agency',
			'agency_cea',
			'name',
			'biz_name',
			'cea_reg',
			'issue_date',
			'remarks',
			'revoke_date',
			'signature',
			'sign_by' 
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
			'agency' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'agency_cea' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'biz_name' => array(
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
			'docuserid' => array(
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
			'image' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'issue_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'name' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'remarks' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'revoke_date' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'sign_by' => array(
				'action' => 'noaction',
				'codeData' => array(
					 
				),
				'gridData' => array(
					 
				),
				'openData' => array(
					 
				) 
			),
			'signature' => array(
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
	$runnerTableLabels['agent_nametag_user'] = array(
	'tableCaption' => 'Agent Name Tag',
	'fieldLabels' => array(
		'id' => 'Id',
		'docuserid' => 'Docuserid',
		'agency' => 'Agency',
		'agency_cea' => 'Agency CEA #',
		'name' => 'Name',
		'biz_name' => 'Biz Name',
		'cea_reg' => 'CEA Reg.',
		'issue_date' => 'Date of Issue',
		'remarks' => 'Remarks',
		'image' => 'Scanned Copy of Name Tag',
		'revoke_date' => 'Date of Revocation',
		'signature' => 'Signature',
		'sign_by' => 'Sign By' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'docuserid' => '',
		'agency' => '',
		'agency_cea' => '',
		'name' => '',
		'biz_name' => '',
		'cea_reg' => '',
		'issue_date' => '',
		'remarks' => '',
		'image' => '',
		'revoke_date' => '',
		'signature' => '',
		'sign_by' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'docuserid' => '',
		'agency' => '',
		'agency_cea' => '',
		'name' => '',
		'biz_name' => '',
		'cea_reg' => '',
		'issue_date' => '',
		'remarks' => '',
		'image' => '',
		'revoke_date' => '',
		'signature' => '',
		'sign_by' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>