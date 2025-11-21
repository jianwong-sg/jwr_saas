<?php
global $runnerTableSettings;
$runnerTableSettings['reply_lister'] = array(
	'name' => 'reply_lister',
	'shortName' => 'reply_lister',
	'pagesByType' => array(
		'add' => array( 
			'add' 
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
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'afterEditAction' => 0,
	'afterAddAction' => 0,
	'detailsBadgeColor' => 'EDCA00',
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
	dateadded,
	message,
	replyid,
	sender_email,
	sender_mobile,
	sender_name,
	subject
FROM reply_lister',
	'keyFields' => array( 
		'replyid' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'dateadded' => array(
			'name' => 'dateadded',
			'goodName' => 'dateadded',
			'strField' => 'dateadded',
			'index' => 1,
			'type' => 7,
			'sqlExpression' => 'dateadded',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'imageWidth' => 0,
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
					'textboxSize' => 143,
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'reply_lister' 
		),
		'message' => array(
			'name' => 'message',
			'goodName' => 'message',
			'strField' => 'message',
			'index' => 2,
			'sqlExpression' => 'message',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
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
					'textboxSize' => 143,
					'textboxMaxLenth' => 50,
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'reply_lister' 
		),
		'replyid' => array(
			'name' => 'replyid',
			'goodName' => 'replyid',
			'strField' => 'replyid',
			'index' => 3,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'replyid',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
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
					'textboxSize' => 143,
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'reply_lister' 
		),
		'sender_email' => array(
			'name' => 'sender_email',
			'goodName' => 'sender_email',
			'strField' => 'sender_email',
			'index' => 4,
			'sqlExpression' => 'sender_email',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
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
					'textboxSize' => 143,
					'textboxMaxLenth' => 50,
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'reply_lister' 
		),
		'sender_mobile' => array(
			'name' => 'sender_mobile',
			'goodName' => 'sender_mobile',
			'strField' => 'sender_mobile',
			'index' => 5,
			'sqlExpression' => 'sender_mobile',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
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
					'textboxSize' => 143,
					'textboxMaxLenth' => 50,
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'reply_lister' 
		),
		'sender_name' => array(
			'name' => 'sender_name',
			'goodName' => 'sender_name',
			'strField' => 'sender_name',
			'index' => 6,
			'sqlExpression' => 'sender_name',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
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
					'textboxSize' => 143,
					'textboxMaxLenth' => 50,
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'reply_lister' 
		),
		'subject' => array(
			'name' => 'subject',
			'goodName' => 'subject',
			'strField' => 'subject',
			'index' => 7,
			'sqlExpression' => 'subject',
			'viewFormats' => array(
				'view' => array(
					'imageWidth' => 0,
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
					'textboxSize' => 143,
					'textboxMaxLenth' => 50,
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
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1 
			),
			'tableName' => 'reply_lister' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	dateadded,
	message,
	replyid,
	sender_email,
	sender_mobile,
	sender_name,
	subject
FROM reply_lister',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'dateadded',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'reply_lister',
					'name' => 'dateadded' 
				),
				'encrypted' => false,
				'columnName' => 'dateadded' 
			),
			array(
				'sql' => 'message',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'reply_lister',
					'name' => 'message' 
				),
				'encrypted' => false,
				'columnName' => 'message' 
			),
			array(
				'sql' => 'replyid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'reply_lister',
					'name' => 'replyid' 
				),
				'encrypted' => false,
				'columnName' => 'replyid' 
			),
			array(
				'sql' => 'sender_email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'reply_lister',
					'name' => 'sender_email' 
				),
				'encrypted' => false,
				'columnName' => 'sender_email' 
			),
			array(
				'sql' => 'sender_mobile',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'reply_lister',
					'name' => 'sender_mobile' 
				),
				'encrypted' => false,
				'columnName' => 'sender_mobile' 
			),
			array(
				'sql' => 'sender_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'reply_lister',
					'name' => 'sender_name' 
				),
				'encrypted' => false,
				'columnName' => 'sender_name' 
			),
			array(
				'sql' => 'subject',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'reply_lister',
					'name' => 'subject' 
				),
				'encrypted' => false,
				'columnName' => 'subject' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'reply_lister',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'reply_lister',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'replyid',
						'dateadded',
						'subject',
						'sender_name',
						'sender_email',
						'sender_mobile',
						'message' 
					),
					'name' => 'reply_lister' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'dateadded,
	message,
	replyid,
	sender_email,
	sender_mobile,
	sender_name,
	subject',
		'fromListSql' => 'FROM reply_lister',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'reply_lister',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
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
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
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
			'dateadded',
			'message',
			'replyid',
			'sender_email',
			'sender_mobile',
			'sender_name',
			'subject' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'dateadded',
			'message',
			'replyid',
			'sender_email',
			'sender_mobile',
			'sender_name',
			'subject' 
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
	$runnerTableLabels['reply_lister'] = array(
	'tableCaption' => 'Reply Lister',
	'fieldLabels' => array(
		'dateadded' => 'Dateadded',
		'message' => 'Message',
		'replyid' => 'Replyid',
		'sender_email' => 'Sender Email',
		'sender_mobile' => 'Sender Mobile',
		'sender_name' => 'Sender Name',
		'subject' => 'Subject' 
	),
	'fieldTooltips' => array(
		'dateadded' => '',
		'message' => '',
		'replyid' => '',
		'sender_email' => '',
		'sender_mobile' => '',
		'sender_name' => '',
		'subject' => '' 
	),
	'fieldPlaceholders' => array(
		'dateadded' => '',
		'message' => '',
		'replyid' => '',
		'sender_email' => '',
		'sender_mobile' => '',
		'sender_name' => '',
		'subject' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>