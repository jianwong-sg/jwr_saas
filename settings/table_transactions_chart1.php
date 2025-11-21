<?php
global $runnerTableSettings;
$runnerTableSettings['transactions_chart_pub'] = array(
	'name' => 'transactions_chart_pub',
	'type' => 3,
	'shortName' => 'transactions_chart1',
	'pagesByType' => array(
		'chart' => array( 
			'chart' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'chart' => 'chart',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'chart' => 'chart',
		'search' => 'search' 
	),
	'tableOwnerIdField' => 'Transacted Type',
	'usersOwnerIdField' => 'eatuser_id',
	'detailsBadgeColor' => 'BC8F8F',
	'pageSizeRecords' => 5,
	'pageSizeSelectorRecords' => array( 
		'10',
		'20',
		'30',
		'50',
		'100',
		'500',
		'1' 
	),
	'pageSizeSelectorGroups' => array( 
		'1',
		'3',
		'5',
		'10',
		'50',
		'100',
		'1' 
	),
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	category AS `Transacted Type`,
	COUNT(`date`) AS `COUNT(date)`,
	SUM(`date`) AS Total
FROM
	transactions
GROUP BY
	category
',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'Transacted Type' => array(
			'name' => 'Transacted Type',
			'goodName' => 'Transacted_Type',
			'strField' => 'category',
			'index' => 1,
			'sqlExpression' => 'category',
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
			'tableName' => 'transactions' 
		),
		'COUNT(date)' => array(
			'name' => 'COUNT(date)',
			'goodName' => 'COUNT_date_',
			'strField' => 'COUNT(date)',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'COUNT(`date`)',
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'Total' => array(
			'name' => 'Total',
			'goodName' => 'Total',
			'strField' => 'Total',
			'index' => 3,
			'type' => 14,
			'sqlExpression' => 'SUM(`date`)',
			'viewFormats' => array(
				'chart' => array(
					'format' => 'Number',
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	category AS `Transacted Type`,
	COUNT(`date`) AS `COUNT(date)`,
	SUM(`date`) AS Total
FROM
	transactions
GROUP BY
	category
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'category',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'Transacted Type',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'category' 
				),
				'encrypted' => false,
				'columnName' => 'Transacted Type' 
			),
			array(
				'sql' => 'COUNT(`date`)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'COUNT(date)',
				'expression' => array(
					'sql' => 'COUNT(`date`)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'transactions',
							'name' => 'date' 
						) 
					),
					'functionName' => 'COUNT',
					'functionType' => 4 
				),
				'encrypted' => false,
				'columnName' => 'COUNT(date)' 
			),
			array(
				'sql' => 'SUM(`date`)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'Total',
				'expression' => array(
					'sql' => 'SUM(`date`)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'transactions',
							'name' => 'date' 
						) 
					),
					'functionName' => 'SUM',
					'functionType' => 1 
				),
				'encrypted' => false,
				'columnName' => 'Total' 
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
			array(
				'sql' => 'category',
				'parsed' => true,
				'type' => 'GroupByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'category' 
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
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'category AS `Transacted Type`,
	COUNT(`date`) AS `COUNT(date)`,
	SUM(`date`) AS Total',
		'fromListSql' => 'FROM
	transactions',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'transactions',
	'originalPagesByType' => array(
		'chart' => array( 
			'chart' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'chart' => 'chart',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'chart' => 'chart',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'Transacted Type',
			'COUNT(date)',
			'Total' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			 
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
		'shape' => '0',
		'style' => '0',
		'is100Stacked' => false,
		'logarithmic' => false,
		'legend' => true,
		'grid' => false,
		'names' => true,
		'values' => true,
		'currency' => false,
		'labelField' => 'Transacted Type',
		'labelInterval' => 0,
		'groupChart' => true,
		'width' => 700,
		'height' => 530,
		'preview' => false,
		'animation' => true,
		'ID' => '2d_pie',
		'typeNumber' => 20,
		'type' => '2DPie',
		'is3D' => true,
		'stacked' => false,
		'chartRefresh' => false,
		'chartRefreshTime' => 60,
		'bubbleTransparent' => false,
		'accumInverted' => false,
		'accumulationAppearance' => 0,
		'gaugeAppearance' => 0,
		'lineStyle' => 0,
		'header' => array(
			'text' => 'Types of Property Transacted',
			'type' => 0 
		),
		'footer' => array(
			'text' => '',
			'type' => 0 
		),
		'yAxisLabel' => array(
			'text' => 'rental_price',
			'type' => 0 
		),
		'dataSeries' => array( 
			array(
				'dataField' => 'COUNT(date)',
				'bubbleSize' => '',
				'open' => '',
				'high' => '',
				'low' => '',
				'close' => '',
				'minValue' => '',
				'maxValue' => '',
				'gaugeColorZones' => array( 
					 
				),
				'total' => 'sum' 
			) 
		) 
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
	$runnerTableLabels['transactions_chart_pub'] = array(
	'tableCaption' => 'Transactions Pub',
	'fieldLabels' => array(
		'Transacted_Type' => 'Transacted Type',
		'COUNT_date_' => 'COUNT(date)',
		'Total' => 'Total' 
	),
	'fieldTooltips' => array(
		'Transacted_Type' => '',
		'COUNT_date_' => '',
		'Total' => '' 
	),
	'fieldPlaceholders' => array(
		'Transacted_Type' => '',
		'COUNT_date_' => '',
		'Total' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>